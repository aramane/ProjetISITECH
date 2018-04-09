$('#addUserModal').on('hidden.bs.modal', function () {
    $('#createErrMess').hide();
    $('#newUserName, #newUserFirstName, #newUserAddress, #newUserPhone, #newUserEmail, #newUserPassword').css("border-color", "#CED4DA");
})

$('#updateUserModal').on('hidden.bs.modal', function () {
    $('#updateErrMess').hide();
    $('#updateUserName, #updateUserFirstName, #updateUserAddress, #updateUserPhone, #updateUserEmail, #updateUserPassword').css("border-color", "#CED4DA");
})

//delete

$('.delUser').on('click', function (e) {
    e.preventDefault();
    var id = $(this).closest('tr').prop('id');
    swal({
        title: 'Confirmation',
        text: "Voulez-vous supprimer cet utilisateur? (Ce dernier ne pourra plus se connecter ni profiter des services)",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: 'blue',
        confirmButtonText: 'Supprimer',
        cancelButtonText: 'Annuler',
        confirmButtonClass: 'btn btn-danger',
        cancelButtonClass: 'btn btn-info',
        buttonsStyling: false,
        reverseButtons: true
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: "POST",
                url: "model/ajax/deleteUser.php",
                cache: false,
                data: {'id': id},
                success: function ()
                {
                    window.location.reload();
                },
                error: function () {
                    alert('La requête AJAX n\'a pas abouti, contactez l\'administrateur');
                }
            });
        }
    })
})

//Add

$('#addUserBtn').on('click', function (e) {
    e.preventDefault();
    if (!checkEmptyField($('#newUserName')) || !checkEmptyField($('#newUserFirstName')) || !checkEmptyField($('#newUserAddress')) || !checkEmptyField($('#newUserPhone')) ||
            !checkEmptyField($('#newUserEmail')) || !checkEmptyField($('#newUserPassword')))
    {
        if (!checkEmptyField($('#newUserName'))) {
            $('#newUserName').css("border-color", "red")
        }
        ;
        if (!checkEmptyField($('#newUserFirstName'))) {
            $('#newUserFirstName').css("border-color", "red")
        }
        ;
        if (!checkEmptyField($('#newUserAddress'))) {
            $('#newUserAddress').css("border-color", "red")
        }
        ;
        if (!checkEmptyField($('#newUserPhone'))) {
            $('#newUserPhone').css("border-color", "red")
        }
        ;
        if (!checkEmptyField($('#newUserEmail'))) {
            $('#newUserEmail').css("border-color", "red")
        }
        ;
        if (!checkEmptyField($('#newUserPassword'))) {
            $('#newUserPassword').css("border-color", "red")
        }
        ;
    } else
    {
        $.ajax({
            type: "POST",
            url: "model/ajax/addUser.php",
            cache: false,
            data: $("#addUserForm").serialize(),
            dataType: "json",
            success: function (data)
            {
                if (data == 0)
                {
                    $('#createErrMess').text("L'email de l'utilisateur est déjà utilisée. Supprimez l'utilisateur en question avant d'en recréer un nouveau.");
                } else if (data == 1)
                {
                    window.location.reload();
                }
            },
            error: function () {
                alert('La requête AJAX n\'a pas abouti, contactez l\'administrateur');
            }
        });
    }
})

//Update

$('.updateUser').on('click', function (e) {
    e.preventDefault();
    var id = $(this).closest('tr').attr('id');
    $.ajax({
        type: "POST",
        url: "model/ajax/fillFormUpdateUser.php",
        cache: false,
        data: {'id': id},
        dataType: "json",
        success: function (data)
        {
            $('#updateUserName').val(data.name);
            $('#updateUserFirstName').val(data.firstName);
            $('#updateUserAddress').val(data.address);
            $('#updateUserPhone').val(data.phone);
            $('#updateUserEmail').val(data.email);
            $('#updateUserPassword').val(data.password);
            $('#updateUserType').val(data.type);
            $('#idUser').val(id);
            if (data.premium == 1)
            {
                $("#updateUserRadio1").prop('checked', true);
            } else if (data.premium == 0)
            {
                $("#updateUserRadio2").prop('checked', true);
            }
        },
        error: function () {
            alert('La requête AJAX n\'a pas abouti, contactez l\'administrateur');
        }
    });
})

$('#updateUserBtn').on('click', function (e) {
    e.preventDefault();
    var id = $('#idUser').val();
    if (!checkEmptyField($('#updateUserName')) || !checkEmptyField($('#updateUserFirstName')) || !checkEmptyField($('#updateUserAddress')) || !checkEmptyField($('#updateUserPhone')) ||
            !checkEmptyField($('#updateUserEmail')) || !checkEmptyField($('#updateUserPassword')))
    {
        if (!checkEmptyField($('#updateUserName'))) {
            $('#updateUserName').css("border-color", "red")
        }
        ;
        if (!checkEmptyField($('#updateUserFirstName'))) {
            $('#updateUserFirstName').css("border-color", "red")
        }
        ;
        if (!checkEmptyField($('#updateUserAddress'))) {
            $('#updateUserAddress').css("border-color", "red")
        }
        ;
        if (!checkEmptyField($('#updateUserPhone'))) {
            $('#updateUserPhone').css("border-color", "red")
        }
        ;
        if (!checkEmptyField($('#updateUserEmail'))) {
            $('#updateUserEmail').css("border-color", "red")
        }
        ;
        if (!checkEmptyField($('#updateUserPassword'))) {
            $('#updateUserPassword').css("border-color", "red")
        }
        ;
    } else
    {
        $.ajax({
            type: "POST",
            url: "model/ajax/updateUser.php",
            cache: false,
            data: $("#updateUserForm").serialize() + "&id=" + id,
            success: function ()
            {
                swal({
                    type: 'success',
                    title: 'Modification effectuée',
                    text: 'L\'utilisateur a bien été modifié',
                }).then(function () {
                    window.location.reload();
                });
            },
            error: function () {
                alert('La requête AJAX n\'a pas abouti, contactez l\'administrateur');
            }
        });
    }
})

function checkEmptyField(field)
{
    if (field.val().replace(/^\s+|\s+$/g, "").length != 0)
    {
        return true;
    } else
    {
        return false;
    }
}

$('#newUserName, #newUserFirstName, #newUserAddress, #newUserPhone, #newUserEmail, #newUserPassword').on('focus', function () {
    $(this).css("border-color", "#CED4DA");
})

$('#updateUserName, #updateUserFirstName, #updateUserAddress, #updateUserPhone, #updateUserEmail, #updateUserPassword').on('focus', function () {
    $(this).css("border-color", "#CED4DA");
})



