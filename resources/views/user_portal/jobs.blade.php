@extends('user_portal.layout.app')

@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                   Jobs Panel <small> Overview</small>
                </h1>                
            </div>
        </div>       
        <!-- /.row -->

        
        
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Jobs</h3>
                    </div>
                    <div class="panel-body" id="jobs">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>Order #</th>
                                    <th>Order Date</th>
                                    <th>Order Title</th>
                                    <th>Date Due</th>
                                    <th>Urgency</th>
                                    <th>Order Time</th>
                                    <th>Amount (USD)</th>
                                    <th>View</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>3326</td>
                                    <td>10/21/2013</td>
                                    <td>Criminal Law</td>
                                    <td>10/27/2013</td>                                    
                                    <td>6 days</td>
                                    <td>3:29 PM</td>
                                    <td>$321.33</td>
                                    <td><button class="btn btn-primary" onclick="openJob()">View</button></td>
                                </tr>
                                <tr>
                                    <td>3325</td>
                                    <td>10/21/2013</td>
                                    <td>Criminal Law</td>
                                    <td>10/27/2013</td>                                    
                                    <td>6 days</td>
                                    <td>3:20 PM</td>
                                    <td>$234.34</td>
                                    <td><button class="btn btn-primary" onclick="openJob()">View</button></td>
                                </tr>
                                <tr>
                                    <td>3324</td>
                                    <td>10/21/2013</td>
                                    <td>Criminal Law</td>
                                    <td>10/27/2013</td>                                    
                                    <td>6 days</td>
                                    <td>3:03 PM</td>
                                    <td>$724.17</td>
                                    <td><button class="btn btn-primary" onclick="openJob() ">View</button></td>
                                </tr>
                                <tr>
                                    <td>3323</td>
                                    <td>10/21/2013</td>
                                    <td>Criminal Law</td>
                                    <td>10/27/2013</td>                                    
                                    <td>6 days</td>
                                    <td>3:00 PM</td>
                                    <td>$23.71</td>
                                    <td><button class="btn btn-primary" onclick="openJob() ">View</button></td>
                                </tr>
                                <tr>
                                    <td>3322</td>
                                    <td>10/21/2013</td>
                                    <td>Criminal Law</td>
                                    <td>10/27/2013</td>                                    
                                    <td>6 days</td>
                                    <td>2:49 PM</td>
                                    <td>$8345.23</td>
                                    <td><button class="btn btn-primary" onclick="openJob() ">View</button></td>
                                </tr>
                                <tr>
                                    <td>3321</td>
                                    <td>10/21/2013</td>
                                    <td>Criminal Law</td>
                                    <td>10/27/2013</td>                                    
                                    <td>6 days</td>
                                    <td>2:23 PM</td>
                                    <td>$245.12</td>
                                    <td><button class="btn btn-primary" onclick="openJob()">View</button></td>
                                </tr>
                                <tr>
                                    <td>3320</td>
                                    <td>10/21/2013</td>
                                    <td>Criminal Law</td>
                                    <td>10/27/2013</td>                                    
                                    <td>6 days</td>
                                    <td>2:15 PM</td>
                                    <td>$5663.54</td>
                                    <td><button class="btn btn-primary" onclick=" openJob()">View</button></td>
                                </tr>
                               
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
                <div id="jobModal" class="modal">
                    <div class="container" style="background:#ffffff;">
        
                        <span class="close cursor" onclick="closeModal3()">&times;</span>
                        <div class="modal-content">          
                            <div class="mySlides">
                                <form>
                                    <div class="form-group col-sm-12">
                                        <label for="name" class="">User Name: John009</label>
                                        <br>
                                        <label for="from" class="">Academic Level: PhD</label>
                                        <br>
                                        <label for="type" class="">Type of Paper: Essay </label>
                                        <br>
                                        <label for="subject" class="">Criminal Law</label>
                                        <br>

                                        
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <h4>Topic: Picking Jury Members by Dr.Bull</h4>
                                        <label for="page#">Number of pages:5 ()Single SPaced</label>
                                        <br>
                                        <label for="pps">Number of power point slides:3 Slides</label>
                                    </div>
                                    
        
                            </form> 
                            </div>        
                         </div>
                    </div>
        
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
@endsection