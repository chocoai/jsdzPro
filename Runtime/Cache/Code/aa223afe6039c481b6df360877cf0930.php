<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <!-- begin::Head -->
  <head>
    <meta charset="utf-8" />
    <title><?php echo ($sitename); ?> - 码商管理中心 </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://cdn.bootcss.com/webfont/1.6.16/webfontloader.js"></script>
    <script>
      WebFont.load({
            google: {"families":["Montserrat:300,400,500,600,700","Roboto:300,400,500,600,700"]},
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
    <link href="/Public/Qiswl/assets4/demo/base/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="/Public/Qiswl/assets4/demo/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->
    <link href="/Public/Qiswl/assets4/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="/Public/Qiswl/assets4/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Page Vendors Styles -->
    <link rel="shortcut icon" href="favicon.ico" />
    <style>
      .m-header-menu.m-header-menu--skin-light .m-menu__nav > .m-menu__item > .m-menu__link .m-menu__link-text{
        font-weight:900;
      }
      #panelHolder #iframePanel.focus,#panelHolder #iframePanel.fusion,#panelHolder #iframePanel.standalone-customer {
          position: absolute;
           top: 0; 
           left: 0; 
          width: 100%;
          height: 540px;
           margin: 0 0 0 0;
          box-shadow: 0 0 20px 0 rgba(0,0,0,.15);
      }
    </style>
  </head>

  <!-- end::Head -->

  <!-- begin::Body -->
  <body style="background-image: url(Public/Qiswl/assets4/app/media/img/bg/bg-10.jpg)" class="m-page--boxed m-body--fixed m-header--static m-aside--offcanvas-default">

    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">

      <!-- begin::Header -->
      <header id="m_header" class="m-grid__item m-grid m-grid--desktop m-grid--hor-desktop  m-header ">
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--hor-desktop m-container m-container--responsive m-container--xxl">
          <div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--ver-desktop m-header__wrapper">

            <!-- begin::Brand -->
            <div class="m-grid__item m-brand">
              <div class="m-stack m-stack--ver m-stack--general m-stack--inline">
                <div class="m-stack__item m-stack__item--middle m-brand__logo">
                  <a href="index.html" class="m-brand__logo-wrapper">
                    <img alt="" src="/Public/Qiswl/assets4/demo/media/img/logo/logo.png" />
                  </a>
                </div>
                <div class="m-stack__item m-stack__item--middle m-brand__tools">
                  <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-left m-dropdown--align-push" m-dropdown-toggle="click" aria-expanded="true">
                    <a href="#" class="dropdown-toggle m-dropdown__toggle btn btn-outline-metal m-btn  m-btn--icon m-btn--pill">
                      <span>常用操作</span>
                    </a>
                    <div class="m-dropdown__wrapper">
                      <span class="m-dropdown__arrow m-dropdown__arrow--left m-dropdown__arrow--adjust"></span>
                      <div class="m-dropdown__inner">
                        <div class="m-dropdown__body">
                          <div class="m-dropdown__content">
                            <ul class="m-nav">
                              <li class="m-nav__section m-nav__section--first m--hide">
                                <span class="m-nav__section-text">Quick Menu</span>
                              </li>
                              <li class="m-nav__item">
                                <a href="javascript:MenuChange('<?php echo U("Account/changeRecord");?>');" class="m-nav__link">
                                  <i class="m-nav__link-icon flaticon-share"></i>
                                  <span class="m-nav__link-text">资金记录</span>
                                </a>
                              </li>
                              <li class="m-nav__item">
                                <a href="javascript:MenuChange('<?php echo U("Withdrawal/clearing");?>');" class="m-nav__link">
                                  <i class="m-nav__link-icon flaticon-chat-1"></i>
                                  <span class="m-nav__link-text">申请结算</span>
                                </a>
                              </li>
                              <li class="m-nav__item">
                                <a href="javascript:MenuChange('<?php echo U("Order/index");?>');" class="m-nav__link">
                                  <i class="m-nav__link-icon flaticon-info"></i>
                                  <span class="m-nav__link-text">所有订单</span>
                                </a>
                              </li>
                              <!-- <li class="m-nav__item">
                                <a href="" class="m-nav__link">
                                  <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                  <span class="m-nav__link-text">Accounting</span>
                                </a>
                              </li>
                              <li class="m-nav__separator m-nav__separator--fit">
                              </li>
                              <li class="m-nav__item">
                                <a href="" class="m-nav__link">
                                  <i class="m-nav__link-icon flaticon-chat-1"></i>
                                  <span class="m-nav__link-text">Customer Relationship</span>
                                </a>
                              </li>
                              <li class="m-nav__item">
                                <a href="" class="m-nav__link">
                                  <i class="m-nav__link-icon flaticon-info"></i>
                                  <span class="m-nav__link-text">Order Processing</span>
                                </a>
                              </li> -->
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- begin::Responsive Header Menu Toggler-->
                  <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                    <span></span>
                  </a>

                  <!-- end::Responsive Header Menu Toggler-->

                  <!-- begin::Topbar Toggler-->
                  <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                    <i class="flaticon-more"></i>
                  </a>

                  <!--end::Topbar Toggler-->
                </div>
              </div>
            </div>

            <!-- end::Brand -->

            <!-- begin::Topbar -->
            <div class="m-grid__item m-grid__item--fluid m-header-head" id="m_header_nav">
              <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                <div class="m-stack__item m-topbar__nav-wrapper">
                  <ul class="m-topbar__nav m-nav m-nav--inline">
                    <li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center  m-dropdown--mobile-full-width" >
                      <a href="javascript:MenuChange('<?php echo U("Index/gonggao");?>');"  class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
                        <span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
                        <span class="m-nav__link-icon">
                          <span class="m-nav__link-icon-wrapper">
                            <i class="flaticon-alarm"></i>
                          </span>
                        </span>
                      </a>
                      
                    </li>
                    <li class="m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"
                     m-dropdown-toggle="click">
                      <a href="#" class="m-nav__link m-dropdown__toggle">
                        <span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
                        <span class="m-nav__link-icon">
                          <span class="m-nav__link-icon-wrapper">
                            <i class="flaticon-share"></i>
                          </span>
                        </span>
                      </a>
                      <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                          <div class="m-dropdown__header m--align-center" style="background: url(Public/Qiswl/assets4/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
                            <span class="m-dropdown__header-title">Quick Actions</span>
                            <span class="m-dropdown__header-subtitle">Shortcuts</span>
                          </div>
                          <div class="m-dropdown__body m-dropdown__body--paddingless">
                            <div class="m-dropdown__content">
                              <div class="m-scrollable" data-scrollable="false" data-height="380" data-mobile-height="200">
                                <div class="m-nav-grid m-nav-grid--skin-light">
                                  <div class="m-nav-grid__row">
                                    <a href="javascript:MenuChange('<?php echo U('Account/link');?>');" class="m-nav-grid__item">
                                      <i class="m-nav-grid__icon flaticon-file"></i>
                                      <span class="m-nav-grid__text">收银台</span>
                                    </a>
                                    <a href="javascript:MenuChange('<?php echo U('Account/chongzhi');?>');" class="m-nav-grid__item">
                                      <i class="m-nav-grid__icon flaticon-time"></i>
                                      <span class="m-nav-grid__text">我要充值</span>
                                    </a>
                                  </div>
                                  <!-- <div class="m-nav-grid__row">
                                    <a href="#" class="m-nav-grid__item">
                                      <i class="m-nav-grid__icon flaticon-folder"></i>
                                      <span class="m-nav-grid__text">Create New Task</span>
                                    </a>
                                    <a href="#" class="m-nav-grid__item">
                                      <i class="m-nav-grid__icon flaticon-clipboard"></i>
                                      <span class="m-nav-grid__text">Completed Tasks</span>
                                    </a>
                                  </div> -->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
                     m-dropdown-toggle="click">
                      <a href="#" class="m-nav__link m-dropdown__toggle">
                        <span class="m-topbar__welcome m--hidden-tablet m--hidden-mobile">Hello,&nbsp;</span>
                        <span class="m-topbar__username m--hidden-tablet m--hidden-mobile m--padding-right-15"><span class="m-link"><?php echo ($fans["username"]); ?></span></span>
                        <span class="m-topbar__userpic">
                          <img src="/Public/Qiswl/assets4/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt="" />
                        </span>
                      </a>
                      <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                          <div class="m-dropdown__header m--align-center" style="background: url(Public/Qiswl/assets4/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
                            <div class="m-card-user m-card-user--skin-dark">
                              <div class="m-card-user__pic">
                                <img src="/Public/Qiswl/assets4/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="" />
                              </div>
                              <div class="m-card-user__details">
                                <span class="m-card-user__name m--font-weight-500"><?php echo ($fans["username"]); ?></span>
                                <a href="" class="m-card-user__email m--font-weight-300 m-link">
                                  码商（<?php echo ($fans["memberid"]); ?>）
                                </a>
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
                                  <a href="#" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                    <span class="m-nav__link-title">
                                      <span class="m-nav__link-wrap">
                                        <span class="m-nav__link-text">余额</span>
                                        <span class="m-nav__link-badge"><span class="m-badge m-badge--success m-badge--wide"><?php echo ($fans['balance']); ?></span></span>
                                      </span>
                                    </span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="#" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                    <span class="m-nav__link-title">
                                      <span class="m-nav__link-wrap">
                                        <span class="m-nav__link-text">冻结</span>
                                        <span class="m-nav__link-badge"><span class="m-badge m-badge--info m-badge--wide"><?php echo ($fans['codeblockedbalance']); ?></span></span>
                                      </span>
                                    </span>
                                  </a>
                                </li>

                                <!-- <li class="m-nav__separator m-nav__separator--fit">
                                </li> -->
                                <!-- <li class="m-nav__item">
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
                                </li> -->
                                <li class="m-nav__separator m-nav__separator--fit">
                                </li>
                                <li class="m-nav__item">
                                  <a href="<?php echo ($loginout); ?>" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">退出</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li id="m_quick_sidebar_toggle" class="m-nav__item">
                      <a href="#" class="m-nav__link m-dropdown__toggle">
                        <span class="m-nav__link-icon m-nav__link-icon--aside-toggle">
                          <span class="m-nav__link-icon-wrapper"><i class="flaticon-menu-button"></i></span>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- end::Topbar -->
          </div>
        </div>
      </header>

      <!-- end::Header -->

      <!-- begin::Body -->
      <div class="m-grid__item m-grid__item--fluid m-grid m-grid m-grid--hor m-container m-container--responsive m-container--xxl">
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body">
          <!--左侧导航开始-->
          <div class="m-grid__item m-body__nav">
    <div class="m-stack m-stack--ver m-stack--desktop">
        <!-- begin::Horizontal Menu -->
        <div class="m-stack__item m-stack__item--middle m-stack__item--fluid">
            <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
            <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light ">
                <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                    <li class="m-menu__item  m-menu__item--active " aria-haspopup="true">
                        <a href="javascript:MenuChange('<?php echo U('Index/main');?>');" class="m-menu__link "><span class="m-menu__item-here"></span><span class="m-menu__link-text">主页</span></a>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">账户设置</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:MenuChange('<?php echo U("Account/profile");?>');" class="m-menu__link "><i class="m-menu__link-icon flaticon-user-settings"></i><span class="m-menu__link-text">基本信息</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:MenuChange('<?php echo U("Account/bankcard");?>');" class="m-menu__link "><i class="m-menu__link-icon flaticon-laptop"></i><span class="m-menu__link-text">银行卡管理</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:MenuChange('<?php echo U("Account/authorized");?>');" class="m-menu__link "><i class="m-menu__link-icon  flaticon-user-ok"></i><span class="m-menu__link-text">认证信息</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:MenuChange('<?php echo U("Account/editPassword");?>');" class="m-menu__link "><i class="m-menu__link-icon flaticon-visible"></i><span class="m-menu__link-text">登录密码</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:MenuChange('<?php echo U("Account/editPaypassword");?>');" class="m-menu__link "><i class="m-menu__link-icon  flaticon-visible"></i><span class="m-menu__link-text">支付密码</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:MenuChange('<?php echo U("Account/loginrecord");?>');" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">登录记录</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:MenuChange('<?php echo U("Account/google");?>');" class="m-menu__link "><i class="m-menu__link-icon  flaticon-letter-g"></i><span class="m-menu__link-text">Google身份验证</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item   " aria-haspopup="true">
                        <a href="javascript:MenuChange('<?php echo U('Channel/AgentAccount');?>');" class="m-menu__link "><span class="m-menu__item-here"></span><span class="m-menu__link-text">账号管理</span></a>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">财务管理</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:MenuChange('<?php echo U("Account/changeRecord");?>');" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">资金记录</span></a></li>
                                
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:MenuChange('<?php echo U("Account/frozenMoney");?>');" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">冻结资金明细</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:MenuChange('<?php echo U("Agent/duizhangdan");?>');" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">码商对账单</span></a></li>
                                 <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:MenuChange('<?php echo U("Statistics/index");?>');" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">账号交易统计</span></a></li>
                               
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">资金管理</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:MenuChange('<?php echo U("Withdrawal/clearing");?>');" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">申请提现</span></a></li>
                                
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:MenuChange('<?php echo U("Withdrawal/index");?>');" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">提现记录</span></a></li>
                                                              
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">订单管理</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
                            <ul class="m-menu__subnav">
                               <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:MenuChange('<?php echo U("Order/index");?>');" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">所有订单</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:MenuChange('<?php echo U("Order/index",['status'=>2]);?>');" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">成功订单</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:MenuChange('<?php echo U("Order/index",['status'=>1]);?>');" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">手工补发</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:MenuChange('<?php echo U("Order/index",['status'=>0]);?>');" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">未支付订单</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <?php if(($fans[groupid]) != "4"): ?><li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">用户管理</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                <ul class="m-menu__subnav">
                                    <!-- <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:MenuChange('<?php echo U("Agent/invitecode");?>');" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">注册邀请码</span></a></li> -->
                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:MenuChange('<?php echo U("Agent/addUser");?>');" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">开户</span></a></li>
                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:MenuChange('<?php echo U("Agent/member");?>');" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">下级用户管理</span></a></li>
                                </ul>
                            </div>
                        </li><?php endif; ?>
                    
                        
                    
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><span class="m-menu__item-here"></span><span class="m-menu__link-text">API管理</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:MenuChange('<?php echo U("Channel/index");?>');" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">查看通道费率</span></a></li>
                                   
                                </ul>
                            </div>
                        </li>
                    
                    
                    
                </ul>
            </div>
        </div>
        <!-- end::Horizontal Menu -->
        <!--begin::Search-->
        <div class="m-stack__item m-stack__item--middle m-dropdown m-dropdown--arrow m-dropdown--large m-dropdown--mobile-full-width m-dropdown--align-right m-dropdown--skin-light m-header-search m-header-search--expandable m-header-search--skin-" id="m_quicksearch" m-quicksearch-mode="default">
            <!--begin::Search Form -->
            <form class="m-header-search__form">
                <div class="m-header-search__wrapper">
                    <span class="m-header-search__icon-search" id="m_quicksearch_search">
                        <i class="la la-search"></i>
                    </span>
                    <span class="m-header-search__input-wrapper">
                        <input autocomplete="off" type="text" name="q" class="m-header-search__input" value="" placeholder="Search..." id="m_quicksearch_input">
                    </span>
                    <span class="m-header-search__icon-close" id="m_quicksearch_close">
                        <i class="la la-remove"></i>
                    </span>
                    <span class="m-header-search__icon-cancel" id="m_quicksearch_cancel">
                        <i class="la la-times"></i>
                    </span>
                </div>
            </form>
            <!--end::Search Form -->
            <!--begin::Search Results -->
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
            <!--end::Search Results -->
        </div>
        <!--end::Search-->
    </div>
</div>
          <!--左侧导航结束-->
          <div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--ver-desktop m-body__content">
            <div class="m-grid__item m-grid__item--fluid m-wrapper">

              <!-- BEGIN: Subheader -->
              <!-- <div class="m-subheader ">
                <div class="d-flex align-items-center">
                  <div class="mr-auto">
                    <h3 class="m-subheader__title ">Dashboard</h3>
                  </div>
                  <div>
                    <span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
                      <span class="m-subheader__daterange-label">
                        <span class="m-subheader__daterange-title"></span>
                        <span class="m-subheader__daterange-date m--font-brand"></span>
                      </span>
                      <a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
                        <i class="la la-angle-down"></i>
                      </a>
                    </span>
                  </div>
                </div>
              </div> -->

              <!-- END: Subheader -->
              <div class="m-content">
                <div class="row J_mainContent" id="content-main">
                  <iframe class="J_iframe" id="J_iframes" name="iframe0" width="100%" height="100%" style="height:80rem;" src="<?php echo U('Index/main');?>"
                          frameborder="0" data-id="<?php echo U('Index/main');?>" seamless></iframe>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- begin::Body -->

      <!-- begin::Footer -->
      <footer class="m-grid__item   m-footer ">
        <div class="m-container m-container--responsive m-container--xxl">
          <div class="m-footer__wrapper">
            <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
              <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                <span class="m-footer__copyright">
                  2019 &copy; Power by <?php echo ($sitename); ?>
                </span>
              </div>
              <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
                <ul class="m-footer__nav m-nav m-nav--skin-dark m-nav--inline m--pull-right">
                  <li class="m-nav__item">
                    <a href="<?php echo U('/');?>" class="m-nav__link">
                      <span class="m-nav__link-text">首页</span>
                    </a>
                  </li>
                  <li class="m-nav__item">
                    <a href="<?php echo U('Home/Index/document');?>" class="m-nav__link">
                      <span class="m-nav__link-text">开发文档</span>
                    </a>
                  </li>
                  <li class="m-nav__item">
                    <a href="<?php echo U('Home/Index/Jkxz');?>" class="m-nav__link">
                      <span class="m-nav__link-text">监控下载</span>
                    </a>
                  </li>
                  <!-- <li class="m-nav__item">
                    <a href="#" class="m-nav__link">
                      <span class="m-nav__link-text">Purchase</span>
                    </a>
                  </li> -->
                  <li class="m-nav__item m-nav__item--last">
                    <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
                      <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <!-- end:: Page -->

    <!-- begin::Quick Sidebar -->
    <div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
      <div class="m-quick-sidebar__content m--hide">
        <span id="m_quick_sidebar_close" class="m-quick-sidebar__close"><i class="la la-close"></i></span>
        <ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
          <li class="nav-item m-tabs__item">
            <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger" role="tab">在线客服</a>
          </li>
        </ul>
        <div class="tab-content">
          <div style="position:absolute;width:400px;height:100%;max-width: 400px;">
            <iframe frameborder="none" scrolling="auto" style="width: 100%;height:100%;max-width: 400px;" src="https://static.meiqia.com/dist/standalone.html?_=t&eid=113255"></iframe>
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
    <script src="/Public/Qiswl/assets4/demo/base/scripts.bundle.js" type="text/javascript"></script>

    <!--end::Global Theme Bundle -->

    <!--begin::Page Vendors -->
    <script src="/Public/Qiswl/assets4/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

    <!--end::Page Vendors -->

    <!--begin::Page Scripts -->
    <script src="/Public/Qiswl/assets4/app/js/dashboard.js" type="text/javascript"></script>
    <script src="/Public/Qiswl/my/my.js" type="text/javascript"></script>

    <!--end::Page Scripts -->
    
  </body>

  <!-- end::Body -->
</html>