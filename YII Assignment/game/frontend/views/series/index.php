<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<?php
$msg = yii::$app->getSession()->getFlash('success');
if(null !== $msg): ?>
<div class="alert alert-success"> <?= $msg; ?> </div>
<?php endif; ?>



<h1 class="page-header">Game Series <a class="btn btn-primary pull-right" href="index.php?r=series/create"> Create  </a> </h1>
<ul class="list-group">
    <?php foreach($series as $ser) : ?>
        <li class="list-group-item">
            <a href="index.php?r=game&series=<?= $ser->id; ?>"> <?= $ser->name; ?></a>
    </li>
    <?php endforeach; ?>
    </ul>
    <?= LinkPager::widget(['pagination'=> $pagination]);?>