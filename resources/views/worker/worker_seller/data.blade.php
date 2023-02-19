    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('worker_id','Trabajador', ['class' => '']) !!}
            </div>
            <div class="col-8">    
                {!! Form::select('worker_id', $workers,
                    null, ['class' => 'form-control',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('worker_id', '<p class="help-block">:message</p>') !!}
            </div>
         </div> 
    </div>

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
                {!! Form::label('value','Valor', ['class' => '']) !!}
            </div>
            <div class="col-8">    
                {!! Form::text('value', null, ['class' => 'form-control',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('value', '<p class="help-block">:message</p>') !!}
            </div>
         </div> 
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('code','Código Random', ['class' => '']) !!}
            </div>
            <div class="col-8">    
                {!! Form::text('code', null, ['class' => 'form-control',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
            </div>
         </div> 
    </div>

                 