@include('layouts.css')
<div class="login-page">
    <div class="container d-flex align-items-center position-relative py-5">
        <div class="card shadow-sm w-100 rounded overflow-hidden bg-none">
            <div class="card-body p-0">
                @if(Session('email-message'))
                    <div class="alert alert-danger">{{Session('email-message')}}</div>
                @elseif(Session('password-message'))
                    <div class="alert alert-danger">{{Session('password-message')}}</div>
                @endif
                <div class="row gx-0 align-items-stretch">
                    <div class="col-lg-6">
                        <div class="info d-flex justify-content-center flex-column p-4 h-100 ">
                            <div class="py-5">
                                <h1 class="display-6 fw-bold">Admin Login</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 bg-white">
                        <div class="d-flex align-items-center px-4 px-lg-5 h-100 bg-dash-dark-2">
                            <form class="login-form py-5 w-100" method="post" action={{route('check.credentials')}}>
                                @csrf
                                <div class="input-material-group mb-3">
                                    <input class="input-material" id="login-username" type="text" name="email" placeholder="E-mail"/>
                                </div>
                                <div class="input-material-group mb-4">
                                    <input class="input-material" type="password" name="password" placeholder="Password"/>
                                </div>
                                <button class="btn btn-primary mb-3" id="login" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
