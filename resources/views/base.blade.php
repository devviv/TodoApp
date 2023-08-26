<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>My Todo</title>
</head>
<body>
    <main>
        <div class="bashbord">
            <ul>
                <li><a href="{{route('index')}}">Ma journée</a></li>
                <li><a href="{{route('task')}}">Mes taches</a></li>
                <li><a href="{{route('endtasks', )}}">Terminées </a></li>
                <li><a href="{{route('noendtasks')}}">Non terminées</a></li>
            </ul>
        </div>
        @yield('main')
    </main>
</body>
</html>