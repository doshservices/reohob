<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="Dashto - Powerfull Admin Template" />
    <meta
      name="keywords"
      content="admin dashboard, admin panel, dashboard, responsive dashboard, admin template, themeforest, dashboard template, css3, html5"
    />
    <title>Reohob - Admin Panel</title>
    <link href="/images/favicon.png" rel="icon" />
    <link
      rel="apple-touch-icon"
      href="/img/logo/touch-icon-iphone.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="152x152"
      href="/img/logo/touch-icon-ipad.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="/img/logo/touch-icon-iphone-retina.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="167x167"
      href="/img/logo/touch-icon-ipad-retina.png"
    />
    <link href="/css/vendor.css" rel="stylesheet" type="text/css" />
    <link href="/css/admin.css" rel="stylesheet" type="text/css" />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    {{-- <div id="loader">
      <div id="loader-content">
        <div id="loader-circle"></div>
        <span>Reohob Admin</span>
      </div>
    </div> --}}
    <div id="wrapper">
      <header id="header">
        <a href="javascript:void(0);" id="hamburger"
          ><i class="icon ion-navicon"></i
        ></a>
        <form action="#" class="search-form">
          <div class="input-group">
            <button type="button" class="btn">
              <i class="icon ion-ios-search-strong"></i>
            </button>
            <div id="search-input">
              <input
                type="text"
                placeholder="Type & hit enter"
                class="form-control"
              />
              <a href="javascript:void(0);" class="icon ion-close-round"></a>
            </div>
          </div>
        </form>
        {{-- <ul class="navbar ml-auto">
          <li class="dropdown">
            <a
              href="javascript:void(0);"
              id="lang"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
              ><span class="language">English</span></a
            >
            <ul
              class="dropdown-menu dropdown-menu-right"
              aria-labelledby="lang"
            >
              <li class="dropdown-item"><a href="#">Chinese</a></li>
              <li class="dropdown-item"><a href="#">French</a></li>
              <li class="dropdown-item"><a href="#">German</a></li>
              <li class="dropdown-item"><a href="#">Japanese</a></li>
              <li class="dropdown-item"><a href="#">Russian</a></li>
              <li class="dropdown-item"><a href="#">Urdu</a></li>
            </ul>
          </li>
          <li class="dropdown dropdown-lg">
            <a
              href="javascript:void(0);"
              id="notifications"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
              ><i class="icon ion-ios-bell"></i> <span class="notify"></span>
              <span></span
            ></a>
            <div
              class="dropdown-menu dropdown-menu-right"
              aria-labelledby="notifications"
            >
              <div class="dropdown-header">
                <h6 class="h6">Notifications</h6>
              </div>
              <ul class="dropdown-body msg-list scrollbar">
                <li>
                  <a href="#" class="msg-list-item"
                    ><span class="thumb-circle bg-info"
                      ><i class="icon ion-email"></i
                    ></span>
                    <div class="desc">
                      <span class="msg-title"
                        ><span class="text-truncate">New task available</span
                        ><span class="time">10:22 am</span></span
                      >
                      <p class="text-truncate">
                        Sed ut perspiciatis unde omnis iste natus error
                      </p>
                    </div></a
                  >
                </li>
                <li>
                  <a href="#" class="msg-list-item"
                    ><span class="thumb-circle bg-red"
                      ><i class="icon ion-android-warning"></i
                    ></span>
                    <div class="desc">
                      <span class="msg-title"
                        ><span class="text-truncate">Server space is full</span
                        ><span class="time">03:41 pm</span></span
                      >
                      <p class="text-truncate">
                        Sed ut perspiciatis unde omnis iste natus error
                      </p>
                    </div></a
                  >
                </li>
                <li>
                  <a href="#" class="msg-list-item"
                    ><span class="thumb-circle bg-green"
                      ><i class="icon ion-document-text"></i
                    ></span>
                    <div class="desc">
                      <span class="msg-title"
                        ><span class="text-truncate"
                          >Your details completed</span
                        ><span class="time">11:01 am</span></span
                      >
                      <p class="text-truncate">
                        Sed ut perspiciatis unde omnis iste natus error
                      </p>
                    </div></a
                  >
                </li>
                <li>
                  <a href="#" class="msg-list-item"
                    ><span class="thumb-circle bg-yellow"
                      ><i class="icon ion-help-circled"></i
                    ></span>
                    <div class="desc">
                      <span class="msg-title"
                        ><span class="text-truncate">Please help me</span
                        ><span class="time">05:34 pm</span></span
                      >
                      <p class="text-truncate">
                        Sed ut perspiciatis unde omnis iste natus error
                      </p>
                    </div></a
                  >
                </li>
              </ul>
              <div class="dropdown-footer">
                <a href="#">See all notifications</a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-lg">
            <a
              href="javascript:void(0);"
              id="emails"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
              ><i class="icon ion-android-chat"></i>
              <span class="notify"></span> <span></span
            ></a>
            <div
              class="dropdown-menu dropdown-menu-right"
              aria-labelledby="emails"
            >
              <div class="dropdown-header">
                <h6 class="h6">You have 4 messages</h6>
              </div>
              <ul class="dropdown-body msg-list scrollbar">
                <li>
                  <a href="#" class="msg-list-item"
                    ><span class="thumb-circle"
                      ><img src="/img/user/thumb/1.jpg" alt="user"
                    /></span>
                    <div class="desc">
                      <span class="msg-title"
                        ><span class="text-truncate">Hey! where are you</span
                        ><span class="time">10:22 am</span></span
                      >
                      <p class="text-truncate">
                        Sed ut perspiciatis unde omnis iste natus error
                      </p>
                    </div></a
                  >
                </li>
                <li>
                  <a href="#" class="msg-list-item"
                    ><span class="thumb-circle"
                      ><img src="/img/user/thumb/2.jpg" alt="user"
                    /></span>
                    <div class="desc">
                      <span class="msg-title"
                        ><span class="text-truncate">Nice profile</span
                        ><span class="time">03:41 pm</span></span
                      >
                      <p class="text-truncate">
                        Sed ut perspiciatis unde omnis iste natus error
                      </p>
                    </div></a
                  >
                </li>
                <li>
                  <a href="#" class="msg-list-item"
                    ><span class="thumb-circle"
                      ><img src="/img/user/thumb/3.jpg" alt="user"
                    /></span>
                    <div class="desc">
                      <span class="msg-title"
                        ><span class="text-truncate"
                          >Hi, please complete your task</span
                        ><span class="time">11:01 am</span></span
                      >
                      <p class="text-truncate">
                        Sed ut perspiciatis unde omnis iste natus error
                      </p>
                    </div></a
                  >
                </li>
                <li>
                  <a href="#" class="msg-list-item"
                    ><span class="thumb-circle"
                      ><img src="/img/user/thumb/4.jpg" alt="user"
                    /></span>
                    <div class="desc">
                      <span class="msg-title"
                        ><span class="text-truncate">Like your work</span
                        ><span class="time">05:34 pm</span></span
                      >
                      <p class="text-truncate">
                        Sed ut perspiciatis unde omnis iste natus error
                      </p>
                    </div></a
                  >
                </li>
                <li>
                  <a href="#" class="msg-list-item"
                    ><span class="thumb-circle"
                      ><img src="/img/user/thumb/5.jpg" alt="user"
                    /></span>
                    <div class="desc">
                      <span class="msg-title"
                        ><span class="text-truncate">Let go for meeting</span
                        ><span class="time">01:12 pm</span></span
                      >
                      <p class="text-truncate">
                        Sed ut perspiciatis unde omnis iste natus error
                      </p>
                    </div></a
                  >
                </li>
              </ul>
              <div class="dropdown-footer">
                <a href="#">See all messages</a>
              </div>
            </div>
          </li>
          <li>
            <a href="javascript:void(0);" id="themeSettings"
              ><i class="icon ion-android-settings"></i
            ></a>
          </li>
        </ul> --}}
      </header>
      <aside id="sidebar">
        <a href="/admin" class="navbar-brand"
          ><img
            src="/images/favicon.png"
            id="dark-logo"
            alt="logo"
          />
          <img
            src="/images/favicon.png"
            id="white-logo"
            alt="logo"
          />
          <span>Reohob</span></a
        >
        <div class="user-thumb dropdown">
          <a
            href="javascript:void(0)"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
            ><img src="https://thumbs.dreamstime.com/b/default-avatar-profile-vector-user-profile-default-avatar-profile-vector-user-profile-profile-179376714.jpg" alt="user"
          /></a>
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-item">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#passwordModal">Change Password</a>
              </li>
              
              <li class="dropdown-divider"></li>
              <li class="dropdown-item">
                <a href="/admin/logout"> <i class="icon font-16 ion-log-out"></i> Logout</a>
              </li>
            </ul>
          </div>
          <div class="user-desc">
            <a href="javascript:void(0);" class="user-name">{{Auth::guard('admin')->user()->first_name ?? 'Admin'}} {{Auth::guard('admin')->user()->last_name ?? 'Admin'}}</a>
            <a href="/admin/logout"
              class="btn btn-border btn-border-blue btn-sm"
              >Logout</a
            >
          </div>
        </div>
        <nav id="sidebar-nav">
          <ul>
            <li class="nav-head"><span class="head">Navigation</span></li>
            <li>
              <a href="javascript:void(0);" class="sub-nav"
                ><i class="icon ion-speedometer"></i> <span>Dashborad</span>
                <span class="badge badge-pill bg-primary">Main</span></a
              >
              <ul class="sub-nav-item">
                <!--<li><a href="/admin/bookings">Bookings</a></li>-->
                <li><a href="/admin/trainees">Traning Programming</a></li>
                <li><a href="/admin/quote-requests">Requested Quote</a></li>
                <li><a href="/admin/administrators">Admins</a></li>
              </ul>
            </li>
            
            <li class="active">
              <a href="javascript:void(0);" class="sub-nav"
                ><i class="icon ion-bag"></i> <span>Ecommerce</span>
                <span class="badge badge-pill bg-purple">Shop</span></a
              >
              <ul class="sub-nav-item">
                <li><a href="/admin/products">Products</a></li>
                <li><a href="/admin/categories">Categories</a></li>
                <li><a href="/admin/orders">Orders</a></li>
                <li><a href="/admin/users">Users</a></li>
                
              </ul>
            </li>
            
          </ul>
        </nav>
      </aside>


      @include('inc.messages')
        @yield('content')

  
        {{-- change password modal  --}}
  <div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="/admin/change_password" method="post">
          {{ csrf_field() }}
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row form-group">
            <label class="font-weight-bold">Old Password</label>
            <input type="password" name="current_password" class="form-control mb-3" required>

            <label class="font-weight-bold">New Password</label>
            <input type="password" name="new_password" class="form-control mb-3" required>

            <label class="font-weight-bold">Confirm New Password</label>
              <input type="password" name="new_confirm_password" class="form-control mb-3" required>                     
              
  
          </div>
          
          
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type="submit">Change Password</button>
        </div>
      </form>
      </div>
    </div>
  </div>

      {{-- <aside id="right-sidebar"></aside> --}}
    </div>
    <script src="/js/vendor.js"></script>
    <script src="/js/component/datatable/init.datatable.js"></script>
    <script src="/js/base/init.switcher.js"></script>
    <script src="/js/base/custom.js"></script>
    <script>

        // $(document).ready(function () {
        
        //     $(".delete-product").click(function (e) {
                    
        //             e.preventDefault();
         
        //             var ele = $(this);
         
        //             if(confirm("Are you sure you want to delete this product?")) {
        //                 $.ajax({
        //                     url: '/admin/product-remove',
        //                     method: "DELETE",
        //                     data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
        //                     success: function (response) {
        //                         window.location = "/admin/products";
        //                     }
        //                 });
        //             }
        //     });
        
        
                
        // });
        
    </script>
  @yield('script')

  </body>
</html>
