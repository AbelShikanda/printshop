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
            'subtitle' => 'required',
            'body' => 'required',
        ]);

        try {
            DB::beginTransaction();
            
            $blogs = Blogs::create([
                'title' => $request->title,
                'sub_title' => $request->subtitle,
                'body' => $request->body,
                'blog_categories_id' => $request->category,
            ]);

            BlogBlogCategories::create([
                'blogs_id' => $blogs->id,
                'blog_categories_id' => $blogs->blog_categories_id,
            ]);

            if(!$blogs){
                DB::rollBack();

                return back()->with('error', 'Something went wrong while saving blog data');
            }

            DB::commit();
            return redirect()->route('blogs.index')->with('success', 'blog Created Successfully.');


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
        $category = BlogCategories::find($id);
        $categories = BlogCategories::all();

		return view('admin.blogs.edit', with([
            'blogs' => $blogs,
            'categories' => $categories,
            'category' => $category,
        ]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blogs = $request->validate([
            'category' => '',
            'title' => '',
            'subtitle' => '',
            'slug' => '',
            'body' => '',
        ]);

        try {
            DB::beginTransaction();

            $blogs = Blogs::find($id);
            if ($blogs) {
                $blogs->blog_categories_id = $request->category;
                $blogs->title = $request->title;
                $blogs->sub_title = $request->subtitle;
                $blogs->body = $request->body;
                $blogs->slug = $request->slug;
                
                $blogs->save();
            } else {
                dd("Product not found");
            }
            
            BlogBlogCategories::where('blogs_id', $blogs->id)->delete();
            BlogBlogCategories::create([
                'blogs_id' => $blogs->id,
                'blog_categories_id' => $blogs->blog_categories_id,
            ]);

            if(!$blogs){
                DB::rollBack();

                return back()->with('error', 'Something went wrong while saving blogs data');
            }

            DB::commit();
            return redirect()->route('blogs.index')->with('success', 'Blogs Stored Successfully.');


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
