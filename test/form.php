<?php

require "../libs/Form.php";
if(isset($_REQUEST['run'])){
    $form = new Form();
    $form->post("name")->validate("minLength", 100)
            ->post("age")->validate("integer")
            ->post("gender");
    
    $a = $form->fetch();    
    
    
    print_r($form->_error);
    
    
    
    
}
?>
<form method="post" action="?run">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="age" placeholder="age">
    <input type="text" name="gender" placeholder="gender">
    <input type="submit" name="submit" value="submit">
</form>