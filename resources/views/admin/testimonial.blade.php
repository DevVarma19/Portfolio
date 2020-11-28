@extends('layouts.admin')

@section('title')
    Testimonial
@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="admin\plugins\table\datatable\datatables.css">
    <link rel="stylesheet" type="text/css" href="admin\assets\css\forms\theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="admin\plugins\table\datatable\dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="admin\plugins\table\datatable\custom_dt_custom.css">

    <link rel="stylesheet" type="text/css" href="admin\plugins\dropify\dropify.min.css">
    <link href="admin\assets\css\users\account-setting.css" rel="stylesheet" type="text/css">
@endsection
@section('content')
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <form id="work-platforms" class="section work-platforms" action="{{ route('admin.create-testimonial') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="info">
                            <h5 class="">Testimonials</h5>
                            <div class="row">
                                <div class="col-md-12 text-right mb-5">
                                    <button type="submit" id="add-work-platforms" class="btn btn-primary">Add</button>
                                </div>
                                <div class="col-md-11 mx-auto">

                                    <div class="platform-div">
                                        <div class="form-group">
                                            <label for="platform-title">Client Name</label>
                                            <input type="text" class="form-control mb-4" id="platform-title" placeholder="Name" name="name" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="platform-description">Description</label>
                                            <textarea class="form-control mb-4" id="platform-description" placeholder="Description" rows="10" name="description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="platform-title">Designation</label>
                                            <input type="text" class="form-control mb-4" id="platform-title" placeholder="Designation" value="" name="designation">
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image (<small class="text-primary">Max size:2MB</small>) </label>
                                            <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M" name="image">                                      
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
                                        <h4>Testimonials</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    @if ($testimonials->count() > 0)
                                    
                                    <table id="style-3" class="table style-3  table-hover">
                                        <thead>
                                            <tr>
                                                <th class="checkbox-column text-center"> Id </th>
                                                <th class="text-center">Image</th>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Description</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($testimonials as $testimonial)
                                            <tr>
                                                <td class="checkbox-column text-center"> {{ $testimonial->id }} </td>
                                                <td class="text-center">
                                                    <span><img src="{{ asset('storage/'.$testimonial->image) }}" class="profile-img" alt="avatar"></span>
                                                </td>
                                                <td>{{ $testimonial->name }}</td>
                                                <td>{{ $testimonial->designation }}</td>
                                                <td>{{ $testimonial->description }}</td>
                                                <td class="text-center">
                                                    <ul class="table-controls">
                                                        <li><button class="btn bg-transparent" data-toggle="modal" data-target="#editModal-{{ $testimonial->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></button></li>
                                                        <li><button class="btn bg-transparent" data-toggle="modal" data-target="#deleteModal-{{ $testimonial->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></button></li>
                                                    </ul>
                                                </td>
                                            </tr>

                                            <!-- Modal -->
                                            <div class="modal animated fadeInDown" id="editModal-{{ $testimonial->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Testimonial</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="work-platforms" class="section work-platforms" method="POST" action="{{ route('admin.update-testimonial', $testimonial->id) }}" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="info">
                                                                    <div class="row">
                                                                        <div class="col-md-11 mx-auto">
                                        
                                                                            <div class="platform-div">
                                                                                <div class="form-group">
                                                                                    <label for="platform-title">Name</label>
                                                                                    <input type="text" class="form-control mb-4" id="platform-title" value="{{ $testimonial->name }}" name="name">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="platform-description">Description</label>
                                                                                    <textarea class="form-control mb-4" id="platform-description" rows="10" name="description">{{ $testimonial->description }}</textarea>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="Icon">Designation</label>
                                                                                    <input type="text" class="form-control social-icon" data-placement="bottomRight" value="{{ $testimonial->designation }}" name="designation">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="image">Image (<small class="text-primary">Max size:2MB</small>) </label>
                                                                                    <input type="file" id="input-file-max-fs" data-default-file="{{ asset('storage/'.$testimonial->image) }}" class="dropify" data-max-file-size="2M" name="image">                                      
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
                                            <div class="modal animated rotateInDownLeft" id="deleteModal-{{ $testimonial->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header ">
                                                            <h5 class="modal-title" id="exampleModalLabel">{{ $testimonial->title }}</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="modal-text">Are You sure to delete?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancel</button>
                                                            <form action="{{ route('admin.delete-testimonial', $testimonial->id) }}" method="POST">
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
                                    @else
                                        <p>No Testimonials available</p>
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

@section('scripts')
<script src="admin\plugins\dropify\dropify.min.js"></script>
<script src="admin\plugins\blockui\jquery.blockUI.min.js"></script>
<script src="admin\assets\js\users\account-settings.js"></script>
@endsection