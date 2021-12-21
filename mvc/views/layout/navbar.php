<header>
    <div class='grid'>
        <div class='navbar-wrap'>
            <div class='navbar-left'>
                <ul class='navbar-list'>
                    <li class='navbar-item navbar-noti'>
                        <div onclick='menuBar()' class='menu' class='navbar-item-link'><i class='fas fa-bars'></i></div>
                    </li>
                    <li class='navbar-item'>
                        <img src='asset/image/background/Logo-TDT.png' class='logo'>
                    </li>
                </ul>
            </div>
            <div class='navbar-right'>
                <ul class='navbar-list'>
                    <li class='navbar-item navbar-noti'>
                        <i class='far fa-bell'></i>
                        <div class='navbar-noti-quantity'>99+</div>
                        <ul class='navbar-noti-list'>
                            <li class='navbar-noti-item'>
                                <a href='' class='navbar-noti-link'>
                                    <img src='asset/image/background/Logo-TDT.png' alt='' class='navbar-noti-img'>
                                    <div class='navbar-noti-info'>
                                        <div class='navbar-noti-head'>Best Travel Plugin</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class='navbar-item navbar-noti user-wrap'>
                        <a  href='#' class='navbar-item-link'>
                            <div class='user'>
                                <img src='asset/image/avatar/user-avatar.png' alt='' class='user-ava'>
                                <div class='user-info'>
                                    <div class='user-log'><?= $_SESSION['hoten'] ?></div>
                                </div>
                            </div>
                        </a>
                        <ul class='navbar-noti-list' >
                            <li class='navbar-noti-item '>
                                <a href='?controller=nhanvien&action=view' class='navbar-item-link'>
                                    <div class='navbar-noti-info'>
                                        <div class='navbar-noti-head'>Thông tin cá nhân</div>
                                    </div>
                                </a>
                            </li>
                            <li class='navbar-noti-item '>            
                                <a href='logout.php' class='navbar-item-link'>
                                    <div class='navbar-noti-info'>
                                        <div class='navbar-noti-head'>Đăng Xuất</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar-item">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>