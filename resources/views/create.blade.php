<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

@foreach($date as $d)
@if(sizeof($d)==1)
 <p>لا يوجد شريك,{{$d[0]}}</p>
@else <p>{{$d[0]}} , {{$d[1]}}</p>

@endif


@endforeach



</body>
</html>