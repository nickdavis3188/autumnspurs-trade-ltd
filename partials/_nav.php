<?php
include("./url/url.php");
?>
<!-- begin sidebar nav -->
<ul class="nav">
    <li class="nav-header">Navigation</li>
    <li>
        <a href=<?php echo ($dashboard)  ?>> <i class="fa fa-th-large" aria-hidden="true"></i> <span>Dashboard</span> </a>
    </li>
    <li>
        <a href=<?php echo ($deposit)  ?>> <i class="fas fa-donate" aria-hidden="true"></i> <span>Make a Deposit</span> </a>
    </li>
    <li>
        <a href=<?php echo ($withdrawal)  ?>> <i class="fas fa-hand-holding-usd" aria-hidden="true"></i> <span>Withdrawal</span> </a>
    </li>
    <li>
        <a href=<?php echo ($activeDeposit)  ?>> <i class="far fa-money-bill-alt" aria-hidden="true"></i> <span>Active Deposits</span>
        </a>
    </li>
    <li class="has-sub">
        <a href="javascript:;"> <i class="fas fa-search-dollar" aria-hidden="true"></i> <span>Account
                History</span> </a>
        <ul class="sub-menu">
            <li>
                <a href=<?php echo ($depositHistory)  ?>> <span>Deposits History</span> </a>
            </li>
            <li>
                <a href=<?php echo ($earningHistory)  ?>> <span>Earnings History</span> </a>
            </li>
            <li>
                <a href=<?php echo ($withdrawalHistory)  ?>> <span>Withdrawal History</span> </a>
            </li>
        </ul>
    </li>
    <li>
        <a href=<?php echo ($ref)  ?>> <i class="far fa-handshake" aria-hidden="true"></i> <span>Referral Program</span> </a>
    </li>

    <li>
        <a href=<?php echo ($faq)  ?>> <i class="far fa-question-circle" aria-hidden="true"></i> <span>FAQ</span> </a>
    </li>
    <li>
        <a href=<?php echo ($support)  ?>> <i class="fas fa-headset" aria-hidden="true"></i> <span>Support</span> </a>
    </li>
    <li>
        <a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
    </li>
    <!-- end sidebar minify button -->
</ul>
<!-- end sidebar nav -->