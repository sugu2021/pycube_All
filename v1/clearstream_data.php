<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>

        <table>
            <tr>
                <th>POST</th>
                <th>GET</th>
				<th>REQUEST</th>
                <th>HEADERS</th>
                <th>DATE</th>
            </tr>
            <?php
            include './blog/includes/database.php';

            $str = "SELECT * FROM  `clearstream` ORDER BY  `clearstream`.`datetime` DESC ";
            $get_data = mysqli_query($connection, $str);
            while ($row = mysqli_fetch_assoc($get_data)) {
                ?>
                <tr>
                    <td><pre><?PHP var_dump(json_decode($row['post'])); ?></pre></td>
                    <td><pre><?PHP var_dump(json_decode($row['get'])); ?></pre></td>
					<td><pre><?PHP var_dump(json_decode($row['request'])); ?></pre></td>
                    <td><pre><?PHP var_dump(json_decode($row['headers'])); ?></pre></td>
                    <td><?PHP echo $row['datetime']; ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>