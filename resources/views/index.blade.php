<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

<form action="{{Route('Students.group')}}"  method="post">
@csrf
    <h3>ادخال الطلاب</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1"  class="form-label">ادخال الطالب الاول</label>
    <input type="text" name="name1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ادخال الطالب التاني</label>
    <input type="text" name="name2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ادخال الطالب التالت</label>
    <input type="text" name="name3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ادخال الطالب الرابع</label>
    <input type="text" name="name4" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ادخال الطالب الخامس</label>
    <input type="text" name="name5" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</body>
</html>