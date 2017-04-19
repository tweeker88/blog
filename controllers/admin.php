<?php
if(isset($_SESSION['memory'])){
    header('Location:../admin/panel');
}
else{
    if(isset($_POST['wp-submit'])){
        $Sessions = new Sessions();
        $select = $Sessions -> Assept($db, $_POST['log'], $_POST['pass']);
    }
}
