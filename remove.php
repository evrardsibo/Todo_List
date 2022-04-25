<?php 
   $filename = __DIR__ . '/data/todo.json';
   $_get = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   //var_dump($_get);
   $id = $_get['id'] ?? '';
   //var_dump($id);

   if ($id) {
       $data = file_get_contents($filename);
       $todos = json_decode($data ,true) ?? [];
       $todoindex = (int)array_search($id, array_column($todos, 'id'));
       array_splice($todos, $todoindex, 1);
       file_put_contents($filename, json_encode($todos));

    //    echo '<pre>';
    //    var_dump($todos);
    //    echo '</pre>';

       if (count($todos)) {
           
       }
   }

   header('LOCATION : /');
