<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Products extends Model
{
    use HasFactory, HasSlug;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'categories_id',
        'colors_id',
        'sizes_id',
        'materials_id',
        'type_id',
        'sku',
        'name',
        'slug',
        'description',
        'meta_keywords',
        'price',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
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
    // public function ProductImage()
    // {
    //     return $this->belongsToMany(ProductImage::class, 'products_product_images', 'products_id', 'image_id');
    //     // return $this->hasMany(ProductImage::class,'products_id', 'id');
    // }
    
    // /**
    // * Get the Category.
    // */
    // public function Category()
    // {
    //     return $this->belongsToMany('App\Models\Category', 'categories_products', 'id');
    // }
    
    // /**
    // * Get the Size.
    // */
    // public function Size()
    // {
    //     return $this->belongsToMany(Size::class);
    // }
    
    // /**
    // * Get the Color.
    // */
    // public function Color()
    // {
    //     return $this->belongsToMany(Color::class);
    // }
    
    // /**
    // * Get the ProductType.
    // */
    // public function ProductType()
    // {
    //     return $this->belongsToMany(ProductType::class, 'products_product_types', 'products_id', 'id');
    // }
    
    // /**
    // * Get the Material.
    // */
    // public function Material()
    // {
    //     return $this->belongsTo('App\Models\Material', 'materials_id', 'id');
    // }
    
    
    // /**
    //  * The attributes that should be cast.
    //  *
    //  *
    //  */
    // public function Order_Items() {
    //     return $this->hasMany(Order_Items::class);
    // }
}
