<ul style="background-color: #0066ff;">
    <?php foreach($nodes as $node): ?>
<!--        <pre>-->
<!--            --><?php //print print_r($node); ?>
<!--        </pre>-->
        <li><?php print $node->title; ?></li>

    <?php endforeach; ?>
</ul>