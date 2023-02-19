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
                {!! Form::label('year','Periodo', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::text('year', null, ['class' => 'form-control', 'required' => 'true',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('year', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('amount','Monto Bruto', ['class' => '']) !!}
            </div>
            <div class="col-8">    
                {!! Form::text('amount', null, ['class' => 'form-control', $status_form == 'show' ? 'disabled' : '' ]) !!}
                {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
            </div>
         </div> 
    </div>

 