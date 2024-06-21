<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Families extends Model
{
    use HasFactory;

    protected $table = 'families';
    protected $fillable = [
        'parent_id',
        'name',
        'relation',
        'gender'
    ];
    protected $primaryKey = 'id';
}
