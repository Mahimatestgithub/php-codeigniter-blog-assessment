<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'blogs'; // The name of your database table
    protected $primaryKey = 'id'; // Primary key column name
    protected $allowedFields = ['title', 'content', 'author']; // Fields that can be inserted/updated
}
