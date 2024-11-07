<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogBlogImages;
use App\Models\BlogImages;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class BlogImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogImages = BlogImages::latest()->get();
        return view('admin.images.blogImages.index', with([
            'blogImages' => $blogImages,
        ]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $blogs = Blogs::all();
        $blogIdsWithImages = BlogImages::pluck('blogs_id')->toArray();
        $blogs = Blogs::whereNotIn('id', $blogIdsWithImages)->get();
        return view('admin.images.BlogImages.create', with([
            'blogs' => $blogs,
        ]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'blog' => 'required',
            'filepath' => 'required',
            'full' => 'required',
        ]);

        $file = $request->file('filepath');

        if (isset($file)) {
            $file = $request->file('filepath');
            $currentDate = now()->toDateString();
            $fileName = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

            // Create new ImageManager instance with desired driver
            $manager = new ImageManager(Driver::class); // or ['driver' => 'gd']

            // Read the image
            $image = $manager->read($file->getPathname());

            // Resize and crop the image to a 2:3 aspect ratio (800x1200)
            $croppedImage = $image->resize(1001, 667);

            // Save the resized and cropped image to storage
            $croppedImagePath = 'img/blogs/' . $fileName;
            Storage::disk('public')->put($croppedImagePath, (string) $croppedImage->toJpeg());
        } else {
            return response()->json(['error' => 'No file uploaded'], 400);
        }

        try {
            DB::beginTransaction();
            // Logic For Save User Data

            $img = BlogImages::create([
                'blogs_id' => $request->input('blog'),
                'thumbnail' => $fileName,
                'full' => $request->input('full'),
            ]);

            BlogBlogImages::create([
                'blogs_id' => $request->input('blog'),
                'blog_images_id' => $img->id,
            ]);

            if (!$img) {
                DB::rollBack();

                return back()->with('message', 'Something went wrong while saving user data');
            }

            DB::commit();
            return redirect()->route('blog_images.index')->with('message', 'Image Stored Successfully.');
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
        $image = BlogImages::find($id);
        $blog = Blogs::where('id', $image->blogs_id)->first();
        $blogs = Blogs::all();
        return view('admin.images.BlogImages.edit')->with([
            'blog' => $blog,
            'blogs' => $blogs,
            'image' => $image,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'blog' => 'required',
            'filepath' => '',
            'full' => '',
        ]);

        $file = $request->file('filepath');

        if (isset($file)) {
            $file = $request->file('filepath');
            $currentDate = now()->toDateString();
            $fileName = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

            // Create new ImageManager instance with desired driver
            $manager = new ImageManager(Driver::class); // or ['driver' => 'gd']

            // Read the image
            $image = $manager->read($file->getPathname());

            // Resize and crop the image to a 2:3 aspect ratio (800x1200)
            $croppedImage = $image->resize(1001, 667);

            if (!Storage::disk('public')->exists('img/blogs')) {
                Storage::disk('public')->makeDirectory('img/blogs');
            }
            
            // Save the resized and cropped image to storage
            $croppedImagePath = 'img/blogs/' . $fileName;
            Storage::disk('public')->put($croppedImagePath, (string) $croppedImage->toJpeg());
        } else {
            $fileName = '';
        }

        try {
            DB::beginTransaction();
            // Logic For Save User Data

            $img = BlogImages::find($id);
            if ($img) {
                if ($file) {
                    Storage::delete($img->thumbnail);
                    $img->thumbnail = $fileName;
                }
                $img->full = $request->full;
                $img->blogs_id = $request->blog;


                $img->save();
            } else {
                dd("Image not found");
            }

            BlogBlogImages::where('blog_images_id', $id)->delete();
            BlogBlogImages::create([
                'blogs_id' => $request->input('blog'),
                'blog_images_id' => $img->id,
            ]);

            if (!$img) {
                DB::rollBack();

                return back()->with('message', 'Something went wrong while saving user data');
            }

            DB::commit();
            return redirect()->route('blog_images.index')->with('message', 'Image Stored Successfully.');
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
        $img = BlogImages::find($id);
        // Delete the image file from storage
        if ($img && $img->filepath) {
            Storage::delete($img->filepath);
        }
        $img->delete();
        return redirect()->route('blog_images.index')->with('message', 'Image Deleted Successfully.');
    }
}
