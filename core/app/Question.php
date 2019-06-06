<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';

    protected $fillable = [
        'question', 'question_cat', 'first_option', 'second_option', 'third_option', 'fourth_option', 'fifth_option', 'answer', 'images', 'video'
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class, 'question_id', 'id');
    }
    /*public function subcategory()
    {
        return $this->belongsTo('App\SubCategory');
    }*/
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'question_cat_name');
    }

}
