<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    use HasFactory;
    protected $connection = 'pgsql';
    protected $fillable = [
        'vocabulary',
        'mean',
        'description',
    ];
    protected $table = 'vocabularies';

    public $timestamps = false;
}
