<p>Here are all fruit: </p>
<ul>
    <?php foreach ($fruits as $key => $fruit) : ?>
    <li><?php echo $fruit['name'] . " cost " . $fruit['price'] ?></li>
    <?php endforeach ?>

</ul>