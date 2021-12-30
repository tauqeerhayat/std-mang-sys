<div class="main_container">
    <div class="card newUser">
        <div class="card-body">
            <h3 class="card-title">Student Management System</h3>
            <h5 class="card-title">List Of All Student</h5>
            <p class="card-text">You can find here all the information about student in the system.</p>
        </div>
    </div>
    <table class="table table-dark table-hover">
        <thead class="">
            <tr>
                <th scope="col">CNE</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->cne }}</td>
                <td>{{ $student->firstName }}</td>
                <td>{{ $student->lastName }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->speciality }}</td>
                <td>
                    <!-- <a href="#" class="btn btn-sm btn-info">Show</a> -->
                    <a href="{{ url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ url('/delete/'.$student->id) }}" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>