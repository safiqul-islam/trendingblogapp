<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;



class Blogcontroller extends Controller
{
    public $blog, $blogs;

    public function home()
    {
        $this->blogs = blog::all();
        return view('blog.home',
        [
            'blogs'=>$this->blogs,
        ]);
    }

    public function addblog()
    {
        return view('blog.addblog');
    }

    public function manageblog()
    {
        $this->blogs = blog::orderBy('id','DESC')->get();
        return view('blog.manageblog',[
           'blogs' =>  $this->blogs,
        ]);

    }


    public function newblog(Request $request)
    {


//        $this->blog= new blog();
//        $this->blog->blog_title = $request->blog_title;
//        $this->blog->blog_author = $request->blog_author;
//        $this->blog->blog_description = $request->blog_description;
//        $this->blog->image = $request->image;
//        $this->blog->save();

//        blog::create([
//            'blog_title' => $request->blog_title,
//            'blog_author' => $request->blog_author,
//            'blog_description' => $request->blog_description,
//            'image' => $request->image,
//        ]);
//        blog::createBlog($request->except('_token'));


        $this->blog = new blog();
        $this->blog->createBlog($request);
        return redirect()->back()->with('message','Blog has been created successfully.');


    }

    public function editblog($id)
    {
        $this->blog = blog::where('id',$id)->first();
        return view('blog.editblog',[
            'blog' =>  $this->blog,
        ]);
    }


    public function detailsblog($id)
    {
        $this->blog = blog::where('id',$id)->first();
        return view('blog.detailsblog',[
            'blog' =>  $this->blog,
        ]);
    }


    public function updateblog(Request $request)
    {
        blog::updatedBlog($request);
        return redirect('/manage-blog');
    }


    public function deleteblog($id)
    {
        $this->blog = blog::find($id);
        if (file_exists($this->blog->image))
        {
            unlink($this->blog->image);
        }
        $this->blog->delete();
        return redirect()->back()->with('message','Blog has been deleted successfully.');
    }

}
