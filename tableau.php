

<?php
$connect = mysqli_connect("localhost", "root", "", "isiloc");
$query ="SELECT * FROM user ORDER BY ID DESC";
$result = mysqli_query($connect, $query);
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
                <td>Name</td>
                <td>FirstName</td>
                <td>Address</td>
                <td>Phone</td>
                <td>email</td>
                <td>Type</td>

            </tr>
            </thead>
            <?php
            while($row = mysqli_fetch_array($result))
            {
                echo '  
                               <tr>  
                                    <td>'.$row["name"].'</td>
                                    <td>'.$row["firstName"].'</td>    
                                    <td>'.$row["address"].'</td>  
                                    <td>'.$row["phone"].'</td>  
                                    <td>'.$row["email"].'</td>  
                                    <td>'.$row["type"].'</td>  
                               </tr>  
                               ';
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
</script>


