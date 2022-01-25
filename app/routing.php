<?php

    $page = $_GET['page'];

        if ($page == "") {
            include("pages/login.php");
        } else {
            if (!file_exists("pages/$page.php")) {
                die("Halaman tidak tersedia!");
            }else{
                include("pages/$page.php");
            }
        }

        include("template/$template.php");
?>