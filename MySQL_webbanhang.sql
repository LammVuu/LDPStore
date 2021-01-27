-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th7 13, 2020 lúc 05:50 AM
-- Phiên bản máy phục vụ: 10.3.20-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baivietganday`
--

DROP TABLE IF EXISTS `baivietganday`;
CREATE TABLE IF NOT EXISTS `baivietganday` (
  `idbaiviet` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idbaiviet`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baivietganday`
--

INSERT INTO `baivietganday` (`idbaiviet`, `tieude`) VALUES
(1, 'Samsung Galaxy Fold'),
(2, 'Samsung Galaxy Z-Flip'),
(3, 'Samsung Galaxy S20'),
(4, 'Samsung Galaxy S20 Plus'),
(5, 'Samsung Galaxy S20 Ultra');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

DROP TABLE IF EXISTS `binhluan`;
CREATE TABLE IF NOT EXISTS `binhluan` (
  `STT` int(11) NOT NULL AUTO_INCREMENT,
  `masp` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giodang` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`STT`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`STT`, `masp`, `name`, `email`, `noidung`, `ngaydang`, `giodang`, `trangthai`) VALUES
(1, 1, 'Vũ Hoàng Lâm', 'vuhoanglam2000vn@gmail.com', 'hay', '02/07/2020', '21:47', 'Duyệt'),
(2, 1, 'Vũ Hoàng Lâm', 'vuhoanglam2000vn@gmail.com', 'tốt', '02/07/2020', '21:47', 'Duyệt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyenmuc`
--

DROP TABLE IF EXISTS `chuyenmuc`;
CREATE TABLE IF NOT EXISTS `chuyenmuc` (
  `id` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `tenchuyenmuc` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuyenmuc`
--

INSERT INTO `chuyenmuc` (`id`, `tenchuyenmuc`, `trangthai`) VALUES
('CM1', 'latesproducts', 1),
('CM2', 'topseller', 1),
('CM3', 'topnew', 1),
('CM4', 'recentlyviewed', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctdh`
--

DROP TABLE IF EXISTS `ctdh`;
CREATE TABLE IF NOT EXISTS `ctdh` (
  `madh` int(11) NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `masp` int(11) NOT NULL,
  `tensp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `giaban` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  KEY `madh` (`madh`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

DROP TABLE IF EXISTS `donhang`;
CREATE TABLE IF NOT EXISTS `donhang` (
  `madh` int(11) NOT NULL,
  `ngaydat` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `khachhang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tongtien` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `hinhthucTT` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhthucGH` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ship` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`madh`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

DROP TABLE IF EXISTS `hinhanh`;
CREATE TABLE IF NOT EXISTS `hinhanh` (
  `tenfile` char(50) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TrangThai` bit(1) NOT NULL,
  PRIMARY KEY (`tenfile`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `hinhanh`
--

INSERT INTO `hinhanh` (`tenfile`, `name`, `TrangThai`) VALUES
('iphone-se-2020-do.png', 'iPhone SE 2020', b'1'),
('Samsung-galaxy-z-flip.jpg', 'Samsung Galaxy Z-Flip', b'1'),
('iphone-11-pro-max.jpg', 'IPhone 11 Pro Max', b'1'),
('samsung-galaxy-s20-ultra.jpg', 'Samsung Galaxy S20 Ultra', b'1'),
('samsung-galaxy-s20-plus.jpg', 'Samsung Galaxy S20 Plus', b'1'),
('samsung-galaxy-s20.jpg', 'Samsung Galaxy S20', b'1'),
('xiaomiredminote9s.jpg', 'Xiaomi Redmi Note 9s 64GB', b'1'),
('vsmart-joy-3.jpg', 'Vsmart Joy 3 32GB', b'1'),
('iphone-11-red.jpg', 'iPhone 11 RED', b'1'),
('oppo-find-x2.jpg', 'Oppo Find X2', b'1'),
('huawei-p40-pro.jpg', 'Huawei P40 Pro', b'1'),
('xiaomi-mi-note-10-pro.jpg', 'Xiaomi Mi Note 10 Pro', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kho`
--

DROP TABLE IF EXISTS `kho`;
CREATE TABLE IF NOT EXISTS `kho` (
  `masp` int(11) NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tensp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `giaban` int(11) NOT NULL,
  `soluong_nhap` int(11) NOT NULL,
  `soluong_ton` int(11) NOT NULL,
  `nhacungcap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`masp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kho`
--

INSERT INTO `kho` (`masp`, `hinhanh`, `tensp`, `giaban`, `soluong_nhap`, `soluong_ton`, `nhacungcap`, `trangthai`) VALUES
(1, 'iphone-se-2020-do.png', 'iPhone SE 2020', 599, 30, 0, 'Apple VN', 'Hoạt động'),
(2, 'Samsung-galaxy-z-flip.jpg', 'Samsung Galaxy Z-Flip', 1399, 30, 0, 'Samsung VN', 'Hoạt động'),
(3, 'iphone-11-pro-max.jpg', 'Iphone 11 Pro Max', 1399, 30, 30, 'Apple VN', 'Hoạt động'),
(4, 'samsung-galaxy-s20-ultra.jpg', 'Samsung Galaxy S20 Ultra', 1299, 30, 30, 'Samsung VN', 'Hoạt động'),
(5, 'samsung-galaxy-s20-plus.jpg', 'Samsung Galaxy S20 Plus', 1099, 30, 30, 'Samsung VN', 'Hoạt động'),
(6, 'samsung-galaxy-s20.jpg', 'Samsung Galaxy S20', 999, 30, 30, 'Samsung VN', 'Hoạt động'),
(7, 'xiaomiredminote9s.jpg', 'Xiaomi Redmi Note 9s 64GB', 299, 30, 30, 'Xiaomi VN', 'Hoạt động'),
(8, 'vsmart-joy-3.jpg', 'Vsmart Joy 3 32GB', 249, 30, 30, 'Vsmart VN', 'Hoạt động'),
(9, 'iphone-11-red.jpg', 'iPhone 11 RED', 699, 30, 30, 'iPhone VN', 'Hoạt động'),
(10, 'oppo-find-x2.jpg', 'Oppo Find X2', 999, 30, 30, 'Oppo VN', 'Hoạt động'),
(11, 'huawei-p40-pro.jpg', 'Huawei P40 Pro', 1099, 30, 30, 'Huawei VN', 'Hoạt động'),
(12, 'xiaomi-mi-note-10-pro.jpg', 'Xiaomi Mi Note 10 Pro', 699, 30, 30, 'Xiaomi VN', 'Hoạt động'),
(13, 'xiaomiredminote9s.jpg', 'Xiaomi Redmi Note 9s 64GB', 299, 30, 30, 'Xiaomi VN', 'Hoạt động'),
(14, 'iphone-11-pro-max.jpg', 'IPhone 11 Pro Max', 1399, 30, 30, 'Apple VN', 'Hoạt động'),
(15, 'iphone-se-2020-do.png', 'iPhone SE 2020', 599, 30, 30, 'Apple VN', 'Hoạt động'),
(16, 'iphone-8-plus.jpg', 'iPhone 8 Plus', 799, 30, 30, 'Apple VN', 'Hoạt động'),
(17, 'product-thumb-3.jpg', 'Macbook Pro 2020', 1200, 10, 5, 'Apple VN', 'Đã hủy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `logo`
--

DROP TABLE IF EXISTS `logo`;
CREATE TABLE IF NOT EXISTS `logo` (
  `tenfile` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` bit(1) NOT NULL,
  PRIMARY KEY (`tenfile`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `logo`
--

INSERT INTO `logo` (`tenfile`, `name`, `trangthai`) VALUES
('iPhone.jpg', 'iPhone', b'1'),
('Nokia.jpg', 'Nokia', b'1'),
('Samsung.jpg', 'Samsung', b'1'),
('Xiaomi.jpg', 'Xiaomi', b'1'),
('OPPO.png', 'Oppo', b'1'),
('Vsmart.png', 'Vsmart', b'1'),
('Realme.png', 'Realme', b'1'),
('Huawei.jpg', 'Huawei', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mail`
--

DROP TABLE IF EXISTS `mail`;
CREATE TABLE IF NOT EXISTS `mail` (
  `STT` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `ngaygui` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giogui` char(6) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`STT`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mail`
--

INSERT INTO `mail` (`STT`, `name`, `email`, `noidung`, `ngaygui`, `giogui`) VALUES
(1, 'Ngô Phong', 'ngophong030700@gmail.com', 'Tôi cần nhiều thông tin hơn', '28/06/2020', '16:12'),
(2, 'Tiến Đạt', 'txquine123@outlook.com', 'Tôi nghĩ cần nhập thêm nhiều sản phẩm mới nữa', '28/06/2020', '17:36'),
(3, 'Hoàng Lâm', 'hoanglamXXXX@gmail.com', 'Điện thoại của tôi hiện đang gặp một số vấn đề', '28/06/2020', '17:56'),
(4, 'Ngô Hoài Phong', 'ngophong@gmail.com', 'Tôi cần xem thêm các mẫu mới ', '01/07/2020', '00:28'),
(5, 'Mai Hoàng Tiến Đạt', 'tiendat@gmail.com', 'Thật tiếc khi các mẫu laptop đã ngừng bán. Tôi muốn biết khi nào nó được kinh doanh lại', '01/07/2020', '02:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `masp` int(3) NOT NULL,
  `tensp` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `anhdaidien` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `chuyenmuc` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanhkhac1` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinhanhkhac2` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giamoi` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giacu` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` int(1) NOT NULL,
  PRIMARY KEY (`masp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `anhdaidien`, `chuyenmuc`, `mota`, `hinhanhkhac1`, `hinhanhkhac2`, `giamoi`, `giacu`, `trangthai`) VALUES
(1, 'iPhone SE 2020', 'iphone-se-2020-do.png', 'CM1', 'iPhone SE 2020 đã bất ngờ ra mắt với thiết kế 4.7 inch nhỏ gọn, chip A13 Bionic mạnh mẽ như trên iPhone 11 và đặc biệt sở hữu mức giá tốt chưa từng có.\r\nThiết kế nhỏ gọn và cao cấp\r\nCảm biến vân tay Touch ID “huyền thoại” đã quay trở lại trên iPhone SE 2020, cùng với đó là thiết kế gần như “sao y” của iPhone 8.Tổng quan Điện thoại iPhone SE (2020). Điểm khác biệt dễ thấy nhất là logo Apple trên mặt lưng nay đã dời ra chính giữa thay vì đặt lệch ở nửa trên như trên smartphone đàn anh. Thiết kế điện thoại iPhone SE (2020).Bên cạnh sự sang trọng vốn có từ chất liệu kim loại và kính, chiếc điện thoại iPhone mới này cũng có khả năng chống nước tiêu chuẩn IP67 giúp hạn chế rủi ro hư hỏng do văng nước, đi mưa.\r\nKhả năng kháng nước trên điện thoại iPhone SE (2020). iPhone SE 2020 vẫn có kích thước 4.7 inch, tỉ lệ màn hình cũ 16:9 và các cạnh viền vẫn dày. Tuy nhiên kích thước chung của máy vẫn thuộc hàng nhỏ gọn, cực kì vừa vặn và dễ sử dụng bằng một tay.', 'iphone-se-black.png', 'iphone-se-white.png', '549.00', '599.00', 1),
(2, 'Samsung Galaxy Z-Flip', 'Samsung-galaxy-z-flip.jpg', 'CM1', 'Cuối cùng sau bao nhiêu thời gian chờ đợi, chiếc điện thoại Samsung Galaxy Z Flip đã được Samsung ra mắt tại sự kiện Unpacked 2020. Siêu phẩm với thiết kế màn hình gập vỏ sò độc đáo, hiệu năng tuyệt đỉnh cùng nhiều công nghệ thời thượng, dẫn dầu 2020.\r\nĐột phá với thiết kế màn hình gập\r\nSamsung Galaxy Z Flip được thiết kế với kiểu dáng màn hình gập lấy ý tưởng từ dòng sản phẩm Galaxy Fold từng gây nhiều tiếng vang trong năm 2019.Tuy nhiên điểm khác biệt là màn hình của Z Flip được thiết kế gập theo chiều dọc, khiến cho tổng thể máy có thể nằm gọn trong lòng bàn tay của người dùng như một phụ kiện thời trang cao cấp.Bản lề của máy cũng có khả năng gập - mở với nhiều góc độ khác nhau, khi thiết bị ở trạng thái mở một nửa, màn hình sẽ tự động chia thành hai màn hình 4 inch vừa đủ để bạn có thể dễ dàng xem hình ảnh, nội dung hoặc video ở nửa trên của màn hình và thao tác điều khiển chúng ở nửa dưới.', 'samsung-galaxy-z-flip-black.jpg', 'samsung-galaxy-z-flip-tim.jpg', '1369.00', '1399.00', 1),
(3, 'IPhone 11 Pro Max', 'iphone-11-pro-max.jpg', 'CM1', 'Trong năm 2019 thì chiếc smartphone được nhiều người mong muốn sở hữu trên tay và sử dụng nhất không ai khác chính là iPhone 11 Pro Max 64GB tới từ nhà Apple.\r\nCamera được cải tiến mạnh mẽ\r\nChắc chắn lý do lớn nhất mà bạn muốn nâng cấp lên iPhone 11 Pro Max chính là cụm camera mới được Apple nâng cấp rất nhiều.Lần đầu tiên chúng ta sẽ có một chiếc iPhone với 3 camera ở mặt sau và cả 3 camera này đều có độ phân giải là 12 MP.Chúng ta sẽ có một camera góc thường, một camera góc rộng và một camera tele đáp ứng đầy đủ nhu cầu chụp ảnh hàng ngày của người dùng.', 'iPhone-pro-max-white.jpg', 'iphone-11-pro-max-gold.jpg', '1299.00', '1399.00', 1),
(4, 'Samsung Galaxy S20 Ultra', 'samsung-galaxy-s20-ultra.jpg', 'CM1', 'Camera đỉnh cao, độ phân giải siêu khủng 108 MP\r\nCamera trên Galaxy S20 Ultra là sự kết hợp độc đáo giữa bộ 4 camera siêu khủng bao gồm 1 camera chính có độ phân giải 108 MP một camera tele 48 MP, một camera góc rộng 12 MP có góc nhìn lên tới 120 độ, cuối cùng là cảm biến TOF có chức năng đo chiều sâu, đi kèm nhiều tính năng chụp ảnh chuyên nghiệp\r\nMàn hình trên Galaxy S20 Ultra có tần số quét lên tới 120 Hz cho từng chuyển động trên máy diễn ra siêu mượt, dễ dàng nhận thấy ở cả các thao tác vuốt hàng ngày. Máy cho phép chuyển qua lại giữa chế độ 120 Hz và 60 Hz để tiết kiệm pin khi cần thiết.\r\n\r\nCông nghệ HDR10+ cho trải nghiệm giải trí chơi game với chất lượng tuyệt vời.\r\n\r\nCả mặt trước và sau của máy đều được bảo vệ bằng kính cường lực Gorilla Glass 6 với độ bền cao, nhược điểm duy nhất là dễ bám mồ hôi và dấu vân tay sau một thời gian sử dụng.', 's20-ultra-gray.png', 's20-ultra-black,png', '1199.00', '1299.00', 1),
(5, 'Samsung Galaxy S20 Plus', 'samsung-galaxy-s20-plus.jpg', 'CM1', 'Chiếc điện thoại Samsung Galaxy S20 Plus - Siêu phẩm với thiết màn hình tràn viền, hiệu năng đỉnh cao kết hợp cùng nhiều đột phá về công nghệ dẫn đầu thế giới smartphone.\r\nThiết kế màn hình tràn viền, siêu mượt 120 Hz\r\nThiết kế của chiếc điện thoại Samsung Galaxy S20 Plus là kính kết hợp độc đáo giữa với khung kim loại cùng mặt lưng kính cường lực Gorilla Glass 6 thế hệ mới nhất cho khả năng chống chịu trầy xước và va đập tốt. \r\nMàn hình Galaxy S20+ có kích thước 6.7 inch độ phân giải 2K (1440 x 3200 Pixels) sử dụng tấm nền Dynamic AMOLED 2X với khả năng hiển thị màu sắc sắc nét, độ chi tiết cao và sống động.\r\n\r\nKhung máy được hoàn thiện một cách tỉ mỉ, độ chính xác cao với viền màn hình đã được thiết kế cong nhẹ cho cảm giác dễ dàng cầm nắm, không bị cấn tay hay vô tình chạm vào màn hình.', 'samsung-galaxy-s20-plus-den.jpg', 'samsung-galaxy-s20-plus-hong.jpg', '999.00', '1099.00', 1),
(6, 'Samsung Galaxy S20', 'samsung-galaxy-s20.jpg', 'CM1', '', 'samsung-galaxy-s20-xam.jpg', 'samsung-galaxy-s20-hong.jpg', '899.00', '999.00', 1),
(7, 'Xiaomi Redmi Note 9s 64GB', 'xiaomiredminote9s.jpg', 'CM2', '', 'xiaomi-redmi-note9s-trang.jpg', 'xiaomi-redmi-note9s-xanh.png', '249.00', '299.00', 1),
(8, 'Vsmart Joy 3 32GB', 'vsmart-joy-3.jpg', 'CM2', '', 'vsmart-joy-3-black.jpg', 'vsmart-joy-3-white.jpg', '199.00', '249.00', 1),
(9, 'iPhone 11 RED', 'iphone-11-red.jpg', 'CM2', '', 'iphone-11-green.jpg', 'iphong-11-purple.jpg', '679.00', '699.00', 1),
(10, 'Oppo Find X2', 'oppo-find-x2.jpg', 'CM3', '', 'oppo-find-x2-green.jpg', 'oppo-find-x2-black.jpg', '999.00', '', 1),
(11, 'Huawei P40 Pro', 'huawei-p40-pro.jpg', 'CM3', '', 'huawei-p40-pro-gray.jpg', 'huawei-p40-pro.jpg', '1099.00', '', 1),
(12, 'Xiaomi Mi Note 10 Pro', 'xiaomi-mi-note-10-pro.jpg', 'CM3', '', 'xiaomi-mi-note-10-pro-green.jpg', 'xiaomi-mi-note-10-pro-white.jpg', '699.00', '', 1),
(13, 'Xiaomi Redmi Note 9s 64GB', 'xiaomiredminote9s.jpg', 'CM4', '', 'xiaomi-redmi-note9s-trang.jpg', 'xiaomi-redmi-note9s-xanh.jpg', '249.00', '299.00', 1),
(14, 'IPhone 11 Pro Max', 'iphone-11-pro-max.jpg', 'CM4', '', 'iphone-11-pro-max-gold.jpg', 'iPhone-11-pro-max-white.jpg', '1299.00', '1399.00', 1),
(15, 'iPhone SE 2020', 'iphone-se-2020-do.png', 'CM4', '', 'iphone-se-2020-black.png', 'iphone-se-2020-white.png', '549.00', '599.00', 1),
(16, 'iPhone 8 Plus', 'iphone-8-plus.jpg', 'CM1', '', 'iphone-8-plus-white.jpg', 'iphone-8-plus--black.jpg', '699', '799', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slideshow`
--

DROP TABLE IF EXISTS `slideshow`;
CREATE TABLE IF NOT EXISTS `slideshow` (
  `STT` int(2) NOT NULL,
  `idsp` int(2) NOT NULL,
  `tenfile` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `ten` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `tennoibat` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `chucnangnoibat` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` int(1) NOT NULL,
  PRIMARY KEY (`STT`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slideshow`
--

INSERT INTO `slideshow` (`STT`, `idsp`, `tenfile`, `ten`, `tennoibat`, `chucnangnoibat`, `trangthai`) VALUES
(1, 4, 'slide-samsung-s20.png', 'Samsung Galaxy', 'S20 Ultra', 'SPACE ZOOM 100X', 1),
(2, 3, 'Slide-ProMax.jpg', 'iPhone', '11 Series', 'Multiple color options, Ultrawide Camera', 1),
(3, 2, 'slide-Zflip.jpg', 'Samsung Galaxy', 'Z-Flip', 'New Fold Screen', 1),
(4, 11, 'Slide-huawei-p40.jpg', 'Huawei', 'P40 Pro', 'Ultra Vision Leica Camera', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

DROP TABLE IF EXISTS `taikhoan`;
CREATE TABLE IF NOT EXISTS `taikhoan` (
  `username` char(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` char(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` char(10) NOT NULL,
  `diachi` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` char(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hoatdong` int(1) NOT NULL,
  `loaiTK` int(1) DEFAULT NULL,
  `trangthai` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`username`, `password`, `fullname`, `sdt`, `diachi`, `email`, `hoatdong`, `loaiTK`, `trangthai`) VALUES
('tiendat', '123', 'Mai Hoàng Tiến Đạt', '0123456789', 'TP.HCM', 'MHTD@gmail.com', 1, 2, 1),
('admin', 'admin', 'Administrator', '', '', 'theboss@gmail.com', 0, 1, 1),
('hoanglam', '123', 'Vũ Hoàng Lâm', '0779792000', 'TP.HCM', 'vuhoanglam2000vn@gmail.com', 0, 2, 1),
('phong', '123', 'Ngô Hoài Phong', '0988888888', 'TP.HCM', 'NHP@gmail.com', 0, 2, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
