@extends('layouts.admin')

@section('title')
    Contact
@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="admin\plugins\table\datatable\datatables.css">
    <link rel="stylesheet" type="text/css" href="admin\assets\css\forms\theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="admin\plugins\table\datatable\dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="admin\plugins\table\datatable\custom_dt_custom.css">
@endsection
@section('content')
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-spacing">
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-8 col-md-8 col-sm-8 col-8">
                                        <h4>Contact</h4>
                                    </div>
                                    <div class="col-xl-2 col-md-2 col-sm-2 col-2">
                                        <a href="{{ route('admin.clear-contact') }}" class="btn btn-danger pull-right">Clear</a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    @if($contacts->count() > 0)
                                    <table class="table mb-4 contextual-table">
                                        <thead>
                                            <tr class="">
                                                <th class="text-center">#</th>
                                                <th class="text-center">Date</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contacts as $c)
                                            <tr class="table-default">
                                                <td class="text-center">{{ $i++ }}</td>
                                                <td class="text-center">{{ $c->date }}</td>
                                                <td>{{ $c->name }}</td>
                                                <td>{{ $c->email }}</td>
                                                <td>{{ $c->message }}</td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                    @else
                                    <p class="text-center">No contacts present</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--  END CONTENT AREA  -->
@endsection