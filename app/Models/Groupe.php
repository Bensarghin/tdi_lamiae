<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    protected $fillable = ['label'];

    use HasFactory;
   
    // public function client()
    // {
    //     return $this->hasMany(Client::class);
    //     /**
    //      * Get all of the comments for the Groupe
    //      *
    //      * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //      */  
    // }
    // use HasFactory;
   
    public function formation()
    {
        return $this->belongsToMany(Formation::class, 'formation_groups','group_id','formation_id');

    }

    public function client()
    {
        return $this->belongsToMany(Client::class, 'formation_groups','group_id','formation_id');

    }
}
