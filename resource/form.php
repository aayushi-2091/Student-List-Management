<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-primary-subtle">
    <div class="container border border-primary mt-5 w-50 p-3">
        <div>
            <h3>
                Add Student Details
            </h3>
        </div>
        <div>
            <form action="_formsubmit.php" method="POST">
                <div class="mb-3">
                  <label  class="form-label">Name</label>
                  <input class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">Address</label>
                    <input class="form-control" name="address">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">Phone Number</label>
                    <input type="number" class="form-control" name="phone">
                  </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>