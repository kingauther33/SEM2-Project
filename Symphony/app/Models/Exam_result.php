<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam_result extends Model
{
    use HasFactory;

    protected $table = 'exam_results';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function exam() {
        return $this->belongsTo(Exam::class, 'exam_id', 'id');
    }

    public function student() {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}
