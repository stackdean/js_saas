@extends('layouts.main')
@section('title', __('Packages'))
@section('breadcrumb')
<div class="col-md-12">
    <div class="page-header-title">
        @if(isset($single))
        <h4 class="m-b-10">{{ __('Edit Package') }}</h4>
        @else
        <h4 class="m-b-10">{{ __('Create Package') }}</h4>
        @endif
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Dashboard') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('packages.index') }}">{{ __('Packages') }}</a></li>
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
        action="{{url('packages/'.$single->id.'/edit')}}" @else action="{{ route('packages.store') }}" @endif>
        @if(isset($single))
        <input type="hidden" name="_method" value="patch">
        @endif
        @csrf
        <div class="row">
            <div class="col-xl-6 mx-auto order-xl-1">
                <div class="card">
                    <div class="card-header">
                        @if(isset($single))
                        <h5>{{ __('Edit Package') }}</h5>
                        @else
                        <h5>{{ __('Create Package') }}</h5>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class=" row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="title" class="form-label">{{ __('Title') }}</label>
                                    <input type="text" name="title" class="form-control" id="title"
                                        placeholder="{{ __('Title') }}"
                                        value="@if(isset($single) && ($single->title)){{$single->title}}@endif"
                                        required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class=" row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="duration" class="form-label">{{ __('Duration by days') }}</label>
                                    <input type="number" name="duration" class="form-control" id="duration"
                                        @if(isset($single) && ($single->duration)) value="{{$single->duration}}" @endif
                                    placeholder="{{ __('ex: 60') }}" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class=" row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="fees" class="form-label">{{ __('Fees') }}</label>
                                    <input type="number" name="fees" class="form-control" id="fees" @if(isset($single)
                                        && ($single->fees)) value="{{$single->fees}}" @endif
                                    placeholder="{{ __('ex: 1000') }}" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class=" row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="payment_url" class="form-label">{{ __('Payment Link') }}</label>
                                    <input type="text" name="payment_url" class="form-control" id="payment_url"
                                        placeholder="{{ __('Payment Link') }}"
                                        value="@if(isset($single) && ($single->payment_url)){{$single->payment_url}}@endif"
                                        required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class=" row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="description" class="form-label">{{ __('Description') }}</label>
                                    <textarea name="description" class="form-control" id="description"
                                        required>@if(isset($single->description)){{old('description',$single->description) }}@else{{old('description')}}@endif</textarea>
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
