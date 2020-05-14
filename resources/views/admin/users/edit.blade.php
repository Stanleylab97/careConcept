@extends('base')

@section('content')
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
               <h3>Edition du compte de {{$user->name}}</h3>
              </div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                  <div class="x_content">
                    <form id="demo-form2" action="{{route('admin.users.update',$user->id)}}"  method="POST" class="form-horizontal form-label-left" novalidate="">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">E-mail</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="email" required="required" class="form-control col-md-7 col-xs-12 parsley-error" data-parsley-id="5"><ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">This value is required.</li></ul>
                        </div>
                      </div>
                        @foreach ($roles as $role)
                            <div class="form-check">
                            <input type="checkbox" name="roles[]" value="{{$role->id}}"
                             @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                            <label>{{$role->name}}</label>
                            </div>
                        @endforeach
                        
                      
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Modifier</button>
                            <a href="{{route('admin.users.index')}}"> <button class="btn btn-default" type="button">Anuuler</button></a>
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