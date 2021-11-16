<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            *{
                font-family: 'Nunito';
                margin: 0;
                padding: 0 ;
            }
            h1{
                text-align: center;

            }
            h4{
                background-color: rgb(217, 217, 210);
                border-top-left-radius: 8px;
                border-top-right-radius: 8px;
            }
            article{
                border: 1px solid black;
                border-radius: 8px;
                margin-top:30px;
                margin-bottom:30px;
                margin-left: 33%;
                margin-right: 33%;
                width: 33%;
                height: 33%;
            }
            input{
                border-radius: 8px;
            }
            input:button{
                background-color: rgb(235, 80, 80);
            }
        </style>
    </head>
    <body class="antialiased">
    <h1>Task List</h1>
    <section>
        <article>

        <form method="POST" action="{{route('tareas.store')}}">
            @csrf
            <h4>New Task</h4>
            <p>Task</p>
            <input type="text" name="nombre"></input>
            <input type="submit" value="Add Task"></input>
            </form>
        </article>
        <article>
            <h4>Current Tasks</h4>
            <p>Task</p>
            @foreach($listaTareas as $tarea)

{{ $tarea->nombre }}
<form method="POST" action="{{route('tareas.destroy', $tarea->id)}}">
    @method('DELETE')
    @csrf
<input type="submit" value="delete"></input>


</form>
<br>


@endforeach
            
        </article>
    </section>

    
    </body>
</html>