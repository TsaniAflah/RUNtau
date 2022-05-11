@extends('template')
@section('title', 'Data Activity' )
<!--Data reservasi, edit, dan hapus data-->
@section('konten')

<body background="./img/About.png" ;>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!------ Include the above in your HEAD tag ---------->
    <div class="container">
        <h2> Today Activity </h2>
        <div class="row">
            <div class="table-responsive">
                <table id="mytable" class="table table-bordred table-striped">
                    <thead>
                        <th>Course</th>
                        <th>Time</th>
                        <th>Date</th>
                        <th>Classroom</th>
                        <th>Lecturer</th>
                    </thead>
                    <tbody>
                        @foreach($activity as $act)
                        <tr>
                            <td>{{$act->Course}}</td>
                            <td>{{$act->Time}}</td>
                            <td>{{$act->Date}}</td>
                            <td>{{$act->Classroom}}</td>
                            <td>{{$act->Lecturer}}</td>
                            <td>
                                <a href="/activity/edit/{{$act->Course}}">Edit</a>
                                <!--<-->
                                <a style="color:red;" href="/activity/hapus/{{$act->Course}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </div>
            </table>
        </div>
    </div>
    <!--  -->
    <h2>Add Activity</h2>
    <form action="/activity/store" method="post">
        {{csrf_field()}}
        &nbsp; &nbsp; &nbsp;Course&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type=text, name="Course" , required="required">&nbsp; &nbsp; &nbsp;Time &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type=text, name="Time" , required="required"></br><br>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Date&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="date", name="Date" , required="required">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Classroom &nbsp;&nbsp; &nbsp;<input type=text, name="Classroom" , required="required"></br><br>
        &nbsp; &nbsp; &nbsp; &nbsp;Lecturer&nbsp; &nbsp; &nbsp; <input type=text, name="Lecturer" , required="required"></br><br>
        <input type="submit" value="Save" style="background-color:#3FA796; color:white; padding:5px 10px 5px 10px">
    </form>
    </head>
    @endsection