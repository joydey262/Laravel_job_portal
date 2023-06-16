@extends('admin.layout.layout')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="card">
                    <div class="card-header ml-auto mr-auto">
                        <h5 class="text-success">Update Admin Details</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/update-admin-details')}}" method="post">
                            @if(Session::has('success_message'))
                                <div class="row" id="notification">
                                    <div class="col-md-12">
                                        <div class="alert alert-success">
                                            <button type="button" aria-hidden="true" class="close" style="cursor:pointer;" onclick="closeNotification()">
                                                <i class="now-ui-icons ui-1_simple-remove"></i>
                                            </button>
                                            <span><b>Congratulations: </b>{{Session::get('success_message')}}</span>
                                        </div>
                                    </div>
                                </div>   
                            @endif 
                            @if(Session::has('error_message'))
                                <div class="row" id="notification">
                                    <div class="col-md-12">
                                        <div class="alert alert-primary">
                                            <button type="button" aria-hidden="true" class="close" style="cursor:pointer;" onclick="closeNotification()">
                                                <i class="now-ui-icons ui-1_simple-remove"></i>
                                            </button>
                                            <span><b>Error: </b>{{Session::get('error_message')}}</span>
                                        </div>
                                    </div>
                                </div>   
                            @endif
                            @if($errors->any())
                                <div class="row" id="notification">
                                    <div class="col-md-12">
                                        <div class="alert alert-primary">
                                            <button type="button" aria-hidden="true" class="close" style="cursor:pointer;" onclick="closeNotification()">
                                                <i class="now-ui-icons ui-1_simple-remove"></i>
                                            </button>
                                            @foreach($errors->all() as $error)
                                                <span><b>Error: </b>{{$error}}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>   
                            @endif                         
                            @csrf
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label style="color: #515151;">Email</label>
                                        <input type="text" class="form-control" value="{{Auth::guard('admin')->user()->email}}" disabled readonly>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label style="color: #515151;">Type</label>
                                        <input type="text" class="form-control" value="{{Auth::guard('admin')->user()->type}}" disabled readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="color: #515151;">Name</label>
                                        <input type="text" class="form-control" value="{{Auth::guard('admin')->user()->name}}" name="name" id="name" placeholder=" ">                                    
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="color: #515151;">Mobile No.</label>
                                        <input type="text" class="form-control" name="mobile" value="{{Auth::guard('admin')->user()->mobile}}" id="mobile" maxlength="14" minlength="11" placeholder="Enter mobile number">                                    
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="color: #515151;">Enter password</label>
                                        <input type="password" class="form-control" name="current_password" id="current_password" placeholder="Enter password to update details" >
                                        <span id="check_password"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 ml-auto">
                                    <div class="row">
                                        <div class="col-md-12 ml-auto">
                                            <button class="btn btn-success btn-round btn-block ml-auto mr-auto">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function closeNotification(){
            var elem = document.getElementById("notification");
            elem.parentNode.removeChild(elem);
        }
    </script>
@endsection