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
                $('#errMess').text("Identifiant(s) incorrect.");
            }
        },
        error: function () {
            alert('La requête AJAX n\'a pas abouti, contactez l\'administrateur');
        }
    });
})

