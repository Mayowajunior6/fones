<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Category Model class to handle database access
 * 
 * @author Jaspreet Kaur <kaur-j19@webmail.uwinnipeg.ca>
 * @filename Contact.php
 * @updated_at 2020-11-02
 */
class Contact extends Model
{
    protected $fillable = ['name', 'email', 'message'];
}
