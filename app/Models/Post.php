<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * @var array
     * @property integer $id
     * @property string $title
     * @property string $description
     */
    protected $fillable = [
        'title',
        'description'
    ];
}
