<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatUser extends Model
{
    protected $fillable = ['firstname', 'lastname', 'email', 'username', 'pw'];
}
