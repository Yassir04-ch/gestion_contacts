<?php include('utils/header1.php'); ?>

    <div class="back col-md-6 offset-md-3 ">
        <form class="my-2 p-3" id="form_ins" method="POST" action="logic/inscriptionlo.php">
            <div class="form-group">
                <label for="name">First Name</label>
                <input type="text" name="fname" class="form-control" id="fname" >
            </div>
            <div class="form-group">
                <label for="name">Last Name</label>
                <input type="text" name="lname" class="form-control" id="lname" >
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="email" name="email_user" class="form-control" id="user_email" >
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" >
            </div>
            <div class="form-group">
                <label for="check_password">Password</label>
                <input type="password" name="chek_password" class="form-control" id="check_password">
            </div>
            <div class="form-group">
              <a class="btn btn-secondary" href="login.php ">login</a>    
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
<script src="utils/script.js"></script>
</body>