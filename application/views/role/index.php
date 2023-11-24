<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Role Manajemen</small></h2>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addRoleModal" style="float: right;">
					Add Role
				</button>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<!-- Show Success Message -->
				<!-- Show Success Message -->
				<?php if ($this->session->flashdata('success')) : ?>
					<div id="successAlert" class="alert alert-success mt-3">
						<?= $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>
				<table id="datatable-buttons" class="table table-striped table-bordered">
					<tr>
						<th>ID</th>
						<th>Role Name</th>
						<th>Created At</th>
						<th>Updated At</th>
						<th>Action</th>
					</tr>
					<?php $i = 1 ?>
					<?php foreach ($roles as $role) : ?>
						<tr>
							<td><?= $i++; ?></td>
							<td><?= $role->role_name; ?></td>
							<td><?= $role->created_at; ?></td>
							<td><?= $role->updated_at; ?></td>
							<td>
								<button type="button" class="btn btn-warning mr-2" data-toggle="modal" data-target="#editRoleModal<?= $role->id ?>">Edit</button>
								<!-- Edit Role Modal -->
								<div class="modal fade" id="editRoleModal<?= $role->id ?>" tabindex="-1" role="dialog" aria-labelledby="editRoleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="editRoleModalLabel">Edit Role</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="card">
													<div class="card-body">
														<form action="<?= base_url('role/edit/' . $role->id); ?>" method="post">
															<div class="form-group">
																<label class="control-label col-md-3 col-sm-3 col-xs-12" for="role_name">Roles</label>
																<div class="col-md-6 col-sm-6 col-xs-12">
																	<input type="text" id="role_name" name="role_name" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" required="required" value="<?= $role->role_name; ?>">
																</div>
															</div>
															<div class="form-group">
																<button type="submit" class="btn btn-primary" style="float:right">Update Data</button>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<a href="<?= base_url('role/delete/' . $role->id); ?>" class="btn btn-danger">Delete</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>

			</div>
		</div>
	</div>
	<!-- Add Role Modal -->
	<div class="modal fade" id="addRoleModal" tabindex="-1" role="dialog" aria-labelledby="addRoleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="addRoleModalLabel">Add Role</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="card">
						<div class="card-body">
							<form action="<?= base_url('role/add'); ?>" method="post">
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="role_name">Roles</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="text" id="role_name" name="role_name" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" required="required">
									</div>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary" style="float:right">Tambah Data</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>