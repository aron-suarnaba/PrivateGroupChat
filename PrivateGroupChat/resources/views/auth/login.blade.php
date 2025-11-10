<div class="card">
    <div class="card-content">
        <form action="{{ route('login.submit') }}" method="post">
            @csrf
            <div class="card-header bg-dark bg-gradient text-white py-2">
                <h2>Login</h2>
            </div>
            <div class="card-body py-5">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="user_email" name="email" placeholder="Email">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="user_password" name="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-center align-items-center py-3">
                <button type="submit" class="btn btn-success">Login</button>
            </div>
        </form>
    </div>
</div>
