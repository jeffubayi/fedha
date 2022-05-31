<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
        //show all items
//   protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description', 'tags'];
public function scopeFilter($query, array $filters) {
    if($filters['tag'] ?? false){
        $query->where('tags','like','%' . request('tag') . '%');
    }
}

 // Relationship To User
 public function user() {
    return $this->belongsTo(User::class, 'user_id');
}

}
