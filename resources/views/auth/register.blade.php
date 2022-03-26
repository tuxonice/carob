<x-guest-layout>
<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="#" class="h1"><b>Admin</b>LTE</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Register a new membership</p>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <x-input
                        id="name"
                        class="form-control"
                        type="text"
                        name="name"
                        placeholder="Full name"
                        :value="old('name')"
                        required autofocus />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <x-input
                        id="email"
                        class="form-control"
                        type="email"
                        name="email"
                        placeholder="Email"
                        :value="old('email')"
                        required />
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
                             required autocomplete="new-password" />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <x-input id="password_confirmation" class="form-control"
                             type="password"
                             placeholder="Retype password"
                             placeholder="Retype password"
                             name="password_confirmation" required />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <x-button class="btn btn-primary btn-block">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
</x-guest-layout>
