<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use App\User;

class AjaxController extends Controller
{
    //
    public function updateCustomerRecord(Request $request)
    {
        // do something here
   //     $data = $request->all(); // This will get all the request data.
      //  $brands = Course::all()->where('oem_id','=',$id);
        $data = view("trainers.Adroit")->render();
        return response()->json(array($data));
    }
    //Course Page : Buy Course Button Pressed
    public function getCourseInfo(Request $request){

        $trainer_btn_id = $request->input('id');
        $course_id = explode("_", $trainer_btn_id)[1];
        if (explode("_", $trainer_btn_id)[0] == 'TrainerView'){
            //"See Trainer Profile" button was clicked

            //Find which
            return response()->json(array(view("trainers.Adroit")->render()));
        }
        else{
            //"Buy Course" button was clicked
            return response()->json(array(view("partialviews.buyCourse",compact('course_id'))->render()));
        }
    }

    //Course Page : Buy Course Selections made by user
    public function selections(Request $request){
     //   $selected_type = $request->input('id');
          $course_id = explode("_", $request->input('id'))[1];
          $value = $request->input('selected');
        if (0){
            return response()->json(array("id"=>1,"balance_open"=>2));
        }
        else{
            $userBalance = $this->userTokenBalance(1);
            $coursePrice = $this->getCoursePrice($course_id,$value);
            $closingBalance = round($userBalance - $coursePrice,4);
            return response()->json(array("Wopen"=>$userBalance,"Cprice"=>$coursePrice,"Wclose"=>$closingBalance,"id"=>$course_id));
        }
    }

    //Query the Users Table to get the User Token Balance
    private function userTokenBalance($id){
        return User::where('id',$id)->value('TokenBalance');
    }

    //Query the Courses Table to get the Pricing of the course selected
    private function getCoursePrice($id,$value){
        if($value =='option1' ){
            return Course::where('id',$id)->value('Price1');
        }
        elseif ($value=='option2'){
            return Course::where('id',$id)->value('Price2');
        }
        else{
            return Course::where('id',$id)->value('Price3');
        }

    }




}



