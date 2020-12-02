<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InterestLevel extends Model
{
    use HasFactory, SoftDeletes;
    protected $appends =['has_childs'];
    public function owner()
    {
        return $this->belongsTo(InterestLevel::class,'owner_id');
    }
    
    public function getHasChildsAttribute()
    {
        return InterestLevel::where(['owner_id' => $this->id])->exists();
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
   
}
