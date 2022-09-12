<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            float: left;
            width: 50px;
            height: 50px;
            text-align: center;
            margin: 10px;
            background-color: green;
            line-height: 50px;
        }
    </style>
</head>

<body>
    <?php
for ($i=1;$i<=100;$i++) {
    echo "<div>$i</div>";
}
    ?>
</body>

</html>