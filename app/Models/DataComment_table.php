<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataComment_table extends Model
{
    public $table = 'datacomment';
    public $primaryKey = 'id';
    public $Increment = true;
    public $timestamps = false;

}
