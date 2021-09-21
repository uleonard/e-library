<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'classes';

    /**
     * The class that belong to the module.
     */
    public function modules()
    {
        return $this->belongsToMany(Module::class, "classes_module","class_id","module_id");
    }
}
