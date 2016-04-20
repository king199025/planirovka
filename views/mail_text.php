<h1>Заявка с вашего сайта</h1>
<div><span>Имя:</span><?= $post['name']; ?></div>
<div><span>Телефон:</span><?= $post['phone']; ?></div>
<div><span>Email:</span><?= $post['email']; ?></div>


<div><span>Количество метров квадратных:</span><?= $post['valuePlan']; ?></div>
<h2>Дополнительно</h2>
<?php if(isset($post['electric_network'])):?>
    <div><span>Розетки</span></div>
<?php endif; ?>

<?php if(isset($post['electric_network'])):?>
    <div><span>Розетки</span></div>
<?php endif; ?>


<?php


prn($post);