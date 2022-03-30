<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;
    protected $fillable = ['nomP','titre'];
    public function formation()
    {
        return $this->hasMany(Formation::class);
        /**
         * Get all of the comments for the Programme
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */     
    }
   
}
