-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2014 at 05:20 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tibimart`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `address`, `phone`, `type`) VALUES
(1, 'Số 40, Đường 13, Quốc lộ 13, P.Hiệp Bình Chánh, Q.Thủ Đức, TPHCM\n- Hotline: 01679 478 959\nEmail: tibimarthcm@gmail.com\n **Cơ sở 2: -Số 7/134 Liên Khu 5-6, P.Bình Hưng Hòa B, Q.Bình Tân, TP.HCM\n- Hotline: 0906 888 545\nEmail: antawavn@gmail.com', '0906.888.545 hoặc 01679.478.959', 1),
(2, 'Số 666 Đường Xóm Chùa, Phố Dâu, Cổ Thành - TX Chí Linh - Hải Dương\nHotline: 01644 304 255\nEmail: dinhthi92715@gmail.com', '01675.317.435 hoặc 01644.304.255', 2),
(3, 'sss', 'ssss', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `id_product`, `quantity`, `price`, `total_price`, `ip`, `create_date`) VALUES
(1, 8, 1, 100000, 100000, '127.0.0.1', 1404208290);

-- --------------------------------------------------------

--
-- Table structure for table `cate_product`
--

CREATE TABLE IF NOT EXISTS `cate_product` (
  `id_cate` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `show_home` int(11) NOT NULL,
  `lable` int(11) NOT NULL,
  PRIMARY KEY (`id_cate`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cate_product`
--

INSERT INTO `cate_product` (`id_cate`, `title`, `show_home`, `lable`) VALUES
(1, 'Sản phẩm làm đẹp', 1, 5),
(2, 'Sản phẩm làm đẹp', 0, 5),
(4, 'ssss', 1, 5),
(5, 'Danh mục sản phẩm', 0, 0),
(6, 'Test', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('02bdd6c856a41134d58ee2f260749cb4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404788707, ''),
('061b5ae37ecb7acba8d7d50a6cf33ed8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404785326, ''),
('0c8184fa7e6730dbc7d62d6b911982e0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404788710, ''),
('171adc3c3d1f7344d7eb7dfec49441b3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404785298, ''),
('1a4c5580aa714e85fc63ed6c41c4433b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404786009, ''),
('1d394270dc9065df4125dd9bdb516f6c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404788824, ''),
('1d77f5d0b44cb816fcc1f597f87128d8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404786333, ''),
('22898dba9cb972ccc76d6d9cf3a93862', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404785989, ''),
('2f06592e39aa7a9149818841d8862162', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404786503, ''),
('39617b68414ba623aaa3813624d483a5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404785963, ''),
('438b4623be297fc16120ad5948323639', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404785273, ''),
('496b6953e0f531000039bb9fbb188bea', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404786507, ''),
('4a88812494ef4dede024cb65fb3b8695', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404786475, ''),
('57f1017e15341ed652ac358b5672c88d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404786475, ''),
('599c0f9cf952fc83f465e33f278f3a21', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404785967, ''),
('5bf38756dc78846a512e4f607367c86f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404786314, ''),
('636e807897ae10316cdb1aeb7be54d0c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404786014, ''),
('72938163175f7bc72fe496ac5f1903e6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404786501, ''),
('72f1b559185e68f058af5f0f3dbbb99d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404786014, ''),
('7834df8c119e96114fde20f6dcbc9625', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404786513, ''),
('7b123e589b13070d9de74fb2e31fadde', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404786504, ''),
('7e0951bf692ef68b7b562f87cc90baf0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404786016, ''),
('7f434d27b926e5f039feb11da5a0e10b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404788780, ''),
('7ff40de8a67f8217fb008979eb52e8ae', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404785311, ''),
('8655c25fc1c75cdbf48d818c493e37d3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404786511, ''),
('867d00796274f4e9bd8ea4e6e99cbce7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404788826, ''),
('8694eba995acb3fa89e65571b36fa517', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404785669, ''),
('8bcfe2864c2f2e17d842d14866761ee3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404785487, ''),
('8e873b85af451e4c2ab8d1237079b054', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404788707, ''),
('9d6450131c01419330f00f49d0ea6a8f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404786310, ''),
('b0e69986c4487a8103c5ec7b4bd0d326', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404786510, ''),
('b65ca29992d1112fff1f70e9f72fa4e3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404785373, ''),
('b7b0ed00b829c37fc78689fe35d189c3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404785963, ''),
('bd73de9e88ab1b975464de22ac28cba3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404788876, ''),
('c121400dee2655d7f145ceb5608424ab', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404786037, ''),
('c9de6518fb232826c9a262cbd09e35fd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404786335, ''),
('e12502dea01a9c4b870cc642003a9a67', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404788824, ''),
('e2585ca51c10fea62a2947790b7bbb0f', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404788712, ''),
('e4d4471aa34fc5d1d695404f85e5de93', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404786333, ''),
('eb263a0683b4328f44b3b8360c2559c8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404786227, ''),
('ec8693de1f0cbcf70d95b2f49e77bde7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404785972, ''),
('f5d23eb7b531f6d7b404da7d5657a389', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404785433, ''),
('f66ac7d9dbb42200fd8d13b17f7b0ca1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404785281, '');

-- --------------------------------------------------------

--
-- Table structure for table `cong_dung`
--

CREATE TABLE IF NOT EXISTS `cong_dung` (
  `id_cd` int(11) NOT NULL AUTO_INCREMENT,
  `title_cd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content_cd` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_cd`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cong_dung`
--

INSERT INTO `cong_dung` (`id_cd`, `title_cd`, `content_cd`) VALUES
(3, '1', '<p>1</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `name`, `title`, `email`, `question`, `answer`, `status`, `create_date`) VALUES
(1, '1', 'test cái', '1', '1', '<p>Ch&uacute;ng t&ocirc;i đ&atilde; trả lời c&acirc;u hỏi n&agrave;y của c&aacute;c bạn</p>\n', 1, 123),
(2, 'abc abc', 'Tôi muốn hỏi', 'abc abc', '<p>abc abc abc abc</p>\r\n', '<p>Chúng tôi đã trả lời câu hỏi này của các bạn</p>\n', 1, 1395481112),
(3, 'sss', 'ss', 'sss', 'sss', '', 0, 1401942203),
(4, 'giangbeo91', 'ss', 'beobeboi91@gmail.com', 'ssssss', '', 0, 1401942230);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_customer`
--

CREATE TABLE IF NOT EXISTS `order_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `fee_ship` int(11) NOT NULL,
  `ship_type` int(11) NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `total_price_order` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order_customer`
--

INSERT INTO `order_customer` (`id`, `full_name`, `address`, `phone`, `email`, `status`, `fee_ship`, `ship_type`, `note`, `total_price_order`, `create_date`) VALUES
(1, 'giangbeo91', '173 Chu Văn An, 26, Bình Thạnh, Hồ Chí Minh, Việt Nam', '01667039939', 'nguyentruonggiang91@gmail.com', 0, 0, 1, '', 355555, 1402377922),
(2, 'giangbeo91', '173 Chu Văn An, 26, Bình Thạnh, Hồ Chí Minh, Việt Nam', '01667039939', 'nguyentruonggiang91@gmail.com', 0, 0, 1, '', 355555, 1402377929),
(3, 'giangbeo91', '173 Chu Văn An, 26, Bình Thạnh, Hồ Chí Minh, Việt Nam', '01667039939', 'nguyentruonggiang91@gmail.com', 0, 0, 1, '', 160000, 1402543235);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `ip_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_id` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `id_product`, `quantity`, `price`, `ip_user`, `order_id`, `create_date`) VALUES
(1, 14, 4, 111111, '127.0.0.1', 1, 1402377922),
(2, 14, 4, 111111, '127.0.0.1', 2, 1402377929),
(3, 1, 1, 160000, '127.0.0.1', 3, 1402543235);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_account` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `account_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `name_account`, `account_number`, `image`) VALUES
(1, '2', '2', '2', '8d7067306daf7a29d280ba3b2a88773e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `id_cate` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `title`, `content`, `id_cate`, `price`, `image`, `stock`, `create_date`) VALUES
(1, 'Kem đánh răng người lớn', 'sss', 1, '160000', '068e80da9e71482db5912478760108dc.JPG', 10, 0),
(2, 'Ủ tóc 300ml Ganier Fructis Oil repair 3', 'Giá khuyến mại	200,000 VND\r\nGiá cũ	220,000 VND\r\nTrạng thái	Còn hàng\r\nNhãn hiệu	Ganier Fructis\r\nMàu sắc	Mẫu mới màu vàng\r\nNơi sản xuất	Đức', 1, '200000', 'd61c6da7e8984bdaaaa8c0df6c72bc8a.jpg', 10, 0),
(3, 'Kem dưỡng da Nivea 300ml', 'Giá khuyến mại	180,000 VND\r\nGiá cũ	220,000 VND\r\nTrạng thái	còn hàng\r\nNhãn hiệu	Nivea\r\nNơi sản xuất	Đức', 1, '180000', '862fdab67e1e4cc5aa3855b57ccc546f.png', 10, 0),
(4, 'Bộ dầu gội đầu và kem xả Ganier Fructis', 'Giá bán	300,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Ganier Fructis\r\nNơi sản xuất	Đức', 1, '300000', '06dfaa02730146e8805ba02703e84388.JPG', 10, 0),
(5, 'Kem dưỡng thể Lacoste', 'Giá bán	120,000 VND\r\nTrạng thái	Còn hàng\r\nNhãn hiệu	Lacoste\r\nNơi sản xuất	Đức', 1, '120000', 'd5299d6cf30e4b2cb24aa3e42b3b01c7.JPG', 10, 0),
(6, 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 'effd3139933d4bf287c27846d725e616.JPG', 11, 0),
(7, 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 'effd3139933d4bf287c27846d725e616.JPG', 11, 0),
(8, 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 'effd3139933d4bf287c27846d725e616.JPG', 11, 0),
(9, 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 'effd3139933d4bf287c27846d725e616.JPG', 11, 0),
(10, 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 'effd3139933d4bf287c27846d725e616.JPG', 11, 0),
(11, 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 'effd3139933d4bf287c27846d725e616.JPG', 11, 0),
(12, 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 'effd3139933d4bf287c27846d725e616.JPG', 11, 0),
(13, 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 'effd3139933d4bf287c27846d725e616.JPG', 11, 0),
(14, 'sss', '<p>ssssssssss</p>\n', 2, '111111', '58d2eca970d596818ad4855c85c1755e.jpg', 100, 1401946622),
(15, 'ssss', '', 0, '0', '0', 100, 1402125763),
(17, 's1 222', '<p>ssssss</p>\n', 1, '222222', '0498db6b5567c5d413a244d327eaa8b9.jpg', 100, 1402627782),
(18, 'sssss', '<p>ssssssss</p>\n', 0, '0', '0', 100, 1404785963);

-- --------------------------------------------------------

--
-- Table structure for table `sale_off`
--

CREATE TABLE IF NOT EXISTS `sale_off` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `id_product` int(11) NOT NULL,
  `percent` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exp_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `sale_off`
--

INSERT INTO `sale_off` (`id`, `title`, `content`, `id_product`, `percent`, `img`, `exp_date`) VALUES
(10, 'Giảm giá ủ tóc', '<p>Giảm gi&aacute; ủ t&oacute;c</p>\n', 2, 10, '', '2014-06-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE IF NOT EXISTS `support` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nick` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `name`, `nick`, `phone`) VALUES
(1, 'Mr Vũ', 'antawavn', '0906.888.545'),
(4, 'Miss Kim Bình', 'nguyenkimbinh91', '01679.478.959');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `full_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_bin NOT NULL,
  `address` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `yahoo` varchar(255) COLLATE utf8_bin NOT NULL,
  `skype` varchar(255) COLLATE utf8_bin NOT NULL,
  `bank` varchar(255) COLLATE utf8_bin NOT NULL,
  `stk` varchar(255) COLLATE utf8_bin NOT NULL,
  `sex` int(11) NOT NULL,
  `province` int(11) NOT NULL,
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `birthday` varchar(255) COLLATE utf8_bin NOT NULL,
  `img` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '3',
  `login_id` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `total_like` int(11) NOT NULL,
  `account_type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `phone`, `address`, `password`, `email`, `activated`, `yahoo`, `skype`, `bank`, `stk`, `sex`, `province`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`, `birthday`, `img`, `role`, `login_id`, `total_like`, `account_type`) VALUES
(1, 'giangbeo', 'Nguyễn Trường Giang', '01667039939', 'HCM', '$2a$08$av0xeUt7pYqEymtq0ENPN.65FaINVis/64LmuohuAdt8ND8exqVs2', 'nguyentruonggiang91@gmail.com', 1, '', '', '', '', 0, 79, 0, NULL, NULL, NULL, NULL, 'ad9147af77ea0a71cb1045eb8c144048', '127.0.0.1', '2014-07-08 04:08:01', '2014-03-21 08:25:47', '2014-07-08 02:08:01', '', '', 1, '', 0, 0),
(2, 'BeoBeBoi', 'Nguyên Trường Giang', '01667039939', 'HCM', '$2a$08$av0xeUt7pYqEymtq0ENPN.65FaINVis/64LmuohuAdt8ND8exqVs2', 'beobeboi91@gmail.com', 0, 's', 's', 'Vietcombank', '0341005245193', 0, 1, 0, NULL, NULL, NULL, NULL, 'ab37717509a2f5b5e6c4335e8e960710', '::1', '0000-00-00 00:00:00', '2014-03-27 16:59:43', '2014-03-28 04:13:34', '2014/03/05', '', 4, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE IF NOT EXISTS `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE IF NOT EXISTS `user_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `country`, `website`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_staff` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `name`, `is_staff`) VALUES
(1, 'Administrator', 1),
(2, 'Staff', 1),
(3, 'Member', 0),
(4, 'Volunteer', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
