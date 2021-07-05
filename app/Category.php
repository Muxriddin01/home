<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
    ];
    public static function add($fields)
    {
        $post = new static;
        $post->fill($fields);
        $post->save();
    
        return $post;
    }
    
    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }
    
    public function remove()
    {
        $this->delete();
    }
}
