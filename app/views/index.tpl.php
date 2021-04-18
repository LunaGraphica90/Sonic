<div class="row">
<div class="image-fond col-5">
    <img src="<?= $urlPrefix . "images/41W2JkmgOVL._AC_.png" ?>" class="img-illustr"></th>
</div>

<div class="col-7">
    <h1>Sonic, le jeu O'Top !</h1>
    <h2>Les personnages</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col" class="head-table">Photo</th>
                <th scope="col" class="head-table">Nom</th>
                <th scope="col"class="head-table">Description</th>
                <th scope="col"class="head-table">Type</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($hero as $heroes) : ?>
            <tr>
                <th scope="row"><img src="<?= $urlPrefix . "images/" . $heroes->getPicture() ?>" class="img-perso"></th>
                <td><?= $heroes->getName()?></td>
                <td><?= $heroes->getDescription()?></td>
                <td><?= $heroes->type_name?></td>
            </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
</div>
</div>