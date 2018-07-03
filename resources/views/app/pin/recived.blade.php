@extends('layouts.app.app')

@section('subheader_title')
    Recived Pins
@endsection


@section('content')
<div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Recived Pins
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
                                            Transfered By
                                        </th>
                                        <th>
                                            Transfered At
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recived_pins as $pin)
                                    <tr>
                                        <th>
                                            {{ $pin->id }}
                                        </th>
                                        <td>
                                            {{ $pin->pin_no}}
                                        </td>
                                        <td>
                                           {{ $pin->pin_type->name}}
                                        </td>
                                        <td>
                                            {{ $pin->sender->username }} ( {{ $pin->sender->id }} )
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