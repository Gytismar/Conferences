<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('site.login') }}</title>
    <script src="{{ mix('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('login') }}" method="POST" class="card card-body">
                @csrf
                <div class="form-group">
                    <label for="title-input">@lang('site.username')</label>
                    <input type="text" id="title-input" name="username" value="{{ old('username') }}" class="form-control">
                    @error('username')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password-input">@lang('site.password')</label>
                    <input type="password" id="password-input" name="password" value="{{ old('password') }}" class="form-control">
                    @error('password')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" id="remember-input" name="remember" value="1" {{ old('remember') ? 'checked' : '' }} class="form-check-input">
                    <label class="form-check-label" for="remember-input">@lang('site.remember_me')</label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">@lang('site.login_button')</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
