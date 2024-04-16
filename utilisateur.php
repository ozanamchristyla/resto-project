<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moi C'est l'utilisateur</title>
    <style>
        body{
            width: 100%;
            margin: 0;
        }
        table{
            border-collapse: collapse;
            margin: 25px 0;
            padding: 5px;
            font-size: 0.9em;
            font-family: sans-serif;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        td, th{
            padding: 10px;
            text-align: center;
        }
        thead{
            padding: 30px;
        }
        tbody tr{
            border-bottom: 1px solid #ddd;
        }
        thead tr, tfoot tr{
            background-color: #009879;
            color: #ffffff;
            text-align: center;
        }
        tbody tr.active-row{
            font-weight: bold;
            color: #009879;
        }
        tbody tr:nth-of-type(even){
            background-color: #f3f3f3;
        }
    </style>
</head>
<body>
    <h1>Mon Message</h1>

    <table>
        <thead>
            <tr>
                <th>Identifiant</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Mail</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php
        include "cnx.php";
        $req=mysqli_query($link, "SELECT * FROM contact");
        while ($res=mysqli_fetch_array($req))
        {


        ?>
        <tbody>
            <tr>
                <td><?php echo $res["id"] ;  ?></td>
                <td><?php echo $res["nom"] ;  ?></td>
                <td><?php echo $res["adress"] ;  ?></td>
                <td><?php echo $res["telephone"] ;  ?></td>
                <td><?php echo $res["email"] ;  ?></td>
                <td><?php echo $res["message"] ;  ?></td>
                <td><input type="checkbox" name="choix"></td>
            </tr>
        </tbody>

        <?php

        }

        ?>

        <tfoot>
            <tr>
                <td colspan="7">
                        Mon client agréable
                </td>
            </tr>
        </tfoot>
    </table>
</body>
</html>