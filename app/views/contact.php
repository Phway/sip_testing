<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
    <script type='text/javascript' SRC='https://swx.cdn.skype.com/shared/v/1.1.23.0/SkypeBootstrap.min.js'></script>
    <script>
        // Reference to SkypeBootstrap.min.js
        // Implements the Skype object model via https://swx.cdn.skype.com/shared/v/1.2.15/SkypeBootstrap.min.js

        // Call the application object
        var config = {
            apiKey: 'a42fcebd-5b43-4b89-a065-74450fb91255', // SDK
            apiKeyCC: '9c967f6b-a846-4df2-b43d-5167e47d81e1' // SDK+UI
        };
        var Application

        Skype.initialize({ apiKey: config.apiKey }, function (api) {
            window.skypeWebAppCtor = api.application;
            window.skypeWebApp = new api.application();
            //Make sign in table appear
            $(".menu #sign-in").click();
            // whenever client.state changes, display its value
            window.skypeWebApp.signInManager.state.changed(function (state) {
                $('#client_state').text(state);
            });
        }, function (err) {
            console.log(err);
            alert('Cannot load the SDK.');
        });
    </script>
</head>
<body>
<div class="form-horizontal">
    <div class="form-group">
        <label for="username" class="col-sm-2 control-label">Username</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="username" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button class="btn btn-default" id="btnLogIn">Log in</button>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(function () {

        'use strict';

        var client = new Skype.Web.Model.Application;

        $('#btnLogIn').click(function () {

// start signing in
            client.signInManager.signIn({
                username: $('#username').val(),
                password: $('#password').val()
            }).then(function () {
//log in worked!
                alert('Logged in!');
            }, function (error) {
//Something went wrong.
                alert(error);
            });
        });
    });

</script>

</body>
</html>
