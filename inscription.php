<?php include('utils/header.php')?>



 <div class="col-md-6 offset-md-3">
        <form class="my-2 p-3 border" id="form_ins" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" class="form-control" id="name" >
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" >
            </div>
            <div class="form-group">
                <label for="check_password">Password</label>
                <input type="password" name="check_password" class="form-control" id="check_password">
            </div>
         
            <button type="submit" class="btn btn-primary" name="submit" id="btn_cnx">SAVE</button>
        </form>
    </div>

<?php include('utils/footer.php');

