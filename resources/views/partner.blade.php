<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="theme-color" content="#136ef8" />
    <meta name="description" content="Partner Portal" />
    <link
      href="https://dashboard.accessibe.com/media/template/favicon.ico"
      type="image/x-icon"
      rel="shortcut icon"
    />
    <title>@yield('title', __('Partner Portal')) | {{ Utility::getsettings('app_name') }}</title>
    <link rel="stylesheet" href="{{ asset('public/site/css/styles.css') }}" />
    <script src="{{ asset('public/site/js/script.js') }}"></script>
  </head>
  <body class="theme-partner-portal">
    <div class="loadbar"></div>
    <header class="header">
      <nav class="top">
          <div class="wrap flex flex-nowrap">
              <div class="start flex flex-inline flex-nowrap">
                  <a href="{{ route('homepage') }}" class="logo">
                      <!-- ========   change your logo hear   ============ -->
                      @if (Utility::getsettings('dark_mode') == 'on')
                      <img src="{{ Utility::getsettings('app_logo') ? Storage::url('uploads/appLogo/app-logo.png') : '' }}"
                          class="app-logo w-55">
                      @else
                      <img src="{{ Utility::getsettings('app_dark_logo') ? Storage::url('uploads/appLogo/app-dark-logo.png') : '' }}"
                          class="app-logo w-55">
                      @endif
                  </a>
                  <nav class="menu js-a11y-bound" aria-label="Main menu" data-a11y-landmark="menu"
                      id="a11y-landmark-menu">
                      <ul>
                          <li>
                              <a class="" href="{{url('widget')}}" data-a11y-tooltip="Use ←/→ to navigate"><i
                                      class="icon icon-access-widget" aria-hidden="true" role="presentation"><svg
                                          width="20" height="20" viewBox="0 0 20 20" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <g clip-path="url(#clip0_1863_50601)">
                                              <path
                                                  d="M13.8394 15.841C15.4493 15.841 16.9933 15.2009 18.1317 14.0615C19.2701 12.922 19.9096 11.3766 19.9096 9.76524C19.9096 8.15384 19.2701 6.60844 18.1317 5.46901C16.9933 4.32958 15.4493 3.68945 13.8394 3.68945L13.8394 15.841Z"
                                                  fill="white"></path>
                                              <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M3.45611 0C1.54735 0 0 1.49239 0 3.33335V20.0001H10.3683C12.2771 20.0001 13.8244 18.5077 13.8244 16.6668V15.8418C12.2158 15.8408 10.6733 15.2008 9.53579 14.0622C8.39739 12.9228 7.75784 11.3774 7.75784 9.76601C7.75784 8.15462 8.39739 6.60922 9.53579 5.46979C10.6733 4.33123 12.2158 3.69121 13.8244 3.69023V0H3.45611Z"
                                                  fill="white"></path>
                                          </g>
                                          <defs>
                                              <clippath id="clip0_1863_50601">
                                                  <rect width="20" height="20" fill="white"></rect>
                                              </clippath>
                                          </defs>
                                      </svg></i>
                                  accessWidget
                              </a>
                          </li>
                          <li>
                              <a class="" href="{{url('flow')}}"><i class="icon icon-access-flow" aria-hidden="true"
                                      role="presentation"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <g clip-path="url(#clip0_1860_50908)">
                                              <path
                                                  d="M6.42797 0.0146484H6.96413L9.89533 4.67847L6.67199 9.80712L9.89533 14.9358L6.96413 19.5996H6.42797C5.59832 19.5996 4.8373 19.1389 4.45266 18.4038L-0.0454102 9.80712L4.45266 1.21046C4.8373 0.475357 5.59832 0.0146484 6.42797 0.0146484Z"
                                                  fill="white"></path>
                                              <path
                                                  d="M13.3694 0.0146484H12.8332L9.90203 4.67847L13.1254 9.80712L9.90203 14.9358L12.8332 19.5996H13.3694C14.199 19.5996 14.9601 19.1389 15.3447 18.4038L19.8428 9.80712L15.3447 1.21046C14.9601 0.475357 14.199 0.0146484 13.3694 0.0146484Z"
                                                  fill="white"></path>
                                          </g>
                                          <defs>
                                              <clippath id="clip0_1860_50908">
                                                  <rect width="20" height="20" fill="white"></rect>
                                              </clippath>
                                          </defs>
                                      </svg></i>
                                  accessFlow
                              </a>
                          </li>
                          {{-- <li>
                    <a class="" href="accessservices.html"><i class="icon icon-access-services"
                            aria-hidden="true" role="presentation"><svg width="20" height="20"
                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="1.03809" y="5.83887" width="17.9241" height="13.1229" rx="0.5"
                                    fill="white"></rect>
                                <path
                                    d="M2.31713 1.30162C2.40423 1.13934 2.5735 1.03809 2.75768 1.03809H9.37381C9.55799 1.03809 9.72725 1.13934 9.81436 1.30162L10.6981 2.94807C10.8769 3.28117 10.6356 3.68454 10.2575 3.68454H1.87393C1.49589 3.68454 1.2546 3.28117 1.43339 2.94807L2.31713 1.30162Z"
                                    fill="white"></path>
                            </svg></i>
                        accessServices
                    </a>
                </li> --}}
                          <li>
                              <a class="" href="{{url('campus')}}"><i class="icon icon-access-campus"
                                      aria-hidden="true" role="presentation"><svg width="27" height="20"
                                          viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M13.5677 0.154297L26.741 7.95456L21.6356 10.9416L21.6723 16.0005C21.6723 18.1243 18.0134 19.8468 13.4997 19.8468C8.98637 19.8468 5.32749 18.1243 5.32749 16.0005L5.38328 11.3096L5.39502 10.8593L0.258789 7.89388L13.5677 0.154297ZM5.46842 10.8593L13.4174 15.6706L21.549 10.9053L20.7083 10.4659C15.9009 7.95554 10.1383 8.1043 5.46842 10.8593Z"
                                              fill="white"></path>
                                      </svg></i>
                                  accessCampus <span class="flag">SOON</span></a>
                          </li>
                      </ul>
                  </nav>
              </div>
              <div class="end actions flex flex-inline flex-nowrap flex-horizontal-end">
                  @if(Auth::user())
                  <a href="{{url('account')}}" class="action profile flex flex-inline flex-nowrap"
                      aria-label="Account"><span class="letter">U</span><span
                          class="name">{{Auth::user()->name}}</span>
                  </a>
                  @else
                  <a href="{{url('login')}}" class="action profile flex flex-inline flex-nowrap"
                      aria-label="login"><span class="letter">L</span><span class="name">Login</span>
                  </a>
                  @endif
                  <a class="action button button-small button-gray js-a11y-bound" href="#popup-demo" role="button">
                      Contact Sales
                  </a>
                  <button class="notifications-trigger js-a11y-bound" data-clicker-trigger="notifications">
                      <i class="icon icon-bell" aria-hidden="true" role="presentation"><svg version="1.1"
                              xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                              <path
                                  d="M16.023 12.5c0-4.5-4-3.5-4-7 0-0.29-0.028-0.538-0.079-0.749-0.263-1.766-1.44-3.183-2.965-3.615 0.014-0.062 0.021-0.125 0.021-0.191 0-0.52-0.45-0.945-1-0.945s-1 0.425-1 0.945c0 0.065 0.007 0.129 0.021 0.191-1.71 0.484-2.983 2.208-3.020 4.273-0.001 0.030-0.001 0.060-0.001 0.091 0 3.5-4 2.5-4 7 0 1.191 2.665 2.187 6.234 2.439 0.336 0.631 1.001 1.061 1.766 1.061s1.43-0.43 1.766-1.061c3.568-0.251 6.234-1.248 6.234-2.439 0-0.004-0-0.007-0-0.011l0.024 0.011zM12.91 13.345c-0.847 0.226-1.846 0.389-2.918 0.479-0.089-1.022-0.947-1.824-1.992-1.824s-1.903 0.802-1.992 1.824c-1.072-0.090-2.071-0.253-2.918-0.479-1.166-0.311-1.724-0.659-1.928-0.845 0.204-0.186 0.762-0.534 1.928-0.845 1.356-0.362 3.1-0.561 4.91-0.561s3.554 0.199 4.91 0.561c1.166 0.311 1.724 0.659 1.928 0.845-0.204 0.186-0.762 0.534-1.928 0.845z">
                              </path>
                          </svg></i>
                  </button>
                  <div class="notifications" data-clicker-element="notifications" data-clicker-focus="true">
                      <div class="notification-list">
                          <ul>
                              <li>
                                  <a class="notification danger flex flex-nowrap js-a11y-bound"
                                      href="https://dashboard.accessibe.com/NOTIFICATION_RECENTLYEXPIRED_LINK"
                                      data-clicker-trigger="managebar"
                                      data-manage-accesswidget="629002a7e3cf150011fa4787" role="button"
                                      aria-hidden="true" tabindex="-1">
                                      <div class="message flex flex-nowrap flex-horizontal-start">
                                          <i class="icon icon-warning" aria-hidden="true" role="presentation"><svg
                                                  version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                  viewBox="0 0 42.1 37" style="enable-background: new 0 0 42.1 37"
                                                  xml:space="preserve">
                                                  <path
                                                      d="M19.3,1c0.8-1.3,2.7-1.3,3.5,0l19.1,33c0.8,1.3-0.2,3-1.7,3H2c-1.5,0-2.5-1.7-1.7-3L19.3,1z">
                                                  </path>
                                              </svg></i>
                                          The license for whatshungry.com has recently expired and
                                          needs to be activated
                                      </div>
                                      <span class="text-button text-button-small text-button-nocolor">
                                          Resolve
                                          <i class="icon icon-chevron-right" aria-hidden="true" role="presentation">
                                              <!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1"
                                                  id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                  xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                  viewBox="0 0 9.5 16" style="enable-background: new 0 0 9.5 16"
                                                  xml:space="preserve">
                                                  <path d="M1.5,0L0,1.5L6.5,8L0,14.5L1.5,16l8-8L1.5,0z"></path>
                                              </svg></i></span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </nav>
      <div class="bottom">
          <div class="wrap flex flex-reverse flex-nowrap">
              <div class="start search" role="search" data-search="form">
                  <form action="#" method="POST" enctype="multipart/form-data">
                      <div class="search-bar">
                          <input data-search="input" type="search" placeholder="Search your licenses..."
                              aria-label="Search your licenses..." tabindex="0" /><i class="icon icon-search"
                              aria-hidden="true" role="presentation"><svg version="1.1"
                                  xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 23 23"
                                  style="enable-background: new 0 0 23 23" xml:space="preserve">
                                  <path
                                      d="M22.6,20.8l-4.3-4.3c1.4-1.8,2.2-4,2.2-6.3c0-2-0.6-4-1.7-5.7s-2.7-3-4.6-3.8s-3.9-1-5.9-0.6C6.2,0.6,4.4,1.6,3,3 S0.6,6.2,0.2,8.2s-0.2,4,0.6,5.9s2.1,3.5,3.8,4.6s3.7,1.7,5.7,1.7c2.3,0,4.5-0.8,6.3-2.2l4.3,4.3c0.1,0.1,0.3,0.2,0.4,0.3 c0.2,0.1,0.3,0.1,0.5,0.1s0.3,0,0.5-0.1s0.3-0.2,0.4-0.3c0.1-0.1,0.2-0.3,0.3-0.4c0.1-0.2,0.1-0.3,0.1-0.5s0-0.3-0.1-0.5 C22.8,21.1,22.7,20.9,22.6,20.8z M2.6,10.2c0-1.5,0.4-3,1.3-4.3c0.8-1.3,2-2.2,3.4-2.8s2.9-0.7,4.4-0.4s2.9,1,3.9,2.1 c1.1,1.1,1.8,2.4,2.1,3.9c0.3,1.5,0.1,3-0.4,4.4c-0.6,1.4-1.6,2.6-2.8,3.4c-1.3,0.8-2.7,1.3-4.3,1.3c-2,0-4-0.8-5.4-2.2 C3.4,14.2,2.6,12.3,2.6,10.2z">
                                  </path>
                              </svg></i><span class="spinner spinner-fast"></span>
                      </div>
                      <div class="search-results" data-search="results"></div>
                  </form>
              </div>
              <nav class="menu flex flex-nowrap js-a11y-bound" aria-label="Main menu" data-a11y-landmark="menu"
                  id="a11y-landmark-menu">
                  <ul>
                      <li>
                          <a class="" href="{{url('widget')}}" data-a11y-tooltip="Use ←/→ to navigate"
                              aria-hidden="true" tabindex="-1">
                              accessWidget
                          </a>
                      </li>
                      <li>
                          <a class="" href="{{url('flow')}}" aria-hidden="true" tabindex="-1">
                              accessFlow
                          </a>
                      </li>
                      {{-- <li>
                <a
                  class=""
                  href="accessservices.html"
                  aria-hidden="true"
                  tabindex="-1"
                >
                  accessServices
                </a>
              </li> --}}
                      <li>
                          <a class="" href="{{url('campus')}}" aria-hidden="true" tabindex="-1">
                              accessCampus <span class="flag">SOON</span></a>
                      </li>
                  </ul>
                  <ul>
                      <li>
                          <a class="" href="{{url('account')}}"> Account &amp; Team </a>
                      </li>
                      <li>
                          <a class="" href="{{url('billing')}}"> Billing &amp; Payments </a>
                      </li>
                      <li>
                          <a class="" href="{{url('audit')}}"> Accessibility Audits </a>
                      </li>
                      <li>
                          <a class="active" href="{{url('partner')}}"> Partner Portal </a>
                      </li>
                      <li>
                          <a class="" href="{{url('installation')}}"> Installation </a>
                      </li>
                  </ul>
              </nav>
          </div>
      </div>
  </header>
    <div
      class="popup popup-demo js-ready"
      data-clicker-element="popup-demo"
      data-clicker-lock-body="true"
    >
      <div class="wide-close" data-clicker-close="popup-demo"></div>
      <div class="content">
        <div class="inner">
          <div class="start">
            <div
              class="close"
              role="button"
              data-clicker-close="popup-demo"
              aria-label="Close"
            >
              <i class="icon icon-close"
                ><svg
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M13.957 3.457l-1.414-1.414-4.543 4.543-4.543-4.543-1.414 1.414 4.543 4.543-4.543 4.543 1.414 1.414 4.543-4.543 4.543 4.543 1.414-1.414-4.543-4.543z"
                  ></path></svg
              ></i>
            </div>
            <form
              action="#"
              method="POST"
              enctype="multipart/form-data"
              data-form="process-form-submission"
            >
              <div class="form-header">
                <span class="title title-medium"
                  >Have Questions? Need a Demo?
                  <span class="mark">Let’s talk!</span> </span
                >
                <p class="text text-big">
                  How can we help? We’ll get back to you shortly.
                </p>
              </div>
              <div class="fields flex">
                <div class="field field-fullName field-split field-line">
                  <label for="fullName">
                    Full name <span class="req">*</span></label
                  >
                  <div class="input">
                    <input
                      type="text"
                      id="fullName"
                      name="fullName"
                      placeholder=""
                    />
                  </div>
                </div>
                <div class="field field-email field-split field-line">
                  <label for="email">
                    Email address <span class="req">*</span></label
                  >
                  <div class="input">
                    <input
                      type="email"
                      id="email"
                      name="email"
                      placeholder=""
                    />
                  </div>
                </div>
                <div class="field field-phone field-split field-line">
                  <label for="phone">
                    Phone number <span class="req">*</span></label
                  >
                  <div class="input">
                    <select name="country" id="country">
                      <option>Select an option</option>
                      <option value="+376">Andorra (+376)</option>
                      <option value="+93">Afghanistan (+93)</option>
                      <option value="+1268">Antigua And Barbuda (+1268)</option>
                      <option value="+1264">Anguilla (+1264)</option>
                      <option value="+355">Albania (+355)</option>
                      <option value="+374">Armenia (+374)</option>
                      <option value="+599">Netherlands Antilles (+599)</option>
                      <option value="+244">Angola (+244)</option>
                      <option value="+672">Antarctica (+672)</option>
                      <option value="+54">Argentina (+54)</option>
                      <option value="+1684">American Samoa (+1684)</option>
                      <option value="+43">Austria (+43)</option>
                      <option value="+61">Australia (+61)</option>
                      <option value="+297">Aruba (+297)</option>
                      <option value="+994">Azerbaijan (+994)</option>
                      <option value="+387">
                        Bosnia And Herzegovina (+387)
                      </option>
                      <option value="+1246">Barbados (+1246)</option>
                      <option value="+880">Bangladesh (+880)</option>
                      <option value="+32">Belgium (+32)</option>
                      <option value="+226">Burkina Faso (+226)</option>
                      <option value="+359">Bulgaria (+359)</option>
                      <option value="+973">Bahrain (+973)</option>
                      <option value="+257">Burundi (+257)</option>
                      <option value="+229">Benin (+229)</option>
                      <option value="+590">Saint Barthelemy (+590)</option>
                      <option value="+1441">Bermuda (+1441)</option>
                      <option value="+673">Brunei Darussalam (+673)</option>
                      <option value="+591">Bolivia (+591)</option>
                      <option value="+55">Brazil (+55)</option>
                      <option value="+1242">Bahamas (+1242)</option>
                      <option value="+975">Bhutan (+975)</option>
                      <option value="+267">Botswana (+267)</option>
                      <option value="+375">Belarus (+375)</option>
                      <option value="+501">Belize (+501)</option>
                      <option value="+1">Canada (+1)</option>
                      <option value="+61">Cocos (keeling) Islands (+61)</option>
                      <option value="+243">Congo (+243)</option>
                      <option value="+236">
                        Central African Republic (+236)
                      </option>
                      <option value="+41">Switzerland (+41)</option>
                      <option value="+225">Cote D Ivoire (+225)</option>
                      <option value="+682">Cook Islands (+682)</option>
                      <option value="+56">Chile (+56)</option>
                      <option value="+237">Cameroon (+237)</option>
                      <option value="+86">China (+86)</option>
                      <option value="+57">Colombia (+57)</option>
                      <option value="+506">Costa Rica (+506)</option>
                      <option value="+53">Cuba (+53)</option>
                      <option value="+238">Cape Verde (+238)</option>
                      <option value="+61">Christmas Island (+61)</option>
                      <option value="+357">Cyprus (+357)</option>
                      <option value="+420">Czech Republic (+420)</option>
                      <option value="+49">Germany (+49)</option>
                      <option value="+253">Djibouti (+253)</option>
                      <option value="+45">Denmark (+45)</option>
                      <option value="+1767">Dominica (+1767)</option>
                      <option value="+1809">Dominican Republic (+1809)</option>
                      <option value="+213">Algeria (+213)</option>
                      <option value="+593">Ecuador (+593)</option>
                      <option value="+372">Estonia (+372)</option>
                      <option value="+20">Egypt (+20)</option>
                      <option value="+291">Eritrea (+291)</option>
                      <option value="+34">Spain (+34)</option>
                      <option value="+251">Ethiopia (+251)</option>
                      <option value="+358">Finland (+358)</option>
                      <option value="+679">Fiji (+679)</option>
                      <option value="+500">
                        Falkland Islands (malvinas) (+500)
                      </option>
                      <option value="+691">
                        Micronesia, Federated States Of (+691)
                      </option>
                      <option value="+298">Faroe Islands (+298)</option>
                      <option value="+33">France (+33)</option>
                      <option value="+241">Gabon (+241)</option>
                      <option value="+1473">Grenada (+1473)</option>
                      <option value="+995">Georgia (+995)</option>
                      <option value="+233">Ghana (+233)</option>
                      <option value="+350">Gibraltar (+350)</option>
                      <option value="+299">Greenland (+299)</option>
                      <option value="+220">Gambia (+220)</option>
                      <option value="+224">Guinea (+224)</option>
                      <option value="+240">Equatorial Guinea (+240)</option>
                      <option value="+30">Greece (+30)</option>
                      <option value="+502">Guatemala (+502)</option>
                      <option value="+1671">Guam (+1671)</option>
                      <option value="+245">Guinea-bissau (+245)</option>
                      <option value="+592">Guyana (+592)</option>
                      <option value="+852">Hong Kong (+852)</option>
                      <option value="+504">Honduras (+504)</option>
                      <option value="+385">Croatia (+385)</option>
                      <option value="+509">Haiti (+509)</option>
                      <option value="+36">Hungary (+36)</option>
                      <option value="+62">Indonesia (+62)</option>
                      <option value="+353">Ireland (+353)</option>
                      <option value="+972">Israel (+972)</option>
                      <option value="+44">Isle Of Man (+44)</option>
                      <option value="+91">India (+91)</option>
                      <option value="+964">Iraq (+964)</option>
                      <option value="+98">Iran (+98)</option>
                      <option value="+354">Iceland (+354)</option>
                      <option value="+39">Italy (+39)</option>
                      <option value="+1876">Jamaica (+1876)</option>
                      <option value="+962">Jordan (+962)</option>
                      <option value="+81">Japan (+81)</option>
                      <option value="+254">Kenya (+254)</option>
                      <option value="+996">Kyrgyzstan (+996)</option>
                      <option value="+855">Cambodia (+855)</option>
                      <option value="+686">Kiribati (+686)</option>
                      <option value="+269">Comoros (+269)</option>
                      <option value="+1869">
                        Saint Kitts And Nevis (+1869)
                      </option>
                      <option value="+82">South Korea (+82)</option>
                      <option value="+965">Kuwait (+965)</option>
                      <option value="+1345">Cayman Islands (+1345)</option>
                      <option value="+7">Kazakstan (+7)</option>
                      <option value="+856">Laos (+856)</option>
                      <option value="+961">Lebanon (+961)</option>
                      <option value="+1758">Saint Lucia (+1758)</option>
                      <option value="+423">Liechtenstein (+423)</option>
                      <option value="+94">Sri Lanka (+94)</option>
                      <option value="+231">Liberia (+231)</option>
                      <option value="+266">Lesotho (+266)</option>
                      <option value="+370">Lithuania (+370)</option>
                      <option value="+352">Luxembourg (+352)</option>
                      <option value="+371">Latvia (+371)</option>
                      <option value="+218">
                        Libyan Arab Jamahiriya (+218)
                      </option>
                      <option value="+212">Morocco (+212)</option>
                      <option value="+377">Monaco (+377)</option>
                      <option value="+373">Moldova (+373)</option>
                      <option value="+382">Montenegro (+382)</option>
                      <option value="+1599">Saint Martin (+1599)</option>
                      <option value="+261">Madagascar (+261)</option>
                      <option value="+692">Marshall Islands (+692)</option>
                      <option value="+389">Macedonia (+389)</option>
                      <option value="+223">Mali (+223)</option>
                      <option value="+95">Myanmar (+95)</option>
                      <option value="+976">Mongolia (+976)</option>
                      <option value="+853">Macau (+853)</option>
                      <option value="+1670">
                        Northern Mariana Islands (+1670)
                      </option>
                      <option value="+222">Mauritania (+222)</option>
                      <option value="+1664">Montserrat (+1664)</option>
                      <option value="+356">Malta (+356)</option>
                      <option value="+230">Mauritius (+230)</option>
                      <option value="+960">Maldives (+960)</option>
                      <option value="+265">Malawi (+265)</option>
                      <option value="+52">Mexico (+52)</option>
                      <option value="+60">Malaysia (+60)</option>
                      <option value="+258">Mozambique (+258)</option>
                      <option value="+264">Namibia (+264)</option>
                      <option value="+687">New Caledonia (+687)</option>
                      <option value="+227">Niger (+227)</option>
                      <option value="+234">Nigeria (+234)</option>
                      <option value="+505">Nicaragua (+505)</option>
                      <option value="+31">Netherlands (+31)</option>
                      <option value="+47">Norway (+47)</option>
                      <option value="+977">Nepal (+977)</option>
                      <option value="+674">Nauru (+674)</option>
                      <option value="+683">Niue (+683)</option>
                      <option value="+64">New Zealand (+64)</option>
                      <option value="+968">Oman (+968)</option>
                      <option value="+507">Panama (+507)</option>
                      <option value="+51">Peru (+51)</option>
                      <option value="+689">French Polynesia (+689)</option>
                      <option value="+675">Papua New Guinea (+675)</option>
                      <option value="+63">Philippines (+63)</option>
                      <option value="+92">Pakistan (+92)</option>
                      <option value="+48">Poland (+48)</option>
                      <option value="+508">
                        Saint Pierre And Miquelon (+508)
                      </option>
                      <option value="+870">Pitcairn (+870)</option>
                      <option value="+1">Puerto Rico (+1)</option>
                      <option value="+351">Portugal (+351)</option>
                      <option value="+680">Palau (+680)</option>
                      <option value="+595">Paraguay (+595)</option>
                      <option value="+974">Qatar (+974)</option>
                      <option value="+40">Romania (+40)</option>
                      <option value="+381">Serbia (+381)</option>
                      <option value="+7">Russian Federation (+7)</option>
                      <option value="+250">Rwanda (+250)</option>
                      <option value="+966">Saudi Arabia (+966)</option>
                      <option value="+677">Solomon Islands (+677)</option>
                      <option value="+248">Seychelles (+248)</option>
                      <option value="+249">Sudan (+249)</option>
                      <option value="+46">Sweden (+46)</option>
                      <option value="+65">Singapore (+65)</option>
                      <option value="+290">Saint Helena (+290)</option>
                      <option value="+386">Slovenia (+386)</option>
                      <option value="+421">Slovakia (+421)</option>
                      <option value="+232">Sierra Leone (+232)</option>
                      <option value="+378">San Marino (+378)</option>
                      <option value="+221">Senegal (+221)</option>
                      <option value="+252">Somalia (+252)</option>
                      <option value="+597">Suriname (+597)</option>
                      <option value="+239">Sao Tome And Principe (+239)</option>
                      <option value="+503">El Salvador (+503)</option>
                      <option value="+963">Syria (+963)</option>
                      <option value="+268">Swaziland (+268)</option>
                      <option value="+1649">
                        Turks And Caicos Islands (+1649)
                      </option>
                      <option value="+235">Chad (+235)</option>
                      <option value="+228">Togo (+228)</option>
                      <option value="+66">Thailand (+66)</option>
                      <option value="+992">Tajikistan (+992)</option>
                      <option value="+690">Tokelau (+690)</option>
                      <option value="+670">Timor-leste (+670)</option>
                      <option value="+993">Turkmenistan (+993)</option>
                      <option value="+216">Tunisia (+216)</option>
                      <option value="+676">Tonga (+676)</option>
                      <option value="+90">Turkey (+90)</option>
                      <option value="+1868">Trinidad And Tobago (+1868)</option>
                      <option value="+688">Tuvalu (+688)</option>
                      <option value="+886">
                        Taiwan, Province Of China (+886)
                      </option>
                      <option value="+255">Tanzania (+255)</option>
                      <option value="+380">Ukraine (+380)</option>
                      <option value="+256">Uganda (+256)</option>
                      <option selected="" value="+1">United States (+1)</option>
                      <option value="+44">United Kingdom (+44)</option>
                      <option value="+971">United Arab Emirates (+971)</option>
                      <option value="+598">Uruguay (+598)</option>
                      <option value="+998">Uzbekistan (+998)</option>
                      <option value="+39">
                        Holy See (vatican City State) (+39)
                      </option>
                      <option value="+1784">
                        Saint Vincent And The Grenadines (+1784)
                      </option>
                      <option value="+58">Venezuela (+58)</option>
                      <option value="+1284">
                        Virgin Islands, British (+1284)
                      </option>
                      <option value="+1340">
                        Virgin Islands, U.s. (+1340)
                      </option>
                      <option value="+84">Vietnam (+84)</option>
                      <option value="+678">Vanuatu (+678)</option>
                      <option value="+681">Wallis And Futuna (+681)</option>
                      <option value="+685">Samoa (+685)</option>
                      <option value="+381">Kosovo (+381)</option>
                      <option value="+967">Yemen (+967)</option>
                      <option value="+262">Mayotte (+262)</option>
                      <option value="+27">South Africa (+27)</option>
                      <option value="+260">Zambia (+260)</option>
                      <option value="+263">Zimbabwe (+263)</option></select
                    ><input
                      type="text"
                      id="phone"
                      name="phone"
                      placeholder="Phone digits here..."
                    />
                  </div>
                </div>
                <div class="field field-customer field-split field-line">
                  <label for="customer">
                    Are you an agency or a freelancer?
                    <span class="req">*</span></label
                  >
                  <div class="input">
                    <select name="customer" id="customer">
                      <option value="">Select an option</option>
                      <option value="Yes, I&#39;m an agency or a freelancer">
                        Yes, I'm an agency or a freelancer
                      </option>
                      <option value="No, I&#39;m a website owner">
                        No, I'm a website owner
                      </option>
                      <option value="None of the above">
                        None of the above
                      </option>
                    </select>
                  </div>
                </div>
                <div class="field field-website field-split field-line">
                  <label for="website">
                    Website link <span class="req">*</span></label
                  >
                  <div class="input">
                    <input
                      type="text"
                      id="website"
                      name="website"
                      placeholder=""
                    />
                  </div>
                </div>
                <div class="field field-message field-split field-line">
                  <label for="message"> How can we help? </label>
                  <div class="input">
                    <input
                      type="text"
                      id="message"
                      name="message"
                      placeholder=""
                    />
                  </div>
                </div>
              </div>
              <div class="cta">
                <button type="submit" class="button button-big button-full">
                  Contact Sales
                  <i class="icon icon-chevron-right"
                    ><!--?xml version="1.0" encoding="utf-8"?--><svg
                      version="1.1"
                      id="Layer_1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      x="0px"
                      y="0px"
                      viewBox="0 0 9.5 16"
                      style="enable-background: new 0 0 9.5 16"
                      xml:space="preserve"
                    >
                      <path
                        d="M1.5,0L0,1.5L6.5,8L0,14.5L1.5,16l8-8L1.5,0z"
                      ></path></svg
                  ></i>
                </button>
              </div>
              <input type="hidden" name="pageURL" value="/partners" /><input
                type="hidden"
                name="element"
                value="demo-form"
              />
            </form>
            <div class="form-success">Alright, let's Schedule!</div>
            <span
              data-calendly="https://calendly.com/accessibe?embed_domain=accessibe.com&amp;embed_type=Inline"
            ></span>
          </div>
          <div class="end">
            <span
              data-clicker-iframe="https://youtube.com/embed/7OfcbvYVxNY?rel=0&amp;autoplay=1"
              data-class="object-cover"
              data-aria-label="Video"
              data-allowfullscreen="true"
            ></span>
          </div>
        </div>
      </div>
    </div>
    <main class="chief">
      <div class="wrap">
        <div class="page partners">
          <div class="no-partner">
            <h1 class="title title-big">
              You don't have a <span class="mark">Partner</span> 
              <span class="mark">account</span> , yet!
            </h1>
            <p class="text text-big">
              accessiBe’s Partners Program is for web design, development, and
              marketing agencies or freelancers who create, host, manage, and
              market websites for clients. If it sounds like you, you’re in the
              right place!
            </p>
            <a
              target="_blank"
              class="button"
              href="https://accessibe.com/partners"
            >
              Learn More or Apply
              <i class="icon icon-chevron-right"
                ><!--?xml version="1.0" encoding="utf-8"?--><svg
                  version="1.1"
                  id="Layer_1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  x="0px"
                  y="0px"
                  viewBox="0 0 9.5 16"
                  style="enable-background: new 0 0 9.5 16"
                  xml:space="preserve"
                >
                  <path
                    d="M1.5,0L0,1.5L6.5,8L0,14.5L1.5,16l8-8L1.5,0z"
                  ></path></svg></i></a
            ><img
              role="presentation"
              src="{{ asset('public/site/assets/partners.svg')}}"
              alt="You don&#39;t have a {Partner} {account}, yet!"
            />
          </div>
        </div>
        <div
          class="popup popup-caseStudies popup-partner-materials js-ready popup-xsmall"
          data-clicker-element="popup-caseStudies"
        >
          <div class="wide-close" data-clicker-close="popup-caseStudies"></div>
          <div class="content">
            <div
              class="close"
              role="button"
              aria-label="Close"
              data-clicker-close="popup-caseStudies"
            >
              <i class="icon icon-close"
                ><svg
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M13.957 3.457l-1.414-1.414-4.543 4.543-4.543-4.543-1.414 1.414 4.543 4.543-4.543 4.543 1.414 1.414 4.543-4.543 4.543 4.543 1.414-1.414-4.543-4.543z"
                  ></path></svg
              ></i>
            </div>
            <span class="title title-medium2">Case Studies</span>
            <ul>
              <li>
                <a
                  href="https://accessibe.com/testimonials/dr-hoby-wedler"
                  target="_blank"
                >
                  Dr Hoby Wedler, Senspoint
                </a>
              </li>
              <li>
                <a
                  href="https://accessibe.com/testimonials/james-moon"
                  target="_blank"
                >
                  James Moon, Morningstar Law Group
                </a>
              </li>
              <li>
                <a
                  href="https://accessibe.com/testimonials/neil-steinhardt"
                  target="_blank"
                >
                  Neil Steinhardt, ClassWallet
                </a>
              </li>
              <li>
                <a
                  href="https://accessibe.com/testimonials/grace-oswald"
                  target="_blank"
                >
                  Grace Oswald, Tessy Plastics
                </a>
              </li>
              <li>
                <a
                  href="https://accessibe.com/testimonials/sarah-paris"
                  target="_blank"
                >
                  Sarah Paris, Incann
                </a>
              </li>
              <li>
                <a
                  href="https://accessibe.com/testimonials/yan-margolin"
                  target="_blank"
                >
                  Yan Margolin, Private Attorney
                </a>
              </li>
              <li>
                <a
                  href="https://accessibe.com/testimonials/sergios"
                  target="_blank"
                >
                  Carlos Gazatua, Sergios
                </a>
              </li>
              <li>
                <a
                  href="https://accessibe.com/testimonials/joseph-motor-impaired-user"
                  target="_blank"
                >
                  Joseph, Motor-Impaired User
                </a>
              </li>
              <li>
                <a
                  href="https://accessibe.com/testimonials/amy-user-with-parkinsons"
                  target="_blank"
                >
                  Amy, User With Parkinson's
                </a>
              </li>
              <li>
                <a
                  href="https://accessibe.com/testimonials/sisi-blind-user"
                  target="_blank"
                >
                  Sisi, Blind User
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div
          class="popup popup-lawsuits&amp;Legal popup-partner-materials js-ready popup-xsmall"
          data-clicker-element="popup-lawsuits&amp;Legal"
        >
          <div
            class="wide-close"
            data-clicker-close="popup-lawsuits&amp;Legal"
          ></div>
          <div class="content">
            <div
              class="close"
              role="button"
              aria-label="Close"
              data-clicker-close="popup-lawsuits&amp;Legal"
            >
              <i class="icon icon-close"
                ><svg
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M13.957 3.457l-1.414-1.414-4.543 4.543-4.543-4.543-1.414 1.414 4.543 4.543-4.543 4.543 1.414 1.414 4.543-4.543 4.543 4.543 1.414-1.414-4.543-4.543z"
                  ></path></svg
              ></i>
            </div>
            <span class="title title-medium2">Lawsuits &amp; Legal</span>
            <ul>
              <li>
                <a
                  href="https://accessibe.com/compliance/wcag-21"
                  target="_blank"
                >
                  WCAG 2.1 Compliance
                </a>
              </li>
              <li>
                <a
                  href="https://accessibe.com/compliance/ada-title-iii"
                  target="_blank"
                >
                  ADA Title III Compliance
                </a>
              </li>
              <li>
                <a
                  href="https://accessibe.com/compliance/section-508"
                  target="_blank"
                >
                  Section 508 Compliance
                </a>
              </li>
              <li>
                <a href="https://accessibe.com/compliance/aca" target="_blank">
                  ACA Compliance
                </a>
              </li>
              <li>
                <a href="https://accessibe.com/compliance/aoda" target="_blank">
                  AODA Compliance
                </a>
              </li>
              <li>
                <a
                  href="https://www.youtube.com/watch?v=Dr01LT3M_tA&amp;list=PLGPGBOwtVbkNTZj2rR4Jf59eqw5AxhT32"
                  target="_blank"
                >
                  accessiBe compliance videos playlist
                </a>
              </li>
              <li>
                <a
                  href="https://accessibe.com/blog/knowledgebase/the-industries-most-impacted-by-web-accessibility-lawsuits"
                  target="_blank"
                >
                  The industries most impacted by web accessibility lawsuits
                </a>
              </li>
              <li>
                <a
                  href="https://accessibe.com/blog/trends/businesses-of-all-sizes-risk-losing-big-in-web-accessibility-lawsuits"
                  target="_blank"
                >
                  Businesses of all sizes risk losing big in web accessibility
                  lawsuits
                </a>
              </li>
              <li>
                <a
                  href="https://www.latimes.com/business/la-fi-hotels-ada-compliance-20181111-story.html"
                  target="_blank"
                >
                  Lawsuits targeting business websites over ADA violations are
                  on the rise
                </a>
              </li>
              <li>
                <a
                  href="https://smallbiztrends.com/2019/08/make-your-website-ada-compliant.html"
                  target="_blank"
                >
                  How to make your website ADA compliant and avoid accessibility
                  lawsuits
                </a>
              </li>
              <li>
                <a
                  href="https://www.wfla.com/8-on-your-side/better-call-behnken/businesses-sitting-ducks-for-lawsuits-because-websites-arent-ada-compliant/"
                  target="_blank"
                >
                  Businesses ‘sitting ducks’ for lawsuits because websites
                  aren’t ADA compliant
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div
          class="popup popup-presentations&amp;Templates popup-partner-materials js-ready popup-xsmall"
          data-clicker-element="popup-presentations&amp;Templates"
        >
          <div
            class="wide-close"
            data-clicker-close="popup-presentations&amp;Templates"
          ></div>
          <div class="content">
            <div
              class="close"
              role="button"
              aria-label="Close"
              data-clicker-close="popup-presentations&amp;Templates"
            >
              <i class="icon icon-close"
                ><svg
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M13.957 3.457l-1.414-1.414-4.543 4.543-4.543-4.543-1.414 1.414 4.543 4.543-4.543 4.543 1.414 1.414 4.543-4.543 4.543 4.543 1.414-1.414-4.543-4.543z"
                  ></path></svg
              ></i>
            </div>
            <span class="title title-medium2"
              >Presentations &amp; Templates</span
            >
            <ul>
              <li>
                <a
                  href="https://dashboard.accessibe.com/downloads/partner-journey-blank-template.pdf"
                >
                  Partner Journey Blank Template
                </a>
              </li>
              <li>
                <a
                  href="https://dashboard.accessibe.com/downloads/partner-journey-example.pdf"
                >
                  Partner Journey Example
                </a>
              </li>
              <li>
                <a
                  href="https://dashboard.accessibe.com/downloads/unbranded-presentations-links.pdf"
                >
                  Unbranded Presentation Links
                </a>
              </li>
              <li>
                <a
                  href="https://dashboard.accessibe.com/downloads/unbranded-presentation-script.pdf"
                >
                  Unbranded Presentation Script
                </a>
              </li>
              <li>
                <a
                  href="https://dashboard.accessibe.com/downloads/unbranded-presentation-powerpoint.pptx"
                >
                  Unbranded Presentation (editable PPT)
                </a>
              </li>
              <li>
                <a
                  href="https://dashboard.accessibe.com/downloads/website-owner-presentation.pdf"
                >
                  Branded website owner presentation
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div
          class="popup popup-marketingCollateral popup-partner-materials js-ready popup-xsmall"
          data-clicker-element="popup-marketingCollateral"
        >
          <div
            class="wide-close"
            data-clicker-close="popup-marketingCollateral"
          ></div>
          <div class="content">
            <div
              class="close"
              role="button"
              aria-label="Close"
              data-clicker-close="popup-marketingCollateral"
            >
              <i class="icon icon-close"
                ><svg
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M13.957 3.457l-1.414-1.414-4.543 4.543-4.543-4.543-1.414 1.414 4.543 4.543-4.543 4.543 1.414 1.414 4.543-4.543 4.543 4.543 1.414-1.414-4.543-4.543z"
                  ></path></svg
              ></i>
            </div>
            <span class="title title-medium2">Marketing Collateral</span>
            <ul>
              <li>
                <a
                  href="https://dashboard.accessibe.com/downloads/email-templates.pdf"
                >
                  Client Email Templates
                </a>
              </li>
              <li>
                <a
                  href="https://dashboard.accessibe.com/downloads/service-proposal-agreement-snippet.pdf"
                >
                  Service Proposal accessibility Snippet
                </a>
              </li>
              <li>
                <a
                  href="https://dashboard.accessibe.com/downloads/partnership-press-release-template.pdf"
                >
                  Partnership Press Release Template
                </a>
              </li>
              <li>
                <a
                  href="https://dashboard.accessibe.com/downloads/solution-overview.pdf"
                >
                  Solution Overview
                </a>
              </li>
              <li>
                <a
                  href="https://dashboard.accessibe.com/downloads/technology-overview.pdf"
                >
                  Technology Overview
                </a>
              </li>
              <li>
                <a
                  href="https://dashboard.accessibe.com/downloads/pricing-models-and-best-practices.pdf"
                >
                  Pricing Models best practices
                </a>
              </li>
              <li>
                <a
                  href="https://dashboard.accessibe.com/downloads/email-templates.pdf"
                >
                  https://accessibe.com/compliance/ada-title-iii
                </a>
              </li>
              <li>
                <a
                  href="https://www.youtube.com/watch?v=7OfcbvYVxNY"
                  target="_blank"
                >
                  3 Minute Demo
                </a>
              </li>
              <li>
                <a
                  href="https://www.youtube.com/watch?v=YRto1QedAE4"
                  target="_blank"
                >
                  9 Minute Demo
                </a>
              </li>
              <li>
                <a
                  href="https://www.youtube.com/watch?v=ymPR6NJ_x2o"
                  target="_blank"
                >
                  accessiBe Demo
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </main>
    <footer class="footer">
      <div class="wrap flex">
        <div class="start">© 2022 - accessiBe Inc. All Rights Reserved.</div>
        <div class="end">
          <nav class="menu">
            <ul class="flex">
              <li>
                <a
                  href="https://accessibe.com/terms-of-service"
                  target="_blank"
                >
                  Terms of Service
                </a>
              </li>
              <li>
                <a href="https://accessibe.com/privacy-policy" target="_blank">
                  Privacy Policy
                </a>
              </li>
              <li>
                <a href="https://accessibe.com/support" target="_blank">
                  Support Portal
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </footer>
    <div
      class="managebar"
      data-managebar="wrap"
      data-clicker-element="managebar"
      data-clicker-lock-body="true"
    >
      <div class="overlay" data-clicker-close="managebar"></div>
      <div class="panel">
        <div
          class="close"
          data-managebar="close"
          data-clicker-close="managebar"
        >
          <i class="icon icon-close"
            ><svg
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 16 16"
            >
              <path
                d="M13.957 3.457l-1.414-1.414-4.543 4.543-4.543-4.543-1.414 1.414 4.543 4.543-4.543 4.543 1.414 1.414 4.543-4.543 4.543 4.543 1.414-1.414-4.543-4.543z"
              ></path></svg
          ></i>
        </div>
        <div
          class="loader spinner spinner-medium spinner-fast spinner-fat"
        ></div>
        <div class="content" data-managebar="content"></div>
      </div>
    </div>
    <div
      class="popup popup-contact popup-xsmall js-ready"
      data-clicker-element="popup-contact"
      data-clicker-lock-body="true"
    >
      <div class="wide-close" data-clicker-close="popup-contact"></div>
      <div class="content">
        <div
          class="close"
          role="button"
          data-clicker-close="popup-contact"
          aria-label="Close"
        >
          <i class="icon icon-close"
            ><svg
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 16 16"
            >
              <path
                d="M13.957 3.457l-1.414-1.414-4.543 4.543-4.543-4.543-1.414 1.414 4.543 4.543-4.543 4.543 1.414 1.414 4.543-4.543 4.543 4.543 1.414-1.414-4.543-4.543z"
              ></path></svg
          ></i>
        </div>
        <form
          action="#"
          method="POST"
          enctype="multipart/form-data"
          data-form="process-form-submission"
        >
          <div class="form-header">
            <span class="title title-medium"
              >Let us know how we can help you!</span
            >
          </div>
          <div class="fields flex">
            <div class="field field-contactCame">
              <label for="contactCame"> Name <span class="req">*</span></label>
              <div class="input">
                <input
                  type="text"
                  id="contactCame"
                  name="contactCame"
                  placeholder=""
                />
              </div>
            </div>
            <div class="field field-contactEmail">
              <label for="contactEmail">
                Email <span class="req">*</span></label
              >
              <div class="input">
                <input
                  type="email"
                  id="contactEmail"
                  name="contactEmail"
                  placeholder=""
                />
              </div>
            </div>
            <div class="field field-contactMessage">
              <label for="contactMessage">
                Message <span class="req">*</span></label
              >
              <div class="input">
                <textarea
                  type="textarea"
                  id="contactMessage"
                  name="contactMessage"
                  placeholder=""
                ></textarea>
              </div>
            </div>
          </div>
          <div class="cta">
            <button type="submit" class="button button-big button-full">
              Contact Us
              <i class="icon icon-chevron-right"
                ><!--?xml version="1.0" encoding="utf-8"?--><svg
                  version="1.1"
                  id="Layer_1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  x="0px"
                  y="0px"
                  viewBox="0 0 9.5 16"
                  style="enable-background: new 0 0 9.5 16"
                  xml:space="preserve"
                >
                  <path
                    d="M1.5,0L0,1.5L6.5,8L0,14.5L1.5,16l8-8L1.5,0z"
                  ></path></svg
              ></i>
            </button>
          </div>
          <input type="hidden" name="pageURL" value="/partners" /><input
            type="hidden"
            name="element"
            value="contact-form"
          />
        </form>
        <div class="form-success">
          <p>Thank you, we'll get back to you shortly.</p>
        </div>
      </div>
    </div>
    <div
      class="popup popup-billing popup-small js-ready"
      data-billing="wrap"
      data-clicker-element="popup-billing"
      data-clicker-lock-body="true"
    >
      <div class="wide-close" data-clicker-close="popup-billing"></div>
      <div class="content">
        <div
          class="close"
          role="button"
          data-clicker-close="popup-billing"
          aria-label="Close"
        >
          <i class="icon icon-close"
            ><svg
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 16 16"
            >
              <path
                d="M13.957 3.457l-1.414-1.414-4.543 4.543-4.543-4.543-1.414 1.414 4.543 4.543-4.543 4.543 1.414 1.414 4.543-4.543 4.543 4.543 1.414-1.414-4.543-4.543z"
              ></path></svg
          ></i>
        </div>
        <div
          class="loader spinner js-active spinner-medium spinner-fast spinner-fat"
        ></div>
        <div class="billing-content" data-billing="content"></div>
      </div>
    </div>
  </body>
</html>
