-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 14, 2023 at 08:57 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanmau`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int NOT NULL,
  `bill_name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `bill_address` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `bill_tel` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `bill_email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `bill_pttt` tinyint NOT NULL DEFAULT '1' COMMENT '1. Thanh toán trực tiếp \r\n2. Chuyển khoản\r\n3. Thanh toán Online',
  `ngaydathang` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `total` int NOT NULL DEFAULT '0',
  `bill_status` tinyint(1) DEFAULT '0' COMMENT '0. Mới nhận đơn\r\n1. Đang xử lí\r\n2. Đang giao hàng\r\n3. Đã giao hàng',
  `receive_name` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `receive_address` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `receive_tel` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iduser` int NOT NULL,
  `idpro` int NOT NULL,
  `ngaybinhluan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(1, 'Nice', 4, 6, '10:03:pm 10/10/2023'),
(2, 'Good', 4, 6, '10:04:pm 10/10/2023'),
(3, 'Good service !', 4, 6, '10:38:pm 10/10/2023'),
(5, 'Good', 7, 7, '11:45:am 11/10/2023'),
(6, 'Nice service', 7, 7, '11:45:am 11/10/2023');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `iduser` int NOT NULL,
  `idpro` int NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `price` int NOT NULL,
  `soluong` int NOT NULL,
  `thanhtien` int NOT NULL,
  `idbill` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'Iphone'),
(3, 'Samsung'),
(4, 'Xiaomi'),
(5, 'Sạc dự phòng'),
(6, 'Oppo'),
(12, 'Smart Watch');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` double(10,2) DEFAULT '0.00',
  `img` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mota` text COLLATE utf8mb4_general_ci,
  `luotxem` int DEFAULT '0',
  `iddm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(2, 'Samsung S21', 869.65, 'sp3.jpg', '\r\nSamsung Galaxy S21 là một dòng điện thoại di động cao cấp của Samsung, ra mắt vào năm 2021. Đây là một trong những sản phẩm hàng đầu của Samsung trong loạt Galaxy S Series và đi kèm với nhiều tính năng và công nghệ tiên tiến. ', 100, 3),
(3, 'Xiaomi Redmi Note 12 Pro', 290.50, 'sp4.jpg', 'Xiaomi là một công ty công nghệ Trung Quốc nổi tiếng với các sản phẩm điện thoại di động và điện tử tiêu dùng. Họ được biết đến với việc sản xuất các smartphone có giá trị tốt, tích hợp công nghệ tiên tiến và thường được gọi là \"Apple của Trung Quốc\" do thiết kế và hiệu năng của sản phẩm.', 50, 4),
(4, 'Sạc dự phòng 10.000 mAh', 7.82, 'pk3.jpeg', 'Sạc dự phòng với 10.000 mAh là một trợ thủ đáng tin cậy cho cuộc sống di động của bạn. Với dung lượng pin lớn, nó cung cấp đủ năng lượng để nạp lại điện thoại di động của bạn nhiều lần trong một ngày. Thiết kế nhỏ gọn và tiện dụng giúp bạn mang theo nó một cách dễ dàng, ngay cả khi bạn di chuyển. Sạc nhanh và an toàn, sản phẩm này đảm bảo rằng bạn sẽ không bao giờ lo lắng về việc thiếu pin khi cần nó nhất.', 48, 5),
(5, 'IP 14 Pro', 869.56, 'sp12.jpg', 'iPhone 14 Pro là một biểu tượng của sự tiên tiến trong công nghệ di động. Với màn hình Super Retina XDR siêu sắc nét, bộ ba camera chất lượng cao cùng khả năng chụp ảnh và quay video ấn tượng, sản phẩm này mang đến một trải nghiệm đỉnh cao cho người dùng yêu thích sáng tạo và hiệu suất. Không chỉ vậy, iPhone 14 Pro còn được tích hợp nhiều tính năng thông minh, bền bỉ và thiết kế sang trọng, là sự lựa chọn hoàn hảo cho những người đòi hỏi sự xuất sắc trong điện thoại di động.', 567, 1),
(6, 'Oppo Reno 8T', 390.00, 'sp7.jpg', 'Oppo là một thương hiệu điện thoại di động nổi tiếng từ Trung Quốc, và họ đã trở thành một trong những nhà sản xuất smartphone hàng đầu trên thế giới. Oppo nổi tiếng với việc sản xuất các sản phẩm chất lượng với sự tập trung vào thiết kế thẩm mỹ và công nghệ camera tiên tiến.', 275, 6),
(7, 'IP 11', 395.00, 'sp10.jpg', 'IP 11 là một sản phẩm đẳng cấp của Apple, với thiết kế tinh tế và hiện đại. Màn hình Retina sắc nét và sáng rực, cùng hiệu năng mạnh mẽ, đảm bảo trải nghiệm sử dụng mượt mà và đáng tin cậy. Camera chất lượng cao giúp bạn chụp ảnh và quay video đỉnh cao, trong khi tích hợp nhiều tính năng tiện ích mang lại sự tiện lợi hàng ngày. Thiết bị này thể hiện sự hoàn hảo trong từng chi tiết, đáp ứng tối đa nhu cầu của người dùng.', 745, 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int NOT NULL,
  `user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(2, 'add', '123', 'tt@gmail.com', 'Hà Nội', NULL, 0),
(4, 'admin', '123', 'tt@gmail.com', 'Ninh Bình', '0912345678', 1),
(5, 'tuyen', '123', 'tuyento@gmail.com', 'Ninh Bình', NULL, 0),
(7, 'user1', '123', 'long@gmail.com', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_cart_bill` (`idbill`),
  ADD KEY `lk_cart_taikhoan` (`iduser`),
  ADD KEY `lk_cart_sanpham` (`idpro`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `lk_cart_sanpham` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
