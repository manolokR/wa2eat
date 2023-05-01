const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

document.querySelector('form').addEventListener('submit', function(event) {
    var passwordInput = document.querySelector('#password');
    if (passwordInput.value.length <= 8) {
        alert('La contraseña debe tener más de 8 caracteres');
        event.preventDefault();
    }
});

$("#signin-button").on("click", function(e){
    e.preventDefault();
    // Get form data
    var formData = {
        email: $('#email-form').val(),
        password: $('#password-form').val()
    };

    $.ajax({
        type: 'POST',
        url: '/loginAjax',
        data: formData,
        dataType: 'json',
        success: function(response) {
            // Handle success response
            console.log(response);
            window.location.assign('/home');
        },
        error: function(xhr, status, error) {
            // Handle error response
            console.log(xhr.responseText);
            $('.login-error').fadeIn(1000, function() {
                // Fade out the error message after 2 seconds
                setTimeout(function() {
                    $('.login-error').fadeOut();
                }, 2000);
            });
                        
        }
    });

})