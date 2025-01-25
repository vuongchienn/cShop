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
                        <form action = "{{ Route('register') }}" method = "POST">
                            @csrf
                            <div class ="group-input">
                                <label for = "name">Name *</label>
                                <input type= "text" id = "name" name = "name">
                            </div> 

                            <div class= "group-input">   
                                <label for="email">Email address *</label>
                                <input type = "text" id = "email" name = "email">
                            </div>
                            <div class ="group-input">
                                <label for = "password">Password *</label>
                                <input type= "password" id = "password" name = "password">
                            </div> 

                            <div class ="group-input">
                                <label for = "con-password">Confirm Password *</label>
                                <input type= "password" id = "con-password" name = "con-password">
                            </div> 
                            <button type ="submit" class="site-btn register-btn">REGISTER</button>
                        </form>
                        <div class ="switch-login">
                            <a href = "{{ Route('login') }}" class= "or-login">Or login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
  