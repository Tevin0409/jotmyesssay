@extends('admin_portal.layout.app')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
               Inbox 
            </h1>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-email fa-fw"></i> Messages</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Order #</th>
                            <th>From</th>
                            <th>Message</th>
                            <th>Time</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>3326</td>
                            <td>JOhn Smith</td>
                            <td>Hello we'll be in touch....</td>
                            <td>3:29 PM</td>
                            <td>read</td>
                            <td><button class="btn btn-primary">View</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                        <tr>
                            <td>3326</td>
                            <td>John Smith</td>
                            <td>Your Request is being processed</td>
                            <td>3:29 PM</td>
                            <td>read</td>
                            <td><button class="btn btn-primary">View</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                        <tr>
                            <td>3326</td>
                            <td>John Smith</td>
                            <td>3:29 PM</td>
                            <td>read</td>
                            <td><button class="btn btn-primary">View</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                        <tr>
                            <td>3326</td>
                            <td>John Smith</td>
                            <td>3:29 PM</td>
                            <td>read</td>
                            <td><button class="btn btn-primary">View</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                        <tr>
                            <td>3326</td>
                            <td>John Smith</td>
                            <td>3:29 PM</td>
                            <td>read</td>
                            <td><button class="btn btn-primary">View</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
    
@endsection