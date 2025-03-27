<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
        <th>Name</th>
        <th>Salary</th>
        <th>Address</th>
        </tr>
        <?php
        foreach($employees as $emp){
            echo "
            <tr>
            <td>$emp[name]</td>
            <td>$emp[salary]</td>
            <td>$emp[address]</td>
            </tr>
            ";
        }

        ?>
  
    </table>
</body>
</html>