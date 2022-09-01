<x-shop.guest-layout>
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <span class="h1"><b>Carob</b>CRM</span>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Choose your Organization</p>
            <form action="{{ route('shop-login-organization') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <select class="form-control" name="organizationId">
                        <option value="">--Organization--</option>
                        @foreach($organizations as $organization)
                            <option value="{{ $organization->id }}">{{ $organization->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-4">
                        <x-shop::button class="btn btn-primary btn-block">
                            Next
                        </x-shop::button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</x-shop.guest-layout>
