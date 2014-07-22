-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2014 at 06:45 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nhathuoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `address`, `phone`, `email`, `type`) VALUES
(1, 'Số 40, Đường 13, Quốc lộ 13, P.Hiệp Bình Chánh, Q.Thủ Đức, TPHCM\n', '0906.888.545 hoặc 01679.478.959', 'chaienbungbu91@gmail.com', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `id_product`, `quantity`, `price`, `total_price`, `ip`, `create_date`) VALUES
(4, 1, 1, 160000, 160000, '127.0.0.1', 1406002821);

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
('011962a1f4ffdf596bed38af3b881020', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406004115, ''),
('01d248cb4fa4b0e7f1e6ff80c1fb0c88', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003835, ''),
('057f215b4c86fc28cd346973cebc1a28', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003833, ''),
('1161fe3023e32c6228525d852483f9d1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406004117, ''),
('1bd6551b42f6fd68cad8374a100b970c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003359, ''),
('1de2bba7ea0a8c5406443914186ccda1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003406, ''),
('1ff55326a656d8e0a0d9aee96ae97c72', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003992, ''),
('22415f82c050fd1bd936088acfe123f9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003364, ''),
('22aaae58e842efadcb2ef98a3b88f7cd', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003841, ''),
('3042faf98e25e1988ed606ceb86cc8d7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003847, ''),
('4ec2b789519e91104d83cba36057a527', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003330, ''),
('5a6c39e0b25b3451b1acf48070f5ce92', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003358, ''),
('62519ddead2b1c0bb047eab55a9a99bc', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003400, ''),
('63a51d97cd96801e9e6413e6449b5d3b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406004105, ''),
('66607039e21055f08dca33dc4366e3f9', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003407, ''),
('6a2faee43fcc9da93d51dea09c05cd4d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003349, ''),
('6e6c053ba904af168e87bd41105485d6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406004124, ''),
('71c36eb71f568eb7fd205fef3808769a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003367, ''),
('7d4e73f7ca7cc2f5d0319a593c9303ef', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003640, ''),
('a392cabb33a1287cb53578b9b7b080a8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003351, ''),
('a47e00b970a970a9cc82ac941087c31c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406004107, ''),
('c008cbf22d8ef017000b76d328ef1ca5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003839, ''),
('d2c9b866f1e29b49d50249765a780f6b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003355, ''),
('d4a4b5b99d0de85fd198b38d8c117e80', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003995, ''),
('d7aada09ddfaaf3ef5b4ae3f6e2c04b4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003642, ''),
('d97832f4dc25df80f204192498130144', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003996, ''),
('de4cd952de7aea56403be6f838655c67', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406004115, ''),
('df45d295a430fb9b74aaac2226f3144c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003343, ''),
('e52cbdc7f708609f1560de84db8f36d4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406004124, ''),
('f5920ad7c802443778ed28335a88af64', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003339, ''),
('f72bd5293082e8298f29d5dfa2e5280a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003839, ''),
('f94d1ee75c3f45e2b69b7ffc88841c3e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1406003847, '');

-- --------------------------------------------------------

--
-- Table structure for table `comment_product`
--

CREATE TABLE IF NOT EXISTS `comment_product` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content_comment` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `id_product` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  PRIMARY KEY (`id_comment`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `comment_product`
--

INSERT INTO `comment_product` (`id_comment`, `name`, `title_comment`, `content_comment`, `id_product`, `point`, `create_date`) VALUES
(1, '', 'ss', 'ss', 4, 1, 1405917261),
(2, 'Nguyen Truong Giang', 'san pham tot', 'San pham kha tot', 4, 10, 1405917864);

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
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `id_cate` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `point` int(11) NOT NULL,
  `count_rate` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `code`, `type`, `title`, `content`, `id_cate`, `price`, `point`, `count_rate`, `image`, `stock`, `view`, `create_date`) VALUES
(1, '', '', 'Kem đánh răng người lớn', 'sss', 1, '160000', 0, 0, '068e80da9e71482db5912478760108dc.JPG', 10, 112, 0),
(2, '', '', 'Ủ tóc 300ml Ganier Fructis Oil repair 3', 'Giá khuyến mại	200,000 VND\r\nGiá cũ	220,000 VND\r\nTrạng thái	Còn hàng\r\nNhãn hiệu	Ganier Fructis\r\nMàu sắc	Mẫu mới màu vàng\r\nNơi sản xuất	Đức', 1, '200000', 0, 0, 'd61c6da7e8984bdaaaa8c0df6c72bc8a.jpg', 10, 112, 0),
(3, '', '', 'Kem dưỡng da Nivea 300ml', 'Giá khuyến mại	180,000 VND\r\nGiá cũ	220,000 VND\r\nTrạng thái	còn hàng\r\nNhãn hiệu	Nivea\r\nNơi sản xuất	Đức', 1, '180000', 0, 0, '862fdab67e1e4cc5aa3855b57ccc546f.png', 10, 111, 0),
(4, '', '', 'Bộ dầu gội đầu và kem xả Ganier Fructis', 'Giá bán	300,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Ganier Fructis\r\nNơi sản xuất	Đức', 1, '300000', 6, 2, '06dfaa02730146e8805ba02703e84388.JPG', 10, 138, 0),
(5, '', '', 'Kem dưỡng thể Lacoste', 'Giá bán	120,000 VND\r\nTrạng thái	Còn hàng\r\nNhãn hiệu	Lacoste\r\nNơi sản xuất	Đức', 1, '120000', 0, 0, 'd5299d6cf30e4b2cb24aa3e42b3b01c7.JPG', 10, 111, 0),
(6, '', '', 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 0, 0, 'effd3139933d4bf287c27846d725e616.JPG', 11, 0, 0),
(7, '', '', 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 0, 0, 'effd3139933d4bf287c27846d725e616.JPG', 11, 0, 0),
(8, '', '', 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 0, 0, 'effd3139933d4bf287c27846d725e616.JPG', 11, 0, 0),
(9, '', '', 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 0, 0, 'effd3139933d4bf287c27846d725e616.JPG', 11, 0, 0),
(10, '', '', 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 0, 0, 'effd3139933d4bf287c27846d725e616.JPG', 11, 0, 0),
(11, '', '', 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 0, 0, 'effd3139933d4bf287c27846d725e616.JPG', 11, 0, 0),
(12, '', '', 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 0, 0, 'effd3139933d4bf287c27846d725e616.JPG', 11, 0, 0),
(13, '', '', 'Kem đánh răng trẻ em', 'Giá bán	120,000 VND\r\nTrạng thái	Hết hàng\r\nNhãn hiệu	Signal\r\nNơi sản xuất	Đức', 1, '100000', 0, 0, 'effd3139933d4bf287c27846d725e616.JPG', 11, 0, 0),
(14, '', '', 'sss', '<p>ssssssssss</p>\n', 2, '111111', 0, 0, '58d2eca970d596818ad4855c85c1755e.jpg', 100, 0, 1401946622),
(15, '', '', 'ssss', '', 0, '0', 0, 0, '0', 100, 0, 1402125763),
(17, '', '', 's1 222', '<p>ssssss</p>\n', 1, '222222', 0, 0, '0498db6b5567c5d413a244d327eaa8b9.jpg', 100, 0, 1402627782),
(18, '', '', 'sssss', '<p>ssssssss</p>\n', 0, '0', 0, 0, '0', 100, 0, 1404785963);

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
  `img_thumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_scroll` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exp_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `sale_off`
--

INSERT INTO `sale_off` (`id`, `title`, `content`, `id_product`, `percent`, `img`, `img_thumb`, `img_scroll`, `exp_date`) VALUES
(10, 'Giảm giá ủ tóc', '<p>Giảm gi&aacute; ủ t&oacute;c</p>\n', 2, 10, 'chuong-trinh-tang-be-boi.gif', '', 'best-slim-massage-giam-beo.gif', '2014-07-31 00:00:00');

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
(1, 'Tư vấn sản phẩm', 'antawavn', '0906.888.545'),
(4, 'Hỗ trợ thành viên', 'nguyenkimbinh91', '01679.478.959');

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
(1, 'giangbeo', 'Nguyễn Trường Giang', '01667039939', 'HCM', '$2a$08$av0xeUt7pYqEymtq0ENPN.65FaINVis/64LmuohuAdt8ND8exqVs2', 'nguyentruonggiang91@gmail.com', 1, '', '', '', '', 0, 79, 0, NULL, NULL, NULL, NULL, 'ad9147af77ea0a71cb1045eb8c144048', '127.0.0.1', '2014-07-22 06:28:59', '2014-03-21 08:25:47', '2014-07-22 04:28:59', '', '', 1, '', 0, 0),
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
