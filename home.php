<?php
session_start();
if (isset($_SESSION['validUser'])) {
  //  include("../partials/_header.php");
  //  $title = "Home";
  //  $nav = "";
  //  include("../../Utils/sidebarUtils.php");

  //  require("../../Controller/generalController.php");
  //  include("../../Env/env.php");
  //  require("../../Connection/dbConnection.php");

  //  $conn = conString1();

  //  $dashData = new GeneralController();
  //  $data = $dashData->getAllInventory($conn);
  //  $data1 = $dashData->getAllInventory1($conn);
?>
  <!DOCTYPE html>
  <!-- saved from url=(0030)https://phantomstrade .com/home -->
  <html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>AutumnSpurs</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="./Home_files/app.min05.css" rel="stylesheet">
    <!-- ================== END BASE CSS STYLE ================== -->
    <!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
    <link href="./Home_files/jquery-jvectormap.css" rel="stylesheet">
    <link href="https://phantomstrade .com/public/plugins/nvd3/build/nv.d3.css%22%20rel=%22stylesheet">
    <link href="./Home_files/daterangepicker.css" rel="stylesheet">
    <script src="./Home_files/jquery.min.js.download"></script>
    <link href="./Home_files/bootstrap-social.css" rel="stylesheet">
    <link href="./favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="./favicon.ico" rel="apple-touch-icon">
    <script src="./Home_files/3233d881f8.js.download" crossorigin="anonymous"></script>
    <style media="all" id="fa-v4-font-face">
      /*!
 * Font Awesome Free 5.15.4 by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
 */
      @font-face {
        font-family: "FontAwesome";
        font-display: block;
        src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.eot);
        src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.eot?#iefix) format("embedded-opentype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.woff2) format("woff2"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.woff) format("woff"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.ttf) format("truetype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.svg#fontawesome) format("svg")
      }

      @font-face {
        font-family: "FontAwesome";
        font-display: block;
        src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.eot);
        src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.eot?#iefix) format("embedded-opentype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.woff2) format("woff2"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.woff) format("woff"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.ttf) format("truetype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.svg#fontawesome) format("svg")
      }

      @font-face {
        font-family: "FontAwesome";
        font-display: block;
        src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.eot);
        src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.eot?#iefix) format("embedded-opentype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.woff2) format("woff2"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.woff) format("woff"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.ttf) format("truetype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.svg#fontawesome) format("svg");
        unicode-range: U+f004-f005, U+f007, U+f017, U+f022, U+f024, U+f02e, U+f03e, U+f044, U+f057-f059, U+f06e, U+f070, U+f075, U+f07b-f07c, U+f080, U+f086, U+f089, U+f094, U+f09d, U+f0a0, U+f0a4-f0a7, U+f0c5, U+f0c7-f0c8, U+f0e0, U+f0eb, U+f0f3, U+f0f8, U+f0fe, U+f111, U+f118-f11a, U+f11c, U+f133, U+f144, U+f146, U+f14a, U+f14d-f14e, U+f150-f152, U+f15b-f15c, U+f164-f165, U+f185-f186, U+f191-f192, U+f1ad, U+f1c1-f1c9, U+f1cd, U+f1d8, U+f1e3, U+f1ea, U+f1f6, U+f1f9, U+f20a, U+f247-f249, U+f24d, U+f254-f25b, U+f25d, U+f271-f274, U+f279, U+f28b, U+f28d, U+f2b5-f2b6, U+f2b9, U+f2bb, U+f2bd, U+f2c1-f2c2, U+f2d0, U+f2d2, U+f2dc, U+f2ed, U+f3a5, U+f3d1, U+f410
      }

      @font-face {
        font-family: "FontAwesome";
        font-display: block;
        src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-v4deprecations.eot);
        src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-v4deprecations.eot?#iefix) format("embedded-opentype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-v4deprecations.woff2) format("woff2"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-v4deprecations.woff) format("woff"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-v4deprecations.ttf) format("truetype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-v4deprecations.svg#fontawesome) format("svg");
        unicode-range: U+f003, U+f006, U+f014, U+f016, U+f01a-f01b, U+f01d, U+f040, U+f045-f047, U+f05c-f05d, U+f07d-f07e, U+f087-f088, U+f08a-f08b, U+f08e, U+f090, U+f096-f097, U+f0a2, U+f0e4-f0e6, U+f0ec-f0ee, U+f0f5-f0f7, U+f10c, U+f112, U+f114-f115, U+f11d, U+f123, U+f132, U+f145, U+f147-f149, U+f14c, U+f166, U+f16a, U+f172, U+f175-f178, U+f18e, U+f190, U+f196, U+f1b1, U+f1d9, U+f1db, U+f1f7, U+f20c, U+f219, U+f230, U+f24a, U+f250, U+f278, U+f27b, U+f283, U+f28c, U+f28e, U+f29b-f29c, U+f2b7, U+f2ba, U+f2bc, U+f2be, U+f2c0, U+f2c3, U+f2d3-f2d4
      }
    </style>
    <style media="all" id="fa-v4-shims">
      /*!
 * Font Awesome Free 5.15.4 by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
 */
      .fa.fa-glass:before {
        content: "\f000"
      }

      .fa.fa-meetup {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-star-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-star-o:before {
        content: "\f005"
      }

      .fa.fa-close:before,
      .fa.fa-remove:before {
        content: "\f00d"
      }

      .fa.fa-gear:before {
        content: "\f013"
      }

      .fa.fa-trash-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-trash-o:before {
        content: "\f2ed"
      }

      .fa.fa-file-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-file-o:before {
        content: "\f15b"
      }

      .fa.fa-clock-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-clock-o:before {
        content: "\f017"
      }

      .fa.fa-arrow-circle-o-down {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-arrow-circle-o-down:before {
        content: "\f358"
      }

      .fa.fa-arrow-circle-o-up {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-arrow-circle-o-up:before {
        content: "\f35b"
      }

      .fa.fa-play-circle-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-play-circle-o:before {
        content: "\f144"
      }

      .fa.fa-repeat:before,
      .fa.fa-rotate-right:before {
        content: "\f01e"
      }

      .fa.fa-refresh:before {
        content: "\f021"
      }

      .fa.fa-list-alt {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-dedent:before {
        content: "\f03b"
      }

      .fa.fa-video-camera:before {
        content: "\f03d"
      }

      .fa.fa-picture-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-picture-o:before {
        content: "\f03e"
      }

      .fa.fa-photo {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-photo:before {
        content: "\f03e"
      }

      .fa.fa-image {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-image:before {
        content: "\f03e"
      }

      .fa.fa-pencil:before {
        content: "\f303"
      }

      .fa.fa-map-marker:before {
        content: "\f3c5"
      }

      .fa.fa-pencil-square-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-pencil-square-o:before {
        content: "\f044"
      }

      .fa.fa-share-square-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-share-square-o:before {
        content: "\f14d"
      }

      .fa.fa-check-square-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-check-square-o:before {
        content: "\f14a"
      }

      .fa.fa-arrows:before {
        content: "\f0b2"
      }

      .fa.fa-times-circle-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-times-circle-o:before {
        content: "\f057"
      }

      .fa.fa-check-circle-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-check-circle-o:before {
        content: "\f058"
      }

      .fa.fa-mail-forward:before {
        content: "\f064"
      }

      .fa.fa-expand:before {
        content: "\f424"
      }

      .fa.fa-compress:before {
        content: "\f422"
      }

      .fa.fa-eye,
      .fa.fa-eye-slash {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-warning:before {
        content: "\f071"
      }

      .fa.fa-calendar:before {
        content: "\f073"
      }

      .fa.fa-arrows-v:before {
        content: "\f338"
      }

      .fa.fa-arrows-h:before {
        content: "\f337"
      }

      .fa.fa-bar-chart {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-bar-chart:before {
        content: "\f080"
      }

      .fa.fa-bar-chart-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-bar-chart-o:before {
        content: "\f080"
      }

      .fa.fa-facebook-square,
      .fa.fa-twitter-square {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-gears:before {
        content: "\f085"
      }

      .fa.fa-thumbs-o-up {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-thumbs-o-up:before {
        content: "\f164"
      }

      .fa.fa-thumbs-o-down {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-thumbs-o-down:before {
        content: "\f165"
      }

      .fa.fa-heart-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-heart-o:before {
        content: "\f004"
      }

      .fa.fa-sign-out:before {
        content: "\f2f5"
      }

      .fa.fa-linkedin-square {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-linkedin-square:before {
        content: "\f08c"
      }

      .fa.fa-thumb-tack:before {
        content: "\f08d"
      }

      .fa.fa-external-link:before {
        content: "\f35d"
      }

      .fa.fa-sign-in:before {
        content: "\f2f6"
      }

      .fa.fa-github-square {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-lemon-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-lemon-o:before {
        content: "\f094"
      }

      .fa.fa-square-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-square-o:before {
        content: "\f0c8"
      }

      .fa.fa-bookmark-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-bookmark-o:before {
        content: "\f02e"
      }

      .fa.fa-facebook,
      .fa.fa-twitter {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-facebook:before {
        content: "\f39e"
      }

      .fa.fa-facebook-f {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-facebook-f:before {
        content: "\f39e"
      }

      .fa.fa-github {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-credit-card {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-feed:before {
        content: "\f09e"
      }

      .fa.fa-hdd-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-hdd-o:before {
        content: "\f0a0"
      }

      .fa.fa-hand-o-right {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-hand-o-right:before {
        content: "\f0a4"
      }

      .fa.fa-hand-o-left {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-hand-o-left:before {
        content: "\f0a5"
      }

      .fa.fa-hand-o-up {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-hand-o-up:before {
        content: "\f0a6"
      }

      .fa.fa-hand-o-down {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-hand-o-down:before {
        content: "\f0a7"
      }

      .fa.fa-arrows-alt:before {
        content: "\f31e"
      }

      .fa.fa-group:before {
        content: "\f0c0"
      }

      .fa.fa-chain:before {
        content: "\f0c1"
      }

      .fa.fa-scissors:before {
        content: "\f0c4"
      }

      .fa.fa-files-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-files-o:before {
        content: "\f0c5"
      }

      .fa.fa-floppy-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-floppy-o:before {
        content: "\f0c7"
      }

      .fa.fa-navicon:before,
      .fa.fa-reorder:before {
        content: "\f0c9"
      }

      .fa.fa-google-plus,
      .fa.fa-google-plus-square,
      .fa.fa-pinterest,
      .fa.fa-pinterest-square {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-google-plus:before {
        content: "\f0d5"
      }

      .fa.fa-money {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-money:before {
        content: "\f3d1"
      }

      .fa.fa-unsorted:before {
        content: "\f0dc"
      }

      .fa.fa-sort-desc:before {
        content: "\f0dd"
      }

      .fa.fa-sort-asc:before {
        content: "\f0de"
      }

      .fa.fa-linkedin {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-linkedin:before {
        content: "\f0e1"
      }

      .fa.fa-rotate-left:before {
        content: "\f0e2"
      }

      .fa.fa-legal:before {
        content: "\f0e3"
      }

      .fa.fa-dashboard:before,
      .fa.fa-tachometer:before {
        content: "\f3fd"
      }

      .fa.fa-comment-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-comment-o:before {
        content: "\f075"
      }

      .fa.fa-comments-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-comments-o:before {
        content: "\f086"
      }

      .fa.fa-flash:before {
        content: "\f0e7"
      }

      .fa.fa-clipboard,
      .fa.fa-paste {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-paste:before {
        content: "\f328"
      }

      .fa.fa-lightbulb-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-lightbulb-o:before {
        content: "\f0eb"
      }

      .fa.fa-exchange:before {
        content: "\f362"
      }

      .fa.fa-cloud-download:before {
        content: "\f381"
      }

      .fa.fa-cloud-upload:before {
        content: "\f382"
      }

      .fa.fa-bell-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-bell-o:before {
        content: "\f0f3"
      }

      .fa.fa-cutlery:before {
        content: "\f2e7"
      }

      .fa.fa-file-text-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-file-text-o:before {
        content: "\f15c"
      }

      .fa.fa-building-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-building-o:before {
        content: "\f1ad"
      }

      .fa.fa-hospital-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-hospital-o:before {
        content: "\f0f8"
      }

      .fa.fa-tablet:before {
        content: "\f3fa"
      }

      .fa.fa-mobile-phone:before,
      .fa.fa-mobile:before {
        content: "\f3cd"
      }

      .fa.fa-circle-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-circle-o:before {
        content: "\f111"
      }

      .fa.fa-mail-reply:before {
        content: "\f3e5"
      }

      .fa.fa-github-alt {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-folder-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-folder-o:before {
        content: "\f07b"
      }

      .fa.fa-folder-open-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-folder-open-o:before {
        content: "\f07c"
      }

      .fa.fa-smile-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-smile-o:before {
        content: "\f118"
      }

      .fa.fa-frown-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-frown-o:before {
        content: "\f119"
      }

      .fa.fa-meh-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-meh-o:before {
        content: "\f11a"
      }

      .fa.fa-keyboard-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-keyboard-o:before {
        content: "\f11c"
      }

      .fa.fa-flag-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-flag-o:before {
        content: "\f024"
      }

      .fa.fa-mail-reply-all:before {
        content: "\f122"
      }

      .fa.fa-star-half-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-star-half-o:before {
        content: "\f089"
      }

      .fa.fa-star-half-empty {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-star-half-empty:before {
        content: "\f089"
      }

      .fa.fa-star-half-full {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-star-half-full:before {
        content: "\f089"
      }

      .fa.fa-code-fork:before {
        content: "\f126"
      }

      .fa.fa-chain-broken:before {
        content: "\f127"
      }

      .fa.fa-shield:before {
        content: "\f3ed"
      }

      .fa.fa-calendar-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-calendar-o:before {
        content: "\f133"
      }

      .fa.fa-css3,
      .fa.fa-html5,
      .fa.fa-maxcdn {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-ticket:before {
        content: "\f3ff"
      }

      .fa.fa-minus-square-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-minus-square-o:before {
        content: "\f146"
      }

      .fa.fa-level-up:before {
        content: "\f3bf"
      }

      .fa.fa-level-down:before {
        content: "\f3be"
      }

      .fa.fa-pencil-square:before {
        content: "\f14b"
      }

      .fa.fa-external-link-square:before {
        content: "\f360"
      }

      .fa.fa-compass {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-caret-square-o-down {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-caret-square-o-down:before {
        content: "\f150"
      }

      .fa.fa-toggle-down {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-toggle-down:before {
        content: "\f150"
      }

      .fa.fa-caret-square-o-up {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-caret-square-o-up:before {
        content: "\f151"
      }

      .fa.fa-toggle-up {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-toggle-up:before {
        content: "\f151"
      }

      .fa.fa-caret-square-o-right {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-caret-square-o-right:before {
        content: "\f152"
      }

      .fa.fa-toggle-right {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-toggle-right:before {
        content: "\f152"
      }

      .fa.fa-eur:before,
      .fa.fa-euro:before {
        content: "\f153"
      }

      .fa.fa-gbp:before {
        content: "\f154"
      }

      .fa.fa-dollar:before,
      .fa.fa-usd:before {
        content: "\f155"
      }

      .fa.fa-inr:before,
      .fa.fa-rupee:before {
        content: "\f156"
      }

      .fa.fa-cny:before,
      .fa.fa-jpy:before,
      .fa.fa-rmb:before,
      .fa.fa-yen:before {
        content: "\f157"
      }

      .fa.fa-rouble:before,
      .fa.fa-rub:before,
      .fa.fa-ruble:before {
        content: "\f158"
      }

      .fa.fa-krw:before,
      .fa.fa-won:before {
        content: "\f159"
      }

      .fa.fa-bitcoin,
      .fa.fa-btc {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-bitcoin:before {
        content: "\f15a"
      }

      .fa.fa-file-text:before {
        content: "\f15c"
      }

      .fa.fa-sort-alpha-asc:before {
        content: "\f15d"
      }

      .fa.fa-sort-alpha-desc:before {
        content: "\f881"
      }

      .fa.fa-sort-amount-asc:before {
        content: "\f160"
      }

      .fa.fa-sort-amount-desc:before {
        content: "\f884"
      }

      .fa.fa-sort-numeric-asc:before {
        content: "\f162"
      }

      .fa.fa-sort-numeric-desc:before {
        content: "\f886"
      }

      .fa.fa-xing,
      .fa.fa-xing-square,
      .fa.fa-youtube,
      .fa.fa-youtube-play,
      .fa.fa-youtube-square {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-youtube-play:before {
        content: "\f167"
      }

      .fa.fa-adn,
      .fa.fa-bitbucket,
      .fa.fa-bitbucket-square,
      .fa.fa-dropbox,
      .fa.fa-flickr,
      .fa.fa-instagram,
      .fa.fa-stack-overflow {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-bitbucket-square:before {
        content: "\f171"
      }

      .fa.fa-tumblr,
      .fa.fa-tumblr-square {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-long-arrow-down:before {
        content: "\f309"
      }

      .fa.fa-long-arrow-up:before {
        content: "\f30c"
      }

      .fa.fa-long-arrow-left:before {
        content: "\f30a"
      }

      .fa.fa-long-arrow-right:before {
        content: "\f30b"
      }

      .fa.fa-android,
      .fa.fa-apple,
      .fa.fa-dribbble,
      .fa.fa-foursquare,
      .fa.fa-gittip,
      .fa.fa-gratipay,
      .fa.fa-linux,
      .fa.fa-skype,
      .fa.fa-trello,
      .fa.fa-windows {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-gittip:before {
        content: "\f184"
      }

      .fa.fa-sun-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-sun-o:before {
        content: "\f185"
      }

      .fa.fa-moon-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-moon-o:before {
        content: "\f186"
      }

      .fa.fa-pagelines,
      .fa.fa-renren,
      .fa.fa-stack-exchange,
      .fa.fa-vk,
      .fa.fa-weibo {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-arrow-circle-o-right {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-arrow-circle-o-right:before {
        content: "\f35a"
      }

      .fa.fa-arrow-circle-o-left {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-arrow-circle-o-left:before {
        content: "\f359"
      }

      .fa.fa-caret-square-o-left {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-caret-square-o-left:before {
        content: "\f191"
      }

      .fa.fa-toggle-left {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-toggle-left:before {
        content: "\f191"
      }

      .fa.fa-dot-circle-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-dot-circle-o:before {
        content: "\f192"
      }

      .fa.fa-vimeo-square {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-try:before,
      .fa.fa-turkish-lira:before {
        content: "\f195"
      }

      .fa.fa-plus-square-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-plus-square-o:before {
        content: "\f0fe"
      }

      .fa.fa-openid,
      .fa.fa-slack,
      .fa.fa-wordpress {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-bank:before,
      .fa.fa-institution:before {
        content: "\f19c"
      }

      .fa.fa-mortar-board:before {
        content: "\f19d"
      }

      .fa.fa-delicious,
      .fa.fa-digg,
      .fa.fa-drupal,
      .fa.fa-google,
      .fa.fa-joomla,
      .fa.fa-pied-piper-alt,
      .fa.fa-pied-piper-pp,
      .fa.fa-reddit,
      .fa.fa-reddit-square,
      .fa.fa-stumbleupon,
      .fa.fa-stumbleupon-circle,
      .fa.fa-yahoo {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-spoon:before {
        content: "\f2e5"
      }

      .fa.fa-behance,
      .fa.fa-behance-square,
      .fa.fa-steam,
      .fa.fa-steam-square {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-automobile:before {
        content: "\f1b9"
      }

      .fa.fa-envelope-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-envelope-o:before {
        content: "\f0e0"
      }

      .fa.fa-deviantart,
      .fa.fa-soundcloud,
      .fa.fa-spotify {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-file-pdf-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-file-pdf-o:before {
        content: "\f1c1"
      }

      .fa.fa-file-word-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-file-word-o:before {
        content: "\f1c2"
      }

      .fa.fa-file-excel-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-file-excel-o:before {
        content: "\f1c3"
      }

      .fa.fa-file-powerpoint-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-file-powerpoint-o:before {
        content: "\f1c4"
      }

      .fa.fa-file-image-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-file-image-o:before {
        content: "\f1c5"
      }

      .fa.fa-file-photo-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-file-photo-o:before {
        content: "\f1c5"
      }

      .fa.fa-file-picture-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-file-picture-o:before {
        content: "\f1c5"
      }

      .fa.fa-file-archive-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-file-archive-o:before {
        content: "\f1c6"
      }

      .fa.fa-file-zip-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-file-zip-o:before {
        content: "\f1c6"
      }

      .fa.fa-file-audio-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-file-audio-o:before {
        content: "\f1c7"
      }

      .fa.fa-file-sound-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-file-sound-o:before {
        content: "\f1c7"
      }

      .fa.fa-file-video-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-file-video-o:before {
        content: "\f1c8"
      }

      .fa.fa-file-movie-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-file-movie-o:before {
        content: "\f1c8"
      }

      .fa.fa-file-code-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-file-code-o:before {
        content: "\f1c9"
      }

      .fa.fa-codepen,
      .fa.fa-jsfiddle,
      .fa.fa-vine {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-life-bouy,
      .fa.fa-life-ring {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-life-bouy:before {
        content: "\f1cd"
      }

      .fa.fa-life-buoy {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-life-buoy:before {
        content: "\f1cd"
      }

      .fa.fa-life-saver {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-life-saver:before {
        content: "\f1cd"
      }

      .fa.fa-support {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-support:before {
        content: "\f1cd"
      }

      .fa.fa-circle-o-notch:before {
        content: "\f1ce"
      }

      .fa.fa-ra,
      .fa.fa-rebel {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-ra:before {
        content: "\f1d0"
      }

      .fa.fa-resistance {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-resistance:before {
        content: "\f1d0"
      }

      .fa.fa-empire,
      .fa.fa-ge {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-ge:before {
        content: "\f1d1"
      }

      .fa.fa-git,
      .fa.fa-git-square,
      .fa.fa-hacker-news,
      .fa.fa-y-combinator-square {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-y-combinator-square:before {
        content: "\f1d4"
      }

      .fa.fa-yc-square {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-yc-square:before {
        content: "\f1d4"
      }

      .fa.fa-qq,
      .fa.fa-tencent-weibo,
      .fa.fa-wechat,
      .fa.fa-weixin {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-wechat:before {
        content: "\f1d7"
      }

      .fa.fa-send:before {
        content: "\f1d8"
      }

      .fa.fa-paper-plane-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-paper-plane-o:before {
        content: "\f1d8"
      }

      .fa.fa-send-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-send-o:before {
        content: "\f1d8"
      }

      .fa.fa-circle-thin {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-circle-thin:before {
        content: "\f111"
      }

      .fa.fa-header:before {
        content: "\f1dc"
      }

      .fa.fa-sliders:before {
        content: "\f1de"
      }

      .fa.fa-futbol-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-futbol-o:before {
        content: "\f1e3"
      }

      .fa.fa-soccer-ball-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-soccer-ball-o:before {
        content: "\f1e3"
      }

      .fa.fa-slideshare,
      .fa.fa-twitch,
      .fa.fa-yelp {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-newspaper-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-newspaper-o:before {
        content: "\f1ea"
      }

      .fa.fa-cc-amex,
      .fa.fa-cc-discover,
      .fa.fa-cc-mastercard,
      .fa.fa-cc-paypal,
      .fa.fa-cc-stripe,
      .fa.fa-cc-visa,
      .fa.fa-google-wallet,
      .fa.fa-paypal {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-bell-slash-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-bell-slash-o:before {
        content: "\f1f6"
      }

      .fa.fa-trash:before {
        content: "\f2ed"
      }

      .fa.fa-copyright {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-eyedropper:before {
        content: "\f1fb"
      }

      .fa.fa-area-chart:before {
        content: "\f1fe"
      }

      .fa.fa-pie-chart:before {
        content: "\f200"
      }

      .fa.fa-line-chart:before {
        content: "\f201"
      }

      .fa.fa-angellist,
      .fa.fa-ioxhost,
      .fa.fa-lastfm,
      .fa.fa-lastfm-square {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-cc {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-cc:before {
        content: "\f20a"
      }

      .fa.fa-ils:before,
      .fa.fa-shekel:before,
      .fa.fa-sheqel:before {
        content: "\f20b"
      }

      .fa.fa-meanpath {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-meanpath:before {
        content: "\f2b4"
      }

      .fa.fa-buysellads,
      .fa.fa-connectdevelop,
      .fa.fa-dashcube,
      .fa.fa-forumbee,
      .fa.fa-leanpub,
      .fa.fa-sellsy,
      .fa.fa-shirtsinbulk,
      .fa.fa-simplybuilt,
      .fa.fa-skyatlas {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-diamond {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-diamond:before {
        content: "\f3a5"
      }

      .fa.fa-intersex:before {
        content: "\f224"
      }

      .fa.fa-facebook-official {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-facebook-official:before {
        content: "\f09a"
      }

      .fa.fa-pinterest-p,
      .fa.fa-whatsapp {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-hotel:before {
        content: "\f236"
      }

      .fa.fa-medium,
      .fa.fa-viacoin,
      .fa.fa-y-combinator,
      .fa.fa-yc {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-yc:before {
        content: "\f23b"
      }

      .fa.fa-expeditedssl,
      .fa.fa-opencart,
      .fa.fa-optin-monster {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-battery-4:before,
      .fa.fa-battery:before {
        content: "\f240"
      }

      .fa.fa-battery-3:before {
        content: "\f241"
      }

      .fa.fa-battery-2:before {
        content: "\f242"
      }

      .fa.fa-battery-1:before {
        content: "\f243"
      }

      .fa.fa-battery-0:before {
        content: "\f244"
      }

      .fa.fa-object-group,
      .fa.fa-object-ungroup,
      .fa.fa-sticky-note-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-sticky-note-o:before {
        content: "\f249"
      }

      .fa.fa-cc-diners-club,
      .fa.fa-cc-jcb {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-clone,
      .fa.fa-hourglass-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-hourglass-o:before {
        content: "\f254"
      }

      .fa.fa-hourglass-1:before {
        content: "\f251"
      }

      .fa.fa-hourglass-2:before {
        content: "\f252"
      }

      .fa.fa-hourglass-3:before {
        content: "\f253"
      }

      .fa.fa-hand-rock-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-hand-rock-o:before {
        content: "\f255"
      }

      .fa.fa-hand-grab-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-hand-grab-o:before {
        content: "\f255"
      }

      .fa.fa-hand-paper-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-hand-paper-o:before {
        content: "\f256"
      }

      .fa.fa-hand-stop-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-hand-stop-o:before {
        content: "\f256"
      }

      .fa.fa-hand-scissors-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-hand-scissors-o:before {
        content: "\f257"
      }

      .fa.fa-hand-lizard-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-hand-lizard-o:before {
        content: "\f258"
      }

      .fa.fa-hand-spock-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-hand-spock-o:before {
        content: "\f259"
      }

      .fa.fa-hand-pointer-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-hand-pointer-o:before {
        content: "\f25a"
      }

      .fa.fa-hand-peace-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-hand-peace-o:before {
        content: "\f25b"
      }

      .fa.fa-registered {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-chrome,
      .fa.fa-creative-commons,
      .fa.fa-firefox,
      .fa.fa-get-pocket,
      .fa.fa-gg,
      .fa.fa-gg-circle,
      .fa.fa-internet-explorer,
      .fa.fa-odnoklassniki,
      .fa.fa-odnoklassniki-square,
      .fa.fa-opera,
      .fa.fa-safari,
      .fa.fa-wikipedia-w {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-television:before {
        content: "\f26c"
      }

      .fa.fa-500px,
      .fa.fa-amazon,
      .fa.fa-contao {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-calendar-plus-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-calendar-plus-o:before {
        content: "\f271"
      }

      .fa.fa-calendar-minus-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-calendar-minus-o:before {
        content: "\f272"
      }

      .fa.fa-calendar-times-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-calendar-times-o:before {
        content: "\f273"
      }

      .fa.fa-calendar-check-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-calendar-check-o:before {
        content: "\f274"
      }

      .fa.fa-map-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-map-o:before {
        content: "\f279"
      }

      .fa.fa-commenting:before {
        content: "\f4ad"
      }

      .fa.fa-commenting-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-commenting-o:before {
        content: "\f4ad"
      }

      .fa.fa-houzz,
      .fa.fa-vimeo {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-vimeo:before {
        content: "\f27d"
      }

      .fa.fa-black-tie,
      .fa.fa-edge,
      .fa.fa-fonticons,
      .fa.fa-reddit-alien {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-credit-card-alt:before {
        content: "\f09d"
      }

      .fa.fa-codiepie,
      .fa.fa-fort-awesome,
      .fa.fa-mixcloud,
      .fa.fa-modx,
      .fa.fa-product-hunt,
      .fa.fa-scribd,
      .fa.fa-usb {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-pause-circle-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-pause-circle-o:before {
        content: "\f28b"
      }

      .fa.fa-stop-circle-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-stop-circle-o:before {
        content: "\f28d"
      }

      .fa.fa-bluetooth,
      .fa.fa-bluetooth-b,
      .fa.fa-envira,
      .fa.fa-gitlab,
      .fa.fa-wheelchair-alt,
      .fa.fa-wpbeginner,
      .fa.fa-wpforms {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-wheelchair-alt:before {
        content: "\f368"
      }

      .fa.fa-question-circle-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-question-circle-o:before {
        content: "\f059"
      }

      .fa.fa-volume-control-phone:before {
        content: "\f2a0"
      }

      .fa.fa-asl-interpreting:before {
        content: "\f2a3"
      }

      .fa.fa-deafness:before,
      .fa.fa-hard-of-hearing:before {
        content: "\f2a4"
      }

      .fa.fa-glide,
      .fa.fa-glide-g {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-signing:before {
        content: "\f2a7"
      }

      .fa.fa-first-order,
      .fa.fa-google-plus-official,
      .fa.fa-pied-piper,
      .fa.fa-snapchat,
      .fa.fa-snapchat-ghost,
      .fa.fa-snapchat-square,
      .fa.fa-themeisle,
      .fa.fa-viadeo,
      .fa.fa-viadeo-square,
      .fa.fa-yoast {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-google-plus-official:before {
        content: "\f2b3"
      }

      .fa.fa-google-plus-circle {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-google-plus-circle:before {
        content: "\f2b3"
      }

      .fa.fa-fa,
      .fa.fa-font-awesome {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-fa:before {
        content: "\f2b4"
      }

      .fa.fa-handshake-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-handshake-o:before {
        content: "\f2b5"
      }

      .fa.fa-envelope-open-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-envelope-open-o:before {
        content: "\f2b6"
      }

      .fa.fa-linode {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-address-book-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-address-book-o:before {
        content: "\f2b9"
      }

      .fa.fa-vcard:before {
        content: "\f2bb"
      }

      .fa.fa-address-card-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-address-card-o:before {
        content: "\f2bb"
      }

      .fa.fa-vcard-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-vcard-o:before {
        content: "\f2bb"
      }

      .fa.fa-user-circle-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-user-circle-o:before {
        content: "\f2bd"
      }

      .fa.fa-user-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-user-o:before {
        content: "\f007"
      }

      .fa.fa-id-badge {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-drivers-license:before {
        content: "\f2c2"
      }

      .fa.fa-id-card-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-id-card-o:before {
        content: "\f2c2"
      }

      .fa.fa-drivers-license-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-drivers-license-o:before {
        content: "\f2c2"
      }

      .fa.fa-free-code-camp,
      .fa.fa-quora,
      .fa.fa-telegram {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-thermometer-4:before,
      .fa.fa-thermometer:before {
        content: "\f2c7"
      }

      .fa.fa-thermometer-3:before {
        content: "\f2c8"
      }

      .fa.fa-thermometer-2:before {
        content: "\f2c9"
      }

      .fa.fa-thermometer-1:before {
        content: "\f2ca"
      }

      .fa.fa-thermometer-0:before {
        content: "\f2cb"
      }

      .fa.fa-bathtub:before,
      .fa.fa-s15:before {
        content: "\f2cd"
      }

      .fa.fa-window-maximize,
      .fa.fa-window-restore {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-times-rectangle:before {
        content: "\f410"
      }

      .fa.fa-window-close-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-window-close-o:before {
        content: "\f410"
      }

      .fa.fa-times-rectangle-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-times-rectangle-o:before {
        content: "\f410"
      }

      .fa.fa-bandcamp,
      .fa.fa-eercast,
      .fa.fa-etsy,
      .fa.fa-grav,
      .fa.fa-imdb,
      .fa.fa-ravelry {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-eercast:before {
        content: "\f2da"
      }

      .fa.fa-snowflake-o {
        font-family: "Font Awesome 5 Free";
        font-weight: 400
      }

      .fa.fa-snowflake-o:before {
        content: "\f2dc"
      }

      .fa.fa-superpowers,
      .fa.fa-wpexplorer {
        font-family: "Font Awesome 5 Brands";
        font-weight: 400
      }

      .fa.fa-cab:before {
        content: "\f1ba"
      }
    </style>
    <style media="all" id="fa-main">
      /*!
 * Font Awesome Free 5.15.4 by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
 */
      .fa,
      .fab,
      .fad,
      .fal,
      .far,
      .fas {
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1
      }

      .fa-lg {
        font-size: 1.33333em;
        line-height: .75em;
        vertical-align: -.0667em
      }

      .fa-xs {
        font-size: .75em
      }

      .fa-sm {
        font-size: .875em
      }

      .fa-1x {
        font-size: 1em
      }

      .fa-2x {
        font-size: 2em
      }

      .fa-3x {
        font-size: 3em
      }

      .fa-4x {
        font-size: 4em
      }

      .fa-5x {
        font-size: 5em
      }

      .fa-6x {
        font-size: 6em
      }

      .fa-7x {
        font-size: 7em
      }

      .fa-8x {
        font-size: 8em
      }

      .fa-9x {
        font-size: 9em
      }

      .fa-10x {
        font-size: 10em
      }

      .fa-fw {
        text-align: center;
        width: 1.25em
      }

      .fa-ul {
        list-style-type: none;
        margin-left: 2.5em;
        padding-left: 0
      }

      .fa-ul>li {
        position: relative
      }

      .fa-li {
        left: -2em;
        position: absolute;
        text-align: center;
        width: 2em;
        line-height: inherit
      }

      .fa-border {
        border: .08em solid #eee;
        border-radius: .1em;
        padding: .2em .25em .15em
      }

      .fa-pull-left {
        float: left
      }

      .fa-pull-right {
        float: right
      }

      .fa.fa-pull-left,
      .fab.fa-pull-left,
      .fal.fa-pull-left,
      .far.fa-pull-left,
      .fas.fa-pull-left {
        margin-right: .3em
      }

      .fa.fa-pull-right,
      .fab.fa-pull-right,
      .fal.fa-pull-right,
      .far.fa-pull-right,
      .fas.fa-pull-right {
        margin-left: .3em
      }

      .fa-spin {
        -webkit-animation: fa-spin 2s linear infinite;
        animation: fa-spin 2s linear infinite
      }

      .fa-pulse {
        -webkit-animation: fa-spin 1s steps(8) infinite;
        animation: fa-spin 1s steps(8) infinite
      }

      @-webkit-keyframes fa-spin {
        0% {
          -webkit-transform: rotate(0deg);
          transform: rotate(0deg)
        }

        to {
          -webkit-transform: rotate(1turn);
          transform: rotate(1turn)
        }
      }

      @keyframes fa-spin {
        0% {
          -webkit-transform: rotate(0deg);
          transform: rotate(0deg)
        }

        to {
          -webkit-transform: rotate(1turn);
          transform: rotate(1turn)
        }
      }

      .fa-rotate-90 {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg)
      }

      .fa-rotate-180 {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg)
      }

      .fa-rotate-270 {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
        -webkit-transform: rotate(270deg);
        transform: rotate(270deg)
      }

      .fa-flip-horizontal {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1)
      }

      .fa-flip-vertical {
        -webkit-transform: scaleY(-1);
        transform: scaleY(-1)
      }

      .fa-flip-both,
      .fa-flip-horizontal.fa-flip-vertical,
      .fa-flip-vertical {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)"
      }

      .fa-flip-both,
      .fa-flip-horizontal.fa-flip-vertical {
        -webkit-transform: scale(-1);
        transform: scale(-1)
      }

      :root .fa-flip-both,
      :root .fa-flip-horizontal,
      :root .fa-flip-vertical,
      :root .fa-rotate-90,
      :root .fa-rotate-180,
      :root .fa-rotate-270 {
        -webkit-filter: none;
        filter: none
      }

      .fa-stack {
        display: inline-block;
        height: 2em;
        line-height: 2em;
        position: relative;
        vertical-align: middle;
        width: 2.5em
      }

      .fa-stack-1x,
      .fa-stack-2x {
        left: 0;
        position: absolute;
        text-align: center;
        width: 100%
      }

      .fa-stack-1x {
        line-height: inherit
      }

      .fa-stack-2x {
        font-size: 2em
      }

      .fa-inverse {
        color: #fff
      }

      .fa-500px:before {
        content: "\f26e"
      }

      .fa-accessible-icon:before {
        content: "\f368"
      }

      .fa-accusoft:before {
        content: "\f369"
      }

      .fa-acquisitions-incorporated:before {
        content: "\f6af"
      }

      .fa-ad:before {
        content: "\f641"
      }

      .fa-address-book:before {
        content: "\f2b9"
      }

      .fa-address-card:before {
        content: "\f2bb"
      }

      .fa-adjust:before {
        content: "\f042"
      }

      .fa-adn:before {
        content: "\f170"
      }

      .fa-adversal:before {
        content: "\f36a"
      }

      .fa-affiliatetheme:before {
        content: "\f36b"
      }

      .fa-air-freshener:before {
        content: "\f5d0"
      }

      .fa-airbnb:before {
        content: "\f834"
      }

      .fa-algolia:before {
        content: "\f36c"
      }

      .fa-align-center:before {
        content: "\f037"
      }

      .fa-align-justify:before {
        content: "\f039"
      }

      .fa-align-left:before {
        content: "\f036"
      }

      .fa-align-right:before {
        content: "\f038"
      }

      .fa-alipay:before {
        content: "\f642"
      }

      .fa-allergies:before {
        content: "\f461"
      }

      .fa-amazon:before {
        content: "\f270"
      }

      .fa-amazon-pay:before {
        content: "\f42c"
      }

      .fa-ambulance:before {
        content: "\f0f9"
      }

      .fa-american-sign-language-interpreting:before {
        content: "\f2a3"
      }

      .fa-amilia:before {
        content: "\f36d"
      }

      .fa-anchor:before {
        content: "\f13d"
      }

      .fa-android:before {
        content: "\f17b"
      }

      .fa-angellist:before {
        content: "\f209"
      }

      .fa-angle-double-down:before {
        content: "\f103"
      }

      .fa-angle-double-left:before {
        content: "\f100"
      }

      .fa-angle-double-right:before {
        content: "\f101"
      }

      .fa-angle-double-up:before {
        content: "\f102"
      }

      .fa-angle-down:before {
        content: "\f107"
      }

      .fa-angle-left:before {
        content: "\f104"
      }

      .fa-angle-right:before {
        content: "\f105"
      }

      .fa-angle-up:before {
        content: "\f106"
      }

      .fa-angry:before {
        content: "\f556"
      }

      .fa-angrycreative:before {
        content: "\f36e"
      }

      .fa-angular:before {
        content: "\f420"
      }

      .fa-ankh:before {
        content: "\f644"
      }

      .fa-app-store:before {
        content: "\f36f"
      }

      .fa-app-store-ios:before {
        content: "\f370"
      }

      .fa-apper:before {
        content: "\f371"
      }

      .fa-apple:before {
        content: "\f179"
      }

      .fa-apple-alt:before {
        content: "\f5d1"
      }

      .fa-apple-pay:before {
        content: "\f415"
      }

      .fa-archive:before {
        content: "\f187"
      }

      .fa-archway:before {
        content: "\f557"
      }

      .fa-arrow-alt-circle-down:before {
        content: "\f358"
      }

      .fa-arrow-alt-circle-left:before {
        content: "\f359"
      }

      .fa-arrow-alt-circle-right:before {
        content: "\f35a"
      }

      .fa-arrow-alt-circle-up:before {
        content: "\f35b"
      }

      .fa-arrow-circle-down:before {
        content: "\f0ab"
      }

      .fa-arrow-circle-left:before {
        content: "\f0a8"
      }

      .fa-arrow-circle-right:before {
        content: "\f0a9"
      }

      .fa-arrow-circle-up:before {
        content: "\f0aa"
      }

      .fa-arrow-down:before {
        content: "\f063"
      }

      .fa-arrow-left:before {
        content: "\f060"
      }

      .fa-arrow-right:before {
        content: "\f061"
      }

      .fa-arrow-up:before {
        content: "\f062"
      }

      .fa-arrows-alt:before {
        content: "\f0b2"
      }

      .fa-arrows-alt-h:before {
        content: "\f337"
      }

      .fa-arrows-alt-v:before {
        content: "\f338"
      }

      .fa-artstation:before {
        content: "\f77a"
      }

      .fa-assistive-listening-systems:before {
        content: "\f2a2"
      }

      .fa-asterisk:before {
        content: "\f069"
      }

      .fa-asymmetrik:before {
        content: "\f372"
      }

      .fa-at:before {
        content: "\f1fa"
      }

      .fa-atlas:before {
        content: "\f558"
      }

      .fa-atlassian:before {
        content: "\f77b"
      }

      .fa-atom:before {
        content: "\f5d2"
      }

      .fa-audible:before {
        content: "\f373"
      }

      .fa-audio-description:before {
        content: "\f29e"
      }

      .fa-autoprefixer:before {
        content: "\f41c"
      }

      .fa-avianex:before {
        content: "\f374"
      }

      .fa-aviato:before {
        content: "\f421"
      }

      .fa-award:before {
        content: "\f559"
      }

      .fa-aws:before {
        content: "\f375"
      }

      .fa-baby:before {
        content: "\f77c"
      }

      .fa-baby-carriage:before {
        content: "\f77d"
      }

      .fa-backspace:before {
        content: "\f55a"
      }

      .fa-backward:before {
        content: "\f04a"
      }

      .fa-bacon:before {
        content: "\f7e5"
      }

      .fa-bacteria:before {
        content: "\e059"
      }

      .fa-bacterium:before {
        content: "\e05a"
      }

      .fa-bahai:before {
        content: "\f666"
      }

      .fa-balance-scale:before {
        content: "\f24e"
      }

      .fa-balance-scale-left:before {
        content: "\f515"
      }

      .fa-balance-scale-right:before {
        content: "\f516"
      }

      .fa-ban:before {
        content: "\f05e"
      }

      .fa-band-aid:before {
        content: "\f462"
      }

      .fa-bandcamp:before {
        content: "\f2d5"
      }

      .fa-barcode:before {
        content: "\f02a"
      }

      .fa-bars:before {
        content: "\f0c9"
      }

      .fa-baseball-ball:before {
        content: "\f433"
      }

      .fa-basketball-ball:before {
        content: "\f434"
      }

      .fa-bath:before {
        content: "\f2cd"
      }

      .fa-battery-empty:before {
        content: "\f244"
      }

      .fa-battery-full:before {
        content: "\f240"
      }

      .fa-battery-half:before {
        content: "\f242"
      }

      .fa-battery-quarter:before {
        content: "\f243"
      }

      .fa-battery-three-quarters:before {
        content: "\f241"
      }

      .fa-battle-net:before {
        content: "\f835"
      }

      .fa-bed:before {
        content: "\f236"
      }

      .fa-beer:before {
        content: "\f0fc"
      }

      .fa-behance:before {
        content: "\f1b4"
      }

      .fa-behance-square:before {
        content: "\f1b5"
      }

      .fa-bell:before {
        content: "\f0f3"
      }

      .fa-bell-slash:before {
        content: "\f1f6"
      }

      .fa-bezier-curve:before {
        content: "\f55b"
      }

      .fa-bible:before {
        content: "\f647"
      }

      .fa-bicycle:before {
        content: "\f206"
      }

      .fa-biking:before {
        content: "\f84a"
      }

      .fa-bimobject:before {
        content: "\f378"
      }

      .fa-binoculars:before {
        content: "\f1e5"
      }

      .fa-biohazard:before {
        content: "\f780"
      }

      .fa-birthday-cake:before {
        content: "\f1fd"
      }

      .fa-bitbucket:before {
        content: "\f171"
      }

      .fa-bitcoin:before {
        content: "\f379"
      }

      .fa-bity:before {
        content: "\f37a"
      }

      .fa-black-tie:before {
        content: "\f27e"
      }

      .fa-blackberry:before {
        content: "\f37b"
      }

      .fa-blender:before {
        content: "\f517"
      }

      .fa-blender-phone:before {
        content: "\f6b6"
      }

      .fa-blind:before {
        content: "\f29d"
      }

      .fa-blog:before {
        content: "\f781"
      }

      .fa-blogger:before {
        content: "\f37c"
      }

      .fa-blogger-b:before {
        content: "\f37d"
      }

      .fa-bluetooth:before {
        content: "\f293"
      }

      .fa-bluetooth-b:before {
        content: "\f294"
      }

      .fa-bold:before {
        content: "\f032"
      }

      .fa-bolt:before {
        content: "\f0e7"
      }

      .fa-bomb:before {
        content: "\f1e2"
      }

      .fa-bone:before {
        content: "\f5d7"
      }

      .fa-bong:before {
        content: "\f55c"
      }

      .fa-book:before {
        content: "\f02d"
      }

      .fa-book-dead:before {
        content: "\f6b7"
      }

      .fa-book-medical:before {
        content: "\f7e6"
      }

      .fa-book-open:before {
        content: "\f518"
      }

      .fa-book-reader:before {
        content: "\f5da"
      }

      .fa-bookmark:before {
        content: "\f02e"
      }

      .fa-bootstrap:before {
        content: "\f836"
      }

      .fa-border-all:before {
        content: "\f84c"
      }

      .fa-border-none:before {
        content: "\f850"
      }

      .fa-border-style:before {
        content: "\f853"
      }

      .fa-bowling-ball:before {
        content: "\f436"
      }

      .fa-box:before {
        content: "\f466"
      }

      .fa-box-open:before {
        content: "\f49e"
      }

      .fa-box-tissue:before {
        content: "\e05b"
      }

      .fa-boxes:before {
        content: "\f468"
      }

      .fa-braille:before {
        content: "\f2a1"
      }

      .fa-brain:before {
        content: "\f5dc"
      }

      .fa-bread-slice:before {
        content: "\f7ec"
      }

      .fa-briefcase:before {
        content: "\f0b1"
      }

      .fa-briefcase-medical:before {
        content: "\f469"
      }

      .fa-broadcast-tower:before {
        content: "\f519"
      }

      .fa-broom:before {
        content: "\f51a"
      }

      .fa-brush:before {
        content: "\f55d"
      }

      .fa-btc:before {
        content: "\f15a"
      }

      .fa-buffer:before {
        content: "\f837"
      }

      .fa-bug:before {
        content: "\f188"
      }

      .fa-building:before {
        content: "\f1ad"
      }

      .fa-bullhorn:before {
        content: "\f0a1"
      }

      .fa-bullseye:before {
        content: "\f140"
      }

      .fa-burn:before {
        content: "\f46a"
      }

      .fa-buromobelexperte:before {
        content: "\f37f"
      }

      .fa-bus:before {
        content: "\f207"
      }

      .fa-bus-alt:before {
        content: "\f55e"
      }

      .fa-business-time:before {
        content: "\f64a"
      }

      .fa-buy-n-large:before {
        content: "\f8a6"
      }

      .fa-buysellads:before {
        content: "\f20d"
      }

      .fa-calculator:before {
        content: "\f1ec"
      }

      .fa-calendar:before {
        content: "\f133"
      }

      .fa-calendar-alt:before {
        content: "\f073"
      }

      .fa-calendar-check:before {
        content: "\f274"
      }

      .fa-calendar-day:before {
        content: "\f783"
      }

      .fa-calendar-minus:before {
        content: "\f272"
      }

      .fa-calendar-plus:before {
        content: "\f271"
      }

      .fa-calendar-times:before {
        content: "\f273"
      }

      .fa-calendar-week:before {
        content: "\f784"
      }

      .fa-camera:before {
        content: "\f030"
      }

      .fa-camera-retro:before {
        content: "\f083"
      }

      .fa-campground:before {
        content: "\f6bb"
      }

      .fa-canadian-maple-leaf:before {
        content: "\f785"
      }

      .fa-candy-cane:before {
        content: "\f786"
      }

      .fa-cannabis:before {
        content: "\f55f"
      }

      .fa-capsules:before {
        content: "\f46b"
      }

      .fa-car:before {
        content: "\f1b9"
      }

      .fa-car-alt:before {
        content: "\f5de"
      }

      .fa-car-battery:before {
        content: "\f5df"
      }

      .fa-car-crash:before {
        content: "\f5e1"
      }

      .fa-car-side:before {
        content: "\f5e4"
      }

      .fa-caravan:before {
        content: "\f8ff"
      }

      .fa-caret-down:before {
        content: "\f0d7"
      }

      .fa-caret-left:before {
        content: "\f0d9"
      }

      .fa-caret-right:before {
        content: "\f0da"
      }

      .fa-caret-square-down:before {
        content: "\f150"
      }

      .fa-caret-square-left:before {
        content: "\f191"
      }

      .fa-caret-square-right:before {
        content: "\f152"
      }

      .fa-caret-square-up:before {
        content: "\f151"
      }

      .fa-caret-up:before {
        content: "\f0d8"
      }

      .fa-carrot:before {
        content: "\f787"
      }

      .fa-cart-arrow-down:before {
        content: "\f218"
      }

      .fa-cart-plus:before {
        content: "\f217"
      }

      .fa-cash-register:before {
        content: "\f788"
      }

      .fa-cat:before {
        content: "\f6be"
      }

      .fa-cc-amazon-pay:before {
        content: "\f42d"
      }

      .fa-cc-amex:before {
        content: "\f1f3"
      }

      .fa-cc-apple-pay:before {
        content: "\f416"
      }

      .fa-cc-diners-club:before {
        content: "\f24c"
      }

      .fa-cc-discover:before {
        content: "\f1f2"
      }

      .fa-cc-jcb:before {
        content: "\f24b"
      }

      .fa-cc-mastercard:before {
        content: "\f1f1"
      }

      .fa-cc-paypal:before {
        content: "\f1f4"
      }

      .fa-cc-stripe:before {
        content: "\f1f5"
      }

      .fa-cc-visa:before {
        content: "\f1f0"
      }

      .fa-centercode:before {
        content: "\f380"
      }

      .fa-centos:before {
        content: "\f789"
      }

      .fa-certificate:before {
        content: "\f0a3"
      }

      .fa-chair:before {
        content: "\f6c0"
      }

      .fa-chalkboard:before {
        content: "\f51b"
      }

      .fa-chalkboard-teacher:before {
        content: "\f51c"
      }

      .fa-charging-station:before {
        content: "\f5e7"
      }

      .fa-chart-area:before {
        content: "\f1fe"
      }

      .fa-chart-bar:before {
        content: "\f080"
      }

      .fa-chart-line:before {
        content: "\f201"
      }

      .fa-chart-pie:before {
        content: "\f200"
      }

      .fa-check:before {
        content: "\f00c"
      }

      .fa-check-circle:before {
        content: "\f058"
      }

      .fa-check-double:before {
        content: "\f560"
      }

      .fa-check-square:before {
        content: "\f14a"
      }

      .fa-cheese:before {
        content: "\f7ef"
      }

      .fa-chess:before {
        content: "\f439"
      }

      .fa-chess-bishop:before {
        content: "\f43a"
      }

      .fa-chess-board:before {
        content: "\f43c"
      }

      .fa-chess-king:before {
        content: "\f43f"
      }

      .fa-chess-knight:before {
        content: "\f441"
      }

      .fa-chess-pawn:before {
        content: "\f443"
      }

      .fa-chess-queen:before {
        content: "\f445"
      }

      .fa-chess-rook:before {
        content: "\f447"
      }

      .fa-chevron-circle-down:before {
        content: "\f13a"
      }

      .fa-chevron-circle-left:before {
        content: "\f137"
      }

      .fa-chevron-circle-right:before {
        content: "\f138"
      }

      .fa-chevron-circle-up:before {
        content: "\f139"
      }

      .fa-chevron-down:before {
        content: "\f078"
      }

      .fa-chevron-left:before {
        content: "\f053"
      }

      .fa-chevron-right:before {
        content: "\f054"
      }

      .fa-chevron-up:before {
        content: "\f077"
      }

      .fa-child:before {
        content: "\f1ae"
      }

      .fa-chrome:before {
        content: "\f268"
      }

      .fa-chromecast:before {
        content: "\f838"
      }

      .fa-church:before {
        content: "\f51d"
      }

      .fa-circle:before {
        content: "\f111"
      }

      .fa-circle-notch:before {
        content: "\f1ce"
      }

      .fa-city:before {
        content: "\f64f"
      }

      .fa-clinic-medical:before {
        content: "\f7f2"
      }

      .fa-clipboard:before {
        content: "\f328"
      }

      .fa-clipboard-check:before {
        content: "\f46c"
      }

      .fa-clipboard-list:before {
        content: "\f46d"
      }

      .fa-clock:before {
        content: "\f017"
      }

      .fa-clone:before {
        content: "\f24d"
      }

      .fa-closed-captioning:before {
        content: "\f20a"
      }

      .fa-cloud:before {
        content: "\f0c2"
      }

      .fa-cloud-download-alt:before {
        content: "\f381"
      }

      .fa-cloud-meatball:before {
        content: "\f73b"
      }

      .fa-cloud-moon:before {
        content: "\f6c3"
      }

      .fa-cloud-moon-rain:before {
        content: "\f73c"
      }

      .fa-cloud-rain:before {
        content: "\f73d"
      }

      .fa-cloud-showers-heavy:before {
        content: "\f740"
      }

      .fa-cloud-sun:before {
        content: "\f6c4"
      }

      .fa-cloud-sun-rain:before {
        content: "\f743"
      }

      .fa-cloud-upload-alt:before {
        content: "\f382"
      }

      .fa-cloudflare:before {
        content: "\e07d"
      }

      .fa-cloudscale:before {
        content: "\f383"
      }

      .fa-cloudsmith:before {
        content: "\f384"
      }

      .fa-cloudversify:before {
        content: "\f385"
      }

      .fa-cocktail:before {
        content: "\f561"
      }

      .fa-code:before {
        content: "\f121"
      }

      .fa-code-branch:before {
        content: "\f126"
      }

      .fa-codepen:before {
        content: "\f1cb"
      }

      .fa-codiepie:before {
        content: "\f284"
      }

      .fa-coffee:before {
        content: "\f0f4"
      }

      .fa-cog:before {
        content: "\f013"
      }

      .fa-cogs:before {
        content: "\f085"
      }

      .fa-coins:before {
        content: "\f51e"
      }

      .fa-columns:before {
        content: "\f0db"
      }

      .fa-comment:before {
        content: "\f075"
      }

      .fa-comment-alt:before {
        content: "\f27a"
      }

      .fa-comment-dollar:before {
        content: "\f651"
      }

      .fa-comment-dots:before {
        content: "\f4ad"
      }

      .fa-comment-medical:before {
        content: "\f7f5"
      }

      .fa-comment-slash:before {
        content: "\f4b3"
      }

      .fa-comments:before {
        content: "\f086"
      }

      .fa-comments-dollar:before {
        content: "\f653"
      }

      .fa-compact-disc:before {
        content: "\f51f"
      }

      .fa-compass:before {
        content: "\f14e"
      }

      .fa-compress:before {
        content: "\f066"
      }

      .fa-compress-alt:before {
        content: "\f422"
      }

      .fa-compress-arrows-alt:before {
        content: "\f78c"
      }

      .fa-concierge-bell:before {
        content: "\f562"
      }

      .fa-confluence:before {
        content: "\f78d"
      }

      .fa-connectdevelop:before {
        content: "\f20e"
      }

      .fa-contao:before {
        content: "\f26d"
      }

      .fa-cookie:before {
        content: "\f563"
      }

      .fa-cookie-bite:before {
        content: "\f564"
      }

      .fa-copy:before {
        content: "\f0c5"
      }

      .fa-copyright:before {
        content: "\f1f9"
      }

      .fa-cotton-bureau:before {
        content: "\f89e"
      }

      .fa-couch:before {
        content: "\f4b8"
      }

      .fa-cpanel:before {
        content: "\f388"
      }

      .fa-creative-commons:before {
        content: "\f25e"
      }

      .fa-creative-commons-by:before {
        content: "\f4e7"
      }

      .fa-creative-commons-nc:before {
        content: "\f4e8"
      }

      .fa-creative-commons-nc-eu:before {
        content: "\f4e9"
      }

      .fa-creative-commons-nc-jp:before {
        content: "\f4ea"
      }

      .fa-creative-commons-nd:before {
        content: "\f4eb"
      }

      .fa-creative-commons-pd:before {
        content: "\f4ec"
      }

      .fa-creative-commons-pd-alt:before {
        content: "\f4ed"
      }

      .fa-creative-commons-remix:before {
        content: "\f4ee"
      }

      .fa-creative-commons-sa:before {
        content: "\f4ef"
      }

      .fa-creative-commons-sampling:before {
        content: "\f4f0"
      }

      .fa-creative-commons-sampling-plus:before {
        content: "\f4f1"
      }

      .fa-creative-commons-share:before {
        content: "\f4f2"
      }

      .fa-creative-commons-zero:before {
        content: "\f4f3"
      }

      .fa-credit-card:before {
        content: "\f09d"
      }

      .fa-critical-role:before {
        content: "\f6c9"
      }

      .fa-crop:before {
        content: "\f125"
      }

      .fa-crop-alt:before {
        content: "\f565"
      }

      .fa-cross:before {
        content: "\f654"
      }

      .fa-crosshairs:before {
        content: "\f05b"
      }

      .fa-crow:before {
        content: "\f520"
      }

      .fa-crown:before {
        content: "\f521"
      }

      .fa-crutch:before {
        content: "\f7f7"
      }

      .fa-css3:before {
        content: "\f13c"
      }

      .fa-css3-alt:before {
        content: "\f38b"
      }

      .fa-cube:before {
        content: "\f1b2"
      }

      .fa-cubes:before {
        content: "\f1b3"
      }

      .fa-cut:before {
        content: "\f0c4"
      }

      .fa-cuttlefish:before {
        content: "\f38c"
      }

      .fa-d-and-d:before {
        content: "\f38d"
      }

      .fa-d-and-d-beyond:before {
        content: "\f6ca"
      }

      .fa-dailymotion:before {
        content: "\e052"
      }

      .fa-dashcube:before {
        content: "\f210"
      }

      .fa-database:before {
        content: "\f1c0"
      }

      .fa-deaf:before {
        content: "\f2a4"
      }

      .fa-deezer:before {
        content: "\e077"
      }

      .fa-delicious:before {
        content: "\f1a5"
      }

      .fa-democrat:before {
        content: "\f747"
      }

      .fa-deploydog:before {
        content: "\f38e"
      }

      .fa-deskpro:before {
        content: "\f38f"
      }

      .fa-desktop:before {
        content: "\f108"
      }

      .fa-dev:before {
        content: "\f6cc"
      }

      .fa-deviantart:before {
        content: "\f1bd"
      }

      .fa-dharmachakra:before {
        content: "\f655"
      }

      .fa-dhl:before {
        content: "\f790"
      }

      .fa-diagnoses:before {
        content: "\f470"
      }

      .fa-diaspora:before {
        content: "\f791"
      }

      .fa-dice:before {
        content: "\f522"
      }

      .fa-dice-d20:before {
        content: "\f6cf"
      }

      .fa-dice-d6:before {
        content: "\f6d1"
      }

      .fa-dice-five:before {
        content: "\f523"
      }

      .fa-dice-four:before {
        content: "\f524"
      }

      .fa-dice-one:before {
        content: "\f525"
      }

      .fa-dice-six:before {
        content: "\f526"
      }

      .fa-dice-three:before {
        content: "\f527"
      }

      .fa-dice-two:before {
        content: "\f528"
      }

      .fa-digg:before {
        content: "\f1a6"
      }

      .fa-digital-ocean:before {
        content: "\f391"
      }

      .fa-digital-tachograph:before {
        content: "\f566"
      }

      .fa-directions:before {
        content: "\f5eb"
      }

      .fa-discord:before {
        content: "\f392"
      }

      .fa-discourse:before {
        content: "\f393"
      }

      .fa-disease:before {
        content: "\f7fa"
      }

      .fa-divide:before {
        content: "\f529"
      }

      .fa-dizzy:before {
        content: "\f567"
      }

      .fa-dna:before {
        content: "\f471"
      }

      .fa-dochub:before {
        content: "\f394"
      }

      .fa-docker:before {
        content: "\f395"
      }

      .fa-dog:before {
        content: "\f6d3"
      }

      .fa-dollar-sign:before {
        content: "\f155"
      }

      .fa-dolly:before {
        content: "\f472"
      }

      .fa-dolly-flatbed:before {
        content: "\f474"
      }

      .fa-donate:before {
        content: "\f4b9"
      }

      .fa-door-closed:before {
        content: "\f52a"
      }

      .fa-door-open:before {
        content: "\f52b"
      }

      .fa-dot-circle:before {
        content: "\f192"
      }

      .fa-dove:before {
        content: "\f4ba"
      }

      .fa-download:before {
        content: "\f019"
      }

      .fa-draft2digital:before {
        content: "\f396"
      }

      .fa-drafting-compass:before {
        content: "\f568"
      }

      .fa-dragon:before {
        content: "\f6d5"
      }

      .fa-draw-polygon:before {
        content: "\f5ee"
      }

      .fa-dribbble:before {
        content: "\f17d"
      }

      .fa-dribbble-square:before {
        content: "\f397"
      }

      .fa-dropbox:before {
        content: "\f16b"
      }

      .fa-drum:before {
        content: "\f569"
      }

      .fa-drum-steelpan:before {
        content: "\f56a"
      }

      .fa-drumstick-bite:before {
        content: "\f6d7"
      }

      .fa-drupal:before {
        content: "\f1a9"
      }

      .fa-dumbbell:before {
        content: "\f44b"
      }

      .fa-dumpster:before {
        content: "\f793"
      }

      .fa-dumpster-fire:before {
        content: "\f794"
      }

      .fa-dungeon:before {
        content: "\f6d9"
      }

      .fa-dyalog:before {
        content: "\f399"
      }

      .fa-earlybirds:before {
        content: "\f39a"
      }

      .fa-ebay:before {
        content: "\f4f4"
      }

      .fa-edge:before {
        content: "\f282"
      }

      .fa-edge-legacy:before {
        content: "\e078"
      }

      .fa-edit:before {
        content: "\f044"
      }

      .fa-egg:before {
        content: "\f7fb"
      }

      .fa-eject:before {
        content: "\f052"
      }

      .fa-elementor:before {
        content: "\f430"
      }

      .fa-ellipsis-h:before {
        content: "\f141"
      }

      .fa-ellipsis-v:before {
        content: "\f142"
      }

      .fa-ello:before {
        content: "\f5f1"
      }

      .fa-ember:before {
        content: "\f423"
      }

      .fa-empire:before {
        content: "\f1d1"
      }

      .fa-envelope:before {
        content: "\f0e0"
      }

      .fa-envelope-open:before {
        content: "\f2b6"
      }

      .fa-envelope-open-text:before {
        content: "\f658"
      }

      .fa-envelope-square:before {
        content: "\f199"
      }

      .fa-envira:before {
        content: "\f299"
      }

      .fa-equals:before {
        content: "\f52c"
      }

      .fa-eraser:before {
        content: "\f12d"
      }

      .fa-erlang:before {
        content: "\f39d"
      }

      .fa-ethereum:before {
        content: "\f42e"
      }

      .fa-ethernet:before {
        content: "\f796"
      }

      .fa-etsy:before {
        content: "\f2d7"
      }

      .fa-euro-sign:before {
        content: "\f153"
      }

      .fa-evernote:before {
        content: "\f839"
      }

      .fa-exchange-alt:before {
        content: "\f362"
      }

      .fa-exclamation:before {
        content: "\f12a"
      }

      .fa-exclamation-circle:before {
        content: "\f06a"
      }

      .fa-exclamation-triangle:before {
        content: "\f071"
      }

      .fa-expand:before {
        content: "\f065"
      }

      .fa-expand-alt:before {
        content: "\f424"
      }

      .fa-expand-arrows-alt:before {
        content: "\f31e"
      }

      .fa-expeditedssl:before {
        content: "\f23e"
      }

      .fa-external-link-alt:before {
        content: "\f35d"
      }

      .fa-external-link-square-alt:before {
        content: "\f360"
      }

      .fa-eye:before {
        content: "\f06e"
      }

      .fa-eye-dropper:before {
        content: "\f1fb"
      }

      .fa-eye-slash:before {
        content: "\f070"
      }

      .fa-facebook:before {
        content: "\f09a"
      }

      .fa-facebook-f:before {
        content: "\f39e"
      }

      .fa-facebook-messenger:before {
        content: "\f39f"
      }

      .fa-facebook-square:before {
        content: "\f082"
      }

      .fa-fan:before {
        content: "\f863"
      }

      .fa-fantasy-flight-games:before {
        content: "\f6dc"
      }

      .fa-fast-backward:before {
        content: "\f049"
      }

      .fa-fast-forward:before {
        content: "\f050"
      }

      .fa-faucet:before {
        content: "\e005"
      }

      .fa-fax:before {
        content: "\f1ac"
      }

      .fa-feather:before {
        content: "\f52d"
      }

      .fa-feather-alt:before {
        content: "\f56b"
      }

      .fa-fedex:before {
        content: "\f797"
      }

      .fa-fedora:before {
        content: "\f798"
      }

      .fa-female:before {
        content: "\f182"
      }

      .fa-fighter-jet:before {
        content: "\f0fb"
      }

      .fa-figma:before {
        content: "\f799"
      }

      .fa-file:before {
        content: "\f15b"
      }

      .fa-file-alt:before {
        content: "\f15c"
      }

      .fa-file-archive:before {
        content: "\f1c6"
      }

      .fa-file-audio:before {
        content: "\f1c7"
      }

      .fa-file-code:before {
        content: "\f1c9"
      }

      .fa-file-contract:before {
        content: "\f56c"
      }

      .fa-file-csv:before {
        content: "\f6dd"
      }

      .fa-file-download:before {
        content: "\f56d"
      }

      .fa-file-excel:before {
        content: "\f1c3"
      }

      .fa-file-export:before {
        content: "\f56e"
      }

      .fa-file-image:before {
        content: "\f1c5"
      }

      .fa-file-import:before {
        content: "\f56f"
      }

      .fa-file-invoice:before {
        content: "\f570"
      }

      .fa-file-invoice-dollar:before {
        content: "\f571"
      }

      .fa-file-medical:before {
        content: "\f477"
      }

      .fa-file-medical-alt:before {
        content: "\f478"
      }

      .fa-file-pdf:before {
        content: "\f1c1"
      }

      .fa-file-powerpoint:before {
        content: "\f1c4"
      }

      .fa-file-prescription:before {
        content: "\f572"
      }

      .fa-file-signature:before {
        content: "\f573"
      }

      .fa-file-upload:before {
        content: "\f574"
      }

      .fa-file-video:before {
        content: "\f1c8"
      }

      .fa-file-word:before {
        content: "\f1c2"
      }

      .fa-fill:before {
        content: "\f575"
      }

      .fa-fill-drip:before {
        content: "\f576"
      }

      .fa-film:before {
        content: "\f008"
      }

      .fa-filter:before {
        content: "\f0b0"
      }

      .fa-fingerprint:before {
        content: "\f577"
      }

      .fa-fire:before {
        content: "\f06d"
      }

      .fa-fire-alt:before {
        content: "\f7e4"
      }

      .fa-fire-extinguisher:before {
        content: "\f134"
      }

      .fa-firefox:before {
        content: "\f269"
      }

      .fa-firefox-browser:before {
        content: "\e007"
      }

      .fa-first-aid:before {
        content: "\f479"
      }

      .fa-first-order:before {
        content: "\f2b0"
      }

      .fa-first-order-alt:before {
        content: "\f50a"
      }

      .fa-firstdraft:before {
        content: "\f3a1"
      }

      .fa-fish:before {
        content: "\f578"
      }

      .fa-fist-raised:before {
        content: "\f6de"
      }

      .fa-flag:before {
        content: "\f024"
      }

      .fa-flag-checkered:before {
        content: "\f11e"
      }

      .fa-flag-usa:before {
        content: "\f74d"
      }

      .fa-flask:before {
        content: "\f0c3"
      }

      .fa-flickr:before {
        content: "\f16e"
      }

      .fa-flipboard:before {
        content: "\f44d"
      }

      .fa-flushed:before {
        content: "\f579"
      }

      .fa-fly:before {
        content: "\f417"
      }

      .fa-folder:before {
        content: "\f07b"
      }

      .fa-folder-minus:before {
        content: "\f65d"
      }

      .fa-folder-open:before {
        content: "\f07c"
      }

      .fa-folder-plus:before {
        content: "\f65e"
      }

      .fa-font:before {
        content: "\f031"
      }

      .fa-font-awesome:before {
        content: "\f2b4"
      }

      .fa-font-awesome-alt:before {
        content: "\f35c"
      }

      .fa-font-awesome-flag:before {
        content: "\f425"
      }

      .fa-font-awesome-logo-full:before {
        content: "\f4e6"
      }

      .fa-fonticons:before {
        content: "\f280"
      }

      .fa-fonticons-fi:before {
        content: "\f3a2"
      }

      .fa-football-ball:before {
        content: "\f44e"
      }

      .fa-fort-awesome:before {
        content: "\f286"
      }

      .fa-fort-awesome-alt:before {
        content: "\f3a3"
      }

      .fa-forumbee:before {
        content: "\f211"
      }

      .fa-forward:before {
        content: "\f04e"
      }

      .fa-foursquare:before {
        content: "\f180"
      }

      .fa-free-code-camp:before {
        content: "\f2c5"
      }

      .fa-freebsd:before {
        content: "\f3a4"
      }

      .fa-frog:before {
        content: "\f52e"
      }

      .fa-frown:before {
        content: "\f119"
      }

      .fa-frown-open:before {
        content: "\f57a"
      }

      .fa-fulcrum:before {
        content: "\f50b"
      }

      .fa-funnel-dollar:before {
        content: "\f662"
      }

      .fa-futbol:before {
        content: "\f1e3"
      }

      .fa-galactic-republic:before {
        content: "\f50c"
      }

      .fa-galactic-senate:before {
        content: "\f50d"
      }

      .fa-gamepad:before {
        content: "\f11b"
      }

      .fa-gas-pump:before {
        content: "\f52f"
      }

      .fa-gavel:before {
        content: "\f0e3"
      }

      .fa-gem:before {
        content: "\f3a5"
      }

      .fa-genderless:before {
        content: "\f22d"
      }

      .fa-get-pocket:before {
        content: "\f265"
      }

      .fa-gg:before {
        content: "\f260"
      }

      .fa-gg-circle:before {
        content: "\f261"
      }

      .fa-ghost:before {
        content: "\f6e2"
      }

      .fa-gift:before {
        content: "\f06b"
      }

      .fa-gifts:before {
        content: "\f79c"
      }

      .fa-git:before {
        content: "\f1d3"
      }

      .fa-git-alt:before {
        content: "\f841"
      }

      .fa-git-square:before {
        content: "\f1d2"
      }

      .fa-github:before {
        content: "\f09b"
      }

      .fa-github-alt:before {
        content: "\f113"
      }

      .fa-github-square:before {
        content: "\f092"
      }

      .fa-gitkraken:before {
        content: "\f3a6"
      }

      .fa-gitlab:before {
        content: "\f296"
      }

      .fa-gitter:before {
        content: "\f426"
      }

      .fa-glass-cheers:before {
        content: "\f79f"
      }

      .fa-glass-martini:before {
        content: "\f000"
      }

      .fa-glass-martini-alt:before {
        content: "\f57b"
      }

      .fa-glass-whiskey:before {
        content: "\f7a0"
      }

      .fa-glasses:before {
        content: "\f530"
      }

      .fa-glide:before {
        content: "\f2a5"
      }

      .fa-glide-g:before {
        content: "\f2a6"
      }

      .fa-globe:before {
        content: "\f0ac"
      }

      .fa-globe-africa:before {
        content: "\f57c"
      }

      .fa-globe-americas:before {
        content: "\f57d"
      }

      .fa-globe-asia:before {
        content: "\f57e"
      }

      .fa-globe-europe:before {
        content: "\f7a2"
      }

      .fa-gofore:before {
        content: "\f3a7"
      }

      .fa-golf-ball:before {
        content: "\f450"
      }

      .fa-goodreads:before {
        content: "\f3a8"
      }

      .fa-goodreads-g:before {
        content: "\f3a9"
      }

      .fa-google:before {
        content: "\f1a0"
      }

      .fa-google-drive:before {
        content: "\f3aa"
      }

      .fa-google-pay:before {
        content: "\e079"
      }

      .fa-google-play:before {
        content: "\f3ab"
      }

      .fa-google-plus:before {
        content: "\f2b3"
      }

      .fa-google-plus-g:before {
        content: "\f0d5"
      }

      .fa-google-plus-square:before {
        content: "\f0d4"
      }

      .fa-google-wallet:before {
        content: "\f1ee"
      }

      .fa-gopuram:before {
        content: "\f664"
      }

      .fa-graduation-cap:before {
        content: "\f19d"
      }

      .fa-gratipay:before {
        content: "\f184"
      }

      .fa-grav:before {
        content: "\f2d6"
      }

      .fa-greater-than:before {
        content: "\f531"
      }

      .fa-greater-than-equal:before {
        content: "\f532"
      }

      .fa-grimace:before {
        content: "\f57f"
      }

      .fa-grin:before {
        content: "\f580"
      }

      .fa-grin-alt:before {
        content: "\f581"
      }

      .fa-grin-beam:before {
        content: "\f582"
      }

      .fa-grin-beam-sweat:before {
        content: "\f583"
      }

      .fa-grin-hearts:before {
        content: "\f584"
      }

      .fa-grin-squint:before {
        content: "\f585"
      }

      .fa-grin-squint-tears:before {
        content: "\f586"
      }

      .fa-grin-stars:before {
        content: "\f587"
      }

      .fa-grin-tears:before {
        content: "\f588"
      }

      .fa-grin-tongue:before {
        content: "\f589"
      }

      .fa-grin-tongue-squint:before {
        content: "\f58a"
      }

      .fa-grin-tongue-wink:before {
        content: "\f58b"
      }

      .fa-grin-wink:before {
        content: "\f58c"
      }

      .fa-grip-horizontal:before {
        content: "\f58d"
      }

      .fa-grip-lines:before {
        content: "\f7a4"
      }

      .fa-grip-lines-vertical:before {
        content: "\f7a5"
      }

      .fa-grip-vertical:before {
        content: "\f58e"
      }

      .fa-gripfire:before {
        content: "\f3ac"
      }

      .fa-grunt:before {
        content: "\f3ad"
      }

      .fa-guilded:before {
        content: "\e07e"
      }

      .fa-guitar:before {
        content: "\f7a6"
      }

      .fa-gulp:before {
        content: "\f3ae"
      }

      .fa-h-square:before {
        content: "\f0fd"
      }

      .fa-hacker-news:before {
        content: "\f1d4"
      }

      .fa-hacker-news-square:before {
        content: "\f3af"
      }

      .fa-hackerrank:before {
        content: "\f5f7"
      }

      .fa-hamburger:before {
        content: "\f805"
      }

      .fa-hammer:before {
        content: "\f6e3"
      }

      .fa-hamsa:before {
        content: "\f665"
      }

      .fa-hand-holding:before {
        content: "\f4bd"
      }

      .fa-hand-holding-heart:before {
        content: "\f4be"
      }

      .fa-hand-holding-medical:before {
        content: "\e05c"
      }

      .fa-hand-holding-usd:before {
        content: "\f4c0"
      }

      .fa-hand-holding-water:before {
        content: "\f4c1"
      }

      .fa-hand-lizard:before {
        content: "\f258"
      }

      .fa-hand-middle-finger:before {
        content: "\f806"
      }

      .fa-hand-paper:before {
        content: "\f256"
      }

      .fa-hand-peace:before {
        content: "\f25b"
      }

      .fa-hand-point-down:before {
        content: "\f0a7"
      }

      .fa-hand-point-left:before {
        content: "\f0a5"
      }

      .fa-hand-point-right:before {
        content: "\f0a4"
      }

      .fa-hand-point-up:before {
        content: "\f0a6"
      }

      .fa-hand-pointer:before {
        content: "\f25a"
      }

      .fa-hand-rock:before {
        content: "\f255"
      }

      .fa-hand-scissors:before {
        content: "\f257"
      }

      .fa-hand-sparkles:before {
        content: "\e05d"
      }

      .fa-hand-spock:before {
        content: "\f259"
      }

      .fa-hands:before {
        content: "\f4c2"
      }

      .fa-hands-helping:before {
        content: "\f4c4"
      }

      .fa-hands-wash:before {
        content: "\e05e"
      }

      .fa-handshake:before {
        content: "\f2b5"
      }

      .fa-handshake-alt-slash:before {
        content: "\e05f"
      }

      .fa-handshake-slash:before {
        content: "\e060"
      }

      .fa-hanukiah:before {
        content: "\f6e6"
      }

      .fa-hard-hat:before {
        content: "\f807"
      }

      .fa-hashtag:before {
        content: "\f292"
      }

      .fa-hat-cowboy:before {
        content: "\f8c0"
      }

      .fa-hat-cowboy-side:before {
        content: "\f8c1"
      }

      .fa-hat-wizard:before {
        content: "\f6e8"
      }

      .fa-hdd:before {
        content: "\f0a0"
      }

      .fa-head-side-cough:before {
        content: "\e061"
      }

      .fa-head-side-cough-slash:before {
        content: "\e062"
      }

      .fa-head-side-mask:before {
        content: "\e063"
      }

      .fa-head-side-virus:before {
        content: "\e064"
      }

      .fa-heading:before {
        content: "\f1dc"
      }

      .fa-headphones:before {
        content: "\f025"
      }

      .fa-headphones-alt:before {
        content: "\f58f"
      }

      .fa-headset:before {
        content: "\f590"
      }

      .fa-heart:before {
        content: "\f004"
      }

      .fa-heart-broken:before {
        content: "\f7a9"
      }

      .fa-heartbeat:before {
        content: "\f21e"
      }

      .fa-helicopter:before {
        content: "\f533"
      }

      .fa-highlighter:before {
        content: "\f591"
      }

      .fa-hiking:before {
        content: "\f6ec"
      }

      .fa-hippo:before {
        content: "\f6ed"
      }

      .fa-hips:before {
        content: "\f452"
      }

      .fa-hire-a-helper:before {
        content: "\f3b0"
      }

      .fa-history:before {
        content: "\f1da"
      }

      .fa-hive:before {
        content: "\e07f"
      }

      .fa-hockey-puck:before {
        content: "\f453"
      }

      .fa-holly-berry:before {
        content: "\f7aa"
      }

      .fa-home:before {
        content: "\f015"
      }

      .fa-hooli:before {
        content: "\f427"
      }

      .fa-hornbill:before {
        content: "\f592"
      }

      .fa-horse:before {
        content: "\f6f0"
      }

      .fa-horse-head:before {
        content: "\f7ab"
      }

      .fa-hospital:before {
        content: "\f0f8"
      }

      .fa-hospital-alt:before {
        content: "\f47d"
      }

      .fa-hospital-symbol:before {
        content: "\f47e"
      }

      .fa-hospital-user:before {
        content: "\f80d"
      }

      .fa-hot-tub:before {
        content: "\f593"
      }

      .fa-hotdog:before {
        content: "\f80f"
      }

      .fa-hotel:before {
        content: "\f594"
      }

      .fa-hotjar:before {
        content: "\f3b1"
      }

      .fa-hourglass:before {
        content: "\f254"
      }

      .fa-hourglass-end:before {
        content: "\f253"
      }

      .fa-hourglass-half:before {
        content: "\f252"
      }

      .fa-hourglass-start:before {
        content: "\f251"
      }

      .fa-house-damage:before {
        content: "\f6f1"
      }

      .fa-house-user:before {
        content: "\e065"
      }

      .fa-houzz:before {
        content: "\f27c"
      }

      .fa-hryvnia:before {
        content: "\f6f2"
      }

      .fa-html5:before {
        content: "\f13b"
      }

      .fa-hubspot:before {
        content: "\f3b2"
      }

      .fa-i-cursor:before {
        content: "\f246"
      }

      .fa-ice-cream:before {
        content: "\f810"
      }

      .fa-icicles:before {
        content: "\f7ad"
      }

      .fa-icons:before {
        content: "\f86d"
      }

      .fa-id-badge:before {
        content: "\f2c1"
      }

      .fa-id-card:before {
        content: "\f2c2"
      }

      .fa-id-card-alt:before {
        content: "\f47f"
      }

      .fa-ideal:before {
        content: "\e013"
      }

      .fa-igloo:before {
        content: "\f7ae"
      }

      .fa-image:before {
        content: "\f03e"
      }

      .fa-images:before {
        content: "\f302"
      }

      .fa-imdb:before {
        content: "\f2d8"
      }

      .fa-inbox:before {
        content: "\f01c"
      }

      .fa-indent:before {
        content: "\f03c"
      }

      .fa-industry:before {
        content: "\f275"
      }

      .fa-infinity:before {
        content: "\f534"
      }

      .fa-info:before {
        content: "\f129"
      }

      .fa-info-circle:before {
        content: "\f05a"
      }

      .fa-innosoft:before {
        content: "\e080"
      }

      .fa-instagram:before {
        content: "\f16d"
      }

      .fa-instagram-square:before {
        content: "\e055"
      }

      .fa-instalod:before {
        content: "\e081"
      }

      .fa-intercom:before {
        content: "\f7af"
      }

      .fa-internet-explorer:before {
        content: "\f26b"
      }

      .fa-invision:before {
        content: "\f7b0"
      }

      .fa-ioxhost:before {
        content: "\f208"
      }

      .fa-italic:before {
        content: "\f033"
      }

      .fa-itch-io:before {
        content: "\f83a"
      }

      .fa-itunes:before {
        content: "\f3b4"
      }

      .fa-itunes-note:before {
        content: "\f3b5"
      }

      .fa-java:before {
        content: "\f4e4"
      }

      .fa-jedi:before {
        content: "\f669"
      }

      .fa-jedi-order:before {
        content: "\f50e"
      }

      .fa-jenkins:before {
        content: "\f3b6"
      }

      .fa-jira:before {
        content: "\f7b1"
      }

      .fa-joget:before {
        content: "\f3b7"
      }

      .fa-joint:before {
        content: "\f595"
      }

      .fa-joomla:before {
        content: "\f1aa"
      }

      .fa-journal-whills:before {
        content: "\f66a"
      }

      .fa-js:before {
        content: "\f3b8"
      }

      .fa-js-square:before {
        content: "\f3b9"
      }

      .fa-jsfiddle:before {
        content: "\f1cc"
      }

      .fa-kaaba:before {
        content: "\f66b"
      }

      .fa-kaggle:before {
        content: "\f5fa"
      }

      .fa-key:before {
        content: "\f084"
      }

      .fa-keybase:before {
        content: "\f4f5"
      }

      .fa-keyboard:before {
        content: "\f11c"
      }

      .fa-keycdn:before {
        content: "\f3ba"
      }

      .fa-khanda:before {
        content: "\f66d"
      }

      .fa-kickstarter:before {
        content: "\f3bb"
      }

      .fa-kickstarter-k:before {
        content: "\f3bc"
      }

      .fa-kiss:before {
        content: "\f596"
      }

      .fa-kiss-beam:before {
        content: "\f597"
      }

      .fa-kiss-wink-heart:before {
        content: "\f598"
      }

      .fa-kiwi-bird:before {
        content: "\f535"
      }

      .fa-korvue:before {
        content: "\f42f"
      }

      .fa-landmark:before {
        content: "\f66f"
      }

      .fa-language:before {
        content: "\f1ab"
      }

      .fa-laptop:before {
        content: "\f109"
      }

      .fa-laptop-code:before {
        content: "\f5fc"
      }

      .fa-laptop-house:before {
        content: "\e066"
      }

      .fa-laptop-medical:before {
        content: "\f812"
      }

      .fa-laravel:before {
        content: "\f3bd"
      }

      .fa-lastfm:before {
        content: "\f202"
      }

      .fa-lastfm-square:before {
        content: "\f203"
      }

      .fa-laugh:before {
        content: "\f599"
      }

      .fa-laugh-beam:before {
        content: "\f59a"
      }

      .fa-laugh-squint:before {
        content: "\f59b"
      }

      .fa-laugh-wink:before {
        content: "\f59c"
      }

      .fa-layer-group:before {
        content: "\f5fd"
      }

      .fa-leaf:before {
        content: "\f06c"
      }

      .fa-leanpub:before {
        content: "\f212"
      }

      .fa-lemon:before {
        content: "\f094"
      }

      .fa-less:before {
        content: "\f41d"
      }

      .fa-less-than:before {
        content: "\f536"
      }

      .fa-less-than-equal:before {
        content: "\f537"
      }

      .fa-level-down-alt:before {
        content: "\f3be"
      }

      .fa-level-up-alt:before {
        content: "\f3bf"
      }

      .fa-life-ring:before {
        content: "\f1cd"
      }

      .fa-lightbulb:before {
        content: "\f0eb"
      }

      .fa-line:before {
        content: "\f3c0"
      }

      .fa-link:before {
        content: "\f0c1"
      }

      .fa-linkedin:before {
        content: "\f08c"
      }

      .fa-linkedin-in:before {
        content: "\f0e1"
      }

      .fa-linode:before {
        content: "\f2b8"
      }

      .fa-linux:before {
        content: "\f17c"
      }

      .fa-lira-sign:before {
        content: "\f195"
      }

      .fa-list:before {
        content: "\f03a"
      }

      .fa-list-alt:before {
        content: "\f022"
      }

      .fa-list-ol:before {
        content: "\f0cb"
      }

      .fa-list-ul:before {
        content: "\f0ca"
      }

      .fa-location-arrow:before {
        content: "\f124"
      }

      .fa-lock:before {
        content: "\f023"
      }

      .fa-lock-open:before {
        content: "\f3c1"
      }

      .fa-long-arrow-alt-down:before {
        content: "\f309"
      }

      .fa-long-arrow-alt-left:before {
        content: "\f30a"
      }

      .fa-long-arrow-alt-right:before {
        content: "\f30b"
      }

      .fa-long-arrow-alt-up:before {
        content: "\f30c"
      }

      .fa-low-vision:before {
        content: "\f2a8"
      }

      .fa-luggage-cart:before {
        content: "\f59d"
      }

      .fa-lungs:before {
        content: "\f604"
      }

      .fa-lungs-virus:before {
        content: "\e067"
      }

      .fa-lyft:before {
        content: "\f3c3"
      }

      .fa-magento:before {
        content: "\f3c4"
      }

      .fa-magic:before {
        content: "\f0d0"
      }

      .fa-magnet:before {
        content: "\f076"
      }

      .fa-mail-bulk:before {
        content: "\f674"
      }

      .fa-mailchimp:before {
        content: "\f59e"
      }

      .fa-male:before {
        content: "\f183"
      }

      .fa-mandalorian:before {
        content: "\f50f"
      }

      .fa-map:before {
        content: "\f279"
      }

      .fa-map-marked:before {
        content: "\f59f"
      }

      .fa-map-marked-alt:before {
        content: "\f5a0"
      }

      .fa-map-marker:before {
        content: "\f041"
      }

      .fa-map-marker-alt:before {
        content: "\f3c5"
      }

      .fa-map-pin:before {
        content: "\f276"
      }

      .fa-map-signs:before {
        content: "\f277"
      }

      .fa-markdown:before {
        content: "\f60f"
      }

      .fa-marker:before {
        content: "\f5a1"
      }

      .fa-mars:before {
        content: "\f222"
      }

      .fa-mars-double:before {
        content: "\f227"
      }

      .fa-mars-stroke:before {
        content: "\f229"
      }

      .fa-mars-stroke-h:before {
        content: "\f22b"
      }

      .fa-mars-stroke-v:before {
        content: "\f22a"
      }

      .fa-mask:before {
        content: "\f6fa"
      }

      .fa-mastodon:before {
        content: "\f4f6"
      }

      .fa-maxcdn:before {
        content: "\f136"
      }

      .fa-mdb:before {
        content: "\f8ca"
      }

      .fa-medal:before {
        content: "\f5a2"
      }

      .fa-medapps:before {
        content: "\f3c6"
      }

      .fa-medium:before {
        content: "\f23a"
      }

      .fa-medium-m:before {
        content: "\f3c7"
      }

      .fa-medkit:before {
        content: "\f0fa"
      }

      .fa-medrt:before {
        content: "\f3c8"
      }

      .fa-meetup:before {
        content: "\f2e0"
      }

      .fa-megaport:before {
        content: "\f5a3"
      }

      .fa-meh:before {
        content: "\f11a"
      }

      .fa-meh-blank:before {
        content: "\f5a4"
      }

      .fa-meh-rolling-eyes:before {
        content: "\f5a5"
      }

      .fa-memory:before {
        content: "\f538"
      }

      .fa-mendeley:before {
        content: "\f7b3"
      }

      .fa-menorah:before {
        content: "\f676"
      }

      .fa-mercury:before {
        content: "\f223"
      }

      .fa-meteor:before {
        content: "\f753"
      }

      .fa-microblog:before {
        content: "\e01a"
      }

      .fa-microchip:before {
        content: "\f2db"
      }

      .fa-microphone:before {
        content: "\f130"
      }

      .fa-microphone-alt:before {
        content: "\f3c9"
      }

      .fa-microphone-alt-slash:before {
        content: "\f539"
      }

      .fa-microphone-slash:before {
        content: "\f131"
      }

      .fa-microscope:before {
        content: "\f610"
      }

      .fa-microsoft:before {
        content: "\f3ca"
      }

      .fa-minus:before {
        content: "\f068"
      }

      .fa-minus-circle:before {
        content: "\f056"
      }

      .fa-minus-square:before {
        content: "\f146"
      }

      .fa-mitten:before {
        content: "\f7b5"
      }

      .fa-mix:before {
        content: "\f3cb"
      }

      .fa-mixcloud:before {
        content: "\f289"
      }

      .fa-mixer:before {
        content: "\e056"
      }

      .fa-mizuni:before {
        content: "\f3cc"
      }

      .fa-mobile:before {
        content: "\f10b"
      }

      .fa-mobile-alt:before {
        content: "\f3cd"
      }

      .fa-modx:before {
        content: "\f285"
      }

      .fa-monero:before {
        content: "\f3d0"
      }

      .fa-money-bill:before {
        content: "\f0d6"
      }

      .fa-money-bill-alt:before {
        content: "\f3d1"
      }

      .fa-money-bill-wave:before {
        content: "\f53a"
      }

      .fa-money-bill-wave-alt:before {
        content: "\f53b"
      }

      .fa-money-check:before {
        content: "\f53c"
      }

      .fa-money-check-alt:before {
        content: "\f53d"
      }

      .fa-monument:before {
        content: "\f5a6"
      }

      .fa-moon:before {
        content: "\f186"
      }

      .fa-mortar-pestle:before {
        content: "\f5a7"
      }

      .fa-mosque:before {
        content: "\f678"
      }

      .fa-motorcycle:before {
        content: "\f21c"
      }

      .fa-mountain:before {
        content: "\f6fc"
      }

      .fa-mouse:before {
        content: "\f8cc"
      }

      .fa-mouse-pointer:before {
        content: "\f245"
      }

      .fa-mug-hot:before {
        content: "\f7b6"
      }

      .fa-music:before {
        content: "\f001"
      }

      .fa-napster:before {
        content: "\f3d2"
      }

      .fa-neos:before {
        content: "\f612"
      }

      .fa-network-wired:before {
        content: "\f6ff"
      }

      .fa-neuter:before {
        content: "\f22c"
      }

      .fa-newspaper:before {
        content: "\f1ea"
      }

      .fa-nimblr:before {
        content: "\f5a8"
      }

      .fa-node:before {
        content: "\f419"
      }

      .fa-node-js:before {
        content: "\f3d3"
      }

      .fa-not-equal:before {
        content: "\f53e"
      }

      .fa-notes-medical:before {
        content: "\f481"
      }

      .fa-npm:before {
        content: "\f3d4"
      }

      .fa-ns8:before {
        content: "\f3d5"
      }

      .fa-nutritionix:before {
        content: "\f3d6"
      }

      .fa-object-group:before {
        content: "\f247"
      }

      .fa-object-ungroup:before {
        content: "\f248"
      }

      .fa-octopus-deploy:before {
        content: "\e082"
      }

      .fa-odnoklassniki:before {
        content: "\f263"
      }

      .fa-odnoklassniki-square:before {
        content: "\f264"
      }

      .fa-oil-can:before {
        content: "\f613"
      }

      .fa-old-republic:before {
        content: "\f510"
      }

      .fa-om:before {
        content: "\f679"
      }

      .fa-opencart:before {
        content: "\f23d"
      }

      .fa-openid:before {
        content: "\f19b"
      }

      .fa-opera:before {
        content: "\f26a"
      }

      .fa-optin-monster:before {
        content: "\f23c"
      }

      .fa-orcid:before {
        content: "\f8d2"
      }

      .fa-osi:before {
        content: "\f41a"
      }

      .fa-otter:before {
        content: "\f700"
      }

      .fa-outdent:before {
        content: "\f03b"
      }

      .fa-page4:before {
        content: "\f3d7"
      }

      .fa-pagelines:before {
        content: "\f18c"
      }

      .fa-pager:before {
        content: "\f815"
      }

      .fa-paint-brush:before {
        content: "\f1fc"
      }

      .fa-paint-roller:before {
        content: "\f5aa"
      }

      .fa-palette:before {
        content: "\f53f"
      }

      .fa-palfed:before {
        content: "\f3d8"
      }

      .fa-pallet:before {
        content: "\f482"
      }

      .fa-paper-plane:before {
        content: "\f1d8"
      }

      .fa-paperclip:before {
        content: "\f0c6"
      }

      .fa-parachute-box:before {
        content: "\f4cd"
      }

      .fa-paragraph:before {
        content: "\f1dd"
      }

      .fa-parking:before {
        content: "\f540"
      }

      .fa-passport:before {
        content: "\f5ab"
      }

      .fa-pastafarianism:before {
        content: "\f67b"
      }

      .fa-paste:before {
        content: "\f0ea"
      }

      .fa-patreon:before {
        content: "\f3d9"
      }

      .fa-pause:before {
        content: "\f04c"
      }

      .fa-pause-circle:before {
        content: "\f28b"
      }

      .fa-paw:before {
        content: "\f1b0"
      }

      .fa-paypal:before {
        content: "\f1ed"
      }

      .fa-peace:before {
        content: "\f67c"
      }

      .fa-pen:before {
        content: "\f304"
      }

      .fa-pen-alt:before {
        content: "\f305"
      }

      .fa-pen-fancy:before {
        content: "\f5ac"
      }

      .fa-pen-nib:before {
        content: "\f5ad"
      }

      .fa-pen-square:before {
        content: "\f14b"
      }

      .fa-pencil-alt:before {
        content: "\f303"
      }

      .fa-pencil-ruler:before {
        content: "\f5ae"
      }

      .fa-penny-arcade:before {
        content: "\f704"
      }

      .fa-people-arrows:before {
        content: "\e068"
      }

      .fa-people-carry:before {
        content: "\f4ce"
      }

      .fa-pepper-hot:before {
        content: "\f816"
      }

      .fa-perbyte:before {
        content: "\e083"
      }

      .fa-percent:before {
        content: "\f295"
      }

      .fa-percentage:before {
        content: "\f541"
      }

      .fa-periscope:before {
        content: "\f3da"
      }

      .fa-person-booth:before {
        content: "\f756"
      }

      .fa-phabricator:before {
        content: "\f3db"
      }

      .fa-phoenix-framework:before {
        content: "\f3dc"
      }

      .fa-phoenix-squadron:before {
        content: "\f511"
      }

      .fa-phone:before {
        content: "\f095"
      }

      .fa-phone-alt:before {
        content: "\f879"
      }

      .fa-phone-slash:before {
        content: "\f3dd"
      }

      .fa-phone-square:before {
        content: "\f098"
      }

      .fa-phone-square-alt:before {
        content: "\f87b"
      }

      .fa-phone-volume:before {
        content: "\f2a0"
      }

      .fa-photo-video:before {
        content: "\f87c"
      }

      .fa-php:before {
        content: "\f457"
      }

      .fa-pied-piper:before {
        content: "\f2ae"
      }

      .fa-pied-piper-alt:before {
        content: "\f1a8"
      }

      .fa-pied-piper-hat:before {
        content: "\f4e5"
      }

      .fa-pied-piper-pp:before {
        content: "\f1a7"
      }

      .fa-pied-piper-square:before {
        content: "\e01e"
      }

      .fa-piggy-bank:before {
        content: "\f4d3"
      }

      .fa-pills:before {
        content: "\f484"
      }

      .fa-pinterest:before {
        content: "\f0d2"
      }

      .fa-pinterest-p:before {
        content: "\f231"
      }

      .fa-pinterest-square:before {
        content: "\f0d3"
      }

      .fa-pizza-slice:before {
        content: "\f818"
      }

      .fa-place-of-worship:before {
        content: "\f67f"
      }

      .fa-plane:before {
        content: "\f072"
      }

      .fa-plane-arrival:before {
        content: "\f5af"
      }

      .fa-plane-departure:before {
        content: "\f5b0"
      }

      .fa-plane-slash:before {
        content: "\e069"
      }

      .fa-play:before {
        content: "\f04b"
      }

      .fa-play-circle:before {
        content: "\f144"
      }

      .fa-playstation:before {
        content: "\f3df"
      }

      .fa-plug:before {
        content: "\f1e6"
      }

      .fa-plus:before {
        content: "\f067"
      }

      .fa-plus-circle:before {
        content: "\f055"
      }

      .fa-plus-square:before {
        content: "\f0fe"
      }

      .fa-podcast:before {
        content: "\f2ce"
      }

      .fa-poll:before {
        content: "\f681"
      }

      .fa-poll-h:before {
        content: "\f682"
      }

      .fa-poo:before {
        content: "\f2fe"
      }

      .fa-poo-storm:before {
        content: "\f75a"
      }

      .fa-poop:before {
        content: "\f619"
      }

      .fa-portrait:before {
        content: "\f3e0"
      }

      .fa-pound-sign:before {
        content: "\f154"
      }

      .fa-power-off:before {
        content: "\f011"
      }

      .fa-pray:before {
        content: "\f683"
      }

      .fa-praying-hands:before {
        content: "\f684"
      }

      .fa-prescription:before {
        content: "\f5b1"
      }

      .fa-prescription-bottle:before {
        content: "\f485"
      }

      .fa-prescription-bottle-alt:before {
        content: "\f486"
      }

      .fa-print:before {
        content: "\f02f"
      }

      .fa-procedures:before {
        content: "\f487"
      }

      .fa-product-hunt:before {
        content: "\f288"
      }

      .fa-project-diagram:before {
        content: "\f542"
      }

      .fa-pump-medical:before {
        content: "\e06a"
      }

      .fa-pump-soap:before {
        content: "\e06b"
      }

      .fa-pushed:before {
        content: "\f3e1"
      }

      .fa-puzzle-piece:before {
        content: "\f12e"
      }

      .fa-python:before {
        content: "\f3e2"
      }

      .fa-qq:before {
        content: "\f1d6"
      }

      .fa-qrcode:before {
        content: "\f029"
      }

      .fa-question:before {
        content: "\f128"
      }

      .fa-question-circle:before {
        content: "\f059"
      }

      .fa-quidditch:before {
        content: "\f458"
      }

      .fa-quinscape:before {
        content: "\f459"
      }

      .fa-quora:before {
        content: "\f2c4"
      }

      .fa-quote-left:before {
        content: "\f10d"
      }

      .fa-quote-right:before {
        content: "\f10e"
      }

      .fa-quran:before {
        content: "\f687"
      }

      .fa-r-project:before {
        content: "\f4f7"
      }

      .fa-radiation:before {
        content: "\f7b9"
      }

      .fa-radiation-alt:before {
        content: "\f7ba"
      }

      .fa-rainbow:before {
        content: "\f75b"
      }

      .fa-random:before {
        content: "\f074"
      }

      .fa-raspberry-pi:before {
        content: "\f7bb"
      }

      .fa-ravelry:before {
        content: "\f2d9"
      }

      .fa-react:before {
        content: "\f41b"
      }

      .fa-reacteurope:before {
        content: "\f75d"
      }

      .fa-readme:before {
        content: "\f4d5"
      }

      .fa-rebel:before {
        content: "\f1d0"
      }

      .fa-receipt:before {
        content: "\f543"
      }

      .fa-record-vinyl:before {
        content: "\f8d9"
      }

      .fa-recycle:before {
        content: "\f1b8"
      }

      .fa-red-river:before {
        content: "\f3e3"
      }

      .fa-reddit:before {
        content: "\f1a1"
      }

      .fa-reddit-alien:before {
        content: "\f281"
      }

      .fa-reddit-square:before {
        content: "\f1a2"
      }

      .fa-redhat:before {
        content: "\f7bc"
      }

      .fa-redo:before {
        content: "\f01e"
      }

      .fa-redo-alt:before {
        content: "\f2f9"
      }

      .fa-registered:before {
        content: "\f25d"
      }

      .fa-remove-format:before {
        content: "\f87d"
      }

      .fa-renren:before {
        content: "\f18b"
      }

      .fa-reply:before {
        content: "\f3e5"
      }

      .fa-reply-all:before {
        content: "\f122"
      }

      .fa-replyd:before {
        content: "\f3e6"
      }

      .fa-republican:before {
        content: "\f75e"
      }

      .fa-researchgate:before {
        content: "\f4f8"
      }

      .fa-resolving:before {
        content: "\f3e7"
      }

      .fa-restroom:before {
        content: "\f7bd"
      }

      .fa-retweet:before {
        content: "\f079"
      }

      .fa-rev:before {
        content: "\f5b2"
      }

      .fa-ribbon:before {
        content: "\f4d6"
      }

      .fa-ring:before {
        content: "\f70b"
      }

      .fa-road:before {
        content: "\f018"
      }

      .fa-robot:before {
        content: "\f544"
      }

      .fa-rocket:before {
        content: "\f135"
      }

      .fa-rocketchat:before {
        content: "\f3e8"
      }

      .fa-rockrms:before {
        content: "\f3e9"
      }

      .fa-route:before {
        content: "\f4d7"
      }

      .fa-rss:before {
        content: "\f09e"
      }

      .fa-rss-square:before {
        content: "\f143"
      }

      .fa-ruble-sign:before {
        content: "\f158"
      }

      .fa-ruler:before {
        content: "\f545"
      }

      .fa-ruler-combined:before {
        content: "\f546"
      }

      .fa-ruler-horizontal:before {
        content: "\f547"
      }

      .fa-ruler-vertical:before {
        content: "\f548"
      }

      .fa-running:before {
        content: "\f70c"
      }

      .fa-rupee-sign:before {
        content: "\f156"
      }

      .fa-rust:before {
        content: "\e07a"
      }

      .fa-sad-cry:before {
        content: "\f5b3"
      }

      .fa-sad-tear:before {
        content: "\f5b4"
      }

      .fa-safari:before {
        content: "\f267"
      }

      .fa-salesforce:before {
        content: "\f83b"
      }

      .fa-sass:before {
        content: "\f41e"
      }

      .fa-satellite:before {
        content: "\f7bf"
      }

      .fa-satellite-dish:before {
        content: "\f7c0"
      }

      .fa-save:before {
        content: "\f0c7"
      }

      .fa-schlix:before {
        content: "\f3ea"
      }

      .fa-school:before {
        content: "\f549"
      }

      .fa-screwdriver:before {
        content: "\f54a"
      }

      .fa-scribd:before {
        content: "\f28a"
      }

      .fa-scroll:before {
        content: "\f70e"
      }

      .fa-sd-card:before {
        content: "\f7c2"
      }

      .fa-search:before {
        content: "\f002"
      }

      .fa-search-dollar:before {
        content: "\f688"
      }

      .fa-search-location:before {
        content: "\f689"
      }

      .fa-search-minus:before {
        content: "\f010"
      }

      .fa-search-plus:before {
        content: "\f00e"
      }

      .fa-searchengin:before {
        content: "\f3eb"
      }

      .fa-seedling:before {
        content: "\f4d8"
      }

      .fa-sellcast:before {
        content: "\f2da"
      }

      .fa-sellsy:before {
        content: "\f213"
      }

      .fa-server:before {
        content: "\f233"
      }

      .fa-servicestack:before {
        content: "\f3ec"
      }

      .fa-shapes:before {
        content: "\f61f"
      }

      .fa-share:before {
        content: "\f064"
      }

      .fa-share-alt:before {
        content: "\f1e0"
      }

      .fa-share-alt-square:before {
        content: "\f1e1"
      }

      .fa-share-square:before {
        content: "\f14d"
      }

      .fa-shekel-sign:before {
        content: "\f20b"
      }

      .fa-shield-alt:before {
        content: "\f3ed"
      }

      .fa-shield-virus:before {
        content: "\e06c"
      }

      .fa-ship:before {
        content: "\f21a"
      }

      .fa-shipping-fast:before {
        content: "\f48b"
      }

      .fa-shirtsinbulk:before {
        content: "\f214"
      }

      .fa-shoe-prints:before {
        content: "\f54b"
      }

      .fa-shopify:before {
        content: "\e057"
      }

      .fa-shopping-bag:before {
        content: "\f290"
      }

      .fa-shopping-basket:before {
        content: "\f291"
      }

      .fa-shopping-cart:before {
        content: "\f07a"
      }

      .fa-shopware:before {
        content: "\f5b5"
      }

      .fa-shower:before {
        content: "\f2cc"
      }

      .fa-shuttle-van:before {
        content: "\f5b6"
      }

      .fa-sign:before {
        content: "\f4d9"
      }

      .fa-sign-in-alt:before {
        content: "\f2f6"
      }

      .fa-sign-language:before {
        content: "\f2a7"
      }

      .fa-sign-out-alt:before {
        content: "\f2f5"
      }

      .fa-signal:before {
        content: "\f012"
      }

      .fa-signature:before {
        content: "\f5b7"
      }

      .fa-sim-card:before {
        content: "\f7c4"
      }

      .fa-simplybuilt:before {
        content: "\f215"
      }

      .fa-sink:before {
        content: "\e06d"
      }

      .fa-sistrix:before {
        content: "\f3ee"
      }

      .fa-sitemap:before {
        content: "\f0e8"
      }

      .fa-sith:before {
        content: "\f512"
      }

      .fa-skating:before {
        content: "\f7c5"
      }

      .fa-sketch:before {
        content: "\f7c6"
      }

      .fa-skiing:before {
        content: "\f7c9"
      }

      .fa-skiing-nordic:before {
        content: "\f7ca"
      }

      .fa-skull:before {
        content: "\f54c"
      }

      .fa-skull-crossbones:before {
        content: "\f714"
      }

      .fa-skyatlas:before {
        content: "\f216"
      }

      .fa-skype:before {
        content: "\f17e"
      }

      .fa-slack:before {
        content: "\f198"
      }

      .fa-slack-hash:before {
        content: "\f3ef"
      }

      .fa-slash:before {
        content: "\f715"
      }

      .fa-sleigh:before {
        content: "\f7cc"
      }

      .fa-sliders-h:before {
        content: "\f1de"
      }

      .fa-slideshare:before {
        content: "\f1e7"
      }

      .fa-smile:before {
        content: "\f118"
      }

      .fa-smile-beam:before {
        content: "\f5b8"
      }

      .fa-smile-wink:before {
        content: "\f4da"
      }

      .fa-smog:before {
        content: "\f75f"
      }

      .fa-smoking:before {
        content: "\f48d"
      }

      .fa-smoking-ban:before {
        content: "\f54d"
      }

      .fa-sms:before {
        content: "\f7cd"
      }

      .fa-snapchat:before {
        content: "\f2ab"
      }

      .fa-snapchat-ghost:before {
        content: "\f2ac"
      }

      .fa-snapchat-square:before {
        content: "\f2ad"
      }

      .fa-snowboarding:before {
        content: "\f7ce"
      }

      .fa-snowflake:before {
        content: "\f2dc"
      }

      .fa-snowman:before {
        content: "\f7d0"
      }

      .fa-snowplow:before {
        content: "\f7d2"
      }

      .fa-soap:before {
        content: "\e06e"
      }

      .fa-socks:before {
        content: "\f696"
      }

      .fa-solar-panel:before {
        content: "\f5ba"
      }

      .fa-sort:before {
        content: "\f0dc"
      }

      .fa-sort-alpha-down:before {
        content: "\f15d"
      }

      .fa-sort-alpha-down-alt:before {
        content: "\f881"
      }

      .fa-sort-alpha-up:before {
        content: "\f15e"
      }

      .fa-sort-alpha-up-alt:before {
        content: "\f882"
      }

      .fa-sort-amount-down:before {
        content: "\f160"
      }

      .fa-sort-amount-down-alt:before {
        content: "\f884"
      }

      .fa-sort-amount-up:before {
        content: "\f161"
      }

      .fa-sort-amount-up-alt:before {
        content: "\f885"
      }

      .fa-sort-down:before {
        content: "\f0dd"
      }

      .fa-sort-numeric-down:before {
        content: "\f162"
      }

      .fa-sort-numeric-down-alt:before {
        content: "\f886"
      }

      .fa-sort-numeric-up:before {
        content: "\f163"
      }

      .fa-sort-numeric-up-alt:before {
        content: "\f887"
      }

      .fa-sort-up:before {
        content: "\f0de"
      }

      .fa-soundcloud:before {
        content: "\f1be"
      }

      .fa-sourcetree:before {
        content: "\f7d3"
      }

      .fa-spa:before {
        content: "\f5bb"
      }

      .fa-space-shuttle:before {
        content: "\f197"
      }

      .fa-speakap:before {
        content: "\f3f3"
      }

      .fa-speaker-deck:before {
        content: "\f83c"
      }

      .fa-spell-check:before {
        content: "\f891"
      }

      .fa-spider:before {
        content: "\f717"
      }

      .fa-spinner:before {
        content: "\f110"
      }

      .fa-splotch:before {
        content: "\f5bc"
      }

      .fa-spotify:before {
        content: "\f1bc"
      }

      .fa-spray-can:before {
        content: "\f5bd"
      }

      .fa-square:before {
        content: "\f0c8"
      }

      .fa-square-full:before {
        content: "\f45c"
      }

      .fa-square-root-alt:before {
        content: "\f698"
      }

      .fa-squarespace:before {
        content: "\f5be"
      }

      .fa-stack-exchange:before {
        content: "\f18d"
      }

      .fa-stack-overflow:before {
        content: "\f16c"
      }

      .fa-stackpath:before {
        content: "\f842"
      }

      .fa-stamp:before {
        content: "\f5bf"
      }

      .fa-star:before {
        content: "\f005"
      }

      .fa-star-and-crescent:before {
        content: "\f699"
      }

      .fa-star-half:before {
        content: "\f089"
      }

      .fa-star-half-alt:before {
        content: "\f5c0"
      }

      .fa-star-of-david:before {
        content: "\f69a"
      }

      .fa-star-of-life:before {
        content: "\f621"
      }

      .fa-staylinked:before {
        content: "\f3f5"
      }

      .fa-steam:before {
        content: "\f1b6"
      }

      .fa-steam-square:before {
        content: "\f1b7"
      }

      .fa-steam-symbol:before {
        content: "\f3f6"
      }

      .fa-step-backward:before {
        content: "\f048"
      }

      .fa-step-forward:before {
        content: "\f051"
      }

      .fa-stethoscope:before {
        content: "\f0f1"
      }

      .fa-sticker-mule:before {
        content: "\f3f7"
      }

      .fa-sticky-note:before {
        content: "\f249"
      }

      .fa-stop:before {
        content: "\f04d"
      }

      .fa-stop-circle:before {
        content: "\f28d"
      }

      .fa-stopwatch:before {
        content: "\f2f2"
      }

      .fa-stopwatch-20:before {
        content: "\e06f"
      }

      .fa-store:before {
        content: "\f54e"
      }

      .fa-store-alt:before {
        content: "\f54f"
      }

      .fa-store-alt-slash:before {
        content: "\e070"
      }

      .fa-store-slash:before {
        content: "\e071"
      }

      .fa-strava:before {
        content: "\f428"
      }

      .fa-stream:before {
        content: "\f550"
      }

      .fa-street-view:before {
        content: "\f21d"
      }

      .fa-strikethrough:before {
        content: "\f0cc"
      }

      .fa-stripe:before {
        content: "\f429"
      }

      .fa-stripe-s:before {
        content: "\f42a"
      }

      .fa-stroopwafel:before {
        content: "\f551"
      }

      .fa-studiovinari:before {
        content: "\f3f8"
      }

      .fa-stumbleupon:before {
        content: "\f1a4"
      }

      .fa-stumbleupon-circle:before {
        content: "\f1a3"
      }

      .fa-subscript:before {
        content: "\f12c"
      }

      .fa-subway:before {
        content: "\f239"
      }

      .fa-suitcase:before {
        content: "\f0f2"
      }

      .fa-suitcase-rolling:before {
        content: "\f5c1"
      }

      .fa-sun:before {
        content: "\f185"
      }

      .fa-superpowers:before {
        content: "\f2dd"
      }

      .fa-superscript:before {
        content: "\f12b"
      }

      .fa-supple:before {
        content: "\f3f9"
      }

      .fa-surprise:before {
        content: "\f5c2"
      }

      .fa-suse:before {
        content: "\f7d6"
      }

      .fa-swatchbook:before {
        content: "\f5c3"
      }

      .fa-swift:before {
        content: "\f8e1"
      }

      .fa-swimmer:before {
        content: "\f5c4"
      }

      .fa-swimming-pool:before {
        content: "\f5c5"
      }

      .fa-symfony:before {
        content: "\f83d"
      }

      .fa-synagogue:before {
        content: "\f69b"
      }

      .fa-sync:before {
        content: "\f021"
      }

      .fa-sync-alt:before {
        content: "\f2f1"
      }

      .fa-syringe:before {
        content: "\f48e"
      }

      .fa-table:before {
        content: "\f0ce"
      }

      .fa-table-tennis:before {
        content: "\f45d"
      }

      .fa-tablet:before {
        content: "\f10a"
      }

      .fa-tablet-alt:before {
        content: "\f3fa"
      }

      .fa-tablets:before {
        content: "\f490"
      }

      .fa-tachometer-alt:before {
        content: "\f3fd"
      }

      .fa-tag:before {
        content: "\f02b"
      }

      .fa-tags:before {
        content: "\f02c"
      }

      .fa-tape:before {
        content: "\f4db"
      }

      .fa-tasks:before {
        content: "\f0ae"
      }

      .fa-taxi:before {
        content: "\f1ba"
      }

      .fa-teamspeak:before {
        content: "\f4f9"
      }

      .fa-teeth:before {
        content: "\f62e"
      }

      .fa-teeth-open:before {
        content: "\f62f"
      }

      .fa-telegram:before {
        content: "\f2c6"
      }

      .fa-telegram-plane:before {
        content: "\f3fe"
      }

      .fa-temperature-high:before {
        content: "\f769"
      }

      .fa-temperature-low:before {
        content: "\f76b"
      }

      .fa-tencent-weibo:before {
        content: "\f1d5"
      }

      .fa-tenge:before {
        content: "\f7d7"
      }

      .fa-terminal:before {
        content: "\f120"
      }

      .fa-text-height:before {
        content: "\f034"
      }

      .fa-text-width:before {
        content: "\f035"
      }

      .fa-th:before {
        content: "\f00a"
      }

      .fa-th-large:before {
        content: "\f009"
      }

      .fa-th-list:before {
        content: "\f00b"
      }

      .fa-the-red-yeti:before {
        content: "\f69d"
      }

      .fa-theater-masks:before {
        content: "\f630"
      }

      .fa-themeco:before {
        content: "\f5c6"
      }

      .fa-themeisle:before {
        content: "\f2b2"
      }

      .fa-thermometer:before {
        content: "\f491"
      }

      .fa-thermometer-empty:before {
        content: "\f2cb"
      }

      .fa-thermometer-full:before {
        content: "\f2c7"
      }

      .fa-thermometer-half:before {
        content: "\f2c9"
      }

      .fa-thermometer-quarter:before {
        content: "\f2ca"
      }

      .fa-thermometer-three-quarters:before {
        content: "\f2c8"
      }

      .fa-think-peaks:before {
        content: "\f731"
      }

      .fa-thumbs-down:before {
        content: "\f165"
      }

      .fa-thumbs-up:before {
        content: "\f164"
      }

      .fa-thumbtack:before {
        content: "\f08d"
      }

      .fa-ticket-alt:before {
        content: "\f3ff"
      }

      .fa-tiktok:before {
        content: "\e07b"
      }

      .fa-times:before {
        content: "\f00d"
      }

      .fa-times-circle:before {
        content: "\f057"
      }

      .fa-tint:before {
        content: "\f043"
      }

      .fa-tint-slash:before {
        content: "\f5c7"
      }

      .fa-tired:before {
        content: "\f5c8"
      }

      .fa-toggle-off:before {
        content: "\f204"
      }

      .fa-toggle-on:before {
        content: "\f205"
      }

      .fa-toilet:before {
        content: "\f7d8"
      }

      .fa-toilet-paper:before {
        content: "\f71e"
      }

      .fa-toilet-paper-slash:before {
        content: "\e072"
      }

      .fa-toolbox:before {
        content: "\f552"
      }

      .fa-tools:before {
        content: "\f7d9"
      }

      .fa-tooth:before {
        content: "\f5c9"
      }

      .fa-torah:before {
        content: "\f6a0"
      }

      .fa-torii-gate:before {
        content: "\f6a1"
      }

      .fa-tractor:before {
        content: "\f722"
      }

      .fa-trade-federation:before {
        content: "\f513"
      }

      .fa-trademark:before {
        content: "\f25c"
      }

      .fa-traffic-light:before {
        content: "\f637"
      }

      .fa-trailer:before {
        content: "\e041"
      }

      .fa-train:before {
        content: "\f238"
      }

      .fa-tram:before {
        content: "\f7da"
      }

      .fa-transgender:before {
        content: "\f224"
      }

      .fa-transgender-alt:before {
        content: "\f225"
      }

      .fa-trash:before {
        content: "\f1f8"
      }

      .fa-trash-alt:before {
        content: "\f2ed"
      }

      .fa-trash-restore:before {
        content: "\f829"
      }

      .fa-trash-restore-alt:before {
        content: "\f82a"
      }

      .fa-tree:before {
        content: "\f1bb"
      }

      .fa-trello:before {
        content: "\f181"
      }

      .fa-trophy:before {
        content: "\f091"
      }

      .fa-truck:before {
        content: "\f0d1"
      }

      .fa-truck-loading:before {
        content: "\f4de"
      }

      .fa-truck-monster:before {
        content: "\f63b"
      }

      .fa-truck-moving:before {
        content: "\f4df"
      }

      .fa-truck-pickup:before {
        content: "\f63c"
      }

      .fa-tshirt:before {
        content: "\f553"
      }

      .fa-tty:before {
        content: "\f1e4"
      }

      .fa-tumblr:before {
        content: "\f173"
      }

      .fa-tumblr-square:before {
        content: "\f174"
      }

      .fa-tv:before {
        content: "\f26c"
      }

      .fa-twitch:before {
        content: "\f1e8"
      }

      .fa-twitter:before {
        content: "\f099"
      }

      .fa-twitter-square:before {
        content: "\f081"
      }

      .fa-typo3:before {
        content: "\f42b"
      }

      .fa-uber:before {
        content: "\f402"
      }

      .fa-ubuntu:before {
        content: "\f7df"
      }

      .fa-uikit:before {
        content: "\f403"
      }

      .fa-umbraco:before {
        content: "\f8e8"
      }

      .fa-umbrella:before {
        content: "\f0e9"
      }

      .fa-umbrella-beach:before {
        content: "\f5ca"
      }

      .fa-uncharted:before {
        content: "\e084"
      }

      .fa-underline:before {
        content: "\f0cd"
      }

      .fa-undo:before {
        content: "\f0e2"
      }

      .fa-undo-alt:before {
        content: "\f2ea"
      }

      .fa-uniregistry:before {
        content: "\f404"
      }

      .fa-unity:before {
        content: "\e049"
      }

      .fa-universal-access:before {
        content: "\f29a"
      }

      .fa-university:before {
        content: "\f19c"
      }

      .fa-unlink:before {
        content: "\f127"
      }

      .fa-unlock:before {
        content: "\f09c"
      }

      .fa-unlock-alt:before {
        content: "\f13e"
      }

      .fa-unsplash:before {
        content: "\e07c"
      }

      .fa-untappd:before {
        content: "\f405"
      }

      .fa-upload:before {
        content: "\f093"
      }

      .fa-ups:before {
        content: "\f7e0"
      }

      .fa-usb:before {
        content: "\f287"
      }

      .fa-user:before {
        content: "\f007"
      }

      .fa-user-alt:before {
        content: "\f406"
      }

      .fa-user-alt-slash:before {
        content: "\f4fa"
      }

      .fa-user-astronaut:before {
        content: "\f4fb"
      }

      .fa-user-check:before {
        content: "\f4fc"
      }

      .fa-user-circle:before {
        content: "\f2bd"
      }

      .fa-user-clock:before {
        content: "\f4fd"
      }

      .fa-user-cog:before {
        content: "\f4fe"
      }

      .fa-user-edit:before {
        content: "\f4ff"
      }

      .fa-user-friends:before {
        content: "\f500"
      }

      .fa-user-graduate:before {
        content: "\f501"
      }

      .fa-user-injured:before {
        content: "\f728"
      }

      .fa-user-lock:before {
        content: "\f502"
      }

      .fa-user-md:before {
        content: "\f0f0"
      }

      .fa-user-minus:before {
        content: "\f503"
      }

      .fa-user-ninja:before {
        content: "\f504"
      }

      .fa-user-nurse:before {
        content: "\f82f"
      }

      .fa-user-plus:before {
        content: "\f234"
      }

      .fa-user-secret:before {
        content: "\f21b"
      }

      .fa-user-shield:before {
        content: "\f505"
      }

      .fa-user-slash:before {
        content: "\f506"
      }

      .fa-user-tag:before {
        content: "\f507"
      }

      .fa-user-tie:before {
        content: "\f508"
      }

      .fa-user-times:before {
        content: "\f235"
      }

      .fa-users:before {
        content: "\f0c0"
      }

      .fa-users-cog:before {
        content: "\f509"
      }

      .fa-users-slash:before {
        content: "\e073"
      }

      .fa-usps:before {
        content: "\f7e1"
      }

      .fa-ussunnah:before {
        content: "\f407"
      }

      .fa-utensil-spoon:before {
        content: "\f2e5"
      }

      .fa-utensils:before {
        content: "\f2e7"
      }

      .fa-vaadin:before {
        content: "\f408"
      }

      .fa-vector-square:before {
        content: "\f5cb"
      }

      .fa-venus:before {
        content: "\f221"
      }

      .fa-venus-double:before {
        content: "\f226"
      }

      .fa-venus-mars:before {
        content: "\f228"
      }

      .fa-vest:before {
        content: "\e085"
      }

      .fa-vest-patches:before {
        content: "\e086"
      }

      .fa-viacoin:before {
        content: "\f237"
      }

      .fa-viadeo:before {
        content: "\f2a9"
      }

      .fa-viadeo-square:before {
        content: "\f2aa"
      }

      .fa-vial:before {
        content: "\f492"
      }

      .fa-vials:before {
        content: "\f493"
      }

      .fa-viber:before {
        content: "\f409"
      }

      .fa-video:before {
        content: "\f03d"
      }

      .fa-video-slash:before {
        content: "\f4e2"
      }

      .fa-vihara:before {
        content: "\f6a7"
      }

      .fa-vimeo:before {
        content: "\f40a"
      }

      .fa-vimeo-square:before {
        content: "\f194"
      }

      .fa-vimeo-v:before {
        content: "\f27d"
      }

      .fa-vine:before {
        content: "\f1ca"
      }

      .fa-virus:before {
        content: "\e074"
      }

      .fa-virus-slash:before {
        content: "\e075"
      }

      .fa-viruses:before {
        content: "\e076"
      }

      .fa-vk:before {
        content: "\f189"
      }

      .fa-vnv:before {
        content: "\f40b"
      }

      .fa-voicemail:before {
        content: "\f897"
      }

      .fa-volleyball-ball:before {
        content: "\f45f"
      }

      .fa-volume-down:before {
        content: "\f027"
      }

      .fa-volume-mute:before {
        content: "\f6a9"
      }

      .fa-volume-off:before {
        content: "\f026"
      }

      .fa-volume-up:before {
        content: "\f028"
      }

      .fa-vote-yea:before {
        content: "\f772"
      }

      .fa-vr-cardboard:before {
        content: "\f729"
      }

      .fa-vuejs:before {
        content: "\f41f"
      }

      .fa-walking:before {
        content: "\f554"
      }

      .fa-wallet:before {
        content: "\f555"
      }

      .fa-warehouse:before {
        content: "\f494"
      }

      .fa-watchman-monitoring:before {
        content: "\e087"
      }

      .fa-water:before {
        content: "\f773"
      }

      .fa-wave-square:before {
        content: "\f83e"
      }

      .fa-waze:before {
        content: "\f83f"
      }

      .fa-weebly:before {
        content: "\f5cc"
      }

      .fa-weibo:before {
        content: "\f18a"
      }

      .fa-weight:before {
        content: "\f496"
      }

      .fa-weight-hanging:before {
        content: "\f5cd"
      }

      .fa-weixin:before {
        content: "\f1d7"
      }

      .fa-whatsapp:before {
        content: "\f232"
      }

      .fa-whatsapp-square:before {
        content: "\f40c"
      }

      .fa-wheelchair:before {
        content: "\f193"
      }

      .fa-whmcs:before {
        content: "\f40d"
      }

      .fa-wifi:before {
        content: "\f1eb"
      }

      .fa-wikipedia-w:before {
        content: "\f266"
      }

      .fa-wind:before {
        content: "\f72e"
      }

      .fa-window-close:before {
        content: "\f410"
      }

      .fa-window-maximize:before {
        content: "\f2d0"
      }

      .fa-window-minimize:before {
        content: "\f2d1"
      }

      .fa-window-restore:before {
        content: "\f2d2"
      }

      .fa-windows:before {
        content: "\f17a"
      }

      .fa-wine-bottle:before {
        content: "\f72f"
      }

      .fa-wine-glass:before {
        content: "\f4e3"
      }

      .fa-wine-glass-alt:before {
        content: "\f5ce"
      }

      .fa-wix:before {
        content: "\f5cf"
      }

      .fa-wizards-of-the-coast:before {
        content: "\f730"
      }

      .fa-wodu:before {
        content: "\e088"
      }

      .fa-wolf-pack-battalion:before {
        content: "\f514"
      }

      .fa-won-sign:before {
        content: "\f159"
      }

      .fa-wordpress:before {
        content: "\f19a"
      }

      .fa-wordpress-simple:before {
        content: "\f411"
      }

      .fa-wpbeginner:before {
        content: "\f297"
      }

      .fa-wpexplorer:before {
        content: "\f2de"
      }

      .fa-wpforms:before {
        content: "\f298"
      }

      .fa-wpressr:before {
        content: "\f3e4"
      }

      .fa-wrench:before {
        content: "\f0ad"
      }

      .fa-x-ray:before {
        content: "\f497"
      }

      .fa-xbox:before {
        content: "\f412"
      }

      .fa-xing:before {
        content: "\f168"
      }

      .fa-xing-square:before {
        content: "\f169"
      }

      .fa-y-combinator:before {
        content: "\f23b"
      }

      .fa-yahoo:before {
        content: "\f19e"
      }

      .fa-yammer:before {
        content: "\f840"
      }

      .fa-yandex:before {
        content: "\f413"
      }

      .fa-yandex-international:before {
        content: "\f414"
      }

      .fa-yarn:before {
        content: "\f7e3"
      }

      .fa-yelp:before {
        content: "\f1e9"
      }

      .fa-yen-sign:before {
        content: "\f157"
      }

      .fa-yin-yang:before {
        content: "\f6ad"
      }

      .fa-yoast:before {
        content: "\f2b1"
      }

      .fa-youtube:before {
        content: "\f167"
      }

      .fa-youtube-square:before {
        content: "\f431"
      }

      .fa-zhihu:before {
        content: "\f63f"
      }

      .sr-only {
        border: 0;
        clip: rect(0, 0, 0, 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px
      }

      .sr-only-focusable:active,
      .sr-only-focusable:focus {
        clip: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        position: static;
        width: auto
      }

      @font-face {
        font-family: "Font Awesome 5 Brands";
        font-style: normal;
        font-weight: 400;
        font-display: block;
        src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.eot);
        src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.eot?#iefix) format("embedded-opentype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.woff2) format("woff2"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.woff) format("woff"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.ttf) format("truetype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.svg#fontawesome) format("svg")
      }

      .fab {
        font-family: "Font Awesome 5 Brands"
      }

      @font-face {
        font-family: "Font Awesome 5 Free";
        font-style: normal;
        font-weight: 400;
        font-display: block;
        src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.eot);
        src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.eot?#iefix) format("embedded-opentype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.woff2) format("woff2"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.woff) format("woff"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.ttf) format("truetype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.svg#fontawesome) format("svg")
      }

      @font-face {
        font-family: "Font Awesome 5 Pro";
        font-style: normal;
        font-weight: 400;
        font-display: block;
        src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.eot);
        src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.eot?#iefix) format("embedded-opentype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.woff2) format("woff2"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.woff) format("woff"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.ttf) format("truetype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.svg#fontawesome) format("svg")
      }

      .fab,
      .far {
        font-weight: 400
      }

      @font-face {
        font-family: "Font Awesome 5 Free";
        font-style: normal;
        font-weight: 900;
        font-display: block;
        src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.eot);
        src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.eot?#iefix) format("embedded-opentype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.woff2) format("woff2"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.woff) format("woff"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.ttf) format("truetype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.svg#fontawesome) format("svg")
      }

      @font-face {
        font-family: "Font Awesome 5 Pro";
        font-style: normal;
        font-weight: 900;
        font-display: block;
        src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.eot);
        src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.eot?#iefix) format("embedded-opentype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.woff2) format("woff2"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.woff) format("woff"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.ttf) format("truetype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.svg#fontawesome) format("svg")
      }

      .fa,
      .far,
      .fas {
        font-family: "Font Awesome 5 Free"
      }

      .fa,
      .fas {
        font-weight: 900
      }
    </style>
    <link href="./Home_files/switchery.min.css" rel="stylesheet">
    <script src="./Home_files/w8wb9dgtssqmlqs9zznww11ibjxvsp8g.js.download" async=""></script>
    <!-- ================== END PAGE LEVEL CSS STYLE ================== -->
    <meta property="og:title" content="Phantoms Trade Ltd.">
    <meta property="og:description" content="Advanced Asset Management">
    <meta property="og:image" content="/public/img/favicon.png">
    <meta property="og:url" content="https://phantomstrade .com">
    <meta property="og:type" content="website">
    <style type="text/css">
      .apexcharts-canvas {
        position: relative;
        user-select: none;
        /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
      }

      /* scrollbar is not visible by default for legend, hence forcing the visibility */
      .apexcharts-canvas ::-webkit-scrollbar {
        -webkit-appearance: none;
        width: 6px;
      }

      .apexcharts-canvas ::-webkit-scrollbar-thumb {
        border-radius: 4px;
        background-color: rgba(0, 0, 0, .5);
        box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
      }

      .apexcharts-canvas.dark {
        background: #343F57;
      }

      .apexcharts-inner {
        position: relative;
      }

      .legend-mouseover-inactive {
        transition: 0.15s ease all;
        opacity: 0.20;
      }

      .apexcharts-series-collapsed {
        opacity: 0;
      }

      .apexcharts-gridline,
      .apexcharts-text,
      .apexcharts-yaxis-annotations,
      .apexcharts-xaxis-annotations,
      .apexcharts-point-annotations {
        pointer-events: none;
      }

      .apexcharts-tooltip {
        border-radius: 5px;
        box-shadow: 2px 2px 6px -4px #999;
        cursor: default;
        font-size: 14px;
        left: 62px;
        opacity: 0;
        pointer-events: none;
        position: absolute;
        top: 20px;
        overflow: hidden;
        white-space: nowrap;
        z-index: 12;
        transition: 0.15s ease all;
      }

      .apexcharts-tooltip.light {
        border: 1px solid #e3e3e3;
        background: rgba(255, 255, 255, 0.96);
      }

      .apexcharts-tooltip.dark {
        color: #fff;
        background: rgba(30, 30, 30, 0.8);
      }

      .apexcharts-tooltip * {
        font-family: inherit;
      }

      .apexcharts-tooltip .apexcharts-marker,
      .apexcharts-area-series .apexcharts-area,
      .apexcharts-line {
        pointer-events: none;
      }

      .apexcharts-tooltip.active {
        opacity: 1;
        transition: 0.15s ease all;
      }

      .apexcharts-tooltip-title {
        padding: 6px;
        font-size: 15px;
        margin-bottom: 4px;
      }

      .apexcharts-tooltip.light .apexcharts-tooltip-title {
        background: #ECEFF1;
        border-bottom: 1px solid #ddd;
      }

      .apexcharts-tooltip.dark .apexcharts-tooltip-title {
        background: rgba(0, 0, 0, 0.7);
        border-bottom: 1px solid #333;
      }

      .apexcharts-tooltip-text-value,
      .apexcharts-tooltip-text-z-value {
        display: inline-block;
        font-weight: 600;
        margin-left: 5px;
      }

      .apexcharts-tooltip-text-z-label:empty,
      .apexcharts-tooltip-text-z-value:empty {
        display: none;
      }

      .apexcharts-tooltip-text-value,
      .apexcharts-tooltip-text-z-value {
        font-weight: 600;
      }

      .apexcharts-tooltip-marker {
        width: 12px;
        height: 12px;
        position: relative;
        top: 0px;
        margin-right: 10px;
        border-radius: 50%;
      }

      .apexcharts-tooltip-series-group {
        padding: 0 10px;
        display: none;
        text-align: left;
        justify-content: left;
        align-items: center;
      }

      .apexcharts-tooltip-series-group.active .apexcharts-tooltip-marker {
        opacity: 1;
      }

      .apexcharts-tooltip-series-group.active,
      .apexcharts-tooltip-series-group:last-child {
        padding-bottom: 4px;
      }

      .apexcharts-tooltip-series-group-hidden {
        opacity: 0;
        height: 0;
        line-height: 0;
        padding: 0 !important;
      }

      .apexcharts-tooltip-y-group {
        padding: 6px 0 5px;
      }

      .apexcharts-tooltip-candlestick {
        padding: 4px 8px;
      }

      .apexcharts-tooltip-candlestick>div {
        margin: 4px 0;
      }

      .apexcharts-tooltip-candlestick span.value {
        font-weight: bold;
      }

      .apexcharts-tooltip-rangebar {
        padding: 5px 8px;
      }

      .apexcharts-tooltip-rangebar .category {
        font-weight: 600;
        color: #777;
      }

      .apexcharts-tooltip-rangebar .series-name {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
      }

      .apexcharts-xaxistooltip {
        opacity: 0;
        padding: 9px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #ECEFF1;
        border: 1px solid #90A4AE;
        transition: 0.15s ease all;
      }

      .apexcharts-xaxistooltip.dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
      }

      .apexcharts-xaxistooltip:after,
      .apexcharts-xaxistooltip:before {
        left: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
      }

      .apexcharts-xaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-left: -6px;
      }

      .apexcharts-xaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-left: -7px;
      }

      .apexcharts-xaxistooltip-bottom:after,
      .apexcharts-xaxistooltip-bottom:before {
        bottom: 100%;
      }

      .apexcharts-xaxistooltip-top:after,
      .apexcharts-xaxistooltip-top:before {
        top: 100%;
      }

      .apexcharts-xaxistooltip-bottom:after {
        border-bottom-color: #ECEFF1;
      }

      .apexcharts-xaxistooltip-bottom:before {
        border-bottom-color: #90A4AE;
      }

      .apexcharts-xaxistooltip-bottom.dark:after {
        border-bottom-color: rgba(0, 0, 0, 0.5);
      }

      .apexcharts-xaxistooltip-bottom.dark:before {
        border-bottom-color: rgba(0, 0, 0, 0.5);
      }

      .apexcharts-xaxistooltip-top:after {
        border-top-color: #ECEFF1
      }

      .apexcharts-xaxistooltip-top:before {
        border-top-color: #90A4AE;
      }

      .apexcharts-xaxistooltip-top.dark:after {
        border-top-color: rgba(0, 0, 0, 0.5);
      }

      .apexcharts-xaxistooltip-top.dark:before {
        border-top-color: rgba(0, 0, 0, 0.5);
      }


      .apexcharts-xaxistooltip.active {
        opacity: 1;
        transition: 0.15s ease all;
      }

      .apexcharts-yaxistooltip {
        opacity: 0;
        padding: 4px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #ECEFF1;
        border: 1px solid #90A4AE;
      }

      .apexcharts-yaxistooltip.dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
      }

      .apexcharts-yaxistooltip:after,
      .apexcharts-yaxistooltip:before {
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
      }

      .apexcharts-yaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-top: -6px;
      }

      .apexcharts-yaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-top: -7px;
      }

      .apexcharts-yaxistooltip-left:after,
      .apexcharts-yaxistooltip-left:before {
        left: 100%;
      }

      .apexcharts-yaxistooltip-right:after,
      .apexcharts-yaxistooltip-right:before {
        right: 100%;
      }

      .apexcharts-yaxistooltip-left:after {
        border-left-color: #ECEFF1;
      }

      .apexcharts-yaxistooltip-left:before {
        border-left-color: #90A4AE;
      }

      .apexcharts-yaxistooltip-left.dark:after {
        border-left-color: rgba(0, 0, 0, 0.5);
      }

      .apexcharts-yaxistooltip-left.dark:before {
        border-left-color: rgba(0, 0, 0, 0.5);
      }

      .apexcharts-yaxistooltip-right:after {
        border-right-color: #ECEFF1;
      }

      .apexcharts-yaxistooltip-right:before {
        border-right-color: #90A4AE;
      }

      .apexcharts-yaxistooltip-right.dark:after {
        border-right-color: rgba(0, 0, 0, 0.5);
      }

      .apexcharts-yaxistooltip-right.dark:before {
        border-right-color: rgba(0, 0, 0, 0.5);
      }

      .apexcharts-yaxistooltip.active {
        opacity: 1;
      }

      .apexcharts-yaxistooltip-hidden {
        display: none;
      }

      .apexcharts-xcrosshairs,
      .apexcharts-ycrosshairs {
        pointer-events: none;
        opacity: 0;
        transition: 0.15s ease all;
      }

      .apexcharts-xcrosshairs.active,
      .apexcharts-ycrosshairs.active {
        opacity: 1;
        transition: 0.15s ease all;
      }

      .apexcharts-ycrosshairs-hidden {
        opacity: 0;
      }

      .apexcharts-zoom-rect {
        pointer-events: none;
      }

      .apexcharts-selection-rect {
        cursor: move;
      }

      .svg_select_points,
      .svg_select_points_rot {
        opacity: 0;
        visibility: hidden;
      }

      .svg_select_points_l,
      .svg_select_points_r {
        cursor: ew-resize;
        opacity: 1;
        visibility: visible;
        fill: #888;
      }

      .apexcharts-canvas.zoomable .hovering-zoom {
        cursor: crosshair
      }

      .apexcharts-canvas.zoomable .hovering-pan {
        cursor: move
      }

      .apexcharts-xaxis,
      .apexcharts-yaxis {
        pointer-events: none;
      }

      .apexcharts-zoom-icon,
      .apexcharts-zoom-in-icon,
      .apexcharts-zoom-out-icon,
      .apexcharts-reset-zoom-icon,
      .apexcharts-pan-icon,
      .apexcharts-selection-icon,
      .apexcharts-menu-icon,
      .apexcharts-toolbar-custom-icon {
        cursor: pointer;
        width: 20px;
        height: 20px;
        line-height: 24px;
        color: #6E8192;
        text-align: center;
      }


      .apexcharts-zoom-icon svg,
      .apexcharts-zoom-in-icon svg,
      .apexcharts-zoom-out-icon svg,
      .apexcharts-reset-zoom-icon svg,
      .apexcharts-menu-icon svg {
        fill: #6E8192;
      }

      .apexcharts-selection-icon svg {
        fill: #444;
        transform: scale(0.76)
      }

      .dark .apexcharts-zoom-icon svg,
      .dark .apexcharts-zoom-in-icon svg,
      .dark .apexcharts-zoom-out-icon svg,
      .dark .apexcharts-reset-zoom-icon svg,
      .dark .apexcharts-pan-icon svg,
      .dark .apexcharts-selection-icon svg,
      .dark .apexcharts-menu-icon svg,
      .dark .apexcharts-toolbar-custom-icon svg {
        fill: #f3f4f5;
      }

      .apexcharts-canvas .apexcharts-zoom-icon.selected svg,
      .apexcharts-canvas .apexcharts-selection-icon.selected svg,
      .apexcharts-canvas .apexcharts-reset-zoom-icon.selected svg {
        fill: #008FFB;
      }

      .light .apexcharts-selection-icon:not(.selected):hover svg,
      .light .apexcharts-zoom-icon:not(.selected):hover svg,
      .light .apexcharts-zoom-in-icon:hover svg,
      .light .apexcharts-zoom-out-icon:hover svg,
      .light .apexcharts-reset-zoom-icon:hover svg,
      .light .apexcharts-menu-icon:hover svg {
        fill: #333;
      }

      .apexcharts-selection-icon,
      .apexcharts-menu-icon {
        position: relative;
      }

      .apexcharts-reset-zoom-icon {
        margin-left: 5px;
      }

      .apexcharts-zoom-icon,
      .apexcharts-reset-zoom-icon,
      .apexcharts-menu-icon {
        transform: scale(0.85);
      }

      .apexcharts-zoom-in-icon,
      .apexcharts-zoom-out-icon {
        transform: scale(0.7)
      }

      .apexcharts-zoom-out-icon {
        margin-right: 3px;
      }

      .apexcharts-pan-icon {
        transform: scale(0.62);
        position: relative;
        left: 1px;
        top: 0px;
      }

      .apexcharts-pan-icon svg {
        fill: #fff;
        stroke: #6E8192;
        stroke-width: 2;
      }

      .apexcharts-pan-icon.selected svg {
        stroke: #008FFB;
      }

      .apexcharts-pan-icon:not(.selected):hover svg {
        stroke: #333;
      }

      .apexcharts-toolbar {
        position: absolute;
        z-index: 11;
        top: 0px;
        right: 3px;
        max-width: 176px;
        text-align: right;
        border-radius: 3px;
        padding: 0px 6px 2px 6px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .apexcharts-toolbar svg {
        pointer-events: none;
      }

      .apexcharts-menu {
        background: #fff;
        position: absolute;
        top: 100%;
        border: 1px solid #ddd;
        border-radius: 3px;
        padding: 3px;
        right: 10px;
        opacity: 0;
        min-width: 110px;
        transition: 0.15s ease all;
        pointer-events: none;
      }

      .apexcharts-menu.open {
        opacity: 1;
        pointer-events: all;
        transition: 0.15s ease all;
      }

      .apexcharts-menu-item {
        padding: 6px 7px;
        font-size: 12px;
        cursor: pointer;
      }

      .light .apexcharts-menu-item:hover {
        background: #eee;
      }

      .dark .apexcharts-menu {
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
      }

      @media screen and (min-width: 768px) {
        .apexcharts-toolbar {
          /*opacity: 0;*/
        }

        .apexcharts-canvas:hover .apexcharts-toolbar {
          opacity: 1;
        }
      }

      .apexcharts-datalabel.hidden {
        opacity: 0;
      }

      .apexcharts-pie-label,
      .apexcharts-datalabels,
      .apexcharts-datalabel,
      .apexcharts-datalabel-label,
      .apexcharts-datalabel-value {
        cursor: default;
        pointer-events: none;
      }

      .apexcharts-pie-label-delay {
        opacity: 0;
        animation-name: opaque;
        animation-duration: 0.3s;
        animation-fill-mode: forwards;
        animation-timing-function: ease;
      }

      .apexcharts-canvas .hidden {
        opacity: 0;
      }

      .apexcharts-hide .apexcharts-series-points {
        opacity: 0;
      }

      .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
      .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
      .apexcharts-radar-series path,
      .apexcharts-radar-series polygon {
        pointer-events: none;
      }

      /* markers */

      .apexcharts-marker {
        transition: 0.15s ease all;
      }

      @keyframes opaque {
        0% {
          opacity: 0;
        }

        100% {
          opacity: 1;
        }
      }

      /* Resize generated styles */
      @keyframes resizeanim {
        from {
          opacity: 0;
        }

        to {
          opacity: 0;
        }
      }

      .resize-triggers {
        animation: 1ms resizeanim;
        visibility: hidden;
        opacity: 0;
      }

      .resize-triggers,
      .resize-triggers>div,
      .contract-trigger:before {
        content: " ";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        overflow: hidden;
      }

      .resize-triggers>div {
        background: #eee;
        overflow: auto;
      }

      .contract-trigger:before {
        width: 200%;
        height: 200%;
      }
    </style>
  </head>

  <body class="  pace-done" data-new-gr-c-s-check-loaded="14.1031.0" data-gr-ext-installed="">
    <div class="pace  pace-inactive">
      <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
        <div class="pace-progress-inner"></div>
      </div>
      <div class="pace-activity"></div>
    </div>
    <!-- begin page-cover -->
    <div class="page-cover"></div>
    <!-- end page-cover -->
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show d-none">
      <span class="spinner"></span>
    </div>
    <!-- end #page-loader -->
    <!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed show">
      <!-- begin #header -->
      <div id="header" class="header navbar-default">
        <!-- begin navbar-header -->
        <div class="navbar-header">
          <a href="./home.php" class="navbar-brand"><img src="./public/img/fuck.jpg">
          </a>
          <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- end navbar-header -->
        <!-- begin header-nav -->
        <ul class="navbar-nav navbar-right">
          <li class="navbar-form">
            <form action="./home.php" method="POST" name="search_form">
              <input type="hidden" name="form_id" value="16192493844200"><input type="hidden" name="form_token" value="d87f2db94eacfc63c8edf01222de01ad">
              <div class="form-group">
                <div class="badge badge-dark" style="
                    margin-top: 2px;
                    margin-bottom: auto;
                    padding: 10px;
                    font-size: 0.7rem;
                  " id="clockbox">Jun-24-2023, 7:57:29 AM</div>

                <script type="text/javascript">
                  var tmonth = [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",
                  ];

                  function GetClock() {
                    var tzOffset = 1; //set this to the number of hours offset from UTC

                    var d = new Date();
                    var dx = d.toGMTString();
                    dx = dx.substr(0, dx.length - 3);
                    d.setTime(Date.parse(dx));
                    d.setHours(d.getHours() + tzOffset);
                    var nmonth = d.getMonth(),
                      ndate = d.getDate(),
                      nyear = d.getFullYear();

                    var nhour = d.getHours(),
                      nmin = d.getMinutes(),
                      nsec = d.getSeconds(),
                      ap;

                    if (nhour == 0) {
                      ap = " AM";
                      nhour = 12;
                    } else if (nhour < 12) {
                      ap = " AM";
                    } else if (nhour == 12) {
                      ap = " PM";
                    } else if (nhour > 12) {
                      ap = " PM";
                      nhour -= 12;
                    }

                    if (nmin <= 9) nmin = "0" + nmin;
                    if (nsec <= 9) nsec = "0" + nsec;

                    var clocktext =
                      "" +
                      tmonth[nmonth] +
                      "-" +
                      ndate +
                      "-" +
                      nyear +
                      ", " +
                      nhour +
                      ":" +
                      nmin +
                      ":" +
                      nsec +
                      ap +
                      "";
                    document.getElementById("clockbox").innerHTML = clocktext;
                  }

                  GetClock();
                  setInterval(GetClock, 1000);
                </script>
              </div>
            </form>
          </li>
          <li class="dropdown navbar-user">
            <a href="./home.php" class="dropdown-toggle" data-toggle="dropdown">
              <img src="./Home_files/myuser.jpg" alt="">
              <span class="d-none d-md-inline">
                <?php echo ($_SESSION['userName']) ?>
              </span>
              <b class="caret"></b>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="./profile.php" class=" dropdown-item"><i class="fa fa-edit" aria-hidden="true"></i>&nbsp;&nbsp;Edit Account</a>

              <form id="logout-form" action="./login.php?message=" method="POST">
                <button href="" class="dropdown-item"><i class="fa fa-power-off" aria-hidden="true"></i>&nbsp;&nbsp;Log Out</button>
              </form>
            </div>
          </li>
        </ul>
        <!-- end header navigation right -->
      </div>
      <!-- end #header -->
      <!-- begin #sidebar -->
      <div id="sidebar" class="sidebar">
        <!-- begin sidebar scrollbar -->
        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
          <div data-scrollbar="true" data-height="100%" data-init="true" style="overflow: hidden; width: auto; height: 100%;">
            <!-- begin sidebar user -->
            <ul class="nav">
              <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                  <div class="cover with-shadow"></div>
                  <div class="info">
                    <b class="caret pull-right"></b><?php echo ("$" . $_SESSION['balance']) ?>
                    <small>Account Balance</small>
                  </div>
                </a>
              </li>
              <li>
                <ul class="nav nav-profile"></ul>
              </li>
            </ul>
            <!-- end sidebar user -->
            <!-- begin sidebar nav -->
            <?php
            include "./partials/_nav.php"
            ?>
            <!-- end sidebar nav -->
          </div>
          <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 606px;"></div>
          <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
        </div>
        <!-- end sidebar scrollbar -->
      </div>
      <div class="sidebar-bg"></div>

      <!-- end #sidebar -->
      <!-- begin #content -->
      <div id="content" class="content">
        <!-- begin breadcrumb -->
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <!-- end page-header -->
        <!-- begin daterange-filter -->
        <!-- end daterange-filter -->
        <!-- begin row -->

        <div class="row">
          <!-- begin col-6 -->
          <div class="col-xl-6">
            <!-- begin card -->
            <div class="card border-0 mb-3 overflow-hidden">
              <!-- begin card-body -->
              <div class="card-body">
                <!-- begin row -->
                <div class="row">
                  <!-- begin col-5 -->
                  <!---del-->
                  <style>
                    #code-cover-screen {
                      animation: scrollCodeIn 4s;
                      -webkit-animation-fill-mode: forwards;
                      animation-fill-mode: forwards;
                    }

                    @keyframes scrollCodeIn {
                      0% {
                        transform: translateY(0);
                        opacity: 1;
                      }

                      100% {
                        transform: translateY(180px);
                        opacity: 1;
                      }
                    }

                    #scrolling-code {
                      animation: scrollCode 3s 1.65s linear infinite;
                    }

                    #scrolling-code-2 {
                      animation: scrollCode2 3s 1.65s linear infinite;
                      transform: translateY(87px);
                    }

                    @keyframes scrollCode {
                      0% {
                        transform: translateY(0);
                        opacity: 1;
                      }

                      49.99% {
                        transform: translateY(-80px);
                        opacity: 1;
                      }

                      50% {
                        transform: translatey(87px);
                        opacity: 0;
                      }

                      50.01% {
                        opacity: 1;
                      }

                      100% {
                        transform: translateY(0);
                        opacity: 1;
                      }
                    }

                    @keyframes scrollCode2 {
                      0% {
                        transform: translateY(87);
                        opacity: 1;
                      }

                      49.99% {
                        transform: translateY(0);
                        opacity: 1;
                      }

                      99.98% {
                        transform: translatey(-80px);
                        opacity: 1;
                      }

                      99.99% {
                        transform: translateY(87);
                        opacity: 0;
                      }

                      100% {
                        opacity: 1;
                      }
                    }
                  </style>
                  <!--del-->
                  <div class="col-xl-4 col-lg-4 col-4 align-items-center d-flex justify-content-center">
                    <img src="./Home_files/laptop.svg">
                  </div>
                  <!-- end col-5 -->
                  <!-- begin col-7 -->
                  <div class="col-xl-8 col-lg-8 col-8">
                    <!-- begin title -->
                    <div class="mb-3 text-grey">
                      <b>ACCOUNT BALANCE</b>
                      <span class="ml-2"></span>
                    </div>
                    <!-- end title -->
                    <!-- begin total-sales -->
                    <div class="d-flex">
                      <h2 class="mb-1">
                        <span data-animation="number" data-value="$0 "><?php echo ("$" . $_SESSION['balance']) ?></span>
                      </h2>
                      <div class="ml-auto mt-n1 mb-n1">
                        <div class="dots mt-2">
                          <i class="dot dot--1"></i>
                          <i class="dot dot--2"></i>
                          <i class="dot dot--3"></i>
                        </div>
                      </div>
                    </div>
                    <!-- end total-sales -->
                    <!-- begin percentage -->
                    <!-- end percentage -->
                    <hr class="bg-white-transparent-2">
                    <!-- begin row -->
                    <div class="row text-truncate">
                      <!-- begin col-6 -->
                      <div class="col-5">
                        <div class="f-s-12 text-grey">Username</div>
                        <div class="f-s-12 m-b-5 f-w-600 p-b-1">
                          <?php echo ($_SESSION['userName']) ?>
                        </div>
                        <div class="progress progress-xs rounded-lg bg-dark-darker m-b-5">
                          <div class="progress-bar progress-bar-striped rounded-right bg-teal" data-animation="width" data-value="100%" style="width: 100%;"></div>
                        </div>
                      </div>
                      <!-- end col-6 -->
                      <!-- begin col-6 -->
                      <div class="col-7">
                        <div class="f-s-12 text-grey">E-Mail</div>
                        <div class="f-s-12 m-b-5 f-w-600 p-b-1">
                          <span><?php echo ($_SESSION['email']) ?></span>
                        </div>
                        <div class="progress progress-xs rounded-lg bg-dark-darker m-b-5">
                          <div class="progress-bar progress-bar-striped rounded-right" data-animation="width" data-value="100%" style="width: 100%;"></div>
                        </div>
                      </div>
                      <!-- end col-6 -->
                    </div>
                    <!-- end row -->
                  </div>
                  <!-- end col-7 -->
                </div>
                <!-- end row -->
              </div>
              <!-- end card-body -->
            </div>
            <!-- end card -->
          </div>
          <!-- end col-6 -->
          <!-- begin col-6 -->
          <div class="col-xl-6">
            <!-- begin row -->
            <div class="row">
              <!-- begin col-6 -->
              <div class="col-sm-6 col-6">
                <!-- begin card -->
                <div class="card border-0 text-truncate mb-3">
                  <!-- begin card-body -->
                  <div class="card-body">
                    <!-- begin title -->
                    <div class="mb-3 text-grey">
                      <b class="mb-3">DEPOSITS</b>
                    </div>
                    <!-- end title -->
                    <!-- begin conversion-rate -->
                    <div class="d-flex align-items-center mb-3">
                      <h2 class="text-white mb-1">
                        <span data-animation="number" data-value="$0"><?php echo ("$" . $_SESSION['totalDeposited']) ?></span>
                      </h2>
                      <div class="ml-auto">
                        <style>
                          .dots {
                            display: inline-block;
                            vertical-align: middle;
                            margin-left: 4px;
                          }

                          .dot {
                            display: inline-block;
                            background: #ffffff;
                            border-radius: 50%;
                            width: 0.8em;
                            height: 0.8em;
                            -webkit-animation: dots-pulse 5s infinite cubic-bezier(0.77, 0, 0.175, 1);
                            animation: dots-pulse 5s infinite cubic-bezier(0.77, 0, 0.175, 1);
                          }

                          .dot--1 {
                            -webkit-animation-delay: -2.9s;
                            animation-delay: -2.9s;
                          }

                          .dot--2 {
                            -webkit-animation-delay: -2.6s;
                            animation-delay: -2.6s;
                          }

                          .dot--3 {
                            -webkit-animation-delay: -2.3s;
                            animation-delay: -2.3s;
                          }

                          @-webkit-keyframes dots-pulse {
                            0% {
                              background: #ff3502;
                            }

                            25% {
                              background: #ff7b01;
                            }

                            50% {
                              background: #c2e900;
                            }

                            100% {
                              background: #01caca;
                            }
                          }

                          @keyframes dots-pulse {
                            0% {
                              background: #ff3502;
                            }

                            25% {
                              background: #ff7b01;
                            }

                            50% {
                              background: #c2e900;
                            }

                            100% {
                              background: #01caca;
                            }
                          }
                        </style>
                        <div class="dots">
                          <i class="dot dot--1"></i>
                          <i class="dot dot--2"></i>
                          <i class="dot dot--3"></i>
                        </div>
                      </div>
                    </div>
                    <!-- end conversion-rate -->
                    <!-- begin percentage -->
                    <!-- end percentage -->
                    <!-- begin info-row -->
                    <div class="d-flex mb-2">
                      <div class="d-flex align-items-center">
                        <i class="fa fa-circle text-red f-s-8 mr-2" aria-hidden="true"></i>
                        Last Deposit
                      </div>
                      <div class="d-flex align-items-center ml-auto">
                        <div class="f-s-12 f-w-600">
                          $<span data-animation="number" data-value="0"><?php echo ($_SESSION['lastDeposit']) ?></span>

                        </div>
                      </div>
                    </div>
                    <!-- end info-row -->
                    <!-- begin info-row -->

                    <!-- end info-row -->
                    <!-- begin info-row -->
                    <div class="d-flex">
                      <div class="d-flex align-items-center">
                        <i class="fa fa-circle text-lime f-s-8 mr-2" aria-hidden="true"></i>
                        Total Deposited
                      </div>
                      <div class="d-flex align-items-center ml-auto">
                        <div class="d-flex align-items-center ml-auto">
                          <div class="f-s-12 f-w-600">
                            <span data-animation="number" data-value="$0 "><?php echo ("$" . $_SESSION['totalDeposited']) ?> </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end info-row -->
                  </div>
                  <!-- end card-body -->
                </div>
                <!-- end card -->
              </div>
              <!-- end col-6 -->
              <!-- begin col-6 -->
              <div class="col-sm-6 col-6">
                <!-- begin card -->
                <div class="card border-0 text-truncate mb-3">
                  <!-- begin card-body -->
                  <div class="card-body">
                    <!-- begin title -->
                    <div class="mb-3 text-grey">
                      <b class="mb-3">TOTAL EARNINGS</b>
                      <span class="ml-2"></span>
                    </div>
                    <!-- end title -->
                    <!-- begin store-session -->
                    <div class="d-flex align-items-center mb-3">
                      <h2 class="text-white mb-1">
                        <span data-animation="number" data-value="$0 "><?php echo ("$" . $_SESSION['totalWithdrawn']) ?></span>
                      </h2>
                      <div class="ml-auto">
                        <div class="dots">
                          <i class="dot dot--1"></i>
                          <i class="dot dot--2"></i>
                          <i class="dot dot--3"></i>
                        </div>
                      </div>
                    </div>
                    <!-- end store-session -->
                    <!-- begin percentage -->
                    <!-- end percentage -->
                    <!-- begin info-row -->
                    <div class="d-flex mb-2">
                      <div class="d-flex align-items-center">
                        <i class="fa fa-circle text-red f-s-8 mr-2" aria-hidden="true"></i>
                        Last Withdrawal
                      </div>
                      <div class="d-flex align-items-center ml-auto">
                        <div class="f-s-12 f-w-600">
                          $<span data-animation="number" data-value="0"><?php echo ($_SESSION['lastWithdrawal']) ?></span>
                        </div>
                      </div>
                    </div>
                    <!-- end info-row -->
                    <!-- begin info-row -->
                    <div class="d-flex mb-2">
                      <div class="d-flex align-items-center">
                        <i class="fa fa-circle text-warning f-s-8 mr-2" aria-hidden="true"></i>
                        Pending Withdrawals
                      </div>
                      <div class="d-flex align-items-center ml-auto">
                        <div class="f-s-12 f-w-600">
                          <span data-animation="number" data-value="$0"><?php echo ("$" . $_SESSION['pendingWithdrawals']) ?></span>
                        </div>
                      </div>
                    </div>
                    <!-- end info-row -->
                    <!-- begin info-row -->
                    <div class="d-flex">
                      <div class="d-flex align-items-center">
                        <i class="fa fa-circle text-lime f-s-8 mr-2" aria-hidden="true"></i>
                        Total Withdrawn
                      </div>
                      <div class="d-flex align-items-center ml-auto">
                        <div class="f-s-12 f-w-600">
                          <span data-animation="number" data-value="$0"><?php echo ("$" . $_SESSION['totalWithdrawn']) ?></span>
                        </div>
                      </div>
                    </div>
                    <!-- end info-row -->
                  </div>
                  <!-- end card-body -->
                </div>
                <!-- end card -->
              </div>
              <!-- end col-6 -->
              <div class="col-sm-12 col-12">
                <!-- begin card -->
                <div class="card border-0 text-truncate mb-3">
                  <!-- begin card-body -->
                  <div class="card-body">
                    <!-- begin title -->
                    <div class="d-flex mb-3 text-grey justify-content-between">
                      <span><b class="mb-3">TARGET</b> <span class="ml-2"></span></span>
                      <div>
                        <div class="badge badge-warning badge-sm">

                          Inactive
                        </div>
                      </div>
                    </div>
                    <div class="d-flex">
                      <img src="./Home_files/medal.png" style="width: 50px; height: 50px; border-radius: 50%">
                      <div style="width: 100%">
                        <div class="d-flex mb-2">
                          <div class="d-flex align-items-center">
                            <i class="fa fa-circle text-green f-s-8 mr-2" aria-hidden="true"></i>
                            lucas jonathan
                          </div>
                          <div class="d-flex align-items-center ml-auto">
                            <div class="f-s-12 f-w-600">
                              $
                              <span data-animation="number" data-value="0">0</span>
                            </div>
                          </div>
                        </div>
                        <div class="progress progress-sm rounded-lg bg-dark-darker m-b-5 position-relative">
                          <div class="progress-bar progress-bar-striped rounded-right bg-success" data-animation="width" data-value="0%" style="width: 0%">
                            <span class="d-flex justify-content-center position-absolute w-100">0%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end row -->
          </div>
          <!-- end col-6 -->
        </div>
        <!-- end row -->
        <!-- begin row -->
        <div>
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container" style="width: 100%; height: 500px;">
            <iframe scrolling="no" allowtransparency="true" frameborder="0" src="./Home_files/saved_resource.html" style="box-sizing: border-box; display: block; height: calc(468px); width: 100%;"></iframe>
            <div class="tradingview-widget-copyright">
              <a href="https://www.tradingview.com/markets/stocks-usa/?utm_source=phantomstrade .com&amp;utm_medium=widget_new&amp;utm_campaign=hotlists" rel="noopener" target="_blank"><span class="blue-text">Stock Market Today</span></a>
              by TradingView
            </div>

            <style>
              .tradingview-widget-copyright {
                font-size: 13px !important;
                line-height: 32px !important;
                text-align: center !important;
                vertical-align: middle !important;
                /* @mixin sf-pro-display-font; */
                font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
                color: #9db2bd !important;
              }

              .tradingview-widget-copyright .blue-text {
                color: #2962FF !important;
              }

              .tradingview-widget-copyright a {
                text-decoration: none !important;
                color: #9db2bd !important;
              }

              .tradingview-widget-copyright a:visited {
                color: #9db2bd !important;
              }

              .tradingview-widget-copyright a:hover .blue-text {
                color: #1E53E5 !important;
              }

              .tradingview-widget-copyright a:active .blue-text {
                color: #1848CC !important;
              }

              .tradingview-widget-copyright a:visited .blue-text {
                color: #2962FF !important;
              }
            </style>
          </div>
          <!-- TradingView Widget END -->
        </div>
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <!-- begin widget-list -->
            <div class="widget-list widget-list-rounded m-b-30" data-id="widget">

              <!-- <div class="widget-list-media icon">
                  <i class="fa fa-shield-alt bg-red-darker text-white"></i>
                </div>
                <div class="widget-list-content">
                  <h4 class="widget-list-title">2 Factor Authentication</h4>
                </div>
                <div
                  class="widget-list-action text-nowrap text-grey-darker text-right"
                >
                  Off<i
                    class="fa fa-angle-right text-muted t-plus-1 fa-lg m-l-5"
                  ></i>
                </div> -->


              <a style="
                  background-color: rgba(255, 255, 255, 0.1);
                  padding-top: 2px;
                  padding-bottom: 3px;
                " class="widget-list-item">
                <div class="widget-list-media icon">
                  <i class="fa fa-calendar-alt bg-blue text-white" aria-hidden="true"></i>
                </div>
                <div class="widget-list-content">
                  <h4 class="widget-list-title">Sign Up Date</h4>
                </div>
                <div class="widget-list-action text-nowrap text-grey-darker">
                  2023-June-13
                </div>
              </a>
              <a style="
                  background-color: rgba(255, 255, 255, 0.1);
                  padding-top: 2px;
                  padding-bottom: 3px;
                " class="widget-list-item">
                <div class="widget-list-media icon">
                  <i class="fa fa-sign-in-alt bg-orange text-white" aria-hidden="true"></i>
                </div>
                <div class="widget-list-content">
                  <h4 class="widget-list-title">Last Login</h4>
                </div>
                <div class="widget-list-action text-nowrap text-grey-darker">
                  n/a
                </div>
              </a>

              <a style="
                  background-color: rgba(255, 255, 255, 0.1);
                  padding-top: 2px;
                  padding-bottom: 3px;
                " class="widget-list-item">
                <div class="widget-list-media icon">
                  <i class="fas fa-wifi bg-indigo text-white" aria-hidden="true"></i>
                </div>
                <div class="widget-list-content">
                  <h4 class="widget-list-title">Your IP</h4>
                </div>
                <div class="widget-list-action text-nowrap text-grey-darker">
                  <script type="application/javascript">
                    function getIP(json) {
                      document.write(json.ip);
                    }
                  </script>
                  <script type="application/javascript" src="./Home_files/saved_resource"></script>197.210.78.196
                </div>
              </a>
              <a style="
                  background-color: rgba(255, 255, 255, 0.1);
                  padding-top: 2px;
                  padding-bottom: 3px;
                " class="widget-list-item">
                <div class="widget-list-media icon">
                  <i class="fab fa-windows bg-grey-darker text-inverse" aria-hidden="true"></i>
                </div>
                <div class="widget-list-content">
                  <h4 class="widget-list-title">Operating System</h4>
                </div>
                <div class="widget-list-action text-nowrap text-grey-darker text-right">
                  <span id="os"><b>Windows</b></span>
                </div>
              </a>
              <a style="
                  background-color: rgba(255, 255, 255, 0.1);
                  padding-top: 2px;
                  padding-bottom: 3px;
                " class="widget-list-item">
                <div class="widget-list-media icon">
                  <i class="fab fa-firefox bg-purple text-white" aria-hidden="true"></i>
                </div>
                <div class="widget-list-content">
                  <h4 class="widget-list-title">Browser</h4>
                </div>
                <div class="widget-list-action text-nowrap text-grey-darker text-right">
                  <span id="browser"><b>Chrome</b></span>
                </div>
              </a>
              <a href="https://phantomstrade .com/update-profile" style="
                  background-color: rgba(255, 255, 255, 0.1);
                  padding-top: 2px;
                  padding-bottom: 5px;
                " class="widget-list-item">
                <div class="widget-list-media icon">
                  <i class="fa fa-cog bg-teal text-white" aria-hidden="true"></i>
                </div>
                <div class="widget-list-content">
                  <h4 class="widget-list-title">Edit Account</h4>
                </div>
                <div class="widget-list-action text-nowrap text-grey-darker text-right">
                  <i class="fa fa-angle-right text-muted t-plus-1 fa-lg m-l-5" aria-hidden="true"></i>
                </div>
              </a>
            </div>
            <!-- end widget-list -->
          </div>
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <!-- begin card -->
            <div class="card border-0 mb-3">
              <div class="card-body">
                <div class="mb-3 text-grey">
                  <b>CRYPTOCURRENCY MARKET PRICES</b>
                </div>
              </div>
              <div class="card-body p-0">
                <style>
                  .percent-increase {
                    color: green;
                  }

                  .percent-decrease {
                    color: red;
                  }
                </style>
                <div class="table-responsive">
                  <table class="table table-hover m-b-0 text-white">
                    <tbody>
                      <tr>
                        <td class="text-center">
                          <img src="./Home_files/48.png" width="25px">
                        </td>
                        <td>Bitcoin</td>
                        <td id="bitcoin-current-price">$ 30,707.8</td>
                        <td id="bitcoin-percent-change" class="percent-increase">+ 2.30%</td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <img src="./Home_files/Litecoin.png" width="25px">
                        </td>
                        <td>Litecoin</td>
                        <td id="litecoin-current-price">$ 91.88</td>
                        <td id="litecoin-percent-change" class="percent-increase">+ 5.99%</td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <img src="./Home_files/Ethereum.png" width="25px">
                        </td>
                        <td>Ethereum</td>
                        <td id="ethereum-current-price">$ 1,889.60</td>
                        <td id="ethereum-percent-change" class="percent-increase">+ 0.49%</td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <img src="./Home_files/Dash.png" width="25px">
                        </td>
                        <td>Dash</td>
                        <td id="dash-current-price">$ 35.30</td>
                        <td id="dash-percent-change" class="percent-increase">+ 3.59%</td>
                      </tr>

                      <tr>
                        <td class="text-center">
                          <img src="./Home_files/Bitcoin Cash.png" width="25px">
                        </td>
                        <td>Bitcoin Cash</td>
                        <td id="bitcoincash-current-price">$ 190.81</td>
                        <td id="bitcoincash-percent-change" class="percent-increase">+ 34.30%</td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <img src="./Home_files/Dogecoin.png" width="25px">
                        </td>
                        <td>Dogecoin</td>
                        <td id="dogecoin-current-price">$ 0.06812</td>
                        <td id="dogecoin-percent-change" class="percent-increase">+ 2.44%</td>
                        <!--      -->
                      </tr>
                    </tbody>
                  </table>
                  <div class="pb-1"></div>
                </div>
              </div>
            </div>
            <!-- end card -->
          </div>
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <!-- begin card -->
            <div class="card border-0" style="min-height: 320px; max-height: 320px">
              <!-- begin card-body -->
              <div class="widget-list widget-list-rounded inverse-mode">
                <!-- begin widget-list-item -->
                <a href="#" class="widget-list-item rounded-0 p-t-2">
                  <div class="widget-list-content">
                    <b>YOUR REFERRAL LINK</b>
                  </div>
                </a>
                <!-- end widget-list-item -->
                <!-- begin widget-list-item -->

                <a class="widget-list-item">
                  <div class="widget-list-content">
                    <div class="widget-list-title">
                      <div class="input-group">
                        <input id="reflink" type="text" class="form-control" value="https://autumnspur.com/register?referrer=64890106cb03247b672d7a98">
                        <span style="cursor: pointer" onclick="copy()" class="input-group-append">
                          <button class="btn btn-inverse">
                            <i class="far fa-clone" aria-hidden="true"></i>
                          </button>
                        </span>
                      </div>
                    </div>
                  </div>
                </a>
                <!-- end widget-list-item -->
                <!-- begin widget-list-item -->
                <!-- end widget-list-item -->
                <!-- begin widget-list-item -->
                <!-- end widget-list-item -->
              </div>
              <div class="card-body">
                <!-- begin widget-list -->
                <!-- end widget-list -->
                <!-- begin title -->
                <div class="row">
                  <div class="col-xl-7 col-lg-7 col-sm-7 col-md-7 col-7">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 80 300 280" style="max-height: 200px">
                      <g>
                        <g id="closedSuitcase" transform="translate(350, 0)">
                          <g>
                            <path d="M225.88,258.06H82.68a11.62,11.62,0,0,0-11.57,11.61v19.75H237.44V269.66a11.62,11.62,0,0,0-11.56-11.61" fill="#a67ee5"></path>
                            <path d="M225.88,258.06H82.68a11.62,11.62,0,0,0-11.57,11.61v19.75H237.44V269.66A11.62,11.62,0,0,0,225.88,258.06Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                            <path d="M267.11,258.06H119.23a11.81,11.81,0,0,0-11.93,11.61v19.75H279V269.66a11.81,11.81,0,0,0-11.93-11.61" fill="#a67ee5"></path>
                            <path d="M267.11,258.06H119.23a11.81,11.81,0,0,0-11.93,11.61v19.75H279V269.66A11.81,11.81,0,0,0,267.11,258.06Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                            <path d="M278.74,279.41a5.34,5.34,0,1,0-5.32-5.34,5.32,5.32,0,0,0,5.32,5.34" fill="#a67ee5"></path>
                            <ellipse cx="278.74" cy="274.07" rx="5.31" ry="5.34" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></ellipse>
                            <path d="M277.62,269.66v9.75H266.89a5.72,5.72,0,0,1-5.71-5.73V258.06h4.88a11.61,11.61,0,0,1,11.56,11.61" fill="#a67ee5"></path>
                            <path d="M277.62,269.66v9.75H266.89a5.72,5.72,0,0,1-5.71-5.73V258.06h4.88A11.61,11.61,0,0,1,277.62,269.66Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                          </g>
                          <g>
                            <path d="M280.29,318.62a5.72,5.72,0,1,0-5.12-5.69,5.43,5.43,0,0,0,5.12,5.69" fill="#a67ee5"></path>
                            <ellipse cx="280.29" cy="312.93" rx="5.12" ry="5.69" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></ellipse>
                            <path d="M230.22,328.86h-148a11.85,11.85,0,0,1-11.95-11.67V289H242.16v28.17a11.84,11.84,0,0,1-11.94,11.67" fill="#a67ee5"></path>
                            <path d="M230.22,328.86h-148a11.85,11.85,0,0,1-11.95-11.67V289H242.16v28.17A11.84,11.84,0,0,1,230.22,328.86Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                            <path d="M266.72,328.86h-147a11.81,11.81,0,0,1-11.87-11.67V289H278.58v28.17a11.79,11.79,0,0,1-11.86,11.67" fill="#a67ee5"></path>
                            <path d="M266.72,328.86h-147a11.81,11.81,0,0,1-11.87-11.67V289H278.58v28.17A11.79,11.79,0,0,1,266.72,328.86Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                            <path d="M215,314.07H180.49a4.27,4.27,0,0,1-4.35-4.16V298.21a1.24,1.24,0,0,1,1.27-1.22h2.88a1.25,1.25,0,0,1,1.27,1.22v10a1.33,1.33,0,0,0,1.35,1.29h29.71a1.33,1.33,0,0,0,1.35-1.29v-10a1.24,1.24,0,0,1,1.27-1.22h2.88a1.25,1.25,0,0,1,1.27,1.22V309.9a4.27,4.27,0,0,1-4.35,4.16" fill="#a67ee5"></path>
                            <path d="M215,314.07H180.49a4.27,4.27,0,0,1-4.35-4.16V298.21a1.24,1.24,0,0,1,1.27-1.22h2.88a1.25,1.25,0,0,1,1.27,1.22v10a1.33,1.33,0,0,0,1.35,1.29h29.71a1.33,1.33,0,0,0,1.35-1.29v-10a1.24,1.24,0,0,1,1.27-1.22h2.88a1.25,1.25,0,0,1,1.27,1.22V309.9A4.27,4.27,0,0,1,215,314.07Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                            <rect x="138.58" y="282.19" width="9.1" height="12.52" fill="#a67ee5"></rect>
                            <rect x="138.58" y="282.19" width="9.1" height="12.52" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></rect>
                            <rect x="247.85" y="282.19" width="9.1" height="12.52" fill="#a67ee5"></rect>
                            <rect x="247.85" y="282.19" width="9.1" height="12.52" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></rect>
                            <path d="M278.58,317.11v-9.87h-10.4a5.67,5.67,0,0,0-5.53,5.8v15.82h4.73c6.16,0,11.2-5.29,11.2-11.75" fill="#a67ee5"></path>
                            <path d="M278.58,317.11v-9.87h-10.4a5.67,5.67,0,0,0-5.53,5.8v15.82h4.73C273.54,328.86,278.58,323.58,278.58,317.11Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                            <path d="M100,301.54H79.22a1,1,0,0,1-1-1V298a1,1,0,0,1,1-1H100a1,1,0,0,1,1,1v2.58a1,1,0,0,1-1,1" fill="#a67ee5"></path>
                            <path d="M100,301.54H79.22a1,1,0,0,1-1-1V298a1,1,0,0,1,1-1H100a1,1,0,0,1,1,1v2.58A1,1,0,0,1,100,301.54Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                          </g>
                          <g>
                            <line x1="46.24" y1="329" x2="303.76" y2="329" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                          </g>
                          <animatetransform id="closedSuitcaseTranslate" attributeType="XML" attributeName="transform" type="translate" values="350; 0" fill="freeze" calcMode="spline" keySplines="0.4 0 0.2 1" dur="1.5s"></animatetransform>
                          <animate id="closedSuitcaseOpacity" attributeType="CSS" attributeName="opacity" from="0" to="1" dur="1.5s" fill="freeze"></animate>
                        </g>
                        <animate id="closedSuitcaseNone" begin="closedSuitcaseTranslate.end + 0.3s" attributeType="CSS" attributeName="opacity" from="1" to="0" dur="0.01s" fill="freeze"></animate>
                      </g>
                      <!--  open suitcase    -->
                      <g id="openSuitcase" opacity="0">
                        <g>
                          <path d="M253.93,232.11a5.69,5.69,0,1,0-5.69-5.69,5.69,5.69,0,0,0,5.69,5.69" fill="#a67ee5"></path>
                          <circle cx="253.93" cy="226.42" r="5.69" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></circle>
                          <path d="M240.3,210.48H67.19a12,12,0,0,0-12,11.9V276a13,13,0,0,0,13,13h184V222.38a12,12,0,0,0-11.94-11.9" fill="#a67ee5"></path>
                          <path d="M240.3,210.48H67.19a12,12,0,0,0-12,11.9V276a13,13,0,0,0,13,13h184V222.38A12,12,0,0,0,240.3,210.48Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                          <path d="M70.24,289V225.49a15,15,0,0,1,15-15h0.5" fill="none" stroke="#fff" stroke-width="2"></path>
                        </g>
                        <!--   balloon     -->
                        <g transform="rotate(45, 80)">
                          <g transform="translate(45, 80)">
                            <path id="balloonLine" d="M62 209.842L62 210" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round">
                              <animate begin="closedSuitcaseNone.end" attributeName="d" values="M62 209.842L62 210; M62 90 L62.5925 210;" dur="0.3s" fill="freeze"></animate>
                            </path>
                          </g>
                          <g transform="translate(73, 250)">
                            <g>
                              <path d="M33.6284 84.1819L31.4514 87.9794C31.3366 88.184 31.2774 88.415 31.2799 88.6496C31.2824 88.8842 31.3464 89.1139 31.4655 89.316C31.5847 89.5181 31.7548 89.6853 31.9588 89.801C32.1628 89.9167 32.3937 89.9769 32.6282 89.9754L36.9982 89.9604C37.2319 89.9585 37.4611 89.8955 37.6629 89.7777C37.8648 89.6599 38.0323 89.4913 38.1489 89.2887C38.2654 89.0862 38.327 88.8566 38.3274 88.6229C38.3279 88.3892 38.2672 88.1594 38.1513 87.9564L35.9584 84.1739C35.8386 83.971 35.6679 83.803 35.4631 83.6865C35.2583 83.5701 35.0266 83.5092 34.7911 83.51C34.5555 83.5109 34.3242 83.5733 34.1202 83.6912C33.9163 83.809 33.7467 83.9782 33.6284 84.1819Z" fill="white"></path>
                              <path d="M34.5053 1.72842C43.2284 1.70113 51.6054 5.13812 57.7956 11.2841C63.9858 17.4301 67.4828 25.7823 67.518 34.5053C67.5804 52.6752 52.5959 83.4468 34.4361 83.5091C16.2762 83.5715 1.78076 52.8911 1.71842 34.7312C1.69378 26.0081 5.13331 17.6321 11.2812 11.4438C17.4291 5.25543 25.7823 1.76102 34.5053 1.72842ZM34.4998 0.118433C25.3532 0.160417 16.5966 3.82871 10.1512 10.3186C3.7057 16.8085 0.0976176 25.59 0.118429 34.7367C0.151075 44.2466 3.99427 56.8235 9.90846 66.7732C16.9492 78.6291 25.6516 85.1393 34.4315 85.1092C43.2115 85.079 52.009 78.5088 59.1782 66.6241C65.2439 56.6032 69.1505 43.9497 69.118 34.4998C69.076 25.3532 65.4077 16.5967 58.9179 10.1512C52.428 3.70571 43.6465 0.0976209 34.4998 0.118433Z" fill="white"></path>
                              <path d="M22.9386 34.7383C22.8762 16.5784 28.0556 1.83057 34.5056 1.80843C25.7826 1.84102 17.4293 5.33543 11.2815 11.5238C5.13358 17.7121 1.69405 26.0881 1.71869 34.8112C1.78106 52.9811 16.2664 83.6515 34.4363 83.5891L34.6063 83.5886C28.1757 83.4206 23.0008 52.8582 22.9386 34.7383Z" fill="#76ABFF"></path>
                              <path d="M67.5183 34.5853C67.4831 25.8623 63.9861 17.5101 57.7959 11.3641C51.6057 5.21811 43.2286 1.78113 34.5056 1.80843C40.9556 1.78628 46.2361 16.4982 46.2984 34.6581C46.3608 52.818 41.1749 83.156 34.7863 83.5679C52.7848 83.1162 67.5803 52.6352 67.5183 34.5853Z" fill="#1553B7"></path>
                              <path d="M46.2984 34.6581C46.2361 16.4982 40.9556 1.78628 34.5056 1.80842C28.0556 1.83057 22.8762 16.5784 22.9386 34.7383C23.0009 52.8982 28.1757 83.4106 34.6063 83.5886L34.7863 83.5879C41.1749 83.166 46.3604 52.718 46.2985 34.6681" fill="#3B7BF2"></path>
                              <path d="M27.3944 27.693C26.2671 27.6969 25.1662 28.0349 24.231 28.6645C23.2958 29.294 22.5683 30.1867 22.1404 31.2298C21.7126 32.2728 21.6036 33.4192 21.8274 34.5242C22.0511 35.6291 22.5974 36.6429 23.3973 37.4373C24.1972 38.2317 25.2147 38.7711 26.3212 38.9872C27.4276 39.2034 28.5733 39.0865 29.6133 38.6515C30.6534 38.2166 31.5411 37.4829 32.1642 36.5434C32.7873 35.6039 33.1178 34.5007 33.1139 33.3734C33.1565 32.6129 33.0374 31.8521 32.7644 31.141C32.4915 30.4299 32.071 29.7847 31.5306 29.248C30.9901 28.7113 30.3421 28.2952 29.6292 28.0272C28.9162 27.7591 28.1546 27.6452 27.3944 27.693ZM27.4219 35.6929C25.5619 35.6993 24.3587 34.7735 24.354 33.4135C24.3494 32.0535 25.5562 31.1193 27.4062 31.113C29.2561 31.1066 30.4793 32.0324 30.484 33.3924C30.4887 34.7524 29.2419 35.6867 27.4219 35.6929Z" fill="white"></path>
                              <path d="M41.5943 27.6442C41.92 27.6429 42.2397 27.7309 42.5188 27.8987C42.7979 28.0665 43.0256 28.3076 43.1772 28.5958C43.3287 28.8841 43.3983 29.2083 43.3783 29.5334C43.3584 29.8584 43.2496 30.1717 43.0639 30.4392L29.8004 49.8249C29.5143 50.1575 29.116 50.3735 28.6812 50.4318C28.2463 50.4901 27.8052 50.3867 27.4416 50.1411C27.078 49.8956 26.8172 49.5251 26.7088 49.0999C26.6004 48.6748 26.6519 48.2246 26.8536 47.835L40.1271 28.4493C40.2897 28.21 40.5085 28.0143 40.7643 27.8792C41.0201 27.744 41.3051 27.6737 41.5944 27.6742" fill="white"></path>
                              <path d="M43.1039 39.1591C41.9765 39.163 40.8756 39.5011 39.9404 40.1306C39.0052 40.7601 38.2777 41.6529 37.8499 42.6959C37.422 43.7389 37.3131 44.8854 37.5368 45.9903C37.7605 47.0952 38.3069 48.109 39.1068 48.9034C39.9067 49.6978 40.9242 50.2372 42.0306 50.4533C43.1371 50.6695 44.2827 50.5527 45.3228 50.1177C46.3628 49.6827 47.2505 48.9491 47.8737 48.0096C48.4968 47.07 48.8273 45.9669 48.8234 44.8395C48.8643 44.0795 48.7441 43.3193 48.4706 42.609C48.1971 41.8986 47.7765 41.2541 47.2365 40.7177C46.6964 40.1813 46.049 39.7652 45.3368 39.4966C44.6246 39.228 43.8636 39.113 43.1039 39.1591ZM43.1313 47.1591C41.2713 47.1655 40.0682 46.2396 40.0635 44.8796C40.0588 43.5196 41.2656 42.5855 43.1156 42.5791C44.9656 42.5728 46.1887 43.4686 46.1934 44.8585C46.1982 46.2485 44.9913 47.1527 43.1313 47.1591Z" fill="white"></path>
                              <animatetransform id="balloonStart" begin="closedSuitcaseNone.end" attributeType="XML" attributeName="transform" type="translate" dur="0.3s" from="0 0" to="0 -165" fill="freeze"></animatetransform>
                              <animatetransform id="balloonRotateStart" begin="closedSuitcaseNone.end" attributeType="XML" attributeName="transform" type="rotate" dur="0.3s" from="60 30 90" to="0 30 90" additive="sum" fill="freeze"></animatetransform>
                              <animatetransform begin="balloonStart.end" attributeType="XML" attributeName="transform" type="rotate" dur="0.6s" values="8 40 60; -5 40 80; 0 40 60" additive="sum" fill="freeze"></animatetransform>
                              <animatetransform begin="balloonStart.end - 0.1s" attributeType="XML" attributeName="transform" type="translate" dur="0.5s" additive="sum" values="0 25; 0 0; 0 5; 0 0" fill="freeze"></animatetransform>
                            </g>
                          </g>
                          <animatetransform begin="balloonStart.end" attributeType="XML" attributeName="transform" type="rotate" dur="0.5s" values="-3 180 290; 1 180 290; 0 180 290" additive="sum" fill="freeze"></animatetransform>
                        </g>
                        <!--    flowers    -->
                        <g transform="rotate(55 180 290)">
                          <g>
                            <path d="M180.73,277.8s8.3-74.59,39.71-90" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            <path d="M217.95,187.12l9.27-24.49a22,22,0,0,1,8.72,3,7.87,7.87,0,0,1,9.72,12.33,22.14,22.14,0,0,1,.86,9.18l-26,3.3a2.45,2.45,0,0,1-2.6-3.29" fill="#3b7bf2"></path>
                            <path d="M178.24,287.63s6.89-44.68,37.95-56.53" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            <path d="M210.85,232l9-16.47a16.66,16.66,0,0,1,6.13,2.93,5.93,5.93,0,0,1,4-.42,5.67,5.67,0,0,1,4.26,6.85,5.54,5.54,0,0,1-2.29,3.23,15.1,15.1,0,0,1-.21,6.58l-19.34-.11a1.76,1.76,0,0,1-1.6-2.58" fill="#3b7bf2"></path>
                          </g>
                          <animatetransform begin="closedSuitcaseNone.end" attributeType="XML" attributeName="transform" type="rotate" dur="0.6s" values="55 180 290; -13 180 290; 10 180 290; 0 180 290" fill="freeze"></animatetransform>
                        </g>
                        <g transform="rotate(55 180 290)">
                          <g>
                            <path d="M141.77,204.16c24.1,32.45,35.81,84,35.81,84" fill="none" stroke="#3b7bf2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            <path d="M125.73,196.22c6.54,7.51,17.16,9,17.16,9s0-10.72-6.53-18.22-17.17-9-17.17-9,0,10.72,6.54,18.22" fill="#76abff"></path>
                            <path d="M153.17,206.54c-2.69,9.58,1.91,19.27,1.91,19.27s9-5.86,11.67-15.45-1.91-19.27-1.91-19.27-9,5.86-11.67,15.45" fill="#3b7bf2"></path>
                            <path d="M135.82,227.71c9.59,2.7,19.26-1.91,19.26-1.91s-5.86-9-15.45-11.67S120.37,216,120.37,216s5.87,9,15.45,11.67" fill="#3b7bf2"></path>
                            <path d="M166.1,232.52c-3.41,9.36.47,19.35,0.47,19.35s9.39-5.18,12.79-14.53S178.89,218,178.89,218s-9.39,5.18-12.79,14.53" fill="#1553b7"></path>
                            <path d="M147.22,252.35c9.36,3.4,19.35-.47,19.35-0.47s-5.18-9.39-14.54-12.79-19.35.47-19.35,0.47,5.18,9.39,14.54,12.79" fill="#1553b7"></path>
                          </g>
                          <animatetransform begin="closedSuitcaseNone.end" attributeType="XML" attributeName="transform" type="rotate" dur="1s" values="55 180 290; -13 180 290; 8 180 290; -5 180 290; 0 180 290" fill="freeze"></animatetransform>
                        </g>
                        <g transform="rotate(35 180 290)">
                          <g>
                            <path d="M183.79,264.77c2.3,9.1-2.27,18.12-2.27,18.12s-8.32-5.74-10.63-14.85,2.27-18.12,2.27-18.12,8.32,5.75,10.63,14.85" fill="#3b7bf2"></path>
                            <path d="M199.63,285.16c-9.11,2.31-18.12-2.27-18.12-2.27s5.74-8.32,14.85-10.63,18.12,2.27,18.12,2.27-5.75,8.32-14.85,10.63" fill="#3b7bf2"></path>
                            <path d="M188.56,271.67a144.15,144.15,0,0,0-10.31,16.61" fill="none" stroke="#3b7bf2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            <path d="M203.69,264.19c-6.17,7.08-16.19,8.44-16.19,8.44s0-10.11,6.16-17.18S209.85,247,209.85,247s0,10.11-6.16,17.19" fill="#76abff"></path>
                          </g>
                          <animatetransform begin="closedSuitcaseNone.end" attributeType="XML" attributeName="transform" type="rotate" dur="1.2s" values="35 180 290; -8 180 290; 10 180 290; -5 180 290; 0 180 290;" fill="freeze"></animatetransform>
                        </g>
                        <!--   bird     -->
                        <g transform="translate(-75, 85)">
                          <path fill="#01caca" transform="translate(260, 167)" d="M17.2 17.8C17.1925 16.6869 17.5649 15.6045 18.2559 14.7318C18.9468 13.859 19.9148 13.2481 21 13L42.07 7.60001C34.29 22.44 22.89 22.67 22.07 22.67C20.7791 22.6568 19.5456 22.1348 18.6374 21.2173C17.7293 20.2998 17.2199 19.0609 17.22 17.77">
                            <animate attributeName="d" values="M17.2 17.8C17.1925 16.6869 17.5649 15.6045 18.2559 14.7318C18.9468 13.859 19.9148 13.2481 21 13L42.07 7.60001C34.29 22.44 22.89 22.67 22.07 22.67C20.7791 22.6568 19.5456 22.1348 18.6374 21.2173C17.7293 20.2998 17.2199 19.0609 17.22 17.77;M17.0929 21.176C16.8385 20.0923 16.9126 18.9651 17.3031 17.9805C17.6936 16.996 18.3772 16.213 19.2407 15.7611V15.7611L35.8779 6.41805C32.5978 22.3909 22.9963 24.822 22.3019 24.9807C21.206 25.2178 20.0451 24.9477 19.0717 24.229C18.0982 23.5104 17.3908 22.4014 17.1031 21.1429;M18.1903 20.2297C16.9963 20.205 15.839 20.0194 14.9098 19.7037C13.9805 19.3881 13.3349 18.9611 13.0796 18.4935V18.4935L7.49731 9.39937C23.3374 13.08 23.4706 17.9328 23.4624 18.2814C23.4354 18.83 22.8632 19.3413 21.87 19.7044C20.8769 20.0675 19.543 20.2529 18.1583 20.2205" dur="0.15s" repeatCount="indefinite"></animate>
                          </path>
                          <path fill="#01caca" d="M262.24,169.86l10.76,0a4.65,4.65,0,0,1,4.41-2.9,3.91,3.91,0,0,1,3.48,1.76,13.39,13.39,0,0,1,1.37,2.59c0.63,1.57,4,15.8,5.89,19.16,1.1,2,4.39,7.16,4.39,7.16a2.3,2.3,0,0,1,.31,1.15V208s-3.11-1.08-3.11-3.91v-6.53c-1.91.27-6-1.65-8.33-2.88a12.82,12.82,0,0,1-6.36-6.76,12.33,12.33,0,0,1-.11-9.16,7.13,7.13,0,0,0,.79-2.91c-0.06-1.14-1.39-2.72-2.18-4.05Z"></path>
                          <animatetransform id="endPathBird" begin="closedSuitcaseNone.end" attributeName="transform" type="translate" to="0, 0" dur="0.5s" fill="freeze"></animatetransform>
                          <animatetransform begin="endPathBird.end" attributeName="transform" type="rotate" values="0 240 190; -8 220 160; 0 250 180; 3 220 160; 0 240 190" dur="2.5s" repeatDur="indefinite"></animatetransform>
                        </g>
                        <!--  lower part of the suitcase      -->
                        <g>
                          <path d="M280.29,318.62a5.72,5.72,0,1,0-5.12-5.69,5.43,5.43,0,0,0,5.12,5.69" fill="#a67ee5"></path>
                          <ellipse cx="280.29" cy="312.93" rx="5.12" ry="5.69" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></ellipse>
                          <path d="M230.22,328.86h-148a11.85,11.85,0,0,1-11.95-11.67V289H242.16v28.17a11.84,11.84,0,0,1-11.94,11.67" fill="#a67ee5"></path>
                          <path d="M230.22,328.86h-148a11.85,11.85,0,0,1-11.95-11.67V289H242.16v28.17A11.84,11.84,0,0,1,230.22,328.86Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                          <path d="M266.72,328.86h-147a11.81,11.81,0,0,1-11.87-11.67V289H278.58v28.17a11.79,11.79,0,0,1-11.86,11.67" fill="#a67ee5"></path>
                          <path d="M266.72,328.86h-147a11.81,11.81,0,0,1-11.87-11.67V289H278.58v28.17A11.79,11.79,0,0,1,266.72,328.86Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                          <path d="M215,314.07H180.49a4.27,4.27,0,0,1-4.35-4.16V298.21a1.24,1.24,0,0,1,1.27-1.22h2.88a1.25,1.25,0,0,1,1.27,1.22v10a1.33,1.33,0,0,0,1.35,1.29h29.71a1.33,1.33,0,0,0,1.35-1.29v-10a1.24,1.24,0,0,1,1.27-1.22h2.88a1.25,1.25,0,0,1,1.27,1.22V309.9a4.27,4.27,0,0,1-4.35,4.16" fill="#a67ee5"></path>
                          <path d="M215,314.07H180.49a4.27,4.27,0,0,1-4.35-4.16V298.21a1.24,1.24,0,0,1,1.27-1.22h2.88a1.25,1.25,0,0,1,1.27,1.22v10a1.33,1.33,0,0,0,1.35,1.29h29.71a1.33,1.33,0,0,0,1.35-1.29v-10a1.24,1.24,0,0,1,1.27-1.22h2.88a1.25,1.25,0,0,1,1.27,1.22V309.9A4.27,4.27,0,0,1,215,314.07Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                          <rect x="138.58" y="282.19" width="9.1" height="12.52" fill="#a67ee5"></rect>
                          <rect x="138.58" y="282.19" width="9.1" height="12.52" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></rect>
                          <rect x="247.85" y="282.19" width="9.1" height="12.52" fill="#a67ee5"></rect>
                          <rect x="247.85" y="282.19" width="9.1" height="12.52" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></rect>
                          <path d="M278.58,317.11v-9.87h-10.4a5.67,5.67,0,0,0-5.53,5.8v15.82h4.73c6.16,0,11.2-5.29,11.2-11.75" fill="#a67ee5"></path>
                          <path d="M278.58,317.11v-9.87h-10.4a5.67,5.67,0,0,0-5.53,5.8v15.82h4.73C273.54,328.86,278.58,323.58,278.58,317.11Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                          <path d="M100,301.54H79.22a1,1,0,0,1-1-1V298a1,1,0,0,1,1-1H100a1,1,0,0,1,1,1v2.58a1,1,0,0,1-1,1" fill="#a67ee5"></path>
                          <path d="M100,301.54H79.22a1,1,0,0,1-1-1V298a1,1,0,0,1,1-1H100a1,1,0,0,1,1,1v2.58A1,1,0,0,1,100,301.54Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"></path>
                        </g>
                        <g>
                          <line x1="46.24" y1="329" x2="303.76" y2="329" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                        </g>
                        <animate begin="closedSuitcaseNone.end" attributeType="CSS" attributeName="opacity" from="0" to="1" dur="0.01s" fill="freeze"></animate>
                      </g>
                    </svg>
                  </div>
                  <div class="col-xl-5 col-lg-5 col-sm-5 col-md-5 col-5">
                    <!-- end title -->
                    <style>
                      .showstep1 {
                        animation: fadeIn 1.7s linear;
                        animation-delay: 1.5s;
                      }

                      @keyframes blinker {
                        50% {
                          opacity: 0;
                        }
                      }

                      .showstep2 {
                        animation: fadeIn 1.7s linear;
                        animation-delay: 2.5s;
                      }

                      @keyframes blinker {
                        50% {
                          opacity: 0;
                        }
                      }

                      .showstep3 {
                        animation: fadeIn 1.7s linear;
                        animation-delay: 3.5s;
                      }

                      @keyframes blinker {
                        50% {
                          opacity: 0;
                        }
                      }

                      .showref {
                        animation: fadeIn 1.7s linear;
                        animation-delay: 4.5s;
                      }

                      @keyframes blinker {
                        50% {
                          opacity: 0;
                        }
                      }
                    </style>
                    <!-- begin sales -->
                    <h3 class="pt-3 pb-3 showstep1">
                      <img src="./Home_files/userr.png" height="35px" class="mr-2">5%
                    </h3>
                    <h3 class="pb-3 showstep2">
                      <img src="./Home_files/userr.png" height="35px" class="mr-2"><img src="./Home_files/userr.png" height="30px" class="mr-2">2%
                    </h3>
                    <h3 style="margin-right: -8px" class="showstep3">
                      <img src="./Home_files/userr.png" height="35px" class="mr-2"><img src="./Home_files/userr.png" height="30px" class="mr-2"><img src="./Home_files/userr.png" height="25px" class="mr-2">1%
                    </h3>
                    <!-- begin percentage -->
                    <div class="text-grey m-b-1"></div>
                  </div>
                </div>
                <!-- end percentage -->
              </div>
              <!-- end card-body -->
            </div>
            <!-- end card -->
          </div>
          <!-- begin col-8 -->
          <!-- end col-8 -->
          <!-- begin col-4 -->
          <!-- end col-4 -->
        </div>
        <!-- end row -->
        <!-- begin row -->
        <div class="row">
          <!-- begin col-4 -->

          <!-- begin col-4 -->

          <div class="col-xl-4 col-lg-6">
            <!-- begin card -->
            <div class="card border-0 mb-3">
              <!-- begin card-body -->
              <div class="card-body">
                <!-- begin title -->
                <div class="mb-3 text-grey">
                  <b>Last Deposits</b>
                  <span class="ml-2"></span>
                </div>
                <!-- end title -->
                <!-- begin product -->
                <div id="lw_body">
                  <tr>
                    <td>Zayndi Kunze</td>
                    <td>24-06-2023</td>
                    <td>$21048</td>
                  </tr>
                  <tr>
                    <td>Espedito Gawkroger</td>
                    <td>24-06-2023</td>
                    <td>$68693</td>
                  </tr>
                  <tr>
                    <td>Toya Frederiksen</td>
                    <td>24-06-2023</td>
                    <td>$198023</td>
                  </tr>
                  <tr>
                    <td>Shishay ç¬¦</td>
                    <td>24-06-2023</td>
                    <td>$334316</td>
                  </tr>
                  <tr>
                    <td>Jan Raymond</td>
                    <td>24-06-2023</td>
                    <td>$12667</td>
                  </tr>
                  <tr>
                    <td>Konli Ø°Ø§Ú©Ø±ÛŒ</td>
                    <td>24-06-2023</td>
                    <td>$14364</td>
                  </tr>
                  <tr>
                    <td>Shawn Å½erovc</td>
                    <td>24-06-2023</td>
                    <td>$14143</td>
                  </tr>
                </div>
                <!-- end product -->
              </div>
              <!-- end card-body -->
            </div>
            <!-- end card -->
          </div>
          <!-- end col-4 -->
          <!-- begin col-4 -->

          <div class="col-xl-4 col-lg-6">
            <!-- begin card -->
            <div class="card border-0 mb-3">
              <!-- begin card-body -->
              <div class="card-body">
                <!-- begin title -->
                <div class="mb-3 text-grey">
                  <b>Last Withdrawals</b>
                  <span style="cursor: pointer" onclick="location.href=&#39;?a=paidout&#39;;" class="ml-2 badge"><small>All withdrawals</small></span>
                </div>
                <!-- end title -->
                <!-- begin product -->
                <div id="ld_body">
                  <tr>
                    <td>GuÃ°ni à¸žà¸¸à¸—à¸˜à¸´à¸¡à¸²</td>
                    <td>24-06-2023</td>
                    <td>$544147</td>
                  </tr>
                  <tr>
                    <td>Airi Gomes</td>
                    <td>24-06-2023</td>
                    <td>$748436</td>
                  </tr>
                  <tr>
                    <td>Temotamoshikuari FrÃ©chette</td>
                    <td>24-06-2023</td>
                    <td>$129702</td>
                  </tr>
                  <tr>
                    <td>å®¶éŠ˜ Rooijakkers</td>
                    <td>24-06-2023</td>
                    <td>$200507</td>
                  </tr>
                  <tr>
                    <td>ÙØ±Ø¯ÛŒÙ† Ú¯Ù„ÛŒ</td>
                    <td>24-06-2023</td>
                    <td>$10198</td>
                  </tr>
                  <tr>
                    <td>Rami Fernandes</td>
                    <td>24-06-2023</td>
                    <td>$12760</td>
                  </tr>
                  <tr>
                    <td>Emerenciana Maestas</td>
                    <td>24-06-2023</td>
                    <td>$14088</td>
                  </tr>
                </div>
                <!-- end product -->

                <!-- end product -->
              </div>
              <!-- end card-body -->
            </div>
            <!-- end card -->
          </div>
          <!-- end col-4 -->
          <!-- end col-4 -->
          <div class="col-xl-4 col-lg-4">
            <button class="btn btn-success rounded w-100 mt-2" data-toggle="modal" data-target="#exampleModalCenter">
              VIEW ACTIVE TRADING PLAYS
            </button>
          </div>
          <!-- end col-4 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end #content -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body" style="height: 350px">
              <div class="bg-white h-100 text-center rounded">
                <div style="
                    height: 70%;
                    background-image: url(&#39;/dashboard/images/big-data-fueling-mobile-app-development.png&#39;);
                    background-size: cover;
                    background-position: center;
                  "></div>
                <div class="text-dark d-flex align-items-center" style="height: 30%">
                  UPGRADE TO COOPERATE PLAN TO VIEW ALL CURRENT TRADING PLAYS
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- begin theme-panel -->
      <!-- end theme-panel -->
      <!-- begin scroll to top btn -->
      <a href="javascript:;" class="btn btn-icon btn-circle btn-teal btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
      <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="./Home_files/app.min.js.download"></script>
    <script src="./Home_files/transparent.min.js.download"></script>
    <!-- ================== END BASE JS ================== -->
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="./Home_files/d3.min.js.download"></script>
    <script src="./Home_files/nv.d3.min.js.download"></script>
    <script src="./Home_files/jquery-jvectormap.min.js.download"></script>
    <script src="./Home_files/jquery-jvectormap-world-mill.js.download"></script>
    <script src="./Home_files/apexcharts.min.js.download"></script>
    <script src="./Home_files/moment.min.js.download"></script>
    <script src="./Home_files/daterangepicker.js.download"></script>

    <script src="./Home_files/script36e.js.download"></script>
    <script src="./Home_files/recent.js.download"></script>

    <script>
      (function() {
        var BrowserDetect = {
          init: function() {
            this.browser =
              this.searchString(this.dataBrowser) || "An unknown browser";
            this.version =
              this.searchVersion(navigator.userAgent) ||
              this.searchVersion(navigator.appVersion) ||
              "an unknown version";
            this.OS = this.searchString(this.dataOS) || "an unknown OS";
          },
          searchString: function(data) {
            for (var i = 0; i < data.length; i++) {
              var dataString = data[i].string;
              var dataProp = data[i].prop;
              this.versionSearchString =
                data[i].versionSearch || data[i].identity;
              if (dataString) {
                if (dataString.indexOf(data[i].subString) != -1)
                  return data[i].identity;
              } else if (dataProp) return data[i].identity;
            }
          },
          searchVersion: function(dataString) {
            var index = dataString.indexOf(this.versionSearchString);
            if (index == -1) return;
            return parseFloat(
              dataString.substring(index + this.versionSearchString.length + 1)
            );
          },
          dataBrowser: [{
              string: navigator.userAgent,
              subString: "Chrome",
              identity: "Chrome",
            },
            {
              string: navigator.userAgent,
              subString: "OmniWeb",
              versionSearch: "OmniWeb/",
              identity: "OmniWeb",
            },
            {
              string: navigator.vendor,
              subString: "Apple",
              identity: "Safari",
              versionSearch: "Version",
            },
            {
              prop: window.opera,
              identity: "Opera",
            },
            {
              string: navigator.vendor,
              subString: "iCab",
              identity: "iCab",
            },
            {
              string: navigator.vendor,
              subString: "KDE",
              identity: "Konqueror",
            },
            {
              string: navigator.userAgent,
              subString: "Firefox",
              identity: "Firefox",
            },
            {
              string: navigator.vendor,
              subString: "Camino",
              identity: "Camino",
            },
            {
              // for newer Netscapes (6+)
              string: navigator.userAgent,
              subString: "Netscape",
              identity: "Netscape",
            },
            {
              string: navigator.userAgent,
              subString: "MSIE",
              identity: "Explorer",
              versionSearch: "MSIE",
            },
            {
              string: navigator.userAgent,
              subString: "Gecko",
              identity: "Mozilla",
              versionSearch: "rv",
            },
            {
              // for older Netscapes (4-)
              string: navigator.userAgent,
              subString: "Mozilla",
              identity: "Netscape",
              versionSearch: "Mozilla",
            },
          ],
          dataOS: [{
              string: navigator.platform,
              subString: "Win",
              identity: "Windows",
            },
            {
              string: navigator.platform,
              subString: "Mac",
              identity: "Mac OS",
            },
            {
              string: navigator.userAgent,
              subString: "iPhone",
              identity: "iPhone/iPod",
            },
            {
              string: navigator.platform,
              subString: "Linux",
              identity: "Linux",
            },
          ],
        };

        BrowserDetect.init();

        window.$.client = {
          os: BrowserDetect.OS,
          browser: BrowserDetect.browser,
        };
      })();

      $("#os").html("<b>" + $.client.os + "</b>");
      $("#browser").html("<b>" + $.client.browser + "</b>");
    </script>

    <script>
      function copy() {
        /* Get the text field */
        var copyText = document.getElementById("reflink");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /*For mobile devices*/

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Copied: " + copyText.value);
      }
    </script>
    <script>
      $(document).on("click", '[data-toggle="nav-history"]', function(t) {
        t.preventDefault();
        var e = $(this).closest("li"),
          i = $(".sidebar .nav.nav-history");
        $(i).is(":visible") ?
          ($(e).removeClass("active"), $(i).removeClass("closing")) :
          ($(e).addClass("active"), $(i).addClass("expanding"));
      });
    </script>
    <!-- ================== END PAGE LEVEL JS ================== -->


    <!-- <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
      <defs id="SvgjsDefs1002"></defs>
      <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
      <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg><iframe id="tidio-chat-code" title="Tidio Chat code" style="display: none;" src="./Home_files/saved_resource(1).html"></iframe>
    <div id="tidio-chat"><iframe title="Tidio Chat" id="tidio-chat-iframe" style="display: block; border: none; position: fixed; inset: auto 9px 35px auto; width: 264px; height: 94px; opacity: 1; color-scheme: none; background: none transparent !important; margin: 0px; max-height: 100vh; max-width: 100vw; transform: translateY(0px); transition: none 0s ease 0s !important; visibility: visible; z-index: 999999999 !important; border-radius: 47px 30px 47px 47px;" src="./Home_files/saved_resource(2).html"></iframe></div> -->
  </body><grammarly-desktop-integration data-grammarly-shadow-root="true"><template shadowrootmode="open">
      <style>
        div.grammarly-desktop-integration {
          position: absolute;
          width: 1px;
          height: 1px;
          padding: 0;
          margin: -1px;
          overflow: hidden;
          clip: rect(0, 0, 0, 0);
          white-space: nowrap;
          border: 0;
          -moz-user-select: none;
          -webkit-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }

        div.grammarly-desktop-integration:before {
          content: attr(data-content);
        }
      </style>
      <div aria-label="grammarly-integration" role="group" tabindex="-1" class="grammarly-desktop-integration" data-content="{&quot;mode&quot;:&quot;full&quot;,&quot;isActive&quot;:true,&quot;isUserDisabled&quot;:false}"></div>
    </template></grammarly-desktop-integration>

  </html>
<?php
}
?>