$(function () {

    let registerAccountForm = $('#registerAccountForm');

    registerAccountForm.validate({
        ignore: ':hidden:not([class~=selectized]),:hidden > .selectized, .selectize-control .selectize-input input',
        validClass: "k-has-success",
        rules: {
            password: {
                required: true,
                minlength: 5
            },
            repeat_password: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            },
            phone: {
                required: true,
                minlength: 10,
                digits: true,
                remote: baseUrl + "account/checkExistingAccountByPhone"
            },
            email: {
                required: true,
                email: true,
                remote: baseUrl + "account/checkExistingAccountByEmail"
            }

        },
        messages: {
            account_type: "I'm required.",
            password: {
                required: "Please provide your password.",
                minlength: "Your password must be at least 5 characters long."
            },
            repeat_password: {
                required: "Please confirm your password.",
                minlength: "Your password must be at least 5 characters long.",
                equalTo: "Enter the password again."
            },
            user_title: "I'm required.",
            email: {
                required: "Provide your email"
            },
            phone: {
                required: "Provide your phone number"
            },
            firstname: {
                required: "Enter your first name"
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
                minlength: 'Atleat 5 characters.'
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


});

1000||{"successful":"2348131600400","basic_successful":"2348131600400","corp_successful":"","failed":"","insufficient_unit":"","invalid":"","all_numbers":"2348131600400","units_used":1,"basic_units":1,"corp_units":0,"units_before":"21.06","units_after":"20.06","sms_pages":1,"filtered_active":"","filtered_dead":"","filtered_nodata":"","filtered_dnd":"","realtime_dnd":"","message_id":"msg-20180101-kAjgOgcdkaRQhDieL3lMe2FZw7Jown4KbjZ2vnl"}
