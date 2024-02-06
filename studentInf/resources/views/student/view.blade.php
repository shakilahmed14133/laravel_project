<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="/">HomePage</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="/create">InsertInf</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/view">view</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="container">
        <h2>Student Table</h2>
                    
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>S.ID</th>
              <th>Name</th>
              <th>Department</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($students as $student )
            <tr>
              <td>{{ $student->StudentID }}</td>
              <td>{{ $student->StudentName }}</td>
              <td>{{ $student->Department }}</td>
              <td>
              <form  method="post" action="/delete" onsubmit="return confirm('Sure?')">
                @csrf
                <input type="hidden" name="id" value="{{ $student->id }}">
                <input type="submit" style="padding: 0; margin: 0" value="Delete" class="btn btn-link text-danger"/>
               </form>
        </td>
             
            </tr>
            @endforeach
            
            
          </tbody>
        </table>
      </div>
</body>
</html>