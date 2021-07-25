<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tasks extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'tasks';

    protected $fillable = [
        'description',
    ];

    public function isCompleted(){
        return $this->complete_at !==null;
    }
}
