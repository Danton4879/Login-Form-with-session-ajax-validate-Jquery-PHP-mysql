$(document).ready(function () {
    $("#btnLogin").on('click', function () {
        var email = $("#email").val();
        var senha = $("#senha").val();
        
        if (email == "" || senha == "")
            alert("Um ou mais campos não foram preenchidos");
        else {
            $.ajax(
                {
                    url: 'http://localhost/crm/assets/php/verificaLogin.php',
                    method: "POST",
                    data: {
                        login: 1,
                        emailPHP: email,
                        senhaPHP: senha
                    },
                    success: function (resposta) {
                        $("#response").html(resposta);
                    },
                    dataType: 'text'
                }
            );
        }
    });
});