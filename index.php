<?php

require 'vendor/autoload.php';
require 'config/config.php';

set('source', $source);


if (isset($_GET['img'])) {
    imgurl_kuri($_GET['img']);
}
else
    _kuri();

