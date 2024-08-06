<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Thuecode.net Nhận code thuê các mã nguồn laravel,nodejs">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Thuecode.net Nhận code thuê các mã nguồn laravel,nodejs">
    <meta property="og:title" content="Thuecode.net - Nhận code thuê, đục api bank">
    <meta property="og:url" content="http://thuecode.net">
    <meta property="og:image" content="">
    <meta property="og:description" content="Thuecode.net Nhận code thuê các mã nguồn laravel,nodejs">
    <title>{{ $title ?? 'Hello Mini Work' }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/main.css') }}">
    <!-- Font-icon css-->
    @livewireStyles
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css">
    <style>
        #nprogress .bar {
            background: #ff0000 !important;
            box-shadow: 0 0 10px #ff0000 !important;
        }
    </style>
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header">
        <a class="app-header__logo" href="">ThueCode.Net</a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
            aria-label="Hide Sidebar"></a>
        <livewire:user.layouts.navbar>
    </header>

    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <livewire:user.layouts.sidebar>
        <main class="app-content">
            <div class="app-title">
                <div>
                    <h1><i class="bi bi-speedometer"></i> Dashboard</h1>
                </div>
                <ul class="app-breadcrumb breadcrumb">
                    <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                </ul>
            </div>
            {{ $slot }}
        </main>
        @livewireScripts
        <!-- Essential javascripts for application to work-->
        <script src="{{ asset('/assets/js/jquery-3.7.0.min.js') }}"></script>
        <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/assets/js/main.js') }}"></script>
        <!-- Thêm thư viện NProgress -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>
        <script>
            // Cấu hình NProgress
            NProgress.configure({
                showSpinner: true, // biểu tượng quay
                easing: 'ease', // CSS easing animation
                speed: 500, // Tốc độ animation (ms)
                trickle: true, // Tự động tăng tiến độ
                trickleSpeed: 200, // Tốc độ tự động tăng (ms)
                minimum: 0.08, // Giá trị tối thiểu để bắt đầu hiển thị
                height: '15px' // Chiều cao của thanh progress
            });

            // Xử lý tải lại trang
            document.addEventListener('DOMContentLoaded', () => {
                NProgress.start();
            });

            window.addEventListener('load', () => {
                NProgress.done();
            });

            // Xử lý chuyển trang thông thường
            document.addEventListener('beforeunload', () => {
                NProgress.start();
            });

            // Xử lý Livewire requests
            document.addEventListener('livewire:init', () => {
                Livewire.hook('request', ({
                    uri,
                    options,
                    payload,
                    respond,
                    succeed,
                    fail
                }) => {
                    // Không cần gọi NProgress.start() ở đây vì nó đã được gọi bởi beforeunload hoặc submit event

                    succeed(({
                        status,
                        json
                    }) => {
                        NProgress.done();
                    })

                    fail(({
                        status,
                        content,
                        preventDefault
                    }) => {
                        NProgress.done();
                    })
                });
            });

            // Xử lý form submit
            document.addEventListener('submit', () => {
                NProgress.start();
            });
        </script>

</body>

</html>
