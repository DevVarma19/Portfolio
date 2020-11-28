@extends('layouts.admin')

@section('title')
    Portfolio
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
                    <form id="work-platforms" class="section work-platforms" method="POST" action="{{ route('admin.create-portfolio') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="info">
                            <h5 class="">Portfolio</h5>
                            <div class="row">
                                <div class="col-md-12 text-right mb-5">
                                    <button type="submit" id="add-work-platforms" class="btn btn-primary">Add</button>
                                </div>
                                <div class="col-md-11 mx-auto">

                                    <div class="platform-div">
                                        <div class="form-group">
                                            <label for="platform-title">Title</label>
                                            <input type="text" class="form-control mb-4" id="platform-title" placeholder="Title" value="" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="platform-description">Link</label>
                                            <input type="text" class="form-control mb-4" id="platform-title" placeholder="Link" value="" name="link">
                                        </div>
                                        <div class="form-group">
                                            <label for="platform-description">Category</label>
                                            <select class="form-control mb-4" name="category" id="category">
                                                <option value="">Select Category</option>
                                                <option value="coding">Coding</option>
                                                <option value="design">Design</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image (<small class="text-primary">Max size: 2MB</small>) </label>
                                            <input type="file" id="input-file-max-fs" class="dropify" name="image" data-max-file-size="2M">
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
                                        <h4>Portfolio</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="style-3" class="table style-3  table-hover">
                                        <thead>
                                            <tr>
                                                <th class="checkbox-column text-center"> Id </th>
                                                <th class="text-center">Image</th>
                                                <th>Title</th>
                                                <th>Link</th>
                                                <th>Category</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($portfolios as $portfolio)
                                            <tr>
                                                <td class="checkbox-column text-center"> {{ $portfolio->id }} </td>
                                                <td class="text-center">
                                                    <span><img src="{{ asset('storage/'.$portfolio->image) }}" class="profile-img" alt="avatar"></span>
                                                </td>
                                                <td>{{ $portfolio->title }}</td>
                                                <td>{{ $portfolio->link }}</td>
                                                <td>{{ $portfolio->category }}</td>
                                                <td class="text-center">
                                                    <ul class="table-controls">
                                                        {{-- <li><button class="btn bg-transparent" data-toggle="modal" data-target="#editModal-{{ $portfolio->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></button></li> --}}
                                                        <li><button class="btn bg-transparent" data-toggle="modal" data-target="#deleteModal-{{ $portfolio->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></button></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <!-- Modal -->
                                            <div class="modal animated fadeInDown" id="editModal-{{ $portfolio->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Portfolio</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="work-platforms" class="section work-platforms" method="POST" action="{{ route('admin.update-portfolio', $portfolio->id) }}" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="info">
                                                                    <h5 class="">Portfolio</h5>
                                                                    <div class="row">
                                                                        <div class="col-md-11 mx-auto">
                                        
                                                                            <div class="platform-div">
                                                                                <div class="form-group">
                                                                                    <label for="platform-title">Title</label>
                                                                                    <input type="text" class="form-control mb-4" id="platform-title" placeholder="Title" value="{{ $portfolio->title }}" name="title">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="platform-description">Link</label>
                                                                                    <input type="text" class="form-control mb-4" id="platform-title" placeholder="Link" value="{{ $portfolio->link }}" name="link">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="platform-description">Category</label>
                                                                                    <select class="form-control mb-4" name="category" id="category">
                                                                                        <option value="">Select Category</option>
                                                                                        <option value="coding"
                                                                                        @if ($portfolio->category == 'coding')
                                                                                            selected
                                                                                        @endif
                                                                                        >Coding</option>
                                                                                        <option value="design"
                                                                                        @if ($portfolio->category == 'design')
                                                                                            selected
                                                                                        @endif
                                                                                        >Design</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="image">Image (<small class="text-primary">Max size: 2MB</small>) </label>
                                                                                    <input type="file" id="input-file-max-fs" data-default-file="{{ asset('storage/'.$portfolio->image) }}" class="dropify"  name="image" data-max-file-size="2M">
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
                                            <div class="modal animated rotateInDownLeft" id="deleteModal-{{ $portfolio->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header ">
                                                            <h5 class="modal-title" id="exampleModalLabel">{{ $portfolio->title }}</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="modal-text">Are You sure to delete?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancel</button>
                                                            <form action="{{ route('admin.delete-portfolio', $portfolio->id) }}" method="POST">
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
        </div>
        <!--  END CONTENT AREA  -->
@endsection

@section('scripts')
<script src="admin\plugins\dropify\dropify.min.js"></script>
<script src="admin\plugins\blockui\jquery.blockUI.min.js"></script>
<script src="admin\assets\js\users\account-settings.js"></script>
@endsection