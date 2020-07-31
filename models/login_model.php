<?php
class Login_Model extends Model{
    public function test(){
        $rows = $this->query("SELECT * FROM `user`");
        return $rows;
    }
}