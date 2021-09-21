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
						Books
					</span>
					
				</h1>

			</div>
			
			<div class="pull-right tableTools-container">
				<button class="btn" id="id-btn-dialog2" data-toggle="modal" data-target="#addbookModal">
					<i class="ace-icon fa fa-plus align-top bigger-125"></i>
					Add book
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
			Results for "Latest Registered books"
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
							<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">TITLE</th>
							<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending">EDITION</th>
							<th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">PUBLICATION YEAR</th>
							<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="
								Update: activate to sort column ascending"><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
								ISBN
							</th>
							<th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">AUTHOR</th>
							<th class="sorting_disabled" rowspan="1" colspan="1" aria-label=""></th>
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
								<a href="{{$row->url}}">{{$row->title}}</a>
							</td>
							<td>{{$row->edition}}</td>
							<td class="hidden-480">{{$row->year_published}}</td>
							<td>{{$row->isbn}}</td>

							<td class="hidden-480">{{$row->author}}	<td>
								<div class="hidden-sm hidden-xs action-buttons">
									<a class="blue" href="#">
										<i class="ace-icon fa fa-search-plus bigger-130"></i>
									</a>

									<a class="green" href="#">
										<i class="ace-icon fa fa-pencil bigger-130"></i>
									</a>

									<a class="red" href="#">
										<i class="ace-icon fa fa-trash-o bigger-130"></i>
									</a>
								</div>

								<div class="hidden-md hidden-lg">
									<div class="inline pos-rel">
										<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
											<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
										</button>

										<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
											<li>
												<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
													<span class="blue">
														<i class="ace-icon fa fa-search-plus bigger-120"></i>
													</span>
												</a>
											</li>

											<li>
												<a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
													<span class="green">
														<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
													</span>
												</a>
											</li>

											<li>
												<a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
													<span class="red">
														<i class="ace-icon fa fa-trash-o bigger-120"></i>
													</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</td>
						</tr>
						
					@endforeach
					</tbody>
				</table>
				
				<div class="row">
					<!---=========here ==========-->
					
				</div>
			</div>
		</div>
	</div>
	
	<a href="#" id="id-btn-dialog2" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addbookModal">Add book</a>
	
	@include('books.partials._add-book-modal')	
@endsection		



@section('footer')
	<h1>footer here</h1>
@endsection

@section('scripts')
	<h1>Scripts here</h1>
@endsection