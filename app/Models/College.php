<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['nome', 'telefone', 'email'];

    public function Teacher()
    {
        return $this->hasMany(Teacher::class);
    }
}
