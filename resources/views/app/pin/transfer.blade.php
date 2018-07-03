@extends('layouts.app.app')

@section('subheader_title')
    Transfer Pin
@endsection


@section('content')

<div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Transfer Pin
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">

                <form action="{{ route('post_transfer_pin') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group m-form__group">
                    <label for="pin_no">
                        Pin Code
                    </label>
                    <input type="text" class="form-control m-input" id="pin_no" name="pin_no">
                </div>

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
                    <label for="exampleSelect1">
                        Reciver User Id
                    </label>
                    <input class="form-control m-input" type="text" name="reciver_id" id="reciver_id">
                </div>

                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions">
                        <button type="submit" id="transfer_btn" class="btn btn-primary">
                            Transfer
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
                        Transfered Pins
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
                                            Pin No
                                        </th>
                                        <th>
                                            Pin Type
                                        </th>
                                        <th>
                                            Assignee Id
                                        </th>
                                        <th>
                                            Assignee Name
                                        </th>
                                        <th>
                                            Transfered At
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transfered_pins as $pin)
                                    <tr>
                                        <th>
                                            {{ $pin->id }}
                                        </th>
                                        <td>
                                            {{ $pin->pin_no}}
                                        </td>
                                        <td>

                                            {{ $pin->pin_type->name }}
                                            {{-- @foreach($pin_types as $pin_type)
                                            @if( $pin_type->id == $pin->pin_type_id )
                                                {{ $pin_type->name }}
                                            @endif
                                            @endforeach --}}
                                        </td>
                                        <td>
                                            {{ $pin->reciver_id }}
                                        </td>
                                        <td>
                                            {{ $pin->reciver->username }}
                                        </td>
                                        <td>
                                            {{ $pin->created_at }}
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