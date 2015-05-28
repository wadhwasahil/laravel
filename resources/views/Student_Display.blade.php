@extends('master')
@section('content')
{{-- */$u=1;/* --}}
	<font-size="15">List of students</font><br/><hr align="left" width="20%">
	<table width="240">
	@foreach ($arr as $i)
		<tr>
			<td>{{$u++}}.{{$i->name}}</td>	
			<td><a href="edit/{{$i->id}}">Edit</a> | <a href="delete/{{$i->id}}">Delete</a></td>
		</tr>	
	@endforeach	
	</table>
	<br/><br/>
	<form action="Add_Student">
		<button type="submit">Add Student</button>
	</form>	
@endsection