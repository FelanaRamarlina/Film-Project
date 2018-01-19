<?php
        if(isset($page)){
            require("./views/".$page.".php");
            echo $page;
        }
