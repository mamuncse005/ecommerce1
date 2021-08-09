<!--sidebar-wrapper-->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div class="">
					<img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon-2" alt="" />
				</div>
				<div>
					<h4 class="logo-text">tMart</h4>
				</div>
				<a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
				</a>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li class="{{ Request::path() == 'dashboard' ? 'mm-active' : '' }}">
					<a href="{{ url('/dashboard') }}">
						<div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				<li class="{{ request()->is('create-pcategory') ? 'mm-active':'' }}">
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-11"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Products</div>
					</a>
					<ul class="{{ request()->is('create-pcategory') ? 'mm-show mm-collapse':'' }}">
						<li class="{{ request()->is('create-pcategory') ? 'mm-active':'' }}"> <a href="{{ url('/product-category') }}"><i class="bx bx-right-arrow-alt"></i>Category</a></li>
						<li> <a href="{{ url('/product-brand') }}"><i class="bx bx-right-arrow-alt"></i>Brand</a></li>
						<li> <a href="{{ url('/products') }}"><i class="bx bx-right-arrow-alt"></i>Product</a></li>
					</ul>
				</li>
				<li>
<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
						<div class="parent-icon"><i class="bx bx-log-out"></i>
						</div>
						<div class="menu-title">Logout</div>
					</a>
				</li>
				
				<li>
					<a href="contact-list.html">
						<div class="parent-icon icon-color-5"><i class="bx bx-group"></i>
						</div>
						<div class="menu-title">Contatcs</div>
					</a>
				</li>
				<li>
					<a href="https://codervent.com/syndash/documentation/index.html" target="_blank">
						<div class="parent-icon icon-color-12"><i class="bx bx-folder"></i>
						</div>
						<div class="menu-title">Documentation</div>
					</a>
				</li>
				<li>
					<a href="https://themeforest.net/user/codervent" target="_blank">
						<div class="parent-icon"><i class="bx bx-support"></i>
						</div>
						<div class="menu-title">Support</div>
					</a>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar-wrapper-->
		