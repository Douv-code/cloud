<?php
include_once 'SideBar.php';
?>
    <div class="main-content">
        <div class="container">
            <h1 class="text-center"></h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        <div class="mb-3">
                        <h1>Changer le mot de passe</h1>
                        <form id="myForm">
                        <div class="form-group">
                            <label for="new_password">Nouveau mot de passe:</label>
                            <input type="password" class="form-control" id="new_password" pattern=".{8,}" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirmer le nouveau mot de passe:</label>
                            <input type="password" class="form-control" id="confirm_password" pattern=".{8,}" required>
                        </div>
                        <button type="submit" onclick="changePasswordd()" class="btn btn-primary">Changer le mot de passe</button>
                        </form>

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    function changePasswordd() {
        $.ajax({
            url: "passwordChange.php",
            type: "POST",
            data: { 
                new_password: $("#new_password").val(),
            },
            success: function(response) {
                $("#result").html(response);
            }
        });
    }
    </script>

    <?php
    function changePassword($password,$userName) {
        $script_path = "/home/groupe20/changePassword.sh";
        $quotedUserName = escapeshellarg($userName);
        $quotedPassword = escapeshellarg($password);
        $output = shell_exec("sudo bash $script_path $quotedUserName $quotedPassword 2>&1");
        echo "<div class=\"alert alert-success\" role=\"alert\">$output</div>";
    }
    
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["new_password"])) {
        changePassword($_POST["new_password"],$userName);
    }
    ?>

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>