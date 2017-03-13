<?php
    require "../include/head.php";
    ?>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    <title>Table - Breadcrumb</title>



    <!-- Application launch configuration -->
    <script>
        sap.ui.getCore().attachInit(function() {
            new sap.m.App ({
                pages: [
                    new sap.m.Page({
                        title: "Table - Breadcrumb",
                        enableScrolling : false,
                        content: [ new sap.ui.core.ComponentContainer({
                            height : "100%", name : "sap.m.sample.TableBreadcrumb"
                        })]
                    })
                ]
            }).placeAt("content");
        });

    </script>
</head>

<!-- UI Content -->
<body class="sapUiBody" id="content" role="application">
</body>

</html>
