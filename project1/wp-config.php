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
define( 'DB_NAME', 'wp-wordpress 1' );

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
define( 'AUTH_KEY',         'qJkY0{um!tW%ixFBdW)$8{OMa$ONwa=Ui@*hytEJV7kqCg.uOz:$(^!Du H7JFfK' );
define( 'SECURE_AUTH_KEY',  'J2w4Z7~<W|-AjRZf1j?YEo&*Ldx|z|*6Sg^4n{Q<`Qe8P]bx;:zEu?GJ%PEFynS8' );
define( 'LOGGED_IN_KEY',    'Z&4o%l4<oa.n!ABdt)+YH]hI?Mm_*7C?#6qQ_md!1?%Ar1{1Z[Ph@MXg;&;S.m_n' );
define( 'NONCE_KEY',        'eUu_RMk[dLHrJ_pfsdhCGpGdfY:?obf=~JT[yyw]q+C;8r+YR2f ORC+=mKPOMPn' );
define( 'AUTH_SALT',        'gdgU8NHdoD,k%+AG*nu+$t;4xO=/6$BUlu&^[0^p0@c7vP<X1pi^Fd.9d1+Pal`7' );
define( 'SECURE_AUTH_SALT', '$>)brQ`rdjwZbgB?{3FrNDagDA>Z-Id VKyO2qE(`KT(|lRVI[K9GrQDe{0~h1y$' );
define( 'LOGGED_IN_SALT',   'C{`F:;t5)0oF@J{~g 0WI$E?)+P596K+#H5-k@_H&%.u:11j.,K3I5y<R4u(R!mc' );
define( 'NONCE_SALT',       'N!cX^Lf63@a%)5g&mM.{.@ gEaxfOP:`o3r]9y>Es,huQ !SW(U9)!DPv_H6ma/L' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
