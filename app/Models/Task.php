<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks';

    // public function getNameAttribute($value){
    //     return '---'.ucfirst($this->name);

    // }

    // public function getNameAttribute($value){
    //     return ucfirst($value);

    // }
    public function getStatusTextAttribute($value){
        if($this->status ==1){
            return "Done";
        }else{
            return ucfirst($value);
        }
        

    }



    public function setNameAttribute($value){
        $this->attributes['name'] = ucfirst($value);

    }


    protected $fillable = [
        'name',
        'content',
        'status',
        'deadline',
        'priority'

    ];

    const STATUS = [
        'hide' => 2,
        'display' => 1

    ];


    const PRIORITY = [
        'yes' => 1,
        'no' => 0

    ];

    
}
