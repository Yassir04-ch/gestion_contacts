
<?php include ('utils/header.php');?>
   <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="contact-form p-4">
                
                <h3 class="text-center mb-4"> Add New Contact</h3>

                <form id="form_con" method="POST" action="logic/addcontlo.php">
                    
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" name="fnamecon" class="form-control" placeholder="Enter first name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="lnamecon" class="form-control" placeholder="Enter last name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="example@email.com">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="+212 ...">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" placeholder="City, Street...">
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <button type="submit" class="btn btn-success" name="submit">💾 Save</button>
                        <a class="btn btn-outline-secondary" href="contact.php">⬅️ Go Back </a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

<?php include('utils/footer.php'); ?>