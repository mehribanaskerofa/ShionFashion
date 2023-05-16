<?php

namespace App\Models;

use Database\Factories\MenuFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\IsActiveScope;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;// silinenlerle birlikde datalarin gelmeyi ucun withTrashed()->get()
    use HasFactory;

    protected static function newFactory()
    {
        return MenuFactory::new();
    }

    protected $table='menu';
    protected $guarded=[];
    public $timestamps=false;

    public function scopeActive($query)
    {
        return $query->where('is_active',true);//local scope
    }
//global query scope
//    protected static function $booted()
//    {
//        static::addGlobalScope(new IsActiveScope());
//    }

    public function getfullTitleAttribute()
    {
        return 'Menu: '.$this->title;
    }
    public function setfullTitleAttribute($value)
    {
        if(true){
            $this->title=$value;
        }
    }
}
