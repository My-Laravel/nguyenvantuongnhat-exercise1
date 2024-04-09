<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $student;
    public function __construct(Student $student){
        $this->student = $student;
    }
    public function updateFirstRow(Request $request)
    {
        $dataInsert = [
            'name' => $request->name,
            'age' => $request->age,
            'location' => $request->location
        ];
    
        // Kiểm tra xem liệu dữ liệu đã được cung cấp đầy đủ hay không
       
            $data = $this->student->updateFirst($dataInsert);
            if ($data) {
                return response()->json('success', 200);
            } else {
                return response()->json('error', 404);
            }
       
    }
    public function deleteRow26()
{
    // Lấy hàng thứ 26 từ bảng students
    $student = Student::skip(25)->take(1)->first();

    if ($student) {
        $student->delete();
        return response()->json('Row 26 deleted successfully.', 200);
    } else {
        return response()->json('Row not found.', 404);
    }
}
public function getStudentsFromPhnomPenhOlderThan20()
{
    $students = Student::where('location', 'Phnom-Penh')
                        ->where('age', '>', 20)
                        ->get();

    return $students;
}
    
}
