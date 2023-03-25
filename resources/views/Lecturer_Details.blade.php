<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/adminstyle.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="wrapper-long">
        <div class="form_page">
        <div class="mt-5">                          
           <div class="container">
              <div class="input-group rounded">
                <input type="search" name="search" id="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                    
              </div>
             <!-- live search -->
                                

              <!-- Button Search -->
                <!-- <form action="{{url('search')}}" method="get">
                  <input type="search" name="search">
                  <input type="submit" value="Search">
                </form> -->
                                 
              </div>
            </div> 
            <div class="table_set">
                <h1>
                    Search Results  
                </h1>
                <br>
            <table class="table table-bordered ">
                <thead class="table table-dark">
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th style="width: 100px;">Remove</th>
                        <th style="width: 100px;">Update</th>
                    </tr>
                </thead>
                <tbody class="alldata">
                  @php
                      $counter = 1;
                  @endphp
                  @foreach ($data as $student)
                    <tr>
                        <td><b>{{$counter}}</b></td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->name}}</td>
                        <td><a href="{{url('update_view', $student->id)}}"><button type="button" class="btn btn-light" >Update</button></a>
                        <td><a href="{{url('delete', $student->id)}}"><button type="button" class="btn btn-danger" >Remove</button></a>   
                    </tr>
                    @php
                        $counter++;
                    @endphp 
                  @endforeach                  
                </tbody>
                <tbody id="showit" class="searchdata"></tbody>
            </table>
            </div>
        </div>
    </div>
    
      <script>
    $('#search').on('keyup', function(){
      $value = $(this).val();
      if($value){
        $('.alldata').hide();
        $('.searchdata').show();
      }
      else{
        $('.alldata').show();
        $('.searchdata').hide();
      }
      $.ajax({
        type:'get',
        url:'{{URL::to("search")}}',
        data:{'search':$value},

        success:function (data) {
          $('#showit').html(data);
        }

      })
    })
  </script>
</body>
</html>

