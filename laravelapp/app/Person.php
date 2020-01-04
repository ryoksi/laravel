<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Scopes\ScopePerson;

class Person extends Model
{
  protected $guarded=array('id');

  public static $rules=array(
    'name'=>'required',
    'mail'=>'email',
    'age'=>'integer|min:0|max:150'
  );

    public function getData() {
      return $this->id.':'.$this->name.'('.$this->age.')';
    }

    public function getname() {
      return $this->name;
    }

    public function scopeNameEqual($query,$str) {
      return $query->where('name','like','%'.$str.'%');
    }

    public function scopeAgeGreater($query,$n) {
      return $query->where('age','>=',$n);
    }

    public function scopeAgeLess($query,$n) {
      return $query->where('age','<=',$n);
    }

    protected static function boot() {
      parent::boot();
      static::addGlobalScope(new ScopePerson);
  }

  public function boardone() {
    return $this->hasOne('App\Board');
  }

  public function board() {
    //return $this->hasOne('App\Board');
    return $this->hasMany('App\Board');
  }
}
