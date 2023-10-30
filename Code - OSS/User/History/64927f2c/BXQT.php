<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>start page</title>
</head>
<body>
    <div style="position: absolute;left: 45%;top: 45%;">
            <h1>todo list</h1>
            <p>results here</p>
            @foreach ($listItems as $listitem)
                <p>Item: {{$listitem->name}}</p>
            @endforeach
        <form method="post" action="{{ route('saveItem')}}" accept-charset="UTF-8">
        {{ csrf_field() }}

            <input type="text" name="listItem"><button type="submit">add</button>
        </form>
    </div>
</body>
</html>
