<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>

    <body class="bg-light">
        <div class="container p-3">
            <div class="col-lg-6 m-auto d-block p-3 bg-white">
                <h2 class="pb-3 text-success">
                    Registration form validation using jquery ajax and php
                </h2>
                <div id="message"></div>
                <form method="POST" id="myform">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="user1">
                                Username:
                            </label>
                            <input type="text" name="username" id="username" class="form-control">
                            <span class="error" id="username_err"> </span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="user1">
                                Email:
                            </label>
                            <input type="email" name="email" id="email" class="form-control">
                            <span class="error" id="email_err"> </span>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="mob">
                                Mobile
                            </label>
                            <input type="text" name="mobile" id="mobile" class="form-control">
                            <!-- <h5 id="conpasscheck" style="color: red;">
                            **Password didn't match
                        </h5> -->
                            <span class="error" id="mobile_err"> </span>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="password">
                                Password:
                            </label>
                            <div class="input-group">
                                <input type="password" name="password" id="password" class="form-control">
                                <div class="input-group-append">
                                    <span class="input-group-text" onclick="password_show_hide();">
                                        <i class="fas fa-eye" id="show_eye"></i>
                                        <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                    </span>
                                </div>
                            </div>
                            <span class="error" id="password_err"> </span>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="conpassword">
                                Confirm Password:
                            </label>
                            <input type="password" name="cpass" id="cpassword" class="form-control">
                            <!-- <h5 id="conpasscheck" style="color: red;">
                            **Password didn't match
                        </h5> -->
                            <span class="error" id="cpassword_err"> </span>
                        </div>


                        <div class="col-md-12">
                            <button type="button" id="submitbtn" class="btn btn-primary">Submit</button>
                        </div>

                    </div>

                </form>
            </div>
        </div>


        <!--call js here-->
        <!-- validation.js -->
    </body>
    <script src="validation.js"></script>
</body>

</html>