<html>
    <body>
        <?php
        echo "<br>";
        $str = "Здравствуйте, ".$_REQUEST["first_name"]." ".$_REQUEST["last_name"]."!<br>";
        $str .= "Вы выбрали для изучения курс по ".$_REQUEST["course"]."!<br>";
        echo $str;
        ?>
    </body>
</html>

