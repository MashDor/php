<html>
    <body>
        <table border="1" width="50%" align="center">
            <?php
            $rows = 5;
            $cols = 3;
            for ($i = 1; $i < $rows; $i++) {
                echo '<tr>';
                for ($j = 1; $j <= $cols; $j++) {
                    if ((($i + $j) % 2) == 0) $color = limegreen;
                    else $color = orange;
                    print "<td align='center' bgcolor=$color> $i:$j </td>";
                }
                echo '</tr>';
            }
            ?>
        </table>
    </body>
</html>