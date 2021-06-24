@extends('admin.layout.index')
@section('content')
<!-- *************
				************ Main container start *************
			************* -->
<div class="main-container">


    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Custom Tables</li>
        </ol>

        <ul class="app-actions">
            <li>
                <a href="#" id="reportrange">
                    <span class="range-text"></span>
                    <i class="icon-chevron-down"></i>
                </a>
            </li>
            <li>
                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print">
                    <i class="icon-print"></i>
                </a>
            </li>
            <li>
                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download CSV">
                    <i class="icon-cloud_download"></i>
                </a>
            </li>
        </ul>
    </div>
    <!-- Page header end -->


    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="table-container">
                    <div class="table-responsive">
                        <table class="table custom-table m-0">
                            <thead>
                                <tr>
                                    <th>Customer ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Items Bought</th>
                                    <th>Money Spent</th>
                                    <th>Last Login</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#00001</td>
                                    <td>Alia</td>
                                    <td>Willams</td>
                                    <td>+143-148-60985</td>
                                    <td>aliawilllams@wafi.com</td>
                                    <td>250</td>
                                    <td>$4500</td>
                                    <td>10/10/2019 4:30pm</td>
                                </tr>
                                <tr>
                                    <td>#00002</td>
                                    <td>Nathan</td>
                                    <td>James</td>
                                    <td>+278-119-88790</td>
                                    <td>nathanjames@wafi.com</td>
                                    <td>390</td>
                                    <td>$3500</td>
                                    <td>12/10/2019 2:37am</td>
                                </tr>
                                <tr>
                                    <td>#00003</td>
                                    <td>Kelly</td>
                                    <td>Thomas</td>
                                    <td>+125-117-88763</td>
                                    <td>thomas-gm@wafi.com</td>
                                    <td>135</td>
                                    <td>$2400</td>
                                    <td>14/10/2019 7:50pm</td>
                                </tr>
                                <tr>
                                    <td>#00004</td>
                                    <td>Steve</td>
                                    <td>Smitth</td>
                                    <td>+334-676-66530</td>
                                    <td>smith-st@wafi.com</td>
                                    <td>765</td>
                                    <td>$7890</td>
                                    <td>18/10/2019 9:30pm</td>
                                </tr>
                                <tr>
                                    <td>#00005</td>
                                    <td>Kevin</td>
                                    <td>Oliver</td>
                                    <td>+435-667-99808</td>
                                    <td>kevin-oliver@wafi.com</td>
                                    <td>763</td>
                                    <td>$5690</td>
                                    <td>21/10/2019 3:20pm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="table-container">
                    <div class="table-responsive">
                        <table class="table custom-table m-0">
                            <thead>
                                <tr>
                                    <th>Country</th>
                                    <th>Languages</th>
                                    <th>Population</th>
                                    <th>Median Age</th>
                                    <th>Area (Km²)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="flags/1x1/hk.svg" class="flag-img" alt="Hong Kong" />Hong Kong</td>
                                    <td>Chinese (official), English</td>
                                    <td>7,39,000</td>
                                    <td>31.3</td>
                                    <td>1106</td>
                                </tr>
                                <tr>
                                    <td><img src="flags/1x1/au.svg" class="flag-img" alt="Australia" />Australia</td>
                                    <td>English 79%, native and other languages</td>
                                    <td>23,630,169</td>
                                    <td>37.3</td>
                                    <td>7,739,983</td>
                                </tr>
                                <tr>
                                    <td><img src="flags/1x1/tz.svg" class="flag-img" alt="Tanzania" />Tanzania</td>
                                    <td>Swahili (national), English, Arabic, Chaga, Makonde</td>
                                    <td>57,353,670</td>
                                    <td>39.1</td>
                                    <td>945,086</td>
                                </tr>
                                <tr>
                                    <td><img src="flags/1x1/ru.svg" class="flag-img" alt="Russia" />Russia</td>
                                    <td>Russian, others</td>
                                    <td>142,467,651</td>
                                    <td>38.4</td>
                                    <td>17,076,310</td>
                                </tr>
                                <tr>
                                    <td><img src="flags/1x1/de.svg" class="flag-img" alt="Germany" />Germany</td>
                                    <td>German, Danish, Low Rhenish, Romani</td>
                                    <td>82,081,261</td>
                                    <td>41.1</td>
                                    <td>357,386</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5" class="text-center">Data retrieved from <a href=""
                                            class="link">wafi</a> and <a href="" class="link">unify</a>.</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>


                <div class="table-container">
                    <div class="table-responsive">
                        <table class="table custom-table m-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Comment</th>
                                    <th>Module</th>
                                    <th>Reporter</th>
                                    <th>Status</th>
                                    <th>Owner</th>
                                    <th>Severity</th>
                                    <th class="text-right">Created</th>
                                    <th class="text-right">Updated</th>
                                    <th class="text-right">Due</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>App crashes</td>
                                    <td>Kelly, can you please take a look.</td>
                                    <td>Main App</td>
                                    <td>Lewis</td>
                                    <td><span class="badge badge-danger">Open</span></td>
                                    <td>Micheal</td>
                                    <td class="text-danger">High</td>
                                    <td class="text-right">Aug-10, 2019</td>
                                    <td class="text-right">Sep-14, 2019</td>
                                    <td class="text-right">Oct-20, 2019</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Saving file</td>
                                    <td>Let me take this up.</td>
                                    <td>Form Screen</td>
                                    <td>James</td>
                                    <td><span class="badge badge-success">In Progress</span></td>
                                    <td>Donald</td>
                                    <td class="text-success">Low</td>
                                    <td class="text-right">Aug-10, 2019</td>
                                    <td class="text-right">Sep-14, 2019</td>
                                    <td class="text-right">Oct-20, 2019</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Login fail</td>
                                    <td>Hey, critical issue.</td>
                                    <td>Main App</td>
                                    <td>Powell</td>
                                    <td><span class="badge badge-danger">Open</span></td>
                                    <td>Glory</td>
                                    <td class="text-danger">High</td>
                                    <td class="text-right">Aug-10, 2019</td>
                                    <td class="text-right">Sep-14, 2019</td>
                                    <td class="text-right">Oct-20, 2019</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Saving file</td>
                                    <td>Let me take this up.</td>
                                    <td>Form Screen</td>
                                    <td>James</td>
                                    <td><span class="badge badge-success">In Progress</span></td>
                                    <td>Donald</td>
                                    <td class="text-success">Low</td>
                                    <td class="text-right">Aug-10, 2019</td>
                                    <td class="text-right">Sep-14, 2019</td>
                                    <td class="text-right">Oct-20, 2019</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Login fail</td>
                                    <td>Hey, critical issue.</td>
                                    <td>Main App</td>
                                    <td>Powell</td>
                                    <td><span class="badge badge-success">In Progress</span></td>
                                    <td>Glory</td>
                                    <td class="text-danger">High</td>
                                    <td class="text-right">Aug-10, 2019</td>
                                    <td class="text-right">Sep-14, 2019</td>
                                    <td class="text-right">Oct-20, 2019</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="table-container">
                    <div class="table-responsive">
                        <table class="table custom-table m-0">
                            <thead>
                                <tr>
                                    <th>Country</th>
                                    <th>Sessions</th>
                                    <th>Users</th>
                                    <th>Price</th>
                                    <th>Sessions</th>
                                    <th>Value</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>74%<br><small>of Total:<br>80.00% (10)</small></td>
                                    <td>57%<br><small>Avg for View:<br>90.00% (-16.67%)</small></td>
                                    <td>32%<br><small>Avg for View:<br>50.00% (70.00%)</small></td>
                                    <td>35.32<br><small>Avg for View:<br>2.70 (75.93%)</small></td>
                                    <td>79<br><small>Avg for View:<br>0.00% (0.00%)</small></td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>1. USA</td>
                                    <td>327</td>
                                    <td>229</td>
                                    <td>$139.85</td>
                                    <td>21.55%</td>
                                    <td>USD 980</td>
                                    <td>
                                        <div class="td-actions">
                                            <a href="#" class="icon red" data-toggle="tooltip" data-placement="top"
                                                title="Add Row">
                                                <i class="icon-circle-with-plus"></i>
                                            </a>
                                            <a href="#" class="icon green" data-toggle="tooltip" data-placement="top"
                                                title="Save Row">
                                                <i class="icon-save"></i>
                                            </a>
                                            <a href="#" class="icon blue" data-toggle="tooltip" data-placement="top"
                                                title="Delete Row">
                                                <i class="icon-cancel"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2. India</td>
                                    <td>578</td>
                                    <td>375</td>
                                    <td>$89,319</td>
                                    <td>46.90%</td>
                                    <td>USD 887</td>
                                    <td>
                                        <div class="td-actions">
                                            <a href="#" class="icon red" data-toggle="tooltip" data-placement="top"
                                                title="Add Row">
                                                <i class="icon-circle-with-plus"></i>
                                            </a>
                                            <a href="#" class="icon green" data-toggle="tooltip" data-placement="top"
                                                title="Save Row">
                                                <i class="icon-save"></i>
                                            </a>
                                            <a href="#" class="icon blue" data-toggle="tooltip" data-placement="top"
                                                title="Delete Row">
                                                <i class="icon-cancel"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3. Australia</td>
                                    <td>126</td>
                                    <td>845</td>
                                    <td>$68.00</td>
                                    <td>16.25%</td>
                                    <td>USD 685</td>
                                    <td>
                                        <div class="td-actions">
                                            <a href="#" class="icon red" data-toggle="tooltip" data-placement="top"
                                                title="Add Row">
                                                <i class="icon-circle-with-plus"></i>
                                            </a>
                                            <a href="#" class="icon green" data-toggle="tooltip" data-placement="top"
                                                title="Save Row">
                                                <i class="icon-save"></i>
                                            </a>
                                            <a href="#" class="icon blue" data-toggle="tooltip" data-placement="top"
                                                title="Delete Row">
                                                <i class="icon-cancel"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!-- Row end -->

    </div>
    <!-- Content wrapper end -->


</div>
<!-- *************
				************ Main container end *************
			************* -->
@endsection