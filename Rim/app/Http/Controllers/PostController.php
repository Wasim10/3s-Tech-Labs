<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Post;

use App\Tag;

use App\User;

use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::orderBy('created_at','desc')->simplePaginate(4);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();

        $tags = Tag::all();

        if($categories->count() == 0 || $tags->count()==0 ){

            Session::flash('info','No Category Exist, or Tags Also, TO Create Post, You Need to Create Category or Tag First');

            return redirect()->back();
        }

        return view('admin.posts.create')->with('categories', $categories)
                                         ->with('tags', $tags);
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
      // dd($request->all());
       

        $this->validate($request,[

            'title' => 'required|max:255|min:5',
            'featured' => 'required|image',
            'content' => 'required',
            'category_id' => 'required',
            'tags' => 'required'
           

            ]);

        $featured = $request->featured;


        $featured_new_name = time().$featured->getClientOriginalName();

        $featured->move('uploads/posts', $featured_new_name);


        $post = Post::create([

            'title' => $request->title,
            'content' => $request->content,
            'featured' => 'uploads/posts/'.$featured_new_name,
            'category_id' => $request->category_id,
            'slug' => str_slug($request->title)


            ]);

        // many to many relationship methadlogy

        $post->tags()->attach($request->tags);

        Session::flash('success','Post Created Successfully');

       // dd($request->all());

        return redirect()->route('posts');
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
        $post = Post::find($id);

        return view('admin.posts.edit')->with('post', $post)
                                       ->with('categories', Category::all())
                                       ->with('tags', Tag::all());
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
        // validate data

        $this->validate($request,[

            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required'

            ]);


        $post = Post::find($id);


        if($request->hasFile('featured')){
              
              $featured = $request->featured;

              $featured_new_name = time(). $featured->getClientOriginalName();

              $featured->move('uploads/posts', $featured_new_name);

              $post->featured =  'uploads/posts/'.$featured_new_name;


        }


        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;

        $post->save();



        // check if new tags are added to a post or not, if yes Store the selected tag in database

        $post->tags()->sync($request->tags);



        Session::flash('success', 'Post Updated Successfully');

        return redirect()->route('posts');

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

        $post  = Post::find($id);

        $post->delete();

        Session::flash('success', 'Post Trashed Successfully');

        return redirect()->back();
    }


    public function trashed(){

        $posts =  Post::onlyTrashed()->get();

        return view('admin.posts.trashed')->with('posts', $posts); 

    }

    public function kill($id){

        $post = Post::withTrashed()->where('id', $id)->first();

        $post->forceDelete();

        Session:: flash('success', 'Trashed Post Deleted Permanently');

        return redirect()->back();


    }


    public function restore($id){

        $post =  Post::withTrashed()->where('id', $id)->first();

        $post->restore();

        Session::flash('success','Successfully Restored a Post');

        return redirect()->route('posts');

    }


}
