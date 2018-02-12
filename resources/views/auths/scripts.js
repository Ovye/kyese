jQuery(document).ready(function () {

    let registerAccountForm = $('#registerForm');
    registerAccountForm.validate({
        ignore: ':hidden:not([class~=selectized]),:hidden > .selectized, .selectize-control .selectize-input input',
        validClass: "k-has-success",
        rules: {
            password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            },
            phone: {
                required: true,
                minlength: 10,
                maxlength: 11,
                digits: true,
                remote: baseUrl + "checkIfPhoneExist"
            },
            email: {
                required: true,
                email: true,
                remote: baseUrl + "checkIfEmailExist"
            }

        },
        messages: {
            password: {
                required: "Please provide your password.",
                minlength: "Your password must be at least 5 characters long."
            },
            confirm_password: {
                required: "Enter your password here again.",
                equalTo: "Password didn't match."
            },
            email: {
                required: "Provide your email"
            },
            phone: {
                required: "Provide your phone number"
            },
            name: {
                required: "Enter your full name"
            }

        }
    });

    $('#userAccountLoginForm').validate({
        validClass: "k-has-success",
        rules: {
            password: {
                minlength: 5
            },
            username: {
                minlength: 2
            }
        },
        messages: {
            user_name: {
                required: "I can't be empty.",
                minlength: 'Atleast 2 characters.'
            },
            password: {
                required: "Sorry, i can't be empty.",
                minlength: 'Your password was more than 4 chars.'
            }
        }
    });

    $('#verifyAccountForm').validate({
        rules: {
            verify_code: {
                digits: true,
                required: true
            }
        },
        messages: {
            verify_code: {
                required: "Enter verfication code"
            }
        }
    });

    $('#recoverPasswordForm').validate({
        validClass: 'k-has-success',
        messages: {
            phone_email: {
                required: 'Enter your email or phone number'
            }
        }
    });

    $('#form-login').validate();


});
