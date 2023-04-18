<?php
if(isset($_GET['action']) && $_GET['action'] === popup)
{
    header('Location: /?controller=popup');
    die();
}

include 'view/click.php';