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
                                        Login to Your Account
                                    </h5>
                                </div>

                                <form method="POST" autocomplete="off" class="row g-3" id="login">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Email">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="password" placeholder="Password">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <button type="submit" class="btn btn-danger rounded-pill w-100" id="loginBtn">
                                            Login
                                        </button>
                                    </div>
                                </form>
                                <div class="col-12 text-center">
                                    <p class="small mb-0">
                                        Don't have account?
                                        <a href="index.php?title=Register">Create an account</a>
                                    </p>
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