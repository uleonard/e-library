<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PastPaper extends Model
{
    use HasFactory;

     /**
     * The papers that belong to the module.
     */
    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
