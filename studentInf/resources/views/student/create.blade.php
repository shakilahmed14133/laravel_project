 
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
    <style>
        .form-control{
            width: 50%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="/">HomePage</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="/view">view</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/create">Insert Inf.</a>
            </li>
            
          </ul>
        </div>
      </nav>

      
    <h2>Student Information:</h2>
    <form action="/store" method="post" class="was-validated">
        @csrf
        <div class="mb-2 mt-3">
          <label for="sid" class="form-label">Student ID:</label>
          <input type="text" class="form-control" id="stid" placeholder="Enter student ID" name="stid" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="mb-2 mt-3">
            <label for="sname" class="form-label">Student name:</label>
            <input type="text" class="form-control" id="stname" placeholder="Enter name" name="stname" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="mb-2 mt-3">
            <label for="department" class="form-label">Department:</label>
            <input type="text" class="form-control" id="stdept" placeholder="Enter Department" name="stdept" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>