<?php

namespace App\Models;

use App\Models\QuizQuestion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quizze extends Model
{
    use HasFactory;
    protected $fillable = ['quiz_id','category', 'sub_category', 'quiz_name', 'description', 'id'];


    public function questions() {

        return $this->hasMany(QuizQuestion::class, 'quiz_id');
    }
}
