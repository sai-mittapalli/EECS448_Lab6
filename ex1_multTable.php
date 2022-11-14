<!DOCTYPE html>
<html>
    <style>
        body
        {
            background-color: aliceblue;
        }
    </style>
    <head>
        <title>Exercise 1</title>
        <h3>Multiplication Table</h3>
    </head>
    <body>
        <table align="center" border="1px" width="100%">
            <?php
                function multTable()
                {
                    for($i = 1; $i <= 100; $i++)
                    {
                        echo " <tr>";

                        for($j = 1; $j <= 100; $j++)
                        {
                            $multValue = ($i) * ($j);
                            echo "<td>$multValue</td>";
                        }
                    }
                }

                multTable();
            ?>
        </table>
    </body>
</html>