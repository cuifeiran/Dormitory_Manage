-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-06-23 18:42:26
-- 服务器版本： 5.5.54-log
-- PHP Version: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sushe`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(64) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `pwd`) VALUES
(1, '123', '202cb962ac59075b964b07152d234b70'),
(5, '2005001', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- 表的结构 `dormitory`
--

CREATE TABLE IF NOT EXISTS `dormitory` (
  `dor_id` int(11) NOT NULL,
  `dor_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dor_head` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dor_per` smallint(10) DEFAULT NULL,
  `dor_tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dor_state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dor_del` smallint(10) unsigned zerofill DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `dormitory`
--

INSERT INTO `dormitory` (`dor_id`, `dor_no`, `dor_head`, `dor_per`, `dor_tel`, `dor_state`, `dor_del`) VALUES
(1, '112', '苏浩', 6, '13292264785', '未使用', 0000000000),
(2, '221', '柴军', 4, '13292267871', '使用中', 0000000000);

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL,
  `order_dor_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_bed` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_stu_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_stu_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_time` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `orders`
--

INSERT INTO `orders` (`order_id`, `order_dor_no`, `order_bed`, `order_stu_no`, `order_stu_name`, `order_time`) VALUES
(4, '112', '1', '2015001', '苏浩', '2017-06-23 20:56:00'),
(11, '221', '1', '2015033', '梁凡', '2017-06-23 10:23:00');

-- --------------------------------------------------------

--
-- 表的结构 `repairs`
--

CREATE TABLE IF NOT EXISTS `repairs` (
  `repair_id` int(11) NOT NULL,
  `repair_dor_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `repair_reason` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `repair_stu_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `repair_stu_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `repair_time` datetime DEFAULT NULL,
  `repair_result` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `repair_per` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `repairs`
--

INSERT INTO `repairs` (`repair_id`, `repair_dor_no`, `repair_reason`, `repair_stu_no`, `repair_stu_name`, `repair_time`, `repair_result`, `repair_per`) VALUES
(1, '112', '电灯损坏', '2015001', '苏浩', '2017-06-22 00:00:00', '已处理', '张三');

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stu_id` int(11) NOT NULL,
  `stu_no` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `stu_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stu_dep` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stu_class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stu_tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stu_del` smallint(10) unsigned zerofill DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`stu_id`, `stu_no`, `stu_name`, `stu_dep`, `stu_class`, `stu_tel`, `stu_del`) VALUES
(1, '2015001', '苏浩', '音乐系', '声乐', '13269952634', 0000000000),
(4, '2015005', '柴军', '数计系', '计算机专业', '13292232657', 0000000000),
(5, '2015035', '崔斐然', '数计系', '计算机', '13292263589', 0000000000),
(6, '2015033', '梁凡', '数计系', '计算机', '13268895624', 0000000001),
(7, '2015031', '苏浩楠', '体育系', '田径', '13258845147', 0000000001);

-- --------------------------------------------------------

--
-- 表的结构 `workers`
--

CREATE TABLE IF NOT EXISTS `workers` (
  `worker_id` int(11) NOT NULL,
  `worker_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `worker_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `worker_age` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `worker_sex` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `worker_tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `worker_wage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `workers`
--

INSERT INTO `workers` (`worker_id`, `worker_no`, `worker_name`, `worker_age`, `worker_sex`, `worker_tel`, `worker_wage`) VALUES
(1, '123', '超级管理员', '45', '男', '12365478948', '8000'),
(2, '2005001', '张三', '30', '男', '13265587462', '4500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`,`username`),
  ADD KEY `user_name` (`username`);

--
-- Indexes for table `dormitory`
--
ALTER TABLE `dormitory`
  ADD PRIMARY KEY (`dor_id`,`dor_no`),
  ADD KEY `dor_no` (`dor_no`),
  ADD KEY `11` (`dor_head`,`dor_per`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_dorno` (`order_dor_no`) USING BTREE,
  ADD KEY `order_stuno` (`order_stu_no`) USING BTREE;

--
-- Indexes for table `repairs`
--
ALTER TABLE `repairs`
  ADD PRIMARY KEY (`repair_id`),
  ADD KEY `re_dor_no` (`repair_dor_no`),
  ADD KEY `re_stu_no` (`repair_stu_no`),
  ADD KEY `re_pers` (`repair_per`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`,`stu_no`),
  ADD KEY `stu_no` (`stu_no`),
  ADD KEY `stu_name` (`stu_name`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`worker_id`,`worker_no`),
  ADD KEY `worker_no` (`worker_no`),
  ADD KEY `worker_name` (`worker_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(64) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `dormitory`
--
ALTER TABLE `dormitory`
  MODIFY `dor_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- 限制导出的表
--

--
-- 限制表 `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `user_name` FOREIGN KEY (`username`) REFERENCES `workers` (`worker_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `dormitory`
--
ALTER TABLE `dormitory`
  ADD CONSTRAINT `head_stu_name` FOREIGN KEY (`dor_head`) REFERENCES `student` (`stu_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `order_dorno` FOREIGN KEY (`order_dor_no`) REFERENCES `dormitory` (`dor_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_stuno` FOREIGN KEY (`order_stu_no`) REFERENCES `student` (`stu_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `repairs`
--
ALTER TABLE `repairs`
  ADD CONSTRAINT `re_pers` FOREIGN KEY (`repair_per`) REFERENCES `workers` (`worker_name`),
  ADD CONSTRAINT `re_dor_no` FOREIGN KEY (`repair_dor_no`) REFERENCES `dormitory` (`dor_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `re_stu_no` FOREIGN KEY (`repair_stu_no`) REFERENCES `student` (`stu_no`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
