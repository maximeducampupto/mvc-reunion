<?php

$id = $_GET['id'];

$rando = $this->model->find($id);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($this->model->update($rando->id, $_POST)) {
        $this->index();
    }
}
?>

<body>
<a href="index.php?controller=rando&action=index">Liste des données</a>
<h1>Ajouter</h1>
<form action="" method="post">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="<?= $rando->name ?>" required>
    </div>

    <div>
        <label for="difficulty">Difficulté</label>
        <select name="difficulty" required>
            <option value="très facile" <?= $rando->difficulty == 'très facile' ? 'selected' : '' ?>>Très facile</option>
            <option value="facile" <?= $rando->difficulty == 'facile' ? 'selected' : '' ?>>Facile</option>
            <option value="moyen" <?= $rando->difficulty == 'moyen' ? 'selected' : '' ?>>Moyen</option>
            <option value="difficile" <?= $rando->difficulty == 'difficile' ? 'selected' : '' ?>>Difficile</option>
            <option value="très difficile" <?= $rando->difficulty == 'très difficile' ? 'selected' : '' ?>>Très difficile</option>
        </select>
    </div>

    <div>
        <label for="distance">Distance</label>
        <input type="text" name="distance" value="<?= $rando->distance ?>" required>
    </div>
    <div>
        <label for="duration">Durée</label>
        <input type="duration" name="duration" value="<?= $rando->duration ?>" required>
    </div>
    <div>
        <label for="height_difference">Dénivelé</label>
        <input type="text" name="height_difference" value="<?= $rando->height_difference ?>" required>
    </div>

    <div>
        <label for="available">Disponible</label>
        <select name="available">
            <option value="1" <?= $rando->available == 1 ? 'selected' : '' ?>>Oui</option>
            <option value="0" <?= $rando->available == 0 ? 'selected' : '' ?>>Non</option>
        </select>
    </div>
    <button type="submit" name="button" class="addButton">Mettre à jour</button>
</form>
