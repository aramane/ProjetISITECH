$('#addUserBtn').on('click', function (e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "model/ajax/addUser.php",
        cache: false,
        data: $("#addUserForm").serialize(),
        dataType: "json",
        success: function (data)
        {
            alert(data);
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

$('#Sname, #Sfirstname, #Saddress, #Sphone, #Semail, #Spassword').on('focus', function(){
    $(this).css("border-color", "#CED4DA");
})



