<?php require('partials/header.php'); ?>



<h1>Submit your name</h1>

<form method="POST" action="/users">
    <input name="name"></input>
    <button type="submit">Submit</button>
</form>

<ul>
    <?php foreach ($users as $user): ?>
        <li><?= $user->name; ?></li>
    <?php endforeach ; ?>
</ul>

<?php require('partials/footer.php'); ?>