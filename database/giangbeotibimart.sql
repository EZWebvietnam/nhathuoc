-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: mysql-server01
-- Generation Time: Jul 01, 2014 at 05:02 PM
-- Server version: 5.1.67-log
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `giangbeotibimart`
--
CREATE DATABASE IF NOT EXISTS `giangbeotibimart` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `giangbeotibimart`;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `address`, `phone`, `type`) VALUES
(1, 'Số 40, Đường 13, QL13, P.Hiệp Bình Chánh, Q.Thủ Đức, TPHCM\n **Cơ sở 2: -Số 7/134 Liên Khu 5-6, P.Bình Hưng Hòa B, Q.Bình Tân, TP.HCM\nEmail: antawavn@gmail.com\n', '0906 899 545  hoặc 0906 888 545', 1),
(2, 'Hải Dương :Số 666 Đường Xóm Chùa, Phố Dâu - Cổ Thành - TX Chí Linh - Hải Dương\n****Hà Nội : Đối diện hồ Sài Đồng - Long Biên - Hà Nội\n\n\n', 'Hà Nội: 01646536250 - Hải Dương: 0906 888 545', 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `id_product`, `quantity`, `price`, `total_price`, `ip`, `create_date`) VALUES
(11, 8, 1, 100000, 100000, '118.69.52.5', 1402140604),
(13, 5, 1, 120000, 120000, '183.91.25.34', 1402150745),
(15, 5, 1, 120000, 120000, '115.78.5.24', 1402208343),
(16, 18, 1, 65000, 65000, '113.163.163.165', 1402226893),
(19, 21, 1, 135000, 135000, '115.73.134.12', 1402377222),
(23, 27, 1, 480000, 480000, '115.73.150.106', 1402552883),
(24, 19, 1, 65000, 65000, '115.73.150.106', 1402554851),
(25, 28, 1, 35000, 35000, '115.73.150.106', 1402564036),
(27, 26, 1, 250000, 250000, '115.73.150.106', 1402585248),
(30, 23, 2, 300000, 600000, '115.73.201.107', 1402587316),
(33, 21, 1, 135000, 135000, '115.73.185.233', 1402738108),
(34, 28, 1, 35000, 35000, '115.73.156.248', 1403859627),
(36, 40, 1, 500000, 500000, '115.73.168.149', 1404103282),
(37, 40, 10, 500000, 5000000, '1.54.215.165', 1404195727),
(38, 41, 1, 250000, 250000, '115.73.144.32', 1404208012),
(39, 21, 1, 135000, 135000, '113.161.85.214', 1404208162);

-- --------------------------------------------------------

--
-- Table structure for table `cate_product`
--

CREATE TABLE IF NOT EXISTS `cate_product` (
  `id_cate` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `show_home` int(11) NOT NULL,
  `lable` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  PRIMARY KEY (`id_cate`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `cate_product`
--

INSERT INTO `cate_product` (`id_cate`, `title`, `show_home`, `lable`, `product`) VALUES
(4, 'Dầu dừa nguyên chất', 0, 0, 0),
(6, 'Mật ong nguyên chất', 0, 0, 0),
(8, 'Sáp ong nguyên chất', 0, 0, 0),
(20, 'Sữa ong chúa', 0, 0, 0),
(21, 'Xà bông sáp ong', 0, 0, 0);

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
('02b17489febaae4a1b7599a8e207e2b3', '115.73.144.32', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1404208593, ''),
('03be9d6f77dd088d2928ceed16b6db79', '115.73.144.32', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1404208605, ''),
('084657feb6950d68aa63583d07820323', '115.73.144.32', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1404208590, ''),
('1ced853566700ff0ba5039030fd0bf42', '115.73.144.32', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1404207877, ''),
('3a7b0dc6e0051f4050f70411d7a35ca7', '115.73.144.32', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1404208618, ''),
('5756fe458b8485df7919b79800dac982', '115.73.144.32', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1404208732, ''),
('8599d245bb85bed67e1c2def439f6f90', '115.73.144.32', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1404208588, ''),
('89fba5deac0cf1df19cb881e936241ad', '115.73.144.32', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1404208834, ''),
('a0edc481f9fa35f3c27e997218f6992f', '115.73.144.32', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1404208584, ''),
('a498ce4c2be9ce5f8a66f4229c1365f1', '115.73.144.32', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1404208623, ''),
('a6e7c2e938e16069fd05def38fd560d4', '115.73.144.32', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1404207838, ''),
('af6db9c35d6104ad69dd5ec53c3b8987', '115.73.144.32', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1404208583, ''),
('b42e6dafe0db98487a918380381c86d9', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404208929, ''),
('b918013587aebe671eb6409ad85def2b', '115.73.144.32', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1404208595, ''),
('c1128607d8ff53918832594e2b7411b0', '115.73.144.32', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1404207868, ''),
('cb798155e3caab1b6c1852bb740ef48b', '113.161.85.214', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (K', 1404208929, ''),
('de2e486ff11c1871f4e1d9af96d6eb50', '115.73.144.32', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1404207880, ''),
('eae7f7e5a0aa0a37a03c335c9179e663', '115.73.144.32', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1404208604, ''),
('f03c982e3a9036174db129144a9a139a', '115.73.144.32', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1404207838, ''),
('f15e81381b7b18100acfd87463787df2', '115.73.144.32', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1404208685, ''),
('f996513291aeccccfd1d0e8fac3c3e95', '115.73.144.32', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1404207884, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `name`, `title`, `email`, `question`, `answer`, `status`, `create_date`) VALUES
(6, 'Vũ Tiến Thuật', 'Dầu dừa tinh khiết là gì? và cách phân biệt dầu dừa tinh khiết', 'traigianghogackiemtapyeu_hd@yahoo.com', '', '<h1>Dầu dừa nguy&ecirc;n chất tinh khiết l&agrave; g&igrave; ? C&aacute;ch nhận biết c&aacute;c loại dầu dừa.</h1>\n\n<p>Bạn muốn biết dầu dừa h&atilde;y xem x&eacute;t cơm dừa như thế n&agrave;o ?</p>\n\n<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Miếng cơm dừa m&agrave;u trắng như b&ocirc;ng, v&igrave; thế dầu dừa trong miếng cơm dừa phải trắng trong.</p>\n\n<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Khi ăn miếng cơm dừa tươi kh&ocirc;ng thấy c&oacute; m&ugrave;i nhiều, v&igrave; thế dầu dừa tinh khiết nguy&ecirc;n chất sẽ c&oacute; m&ugrave;i rất nhẹ</p>\n\n<p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nhiệt độ s&ocirc;i của dầu dừa nguy&ecirc;n chất l&agrave; 350 độ F hay 177 độ C, v&igrave; đ&oacute; dầu dừa nguy&ecirc;n chất kh&ocirc;ng thể tự ph&aacute;t t&aacute;n cho m&ugrave;i dầu dừa trong nhiệt độ thường.</p>\n\n<p>&nbsp;</p>\n\n<p>Dầu dừa nguy&ecirc;n chất tinh khiết l&agrave; dầu dừa mang đầu đủ c&aacute;c đặc t&iacute;nh của miếng cơm dừa tươi: dầu dừa trắng trong m&ugrave;i nhẹ.</p>\n\n<p>&nbsp;</p>\n\n<p>Để c&oacute; được dầu dừa nguy&ecirc;n chất tinh khiết cần phải loại bỏ được nước, đường, protein v&agrave; bơ từ miếng cơm dừa để thu được m&igrave;nh dầu dừa nguy&ecirc;n chất.</p>\n\n<p>C&aacute;ch duy nhất c&oacute; thể l&agrave;m được l&agrave; bằng kỹ thuật m&aacute;y t&aacute;ch dầu ly t&acirc;m, những quốc gia c&oacute; nền khoa học ph&aacute;t triển đ&atilde; sử dụng m&aacute;y ly t&acirc;m để sản xuất dầu Olive. Loại được Đường (Sugar) gi&uacute;p cho dầu dừa mịn hơn, ngấm v&agrave;o da t&oacute;c nhanh hơn, ph&aacute;t huy hiệu quả l&agrave;m đẹp hơn, đồng thời l&agrave; khả năng giảm kilogram thon gọn v&ograve;ng 2, Hiệu quả hơn với sức khoẻ.</p>\n\n<p>Dầu dừa <strong>TIBI</strong> chứa h&agrave;m lượng nghi&ecirc;n cứu cao, cho ra dầu dừa chất lượng tốt hơn c&aacute;c nh&agrave; sản xuất dầu dừa trong nước v&agrave; c&aacute;c nh&agrave; sản xuất dầu dừa từ Philippine.</p>\n\n<p>&nbsp;</p>\n\n<p>Dầu dừa thủ c&ocirc;ng truyền thống sử dụng nhiệt l&agrave;m bay hơi nước để lại dầu dừa + đường,&hellip; nhiệt l&agrave;m một lượng đường + dầu dừa ch&aacute;y tạo n&ecirc;n m&ugrave;i đặc trưng như kẹo dừa, nhưng c&ograve;n chứa hơi nước, tỷ lệ ẩm cao dễ bị l&ecirc;n men chua. Do bị ch&aacute;y n&ecirc;n phải c&oacute; mầu v&agrave;ng, v&agrave;ng &iacute;t hay nhiều để biết được bị ch&aacute;y &iacute;t hay nhiều, ch&aacute;y c&agrave;ng mạnh m&ugrave;i kẹo dừa c&agrave;ng mạnh.</p>\n\n<p>Dầu dừa tinh luyện được khuyến c&aacute;o kh&ocirc;ng phải l&agrave; dầu dừa cao cấp,chỉ sử dụng cho c&ocirc;ng nghiệp. kh&ocirc;ng n&ecirc;n sử dụng để l&agrave;m đẹp hay dược phẩm, v&agrave; cả ăn uống.</p>\n\n<p>Bạn sẽ hỏi v&igrave; sao c&oacute; đường ? trong c&aacute;c tr&aacute;i c&acirc;y ngọt đều c&oacute; đường, trong nước dừa hay cơm dừa đều c&oacute; đường, l&acirc;u l&acirc;u bạn uống phải nước dừa bị chua, đ&oacute; l&agrave; đường đ&atilde; bị l&ecirc;n men.</p>\n\n<p>&nbsp;</p>\n\n<p>H&atilde;y t&igrave;m hiểu kỹ dầu dừa nguy&ecirc;n chất tinh khiết từ c&aacute;c c&ocirc;ng ty sản xuất để biết ch&iacute;nh x&aacute;c gi&aacute; trị, kỹ thuật v&agrave; mức an to&agrave;n của nhu cầu bạn. Nhiều người mua, nhưng bạn mua cho bạn, h&atilde;y cẩn trọng v&igrave; cho ch&iacute;nh bạn.</p>\n\n<p>Điện thoại đặt h&agrave;ng: 0906 888 545</p>\n\n<p>&nbsp;</p>\n\n<p>C&oacute; rất nhiều th&ocirc;ng tin về dầu dừa, tại Mỹ dầu dừa nguy&ecirc;n chất tinh khiết được coi l&agrave; thực phẩm dinh dưỡng chức năng ho&agrave;n to&agrave;n từ thi&ecirc;n nhi&ecirc;n. V&igrave; thế gi&aacute; trị của dầu dừa nguy&ecirc;n chất đang được định gi&aacute; đ&uacute;ng hơn.</p>\n', 1, 1402247296),
(7, 'Vũ Tiến Thuật', 'Hướng dẫn sử dụng dầu dừa hiệu quả', 'vuthuatpro98@gmail.com', '', '<h1>Hướng dẫn sử dụng dầu dừa, c&aacute;ch ăn dầu dừa hiệu quả</h1>\n\n<p>Dầu dừa rất tốt để l&agrave;m tăng sức đề kh&aacute;ng của cơ thể, khi thời tiết thay đổi hay cơ thể yếu, c&oacute; ch&uacute;t dầu dừa cũng c&oacute; thể gi&uacute;p bạn kh&ocirc;ng bị cảm c&uacute;m, hay sốt, sưng họng,...v&agrave; kiểm so&aacute;t c&acirc;n nặng. L&agrave;m sao để bạn v&agrave; gia đ&igrave;nh ăn dầu dừa hiệu quả nhất. T&ocirc;i xin tr&igrave;nh b&agrave;y một v&agrave;i c&aacute;ch m&agrave; t&ocirc;i đ&atilde; sử dụng.</p>\n\n<p>Điện thoại mua h&agrave;ng: 0906 888 545</p>\n\n<p><img alt="" src="http://dauduanguyenchat.com/kcfinder/upload/images/ha4.jpg" style="height:750px; width:500px" /></p>\n\n<p>&nbsp;</p>\n\n<p>Cho ch&uacute;t dầu dừa v&agrave;o nồi cơm khi cắm điện, nhiều bạn sẽ ngạc nhi&ecirc;n, nhưng tại sao lại kh&ocirc;ng được ? Rất nhiều người cho dầu dừa v&agrave;o khi nấu x&ocirc;i, cơm nếp, tại sao b&acirc;y giờ kh&ocirc;ng cho dầu dừa v&agrave;o nồi cơm. T&ocirc;i thấy thật th&uacute; vị v&agrave; h&agrave;o hứng khi ăn cơm c&oacute; m&ugrave;i thơm của dầu dừa, ai cũng thấy ch&uacute;t kh&aacute;c lạ v&agrave; lại tốt cho sức khỏe. T&ocirc;i c&ograve;n thấy c&oacute; dầu dừa, cơm nguội để được l&acirc;u hơn, v&agrave; khi h&acirc;m lại cũng dễ ăn hơn nhiều, c&oacute; thể đ&acirc;y l&agrave; kh&aacute;m ph&aacute; của t&ocirc;i.</p>\n\n<p>&nbsp;</p>\n\n<p>T&ocirc;i đ&atilde; d&ugrave;ng dầu dừa để chi&ecirc;n x&agrave;o thay cho dầu ăn th&ocirc;ng thường được một thời gian, v&agrave;o l&uacute;c 10 &ndash; 11h s&aacute;ng v&agrave; 4-5h chiều t&ocirc;i &iacute;t cảm thấy đ&oacute;i bụng hơn so với trước đ&oacute;, v&ograve;ng 2 của t&ocirc;i hiện tại mặc được quần size 32, trước đ&oacute; &iacute;t l&acirc;u t&ocirc;i phải mặc size 34 m&agrave; c&ograve;n kh&oacute; chịu. Một điều m&agrave; t&ocirc;i cảm nhận được l&agrave; thấy khỏe hơn, strong hơn, &iacute;t thấy ngẹt mũi hay n&oacute;ng đầu, hay đau họng (t&ocirc;i hay ngồi m&aacute;y lạnh v&agrave; kh&ocirc;ng h&uacute;t thuốc l&aacute;). T&ocirc;i cũng c&oacute; cảm gi&aacute;c m&ugrave;i dầu dừa l&agrave;m tan biến m&ugrave;i tanh của c&aacute; t&ocirc;m. T&ocirc;i thấy đỡ lo lắng v&igrave; thừa c&acirc;n, v&agrave; tiết kiệm chi ph&iacute; giảm c&acirc;n so với c&aacute;c c&aacute;ch kh&aacute;c.</p>\n\n<p>&nbsp;</p>\n\n<p>Một ng&agrave;y t&ocirc;i ngậm dầu dừa 1 lần v&agrave;o buổi s&aacute;ng, l&uacute;c t&ocirc;i tắm, v&igrave; t&ocirc;i muốn hơi thở thơm tự tin hơn khi gặp ai đ&oacute; trong cả ng&agrave;y. Ngủ 8 tiếng ban tối c&oacute; thể vi khuẩn xấu ph&aacute;t triển trong miệng, t&ocirc;i cần l&agrave;m sạch ch&uacute;ng ra khỏi miệng của t&ocirc;i.</p>\n\n<p>&nbsp;</p>\n\n<p>C&oacute; một số lời khuy&ecirc;n của c&aacute;c b&aacute;c sỹ Hoa Kỳ về dầu dừa c&oacute; thể cho v&agrave;o c&agrave; ph&ecirc;, sinh tố hay sữa chua, t&ocirc;i cũng l&agrave;m thử một v&agrave;i lần, v&agrave; thấy th&uacute; vị, một hương vị mới, dầu dừa gặp lạnh l&agrave; đ&ocirc;ng nhanh, ăn thấy cộm nhẹ trong lưỡi kh&aacute; th&iacute;ch. C&ograve;n cho v&agrave;o c&agrave; ph&ecirc; n&oacute;ng, m&ugrave;i hương c&agrave; ph&ecirc; v&agrave; dầu dừa c&ograve;n l&agrave;m hứng th&uacute; hơn nữa.</p>\n\n<p>T&ocirc;i cũng c&oacute; biết dầu dừa gi&uacute;p chữa bệnh: tiểu đường, hay ung thư hay HIV,... về cụ thể l&agrave; dầu dừa ph&aacute; hủy lớp m&agrave;ng mỡ bảo vệ virut, gi&uacute;p cho kh&aacute;ng thể của cơ thể tiếp x&uacute;c tới được với virut v&agrave; ti&ecirc;u diện ch&uacute;ng. V&igrave; thế t&ocirc;i muốn sử dụng nhiều dầu dừa hơn nữa.</p>\n\n<p>&nbsp;</p>\n\n<p>Mặc d&ugrave; gi&aacute; dầu dừa mắc hơn dầu ăn th&ocirc;ng thường, nhưng nếu x&eacute;t về sức khỏe: t&ocirc;i c&oacute; thời gian khỏe mạnh k&eacute;o d&agrave;i hơn để vui chơi cuộc sống, l&agrave;m việc được nhiều hơn, kh&ocirc;ng l&agrave;m ai phải tốn thời gian b&ecirc;n cạnh chăm s&oacute;c khi ốm, hay tốn tiền mua thuốc, tốn tiền nằm ở nh&agrave; thương đắt đỏ, v&agrave; dịch vụ y tế tệ hại. T&ocirc;i cũng c&oacute; body gọn g&agrave;ng dễ nh&igrave;n hơn.</p>\n\n<p>&nbsp;</p>\n\n<p>Nếu bạn muốn giảm c&acirc;n, hay chữa bệnh nhờ dầu dừa, h&atilde;y l&agrave;m từ từ: ban đầu ăn 1 muỗng c&agrave; ph&ecirc; nhỏ v&agrave;o l&uacute;c 9-10h s&aacute;ng, muỗng thứ 2 v&agrave;o l&uacute;c 4-5h chiều, v&agrave; muỗng thứ 3 trước l&uacute;c đi ngủ 30 ph&uacute;t. Sau đ&oacute; khi cơ thể bắt đầu quen với dầu dừa, bạn ăn nhiều th&ecirc;m 1 ch&uacute;t, tăng l&ecirc;n từ từ. Một số phản ứng phụ c&oacute; thể xảy ra l&uacute;c ban đầu l&agrave;: bạn sẽ đi ti&ecirc;u chảy, nhưng kh&ocirc;ng đau bụng, h&atilde;y uống nhiều nước v&agrave; tạm ngưng sau khi hết ti&ecirc;u chảy v&agrave;i ng&agrave;y nha.</p>\n\n<p>R&otilde; d&agrave;ng dầu dừa rất rẻ, chẳng đ&aacute;ng l&agrave; bao so với cuộc sống tươi đẹp.</p>\n\n<p>Dầu dừa cũng gi&uacute;p bạn, con c&aacute;i của bạn, gia đ&igrave;nh bạn, c&oacute; cuộc sống khỏe mạnh hơn.</p>\n', 1, 1402247581),
(8, 'Vũ Tiến Thuật', 'Cách giảm béo bằng dầu dừa tự nhiên', 'vuthuatpro98@gmail.com', '', '<h1>Lợi &iacute;ch của dầu dừa giảm b&eacute;o, duy tr&igrave; c&acirc;n nặng,giảm c&acirc;n bằng dầu dừa</h1>\n\n<p>Khi bạn ăn dầu dừa thay cho dầu ăn kh&aacute;c hay mỡ động vật, bơ. To&agrave;n bộ dầu dừa sẽ được chuyển h&oacute;a ho&agrave;n to&agrave;n th&agrave;nh năng lượng, c&aacute;c hạt dầu kh&ocirc;ng t&iacute;ch lại mỡ dưới da bạn, ngăn ngừa việc tăng c&acirc;n. d&agrave;nh 2 ph&uacute;t để biết d&otilde; hơn</p>\n\n<p><strong>Điện thoại đặt h&agrave;ng <span dir="ltr"><span dir="ltr">0906 888 545</span></span></strong></p>\n\n<p>Sau khi sinh em b&eacute;, c&aacute;c chị tăng c&acirc;n v&ugrave;n vụt, l&agrave;m sao để lấy lại v&oacute;c d&aacute;ng v&agrave; vẫn đủ dinh dưỡng cho con, c&ugrave;ng sức đề kh&aacute;ng tốt cho cả mẹ lẫn con trẻ ?. Dầu dừa gi&uacute;p Sữa của c&aacute;c chị c&oacute; th&ecirc;m sức đề kh&aacute;ng cho em b&eacute;, v&agrave; cơ thể mẹ th&igrave; ng&agrave;y c&agrave;ng thon gọn. duy tr&igrave; sức khỏe tốt v&agrave; cơ thể đẹp bằng dầu dừa.</p>\n\n<p>&nbsp;</p>\n\n<p><img alt="" src="http://dauduanguyenchat.com/kcfinder/upload/images/fat-vs-thin-704233.jpg" style="height:400px; width:347px" /></p>\n\n<p>C&oacute; rất nhiều c&aacute;c nh&agrave; Y khoa nước Mỹ đ&atilde; l&ecirc;n tiếng khẳng định dầu dừa c&oacute; khả năng khống chế c&acirc;n nặng.</p>\n\n<p>&nbsp;</p>\n\n<p>Khi bạn ăn dầu dừa thay cho dầu ăn kh&aacute;c hay mỡ động vật, bơ. To&agrave;n bộ dầu dừa sẽ được chuyển h&oacute;a ho&agrave;n to&agrave;n th&agrave;nh năng lượng, c&aacute;c hạt dầu kh&ocirc;ng t&iacute;ch lại dưới da bạn, ngăn ngừa việc tăng c&acirc;n.</p>\n\n<p>&nbsp;</p>\n\n<p>T&aacute;c dụng giảm c&acirc;n của dầu dừa hoạt động theo ba c&aacute;ch:</p>\n\n<p>&nbsp;</p>\n\n<p>1. Hỗ trợ chuyển h&oacute;a</p>\n\n<p>&nbsp;</p>\n\n<p>MCTs của dầu dừa sẽ l&agrave;m tăng sự sinh nhiệt, l&agrave;m gia tăng tốc độ chuyển h&oacute;a cho d&ugrave; ngay cả l&uacute;c ch&uacute;ng ta ngồi y&ecirc;n. C&oacute; nghĩa l&agrave; cơ thể ch&uacute;ng ta sẽ đốt ch&aacute;y nhiều calori m&agrave; kh&ocirc;ng cần những hoạt động gắng sức.</p>\n\n<p>&nbsp;</p>\n\n<p>2. Khống chế sự th&egrave;m ăn</p>\n\n<p>&nbsp;</p>\n\n<p>Dầu dừa gi&uacute;p cơ thể cảm thấy kh&ocirc;ng muốn ăn nữa sau khi đ&atilde; ăn, c&oacute; nghĩa l&agrave; ch&uacute;ng ta sẽ ăn &iacute;t hơn v&agrave; khoảng c&aacute;ch giữa hai lần ăn l&acirc;u hơn.</p>\n\n<p>&nbsp;</p>\n\n<p>3. Kh&ocirc;ng c&oacute; cảm gi&aacute;c đ&oacute;i</p>\n\n<p>&nbsp;</p>\n\n<p>Dầu dừa l&agrave;m tăng sản sinh một loại hormon c&oacute; t&ecirc;n l&agrave; leptin, ph&aacute;t t&iacute;n hiệu bảo ch&uacute;ng ta ngừng ăn. Trong một nghi&ecirc;n cứu tại ĐH Johns Hopkins, những phụ nữ kh&ocirc;ng ăn ki&ecirc;ng nếu được bổ sung dầu dừa sẽ ăn &iacute;t lại.</p>\n\n<p>&nbsp;</p>\n\n<p>T&ocirc;i đ&atilde; sử dụng dầu dừa thay dầu ăn, t&ocirc;i chi&ecirc;n x&agrave;o mọi thứ bằng dầu dừa, cho ch&uacute;t dầu dừa v&agrave;o cơm, cảm gi&aacute;c đ&oacute;i bụng v&agrave; th&egrave;m ăn của t&ocirc;i giảm đ&aacute;ng kể, cơ thể t&ocirc;i vẫn cảm thấy khỏe mạnh, t&ocirc;i c&oacute; đi tập GYM body của t&ocirc;i đang gọn g&agrave;ng lại, mặc đồ đẹp hơn, t&ocirc;i nghĩ cũng sẽ tốt với bạn.</p>\n\n<p>Đ&agrave;n &ocirc;ng, phụ nữ, hay c&aacute;c em học sinh đều c&oacute; thể sử dụng dầu dừa để kiểm so&aacute;t mỡ thừa. C&oacute; th&acirc;n h&igrave;nh đẹp c&acirc;n đối bằng c&aacute;ch d&ugrave;ng dầu dừa thay dầu ăn th&ocirc;ng thường.</p>\n', 1, 1402247736),
(9, 'Vũ Tiến Thuật', 'Sáp ong và công dụng của nó', 'vuthuatpro98@gmail.com', '', '<h1>S&aacute;p ong l&agrave; g&igrave;? S&aacute;p ong d&ugrave;ng để l&agrave;m g&igrave;?</h1>\n\n<p><a href="http://usapha.com/sap-ong-la-gi-sap-ong-dung-de-lam-gi-3083"><img alt="Sáp ong là gì? Sáp ong dùng để làm gì?" src="http://usapha.com/wp-content/uploads/2012/08/653169.jpg" /></a></p>\n\n<h2>Sơ lược về s&aacute;p ong</h2>\n\n<p>S&aacute;p ong trong tổ ong được coi l&agrave; một trong những m&ocirc;i trường sống tinh khiết nhất tr&ecirc;n thế giới. <a href="http://usapha.com/tag/ong-mat" target="_blank"> Ong mật</a> thu lượm chất n&agrave;y từ nhiều lo&agrave;i thực vật kh&aacute;c nhau v&agrave; mang n&oacute; về tổ của m&igrave;nh. Tại đ&acirc;y, lũ ong sẽ h&ograve;a trộn v&agrave; l&agrave;m thay đổi chất n&agrave;y, biến n&oacute; th&agrave;nh dạng chất keo gi&uacute;p h&agrave;n k&iacute;n tổ của ch&uacute;ng lại. Lớp s&aacute;p ong n&agrave;y đ&oacute;ng vai tr&ograve; như l&agrave; một chất kh&aacute;ng sinh tự nhi&ecirc;n gi&uacute;p bảo vệ khỏi c&aacute;c sinh vật từ b&ecirc;n ngo&agrave;i x&acirc;m chiếm v&agrave;o.</p>\n\n<p>Khi ph&acirc;n tiết ra s&aacute;p, trước hết ong h&uacute;t no mật, sau&nbsp; một ng&agrave;y một đ&ecirc;m, những hạch s&aacute;p ở bụng ong biến h&oacute;a th&agrave;nh s&aacute;p rồi tiết ra 4 đ&ocirc;i hạch s&aacute;p ở dưới bụng. Khi gặp kh&ocirc;ng kh&iacute;, s&aacute;p n&agrave;y trở th&agrave;nh những hạt s&aacute;p giống như mảnh vẩy, được gọi l&agrave; vẩy s&aacute;p. Vẩy s&aacute;p n&agrave;y lại được c&aacute;c ch&acirc;n sau của ong gom để chuyển l&ecirc;n ch&acirc;n trước rồi đưa l&ecirc;n miệng nh&agrave;o nặn cho tới khi dẻo qu&aacute;nh mới đem đắp tổ. Theo nghi&ecirc;n cứu, với những điều kiện b&igrave;nh thường, muốn sản xuất 1 kg s&aacute;p, ong mật phải d&ugrave;ng đến tr&ecirc;n 3 kg mật v&agrave; một số lượng nhỏ phấn hoa.</p>\n\n<h2>T&aacute;c dụng của s&aacute;p ong</h2>\n\n<p>Trong y học, s&aacute;p ong được d&ugrave;ng để gi&uacute;p l&agrave;m giảm Cholesterol trong m&aacute;u v&agrave; giảm đau. Ngo&agrave;i ra, c&ograve;n được sử dụng với mục đ&iacute;ch chống vi&ecirc;m, chống lo&eacute;t như trong vi&ecirc;m lo&eacute;t dạ d&agrave;y, <a href="http://usapha.com/tag/benh-tieu-chay" target="_blank"> ti&ecirc;u chảy</a>&hellip;</p>\n\n<p>S&aacute;p ong l&agrave; chất kh&aacute;ng nấm v&agrave; kh&aacute;ng sinh tự nhi&ecirc;n.</p>\n\n<p>S&aacute;p ong c&oacute; khả năng điều h&ograve;a hệ miễn dịch: ức chế v&agrave; k&iacute;ch th&iacute;ch hệ miễn dịch.</p>\n\n<p>S&aacute;p ong c&ograve;n c&oacute; khả năng điều trị bỏng da hiệu quả, gi&uacute;p l&agrave;m mềm v&agrave; giữ ẩm cho da.</p>\n\n<p>Trong c&ocirc;ng nghệ b&agrave;o chế dược phẩm, s&aacute;p ong c&ograve;n được sử dụng l&agrave;m t&aacute; dược.</p>\n\n<p>Trong c&ocirc;ng nghiệp, s&aacute;p ong l&agrave; một chất nhũ h&oacute;a hiệu quả hay được sử dụng như l&agrave; một loại hương liệu trong sản xuất x&agrave; ph&ograve;ng v&agrave; nước hoa</p>\n\n<h2>C&aacute;ch l&agrave;m v&agrave; c&aacute;ch d&ugrave;ng những sản phẩm từ s&aacute;p ong</h2>\n\n<h3>Tạo kem dưỡng từ hoa hồng v&agrave; s&aacute;p ong</h3>\n\n<p><strong>T&aacute;c dụng :</strong> Gi&uacute;p l&agrave;n da thật mịn m&agrave;ng v&agrave; trắng hồng.</p>\n\n<p><strong>C&aacute;ch l&agrave;m:</strong></p>\n\n<ul>\n	<li>Bước 1: D&ugrave;ng khoảng 30g c&aacute;nh hoa v&ograve; trộn với 20g nước.</li>\n	<li>Bước 2: Đổ hỗn hợp đ&oacute; v&agrave;o một nồi men hoặc gốm nhỏ.</li>\n	<li>Bước 3: Th&ecirc;m v&agrave;o đ&oacute; 40g nước v&agrave; om k&iacute;n lại.</li>\n	<li>Bước 4: Bắc l&ecirc;n bếp với mức lửa nhỏ nhất, để cho nước s&ocirc;i nhẹ nh&agrave;ng.</li>\n	<li>Bước 5: Để trong v&ograve;ng 3 ph&uacute;t. Sau đ&oacute; để hỗn hợp n&agrave;y hạ nhiệt bằng c&aacute;ch để xuống nền đất.</li>\n	<li>Bước 6: Lọc lấy tinh chất của nước hỗn hợp để d&ugrave;ng dần.</li>\n	<li>Bước 7: Bỏ v&agrave;o tủ lạnh từ 1 &ndash; 2 tiếng.</li>\n	<li>Bước 8: L&agrave;m tan 30g mỡ cừu v&agrave; s&aacute;p ong bằng nồi hơi.</li>\n	<li>Bước 9: Trộn đều hỗn hợp mỡ cừu v&agrave; s&aacute;p ong với một lượng nhỏ dầu thực vật. C&aacute;c bạn c&oacute; thể d&ugrave;ng dầu thực vật chiết xuất từ quả hạnh nh&acirc;n, l&ecirc; t&agrave;u, đỗ tương.</li>\n	<li>Bước 10: C&oacute; thể <a href="http://casinosconsultant.co.uk/texas-holdem-tournament-strategy-online-poker-tells" target="_blank">online casinos</a> d&ugrave;ng dụng cụ đ&aacute;nh kem hoặc trứng để trộn tất cả c&aacute;c hỗn hợp bao gồm mỡ cừu, s&aacute;p ong v&agrave; nước hoa hồng.</li>\n	<li>Bước cuối c&ugrave;ng: B&ocirc;i nhẹ nh&agrave;ng l&ecirc;n to&agrave;n bộ da mặt v&agrave;o mỗi tối trước khi đi ngủ để s&aacute;ng thức dậy c&oacute; 1 l&agrave;n da thật mịn m&agrave;ng v&agrave; trắng hồng.Ch&uacute; &yacute;: Kem dưỡng m&agrave; bạn vừa tạo ra ph&ugrave; hợp với mọi loại da, tuy nhi&ecirc;n nếu l&agrave; da dầu, bạn c&oacute; thể rửa trước bằng sữa rửa mặt hoặc nước hoa hồng.</li>\n</ul>\n\n<h3>Tạo son chống nẻ với s&aacute;p ong</h3>\n\n<p><strong>Dụng cụ:</strong></p>\n\n<ul>\n	<li>1 nồi nhỏ</li>\n	<li>1 ch&eacute;n uống nước (hoặc b&aacute;t ăn cơm)</li>\n	<li>1 th&igrave;a c&agrave; ph&ecirc;</li>\n</ul>\n\n<p>=&gt; tiệt tr&ugrave;ng dụng cụ bằng c&aacute;ch thấm cồn 90&deg; v&agrave;o một miếng b&ocirc;ng v&agrave; lau tất cả c&aacute;c dụng cụ với miếng b&ocirc;ng đ&oacute;.</p>\n\n<p><strong>Nguy&ecirc;n liệu:</strong></p>\n\n<ul>\n	<li>1/2 th&igrave;a c&agrave; ph&ecirc; s&aacute;p ong tự nhi&ecirc;n</li>\n	<li>2 th&igrave;a c&agrave; ph&ecirc; dầu thực vật t&ugrave;y chọn (hướng dương, hạnh nh&acirc;n)</li>\n	<li>ko bắt buộc: hương vị d&ugrave;ng cho thực phẩm (tức l&agrave; d&ugrave;ng để nấu nướng) v&agrave;i giọt 2 giọt tinh dầu oải hương (lavender) hoặc hoa hồng mộc (rose wood) nếu m&ocirc;i nẻ nhiều * .</li>\n</ul>\n\n<p><strong>C&aacute;ch l&agrave;m:</strong></p>\n\n<ul>\n	<li>Cho nước v&agrave;o nồi đến khoảng 3cm v&agrave; đun s&ocirc;i</li>\n	<li>Trong khi chờ nước s&ocirc;i b&agrave;o s&aacute;p ong bằng dao th&aacute;i th&agrave;nh từng sợi mỏng v&agrave; nhỏ.</li>\n	<li>Đổ s&aacute;p ong dầu thực vật v&agrave;o ch&eacute;n uống nước (hoặc b&aacute;t) v&agrave; đun c&aacute;ch thủy đến khi s&aacute;p chảy ho&agrave;n to&agrave;n (ko cần đậy nắp), cuối c&ugrave;ng cho hương vị v&agrave; tinh dầu v&agrave;o v&agrave; quấy đểu l&ecirc;n bằng tăm.</li>\n	<li>- Đổ v&agrave;o một hộp đựng nhỏ bằng sắt hoặc thủy tinh v&agrave; để v&agrave;o tủ lạnh trong v&ograve;ng v&agrave;i ph&uacute;t để hỗn hợp đ&ocirc;ng lại.</li>\n</ul>\n\n<p><strong>Lưu &yacute;:</strong></p>\n\n<ul>\n	<li>V&agrave;o m&ugrave;a h&egrave; n&oacute;ng hơn c&aacute;c bạn c&oacute; thể th&ecirc;m ch&uacute;t s&aacute;p ong cho hộp son đỡ chảy. T&ugrave;y theo sở th&iacute;ch v&agrave; m&ugrave;a c&aacute;c bạn c&oacute; thể thay đổi độ cứng của hộp son nẻ bằng c&aacute;ch l&agrave;m chảy lại (với l&ograve; vi s&oacute;ng hoặc c&aacute;ch thủy) v&agrave; cho th&ecirc;m dầu hoặc s&aacute;p ong.</li>\n	<li>Nh&agrave; bạn n&agrave;o c&oacute; l&ograve; vi s&oacute;ng th&igrave; ko cần nồi đun m&agrave; c&oacute; thể cho v&agrave;o l&ograve; l&agrave;m chảy ở nấc b&eacute; nhất v&agrave; cứ 20 gi&acirc;y mở lắc đều đến khi s&aacute;p chảy hết.</li>\n</ul>\n\n<p><strong>Cẩn thận:</strong> kh&ocirc;ng được cho đồ nhựa v&agrave; kim loại v&agrave; l&ograve; vi s&oacute;ng, chỉ d&ugrave;ng thủy tinh hoặc s&agrave;nh sứ.</p>\n\n<p><strong>Lưu &yacute;:</strong> tinh dầu kh&ocirc;ng được d&ugrave;ng cho phụ nữ c&oacute; thai, cho con b&uacute;, trẻ em v&agrave; người đang c&oacute; bệnh.</p>\n\n<h2>Giữ ẩm da bằng s&aacute;p ong</h2>\n\n<p><strong>C&aacute;ch l&agrave;m:</strong></p>\n\n<ul>\n	<li>Bỏ v&agrave;o t&ocirc; sứ khoảng 30 g s&aacute;p ong, 120 g dầu hạnh nh&acirc;n (almond oil) v&agrave; 10 giọt vitamin E (lấy từ vi&ecirc;n nang vitamin E).</li>\n	<li>Sau đ&oacute;, bỏ t&ocirc; n&agrave;y v&agrave;o một nồi nước (nấu c&aacute;ch thủy) v&agrave; đun cho đến khi s&aacute;p ong tan chảy ho&agrave;n to&agrave;n.</li>\n	<li>Lấy nồi ra khỏi bếp rồi bỏ th&ecirc;m 30 ml nước sạch được l&agrave;m ấm khoảng 70 độ C.</li>\n	<li>Nhỏ v&agrave;o v&agrave;i giọt tinh dầu để tạo hương theo &yacute; th&iacute;ch (thường d&ugrave;ng tinh dầu vanilla) rồi khuấy đều khoảng từ 5 đến 10 ph&uacute;t sẽ tạo ra một hỗn hợp như kem.Để kem n&agrave;y v&agrave;o lọ thủy tinh, đậy nắp kỹ v&agrave; bảo quản ở nơi m&aacute;t (c&oacute; nhiệt độ dưới 25 độ C).</li>\n</ul>\n\n<p><strong>C&aacute;ch d&ugrave;ng:</strong> D&ugrave;ng kem n&agrave;y thoa sẽ c&oacute; t&aacute;c dụng dưỡng ẩm da, trị kh&ocirc; da.</p>\n', 1, 1402247925),
(10, 'Vũ Tiến Thuật', 'Cách lựa chọn sáp ong phù hợp với mục đích sử dụng', 'vuthuatpro98@gmail.com', '', '<p>C&oacute; 3 loại s&aacute;p ong đ&oacute; ch&iacute;nh l&agrave;: S&aacute;p ong trắng, s&aacute;p ong v&agrave;ng, s&aacute;p ong n&acirc;u(đen)</p>\n\n<p>Sau đ&acirc;y l&agrave; c&aacute;ch Tibimart tư vấn gi&uacute;p bạn c&oacute; được sản phẩm như &yacute;.</p>\n\n<p><em><strong>S&aacute;p ong trắng</strong></em>: Thường được d&ugrave;ng l&agrave;m son m&ocirc;i, mỹ phẩm, l&agrave;m nến v&igrave; h&agrave;m lượng mật ong trong s&aacute;p c&ograve;n &iacute;t rất th&iacute;ch hợp sử dụng l&agrave;m son m&ocirc;i hay mỹ phẩm v&igrave; lượng mật &iacute;t, kh&ocirc;ng g&acirc;y th&iacute;ch ứng da với những n&agrave;n da nhạy cảm,da kh&ocirc; nứt nẻ.<em><strong> </strong></em></p>\n\n<p><em><strong>S&aacute;p ong v&agrave;ng:</strong></em> Thường d&ugrave;ng l&agrave;m mỹ phẩm tiền chế, h&agrave;m lượng mật ong c&ograve;n nhiều n&ecirc;n c&oacute; lợi cho việc chữa bệnh v&agrave; ph&ograve;ng trừ vi&ecirc;m nhiễm. Ngo&agrave;i ra s&aacute;p ong v&agrave;ng c&ograve;n sử dụng l&agrave;m t&aacute; dược.</p>\n\n<p><em><strong>S&aacute;p ong n&acirc;u(đen):</strong></em> L&agrave; s&aacute;p ong được thu hoạch cuối m&ugrave;a (s&aacute;p cấn) thường c&oacute; gi&aacute; trị dinh dưỡng lớn do trong s&aacute;p c&ograve;n lại nhiều nọc ong, x&aacute;c ong v&agrave; phấn hoa, S&aacute;p ong n&acirc;u rất hiếm v&agrave; thường được sử dụng để ng&acirc;m rượu uống l&agrave;m tăng sức đề kh&aacute;ng v&agrave; miễn dịch cho cơ thể.</p>\n', 1, 1402248017),
(11, 'Vũ Tiến Thuật', '35 Công dụng của dầu dừa', 'vuthuatpro98@gmail.com', '', '<p><strong>Gần đ&acirc;y, dầu dừa ng&agrave;y c&agrave;ng được sử dụng thịnh h&agrave;nh tr&ecirc;n thế giới. Dầu dừa l&agrave;m c&acirc;n bằng lượng đường trong m&aacute;u, kh&aacute;ng khuẩn, chống vi&ecirc;m, hỗ trợ hấp thụ vitamin v&agrave; kho&aacute;ng chất, v,v.....C&oacute; thể thấy, t&aacute;c dụng m&agrave; dầu dừa mang lại l&agrave; rất lớn. </strong></p>\n\n<p><strong>Dưới đ&acirc;y l&agrave; 50 c&aacute;ch sử dụng dầu dừa mang lại hiệu quả cao trong việc b&agrave;o vệ sức khỏe v&agrave; l&agrave;m đẹp.</strong></p>\n\n<p><img alt="50 công dụng tuyệt vời của dầu dừa" src="http://skds3.vcmedia.vn/2014/50_of_the_best_uses_for_coconut_oil_image-b6bfe.jpg" /></p>\n\n<p><strong>1. M&aacute;t xa</strong></p>\n\n<p>Dầu dừa gi&uacute;p bạn l&agrave;m dịu đi sự mệt mỏi v&agrave; giảm đau cho c&aacute;c cơ bắp. Khi sử dụng, bạn n&ecirc;n th&ecirc;m v&agrave;i giọt tinh dầu để tăng hiểu quả.</p>\n\n<p><strong>2. Bệnh nấm ch&acirc;n</strong></p>\n\n<p>C&aacute;c đặc t&iacute;nh kh&aacute;ng nấm mạnh mẽ của dầu dừa sẽ gi&uacute;p bạn ngăn chặn những căn bệnh về nấm. Th&ecirc;m v&agrave;i giọt thảo mộc oregano hoặc tinh dầu tr&agrave; gi&uacute;p tăng khả năng chống nấm</p>\n\n<p><strong>3. Mụn trứng c&aacute;</strong></p>\n\n<p>Trong dầu dừa chứa c&aacute;c axit b&eacute;o chuỗi trung b&igrave;nh như axi lauric, axit capric,.. c&oacute; t&aacute;c dụng kh&aacute;ng khuẩn g&acirc;y mụn trứng c&aacute;. Thoa trực tiếp dầu dừa l&ecirc;n v&ugrave;ng da bị mụn ,để khoảng 15 đến 20 ph&uacute;t sau đ&oacute; rửa lại bằng sửa rửa mặt</p>\n\n<p><img alt="Tinh dầu dừa được sử dụng rộng rãi trong mát xa và spa" src="http://skds3.vcmedia.vn/2014/50_of_the_best_uses_for_coconut_oil_massage_oil_pic-31a79.jpg" /></p>\n\n<p><em>Tinh dầu dừa được sử dụng rộng r&atilde;i trong m&aacute;t xa v&agrave; spa</em></p>\n\n<p><strong>4. Chất tẩy rửa</strong></p>\n\n<p>Dầu dừa sẽ gi&uacute;p bạn loại bỏ những vết bụi bẩn nhanh ch&oacute;ng v&agrave; hiệu quả.</p>\n\n<p><strong>5. Trị chấy rận</strong></p>\n\n<p>Dầu dừa sẽ gi&uacute;p bạn loại bỏ vấn đề kh&oacute; chịu n&agrave;y</p>\n\n<p><strong>6. Rạn da</strong></p>\n\n<p>Phụ nữ mang thai d&ugrave;ng dầu dừa sẽ gi&uacute;p l&agrave;m giảm v&agrave; ngăn c&aacute;c vết rạn da. Dầu dừa sẽ gi&uacute;p l&agrave;n da của bạn trở n&ecirc;n mềm mại.</p>\n\n<p><strong>7. Mụn cơm v&agrave; Nốt ruồi</strong></p>\n\n<p>B&ocirc;i dầu dừa v&agrave;o khu vực da c&oacute; mụn cơm hoặc nốt ruồi, sau đ&oacute; băng lại. Thay băng v&agrave; b&ocirc;i dầu dừa mỗi ng&agrave;y.</p>\n\n<p><strong>8. Kem dưỡng ẩm</strong></p>\n\n<p>Sử dụng dầu dừa l&agrave; c&aacute;ch tuyệt vời để giữ ẩm cho l&agrave;n da, đặc biệt với da kh&ocirc; hoặc da bị hư tổn</p>\n\n<p><strong>9. Tẩy da chết tr&ecirc;n mặt</strong></p>\n\n<p>Trộn dầu dừa với thuốc muối (baking soda), đường hoặc quế, v&agrave; bột yến mạch. Sau đ&oacute; b&ocirc;i hỗn hợp l&ecirc;n mặt v&agrave; m&aacute;t xa nhẹ nh&agrave;ng</p>\n\n<p><strong>10. Trị g&agrave;u</strong></p>\n\n<p>M&aacute;t xa da đầu với dầu dừa để giảm bớt c&aacute;c triệu chứng của g&agrave;u như ngứa, hay bong ch&oacute;c da đầu</p>\n\n<p><img alt="50 công dụng tuyệt vời của dầu dừa" src="http://skds3.vcmedia.vn/2014/coconut-f6133.jpg" /></p>\n\n<p><strong>11. Giảm cơn th&egrave;m ăn</strong></p>\n\n<p>D&ugrave;ng 1 th&igrave;a dầu dừa trước khi ăn sẽ gi&uacute;p bạn kiếm chế cơn th&egrave;m ăn</p>\n\n<p><strong>12. X&oacute;a mờ nếp nhăn</strong></p>\n\n<p>M&aacute;t xa dầu dừa v&agrave;o c&aacute;c nếp nhăn sẽ khiến ch&uacute;ng mờ dẫn v&agrave; biến mất</p>\n\n<p><strong>13. Đau họng</strong></p>\n\n<p>Ngậm 1 th&igrave;a dầu dừa sẽ gi&uacute;p giảm đau v&agrave; sưng họng, ngăn ngừa nhiễm tr&ugrave;ng.</p>\n\n<p><strong>14. Bệnh vảy nến</strong></p>\n\n<p>Xoa dầu dừa l&ecirc;n v&ugrave;ng da bị tổn thương để diệt nấm. Th&ecirc;m tinh dầu tra để giảm nhiễm tr&ugrave;ng hiệu quả hơn</p>\n\n<p>15.&nbsp;<strong>Bệnh mụn rộp m&ocirc;i do vi r&uacute;t herpes</strong></p>\n\n<p>Dầu dừa c&oacute; đặc t&iacute;nh kh&aacute;ng khuẩn , gi&uacute;p cơ thể tr&aacute;nh khỏi c&aacute;c loại vi khuẩn g&acirc;y rộp m&ocirc;i. Thoa dầu dừa l&ecirc;n v&ugrave;ng miệng bị rộp, th&ecirc;m giọt tinh dầu thơm oregano.&nbsp;</p>\n\n<p>16. <strong>Son dưỡng ẩm</strong></p>\n\n<p>Dầu dừa cung cấp một số chất bảo vệ khỏi ảnh nắng mặt trời, khoảng SPF4</p>\n\n<p><strong>17. Chất b&ocirc;i trơn</strong></p>\n\n<p>Dầu dừa l&agrave; một chất b&ocirc;i trơn tự nhi&ecirc;n, kh&ocirc;ng h&oacute;a chất</p>\n\n<p><strong>18. Loại bỏ b&atilde; kẹo cao su</strong></p>\n\n<p>Dầu dừa sẽ gi&uacute;p bạn lấy b&atilde; kẹo cao su khỏi t&oacute;c hay quần &aacute;o dễ d&agrave;ng hơn</p>\n\n<p><strong>19. Tăng cường sức khỏe cho vật nu&ocirc;i</strong></p>\n\n<p>Bộ l&ocirc;ng của vật nu&ocirc;i sẽ trở n&ecirc;n b&oacute;ng mượt hơn với dầu dừa, diệt sạch bọ ch&eacute;t</p>\n\n<p><img alt="50 công dụng tuyệt vời của dầu dừa" src="http://skds3.vcmedia.vn/2014/benefits_of_coconut_oil_for_pets_pic-d1259.jpg" /></p>\n\n<p><strong>20. Lẹo mắt/ Đau mắt đỏ</strong></p>\n\n<p>Xoa một &iacute;t dầu dừa v&agrave;o chỗ l&ecirc;n lẹo hoặc xung quanh mặt để tr&aacute;nh c&aacute;c bệnh nhiễm tr&ugrave;ng mắt v&agrave; giảm kh&oacute; chịu một c&aacute;ch nhanh ch&oacute;ng.</p>\n\n<p><strong>21. Đau tai</strong></p>\n\n<p>Đau tai, vi&ecirc;m tai hoặc nhiễm tr&ugrave;ng tai c&oacute; thể sẽ khỏi rất nhanh chỉ với một v&agrave;i giọt dầu dừa trộn với dầu tỏi.</p>\n\n<p><strong>22. Vi&ecirc;m da tiết b&atilde; ở trẻ sơ sinh</strong></p>\n\n<p>Dầu dừa rất an to&agrave;n cho trẻ sơ sinh, gi&uacute;p giảm ngứa, đau hay bong da ở trẻ sơ sinh</p>\n\n<p><strong>23. Vết hăm t&atilde;</strong></p>\n\n<p>B&ocirc;i dầu dừa l&ecirc;n vết hăm t&atilde; ở trẻ sẽ l&agrave;m giảm c&aacute;c vết hăm&nbsp;rất hiệu quả</p>\n\n<p><strong>24. Vết bầm t&iacute;m</strong></p>\n\n<p>Ch&agrave; dầu dừa l&ecirc;n v&ugrave;ng da bị th&acirc;m t&iacute;m để l&agrave;m tan vết m&aacute;u bầm</p>\n\n<p><strong>25. Đồi mồi ở người cao tuổi</strong></p>\n\n<p>Dầu dừa c&oacute; t&aacute;c dụng tr&ecirc;n bất kỳ l&agrave;n da c&oacute; tỳ vết. N&oacute; l&agrave;m mờ đi c&aacute;c chấm đồi mồi v&agrave; c&oacute; t&aacute;c dụng chống oxy h&oacute;a mạnh mẽ.</p>\n\n<p><strong>26. Kem cạo r&acirc;u</strong></p>\n\n<p>D&ugrave;ng dầu dừa khi cạo r&acirc;u sẽ gi&uacute;p bạn c&oacute; l&agrave;n da mịn m&agrave;ng v&agrave; mềm mại.</p>\n\n<p><strong>27. Vết xước sau khi cạo r&acirc;u</strong></p>\n\n<p>Sau mỗi lần cạo r&acirc;u, bạn thấy da mặt hơi căng, kh&ocirc;, thậm chị c&oacute; những vết xước. Dầu dừa sẽ gi&uacute;p da bạn mềm hơn, v&agrave; chữa l&agrave;nh c&aacute;c vết xước.</p>\n\n<p><strong>28. Kem đ&aacute;nh răng</strong></p>\n\n<p>Trộn một phần dầu dừa với một phần nước soda (vi&ecirc;n sủi NaHCO3) v&agrave; th&ecirc;m v&agrave;i giọt tinh dầu bạc h&agrave;. Hỗn hợp tạo ra kem đ&aacute;nh răng tự nhi&ecirc;n l&agrave;m sạch v&agrave; trắng răng m&agrave; kh&ocirc;ng hề c&oacute; chất bảo quản.</p>\n\n<p><strong>29. Bệnh thủy đậu</strong></p>\n\n<p>Dầu dừa l&agrave;m giảm ngứa ở bệnh thủy đậu cũng nhưng c&aacute;c vết do muỗi hay c&ocirc;n tr&ugrave;ng cắn.</p>\n\n<p><strong>30. Vi&ecirc;m nhiễm do nấm</strong></p>\n\n<p>Dầu dừa sẽ ngăn ngừa c&aacute;c bệnh nhiễm tr&ugrave;ng do nấm cả b&ecirc;n trong lẫn b&ecirc;n ngo&agrave;i cơ thể.</p>\n\n<p><strong>31. Tẩy trang</strong></p>\n\n<p>Xoa dầu dừa l&ecirc;n mặt sẽ gi&uacute;p bạn dễ d&agrave;ng loại bỏ lớp trang điểm. Gi&uacute;p da bạn s&aacute;ng v&agrave; sạch hơn.</p>\n\n<p><img alt="50 công dụng tuyệt vời của dầu dừa" src="http://skds3.vcmedia.vn/2014/coconut_oil_natural_hair_conditioner_image-5b5c4.jpg" /></p>\n\n<p><strong>32. Dưỡng t&oacute;c</strong></p>\n\n<p>Dầu dừa sẽ gi&uacute;p t&oacute;c bạn chắc khỏe v&agrave; chăm s&oacute;c t&oacute;c bị hư tổn . M&aacute;t xa dầu dừa l&ecirc;n da đầu, sau 10 ph&uacute;t gội lại bằng nước sạch.</p>\n\n<p><strong>33. Đ&aacute;nh b&oacute;ng đồ gỗ</strong></p>\n\n<p>Dầu dừa cũng được sử dụng sơn b&oacute;ng một số loại đồ gỗ. N&oacute; cũng cấp một lớp bảo vệ chống bụi bẩn.</p>\n\n<p><strong>34. Cung cấp nguồn năng lượng</strong></p>\n\n<p>Chất b&eacute;o đặc biệt c&oacute; trong dầu dừa l&agrave; nguồn năng lượng tuyệt vời để cải thiện sức khỏe, tăng khả năng miễn dịch cho cơ thể.</p>\n\n<p><strong>35. Khử m&ugrave;i</strong></p>\n\n<p>Trộn dầu dừa với bột bắp, thuốc muối, hoặc bất kỳ tinh dầu dừa m&agrave; bạn ưa th&iacute;ch, sẽ tạo ra chất khử m&ugrave;i tự nhi&ecirc;n, kh&ocirc;ng độc hại.</p>\n\n<p><strong>36. X&oacute;a tan quầng th&acirc;m mắt</strong></p>\n\n<p>.Trước khi đi ngủ, thoa dầu dừa l&ecirc;n v&ugrave;ng mắt bị th&acirc;m hoặc sưng , để qua đ&ecirc;m , s&aacute;ng dậy rửa bằng nước sạch . Trong dầu dừa chứa nhiều chất chống oxy h&oacute;a, vitamin l&agrave;m tăng độ đ&agrave;n hồi cho da.</p>\n\n<p><strong>37. Bệnh Eczema</strong></p>\n\n<p>Dầu dừa l&agrave;m giảm ngứa, bong da, hay kh&ocirc; da do bệnh eczema, vẩy nến hay vi&ecirc;m da g&acirc;y n&ecirc;n.</p>\n\n<p><strong>38. Ch&aacute;y nắng</strong></p>\n\n<p>B&ocirc;i dầu dừa l&ecirc;n cơ thể sẽ gi&uacute;p bạn ngăn ngừa ch&aacute;y nắng hay giảm cảm gi&aacute;c bỏng r&aacute;t khi da bạn bị ch&aacute;y nắng.</p>\n\n<p><strong>39. Bệnh trĩ</strong></p>\n\n<p>Dầu dừa sẽ l&agrave;m giảm đau v&agrave; kh&oacute; chịu m&agrave; bệnh trĩ g&acirc;y n&ecirc;n.</p>\n\n<p><strong>40. Chảy m&aacute;u cam</strong></p>\n\n<p>Nếu bạn thường xuy&ecirc;n chảy m&aacute;u cam, xoa một &iacute;t dầu dừa v&agrave;o trong lỗ mũi.</p>\n\n<p><strong>41. Nhiệt miệng</strong></p>\n\n<p>Thoa dầu dừa l&ecirc;n vết lo&eacute;t miệng để l&agrave;m giảm đau v&agrave; ngăn nhiễm tr&ugrave;ng.</p>\n\n<p><img alt="50 công dụng tuyệt vời của dầu dừa" src="http://skds3.vcmedia.vn/2014/coconut_oil_strengthens_teeth_image-62ef0.jpg" /></p>\n\n<p><strong>42. Bệnh tr&agrave;o ngược dạ d&agrave;y</strong></p>\n\n<p>Ăn một th&igrave;a dầu dừa trong bữa ăn để tr&aacute;nh ợ chua v&agrave; ợ n&oacute;ng.</p>\n\n<p><strong>43. Đau răng</strong></p>\n\n<p>Dầu dừa gi&uacute;p bạn giảm đau nhức v&agrave; tăng cường chắc khỏe cho h&agrave;m răng. Trộn giọt dầu dừa với 1 giọt dầu đinh hương sẽ gi&uacute;p bạn giảm đau ng&agrave;y lập tức</p>\n\n<p><strong>44. Nhiễm tr&ugrave;ng đường tiết niệu</strong></p>\n\n<p>Dầu dừa sẽ gi&uacute;p điều trị bệnh nhiễm tr&ugrave;ng đường tiểu hoặc giảm đau ở bệnh sỏi thận</p>\n\n<p><strong>45. Dưỡng da</strong></p>\n\n<p>Dầu dừa l&agrave; một nguy&ecirc;n liệu tự nhi&ecirc;n tự nhi&ecirc;n chống kh&ocirc; da, nứt nẻ. C&aacute;c b&agrave; mẹ cũng c&oacute; thể d&ugrave;ng dầu dừa xoa l&ecirc;n n&uacute;m v&uacute; để tr&aacute;nh đau khi cho c&aacute;c b&eacute; b&uacute;.</p>\n\n<p><strong>46. Bệnh mất tr&iacute; nhớ Alzheimer</strong></p>\n\n<p>Trong một v&agrave;i nghi&ecirc;n cứu gần đ&acirc;y cho thấy dầu dừa sẽ l&agrave;m chậm ph&aacute;t triển hoặc ngăn ngừa bệnh bệnh mất tr&iacute; nhớ.</p>\n\n<p><strong>47. Chắc xương</strong></p>\n\n<p>Canxi v&agrave; magie l&agrave; hai kho&aacute;ng chất quan trọng bảo vệ v&agrave; gi&uacute;p xương chắc khỏe. Dầu dừa hỗ trợ cơ thể bạn hấp thụ hai kho&aacute;ng chất đ&oacute;.</p>\n\n<p><strong>48. Bệnh động kinh</strong></p>\n\n<p>Dầu dừa sẽ l&agrave;m giảm tỷ lệ mắc bệnh động kinh . V&agrave; cũng l&agrave;m giảm cường độ của c&aacute;c cơn co giật.</p>\n\n<p><strong>49. V&oacute;c d&aacute;ng thon gọn</strong></p>\n\n<p>Dầu dừa l&agrave;m tăng sự trao đổi chất trong cơ thể bạn, cải thiện chức năng của tuyến gi&aacute;p v&agrave; hỗ trợ giảm c&acirc;n một c&aacute;ch an to&agrave;n.</p>\n\n<p><strong>50. Nấu ăn</strong></p>\n\n<p>Khi đun n&oacute;ng, dầu dừa vẫn đảm bảo an to&agrave;n, kh&ocirc;ng hề độc hại như hầu hết c&aacute;c loại dầu ăn kh&aacute;c v&agrave; mỡ động vật. Dầu dừa sẽ đem đến cho bạn bữa ăn ngon miệng v&agrave; đảm bảo chất chất dinh dưỡng.</p>\n', 1, 1402575698);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image`) VALUES
(14, '0db529b37b3c3d68dbc78f3fe697f12a.jpg'),
(17, 'c67941155d76d9e66dbc4315dc1fb3c1.jpg'),
(18, '6248716e321ad5bb9ff62f78f9fa86c5.jpg'),
(19, '002cf86e82daa9f545519d472ff32f0b.jpg'),
(24, 'db1a00c24d55534f107fc4af3b9938ab.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

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
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `ship_type` int(11) NOT NULL,
  `total_price_order` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `order_customer`
--

INSERT INTO `order_customer` (`id`, `full_name`, `address`, `phone`, `email`, `status`, `fee_ship`, `note`, `ship_type`, `total_price_order`, `create_date`) VALUES
(1, 'Đoàn Quốc Dũng', 'Quốc Lộ 10, Quỳnh Côi, Quỳnh Phụ, Thái Bình, Việt Nam', '0968655739', 'anhxinthutruoc@gmail.com', 0, 5433054, '', 1, 5000000, 1404195961);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `id_product`, `quantity`, `price`, `ip_user`, `order_id`, `create_date`) VALUES
(1, 40, 10, 500000, '1.54.215.165', 1, 1404195961);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `name_account`, `account_number`, `image`) VALUES
(1, 'Ngân hàng đầu tư và phát triển Việt Nam - chi nhánh Gia Định', 'Vũ Đình Thi', '13510000417134', '92c3025bd7ba69e383ffa75e865e0e6b.jpg'),
(8, 'Ngân hàng nông nghiệp và phát triển nông thôn - chi nhánh Kinh Môn', 'Nguyễn Kim Bình', '2307220056805', '31f00f5fa1db85d4370ba5d9efc0b4f5.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `title`, `content`, `id_cate`, `price`, `image`, `stock`, `create_date`) VALUES
(21, 'Dầu dừa 250ml', '<p>Dầu dừa nguy&ecirc;n chất tinh khiết c&oacute; thể tẩy sạch hiệu quả lớp trang điểm v&agrave; bụi bẩn b&aacute;m tr&ecirc;n da. Nếu so với c&aacute;c sản phẩm tẩy trang tr&ecirc;n thị trường th&igrave; dầu dừa nguy&ecirc;n chất tinh khiết c&oacute; gi&aacute; th&agrave;nh rẻ hơn, nhưng lại ho&agrave;n to&agrave;n l&agrave; sản phẩm thi&ecirc;n nhi&ecirc;n v&agrave; kh&ocirc;ng c&oacute; h&oacute;a chất. Dầu dừa nguy&ecirc;n chất tinh khiết c&ograve;n c&oacute; t&aacute;c dụng dưỡng ẩm cho da, tăng t&iacute;nh đ&agrave;n hồi của da v&agrave; bổ sung chất dinh dưỡng cho da.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>C&ocirc;ng dụng:</strong></p>\n\n<p>- Giữ ẩm v&agrave; ngăn kh&ocirc; nh&aacute;m da v&agrave;o m&ugrave;a đ&ocirc;ng với: da mặt, da tay, da ch&acirc;n, ngăn kh&ocirc; v&agrave; nứt m&ocirc;i. Lưu giữ vẽ tươi tắn của c&ocirc; g&aacute;i nhiệt đới ngay m&ugrave;a đ&ocirc;ng lạnh kh&ocirc;.</p>\n\n<p>- Chống rạn da cho phụ nữ c&oacute; thai v&agrave; sau sinh.</p>\n\n<p>- Gi&uacute;p cho t&oacute;c giữ ẩm b&oacute;ng mượt m&agrave;, quyến rũ.</p>\n\n<p>- Dưỡng m&ocirc;i, dưỡng mi l&agrave;m cho mi d&agrave;i v&agrave; d&agrave;y</p>\n\n<p>- Massage cơ thể</p>\n\n<p>- Tẩy tế b&agrave;o chết</p>\n\n<p>- Trị th&acirc;m n&aacute;m v&ugrave;ng n&aacute;ch</p>\n\n<p>- Dưỡng da chống nắng.</p>\n\n<p>- Chống hăm t&atilde; cho em b&eacute; sơ sinh.</p>\n\n<p>- D&ugrave;ng để b&ocirc;i c&aacute;c nốt cắn do c&ocirc;n tr&ugrave;ng (muỗi,...)</p>\n\n<p>- Hương thơm tự nhi&ecirc;n tr&aacute;i dừa v&ugrave;ng nhiệt đới gi&uacute;p k&iacute;ch th&iacute;ch cảm x&uacute;c v&agrave; giảm stress những ng&agrave;y gi&oacute; lạnh.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Đặc điểm nổi bật:</strong></p>\n\n<p>- Kh&ocirc;ng c&oacute; chất tẩy trong, cũng như chất tạo m&ugrave;i hương, gi&uacute;p cho h&agrave;m lượng hữu cơ của dầu dừa được nguy&ecirc;n vẹn.</p>\n\n<p>- H&agrave;m lượng axic lauric cao gi&uacute;p kh&aacute;ng khuẩn</p>\n\n<p>&nbsp;</p>\n\n<p><strong>C&aacute;ch d&ugrave;ng:</strong></p>\n\n<p>- B&ocirc;i v&agrave;o c&aacute;c v&ugrave;ng da: da mặt, da to&agrave;n th&acirc;n, m&ocirc;i, mi, b&agrave;n tay, g&oacute;t ch&acirc;n, v&ugrave;ng n&aacute;ch.</p>\n\n<p>- B&ocirc;i trực tiếp v&agrave;o t&oacute;c v&agrave; da đầu, ủ trong v&ograve;ng 15 - 20 ph&uacute;t, rồi gội xả sạch t&oacute;c.</p>\n\n<p>- Cho v&agrave;i giọt dầu dừa v&agrave;o bồn tắm, nước tắm để c&oacute; t&aacute;c dụng tẩy tế b&agrave;o chết, l&agrave;m mềm mượt da</p>\n', 4, '135000', 'b333e1e4b02a3adfaca648672de7f8d7.jpg', 100, 1402244350),
(22, 'Sáp ong vàng 500g', '<p><strong>S&aacute;p ong l&agrave; g&igrave;?</strong></p>\n\n<p>Kh&ocirc;ng c&oacute; nhiều t&agrave;i liệu định nghĩa r&otilde; r&agrave;ng về s&aacute;p ong. Nhưng theo kinh nghiệm thực tế v&agrave; quan s&aacute;t&nbsp;của người nu&ocirc;i ong th&igrave; n&ocirc;m na s&aacute;p ong ch&iacute;nh l&agrave; &ldquo;tổ&rdquo;, l&agrave; m&ocirc;i trường sống của con ong.&nbsp;Thật ra, 1 tổ ong tự nhi&ecirc;n sẽ c&oacute; 1 lớp m&agrave;ng ngo&agrave;i bao quanh tổ, kế tiếp l&agrave; s&aacute;p ong. S&aacute;p ong l&agrave; một khối, c&oacute; nhiều&nbsp;lỗ nhỏ, ch&iacute;nh l&agrave; vị tr&iacute; tr&uacute; ngụ của con ong. C&ograve;n &ldquo;tổ ong&rdquo; được con người nu&ocirc;i sẽ kh&ocirc;ng c&oacute; lớp ngo&agrave;i bao quanh tổ.&nbsp;Do người nu&ocirc;i đ&atilde; tự tạo cho ch&uacute;ng, n&ecirc;n ch&uacute;ng chỉ việc sống trong s&aacute;p ong.</p>\n\n<p><img alt="tac dung cua sap ong Sáp Ong" src="http://matonghungyen.com/wp-content/uploads/2013/04/tac-dung-cua-sap-ong.jpg" style="height:194px; width:259px" /></p>\n\n<p>S&aacute;p ong c&oacute; t&aacute;c dụng g&igrave;?</p>\n\n<p><strong>Th&agrave;nh phần của s&aacute;p ong?</strong></p>\n\n<p>S&aacute;p ong được h&igrave;nh th&agrave;nh do con ong đi thu lượm từ nhiều loại thực vật kh&aacute;c nhau v&agrave; mang về tổ m&igrave;nh.<br />\nKế tiếp ch&uacute;ng sẽ đưa l&ecirc;n miệng, h&ograve;a trộn v&agrave; l&agrave;m thay đổi chất n&agrave;y, biến n&oacute; th&agrave;nh dạng keo dẻo qu&aacute;nh rồi mang đi h&agrave;n k&iacute;n tổ để sinh sống trong đ&oacute;.&nbsp;Theo nghi&ecirc;n cứu, với những điều kiện b&igrave;nh thường, muốn sản xuất 1 kg s&aacute;p, ong mật phải d&ugrave;ng đến tr&ecirc;n 3 kg mật v&agrave; một số lượng nhỏ phấn hoa.<br />\nPh&acirc;n t&iacute;ch th&agrave;nh phần h&oacute;a học của S&aacute;p ong, cho thấy trong S&aacute;p ong c&oacute; chứa c&aacute;c axit b&eacute;o v&agrave; este. Ở nhiệt độ 15 oC, s&aacute;p ong c&oacute; khối lượng ri&ecirc;ng l&agrave; 0,95 &ndash; 0,87 g/cm3; nhiệt độ n&oacute;ng chảy l&agrave; 62 &ndash; 65 oC v&agrave; ở thể rắn, m&agrave;u v&agrave;ng đến n&acirc;u thẫm. Ngo&agrave;i ra s&aacute;p ong c&oacute; chứa c&aacute;c chất caffein acid phenethyl ester (CAPE) v&agrave; bioflavonoids. Flavonoids c&oacute; đến 20 -30 loại kh&aacute;c nhau, trong đ&oacute; quan trọng nhất l&agrave; chrysin, pinocembrin v&agrave; galangin.&nbsp;S&aacute;p ong c&ograve;n chứa c&aacute;c chất monosaccharide, cellulose, c&aacute;c axit amin, c&aacute;c nh&oacute;m vitamin B1, B2, pro-vitamin A, E v&agrave; D, nicotinic acid, folic acid, c&aacute;c chất kho&aacute;ng như canxi, magnesium, sắt, đồng, kẽm. C&aacute;c chất đ&atilde; được x&aacute;c định trong s&aacute;p ong ho&agrave;n to&agrave;n giống với c&aacute;c th&agrave;nh phần c&oacute; trong thực phẩm, c&aacute;c chất phụ gia thực phẩm v&agrave; được c&ocirc;ng nhận l&agrave; những chất dinh dưỡng an to&agrave;n.</p>\n\n<p><img alt="sap ong la gi 300x231 Sáp Ong" src="http://matonghungyen.com/wp-content/uploads/2013/04/sap-ong-la-gi-300x231.jpg" style="height:231px; width:300px" /></p>\n\n<p>C&aacute;ch sử dụng s&aacute;p ong</p>\n\n<p><strong>S&aacute;p ong c&oacute; t&aacute;c dụng g&igrave;?</strong></p>\n\n<p>S&aacute;p ong được d&ugrave;ng để gi&uacute;p l&agrave;m giảm Cholesterol trong m&aacute;u v&agrave; giảm đau. Ngo&agrave;i ra, c&ograve;n được sử dụng với mục đ&iacute;ch chống vi&ecirc;m, chống lo&eacute;t như trong vi&ecirc;m lo&eacute;t dạ d&agrave;y, ti&ecirc;u chảy&hellip;<br />\nS&aacute;p ong l&agrave; chất kh&aacute;ng nấm v&agrave; kh&aacute;ng sinh tự nhi&ecirc;n.<br />\nS&aacute;p ong c&oacute; khả năng điều h&ograve;a hệ miễn dịch: ức chế v&agrave; k&iacute;ch th&iacute;ch hệ miễn dịch.<br />\nS&aacute;p ong c&ograve;n c&oacute; khả năng điều trị bỏng da hiệu quả, gi&uacute;p l&agrave;m mềm v&agrave; giữ ẩm cho da.<br />\nTrong c&ocirc;ng nghệ b&agrave;o chế dược phẩm, s&aacute;p ong c&ograve;n được sử dụng l&agrave;m t&aacute; dược.<br />\nTrong c&ocirc;ng nghiệp, s&aacute;p ong l&agrave; một chất nhũ h&oacute;a hiệu quả hay được sử dụng như l&agrave; một loại hương liệu trong sản xuất x&agrave; ph&ograve;ng v&agrave; nước hoa</p>\n\n<p><strong>C&aacute;ch sử dụng s&aacute;p ong</strong></p>\n\n<p>_ Ng&acirc;m với rượu để uống dần<br />\n_ Dưỡng da<br />\n_ L&agrave;m son chống nẻ<br />\nCh&uacute;ng t&ocirc;i sẽ c&oacute; những b&agrave;i viết chi tiết về c&aacute;ch sử dụng của s&aacute;p ong ở những phần sau. Hy vọng được sự quan t&acirc;m của c&aacute;c bạn!</p>\n', 8, '150000', 'ecfa6f0dc9fc1c53349a9d52c7af2835.jpg', 100, 1402244961),
(23, 'Sáp ong vàng 1kg', '<p><strong>S&aacute;p ong l&agrave; g&igrave;?</strong></p>\n\n<p>Kh&ocirc;ng c&oacute; nhiều t&agrave;i liệu định nghĩa r&otilde; r&agrave;ng về s&aacute;p ong. Nhưng theo kinh nghiệm thực tế v&agrave; quan s&aacute;t&nbsp;của người nu&ocirc;i ong th&igrave; n&ocirc;m na s&aacute;p ong ch&iacute;nh l&agrave; &ldquo;tổ&rdquo;, l&agrave; m&ocirc;i trường sống của con ong.&nbsp;Thật ra, 1 tổ ong tự nhi&ecirc;n sẽ c&oacute; 1 lớp m&agrave;ng ngo&agrave;i bao quanh tổ, kế tiếp l&agrave; s&aacute;p ong. S&aacute;p ong l&agrave; một khối, c&oacute; nhiều&nbsp;lỗ nhỏ, ch&iacute;nh l&agrave; vị tr&iacute; tr&uacute; ngụ của con ong. C&ograve;n &ldquo;tổ ong&rdquo; được con người nu&ocirc;i sẽ kh&ocirc;ng c&oacute; lớp ngo&agrave;i bao quanh tổ.&nbsp;Do người nu&ocirc;i đ&atilde; tự tạo cho ch&uacute;ng, n&ecirc;n ch&uacute;ng chỉ việc sống trong s&aacute;p ong.</p>\n\n<p><img alt="tac dung cua sap ong Sáp Ong" src="http://matonghungyen.com/wp-content/uploads/2013/04/tac-dung-cua-sap-ong.jpg" style="height:194px; width:259px" /></p>\n\n<p>S&aacute;p ong c&oacute; t&aacute;c dụng g&igrave;?</p>\n\n<p><strong>Th&agrave;nh phần của s&aacute;p ong?</strong></p>\n\n<p>S&aacute;p ong được h&igrave;nh th&agrave;nh do con ong đi thu lượm từ nhiều loại thực vật kh&aacute;c nhau v&agrave; mang về tổ m&igrave;nh.<br />\nKế tiếp ch&uacute;ng sẽ đưa l&ecirc;n miệng, h&ograve;a trộn v&agrave; l&agrave;m thay đổi chất n&agrave;y, biến n&oacute; th&agrave;nh dạng keo dẻo qu&aacute;nh rồi mang đi h&agrave;n k&iacute;n tổ để sinh sống trong đ&oacute;.&nbsp;Theo nghi&ecirc;n cứu, với những điều kiện b&igrave;nh thường, muốn sản xuất 1 kg s&aacute;p, ong mật phải d&ugrave;ng đến tr&ecirc;n 3 kg mật v&agrave; một số lượng nhỏ phấn hoa.<br />\nPh&acirc;n t&iacute;ch th&agrave;nh phần h&oacute;a học của S&aacute;p ong, cho thấy trong S&aacute;p ong c&oacute; chứa c&aacute;c axit b&eacute;o v&agrave; este. Ở nhiệt độ 15 oC, s&aacute;p ong c&oacute; khối lượng ri&ecirc;ng l&agrave; 0,95 &ndash; 0,87 g/cm3; nhiệt độ n&oacute;ng chảy l&agrave; 62 &ndash; 65 oC v&agrave; ở thể rắn, m&agrave;u v&agrave;ng đến n&acirc;u thẫm. Ngo&agrave;i ra s&aacute;p ong c&oacute; chứa c&aacute;c chất caffein acid phenethyl ester (CAPE) v&agrave; bioflavonoids. Flavonoids c&oacute; đến 20 -30 loại kh&aacute;c nhau, trong đ&oacute; quan trọng nhất l&agrave; chrysin, pinocembrin v&agrave; galangin.&nbsp;S&aacute;p ong c&ograve;n chứa c&aacute;c chất monosaccharide, cellulose, c&aacute;c axit amin, c&aacute;c nh&oacute;m vitamin B1, B2, pro-vitamin A, E v&agrave; D, nicotinic acid, folic acid, c&aacute;c chất kho&aacute;ng như canxi, magnesium, sắt, đồng, kẽm. C&aacute;c chất đ&atilde; được x&aacute;c định trong s&aacute;p ong ho&agrave;n to&agrave;n giống với c&aacute;c th&agrave;nh phần c&oacute; trong thực phẩm, c&aacute;c chất phụ gia thực phẩm v&agrave; được c&ocirc;ng nhận l&agrave; những chất dinh dưỡng an to&agrave;n.</p>\n\n<p><img alt="sap ong la gi 300x231 Sáp Ong" src="http://matonghungyen.com/wp-content/uploads/2013/04/sap-ong-la-gi-300x231.jpg" style="height:231px; width:300px" /></p>\n\n<p>C&aacute;ch sử dụng s&aacute;p ong</p>\n\n<p><strong>S&aacute;p ong c&oacute; t&aacute;c dụng g&igrave;?</strong></p>\n\n<p>S&aacute;p ong được d&ugrave;ng để gi&uacute;p l&agrave;m giảm Cholesterol trong m&aacute;u v&agrave; giảm đau. Ngo&agrave;i ra, c&ograve;n được sử dụng với mục đ&iacute;ch chống vi&ecirc;m, chống lo&eacute;t như trong vi&ecirc;m lo&eacute;t dạ d&agrave;y, ti&ecirc;u chảy&hellip;<br />\nS&aacute;p ong l&agrave; chất kh&aacute;ng nấm v&agrave; kh&aacute;ng sinh tự nhi&ecirc;n.<br />\nS&aacute;p ong c&oacute; khả năng điều h&ograve;a hệ miễn dịch: ức chế v&agrave; k&iacute;ch th&iacute;ch hệ miễn dịch.<br />\nS&aacute;p ong c&ograve;n c&oacute; khả năng điều trị bỏng da hiệu quả, gi&uacute;p l&agrave;m mềm v&agrave; giữ ẩm cho da.<br />\nTrong c&ocirc;ng nghệ b&agrave;o chế dược phẩm, s&aacute;p ong c&ograve;n được sử dụng l&agrave;m t&aacute; dược.<br />\nTrong c&ocirc;ng nghiệp, s&aacute;p ong l&agrave; một chất nhũ h&oacute;a hiệu quả hay được sử dụng như l&agrave; một loại hương liệu trong sản xuất x&agrave; ph&ograve;ng v&agrave; nước hoa</p>\n\n<p><strong>C&aacute;ch sử dụng s&aacute;p ong</strong></p>\n\n<p>_ Ng&acirc;m với rượu để uống dần<br />\n_ Dưỡng da<br />\n_ L&agrave;m son chống nẻ<br />\nCh&uacute;ng t&ocirc;i sẽ c&oacute; những b&agrave;i viết chi tiết về c&aacute;ch sử dụng của s&aacute;p ong ở những phần sau. Hy vọng được sự quan t&acirc;m của c&aacute;c bạn!</p>\n', 8, '300000', '4075e4f4d0e98dbffdeeda3da8660e5d.jpg', 100, 1402245100),
(26, 'Dầu dừa 500ml', '<p>Dầu dừa nguy&ecirc;n chất tinh khiết c&oacute; thể tẩy sạch hiệu quả lớp trang điểm v&agrave; bụi bẩn b&aacute;m tr&ecirc;n da. Nếu so với c&aacute;c sản phẩm tẩy trang tr&ecirc;n thị trường th&igrave; dầu dừa nguy&ecirc;n chất tinh khiết c&oacute; gi&aacute; th&agrave;nh rẻ hơn, nhưng lại ho&agrave;n to&agrave;n l&agrave; sản phẩm thi&ecirc;n nhi&ecirc;n v&agrave; kh&ocirc;ng c&oacute; h&oacute;a chất. Dầu dừa nguy&ecirc;n chất tinh khiết c&ograve;n c&oacute; t&aacute;c dụng dưỡng ẩm cho da, tăng t&iacute;nh đ&agrave;n hồi của da v&agrave; bổ sung chất dinh dưỡng cho da.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>C&ocirc;ng dụng:</strong></p>\n\n<p>- Giữ ẩm v&agrave; ngăn kh&ocirc; nh&aacute;m da v&agrave;o m&ugrave;a đ&ocirc;ng với: da mặt, da tay, da ch&acirc;n, ngăn kh&ocirc; v&agrave; nứt m&ocirc;i. Lưu giữ vẽ tươi tắn của c&ocirc; g&aacute;i nhiệt đới ngay m&ugrave;a đ&ocirc;ng lạnh kh&ocirc;.</p>\n\n<p>- Chống rạn da cho phụ nữ c&oacute; thai v&agrave; sau sinh.</p>\n\n<p>- Gi&uacute;p cho t&oacute;c giữ ẩm b&oacute;ng mượt m&agrave;, quyến rũ.</p>\n\n<p>- Dưỡng m&ocirc;i, dưỡng mi l&agrave;m cho mi d&agrave;i v&agrave; d&agrave;y</p>\n\n<p>- Massage cơ thể</p>\n\n<p>- Tẩy tế b&agrave;o chết</p>\n\n<p>- Trị th&acirc;m n&aacute;m v&ugrave;ng n&aacute;ch</p>\n\n<p>- Dưỡng da chống nắng.</p>\n\n<p>- Chống hăm t&atilde; cho em b&eacute; sơ sinh.</p>\n\n<p>- D&ugrave;ng để b&ocirc;i c&aacute;c nốt cắn do c&ocirc;n tr&ugrave;ng (muỗi,...)</p>\n\n<p>- Hương thơm tự nhi&ecirc;n tr&aacute;i dừa v&ugrave;ng nhiệt đới gi&uacute;p k&iacute;ch th&iacute;ch cảm x&uacute;c v&agrave; giảm stress những ng&agrave;y gi&oacute; lạnh.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Đặc điểm nổi bật:</strong></p>\n\n<p>- Kh&ocirc;ng c&oacute; chất tẩy trong, cũng như chất tạo m&ugrave;i hương, gi&uacute;p cho h&agrave;m lượng hữu cơ của dầu dừa được nguy&ecirc;n vẹn.</p>\n\n<p>- H&agrave;m lượng axic lauric cao gi&uacute;p kh&aacute;ng khuẩn</p>\n\n<p>&nbsp;</p>\n\n<p><strong>C&aacute;ch d&ugrave;ng:</strong></p>\n\n<p>- B&ocirc;i v&agrave;o c&aacute;c v&ugrave;ng da: da mặt, da to&agrave;n th&acirc;n, m&ocirc;i, mi, b&agrave;n tay, g&oacute;t ch&acirc;n, v&ugrave;ng n&aacute;ch.</p>\n\n<p>- B&ocirc;i trực tiếp v&agrave;o t&oacute;c v&agrave; da đầu, ủ trong v&ograve;ng 15 - 20 ph&uacute;t, rồi gội xả sạch t&oacute;c.</p>\n\n<p>- Cho v&agrave;i giọt dầu dừa v&agrave;o bồn tắm, nước tắm để c&oacute; t&aacute;c dụng tẩy tế b&agrave;o chết, l&agrave;m mềm mượt da</p>\n', 4, '250000', '15c8b98727d4d7132842dfe4e12b9f1c.jpg', 100, 1402547834),
(27, 'Dầu dừa 1 lít', '<p>Dầu dừa nguy&ecirc;n chất tinh khiết c&oacute; thể tẩy sạch hiệu quả lớp trang điểm v&agrave; bụi bẩn b&aacute;m tr&ecirc;n da. Nếu so với c&aacute;c sản phẩm tẩy trang tr&ecirc;n thị trường th&igrave; dầu dừa nguy&ecirc;n chất tinh khiết c&oacute; gi&aacute; th&agrave;nh rẻ hơn, nhưng lại ho&agrave;n to&agrave;n l&agrave; sản phẩm thi&ecirc;n nhi&ecirc;n v&agrave; kh&ocirc;ng c&oacute; h&oacute;a chất. Dầu dừa nguy&ecirc;n chất tinh khiết c&ograve;n c&oacute; t&aacute;c dụng dưỡng ẩm cho da, tăng t&iacute;nh đ&agrave;n hồi của da v&agrave; bổ sung chất dinh dưỡng cho da.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>C&ocirc;ng dụng:</strong></p>\n\n<p>- Giữ ẩm v&agrave; ngăn kh&ocirc; nh&aacute;m da v&agrave;o m&ugrave;a đ&ocirc;ng với: da mặt, da tay, da ch&acirc;n, ngăn kh&ocirc; v&agrave; nứt m&ocirc;i. Lưu giữ vẽ tươi tắn của c&ocirc; g&aacute;i nhiệt đới ngay m&ugrave;a đ&ocirc;ng lạnh kh&ocirc;.</p>\n\n<p>- Chống rạn da cho phụ nữ c&oacute; thai v&agrave; sau sinh.</p>\n\n<p>- Gi&uacute;p cho t&oacute;c giữ ẩm b&oacute;ng mượt m&agrave;, quyến rũ.</p>\n\n<p>- Dưỡng m&ocirc;i, dưỡng mi l&agrave;m cho mi d&agrave;i v&agrave; d&agrave;y</p>\n\n<p>- Massage cơ thể</p>\n\n<p>- Tẩy tế b&agrave;o chết</p>\n\n<p>- Trị th&acirc;m n&aacute;m v&ugrave;ng n&aacute;ch</p>\n\n<p>- Dưỡng da chống nắng.</p>\n\n<p>- Chống hăm t&atilde; cho em b&eacute; sơ sinh.</p>\n\n<p>- D&ugrave;ng để b&ocirc;i c&aacute;c nốt cắn do c&ocirc;n tr&ugrave;ng (muỗi,...)</p>\n\n<p>- Hương thơm tự nhi&ecirc;n tr&aacute;i dừa v&ugrave;ng nhiệt đới gi&uacute;p k&iacute;ch th&iacute;ch cảm x&uacute;c v&agrave; giảm stress những ng&agrave;y gi&oacute; lạnh.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Đặc điểm nổi bật:</strong></p>\n\n<p>- Kh&ocirc;ng c&oacute; chất tẩy trong, cũng như chất tạo m&ugrave;i hương, gi&uacute;p cho h&agrave;m lượng hữu cơ của dầu dừa được nguy&ecirc;n vẹn.</p>\n\n<p>- H&agrave;m lượng axic lauric cao gi&uacute;p kh&aacute;ng khuẩn</p>\n\n<p>&nbsp;</p>\n\n<p><strong>C&aacute;ch d&ugrave;ng:</strong></p>\n\n<p>- B&ocirc;i v&agrave;o c&aacute;c v&ugrave;ng da: da mặt, da to&agrave;n th&acirc;n, m&ocirc;i, mi, b&agrave;n tay, g&oacute;t ch&acirc;n, v&ugrave;ng n&aacute;ch.</p>\n\n<p>- B&ocirc;i trực tiếp v&agrave;o t&oacute;c v&agrave; da đầu, ủ trong v&ograve;ng 15 - 20 ph&uacute;t, rồi gội xả sạch t&oacute;c.</p>\n\n<p>- Cho v&agrave;i giọt dầu dừa v&agrave;o bồn tắm, nước tắm để c&oacute; t&aacute;c dụng tẩy tế b&agrave;o chết, l&agrave;m mềm mượt da</p>\n', 19, '480000', 'f9156b5655244ebacff780d9e83c9059.jpg', 100, 1402547906),
(29, 'Dầu dừa 150ml nắp xịt', '<p>Dầu dừa nguy&ecirc;n chất tinh khiết c&oacute; thể tẩy sạch hiệu quả lớp trang điểm v&agrave; bụi bẩn b&aacute;m tr&ecirc;n da. Nếu so với c&aacute;c sản phẩm tẩy trang tr&ecirc;n thị trường th&igrave; dầu dừa nguy&ecirc;n chất tinh khiết c&oacute; gi&aacute; th&agrave;nh rẻ hơn, nhưng lại ho&agrave;n to&agrave;n l&agrave; sản phẩm thi&ecirc;n nhi&ecirc;n v&agrave; kh&ocirc;ng c&oacute; h&oacute;a chất. Dầu dừa nguy&ecirc;n chất tinh khiết c&ograve;n c&oacute; t&aacute;c dụng dưỡng ẩm cho da, tăng t&iacute;nh đ&agrave;n hồi của da v&agrave; bổ sung chất dinh dưỡng cho da.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>C&ocirc;ng dụng:</strong></p>\n\n<p>- Giữ ẩm v&agrave; ngăn kh&ocirc; nh&aacute;m da v&agrave;o m&ugrave;a đ&ocirc;ng với: da mặt, da tay, da ch&acirc;n, ngăn kh&ocirc; v&agrave; nứt m&ocirc;i. Lưu giữ vẽ tươi tắn của c&ocirc; g&aacute;i nhiệt đới ngay m&ugrave;a đ&ocirc;ng lạnh kh&ocirc;.</p>\n\n<p>- Chống rạn da cho phụ nữ c&oacute; thai v&agrave; sau sinh.</p>\n\n<p>- Gi&uacute;p cho t&oacute;c giữ ẩm b&oacute;ng mượt m&agrave;, quyến rũ.</p>\n\n<p>- Dưỡng m&ocirc;i, dưỡng mi l&agrave;m cho mi d&agrave;i v&agrave; d&agrave;y</p>\n\n<p>- Massage cơ thể</p>\n\n<p>- Tẩy tế b&agrave;o chết</p>\n\n<p>- Trị th&acirc;m n&aacute;m v&ugrave;ng n&aacute;ch</p>\n\n<p>- Dưỡng da chống nắng.</p>\n\n<p>- Chống hăm t&atilde; cho em b&eacute; sơ sinh.</p>\n\n<p>- D&ugrave;ng để b&ocirc;i c&aacute;c nốt cắn do c&ocirc;n tr&ugrave;ng (muỗi,...)</p>\n\n<p>- Hương thơm tự nhi&ecirc;n tr&aacute;i dừa v&ugrave;ng nhiệt đới gi&uacute;p k&iacute;ch th&iacute;ch cảm x&uacute;c v&agrave; giảm stress những ng&agrave;y gi&oacute; lạnh.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Đặc điểm nổi bật:</strong></p>\n\n<p>- Kh&ocirc;ng c&oacute; chất tẩy trong, cũng như chất tạo m&ugrave;i hương, gi&uacute;p cho h&agrave;m lượng hữu cơ của dầu dừa được nguy&ecirc;n vẹn.</p>\n\n<p>- H&agrave;m lượng axic lauric cao gi&uacute;p kh&aacute;ng khuẩn</p>\n\n<p>&nbsp;</p>\n\n<p><strong>C&aacute;ch d&ugrave;ng:</strong></p>\n\n<p>- B&ocirc;i v&agrave;o c&aacute;c v&ugrave;ng da: da mặt, da to&agrave;n th&acirc;n, m&ocirc;i, mi, b&agrave;n tay, g&oacute;t ch&acirc;n, v&ugrave;ng n&aacute;ch.</p>\n\n<p>- B&ocirc;i trực tiếp v&agrave;o t&oacute;c v&agrave; da đầu, ủ trong v&ograve;ng 15 - 20 ph&uacute;t, rồi gội xả sạch t&oacute;c.</p>\n\n<p>- Cho v&agrave;i giọt dầu dừa v&agrave;o bồn tắm, nước tắm để c&oacute; t&aacute;c dụng tẩy tế b&agrave;o chết, l&agrave;m mềm mượt da</p>\n', 4, '80000', 'babbb733b1962c2bb78e4bcfa02e8a66.jpg', 100, 1403598013),
(30, 'Sữa ong chúa 100g', '<p><strong>I. T&Aacute;C DỤNG &amp; C&Ocirc;NG DỤNG THẦN K&Igrave; CỦA SỮA ONG CH&Uacute;A</strong></p>\n\n<p>Sữa Ong Ch&uacute;a l&agrave; chất dinh dưỡng đặc biệt qu&yacute; được thu thập từ mật hoa, chất đạm v&agrave; nhiều sinh tố bởi những con ong thợ c&ugrave;ng với tuyến họng của n&oacute; tạo th&agrave;nh Sữa Ong Ch&uacute;a. Hỗn dược n&agrave;y l&agrave; nguồn thức ăn duy nhất của Ong Ch&uacute;a n&ecirc;n được gọi l&agrave; Sữa Ong Ch&uacute;a. V&agrave; đ&acirc;y cũng l&agrave; thức ăn gi&uacute;p con Ong Ch&uacute;a sống l&acirc;u hơn những con ong thợ đến 40 lần. (V&igrave; được ăn thức ăn đặc biệt n&agrave;y suốt đời n&ecirc;n tuổi thọ trung b&igrave;nh của con Ong Ch&uacute;a l&agrave; từ 5-6 năm, trong khi đ&oacute; ong thợ chỉ được ăn thức ăn n&agrave;y trong 3 ng&agrave;y sau khi nở n&ecirc;n tuổi thọ chỉ được từ 4-6 tuần).</p>\n\n<p>Sản phẩm n&agrave;y được coi l&agrave; cao cấp, v&agrave; qu&yacute; nhất trong c&aacute;c sản phẩm ong v&igrave; n&oacute; chứa những chất dinh dưỡng c&oacute; gi&aacute; trị tuyệt vời bao gồm 22 Amino acids cần thiết cho hoạt động của cơ thể v&agrave; nhiều h&agrave;m lượng sinh tố quan trọng như B1, B2 (riboflavin), niacin, B5 (pantothenic acid), B6, biotin, folic acid, B12, inositol, v&agrave; choline. Ngo&agrave;i ra Sữa Ong Ch&uacute;a c&ograve;n chứa một số lượng vitamin A, C, D, v&agrave; E c&ugrave;ng những kho&aacute;ng chất như canxi, đồng, chất sắt, photpho, kali, silic, lưu huỳnh, hầu hết l&agrave; những chất dinh dưỡng cần thiết.</p>\n\n<p>* Sữa Ong Ch&uacute;a Gi&uacute;p tăng qu&aacute; tr&igrave;nh trao đổi chất nhờ đ&oacute; cơ thể trẻ l&acirc;u, l&agrave;n da mềm mại, tươi trẻ, x&oacute;a bỏ nếp nhăn, duy tr&igrave; sắc đẹp.</p>\n\n<p>* Sữa Ong Ch&uacute;a Gi&uacute;p bảo vệ sức khỏe, chống sự gi&agrave; nua, n&acirc;ng cao tuổi thọ.</p>\n\n<p>* Sữa Ong Ch&uacute;a Gi&uacute;p sửa chữa những tế b&agrave;o da bị tổn thương do h&oacute;a chất, tia xạ, tia cực t&iacute;m g&acirc;y ra.</p>\n\n<p>* Sữa Ong Ch&uacute;a chứa chất kh&aacute;ng sinh tự nhi&ecirc;n (anti-bacterial) gi&uacute;p da chống mụn, ti&ecirc;u mụn, chống vi&ecirc;m da.</p>\n\n<p>* Sữa Ong Ch&uacute;a Gi&uacute;p da chống l&atilde;o h&oacute;a, n&aacute;m, sạm do t&aacute;c động của m&ocirc;i trường v&agrave; nhất l&agrave; do thay đổi nội tiết tố ở phụ nữ (trong thời kỳ m&atilde;n kinh), v&igrave; Sữa Ong Ch&uacute;a l&agrave;m thay đổi tận gốc của nguy&ecirc;n nh&acirc;n g&acirc;y n&aacute;m da, sạm da, gi&uacute;p da dần dần trở n&ecirc;n trắng hồng, căng mịn.</p>\n\n<p>* Sữa Ong Ch&uacute;a Gi&uacute;p an thần, ngủ ngon, ngủ y&ecirc;n giấc, ph&ograve;ng chống mất ngủ.</p>\n\n<p>* Sữa Ong Ch&uacute;a Gi&uacute;p trị bệnh cao m&aacute;u, cao huyết &aacute;p, mỡ trong m&aacute;u, tiểu đường, vi&ecirc;m gan A,B,C,D v&agrave; c&aacute;c bệnh về gan.</p>\n\n<p>* Sữa Ong Ch&uacute;a Gi&uacute;p ph&aacute;t triển tốt thể lực, tr&iacute; tuệ minh mẫn, tăng cường nh&atilde;n lực, l&agrave;m s&aacute;ng mắt.</p>\n\n<p>* Sữa Ong Ch&uacute;a Gi&uacute;p phục hồi khả năng t&igrave;nh dục dục ở cả hai giới, ổn định sự rối loạn k&iacute;ch th&iacute;ch tố sinh l&yacute;, liệt dương ở ph&aacute;i nam, hiếm muộn, v&ocirc; sinh.</p>\n\n<p>* Sữa Ong Ch&uacute;a Gi&uacute;p c&aacute;c trường hợp suy dinh dưỡng, tinh thần mệt mỏi, cơ thể suy nhược, sức khỏe kiệt quệ do lao t&acirc;m, lao lực qu&aacute; sức.</p>\n\n<p>* Sữa Ong Ch&uacute;a Gi&uacute;p trị bệnh &acirc;u lo, phiền muộn, k&iacute;ch động, nhờ đ&oacute; trị được bệnh gi&agrave; trước tuổi v&igrave; chứng mất ngủ.</p>\n\n<p>* Sữa Ong Ch&uacute;a Gi&uacute;p c&acirc;n bằng k&iacute;ch th&iacute;ch tố, nhất l&agrave; ở phụ nữ trong thời kỳ m&atilde;n kinh.</p>\n\n<p>* Sữa Ong Ch&uacute;a Gi&uacute;p c&aacute;c trường hợp chậm ph&aacute;t triển ở trẻ em.</p>\n\n<p>* Sữa Ong Ch&uacute;a Gi&uacute;p c&acirc;n bằng trọng lượng, ph&ograve;ng chống rụng t&oacute;c, bổ xương.</p>\n\n<p>* Sữa Ong Ch&uacute;a Ngừa tai biến mạch m&aacute;u, sơ cứng tim mạch.</p>\n\n<p>* Sữa Ong Ch&uacute;a Gi&uacute;p trị c&aacute;c bệnh vi&ecirc;m đường ruột, đau bao tử nhờ sự hiện diện của Pantothenic.</p>\n\n<p>* Sữa Ong Ch&uacute;a Gi&uacute;p ph&ograve;ng trị bệnh hen, suyễn, phong thấp, vi&ecirc;m khớp.</p>\n\n<p>Trong số những &iacute;ch lợi liệt k&ecirc; ở tr&ecirc;n của Sữa Ong Ch&uacute;a:</p>\n\n<p>&bull; Đẹp Da</p>\n\n<p>&ndash; Hầu như ai uống Sữa Ong Ch&uacute;a được một thời gian đều thấy l&agrave;n da của m&igrave;nh đẹp hẳn ra, mịn m&agrave;ng v&agrave; trắng hồng l&ecirc;n, da căng v&agrave; b&oacute;ng khiến cho c&aacute;c vết nhăn kh&oacute;e mắt, kh&oacute;e miệng, c&aacute;c vết nhăn tr&ecirc;n tr&aacute;n, vết nhăn ở cổ cũng biến mất đi khiến cho nhiều người tr&ocirc;ng trẻ hẳn ra, bạn b&egrave; gặp cứ tưởng l&agrave; mới đi căng da mặt. Ngo&agrave;i ra Sữa Ong Ch&uacute;a cũng gi&uacute;p l&agrave;m tan biến c&aacute;c vết n&aacute;m tr&ecirc;n da mặt, gi&uacute;p giảm bớt mụn v&agrave; l&agrave;m biến đi c&aacute;c vết đồi mồi, t&agrave;n nhang, c&aacute;c vết th&acirc;m đen tr&ecirc;n da. Thật vậy, c&aacute;c nghi&ecirc;n cứu đ&atilde; chứng minh Sữa Ong Ch&uacute;a l&agrave;m tăng sinh v&agrave; k&eacute;o d&agrave;i tuổi thọ tế b&agrave;o da r&otilde; rệt, gi&uacute;p da trắng hồng, căng mịn, ngo&agrave;i ra c&ograve;n c&oacute; khả năng sửa chữa những tế b&agrave;o da bị tổn thương do h&oacute;a chất, tia xạ, tia cực t&iacute;m g&acirc;y ra. Với c&aacute;c trường hợp da bị l&atilde;o h&oacute;a, n&aacute;m, sạm do t&aacute;c động của m&ocirc;i trường v&agrave; nhất l&agrave; do thay đổi nội tiết tố ở phụ nữ, Sữa Ong Ch&uacute;a được chứng minh l&agrave; rất hiệu nghiệm. Ngo&agrave;i c&aacute;c vitamin, DHA, biotin, n&oacute; c&ograve;n cung cấp lượng ho&oacute;c m&ocirc;n đ&aacute;ng kể cho cơ thể, l&agrave;m thay đổi tận gốc của nguy&ecirc;n nh&acirc;n g&acirc;y n&aacute;m da, sạm da. Sữa Ong Ch&uacute;a cũng l&agrave; lựa chọn h&agrave;ng đầu của c&aacute;c mỹ phẩm cao cấp.</p>\n\n<p>&bull; Mất Ngủ Kinh Ni&ecirc;n &ndash; Phần lớn những người mất ngủ sau khi uống Sữa Ong Ch&uacute;a được một thời gian ngắn th&igrave; đ&atilde; c&oacute; được giấc ngủ rất ngon &ndash; tỉ lệ th&agrave;nh c&ocirc;ng rất cao, c&oacute; thể n&oacute;i l&agrave; từ 80 đến 90 phần trăm &ndash; kể cả những người đ&atilde; d&ugrave;ng thuốc ngủ nhiều năm nay. Sữa Ong Ch&uacute;a gi&uacute;p cho họ ngủ say hơn, ngủ l&acirc;u hơn v&agrave; khi thức giấc th&igrave; người cũng khỏe khoắn chứ kh&ocirc;ng mệt mỏi kh&oacute; chịu như l&uacute;c d&ugrave;ng c&aacute;c loại thuốc ngủ của T&acirc;y Y.</p>\n\n<p>&bull; Tăng Cường Sinh L&yacute; Cho Nam Lẫn Nữ &ndash; Sữa Ong Ch&uacute;a rất c&oacute; &iacute;ch lợi gi&uacute;p tăng cường sinh l&yacute; cho đ&agrave;n &ocirc;ng lẫn đ&agrave;n b&agrave;, v&agrave; kh&ocirc;ng như c&aacute;c loại thuốc t&acirc;y chỉ gi&uacute;p cấp thời, Sữa Ong Ch&uacute;a gi&uacute;p tận gốc m&agrave; ho&agrave;n to&agrave;n kh&ocirc;ng g&acirc;y phản ứng phụ.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>II.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>C&Aacute;CH SỬ DỤNG SỮA ONG CH&Uacute;A</strong></p>\n\n<p><strong>&nbsp;</strong></p>\n\n<p><strong>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>D&ugrave;ng để uống:</strong></p>\n\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Người lớn: Mỗi lần 01 th&igrave;a cafe đen . Ng&agrave;y 1~2 lần, ăn trực tiếp sau đ&oacute; uống nước tr&aacute;ng miệng ( hơi gắt cổ ch&uacute;t x&iacute;u nhưng kh&ocirc;ng sao), C&oacute; thể trộn với ch&uacute;t mật ong rồi h&ograve;a lo&atilde;ng với nước m&aacute;t uống hoặc pha với nước tr&aacute;i c&acirc;y để dể uống hơn.</p>\n\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trẻ em tr&ecirc;n 2 tuổi: cho 1 giọt v&agrave;o b&igrave;nh sữa của b&eacute; để b&eacute; ti. Ng&agrave;y 2 lần&nbsp; ( Chỉ &aacute;p dụng cho b&eacute; c&ograve;i cọc, biếng ăn, nếu b&eacute; ph&aacute;t triễn b&igrave;nh thường th&igrave; kh&ocirc;ng cần thiết )</p>\n\n<p>&nbsp;</p>\n\n<p><strong><em>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></strong><strong><em>D&ugrave;ng để dưỡng da</em></strong></p>\n\n<p><strong><em>a.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></strong><em>Dưỡng da</em>:</p>\n\n<p>Mỗi ng&agrave;y thoa l&ecirc;n da mặt một lớp mỏng, m&aacute;t xa rồi để kh&ocirc; &iacute;t nhất 30 ph&uacute;t sau đ&oacute; rữa sạch. L&agrave;m đều đặn hằng ng&agrave;y trong bạn sẽ thấy hết mụn c&aacute;m, trứng c&aacute;, lỗ ch&acirc;n l&ocirc;ng se laị v&agrave; d&ugrave;ng 1 thời gian sẽ thấy hết t&agrave;n nhang.</p>\n\n<p>&nbsp;</p>\n\n<p><strong><em>b.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></strong><em>Phục hồi tuổi thanh xu&acirc;n</em></p>\n\n<p>Sử dụng sữa ch&uacute;a 5~10g/ng&agrave;y ( khoảng 1 muỗng cafe đen pha lo&atilde;ng với nước rồi uống, hoặc pha chung với nước mật ong ) li&ecirc;n tục trong 40 ng&agrave;y sẽ gi&uacute;p th&acirc;n thể phục hồi được tuổi xu&acirc;n, da dẻ hồng h&agrave;o, mịn m&agrave;ng.</p>\n\n<p>&nbsp;Do chứa nhiều sinh tố đặt biệt l&agrave; axit Panthotenic c&oacute; t&aacute;c dụng t&aacute;i tạo tế b&agrave;o da mới cho n&ecirc;n Sữa ong ch&uacute;a được coi l&agrave; mỹ phẩm dưỡng da tốt nhất v&agrave; được coi trọng đặc biệt.</p>\n\n<ul>\n	<li>C&aacute;ch l&agrave;m: Rửa mặt sạch bằng nước ấm</li>\n</ul>\n\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Xoa mật ong l&ecirc;n mặt để tẩy tế b&agrave;o chết, sừng ho&aacute;. Để khoảng 5 ph&uacute;t sau đ&oacute; rửa sạch bằng nước ấm.</p>\n\n<p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Xoa hỗn hợp nước + sữa ch&uacute;a theo tỷ lệ 2/1. Để từ 5 đến 10 ph&uacute;t khi n&agrave;o kh&ocirc; kh&ocirc;ng d&iacute;nh tay th&igrave; lại d&ugrave;ng ch&uacute;t nước lạnh xoa l&agrave;m ẩm, lấy c&aacute;c đầu ng&oacute;n tay g&otilde; nhẹ l&ecirc;n da mặt, Lặp lại khoảng v&agrave;i lần cho sữa ch&uacute;a thấm hết v&agrave;o da, sau đ&oacute; rửa sạch mặt bằng nước lạnh. C&oacute; thể c&oacute; cảm gi&aacute;c hơi r&aacute;t nhưng kh&ocirc;ng sao.</p>\n\n<p>L&agrave;m thường xuy&ecirc;n c&aacute;ch n&agrave;y v&agrave;o buổi tối, kh&ocirc;ng l&acirc;u sau sẽ c&oacute; được l&agrave;n da như &yacute;, hồng h&agrave;o, mịn m&agrave;ng, xo&aacute; nếp nhăn</p>\n\n<p>Sử dụng đ&uacute;ng c&aacute;ch mật ong, phấn hoa, sữa ch&uacute;a h&agrave;ng ng&agrave;y sẽ gi&uacute;p ch&uacute;ng ta khoẻ mạnh, tươi trẻ v&agrave; trường thọ.</p>\n', 20, '190000', 'd0460391ec89543ab839d0329c162408.jpeg', 100, 1403858992),
(31, 'Son môi sáp ong dầu dừa', '<ul>\n	<li>Kết hợp ho&agrave;n hảo Dầu dừa tinh khiết v&agrave; S&aacute;p Ong thi&ecirc;n nhi&ecirc;n tạo n&ecirc;n c&acirc;y son dưỡng m&ocirc;i c&oacute; nguồn gốc thi&ecirc;n nhi&ecirc;n ho&agrave;n to&agrave;n.</li>\n	<li>Gi&uacute;p cho m&ocirc;i bạn lu&ocirc;n được dưỡng ẩm, cung cấp vitamin v&agrave; kh&aacute;ng khuẩn.</li>\n	<li>Từ nay bạn sẽ kh&ocirc;ng lo kh&ocirc; m&ocirc;i, kh&ocirc;ng lo h&oacute;a chất, m&ocirc;i bạn lu&ocirc;n tươi đẹp.</li>\n	<li>Người đ&agrave;n &ocirc;ng của bạn sẽ tự tin khi được Kiss bạn.</li>\n	<li>Thiết kế nhỏ gọn cho bạn dễ d&agrave;ng mang theo mọi nơi.</li>\n</ul>\n', 4, '50000', '28d666caa66276889ecb21de2da76391.jpg', 100, 1404047555),
(32, 'Xà bông hoa hồi', '<h1>X&agrave; b&ocirc;ng Hand-made l&agrave;m từ Dầu dừa (100 Gram) 11 loại: Nghệ V&agrave;ng, Tr&agrave; Xanh, Sả, Chocolate, C&agrave; Ph&ecirc; rang xay, Hoa Hồi, Sữa Gạo, Tr&agrave; Đen, Bạc h&agrave;, Quế, Mật Ong S&aacute;p Ong</h1>\n\n<p>X&agrave; ph&ograve;ng hand-made TiBi l&agrave; một trong những sản phẩm đang được người ti&ecirc;u d&ugrave;ng, sử dụng rộng r&atilde;i. Tuy kh&ocirc;ng c&oacute; m&ugrave;i hương nồng n&agrave;n như sản phẩm c&ocirc;ng nghiệp nhưng x&agrave; ph&ograve;ng hand-made vẫn lưu h&agrave;nh tr&ecirc;n mọi nẻo đường một c&aacute;ch tự tin. Nhiều người l&ugrave;ng sục để t&igrave;m mua cho được b&aacute;nh x&agrave; ph&ograve;ng loại n&agrave;y l&agrave;m qu&agrave; tặng cho những người m&igrave;nh y&ecirc;u qu&yacute; d&ugrave; ch&uacute;ng c&oacute; gi&aacute; th&agrave;nh kh&aacute; cao.</p>\n\n<p>- Hoa Hồi: Hoa hồi từ v&ugrave;ng n&uacute;i nguy&ecirc;n sơ của Lạng Sơn-VN, với trans anethol, c&ugrave;ng hơn 20 hợp chất kh&aacute;c gi&uacute;p kh&aacute;ng khuẩn, giảm vi&ecirc;m, chống sưng tấy, trị nấm ngo&agrave;i da, với hương vị ngọt ng&agrave;o v&agrave; t&aacute;c dụng chuy&ecirc;n s&acirc;u cho l&agrave;n da.<br />\n<br />\n&nbsp;</p>\n', 21, '35000', 'f32c263dd182ee94138292daa119a512.jpg', 100, 1404048290),
(33, 'Xà bông trà đen', '<h1>X&agrave; b&ocirc;ng Hand-made l&agrave;m từ Dầu dừa (100 Gram) 11 loại: Nghệ V&agrave;ng, Tr&agrave; Xanh, Sả, Chocolate, C&agrave; Ph&ecirc; rang xay, Hoa Hồi, Sữa Gạo, Tr&agrave; Đen, Bạc h&agrave;, Quế, Mật Ong S&aacute;p Ong</h1>\n\n<p>X&agrave; ph&ograve;ng hand-made TiBi l&agrave; một trong những sản phẩm đang được người ti&ecirc;u d&ugrave;ng, sử dụng rộng r&atilde;i. Tuy kh&ocirc;ng c&oacute; m&ugrave;i hương nồng n&agrave;n như sản phẩm c&ocirc;ng nghiệp nhưng x&agrave; ph&ograve;ng hand-made vẫn lưu h&agrave;nh tr&ecirc;n mọi nẻo đường một c&aacute;ch tự tin. Nhiều người l&ugrave;ng sục để t&igrave;m mua cho được b&aacute;nh x&agrave; ph&ograve;ng loại n&agrave;y l&agrave;m qu&agrave; tặng cho những người m&igrave;nh y&ecirc;u qu&yacute; d&ugrave; ch&uacute;ng c&oacute; gi&aacute; th&agrave;nh kh&aacute; cao.</p>\n\n<p>- Tr&agrave; đen: Tr&agrave; đen với những tinh chất tuyệt vời m&agrave; Tạo h&oacute;a đ&atilde; ban tặng, Người Anh đ&atilde; bi&ecirc;t d&ugrave;ng Tr&agrave; đen để l&agrave;m se lỗ ch&acirc;n l&ocirc;ng, chống oxy h&oacute;a cho da, giảm mụn, giảm ch&aacute;y nắng, trắng da. Thật tuyệt khi kết hợp với dầu dừa nguy&ecirc;n chất v&agrave; Vit E để bảo vệ l&agrave;n da.</p>\n', 21, '35000', '0467516e641817b331ed7b2be2f47d67.jpg', 100, 1404048373),
(34, 'Xà bông sữa gạo', '<h1>X&agrave; b&ocirc;ng Hand-made l&agrave;m từ Dầu dừa (100 Gram) 11 loại: Nghệ V&agrave;ng, Tr&agrave; Xanh, Sả, Chocolate, C&agrave; Ph&ecirc; rang xay, Hoa Hồi, Sữa Gạo, Tr&agrave; Đen, Bạc h&agrave;, Quế, Mật Ong S&aacute;p Ong</h1>\n\n<p>X&agrave; ph&ograve;ng hand-made TiBi l&agrave; một trong những sản phẩm đang được người ti&ecirc;u d&ugrave;ng, sử dụng rộng r&atilde;i. Tuy kh&ocirc;ng c&oacute; m&ugrave;i hương nồng n&agrave;n như sản phẩm c&ocirc;ng nghiệp nhưng x&agrave; ph&ograve;ng hand-made vẫn lưu h&agrave;nh tr&ecirc;n mọi nẻo đường một c&aacute;ch tự tin. Nhiều người l&ugrave;ng sục để t&igrave;m mua cho được b&aacute;nh x&agrave; ph&ograve;ng loại n&agrave;y l&agrave;m qu&agrave; tặng cho những người m&igrave;nh y&ecirc;u qu&yacute; d&ugrave; ch&uacute;ng c&oacute; gi&aacute; th&agrave;nh kh&aacute; cao.</p>\n\n<p>- Sữa gạo: C&oacute; 2 lựa chọn: + Tinh khiết (dầu dừa, sữa gạo, Vit E) + Hương bạc h&agrave; thơm m&aacute;t ( dầu dừa, sữa gạo, Vit E, Bạc h&agrave;) Dầu dừa v&agrave; sữa gạo c&oacute; Vit B5 gi&uacute;p đẹp da, trắng da tự nhi&ecirc;n, ngăn ngừa l&atilde;o h&oacute;a, cho da hồng h&agrave;o, b&oacute;ng đẹp, giảm mụn, th&acirc;m n&aacute;m, gi&uacute;p dưỡng ẩm cho da tự nhi&ecirc;n. Bạc h&agrave; tươi m&aacute;t, hương thơm sảng kho&aacute;i, refesh từng gi&acirc;y.<br />\n<br />\n&nbsp;</p>\n', 21, '35000', '1e5578fc1c93764ac61ef9552ab9363b.jpg', 100, 1404048449),
(35, 'Xà bông hương quế', '<h1>X&agrave; b&ocirc;ng Hand-made l&agrave;m từ Dầu dừa (100 Gram) 11 loại: Nghệ V&agrave;ng, Tr&agrave; Xanh, Sả, Chocolate, C&agrave; Ph&ecirc; rang xay, Hoa Hồi, Sữa Gạo, Tr&agrave; Đen, Bạc h&agrave;, Quế, Mật Ong S&aacute;p Ong</h1>\n\n<p>X&agrave; ph&ograve;ng hand-made TiBi l&agrave; một trong những sản phẩm đang được người ti&ecirc;u d&ugrave;ng, sử dụng rộng r&atilde;i. Tuy kh&ocirc;ng c&oacute; m&ugrave;i hương nồng n&agrave;n như sản phẩm c&ocirc;ng nghiệp nhưng x&agrave; ph&ograve;ng hand-made vẫn lưu h&agrave;nh tr&ecirc;n mọi nẻo đường một c&aacute;ch tự tin. Nhiều người l&ugrave;ng sục để t&igrave;m mua cho được b&aacute;nh x&agrave; ph&ograve;ng loại n&agrave;y l&agrave;m qu&agrave; tặng cho những người m&igrave;nh y&ecirc;u qu&yacute; d&ugrave; ch&uacute;ng c&oacute; gi&aacute; th&agrave;nh kh&aacute; cao.</p>\n\n<p>- Quế: với h&agrave;m lượng kho&aacute;ng chất dồi d&agrave;o gi&uacute;p trị mụn cho da (bay đi những nốt mụn đ&aacute;ng gh&eacute;t, mụn l&agrave; kẻ th&ugrave; số 1 của ph&aacute;i đẹp m&agrave; !!! ), Quế gi&uacute;p sạch da, tẩy tế b&agrave;o chết, cho l&agrave;n da mềm mại, min m&agrave;ng. Ph&ugrave; hợp cho mọi loại da. Đặc biệt da mụn, tốt cho việc tẩy tế b&agrave;o chết. X&agrave; ph&ograve;ng c&oacute; c&aacute;c hạt Quế gi&uacute;p Massage tối ưu cho ch&uacute;ng m&igrave;nh nh&eacute;.<br />\n&nbsp;</p>\n', 21, '35000', 'b02bb00f8de4bcded8c577d599115036.jpg', 100, 1404048532),
(36, 'Xà bông hương sả', '<h1>X&agrave; b&ocirc;ng Hand-made l&agrave;m từ Dầu dừa (100 Gram) 11 loại: Nghệ V&agrave;ng, Tr&agrave; Xanh, Sả, Chocolate, C&agrave; Ph&ecirc; rang xay, Hoa Hồi, Sữa Gạo, Tr&agrave; Đen, Bạc h&agrave;, Quế, Mật Ong S&aacute;p Ong</h1>\n\n<p>X&agrave; ph&ograve;ng hand-made TiBi l&agrave; một trong những sản phẩm đang được người ti&ecirc;u d&ugrave;ng, sử dụng rộng r&atilde;i. Tuy kh&ocirc;ng c&oacute; m&ugrave;i hương nồng n&agrave;n như sản phẩm c&ocirc;ng nghiệp nhưng x&agrave; ph&ograve;ng hand-made vẫn lưu h&agrave;nh tr&ecirc;n mọi nẻo đường một c&aacute;ch tự tin. Nhiều người l&ugrave;ng sục để t&igrave;m mua cho được b&aacute;nh x&agrave; ph&ograve;ng loại n&agrave;y l&agrave;m qu&agrave; tặng cho những người m&igrave;nh y&ecirc;u qu&yacute; d&ugrave; ch&uacute;ng c&oacute; gi&aacute; th&agrave;nh kh&aacute; cao.</p>\n\n<p>- Hương Sả: Sả l&agrave; 1 trong nhiều c&aacute;ch l&agrave;m đẹp của c&aacute;c t&igrave;nh y&ecirc;u Th&aacute;i Lan, Tinh dầu sả cải thiện t&igrave;nh trạng da như mụn trứng c&aacute;, mụn nhọt cứng đầu, gi&uacute;p săn chắc c&aacute;c m&ocirc; dưới da, gi&uacute;p thư th&aacute;i tinh thần.<br />\n&nbsp;</p>\n', 21, '35000', '61b86565c355df754e54cf6f8f09e4a1.jpg', 100, 1404048777),
(37, 'Xà bông café', '<h1>X&agrave; b&ocirc;ng Hand-made l&agrave;m từ Dầu dừa (100 Gram) 11 loại: Nghệ V&agrave;ng, Tr&agrave; Xanh, Sả, Chocolate, C&agrave; Ph&ecirc; rang xay, Hoa Hồi, Sữa Gạo, Tr&agrave; Đen, Bạc h&agrave;, Quế, Mật Ong S&aacute;p Ong</h1>\n\n<p>X&agrave; ph&ograve;ng hand-made TiBi l&agrave; một trong những sản phẩm đang được người ti&ecirc;u d&ugrave;ng, sử dụng rộng r&atilde;i. Tuy kh&ocirc;ng c&oacute; m&ugrave;i hương nồng n&agrave;n như sản phẩm c&ocirc;ng nghiệp nhưng x&agrave; ph&ograve;ng hand-made vẫn lưu h&agrave;nh tr&ecirc;n mọi nẻo đường một c&aacute;ch tự tin. Nhiều người l&ugrave;ng sục để t&igrave;m mua cho được b&aacute;nh x&agrave; ph&ograve;ng loại n&agrave;y l&agrave;m qu&agrave; tặng cho những người m&igrave;nh y&ecirc;u qu&yacute; d&ugrave; ch&uacute;ng c&oacute; gi&aacute; th&agrave;nh kh&aacute; cao.</p>\n\n<p>- C&agrave; ph&ecirc; rang say:B&atilde; Cafe chứa caffeine gi&uacute;p tăng lượng m&aacute;u, gi&agrave;u axit linoleic ngăn ngừa l&atilde;o h&oacute;a, chống vi&ecirc;m v&agrave; t&iacute;nh đ&agrave;n hồi cho da, trắng da. Cafe c&oacute; nhiều dưỡng chất, ngăn ngừa việc h&igrave;nh th&agrave;nh nếp nhăn, tẩy tế b&agrave;o chết, trả lại độ trắng mịn cho l&agrave;n da. Ch&uacute;ng minh cứ ki&ecirc;n tr&igrave; &quot;l&agrave;m đep&quot; với những g&igrave; thi&ecirc;n nhi&ecirc;n ban tặng, ch&uacute;ng m&igrave;nh sẽ nhận được những &quot;sự đ&aacute;p trả&quot; tuyệt vời nhất. Ph&ugrave; hợp cho mọi loại da.<br />\n&nbsp;</p>\n', 21, '35000', 'f4e75a234a44e78c23e21daef0e7b46e.jpg', 100, 1404048923),
(38, 'Xà bông trà xanh', '<h1>X&agrave; b&ocirc;ng Hand-made l&agrave;m từ Dầu dừa (100 Gram) 11 loại: Nghệ V&agrave;ng, Tr&agrave; Xanh, Sả, Chocolate, C&agrave; Ph&ecirc; rang xay, Hoa Hồi, Sữa Gạo, Tr&agrave; Đen, Bạc h&agrave;, Quế, Mật Ong S&aacute;p Ong</h1>\n\n<p>X&agrave; ph&ograve;ng hand-made TiBi l&agrave; một trong những sản phẩm đang được người ti&ecirc;u d&ugrave;ng, sử dụng rộng r&atilde;i. Tuy kh&ocirc;ng c&oacute; m&ugrave;i hương nồng n&agrave;n như sản phẩm c&ocirc;ng nghiệp nhưng x&agrave; ph&ograve;ng hand-made vẫn lưu h&agrave;nh tr&ecirc;n mọi nẻo đường một c&aacute;ch tự tin. Nhiều người l&ugrave;ng sục để t&igrave;m mua cho được b&aacute;nh x&agrave; ph&ograve;ng loại n&agrave;y l&agrave;m qu&agrave; tặng cho những người m&igrave;nh y&ecirc;u qu&yacute; d&ugrave; ch&uacute;ng c&oacute; gi&aacute; th&agrave;nh kh&aacute; cao.</p>\n\n<p>- Tr&agrave; xanh: Tr&agrave; xanh chống l&atilde;o h&oacute;a da, chống oxy h&oacute;a cho da, giảm mụn, giảm ch&aacute;y nắng, trắng da.<br />\n&nbsp;</p>\n', 21, '35000', '311694440723730dafe66bbcb947e263.jpg', 100, 1404049026),
(39, 'Xà bông mật ong', '<h1>X&agrave; b&ocirc;ng Hand-made l&agrave;m từ Dầu dừa (100 Gram) 11 loại: Nghệ V&agrave;ng, Tr&agrave; Xanh, Sả, Chocolate, C&agrave; Ph&ecirc; rang xay, Hoa Hồi, Sữa Gạo, Tr&agrave; Đen, Bạc h&agrave;, Quế, Mật Ong S&aacute;p Ong</h1>\n\n<p>X&agrave; ph&ograve;ng hand-made TiBi l&agrave; một trong những sản phẩm đang được người ti&ecirc;u d&ugrave;ng, sử dụng rộng r&atilde;i. Tuy kh&ocirc;ng c&oacute; m&ugrave;i hương nồng n&agrave;n như sản phẩm c&ocirc;ng nghiệp nhưng x&agrave; ph&ograve;ng hand-made vẫn lưu h&agrave;nh tr&ecirc;n mọi nẻo đường một c&aacute;ch tự tin. Nhiều người l&ugrave;ng sục để t&igrave;m mua cho được b&aacute;nh x&agrave; ph&ograve;ng loại n&agrave;y l&agrave;m qu&agrave; tặng cho những người m&igrave;nh y&ecirc;u qu&yacute; d&ugrave; ch&uacute;ng c&oacute; gi&aacute; th&agrave;nh kh&aacute; cao.</p>\n\n<p>- Mật Ong s&aacute;p ong: Kh&ocirc;ng c&ograve;n xa lạ g&igrave; với Mật Ong n&egrave;, Mật Ong l&agrave; 1 trong những Thi&ecirc;n Phẩm thi&ecirc;n nhi&ecirc;n m&agrave; Tạo H&oacute;a đ&atilde; ban tặng cho tất cả, đặc biệt cho c&aacute;c Lady kh&ocirc;ng ngừng chăm s&oacute;c cơ thể v&agrave; trau dồi kiến thức. Mật ong gi&uacute;p da duy tr&igrave; độ ẩm cần thiết, nhiều kho&aacute;ng chất thiết yếu, chứa nhiều Vitamin, chống oxy h&oacute;a, kh&aacute;ng khuẩn, trẻ h&oacute;a da, gi&uacute;p đ&agrave;n hồi da, mềm mại v&agrave; gi&uacute;p đẹp da<br />\n&nbsp;</p>\n', 21, '35000', '5b00ecf98bf9560b09f36bbf486d006f.jpg', 100, 1404049105),
(40, 'Mật ong rừng 1 lít', '<p>MẬT ONG RỪNG SƠN L&Acirc;M 100% TỪ THI&Ecirc;N NHI&Ecirc;N NGUY&Ecirc;N PHẤN HOA</p>\n', 6, '500000', '6a760854b87317652ce25442c28efef9.jpg', 100, 1404102681),
(41, 'Mật ong xuất khẩu 1L', '<table>\n	<caption><strong>Mật ong</strong></caption>\n	<tbody>\n		<tr>\n			<th colspan="2">Gi&aacute; trị dinh dưỡng 100&nbsp;g (3,5&nbsp;oz)</th>\n		</tr>\n		<tr>\n			<th>Năng lượng</th>\n			<td>1.272&nbsp;kJ (304&nbsp;kcal)</td>\n		</tr>\n		<tr>\n			<th>Cacbohydrat</th>\n			<td>82.4 g</td>\n		</tr>\n		<tr>\n			<th>Đường</th>\n			<td>82.12 g</td>\n		</tr>\n		<tr>\n			<th>Chất xơ thực phẩm</th>\n			<td>0.2 g</td>\n		</tr>\n		<tr>\n			<th>Chất b&eacute;o</th>\n			<td>0 g</td>\n		</tr>\n		<tr>\n			<th>Protein</th>\n			<td>0.3 g</td>\n		</tr>\n		<tr>\n			<th>Nước</th>\n			<td>17.10 g</td>\n		</tr>\n		<tr>\n			<td>Riboflavin&nbsp;(Vit. B2)</td>\n			<td>0.038 mg (3%)</td>\n		</tr>\n		<tr>\n			<td>Niacin&nbsp;(Vit. B3)</td>\n			<td>0.121 mg (1%)</td>\n		</tr>\n		<tr>\n			<td>Axit pantothenic&nbsp;(Vit. B5)</td>\n			<td>0.068 mg (1%)</td>\n		</tr>\n		<tr>\n			<td>Vitamin B6</td>\n			<td>0.024 mg (2%)</td>\n		</tr>\n		<tr>\n			<td>Axit folic&nbsp;(Vit. B9)</td>\n			<td>2 &mu;g (1%)</td>\n		</tr>\n		<tr>\n			<td>Vitamin C</td>\n			<td>0.5 mg (1%)</td>\n		</tr>\n		<tr>\n			<td>Canxi</td>\n			<td>6 mg (1%)</td>\n		</tr>\n		<tr>\n			<td>Sắt</td>\n			<td>0.42 mg (3%)</td>\n		</tr>\n		<tr>\n			<td>Magie</td>\n			<td>2 mg (1%)</td>\n		</tr>\n		<tr>\n			<td>Phospho</td>\n			<td>4 mg (1%)</td>\n		</tr>\n		<tr>\n			<td>Kali</td>\n			<td>52 mg (1%)</td>\n		</tr>\n		<tr>\n			<td>Natri</td>\n			<td>4 mg (0%)</td>\n		</tr>\n		<tr>\n			<td>Kẽm</td>\n			<td>0.22 mg (2%)</td>\n		</tr>\n		<tr>\n			<td colspan="2">T&iacute;nh cho 100 g<br />\n			Tỷ lệ phần trăm theo&nbsp;lượng hấp thụ h&agrave;ng ng&agrave;y&nbsp;của người lớn.<br />\n			<small>Nguồn:&nbsp;Cơ sở dữ liệu USDA</small></td>\n		</tr>\n	</tbody>\n</table>\n', 6, '250000', '7f709702503639950ceda24afb6bbf34.jpg', 100, 1404102827),
(42, 'Mật ong nuôi', '<p>Mật ong nu&ocirc;i loại thường Chai 1l&iacute;t d&ugrave;ng l&agrave;m thực phẩm,l&agrave;m b&aacute;nh...</p>\n', 6, '200000', 'c26b27d31c348eab403646b07e67d8d1.jpg', 100, 1404102947);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `sale_off`
--

INSERT INTO `sale_off` (`id`, `title`, `content`, `id_product`, `percent`, `img`, `exp_date`) VALUES
(11, 'Khuyến mãi  tháng 6', '<p>Tặng x&agrave; b&ocirc;ng dầu dừa trị gi&aacute; 35.000 đồng khi mua sản phẩm dầu dừa TiBi 500ml hoặc combo 2 sản phẩm dầu dừa 250ml</p>\n', 22, 0, '', '2014-06-30 00:00:00'),
(12, 'Khuyến mãi tháng 6', '<p>Khi mua sản phẩm dầu dừa TiBi 500ml hoặc combo 2 chai dầu dừa 250ml qu&yacute; kh&aacute;ch sẽ nhận được một x&agrave; b&ocirc;ng dầu dừa trị gi&aacute; 35.000 ngh&igrave;n đồng.</p>\n', 26, 0, '', '2014-06-30 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `name`, `nick`, `phone`) VALUES
(1, ' HD: Vũ', 'dinhvu.tibimart', '0906.888.545'),
(4, 'HCM: Bình', 'kimbinh.tibimart', '0906.899.545'),
(5, 'HN: Sen', 'antawavn', '01646.536.250'),
(6, 'ĐN: Thùy', 'kimbinhnguyen91', '01203 432 420');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `yahoo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bank` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `stk` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sex` int(11) NOT NULL,
  `province` int(11) NOT NULL,
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_password_key` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_email_key` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_ip` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `birthday` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '3',
  `login_id` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `total_like` int(11) NOT NULL,
  `account_type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `phone`, `address`, `password`, `email`, `activated`, `yahoo`, `skype`, `bank`, `stk`, `sex`, `province`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`, `birthday`, `img`, `role`, `login_id`, `total_like`, `account_type`) VALUES
(1, 'giangbeo', 'Nguyễn Trường Giang', '01667039939', 'HCM', '$2a$08$av0xeUt7pYqEymtq0ENPN.65FaINVis/64LmuohuAdt8ND8exqVs2', 'nguyentruonggiang91@gmail.com', 1, '', '', '', '', 0, 79, 0, NULL, NULL, NULL, NULL, 'ad9147af77ea0a71cb1045eb8c144048', '113.161.85.214', '2014-07-01 13:40:12', '2014-03-21 08:25:47', '2014-07-01 06:40:02', '', '', 1, '', 0, 0),
(2, 'BeoBeBoi', 'Nguyên Trường Giang', '01667039939', 'HCM', '$2a$08$av0xeUt7pYqEymtq0ENPN.65FaINVis/64LmuohuAdt8ND8exqVs2', 'beobeboi91@gmail.com', 0, 's', 's', 'Vietcombank', '0341005245193', 0, 1, 0, NULL, NULL, NULL, NULL, 'ab37717509a2f5b5e6c4335e8e960710', '::1', '0000-00-00 00:00:00', '2014-03-27 16:59:43', '2014-03-28 04:13:34', '2014/03/05', '', 4, '', 0, 0),
(3, 'vudinhthi', 'Vũ Đình Thi', '0906888545', 'HCM', '$2a$08$MX89szXKTLuREEL0cqO/CesVC7ZzOXajLT1c6mSYNRMftAnffvCmu', 'tibimarthcm@gmail.com', 1, '', '', '', '', 0, 0, 0, NULL, NULL, NULL, NULL, 'be7d2d59fad29ff18fc23e4bb69a4636', '115.73.144.32', '2014-07-01 10:44:20', '2014-06-06 11:35:11', '2014-07-01 03:44:10', '', '', 1, '', 0, 0),
(4, 'kimbinh', 'Nguyễn Kim Bình', '01679478959', 'Hải Dương', '$2a$08$PaZmKrGBxeBNlAGNB6V2J.NzgTDIGjKbdyvL.A5HfrGnnekyBfIje', 'kimbinhnguyen91@gmail.com', 1, '', '', '', '', 0, 0, 0, NULL, NULL, NULL, NULL, 'a637232a98db8bdd50b1d1e2f537986f', '115.73.144.32', '2014-07-01 16:56:57', '2014-06-30 11:24:51', '2014-07-01 09:56:48', '', '', 1, '', 0, 0);

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
