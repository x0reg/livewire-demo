<div>
    <style>
        .login-content .login-box {
            min-width: 361px;
            min-height: 550px;
        }

        .login-divider {
            display: flex;
            align-items: center;
            position: relative;
            text-align: center;
            width: 300px;
            /* Đặt chiều rộng của đường sọc theo ý muốn */
        }

        .login-divider::before,
        .login-divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: black;
        }

        .login-divider::before {
            margin-right: 10px;
        }

        .login-divider::after {
            margin-left: 10px;
        }

        .login-divider span {
            font-size: 14px;
            color: #333;
            white-space: nowrap;
        }
    </style>
    <form class="login-form" wire:submit.prevent = "login">
        <h3 class="login-head"><i class="bi bi-person me-2"></i>ĐĂNG NHẬP</h3>
        <div class="mb-3">
            <label class="form-label">Tên Đăng Nhập</label>
            <input class="form-control @error('usernameOrEmail') is-invalid @enderror" type="text"
                placeholder="username hoặc email" id="usernameOrEmail" wire:model='usernameOrEmail' autofocus>
            @if ($errors->has('usernameOrEmail'))
                <span class="text-danger">{{ $errors->first('usernameOrEmail') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Mật khẩu</label>
            <input class="form-control @error('password') is-invalid @enderror" type="password" id="password"
                placeholder="Password" wire:model='password'>
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <div class="utility">
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="remember_me" wire:model='remember_me'><span
                            class="label-text">ghi nhớ
                            ?</span>
                    </label>
                </div>
                <p class="semibold-text mb-2"><a href="#">Quên Mật khẩu ?</a></p>
            </div>
        </div>
        <div class="mb-3 btn-container d-grid">
            <button class="btn btn-primary btn-block" wire:loading.attr="disabled">
                <span wire:loading.remove wire:target="login">
                    <i class="bi bi-box-arrow-in-right me-2 fs-5"></i>ĐĂNG Nhập
                </span>
                <span wire:loading wire:target="login">
                    <div class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></div> Đang xử lý...
                </span>
            </button>
        </div>
        <hr>
        <p class="mb-3">
            Chưa có tài khoản? <a href="{{ route('register') }}"class="text-danger fw-bold text-decoration-none"
                wire:navigate>Đăng ký
                ngay</a>
        </p>
        <div class="login-divider">
            <span>hoặc đăng nhập bằng</span>
        </div>
        <div class="d-flex justify-content-between mt-3">
            <button class="btn btn-danger flex-grow-1 me-2">
                <img src="https://www.google.com/favicon.ico" alt="Google" width="20" height="20"
                    class="me-2">
                Google
            </button>
        </div>
    </form>
</div>
