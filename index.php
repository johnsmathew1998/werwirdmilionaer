<!DOCTYPE html>
<html>
<head>
    <?php
    require "include/head.php";
    ?>
    <title>Login</title>
</head>
<body>

<div class="container">
    <div class="page-header">
        <h1>Login</h1>
    </div>
    <main>
        <div class="loginbox">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</h3>
                </div>
                <div class="panel-body">
                    <form name="login" method="post" action="controller/login/login.php">
                        <input type="hidden" name="redirect" value="">
                        <div class="form-group">
                            <label for="username">Benutzername</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Benutzername" autofocus="">
                        </div>
                        <div class="form-group">
                            <label for="password">Passwort</label>
                            <input type="password" class="form-control" value="" id="password" placeholder="Passwort" name="password">
                        </div>
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-sign-in" aria-hidden="true"></i> Einloggen
                        </button>
                        <a class="lblnoacc" href="nav/register.php"> Noch kein Account vorhanden? </a>
                        <br/>
                        <br/>
                        <?php
                        $n = $_GET["n"];
                        if(isset($_GET["n"])){
                            if($n=="failed"){
                                ?>
                                <div class="alert alert-danger">Benutzer oder Passwort falsch</div>
                                <?php
                            }else{
                        ?>
                                <div class="alert alert-success">Login Erfolgreich</div>
                          <?php
                            }
                        }
                        ?>
                    </form>
                </div>
            </div>
            <noscript>
        </div>
    </main>
</div>
</body>
</html>