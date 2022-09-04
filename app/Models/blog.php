<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Spatie\Ignition\ErrorPage\title;

class blog extends Model
{
    use HasFactory;

//    protected static $fillable=['blog_title','blog_author','blog_description','image'];

    private static $blog, $blogImage, $blogImageName, $blogImageDirectory, $blogImageUrl;


    public static function saveImage($request, $existingImage = null)
    {
        self::$blogImage  = $request->file('image');
        if (self::$blogImage)
        {
            if (file_exists($existingImage))
            {
                unlink($existingImage);
            }
            self::$blogImageName = time().'.'.self::$blogImage->getClientOriginalExtension();
            self::$blogImageDirectory = 'upload-files/';
            self::$blogImage->move(self::$blogImageDirectory,self::$blogImageName);
            self::$blogImageUrl = self::$blogImageDirectory.self::$blogImageName;
        }else
        {
            self::$blogImageUrl = $existingImage;
        }
        return self::$blogImageUrl;
    }


    public static function createBlog($request)
    {
        self::$blog = new blog();
        self::$blog->blog_title = $request->blog_title;
        self::$blog->blog_author = $request->blog_author;
        self::$blog->blog_description = $request->blog_description;
        self::$blog->image = self::saveImage($request);
        self::$blog->save();
    }

    public static function updatedBlog($request)
    {
        self::$blog = blog::find($request->id);
        self::$blog->blog_title = $request->blog_title;
        self::$blog->blog_author = $request->blog_author;
        self::$blog->blog_description = $request->blog_description;
        self::$blog->image = self::saveImage($request, self::$blog->image);
        self::$blog->save();
    }
}
