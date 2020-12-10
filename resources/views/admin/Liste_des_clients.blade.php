@extends('admin.layouts.Defaut')

@section('head')

<head>
  <title>Matrix Admin</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset ('css/BackEnd/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('css/BackEnd/bootstrap-responsive.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('css/BackEnd/uniform.css') }}">
  <link rel="stylesheet" href="{{ asset ('css/BackEnd/select2.css') }}">
  <link rel="stylesheet" href="{{ asset ('css/BackEnd/matrix-style.css') }}">
  <link rel="stylesheet" href="{{ asset ('css/BackEnd/matrix-media.css') }}">
  <link href="{{ asset ('Fonts/Back_End/css/font-awesome.css') }}" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet" type="text/css">
  </head>
  
@endsection


@section('footer')

<script src="{{ asset('js/Back_End/jquery.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.ui.custom.js') }}"></script> 
<script src="{{ asset('js/Back_End/bootstrap.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.uniform.js') }}"></script> 
<script src="{{ asset('js/Back_End/select2.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.dataTables.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/matrix.js') }}"></script> 
<script src="{{ asset('js/Back_End/matrix.tables.js') }}"></script>
  
@endsection



@section('contentHead')
        <div id="content-header">
            <div id="breadcrumb"> <a href="#" class="tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
            <h1>Tables</h1>
        </div>
@endsection

@section('contentBody')

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Liste des cLients ({{ $clients ->count()}}) </h5>
          </div>
          <div class="widget-content nopadding">

          
              
              <table class="table table-bordered data-table dataTable" id="DataTables_Table_0">
              
              <thead>
                <tr role="row">

                  <th colspan="2" class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 202px;">
                      <div class="DataTables_sort_wrapper">Nom et Prénom(s)<span class="DataTables_sort_icon css_right ui-icon ui-icon-triangle-1-n"></span>
                      </div>
                  </th>
                    
                    <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 329px;">
                      <div class="DataTables_sort_wrapper">Email<span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span>
                      </div>
                    
                    </th>
                    
                    <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 299px;">
                      <div class="DataTables_sort_wrapper">Contact<span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span>
                    </div>
                    </th>
                    
                    <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 173px;">
                      <div class="DataTables_sort_wrapper">Ville<span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span>
                      </div>
                  </th>

                  <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 173px;">
                    <div class="DataTables_sort_wrapper">Pays<span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span>
                    </div>
                </th>


                <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 173px;">
                  <div class="DataTables_sort_wrapper">Modifier<span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span>
                  </div>
              </th>


                </tr>
              </thead>
              
            <tbody role="alert" aria-live="polite" aria-relevant="all">
              
              
              @foreach($clients as $client)

              <tr class="odd gradeA">
        
                    <td> <strong>{{$client -> name}}</strong>  </td> 
                    <td> {{$client ->prénom}}</td>
            
              <td>{{ $client -> email}}</td>
                <td>{{ $client -> contact}}</td>
                <td class="center"> {{ $client -> ville}}</td>
                <td class="center">{{ $client -> pays}}</td>
              <td class="center"><a class="btn btn-warning" href="clients/client_numero/{{ $client -> id }}"><span class="icon-edit"></a></td>
              </tr>


          @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
        </div>
    </div>

</div>


      <hr/>

<!--end-main-container-part-->

    
@endsection
