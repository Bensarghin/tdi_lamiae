<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['nomC', 'prenom', 'adresse','tele','formation','typeRDV','datenaiss','email'];

    use HasFactory;

    public function formation()
    {
       return $this->belongsToMany(Formation::class);
        
    }
             
    public function groupe()
    {
        return $this->belongsToMany(Groupe::class, 'formation_groups','formation_id','group_id');

       
    }
}
