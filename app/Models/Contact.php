<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
	protected $table = "table_contact";
	protected $fillable = [
        'name',
        'last_name',
        'email',
		'address',
		'telephone',
		'comment',
		'status'
    ];
}
