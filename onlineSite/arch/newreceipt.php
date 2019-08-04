<?php
session_start();

$connection = new mysqli("localhost", "root", "password", "test");
$select = "SELECT * FROM accounts WHERE username='".$_SESSION['user']."'";
$result = $connection->query($select);

$row = $result->fetch_assoc();

//echo $row['id']."<br>";
//echo $_SESSION['user_id_var']."<br>";

//echo $row['receipt_data']."<br>";
//echo $_SESSION['user_id_var']."<br>";

//if they are logged in: YES LOGGED IN => THEN DO
if(isset($_SESSION['loggedin'])){

	?>
  <!doctype html>
  <html lang="en">

  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta http-equiv="Content-Language" content="en">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <title>Form Controls - Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
      <meta name="description" content="Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.">
      <meta name="msapplication-tap-highlight" content="no">
      <!--
      =========================================================
      * ArchitectUI HTML Theme Dashboard - v1.0.0
      =========================================================
      * Product Page: https://dashboardpack.com
      * Copyright 2019 DashboardPack (https://dashboardpack.com)
      * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
      =========================================================
      * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
      -->
  <link href="./main.css" rel="stylesheet"></head>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Inconsolata'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="./style.css">

  <body>
      <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
          <div class="app-header header-shadow bg-deep-blue header-text-dark">
              <div class="app-header__logo">
                  <div class="logo-src"></div>
                  <div class="header__pane ml-auto">
                      <div>
                          <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                              <span class="hamburger-box">
                                  <span class="hamburger-inner"></span>
                              </span>
                          </button>
                      </div>
                  </div>
              </div>
              <div class="app-header__mobile-menu">
                  <div>
                      <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                          <span class="hamburger-box">
                              <span class="hamburger-inner"></span>
                          </span>
                      </button>
                  </div>
              </div>
              <div class="app-header__menu">
                  <span>
                      <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                          <span class="btn-icon-wrapper">
                              <i class="fa fa-ellipsis-v fa-w-6"></i>
                          </span>
                      </button>
                  </span>
              </div>    <div class="app-header__content">
                  <div class="app-header-left">
                      <div class="search-wrapper">
                          <div class="input-holder">
                              <input type="text" class="search-input" placeholder="Type to search">
                              <button class="search-icon"><span></span></button>
                          </div>
                          <button class="close"></button>
                      </div>
                      <ul class="header-menu nav">
                        <li class="btn-group nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                New Receipt
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>
                      </ul>        </div>
                  <div class="app-header-right">
                      <div class="header-btn-lg pr-0">
                          <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                  <div class="widget-content-left">
                                      <div class="btn-group">
                                          <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                              <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                              <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                          </a>
                                          <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                              <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                              <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                              <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                              <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                              <div tabindex="-1" class="dropdown-divider"></div>
                                              <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="widget-content-left  ml-3 header-user-info">
                                      <div class="widget-heading">
                                          <?php echo $_SESSION['user']; ?>
                                      </div>
                                      <div class="widget-subheading">
                                            <?php echo $row['email']; ?>
                                      </div>
                                  </div>
                                  <div class="widget-content-right header-user-info ml-3">
                                      <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                          <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                      </button>
                                  </div>
                              </div>
                          </div>
                      </div>        </div>
              </div>
          </div>        <div class="ui-theme-settings">
              <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                  <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
              </button>
              <div class="theme-settings__inner">
                  <div class="scrollbar-container">
                      <div class="theme-settings__options-wrapper">
                          <h3 class="themeoptions-heading">Layout Options
                          </h3>
                          <div class="p-3">
                              <ul class="list-group">
                                  <li class="list-group-item">
                                      <div class="widget-content p-0">
                                          <div class="widget-content-wrapper">
                                              <div class="widget-content-left mr-3">
                                                  <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                      <div class="switch-animate switch-on">
                                                          <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="widget-content-left">
                                                  <div class="widget-heading">Fixed Header
                                                  </div>
                                                  <div class="widget-subheading">Makes the header top fixed, always visible!
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="list-group-item">
                                      <div class="widget-content p-0">
                                          <div class="widget-content-wrapper">
                                              <div class="widget-content-left mr-3">
                                                  <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                      <div class="switch-animate switch-on">
                                                          <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="widget-content-left">
                                                  <div class="widget-heading">Fixed Sidebar
                                                  </div>
                                                  <div class="widget-subheading">Makes the sidebar left fixed, always visible!
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="list-group-item">
                                      <div class="widget-content p-0">
                                          <div class="widget-content-wrapper">
                                              <div class="widget-content-left mr-3">
                                                  <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                      <div class="switch-animate switch-off">
                                                          <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="widget-content-left">
                                                  <div class="widget-heading">Fixed Footer
                                                  </div>
                                                  <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                          <h3 class="themeoptions-heading">
                              <div>
                                  Header Options
                              </div>
                              <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
                                  Restore Default
                              </button>
                          </h3>
                          <div class="p-3">
                              <ul class="list-group">
                                  <li class="list-group-item">
                                      <h5 class="pb-2">Choose Color Scheme
                                      </h5>
                                      <div class="theme-settings-swatches">
                                          <div class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light">
                                          </div>
                                          <div class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light">
                                          </div>
                                          <div class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light">
                                          </div>
                                          <div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light">
                                          </div>
                                          <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light">
                                          </div>
                                          <div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light">
                                          </div>
                                          <div class="divider">
                                          </div>
                                          <div class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light">
                                          </div>
                                          <div class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light">
                                          </div>
                                          <div class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light">
                                          </div>
                                          <div class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light">
                                          </div>
                                          <div class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light">
                                          </div>
                                          <div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light">
                                          </div>
                                          <div class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light">
                                          </div>
                                          <div class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light">
                                          </div>
                                          <div class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light">
                                          </div>
                                          <div class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light">
                                          </div>
                                          <div class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light">
                                          </div>
                                          <div class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light">
                                          </div>
                                          <div class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light">
                                          </div>
                                          <div class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light">
                                          </div>
                                          <div class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light">
                                          </div>
                                          <div class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light">
                                          </div>
                                          <div class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light">
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                          <h3 class="themeoptions-heading">
                              <div>Sidebar Options</div>
                              <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                                  Restore Default
                              </button>
                          </h3>
                          <div class="p-3">
                              <ul class="list-group">
                                  <li class="list-group-item">
                                      <h5 class="pb-2">Choose Color Scheme
                                      </h5>
                                      <div class="theme-settings-swatches">
                                          <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light">
                                          </div>
                                          <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light">
                                          </div>
                                          <div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light">
                                          </div>
                                          <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light">
                                          </div>
                                          <div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light">
                                          </div>
                                          <div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light">
                                          </div>
                                          <div class="divider">
                                          </div>
                                          <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light">
                                          </div>
                                          <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light">
                                          </div>
                                          <div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light">
                                          </div>
                                          <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light">
                                          </div>
                                          <div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light">
                                          </div>
                                          <div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light">
                                          </div>
                                          <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light">
                                          </div>
                                          <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light">
                                          </div>
                                          <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light">
                                          </div>
                                          <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light">
                                          </div>
                                          <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark">
                                          </div>
                                          <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light">
                                          </div>
                                          <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light">
                                          </div>
                                          <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light">
                                          </div>
                                          <div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light">
                                          </div>
                                          <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light">
                                          </div>
                                          <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light">
                                          </div>
                                          <div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light">
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                          <h3 class="themeoptions-heading">
                              <div>Main Content Options</div>
                              <button type="button" class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Restore Default
                              </button>
                          </h3>
                          <div class="p-3">
                              <ul class="list-group">
                                  <li class="list-group-item">
                                      <h5 class="pb-2">Page Section Tabs
                                      </h5>
                                      <div class="theme-settings-swatches">
                                          <div role="group" class="mt-2 btn-group">
                                              <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="body-tabs-line">
                                                  Line
                                              </button>
                                              <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="body-tabs-shadow">
                                                  Shadow
                                              </button>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>        <div class="app-main">
                  <div class="app-sidebar sidebar-shadow bg-deep-blue header-text-dark">
                      <div class="app-header__logo">
                          <div class="logo-src"></div>
                          <div class="header__pane ml-auto">
                              <div>
                                  <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                      <span class="hamburger-box">
                                          <span class="hamburger-inner"></span>
                                      </span>
                                  </button>
                              </div>
                          </div>
                      </div>
                      <div class="app-header__mobile-menu">
                          <div>
                              <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                  <span class="hamburger-box">
                                      <span class="hamburger-inner"></span>
                                  </span>
                              </button>
                          </div>
                      </div>
                      <div class="app-header__menu">
                          <span>
                              <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                  <span class="btn-icon-wrapper">
                                      <i class="fa fa-ellipsis-v fa-w-6"></i>
                                  </span>
                              </button>
                          </span>
                      </div>    <div class="scrollbar-sidebar">
                          <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="index.php">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Dashboard
                                    </a>
                                </li>

                                <li class="app-sidebar__heading">Analytical Data</li>
                                <li>
                                    <a href="charts-chartjs.html">
                                        <i class="metismenu-icon pe-7s-graph2">
                                        </i>Receipts Chart
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">PRO Version</li>
                                <li>
                                    <a href="https://dashboardpack.com/theme-details/architectui-dashboard-html-pro/" target="_blank">
                                        <i class="metismenu-icon pe-7s-graph2">
                                        </i>
                                        Get PREMIUM
                                    </a>
                                </li>
                            </ul>
                          </div>
                      </div>
                  </div>    <div class="app-main__outer">
                      <div class="app-main__inner">
                          <div class="app-page-title">
                              <div class="page-title-wrapper">
                                  <div class="page-title-heading">
                                      <div class="page-title-icon">
                                          <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                                          </i>
                                      </div>
                                      <div>Editing Receipt
                                          <div class="page-title-subheading">Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.
                                          </div>
                                      </div>
                                  </div>
                                  <div class="page-title-actions">
                                      <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                          <i class="fa fa-star"></i>
                                      </button>
                                      <div class="d-inline-block dropdown">
                                          <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                              <span class="btn-icon-wrapper pr-2 opacity-7">
                                                  <i class="fa fa-business-time fa-w-20"></i>
                                              </span>
                                              Buttons
                                          </button>
                                          <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                              <ul class="nav flex-column">
                                                  <li class="nav-item">
                                                      <a href="javascript:void(0);" class="nav-link">
                                                          <i class="nav-link-icon lnr-inbox"></i>
                                                          <span>
                                                              Inbox
                                                          </span>
                                                          <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                      </a>
                                                  </li>
                                                  <li class="nav-item">
                                                      <a href="javascript:void(0);" class="nav-link">
                                                          <i class="nav-link-icon lnr-book"></i>
                                                          <span>
                                                              Book
                                                          </span>
                                                          <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                      </a>
                                                  </li>
                                                  <li class="nav-item">
                                                      <a href="javascript:void(0);" class="nav-link">
                                                          <i class="nav-link-icon lnr-picture"></i>
                                                          <span>
                                                              Picture
                                                          </span>
                                                      </a>
                                                  </li>
                                                  <li class="nav-item">
                                                      <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                          <i class="nav-link-icon lnr-file-empty"></i>
                                                          <span>
                                                              File Disabled
                                                          </span>
                                                      </a>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>    </div>
                          </div>            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                              <li class="nav-item">
                                  <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                      <span>Basic</span>
                                  </a>
                              </li>
                          </ul>

                          <?php
                            $receipt_data = $row['receipt_data'];

                            $howmany = substr_count($receipt_data, "receipt_number");

                            $character = json_decode($receipt_data);

                            //echo $character->collectedReceipts.from[0];

                            for ($x = 0; $x < $howmany; $x++) {
                              $receiptnumber = $character->collectedReceipts[$x]->receipt_number;
                              $whoissender = $character->collectedReceipts[$x]->from;
                              $dateandtime = $character->collectedReceipts[$x]->date_time;
                              $location = $character->collectedReceipts[$x]->address;
                              $trackedlocation = $character->collectedReceipts[$x]->tracking_last_location;
                              $favorited = $character->collectedReceipts[$x]->favorited;

                              $value = $character->collectedReceipts[$x]->value;


                            }

                          ?>


                        <div class="checkout">
                          <div class="credit-card-box">
                            <div class="flip">
                              <div class="front">
                                <div class="chip"></div>
                                <div class="logo">
                                  <img id="card" src="./assets/images/cardimage.png" width="47.834px" height="47.834px" />
                                  <!-- <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                       width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
                                    <g>
                                      <g>
                                        <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                                                 c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                                                 c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                                                 M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                                                 c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                                                 c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                                                 l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                                                 C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                                                 C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                                                 c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                                                 h-3.888L19.153,16.8z"/>
                                      </g>
                                    </g>
                                  </svg> -->
                                </div>
                                <div class="number"></div>
                                <div class="card-holder">
                                  <label>Card holder</label>
                                  <div></div>
                                </div>
                                <div class="card-expiration-date">
                                  <label>Expires 02/15</label>
                                  <div></div>
                                </div>
                              </div>
                              <div class="back">
                                <div class="strip"></div>
                                <div class="logo">
                                  <img id="card" src="./assets/images/cardimage.png" width="47.834px" height="47.834px" />
                                  <!-- <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                       width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
                                    <g>
                                      <g>
                                        <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                                                 c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                                                 c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                                                 M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                                                 c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                                                 c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                                                 l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                                                 C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                                                 C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                                                 c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                                                 h-3.888L19.153,16.8z"/>
                                      </g>
                                    </g>
                                  </svg> -->

                                </div>
                                <div class="ccv">
                                  <label>CCV</label>
                                  <div></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <form class="form" autocomplete="off" novalidate>
                            <fieldset>
                              <label for="card-number">Card Number</label>
                              <input type="num" id="card-number" class="input-cart-number" maxlength="4" />
                              <input type="num" id="card-number-1" class="input-cart-number" maxlength="4" />
                              <input type="num" id="card-number-2" class="input-cart-number" maxlength="4" />
                              <input type="num" id="card-number-3" class="input-cart-number" maxlength="4" />
                            </fieldset>
                            <fieldset>
                              <label for="card-holder">Card holder</label>
                              <input type="text" id="card-holder" />
                            </fieldset>
                            <fieldset class="fieldset-expiration">
                              <label for="card-expiration-month">Expiration date</label>
                              <div class="select">
                                <select id="card-expiration-month">
                                  <option></option>
                                  <option>01</option>
                                  <option>02</option>
                                  <option>03</option>
                                  <option>04</option>
                                  <option>05</option>
                                  <option>06</option>
                                  <option>07</option>
                                  <option>08</option>
                                  <option>09</option>
                                  <option>10</option>
                                  <option>11</option>
                                  <option>12</option>
                                </select>
                              </div>
                              <div class="select">
                                <select id="card-expiration-year">
                                  <option></option>
                                  <option>2016</option>
                                  <option>2017</option>
                                  <option>2018</option>
                                  <option>2019</option>
                                  <option>2020</option>
                                  <option>2021</option>
                                  <option>2022</option>
                                  <option>2023</option>
                                  <option>2024</option>
                                  <option>2025</option>
                                </select>
                              </div>
                            </fieldset>
                            <fieldset class="fieldset-ccv">
                              <label for="card-ccv">CCV</label>
                              <input type="text" id="card-ccv" maxlength="3" />
                            </fieldset>
                            <button class="btn"><i class="fa fa-lock"></i> submit</button>
                          </form>
                      </div>
                    </div>
          </div>
          </div>
          <script type="text/javascript" src="./assets/scripts/main.js"></script>
        <script type="text/javascript" src="./assets/scripts/script.js"></script>
      </body>
          </html>
<?php
	}else{
			session_start();
			session_destroy();
			header("Location: http://keepreceiptmail.online/login");
	}
?>
