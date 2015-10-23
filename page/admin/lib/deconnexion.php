<?php
/**
 * Created by PhpStorm.
 * User: Andriants
 * Date: 03/09/2015
 * Time: 10:57
 */
session_start();
session_destroy();
header('location:../admin.php');
exit;