<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>start page</title>
</head>
<body>
    <div style="position: absolute;left: 40%;top: 20s%;">
            <h1>todo list</h1>
            @foreach ($listItems as $listitem)
                <form method="post" action="{{ route('markComplete', $listitem->id)}}" accept-charset="UTF-8" style='display:flex; align-items:center;'>
                <p>Item: {{$listitem->name}}</p>
                <button type="submit" style="max-height: 25px; margin-left: 20px;">mark complete</button>
                </form>
            @endforeach
        <form method="post" action="{{ route('saveItem')}}" accept-charset="UTF-8">
        {{ csrf_field() }}

            <input type="text" name="listItem"><button type="submit">add</button>
        </form>
    </div>
</body>
</html>
