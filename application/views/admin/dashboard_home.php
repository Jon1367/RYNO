<style type="text/css">
	.page-container .main-content{
		background-color: #f1f1f1 !important;

	}
</style>
	<div class="main-content">
				
		<div class="row">
			<!-- Profile Info and Notifications -->
			<div class="col-md-6 col-sm-8 clearfix">
		
				<ul class="user-info pull-left pull-none-xsm">


		
					<!-- Profile Info -->
					<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo base_url() ?>assets/images/default.png" alt="" class="img-circle" width="44" />
							<i style="font-size:16px;"> Welcome , </i>
							<b style="font-size:14px;"> <?php echo $username; ?></b>
						</a>
		
						<ul class="dropdown-menu">
		
							<!-- Reverse Caret -->
							<li class="caret"></li>
		
							<!-- Profile sub-links -->
							<li>
								<a href="extra-timeline.html">
									<i class="entypo-user"></i>
									Edit Profile
								</a>
							</li>
		
							<li>
								<a href="mailbox.html">
									<i class="entypo-mail"></i>
									Inbox
								</a>
							</li>
		
							<li>
								<a href="extra-calendar.html">
									<i class="entypo-calendar"></i>
									Calendar
								</a>
							</li>
		
							<li>
								<a href="#">
									<i class="entypo-clipboard"></i>
									Tasks
								</a>
							</li>
						</ul>
					</li>
		
				</ul>
				
				<ul class="user-info pull-left pull-right-xs pull-none-xsm">
		
					<!-- Raw Notifications -->
					<li class="notifications dropdown">
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="entypo-attention"></i>
							<span class="badge badge-info">6</span>
						</a>
		
						<ul class="dropdown-menu">
							<li class="top">
								<p class="small">
									<a href="#" class="pull-right">Mark all Read</a>
									You have <strong>3</strong> new notifications.
								</p>
							</li>
							
							<li>
								<ul class="dropdown-menu-list scroller">
									<li class="unread notification-success">
										<a href="#">
											<i class="entypo-user-add pull-right"></i>
											
											<span class="line">
												<strong>New user registered</strong>
											</span>
											
											<span class="line small">
												30 seconds ago
											</span>
										</a>
									</li>
									
									<li class="unread notification-secondary">
										<a href="#">
											<i class="entypo-heart pull-right"></i>
											
											<span class="line">
												<strong>Someone special liked this</strong>
											</span>
											
											<span class="line small">
												2 minutes ago
											</span>
										</a>
									</li>
									
									<li class="notification-primary">
										<a href="#">
											<i class="entypo-user pull-right"></i>
											
											<span class="line">
												<strong>Privacy settings have been changed</strong>
											</span>
											
											<span class="line small">
												3 hours ago
											</span>
										</a>
									</li>
									
									<li class="notification-danger">
										<a href="#">
											<i class="entypo-cancel-circled pull-right"></i>
											
											<span class="line">
												John cancelled the event
											</span>
											
											<span class="line small">
												9 hours ago
											</span>
										</a>
									</li>
									
									<li class="notification-info">
										<a href="#">
											<i class="entypo-info pull-right"></i>
											
											<span class="line">
												The server is status is stable
											</span>
											
											<span class="line small">
												yesterday at 10:30am
											</span>
										</a>
									</li>
									
									<li class="notification-warning">
										<a href="#">
											<i class="entypo-rss pull-right"></i>
											
											<span class="line">
												New comments waiting approval
											</span>
											
											<span class="line small">
												last week
											</span>
										</a>
									</li>
								</ul>
							</li>
							
							<li class="external">
								<a href="#">View all notifications</a>
							</li>
						</ul>
		
					</li>
		
					<!-- Message Notifications -->
					<li class="notifications dropdown">
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="entypo-mail"></i>
							<span class="badge badge-secondary">10</span>
						</a>
		
						<ul class="dropdown-menu">
							<li>
								<form class="top-dropdown-search">
									
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Search anything..." name="s" />
									</div>
									
								</form>
								
								<ul class="dropdown-menu-list scroller">
									<li class="active">
										<a href="#">
											<span class="image pull-right">
												<img src="assets/images/thumb-1@2x.png" width="44" alt="" class="img-circle" />
											</span>
											
											<span class="line">
												<strong>Luc Chartier</strong>
												- yesterday
											</span>
											
											<span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
										</a>
									</li>
									
									<li class="active">
										<a href="#">
											<span class="image pull-right">
												<img src="assets/images/thumb-2@2x.png" width="44" alt="" class="img-circle" />
											</span>
											
											<span class="line">
												<strong>Salma Nyberg</strong>
												- 2 days ago
											</span>
											
											<span class="line desc small">
												Oh he decisively impression attachment friendship so if everything. 
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="image pull-right">
												<img src="assets/images/thumb-3@2x.png" width="44" alt="" class="img-circle" />
											</span>
											
											<span class="line">
												Hayden Cartwright
												- a week ago
											</span>
											
											<span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="image pull-right">
												<img src="assets/images/thumb-4@2x.png" width="44" alt="" class="img-circle" />
											</span>
											
											<span class="line">
												Sandra Eberhardt
												- 16 days ago
											</span>
											
											<span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
										</a>
									</li>
								</ul>
							</li>
							
							<li class="external">
								<a href="mailbox.html">All Messages</a>
							</li>
						</ul>
		
					</li>
		
					<!-- Task Notifications -->
					<li class="notifications dropdown">
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="entypo-list"></i>
							<span class="badge badge-warning">1</span>
						</a>
		
						<ul class="dropdown-menu">
							<li class="top">
								<p>You have 6 pending tasks</p>
							</li>
							
							<li>
								<ul class="dropdown-menu-list scroller">
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">Procurement</span>
												<span class="percent">27%</span>
											</span>
										
											<span class="progress">
												<span style="width: 27%;" class="progress-bar progress-bar-success">
													<span class="sr-only">27% Complete</span>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">App Development</span>
												<span class="percent">83%</span>
											</span>
											
											<span class="progress progress-striped">
												<span style="width: 83%;" class="progress-bar progress-bar-danger">
													<span class="sr-only">83% Complete</span>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">HTML Slicing</span>
												<span class="percent">91%</span>
											</span>
											
											<span class="progress">
												<span style="width: 91%;" class="progress-bar progress-bar-success">
													<span class="sr-only">91% Complete</span>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">Database Repair</span>
												<span class="percent">12%</span>
											</span>
											
											<span class="progress progress-striped">
												<span style="width: 12%;" class="progress-bar progress-bar-warning">
													<span class="sr-only">12% Complete</span>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">Backup Create Progress</span>
												<span class="percent">54%</span>
											</span>
											
											<span class="progress progress-striped">
												<span style="width: 54%;" class="progress-bar progress-bar-info">
													<span class="sr-only">54% Complete</span>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">Upgrade Progress</span>
												<span class="percent">17%</span>
											</span>
											
											<span class="progress progress-striped">
												<span style="width: 17%;" class="progress-bar progress-bar-important">
													<span class="sr-only">17% Complete</span>
												</span>
											</span>
										</a>
									</li>
								</ul>
							</li>
							
							<li class="external">
								<a href="#">See all tasks</a>
							</li>
						</ul>
		
					</li>
		
				</ul>
		
			</div>
		
		
			<!-- Raw Links -->
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
				<ul class="list-inline links-list pull-right">
		
					<!-- Language Selector -->
					<li class="dropdown language-selector">
		
						Language: &nbsp;
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
							<img src="assets/images/flags/flag-uk.png" width="16" height="16" />
						</a>
		
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-de.png" width="16" height="16" />
									<span>Deutsch</span>
								</a>
							</li>
							<li class="active">
								<a href="#">
									<img src="assets/images/flags/flag-uk.png" width="16" height="16" />
									<span>English</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-fr.png" width="16" height="16" />
									<span>François</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-al.png" width="16" height="16" />
									<span>Shqip</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-es.png" width="16" height="16" />
									<span>Español</span>
								</a>
							</li>
						</ul>
		
					</li>
		
					<li class="sep"></li>
		
					
					<li>
						<a href="#" data-toggle="chat" data-collapse-sidebar="1">
							<i class="entypo-chat"></i>
							Chat
		
							<span class="badge badge-success chat-notifications-badge is-hidden">0</span>
						</a>
					</li>
		
					<li class="sep"></li>
		
					<li>
						<a href="extra-login.html">
							Log Out <i class="entypo-logout right"></i>
						</a>
					</li>
				</ul>
		
			</div>
		
		</div>
		
		<hr />
		
		<script type="text/javascript">
		jQuery(document).ready(function($) 
		{
			// Sample Toastr Notification
			setTimeout(function()
			{			
				var opts = {
					"closeButton": true,
					"debug": false,
					"positionClass": rtl() || public_vars.$pageContainer.hasClass('right-sidebar') ? "toast-top-left" : "toast-top-right",
					"toastClass": "black",
					"onclick": null,
					"showDuration": "300",
					"hideDuration": "1000",
					"timeOut": "5000",
					"extendedTimeOut": "1000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				};
		
				toastr.success("You have been awarded with 1 year free subscription. Enjoy it!", "Account Subcription Updated", opts);
			}, 3000);
			
			// Sparkline Charts
			$(".top-apps").sparkline('html', {
			    type: 'line',
			    width: '50px',
			    height: '15px',
			    lineColor: '#ff4e50',
			    fillColor: '',
			    lineWidth: 2,
			    spotColor: '#a9282a',
			    minSpotColor: '#a9282a',
			    maxSpotColor: '#a9282a',
			    highlightSpotColor: '#a9282a',
			    highlightLineColor: '#f4c3c4',
			    spotRadius: 2,
			    drawNormalOnTop: true
			 });
		
			$(".monthly-sales").sparkline([1,5,6,7,10,12,16,11,9,8.9,8.7,7,8,7,6,5.6,5,7,5,4,5,6,7,8,6,7,6,3,2], {
				type: 'bar',
				barColor: '#ff4e50',
				height: '55px',
				width: '100%',
				barWidth: 8,
				barSpacing: 1
			});	
			
			$(".pie-chart").sparkline([2.5,3,2], {
			    type: 'pie',
			    width: '95',
			    height: '95',
			    sliceColors: ['#ff4e50','#db3739','#a9282a']
			});
		    
		    
			$(".daily-visitors").sparkline([1,5,5.5,5.4,5.8,6,8,9,13,12,10,11.5,9,8,5,8,9], {
			    type: 'line',
			    width: '100%',
			    height: '55',
			    lineColor: '#ff4e50',
			    fillColor: '#ffd2d3',
			    lineWidth: 2,
			    spotColor: '#a9282a',
			    minSpotColor: '#a9282a',
			    maxSpotColor: '#a9282a',
			    highlightSpotColor: '#a9282a',
			    highlightLineColor: '#f4c3c4',
			    spotRadius: 2,
			    drawNormalOnTop: true
			 });
		
		
			$(".stock-market").sparkline([1,5,6,7,10,12,16,11,9,8.9,8.7,7,8,7,6,5.6,5,7,5], {
			    type: 'line',
			    width: '100%',
			    height: '55',
			    lineColor: '#ff4e50',
			    fillColor: '',
			    lineWidth: 2,
			    spotColor: '#a9282a',
			    minSpotColor: '#a9282a',
			    maxSpotColor: '#a9282a',
			    highlightSpotColor: '#a9282a',
			    highlightLineColor: '#f4c3c4',
			    spotRadius: 2,
			    drawNormalOnTop: true
			 });
		
			 
			 $("#calendar").fullCalendar({
				header: {
					left: '',
					right: '',
				},
				
				firstDay: 1,
				height: 200,
			});
		});
		
		
		function getRandomInt(min, max) 
		{
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}
		</script>
		
<!-- 		
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="tile-stats tile-white stat-tile">
					<h3>15% more</h3>
					<p>Monthly visitor statistics</p>
					<span class="daily-visitors"></span>
				</div>		
			</div>
		
			<div class="col-md-3 col-sm-6">
				<div class="tile-stats tile-white stat-tile">
					<h3>32 Sales</h3>
					<p>Avg. Sales per day</p>
					<span class="monthly-sales"></span>
				</div>		
			</div>
		
		
			<div class="col-md-3 col-sm-6">
				<div class="tile-stats tile-white stat-tile">
					<h3>-0.0102</h3>
					<p>Stock Market</p>
					<span class="stock-market"></span>
				</div>		
			</div>
		
		
			<div class="col-md-3 col-sm-6">
				<div class="tile-stats tile-white stat-tile">
					<h3>61.5%</h3>
					<p>US Dollar Share</p>
					<span class="pie-chart"></span>
				</div>		
			</div>
		</div>
		 -->
		<br />
		
		<div class="row">
			<div class="col-md-9">
				
				<script type="text/javascript">
					jQuery(document).ready(function($)
					{
						var map = $("#map-2");
						
						map.vectorMap({
							map: 'europe_merc_en',
							zoomMin: '3',
							backgroundColor: '#f4f4f4',
							focusOn: { x: 0.5, y: 0.7, scale: 3 },
						    markers: [
						      {latLng: [50.942, 6.972], name: 'Cologne'},
						      {latLng: [42.6683, 21.164], name: 'Prishtina'},
						      {latLng: [41.3861, 2.173], name: 'Barcelona'},
						    ],
						    markerStyle: {
						      initial: {
						        fill: '#ff4e50',
						        stroke: '#ff4e50',
							    "stroke-width": 6,
							    "stroke-opacity": 0.3,
		    				      }
						    },	
							regionStyle: 
								{
								  initial: {
								    fill: '#e9e9e9',
								    "fill-opacity": 1,
								    stroke: 'none',
								    "stroke-width": 0,
								    "stroke-opacity": 1
								  },
								  hover: {
								    "fill-opacity": 0.8
								  },
								  selected: {
								    fill: 'yellow'
								  },
								  selectedHover: {
								  }
								}					
						});
					});
				</script>
				

				
			</div>
		
		

		</div>
		
		<br />
		
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-primary panel-table">
					<div class="panel-heading">
						<div class="panel-title">
							<h3>Message Board</h3>
							<span>Weekly statistics from AppStore</span>
						</div>
						
						<div class="col-sm-12">
							<?php foreach ($messages as $key => $value) { ?>

								<p><?php echo $value->comments ?></p>
						<?php	} ?>
						</div>

					</div>
					<div class="panel-body">	
						
					</div>
				</div>
				
			</div>

		</div>
		