$('#errMess').hide();

$('#subscribe').on('click', function(e){
    e.preventDefault();
    $('#errMess').hide();
    $('#connectmodal').modal('hide');
    $('#Inscripmodal').modal('show');  
})

$('#connexionBtn').on('click', function (e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "model/ajax/connexion.php",
        cache: false,
        data: $("#connect").serialize(),
        dataType: "json",
        success: function (data)
        {
            if(data == 1)
            {
                window.location.reload();
            }
            else
            {
                $('#errMess').show();
            }
        },
        error: function () {
            alert('La requête AJAX n\'a pas abouti, contactez l\'administrateur');
        }
    });
})

