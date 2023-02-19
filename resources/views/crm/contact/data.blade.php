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
                {!! Form::label('email','Correo electrónico', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'true',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
        
    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('phone','Telefono', ['class' => '']) !!}
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
                {!! Form::label('comment','Comentario', ['class' => '']) !!}
            </div>
            <div class="col-8">    
                {!! Form::textarea('comment', null, ['name'=> 'comment', 'class' => 'form-control', $status_form == 'show' ? 'disabled' : '' ]) !!}
                {!! $errors->first('comment', '<p class="help-block">:message</p>') !!}
            </div>
         </div> 
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('status','Status', ['class' => '']) !!}
            </div>
            <div class="col-8">    
                {!! Form::select('status', 
                    ['Ingresado' => 'Ingresado', 'Contactado' => 'Contactado', 'Cliente' => 'Cliente'],
                    null, ['class' => 'form-control',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
            </div>
         </div> 
    </div>