<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'scientific_name',
        'common_name',
        'name',
        'birthday',
        'taxonomic_group',
        'class',
        'family',
        'species',
        'habitat',
        'protected',
    ];
}
