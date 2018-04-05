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
<<<<<<< HEAD
                $('#errMess').text("Identifiant(s) incorrect.");
=======
                $('#errMess').text("Identifiant(s) incorrect().");
>>>>>>> 06eeb0d3e5bf915ef9a05432d859f31067681da0
            }
        },
        error: function () {
            alert('La requête AJAX n\'a pas abouti, contactez l\'administrateur');
        }
    });
})

