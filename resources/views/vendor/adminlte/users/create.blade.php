@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Utilizadores
@endsection

@section('contentheader_title')
  {{ trans('adminlte_lang::message.app_name') }}
@endsection

@section('contentheader_description')
  Novo
@endsection


@section('main-content')
    @include('adminlte::layouts.shared.alert')
     @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">
                     {{ trans('adminlte_lang::message.registermember') }}
                  </h3>
                  
                  <div class="pull-right box-tools">
                            <a href="{{ url('users') }}" class="btn btn-primary btn-sm" role="button" data-toggle="tooltip" title="Voltar">
                                 <i class="fa  fa-arrow-left"></i>
                            </a>
                    </div><!-- /. tools -->
                </div><!-- /.box-header -->

                <div class="box-body">
                    {!! Form::open(['route'=>'users.store', 'id'=>'users-form','files'=>true]) !!}
                       {{ csrf_field() }}
                        @include('adminlte::users.form', array('submitButtonText'=>'Gravar'))
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
