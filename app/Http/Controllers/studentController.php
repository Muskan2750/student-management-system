<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
     public function addStudent(Request $req){
        $students = DB::table('students')->orderBy('roll_number', 'asc')->get();
        $students = DB::table('students')
        ->insert(
            [
            // 'roll_number'=>$req->roll_number ,
            'name'=>$req->name,
            'password'=>$req->password,
            'email'=>$req->email,
            'fname'=>$req->fname,
            'contact'=>$req->contact,
            'dob'=>$req->dob,
            'add'=>$req->add,
            'course'=>$req->course,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);

            return back()->with('success', 'Student added successfully!');
    }

    public function login(){
        return view('login');
    }


    public function showStudent()
    {
        $students = DB::table('students')->get();
        return view('new')->with('students',$students);
    }



    public function singleStudentData($id)
    {
        // Retrieve the student record by ID
        $students =DB::table('students')->find($id);
        if(!$student){
            return redirect()->route('addStudent');
        }
        return view('profile',['stud' =>$student]);
    }
    
    // public function Updateform($id){
    //     $students = DB::table('students')->get();
    //     return veiw('Update', compact('students'));
    
    // }

    public function Updateform($id){
    $student = DB::table('students')
                ->where('roll_number', $id)
                ->first(); 
    
    return view('Update', compact('student'));
}


    public function Updatestudent(Request $req,$id){
        $req->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',]);

           $dataToUpdate = [
            // 'roll_number'=>$req->roll_number, 
            'name'=>$req->name,
            // 'password'=>$req->password,
            'email'=>$req->email,
            'fname'=>$req->fname,
            'contact'=>$req->contact,
            'dob'=>$req->dob,
            'add'=>$req->add,
            'course'=>$req->course,
            'updated_at'=>now(),
        ];
        if ($req->filled('pass')) {
        $dataToUpdate['password'] = bcrypt($req->pass);
        }


        $updated = DB::table('students')
        ->where('roll_number', $id)
        ->update($dataToUpdate);

        if($updated){
            return redirect()->route('profile',$id)->with('success', 'Student updated successfully!');
        }
        else{
            return "<h1>Data not submitted!!</h1>";
        }
    }

    public function profile($id) {
        $user = DB::table('students')->where('roll_number', $id)->first();
    if (!$user) {
        return redirect()->route('array')->with('error', 'Student not found');
    }
        return view('profile',compact('user'));
        
    }


    public function deleteStudent($id){
            // return"<h1>test $id</h1>";
        $student_delete = DB::table('students')->where('roll_number',$id)->delete();
        if ($student_delete){
            return redirect()->route('array')->with('success', 'Student deleted successfully!');;
        }
        else{
            return "404 | not found ||";
        }
    }



public function register(Request $request){
   $user = DB::table('students')->where('name', $request->name)->first();
    if ($user && $user->password == $request->password) {
        
        $students = DB::table('students')->get();
        return view('new', compact('students'));
    }
    else {
        return back()->with('error', 'Invalid username or password');
    }
}


public function home(){
    $totalStudents = DB::table('students')->count();
    return view('home', compact('totalStudents'));
}


}

