<?php

session_start();
session_destroy();
header('Location: ../../login/view/index.php');