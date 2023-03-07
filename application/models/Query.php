<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Query extends CI_Model
{
    // COMMON QUERIES
    public function add($table, $data)
    {
        $qry = $this->db->insert($table, $data);
        if ($qry) {
            return $this->db->insert_id();
        } else {
            return 0;
        }
    }
    public function select($table, $select, $where = null, $order_by = "id", $order_flow = "desc", $group = null, $limit = null, $start = 0)
    {
        if ($limit != null) {
            $this->db->limit($limit, $start);
        }
        if ($where == null & $group == null) {
            $qry = $this->db->select($select)->order_by($order_by, $order_flow)->get($table);
        } else if ($where !== null & $group == null) {
            $qry = $this->db->select($select)->order_by($order_by, $order_flow)->where($where)->get($table);
        } else {
            $qry = $this->db->select($select)->order_by($order_by, $order_flow)->group_by($group)->where($where)->get($table);
        }

        if ($qry) {
            return $qry;
        } else {
            return false;
        }
    }
    public function edit($table, $data, $where)
    {
        $qry = $this->db->where($where)->update($table, $data);
        if ($qry) {
            return $this->db->affected_rows();
        } else {
            return 0;
        }
    }
    public function delete($table, $where)
    {
        $qry = $this->db->where($where)->delete($table);
        if ($qry) {
            return true;
        } else {
            return false;
        }
    }
    public function num_rows($table, $select, $where)
    {
        $qry = $this->db->select($select)->where($where)->get($table);
        return $qry->num_rows();
    }
}
