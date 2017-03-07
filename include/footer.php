<footer>
    <hr>
    <span>&copy; Johns Mathew <?php echo (new DateTime('NOW'))->format('Y'); ?> | Version Dev-0.1.0</span>
    <br><br>
    <script>
        $('.dropdown-toggle').dropdown();
    </script>
    <?php
    require "../include/notifications.php";
    ?>
</footer>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="confirmDialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="confirmDialogTitle"></h4>
            </div>
            <div class="modal-body row" id="confirmDialogBody">
                <div class="col-sm-12">
                    <p id="confirmDialogNachricht"></p>
                    <div class="col-sm-6">
                        <button class="form-control" id="confirmDialogCancel">Abbrechen</button>
                    </div>
                    <div class="col-sm-6">
                        <button class="form-control btn-danger" id="confirmDialogConfirm"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>