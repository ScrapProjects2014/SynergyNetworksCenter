					<div id="userTabContent" class="tab-content">
							<div class="tab-pane fade in active" id="overview">
							
							 <div class="row">
									<div class="col-lg-2 col-md-3">
											<?php echo Asset::img('snworks-logo.svg', array('class="img-responsive img-profile"')); ?>
											<div class="list-group">
													<a href="#" class="list-group-item active">Overview</a>
													<a href="#" class="list-group-item">Messages<span class="badge green">4</span></a>
													<a href="#" class="list-group-item">Alerts<span class="badge orange">9</span></a>
													<a href="#" class="list-group-item">Tasks<span class="badge blue">10</span></a>
											</div>
									</div>
									<div class="col-lg-7 col-md-5">
										<h1><?php echo $user->username; ?></h1>
										<p>Notes Section will be here.</p>
										<ul class="list-inline">
												<li><i class="fa fa-map-marker fa-muted"></i> Bayville, FL</li>
												<li><i class="fa fa-user fa-muted"></i><?php echo $user->group; ?></li>
												<li><i class="fa fa-group fa-muted"></i> Sales, Marketing, Management</li>
												<li><i class="fa fa-trophy fa-muted"></i> Top Seller</li>
												<li><i class="fa fa-calendar fa-muted"></i> Member Since: 5/13/11</li>
										</ul>
										<h3>Recent Projects</h3>
											<div class="table-responsive">
													<table class="table table-hover table-bordered table-striped">
															<thead>
																	<tr>
																			<th>Status</th>
																			<th>Client</th>
																			<th>Job</th>
																			<th>Link</th>
																	</tr>
															</thead>
															<tbody>
																	<tr>
																			<td>25%</td>
																			<td>Admin Creation</td>
																			<td>Development</td>
																			<td><a class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pending</a>
																			</td>
																	</tr>
																	<tr>
																			<td>1/31/14</td>
																			<td>6:02 PM</td>
																			<td>$5.32</td>
																			<td><a class="btn btn-xs btn-orange disabled"><i class="fa fa-clock-o"></i> Pending</a>
																			</td>
																	</tr>											
															</tbody>
													</table>
											</div>
									</div>
									<div class="col-lg-3 col-md-4">
										<h3>Contact Details</h3>
										<p><i class="fa fa-phone fa-muted fa-fw"></i> 1+(234) 555-2039</p>
										<p><i class="fa fa-building-o fa-muted fa-fw"></i> 8516 Market St.
												<br>Bayville, FL 55555</p>
										<p><i class="fa fa-envelope-o fa-muted fa-fw"></i>  <?php echo $user->email; ?>
										</p>
										<ul class="list-inline">
												<li><a class="facebook-link" href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
												</li>
												<li><a class="twitter-link" href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
												</li>
												<li><a class="linkedin-link" href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
												</li>
												<li><a class="google-plus-link" href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
												</li>
										</ul>
								</div>
						</div>					
						</div>