<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'tel', 'genre'
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

    public function roles(){
        return $this->belongsToMany('App\Role'); 
    }

    public function entreprises(){
        return $this->hasMany('App\Entreprise'); 
    }

    public function hasAnyRoles($roles){
            if($this->roles()->whereIn('name',$roles)->first()){
                return true;
            }
            return false;
    }

    public function hasRole($role){
        if($this->roles()->where('name',$role)->first()){
            return true;
        }
        return false;
    }

    public function hasSave($entreprise){
        if($this->entreprises()->where('id',$entreprise->id)->first()==auth()->user()->id){
            return true;
        }
        return false;
    }
}
