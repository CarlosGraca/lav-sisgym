@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Perfis
@endsection

@section('contentheader_title')
  {{ trans('adminlte_lang::message.app_name') }}
@endsection

@section('contentheader_description')
 Perfis
@endsection


@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Todos os Perfis</div>

                <div class="panel-body">
                    @if(count($roles) > 0)
                        <table class="table table-responsive table-bordered">
                            <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Data de Registo</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{!! $role->name !!}</td>
                                    <td>{!! $role->display_name !!}</td>
                                    <td>{!! $role->description !!}</td>
                                    <td>{!! $role->created_at !!}</td>
                                    <td class="actions">
                                        <a href="{{ route('roles.show',$role->id) }}" class="btn btn-info btn-xs", data-remote='true'])>      <i class="fa fa-eye"></i>
                                        </a>    
                                        <a href="{{ route('roles.edit',$role->id) }}" class="btn btn-primary btn-xs", data-remote='true'])>      <i class="fa fa-edit"></i>
                                        </a>                           
                                        <button type="button" class="btn btn-xs btn-danger btn-flat" data-toggle="modal" data-target="#confirmDelete" data-id="{{ $role->id }}" data-name="{{ $role->id }}" data-title="Confirma Alterar estado role" data-url="/roles/" title="Eliminar">
                                            <i class="fa fa-trash-o"></i>
                                        </button> 
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="paginate">
                            {!! $roles->render() !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection