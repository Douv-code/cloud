$dir = "/home/".get_current_user()."/backups"; // set the directory path
if (is_dir($dir)) { // check if the directory exists
    $files = scandir($dir); // get the list of files
    foreach ($files as $file) {
        if ($file != "." && $file != "..") { // exclude the current and parent directory entries
            echo $file . "<br>"; // print the file name
        }
    }
} else {
    echo "Directory not found.";
}