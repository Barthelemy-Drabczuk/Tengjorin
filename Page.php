<?php
/**
 * Created by PhpStorm.
 * User: d17010509
 * Date: 28/11/18
 * Time: 11:11
 */

require_once 'page.utiles.php';

class Page {

    private $title;

    function Page ($title) {
        $this->title = $title;
    }

    function start () {
        start_page($this->title);
    }

    function end () {
        end_page();
    }

    function addContent ($content, $id = '') {
        echo PHP_EOL.'<div id="'.$id.'">'
                .PHP_EOL.$content.
            PHP_EOL.'</div>'.PHP_EOL;
    }
}