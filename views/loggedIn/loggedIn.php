<?php include('controllers/informationController.php'); ?>
<main>
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="pt-2 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">
                                        Hi <?php echo $name; ?>
                                    </h5>
                                </div>

                                <div class="col-12 mb-2">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" value="<?php echo $email; ?>" id="viewEmail" placeholder="Email" readonly>
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <a href="controllers/signoutController.php" class="btn btn-danger rounded-pill w-100" id="logout">
                                        Logout
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<!-- End #main -->