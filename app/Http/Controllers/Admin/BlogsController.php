<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogBlogCategories;
use App\Models\BlogCategories;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blogs::orderBy('id', 'DESC')->paginate(7);
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = BlogCategories::all();
        return view('admin.blogs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blogs = $request->validate([
            'category' => 'required',
            'title' => 'required',
            'intro' => 'required',
            'body' => 'required',
        ]);

        try {
            DB::beginTransaction();
            
            $blogs = Blogs::create([
                'title' => $request->title,
                'intro' => $request->intro,
                'body' => $request->body,
                'blog_categories_id' => $request->category,
            ]);

            BlogBlogCategories::create([
                'blogs_id' => $blogs->id,
                'blogcategory_id' => $blogs->blog_categories_id,
            ]);

            if(!$blogs){
                DB::rollBack();

                return back()->with('error', 'Something went wrong while saving user data');
            }

            DB::commit();
            return redirect()->route('blogs.index')->with('success', 'User Stored Successfully.');


        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blogs = Blogs::where('id', $id)->first();
        $category = BlogCategories::where('id', $blogs->blog_categories_id)->first();

		return view( 'admin.blogs.show', compact('blogs', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blogs = Blogs::find( $id );

		return view( 'admin.blogs.edit' )
			->with( 'blogs', $blogs );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blogs = $request->validate([
            'category' => 'required',
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
        ]);

        try {
            DB::beginTransaction();

            $blogs = Blogs::find($id);
            if ($blogs) {
                $blogs->blog_categories_id = $request->category;
                $blogs->title = $request->title;
                $blogs->body = $request->body;
                $blogs->type_id = $request->slug;
                
                $blogs->save();
            } else {
                dd("Product not found");
            }
            
            BlogBlogCategories::where('blog_categories_id', $id)->delete();
            BlogBlogCategories::create([
                'blogs_id' => $blogs->id,
                'blog_categories_id' => $blogs->blog_categories_id,
            ]);

            if(!$blogs){
                DB::rollBack();

                return back()->with('error', 'Something went wrong while saving user data');
            }

            DB::commit();
            return redirect()->route('blogs.index')->with('success', 'User Stored Successfully.');


        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blogs = Blogs::find($id);
        $blogs->delete();
        return redirect()->route('blogs.index');
    }
}
