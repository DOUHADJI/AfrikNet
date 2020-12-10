@extends('admin.layouts.Defaut')


@section('head')
        <head>
            <title>Matrix Admin</title>
            <meta charset="UTF-8">
            
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="{{ asset ('css/BackEnd/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset ('css/BackEnd/bootstrap-responsive.min.css') }}">
         
            <link rel="stylesheet" href="{{ asset ('css/BackEnd/clientDetails.css') }}">
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
        <script src="{{ asset('js/Back_End/clientDetails.js') }}"></script>

@endsection

@section('contentHead')

        <div id="content-header">
            <div id="breadcrumb"> <a href="/clients " class="tip-bottom" data-original-title="Gestion des clients">
                <i class="icon icon-th"></i>Gestion des clients</i> <a href="#" class="current">Client</a> </div>
            <h1>Client</h1>
        </div>

@endsection

@section('contentBody')

        <div class="container-fluid">
            <div class="container-fluid">
                    <div class="row">

                        <div class="span6">
                                    <div class="DivIconeClient">  
                                      
                                    </div>
                        </div>

                        <div class="span6">

                            <div class="DivInfosClient">


                                <div class="SingleClientInfo">
                                    <span>Nom : </span>
                                    <strong>  {{$client -> name}} </strong>
                                </div>

                                <div class="SingleClientInfo">
                                    <span>Prénom(s) : </span>
                                    <strong> {{$client -> prénom}} </strong>
                                </div>

                                <div class="SingleClientInfo">
                                    <span>Contact : </span>
                                    <strong> {{$client -> contact}} </strong>
                                </div>

                                <div class="SingleClientInfo">
                                    <span>Email : </span>
                                    <strong> {{$client -> email}} </strong>
                                </div>

                                <div class="SingleClientInfo">
                                    <span>Pays : </span>
                                    <strong> {{$client -> pays}} </strong>
                                </div>

                                <div class="SingleClientInfo">
                                    <span>Ville : </span>
                                    <strong> {{$client -> ville}} </strong>
                                </div>

                                <div class="SingleClientInfo">
                                    <span>Type client : </span>
                                    <strong> {{$client -> type_de_client}} </strong>
                                </div>

                            </div>

                        </div>

                        <div class="span12">

                            <div class="divDesButtons">

                                <button  type="button" class="btn btn-large btn-inverse MonButon" data-toggle="modal" data-target="#myModal"> <span class="icon-edit"> </span> Editer client  </button>
                                   
                                
                                @if($client->actif == true)
                                        <button class="btn btn-large btn-warning MonButon"> <span class="icon-ban-circle"> </span> Suspendre le compte </button>

                                        @else
                                <button class="btn btn-large btn-success MonButon"> <span class="icon-ok"> </span> Activer le compte </button>

                                @endif


                                <button class="btn btn-large btn-danger MonButon"> <span class="icon-remove"> </span> Supprimer le compte </button>
                                

                            </div>
                        </div>

                    </div>

                    <div id="info"  class="DivInfosClient">

                    </div>
            </div>

        </div>


        <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" >
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header MymodalHeader">
          <button type="button" class="close" data-dismiss="modal" >&times;</button>
          <h4 class="modal-title">Modifier les informations du client</h4>
        </div>
        <div class="modal-body">

        <form class="form-horizontal"  method="POST" id="modifiyClientInformationsForm" action="/clients/client_numero/{{ $client ->id }}">
            @csrf
            
            <div class="InputAndLabelDiv">
            
                <label for="name" class="InputLabel">Nom :</label>
                <input id="modifiyClientInformationsForm_name" type="text" class="MyInput"  value="{{$client->name}}">
            
            </div>
            

            <div class="InputAndLabelDiv">

                <label for="prenom" class="InputLabel">Prénom(s) :</label>
            <input id="modifiyClientInformationsForm_prenom" type="text" class="MyInput"  value="{{$client->prénom}}">

            </div>

            <div class="InputAndLabelDiv">

                <label for="contact" class="InputLabel">Contact :</label>
                <input id="modifiyClientInformationsForm_contact" type="text" class="MyInput"  value="{{$client->contact}}">

            </div>

            <div class="InputAndLabelDiv">

                <label for="email" class="InputLabel">Email :</label>
            <input id="modifiyClientInformationsForm_email" type="text" class="MyInput"  value="{{$client->email}}">

            </div>

            <div class="InputAndLabelDiv">

                <label for="ville" class="InputLabel">Ville :</label>
            <input id="modifiyClientInformationsForm_ville" type="text" class="MyInput"  value="{{$client->ville}}">

            </div>

            <div class="InputAndLabelDiv">

                <label for="pays" class="InputLabel">Pays :</label>
            <input id="modifiyClientInformationsForm_pays" type="text" class="MyInput"  value="{{$client->pays}}">

            </div>

            <div class="InputAndLabelDiv">

                <label for="type" class="InputLabel">Type du client :</label>
            <input id="modifiyClientInformationsForm_type" type="text" class="MyInput"  value="{{$client->type_du_client}}">

            </div>
           


        </div>
        
        <div class="modal-footer">

          <button  class="btn btn-large  MonButon" data-dismiss="modal">Close</button>

          <button type="submit"  id="modifiyClientInformationsForm_submitButton" class="btn btn-success btn-large Monbuton"  > <span class="icon-ok"></span> Enregistrer</button>

        </div>
        
    </form>

      </div>


  
    </div>
  </div>


 


    
@endsection