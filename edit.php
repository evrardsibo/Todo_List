<?php 
    $filename = __DIR__ . '/data/todo.json';
    $_get = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    //print_r($_get);
    $id = $_get['id'];
    if ($id){
        $data = file_get_contents($filename);
        $todos = json_decode($data, true) ?? [];

        if(count($todos)){
            $todoindex = (int)array_search($id, array_column($todos, 'id'));
            $todos[$todoindex]['done'] = !$todos[$todoindex]['done'];
            file_put_contents($filename, json_encode($todos));
        }

    }
    header('LOCATION : /');