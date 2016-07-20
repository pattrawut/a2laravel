<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class cardstatement extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['sellerno', 'product', 'price'];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'uid' => 'int',
    ];

    /**
     * Get the user that owns the task.
     */
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}