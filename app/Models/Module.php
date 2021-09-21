<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    /**
     * The class that belong to the module.
     */
    public function classes()
    {
        return $this->belongsToMany(Classes::class,"classes_module","module_id","class_id");
    }
}
