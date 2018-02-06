<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



<ul>
    <?php if($role==1 || $role==2):?><li>Поселення</li><?php endif?>

    <?php if($role==1):?><li>Виселення</li><?php endif?>
    <?php if($role==2):?>  <li>Співробітники</li><?php endif?>
    <?php if($role==2):?> <li>Статистика</li><?php endif?>
    <?php if($role==2):?><li>Проблеми</li><?php endif?>
    <?php if($role==2):?><li>Додавання студентів в базу</li><?php endif?>
</ul>

<ul>
    <li>Ви увійшли, як <?=$login?></li>
    <li><a href="/logout">Logout</a></li>
</ul>