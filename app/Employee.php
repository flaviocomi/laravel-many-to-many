<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'lastname'
    ];

    public function user() {
        return $this -> belongsTo(User::class);
    }

    public function tasks(){
        return $this -> belongsToMany(Task::class);
    }
}
