@extends('layouts.students')

@section('content')
	<div class="col-sm-12">
		<div class="widget-box" style="height:100% !important" >
			<div class="widget-header">
				<h4 class="smaller">
				{{$paper->module->name}} ({{$paper->module->code}})
					<small>Past Papers | {{$paper->year}} | Semester {{$paper->semester}}</small>
				</h4>
			</div>
			<!--==========================BOOK/NOTES/PASTPAPER FRAME=========================-->
			<object data="{{asset($contents)}}" style="width:100%; height:540px">
				<embed src="{{asset($contents)}}" style="width:100%; height:100%"> </embed>
				Error: Embedded data could not be displayed.
			</object>
	
			
			<!--=================================END IFRAME==============================-->
		</div>
	</div>
@endsection