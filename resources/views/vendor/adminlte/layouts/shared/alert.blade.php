{{-- <div id='alert-box' class="alert alert-danger"
    
    {!! $errors->any() ? '' : "style='display: none'" !!}
    >
    <b>Ops...</b>
    <ul>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif
    </ul>
</div> --}}

@if ($errors = Session::get('status'))
   <div class="alert alert-info">
      {{$errors}}
   </div>
@endif
@if ($errors = Session::get('warning'))
   <div class="alert alert-warning">
      {{$errors}}
   </div>
@endif