<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (other head elements) ... -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- ... (other stylesheets) ... -->
</head>
<body>
<!-- ... (body content) ... -->
<!-- Trigger the modal -->
User
You
<div class="modal-body">
    <a class="back-btn" data-dismiss="modal" data-toggle="modal" data-target="#login-with-email-popup"><i class="fa fa-chevron-left"></i></a>
    <h3 class="fs20 generic-darker-gray pb10 mt30">Let’s get you started!</h3>
    <form accept-charset="UTF-8" action="/users" class="user-profile-validation" data-parsley-validate="" id="new_user" method="post" novalidate=""><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="+93V+CYYW3PuWG4Oic2TPiqWWVp6pr7Ga/3fPF/y5lE="></div>
        <div class="mobileno-input-cont auth-input-fields">
            <div class="form-group">
                <label>Email Address</label>
                <input class="form-control" data-parsley-length="[6,50]" data-parsley-remote-validator="validateEmail" data-parsley-remote="1" data-parsley-required="true" data-parsley-trigger="change" data-parsley-type="email" id="user_email" maxlength="50" name="user[email]" onchange="$('.parsley-errorField').remove();" placeholder="username@email.com" size="50" type="text" data-parsley-id="3457"><ul class="parsley-errors-list" id="parsley-id-3457"></ul>
            </div>
            <div class="form-group">
                <label>Full Name</label>
                <input class="form-control" data-parsley-length="[3,25]" data-parsley-pattern="/^(((?!pakwheels)[a-z ]){3,25})$/i" data-parsley-required="true" data-parsley-trigger="change" id="user_display_name" name="user[display_name]" placeholder="Enter your full name here" size="30" type="text" data-parsley-id="6302"><ul class="parsley-errors-list" id="parsley-id-6302"></ul>
            </div>
            <div class="form-group pos-rel">
                <label>Password</label>
                <input class="form-control password-inputcont" data-parsley-maxlength="30" data-parsley-minlength="6" data-parsley-pattern="^\S*$" data-parsley-required="true" data-parsley-trigger="change" id="user_password" name="user[password]" placeholder="Set a new password" size="30" type="password" data-parsley-id="5063"><ul class="parsley-errors-list" id="parsley-id-5063"></ul>
              <span class="pass-text-toggle" data-toggle-field="password">Show<span>
            </span></span></div>
            <div class="form-group pos-rel">
                <label>Confirm Password</label>
                <input class="form-control" data-parsley-equalto-message="Passwords do not match." data-parsley-equalto="#user_password" data-parsley-minlength="6" data-parsley-required="true" data-parsley-trigger="change" id="user_password_confirmation" name="user[password_confirmation]" placeholder="Enter your password again" size="30" type="password" data-parsley-id="8660"><ul class="parsley-errors-list" id="parsley-id-8660"></ul>
              <span class="pass-text-toggle" data-toggle-field="password_confirmation">Show<span>
            </span></span></div>
        </div>

        <input checked="checked" id="user_user_type_1" name="user[user_type]" style="display:none" type="radio" value="1" data-parsley-multiple="useruser_type" data-parsley-id="0100">

        <div class="checkbox-cont">
            <label class="pointer"><input name="user[updates]" type="hidden" value="0"><input checked="checked" id="user_updates" name="user[updates]" type="checkbox" value="1" data-parsley-multiple="userupdates" data-parsley-id="3167">Send me updates and relevant news.</label><ul class="parsley-errors-list" id="parsley-id-multiple-userupdates"></ul>
        </div>
        <button type="submit" class="btn btn-primary mt30 fwb" onclick="trackEvents('Newsletter', 'Subscribe', 'From - Signup')">Sign Up</button>
    </form><ul class="parsley-errors-list" id="parsley-id-multiple-useruser_type"></ul>        <p data-dismiss="modal" data-toggle="modal" data-target="#login-with-email-popup" class="mt20 pointer" style="width: fit-content;margin: 20px auto 0px">Already have an account?<u class="ml5 fwb pointer">Sign In</u></p>
    <div class="text-center fwb fs12 mt20 generic-gray">
        <p class="mb5 fs13">By continuing you agree to our</p>
        <u class="mr5"><a href="/main/terms" class="generic-gray" rel="nofollow">Terms of Service</a></u>
        <span>&amp;</span><u class="ml5"><a href="/privacy-policy" class="generic-gray" rel="nofollow">Privacy Policy</a></u>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        // Add the logic to trigger your modal here
        // For example: $('#signup-modal').modal('show');
    });
</script>
</body>
</html>
