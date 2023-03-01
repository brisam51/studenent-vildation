<!DOCTYPE html>
<html>
<header>
    <title>vilidate project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</header>

<body>

    <div class="flex justify-center" >

        <div class="card mt-4 rounded-md" style=" border-width:2px; border-color:red; width:30rem; height:24rem; ">
            <div class="card-header">
                <h2 class="flex justify-center mt-3 " >Data Form</h2>
                <div class="flex justify-between">
                    <a  href="{{url('home')}}">Add New</a>
                </div>

            </div>
            <div class="card-body">
<table class="table-fixed">
    <thead>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>gender</th>
            <th>age</th>
        </tr>

    </thead>
    @foreach ( $student as $stu )


   <tbody>
<tr>
    <td>{{$stu['name']}}</td>
    <td>{{$stu['email']}}</td>
    <td>{{$stu['gender']}}</td>
    <td>{{$stu['age']}}</td>
</tr>

   </tbody>
   @endforeach
</table>

            </div>
        </div>
    </div>



</body>

</html>
