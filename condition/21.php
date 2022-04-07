<?php
if (
    ($_POST['id'] === 'bakk' or $_POST['id'] === 'uma' or $_POST['id'] === 'lily')
    and
    $_POST['password'] === '1111'
){
    echo 'right';
}else{
    echo 'wrong';
}
?>