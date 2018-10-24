<?php
	
	include_once('models/comments.php');

    if(count($_POST) > 0){
        $name = trim($_POST['name']);
        $text = trim($_POST['text']);

        if($name == '' || $text == ''){
            $msg = 'Заполните все поля';
        }
        else{
            $id = comments_add($name, $text);
        }
    }
    else{
        $name = '';
        $text = '';
        $msg = '';
    }

    $comments = comments_all();

	include "views/v_index.php";