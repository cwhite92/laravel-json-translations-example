<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Translatable;

    protected $table = 'posts';
    protected $fillable = ['title', 'slug', 'content'];

    public $translatable = ['title'];
    public $casts = ['title' => 'json'];

    /**
     * Use the slug attribute for implicit route model binding.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
