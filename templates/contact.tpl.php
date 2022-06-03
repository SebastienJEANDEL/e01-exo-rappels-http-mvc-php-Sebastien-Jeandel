<h1>Je suis la page contact o/</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

<ul>
<?php foreach ($data['users'] as $user) : ?>
    <li><?= $user['name'] ?> : <?= $user['email'] ?></li>
<?php endforeach; ?>
</ul>