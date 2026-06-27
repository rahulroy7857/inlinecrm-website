<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailerEnquiry extends Model
{
    use HasFactory;
    protected $table = 'mailer_enquiries';
    protected $fillable = ['name', 'father', 'mobile', 'email', 'state', 'place', 'course', 'neet', 'dezied_coutry'];
}
