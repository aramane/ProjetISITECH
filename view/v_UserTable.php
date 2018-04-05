<?php
include("../model/loadclass.php");

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
<br /><br />
<div class="container">
    <h3 align="center">Tableau</h3>
    <br />
    <div class="table-responsive">
        <table id="user_data" class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Adresse</td>
                <td>Téléphone</td>
                <td>Email</td>
                <td>Modifier</td>
            </tr>
            </thead>
            <?php
$userManager = new UserManager();
$row = $userManager->getFullList();

    foreach($row as $key => $value)
    {
        echo '<tr>';
        echo '<td>'.$value->name().'</td><br>';
        echo '<td>'.$value->firstName().'</td><br>';
        echo '<td>'.$value->address().'</td><br>';
        echo '<td>'.$value->phone().'</td><br>';
        echo '<td>'.$value->email().'</td><br>';
        echo '<td> <a href="v_UserTableUpdate.php"><span>modifier</span></a></td><br>';
        echo '</tr>';
    }
    ?>
      

        </table>
    </div>
</div>

</body>
</html>
<script>
    $(document).ready(function(){
        $('#user_data').DataTable();
    });
    
    $('#myModal').on('shown.bs.modal', function (){
        $('#myInput').trigger('focus')
    })
</script>


