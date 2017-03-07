<?php
$n = "";
$message = "";
$type = "";
if (isset($_GET["n"])) {
    $n = trim(htmlspecialchars($_GET["n"]));
}
switch ($n) {
    // Success
    case "success_saved":
        $message = "Erfolgreich gespeichert!";
        $type = "success";
        break;
    //Error
    case "error_saving":
        $message = "Konnte nicht gespeichert werden.";
        $type = "damger";
        break;
    //Warning
    case "not_filled_out":
        $message = "Bitte f&uuml;lle alle erforderlichen Felder aus.";
        $type = "warning";
        break;
}
if ($message != "" || $type != "") {
    switch ($type) {
        case "warning":
            $icon = "fa-exclamation-triangle";
            $title = "";
            break;
        case "danger":
            $icon = "fa-exclamation";
            $title = "";
            break;
        case "success":
            $icon = "fa-check";
            $title = "";
            break;
    }
    ?>
    <script>
        $.notify({
            // options
            icon: 'fa <?php echo $icon; ?>',
            title: '<?php echo $title; ?>',
            message: '<?php echo $message; ?>',
        }, {
                // settings
                    element: 'body',
                    position: null,
                    type: "<?php echo $type; ?>",
                            allow_dismiss: true,
                            newest_on_top: true,
                            showProgressbar: false,
                            placement: {
                from: "top",
                            align: "right"
                                },
            offset: 20,
                                spacing: 10,
                            z_index: 999,
                            delay: 5000,
                            timer: 1000,
                            url_target: '_blank',
                            mouse_over: null,
                            animate: {
                            enter: 'animated bounceInDown',
                            exit: 'animated bounceOutUp'
            },
                                onShow: null,
            onShown: null,
                                onClose: null,
            onClosed: null,
                            icon_type: 'class',
                            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                                    '<span data-notify="icon"></span> ' +
                    '<span data-notify="title">{1}</span> ' +
                                    '<span data-notify="message" style="font-weight:normal !important;">{2}</span>' +
                                    '<div class="progress" data-notify="progressbar">' +
                                    '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                    '</div>' +
                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                    '</div>'
        });
    </script>
    <?php
}