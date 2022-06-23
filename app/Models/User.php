<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Hash;
// use Laravel\Sanctum\HasApiTokens;
class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    // use HasApiTokens;
    protected $appends = ['package_title'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type', 'profile','lang','balance',
        'package_id',
        'subscription_date',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function packages(){
        return $this->belongsTo(Package::class,'package_id','id');
    }

    public function loginSecurity()
    {
        return $this->hasOne('App\Models\LoginSecurity');
    }
    public function currentLanguage()
    {
        return $this->lang;
    }

    public function getPackageTitleAttribute(){
        return ($this->packages) ?  $this->packages->title : '---';
    }



}
