<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$usuario = $palavra_passe = $confpasse = "";
$usuario_err = $palavra_passe__err = $confpasse__err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["usuario"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["usuario"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM tblogin WHERE usuario = ?";
        
        if($stmt = mysqli_prepare($Conexao, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["usuario"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["usuario"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["palavra_passe"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["palavra_passe"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["palavra_passe"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confpasse"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confpasse"]);
        if(empty($confpasse_err) && ($palavra_passe != $confpasse)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($usuario_err) && empty($palavra_passe_err) && empty($confpasse_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO tblogin (nome, usuario, email, palavra_passe) VALUES (?, ?, ?,?)";
         
        if($stmt = mysqli_prepare($Conexao, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
			// Set parameters
			
            $param_username = $usuario;
            $param_password = password_hash($palavra_passe, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($Conexao);
}
?>