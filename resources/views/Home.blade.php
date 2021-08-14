@extends("Layout.Layout")

@section("content")
    <h1>I am Home Page</h1>
   <form action="{{url('/')}}" method="post">
        @csrf

       Name: <input type="text" name="name" id=""><br><br>
       @error("name")
           <p style="color: red">{{$message}}</p><br>
       @enderror
       Age : <input type="number" name="age" id=""><br><br>
       @error("age")
            <p style="color: red">{{$message}}</p>
       @enderror
        <br><br>
       <input type="submit" value="post">
   </form>

   {{-- Feedback Date --}}

   @if (Session("message"))
       <h2>{{Session("message")}}</h2>
   @endif

   @endsection
