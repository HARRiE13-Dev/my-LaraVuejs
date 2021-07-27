<?PHP
header('Access-Control-Allow-Origin: https://api.mju.ac.th/Student/API/STUDENTe8ee4f3759cc4763a8f231965a2da6db23052020/Program/0401');
?>
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LaraVue</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="/css/app.css">
      
    </head>
    <body class="antialiased">
        <div id="app">
            <example-component></example-component>
            <user></user>
            <apimju></apimju>
     
        </div>
    </body>
    <script src="{{ mix('/js/app.js') }}"></script>
</html>
