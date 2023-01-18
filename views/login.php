

   
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background: 		rgb(240,240,240);
           
           
        }
        .row1{
            background: white;
            margin-top: 100px;
            border-radius: 30px;
            box-shadow: 5px 5px 5px grey;
           
        }
        img{
            border-top-left-radius:30px;
            border-bottom-left-radius:30px;
            height: 500px;
            
        }
        .btn1{
            border: none;
            outline: none;
            height: 35px;
            width: 100%;
            background-color: black;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }
        .btn1:hover{
            background: white;
            border: 1px solid;
            color: black;
        }
    </style>  
    <section class="" >
        <div class="container" >
            <div class="row row1 ">
                <div class="col-lg-5">
                    <img src="./views/assets/img/cover.jpg"  class="img-fluid" alt="">
                </div>
                <div class="col-lg-5  row  text-center justify-content-center  ">
                    <h2 class="font-weight-bold ">Logo</h2>
                    <h4>Sign into your account</h4>
                    <div class="justify-content-center align-items-center">
                        <form style="margin: auto;" >
                            <div class="">
                                <div class="">
                                    <input type="email" placeholder="Email-Address" name="" id="email" class="form-control my-3 p-2" onkeyup="validate_email()">
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    <input type="password" placeholder="*******" name="" id="password" class="form-control my-3 p-2" onkeyup="validate_pw()">
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    <button class="btn1 mt-3 mb-5" id="login"   type="submit" onclick="show_Sign_in()" disabled>Login</button>
                                </div>
                            </div>
                            <div>
                                
                            </div>
                          
                            </div>
                         
                        </form>

                    </div>
                    

                </div>

            </div>

        </div>

    </section>
  