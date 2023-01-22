
    <section class="Form  mx-5" style="margin-top: 170px;">
        <div class="container">
            <div class="row no-gutters loginn">
                <div class="col-lg-5">
                    <img src="./views/assets/img/cover.jpg"  class="img-fluid imgg" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3">Logo</h1>
                    <h4>Sign into your account</h4>
                    <form >
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" placeholder="Email-Address" name="" id="email" class="form-control my-3 p-4" onkeyup="validate_email()">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="*******" name="" id="password" class="form-control my-3 p-4" onkeyup="validate_pw()">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button class="btn1 mt-3 mb-5" id="login"   type="submit" onclick="show_Sign_in()" disabled>Login</button>
                            </div>
                        </div>
                        <a href="#">Forgot password</a>
                        <p>Don't have an account? <a href="#">Register here</a></p>
                    </form>

                </div>

            </div>

        </div>

    </section>
    