<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model
{
    public $timestamps = false;
    protected $dateFormat = 'Y-m-d H:i:s';
    use HasFactory;

    protected $table = 'content';
    protected $datadb = ['title', 'content'];
}
