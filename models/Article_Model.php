<?php

class Article_Model extends Model {

    public function listAll() {
        $rows = $this->select("SELECT * FROM article order by id DESC");
        return $rows;
    }

    public function get($url) {
        $row = $this->select("SELECT * FROM article WHERE `url` = :url LIMIT 1", [':url' => $url]);
        return $row;
    }

    public function getByID($id) {
        $row = $this->select("SELECT * FROM article WHERE `id` = :id LIMIT 1", [':id' => $id]);
        return $row;
    }

    /**
     * Save (insert/update) article     
     * @param int $id
     * @return bool
     */
    public function save($id = NULL) {


        if (!empty($_REQUEST['csrf_token'])) {
            if (Form::checkToken($_REQUEST['csrf_token'], 'artileForm')) {
                $form = new Form();
                $form->post("title")->validate("minLength", 10)
                        ->post("content")->validate("minLength", 30)
                        ->post("description")->validate("minLength", 10)
                        ->post("url")->validate("minLength", 1)
                        ->post("keywords")->validate("minLength", 1);

                if (!empty($form->_error)) {
                    foreach ($form->_error as $cat => $msg) {
                        Session::addMessage($cat . ' - ' . $msg, 'danger');
                    }
                    return false;
                } else {
                    $url = strtolower(str_replace(" ", "-", $form->fetch("url")));
                    if ($id != NULL) {
                        // update
                        $res = $this->update("article", [
                            'title' => $form->fetch("title"),
                            'content' => $form->fetch("content"),
                            'description' => $form->fetch("description"),
                            'url' => $url,
                            'keywords' => $form->fetch("keywords"),
                                ], "id = {$id}");
                    } else {

                        // insert
                        $res = $this->insert("article", [
                            'title' => $form->fetch("title"),
                            'content' => $form->fetch("content"),
                            'description' => $form->fetch("description"),
                            'url' => $url,
                            'keywords' => $form->fetch("keywords"),
                        ]);
                        //var_dump($res);exit;
                    }
                    return $res;
                }
            }
        }
    }

}
