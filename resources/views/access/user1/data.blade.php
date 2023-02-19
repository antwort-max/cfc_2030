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
                {!! Form::label('email','Correo', ['class' => '']) !!}
            </div>
            <div class="col-8">    
                {!! Form::email('email', null, ['class' => 'form-control', $status_form == 'show' ? 'disabled' : '' ]) !!}
                {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
            </div>
         </div> 
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('phone','Telefono incluir +56', ['class' => '']) !!}
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
                {!! Form::label('whatsapp','Whatsapp incluir +56', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::text('whatsapp', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('whatsapp', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('password','Password', ['class' => '']) !!}
            </div>
            <div class="col-8">    
                <?= Form::text('password', null, ['class' => 'form-control', $status_form == 'show' ? 'disabled' : '' ]) ?>
                {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
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
