<?php

namespace App\Models;

use Illuminate\Support\Facades\Session;
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

    public function deleteBlog($id)
    {
        $query = DB::table($this->table)
            ->where('id', '=', $id);
        $lists = $query->delete();
        return $lists;
    }
    public function loadList($param = [])
    {
        $query = DB::table($this->table);
        $lists = $query->paginate(10);
        return $lists;
    }
    public function saveNew($param)
    {
        $data = array_merge(
            $param['cols']
        );
        $res = DB::table($this->table)->insertGetId($data);
        return $res;
    }
    public function loadOne($id, $params = null)
    {
        $query = DB::table($this->table)
            ->where('id', '=', $id);
        $obj = $query->first();
        return $obj;
    }
    public function saveUpdate($params)
    {
        if (empty($params['cols']['id'])) {
            Session::flash('error', 'Không xác định bản ghi cập nhật');
            return null;
        }
        $dataUpdate = [];
        foreach ($params['cols'] as $colName => $val) {
            if ($colName == 'id') continue;
            if (in_array($colName, $this->fillable)) {
                $dataUpdate[$colName] = (strlen($val) == 0) ? null : $val;
            }
        }
        $res = DB::table($this->table)
            ->where('id', $params['cols']['id'])
            ->update($dataUpdate);
        return $res;
    }
}
