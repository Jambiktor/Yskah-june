<?php
    include("head.php");
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css\registration1.css" />
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center p-3 p-md-5">
        <div class="wrapper bg-light">
            <h2 class="mb-4 mt-2 ms-1">Sign up</h2>
            <form action="registration.php" method="POST">
                <div class="d-flex gap-1">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="form-floating mb-3 w-50 ">
                        <input type="text" class="form-control" id="firstName" name="first_name" placeholder="John"
                            required />
                        <label for="firstName" class="form-label text-secondary">First name</label>
                    </div>
                    <div class="form-floating mb-3 w-50">
                        <input type="text" class="form-control" id="lastname" name="last_name" placeholder="Doe"
                            required />
                        <label for="lastname" class="form-label text-secondary">Last name</label>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="sex">Sex</label>
                    <select class="form-select" id="sex" name="sex">
                        <option selected>Choose...</option>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                    </select>
                </div>
                <div class="form-floating mb-3 w-100">
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com"
                        required />
                    <label for="email" class="form-label text-secondary">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="63+" required />
                    <label for="phone" class="form-label text-secondary">Phone</label>
                </div>

                <div class="row pb-2">
                    <div class="col-12 pb-2">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" name="address"
                            placeholder="1234 Main St">
                    </div>
                    <div class="col-md-4">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" name="city" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputProvince" class="form-label">Province</label>
                        <input type="text" class="form-control" name="province" id="inputProvince">
                    </div>
                    <div class="col-md-4">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" class="form-control" name="zip" id="inputZip">
                    </div>
                </div>

                <div class="d-flex flex-wrap flex-md-nowrap gap-1">
                    <div class="form-floating mb-md-3 mb-1 w-50">
                        <input type="text" class="form-control" id="username" placeholder="password" name="username"
                            required />
                        <label for="username" class="form-label text-secondary">Username</label>
                    </div>

                    <div class="form-floating mb-md-3 mb-2 w-50">
                        <input type="password" class="form-control" id="password" placeholder="password" name="password"
                            required />
                        <label for="password" class="form-label text-secondary">Password</label>
                    </div>
                </div>

                <div
                    class="d-flex flex-row flex-wrap justify-content-center justify-content-md-between align-items-center">
                    <div class="">
                        <button type="submit" class="btn btn-primary">Sign up</button>
                    </div>
                    <div class="">
                        <h6 class="text-secondary">
                            Already have an account?
                            <a class="text-decoration-none" href="login_form.php">Log in</a>
                        </h6>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>