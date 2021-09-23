<div class="modal fade" id="addbookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
			<div class="widget-header">
				<h4 class="widget-title">Add Book</h4>

				<span class="widget-toolbar">
					<a href="#" data-action="settings">
						<i class="ace-icon fa fa-cog"></i>
					</a>

					<a href="#" data-action="reload">
						<i class="ace-icon fa fa-refresh"></i>
					</a>

					<a href="#" data-action="collapse">
						<i class="ace-icon fa fa-chevron-up"></i>
					</a>

					<a href="#" data-action="close">
						<i class="ace-icon fa fa-times"></i>
					</a>
				</span>
			</div>
		</div>
		<div class="modal-body">
			<div class="widget-body">
				<form class="form-horizontal" role="form" method="post" action="books/store">
				@csrf
				<div class="widget-main">
					<div>
						<label for="form-field-mask-2">
							Module
							<small class="text-warning"></small>
						</label>

						<div class="input-group">
							<span class="input-group-addon">
								<i class="ace-icon fa fa-barcode"></i>
							</span>

							<input class="form-control" type="text" name="module_id">
						</div>
					</div>
					
					<div>
						<label for="form-field-mask-2">
							Title
							<small class="text-warning"></small>
						</label>

						<div class="input-group">
							<span class="input-group-addon">
								<i class="ace-icon fa fa-barcode"></i>
							</span>

							<input class="form-control" type="text" name="title">
						</div>
					</div>
					
					<div>
						<label for="form-field-mask-2">
							Authors
							<small class="text-warning"></small>
						</label>

						<div class="input-group">
							<span class="input-group-addon">
								<i class="ace-icon fa fa-barcode"></i>
							</span>

							<input class="form-control" type="text" name="author" placeholder="seperate authors by semicolon">
						</div>
					</div>
					
					<div>
						<label for="form-field-mask-2">
							Edition
							<small class="text-warning"></small>
						</label>

						<div class="input-group">
							<span class="input-group-addon">
								<i class="ace-icon fa fa-pencil"></i>
							</span>

							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2" name="edition">
						</div>
					</div>
					<div>
						<label for="form-field-mask-2">
							ISBN
							<small class="text-warning"></small>
						</label>

						<div class="input-group">
							<span class="input-group-addon">
								<i class="ace-icon fa fa-list"></i>
							</span>

							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2" name="isbn">
						</div>
					</div>
					<div>
						<label for="form-field-mask-2">
							Publiction year
							<small class="text-warning"></small>
						</label>

						<div class="input-group">
							<span class="input-group-addon">
								<i class="ace-icon fa fa-time"></i>
							</span>
							

							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2" name="year_published">
						</div>
					</div>
					<div>
						<label for="form-field-mask-2">
							URL
							<small class="text-warning"></small>
						</label>

						<div class="input-group">
							<span class="input-group-addon">
								<i class="ace-icon fa fa-time"></i>
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2" name="url">
						</div>
					</div>
					<div>
						<label for="form-field-mask-2">
							Available in 
							<small class="text-warning"></small>
						</label>

						<div class="input-group">
							<span class="input-group-addon">
								<i class="ace-icon fa fa-time"></i>
							</span>
							<input class="form-control input-mask-phone" type="text" id="form-field-mask-2" name="available_in" placeholder="E.g. Catalogue, PDF, URL, etc.">
						</div>
					</div>
				
				
					
					
						<div class="space-2"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
		  <button type="submit" class="btn btn-primary">Add</button>
		</div>
		</form>
	  </div>
	</div>
</div>
