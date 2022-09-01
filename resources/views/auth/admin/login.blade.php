<x-guest-layout>
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <span class="h1"><b>Carob</b>CRM</span>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />


            <form action="{{ route('admin-login') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <x-input id="email" placeholder="Email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <x-input id="password" class="form-control"
                             type="password"
                             name="password"
                             placeholder="Password"
                             required autocomplete="current-password" />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-4">
                        <x-button class="btn btn-primary btn-block">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</x-guest-layout>
