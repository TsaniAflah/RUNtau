@extends('template')
@section('title', 'Input Data Reservasi')
<!--Membuat isi input data user-->
@section('konten')
<br><img src="/img/coffee1.png" ; width="1000"></br>
<img src="/img/coffee.png" style="float:left" ; width="300">
<form action="/reservasi/store" method="post">
        {{csrf_field()}}
        &nbsp; &nbsp; &nbsp;Atas nama &nbsp; &nbsp; &nbsp; <input type=text, name="Nama" , required="required">&nbsp; &nbsp; &nbsp;Hotel &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type=text, name="Hotel" , required="required"></br><br>
        &nbsp; &nbsp; &nbsp;Kedatangan &nbsp;&nbsp; &nbsp;<input type=text, name="Kedatangan" , required="required">&nbsp; &nbsp; &nbsp;Keberangkatan&nbsp; &nbsp; &nbsp; <input type=text, name="Keberangkatan" , required="required"></br><br>
        &nbsp; &nbsp; &nbsp;Jenis &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type=text, name="Jenis" , required="required"></br><br>
        <input type="submit" value="Pesan sekarang">
</form>
@endsection