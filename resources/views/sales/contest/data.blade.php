    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('name','Nombre Cliente', ['class' => '']) !!}
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
                {!! Form::label('dni','Rut Cliente (sin .)', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::text('dni', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('dni', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('email','Correo Cliente', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('phone','Telefono Cliente', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::text('phone', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('document','Factura o Boleta', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::text('document', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('document', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('contest','Concurso', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::text('contest', null, ['class' => 'form-control', 'required' => 'true',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('contest', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
        
    