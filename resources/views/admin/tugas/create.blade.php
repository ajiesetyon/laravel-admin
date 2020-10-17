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
            <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtnama_tugas" placeholder="Isikan Nama Tugas" class="form-control"><small class="form-text text-muted">Nama Tugas Harus Benar</small></div>
        </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label">Kategori Tugas</label></div>
                <div class="col-12 col-md-9">
                    <select name="optionid_kategori" id="select" class="form-control">
                    
                    @foreach($data_kategori as $kategori)
                    
                    <option value ={{$kategori->id}}>
                   {{$kategori->nama_kategori}}</option>
                    @endforeach
                    </select>
                
                </div>
            </div>

              <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Keterangan Tugas</label></div>
                <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtketerangan_tugas" placeholder="Isikan Keterangan Tugas" class="form-control"><small class="form-text text-muted">Kategori Tugas Harus Benar</small></div>
             </div>

            <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">Status Tugas</label></div>
                <div class="col col-md-9">
                    <div class="form-check-inline form-check">
                        <label for="inline-radio1" class="form-check-label ">
                            <input type="radio" id="inline-radio1" name="radiostatus_tugas" value="option1" class="form-check-input">Masih Berjalan
                        </label>
                        <label for="inline-radio2" class="form-check-label ">
                            <input type="radio" id="inline-radio2" name="radiostatus_tugas" value="option2" class="form-check-input">Selesai
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