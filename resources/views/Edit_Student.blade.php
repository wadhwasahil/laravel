@extends('master')
@section('content')	
{{-- */$u='update'.'/'.$id;/* --}}
	{!!Form::model($arr,array('url' =>$u)) !!}
		<b>{!! Form::label('name','Full Name',['class'=>'form-control'])!!}</b>
		<br>
		{!! Form::text('name')!!}
		<br><br>
		<b>{!! Form::label('address','Residential Address',['class'=>'form-control'])!!}</b>
		<br>
		{!! Form::textarea('address')!!}
		<br><br>
		<b>{!! Form::label('gender','Gender') !!}</b>
		<br>
		{!! Form::radio('gender','male')!!}Male
		<br>
		{!! Form::radio('gender','female')!!}Female 
		<br><br>
		<b>{!!Form::label('activities','Extra Cirricular Activities')!!}</b>
		<br>
		{!! Form::checkbox('activities','sports') !!}Sports <br>
		{!! Form::checkbox('activities','programming') !!}Programming <br>
		{!! Form::checkbox('activities','arts') !!}Arts <br>
		{!! Form::checkbox('activities','Music') !!}Music <br>
		<br>
		{!! Form::submit('Update')!!} &nbsp;<a href="/">Cancel</a>
		</div>	
	{!! Form::close() !!}
@endsection