$(function() {
    //check for phon number
    jQuery.validator.addMethod("phoneUS", function(phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, "");
    return this.optional(element) || phone_number.length > 9 &&
        phone_number.match(/^(\+?1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
    }, "Please specify a valid phone number");

    jQuery.validator.addMethod("alphanumeric", function(value, element) {
        return this.optional(element) || /^\w+$/i.test(value);
    }, "Letters, numbers, and underscores only please");

    $.validator.addMethod('filesize', function (value, element, param) {
        console.log(element.files[0].size);
        return this.optional(element) || (element.files[0].size <= param)
    }, 'File size must be less than {0}');

    $.validator.addMethod( "extension", function( value, element, param ) {
        param = typeof param === "string" ? param.replace( /,/g, "|" ) : "png|jpe?g|gif";
        return this.optional( element ) || value.match( new RegExp( "\\.(" + param + ")$", "i" ) );
    }, $.validator.format( "Please enter a value with a valid extension." ) );

     $("form[name='signup']").validate({
        rules: {
            firstname: "required",
            lastname: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8
            },
            confirm_password: {
                required: true,
                minlength: 8,
                equalTo: "#password"
            },
            phone_number: {
                required: true,
                phoneUS:true,
                maxlength:10, 
                minlength:10
            },
            agree: "required",
            username: {
                required: true,
                maxlength: 15,
                alphanumeric: true
            },
            profile_pic: {
                required: true,
                filesize:2000000,
                extension: "png|jpg"
            }
        },
        messages: {
            firstname: "Please enter your first name",
            lastname: "Please enter your last name",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 8 characters long"
            },
            email: "Please enter a valid email address",
            confirm_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 8 characters long",
                equalTo: "Please enter the same password as above"
            },
            phone_number: {
                required: "Please provide a phone number",
                matches: "Please enter the valid phone number",
                minlength: "Your phone number must be of 10 numbers",
                maxlength: "Your phone number must be of 10 numbers",
            },
            agree: "Please accept our policy",
            username: {
                required: "Please provide a phone number",
                maxlength: "Username cannot be more than 15 chracters"
            },
            profile_pic: {
                required: "Please provide a provide a profile picture",
                filesize: "File size is greater than 2MB",
                extension: "Not good format, only png and jpg accepted"
            }
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
            error.addClass( "help-block" );

            if ( element.prop( "type" ) === "checkbox" ) {
                error.insertAfter( element.parent( "label" ) );
            } else {
                error.insertAfter( element );
            }
        },
        highlight: function ( element, errorClass, validClass ) {
            $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
            $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});