<?php
    require_once 'Page.php';

    $index = new Page('Tengjordin');
    $index->start();
    $content = '<article>
		<h1>Bonjour à tous</h1>
		<div>bonjour Atous, Portous et Aramous</div>
	</article>';
    $nonUsefulContent = '';
    if (isset($content)) {
        $index->addContent($content, 'first-article');
    }
    $index->end();
?>