@extends('layouts.mynav')

@section('login-contents')
 
<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">welcome to new real-estate login</h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


<!-- register-area -->
<div class="register-area" style="background-color: rgb(249, 249, 249);">
    <div class="container">
 

        <div class="col-md-6">
            <div class="box-for overflow">                         
                <div class="col-md-12 col-xs-12 login-blocks">
                    <h2>Login : </h2> 
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default"> Log in</button>
                        </div>
                    </form>
                    <br>
                    <div class="text-center">
          
                        <p> Don't have an account yet? <a  href="register"  style=" text-decoration: underline; color:var(--green);">Register Here</a>   
                          
                        </p>  
                    </div>
                    <br>
                    
                    <h2>Social login :  </h2> 
                    
                    <p>
                    <a class="login-social" href="#"><i class="fa fa-facebook"></i>&nbsp;Facebook</a> 
                    <a class="login-social" href="#"><i class="fa fa-google-plus"></i>&nbsp;Gmail</a> 
                    <a class="login-social" href="#"><i class="fa fa-twitter"></i>&nbsp;Twitter</a>  
                    </p> 
                </div>
                
            </div>
        </div>

    </div>
</div>    


@endsection