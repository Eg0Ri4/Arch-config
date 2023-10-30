<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>start page</title>
</head>
<body>
    <div style="position: absolute;left: 40%;top: 40%;">
            <h1>todo list</h1>
            <p>results here</p>
            @foreach ($listItems as $listitem)
                <div class='flex' style='style:flex; align-items:center;'>
                <p>Item: {{$listitem->name}}</p>
                <button type="submit" style="max-height: 25px; margin-left: 100px; margin-top:5px;">mark complete</button>
                </div>
            @endforeach
        <form method="post" action="{{ route('saveItem')}}" accept-charset="UTF-8">
        {{ csrf_field() }}

            <input type="text" name="listItem"><button type="submit">add</button>
        </form>
    </div>
</body>
</html>
