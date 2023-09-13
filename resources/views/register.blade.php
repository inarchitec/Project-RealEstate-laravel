@extends('layouts.mynav')

@section('register-contents')

<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Register for new Account </h1>               
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
                <div class="col-md-12 col-xs-12 register-blocks">
                    <h2>Register: </h2> 
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default">Register</button>
                        </div>
                    </form><br>
                    <div class="text-center">
          
                        <p>Already have account ?  <a  href="login"  style=" text-decoration: underline; color:var(--green); ">Login </a>
                          
                        </p>  
                    </div>
                     
                    </div>
                </div>
            </div>
        </div>
 

    </div>
</div>  

@endsection