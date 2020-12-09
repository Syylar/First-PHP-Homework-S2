<?php
include './src/application.php';

session_destroy();

redirect('index.php');