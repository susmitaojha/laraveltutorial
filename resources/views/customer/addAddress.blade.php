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
                                    <form role="form" action="{{ route('AddressController.add.success')}}" method="post" enctype="multipart/form-data">
                                        @csrf;
                                        <div class="form-group">
                                        <label>Customer Name</label>
                                            <select name="customer_name" class="form-control">
                                                <option value="">Select name</option>
                                                @foreach($data as $val)
                                                <option value="{{$val -> id}}">{{$val -> name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="3"></textarea>
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
