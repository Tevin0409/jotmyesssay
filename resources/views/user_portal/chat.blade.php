@extends ('user_portal.layout.app')
@section ('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
               Inbox 
            </h1>
        </div>
    </div>
    <div class="col-lg-12" >
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-email fa-fw"></i> Messages</h3>
            </div>
            <div class="panel-body" id="inbox">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Order #</th>
                            <th>From</th>
                            <th>Message</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>View</th>
                            <th>Delete</th>
                            <th>Reply</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>3326</td>
                            <td>JOhn Smith</td>
                            <td>Please revise the....</td>
                            <td>3:29 PM</td>
                            <td>read</td>
                            <td><button class="btn btn-primary" onclick="openMessage()">View</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                            <td><button class="btn btn-success" onclick="openModal()">Reply</button></td>
                        </tr>
                        <tr>
                            <td>3326</td>
                            <td>John Smith</td>
                            <td>Your Request is being processed</td>
                            <td>3:29 PM</td>
                            <td>read</td>
                            <td><button class="btn btn-primary" onclick="openMessage()">View</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                            <td><button class="btn btn-success" onclick="openModal()">Reply</button></td>
                        </tr>
                        <tr>
                            <td>3326</td>
                            <td>John Smith</td>
                            <td>Hello....</td>
                            <td>3:29 PM</td>
                            <td>read</td>
                            <td><button class="btn btn-primary" onclick="openMessage()">View</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                            <td><button class="btn btn-success" onclick="openModal()">Reply</button></td>
                        </tr>
                        <tr>
                            <td>3326</td>
                            <td>John Smith</td>
                            <td>Upload Complete....</td>
                            <td>3:29 PM</td>
                            <td>read</td>
                            <td><button class="btn btn-primary" onclick="openMessage()">View</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                            <td><button class="btn btn-success" onclick="openModal()">Reply</button></td>
                        </tr>
                        <tr>
                            <td>3326</td>
                            <td>John Smith</td>
                            <td>i havent received .......</td>
                            <td>3:29 PM</td>
                            <td>read</td>
                            <td><button class="btn btn-primary" onclick="openMessage()">View</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                            <td><button class="btn btn-success" onclick="openModal()">Reply</button></td>
                        </tr>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="myModal" class="modal">
            <div class="modal-content">
                 <span class="close">&times;</span>
                 <p>Some text in the Modal..</p>
            </div>

        </div>
        <div id="mesModal" class="modal">
            

               
                <div class="modal-content"> 
                    <span class="close cursor" onclick="closeModal2()">&times;</span>         
                    <div class="mySlides">
                        <form>
                            <div class="form-group col-sm-12">
                                <label for="from" class="">From: Admin</label>
                                <br>
                                <label for="time" class="">Time: Today 14:50 </label>
                                
                            </div>
                            <div class="form-group col-sm-12">
                                
                                <p>This is to inform you that your order has been received and will be processed in a short while</p>
                            </div>
                            

                    </form> 
                    </div>        
                </div>
        

        </div>
          
    </div>

</div>

@endsection