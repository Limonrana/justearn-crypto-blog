<?php

namespace App\Models;

use App\Traits\HasCreatedUpdatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, HasCreatedUpdatedBy;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'description',
        'featured_image',
        'alt_text',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
        'visibility',
        'created_by',
        'updated_by'
    ];

    /**
     * This Model relationship with Category Model.
     *
     * @function belongsTo
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    /**
     * This Model relationship with Tag Model.
     *
     * @function belongsTo
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
