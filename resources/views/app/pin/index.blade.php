@extends('layouts.app.app')

@section('subheader_title')
    My Pins
@endsection


@section('content')
    <div class="m-portlet">
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
                                    Used
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pins as $pin)
                            <tr>
                                <th>
                                    {{ $pin->id }}
                                </th>
                                <td>
                                    {{ $pin->pin_no}}
                                </td>
                                <td>
                                    {{ $pin->pin_type->name }}
                                </td>
                                <td>
                                    @if( $pin->claimed != 0)
                                        Used
                                    @else 
                                        Unused
                                    @endif
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