<!DOCTYPE html>

<html lang="{{ config('app.locale') }}">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Laravel</title>

<!-- Fonts -->

<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<!-- Styles -->

<style>

html, body {

/* background-color: #fff; */

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


.title {

font-size: 84px;

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
.pagination li{
    list-style-type: none;
    float: left;
    margin-left: 10px;
}
.pagination li span {
    color: #000;
}
.pagination li a {
    color: #000;
    text-decoration: none;
}



</style>

</head>

<body>



<div class="content">

<div class="title m-b-md">

Данные

</div>

<div>

<table>

@foreach ($posts as $post):

<tr>

<td>{{ $post->id }}</td>

<td>{{ $post->post }}</td>

</tr>

@endforeach

</table>

<div>{{ $posts->links('paginate') }}</div>

</div>

</div>

</div>

</body>

</html>