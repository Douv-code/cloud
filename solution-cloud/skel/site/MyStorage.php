<?php
include_once 'SideBar.php';

$directory = "./downloads";
echo $directory;
$files = glob($directory . "/*");
$userDataStorage = shell_exec("sudo bash /home/groupe20/usedstorage.sh $userName" . " 2>&1");
?>
    <div class="main-content">
        <div class="container">
            <h1 class="text-center"></h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        <div class="mb-3">
                            <label for="">Files</label>
                            <?php if (count($files) > 0) {
                                    echo "Files available for download:\n";
                                    foreach ($files as $file) {
                                        $filename = basename($file);
                                        $download_path = $directory . "/" . $filename;
                                        echo "<a href=\"$download_path\">$filename</a><br>";
                                    }
                                } else {
                                    echo "No files found in the backups directory.\n";
                                }
                                ?>
                            <span>
                                Storage Used: <?= $userDataStorage / (1024 * 1024); ?> MB
                            </span>

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>