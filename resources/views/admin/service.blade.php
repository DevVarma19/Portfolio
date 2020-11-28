@extends('layouts.admin')
@section('title')
    Services
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
                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <form id="work-platforms" class="section work-platforms" method="POST" action="{{ route('admin.create-service') }}">
                        @csrf
                        <div class="info">
                            <h5 class="">Services</h5>
                            <div class="row">
                                <div class="col-md-12 text-right mb-5">
                                    <button type="submit" id="add-work-platforms" class="btn btn-primary">Add</button>
                                </div>
                                <div class="col-md-11 mx-auto">

                                    <div class="platform-div">
                                        <div class="form-group">
                                            <label for="platform-title">Sevice Title</label>
                                            <input type="text" class="form-control mb-4" id="platform-title" placeholder="Sevice Title" name="title" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="platform-description">Description</label>
                                            <textarea class="form-control mb-4" id="platform-description" placeholder="Sevice Description" name="description" rows="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="Icon">Icon</label>
                                            <p class="text-small">(eg: <strong class="text-primary">fa fa-font-awesome</strong> )</p>
                                            <input type="text" name="icon" id="icon" class="form-control social-icon" data-placement="bottomRight">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="row layout-spacing">
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Services</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="style-3" class="table style-3  table-hover">
                                        <thead>
                                            <tr>
                                                <th class="checkbox-column text-center">  Id </th>
                                                <th class="text-center">Icon</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($services as $service)
                                            <tr>
                                                <td class="checkbox-column text-center"> {{ $service->id }} </td>
                                                <td class="text-center">
                                                    <span><i class="{{ $service->icon }}"></i></span>
                                                </td>
                                                <td>{{ $service->title }}</td>
                                                <td>{{ $service->description }}</td>
                                                <td class="text-center">
                                                    <ul class="table-controls">
                                                        <li><button class="btn bg-transparent" data-toggle="modal" data-target="#editModal-{{ $service->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></button></li>
                                                        <li><button class="btn bg-transparent" data-toggle="modal" data-target="#deleteModal-{{ $service->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></button></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <!-- Modal -->
                                            <div class="modal animated fadeInDown" id="editModal-{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Services</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="work-platforms" class="section work-platforms" method="POST" action="{{ route('admin.update-service', $service->id) }}">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="info">
                                                                    <div class="row">
                                                                        <div class="col-md-11 mx-auto">
                                        
                                                                            <div class="platform-div">
                                                                                <div class="form-group">
                                                                                    <label for="platform-title">Sevice Title</label>
                                                                                    <input type="text" class="form-control mb-4" id="platform-title" placeholder="Sevice Title" value="{{ $service->title }}" name="title">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="platform-description">Description</label>
                                                                                    <textarea class="form-control mb-4" id="platform-description" placeholder="Sevice Description" rows="10" name="description">{{ $service->description }}</textarea>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="Icon">Icon</label>
                                                                                    <p class="text-small">(eg: <strong class="text-primary">fa fa-font-awesome</strong> )</p>
                                                                                    <input type="text" name="icon" id="icon" class="form-control social-icon" data-placement="bottomRight" value="{{ $service->icon }}">
                                                                                </div>
                                                                            </div>
                                        
                                                                        </div>
                                        
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="modal-footer">
                                                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal animated rotateInDownLeft" id="deleteModal-{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header ">
                                                            <h5 class="modal-title" id="exampleModalLabel">{{ $service->title }}</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="modal-text">Are You sure to delete?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancel</button>
                                                            <form action="{{ route('admin.delete-service', $service->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                            
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <!--  END CONTENT AREA  -->
@endsection