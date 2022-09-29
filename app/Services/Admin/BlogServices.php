<?php

namespace App\Services\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class BlogServices
{
    /**
     * Get the blog post listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Post[] | LengthAwarePaginator
     */
    public function getBlogs(Request $request) : LengthAwarePaginator
    {
        $search = $request->get('q');
        if (isset($search) && !empty($search)) {
            return Post::with(['createdBy', 'updatedBy'])
                ->when($search, function ($query) use ($search) {
                    return $query->where('title', 'like', "%{$search}%");
                })->latest()->paginate('10');
        }  else {
            return Post::with(['createdBy', 'updatedBy'])
                ->latest()->paginate('10');
        }
    }

}
