<?php

use yii\helpers\Html;

?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Right navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <!-- <?= Html::a('<i class="fas fa-sign-out-alt"></i>', ['/site/logout'], ['data-method' => 'post', 'class' => 'nav-link']) ?> -->
            <?= Html::a('<i class="fas fa-sign-out-alt"></i>', ['/user/security/logout'], ['data-method' => 'post', 'class' => 'nav-link', 'visible' => !Yii::$app->user->isGuest]) ?>
        </li>
        <li class="nav-item">
            <!-- <?= Html::a('<i class="fas fa-sign-in-alt"></i>', ['/site/login'], ['data-method' => 'post', 'class' => 'nav-link']) ?> -->
            <!-- <?= Html::a('<i class="fas fa-sign-in-alt"></i>', ['/user/security/login'], ['data-method' => 'post', 'class' => 'nav-link', 'visible' => Yii::$app->user->isGuest]) ?> -->
        </li>
        <li class="nav-item">
            <?= Html::a('<i class="fas fa-file-code"></i>', ['/gii'],  ['target' => '_blank', 'class' => 'nav-link']) ?>
        </li>
        <li class="nav-item">
            <?= Html::a('<i class="fas fa-bug"></i>', ['/debug'],  ['target' => '_blank', 'class' => 'nav-link']) ?>
        </li>
    </ul>
</nav>
<!-- /.navbar -->