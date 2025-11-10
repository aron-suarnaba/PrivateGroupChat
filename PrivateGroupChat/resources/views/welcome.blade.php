<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources\css\app.css', 'resources\bootstrap-5.3.8-dist\bootstrap-5.3.8-dist\css\bootstrap.min.css','resources\bootstrap-icons-1.13.1\bootstrap-icons-1.13.1\bootstrap-icons.css', 'resources\js\app.js', 'resources\bootstrap-5.3.8-dist\bootstrap-5.3.8-dist\js\bootstrap.min.js'])
</head>
<body>
    <div class="container">
        <div class="row mt-5 d-flex justify-content-center align-items-center">
            <div class="col-sm-12 col-md-5 ">
                <div class="card">
                    <div class="card-content">
                        <div class="card-header display-5 fw-bold">
                            Login
                        </div>
                        <div class="card-body py-5">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="email" placeholder="Email">
                                <label for="email">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-center align-items-center py-3">
                            <button type="submit" class="btn btn-success">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
