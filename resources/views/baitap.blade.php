<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="comments" action="{{url('/create-post')}}" method="post">
    @csrf

    <label for="">comment</label>
    <input type="text" name="comment">
    <input type="submit" name="submit" value="bình luận">
    </form>
</body>
</html>