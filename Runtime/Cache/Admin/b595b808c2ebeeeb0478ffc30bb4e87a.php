<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

  <!-- begin::Head -->
  <head>
    <meta charset="utf-8" />
    <title><?php echo ($sitename); ?></title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon.ico">
    <!--begin::Web font -->
    <script src="https://cdn.bootcss.com/webfont/1.6.16/webfontloader.js"></script>
    <script>
      WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

    <!--end::Web font -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="/Public/Qiswl/assets/vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="/Public/Qiswl/assets/vendors/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/animate.css/animate.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/jstree/dist/themes/default/style.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/morris.js/morris.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/chartist/dist/chartist.min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/vendors/flaticon/css/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/vendors/metronic/css/styles.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Qiswl/assets/vendors/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles -->
    <link href="/Public/Qiswl/assets/demo/base/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="/Public/Qiswl/assets/demo/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Global Theme Styles -->
  </head>

  <!-- end::Head -->

  <!-- begin::Body -->
  <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default">

    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">

      <!-- BEGIN: Header -->
      <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
          <div class="m-stack m-stack--ver m-stack--desktop">

            <!-- BEGIN: Brand -->
            <div class="m-stack__item m-brand  m-brand--skin-light ">
              <div class="m-stack m-stack--ver m-stack--general">
                <div class="m-stack__item m-stack__item--middle m-brand__logo">
                  <a href="index.html" class="m-brand__logo-wrapper">
                    <img alt="" src="/Public/Qiswl/assets/demo/media/img/logo/logo.png" />
                  </a>
                  <h3 class="m-header__title">Pay</h3>
                </div>
                <div class="m-stack__item m-stack__item--middle m-brand__tools">

                  <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                  <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                    <span></span>
                  </a>

                  <!-- END -->

                  <!-- BEGIN: Responsive Header Menu Toggler -->
                  <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                    <span></span>
                  </a>

                  <!-- END -->

                  <!-- BEGIN: Topbar Toggler -->
                  <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                    <i class="flaticon-more"></i>
                  </a>

                  <!-- BEGIN: Topbar Toggler -->
                </div>
              </div>
            </div>

            <!-- END: Brand -->
            <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
              <div class="m-header__title">
                <h3 class="m-header__title-text">管理后台</h3>
              </div>

              <!-- BEGIN: Horizontal Menu -->
              <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
              <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light ">
                <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                  <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"><a href="<?php echo U('/');?>" class="m-menu__link " title="Non functional dummy link"><span class="m-menu__item-here"></span><span
                       class="m-menu__link-text">前台</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                  </li>


                </ul>
              </div>

              <!-- END: Horizontal Menu -->

              <!-- BEGIN: Topbar -->
              <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                <div class="m-stack__item m-stack__item--middle m-dropdown m-dropdown--arrow m-dropdown--large m-dropdown--mobile-full-width m-dropdown--align-right m-dropdown--skin-light m-header-search m-header-search--expandable m-header-search--skin-light"
                 id="m_quicksearch" m-quicksearch-mode="default">

                  <!--BEGIN: Search Form -->
                  <form class="m-header-search__form">
                    <div class="m-header-search__wrapper">
                      <span class="m-header-search__icon-search" id="m_quicksearch_search">
                        <i class="flaticon-search"></i>
                      </span>
                      <span class="m-header-search__input-wrapper">
                        <input autocomplete="off" type="text" name="q" class="m-header-search__input" value="" placeholder="Search..." id="m_quicksearch_input">
                      </span>
                      <span class="m-header-search__icon-close" id="m_quicksearch_close">
                        <i class="la la-remove"></i>
                      </span>
                      <span class="m-header-search__icon-cancel" id="m_quicksearch_cancel">
                        <i class="la la-remove"></i>
                      </span>
                    </div>
                  </form>

                  <!--END: Search Form -->

                  <!--BEGIN: Search Results -->
                  <div class="m-dropdown__wrapper">
                    <div class="m-dropdown__arrow m-dropdown__arrow--center"></div>
                    <div class="m-dropdown__inner">
                      <div class="m-dropdown__body">
                        <div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-height="300" data-mobile-height="200">
                          <div class="m-dropdown__content m-list-search m-list-search--skin-light">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!--BEGIN: END Results -->
                </div>
                <div class="m-stack__item m-topbar__nav-wrapper">
                  <ul class="m-topbar__nav m-nav m-nav--inline">
                    <li class="m-nav__item m-topbar__notifications m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center  m-dropdown--mobile-full-width" m-dropdown-toggle="click" m-dropdown-persistent="1">
                      <a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
                        <span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
                        <span class="m-nav__link-icon"><span class="m-nav__link-icon-wrapper"><i class="flaticon-alarm"></i></span></span>
                      </a>
                      <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                        <div class="m-dropdown__inner">
                          <div class="m-dropdown__header m--align-center">
                            <span class="m-dropdown__header-title">9 New</span>
                            <span class="m-dropdown__header-subtitle">User Notifications</span>
                          </div>
                          <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                              <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
                                <li class="nav-item m-tabs__item">
                                  <a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">
                                    Alerts
                                  </a>
                                </li>
                                <li class="nav-item m-tabs__item">
                                  <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_events" role="tab">Events</a>
                                </li>
                                <li class="nav-item m-tabs__item">
                                  <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">Logs</a>
                                </li>
                              </ul>
                              <div class="tab-content">
                                <div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
                                  <div class="m-scrollable" data-scrollable="true" data-height="250" data-mobile-height="200">
                                    <div class="m-list-timeline m-list-timeline--skin-light">
                                      <div class="m-list-timeline__items">
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                          <span class="m-list-timeline__text">12 new users registered</span>
                                          <span class="m-list-timeline__time">Just now</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge"></span>
                                          <span class="m-list-timeline__text">System shutdown <span class="m-badge m-badge--success m-badge--wide">pending</span></span>
                                          <span class="m-list-timeline__time">14 mins</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge"></span>
                                          <span class="m-list-timeline__text">New invoice received</span>
                                          <span class="m-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge"></span>
                                          <span class="m-list-timeline__text">DB overloaded 80% <span class="m-badge m-badge--info m-badge--wide">settled</span></span>
                                          <span class="m-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge"></span>
                                          <span class="m-list-timeline__text">System error - <a href="#" class="m-link">Check</a></span>
                                          <span class="m-list-timeline__time">2 hrs</span>
                                        </div>
                                        <div class="m-list-timeline__item m-list-timeline__item--read">
                                          <span class="m-list-timeline__badge"></span>
                                          <span href="" class="m-list-timeline__text">New order received <span class="m-badge m-badge--danger m-badge--wide">urgent</span></span>
                                          <span class="m-list-timeline__time">7 hrs</span>
                                        </div>
                                        <div class="m-list-timeline__item m-list-timeline__item--read">
                                          <span class="m-list-timeline__badge"></span>
                                          <span class="m-list-timeline__text">Production server down</span>
                                          <span class="m-list-timeline__time">3 hrs</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge"></span>
                                          <span class="m-list-timeline__text">Production server up</span>
                                          <span class="m-list-timeline__time">5 hrs</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                  <div class="m-scrollable" data-scrollable="true" data-height="250" data-mobile-height="200">
                                    <div class="m-list-timeline m-list-timeline--skin-light">
                                      <div class="m-list-timeline__items">
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                          <a href="" class="m-list-timeline__text">New order received</a>
                                          <span class="m-list-timeline__time">Just now</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
                                          <a href="" class="m-list-timeline__text">New invoice received</a>
                                          <span class="m-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                          <a href="" class="m-list-timeline__text">Production server up</a>
                                          <span class="m-list-timeline__time">5 hrs</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                          <a href="" class="m-list-timeline__text">New order received</a>
                                          <span class="m-list-timeline__time">7 hrs</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                          <a href="" class="m-list-timeline__text">System shutdown</a>
                                          <span class="m-list-timeline__time">11 mins</span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                          <a href="" class="m-list-timeline__text">Production server down</a>
                                          <span class="m-list-timeline__time">3 hrs</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                  <div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
                                    <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                      <span class="">All caught up!<br>No new logs.</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="m-nav__item m-topbar__quick-actions m-dropdown m-dropdown--skin-light m-dropdown--large m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                      <a href="#" class="m-nav__link m-dropdown__toggle">
                        <span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
                        <span class="m-nav__link-icon"><span class="m-nav__link-icon-wrapper"><i class="flaticon-share"></i></span></span>
                      </a>
                      <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                          <div class="m-dropdown__header m--align-center">
                            <span class="m-dropdown__header-title">Quick Actions</span>
                            <span class="m-dropdown__header-subtitle">Shortcuts</span>
                          </div>
                          <div class="m-dropdown__body m-dropdown__body--paddingless">
                            <div class="m-dropdown__content">
                              <div class="m-scrollable" data-scrollable="false" data-height="380" data-mobile-height="200">
                                <div class="m-nav-grid m-nav-grid--skin-light">
                                  <div class="m-nav-grid__row">
                                    <a href="#" class="m-nav-grid__item">
                                      <i class="m-nav-grid__icon flaticon-file"></i>
                                      <span class="m-nav-grid__text">Generate Report</span>
                                    </a>
                                    <a href="#" class="m-nav-grid__item">
                                      <i class="m-nav-grid__icon flaticon-time"></i>
                                      <span class="m-nav-grid__text">Add New Event</span>
                                    </a>
                                  </div>
                                  <div class="m-nav-grid__row">
                                    <a href="#" class="m-nav-grid__item">
                                      <i class="m-nav-grid__icon flaticon-folder"></i>
                                      <span class="m-nav-grid__text">Create New Task</span>
                                    </a>
                                    <a href="#" class="m-nav-grid__item">
                                      <i class="m-nav-grid__icon flaticon-clipboard"></i>
                                      <span class="m-nav-grid__text">Completed Tasks</span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="m-nav__item m-topbar__user-profile  m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                      <a href="#" class="m-nav__link m-dropdown__toggle">
                        <span class="m-topbar__userpic m--hide">
                          <img src="/Public/Qiswl/assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt="" />
                        </span>
                        <span class="m-nav__link-icon m-topbar__usericon">
                          <span class="m-nav__link-icon-wrapper"><i class="flaticon-user-ok"></i></span>
                        </span>
                        <span class="m-topbar__username m--hide">Nick</span>
                      </a>
                      <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                          <div class="m-dropdown__header m--align-center">
                            <div class="m-card-user m-card-user--skin-light">
                              <div class="m-card-user__pic">
                                <img src="/Public/Qiswl/assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="" />
                              </div>
                              <div class="m-card-user__details">
                                <span class="m-card-user__name m--font-weight-500"><?php echo ($member["username"]); ?></span>
                                <a href="" class="m-card-user__email m--font-weight-300 m-link">mark.andre@gmail.com</a>
                              </div>
                            </div>
                          </div>
                          <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                              <ul class="m-nav m-nav--skin-light">
                                <li class="m-nav__section m--hide">
                                  <span class="m-nav__section-text">Section</span>
                                </li>
                                <li class="m-nav__item">
                                  <a href="profile.html" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                    <span class="m-nav__link-title">
                                      <span class="m-nav__link-wrap">
                                        <span class="m-nav__link-text">My Profile</span>
                                        <span class="m-nav__link-badge"><span class="m-badge m-badge--success">2</span></span>
                                      </span>
                                    </span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="javascript:MenuChange('<?php echo U('System/editPassword');?>');" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-share"></i>
                                    <span class="m-nav__link-text">修改密码</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="profile.html" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                    <span class="m-nav__link-text">Messages</span>
                                  </a>
                                </li>
                                <li class="m-nav__separator m-nav__separator--fit">
                                </li>
                                <li class="m-nav__item">
                                  <a href="profile.html" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-info"></i>
                                    <span class="m-nav__link-text">FAQ</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="profile.html" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                    <span class="m-nav__link-text">Support</span>
                                  </a>
                                </li>
                                <li class="m-nav__separator m-nav__separator--fit">
                                </li>
                                <li class="m-nav__item">
                                  <a href="<?php echo U('Login/loginout');?>" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li id="m_quick_sidebar_toggle" class="m-nav__item">
                      <a href="#" class="m-nav__link m-dropdown__toggle">
                        <span class="m-nav__link-icon m-nav__link-icon-alt"><span class="m-nav__link-icon-wrapper"><i class="flaticon-grid-menu"></i></span></span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              <!-- END: Topbar -->
            </div>
          </div>
        </div>
      </header>

      <!-- END: Header -->

      <!-- begin::Body -->
      <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
        <div id="m_aside_left" class="m-grid__item  m-aside-left  m-aside-left--skin-light ">

          <!-- BEGIN: Aside Menu -->
          <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " data-menu-vertical="true" m-menu-scrollable="1" m-menu-dropdown-timeout="500">
    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
        <?php if(is_array($navmenus)): $i = 0; $__LIST__ = $navmenus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nm): $mod = ($i % 2 );++$i;?><li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon <?php echo ($nm['icon']); ?>"></i><span class="m-menu__link-text"><?php echo ($nm['title']); ?></span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
              <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                  <ul class="m-menu__subnav">
                      <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text"><?php echo ($nm['title']); ?></span></span></li>
                      <?php if(is_array($nm[$nm['id']])): $i = 0; $__LIST__ = $nm[$nm['id']];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="javascript:MenuChange('<?php echo U($sub[menu_name]);?>');" class="m-menu__link " data-href="<?php echo U($sub[menu_name]);?>"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text"><?php echo ($sub['title']); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                  </ul>
              </div>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon   flaticon-app"></i><span class="m-menu__link-text">其他功能</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
              <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                  <ul class="m-menu__subnav">
                      <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">其他功能</span></span></li>
                    
                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="javascript:MenuChange('/admin_Template.html');" class="m-menu__link " data-href="/admin_Template.html"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">模板管理</span></a></li>
                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="javascript:MenuChange('/admin_User_agentCateList.html');" class="m-menu__link " data-href="/admin_User_agentCateList.html"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">用户分类管理</span></a></li>
                            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="<?php echo U('Index/clearCache');?>" class="m-menu__link " data-href="<?php echo U('Index/clearCache');?>"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">清除缓存</span></a></li>
                      
                  </ul>
              </div>
          </li>
        <!-- <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-suitcase"></i><span class="m-menu__link-text">Finance</span></a></li>
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Support</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--danger">23</span></span> </span></span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" m-menu-link-redirect="1"><span class="m-menu__link"><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Support</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--danger">23</span></span> </span></span></span></li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Reports</span></a></li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Cases</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-computer"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap">
                                                <span class="m-menu__link-text">Pending</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--warning">10</span></span> </span></span></a></li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-signs-2"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap">
                                                <span class="m-menu__link-text">Urgent</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--danger">6</span></span> </span></span></a></li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-clipboard"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap">
                                                <span class="m-menu__link-text">Done</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--success">2</span></span> </span></span></a></li>
                                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-multimedia-2"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap">
                                                <span class="m-menu__link-text">Archive</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--info m-badge--wide">245</span></span> </span></span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Clients</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Audit</span></a></li>
                </ul>
            </div>
        </li>
        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-light"></i><span class="m-menu__link-text">Administration</span></a></li>
        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-share"></i><span class="m-menu__link-text">Management</span></a></li>
        <li class="m-menu__section ">
            <h4 class="m-menu__section-text">Reports</h4>
            <i class="m-menu__section-icon flaticon-more-v2"></i>
        </li>
        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic"></i><span class="m-menu__link-text">Accounting</span></a></li>
        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-pie-chart"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Products</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--accent m-badge--wide m-badge--rounded">new</span></span> </span></span></a></li>
        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-clipboard"></i><span class="m-menu__link-text">Sales</span></a></li>
        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-technology"></i><span class="m-menu__link-text">IPO</span></a></li>
        <li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom-1" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-info"></i><span class="m-menu__link-text">Help</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu m-menu__submenu--up"><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent m-menu__item--bottom-1" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Help</span></span></li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Support</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Blog</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Documentation</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pricing</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Terms</span></a></li>
                </ul>
            </div>
        </li> -->
    </ul>
</div>
          

          <!-- END: Aside Menu -->
        </div>

        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
          <div class="m-content">
            <div class="row J_mainContent" id="content-main">
              <iframe class="J_iframe" id="J_iframes" name="iframe0" width="100%" height="100%" style="height:55.6rem;" src="<?php echo U('Admin/Index/main');?>"
                      frameborder="0" data-id="<?php echo U('Admin/Index/main');?>" seamless></iframe>
            </div>


          </div>
        </div>
      </div>

      <!-- end:: Body -->

      <!-- begin::Footer -->
      <footer class="m-grid__item   m-footer " style="background: #585c7b;">
        <div class="m-container m-container--fluid m-container--full-height m-page__container">
          <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
            <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
              <span class="m-footer__copyright">
                2019 &copy; Power by <a href="https://www.qiswl.com" class="m-link">Qiswl</a>
              </span>
            </div>
            <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
              <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                <li class="m-nav__item">
                  <a href="#" class="m-nav__link">
                    <span class="m-nav__link-text">About</span>
                  </a>
                </li>
                <li class="m-nav__item">
                  <a href="#" class="m-nav__link">
                    <span class="m-nav__link-text">Privacy</span>
                  </a>
                </li>
                <li class="m-nav__item">
                  <a href="#" class="m-nav__link">
                    <span class="m-nav__link-text">T&C</span>
                  </a>
                </li>
                <li class="m-nav__item">
                  <a href="#" class="m-nav__link">
                    <span class="m-nav__link-text">Purchase</span>
                  </a>
                </li>
                <li class="m-nav__item m-nav__item">
                  <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
                    <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>

      <!-- end::Footer -->
    </div>

    <!-- end:: Page -->

    <!-- begin::Quick Sidebar -->
    <div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
      <div class="m-quick-sidebar__content m--hide">
        <span id="m_quick_sidebar_close" class="m-quick-sidebar__close"><i class="la la-close"></i></span>
        <ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
          <li class="nav-item m-tabs__item">
            <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger" role="tab">Messages</a>
          </li>
          <li class="nav-item m-tabs__item">
            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">Settings</a>
          </li>
          <li class="nav-item m-tabs__item">
            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">Logs</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="m_quick_sidebar_tabs_messenger" role="tabpanel">
            <div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
              <div class="m-messenger__messages m-scrollable">
                <div class="m-messenger__wrapper">
                  <div class="m-messenger__message m-messenger__message--in">
                    <div class="m-messenger__message-pic">
                      <img src="/Public/Qiswl/assets/app/media/img//users/user3.jpg" alt="" />
                    </div>
                    <div class="m-messenger__message-body">
                      <div class="m-messenger__message-arrow"></div>
                      <div class="m-messenger__message-content">
                        <div class="m-messenger__message-username">
                          Megan wrote
                        </div>
                        <div class="m-messenger__message-text">
                          Hi Bob. What time will be the meeting ?
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-messenger__wrapper">
                  <div class="m-messenger__message m-messenger__message--out">
                    <div class="m-messenger__message-body">
                      <div class="m-messenger__message-arrow"></div>
                      <div class="m-messenger__message-content">
                        <div class="m-messenger__message-text">
                          Hi Megan. It's at 2.30PM
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-messenger__wrapper">
                  <div class="m-messenger__message m-messenger__message--in">
                    <div class="m-messenger__message-pic">
                      <img src="/Public/Qiswl/assets/app/media/img//users/user3.jpg" alt="" />
                    </div>
                    <div class="m-messenger__message-body">
                      <div class="m-messenger__message-arrow"></div>
                      <div class="m-messenger__message-content">
                        <div class="m-messenger__message-username">
                          Megan wrote
                        </div>
                        <div class="m-messenger__message-text">
                          Will the development team be joining ?
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-messenger__wrapper">
                  <div class="m-messenger__message m-messenger__message--out">
                    <div class="m-messenger__message-body">
                      <div class="m-messenger__message-arrow"></div>
                      <div class="m-messenger__message-content">
                        <div class="m-messenger__message-text">
                          Yes sure. I invited them as well
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-messenger__datetime">2:30PM</div>
                <div class="m-messenger__wrapper">
                  <div class="m-messenger__message m-messenger__message--in">
                    <div class="m-messenger__message-pic">
                      <img src="/Public/Qiswl/assets/app/media/img//users/user3.jpg" alt="" />
                    </div>
                    <div class="m-messenger__message-body">
                      <div class="m-messenger__message-arrow"></div>
                      <div class="m-messenger__message-content">
                        <div class="m-messenger__message-username">
                          Megan wrote
                        </div>
                        <div class="m-messenger__message-text">
                          Noted. For the Coca-Cola Mobile App project as well ?
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-messenger__wrapper">
                  <div class="m-messenger__message m-messenger__message--out">
                    <div class="m-messenger__message-body">
                      <div class="m-messenger__message-arrow"></div>
                      <div class="m-messenger__message-content">
                        <div class="m-messenger__message-text">
                          Yes, sure.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-messenger__wrapper">
                  <div class="m-messenger__message m-messenger__message--out">
                    <div class="m-messenger__message-body">
                      <div class="m-messenger__message-arrow"></div>
                      <div class="m-messenger__message-content">
                        <div class="m-messenger__message-text">
                          Please also prepare the quotation for the Loop CRM project as well.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-messenger__datetime">3:15PM</div>
                <div class="m-messenger__wrapper">
                  <div class="m-messenger__message m-messenger__message--in">
                    <div class="m-messenger__message-no-pic m--bg-fill-danger">
                      <span>M</span>
                    </div>
                    <div class="m-messenger__message-body">
                      <div class="m-messenger__message-arrow"></div>
                      <div class="m-messenger__message-content">
                        <div class="m-messenger__message-username">
                          Megan wrote
                        </div>
                        <div class="m-messenger__message-text">
                          Noted. I will prepare it.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-messenger__wrapper">
                  <div class="m-messenger__message m-messenger__message--out">
                    <div class="m-messenger__message-body">
                      <div class="m-messenger__message-arrow"></div>
                      <div class="m-messenger__message-content">
                        <div class="m-messenger__message-text">
                          Thanks Megan. I will see you later.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-messenger__wrapper">
                  <div class="m-messenger__message m-messenger__message--in">
                    <div class="m-messenger__message-pic">
                      <img src="/Public/Qiswl/assets/app/media/img//users/user3.jpg" alt="" />
                    </div>
                    <div class="m-messenger__message-body">
                      <div class="m-messenger__message-arrow"></div>
                      <div class="m-messenger__message-content">
                        <div class="m-messenger__message-username">
                          Megan wrote
                        </div>
                        <div class="m-messenger__message-text">
                          Sure. See you in the meeting soon.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="m-messenger__seperator"></div>
              <div class="m-messenger__form">
                <div class="m-messenger__form-controls">
                  <input type="text" name="" placeholder="Type here..." class="m-messenger__form-input">
                </div>
                <div class="m-messenger__form-tools">
                  <a href="" class="m-messenger__form-attachment">
                    <i class="la la-paperclip"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="m_quick_sidebar_tabs_settings" role="tabpanel">
            <div class="m-list-settings m-scrollable">
              <div class="m-list-settings__group">
                <div class="m-list-settings__heading">General Settings</div>
                <div class="m-list-settings__item">
                  <span class="m-list-settings__item-label">Email Notifications</span>
                  <span class="m-list-settings__item-control">
                    <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                      <label>
                        <input type="checkbox" checked="checked" name="">
                        <span></span>
                      </label>
                    </span>
                  </span>
                </div>
                <div class="m-list-settings__item">
                  <span class="m-list-settings__item-label">Site Tracking</span>
                  <span class="m-list-settings__item-control">
                    <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                      <label>
                        <input type="checkbox" name="">
                        <span></span>
                      </label>
                    </span>
                  </span>
                </div>
                <div class="m-list-settings__item">
                  <span class="m-list-settings__item-label">SMS Alerts</span>
                  <span class="m-list-settings__item-control">
                    <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                      <label>
                        <input type="checkbox" name="">
                        <span></span>
                      </label>
                    </span>
                  </span>
                </div>
                <div class="m-list-settings__item">
                  <span class="m-list-settings__item-label">Backup Storage</span>
                  <span class="m-list-settings__item-control">
                    <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                      <label>
                        <input type="checkbox" name="">
                        <span></span>
                      </label>
                    </span>
                  </span>
                </div>
                <div class="m-list-settings__item">
                  <span class="m-list-settings__item-label">Audit Logs</span>
                  <span class="m-list-settings__item-control">
                    <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                      <label>
                        <input type="checkbox" checked="checked" name="">
                        <span></span>
                      </label>
                    </span>
                  </span>
                </div>
              </div>
              <div class="m-list-settings__group">
                <div class="m-list-settings__heading">System Settings</div>
                <div class="m-list-settings__item">
                  <span class="m-list-settings__item-label">System Logs</span>
                  <span class="m-list-settings__item-control">
                    <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                      <label>
                        <input type="checkbox" name="">
                        <span></span>
                      </label>
                    </span>
                  </span>
                </div>
                <div class="m-list-settings__item">
                  <span class="m-list-settings__item-label">Error Reporting</span>
                  <span class="m-list-settings__item-control">
                    <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                      <label>
                        <input type="checkbox" name="">
                        <span></span>
                      </label>
                    </span>
                  </span>
                </div>
                <div class="m-list-settings__item">
                  <span class="m-list-settings__item-label">Applications Logs</span>
                  <span class="m-list-settings__item-control">
                    <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                      <label>
                        <input type="checkbox" name="">
                        <span></span>
                      </label>
                    </span>
                  </span>
                </div>
                <div class="m-list-settings__item">
                  <span class="m-list-settings__item-label">Backup Servers</span>
                  <span class="m-list-settings__item-control">
                    <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                      <label>
                        <input type="checkbox" checked="checked" name="">
                        <span></span>
                      </label>
                    </span>
                  </span>
                </div>
                <div class="m-list-settings__item">
                  <span class="m-list-settings__item-label">Audit Logs</span>
                  <span class="m-list-settings__item-control">
                    <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                      <label>
                        <input type="checkbox" name="">
                        <span></span>
                      </label>
                    </span>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="m_quick_sidebar_tabs_logs" role="tabpanel">
            <div class="m-list-timeline m-scrollable">
              <div class="m-list-timeline__group">
                <div class="m-list-timeline__heading">
                  System Logs
                </div>
                <div class="m-list-timeline__items">
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                    <a href="" class="m-list-timeline__text">12 new users registered <span class="m-badge m-badge--warning m-badge--wide">important</span></a>
                    <span class="m-list-timeline__time">Just now</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                    <a href="" class="m-list-timeline__text">System shutdown</a>
                    <span class="m-list-timeline__time">11 mins</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                    <a href="" class="m-list-timeline__text">New invoice received</a>
                    <span class="m-list-timeline__time">20 mins</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                    <a href="" class="m-list-timeline__text">Database overloaded 89% <span class="m-badge m-badge--success m-badge--wide">resolved</span></a>
                    <span class="m-list-timeline__time">1 hr</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                    <a href="" class="m-list-timeline__text">System error</a>
                    <span class="m-list-timeline__time">2 hrs</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                    <a href="" class="m-list-timeline__text">Production server down <span class="m-badge m-badge--danger m-badge--wide">pending</span></a>
                    <span class="m-list-timeline__time">3 hrs</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                    <a href="" class="m-list-timeline__text">Production server up</a>
                    <span class="m-list-timeline__time">5 hrs</span>
                  </div>
                </div>
              </div>
              <div class="m-list-timeline__group">
                <div class="m-list-timeline__heading">
                  Applications Logs
                </div>
                <div class="m-list-timeline__items">
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                    <a href="" class="m-list-timeline__text">New order received <span class="m-badge m-badge--info m-badge--wide">urgent</span></a>
                    <span class="m-list-timeline__time">7 hrs</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                    <a href="" class="m-list-timeline__text">12 new users registered</a>
                    <span class="m-list-timeline__time">Just now</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                    <a href="" class="m-list-timeline__text">System shutdown</a>
                    <span class="m-list-timeline__time">11 mins</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                    <a href="" class="m-list-timeline__text">New invoices received</a>
                    <span class="m-list-timeline__time">20 mins</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                    <a href="" class="m-list-timeline__text">Database overloaded 89%</a>
                    <span class="m-list-timeline__time">1 hr</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                    <a href="" class="m-list-timeline__text">System error <span class="m-badge m-badge--info m-badge--wide">pending</span></a>
                    <span class="m-list-timeline__time">2 hrs</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                    <a href="" class="m-list-timeline__text">Production server down</a>
                    <span class="m-list-timeline__time">3 hrs</span>
                  </div>
                </div>
              </div>
              <div class="m-list-timeline__group">
                <div class="m-list-timeline__heading">
                  Server Logs
                </div>
                <div class="m-list-timeline__items">
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                    <a href="" class="m-list-timeline__text">Production server up</a>
                    <span class="m-list-timeline__time">5 hrs</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                    <a href="" class="m-list-timeline__text">New order received</a>
                    <span class="m-list-timeline__time">7 hrs</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                    <a href="" class="m-list-timeline__text">12 new users registered</a>
                    <span class="m-list-timeline__time">Just now</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                    <a href="" class="m-list-timeline__text">System shutdown</a>
                    <span class="m-list-timeline__time">11 mins</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                    <a href="" class="m-list-timeline__text">New invoice received</a>
                    <span class="m-list-timeline__time">20 mins</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                    <a href="" class="m-list-timeline__text">Database overloaded 89%</a>
                    <span class="m-list-timeline__time">1 hr</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                    <a href="" class="m-list-timeline__text">System error</a>
                    <span class="m-list-timeline__time">2 hrs</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                    <a href="" class="m-list-timeline__text">Production server down</a>
                    <span class="m-list-timeline__time">3 hrs</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                    <a href="" class="m-list-timeline__text">Production server up</a>
                    <span class="m-list-timeline__time">5 hrs</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                    <a href="" class="m-list-timeline__text">New order received</a>
                    <span class="m-list-timeline__time">1117 hrs</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- end::Quick Sidebar -->

    <!-- begin::Scroll Top -->
    <div id="m_scroll_top" class="m-scroll-top">
      <i class="la la-arrow-up"></i>
    </div>

    <!-- end::Scroll Top -->

    <!-- begin::Quick Nav -->
    <ul class="m-nav-sticky" style="margin-top: 30px;">
      <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
        <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank"><i class="la la-cart-arrow-down"></i></a>
      </li>
      <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
        <a href="https://keenthemes.com/metronic/documentation.html" target="_blank"><i class="la la-code-fork"></i></a>
      </li>
      <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
        <a href="https://keenthemes.com/forums/forum/support/metronic5/" target="_blank"><i class="la la-life-ring"></i></a>
      </li>
    </ul>

    <!-- begin::Quick Nav -->

    <!--begin:: Global Mandatory Vendors -->
    <script src="/Public/Qiswl/assets/vendors/jquery/dist/jquery.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/popper.js/dist/umd/popper.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/js-cookie/src/js.cookie.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/moment/min/moment.min.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/wnumb/wNumb.js" type="text/javascript"></script>

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <script src="/Public/Qiswl/assets/vendors/jquery.repeater/src/lib.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/jquery.repeater/src/repeater.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/block-ui/jquery.blockUI.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/select2/dist/js/select2.full.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/handlebars/dist/handlebars.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/nouislider/distribute/nouislider.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/autosize/dist/autosize.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/dropzone/dist/dropzone.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/summernote/dist/summernote.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/markdown/lib/markdown.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/js/framework/components/plugins/forms/jquery-validation.init.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/js/framework/components/plugins/base/bootstrap-notify.init.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/toastr/build/toastr.min.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/jstree/dist/jstree.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/raphael/raphael.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/morris.js/morris.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/chartist/dist/chartist.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/js/framework/components/plugins/charts/chart.init.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/counterup/jquery.counterup.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/assets/vendors/js/framework/components/plugins/base/sweetalert2.init.js" type="text/javascript"></script>

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Bundle -->
    <script src="/Public/Qiswl/assets/demo/base/scripts.bundle.js" type="text/javascript"></script>

    <!--end::Global Theme Bundle -->

    <!--begin::Page Scripts -->
    <script src="/Public/Qiswl/assets/app/js/dashboard.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/my/my.js" type="text/javascript"></script>

    <script src="/Public/Front/js/iNotify.js"></script>
    <script>
      var iNotify = new iNotify({
          message: '有消息了。',//标题
          effect: 'flash', // flash | scroll 闪烁还是滚动
          interval: 300,
          audio:{
              //file: ['/Public/sound/msg.mp4','/Public/sound/msg.mp3','/Public/sound/msg.wav']
              file:'http://tts.baidu.com/text2audio?lan=zh&ie=UTF-8&spd=5&text=有客户申请提现啦'
          }
      });
      // <?php if(($withdraw) == "1"): ?>//     setInterval(function() {
      //         $.ajax({
      //             type: "GET",
      //             url: "<?php echo U('Withdrawal/checkNotice');?>",
      //             cache: false,
      //             success: function (res) {
      //                 if (res.num>0) {
      //                     iNotify.setFavicon(res.num).setTitle('提现通知').notify({
      //                         title: "新通知",
      //                         body: "有客户，提现啦..."
      //                     }).player();
      //                 }
      //             }
      //         });
      //     },10000);

      //<?php endif; ?>

  </script>

    <!--end::Page Scripts -->
  </body>

  <!-- end::Body -->
</html>