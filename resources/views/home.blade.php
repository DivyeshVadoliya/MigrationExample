<!DOCTYPE html>
<html>
<head>
     <!-- CSS only -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   {{-- <style>
        body > div > div > div.col-sm-7 > nav > div.hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between > div:nth-child(2)
            {
                display: none;
            }
    </style>--}}
    <title>Student</title>
   
</head>
<body>
    <div class="container mt-3">
        <div class="row">
             <div class="col-sm-5">

                <form method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="taxt" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                         <label for="gender" class="form-label">Gender</label>
                        <div class="form-check">
                             <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" checked>
                                <label class="form-check-label" for="radio1">Male</label>
                         </div>
                         <div class="form-check">
                              <input type="radio" class="form-check-input" id="radio2" name="gender" value="female">
                                  <label class="form-check-label" for="radio2">Female</label>
                         </div>  
                    </div>
                    <div class="mb-3">
                        <label for="address">Address:</label>
                        <textarea class="form-control" rows="2" id="address" name="address"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="marks">Marks</label>
                        <input type="number" name="marks" class="form-control" id="marks">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                </form>

                @if(session()->has('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
             </div>
             <div class="col-sm-7">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Address</th>
                            <th scope="col">Marks</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($student as $stu)
                        <tr>
                            <th>{{$stu -> id}}</th>
                            <td>{{$stu -> name}}</td>
                            <td>{{$stu -> email}}</td>
                            <td>{{$stu -> gender}}</td>
                            <td>{{$stu -> address}}</td>
                            <td>{{$stu -> marks}}</td>
                            <td>
                                <a href="{{url('/edit',$stu->id)}}" class="btn btn-info btn-sm">Edit</a>
                                <a href="{{url('/delete',$stu->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                 {{$student->links()}}
            </div>

        </div>
    </div>
 


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>