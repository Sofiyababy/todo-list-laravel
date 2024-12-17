<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crud extends Model
{
    use HasFactory;

    // Explicitly define the table name
    protected $table = 'crud_app_dbs';

    // Add fillable property to allow mass assignment
    protected $fillable = [
        'name',
        'age',
        'email',
    ];
}
