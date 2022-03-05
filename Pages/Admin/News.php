<?php

namespace Pages\Admin;

use Pages\Admin\Page;

class News extends Page {

    function __construct() {
        Parent::__construct();
    }

    public function index() {

        $this->load('views/admin/news/index.php');
    }

}