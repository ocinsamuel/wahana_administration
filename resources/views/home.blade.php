@include('header')
            
            <!-- begin::Body -->
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

                @include('navbar')
                
                 <div class="m-grid__item m-grid__item--fluid m-wrapper">
                    <!-- BEGIN: Subheader -->
                    <div class="m-subheader ">
                        <div class="d-flex align-items-center">
                            <div class="mr-auto">
                                <h3 class="m-subheader__title ">
                                    Dashboard
                                </h3>
                            </div>
                            <div>
                                <span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
                                    <span class="m-subheader__daterange-label">
                                        <span class="m-subheader__daterange-title"></span>
                                        <span class="m-subheader__daterange-date m--font-brand home_daterange"></span>
                                    </span>
                                    <a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
                                        <i class="la la-angle-down"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- END: Subheader -->
                    <div class="m-content">
                        <!--Begin::Main Portlet-->
                        <div class="row">
                            <div class="col-xl-12">
                                <!--begin::Portlet-->
                                <div class="m-portlet" id="m_portlet">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <span class="m-portlet__head-icon">
                                                    <i class="flaticon-list-3"></i>
                                                </span>
                                                <h3 class="m-portlet__head-text">
                                                    Attendance
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="m-portlet__head-tools m--hide">
                                            <ul class="m-portlet__nav">
                                                <li class="m-portlet__nav-item">
                                                    <a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air">
                                                        <span>
                                                            <i class="la la-plus"></i>
                                                            <span>
                                                                Add Event
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body" id="home_body">
                                        <!--begin: Search Form -->
                                        <div class="table-responsive pb-3">                                        
                                            <table class="table table-striped pt-3" id="registrant_table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Date of Birth</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Church</th>
                                                        <th>Position</th>
                                                        <th>Attend</th>
                                                        <th>Registration Code</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end: Search Form -->
                                        
                                        <script type="text/javascript">
                                            var table = $('#registrant_table').DataTable({
                                                processing: true,
                                                serverSide: false,
                                                ajax: "home/json",
                                                dom: 'Bfrtip',
                                                buttons: [
                                                    'excel'
                                                ],
                                                columns: [
                                                    {data: 'id', name: 'id'},
                                                    {data: 'name', name: 'name'},
                                                    {data: 'dob', name: 'dob'},
                                                    {data: 'email', name: 'email'},
                                                    {data: 'phone', name: 'phone'},
                                                    {data: 'church', name: 'church'},
                                                    {
                                                        render: function(data, type, row){
                                                            if(row.type == 0){
                                                                return "Main Hall";
                                                            } else if(row.type == 1){
                                                                return "Balcon";
                                                            } else {
                                                                return "Lobby";
                                                            }
                                                        } 
                                                    },
                                                    {
                                                        render: function(data, type, row){
                                                            if(row.attend == 0){
                                                                return "Not Registered";
                                                            } else {
                                                                return "Registered";
                                                            }
                                                        } 
                                                    },
                                                    {data: 'registration_code', name: 'registration_code'},
                                                ]
                                            });
                                        </script>
                                    </div>

                                    <div class="m-portlet__foot" id="home_footer" style="text-align: right;">
                                        <div class="row align-items-center">
                                            <div class="col-lg-12 m--valign-middle" id="home_footer_text">
                                                Showing records from <span class="m--font-brand m--font-boldest">All Dates</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Portlet-->
                            </div>
                        </div>
                        <!--End::Main Portlet-->
                    </div>
                </div>

            </div>
            <!-- end:: Body -->
            
                @include('footer')
            
        