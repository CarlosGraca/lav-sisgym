@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Utilizadores
@endsection

@section('contentheader_title')
  {{ trans('adminlte_lang::message.app_name') }}
@endsection

@section('contentheader_description')
 user
@endsection


@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Todos os Utilizadores
                    <div class="pull-right box-tools">
                       <a href="{{ url('users/create') }}" class="btn btn-primary btn-sm" role="button" data-toggle="tooltip" title="Adicionar" data-remote="true" style="padding: 0px 4px;">
                              Novo utilizador
                            </a>
                    </div><!-- /. tools --> 
                </div>
               
                <div class="panel-body">
                    @if(count($users) > 0)
                        <table class="table table-responsive table-bordered">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Perfil</th>
                                <th>Estado</th>
                                <th>Data de Registo</th>
                                <th>Última Atividade</th>

                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{!! $user->name !!}</td>
                                    <td>{!! $user->email !!}</td>
                                    <td>{!! $user->role->display_name !!} </td>
                                    <td>@if ($user->active === 1)
                                            <span class="label label-success">Ativo</span>
                                        @elseif($user->active === 0)
                                             <span class="label label-danger">Inativo</span>
                                        @endif
                                    </td>
                                    <td>{!! $user->created_at !!}</td>
                                    <td>{!! Helpers::last_ative($user->id) !!}</td>
                                    <td class="actions">
                                        <a href="{{ route('users.show',$user->id) }}" class="btn btn-info btn-xs", data-remote='true'])>      <i class="fa fa-eye"></i>
                                        </a>    
                                        <a href="{{ route('users.edit',$user->id) }}" class="btn btn-primary btn-xs", data-remote='true'])>      <i class="fa fa-edit"></i>
                                        </a>                           
                                        <button type="button" class="btn btn-xs btn-danger btn-flat" data-toggle="modal" data-target="#confirmDelete" data-id="{{ $user->id }}" data-name="{{ $user->id }}" data-title="Confirma Alterar estado user" data-url="/users/" title="Eliminar">
                                            <i class="fa fa-trash-o"></i>
                                        </button> 
                                        <button type="button" class="btn btn-xs btn-warning btn-flat" data-toggle="modal" data-target="#confirmDelete" data-id="{{ $user->id }}" data-name="{{ $user->id }}" data-title="Confirma Alterar estado user" data-url="/users/" title="Alterar Estado">
                                            <i class="fa fa-exchange"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="paginate">
                            {!! $users->render() !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection