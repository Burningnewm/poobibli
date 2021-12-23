<?php ob_start();
?>
<table class="table text-center">
    <tr class = "table-dark">
    <th>Image</th>
    <th>Titre</th>
    <th>Nombre de pages</th>
    <th colspan="2">Action</th>
    </tr>
    <?php foreach($bookList as $book):
    
    ?>
    <tr>
    <td class="alignmiddle"><img src="<?=URL.$book->getImageBook()?>" alt="livre lsda" width="60px;"></td>
    <td class="align-middle"><a href="<?=URL.'livres/lire/'.$book->getIdBook()?>"><?=$book->getTitreBook() ?></a></td>
    <td class="align-middle"><?=$book->getNdpBook() ?></td>
    <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
    <td class="align-middle"><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
    <tr>
       <?php endforeach;?> 
</table>
<a href="" class="btn btn-success d-block">Ajouter</a>
<?php
$titre = "Livres";
$content = ob_get_clean();
require_once "template.php";