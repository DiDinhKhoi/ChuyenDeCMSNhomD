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
    justify-content: space-between; /* Căn giữa các thành phần trái và phải */
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

.nav-links-right li a, .menu, .search-icon, .account {
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
        <div class="logo">Group C</div>
        <ul class="nav-links-left">
            <li><a href="http://wordpress.local/">Home</a></li>
            <li>
                <input type="text" id="searchInput" placeholder="Search">
                <button id="searchButton">Submit</button>
            </li>
        </ul>
    </div>
    <ul class="nav-links-right">
        <li><a href="http://wordpress.local/category/the-thao/">Thể thao</a></li>
        <li><a href="http://wordpress.local/category/khoa-hoc/">Khoa học</a></li>
        <li><a href="http://wordpress.local/category/tin-tuc/">Tin tức</a></li>
        <li><span class="menu">Menu</span></li>
        <li><span class="search-icon">🔍</span></li>
        <li class="dropdown">
            <span class="account">Account ▼</span>
        </li>
    </ul>
</nav>

<script>
    // JavaScript cho chức năng tìm kiếm
    document.getElementById("searchButton").addEventListener("click", function() {
        var query = document.getElementById("searchInput").value;
        if (query) {
            window.location.href = "http://wordpress.local/?s=" + encodeURIComponent(query);
        } else {
            alert("Vui lòng nhập từ khóa để tìm kiếm.");
        }
    });
</script>



   