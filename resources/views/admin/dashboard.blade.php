@extends('layouts.admin')
@section('title')
    Dashboard
@endsection
@section('content')
            <!--  BEGIN CONTENT PART  -->
            <div id="content" class="main-content">
                <div class="layout-px-spacing">
    
                    <div class="row layout-top-spacing">
    
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                            <div class="widget-four">
                                <div class="widget-heading">
                                    <h5 class="">Visitors by Browser</h5>
                                </div>
                                <div class="widget-content">
                                    <div class="vistorsBrowser">
                                        <div class="browser-list">
                                            <div class="w-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chrome"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="21.17" y1="8" x2="12" y2="8"></line><line x1="3.95" y1="6.06" x2="8.54" y2="14"></line><line x1="10.88" y1="21.94" x2="15.46" y2="14"></line></svg>
                                            </div>
                                            <div class="w-browser-details">
                                                <div class="w-browser-info">
                                                    <h6>Chrome</h6>
                                                    <p class="browser-count">65%</p>
                                                </div>
                                                <div class="w-browser-stats">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 65%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="browser-list">
                                            <div class="w-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-compass"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg>
                                            </div>
                                            <div class="w-browser-details">
    
                                                <div class="w-browser-info">
                                                    <h6>Safari</h6>
                                                    <p class="browser-count">25%</p>
                                                </div>
    
                                                <div class="w-browser-stats">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
    
                                            </div>
    
                                        </div>
    
                                        <div class="browser-list">
                                            <div class="w-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                            </div>
                                            <div class="w-browser-details">
    
                                                <div class="w-browser-info">
                                                    <h6>Others</h6>
                                                    <p class="browser-count">15%</p>
                                                </div>
    
                                                <div class="w-browser-stats">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
    
                                            </div>
    
                                        </div>
    
                                    </div>
    
                                </div>
                            </div>
                        </div>
    
                        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                            <div class="row widget-statistic">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <div class="widget widget-one_hybrid widget-followers">
                                        <div class="widget-heading">
                                            <div class="w-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                            </div>
                                            <p class="w-value">31.6K</p>
                                            <h5 class="">Followers</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <div class="widget widget-one_hybrid widget-referral">
                                        <div class="widget-heading">
                                            <div class="w-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                            </div>
                                            <p class="w-value">{{ $downloads }}</p>
                                            <h5 class="">CV Downloads</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <div class="widget widget-one_hybrid widget-engagement">
                                        <div class="widget-heading">
                                            <div class="w-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                            </div>
                                            <p class="w-value">{{ $contacts->count() }}</p>
                                            <h5 class="">Contact Forms</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                            <div class="widget widget-card-one">
                                <div class="widget-content">
    
                                    <div class="media">
                                        <div class="w-img">
                                            <img src="admin\assets\img\profile-32.jpeg" alt="avatar">
                                        </div>
                                        <div class="media-body">
                                            <h6>Jimmy Turner</h6>
                                            <p class="meta-date-time">Monday, Nov 18</p>
                                        </div>
                                    </div>
    
                                    <p>"Duis aute irure dolor" in reprehenderit in voluptate velit esse cillum "dolore eu fugiat" nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
    
                                    <div class="w-action">
                                        <div class="card-like">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                            <span>551 Likes</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
    
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                            <div class="widget widget-five">
                                <div class="widget-content">
    
                                    <div class="header">
                                        <div class="header-body">
                                            <h6>Blogs</h6>
                                        </div>
                                        <div class="task-action">
                                            <div class="dropdown  custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </a>
    
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask">
                                                    <a class="dropdown-item" href="javascript:void(0);">Add</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">View</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="w-content">
                                        <div class="">
                                            <p class="task-left">15</p>
                                            <p class="task-completed"><span>12 Published</span></p>
                                            <p class="task-hight-priority"><span>3 To</span> be published</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
    
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                            <div class="widget widget-card-two">
                                <div class="widget-content">
    
                                    <div class="media">
                                        <div class="w-img">
                                            <img src="admin\assets\img\g-8.png" alt="avatar">
                                        </div>
                                        <div class="media-body">
                                            <h6>Dev Summit - New York</h6>
                                            <p class="meta-date-time">Bronx, NY</p>
                                        </div>
                                    </div>
    
                                    <div class="card-bottom-section">
                                        <h5>4 Members Going</h5>
                                        <div class="img-group">
                                            <img src="admin\assets\img\profile-19.jpeg" alt="avatar">
                                            <img src="admin\assets\img\profile-6.jpeg" alt="avatar">
                                            <img src="admin\assets\img\profile-8.jpeg" alt="avatar">
                                            <img src="admin\assets\img\profile-3.jpeg" alt="avatar">
                                        </div>
                                        <a href="javascript:void(0);" class="btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
    
                </div>

            <!--  END CONTENT PART  -->
@endsection
