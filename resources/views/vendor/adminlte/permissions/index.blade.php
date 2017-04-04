@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Permissions
@endsection

@section('contentheader_title')
  {{ trans('adminlte_lang::message.app_name') }}
@endsection

@section('contentheader_description')
   Permissions
@endsection


@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-toolbar" role="navigation" style=" border: 1px solid #d2d6de;">
              <div class="container-fluid">
                <div class="btn-toolbar" role="toolbar" style="margin-left: -5px; margin-top: 6px;">
                  <div class="btn-group">
                    <a href="{{ url('permissions') }}" class="btn btn-danger">MENU</a>
                  </div>
                  <div class="btn-group">
                    <a href="{{ url('profiles') }}" class="btn btn-danger">Perfil</a>
                  </div>
                </div>
              </div>
            </nav> 
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <span>Gestão permissiões de Menu</span>
                    </h3>
                    <div class="pull-right box-tools">
                         
                    </div><!-- /. tools -->                     
                </div><!-- /.box-header -->

                <div class="box-body">               
                    <div class="row">
                        {!! Form::open(['route'=>'permissions.store', 'id'=>'users-form']) !!}
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" >
                                <div class="form-group has-feedback">
                                    {!! Form::select('role_id',  [''=>'Escolha o Perfil'] + $profiles,null, ['class'=>'form-control select2','style'=>'width: 100%;']) !!}
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <button type="submit" class="btn btn-primary btn-sm pull-right">Gravar</button>
                            </div>
                            <div class="col-lg-12">
                                <div class="table-container">
                                    <table class="table table-filter">
                                        <tbody>
                                            @foreach ($menus as $tm)
                                                <tr data-status="pagado">
                                                <td >
                                                    <div class="ckbox">
                                                        <input type="checkbox" id="checkbox1">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>                                                
                                                <td>
                                                    <p class="summary">{{$tm->menu->title}}</p>
                                                </td>
                                            </tr>
                                            @endforeach

                                            {{-- <tr data-status="pagado">
                                                <td >
                                                    <div class="ckbox">
                                                        <input type="checkbox" id="checkbox1">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>                                                
                                                <td>
                                                    <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                                </td>
                                            </tr>
                                            <tr data-status="pendiente">
                                                <td>
                                                    <div class="ckbox">
                                                        <input type="checkbox" id="checkbox3">
                                                        <label for="checkbox3"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                                </td>
                                            </tr>
                                            <tr data-status="cancelado">
                                                <td>
                                                    <div class="ckbox">
                                                        <input type="checkbox" id="checkbox2">
                                                        <label for="checkbox2"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                                </td>
                                            </tr>
                                            <tr data-status="pagado" class="selected">
                                                <td>
                                                    <div class="ckbox">
                                                        <input type="checkbox" id="checkbox4" checked>
                                                        <label for="checkbox4"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                                </td>
                                            </tr>
                                            <tr data-status="pendiente">
                                                <td>
                                                    <div class="ckbox">
                                                        <input type="checkbox" id="checkbox5">
                                                        <label for="checkbox5"></label>
                                                    </div>
                                                </td>                                                
                                                <td>
                                                    <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                                </td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>             
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection