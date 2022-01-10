<header>
    <div class='grid'>
        <div class='navbar-wrap'>
            <div class='navbar-left'>
                <ul class='navbar-list'>
                    <li class='navbar-item navbar-noti btn'>
                        <div onclick='menuBar()' class='menu' class='navbar-item-link'><i class='fas fa-bars'></i></div>
                    </li>
                    <li class='navbar-item'>
                        <img src='asset/image/background/Logo-TDT.png' class='logo'>
                    </li>
                </ul>
            </div>
            <div class='navbar-right'>
                <ul class='navbar-list'>
                    <a  href='#' class='navbar-item-link'>
                        <li class='navbar-item navbar-noti user-wrap'>                     
                                <div class='user'>
                                    <img src='asset/image/avatar/user-avatar.png' alt='' class='user-ava'>
                                    <div class='user-info'>
                                        <div class='user-log'><?= $_SESSION['hoten'] ?></div>
                                    </div>
                                </div>
                            
                            <ul class='navbar-noti-list' >
                                <a href='logout.php' class='navbar-item-link'>
                                    <li class='navbar-noti-item '>            
                                        <div class='navbar-noti-info'>
                                            <div class='navbar-noti-head'>Đăng Xuất</div>
                                        </div>          
                                    </li> 
                                </a>     
                            </ul>
                        </li>
                    </a>
                    <li class="navbar-item">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>