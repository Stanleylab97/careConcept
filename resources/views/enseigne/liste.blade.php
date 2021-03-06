@extends('base')

@section('content')
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Liste des enseignes</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Rechercher une enseigne ...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <ul class="pagination pagination-split">
                          <li><a href="#">A</a></li>
                          <li><a href="#">B</a></li>
                          <li><a href="#">C</a></li>
                          <li><a href="#">D</a></li>
                          <li><a href="#">E</a></li>
                          <li>...</li>
                          <li><a href="#">W</a></li>
                          <li><a href="#">X</a></li>
                          <li><a href="#">Y</a></li>
                          <li><a href="#">Z</a></li>
                        </ul>
                      </div>

                      <div class="clearfix"></div>
                      @foreach ($entreprises as $entreprise)
                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                          <h4 class="brief"><i class="fa fa-building"><strong> Enseigne : </strong>{{$entreprise->libelle}}</i></h4>
                            <div class="left col-xs-12">
                              
                              <p><strong>Slogan:</strong> {{$entreprise->slogan}} </p>
                              <ul class="list-unstyled">
                              <li><i class="fa fa-envelope"></i>E-mail: {{$entreprise->email}}</li>
                                <li><i class="fa fa-phone"></i>Contact: {{$entreprise->tel}}</li>
                              </ul>
                            </div>
                            
                          </div>
                          <div class="col-xs-12 bottom text-center">
                             <div class="col-xs-12 col-sm-3 emphasis">
                                <button type="button" class="btn btn-primary btn-xs">
                                                <i class="fa fa-edit"> </i>Rejoindre
                                              </button>
                              </div>
                              <div class="col-xs-12 col-sm-3 emphasis">	
                                <button type="button" class="btn btn-primary btn-xs">
                                                <i class="fa fa-edit"> </i>Suivre
                                              </button>
                              </div>
                            @if($entreprise->user_id==auth()->user()->id)  
                              <div class="col-xs-12 col-sm-3 emphasis">
                                <button type="button" class="btn btn-primary btn-xs">
                                        <i class="fa fa-show"> </i>Enregistrer une visite
                                </button>
                              </div>
                            @endif
                          </div>
                        </div>
                      </div>
                    @endforeach
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection