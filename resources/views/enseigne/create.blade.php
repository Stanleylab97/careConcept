@extends('base')

@section('top-css')
  <link href="{{asset('/careConcept/public/gentelella-master/vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('/careConcept/public/gentelella-master/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{asset('/careConcept/public/gentelella-master/vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{asset('/careConcept/public/gentelella-master/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{asset('/careConcept/public/gentelella-master/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{asset('/careConcept/public/gentelella-master/vendors/starrr/dist/starrr.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('/careConcept/public/gentelella-master/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
@endsection
@section('content')
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Gestion des enseignes</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Recherche...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Formulaire d'enregistrement</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    

                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{route('admin.entreprise.store')}}" method="POST">
                      @csrf
                    <div class="row">
                       
                         <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 form-group">
                             <input type="text" placeholder="Libellé" class="form-control" name="libelle">
                            </div>
                         </div><br>
                          
                         <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                              <input type="text" placeholder="Slogan" class="form-control" name="slogan">
                             </div>
                         </div><br>

                         <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 form-group">
                                <input type="tel" placeholder="Téléphone" class="form-control" name="tel">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 form-group">
                                <input type="text" placeholder="E-mail" class="form-control" name="email">
                            </div>
                         </div> <br>
                         
                         <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                             <input type="text" placeholder="Site web" class="form-control" name="site">
                             </div>
                         </div> 

                         <label for="message">Message (20 chars min, 200 max) :</label>
                          <textarea id="message" required="required" class="form-control" name="description" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="200" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>

                          <br/>
                        
                        </div>
                          <div class="row">
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">Enregister</button>
                                    <a href="{{route('home')}}"><button class="btn btn-primary" type="button">Annuler</button> </a> 
                                </div>
                            </div>
                         </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
@endsection

@section('footer-scripts')
  <script src="{{asset('/careConcept/public/gentelella-master/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('/careConcept/public/gentelella-master/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('/careConcept/public/gentelella-master/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap-wysiwyg -->
    <script src="{{asset('/careConcept/public/gentelella-master/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
    <script src="{{asset('/careConcept/public/gentelella-master/vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
    <script src="{{asset('/careConcept/public/gentelella-master/vendors/google-code-prettify/src/prettify.js')}}"></script>
    <!-- jQuery Tags Input -->
    <script src="{{asset('/careConcept/public/gentelella-master/vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
    <!-- Switchery -->
    <script src="{{asset('/careConcept/public/gentelella-master/vendors/switchery/dist/switchery.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{asset('/careConcept/public/gentelella-master/vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <!-- Parsley -->
    <script src="{{asset('/careConcept/public/gentelella-master/vendors/parsleyjs/dist/parsley.min.js')}}"></script>
    <!-- Autosize -->
    <script src="{{asset('/careConcept/public/gentelella-master/vendors/autosize/dist/autosize.min.js')}}"></script>
    <!-- jQuery autocomplete -->
    <script src="{{asset('/careConcept/public/gentelella-master/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
    <!-- starrr -->
    <script src="{{asset('/careConcept/public/gentelella-master/vendors/starrr/dist/starrr.js')}}"></script>
@endsection