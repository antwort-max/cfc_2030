    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('worker_id','Trabajador', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::select('worker_id', $workers, null, ['class' => 'form-control', 'required' => 'true',  $status_form == 'show' ? 'disabled' : '']) !!}
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
                {!! Form::label('dni','Rut', ['class' => '']) !!}
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
                {!! Form::label('date','Fecha del Registro', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::date('date', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('start','Inicio de Vacaciones', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::date('start', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('start', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('end','Final de Vacaciones', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::date('end', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('end', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
	<hr>
    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('period_start_a','Periodo inicial', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::date('period_start_a', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('period_start_a', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    
    
    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('period_end_a','Periodo termino', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::date('period_end_a', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('period_end_a', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    
     <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('period_a','Dias corresponden', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::number('period_a', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('period_a', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
     </div>
     
     	<hr>
    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('period_start_b','Periodo inicial', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::date('period_start_b', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('period_start_b', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    
    
    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('period_end_b','Periodo termino', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::date('period_end_b', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('period_end_b', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    
     <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('period_b','Dias corresponden', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::number('period_b', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('period_b', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
     </div>
    
    
    <hr>
            
     <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('business_days','Dias habiles', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::number('business_days', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('business_days', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
     </div>

            
     <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('progresive_days','vacaciones progresivas', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::number('progresive_days', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('progresive_days', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>


    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('holidays_days','Domingos e Inhábiles', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::number('holidays_days', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('holidays_days', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    
     <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('fraccion_days','Dias fraccionados', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::number('fraccion_days', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('fraccion_days', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
     </div>
    
    
    <hr>     
   	
    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('slope_working','Saldo pendiente Hábiles', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::number('slope_working', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('slope_working', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>


    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('slope_holiday','Saldo Pendientes Inhábiles', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::number('slope_holiday', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('slope_holiday', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('slope_progresive','Saldo Pendientes Progresivos', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::number('slope_progresive', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('slope_progresive', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

   