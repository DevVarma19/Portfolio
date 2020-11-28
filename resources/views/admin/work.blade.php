@extends('layouts.admin')

@section('title')
    work
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
                    <form id="work-experience" class="section work-experience" action="{{ route('admin.create-work') }}" method="POST">
                        @csrf
                        <div class="info">
                            <h5 class="">Work Experience</h5>
                            <div class="row">
                                <div class="col-md-12 text-right mb-5">
                                    <button type="submit" id="add-work-exp" class="btn btn-primary">Add</button>
                                </div>
                                <div class="col-md-11 mx-auto">

                                    <div class="work-section">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="degree2">Company Name</label>
                                                    <input type="text" class="form-control mb-4" id="degree2" placeholder="Add your Company name here" value="" name="company">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="degree3">Job Tilte</label>
                                                    <input type="text" class="form-control mb-4" id="degree3" placeholder="Add your work here" value="" name="job">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Starting From</label>

                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <select class="form-control mb-4" id="wes-from1" name="from_month">
                                                                        <option value="none">Month</option>
                                                                        <option value="Jan">Jan</option>
                                                                        <option value="Feb">Feb</option>
                                                                        <option value="Mar">Mar</option>
                                                                        <option value="Apr">Apr</option>
                                                                        <option value="May">May</option>
                                                                        <option value="Jun">Jun</option>
                                                                        <option value="Jul">Jul</option>
                                                                        <option value="Aug">Aug</option>
                                                                        <option value="Sep">Sep</option>
                                                                        <option value="Oct">Oct</option>
                                                                        <option value="Nov">Nov</option>
                                                                        <option value="Dec">Dec</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <select class="form-control mb-4" id="wes-from2" name="from_year">
                                                                        <option>Year</option>
                                                                        <option value="2022">2022</option>
                                                                        <option value="2021">2021</option>
                                                                        <option value="2020">2020</option>
                                                                        <option value="2019">2019</option>
                                                                        <option value="2018">2018</option>
                                                                        <option value="2017">2017</option>
                                                                    </select>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Ending In</label>

                                                            <div class="row">

                                                                <div class="col-md-6 mb-4">
                                                                    <select class="form-control mb-4" id="wes-from1" name="to_month">
                                                                        <option value=" ">Month</option>
                                                                        <option value="Jan">Jan</option>
                                                                        <option value="Feb">Feb</option>
                                                                        <option value="Mar">Mar</option>
                                                                        <option value="Apr">Apr</option>
                                                                        <option value="May">May</option>
                                                                        <option value="Jun">Jun</option>
                                                                        <option value="Jul">Jul</option>
                                                                        <option value="Aug">Aug</option>
                                                                        <option value="Sep">Sep</option>
                                                                        <option value="Oct">Oct</option>
                                                                        <option value="Nov">Nov</option>
                                                                        <option value="Dec">Dec</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <select class="form-control mb-4" id="wes-from2" name="to_year">
                                                                        <option>Year</option>
                                                                        <option value="Present">Present</option>
                                                                        <option value="2022">2022</option>
                                                                        <option value="2021">2021</option>
                                                                        <option value="2020">2020</option>
                                                                        <option value="2019">2019</option>
                                                                        <option value="2018">2018</option>
                                                                        <option value="2017">2017</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                        <h4>Work Experience</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="style-3" class="table style-3  table-hover">
                                        <thead>
                                            <tr>
                                                <th class="checkbox-column text-center"> Id </th>
                                                <th class="text-center">Duration</th>
                                                <th>Job</th>
                                                <th>Company</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($works as $work)
                                            <tr>
                                                <td class="checkbox-column text-center"> {{ $work->id }} </td>
                                                <td class="text-center">
                                                    {{ $work->from }} - {{ $work->to }}
                                                </td>
                                                <td>{{ $work->job }}</td>
                                                <td>{{ $work->company }}</td>
                                                <td class="text-center">
                                                    <ul class="table-controls">
                                                        <li><button class="btn bg-transparent" data-toggle="modal" data-target="#editModal-{{ $work->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></button></li>
                                                        <li><button class="btn bg-transparent" data-toggle="modal" data-target="#deleteModal-{{ $work->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></button></li>
                                                    </ul>
                                                </td>
                                            </tr>    
                                             <!-- Modal -->
                                             <div class="modal animated fadeInDown bd-example-modal-lg" id="editModal-{{ $work->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit work</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="work-experience" class="section work-experience" action="{{ route('admin.update-work', $work->id) }}" method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="info">
                                                                    <h5 class="">Work Experience</h5>
                                                                    <div class="row">
                                                                        <div class="col-md-11 mx-auto">
                                        
                                                                            <div class="work-section">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label for="degree2">Company Name</label>
                                                                                            <input type="text" class="form-control mb-4" id="degree2" placeholder="Add your Company name here" value="{{ $work->company }}" name="company">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label for="degree3">Job Tilte</label>
                                                                                            <input type="text" class="form-control mb-4" id="degree3" placeholder="Add your work here" value="{{ $work->job }}" name="job">
                                                                                        </div>
                                                                                    </div>
                                        
                                                                                    <div class="col-md-12">
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <div class="form-group">
                                                                                                    <label>Starting From</label>
                                        
                                                                                                    <div class="row">
                                        
                                                                                                        <div class="col-md-6">
                                                                                                            <select class="form-control mb-4" id="wes-from1" name="from_month">
                                                                                                                <option value="none">Month</option>
                                                                                                                <option value="Jan">Jan</option>
                                                                                                                <option value="Feb">Feb</option>
                                                                                                                <option value="Mar">Mar</option>
                                                                                                                <option value="Apr">Apr</option>
                                                                                                                <option value="May">May</option>
                                                                                                                <option value="Jun">Jun</option>
                                                                                                                <option value="Jul">Jul</option>
                                                                                                                <option value="Aug">Aug</option>
                                                                                                                <option value="Sep">Sep</option>
                                                                                                                <option value="Oct">Oct</option>
                                                                                                                <option value="Nov">Nov</option>
                                                                                                                <option value="Dec">Dec</option>
                                                                                                            </select>
                                                                                                        </div>
                                        
                                                                                                        <div class="col-md-6">
                                                                                                            <select class="form-control mb-4" id="wes-from2" name="from_year">
                                                                                                                <option>Year</option>
                                                                                                                <option value="2022">2022</option>
                                                                                                                <option value="2021">2021</option>
                                                                                                                <option value="2020">2020</option>
                                                                                                                <option value="2019">2019</option>
                                                                                                                <option value="2018">2018</option>
                                                                                                                <option value="2017">2017</option>
                                                                                                            </select>
                                                                                                        </div>
                                        
                                                                                                    </div>
                                        
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                <div class="form-group">
                                                                                                    <label>Ending In</label>
                                        
                                                                                                    <div class="row">
                                        
                                                                                                        <div class="col-md-6 mb-4">
                                                                                                            <select class="form-control mb-4" id="wes-from1" name="to_month">
                                                                                                                <option value="">Month</option>
                                                                                                                <option value="Jan">Jan</option>
                                                                                                                <option value="Feb">Feb</option>
                                                                                                                <option value="Mar">Mar</option>
                                                                                                                <option value="Apr">Apr</option>
                                                                                                                <option value="May">May</option>
                                                                                                                <option value="Jun">Jun</option>
                                                                                                                <option value="Jul">Jul</option>
                                                                                                                <option value="Aug">Aug</option>
                                                                                                                <option value="Sep">Sep</option>
                                                                                                                <option value="Oct">Oct</option>
                                                                                                                <option value="Nov">Nov</option>
                                                                                                                <option value="Dec">Dec</option>
                                                                                                            </select>
                                                                                                        </div>
                                        
                                                                                                        <div class="col-md-6">
                                                                                                            <select class="form-control mb-4" id="wes-from2" name="to_year">
                                                                                                                <option>Year</option>
                                                                                                                <option value="Present">Present</option>
                                                                                                                <option value="2022">2022</option>
                                                                                                                <option value="2021">2021</option>
                                                                                                                <option value="2020">2020</option>
                                                                                                                <option value="2019">2019</option>
                                                                                                                <option value="2018">2018</option>
                                                                                                                <option value="2017">2017</option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
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
                                            <div class="modal animated rotateInDownLeft" id="deleteModal-{{ $work->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header ">
                                                            <h5 class="modal-title" id="exampleModalLabel">{{ $work->company }}</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="modal-text">Are You sure to delete?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancel</button>
                                                            <form action="{{ route('admin.delete-work', $work->id) }}" method="POST">
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