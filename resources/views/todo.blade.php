<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 18px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md" style="margin-top: 70px">
            <form action="/todo/create" method="post">
                {{csrf_field()}}
                <input type="text" class="form-control" name="todo" placeholder="Create New Todo">
            </form>
            <hr>
            @foreach($todos as $todo)
                {{$todo->todo}}
                <a href="{{route('todo.delete', ['id' => $todo->id])}}" class="btn btn-danger btn-xs"> x </a>
                <a href="{{route('todo.edit', ['id' => $todo->id])}}" class="btn btn-warning btn-xs">Edit</a>
            @if(!$todo->completed)
                <a href="{{route('todo.complete', ['id' => $todo->id])}}" class="btn btn-primary btn-xs">Complete</a>
                @else

                    <span class="btn btn-success btn-xs">Comepleted!</span>

                @endif
                <hr>
            @endforeach
        </div>
    </div>
</div>
</body>
</html>
