<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminModel extends CI_Model
{
   public function userValidate($username, $password)
   {
      $qry = $this->db->where(["username" => $username, "password" => $password])->get("users");
      if ($qry) {
         return $qry->row_array();
      } else {
         return false;
      }
   }

   public function insert($table, $data)
   {
      $qry = $this->db->insert($table, $data);
      if ($qry) {
         return $this->db->insert_id();
      } else {
         return 0;
      }
   }

   public function select($table, $orderBy, $columns = [], $where = [])
   {
      $this->db->select($columns);
      if (!is_null($orderBy)) {
         $this->db->order_by($orderBy);
      }
      if (!is_null($where)) {
         $this->db->where($where);
      }
      $qry = $this->db->get($table);
      if ($qry) {
         return $qry;
      } else {
         return false;
      }
   }

   public function delete($table, $where = [])
   {
      $qry = $this->db->delete($table, $where);
      if ($qry) {
         return true;
      } else {
         return false;
      }
   }

   public function update($table, $data = [], $where = [])
   {
      $this->db->where($where);
      $this->db->update($table, $data);
      return $this->db->affected_rows();
   }
}
