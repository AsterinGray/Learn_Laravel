<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/form/process" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

        Name : 
        <input type="text" name="name"> <br>
        Address :
        <input type="text" name="address"> <br>
        <input type="submit" value="keep">
    </form>
</body>
</html>