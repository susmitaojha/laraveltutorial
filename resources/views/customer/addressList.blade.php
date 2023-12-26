<x-header-component/>
<!--  page-wrapper -->
<div id="page-wrapper">


<div class="row">
     <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Tables</h1>
    </div>
     <!-- end  page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                 Advanced Tables
            </div>
            <span class="text-success">{{Session::get('success')}}</span>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Serial no</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $val)
                            <tr class="odd gradeX">
                                <td>{{ ++$loop -> index }}</td>
                                <td>{{$val -> name}}</td>
                                <td class="center">{{ $val -> address }}</td>
                                <td><a href="{{route('AddressController.update', $val ->id)}}" class="">Edit</a>
                                    <a href="{{route('AddressController.delete',$val ->id)}}">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>


</div>
<!-- end page-wrapper -->
    <x-footer-component/>
<!-- Core Scripts - Include with every page -->

    <script src="{{ asset('assets/plugins/metisMenu/jquery.metisMenu.js')}}"></script>

    <!-- Page-Level Plugin Scripts-->
    <script src="{{ asset('assets/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('assets/scripts/flot-demo.js')}}"></script>
