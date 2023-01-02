<?php
session_start();
require('../template/link.php');

session_destroy();
header('Location: ' . $url['base_url']);

