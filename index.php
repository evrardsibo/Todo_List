<?php require_once 'logique.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'includes/head.php' ?>
    <title>Todo</title>
</head>
<body>
    <div class="container">
        <?php require_once 'includes/header.php' ?>
        <div class="content">
            <div class="todo-container">
                <h1>Ma todo</h1>
                <form method="POST" action="/" class="todo-form">
                    <input type="text" name="todo">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
                <?php if($error) : ?>
                    <span style="color: red;"><?= $error ?></span>
                <?php endif ; ?>
                <div class="todo-list"></div>
            </div>
        </div>
       <?php require_once 'includes/footer.php' ?>
    </div>
</body>
</html>