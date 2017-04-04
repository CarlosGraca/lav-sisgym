
<div class="form-group has-feedback">
    <input type="text" class="form-control" placeholder="{{ trans('adminlte_lang::message.fullname') }}" name="name" value="{{ old('name') }}"/>
    <span class="glyphicon glyphicon-user form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    <input type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email" value="{{ old('email') }}"/>
    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password"/>
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.retrypepassword') }}" name="password_confirmation"/>
    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
      {!! Form::select('role_id',  [''=>'Escolha o Perfil'] + $profiles,null, ['class'=>'form-control select2','style'=>'width: 100%;']) !!}
</div>
<div class="checkbox_register icheck">
    <label>
        <input type="checkbox" name="terms">
        Ativar conta com verificação de Email
    </label>
</div>
<div class="row">
    <div class="col-xs-12 pull-right">
        <button type="submit" class="btn btn-primary pull-right">{{ trans('adminlte_lang::message.register') }}</button>
    </div><!-- /.col -->
</div>