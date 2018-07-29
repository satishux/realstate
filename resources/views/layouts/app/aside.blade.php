<div 
		id="m_ver_menu" 
		class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " 
		m-menu-vertical="1"
		 m-menu-scrollable="0" m-menu-dropdown-timeout="500"  
		>
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
								<a  href="index.html" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-line-graph"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">
												My Profile
											</span>
											<span class="m-menu__link-badge">
												<span class="m-badge m-badge--danger">
													2
												</span>
											</span>
										</span>
									</span>
								</a>
							</li>
							<li class="m-menu__section ">
								<h4 class="m-menu__section-text">
									Placement Details
								</h4>
								<i class="m-menu__section-icon flaticon-more-v3"></i>
							</li>

							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
									<a  href="javascript:;" class="m-menu__link m-menu__toggle">
										<i class="m-menu__link-icon flaticon-layers"></i>
										<span class="m-menu__link-text">
											Placement Details
										</span>
										<i class="m-menu__ver-arrow la la-angle-right"></i>
									</a>
									<div class="m-menu__submenu ">
										<span class="m-menu__arrow"></span>
										<ul class="m-menu__subnav">
											<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
												<span class="m-menu__link">
													<span class="m-menu__link-text">
														Placement Details
													</span>
												</span>
											</li>

											@foreach($placement_menus as $menu)
											<li class="m-menu__item " aria-haspopup="true" >
												<a  href="{{ route($menu['link']) }}" class="m-menu__link ">
													<i class="m-menu__link-bullet m-menu__link-bullet--dot">
														<span></span>
													</i>
													<span class="m-menu__link-text">
														{{ $menu['title'] }}
													</span>
												</a>
											</li>
											@endforeach
										</ul>
									</div>
								</li>


							<li class="m-menu__section ">
								<h4 class="m-menu__section-text">
									My Account
								</h4>
								<i class="m-menu__section-icon flaticon-more-v3"></i>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
								<a  href="javascript:;" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-layers"></i>
									<span class="m-menu__link-text">
										My Account
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu ">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
											<span class="m-menu__link">
												<span class="m-menu__link-text">
													My Account
												</span>
											</span>
                                        </li>
                                        
                                        @foreach($account_menus as $menu )
                                            <li class="m-menu__item " aria-haspopup="true" >
                                                <a  href="{{ route($menu['link']) }}" class="m-menu__link ">
                                                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                        <span></span>
                                                    </i>
                                                    <span class="m-menu__link-text">
                                                        {{ $menu['title'] }}
                                                    </span>
                                                </a>
                                            </li>
                                        @endforeach
										
									</ul>
								</div>
							</li>
							
							
						</ul>
					</div>