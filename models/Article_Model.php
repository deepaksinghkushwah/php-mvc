<?php
class Article_Model extends Model {
    
    public function listAll(){
        $rows = $this->select("SELECT * FROM article");
        return $rows;
    }
    
    public function get($url){
        $row = $this->select("SELECT * FROM article WHERE `url` = :url LIMIT 1",[':url' => $url]);
        return $row;
    }
}
