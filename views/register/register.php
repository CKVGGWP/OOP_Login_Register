<main>
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-8 d-flex flex-column align-items-center justify-content-center">

                        <div class="card mb-3 register">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                </div>

                                <form method="POST" autocomplete="off" id="register">
                                    <div class="row g-2">
                                        <div class="col-md-4 col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="firstName" placeholder="First Name">
                                                <label for="firstName">First Name</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="middleName" placeholder="Middle Name">
                                                <label for="middleName">Middle Name</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4  col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                                                <label for="lastName">Last Name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my-2">
                                        <div class="col-md-6 col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="carModel" placeholder="Car Model">
                                                <label for="carModel">Car Model</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="plateNumber" placeholder="Plate Number">
                                                <label for="plateNumber">Plate Number</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12">
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" id="email" placeholder="Email">
                                            <label for="email">Email Address</label>
                                        </div>

                                        <div class="row g-2">
                                            <div class="col-md-12 col-12">
                                                <div class="form-floating">
                                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                                    <label for="password">Password</label>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center mt-4">
                                                <button class="btn btn-danger rounded-pill w-100" type="submit" id="createAccBtn">Create
                                                    Account</button>
                                            </div>
                                            <div class="col-12 mt-3 text-center">
                                                <p class="small mb-0">Already have an account? <a href="index.php">Login</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main><!-- End #main -->