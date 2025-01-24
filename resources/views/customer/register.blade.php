@extends('customer.layout.master')

@section('title','Register')

@section('content')



    <!-- Breadcrumb Logo Section Begin -->
    <div class ="breacrumb-section">
        <div class = 'container'>
            <div class="row">
                    <div class="col-lg-12">
                        <div class = "breadcrumb-text">
                            <a href = "#"><i class = "fa fa-home"></i>Home</a>
                            <span>Register</span>
                        </div>
                    </div>
            </div>
        </div>
    </div>


    <!-- Register section begin -->
    <div class ="register-login-section spad">
        <div class=  "container">
            <div class= "row">
                <div class ="col-lg-6 offset-lg-3">
                    <div class ="register-form">
                        <h2>Register</h2>
                        <form action = "#">
                            <div class= "group-input">   
                                <label for="username">Username or Email address *</label>
                                <input type = "text" id = "username">
                            </div>
                            <div class ="group-input">
                                <label for = "pass">Password *</label>
                                <input type= "text" id = "pass">
                            </div> 

                            <div class ="group-input">
                                <label for = "con-pass">Confirm Password *</label>
                                <input type= "text" id = "con-pass">
                            </div> 
                            <button type ="submit" class="site-btn register-btn">REGISTER</button>
                        </form>
                        <div class ="switch-login">
                            <a href = "login.html" class= "or-login">Or login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
  