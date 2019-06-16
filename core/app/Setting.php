<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'value',
        'key'
    ];

    public static function getItem($key){
        if(Setting::checkKey($key)){
            $value = self::query()->where('key','=',$key)->value('value');
            return $value;
        }
        else
            return raayeConfig($key);
    }

}
