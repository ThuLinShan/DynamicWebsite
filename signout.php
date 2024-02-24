<?php
require 'config/constants.php';

// Destroy all session and return to login
session_destroy();
header('location:' . ROOT_URL);
die();
