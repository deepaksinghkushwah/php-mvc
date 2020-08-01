<?php
class Article_Model extends Model {
    
    public function listAll(){
        $rows = $this->select("SELECT * FROM article");
        return $rows;
    }
}
