<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
   protected $fillable = ['member_name', 'member_type','member_email','member_phone_number','member_status'];
}
