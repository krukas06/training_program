<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Repositories\NewsRepository;



use App\Post;
use Illuminate\Database\Eloquent\Builder;

class PostController extends Controller
{


    public function __construct(NewsRepository $n_rep)
    {

        $this->n_rep=$n_rep;
    }

    public function getNews(){
        $news = $this->n_rep->get('*');
        return $news;
    }

    public function list_message(){
        $news =$this->getNews();
        return view('news')->with(array('news'=>$news));
    }



    public function getPost($id){
        $news = $this->n_rep->one($id);
        //$pages->img = json_decode($pages->img);
        return $news;
    }

    public function deletePost(Request $request){
        $data = $request->all();
        $post = Post::find($data['id']);
        $post->delete();
        return redirect("/list");
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts =$this->getNews();
        return view('list_news')->with(array('posts'=>$posts));
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
        //

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
        $post = new  Post;
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
        $news=$this->getPost($id);
        dd($news);
        return view('post')->with(array('news'=>$news));
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
