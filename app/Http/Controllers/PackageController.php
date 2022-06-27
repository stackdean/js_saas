<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\DataTables\PackagesDataTable;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PackagesDataTable $dataTable)
    {
        return $dataTable->render('package.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'duration' => ['required'],
            'fees' => ['required'],
            'description' => ['required']
        ]);

        $package = new Package;
        $package->title = $request->title;
        $package->duration = $request->duration;
        $package->fees = $request->fees;
        $package->description = $request->description;
        $package->payment_url = $request->payment_url;
        $package->save();

        return redirect()->route('packages.index')
            ->with('success',  __('Package Created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $query['single']= Package::find($id);
        return view('package.create', $query);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => ['required'],
            'duration' => ['required'],
            'fees' => ['required'],
            'description' => ['required']
        ]);

        $package = Package::find($id);
        $package->title = $request->title;
        $package->duration = $request->duration;
        $package->fees = $request->fees;
        $package->description = $request->description;
        $package->payment_url = $request->payment_url;
        $package->save();
        return redirect()->route('packages.index')
            ->with('success',  __('Package Edited successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->delete();
            return redirect()->back()->with('success', __('Package successfully deleted!'));
    }
}
