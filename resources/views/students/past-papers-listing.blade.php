@extends('layouts.students')

@section('content')
<div class="col-sm-12">
	<div class="widget-box">
		<div class="widget-header">
			<h4 class="smaller">
				{{$module->name}} ({{$module->code}})
				<small>Past Papers</small>
			</h4>
		</div>

		<div class="widget-body" style="padding:10px">
			<div class="widget-main">
				<p class="muted">
					<div class="row">
						<div class="dd dd-draghandle" style="max-width:100%!important">
							<ol class="dd-list">
							@foreach($module->papers as $row)
								<li class="dd-item dd2-item" data-id="13">
									<div class="dd-handle dd2-handle">
										<i class="normal-icon ace-icon fa fa-list blue bigger-130"></i>
					
									</div>
									<div class="dd2-content">
										<span>{{$row->year}} </span>  |  semester {{$row->semester}} 
										<span class="pull-right" style="color:#83c0e5" >
											<i class="drag-icon ace-icon fa fa-download bigger-125 pull-right"></i> |  
											<a href="{{route('pastpapers.download',['id'=>$row->id])}}">Download </a> : 
											<a href="{{route('pastpapers.view',['id'=>$row->id])}}">View </a>
										</span>
									</div>
									
								</li>
							@endforeach
					
								
							</ol>
						</div>
					</div>
				</p>

				<hr>

				<p>
					<span class="btn btn-sm" data-rel="tooltip" title="" data-original-title="Default">Download All</span>
					<span class="btn btn-warning btn-sm tooltip-warning" data-rel="tooltip" data-placement="left" title="" data-original-title="Left Warning">Print</span>
					<span class="btn btn-success btn-sm tooltip-success" data-rel="tooltip" data-placement="right" title="" data-original-title="Right Success">Right</span>
				</p>
			</div>
		</div>
	</div>
</div>


@endsection