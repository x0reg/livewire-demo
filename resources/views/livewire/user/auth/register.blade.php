<div>
    {{-- <div class="tile">
        <h3 class="tile-title">Register</h3>
        <div class="tile-body">
            <form class="form-horizontal">
                <div class="mb-3 row">
                    <label class="form-label col-md-3">Name</label>
                    <div class="col-md-8">
                        <input class="form-control" type="text" placeholder="Enter full name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-md-3">Email</label>
                    <div class="col-md-8">
                        <input class="form-control col-md-8" type="email" placeholder="Enter email address">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-md-3">Address</label>
                    <div class="col-md-8">
                        <textarea class="form-control" rows="4" placeholder="Enter your address"></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-md-3">Gender</label>
                    <div class="col-md-9">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender">Male
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender">Female
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-md-3">Identity Proof</label>
                    <div class="col-md-8">
                        <input class="form-control" type="file">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-md-8 col-md-offset-3">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">I accept the terms and conditions
                            </label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="tile-footer">
            <div class="row">
                <div class="col-md-8 col-md-offset-3">
                    <button class="btn btn-primary" type="button"><i
                            class="bi bi-check-circle-fill me-2"></i>Register</button>&nbsp;&nbsp;&nbsp;<a
                        class="btn btn-secondary" href="#"><i class="bi bi-x-circle-fill me-2"></i>Cancel</a>
                </div>
            </div>
        </div>
    </div> --}}
    <style>
        .login-content .login-box {
            min-width: 361px;
            min-height: 700px;
        }
    </style>
    <form class="login-form" wire:submit.prevent='register'>
        <h3 class="login-head"><i class="bi bi-person me-2"></i>ĐĂNG KÍ</h3>
        <p>Nếu có tài khoản <a href="{{ route('login') }}" class="text-danger fw-bold text-decoration-none"
                wire:navigate>Đăng nhập ngay</a></p>
        <div class="mb-3">
            <label class="form-label">Họ và tên</label>
            <input class="form-control  @error('name') is-invalid @enderror" type="text" placeholder="họ và tên"
                id="name" wire:model="name"autofocus>
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Tên Đăng Nhập</label>
            <input class="form-control  @error('username') is-invalid @enderror" type="text"
                placeholder="Tên đăng nhập" id="username" wire:model='username' autofocus>
            @if ($errors->has('username'))
                <span class="text-danger">{{ $errors->first('username') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input class="form-control  @error('email') is-invalid @enderror" type="email"
                placeholder="example@email.com" id="email" wire:model='email' autofocus>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Mật khẩu</label>
            <input class="form-control @error('password') is-invalid @enderror " type="password" id="password"
                wire:model='password' placeholder="Password">
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Nhập lại Mật khẩu</label>
            <input class="form-control  @error('password_confirmation') is-invalid @enderror" type="password"
                id="password_confirmation" wire:model='password_confirmation' placeholder="Password">
            @if ($errors->has('password_confirmation'))
                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <div class="mb-3 btn-container d-grid">
            <button class="btn btn-primary btn-block" wire:loading.attr="disabled">
                <span wire:loading.remove wire:target="register">
                    <i class="bi bi-box-arrow-in-right me-2 fs-5"></i>ĐĂNG KÍ
                </span>
                <span wire:loading wire:target="register">
                    <div class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></div> Đang xử lý...
                </span>
            </button>
        </div>
    </form>
</div>
