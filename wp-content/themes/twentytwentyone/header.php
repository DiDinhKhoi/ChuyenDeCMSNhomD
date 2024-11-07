<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>
<?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }


    body {
        font-family: Arial, sans-serif;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        /* Căn giữa các thành phần trái và phải */
        align-items: center;
        background-color: #f5f5f5;
        padding: 10px 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .nav-left {
        display: flex;
        align-items: center;
    }

    .logo {
        font-size: 24px;
        font-weight: bold;
        margin-right: 20px;
    }

    .nav-links-left {
        display: flex;
        align-items: center;
        list-style: none;
    }

    .nav-links-left li {
        margin-right: 20px;
    }

    .nav-links-left li a {
        text-decoration: none;
        color: #333;
        font-size: 16px;
    }

    .nav-links-left li input[type="text"] {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-right: 5px;
    }

    .nav-links-left li button {
        padding: 5px 10px;
        border: none;
        background-color: #ccc;
        border-radius: 4px;
        cursor: pointer;
    }

    .nav-links-right {
        display: flex;
        align-items: center;
        list-style: none;
    }

    .nav-links-right li {
        margin-right: 20px;
    }

    .nav-links-right li a,
    .menu,
    .search-icon,
    .account {
        font-size: 16px;
        color: #333;
        text-decoration: none;
        cursor: pointer;
    }

    .dropdown-menu {
        display: none;
        /* Ẩn menu dropdown */
        position: absolute;
        /* Để định vị đúng vị trí */
        background-color: white;
        /* Nền trắng cho menu */
        border: 1px solid #ccc;
        /* Viền cho menu */
        z-index: 1000;
        /* Đảm bảo menu hiển thị trên các phần tử khác */
        min-width: 150px;
        /* Đặt chiều rộng tối thiểu cho menu */
        padding: 10px 0;
        /* Thêm khoảng cách cho các mục */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        /* Thêm bóng cho menu */
        border-radius: 5px;
        /* Bo góc cho menu */
    }

    .dropdown-menu li {
        padding: 10px 15px;
        /* Thêm khoảng cách cho mỗi mục */
        list-style: none;
        /* Bỏ dấu chấm cho các mục */
    }

    .dropdown-menu li a {
        text-decoration: none;
        /* Bỏ gạch chân cho link */
        color: black;
        /* Màu chữ cho các link */
        display: block;
        /* Đảm bảo toàn bộ vùng chứa link nhấp được */
    }

    .dropdown-menu li:hover {
        background-color: #f0f0f0;
        /* Thay đổi nền khi hover vào mục */
    }


    body {
        font-family: Arial, sans-serif;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        /* Căn giữa các thành phần trái và phải */
        align-items: center;
        background-color: #f5f5f5;
        padding: 10px 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .nav-left {
        display: flex;
        align-items: center;
    }

    .logo {
        font-size: 24px;
        font-weight: bold;
        margin-right: 20px;
    }

    .nav-links-left {
        display: flex;
        align-items: center;
        list-style: none;
    }

    .nav-links-left li {
        margin-right: 20px;
    }

    .nav-links-left li a {
        text-decoration: none;
        color: #333;
        font-size: 16px;
    }

    .nav-links-left li input[type="text"] {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-right: 5px;
    }

    .nav-links-left li button {
        padding: 5px 10px;
        border: none;
        background-color: #ccc;
        border-radius: 4px;
        cursor: pointer;
    }

    .nav-links-right {
        display: flex;
        align-items: center;
        list-style: none;
    }

    .nav-links-right li {
        margin-right: 20px;
    }


    .nav-links-right li a,
    .menu,
    .search-icon,
    .account {
        font-size: 16px;
        color: #333;
        text-decoration: none;
        cursor: pointer;
    }
</style>


<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <nav class="navbar">
        <div class="nav-left">
            <div class="logo">Group D</div>
            <ul class="nav-links-left">
                <li><a href="http://wordpress.local/">Home</a></li>
                <li>
                    <input type="text" id="searchInput" placeholder="Search">
                    <button id="searchButton">Submit</button>
        </div>
        <ul class="nav-links-right">
            <li><a href="http://wordpress.local/category/the-thao/">Thể thao</a></li>
            <li><a href="http://wordpress.local/category/khoa-hoc/">Khoa học</a></li>
            <li><a href="http://wordpress.local/category/tin-tuc/">Tin tức</a></li>
            <li><span class="menu">Menu</span></li>
            <li><span class="search-icon">🔍</span></li>
            <?php if (is_user_logged_in()) : 
            $current_user = wp_get_current_user(); // Lấy thông tin người dùng hiện tại
        ?>
            <!-- Hiển thị Account menu khi đã đăng nhập -->
            <li class="dropdown">
                <span class="account">Account ▼</span>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo get_permalink(get_option('profile_page_id')); ?>">
                            <?php echo esc_html($current_user->display_name); ?>
                        </a></li>
                    <li><a href="http://wordpress.local/wp-admin/profile.php">Settings</a></li>
                    <li><a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a></li>
                </ul>
            </li>
            <?php else : ?>
            <!-- Hiển thị link Login khi chưa đăng nhập -->
            <li><a href="<?php echo wp_login_url(); ?>">Login</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <script>
        // JavaScript cho chức năng tìm kiếm
        document.getElementById("searchButton").addEventListener("click", function () {
            var query = document.getElementById("searchInput").value;
            if (query) {
                window.location.href = "http://wordpress.local/?s=" + encodeURIComponent(query);
            } else {
                alert("Vui lòng nhập từ khóa để tìm kiếm.");
            }
        });

        document.addEventListener('DOMContentLoaded', function () {
            const accountMenu = document.querySelector('.dropdown-menu');
            const accountButton = document.querySelector('.account');

            accountButton.addEventListener('click', function () {
                // Chuyển đổi giữa hiển thị và ẩn dropdown
                accountMenu.style.display = accountMenu.style.display === 'block' ? 'none' : 'block';
            });

            // Đóng dropdown khi nhấp ra ngoài
            window.addEventListener('click', function (event) {
                if (!accountButton.contains(event.target) && !accountMenu.contains(event.target)) {
                    accountMenu.style.display = 'none';
                }
            });
        });
    </script>