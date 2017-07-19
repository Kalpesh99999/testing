<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::all()->toArray();
        return view('lessons.index', compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //If there is a validate error then ths gets called again.
        return view('lessons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate before store
        $this->validate($request, array( // Recheck validation rules to make it stricter
                'description' => 'required|max:255',
                'course_id' => 'required',
                'Token_price_30' => 'required|max:255',
                'Token_price_60' => 'required|max:255',
                'Token_price_90' => 'required|max:255',
                'youtube_id' => 'required|max:255',
                'vimeo_id' => 'required|max:255',
                'lesson_name_slug' => 'required|max:255'
        ));

        //Store in the database

        $lesson = new Lesson;
        $lesson->name = "name"; //$request->name;
        $lesson->description = "desc"; //$request->description;
        $lesson->course_id = 1;//$request->course_id;
        $lesson->save();

        //Show a message for success
        Session::flash('success','The lesson was successfully created!');

        //After store, then do a redirect

        return redirect()->route('lessons.show', $lesson->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('lessons.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesson = Lesson::find($id);
        return view('lessons.edit', compact('lesson','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lesson = Lesson::find($id);
        $lesson->Name = $request->get('Name');
        $lesson->description = $request->get('description');
        $lesson->youtube_id = $request->get('youtube_id');
        $lesson->vimeo_id = $request->get('vimeo_id');
        $lesson->Token_price_30 = $request->get('Token_price_30');
        $lesson->Token_price_60 = $request->get('Token_price_60');
        $lesson->Token_price_90 = $request->get('Token_price_90');
        $lesson->lesson_name_slug = strtolower(str_replace(" ", "-", trim($request->get('Name'))));

        $lesson->save();
        return redirect()->route('lessons.show', $lesson->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lesson = Lesson::find($id);
        $lesson->delete();
        return redirect()->route('lessons.index');
    }
}
