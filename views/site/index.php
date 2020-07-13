<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
echo "ID: ".\Yii::$app->user->id."<br>";?>
<a href="http://yii.local/index.php?r=formphone/index">Телефоны</a>
    <?php /*?>
поиск по номеру
<?php  echo \Yii::$app->view->renderFile('@app/views/site/formSearch.php');?>

Найденые номера:<br>
№ телефон Юзер<br>
<?php /*foreach($list_phone_search as $lps){?>
    <?=$lps->id?> <?=$lps->phone?> <?=$lps->user_id?><br>
<?php }
if(\Yii::$app->user->id > 0){?>
Добавить номер
<?php echo \Yii::$app->view->renderFile('@app/views/site/formPhone.php');?>
<?php }else{?>
Авторизуйтесь
<?php }?>

№ телефон Юзер<br>
<?php foreach($list_phone as $lp){?>
    <?=$lp->id?> <?=$lp->phone?> <?=$lp->user_id?><br>
<?php }*/