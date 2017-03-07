<?php
if (isset($_COOKIE["token"])) {
    $token = new Token($_COOKIE["token"]);
} else {
    $token = new Token(0);
}
?>
<nav class="navbar navbar-inverse navbar-static-top" role="navigation" unselectable="on">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" rel="home" title="Lernkompetenzen" id="brand_title"><b>AVECTRIS</b> Lernkompetenzen</a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li><a href="index.php" id="nav_dashboard" title="Dashboard"><i class="fa fa-th" aria-hidden="true"></i> <span class="visible-lg-inline visible-xs-inline">Dashboard</span></a></li>
            <li><a href="kompetenzen.php" id="nav_kompetenzen" title="Kompetenzen"><i class="fa fa-puzzle-piece" aria-hidden="true"></i> <span class="visible-lg-inline visible-xs-inline">Kompetenzen</span></a></li>
            <li><a href="bildungsziele.php" id="nav_ziele" title="Bildungsziele"><i class="fa fa-flag-checkered" aria-hidden="true"></i> <span class="visible-lg-inline visible-xs-inline">Bildungsziele</span></a></li>
            <li><a href="noten.php" id="nav_noten" title="Noten"><i class="fa fa-graduation-cap" aria-hidden="true"></i> <span class="visible-lg-inline visible-xs-inline">Noten</span></a></li>
            <li><a href="uek.php" id="nav_uek" title="&Uuml;K"><i class="fa fa-exchange" aria-hidden="true"></i> <span class="visible-lg-inline visible-xs-inline">&Uuml;K</span></a></li>
            <li><a href="bildungsbericht.php" id="nav_bildungsbericht" title="Bildungsberichte"><i class="fa fa-file-text" aria-hidden="true"></i> <span class="visible-lg-inline visible-xs-inline">Bildungsberichte</span></a></li>
            <li><a href="lob.php" id="nav_lob" title="LOB"><i class="fa fa-money" aria-hidden="true"></i> <span class="visible-lg-inline visible-xs-inline">LOB</span></a></li>
            <?php
            if ($token->isValid()&&$token->getRolleID()==1 && strpos($_SERVER["REQUEST_URI"], 'noten.controller') !== false) {
                ?>
                <li class="dropdown mobile">
                    <a href="#" title="Semester" class="dropdown-toggle" id="nav_current_semester" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-calendar" aria-hidden="true"></i> <span class="visible-lg-inline visible-xs-inline"> <?php echo $token->getSemester(); ?>. Semester</span> <span class="caret"></span></a> 
                    <ul class="dropdown-menu" aria-labelledby="drop1">
                        <?php
                        $stat_get_semester = $con->query("SELECT s.id AS id, n.name AS name FROM semester s, semester_name n WHERE s.login='" . $token->getLoginID () . "' AND n.id=s.semester" );
                        foreach ($stat_get_semester as $row) {

                        ?>
                        <li onclick="setNewSemester(<?php echo $row["id"]; ?>, '<?php echo $row["name"]; ?>')"><a style="cursor:pointer;" title="Klicken um zu wechseln."><?php echo $row["name"]; ?></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </li>
            <?php
            }
            ?>
        </ul>

        <div class="col-sm-3 col-md-3 pull-right">
            <?php
            if ($token->isValid()) {
                    ?>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" title="Angemeldet" class="dropdown-toggle" id="drop1" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo VORNAME . " " . NACHNAME; ?><span class="caret"></span></a> 
                    <ul class="dropdown-menu" aria-labelledby="drop1">
                        <li><a style="cursor:default;" title="Rolle"><?php echo ucfirst($token->getRolle()); ?></a></li>
                                <li role="separator" class="divider"></li>
                                <li><a onclick="logout()" title="Logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
            <?php } else {
            ?>
            <ul class="nav navbar-nav">
                <li><a>Nicht angemeldet</a></li>
            </ul>
            <?php }
            ?>
            <!--<form class="navbar-form" role="search">
                    <div class="input-group">
                            <input type="text" autocomplete="false" class="form-control" placeholder="Suche" name="q" id="search">
                            <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                    </div>
            </form>
            -->
        </div>

    </div>
</nav>