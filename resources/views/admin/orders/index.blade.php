@extends('admin.layouts.admin')
@section('content')
<div class="page-content-wrapper animated fadeInRight">
    <div class="page-content" >
      <div class="row wrapper border-bottom page-heading">
        <div class="col-lg-12">
          <h2> All Queries </h2>
          <ol class="breadcrumb">
            <li> <a href="{{route('admin.dashboard')}}">Home</a> </li>
            <li> <a>Queries</a> </li>
            <li class="active"> <strong> All Queries </strong> </li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="ibox float-e-margins">
            <div class="ibox-title">
              <h5>All Queries List</h5>
            </div>
            <div class="ibox-content collapse in">
              <div class="widgets-container">
                <div >
                  <table id="example7" class="display nowrap table  responsive nowrap table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>SKU</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Contact Number</th>
                        <th>Price </th>
                        <th>Category ID</th>
                        <th>Body</th>

                        

                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>SKU</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Contact Number</th>
                        <th>Price </th>
                        <th>Category ID</th>
                        <th>Description</th>
                      </tr>
                    </tfoot>
                    <tbody>
                        @foreach($orders as $order)
                      <tr>
                        <td>{{$order->id}}</td>
                        {{-- <td><img class="image_fade" src="{{ asset('/storage/city_images/'. $order->city_image)}}" alt="Standard Post with Image" height="50px;" width="50px;"></td> --}}
                        <td>{{$order->product['name']}}</td>
                        <td>{{$order->product['sku']}}</td>
                        <td>{{$order->first_name}}</td>
                        <td>{{$order->last_name}}</td>
                        <td>{{$order->contact_no}}</td>
                        <td>{{$order->product['price']}}</td>
                        <td>{{$order->product['category_id']}}</td>
                        <td>{{$order->body}}</td>

                       



                      </tr>
                     @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
@endsection
@section('js')
<script type="text/javascript" src="/admin/assets/js/vendor/jquery.dataTables.js"></script>
	<script type="text/javascript" src="/admin/assets/js/vendor/dataTables.bootstrap.min.js"></script>
	<!-- js for print and download -->
	<script type="text/javascript" src="/admin/assets/js/vendor/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="/admin/assets/js/vendor/buttons.flash.min.js"></script>
	<script type="text/javascript" src="/admin/assets/js/vendor/jszip.min.js"></script>
	<script type="text/javascript" src="/admin/assets/js/vendor/pdfmake.min.js"></script>
	<script type="text/javascript" src="/admin/assets/js/vendor/vfs_fonts.js"></script>
	<script type="text/javascript" src="/admin/assets/js/vendor/buttons.html5.min.js"></script>
	<script type="text/javascript" src="/admin/assets/js/vendor/buttons.print.min.js"></script>
	<script type="text/javascript" src="/admin/assets/js/vendor/dataTables.responsive.min.js"></script>
	<script type="text/javascript" src="/admin/assets/js/vendor/dataTables.fixedHeader.min.js"></script>
    
	<script src="/admin/assets/js/vendor/chartJs/Chart.bundle.js"></script>
    <script src="/admin/assets/js/dashboard1.js"></script>

    <script>
        var dataSet = [
            ["Jordan Belfort", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800"],
["Naomi Lapaglia", "Accountant", "Tokyo", "8422", "2011/07/25", "$170,750"],
["Auckland Straight Line Host", "Junior Technical Author", "San Francisco", "1562", "2009/01/12", "$86,000"],
["Donnie Azoff", "Senior Javascript Developer", "Edinburgh", "6224", "2012/03/29", "$433,060"],
["Mark Hanna", "Accountant", "Tokyo", "5407", "2008/11/28", "$162,700"],
["Jean-Jacques Saurel", "Integration Specialist", "New York", "4804", "2012/12/02", "$372,000"],
["Patrick Denham", "Sales Assistant", "San Francisco", "9608", "2012/08/06", "$137,500"],
["Teresa Petrillo", "Integration Specialist", "Tokyo", "6200", "2010/10/14", "$327,900"],
["Brad", "Javascript Developer", "San Francisco", "2360", "2009/09/15", "$205,500"],
["Max Belfort", "Software Engineer", "Edinburgh", "1667", "2008/12/13", "$103,600"],
["Manny Riskin", "Office Manager", "London", "3814", "2008/12/19", "$90,560"],
["Aunt Emma", "Support Lead", "Edinburgh", "9497", "2013/03/03", "$342,000"],
["Chantalle", "Regional Director", "San Francisco", "6741", "2008/10/16", "$470,600"],
["Nicky 'Rugrat' Koskoff", "Senior Marketing Designer", "London", "3597", "2012/12/18", "$313,500"],
["Captain Ted Beecham", "Regional Director", "London", "1965", "2010/03/17", "$385,750"],
["Leah Belfort", "Marketing Designer", "London", "1581", "2012/11/27", "$198,500"],
["Toby Welch", "Chief Financial Officer (CFO)", "New York", "3059", "2010/06/09", "$725,000"],
["Chester Ming", "Systems Administrator", "New York", "1721", "2009/04/10", "$237,500"],
["Alden 'Sea Otter' Kupferberg", "Software Engineer", "London", "2558", "2012/10/13", "$132,000"],
["Janet", "Personnel Lead", "Edinburgh", "2290", "2012/09/26", "$217,500"],
["Robbie ", "Development Lead", "New York", "1937", "2011/09/03", "$345,000"],
["Steve Madden", "Chief Marketing Officer (CMO)", "New York", "6154", "2009/06/25", "$675,000"],
["Kimmie Belzer", "Pre-Sales Support", "New York", "8330", "2011/12/12", "$106,450"],
["Hildy Azoff", "Sales Assistant", "Sidney", "3023", "2010/09/20", "$85,600"],
["Lucas Solomon", "Chief Executive Officer (CEO)", "London", "5797", "2009/10/09", "$1,200,000"],
["Honorary Samantha Stogel", "Developer", "Edinburgh", "8822", "2010/12/22", "$92,575"],
["Nolan Drager", "Regional Director", "Singapore", "9239", "2010/11/14", "$357,650"],
["Jenette Caldwell", "Software Engineer", "San Francisco", "1314", "2011/06/07", "$206,850"],
["Jennifer Acosta", "Chief Operating Officer (COO)", "San Francisco", "2947", "2010/03/11", "$850,000"],
["Jennifer Chang", "Regional Marketing", "Tokyo", "8899", "2011/08/14", "$163,000"],
["Jessica E. Summerville", "Integration Specialist", "Sidney", "2769", "2011/06/02", "$95,400"],
["Jonas Alexander", "Developer", "London", "6832", "2009/10/22", "$114,500"],
["Lael Greer", "Technical Author", "London", "3606", "2011/05/07", "$145,000"],
["Martena Mccray", "Team Leader", "San Francisco", "2860", "2008/10/26", "$235,500"],
["Michael Bruce", "Post-Sales support", "Edinburgh", "8240", "2011/03/09", "$324,050"],
["Michael Silva", "Marketing Designer", "San Francisco", "5384", "2009/12/09", "$85,675"]

        ];
        $(document).ready(function() {
            // Flexible table

            $('#example').DataTable();

            // Scroll Horizontal example

            var table = $('#example2').DataTable( {
                    responsive: true,
                    paging: false,
                     fixedHeader: {
                        headerOffset: 40
                    }
                } );
 
 
            // Check Click row

            var table = $('#example3').DataTable();
            $('#example3 tbody').on('click', 'tr', function() {
                var data = table.row(this).data();
                alert('You clicked on ' + data[0] + '\'s row');
            });


            // Javascript sourced data table

            $('#example4').DataTable({
                data: dataSet,
                columns: [{
                    title: "Name"
                }, {
                    title: "Position"
                }, {
                    title: "Office"
                }, {
                    title: "Extn."
                }, {
                    title: "Start date"
                }, {
                    title: "Salary"
                }]
            });

            //addRow 
            var t = $('#example5').DataTable();
            var counter = 1;

            $('#addRow').on('click', function() {
                t.row.add([
                    counter + '.1',
                    counter + '.2',
                    counter + '.3',
                    counter + '.4',
                    counter + '.5'
                ]).draw(false);

                counter++;
            });




            // Individual column searching

            // Setup - add a text input to each footer cell
            $('#example6 tfoot th').each(function() {
                var title = $(this).text();
                $(this).html('<input class="form-control dataSearch" type="text" placeholder="Search ' + title + '" />');
            });

            
            // DataTable
            var table = $('#example6').DataTable();

            
            // Apply the search
            table.columns().every(function() {
                var that = this;

                $('input', this.footer()).on('keyup change', function() {
                    if (that.search() !== this.value) {
                        that
                            .search(this.value)
                            .draw();
                    }
                });
            });


            // Advanced
            $('#example7').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                    text: 'copy',
                    extend: "copy",
                    className: 'btn dark btn-outline'
                }, {
                    text: 'csv',
                    extend: "csv",
                    className: 'btn aqua btn-outline'
                }, {
                    text: 'excel',
                    extend: "excel",
                    className: 'btn aqua btn-outline'
                }, {
                    text: 'pdf',
                    extend: "pdf",
                    className: 'btn yellow  btn-outline'
                }, {
                    text: 'print',
                    extend: "print",
                    className: 'btn purple  btn-outline'
                }]
            });



        });
    </script>
@endsection