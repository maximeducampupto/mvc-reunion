<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($this->model->create($_POST)) {
        $this->index();
    }
}
?>

<body>
<a href="/php-training/index.php">Liste des données</a>
<h1>Ajouter</h1>
<form action="" method="post">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="" required>
    </div>

    <div>
        <label for="difficulty">Difficulté</label>
        <select name="difficulty" required>
            <option value="très facile">Très facile</option>
            <option value="facile">Facile</option>
            <option value="moyen">Moyen</option>
            <option value="difficile">Difficile</option>
            <option value="très difficile">Très difficile</option>
        </select>
    </div>

    <div>
        <label for="distance">Distance</label>
        <input type="text" name="distance" value="" required>
    </div>
    <div>
        <label for="duration">Durée</label>
        <input type="duration" name="duration" value="" required>
    </div>
    <div>
        <label for="height_difference">Dénivelé</label>
        <input type="text" name="height_difference" value="" required>
    </div>

    <div>
        <label for="available">Disponible</label>
        <select name="available">
            <option value="1">Oui</option>
            <option value="0">Non</option>
        </select>
    </div>
    <button type="submit" name="button" class="addButton">Envoyer</button>
</form>
