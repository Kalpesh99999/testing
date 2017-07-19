<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;

class PurchaseController extends Controller
{
    //This method will add a purchase to the purchase log
    public function addPurchase()
    {
        $coursePurchased = Course::find(1); //Finds the course with ID =2
        $coursePurchased->Purchases()->create(['path'=>'example.jpg']); //Create entry in DB
         $this->getUserPurchases();
        // return view('contact');
    }

    //This method will retrieve purchases for a specific user
    public function getUserPurchases()
    {
        $user = User::FindorFail(1);
        $purchases = $user->purchases;
        foreach ($purchases as $purchase){
            echo $purchase->path."<br>";
        }
    }




}
