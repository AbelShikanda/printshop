<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogCategories = BlogCategories::latest()->get();
        return view('admin.categories.blogCategories.index', with([
            'blogCategories' => $blogCategories,
        ]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.blogCategories.create', with([]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        try {
            DB::beginTransaction();

            $blogs = BlogCategories::create([
                'name' => $request->input('name'),
            ]);

            if(!$blogs){
                DB::rollBack();

                return back()->with('error', 'Something went wrong while saving user data');
            }

            DB::commit();
            return redirect()->route('blog_categories.index')->with('success', 'User Stored Successfully.');


        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blogs = BlogCategories::find( $id );

		return view( 'admin.blogs.categories.edit' )
			->with( 'blogs', $blogs );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => '',
            'slug' => '',
        ]);

        try {
            DB::beginTransaction();

            $blogs = BlogCategories::find($id);
            if ($blogs) {
                $blogs->name = $request->name;
                $blogs->slug = $request->slug;
                
                $blogs->save();
            } else {
                dd("category not found");
            }

            if(!$blogs){
                DB::rollBack();

                return back()->with('error', 'Something went wrong while saving user data');
            }

            DB::commit();
            return redirect()->route('blog_categories.index')->with('success', 'User Stored Successfully.');


        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = BlogCategories::find($id);
        $category->delete();
        return redirect()->route('product_categories.index')->with('message', 'category Deleted Successfully.');
    }
}
