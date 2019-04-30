<?php

require 'vendor/autoload.php';
require 'config/config.php';

if (isset($_GET['img'])) {
    imgurl_kuri($_GET['img']);
}
else
    _kuri();

