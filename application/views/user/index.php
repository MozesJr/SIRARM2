<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>User Manajemen</small></h2>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addRoleModal" style="float: right;">
					Add Users
				</button>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<!-- Show Success Message -->
				<?php if ($this->session->flashdata('success')) : ?>
					<div id="successAlert" class="alert alert-success mt-3">
						<?= $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>
				<table id="datatable-buttons" class="table table-striped table-bordered">
					<tr>
						<th>ID</th>
						<th>Username</th>
						<th>Real Name</th>
						<th>Role</th>
						<th>Action</th>
					</tr>
					<?php $i = 1 ?>
					<?php foreach ($users as $user) : ?>
						<tr>
							<td><?= $i++; ?></td>
							<td><?= $user->username; ?></td>
							<td><?= $user->real_name; ?></td>
							<td><?= $user->role_name; ?></td>
							<td>
								<button type="button" class="btn btn-warning mr-2" data-toggle="modal" data-target="#editRoleModal<?= $user->id ?>">Edit</button>
								<!-- Edit Role Modal -->
								<div class="modal fade" id="editRoleModal<?= $user->id ?>" tabindex="-1" role="dialog" aria-labelledby="editRoleModalLabel" aria-hidden="true">
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
														<form action="<?= base_url('user/edit/' . $user->id); ?>" method="post">
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label" for="username">Username</label>
																		<input type="text" id="username" name="username" class="form-control" data-validate-length-range="1" data-validate-words="1" required="required" value="<?= $user->username; ?>">
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label" for="password">Password</label>
																		<input type="password" id="password" name="password" class="form-control" data-validate-length-range="1" data-validate-words="1" required="required">
																	</div>
																</div>


																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label" for="real_name">Nama Lengkap</label>
																		<input type="text" id="real_name" name="real_name" class="form-control" data-validate-length-range="1" data-validate-words="1" required="required" value="<?= $user->real_name; ?>">
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label" for="role">Role</label>
																		<select name="role" id="role" class="form-control">
																			<?php foreach ($roles as $role) { ?>
																				<option value="<?= $role->id; ?>"><?= $role->role_name; ?></option>
																			<?php } ?>
																		</select>
																	</div>
																</div>
															</div>
															<div class="col-md-12">
																<div class="form-group">
																	<button type="submit" class="btn btn-primary" style="float:right">Update Data</button>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<a href="<?= base_url('user/delete/' . $user->id); ?>" class="btn btn-danger">Delete</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>

			</div>
		</div>
	</div>

	<div class="modal fade" id="addRoleModal" tabindex="-1" role="dialog" aria-labelledby="addRoleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="addRoleModalLabel">Add Users</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="card">
						<div class="card-body">
							<form action="<?= base_url('user/add'); ?>" method="post">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label" for="username">Username</label>

											<input type="text" id="username" name="username" class="form-control" data-validate-length-range="1" data-validate-words="1" required="required">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label" for="password">Password</label>
											<input type="password" id="password" name="password" class="form-control" data-validate-length-range="1" data-validate-words="1" required="required">
										</div>
									</div>


									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label" for="real_name">Nama Lengkap</label>
											<input type="text" id="real_name" name="real_name" class="form-control" data-validate-length-range="1" data-validate-words="1" required="required">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label" for="role">Role</label>
											<select name="role" id="role" class="form-control">
												<?php foreach ($roles as $role) { ?>
													<option value="<?= $role->id; ?>"><?= $role->role_name; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<button type="submit" class="btn btn-primary" style="float:right">Tambah Data</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>