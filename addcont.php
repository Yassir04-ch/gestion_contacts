
<?php include ('utils/header.php');?>
    <div class="col-md-6 offset-md-3">
        <form class="my-2 p-3 border" id="form_con" method="POST" action="logic/addcontlo.php">
            <div class="form-group">
                <label for="namecon">First Name</label>
                <input type="text" name="fnamecon" class="form-control" id="fnamecon" >
            </div>
             <div class="form-group">
                <label for="namecon">Last Name</label>
                <input type="text" name="lnamecon" class="form-control" id="lnamecon" >
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="phone">phone</label>
                <input type="phone" name="phone" class="form-control" id="phone">
            </div>
            <div class="form-group">
                <label for="address">address</label>
                <input type="address" name="address" class="form-control" id="address">
            </div>
            <button type="submit" class="btn btn-primary btn-translate" name="submit">Submit</button>
            <a class="btn btn-primary" href="contact.php">GO Back</a>

        </form>
    </div>
   
<?php  include('utils/footer.php'); ?>

 