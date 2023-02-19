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
                {!! Form::label('dni','Rut', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::text('dni', null, ['class' => 'form-control',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('dni', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('email','Correo', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::text('email', null, ['class' => 'form-control',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('phone','Teléfono', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::text('phone', null, ['class' => 'form-control',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('address','Dirección', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::text('address', null, ['class' => 'form-control',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('birth','Fecha Nacimiento', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::date('birth', null, ['class' => 'form-control',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('birth', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('start','Ingreso al trabajo', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::date('start', null, ['class' => 'form-control',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('start', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('comment','Comentario', ['class' => '']) !!}
            </div>
            <div class="col-8">    
                {!! Form::text('comment', null, ['class' => 'form-control', $status_form == 'show' ? 'disabled' : '' ]) !!}
                {!! $errors->first('comment', '<p class="help-block">:message</p>') !!}
            </div>
         </div> 
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('image','Adjuntar Imagen', ['class' => '']) !!}
            </div>
            <div class="col-8">   
                {!! Form::file('image', null, ['class' => 'form-control', $status_form == 'show' ? 'disabled' : '' ]) !!}
                {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
