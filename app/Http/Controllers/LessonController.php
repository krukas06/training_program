<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Repositories\LessonsRepository;
use App\lesson;


class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(LessonsRepository $l_rep)
    {

        $this->l_rep=$l_rep;
    }


    public function getLessons(){
        $lessons = $this->l_rep->get('*');
        return $lessons;
    }

    public function getLesson($id){
        $lessons = $this->l_rep->one($id);
        //$pages->img = json_decode($pages->img);
        return $lessons;
    }

    public function index()
    {
        //

        $lessons =$this->getLessons();
        return view('list_lessons')->with(array('lessons'=>$lessons));

    }

    public function deletelesson(Request $request){
        $data = $request->all();
        $post = Lesson::find($data['id']);
        $post->delete();
        return redirect("/listcurs");
    }

    public function list_lessons()
    {
        //

        $lessons =$this->getLessons();
        return view('del_lesson')->with(array('lessons'=>$lessons));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('img')) {

            // dd($request);
            //$destinationPath = 'content_images/';
            $filename = $request['img']->getClientOriginalName();
            $file = $request->file('img');
            $file->move(public_path('img'), $filename);
        }
        $data = $request->all();
        $data['img'] = $filename;
        //$data['img'] = json_encode($names);
        $post = new  Lesson;
        $post ->fill($data);
        $post ->save();
        return redirect('/admin');

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
        $lessons=$this->getLesson($id);
        //dd($lessons);
        return view('lesson')->with(array('lessons'=>$lessons));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
