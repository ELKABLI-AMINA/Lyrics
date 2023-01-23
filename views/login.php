
    <section class="" style="margin-top:15vh">
        <div class="container">
            <div class="row  loginn">
                <div class="col-lg-5">
                    <img src="./views/assets/img/cover.jpg"  class="imgg" alt="" style="width:95%;height:auto;margin:auto">
                </div>
                <div class="col-lg-7 px-5 mt-5">
                    <h4>Sign into your account</h4>
                    <form method="post">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" placeholder="Email-Address" name="email" id="email" class="form-control my-3 p-3" onkeyup="validate_email()">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="*******" name="password" id="password" class="form-control my-3 p-3" onkeyup="validate_pw()">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button class="btn1 mt-3 mb-5" id="login" name="login"  type="submit" onclick="show_Sign_in()" disabled>Login</button>
                            </div>
                        </div>
                        
                    </form>

                </div>

            </div>

        </div>

    </section>
    