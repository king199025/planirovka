<h1>Заявка с вашего сайта</h1>
<div><span>Имя:</span><?= $post['name']; ?></div>
<div><span>Телефон:</span><?= $post['phone']; ?></div>
<div><span>Email:</span><?= $post['email']; ?></div>


<div><span>Количество метров квадратных:</span><?= $post['valuePlan']; ?></div>

<?php if(isset($post['electric_network'])):
    ?>
    <h2>Электрические сети</h2>
    <?php foreach($post['electric_network'] as $el):
    ?>
    <div><span><?= $el ?></span></div>

<?php
    endforeach;
endif; ?>


<?php if(isset($post['bathroom'])):
    ?>
    <h2>Ваная комната</h2>
    <?php foreach($post['bathroom'] as $el):
    ?>
    <div><span><?= $el ?></span></div>

<?php
    endforeach;
endif; ?>


<?php if(isset($post['tip'])):
    ?>
    <h2>Советы дизайнера</h2>
    <?php foreach($post['tip'] as $el):
    ?>
    <div><span><?= $el ?></span></div>

<?php
    endforeach;
endif; ?>

<div><h3>Коментарии</h3></div>
<div><span><?= $post['text'] ?></span></div>

<div><span>Сумма</span> <?= $post['summa']?>$</div>



