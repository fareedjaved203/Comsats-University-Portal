<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Course;
use App\Models\StudentCourse;
use App\Models\User;
use App\Models\Teacher;
use Mockery\Undefined;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class, 'welcome']);
// Route::get('/register', [HomeController::class, 'register']);
// Route::post('/register', [HomeController::class, 'registerAuthenticate']);

Route::get('/register', [HomeController::class, 'register']);
Route::post('/register', [HomeController::class, 'userRegister']);

Route::get('/', [HomeController::class, 'login']);
Route::get('/login', [HomeController::class, 'login']);
Route::post('/login', [HomeController::class, 'userLogin']);


Route::get('/Teacherregister', [HomeController::class, 'Teacherregister']);
Route::post('/Teacherregister', [HomeController::class, 'teacherRegisterPost']);

Route::get('/Teacherlogin', [HomeController::class, 'Teacherlogin']);
Route::post('/Teacherlogin', [HomeController::class, 'teacherLoginAuthenticate']);

Route::get('/admin', [HomeController::class, 'adminLogin']);
Route::post('/admin', [HomeController::class, 'loginAuthenticate']);

Route::get('/admin_dashboard', function () {
  $admin_id = Cookie::get('admin_id'); // get the admin's ID from the cookie
  $admin = User::where('email', $admin_id)->first(); // retrieve the student object from the database

  $countStudent = DB::table('students')->count();
  $countCourse = DB::table('student_courses')->count();
  $countTeacher = DB::table('teachers')->count();
  return view ('admin_dashboard', ['course' => $countCourse,'student' => $countStudent,'teacher' => $countTeacher, 'admin' => $admin ]);
});
Route::get('/home', function () {
  $student_id = Cookie::get('student_id'); // get the student's ID from the cookie
  $student = Student::find($student_id); // retrieve the student object from the database

  //Enroll Course
  $course1 = Cookie::get('enrolledCourse');
  if($course1!==null){
    $studentCourse = new StudentCourse;

    $course = Course::find($course1);
      //  dd("This is course".$course);

    $studentCourse->student_id = $student->id;
    $studentCourse->course_id = $course->id;
    $studentCourse->save();

    Cookie::queue(Cookie::forget('enrolledCourse'));
  }

//quiz marks

$courses = DB::table('courses')
  ->join('teachers', 'courses.teacher_id', '=', 'teachers.id')
  ->join('student_courses', 'courses.id', '=', 'student_courses.course_id')
  ->select('courses.title as course_title', 'teachers.name as teacher_name', 'student_courses.student_id')
  ->where('student_courses.student_id', '=', $student->id)
  ->get();


  return view('home', ['courses' => $courses,'student' => $student ]);
});
Route::get('/home/courseInfo/quizDashboard/quiz/thankResponse', [HomeController::class, 'thankResponse']);
Route::get('/aboutus', [HomeController::class, 'aboutus']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/home/courseInfo', [HomeController::class, 'courseInfo']);
Route::get('/home/courses', [HomeController::class, 'courses']);
Route::post('/home/courses', [HomeController::class, 'coursesPost']);
Route::get('/home/courseInfo/quizDashboard', [HomeController::class, 'quizDashboard']);
Route::get('/home/courseInfo/quizDashboard/quiz', [HomeController::class, 'quiz']);
Route::get('/home/courseInfo/result', [HomeController::class, 'result']);
Route::get('/home/courseInfo/finalExam', [HomeController::class, 'finalExam']);
Route::get('/admin_dashboard/contact', [HomeController::class, 'contactadmin']);
Route::get('/admin_dashboard/lecturer_details', [HomeController::class, 'lecturer_details']);
Route::get('/admin_dashboard/student_details', [HomeController::class, 'StudentDetails']);

Route::get('/livesearch',[HomeController::class, 'livesearch']);
Route::get('/delete/{id}',[HomeController::class, 'delete']);
Route::post('/update/{id}',[HomeController::class, 'update']);
Route::get('/update_view/{id}',[HomeController::class, 'update_view']);
Route::get('/search',[HomeController::class, 'search']);

Route::get('/admin_dashboard/course_details', [HomeController::class, 'CourseDetails']);
Route::post('/admin_dashboard/course_details', [HomeController::class, 'CourseDetailsPost']);



Route::get('/Teacher-Dashboard', function () {
  $admin_id = Cookie::get('teacher_id'); // get the admin's ID from the cookie
  $admin = Teacher::find($admin_id)->first(); // retrieve the student object from the database

  $countStudent = DB::table('student_courses')
    ->join('courses', 'student_courses.course_id', '=', 'courses.id')
    ->join('teachers', 'courses.teacher_id', '=', 'teachers.id')
    ->where('teachers.name', $admin->name)
    ->count();
  
  $countCourse = DB::table('courses')
    ->join('teachers', 'courses.teacher_id', '=', 'teachers.id')
    ->where('teachers.id', $admin->id)
    ->count();
  
  return view ('Teacher-Dashboard', ['course' => $countCourse,'student' => $countStudent]);
});

Route::get('/accesspage', [HomeController::class, 'accesspage']);

Route::fallback(function () {
  $student_id = Cookie::get('student_id'); // get the student's ID from the cookie
  $student = Student::find($student_id); // retrieve the student object from the database
  return response()->view('errors.404', ['student' => $student], 404);
});

