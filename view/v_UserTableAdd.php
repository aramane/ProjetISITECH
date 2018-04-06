

<!DOCTYPE html>
<html>
<head>
    <title>ISILOC</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />


</head>

<body>




<section class="col-lg-8">


    </br>
    <form action="v_UserTableAddConfirm.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name"  aria-describedby="emailHelp" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="inputName">FirstName</label>
            <input type="text" class="form-control" name="firstName" aria-describedby="emailHelp" placeholder="Enter Firstname">
        </div>
        <div class="form-group">
            <label for="inputName">Address</label>
            <input type="text" class="form-control" name="address" aria-describedby="emailHelp" placeholder="Enter Address">
        </div>
        <div class="form-group">
            <label for="inputName">Phone</label>
            <input type="text" class="form-control" name="phone" aria-describedby="emailHelp" placeholder="Enter Phone ">
        </div>
        <div class="form-group">
            <label for="inputName">Email</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label for="inputName">Type</label>
            <select class="form-control">
                <option>Select type</option>
                <option>A</option>
                <option>C</option>
                <option>DC</option>
            </select>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="control-label">Password</label>
            <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
            <div class="help-block">Minimum of 6 characters</div>

            <label for="inputPassword" class="control-label">Confirm Password</label>
            <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm Password" required>

        </div>




        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Premium</label>
        </div>
        </br>
        <input type="submit" class="btn" value="OK">
    </form>
</section>




</body>


</html>