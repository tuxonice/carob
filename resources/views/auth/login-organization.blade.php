<x-guest-layout>
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <span class="h1"><b>Carob</b>CRM</span>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Choose your Organization</p>
            <form action="{{ route('login-organization') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <select class="form-control" name="organizationId">
                        <option value="">--Organization--</option>
                        <option value="1">Organization 1</option>
                        <option value="2">Organization 2</option>
                    </select>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-4">
                        <x-button class="btn btn-primary btn-block">
                            Next
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
