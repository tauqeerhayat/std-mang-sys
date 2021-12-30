<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Student Management System</title>
</head>

<body>
    @if($layout == 'index')
    <div class=" container-fluid">
        <div class="row">
            <section class="col-md-7 col-sm-12">
                <a href="/create" class="btn btn-success cr_new_link">Add New Student</a>
                @include('studentsList')
            </section>
            <section class="col-md-5 col-sm-12"></section>
        </div>
    </div>

    @elseif($layout == 'create')
    <div class="container-fluid">
        <div class="row">
            <section class="col-md-7 col-sm-12">
                <a href="/" class="btn btn-success cr_new_link">Back</a>
                @include('studentsList')
            </section>
            <section class="col-md-5 rightSec">
                <div class="container mt-1 newUser_con">
                    <h4 class="newUser">Add New Student</h4>
                    <form action="{{ url('/store')}}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="cne" class="form-label">CNE</label>
                            <input name="cne" type="text" class="form-control" placeholder="Enter your CNE">
                            @error('cne')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input name="firstName" type="text" class="form-control" placeholder="Enter your First Name">
                            @error('firstName')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input name="lastName" type="text" class="form-control" placeholder="Enter your Last Name">
                            @error('lastName')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input name="age" type="text" class="form-control" placeholder="Enter your Age">
                            @error('age')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="speciality" class="form-label">Speciality</label>
                            <input name="speciality" type="text" class="form-control" placeholder="Enter your Speciality">
                            @error('speciality')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-info" value="Save">

                    </form>
                </div>
            </section>
        </div>
    </div>

    @elseif($layout == 'show')
    <div class="container-fluid">
        <div class="row">
            <section class="col-md-7">
                @include('studentsList')
            </section>
            <section class="col-md-5"></section>
        </div>
    </div>

    @elseif($layout == 'edit')
    <div class="container-fluid">
        <div class="row">
            <section class="col-md-7">
                <a href="/" class="btn btn-success home_link">Back</a>
                <a href="/create" class="btn btn-success cr_new_link">Add New Student</a>
                @include('studentsList')
            </section>
            <section class="col-md-5 rightSec">
                <div class="container newUser_con">
                    <h4 class="upUser">Update Information:&nbsp;&nbsp;<b>{{ $student->firstName }}</b></h4>
                    <form action="{{ url('/update/'.$student->id)}}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="cne" class="form-label">CNE</label>
                            <input value="{{ $student->cne }}" name="cne" type="text" class="form-control" placeholder="Enter your CNE">
                        </div>
                        <div class="form-group mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control" placeholder="Enter your First Name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input value="{{ $student->lastName }}" name="lastName" type="text" class="form-control" placeholder="Enter your Last Name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input value="{{ $student->age }}" name="age" type="text" class="form-control" placeholder="Enter your Age">
                        </div>
                        <div class="form-group mb-3">
                            <label for="speciality" class="form-label">Speciality</label>
                            <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control" placeholder="Enter your Speciality">
                        </div>
                        <input type="submit" class="btn btn-info" value="Update">

                    </form>
                </div>
            </section>
        </div>
    </div>
    @endif

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>