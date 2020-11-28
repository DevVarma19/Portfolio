<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Lockscreen | Varma </title>
    <link rel="icon" type="image/x-icon" href="admin\assets\img\favicon.ico">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="admin\bootstrap\css\bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="admin\assets\css\plugins.css" rel="stylesheet" type="text/css">
    <link href="admin\assets\css\authentication\form-1.css" rel="stylesheet" type="text/css">
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="admin\assets\css\forms\theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="admin\assets\css\forms\switches.css">
</head>

<body class="form">

    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <div class="d-flex user-meta">
                            <img src="admin\assets\img\varma.jpg" class="usr-profile" alt="avatar">
                            <div class="">
                                <p class="">Varma MVSS</p>
                            </div>
                        </div>

                        <form class="text-left" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form">

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input type="hidden" name="email" value="varma.admin@gmail.com">
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper toggle-pass">
                                        <p class="d-inline-block">Show Password</p>
                                        <label class="switch s-primary">
                                            <input type="checkbox" id="toggle-password" class="d-none">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Sign In</button>
                                    </div>

                                </div>

                            </div>
                        </form>
                        <!-- <p class="terms-conditions">© 2020 All Rights Reserved. <a href="/">Varma</a></p> -->

                    </div>
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image">
            </div>
        </div>
    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="admin\assets\js\libs\jquery-3.1.1.min.js"></script>
    <script src="admin\bootstrap\js\popper.min.js"></script>
    <script src="admin\bootstrap\js\bootstrap.min.js"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="admin\assets\js\authentication\form-1.js"></script>

</body>

</html>