<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email'
    ];


    public function employeedetail()
    {
        return $this->hasMany(EmployeeDetail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
