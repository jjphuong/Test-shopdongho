<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'shopdongho2' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|SrN=Bh6,uQ,|.VIv/8_a){Dt5?1:((2gU{u}DD47kM7w>xE_kQFy ~v&K@FgYNi' );
define( 'SECURE_AUTH_KEY',  'DuDL:l%^Ro%_6B}M4N2f1fstF[owT_[>zm2zV<]zh5jvK%rOEEU9lao$a;uGuRR!' );
define( 'LOGGED_IN_KEY',    '9/~,Bw_d7Wk/PepM>/zxBmHJOIi[gYe]x:O(o6BNh0tO#K(T?l^BLuraSuvlF9pQ' );
define( 'NONCE_KEY',        '$Xewmx/Twl1D$G7_h|G!%w`9Y|>R }C;5U#8ki>kKJzXeEX3#Y}ah_QXM%gMBs7|' );
define( 'AUTH_SALT',        'ctw:[Ms/7-[D{v7OPyXR2FI>],u$.t Z4eGYFhqWq~;+NC(=zF#30sc<s!liddw(' );
define( 'SECURE_AUTH_SALT', '8=Gv/34UU/DZ8)pB)03Hb%0Mclqq_|42Ky<nV1a4EogClmM&[K!]9lg@L~#ck,!1' );
define( 'LOGGED_IN_SALT',   '/672[8T,hQ;Gna@z45%J/~2iBKuY}s}X7T>o&peoi`i9?V$E|E$<MWVsiAwf; eQ' );
define( 'NONCE_SALT',       'XnH(PzTYQ{xop_+hYg4j=O@%[H4cvAF|&Vrt(<_n8| gSr5lA-}T@K}xa)2:.YuV' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
