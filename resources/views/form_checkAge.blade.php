<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('check-age\checked')}}" name="check_age" method="post">
    @csrf
    <label for="">nhập tuổi</label>
    <input type="number" min=0 max=100 name="age">
    <input type="submit" name="submit" value="ok">

    </form>
</body>
</html>