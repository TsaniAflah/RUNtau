@extends('template')
@section('title', 'Edit Data Activity')
<!--Membuat edit berdasarkan kolom-->
@section('konten')
@foreach($activity as $act)
<form action="/activity/update" method="post" background="./img/About.png">
    {{csrf_field()}}
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Course &nbsp; &nbsp; &nbsp; <input type=text, name="Course" , required="required" , value="{{$act->Course}}">
    Time &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type=text, name="Time" , required="required" , value="{{$act->Time}}"></br><br>
    &nbsp; &nbsp; &nbsp; &nbsp;Classroom &nbsp; &nbsp; &nbsp;<input type=text, name="Classroom" , required="required" , value="{{$act->Classroom}}">
    Lecturer &nbsp; &nbsp; &nbsp;<input type=text, name="Lecturer" , required="required" , value="{{$act->Lecturer}}"></br><br>
    &nbsp; &nbsp; &nbsp;<input type="submit" value="Simpan Data" style="color:blue">
</form>
@endforeach
@endsection