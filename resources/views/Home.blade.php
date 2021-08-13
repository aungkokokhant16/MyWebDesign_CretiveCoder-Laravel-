@extends("Layout.Layout")

@section("content")
    <h1>I am Home Page</h1>
   <form action="{{url('/home')}}" method="post">
        @csrf

       Name: <input type="text" name="name" id=""><br><br>
       Age : <input type="number" name="age" id="">
        <br><br>
       <input type="submit" value="post">
   </form>

   {{-- Feedback Date --}}

   @if (Session("message"))
       <<h2>{{Session("message")}}</h2>
   @endif

   @endsection
