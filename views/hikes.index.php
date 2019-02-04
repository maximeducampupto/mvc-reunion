
    <h1>Liste des randonnées</h1>
        <a href="index.php?controller=rando&action=create" class="addButton">Ajouter une randonnée</a>

    <table class="readTable">
        <tr>
            <th>Nom</th>
            <th>Difficulté</th>
            <th>Distance</th>
            <th>Durée</th>
            <th>Dénivelé</th>
            <th>Disponible</th>
            <th></th>

        </tr>
            <?php foreach($hikesList as $rando) { ?>
                <tr>
                    <td><a href="<?= 'index.php?controller=rando&action=update&id='.$rando->id ?>"><?= $rando->name ?></a></td>
                    <td><?= ucfirst($rando->difficulty) ?></td>
                    <td><?= $rando->distance ?></td>
                    <td><?= $rando->duration ?></td>
                    <td><?= $rando->height_difference ?></td>
                    <td><?= $rando->available == '1' ? 'Oui' : 'Non' ?></td>
                    <td><a href="<?= 'index.php?controller=rando&action=delete&id='.$rando->id ?>" class="deleteButton">x</a></td>
                </tr>
            <?php } ?>
    </table>