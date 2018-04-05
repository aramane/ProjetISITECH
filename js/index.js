//Hiding error messages on 

$('#errMess').hide();
$('#sErrMess').hide();

$('#connectmodal').on('hidden.bs.modal', function () {
    $('#errMess').hide();
})

$('#Inscripmodal').on('hidden.bs.modal', function(){
    $('#sErrMess').hide();
    $('#Sname, #Sfirstname, #Saddress, #Sphone, #Semail, #Spassword').css("border-color", "#CED4DA");
})

$('#subscribe').on('click', function(e){
    e.preventDefault();
    $('#errMess').hide();
    $('#connectmodal').modal('hide');
    $('#Inscripmodal').modal('show');  
})

$('#connectLink').on('click', function(e){
    e.preventDefault();
    $('#sErrMess').hide();
    $('#Inscripmodal').modal('hide');
    $('#connectmodal').modal('show');
    $('#login').val($('#Semail').val());
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

function checkEmptyField(field)
{
    if(field.val().replace(/^\s+|\s+$/g, "").length != 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}

$('#subscribeBtn').on('click', function(e){
    e.preventDefault();
    var regmail = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    var regphone = /^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$/;
    if(!checkEmptyField($('#Sname')) || !checkEmptyField($('#Sfirstname')) || !checkEmptyField($('#Saddress')) || !checkEmptyField($('#Sphone')) || !checkEmptyField($('#Semail')) || !checkEmptyField($('#Spassword')))
    {
        if(!checkEmptyField($('#Sname'))) { $('#Sname').css("border-color", "red") };
        if(!checkEmptyField($('#Sfirstname'))) { $('#Sfirstname').css("border-color", "red") };
        if(!checkEmptyField($('#Saddress'))) { $('#Saddress').css("border-color", "red") };
        if(!checkEmptyField($('#Sphone'))) { $('#Sphone').css("border-color", "red") };
        if(!checkEmptyField($('#Semail'))) { $('#Semail').css("border-color", "red") };
        if(!checkEmptyField($('#Spassword'))) { $('#Spassword').css("border-color", "red") };
        $('#connectLink').hide();
        $('#sErrMessText').text("Les champs en rouge sont obligatoires.");
        $('#sErrMess').show();
    }
    else if(!regmail.test($('#Semail').val()))
    {
        $('#Semail').css('border-color', 'red');
        $('#connectLink').hide();
        $('#sErrMessText').text("L'adresse e-mail renseignée est incorrecte.");
        $('#sErrMess').show();
    }
    else
    {
        $.ajax({
            type: "POST",
            url: "model/ajax/register.php",
            cache: false,
            data: $("#subscribeForm").serialize(),
            dataType: "json",
            success: function (data)
            {
                if(data == 1)
                {
                    swal({
                        type: 'success',
                        title: 'Inscrit',
                        text: 'Vous-êtes maintenant inscris et vous pouvez profiter de nos services.',
                    }).then(function(){
                        window.location.reload();
                    });
                }
                else
                {
                    $('#connectLink').show();
                    $('#sErrMessText').text("Cette adresse email est déjà enregistrée. ");
                    $('#sErrMess').show();
                }
            },
            error: function () {
                alert('La requête AJAX n\'a pas abouti, contactez l\'administrateur');
            }
        });
    }
})

$('#Sname, #Sfirstname, #Saddress, #Sphone, #Semail, #Spassword').on('focus', function(){
    $(this).css("border-color", "#CED4DA");
})

