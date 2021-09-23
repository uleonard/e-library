@extends('layouts.admin')

@section('menu')
	<h1>Menu here</h1>
@endsection

@section('content')

	<div class="col-xs-12">
	</div>
	<div class="col-xs-12">
		<div class="clearfix">
			<div class="pull-left tableTools-container">
				<h1 class="grey lighter smaller">
					<span class="blue bigger-125" style="color:#b68c14!important">
						<i class="ace-icon fa fa-book"></i>
						Modules
					</span>
					
				</h1>

			</div>
			
			<div class="pull-right tableTools-container">
				<button class="btn" id="id-btn-dialog2" data-toggle="modal" data-target="#addbookModal">
					<i class="ace-icon fa fa-plus align-top bigger-125"></i>
					Add Module
				</button>

				<button class="btn btn-primary">
					<i class="ace-icon fa fa-upload align-top bigger-125"></i>
					Upload
				</button>

				<button class="btn btn-info">
					Print
					<i class="ace-icon fa fa-print  align-top bigger-125 icon-on-right"></i>
				</button>
			</div>

		</div>
				<div class="table-header">
			Results for "Latest modules"
		</div>
		<div>
			<div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
				<div class="row">
					
				</div>
				
				<table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info">
					<thead>
						<tr role="row">
							<th class="center sorting_disabled" rowspan="1" colspan="1" aria-label="">
								<label class="pos-rel">
									<input type="checkbox" class="ace">
									<span class="lbl"></span>
								</label>
							</th>
							<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">NAME</th>
							<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending">CODE</th>
							<th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">YEAR OFFERED</th>
							<th></th>
						</tr>
					</thead>

					<tbody>
					<?php $counter = 1; ?>
					@foreach($rows as $row)							
						<tr role="row" class="<?php echo $counter++%2==0? "even":"odd"; ?>">
							<td class="center">
								<label class="pos-rel">
									<input type="checkbox" class="ace">
									<span class="lbl"></span>
								</label>
							</td>

							<td>
								<a href="{{$row->id}}">{{$row->name}}</a>
							</td>
							<td>{{$row->code}}</td>
							<td class="hidden-480">{{$row->year_offered}}</td>
							<td>{{$row->isbn}}</td>

							<td class="hidden-480">{{$row->author}}	</td>
                            <td>
								<div class="hidden-sm hidden-xs action-buttons">
									<a class="blue" href="#" data-toggle="modal" data-target="#addpastpaper{{$row->id}}" title="Upload past paper">
										<i class="ace-icon fa fa-cloud-upload bigger-130"></i>
									</a>

									<a class="green" href="#">
										<i class="ace-icon fa fa-pencil bigger-130"></i>
									</a>

									<a class="red" href="#">
										<i class="ace-icon fa fa-trash-o bigger-130"></i>
									</a>
								</div>

								
							</td>
						</tr>


                        <!-- THIS IS THE MODAL FORM-->
                        <div class="modal fade" id="addpastpaper{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top:30%">
                                <div class="modal-dialog" role="document">
                                    
                                    <div class="modal-content">
                                        <div class="col-xs-12 col-sm-12" style="padding:0px">
                                            <div class="widget-box" style="margin:0px;border:none">
                                                <div class="widget-header">
                                                    <h4 class="widget-title"><i class="ace-icon fa fa-cloud-upload"></i>Add notes</h4>
                                        
                                                    <div class="widget-toolbar">
                                                        <a href="#" data-action="collapse">
                                                            <i class="ace-icon fa fa-chevron-up"></i>
                                                        </a>
                                        
                                                        <a href="#" data-dismiss="modal">
                                                            <i class="ace-icon fa fa-times"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                        
                                                <div class="widget-body">
                                                    <div class="widget-main">
                                                        <form method="post" action = "{{route('pastpapers')}}"  enctype="multipart/form-data" >
                                                            @csrf
                                                            <div style="margin-bottom: 4px;">
                                                                    <input type="text" class="form-control" placeholder="year" name="year"  style="width:100%"/>
                                                            
                                                            </div>
                                                            <div style="margin-bottom: 4px;">
                                                                    <input type="text" class="form-control" placeholder="semester" name="semester"  style="width:100%"/>
                                                            
                                                            </div>
                                                            <div style="margin-bottom: 4px;">
                                                                    <input type="hidden" name="module_id"  value="{{$row->id}}" style="width:100%"/>
                                                            
                                                            </div>
                                                            
                                                            <div style="margin-bottom: 4px;">
                                                                <input type="file" class="form-control" id="form-field-8" name="attachment" placeholder="Default Text" style="width:100%"/>
                                                            </div>


                                                            <button type="submit" class="btn btn-white btn-default btn-round">
                                                                <i class="ace-icon fa fa-save red2"></i>
                                                                Save
                                                            </button>

                                                           

                                                        </form>
                                                        
                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                        </div>


                        <!-- END OF MODAL FORM -->
						
					@endforeach
					</tbody>
				</table>
				
				<div class="row">
					<!---=========here ==========-->
					
				</div>
			</div>
		</div>
	</div>
	
	<a href="#" id="id-btn-dialog2" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addbookModal">Add Module</a>
	
	@include('books.partials._add-book-modal')	
@endsection		
