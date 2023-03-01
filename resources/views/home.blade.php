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
            </div>
            <div class="card-body">
                <form action="{{url('store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="m-4" >
                        <label>Name: </label>
                        <input type="text"  name="name" id="name" placeholder="Insert Name" style="border-width: 2px">
                    </div>
                    <div class="m-4" >
                        <label>Email: </label>
                        <input type="text"  name="email" id="email" placeholder="Insert email" style="border-width: 2px">
                    </div>
                    <div class="m-4" >
                        <label>Age  : </label>
                        <input type="text"  name="age" id="age" placeholder="Insert age" style="border-width: 2px">
                    </div>
                    <div class="ml-4">
                        <button class="bg-blue-500 py-1 px-5 text-white  rounded-full"  type="submit">send</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



</body>

</html>
