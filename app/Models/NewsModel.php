<?php

namespace App\Models;
use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table      = 'news';
    protected $primaryKey = 'id_news';
    protected $allowedFields = [
        'judul', 'berita', 'image', 'view', 'id_category', 'waktu',
        'keunikan', 'created_by', 'created', 'moderasi', 'komersial',
        'tag', 'meta_description', 'foto_1'
    ];
    protected $useTimestamps = false;
}
