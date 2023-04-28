<?php
header("Access-Control-Allow-Origin: http://www.cloud.com");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Authorization, Content-Type");
header("Access-Control-Allow-Credentials: true");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $domain = $_POST['domain'];

    if (!empty($username) && !empty($password) && !empty($domain)) {
        $script_path = "/home/groupe20/createAccount.sh";
        $output = shell_exec("sudo bash $script_path $username $password $domain" . " 2>&1");
        if ($output) {
            header('HTTP/1.1 405 Method Not Allowed');
            echo json_encode(["error" => $output]);

        } else {
           echo json_encode(["success" => $output]); 
        }
        
    
    }
} else {
    echo "Invalid request method.";
}
?>
