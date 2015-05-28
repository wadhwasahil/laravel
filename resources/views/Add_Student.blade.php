@extends('master')
@section('content')
	<!-- <h4>Add New Student Record</h4>
	<br/> 
	<form action="Student_Display" method="post">
			<b>Full Name</b><br/> <input type="text" name="fullname"><br>

	<br><b>Residential Address<b><br/>
	<textarea rows="5" cols="50">
	</textarea>
	<br><br><br>
	<b>Gender</b><br>
		<input type="radio" name="sex" value="male" checked> Male<br>
		<input type="radio" name="sex" value="female"> Female

	<br><br>
	<b>Extra Cirricular Activities</b><br>
		<input type="checkbox" name="activities" value="sports" checked> Sports<br>
		<input type="checkbox" name="activities" value="programming"> Programming<br>
		<input type="checkbox" name="activities" value="arts"> Arts<br>
		<input type="checkbox" name="activities" value="music"> Music<br>
		
		<br>
		<button type="submit">Add</button>
		</form>	
		&nbsp;&nbsp;</b><a href="/">Cancel</a>
 -->	
		{!!Form::open(array('route' => 'create')) !!}	
		<div class="form-group ">
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
		{!! Form::radio('gender','male',true)!!}Male
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
		{!! Form::submit('Add')!!} &nbsp;<a href="/">Cancel</a>
		</div>	
	{!! Form::close() !!}
@endsection