<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Fire Team</title>
    <link href="boostrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="boostrap/css/cover.css" rel="stylesheet">
    <link href="boostrap/css/style.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .modal-header, h4, .close {
            background-color: #5cb85c;
            color: white !important;
            text-align: center;
            font-size: 30px;
        }
        .modal-footer {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">Duy Tan University</h3>
                </div>
            </div>

            <div class="inner cover">
                <h1 class="cover-heading" style="color: red">Inspection systems duplicate document</h1>
                <p class="lead">
                    This is the part of the anti-plagiarism system. Allowing users to check their documents with all of
                    the documents available on the server.
                    And show how many percent overlap with pre-existing documents.
                </p>
                {{--<p class="lead">--}}
                {{--<a href="index" class="btn btn-lg btn-default">Let's Strart</a>--}}
                {{--</p>--}}
                <button type="button" class="btn btn-default btn-lg" id="login">Let's Start</button>
                <div class="container">
                    <div class="modal fade" id="sign-in" role="dialog">
                        <div class="modal-dialog" style="padding-top: 10%">
                            <!-- Modal content-->
                            <div class="modal-content" style="width: 350px; margin: 0 auto;">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 style="color:red;"><span class="glyphicon glyphicon-user"></span> Login</h4>
                                </div>
                                <div class="modal-body" >
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                                            <input type="text" class="form-control" id="usrname"
                                                   placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="psw"><span class="glyphicon glyphicon-lock"></span> Password</label>
                                            <input type="text" class="form-control" id="psw"
                                                   placeholder="Enter password">
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value="" checked>Remember me</label>
                                        </div>
                                        <button type="submit" class="btn btn-default btn-success btn-block"><span
                                                    class="glyphicon glyphicon-off"></span> Login
                                        </button>
                                        <button  type="submit" class="btn btn-success btn-block" data-dismiss="modal"><span
                                                    class="glyphicon glyphicon-remove"></span> Cancel
                                        </button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <p>Not a member? <a href="#" id="sign-up">Sign Up</a></p>
                                    <p>Forgot <a href="#" id="forgot-psw">Password?</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--register-->
                    <div class="modal fade" id="register" role="dialog">
                        <div class="modal-dialog" style="padding-top: 10%">
                            <!-- Modal content-->
                            <div class="modal-content" style="width: 350px; margin: 0 auto;">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span>Register</h4>
                                </div>
                                <div class="modal-body" >
                                    <form role="form" >
                                        <div class="form-group">
                                            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                                            <input type="text" class="form-control" id="usrname"
                                                   placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="psw"><span class="glyphicon glyphicon-lock"></span></span> Password</label>
                                            <input type="text" class="form-control" id="psw"
                                                   placeholder="Enter password">
                                        </div>
                                        <div class="form-group">
                                            <label for="psw"><span class="glyphicon glyphicon-envelope"></span> Email</label>
                                            <input type="text" class="form-control" id="email"s
                                                   placeholder="Enter Email">
                                        </div>
                                        <button  type="submit" class="btn btn-success btn-block"><span
                                                    class="glyphicon glyphicon-off"></span> Register
                                        </button>
                                        <button  type="submit" class="btn btn-success btn-block" data-dismiss="modal"><span
                                                    class="glyphicon glyphicon-remove"></span> Cancel
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- forgot password? -->
                    <div class="modal fade" id="forgot" role="dialog">
                        <div class="modal-dialog" style="padding-top: 10%">
                            <!-- Modal content-->
                            <div class="modal-content" style="width: 350px; margin: 0 auto;">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span>Forgot Password?</h4>
                                </div>
                                <div class="modal-body" >
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="psw"><span class="glyphicon glyphicon-envelope"></span> Email</label>
                                            <input type="text" class="form-control" id="email"s
                                                   placeholder="Enter Your Email">
                                        </div>
                                        <button type="submit" class="btn btn-default btn-success btn-block"><span
                                                    class="glyphicon glyphicon-off"></span> Submit
                                        </button>
                                        <button  type="submit" class="btn btn-success btn-block" data-dismiss="modal"><span
                                                    class="glyphicon glyphicon-remove"></span> Cancel
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </br>
            </br>
            <div class="team">
                <div class="team-top heading">
                    <h3><strong>OUR TEAM</strong></h3>
                </div>
                <div>
                    <img src="images/dung.jpg" alt="" style="width: 100px ; height:70px"/>
                    <h3>Dung, Hoang Pham Viet</h3>
                    <p>Scrum Master,</br> K19 CMU TTT</p>
                </div>
                <div class="team-bottom">
                    <div class="col-md-3 ">
                        <img src="images/linh.jpg" alt="" style="width: 100px ; height:70px"/>
                        <h3>Linh, Nguyen Phan Hoang</h3>
                        <p>Developer,</br> K19 CMU TTT</p>
                    </div>
                    <div class="col-md-3 ">
                        <img src="images/minh.jpg" alt="" style="width: 100px ; height:70px"/>
                        <h3>Minh, Nguyen Ngoc</h3>
                        <p>Developer,</br> K19 CMU TPM2</p>
                    </div>

                    <div class="col-md-3 ">
                        <img src="images/duy.jpg" alt="" style="width: 100px ; height:70px"/>
                        <h3>Duy, Le Duc </h3>
                        <p>Developer,</br> K19 CMU TPM1</p>
                    </div>
                    <div class="col-md-3 ">
                        <img src="images/chinh.jpg" alt="" style="width: 100px ; height:70px"/>
                        <h3>Chinh, Nguyen Huu</h3>
                        <p>Developer,</br> K19 CMU TPM1</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="mastfoot">
                <div class="inner">
                    <p style="color: red">International School, Duy Tan University - <a href="http://dtu.edu.vn">Fire
                            Team</a></a>.</p>
                </div>
            </div>

        </div>

    </div>

</div>
<script>
    $(document).ready(function () {
        $("#login").click(function () {
            $("#sign-in").modal();
        });
        $("#sign-up").click(function () {
            $("#sign-in").modal('hide');
            $("#register").modal();
        })
        $("#forgot-psw").click(function () {
            $("#forgot").modal();
            $("#sign-in").modal("hide");
        })
    });
</script>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="boostrap/js/jquery.min.js"><\/script>')</script>
<script src="boostrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
</body>
</html>
