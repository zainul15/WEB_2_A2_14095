@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Member</h1>
            <hr>
            <form action="{{ route('member.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
					<label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email">
					<label for="password">Password:</label>
                    <input type="text" class="form-control" id="password" name="password">
					<label for="macAddress">macAddress:</label>
                    <input type="macAddress" class="form-control" id="macAddress" name="macAddress">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection