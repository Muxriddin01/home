<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'status',
        'summa',
        'commit',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

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
    

    public function total() 
    {
        //Статус = 0 Даход , Статус = 1 Расход
        $summa = Reports::where('status',0)->sum('summa');
        $passiv = Reports::where('status',1)->sum('summa');
        $total = $summa > $passiv ? $summa - $passiv : $passiv - $summa;
        
        return number_format($total,0 ,' ',' '); 
    }
}
