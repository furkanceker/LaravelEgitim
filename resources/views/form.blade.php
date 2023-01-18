<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Örnek Form</title>
</head>
<body>
    <form action="{{route('sonuc')}}" method="post">
        @csrf
        <input type="text" name="mesaj"><br>
        <input type="submit" value="Gönder" name="ilet">
    </form>
</body>
</html>