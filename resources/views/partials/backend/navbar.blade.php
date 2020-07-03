<nav class="pcoded-navbar">
	<div class="nav-list">
		<div class="pcoded-inner-navbar main-menu">
			<!-- <div class="pcoded-navigation-label">Navigation</div> -->
			<ul class="pcoded-item pcoded-left-item">
				<li class="{{ Request::path() === 'dashboard' ? 'pcoded-left-item active' : 'pcoded-left-item '}}">
					<a href="{{ route('profile.index') }}" class="waves-effect waves-dark">
						<span class="pcoded-micon">
							<i class="feather icon-home"></i>
						</span>
						<span class="pcoded-mtext">Dashboard</span>
					</a>
				</li>
			 @if (Auth::user()->role_id === 1)
				<li class="{{ Request::path() === 'experts' ? 'pcoded-hasmenu active' : 'pcoded-hasmenu'}}" >
					<a href="javascript:void(0)" class="waves-effect waves-dark">
						<span class="pcoded-micon"><i class="feather icon-users"></i></span>
						<span class="pcoded-mtext">Experts</span>
						<span class="pcoded-badge label label-warning">20</span>
					</a>
					<ul class="pcoded-submenu">
						<li class="">
							<a href="menu-bottom.html" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Active online</span>
							</a>
						</li>
						<li class="">
							<a href="menu-bottom.html" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Psychiatrist</span>
							</a>
						</li>
						<li class="">
							<a href="menu-bottom.html" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Psychologist</span>
							</a>
						</li>
					</ul>
				</li>
			  @endif
				<li class="{{ Request::path() === 'appointments' ? 'pcoded-hasmenu active' : 'pcoded-hasmenu'}}">
					<a href="javascript:void(0)" class="waves-effect waves-dark">
						<span class="pcoded-micon">
							<i class="feather icon-calendar"></i>
						</span>
						<span class="pcoded-mtext">Appointment</span>
					</a>
					<ul class="pcoded-submenu">
						<li class=" ">
							<a href="session-timeout.html" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Make Appointment</span>
							</a>
						</li>
						<li class=" ">
							<a href="session-idle-timeout.html" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Scheduled Appointments</span>
							</a>
						</li>
						<li class=" ">
							<a href="offline.html" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Appointment History</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="{{ Request::path() === 'billing' ? 'pcoded-hasmenu active' : 'pcoded-hasmenu'}}" >
					<a href="javascript:void(0)" class="waves-effect waves-dark">
						<span class="pcoded-micon">
							<i class="feather icon-gitlab"></i>
						</span>
						<span class="pcoded-mtext">Billing</span>
					</a>
					<ul class="pcoded-submenu">
						<li class=" ">
							<a href="session-timeout.html" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Choose Plan</span>
							</a>
						</li>
						<li class=" ">
							<a href="session-idle-timeout.html" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Payment History</span>
							</a>
						</li>
						<li class=" ">
							<a href="offline.html" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Reports</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="{{ Request::path() === 'setting' ? 'pcoded-hasmenu active' : 'pcoded-hasmenu'}}">
					<a href="javascript:void(0)" class="waves-effect waves-dark">
						<span class="pcoded-micon">
							<i class="feather icon-settings"></i>
						</span>
						<span class="pcoded-mtext">Setting</span>
					</a>
					<ul class="pcoded-submenu">
						<li class="">
							<a href="error.html" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Profile</span>
							</a>
						</li>
						<li class="">
							<a href="comming-soon.html" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Authorization</span>
							</a>
						</li>
						<li class="">
							<a href="offline-ui.html" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Access Control List</span>
							</a>
						</li>
						<li class="">
							<a href="offline-ui.html" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Deactivate</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="{{ Request::path() === 'resources' ? 'pcoded-hasmenu active' : 'pcoded-hasmenu'}}">
					<a href="javascript:void(0)" class="waves-effect waves-dark">
						<span class="pcoded-micon">
							<i class="feather icon-layers"></i>
						</span>
						<span class="pcoded-mtext">Resources</span>
					</a>
					<ul class="pcoded-submenu">
						<li class="">
							<a href="widget-statistic.html" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Contact</span>
							</a>
						</li>
						<li class="">
							<a href="widget-data.html" class="waves-effect waves-dark">
								<span class="pcoded-mtext">FAQs</span>
							</a>
						</li>
						<li class="">
							<a href="widget-data.html" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Help</span>
							</a>
						</li>
						<li class="">
							<a href="widget-chart.html" class="waves-effect waves-dark">
								<span class="pcoded-mtext">Data Management Policy</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="{{ url('/logout')}}" class="waves-effect ">
						<span class="pcoded-micon">
							<i class="feather icon-power"></i>
						</span>
						<span class="pcoded-mtext">Logout</span>
					</a>
				</li>
		</ul>
	</div>
</div>
</nav>