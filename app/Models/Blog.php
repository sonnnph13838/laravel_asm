<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    use HasFactory;
    protected $table = "blog";
    protected $fillable = ['id', 'title', 'image1', 'image2', 'image3', 'discription', 'content', 'content1'];
    public function loadListBlog($param = [])
    {
        $query = DB::table($this->table)
            ->select($this->fillable);
        $lists = $query->paginate(6);
        return $lists;
    }
}
