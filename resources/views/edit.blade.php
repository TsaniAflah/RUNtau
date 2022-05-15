@extends('template')
@section('title', 'Edit Data Activity')
<!--Membuat edit berdasarkan kolom-->
@section('konten')
@foreach($activity as $act)

<<<<<<< HEAD
<body background="https://wallpaperset.com/w/full/1/b/9/7685.jpg" ;>
=======
>>>>>>> main
    <br>
    <br>
    <form action="/activity/update" method="post"; >
        {{csrf_field()}}
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Course &nbsp; &nbsp; &nbsp; <input type=text, name="Course" , required="required" , value="{{$act->Course}}">
        &nbsp; &nbsp; &nbsp;Time &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type=text, name="Time" , required="required" , value="{{$act->Time}}"></br><br>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Date &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="date" , name="Date" , required="required" , value="{{$act->Date}}">
        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Classroom &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type=text, name="Classroom" , required="required" , value="{{$act->Classroom}}"></br><br>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lecturer &nbsp; &nbsp; <input type=text, name="Lecturer" , required="required" , value="{{$act->Lecturer}}"></br><br>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" value="Save" style="color:white; background-color:#3FA796; padding:5px 10px 5px 10px">
    </form>
</body>
@endforeach
@endsection