@extends('layouts.app.app')

@section('subheader_title')
    Request Pin
@endsection


@section('content')
<div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Request Pin
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">

                <form action="{{ route('post_request_pin') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group m-form__group">
                    <label for="pin_type">
                        Pin Type
                    </label>
                    <select class="form-control m-input" id="pin_type_id" name="pin_type_id">
                        @foreach($pin_types as $pin_type)
                        <option value="{{ $pin_type->id }}">    
                            {{ $pin_type->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group m-form__group">
                    <label for="quantity">
                        Number of Pins
                    </label>
                    <input class="form-control m-input" type="text" name="quantity" id="quantity">
                </div>

                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions">
                        <button type="submit" id="transfer_btn" class="btn btn-primary">
                            Request Pin
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>


    <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Requested Pins
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                    <div class="m-section">
                            <div class="m-section__content">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>
                                                User Id
                                            </th>
                                            <th>
                                                Pin Type
                                            </th>
                                            <th>
                                                Quantity
                                            </th>
                                            <th>
                                                Status
                                            </th>
                                            <th>
                                                Transaction No
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($requested_pins as $pin)
                                        <tr>
                                            <th>
                                                {{ $pin->id }}
                                            </th>
                                            <td>
                                                {{ Auth::id() }}
                                            </td>
                                            <td>
                                                {{ $pin->pin_type->name}}
                                            </td>
                                            <td>
    
                                                {{ $pin->quantity }}
                                                {{-- @foreach($pin_types as $pin_type)
                                                @if( $pin_type->id == $pin->pin_type_id )
                                                    {{ $pin_type->name }}
                                                @endif
                                                @endforeach --}}
                                            </td>
                                            <td>
                                                @if($pin->status == 0 )
                                                    Pending
                                                @elseif ($pin->status == 1)
                                                    Approved
                                                @else 
                                                    Denied
                                                @endif
                                            </td>
                                            <td>
                                                {{ $pin->transaction_no }}
                                            </td>

                                        </tr>
                                        @endforeach
            
                                    </tbody>
                                </table>
                            </div>
                        </div>
            </div>
        </div>

@endsection

@include('layouts.app.toastr')