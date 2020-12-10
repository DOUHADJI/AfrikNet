

@extends('admin.layouts.Defaut')


@section('head')

<head>
  <title>Afriknet</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/BackEnd/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/BackEnd/bootstrap-responsive.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/BackEnd/fullcalendar.css') }}">
  <link rel="stylesheet" href="{{ asset('css/BackEnd/matrix-style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/BackEnd/matrix-media.css') }}">
  <link href="{{ asset('Fonts/Back_End/css/font-awesome.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/BackEnd/jquery.gritter.css') }}">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet" type="text/css">
  </head>


@endsection


@section('contentHead')
    <!--breadcrumbs-->
      <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
      </div>
    <!--End-breadcrumbs-->

@endsection




  @section('contentBody')
    
 
  <!--close-Header-part--> 
  
  
  <!--Action boxes-->
    <div class="container-fluid">
      <div class="quick-actions_homepage">
        <ul class="quick-actions">
  
          <li class="bg_lg span3"> <a href="#"> <i class="icon-group"></i> Clients actifs : <strong>{{ App\Models\client::where('actif', true)->count() }}</strong></a> </li>
          <li class="bg_ls span3"> <a href="#"> <i class="icon icon-signal"></i> Abonnements en cours  : <strong>{{ App\Models\liste_des_abonnements::where('fini_le', '>=', now() )->count() }}</strong></a> </li>
          <li class="bg_lo span3"> <a href="#"> <i class="icon icon-signal"></i> Forfaits en cours  : <strong>{{ App\Models\liste_des_forfaits::where('fini_le', '>=', now() )->count() }}</strong></a> </li>
  
    
        </ul>
      </div>
  <!--End-Action boxes-->    
  
  <hr/>
  
  
  <!--Chart-box-->    
      <div class="row-fluid">
        <div class="widget-box">
          <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
            <h5>Analyse du chiffre d'affaire</h5>
          </div>
          <div class="widget-content" >
            <div class="row-fluid">
              <div class="span12">
                <div class="chart"></div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
  <!--End-Chart-box--> 


  <hr/>

  <canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
  
      <hr/>
  
  
      <div class="row-fluid">
  
        <h2>Tickets</h2>
  
  
        <!--Action boxes-->
    <div class="container-fluid">
      <div class="quick-actions_homepage">
        <ul class="quick-actions">
  
          <li class="bg_lr "> <a href="index.html"> <i class="icon-dashboard"></i> <span class="label label-important">{{ App\Models\requetes_et_plaintes::where('statut', 'Attente')->count() }}</span> En attente</a> </li>
          <li class="bg_lo "> <a href="index.html"> <i class="icon-dashboard"></i> <span class="label label-important">{{ App\Models\requetes_et_plaintes::where('statut', 'Affecté')->count() }}</span> Affecté </a> </li>
          <li class="bg_ly"> <a href="index.html"> <i class="icon-dashboard"></i> <span class="label label-important">{{ App\Models\requetes_et_plaintes::where('statut', 'Traitement')->count() }}</span> Traitement </a> </li>
          <li class="bg_ls"> <a href="index.html"> <i class="icon-dashboard"></i> <span class="label label-important">{{ App\Models\requetes_et_plaintes::where('statut', 'Terminé')->count() }}</span>Terminé </a> </li>
          <li class="bg_lb "> <a href="index.html"> <i class="icon-dashboard"></i> <span class="label label-important">{{ App\Models\requetes_et_plaintes::where('statut', 'Evalué')->count() }}</span> Évalué</a> </li>
          <li class="bg_lg"> <a href="index.html"> <i class="icon-dashboard"></i> <span class="label label-important">{{ App\Models\requetes_et_plaintes::where('statut', 'Archivé')->count() }}</span>Archivé</a> </li>
  
  
    
        </ul>
      </div>
  <!--End-Action boxes-->  
      
      </div>
    </div>
  </div>
  
  <hr/>
  
  <!--end-main-container-part-->
  

  @endsection




@section('footer')

    @include('admin.partials.footer')

@endsection
