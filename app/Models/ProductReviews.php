<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductReviews extends Model
{
    use HasFactory,softDeletes;
    protected $guarded =[];

    public function user()
    {
        return $this->belongsTo(User::class);
    } public function votes()
    {
        return $this->hasMany(ProductReviewVote::class);
    }
}
