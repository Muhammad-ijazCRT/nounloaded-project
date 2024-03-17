<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Tutors extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'email_token',
        'bio',
        'about_me',
        'email_status',
        'email_verified_at',
        'role',
        'status',
        'contact',
        'password',
        'gender',
        'degree',
        'teaching_experience',
        'te_det',
        'teaching_method',
        'institution',
        'application',
        'bonus_class',
        'class_type',
        'quotes',
        'hobbies',
        'personal_url',
        'speciality',
        'tutor_faculty',
        'tutor_courses',
        'tutor_semesters',
        'pay_status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function reviews()
    {
        return $this->hasMany(TutorsReviews::class, 'tutor_id', 'id');
    }


    public function tutSeminarWriting()
    {
        return $this->hasMany(TutSeminarWriting::class, 'tut_id', 'id');
    }


    public function tutProjectWriting()
    {
        return $this->hasMany(TutProjectWriting::class, 'tut_id', 'id');
    }


    public function TutMscMbaProfessional()
    {
        return $this->hasMany(TutMscMbaProfessional::class, 'tut_id', 'id');
    }


    public function classes()
    {
        return $this->hasMany(Classes::class, 'ref_id');
    }
}
