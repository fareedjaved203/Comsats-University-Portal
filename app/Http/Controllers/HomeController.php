<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\StudentCourse;

class HomeController extends Controller
{
    public function welcome(){
        return view ('welcome');
    }
    public function login(){
        return view ('login');
    }
    public function register(){
        return view ('register');
    }
    public function adminLogin(){
        // Cookie::queue(Cookie::forget('admin_id'));
        return view ('Admin');
    }
    public function Teacherlogin(){
        return view ('teacherlogin');
    }
    public function Teacherregister(){
        return view ('teachersignup');
    }
    public function registerAuthenticate(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->intended('admin_dashboard');
    }

    public function loginAuthenticate(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $student = User::where('email', $email)->first();

        if ($student && Hash::check($password, $student->password)) {
            Cookie::queue(Cookie::make('admin_id', $student->id, 60));
            return redirect()->intended('admin_dashboard');
        } else {

            Session::flash('error', 'Invalid email or password');
            return redirect()->back();
        }
    }

    public function userRegister(Request $request)
    {
        $student = new Student;

        //1st name etc is coming from database schema
        //2nd name etc is coming from input type name field
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = bcrypt($request->password);
        $image= $request->file;
        //this if statement will only execute if there is a file
        if($image){
            //bcoz of time() function, every image will have a unique name
            $imagename = time().'.'.$image->getClientOriginalExtension();
            //we will manually create a student folder in public
            //it will store that image in student folder in public
            $request->file->move('student', $imagename);
            $student->image = $imagename;
        }
        
        $student->save();

        Session::flash('success', 'Registered Successfully, Please Login to continue');
        return redirect()->back();
    }

    
    public function userLogin(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $student = Student::where('email', $email)->first();

        if ($student && Hash::check($password, $student->password)) {
            Cookie::queue(Cookie::make('student_id', $student->id, 60));
            return redirect()->intended('home');
        } else {

            Session::flash('error', 'Invalid email or password');
            return redirect()->back();
        }
    }
    
    public function teacherRegisterPost(Request $request){
        $teacher = new Teacher;

        //1st name etc is coming from database schema
        //2nd name etc is coming from input type name field
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->password = bcrypt($request->password);
        $image= $request->file;
        //this if statement will only execute if there is a file
        if($image){
            //bcoz of time() function, every image will have a unique name
            $imagename = time().'.'.$image->getClientOriginalExtension();
            //we will manually create a teacher folder in public
            //it will store that image in teacher folder in public
            $request->file->move('teacher', $imagename);
            $teacher->image = $imagename;
        }
        
        $teacher->save();

        return redirect()->intended('Teacher-Dashboard');
        
    }
    
    public function teacherLoginAuthenticate(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $teacher = Teacher::where('email', $email)->first();

        if ($teacher && Hash::check($password, $teacher->password)) {
            Cookie::queue(Cookie::make('teacher_id', $teacher->id, 60));
            return redirect()->intended('Teacher-Dashboard');
        } else {
            Session::flash('error', 'Invalid email or password');
            return redirect()->back();
        }
    }
    public function thankResponse(){
        $student_id = Cookie::get('student_id'); // get the student's ID from the cookie
        $student = Student::find($student_id); // retrieve the student object from the database
        return view('thankResponse', ['student' => $student]);
    }
    public function aboutus(){
        return view ("aboutus");
    }
    public function contact(){
        return view ("contact");
    }
    public function courseInfo(){
        $student_id = Cookie::get('student_id'); // get the student's ID from the cookie
        $student = Student::find($student_id); // retrieve the student object from the database
        return view('courseInfo', ['student' => $student]);
    }
    public function courses(){
        $data = Course::all();
        return view('courses', ['data' => $data]);
    }
    public function quizDashboard(){
        $student_id = Cookie::get('student_id'); // get the student's ID from the cookie
        $student = Student::find($student_id); // retrieve the student object from the database
        return view('quizDashboard', ['student' => $student]);
    }
    public function quiz(){
        $student_id = Cookie::get('student_id'); // get the student's ID from the cookie
        $student = Student::find($student_id); // retrieve the student object from the database
        return view('quiz', ['student' => $student]);
    }
    public function result(){

        $student_id = Cookie::get('student_id'); // get the student's ID from the cookie
        $student = Student::find($student_id); // retrieve the student object from the database

        $marks = Cookie::get('quizMarks');
        $courseName = Cookie::get('courseName');
        $results = null;

        // Query to store quiz marks in database
        $courseId = DB::table('student_courses')
            ->join('courses', 'student_courses.course_id', '=', 'courses.id')
            ->where('courses.title', $courseName)
            ->select('student_courses.course_id as course_ID')
            ->get();

        if($marks!==null){
        // To store in the database
        $studentQuiz = StudentCourse::where('student_id', $student->id)
            ->where('course_id', $courseId[0]->course_ID)
            ->update(['Quiz1' => $marks]);
        }

        $results = DB::table('students')
            ->join('student_courses', 'students.id', '=', 'student_courses.student_id')
            ->join('courses', 'courses.id', '=', 'student_courses.course_id')
            ->where('students.id', $student_id)
            ->where ('courses.title', $courseName)
            ->select('students.name as student', 'courses.title as title', 'student_courses.Quiz1 as quiz1')
            ->get();
    

        Cookie::queue(Cookie::forget('quizMarks'));
        Cookie::queue(Cookie::forget('courseName'));

        return view('result', ['student' => $student, 'data'=>$results]);
    }
    public function finalExam(){
        $student_id = Cookie::get('student_id'); // get the student's ID from the cookie
        $student = Student::find($student_id); // retrieve the student object from the database
        return view('finalExam', ['student' => $student]);
    }
    public function contactadmin(){
        return view ("Contact_Admin");
    }
    public function lecturer_details(){
        $data = Teacher::all();
        return view ("Lecturer_Details", compact('data'));
    }
    public function StudentDetails(){
        $data = Student::all();
        return view ("StudentDetails", compact('data'));
    }
    public function CourseDetails(){
        $teacher = Teacher::all();
        return view('Course_Details', compact('teacher'));
    }
    public function CourseDetailsPost(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|unique:courses'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('alert-danger','Title already exists. Please provide another title');
        }


        $course = new Course;

        //1st name etc is coming from database schema
        //2nd name etc is coming from input type name field
        $course->teacher_id = $request->input('teacher');
        $course->title = $request->title;
        $course->description = $request->description;
        $image= $request->file;
        //this if statement will only execute if there is a file
        if($image){
            //bcoz of time() function, every image will have a unique name
            $imagename = time().'.'.$image->getClientOriginalExtension();
            //we will manually create a course folder in public
            //it will store that image in course folder in public
            $request->file->move('course', $imagename);
            $course->image = $imagename;
        }
        
        $course->save();
        if ($course->save()) {
            Session::flash('success', 'Course Added Successfully');
            return redirect()->back();
        }
        else{
            Session::flash('error', 'Course Not Added');
            return redirect()->back();
        }
    }
    
    public function accesspage(){
        Cookie::queue(Cookie::forget('quizMarks'));
        Cookie::queue(Cookie::forget('courseName'));
        Cookie::queue(Cookie::forget('student_id'));
        Cookie::queue(Cookie::forget('enrolledCourse'));

        return view ('signup_login_menu');
    }

    public function livesearch(Request $request){
        $output = "";
        // $search = $request ->search;
        $data = Student::where('name','Like','%'.$request ->search.'%')->orWhere('email','Like','%'.$request ->search.'%')->get();

        foreach($data as $student){
            $output.=
            
            '<tr>
                <td> '.$student->name.' </td>
                <td> '.$student->email.' </td>
                <td> '.' <a href="/delete/'.$student->id.'" class="btn btn-danger">'.'Delete</a> '.' </td>
                <td> '.' <a href="/update_view/'.$student->id.'" class="btn btn-info">'.'Update</a> '.' </td>
            </tr>';
        } 
        return response($output);
    }

    public function delete($id){
        $data = Student::find($id);
        if($data){
            $data->delete();
        }
        return redirect()->back();
    }

    public function update_view($id){
        $student = Student::find($id);

        return view('update_page', compact('student'));

    }
    public function update(Request $request, $id){
        $student = Student::find($id);

        $student->name = $request->name;
        $student->email = $request->email;

        $image= $request->file;
        //this if statement will only execute if there is a file
        if($image){
            //bcoz of time() function, every image will have a unique name
            $imagename = time().'.'.$image->getClientOriginalExtension();
            //we will manually create a student folder in public
            //it will store that image in student folder in public
            $request->file->move('student', $imagename);
            $student->image = $imagename;
        }

        $student->save();

        return redirect()->back();
    }
    public function search(Request $request){
        // 2nd search is coming from input field
        $search = $request ->search;
        //here we are using the same $data which we used to get All results from database
        
        $data = Student::where('name','Like','%'.$search.'%')->orWhere('email','Like','%'.$search.'%')->get();


        //compact('data') is having the same $data
        return view('StudentDetails', compact('data'));
    }

    public function error(){
        $student_id = Cookie::get('student_id'); // get the student's ID from the cookie
        $student = Student::find($student_id); // retrieve the student object from the database
        return view('error', ['student' => $student]);
    }
}
