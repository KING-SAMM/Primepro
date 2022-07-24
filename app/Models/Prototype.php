<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prototype extends Model
{
    use HasFactory;

    // Allow mass assignment
    // protected $fillable = 
    // [
    //     'title',
    //     'image',
    //     'company',
    //     'location',
    //     'email',
    //     'website',
    //     'tags',
    //     'logo',
    //     'description'
    // ];

    // Model::unguard(); was set in the boot() method within AppServiceProvider class to allow for mass assignment, so no need for the above

    public function scopeFilter($query, array $filters)
    {
        if($filters['tag'] ?? false)
        {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if($filters['search'] ?? false)
        {
            $query->where('tags', 'like', '%' . request('search') . '%')
                ->orWhere('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%');
        }
    }
}
