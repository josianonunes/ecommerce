<?php

use \Hcode\Page;
use \Hcode\PageAdmin;
use \Hcode\Model\User;

$app->get('/', function() {

    $page = new Page();

    $page->setTpl("index");
});