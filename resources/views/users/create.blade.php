@extends('layouts.main')
@section('title', __('User'))
@section('breadcrumb')
<div class="col-md-12">
    <div class="page-header-title">
        @if(isset($single))
        <h4 class="m-b-10">{{ __('Edit User') }}</h4>
        @else
        <h4 class="m-b-10">{{ __('Create User') }}</h4>
        @endif
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Dashboard') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">{{ __('User') }}</a></li>
        @if(isset($single))
        <li class="breadcrumb-item"> {{ __('Edit') }} </li>
        @else
        <li class="breadcrumb-item"> {{ __('Create') }} </li>
        @endif
    </ul>
</div>
@endsection
@section('content')
<div class="row">
    <form class="form-horizontal " method="POST" id='payment-form' enctype="multipart/form-data" @if(isset($single))
        action="{{url('users/'.$single->id.'/edit')}}" @else action="{{ route('users.store') }}" @endif>
        @if(isset($single))
        <input type="hidden" name="_method" value="patch">
        @endif
        @csrf
        <div class="row">
            <div class="col-xl-6 mx-auto order-xl-1">
                <div class="card">
                    <div class="card-header">
                        @if(isset($single))
                        <h5>{{ __('Edit User') }}</h5>
                        @else
                        <h5>{{ __('Create User') }}</h5>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class=" row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('User Name') }}</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="{{ __('User Name') }}"
                                        value="@if(isset($single) && ($single->name)){{$single->name}}@endif"
                                        required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class=" row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="email" class="form-label">{{ __('User email') }}</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="{{ __('User email') }}" value="@if(isset($single) && ($single->email)){{$single->email}}@endif" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class=" row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="{{ __('Password') }}" @if(!isset($single)) required @endif>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class=" row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="confirm-password"
                                        class="form-label">{{ __('Confirm Password') }}</label>
                                    <input type="password" name="confirm-password" class="form-control"
                                        id="confirm-password" placeholder="{{ __('Confirm Password') }}" @if(!isset($single)) required @endif>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class=" row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="type" class="form-label">{{ __('User Role') }}</label>
                                    <select class="form-control" id="roleSelect" name="type" required>
                                        <option selected="" disabled="">* Select Role </option>
                                        @foreach($roles as $role)
                                        <option value="{{$role->name}}"@if (isset($single) && $role->name == $single->type)) selected="" @endif>{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class=" row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="balance" class="form-label">{{ __('User balance') }}</label>
                                    <input type="number" name="balance" class="form-control" id="balance" @if(isset($single) && ($single->balance)) value="{{$single->balance}}" @endif placeholder="{{ __('User balance ex: 100') }}" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class=" row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="type" class="form-label">{{ __('User package') }}</label>
                                    <select class="form-control" id="packageSelect" name="package_id">
                                        <option selected="" disabled="">* Select Package </option>
                                        @foreach($packages as $package)
                                        <option value="{{$package->id}}"@if (isset($single) && $package->id == $single->package_id)) selected="" @endif >{{$package->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-end">
                            <button type="submit"
                                class="btn btn-primary col-md-3 float-right ">{{ __('Submit') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
