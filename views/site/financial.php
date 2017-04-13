<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Financial';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Here you can see your financial status.
    </p>
  <?php echo session_id(); ?>
    <code><?= __FILE__ ?></code>
</div>
