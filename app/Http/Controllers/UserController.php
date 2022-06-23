<?php

namespace App\Http\Controllers;

use DB;
use Hash;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Package;
use App\Models\settings;
use App\Models\SocialLogin;
use Illuminate\Http\Request;
use App\Models\Mail\CreateUser;
use App\DataTables\UsersDataTable;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:manage-user|create-user|edit-user|delete-user', ['only' => ['index', 'show']]);
        $this->middleware('permission:create-user', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-user', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-user', ['only' => ['destroy']]);
    }

    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('users.index');
    }

    public function create()
    {
        $roles = Role::all();
        $packages = Package::all();
        // $view =  view('users.create', compact('roles','packages'));
        // return ['html' => $view->render()];
        return view('users.create', compact('roles','packages'));

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'type' => 'required'
            // 'roles' => 'required'
        ]);
        // $input = $request->all();
        // $input['type'] =  $input['roles'];
        // $input['password'] = Hash::make($input['password']);
        // $input['lang'] = setting('default_language');
        // if(!$request->balance){
        //     $input['balance'] = 0;
        // }else{
        //     $input['balance'] = $request->balance;
        // }
        // $input['package_id'] = $request->package_id;
        // if($request->package_id != Null){
        //     $input['subscription_date'] = Carbon::now();
        // }
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if(!$request->balance){
            $user->balance = 0;
        }else{
            $user->balance = $request->balance;
        }
        $user->package_id = $request->package_id;
        if($request->package_id != Null){
            $user->subscription_date = Carbon::now();
        }
        $user->type = $request->type;
        $user->save();

        $user->assignRole($request->type);
        $message = "Welcome" . env('APP_NAME') . "<br/>";
        $message .= "
        <b>Dear </b> $request->name <br/>
        <b>You are added in our app
        <p> Your login Details:</p>
        </b> $request->email<br/>";
        return redirect()->route('users.index')
            ->with('success',  __('User Created successfully.'));
    }

    public function edit($id)
    {
        $query['single'] = User::find($id);
        $query['roles'] = Role::all();
        $query['packages'] = Package::all();
        // $roles = Role::pluck('name', 'name')->all();
        // $userRole = $user->roles->pluck('name', 'name')->all();
        // $packages = Package::pluck('title', 'title')->all();
        // $view =   view('users.edit', compact('user', 'roles', 'userRole','packages'));
        // return ['html' => $view->render()];
        // dd($query['single']);
        return view('users.create', $query);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'same:confirm-password',
            // 'roles' => 'required',
            'type' => 'required'
        ]);
        $user= User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if(!$request->balance){
            $user->balance = 0;
        }else{
            $user->balance = $request->balance;
        }
        $user->package_id = $request->package_id;
        if($request->package_id == Null){
            $user->subscription_date = Null;
        }elseif($request->package_id != Null && $user->package_id == Null || $request->package_id != Null && $user->subscription_date == Null){
            $user->subscription_date = Carbon::now();
        }
        $user->type = $request->type;
        $user->save();

        // $input = $request->all();
        // if (!isset($input['password']) || $input['password'] != '') {
        //     $input['password'] = Hash::make($input['password']);
        // } else {
        //     unset($input['password']);
        // }
        // $user = User::find($id);
        // $user->update($input);
        // DB::table('model_has_roles')->where('model_id', $id)->delete();
        // $user->assignRole($request->input('roles'));
        return redirect()->route('users.index')
            ->with('success',  __('User updated successfully'));
    }

    public function update_profile(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
        ]);
        $input = $request->all();
        $user = User::find($id);
        $this->validate($request, ['profile' => 'required|image']);
        if ($request->hasFile('profile')) {
            $filename = $request->file('profile')->getClientOriginalName();
            $request->file('profile')->storeAs('profile', $filename);
            $input['profile'] = $filename;
        }
        $user->update($input);
        return redirect()->route('user.profile', $id)
            ->with('success',  __('Profile update successfully'));
    }

    public function destroy($id)
    {
            if ($id != 1) {
                $user = User::find($id);
                $social_login = SocialLogin::where('user_id', $id)->get();

                foreach ($social_login as $value) {
                    if ($user->type != 'Admin') {
                        if ($value) {
                            $value->delete();
                        }
                    }
                }
                $user->delete();
                return redirect()->back()->with('success', __('User deleted successfully'));
            } else {
                return redirect()->back()->with('failed', __('Permission Denied.'));
            }
    }
    public function accountStatus($id)
    {
        $user = User::find($id);
        // dd($id);
        if($user->active_status == 1)
        {
            $user->active_status = 0;
            $user->save();
            return redirect()->back()->with('success','User Deactiveted Successfully');
        }
        else
        {
            $user->active_status = 1;
            $user->save();
            return redirect()->back()->with('success','User Activeted Successfully');
        }
    }
    public function profile($id)
    {
        $user = User::find($id);
        return  view('users.profile', compact('user'));
    }
}
