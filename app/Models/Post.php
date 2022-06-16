<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Cviebrock\EloquentSluggable\Sluggable;



class Post extends Model
{
    use HasFactory, HasTranslations, Sluggable;

    protected $guarded = [];

    public $translatable = ['title', 'slug', 'body'];


    public function sluggable()
    {
        return [
            'slug->en' => [
                'source' => 'titleen'
            ],

            'slug->ar' => [
                'source' => 'titlear'
            ],

            'slug->ca' => [
                'source' => 'titleca'
            ]
        ];
    } // Emd Method

    protected function asJson($value){
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }

    public function getRouteKeyName(){
        return 'slug'; // url >> slugName
    } // End Method


    public function getTitleenAttribute()
    {
        return $this->getTranslation('title','en');
    } // End Method 

    public function getTitlearAttribute()
    {
        return $this->getTranslation('title','ar');
    } // End Method

    public function getTitlecaAttribute()
    {
        return $this->getTranslation('title','ca');
    } // End Method

}
