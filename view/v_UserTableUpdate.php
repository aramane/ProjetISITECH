<?php include("../model/loadclass.php"); 


$usermanager = new UserManager();

$user = $usermanager->get($_GET['id']);

?>
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
<<<<<<< HEAD




        <section class="col-lg-8">


        </br>
            <form action="v_UserTableUpdateConfirm.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nom</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Firstname">
                </div>
                <div class="form-group">
                    <label for="inputName">Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
                </div>
                <div class="form-group">
                    <label for="inputName">Phone</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone ">
                </div>
                <div class="form-group">
                    <label for="inputName">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
=======
            <form action="v_UserTableUpdateConfirm.php?id=<?= $_GET['id']; ?>" method="post">
                <div class="form-group">
                    <label for="inputName">Nom</label>
                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="<?php echo $user->name(); ?>" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="inputName">Prénom</label>
                    <input type="text" class="form-control" name="firstName" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="inputName">Adresse</label>
                    <input type="text" class="form-control" name="address" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="inputName">Téléphone</label>
                    <input type="text" class="form-control" name="phone" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="inputName">Email</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="inputName">Type</label>
                    <input type="email" class="form-control" name="type" aria-describedby="emailHelp" placeholder="Enter email">
>>>>>>> 4df5284ee2fb9e8b2295b15069fd462e48c3af83
                </div>
                <div class="form-group">
                    <label for="inputName">Type</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Type">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Premium</label>
                </div>
            </br>

                <button type="button" class="btn btn-secondary">Submit</button>
            </form>
        </section>




    </body>


</html>



