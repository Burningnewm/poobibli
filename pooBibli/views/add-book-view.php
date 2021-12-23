<?php ob_start();
?>
<form method="POST" enctype="multipart/form-data" action="<?=URL.'/livres/validate'?>">
  <fieldset>
    <legend>Ajouter un livre</legend>
    <div class="form-group">
      <label for="staticTitle" class="form-label mt4">Titre du Livre</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="staticTitle" name="staticTitle" value="Ecrivez le titre du livre içi">
      </div>
    </div>
    <div class="form-group">
      <label for="staticTitle" class="form-label mt4">Nombre de pages</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="staticTitle" name="staticTitle" value="Ecrivez le nombre de pages içi">
      </div>
    </div>
    <div class="form-group">
      <label for="formFile" class="form-label mt-4">Default file input example</label>
      <input class="form-control" type="file" id="formFile">
    </div>
    <button type="submit" class="btn btn-primary">Ajouter le livre</button>
  </fieldset>
</form>
<?php
$titre = "Livres";
$content = ob_get_clean();
require_once "template.php";