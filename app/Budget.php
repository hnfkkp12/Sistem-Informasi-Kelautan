<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PhpParser\Lexer;

class Budget extends Model
{
    use SoftDeletes;
    protected $guarded = ['id', 'updated_at', 'deleted_at'];

    public function letter()
    {
        return $this->belongsTo(Letter::class, 'budgets_id', 'id');
    }
}
