<?php

foreach($articles as $article): ?>

<h2> <?= $article->title() ?> </h2>
<time> <? $article->date() ?> </time>

<?php endforeach; ?>