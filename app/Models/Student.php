<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function updateFirst($data)
    {
        $student = Student::first();
    
        if ($student) {
            $id = $student->id;
            return DB::table('students')->where('id', $id)->update($data);
        } else {
            return false; // Trả về false nếu không tìm thấy sinh viên đầu tiên
        }
    }
}
