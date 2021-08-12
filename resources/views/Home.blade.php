<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <form action="{{url('/home')}}" method="post">
        @csrf

       Name: <input type="text" name="name" id=""><br><br>
       Age : <input type="number" name="age" id="">
        <br><br>
       <input type="submit" value="post">
   </form>

   {{-- Feedback Date --}}

   @if (Session("message"))
       <div><h2>{{Session("message")}}</h2></div>
   @endif
</body>
</html>
