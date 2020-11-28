@extends('layouts.admin')

@section('title')
    Settings
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="admin\plugins\dropify\dropify.min.css">
<link href="admin\assets\css\users\account-setting.css" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="account-settings-container layout-top-spacing">

                    <div class="account-content">
                        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form id="general-info" class="section general-info" method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="info">
                                            <h6 class="">General Information</h6>
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-xl-2 col-lg-12 col-md-4">
                                                            <div class="upload mt-4 pr-md-4">
                                                                <input type="file" id="input-file-max-fs" data-default-file="{{ asset('storage/'.$user->image1) }}" class="dropify" name="image1" data-max-file-size="2M">
                                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Picture</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="fullName">Full Name</label>
                                                                            <input type="text" class="form-control mb-4" id="fullName" placeholder="Full Name" name="name" value="{{ $user->name }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label class="dob-input">Date of Birth</label>
                                                                        <div class="d-sm-flex d-block">
                                                                            <div class="form-group mr-1">
                                                                                <select class="form-control" id="exampleFormControlSelect1" name="day">
                                                                                  <option>Day</option>
                                                                                  <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="5">5</option>
                                                                                    <option value="6">6</option>
                                                                                    <option value="7">7</option>
                                                                                    <option value="8">8</option>
                                                                                    <option value="9">9</option>
                                                                                    <option value="10">10</option>
                                                                                    <option value="11">11</option>
                                                                                    <option value="12">12</option>
                                                                                    <option value="13" selected>13</option>
                                                                                    <option value="14">14</option>
                                                                                    <option value="15">15</option>
                                                                                    <option value="16">16</option>
                                                                                    <option value="17">17</option>
                                                                                    <option value="18">18</option>
                                                                                    <option value="19">19</option>
                                                                                    <option value="20">20</option>
                                                                                    <option value="21">21</option>
                                                                                    <option value="22">22</option>
                                                                                    <option value="23">23</option>
                                                                                    <option value="24">24</option>
                                                                                    <option value="25">25</option>
                                                                                    <option value="26">26</option>
                                                                                    <option value="27">27</option>
                                                                                    <option value="28">28</option>
                                                                                    <option value="29">29</option>
                                                                                    <option value="30">30</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group mr-1">
                                                                                <select class="form-control" id="month" name="month">
                                                                                    <option>Month</option>
                                                                                    <option value="1">Jan</option>
                                                                                    <option value="2">Feb</option>
                                                                                    <option value="3">Mar</option>
                                                                                    <option value="4">Apr</option>
                                                                                    <option value="5">May</option>
                                                                                    <option value="6">Jun</option>
                                                                                    <option value="7">Jul</option>
                                                                                    <option value="8">Aug</option>
                                                                                    <option value="9">Sep</option>
                                                                                    <option value="10">Oct</option>
                                                                                    <option value="11">Nov</option>
                                                                                    <option value="12" selected>Dec</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group mr-1">
                                                                                <select class="form-control" id="year" name="year">
                                                                                  <option>Year</option>
                                                                                  <option value="2005">2005</option>
                                                                                    <option value="2004">2004</option>
                                                                                    <option value="2003">2003</option>
                                                                                    <option value="2002">2002</option>
                                                                                    <option value="2001">2001</option>
                                                                                    <option value="2000" selected>2000</option>
                                                                                    <option value="1999">1999</option>
                                                                                    <option value="1998">1998</option>
                                                                                    <option value="1997">1997</option>
                                                                                    <option value="1996">1996</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="profession">Mobile Number</label>
                                                                    <input type="text" class="form-control mb-4" name="mobile" id="profession" placeholder="999999999" value="{{ $user->mobile }}">
                                                                </div>
                                                                <div class="form-group mr-1">
                                                                    <label for="profession">Profession</label><br>
                                                                    <select class="form-control mb-4 tags-selector" multiple="multiple" name="professions[]">
                                                                        @foreach ($user->professions as $role)
                                                                            <option value="{{ $role }}" selected>{{ $role }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label for="image">Large Image (<small class="text-primary">Max size: 2MB</small>) </label>
                                                                    <input type="file" id="input-file-max-fs" data-default-file="{{ asset('storage/'.$user->image2) }}" class="dropify" name="image2" data-max-file-size="2M">
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label for="image">Color Theme </label>
                                                                    <select name="color" id="color" class="form-control">
                                                                        <option value="">Color</option>
                                                                        <option value="yellow" style="color: yellow"
                                                                        @if($user->color === 'yellow')
                                                                        selected
                                                                        @endif
                                                                        >Yellow</option>
                                                                        <option value="purple" style="color: purple"
                                                                        @if($user->color === 'purple')
                                                                        selected
                                                                        @endif
                                                                        >Purple</option>
                                                                        <option value="green" style="color: green"
                                                                        @if($user->color === 'green')
                                                                        selected
                                                                        @endif
                                                                        >Green</option>
                                                                        <option value="red" style="color: red"
                                                                        @if($user->color === 'red')
                                                                        selected
                                                                        @endif
                                                                        >Red</option>
                                                                        <option value="blue" style="color: blue"
                                                                        @if($user->color === 'blue')
                                                                        selected
                                                                        @endif
                                                                        >Blue</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label for="image">Resume (<small class="text-primary">Max size: 2MB</small>) </label>
                                                                    <input type="file" id="input-file-max-fs" data-default-file="{{ asset('storage/'.$user->resume) }}" class="dropify" name="resume" data-max-file-size="2M">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h5 class="">About</h5>
                                            <div class="row">
                                                <div class="col-md-11 mx-auto">
                                                    <div class="form-group">
                                                        <label for="aboutBio">Bio</label>
                                                        <textarea class="form-control" id="aboutBio" placeholder="Tell something interesting about yourself" rows="10" name="bio">{{ $user->bio }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h5 class="">Social</h5>
                                            <div class="row">

                                                <div class="col-md-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group social-linkedin mb-3">
                                                                <div class="input-group-prepend mr-3">
                                                                    <span class="input-group-text" id="linkedin"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="linkedin Username" name="linkedin" value="{{ $user->linkedin }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="input-group social-tweet mb-3">
                                                                <div class="input-group-prepend mr-3">
                                                                    <span class="input-group-text" id="tweet"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Twitter Username"  name="twitter" value="{{ $user->twitter }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group social-fb mb-3">
                                                                <div class="input-group-prepend mr-3">
                                                                    <span class="input-group-text" id="fb"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Facebook Username" name="facebook" value="{{ $user->facebook }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="input-group social-github mb-3">
                                                                <div class="input-group-prepend mr-3">
                                                                    <span class="input-group-text" id="github"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Github Username" name="github" value="{{ $user->github }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h5 class="">Password</h5>
                                            <div class="row">
                                                <div class="col-md-11 mx-auto">
                                                    <div class="form-group">
                                                        <label for="profession">Password</label>
                                                        <input type="text" class="form-control mb-4" name="password" id="profession" placeholder="password" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="account-settings-footer">

                                            <div class="as-footer-container">
                    
                                                {{-- <button id="multiple-reset" class="btn btn-primary">Reset All</button> --}}
                                                {{-- <div class="blockui-growl-message">
                                                    <i class="flaticon-double-check"></i>&nbsp; Settings Saved Successfully
                                                </div> --}}
                                                <button type="submit" id="multiple-messages" class="btn btn-primary">Save Changes</button>
                    
                                            </div>
                    
                                        </div>
                                    </form>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing pb-5">
                                    <form id="social" class="section social">


                                    </form>
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(".tags-selector").select2({
  tags: true
});
</script>
@endsection