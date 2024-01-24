<?php

namespace App\Models;

use CodeIgniter\Model;

class M_model extends Model
{

    // ===========================Fix===========================
    public function tampil($table)
    {
        return $this->db->table($table)->get()->getresult();
    }
    public function tampilGroup($table, $group, $order)
    {
        return $this->db->table($table)->groupBy($group)->orderBy($order)->get()->getresult();
    }

    public function tampilrow($table)
    {
        return $this->db->table($table)->get()->getRowArray();
    }

    public function input($table, $data)
    {
        return $this->db->table($table)->insert($data);
    }

    public function hapus($table, $where)
    {
        return $this->db->table($table)->delete($where);
    }

    public function truncate($table)
    {
        return $this->db->table($table)->truncate();
    }

    public function getWhere($table, $where)
    {
        return $this->db->table($table)->Where($where)->get()->getRowArray();
    }

    public function getWhereResult($table, $where)
    {
        return $this->db->table($table)->Where($where)->get()->getResultArray();
    }
    public function getWhereLikeResult($table, $where)
    {
        return $this->db->table($table)->Like($where)->get()->getResultArray();
    }

    public function getWhere_J($table, $table2, $on, $where)
    {
        return $this->db->table($table)->join($table2, $on, 'left')->Where($where)->get()->getRowArray();
    }

    public function edit($table, $data, $where)
    {
        return $this->db->table($table)->update($data, $where);
    }

    public function tampil_join($table, $table2, $on)
    {
        return $this->db->table($table)->join($table2, $on, 'left')->get()->getResultArray();
    }

    public function tampil_i($table)
    {
        return $this->db->table($table)->get()->getRowArray();
    }

    public function getWhere2($table, $where)
    {
        return $this->db->table($table)->getWhere($where)->getRowArray();
    }

    public function simpan($table, $data)
    {
        return $this->db->table($table)->insert($data);
    }


}