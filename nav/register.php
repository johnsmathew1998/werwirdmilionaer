<head>
    <?php
    require "../include/head.php";
    ?>
    <title>Registrierung</title>
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>Registrierung</h1>
    </div>
<main>
        <div class="Registrierungbox">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-sign-in" aria-hidden="true"></i> Registrierung</h3>
                </div>
                <div class="panel-body">
                    <form method="post" action="../controller/register/register.php" >
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
                            <i class="fa fa-sign-in" aria-hidden="true"></i> Registrieren
                        </button>
                        <br/>
                        <br/>
                        <?php
                        $n = $_GET["n"];
                        if(isset($_GET["n"])){
                            if($n=="error"){
                                ?>
                                <div class="alert alert-danger">Benutzer vorhanden</div>
                        <?php
                            }
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>