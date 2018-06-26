@extends('layouts.app.app')

@section('subheader_title')
    Generate Pin
@endsection

@section('content')

@if( session('status') )
<div class="m-protlet">
    <div class="m-portlet_body">
            <div class="m-alert m-alert--icon m-alert--icon-solid m-alert--outline alert alert-brand alert-dismissible fade show" role="alert">
                <div class="m-alert__icon">
                    <i class="flaticon-exclamation-1"></i>
                    <span></span>
                </div>
                <div class="m-alert__text">
                    <strong>
                        Pin Generated!
                    </strong>
                    Generated Pin ID : {{ session('pin_no') }}
                </div>
                <div class="m-alert__close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
    </div>
</div>
@endif

<div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Generate Pin
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">

                <form action="{{ route('post_generate_pin') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group m-form__group">
                    <label for="exampleSelect1">
                        Pin Type
                    </label>
                    <select class="form-control m-input" id="pin_type" name="pin_type">
                        @foreach($pin_types as $pin_type)
                        <option value="{{ $pin_type->id }}">    
                            {{ $pin_type->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group m-form__group">
                    <label for="exampleSelect1">
                        Assinee User Id
                    </label>
                    <input class="form-control m-input" type="text" name="user_id" id="user_id">
                    <span class="m-form__help">
                        Leave blank to assign user later
                    </span>
                </div>

                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions">
                        <button type="submit" id="generate_btn" class="btn btn-primary">
                            Generate
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@include('layouts.app.toastr')

