<?php
    $action= isset($_GET["action"])? $_GET["action"]: "index";
    
    switch ($action) {
        case 'index':
            include "view/home/index.php";
            break;
        
        default:
            # code...
            break;
    }
?>