<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    

    protected $fillable = ['code', 'project', 'semester', 'mata_kuliah', 'description'];

    public function course(){
        return $this->belongsTo(course::class, 'mata_kuliah', 'course_code');
    }

    public function students(){
        return $this->belongsToMany(student::class, 'members', 'project_id', 'nim')->withPivot('created_at');
    }
    // private static $projects = [
    //     [
    //         'title' => 'Calculator',
    //         'code' => 'cal',
    //         'course' => 'Algorith programming'
    //     ],
    //     [
    //         'title' => 'Accounting',
    //         'code' => 'acc',
    //         'course' => 'web programming'
    //     ],
    //     [
    //         'title' => 'student',
    //         'code' => 'stu',
    //         'course' => 'web programming'
    //     ]
    // ];

    // public static function allData(){
    //     return collect (self::$projects);
    // }

    // public static function dataWithCode($code){
    //     $allProject = static::allData();
    //     return $allProject->firstWhere('code', $code);
    // }
    

}

