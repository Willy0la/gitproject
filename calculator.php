



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>

    <style>
        .container{
            background-color:#B0BEC5;
            margin:auto ;
            margin-top:48px;
            padding: 64px 48px;
            width: 50vw;
            height:50vh;
            font-size:14px;
            color: #212121;
            border:none;
            border-radius:14px;
            box-sizing:border-box;
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-items:center;

        }

        form{
            box-sizing:border-box;
            justify-items:center;
            
        }
        select{
            width: 100%;
            padding:8px 12px;
            border:2px solid magenta;
            border-radius:5px;
            box-sizing:border-box;
        }

        
        select:hover{
            background-color:#E0E0E0;
            
        }

        h3{
            color:;
            text-align:center;
        }
        p{
            padding:0px;
            color:#455A64;
        }

        input[type=number]{
            box-sizing:border-box;
            width:100% ;
            padding:12px;
            margin:auto;
            border: 2px solid magenta;
            border-radius:5px;
        }
        input[type=number]:hover{
            background-color:#E0E0E0;
        }
        input[type=number]:focus{
            background-color:#E3F2FD;
        }

        input[type=submit]{
            width:100% ;
            padding:12px;
            margin:auto;
            border: 1.5 solid blue;
            border-radius:5px;
            background-color:#37474F;
            color:#CFD8DC;
            font-size:14px;
        }


     

        input[type=submit]:hover{
           
            background-color:#ECEFF1;
            color:#263238;
            font-size:14px;
        }

    </style>
</head>


<h3>Mini Calculator</h3>
<body>
    <div class="container">

<form action="" method="post">

    <p><input type="number" name="num1"></p>

    <select name="operators">

        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>

    </select>

    <p><input type="number" name="num2"></p>

    <p><input type="submit" value="solve"></p>

</form>



    </div>



</body>
</html>

<?php
require_once("calhand.php");

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $calhan = new Callhand();
    $calhan->callhand();
}
?>
