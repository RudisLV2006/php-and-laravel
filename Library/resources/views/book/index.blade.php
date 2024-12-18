<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="#">Create new book</a>

    @foreach($allbooks as $book)
        <li>

            <h4>{{$book->title}}</h4>








        </li>
    @endforeach
</body>
</html>