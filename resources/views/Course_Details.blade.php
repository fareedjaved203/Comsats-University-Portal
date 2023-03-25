<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/course_details.css') }}" rel="stylesheet">
    <title>Student Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous">
    </script>
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="wrapper-long">
        <div class="form_page">
            <div class="container-fluid">
                <div class="row single-form g-0">
                        <div class="col-sm-12 col-lg-6 "> 
                        <center>
                        <div class="left">
                            <h2> Course Details</h2>
                        </div>
                        </center>
                    </div>
                    <div class="col-sm-12 col-lg-6"> 
                        <div class="right"> 
                            <i class="fa fa-caret-left"></i>
                            <div id="alert" class="d-none"></div>

                            @if(session()->has('alert-danger'))
                                <div class="alert alert-danger">
                                    {{ session()->get('alert-danger') }}
                                </div>
                            @endif


                              @if (Session::has('error'))
                                  <div class="alert alert-danger">{{ Session::get('error') }}</div>
                              @elseif (Session::has('success'))
                                  <div class="alert alert-success">{{ Session::get('success') }}</div>
                              @endif
                              <form id="form" action="/admin_dashboard/course_details" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="Course Title" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Course Title" pattern="[a-zA-Z ]+" required
                                     >
                                </div>
                                <div class="mb-3">
                                    <label for="desc" class="form-label">Description</label>
                                    <textarea name="description" cols="30" rows="3" class="form-control" placeholder="Enter Course Description" style="resize: none;" pattern="[a-zA-Z ]+" required></textarea>
                                </div>
                                <!-- <br> -->
                                <div class="dropdown bg-white">
                                  <select class="form-select" name="teacher" aria-label="Default select example">
                                    <option selected>Select Teacher</option>
                                    @foreach($teacher as $teacher)
                                    <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                                <br>
                                <div>
                                    <!-- <label class="form-label" for="customFile">Choose File</label> -->
                                    <input type="file" name="file" class="form-control" id="customFile" accept="image/jpeg, image/jpg, image/png" required />
                                </div>
                                
                                <input type="submit" value="Submit" class="btn btn-primary mt-4">

                                

                            </form>  
                            <a href="{{ url('/admin_dashboard') }}"><button class="float-right" type="button" style="position: relative; top: 140px; left: 60px;">Go Back</button></a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    
</body>
</html>

