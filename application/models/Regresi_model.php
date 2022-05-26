<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regresi_model extends CI_Model
{
  public function countId()
  {
    $query = "select count(id) as id from regresi_linear";
    return $this->db->query($query)->result();
  }
  public function sumx()
  {
    $query = "select sum(x) as x from regresi_linear";
    return $this->db->query($query)->result();
  }
  public function sumy()
  {
    $query = "select sum(y) as y from regresi_linear";
    return $this->db->query($query)->result();
  }
}
