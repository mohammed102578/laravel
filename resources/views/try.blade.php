<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

       
    </head>
    <body>
        <div style="back-ground-color:#eee;color:#000">I am{{$name}}
         I am {{$age}}old</div>
         @if($age==22&&$name=='mohammed')
     good
         @else
         bad
         @endif
         @for($i=0; $i<=10;$i++)
        @for($x=0; $x<$i;$x++)
         #
         @endfor
         <br>
         @endfor
         
    </body>
</html>
