<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Blogs extends Model
{
    use HasFactory, HasSlug;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'blog_categories_id',
        'title',
        'body',
        'slug',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    // /**
    //  * Get the route key for the model.
    //  *
    //  * @return string
    //  */
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    // /**
    // * Get the images.
    // */
    // public function BlogImage()
    // {
    //     return $this->belongsToMany(BlogImage::class, 'blogs_blog_images', 'blogs_id', 'image_id');
    // }

    // /**
    // * Get the Category.
    // */
    // public function BlogCategory()
    // {
    //     return $this->belongsToMany(BlogCategory::class, 'categories_blogs', 'blogs_id', 'blogcategory_id');
    // }
}
