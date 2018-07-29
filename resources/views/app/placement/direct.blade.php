@extends('layouts.app.app')

@section('subheader_title')
    My Directs
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
                                Id
                            </th>

                            <th>
                                Full Name
                            </th>

                            <th>
                                User Name
                            </th>

                            <th>
                                Email
                            </th>

                            <th>
                                Position
                            </th>

                            <th>
                                Contact
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @if ( $left_user )
                        <tr>
                            <th>
                                {{ $left_user->id }}
                            </th>
                            <td>
                                {{ $left_user->name }}
                            </td>
                            <td>
                                {{ $left_user->username }}
                            </td>
                            <td>
                                {{ $left_user->email }}
                            </td>
                            <td>
                                {{ $left_user->position}}
                            </td>
                            <td>
                                {{ $left_user->contact_no }}
                            </td>
                        </tr>
                        @endif 

                        @if ( $right_user )
                        <tr>
                            <th>
                                {{ $right_user->id }}
                            </th>
                            <td>
                                {{ $right_user->name }}
                            </td>
                            <td>
                                {{ $right_user->username }}
                            </td>
                            <td>
                                {{ $right_user->email }}
                            </td>
                            <td>
                                {{ $right_user->position}}
                            </td>
                            <td>
                                {{ $right_user->contact_no }}
                            </td>
                        </tr>
                        @endif 
                        

                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection