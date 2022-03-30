<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    
    protected $fillable = ['nomF', 'description', 'duree','prix','programme_id'];
    use HasFactory;
    public function client()
    {
        return $this->hasMany(Client::class);
      
    }
    public function groupe()
    {
        return $this->belongsToMany(Groupe::class, 'formation_groups','formation_id','group_id');

       
    }
    public function programme()
    {
        return $this->belongsTo(Programme::class);
       
 }
}
