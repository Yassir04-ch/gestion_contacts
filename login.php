<?php include('utils/header1.php');
session_start();
 if (isset($_SESSION['id'])) {
    header("Location: profil.php");
 }
?>

 <div class="back col-md-6 offset-md-3">
        <form class="my-2 p-3" method="POST" action="logic/loginlo.php">
         <h2 class="titel_login">LOGIN</h2>
            <div class="form-group">
                <label for="namecnx">Email</label>
                <input type="email" name="user_email" class="form-control" id="user_email" >
            </div>
            <div class="form-group">
                <label for="passwordcnx">password</label>
                <input type="password" name="password" class="form-control" id="passwordcnx" >
            </div>
            <div class="form-group">
              <a class="btn btn-secondary" href="inscription.php ">new user</a>    
            </div>
            <button type="submit" class="btn btn-primary btn-translate" name="submit">Submit</button>
        </form>
    </div>
    <script src="utils/script.js"></script> 
 </body>
 </html>