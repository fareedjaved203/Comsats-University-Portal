<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Update Page</h1>

  <!-- <div>{{$student->name}}</div>
  <div>{{$student->email}}</div>
  <div><img src="/student/{{$student->image}}"></div> -->

  <form action="{{url('update', $student->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
      <label>Student Name</label>
      <input type="text" name="name" value="{{$student->name}}">
    </div>
    <div>
      <label>Student Email</label>
      <input type="email" name="email" value="{{$student->email}}">
    </div>
    <div>
      <label>Old Image</label>
      <div><img src="/student/{{$student->image}}"></div>
    </div>
    <div>
      <label>Change Image</label>
      <input type="file" name="file">
    </div>
    <div>
      <input type="submit" value="Update">
    </div>
    
  </form>
</body>
</html>