<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'Students';
    protected $PrimaryKey = 'id';
    protected $fillable = ['id' , 'name' , 'password' , 'email'];
    public function index()
    {

    }
}
