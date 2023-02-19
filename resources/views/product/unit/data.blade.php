    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('name','Nombre', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('type','Tipo de unidad', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::select('type', 
                    ['Area' => 'Area', 'Largo' => 'Largo', 'Peso' => 'Peso'],
                    null, ['class' => 'form-control', 'required' => 'true',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

   
