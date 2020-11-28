@extends('layouts.admin')

@section('title')
    Skills
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
                    <form id="work-platforms" class="section work-platforms" method="POST" action={{ route('admin.create-skills') }}>
                        @csrf
                        <div class="info">
                            <h5 class="">Skills</h5>
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
                                            <label for="platform-description">Profiecency</label>
                                            <input type="text" class="form-control mb-4" id="platform-title" placeholder="90" value="" name="profieciency">
                                        </div>
                                        <div class="form-group">
                                            <label for="type">Skill type</label>
                                            <select class="form-control mb-4" name="skill_type">
                                                <option value="none">Select Type</option>
                                                <option value="technical">Technical</option>
                                                <option value="language">Language</option>
                                            </select>
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
                                        <h4>Technical Skills</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="style-3" class="table style-3  table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Title</th>
                                                <th class="text-center">Proficiency</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($skills as $skill)
                                                @if ($skill->skill_type == 'technical')
                                                <tr>
                                                    <td class="text-center">{{ $skill->id }}</td>
                                                    <td class="text-center">
                                                        {{ $skill->title }}
                                                    </td>
                                                    <td class="text-center">{{ $skill->profieciency }}</td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li><button class="btn bg-transparent" data-toggle="modal" data-target="#editModal-{{ $skill->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></button></li>
                                                            <li><button class="btn bg-transparent" data-toggle="modal" data-target="#deleteModal-{{ $skill->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></button></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <!-- Modal -->
                                            <div class="modal animated fadeInDown" id="editModal-{{ $skill->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Skills</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="work-platforms" class="section work-platforms" method="POST" action={{ route('admin.update-skills', $skill->id) }}>
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="info">
                                                                    <h5 class="">Skills</h5>
                                                                    <div class="row">
                                                                        <div class="col-md-11 mx-auto">
                                        
                                                                            <div class="platform-div">
                                                                                <div class="form-group">
                                                                                    <label for="platform-title">Title</label>
                                                                                    <input type="text" class="form-control mb-4" id="platform-title" placeholder="Title" value="{{ $skill->title }}" name="title">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="platform-description">Profiecency</label>
                                                                                    <input type="text" class="form-control mb-4" id="platform-title" placeholder="90" value="{{ $skill->profieciency }}" name="profieciency">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="type">Skill type</label>
                                                                                    <select class="form-control mb-4" name="skill_type">
                                                                                        <option value="none">Select Type</option>
                                                                                        <option value="technical" selected>Technical</option>
                                                                                        <option value="language">Language</option>
                                                                                    </select>
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
                                            <div class="modal animated rotateInDownLeft" id="deleteModal-{{ $skill->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header ">
                                                            <h5 class="modal-title" id="exampleModalLabel">{{ $skill->title }}</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="modal-text">Are You sure to delete?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancel</button>
                                                            <form action="{{ route('admin.delete-skills', $skill->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   
                                                @endif
                                            @endforeach
                                        </tbody>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row layout-spacing">
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Language Skills</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="style-3" class="table style-3  table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Title</th>
                                                <th class="text-center">Proficiency</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($skills as $skill)
                                                @if ($skill->skill_type == 'language')
                                                <tr>
                                                    <td class="text-center">{{ $skill->id }}</td>
                                                    <td class="text-center">
                                                        {{ $skill->title }}
                                                    </td>
                                                    <td class="text-center">{{ $skill->profieciency }}</td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li><button class="btn bg-transparent" data-toggle="modal" data-target="#editModal-{{ $skill->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></button></li>
                                                            <li><button class="btn bg-transparent" data-toggle="modal" data-target="#deleteModal-{{ $skill->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></button></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <!-- Modal -->
                                            <div class="modal animated fadeInDown" id="editModal-{{ $skill->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Skills</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="work-platforms" class="section work-platforms" method="POST" action={{ route('admin.update-skills', $skill->id) }}>
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="info">
                                                                    <h5 class="">Skills</h5>
                                                                    <div class="row">
                                                                        <div class="col-md-11 mx-auto">
                                        
                                                                            <div class="platform-div">
                                                                                <div class="form-group">
                                                                                    <label for="platform-title">Title</label>
                                                                                    <input type="text" class="form-control mb-4" id="platform-title" placeholder="Title" value="{{ $skill->title }}" name="title">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="platform-description">Profiecency</label>
                                                                                    <input type="text" class="form-control mb-4" id="platform-title" placeholder="90" value="{{ $skill->profieciency }}" name="profieciency">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="type">Skill type</label>
                                                                                    <select class="form-control mb-4" name="skill_type">
                                                                                        <option value="none">Select Type</option>
                                                                                        <option value="technical">Technical</option>
                                                                                        <option value="language" selected>Language</option>
                                                                                    </select>
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
                                            <div class="modal animated rotateInDownLeft" id="deleteModal-{{ $skill->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header ">
                                                            <h5 class="modal-title" id="exampleModalLabel">{{ $skill->title }}</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="modal-text">Are You sure to delete?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancel</button>
                                                            <form action="{{ route('admin.delete-skills', $skill->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                @endif
                                            
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