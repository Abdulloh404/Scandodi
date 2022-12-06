<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsleter_table extends Model
{
    public $table = 'newsleter';
    public $primarykey='id';
    public $incremening = true;
    public $timestamp = false;
}
