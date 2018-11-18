<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
        'project_id',
        'company_id',
        'user_id',
        'days',
        'hours'
    ];

    public function user(){
        return $this->belongTo('App\User');
    }

    public function project(){
        return $this->belongTo('App\Project');
    }

    public function company(){
        return $this->belongTo('App\Company');
    }

    public function users(){
        return $this->belongToMany('App\User');
    }
}
