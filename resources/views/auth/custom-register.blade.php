@extends('layouts.auth')

@section('content')

<div class="page-wrapper bg-dark p-t-100 p-b-50">
    <div class="wrapper wrapper--w900">
        <div class="card card-6">
            <div class="card-heading">
                <h2 class="title">Apply for job</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-row">
                        <div class="name">First name</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="first_name" id="first_name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Last name</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="last_name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Email address</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-6" type="email" name="email" placeholder="example@email.com">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">About myself</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="textarea--style-6" name="message" placeholder="Message sent to the employer"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Picture</div>
                        <div class="value">
                            <div class="input-group js-input-file">
                                <input class="input-file" type="file" name="file" id="file">
                                <label class="label--file" for="file">Choose file</label>
                                <span class="input-file__info">No file chosen</span>
                            </div>
                            <div class="label--desc">Upload your picture. Max file size 50 MB</div>
                        </div>
                    </div>

                    <div class="form-row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="input-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="input-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn--radius-2 btn--blue-2" type="submit">Send Application</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@stop