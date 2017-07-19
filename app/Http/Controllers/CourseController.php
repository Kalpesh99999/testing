<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Lesson;
use App\Oem;
use PhpParser\Node\Name;

class CourseController extends Controller
{
    //Non Ajax call to deliver Course Page to list all brands
    public function index() {
       return view('courses/allOemsPage');
    }

    //Ajax call to display content of the Course Page to list all brands
    public function getCourses() {
        $brands = Oem::all();
        return response()->json(array('data'=>$brands));
    }

    //Non Ajax call to return the page that displays courses of a specific OEM
    public function oemCourses(OEM $oem_name_slug) {
        return view('courses/oemCoursesPage',compact('oem_name_slug'));
    }

    //Ajax call to display content of the Course Page for a specific OEM
    public function getOemCourses($id) {
        $brands = Course::all()->where('oem_id','=',$id);
        return response()->json(array('data'=>$brands));
    }




    //Non Ajax call to return the page that displays courses of a specific OEM
    public function getCourseList($id,$course_id)
    {
        return view('courses.coursePage');
    }

    //Ajax call to display Course Curriculum
    public function getCourseCurriculum($id) {
        $lessons = Lesson::all()->where('course_id','=', $id);
       return response()->json(array('data'=>$lessons));

    }
    //Non Ajax call to return the post page for a selected course
    public function getLesson($oem_id,$course_id,$lesson_id)
    {
        return view('courses.lessonPage');
    }

    //Ajax call to display content of the Course Page to list all brands in dropdown menu
    public function getOemList() {
        $oems = Oem::all();
        $data = view("partialviews.dropdownOem",compact('oems'))->render();
        return response()->json(array($data));
    }
    //Ajax call to display content of the Course Page to list all brands in dropdown menu
    public function getdropDownCourseList($id) {
        $courses = Course::all()->where('oem_id',$id);
        $data = view("partialviews.dropdownCourse",compact('courses'))->render();
        return response()->json(array($data));
    }

    //Ajax call to display content of the Course Page to list all brands in dropdown menu
    public function showCourses($id) {
        $lessons = Lesson::all()->where('course_id',$id);
        $data = view("partialviews.lessonResults",compact('lessons'))->render();
        return response()->json(array('data'=>$data));

    }
}

