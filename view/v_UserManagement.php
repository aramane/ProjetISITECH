
<h3 style="margin-top: 3%; margin-bottom: 1%;" class="text-center">Gestion des utilisateurs</h3>

<div style="margin-left: 1%; margin-right: 1%;">
    <div class="col-md-12">
        <?php include("v_FormCreateUser.php"); ?>
    </div><br />
    <table id="user_data" class="table-striped table table-bordered">
        <thead>
            <tr>
                <th class="text-center">Nom</th>
                <th class="text-center">Prénom</th>
                <th class="text-center">Adresse</th>
                <th class="text-center">Téléphone</th>
                <th class="text-center">Email</th>
                <th class="text-center">Premium</th>
                <th class="text-center">Type</th>
                <th class="text-center">Password</th>
                <th class="text-center"><i class="fa fa-cog"></i></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($row as $key => $value) {
                if($value->type() == 'C')
                {
                    $type = "Client";
                }
                elseif($value->type() == 'DC')
                {
                    $type = "Direction commerciale";
                }
                elseif($value->type() == 'A')
                {
                    $type = "Administrateur";
                }
                echo '<tr class="text-center" id="' . $value->id() . '">';
                echo '<td>' . $value->name() . '</td>';
                echo '<td>' . $value->firstName() . '</td>';
                echo '<td>' . $value->address() . '</td>';
                echo '<td>' . $value->phone() . '</td>';
                echo '<td>' . $value->email() . '</td>';
                echo '<td>' . ($value->premium() == 1 ? "OUI" : "NON") . '</td>';
                echo '<td>' . $type . '</td>';
                echo '<td>' . $value->password() . '</td>';
                echo '<td><button class="btn btn-primary updateUser" title="Modifier un utilisateur" data-toggle="modal" data-target="#updateUserModal"><i class="fa fa-edit"></i></button>&nbsp;&nbsp;&nbsp;<button class="btn btn-danger delUser" title="Supprimer un utilisateur" id="deleteBtn"><i class="fa fa-trash"></i></button></td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    <?php include("v_FormUpdateUser.php"); ?>
</div>

<script>
    $(document).ready(function () {
        $('#user_data').DataTable({
            "language": {
                "lengthMenu": "Montrer _MENU_ résultats par page",
                "paginate": {
                    "previous": "<",
                    "next": ">",
                },
                "search": "Rechercher : "
            },
            "info": false,
        });
    });

    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
</script>


