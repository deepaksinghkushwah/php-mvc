<?php

class Role_Model extends Model{
   public function listAll(){
       return $this->select("SELECT * FROM `role`");
   }
}