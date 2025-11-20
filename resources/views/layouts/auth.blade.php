<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    @include("layouts.style")
    @livewireStyles
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        @yield("content")
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

@include("layouts.script")
@livewireScripts
</body>
</html>
