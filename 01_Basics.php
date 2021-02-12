<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
    <style>
    *{
        margin: 0;
        border: 0;
        box-sizing: border-box;
    }
    .container
    {
        max-width: 80%;
        background-color: grey;
        margin: auto;

    }
    </style>
</head>
<body>
    <div class="container">
    <h1>Let's Party??</h1>
    <p>Your party eligibility</p>
    <?php
    $age=22;
    if($age>18)
    echo "Yes";
    else if($age==7)
    echo "You are just 7"; 
    else 
    echo "No";
    ?>
    </div>
</body>
</html>