@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body" style="background-color: #8BCDCD;">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="text-center pt-3">
                            <h1>{{ __('Register') }}</h1>
                            <h5>Sebagai</h5>
                        </div>

                        <div class="text-center pb-4">
                            <select id="id_role" class="block w-full" type="text" name="id_role" value="{{old('')}}" required autocomplete="id_role" autofocus>
                                @foreach($role as $value)
                                <option value="{{$value->id}}">{{$value->nama_role}}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- <div class="form-group pl-5 pr-5">
                            <label for="nama">{{ __('Nama') }}</label>
                            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> --}}

                        <div class="form-group pl-5 pr-5">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group pl-5 pr-5">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group pl-5 pr-5">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group pl-5 pr-5">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection