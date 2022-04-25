<?php
const ERROR_REQUIRE = 'this field is required';
const ERROR_LENGHT = 'Min 5 caractere';
$filename = __DIR__ . '/data/todo.json';
$error = '';
$todos = [];

if (file_exists($filename))
{
    $data = file_get_contents($filename);
    $todos = json_decode($data, true) ?? [];
}


if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $todo = $_POST['todo'] ?? '';

    if(!$todo)
    {
        $error = ERROR_REQUIRE;
    }elseif (!mb_strlen($todo)) {
        
        $error = ERROR_LENGHT;
    }

    if(!$error)
    {
        $todos = [...$todos, [
            'name' => $todo,
            'done' => false,
            'id' => time()
        ]];
        file_put_contents($filename, json_encode($todos));
        header('Location : /');
    }



}
