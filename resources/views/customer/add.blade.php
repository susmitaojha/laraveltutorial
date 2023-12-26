<x-header-component/>
<!--  page-wrapper -->
<div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="{{ route('customer.add.success')}}" method="post">
                                        @csrf;
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input class="form-control" name="name" id="name" placeholder="Full Name"/>
                                            @if($errors->has('name'))
                                                <div class="text-danger">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Email Id</label>
                                            <input class="form-control" name="email" id="email" placeholder="Email id"/>
                                            @if($errors->has('email'))
                                                <div class="text-danger">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Mobile number</label>
                                            <input class="form-control" name="mobile_no" id="mobile_no" placeholder="Mobile No."/>
                                            @if($errors->has('mobile_no'))
                                                <div class="text-danger">{{ $errors->first('mobile_no') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" name="address" id="address" placeholder="Address"/>
                                            @if($errors->has('address'))
                                                <div class="text-danger">{{ $errors->first('address') }}</div>
                                            @endif
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit Button</button>
                                        <button type="reset" class="btn btn-success">Reset Button</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->
        <x-footer-component/>
