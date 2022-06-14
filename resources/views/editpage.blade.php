<!DOCTYPE html>
<html>
<head>
     <!-- CSS only -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Student</title>
   
</head>
<body>
    <div class="container mt-3">
        <div class="row">
             <div class="col-sm-5">

                <form method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="taxt" class="form-control" id="name" name="name" value="{{$student->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$student->email}}">
                    </div>
                    <div class="mb-3">
                         <label for="gender" class="form-label"value="{{$student->gender}}">Gender</label>
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
                        <input type="text" class="form-control" rows="3" id="address" name="address" value="{{$student-> address}}">
                    </div>
                    <div class="mb-3">
                        <label for="marks">Marks</label>
                        <input type="number" name="marks" class="form-control" id="marks" value="{{$student->marks}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    
                </form>

               
             </div>
             

        </div>
    </div>
 


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>