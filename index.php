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
                    <input type="text" name="todo" value="<?= isset($todo) ? $todo : '' ?>">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
                <?php if($error) : ?>
                    <span style="color: red;"><?= $error ?></span>
                <?php endif ; ?>
                <ul class="todo-list">
                    <?php foreach($todos as $t) : ?>
                        <li class="todo-item <?= $t['done'] ? 'low-opacity' : '' ?>">
                            <span class="todo-name"><?= $t['name'] ?></span>
                            <a href="/edit.php?id=<?= $t['id'] ?>">
                                <button class="btn btn-primary btn-small" ><?= $t['done'] ? 'Annuler' : 'Valider' ?></button>
                            </a>
                            <a href="/remove.php?id=<?= $t['id'] ?>">
                                <button class="btn btn-danger btn-small">Supprimer</button>
                            </a>
                        </li>
                    <?php endforeach ?>    
                </ul>
            </div>
        </div>
       <?php require_once 'includes/footer.php' ?>
    </div>
</body>
</html>