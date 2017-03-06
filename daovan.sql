-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2017 at 09:43 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plag`
--

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `id` int(11) NOT NULL,
  `keywords` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_nganh` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`id`, `keywords`, `id_nganh`, `created_at`, `updated_at`) VALUES
(1, 'Mạng máy tính', 1, '2017-02-28 01:37:51', '2017-02-28 01:37:51'),
(2, 'Mạng internet', 1, '2017-02-28 01:40:32', '2017-02-28 01:40:32'),
(3, 'Xây dựng', 2, '2017-02-28 01:41:33', '2017-02-28 01:41:33'),
(4, 'Du lịch', 9, '2017-02-28 01:42:13', '2017-02-28 01:42:13'),
(5, 'Lập trình', 1, '2017-02-28 01:48:57', '2017-02-28 01:48:57'),
(7, 'Tin học', 1, '2017-02-28 02:07:21', '2017-02-28 02:07:21'),
(8, 'Điện', 4, '2017-02-28 23:17:02', '2017-02-28 23:17:02'),
(9, 'điện tử', 4, '2017-02-28 23:17:20', '2017-02-28 23:17:20'),
(10, 'Điện tử động', 4, '2017-02-28 23:17:39', '2017-02-28 23:17:39'),
(11, 'hệ thống điện', 4, '2017-02-28 23:22:59', '2017-02-28 23:22:59'),
(12, 'mạng', 4, '2017-02-28 23:23:14', '2017-02-28 23:23:14'),
(13, 'Mạng điện', 4, '2017-02-28 23:23:29', '2017-02-28 23:23:29'),
(14, 'Lưới', 4, '2017-02-28 23:23:48', '2017-02-28 23:23:48'),
(15, 'Lưới hạ thế', 4, '2017-02-28 23:24:09', '2017-02-28 23:24:09'),
(16, 'Lưới Trung Thế', 4, '2017-02-28 23:24:24', '2017-02-28 23:24:24'),
(17, 'Lưới Cao Thế', 4, '2017-02-28 23:24:40', '2017-02-28 23:24:40'),
(18, 'Lưới Siêu Cao Thế', 4, '2017-02-28 23:24:49', '2017-02-28 23:24:49'),
(19, 'Phát Điện', 4, '2017-02-28 23:26:15', '2017-02-28 23:26:15'),
(20, 'nhà máy điện', 4, '2017-02-28 23:26:23', '2017-02-28 23:26:23'),
(21, 'nhà máy nhiệt điện', 4, '2017-02-28 23:26:32', '2017-02-28 23:26:32'),
(22, 'nhà máy điện gió', 4, '2017-02-28 23:26:45', '2017-02-28 23:26:45'),
(23, 'nhà máy điện thủy triều', 4, '2017-02-28 23:26:53', '2017-02-28 23:26:53'),
(24, 'truyền tải điện', 4, '2017-02-28 23:27:05', '2017-02-28 23:27:05'),
(25, 'đường dây truyền tải', 4, '2017-02-28 23:27:12', '2017-02-28 23:27:12'),
(26, 'phân phối điện', 4, '2017-02-28 23:27:17', '2017-02-28 23:27:17'),
(27, 'tiêu thụ', 4, '2017-02-28 23:27:41', '2017-02-28 23:27:41'),
(28, 'hộ tiêu thụ', 4, '2017-02-28 23:27:47', '2017-02-28 23:27:47'),
(29, 'phụ tải điện', 4, '2017-02-28 23:27:53', '2017-02-28 23:27:53'),
(30, 'tải điện', 4, '2017-02-28 23:27:59', '2017-02-28 23:27:59'),
(31, 'biểu đồ phụ tải', 4, '2017-02-28 23:28:05', '2017-02-28 23:28:05'),
(32, 'sa thải phụ tải', 4, '2017-02-28 23:28:11', '2017-02-28 23:28:11'),
(33, 'phụ tải không cân bằng', 4, '2017-02-28 23:28:17', '2017-02-28 23:28:17'),
(34, 'phụ tải đỉnh', 4, '2017-02-28 23:28:27', '2017-02-28 23:28:27'),
(35, 'phụ tải đỉnh, cực đại', 4, '2017-02-28 23:28:31', '2017-02-28 23:28:31'),
(36, 'phụ tải đối xứng', 4, '2017-02-28 23:28:36', '2017-02-28 23:28:36'),
(37, 'công suất', 4, '2017-02-28 23:28:54', '2017-02-28 23:28:54'),
(38, 'hệ số công suất', 4, '2017-02-28 23:29:01', '2017-02-28 23:29:01'),
(39, 'công suất phản kháng', 4, '2017-02-28 23:29:13', '2017-02-28 23:29:13'),
(40, 'công suất biểu kiến', 4, '2017-02-28 23:29:19', '2017-02-28 23:29:19'),
(41, 'tần số', 4, '2017-02-28 23:29:36', '2017-02-28 23:29:36'),
(42, 'Dải tần số', 4, '2017-02-28 23:29:44', '2017-02-28 23:29:44'),
(43, 'Sơ đồ hệ thống điện', 4, '2017-02-28 23:31:00', '2017-02-28 23:31:00'),
(44, 'Sơ đồ vận hành', 4, '2017-02-28 23:31:11', '2017-02-28 23:31:11'),
(45, 'Quy hoạch', 4, '2017-02-28 23:31:22', '2017-02-28 23:31:22'),
(46, 'Liên kết', 4, '2017-02-28 23:31:29', '2017-02-28 23:31:29'),
(47, 'Điểm đấu nối', 4, '2017-02-28 23:31:34', '2017-02-28 23:31:34'),
(48, 'Trung tâm điều độ', 4, '2017-02-28 23:35:17', '2017-02-28 23:35:17'),
(49, 'Chế độ xác lập', 4, '2017-02-28 23:40:27', '2017-02-28 23:40:27'),
(50, 'Chế độ quá độ', 4, '2017-02-28 23:40:40', '2017-02-28 23:40:40'),
(51, 'Tiêu chuẩn vận hành', 4, '2017-02-28 23:40:45', '2017-02-28 23:40:45'),
(52, 'vận hành', 4, '2017-02-28 23:40:52', '2017-02-28 23:40:52'),
(53, 'Vận hành đồng bộ', 4, '2017-02-28 23:40:58', '2017-02-28 23:40:58'),
(54, 'Độ ổn định', 4, '2017-02-28 23:41:04', '2017-02-28 23:41:04'),
(55, 'Ổn định tĩnh', 4, '2017-02-28 23:41:11', '2017-02-28 23:41:11'),
(56, 'Ổn định quá độ', 4, '2017-02-28 23:41:27', '2017-02-28 23:41:27'),
(57, 'ổn định động', 4, '2017-02-28 23:41:34', '2017-02-28 23:41:34'),
(58, 'Ổn định có điều kiện', 4, '2017-02-28 23:41:40', '2017-02-28 23:41:40'),
(59, 'Trạng thái cân bằng', 4, '2017-02-28 23:41:46', '2017-02-28 23:41:46'),
(60, 'lưới điện nhiều pha', 4, '2017-02-28 23:41:53', '2017-02-28 23:41:53'),
(61, 'Trạng thái không cân bằng', 4, '2017-02-28 23:42:02', '2017-02-28 23:42:02'),
(62, 'Máy phát điện', 4, '2017-02-28 23:42:08', '2017-02-28 23:42:08'),
(63, 'Máy phát điện chính', 4, '2017-02-28 23:42:13', '2017-02-28 23:42:13'),
(64, 'máy phát điện thủy lực', 4, '2017-02-28 23:42:19', '2017-02-28 23:42:19'),
(65, 'máy phát từ thủy động', 4, '2017-02-28 23:42:26', '2017-02-28 23:42:26'),
(66, 'máy phát đồng bộ', 4, '2017-02-28 23:42:33', '2017-02-28 23:42:33'),
(67, 'Tuabin', 4, '2017-02-28 23:42:38', '2017-02-28 23:42:38'),
(68, 'Turbine', 4, '2017-02-28 23:42:43', '2017-02-28 23:42:43'),
(69, 'Tuabin hơi', 4, '2017-02-28 23:42:53', '2017-02-28 23:42:53'),
(70, 'Turbine hơi', 4, '2017-02-28 23:43:03', '2017-02-28 23:43:03'),
(71, 'Tuabine gió', 4, '2017-02-28 23:48:20', '2017-02-28 23:48:20'),
(72, 'Tuabin gió', 4, '2017-02-28 23:48:23', '2017-02-28 23:48:23'),
(73, 'Hệ thống kích từ', 4, '2017-02-28 23:48:28', '2017-02-28 23:48:28'),
(74, 'máy phát điện kích từ độc lập', 4, '2017-02-28 23:48:35', '2017-02-28 23:48:35'),
(75, 'kích từ', 4, '2017-02-28 23:48:45', '2017-02-28 23:48:45'),
(76, 'kích từ độc lập', 4, '2017-02-28 23:48:54', '2017-02-28 23:48:54'),
(77, 'kích từ nối tiếp', 4, '2017-02-28 23:49:03', '2017-02-28 23:49:03'),
(78, 'kích từ song song', 4, '2017-02-28 23:49:10', '2017-02-28 23:49:10'),
(79, 'kích từ không chổi than', 4, '2017-03-01 00:12:47', '2017-03-01 00:12:47'),
(80, 'công tắc kích từ', 4, '2017-03-01 00:12:55', '2017-03-01 00:12:55'),
(81, 'công tắc', 4, '2017-03-01 00:13:00', '2017-03-01 00:13:00'),
(82, 'Bộ điều tốc', 4, '2017-03-01 00:13:12', '2017-03-01 00:13:12'),
(83, 'điều tốc', 4, '2017-03-01 00:13:18', '2017-03-01 00:13:18'),
(84, 'Bộ điều tốc ly tâm', 4, '2017-03-01 00:13:30', '2017-03-01 00:13:30'),
(85, 'ly tâm', 4, '2017-03-01 00:13:36', '2017-03-01 00:13:36'),
(86, 'Bộ điều tốc tuabin', 4, '2017-03-01 00:13:53', '2017-03-01 00:13:53'),
(87, 'Hòa đồng bộ', 4, '2017-03-01 00:14:00', '2017-03-01 00:14:00'),
(88, 'đồng bộ', 4, '2017-03-01 00:14:04', '2017-03-01 00:14:04'),
(89, 'Tham quan', 9, '2017-03-01 01:30:49', '2017-03-01 01:30:49'),
(90, 'kế toán', 12, '2017-03-01 01:35:22', '2017-03-01 01:35:22'),
(91, 'y học', 15, '2017-03-01 01:37:13', '2017-03-01 01:37:13'),
(92, 'luật kinh tế', 16, '2017-03-01 01:38:40', '2017-03-01 01:38:40'),
(93, 'ngoại ngữ', 13, '2017-03-01 01:40:43', '2017-03-01 01:40:43'),
(94, 'tiếng anh', 13, '2017-03-01 01:41:30', '2017-03-01 01:41:30');

-- --------------------------------------------------------

--
-- Table structure for table `linhvuc`
--

CREATE TABLE `linhvuc` (
  `id` int(11) NOT NULL,
  `nganhhoc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `linhvuc`
--

INSERT INTO `linhvuc` (`id`, `nganhhoc`, `mota`) VALUES
(1, 'Ngành Công Nghệ Thông Tin', 'Công nghệ thông tin'),
(2, 'Ngành Xây dựng', 'Ngành xây dựng'),
(3, 'Ngành Kiến trúc', 'Ngành kiến trúc'),
(4, 'Ngành Điện - Điện tử', 'Điện điện tử'),
(5, 'Ngành Công nghệ môi trường', 'công nghệ môi trường'),
(6, 'Ngành Công nghệ thực phẩm', 'công nghệ thực phẩm'),
(7, 'Ngành Quản trị kinh doanh', 'quản trị kinh doanh'),
(8, 'Ngành Ngoại thương( Quản trị kinh doanh quốc tế)', 'ngoại thương'),
(9, 'Ngành Du lịch', 'du lịch'),
(10, 'Ngành Kinh doanh thương mại', 'kinh doanh thương mại'),
(11, 'Ngành Tài chính ngân hàng', 'tài chính ngân hàng'),
(12, 'Ngành Kế toán', 'kế toán'),
(13, 'Ngành Ngoại ngữ', 'Ngoại ngữ'),
(14, 'Ngành Khoa học xã hội & Nhân văn', 'khoa học xã hội và nhân văn'),
(15, 'Ngành Y - Dược', 'y dược'),
(16, 'Ngành Luật kinh tế', 'luật kinh tế');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nganh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linhvuc`
--
ALTER TABLE `linhvuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `linhvuc`
--
ALTER TABLE `linhvuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
