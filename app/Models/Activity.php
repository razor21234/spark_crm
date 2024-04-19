<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['title', 'activity_type', 'due_date', 'owner', 'created_at'];
}

