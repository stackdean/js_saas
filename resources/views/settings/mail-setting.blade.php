@extends('layouts.main')
@section('title', __($t))
@section('content')
    <div class="row">
        <div class="main-content">
            <section class="section">
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h4 class="m-b-10">{{ __('Dashboard') }}</h4>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('settings') }}">{{ __('Settings') }}</a></li>
                                    <li class="breadcrumb-item">{{ __($t) }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card sticky-top">
                                <div class="list-group list-group-flush" id="useradd-sidenav">
                                    <a href="{{ route('setting', 'app-setting') }}"
                                        class="list-group-item list-group-item-action ">{{ __('App Setting') }}</a>
                                    <a href="{{ route('setting', 'storage-setting') }}"
                                        class="list-group-item list-group-item-action">{{ __('Storage') }}</a>
                                    <a href="{{ route('setting', 'mail-setting') }}"
                                        class="list-group-item list-group-item-action active">{{ __('Email') }}</a>
                                    <a href="{{ route('setting', 'social-setting') }}"
                                        class="list-group-item list-group-item-action">{{ __('Social') }}</a>
                                    <a href="{{ route('setting', 'chat-setting') }}"
                                        class="list-group-item list-group-item-action">{{ __('Chat') }}</a>
                                    <a href="{{ route('setting', 'general-setting') }}"
                                        class="list-group-item list-group-item-action">{{ __('General') }}</a>
                                    <a href="{{ route('setting', 'captcha-setting') }}"
                                        class="list-group-item list-group-item-action ">{{ __('Captcha') }}</a>
                                    <a href="{{ route('setting', 'payment-setting') }}"
                                        class="list-group-item list-group-item-action">{{ __('Payment') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <form id="setting-form" action="{{ route('settings/email-setting/update') }}"
                                enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="card" id="settings-card">
                                    <div class="card-header">
                                        <h5> {{ __($t) }}</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted"> {{ __('Email Setting') }}</p>
                                        <div class="">
                                            <div class=" row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="name"
                                                            class="form-label">{{ __('Mail Mailer') }}</label>
                                                        <input type="text" name="mail_mailer" class="form-control"
                                                            value="{{ Utility::getsettings('mail_mailer') }}"
                                                            placeholder="{{ __('Mail Mailer') }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="name"
                                                            class="form-label">{{ __('Mail Host') }}</label>
                                                        <input type="text" name="mail_host" class="form-control"
                                                            value="{{ Utility::getsettings('mail_host') }}"
                                                            placeholder="{{ __('Mail Host') }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="name"
                                                            class="form-label">{{ __('Mail Port') }}</label>
                                                        <input type="text" name="mail_port" class="form-control"
                                                            value="{{ Utility::getsettings('mail_port') }}"
                                                            placeholder="{{ __('Mail Port') }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="name"
                                                            class="form-label">{{ __('Mail Username') }}</label>
                                                        <input type="email" name="mail_username" class="form-control"
                                                            value="{{ Utility::getsettings('mail_username') }}"
                                                            placeholder="{{ __('Mail Username') }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="name"
                                                            class="form-label">{{ __('Mail Password') }}</label>
                                                        <input type="password" name="mail_password" class="form-control"
                                                            value="{{ Utility::getsettings('mail_password') }}"
                                                            placeholder="{{ __('Mail Password') }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="name"
                                                            class="form-label">{{ __('Mail Encryption') }}</label>
                                                        <input type="text" name="mail_encryption" class="form-control"
                                                            value="{{ Utility::getsettings('mail_encryption') }}"
                                                            placeholder="{{ __('Mail Encryption') }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="name"
                                                            class="form-label">{{ __('Mail From Address') }}</label>
                                                        <input type="text" name="mail_from_address" class="form-control"
                                                            value="{{ Utility::getsettings('mail_from_address') }}"
                                                            placeholder="{{ __('Mail From Address') }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="name"
                                                            class="form-label">{{ __('Mail From Name') }}</label>
                                                        <input type="text" name="mail_from_name" class="form-control"
                                                            value="{{ Utility::getsettings('mail_from_name') }}"
                                                            placeholder="{{ __('Mail From Name') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <hr>
                                    <div class="float-right">
                                        <button class="btn btn-primary" type="submit"
                                            id="save-btn">{{ __('Save Changes') }}</button>
                                        <a class="btn  btn-info" href="{{ route('setting', 'test-mail') }}">
                                            {{ __('Send Test Mail') }}</a>

                                        <a href="{{ route('settings') }}"
                                            class="btn btn-secondary">{{ __('Cancel') }}</a>
                                    </div></div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
