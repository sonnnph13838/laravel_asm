<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    use HasFactory;
    protected $table = "blog";
    protected $fillable = ['id', 'name', 'email'];
    // public function loadList($param = [])
    // {
    //     $query = DB::table($this->table)
    //         ->select($this->fillable)
    //         ->where('id', '>', 2);

    //     $lists = $query->get();
    //     return $lists;
    // }
    public function loadListWithPager($param = [])
    {
        $query = DB::table($this->table)
            ->select($this->fillable);
        $lists = $query->paginate(8);
        return $lists;
    }
}
