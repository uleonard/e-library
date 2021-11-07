@extends('layouts.students')

@section('content')
<div class="widget-header">
	<h4 class="smaller">
	Dashboard | 
		<small>Welcome {{session('firstname')}}, </small>
	</h4>
</div>
		<div class="col-xs-5">
			<div class="widget-body">
				<div class="widget-main padding-4">
					<div class="tab-content padding-8">
						<div id="task-tab" class="tab-pane active">
							<h4 class="smaller lighter green">
								<i class="ace-icon fa fa-list"></i>
								My modules
							</h4>

							<ul id="tasks" class="item-list ui-sortable">
							<?php $counter = 0;?>
							 @foreach($row->modules as $module)
       
							
								<li class="<?php echo $counter++ % 2 ==0? "item-orange":"item-blue"; ?> clearfix ui-sortable-handle" style="padding:0px 4px 0px 4px;">
									
									<label class="inline">
										
										<span class="lbl"> {{$module->name}} ({{$module->code}})</span>
									</label>
									<div class="pull-right action-buttons">
										<a href="#" class="blue" title="Lecture Notes" data-original-title="Lecture Notes">
											<i class="ace-icon fa fa-pencil-square-o bigger-130"></i>
										</a>

										<span class="vbar"></span>

										<a href="{{route('students.papers',['id'=>$module->id])}}" class="red" title="Past Papers" data-original-title="Past Papers">
											<i class="ace-icon fa fa-list bigger-130"></i>
										</a>

										<span class="vbar"></span>

										<a href="{{route('students.books',['id'=>$module->id])}}" class="green" title="Recommended Books" data-original-title="Recommended Books">
											<i class="ace-icon fa fa-book bigger-130"></i>
										</a>
										
									</div>
								</li>

								

								@endforeach
							</ul>
						</div>

					</div>
				</div><!-- /.widget-main -->
			</div>
			
			<div class="widget-body">
				<div class="widget-main padding-4">
					<div class="tab-content padding-8">
						<div id="task-tab" class="tab-pane active">
							<h4 class="smaller lighter green">
								<i class="ace-icon fa fa-clock-o"></i>
								Overdue Resources
							</h4>

							<ul id="tasks" class="item-list ui-sortable">
								<li class="item-orange clearfix ui-sortable-handle">
										<label class="inline">
											
											<span class="lbl"> Networking II</span>
										</label>
										
								</li>

								<li class="item-red clearfix ui-sortable-handle">
									<label class="inline">
										
										<span class="lbl"> Computer Programming(CIT-PRG-111)</span>
									</label>

									
								</li>

								

								<li class="item-blue clearfix ui-sortable-handle">
									<label class="inline">
										
										<span class="lbl"> Systems Analysist and Design</span>
									</label>
									
								</li>

								
							</ul>
						</div>

					</div>
				</div><!-- /.widget-main -->
			</div>
		</div>
@endsection

@section('footer')
	<h1>footer here</h1>
@endsection

@section('scripts')
	<h1>Scripts here</h1>
@endsection
							

							
