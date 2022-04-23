<?php
const ERROR_REQUIRE = 'this field is required';
const ERROR_LENGHT = 'Min 5 caractere';
$error = '';

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $todo = $_POST['todo'] ?? '';

    if(!$todo)
    {
        $error = ERROR_REQUIRE;
    }elseif(mb_strlen($todo))
    {
        $error = ERROR_LENGHT;
    }

}
