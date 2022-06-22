@extends('web.layout.layout')


@section('main')

    <div class="container">

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div>
                <label>{{ __('Email') }}</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus/>
            </div>

            <div>
                <button class="button" type="submit">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>
@endsection
