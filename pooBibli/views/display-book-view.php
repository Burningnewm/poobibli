<?php ob_start();
?>
<tr>
    <td class="alignmiddle"><img src="<?=URL.$book->getImageBook()?>" alt="livre lsda" width="60px;"></td>
    <td class="align-middle"><?=$book->getTitreBook() ?></td>
    <td class="align-middle"><?=$book->getNdpBook() ?></td>
</tr>
<?php
$titre = "Livres";
$content = ob_get_clean();
require_once "template.php";