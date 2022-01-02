<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<?php $style= <<< CSS

.mygame {
    border: 2px solid black;
    margin-left: 10px;
    margin-bottom: 10px;
    padding-bottom: 10px
}

.mygame h3{
   border-bottom: 1px dashed #b7b7b7;
   font-size: 25px;
   padding-bottom: 5px;
   text-align: center;
}

.wrap {
    min-height: 100%;
    height: auto;
    margin: 0 auto -60px;
    padding: 0 0 60px;
}

.wrap > .container {
    padding: 70px 15px 20px;
}

CSS;
 $this->registerCss($style);
?>

<?php
$msg = yii::$app->getSession()->getFlash('success');
if(null !== $msg): ?>
<div class="alert alert-success"> <?= $msg; ?> </div>
<?php endif; ?>



<h1 class="page-header">Game  <a class="btn btn-primary pull-right" href="index.php?r=game/create"> Create </a> </h1>
<br>
<?php if(!empty($games)): ?>
<div class="row">
    <?php foreach($games as $game) : ?>
   
        <div class="col-sm-6 col-md-3 mygame ">
           
        <h3> <?= $game->gname; ?> </h3>
        <p><strong>Game Space: </strong> <?= $game->gspace; ?> </p>
        <p><strong>Game Developer: </strong> <?= $game->gdeveloper; ?> </p>
        <p><strong>Game Publisher: </strong> <?= $game->gpublisher; ?> </p>
        <p><strong>Game Genres: </strong> <?= $game->ggenres; ?> </p>


        <?php 
        //date format
        $mydate = strtotime($game->created_at);
        $dtformat = date("F j ,Y", $mydate);
        
        ?>
        <p><strong>Listed On: </strong> <?= $dtformat; ?> </p> 
<span class="pull-right">
<a href="index.php?r=game/edit&id=<?= $game->gameID;?>" class="btn btn-primary">Edit Game</a>
<a  href="index.php?r=game/delete&id=<?= $game->gameID;?>" class="btn btn-danger">Delete Game</a>
</span>

    </div>
        
    <?php endforeach; ?>
    </div>

    <?php else: ?>
        <p class="lead"> No Games </p>
        <?php endif; ?>

    <?= LinkPager::widget(['pagination'=> $pagination]);?>