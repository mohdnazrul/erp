@extends('documentation.layout.app')
@push('style')

@endpush
@section('page-content')
    <div class="row g-3">
        <div class="col-xl-6 col-lg-12 col-md-12">
            <div class="card rounded-4 mb-3">
                <div class="card-header p-lg-4 p-3 d-flex justify-content-between align-items-center">
                    <h6 class="card-title m-0">Reports overview</h6>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></a>
                        <ul class="dropdown-menu li_animate shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body p-lg-4 p-3">
                    <p class="h1">$7,431.14 USD</p>
                    <!-- Progress -->
                    <div class="progress rounded-pill mb-2" style="height: 4px;">
                        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-info" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex justify-content-between mb-4">
                        <span>0%</span>
                        <span>100%</span>
                    </div>
                    <!-- End Progress -->
                    <div class="table-responsive">
                        <table class="table table-sm mb-0">
                            <tbody>
                                <tr>
                                    <td>Gross value</td>
                                    <td>$3,500.71</td>
                                    <td><span class="text-success">+12.1%</span></td>
                                </tr>
                                <tr>
                                    <td>Net volume from sales</td>
                                    <td>$2,980.45</td>
                                    <td><span class="text-warning">+6.9%</span></td>
                                </tr>
                                <tr>
                                    <td>New volume from sales</td>
                                    <td>$950.00</td>
                                    <td><span class="text-danger">-1.5%</span></td>
                                </tr>
                                <tr>
                                    <td>Other</td>
                                    <td>32</td>
                                    <td><span class="text-success">1.9%</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card rounded-4 mb-3">
                <div class="card-header p-lg-4 p-3 d-flex justify-content-between align-items-center">
                    <h6 class="card-title mb-0">Transactions</h6>
                    <a href="#" title="">View All</a>
                </div>
                <div class="card-body p-lg-4 p-3">
                    <ul class="list-unstyled list mb-0 li_animate">
                        <li class="d-flex gap-3 align-items-center py-2">
                            <div class="avatar rounded no-thumbnail"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" /><path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" /></svg></div>
                            <div class="vr"></div>
                            <div class="flex-fill">
                                <h6 class="mb-0">Wallet</h6>
                                <small class="text-muted">Starbucks</small>
                            </div>
                            <div class="flex-end">
                                <strong class="text-danger">-$74 </strong>
                            </div>
                        </li>
                        <li class="d-flex gap-3 align-items-center py-2">
                            <div class="avatar rounded no-thumbnail"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21l18 0" /><path d="M3 10l18 0" /><path d="M5 6l7 -3l7 3" /><path d="M4 10l0 11" /><path d="M20 10l0 11" /><path d="M8 14l0 3" /><path d="M12 14l0 3" /><path d="M16 14l0 3" /></svg></div>
                            <div class="vr"></div>
                            <div class="flex-fill">
                                <h6 class="mb-0">Bank Transfer</h6>
                                <small class="text-muted">Add Money</small>
                            </div>
                            <div class="flex-end">
                                <strong class="text-success">$1074 </strong>
                            </div>
                        </li>
                        <li class="d-flex gap-3 align-items-center py-2">
                            <div class="avatar rounded no-thumbnail"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M14 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M12 9.765a3 3 0 1 0 0 4.47" /><path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /></svg></div>
                            <div class="vr"></div>
                            <div class="flex-fill">
                                <h6 class="mb-0">Mastercard</h6>
                                <small class="text-muted">Ordered Food</small>
                            </div>
                            <div class="flex-end">
                                <strong class="text-success">$94 </strong>
                            </div>
                        </li>
                        <li class="d-flex gap-3 align-items-center py-2">
                            <div class="avatar rounded no-thumbnail"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13l2.5 0c2.5 0 5 -2.5 5 -5c0 -3 -1.9 -5 -5 -5h-5.5c-.5 0 -1 .5 -1 1l-2 14c0 .5 .5 1 1 1h2.8l1.2 -5c.1 -.6 .4 -1 1 -1zm7.5 -5.8c1.7 1 2.5 2.8 2.5 4.8c0 2.5 -2.5 4.5 -5 4.5h-2.6l-.6 3.6a1 1 0 0 1 -1 .8l-2.7 0a.5 .5 0 0 1 -.5 -.6l.2 -1.4" /></svg></div>
                            <div class="vr"></div>
                            <div class="flex-fill">
                                <h6 class="mb-0">Paypal</h6>
                                <small class="text-muted">Add Money</small>
                            </div>
                            <div class="flex-end">
                                <strong class="text-success">$740.50 </strong>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card rounded-4 mb-3">
                <div class="card-header p-lg-4 p-3 d-flex justify-content-between align-items-center">
                    <h6 class="card-title mb-0">Downloads</h6>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></a>
                        <ul class="dropdown-menu shadow border-0 p-2 li_animate">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body p-lg-4 p-3">
                    <ul class="list-unstyled li_animate">
                        <li class="d-flex gap-3 py-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" /><path d="M16 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" /><path d="M12 15v6" /><path d="M5 15h3l-3 6h3" /></svg>
                            <div class="flex-fill">
                                <span>LUNO_admin.zip</span>
                                <div class="progress mt-2" style="height: 8px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 44%;" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex gap-3 py-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" /><path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" /><path d="M17 18h2" /><path d="M20 15h-3v6" /><path d="M11 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" /></svg>
                            <div class="flex-fill">
                                <span>reposrt_2025.pdf</span>
                                <div class="progress mt-2" style="height: 8px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex gap-3 py-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" /><path d="M5 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" /><path d="M20 16.5a1.5 1.5 0 0 0 -3 0v3a1.5 1.5 0 0 0 3 0" /><path d="M12.5 15a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1 -3 0v-3a1.5 1.5 0 0 1 1.5 -1.5z" /></svg>
                            <div class="flex-fill">
                                <span>Documentation.docs</span>
                                <div class="progress mt-2" style="height: 8px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex gap-3 py-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" /><path d="M20 15h-1a2 2 0 0 0 -2 2v2a2 2 0 0 0 2 2h1v-3" /><path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" /><path d="M11 21v-6l3 6v-6" /></svg>
                            <div class="flex-fill">
                                <span>profile_image.png</span>
                                <div class="progress mt-2" style="height: 8px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex gap-3 py-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" /><path d="M8 16.5a1.5 1.5 0 0 0 -3 0v3a1.5 1.5 0 0 0 3 0" /><path d="M11 20.25c0 .414 .336 .75 .75 .75h1.25a1 1 0 0 0 1 -1v-1a1 1 0 0 0 -1 -1h-1a1 1 0 0 1 -1 -1v-1a1 1 0 0 1 1 -1h1.25a.75 .75 0 0 1 .75 .75" /><path d="M17 20.25c0 .414 .336 .75 .75 .75h1.25a1 1 0 0 0 1 -1v-1a1 1 0 0 0 -1 -1h-1a1 1 0 0 1 -1 -1v-1a1 1 0 0 1 1 -1h1.25a.75 .75 0 0 1 .75 .75" /></svg>
                            <div class="flex-fill">
                                <span>bootstrap.min.css</span>
                                <div class="progress mt-2" style="height: 8px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <span class="text-muted">showing 5 out of 24 downloads.</span>
                </div>
            </div>
            <div class="card rounded-4 mb-3">
                <div class="card-header p-lg-4 p-3 d-flex justify-content-between align-items-center">
                    <h6 class="card-title mb-0">My Goals</h6>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>Add</a>
                </div>
                <div class="card-body p-lg-4 p-3">
                    <ul class="list-unstyled li_animate mb-0">
                        <li class="d-flex align-items-center gap-3 py-2 mb-2">
                            <svg class="text-warning" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a9 9 0 0 1 8.495 11.973l-8.495 -2.973z" fill="currentColor" stroke="none" /><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /></svg>
                            <div class="flex-fill">
                                <h6 class="mb-0">Increase monthly revenue</h6>
                                <span>$5,000</span>
                            </div>
                            <div class="vr"></div>
                            <span>Mar 15</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 py-2 mb-2">
                            <svg class="text-success" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a9 9 0 1 1 -5.162 16.373l5.162 -7.373z" fill="currentColor" stroke="none" /><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /></svg>
                            <div class="flex-fill">
                                <h6 class="mb-0">Improve customer satisfaction</h6>
                                <span>84%</span>
                            </div>
                            <div class="vr"></div>
                            <span>Jun 19</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 py-2 mb-2">
                            <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21a9 9 0 0 0 0 -18m0 0v18" fill="currentColor" stroke="none" /><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /></svg>
                            <div class="flex-fill">
                                <h6 class="mb-0">SIP Investment</h6>
                                <span>50%</span>
                            </div>
                            <div class="vr"></div>
                            <span>Nov 13</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 py-2 mb-2">
                            <svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a9 9 0 0 1 5.162 16.372l-5.162 -7.372z" fill="currentColor" stroke="none" /><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /></svg>
                            <div class="flex-fill">
                                <h6 class="mb-0">Grow user base</h6>
                                <span>75%</span>
                            </div>
                            <div class="vr"></div>
                            <span>Dec 22</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card rounded-4 mb-3">
                <div class="card-body p-lg-4 p-3">
                    <div class="d-flex gap-3 align-items-center text-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M8 21l8 0" /><path d="M12 17l0 4" /><path d="M7 4l10 0" /><path d="M17 4v8a5 5 0 0 1 -10 0v-8" /><path d="M5 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M19 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /></svg>
                        <div class="flex-fill text-truncate">
                            <h5 class="mb-0">Awwwards</h5>
                        </div>
                    </div>
                    <h5 class="my-4">Best of trendy design in <a href="#">2025</a> on Awwwards</h5>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consec adipiscing elit In vulputate vitae massa eu dapibus ligula.</p>
                    <a href="#" title="">Go to Awards</a>
                </div>
            </div>
            <div class="card rounded-4 mb-3">
                <div class="card-body p-lg-4">
                    <div class="row align-items-center">
                        <div class="col text-truncate">
                            <div class="d-flex gap-2 align-items-center">
                                <img src="assets/images/user-1.png" alt="Avatar" class="rounded-circle avatar lg">
                                <div>
                                    <a href="#" title="">Nellie Maxwell</a>
                                    <p class="mb-0 fs-12">Nellie.Maxwell@example.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="dropdown-toggle more-icon" data-bs-toggle="dropdown" aria-expanded="false"></a>
                            <ul class="dropdown-menu shadow border-0 p-3 li_animate rounded-4">
                                <li><a class="dropdown-item " href="#">File Info</a></li>
                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                <li><a class="dropdown-item" href="#">Block</a></li>
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group my-3">
                        <textarea rows="3" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                    </div>
                    <div>
                        <button class="btn btn-primary">Post</button>
                        <button class="btn btn-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M15 7l-6.5 6.5a1.5 1.5 0 0 0 3 3l6.5 -6.5a3 3 0 0 0 -6 -6l-6.5 6.5a4.5 4.5 0 0 0 9 9l6.5 -6.5" /></svg>
                        </button>
                        <button class="btn btn-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" /><path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card rounded-4 mb-3">
                <div class="card-body p-lg-4">
                    <a href="{{ route('project-details') }}" class="text-truncate">
                        <h5 class="mb-1 text-truncate">School / University</h5>
                        <small class="text-muted">CRM App application to University Admin..</small>
                    </a>
                    <div class="mt-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="progress flex-grow-1" style="height: 3px;">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                            </div>
                            <span class="progress-info">95%</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center gap-3 mt-3">
                            <div class="avatar-group d-flex align-items-center ps-0">
                                <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                    <img class="avatar sm border rounded-circle" src="assets/images/user-3.png" alt="">
                                </div>
                                <div class="avatar-item sm" data-bs-toggle="tooltip" data-placement="top" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                                    <img class="avatar sm border rounded-circle" src="assets/images/user-4.png" alt="">
                                </div>
                            </div>
                            <div class="d-flex align-items-center rounded-2 border-bg border p-1 gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8"></path>
                                    <path d="M14 19l2 2l4 -4"></path>
                                    <path d="M9 8h4"></path><path d="M9 12h2"></path>
                                </svg>
                                <small>25 / 29</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer py-3 fs-14">
                    <span>Due date: <strong>21 Aug, 2026</strong></span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card rounded-4 mb-3">
                <div class="card-body d-flex align-items-start p-lg-4 p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M17.5 17.5m-2.5 0a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0" /><path d="M6 8v11a1 1 0 0 0 1.806 .591l3.694 -5.091v.055" /><path d="M6 8h15l-3.5 7l-7.1 -.747a4 4 0 0 1 -3.296 -2.493l-2.853 -7.13a1 1 0 0 0 -.928 -.63h-1.323" /></svg>
                    <div class="flex-fill ms-3">
                        <div class="fw-bold"><span class="h4 mb-0">401</span><span class="text-success ms-1">2.55%</span></div>
                        <div class="text-muted small">Total Orders</div>
                        <div class="mt-3">
                            <span class="small d-flex justify-content-between">This Week<span class="fw-bold">248</span></span>
                            <div class="progress mt-1" style="height: 3px;">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%;"></div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="small d-flex justify-content-between">Last Week<span class="fw-bold">148</span></span>
                            <div class="progress mt-1" style="height: 3px;">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100" style="width: 44%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card rounded-4 mb-3 overflow-hidden">
                <div class="card-body p-lg-4 p-3">
                    <div class="mb-2 text-uppercase">NEW EMPLOYEE</div>
                    <div><span class="h4">51</span> <span class="small text-muted">13%</span></div>
                    <small class="text-muted">Analytics for last week</small>
                </div>
                <div class="progress" style="height: 2px;">
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="card rounded-4 mb-3">
                <div class="card-body p-lg-4 p-3">
                    <div class="text-muted text-uppercase">Applications</div>
                    <div class="mt-1">
                        <span class="fw-bold h4 mb-0">10.5K</span>
                        <span class="text-success ms-1">2.55%</span>
                    </div>
                </div>
            </div>
            <div class="card rounded-4 mb-3 overflow-hidden">
                <div class="progress" style="height: 1px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="card-body p-lg-4 p-3">
                    <svg class="end-0 me-3 mt-3 position-absolute top-0" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19h-6a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5" /><path d="M3 10h18" /><path d="M16 19h6" /><path d="M19 16l3 3l-3 3" /><path d="M7.005 15h.005" /><path d="M11 15h2" /></svg>
                    <div class="mb-2 text-uppercase">Expense</div>
                    <div><span class="h4">$3,251</span> <span class="small text-muted">13%</span></div>
                    <small class="text-muted">Analytics for last week</small>
                </div>
            </div>
            <div class="card rounded-4 mb-3 text-center">
                <div class="card-body p-lg-4 p-3">
                    <h5>Subscribe to our newsletter!</h5>
                    <p class="text-muted fs-14 lh-base">Receive 30% off, and get all the promotions and updates drectly on your e-mail.</p>
                    <div class="d-flex mt-4">
                        <input type="text" class="form-control" placeholder="E-mail" id="subscribeEmail">
                        <button class="btn btn-danger ms-2" type="button">Send</button>
                    </div>
                </div>
            </div>
            <div class="card rounded-4 mb-3 overflow-hidden">
                <div class="p-4 bg-danger d-flex justify-content-between text-light align-items-center">
                    <div><span class="fs-1">10°</span></div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7" /><path d="M11 13v2m0 3v2m4 -5v2m0 3v2" /></svg>
                </div>
                <div class="card-body p-lg-4 p-3">
                    <h6 class="mb-1">Melbourne, FL 32904</h6>
                    <span class="text-muted fs-12">Saturday 16 January</span>
                </div>
            </div>
            <div class="card rounded-4 mb-3">
                <div class="card-body d-flex gap-3 align-items-center p-xl-4 p-3">
                    <div class="avatar lg rounded-circle no-thumbnail">
                        <svg class="text-danger" fill="currentColor" viewBox="0 0 512.039 512.039">
                            <path d="m255.874 67.497c-111.609-97.618-253.518-11.848-255.845 104.427-.593 29.633 7.961 58.498 24.988 85.109h110.364l19.63-32.718c5.7-9.499 19.494-9.805 25.517-.335l41.417 65.083 60.373-127.451c5.265-11.121 20.956-11.474 26.763-.69l51.752 96.111h125.898c93.262-145.76-91.055-311.811-230.857-189.536z"></path>
                            <path d="m338.667 279.144-41.936-77.881-59.301 125.19c-5.045 10.651-19.884 11.576-26.211 1.632l-42.97-67.523-11.513 19.188c-2.711 4.518-7.593 7.282-12.862 7.282h-95.128c2.982 3.121-12.911-12.74 196.548 195.634 5.85 5.821 15.307 5.822 21.158 0 206.236-205.168 193.572-192.519 196.548-195.634h-111.126c-5.519.001-10.591-3.029-13.207-7.888z"></path>
                        </svg>
                    </div>
                    <div class="flex-fill  text-truncate">
                        <div class="lead">Heart rate</div>
                        <div><span class="h6 fw-bold">104</span> <small class="text-muted">bpm</small></div>
                    </div>
                </div>
            </div>
            <div class="card rounded-4 mb-3 overflow-hidden">
                <div class="card-header bg-primary text-light border-bottom-0 p-xl-4 p-3">
                    <span class="text-truncate">Users</span>
                </div>
                <div class="card-body p-xl-4 p-3">
                    <div class="h3 chart-text-color1">$15.48</div>
                    <span class="text-muted">No data</span>
                </div>
            </div>
            <div class="card rounded-4 mb-3">
                <div class="card-body p-xl-4 p-3">
                    <div class="text-uppercase">File Usage</div>
                    <div class="mt-3">
                        <span class="small d-flex justify-content-between">130,347 / 250,000<span>52.14%</span></span>
                        <div class="progress mt-1" style="height: 2px;">
                            <div class="progress-bar chart-color1" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100" style="width: 52%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card rounded-4 mb-3">
                <div class="card-body p-xl-4 p-3 d-flex align-items-center">
                    <div class="avatar rounded-circle no-thumbnail bg-success text-light p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M17.1 8.648a.568 .568 0 0 1 -.761 .011a5.682 5.682 0 0 0 -3.659 -1.34c-1.102 0 -2.205 .363 -2.205 1.374c0 1.023 1.182 1.364 2.546 1.875c2.386 .796 4.363 1.796 4.363 4.137c0 2.545 -1.977 4.295 -5.204 4.488l-.295 1.364a.557 .557 0 0 1 -.546 .443h-2.034l-.102 -.011a.568 .568 0 0 1 -.432 -.67l.318 -1.444a7.432 7.432 0 0 1 -3.273 -1.784v-.011a.545 .545 0 0 1 0 -.773l1.137 -1.102c.214 -.2 .547 -.2 .761 0a5.495 5.495 0 0 0 3.852 1.5c1.478 0 2.466 -.625 2.466 -1.614c0 -.989 -1 -1.25 -2.886 -1.954c-2 -.716 -3.898 -1.728 -3.898 -4.091c0 -2.75 2.284 -4.091 4.989 -4.216l.284 -1.398a.545 .545 0 0 1 .545 -.432h2.023l.114 .012a.544 .544 0 0 1 .42 .647l-.307 1.557a8.528 8.528 0 0 1 2.818 1.58l.023 .022c.216 .228 .216 .569 0 .773l-1.057 1.057z" /></svg>
                    </div>
                    <div class="flex-fill ms-3 text-truncate">
                        <h5 class="mb-1">$18,925</h5>
                        <div class="fs-14">Revenue</div>
                    </div>
                </div>
            </div>
            <div class="card rounded-4 mb-3">
                <div class="card-body p-xl-4 p-3 d-flex align-items-center">
                    <div class="avatar rounded-circle no-thumbnail bg-danger text-light p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M3 5m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" /><path d="M3 10l18 0" /><path d="M7 15l.01 0" /><path d="M11 15l2 0" /></svg>
                    </div>
                    <div class="flex-fill ms-3 text-truncate">
                        <h5 class="mb-1">$11,024</h5>
                        <div class="fs-14">Expense</div>
                    </div>
                </div>
            </div>
            <div class="card rounded-4 mb-3">
                <div class="card-body p-xl-4 p-3 text-center">
                    <img src="assets/images/user-1.png" alt="Avatar" class="rounded-circle avatar xxl shadow img-thumbnail">
                    <hr>
                    <h5 class="mb-1">Kevin Gill</h5>
                    <span>Web Designer</span>
                </div>
            </div>
            <div class="card rounded-4 mb-3 overflow-hidden">
                <div class="card-header bg-primary p-3 p-xl-4 text-light border-bottom-0">
                    <span class="text-truncate">Premium Account</span>
                </div>
                <div class="card-body card-body p-3 p-xl-4 d-flex gap-2">
                    <img src="assets/images/user-2.png" alt="Avatar" class="rounded avatar lg">
                    <div>
                        <h5 class="mb-1">Dean Otto</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4m0 1a1 1 0 0 1 1 -1h14a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-14a1 1 0 0 1 -1 -1z" /><path d="M12 7v5l3 3" /><path d="M4 12h1" /><path d="M19 12h1" /><path d="M12 19v1" /></svg>2 Months left</p>
                        <a class="fs-14" href="#" title="">Upgrade now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card rounded-4 mb-3">
                <div class="card-body p-3 p-xl-4">
                    <div class="d-flex gap-2 align-items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M20.945 11a9 9 0 1 1 -3.284 -5.997l-2.655 2.392a5.5 5.5 0 1 0 2.119 6.605h-4.125v-3h7.945z" /></svg>
                        <div>
                            <h5 class="mb-0">Google Calendar</h5>
                            <span class="fs-12">alliegrater@thunderal.com</span>
                        </div>
                    </div>
                    <p class="text-muted">See your teams availability while scheduling meeting and interviews. <a href="#" class="link-primary">Learn more...</a></p>
                    <div class="btn-group d-flex mt-3">
                        <input type="radio" class="btn-check" name="gc-btnradio" id="gc-btnradio1" checked="">
                        <label class="btn btn-outline-primary" for="gc-btnradio1">Enabled</label>
                        <input type="radio" class="btn-check" name="gc-btnradio" id="gc-btnradio2">
                        <label class="btn btn-outline-primary" for="gc-btnradio2">Disabled</label>
                    </div>
                </div>
            </div>
            <div class="card rounded-4 mb-3">
                <div class="card-body p-xl-4 p-3">
                    <div class="row align-items-center">
                        <div class="col text-truncate fs-6 fw-bold">Labels</div>
                        <div class="col-auto">
                            <a href="#" class="dropdown-toggle more-icon" data-bs-toggle="dropdown" aria-expanded="false"></a>
                            <ul class="dropdown-menu shadow border-0 p-2">
                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                <li><a class="dropdown-item" href="#">Block</a></li>
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <ul class="list-unstyled mt-4 mb-0">
                        <li class="d-flex justify-content-between align-items-center py-1 mt-2">
                            <a href="#" class="color-600">AngularJs</a>
                            <span class="badge bg-primary rounded">14</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center py-1 mt-2">
                            <a href="#" class="color-600">ReactJs</a>
                            <span class="badge bg-primary rounded">2</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center py-1 mt-2">
                            <a href="#" class="color-600">UI/UX Designer</a>
                            <span class="badge bg-primary rounded">1</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card rounded-4 mb-3 border-primary overflow-hidden">
                <div class="card-header bg-primary text-light d-flex align-items-center gap-2 border-bottom-0 p-xl-4 p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" /><path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" /></svg>
                    <h6 class="card-title mb-0">My Wallet</h6>
                </div>
                <div class="card-body p-xl-4 p-3">
                    <div>Available BTC</div>
                    <h3>0.0386245 BTC</h3>
                    <div class="mt-3 pt-3 text-uppercase text-muted border-top pt-2 small">Buy this month </div>
                    <h5>3.0675432 BTC</h5>
                    <div class="mt-3 text-uppercase text-muted small">Sell this month</div>
                    <h5>2.0345618 BTC</h5>
                    <div class="btn-group d-flex mt-4">
                        <input type="radio" class="btn-check" name="gm-btnradio" id="gm-btnradio1" checked="">
                        <label class="btn btn-outline-secondary" for="gm-btnradio1">Buy</label>
                        <input type="radio" class="btn-check" name="gm-btnradio" id="gm-btnradio2">
                        <label class="btn btn-outline-secondary" for="gm-btnradio2">Sell</label>
                    </div>
                </div>
            </div>
            <div class="card rounded-4 mb-3">
                <div class="card-body p-xl-4 p-3">
                    <span>Overall Rating</span>
                    <h3 class="fs-1 fw-bold mt-2">4.5</h3>
                    <div class="fs-6">⭐⭐⭐⭐⭐</div>
                    <p class="text-muted">Bases on 387 Reviews</p>
                    <span>Excellent:</span>
                    <div class="progress mt-1 mb-3" style="height: 1px;">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                    </div>
                    <span>Good:</span>
                    <div class="progress mt-1 mb-3" style="height: 1px;">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                    </div>
                    <span>Average:</span>
                    <div class="progress mt-1 mb-3" style="height: 1px;">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                    </div>
                    <span>Bellow Average:</span>
                    <div class="progress mt-1 mb-3" style="height: 1px;">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                    </div>
                    <span>Poor:</span>
                    <div class="progress mt-1" style="height: 1px;">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%;"></div>
                    </div>
                </div>
            </div>
            <div class="card rounded-4 mb-3">
                <div class="card-body p-xl-4 p-3 text-center">
                    <div class="d-flex justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M5.428 17.245l6.076 3.471a1 1 0 0 0 .992 0l6.076 -3.471a1 1 0 0 0 .495 -.734l1.323 -9.704a1 1 0 0 0 -.658 -1.078l-7.4 -2.612a1 1 0 0 0 -.665 0l-7.399 2.613a1 1 0 0 0 -.658 1.078l1.323 9.704a1 1 0 0 0 .495 .734z" /><path d="M9 15l3 -8l3 8" /><path d="M10 13h4" /></svg>
                    </div>
                    <div class="mt-3 p-2">
                        <h5 class="mb-0">Angular Developer</h5>
                        <span class="text-muted text-uppercase small">(Paris, France)</span>
                        <h5 class="mt-3 mb-3 card-footer border-0 fw-bold rounded-pill">$7k - $14k</h5>
                        <a href="#" class="link-primary">View more</a>
                    </div>
                </div>
            </div>
            <div class="card rounded-4 mb-3">
                <div class="card-body p-xl-4 p-3">
                    <div class="row g-3 align-items-center mb-4">
                        <div class="col text-truncate fs-6 fw-bold">Designers</div>
                        <div class="col-auto">
                            <a href="#" class="dropdown-toggle more-icon" data-bs-toggle="dropdown" aria-expanded="false"></a>
                            <ul class="dropdown-menu shadow border-0 p-2">
                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                <li><a class="dropdown-item" href="#">Block</a></li>
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex gap-3 align-items-center mb-3">
                        <img class="avatar lg rounded-circle shadow img-thumbnail" src="assets/images/user-1.png" alt="">
                        <div class="flex-fill">
                            <div class="h6 mb-0">Hossein Shams</div>
                            <small>Exp. 5 Year</small>
                        </div>
                    </div>
                    <div class="d-flex gap-3 align-items-center mb-3">
                        <img class="avatar lg rounded-circle shadow img-thumbnail" src="assets/images/user-2.png" alt="">
                        <div class="flex-fill">
                            <div class="h6 mb-0">Maryam Amiri</div>
                            <small>Exp. 2.5 Year</small>
                        </div>
                    </div>
                    <div class="d-flex gap-3 align-items-center">
                        <img class="avatar lg rounded-circle shadow img-thumbnail" src="assets/images/user-3.png" alt="">
                        <div class="flex-fill">
                            <div class="h6 mb-0">Cindy Anderson</div>
                            <small>Exp. 8.2 Year</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card rounded-4 mb-3">
                <div class="card-body d-flex gap-3 p-lg-4 p-3">
                    <div class="flex-shrink-0">
                        <img src="assets/images/user-1.png" data-bs-toggle="tooltip" alt="Avatar" class="rounded-circle avatar xl" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="text-truncate mb-0">UI-Design Group</h6>
                        <div class="text-truncate small text-muted"> North Carolina, CT</div>
                        <div class="avatar-group d-flex w-100 mt-2 ps-0">
                            <a href="#" class="avatar-item" data-bs-toggle="tooltip" data-placement="top" aria-label="avatar" data-bs-original-title="avatar"><img class="avatar sm rounded-circle" src="assets/images/user-1.png"></a>
                            <a href="#" class="avatar-item" data-bs-toggle="tooltip" data-placement="top" aria-label="avatar" data-bs-original-title="avatar"><img class="avatar sm rounded-circle" src="assets/images/user-2.png"></a>
                            <a href="#" class="avatar-item" data-bs-toggle="tooltip" data-placement="top" aria-label="avatar" data-bs-original-title="avatar"><img class="avatar sm rounded-circle" src="assets/images/user-3.png"></a>
                            <a href="#" class="avatar-item" data-bs-toggle="tooltip" data-placement="top" aria-label="avatar" data-bs-original-title="avatar"><img class="avatar sm rounded-circle" src="assets/images/user-4.png"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card rounded-4 mb-3">
                <div class="card-body d-flex gap-2 align-items-center p-lg-4 p-3">
                    <img src="assets/images/user-1.png" data-bs-toggle="tooltip" alt="Avatar" class="rounded-circle avatar xl" aria-label="Avatar Name" data-bs-original-title="Avatar Name">
                    <div class="flex-grow-1">
                        <h6 class="text-truncate mb-0">UI-Design Group</h6>
                        <div class="text-truncate small text-muted">alliegrater@thunderal.com</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

@endpush
