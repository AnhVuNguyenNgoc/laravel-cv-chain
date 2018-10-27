   <div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="index.html" class="logo">
             <span>
                  <img src="assets/images/logo.png" alt="" height="55">
             </span>
            <i>
                <img src="assets/images/logo_sm.png" alt="" height="28">
            </i>
        </a>
    </div>

    <nav class="navbar-custom">

        <ul class="list-unstyled topbar-right-menu float-right mb-0">
            <li class="dropdown notification-list hide-phone">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                   <i class="fa fa-credit-card" aria-hidden="true"></i> Nhận Ether  <i class="mdi mdi-chevron-down"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">

                    <!-- item-->
                    <a target="_blank" rel="noopener noreferrer" href="https://buyselleth.com" class="dropdown-item">
                        Mua Ether
                    </a>
                    <!-- item-->
                  <!--    echo '<a href="https://faucet.ropsten.be/donate/'.$row['ACCOUNT_ADDRESS'].'" class="dropdown-item">
                        Lấy Ether
                    </a>';
                    ?> -->
                </div>
            </li>

            <li class="notification-list hide-phone">
                <a class="nav-link waves-effect waves-light nav-user" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false" >
                    <i class='fa fa-money'></i> <span id='amountether' ></span>
                </a>                                
            </li>
                
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1">
                 <!--        echo $_SESSION['username'] ?> -->
                        <i class="mdi mdi-chevron-down"></i> </span>
                </a>

                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fi-head"></i> <span>My Account</span>
                    </a>
            
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fi-power"></i> <span>Logout</span>
                    </a>

                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-light waves-effect">
                    <i class="dripicons-menu"></i>
                </button>
            </li>
            <li class="hide-phone app-search">
                <form role="search" class="">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href=""><i class="fa fa-search"></i></a>
                </form>
            </li>
        </ul>

    </nav>

</div>