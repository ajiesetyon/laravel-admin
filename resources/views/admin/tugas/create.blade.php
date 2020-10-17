@extends("admin.layout.master")

@section("content")

<link rel="stylesheet" href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/font-awesome/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


<div class="col-lg-12">
    <div class="card">
        <div class="pl-4 card-header">
            <strong>{{$pagename}}</strong>
        </div>
    <div class="card-body card-block">

    <form class="col-lg-10" action="" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Tugas</label></div>
            <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtnama_tugas" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
        </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label">Kategori Tugas</label></div>
                <div class="col-12 col-md-9">
                    <select name="option_id_kategori" id="select" class="form-control">
                        <option value="0">Please select</option>
                        <option value="1">Option #1</option>
                        <option value="2">Option #2</option>
                        <option value="3">Option #3</option>
                    </select>
                </div>
            </div>

              <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Keterangan Tugas</label></div>
                <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
             </div>

            <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">Status Tugas</label></div>
                <div class="col col-md-9">
                    <div class="form-check-inline form-check">
                        <label for="inline-radio1" class="form-check-label ">
                            <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">One
                        </label>
                        <label for="inline-radio2" class="form-check-label ">
                            <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Two
                        </label>
                        <label for="inline-radio3" class="form-check-label ">
                            <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Three
                        </label>
                    </div>
                </div>
            </div>


    </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
        </div>

</div>

</div>

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('vendors/popper.js/dist/umd/popper')}}.min.js"></script>
    <script src="{{asset('vendors/bootstrap/dist/js/bootstr')}}ap.min.js"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>


    <script src="{{asset('vendors/datatables.net/js/jquery.')}}dataTables.min.js"></script>
    <script src="{{asset('vendors/datatables.net-bs4/js/dat')}}aTables.bootstrap4.min.js"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js')}}/dataTables.buttons.min.js"></script>
    <script src="{{asset('vendors/datatables.net-buttons-bs')}}4/js/buttons.bootstrap4.min.js"></script>
    <script src="{{asset('vendors/jszip/dist/jszip.min.js">')}}</script>
    <script src="{{asset('vendors/pdfmake/build/pdfmake.min')}}.js"></script>
    <script src="{{asset('vendors/pdfmake/build/vfs_fonts.j')}}s"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js')}}/buttons.html5.min.js"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js')}}/buttons.print.min.js"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js')}}/buttons.colVis.min.js"></script>
    <script src="{{asset('assets/js/init-scripts/data-table/datatables-init.js')}}"></script>

@endsection