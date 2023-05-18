const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
const signInContainer = document.querySelector('.sign-in-container');
const signUpContainer = document.querySelector('.sign-up-container');

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


$("#signup-button").on("click", function(e){
    e.preventDefault();
    // Get form data
    var formData = {
        email: $('#email-register-form').val(),
        password: $('#password-register-form').val(),
        username: $('#username-register-form').val()
    };

    $.ajax({
        type: 'POST',
        url: '/registerAjax',
        data: formData,
        dataType: 'json',
        success: function(response) {
            // Handle success response
            console.log(response);
            window.location.assign('/home');
        },
        error: function(xhr, status, error) {
            // Handle error response
            var errorMessage = JSON.parse(xhr.responseText).text;
            console.log("Error: " + errorMessage);
            
            $('.register-error').text(errorMessage).fadeIn(1000, function() {
                // Fade out the error message after 2 seconds
                setTimeout(function() {
                    $('.register-error').fadeOut();
                }, 2000);
            });
        }
    });
    

})

$(document).ready(function() {
    const signInButton = $('#signIn');
    const signUpButton = $('#signUp');
    const container = $('#container');
    const signInContainer = $('.sign-in-container');
    const signUpContainer = $('.sign-up-container');

    if ($(window).width() < 500) {
        signInButton.on('click', function() {
            signUpContainer.removeClass('open');
            signInContainer.addClass('open');
        });

        signUpButton.on('click', function() {
            signInContainer.removeClass('open');
            signUpContainer.addClass('open');
        });

        signInContainer.addClass('open');
    }
});

document.getElementById('signup-link').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('signUp').click();
});

$(window).resize(function() {
    var width = $(window).width();

    if(width <= 600) {
        $('#container').addClass('mobile');
        $('.sign-up-container').hide();
        $('.sign-in-container').show();
    } else {
        $('#container').removeClass('mobile');
    }
}).resize(); // Trigger resize function on page load

$('#signup-link').click(function(e) {
    e.preventDefault();
    if ($('#container').hasClass('mobile')) {
        $('.sign-in-container').hide();
        $('.sign-up-container').show();
    } else {
        // Code to slide forms goes here
    }
});

$('#signin-link').click(function(e) {
    e.preventDefault();
    if ($('#container').hasClass('mobile')) {
        $('.sign-up-container').hide();
        $('.sign-in-container').show();
    } else {
        // Code to slide forms goes here
    }
});
