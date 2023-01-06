<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>apled</title>
</head>
<body>
    <form action="/uploadprofile" method="POST" enctype="multipart/form-data">
        @csrf
    <input type="file" name="photo">
    <input type="submit" name="Upload">
    
    </form>
</body>
</html>