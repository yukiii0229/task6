<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'content'];

    public static $rules = array(
        'id' => 'null',
        'content' => 'required|max:20',
    );
    public function getDetail()
    {
        $txt = 'ID:'.$this->id . ' ' . $this->content;
        return $txt;
    }
}