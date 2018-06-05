-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2018 at 11:49 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bs_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `supplier` varchar(225) NOT NULL,
  `category` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `unit` int(11) NOT NULL,
  `purchase_price` int(30) NOT NULL,
  `selling_price` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `name`, `supplier`, `category`, `type`, `qty`, `unit`, `purchase_price`, `selling_price`) VALUES
(2, 'acer ashpire', 'bagus', 1, 0, 1, 0, 10000, 10001),
(4, 'q', '', 0, 0, 0, 0, 0, 0),
(5, 'q', '', 0, 0, 0, 0, 0, 0),
(6, 'q', '', 0, 0, 0, 0, 0, 0),
(7, 'q', '', 0, 0, 0, 0, 0, 0),
(8, 'q', '', 0, 0, 0, 0, 0, 0),
(9, 'q', '', 0, 0, 0, 0, 0, 0),
(10, 'q', '', 0, 0, 0, 0, 0, 0),
(11, 'q', '', 0, 0, 0, 0, 0, 0),
(15, 'q', '', 0, 0, 0, 0, 0, 0),
(16, 'q', '', 0, 0, 0, 0, 0, 0),
(17, 'q', '', 0, 0, 0, 0, 0, 0),
(18, 'q', '', 0, 0, 0, 0, 0, 0),
(19, 'q', '', 0, 0, 0, 0, 0, 0),
(20, 'q', '', 0, 0, 0, 0, 0, 0),
(21, 'q', '', 0, 0, 0, 0, 0, 0),
(22, 'q', '', 0, 0, 0, 0, 0, 0),
(23, 'q', '', 0, 0, 0, 0, 0, 0),
(24, 'q', '', 0, 0, 0, 0, 0, 0),
(26, 'q', '', 0, 0, 0, 0, 0, 0),
(27, 'q', '', 0, 0, 0, 0, 0, 0),
(28, 'q', '', 0, 0, 0, 0, 0, 0),
(29, 'q', '', 0, 0, 0, 0, 0, 0),
(30, 'q', '', 0, 0, 0, 0, 0, 0),
(31, 'q', '', 0, 0, 0, 0, 0, 0),
(32, 'q', '', 0, 0, 0, 0, 0, 0),
(33, 'q', '', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id` varchar(225) NOT NULL,
  `goods_id` int(11) NOT NULL,
  `k` int(11) NOT NULL,
  `f` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` int(11) NOT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_upd` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `active` int(11) NOT NULL,
  `id_shop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supply_order`
--

CREATE TABLE `supply_order` (
  `id_supply_order` int(11) UNSIGNED NOT NULL,
  `id_supplier` int(11) UNSIGNED NOT NULL,
  `supplier_name` varchar(64) NOT NULL,
  `id_lang` int(11) UNSIGNED NOT NULL,
  `id_warehouse` int(11) UNSIGNED NOT NULL,
  `id_supply_order_state` int(11) UNSIGNED NOT NULL,
  `id_currency` int(11) UNSIGNED NOT NULL,
  `id_ref_currency` int(11) UNSIGNED NOT NULL,
  `reference` varchar(64) NOT NULL,
  `date_add` datetime NOT NULL,
  `date_upd` datetime NOT NULL,
  `date_delivery_expected` datetime DEFAULT NULL,
  `total_te` decimal(20,6) DEFAULT '0.000000',
  `total_with_discount_te` decimal(20,6) DEFAULT '0.000000',
  `total_tax` decimal(20,6) DEFAULT '0.000000',
  `total_ti` decimal(20,6) DEFAULT '0.000000',
  `discount_rate` decimal(20,6) DEFAULT '0.000000',
  `discount_value_te` decimal(20,6) DEFAULT '0.000000',
  `is_template` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_lookup_types`
--

CREATE TABLE `sys_lookup_types` (
  `type_code` varchar(32) NOT NULL,
  `type_value` int(11) DEFAULT NULL,
  `type_title` varchar(255) DEFAULT NULL,
  `editable` int(11) DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `type_description` varchar(4000) DEFAULT NULL,
  `creator` varchar(32) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updater` varchar(32) DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_lookup_types`
--

INSERT INTO `sys_lookup_types` (`type_code`, `type_value`, `type_title`, `editable`, `sort_order`, `type_description`, `creator`, `created`, `updater`, `updated`) VALUES
('UNIT_TYPE', 1, 'Jenis unit', 1, 1, NULL, NULL, NULL, NULL, NULL),
('UNIT_GROUP', 1, 'Kelompok unit', 1, 2, NULL, NULL, NULL, NULL, NULL),
('CONSEQUENCE_RATING', 1, 'Tingkat dampak', 1, 3, NULL, NULL, NULL, NULL, NULL),
('LIKELIHOOD_RATING', 1, 'Tingkat kemungkinan', 1, 4, NULL, NULL, NULL, NULL, NULL),
('CONSEQUENCE_CRITERIA', 1, 'Kriteria dampak', 1, 5, NULL, NULL, NULL, NULL, NULL),
('LIKELIHOOD_CRITERIA', 1, 'Kriteria kemungkinan', 1, 6, NULL, NULL, NULL, NULL, NULL),
('RISK_TYPE', 1, 'Jenis risiko', 1, 7, NULL, NULL, NULL, NULL, NULL),
('RESPONSE_TYPE', 1, 'Jenis tanggapan', 1, 8, NULL, NULL, NULL, NULL, NULL),
('CAUSE_TYPE', 1, 'Jenis penyebab', 1, 9, NULL, NULL, NULL, NULL, NULL),
('CONTROL_TYPE', 1, 'Jenis pengendalian', 1, 10, NULL, NULL, NULL, NULL, NULL),
('CONTROL_LEVEL', 1, 'Keefektifan pengendalian', 1, 11, NULL, NULL, NULL, NULL, NULL),
('MITIGATION_TYPE', 1, 'Jenis tindakan', 1, 12, NULL, NULL, NULL, NULL, NULL),
('ACTION_STATUS', 1, 'Status tindakan', 1, 13, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sys_lookup_values`
--

CREATE TABLE `sys_lookup_values` (
  `lookup_id` int(11) NOT NULL,
  `lookup_type` varchar(32) DEFAULT NULL,
  `lookup_value` int(11) DEFAULT NULL,
  `lookup_title` varchar(255) DEFAULT NULL,
  `lookup_description` varchar(4000) DEFAULT NULL,
  `creator` varchar(32) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updater` varchar(32) DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_lookup_values`
--

INSERT INTO `sys_lookup_values` (`lookup_id`, `lookup_type`, `lookup_value`, `lookup_title`, `lookup_description`, `creator`, `created`, `updater`, `updated`) VALUES
(135, 'RISK_TYPE', 7, 'Sosial-Lingkungan', NULL, NULL, NULL, NULL, NULL),
(134, 'RISK_TYPE', 6, 'Politik-Hukum', NULL, NULL, NULL, NULL, NULL),
(132, 'RISK_TYPE', 4, 'Pemasaran', NULL, NULL, NULL, NULL, NULL),
(125, 'IS_ACTIVE', 0, 'Risiko Inaktif', NULL, NULL, NULL, NULL, NULL),
(126, 'IS_ACTIVE', 1, 'Risiko Aktif', NULL, NULL, NULL, NULL, NULL),
(17, 'RESPONSE_TYPE', 1, 'Hindari', 'Pelaksanaan kerja yang tidak prosedure', NULL, NULL, 'ptpp', '2013-07-08 19:39:00'),
(18, 'RESPONSE_TYPE', 2, 'Kurangi', 'Pekerjaan yang tidak terencana', NULL, NULL, 'ptpp', '2013-07-08 19:39:00'),
(19, 'RESPONSE_TYPE', 3, 'Terima', 'Masukan dari berbagai komponen di proyek', NULL, NULL, 'ptpp', '2013-07-08 19:39:00'),
(20, 'RESPONSE_TYPE', 4, 'Transfer', NULL, NULL, NULL, NULL, NULL),
(21, 'UNIT_TYPE', 1, 'Business unit', NULL, NULL, NULL, 'ptpp', '2013-07-08 19:43:00'),
(22, 'UNIT_TYPE', 2, 'Working unit', NULL, NULL, NULL, 'ptpp', '2013-07-08 19:43:00'),
(23, 'UNIT_TYPE', 3, 'Project unit', 'Perseroan melaksanakan proyek sedang berjalan', NULL, NULL, 'ptpp', '2012-10-02 21:28:00'),
(26, 'CAUSE_TYPE', 1, 'Eksternal', 'hujan dan banjir akibat saluran kota yang tidak memadai', NULL, NULL, 'ptpp', '2013-07-08 19:34:00'),
(27, 'CAUSE_TYPE', 2, 'Personel', 'Personil yang ditugaskan untuk menanganinya sudah ditempatkan', NULL, NULL, 'ptpp', '2013-07-08 19:34:00'),
(28, 'CAUSE_TYPE', 3, 'Prosedur', 'Prosedur sudah dijalankan', NULL, NULL, 'ptpp', '2013-07-08 19:34:00'),
(29, 'CAUSE_TYPE', 4, 'Teknologi', 'alat sudah disiapkan', NULL, NULL, 'ptpp', '2013-07-08 19:34:00'),
(30, 'CONTROL_TYPE', 1, 'Informal', 'Kenaikan BBM', NULL, NULL, 'ptpp', '2013-07-08 19:31:00'),
(31, 'CONTROL_TYPE', 2, 'Formal', 'Tambahan pasal-pasal dalam kontrak', NULL, NULL, 'ptpp', '2013-07-08 19:31:00'),
(32, 'CONTROL_TYPE', 3, 'Fisik', 'banjir akibat system saluran kota yang tidak baik', NULL, NULL, 'ptpp', '2013-07-08 19:31:00'),
(33, 'CONTROL_LEVEL', 1, 'Sangat Kurang', NULL, NULL, NULL, 'ptpp', '2012-09-04 13:35:00'),
(34, 'CONTROL_LEVEL', 2, 'Kurang', NULL, NULL, NULL, 'ptpp', '2012-09-04 13:35:00'),
(35, 'CONTROL_LEVEL', 3, 'Cukup', NULL, NULL, NULL, 'ptpp', '2012-09-04 13:35:00'),
(36, 'CONTROL_LEVEL', 4, 'Baik', 'baik', NULL, NULL, 'ptpp', '2013-07-08 19:44:00'),
(37, 'MITIGATION_TYPE', 1, 'Penyebab', 'luas lahan yang terbatas', NULL, NULL, 'ptpp', '2013-07-08 19:42:00'),
(38, 'MITIGATION_TYPE', 2, 'Proses', 'menyiasati luas lahan yang ada', NULL, NULL, 'ptpp', '2013-07-08 19:42:00'),
(39, 'ACTION_STATUS', 1, 'Rencana', NULL, NULL, NULL, 'ptpp', '2012-09-25 14:31:00'),
(40, 'ACTION_STATUS', 2, 'Berlangsung', NULL, NULL, NULL, 'ptpp', '2012-09-25 14:31:00'),
(41, 'ACTION_STATUS', 3, 'Selesai', NULL, NULL, NULL, 'ptpp', '2012-09-25 14:31:00'),
(154, 'CONSEQUENCE_CRITERIA', 11, 'Payback Period', NULL, NULL, NULL, NULL, NULL),
(155, 'CONSEQUENCE_CRITERIA', 12, 'Reputasi', NULL, NULL, NULL, NULL, NULL),
(156, 'PROCESS_NAME', 1, 'Commission', NULL, NULL, NULL, NULL, NULL),
(157, 'PROCESS_NAME', 2, 'Operasional', NULL, NULL, NULL, NULL, NULL),
(158, 'PROCESS_NAME', 3, 'Pemeliharaan', NULL, NULL, NULL, NULL, NULL),
(159, 'PROCESS_NAME', 4, 'Tender', NULL, NULL, NULL, NULL, NULL),
(128, 'UNIT_GROUP', 2, 'Non Konstruksi', NULL, NULL, NULL, NULL, NULL),
(82, 'CONTROL_LEVEL', 5, 'Baik sekali', NULL, 'ptpp', '2012-09-04 13:35:00', NULL, NULL),
(153, 'CONSEQUENCE_CRITERIA', 10, 'IRR', NULL, NULL, NULL, NULL, NULL),
(152, 'CONSEQUENCE_CRITERIA', 9, 'Program Kerja', NULL, NULL, NULL, NULL, NULL),
(151, 'CONSEQUENCE_CRITERIA', 8, 'Keamanan', NULL, NULL, NULL, NULL, NULL),
(150, 'CONSEQUENCE_CRITERIA', 7, 'Keselamatan', NULL, NULL, NULL, NULL, NULL),
(149, 'CONSEQUENCE_CRITERIA', 6, 'Cashflow (K6)', NULL, NULL, NULL, NULL, NULL),
(148, 'CONSEQUENCE_CRITERIA', 5, 'Kualitas (K5)', NULL, NULL, NULL, NULL, NULL),
(147, 'CONSEQUENCE_CRITERIA', 4, 'Biaya Final (K4)', NULL, NULL, NULL, NULL, NULL),
(139, 'LIKELIHOOD_RATING', 4, 'Sangat besar', NULL, NULL, NULL, NULL, NULL),
(143, 'CONSEQUENCE_RATING', 4, 'Sangat besar', NULL, NULL, NULL, NULL, NULL),
(138, 'LIKELIHOOD_RATING', 3, 'Besar', NULL, NULL, NULL, NULL, NULL),
(137, 'LIKELIHOOD_RATING', 2, 'Sedang', NULL, NULL, NULL, NULL, NULL),
(142, 'CONSEQUENCE_RATING', 3, 'Besar', NULL, NULL, NULL, NULL, NULL),
(136, 'LIKELIHOOD_RATING', 1, 'Kecil', NULL, NULL, NULL, NULL, NULL),
(146, 'CONSEQUENCE_CRITERIA', 3, 'Waktu (K3)', NULL, NULL, NULL, NULL, NULL),
(145, 'CONSEQUENCE_CRITERIA', 2, 'Biaya (K2)', NULL, NULL, NULL, NULL, NULL),
(141, 'CONSEQUENCE_RATING', 2, 'Sedang', NULL, NULL, NULL, NULL, NULL),
(140, 'CONSEQUENCE_RATING', 1, 'Kecil', NULL, NULL, NULL, NULL, NULL),
(144, 'CONSEQUENCE_CRITERIA', 1, 'Cashflow (K1)', NULL, NULL, NULL, NULL, NULL),
(120, 'LIKELIHOOD_CRITERIA', 1, 'Persentase kemungkinan', NULL, NULL, NULL, NULL, NULL),
(121, 'LIKELIHOOD_CRITERIA', 2, 'Jumlah kejadian', NULL, NULL, NULL, NULL, NULL),
(122, 'LIKELIHOOD_CRITERIA', 3, 'Kualitatif', NULL, NULL, NULL, NULL, NULL),
(127, 'UNIT_GROUP', 1, 'Konstruksi', NULL, NULL, NULL, NULL, NULL),
(133, 'RISK_TYPE', 5, 'SDM', NULL, NULL, NULL, NULL, NULL),
(129, 'RISK_TYPE', 1, 'Operasional', NULL, NULL, NULL, NULL, NULL),
(130, 'RISK_TYPE', 2, 'Teknik/TI', NULL, NULL, NULL, NULL, NULL),
(131, 'RISK_TYPE', 3, 'Keuangan', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sys_modules`
--

CREATE TABLE `sys_modules` (
  `module_id` int(11) NOT NULL,
  `module_code` varchar(255) DEFAULT NULL,
  `module_title` varchar(255) DEFAULT NULL,
  `has_separator` tinyint(4) NOT NULL DEFAULT '0',
  `icon` varchar(255) DEFAULT NULL,
  `actions` varchar(4000) DEFAULT NULL,
  `status` char(10) DEFAULT NULL,
  `description` varchar(4000) DEFAULT NULL,
  `tparent` int(11) DEFAULT NULL,
  `tleft` int(11) DEFAULT NULL,
  `tright` int(11) DEFAULT NULL,
  `tlevel` int(11) DEFAULT NULL,
  `tpos` int(11) DEFAULT NULL,
  `ttype` int(11) DEFAULT NULL,
  `creator` varchar(32) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updater` varchar(32) DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_modules`
--

INSERT INTO `sys_modules` (`module_id`, `module_code`, `module_title`, `has_separator`, `icon`, `actions`, `status`, `description`, `tparent`, `tleft`, `tright`, `tlevel`, `tpos`, `ttype`, `creator`, `created`, `updater`, `updated`) VALUES
(1, 'manage', 'Manage', 0, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'goods', 'Goods', 0, NULL, 'goods', 'active', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'procurementofgoods', 'Procurement Of Goods', 0, NULL, 'procurementofgoods', 'active', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'setup', 'Setup', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'lookup', 'Lookup Value', 0, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sys_privileges`
--

CREATE TABLE `sys_privileges` (
  `role_id` varchar(32) NOT NULL DEFAULT '',
  `module_id` varchar(32) NOT NULL DEFAULT '',
  `rights` int(11) DEFAULT NULL,
  `creator` varchar(32) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updater` varchar(32) DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_privileges`
--

INSERT INTO `sys_privileges` (`role_id`, `module_id`, `rights`, `creator`, `created`, `updater`, `updated`) VALUES
('ADMIN', '6', NULL, NULL, NULL, NULL, NULL),
('DVMR', '6', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '8', NULL, NULL, NULL, NULL, NULL),
('DVMR', '8', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '9', NULL, NULL, NULL, NULL, NULL),
('DVMR', '9', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '10', NULL, NULL, NULL, NULL, NULL),
('DVMR', '10', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '11', NULL, NULL, NULL, NULL, NULL),
('DVMR', '11', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '12', NULL, NULL, NULL, NULL, NULL),
('DVMR', '12', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '13', NULL, NULL, NULL, NULL, NULL),
('DVMR', '13', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '14', NULL, NULL, NULL, NULL, NULL),
('DVMR', '14', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '2', NULL, NULL, NULL, NULL, NULL),
('DVMR', '2', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '3', NULL, NULL, NULL, NULL, NULL),
('DVMR', '3', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '15', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '16', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '17', NULL, NULL, NULL, NULL, NULL),
('DVMR', '17', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '18', NULL, NULL, NULL, NULL, NULL),
('DVMR', '18', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '19', NULL, NULL, NULL, NULL, NULL),
('DVMR', '19', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '4', NULL, NULL, NULL, NULL, NULL),
('DVMR', '4', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '20', NULL, NULL, NULL, NULL, NULL),
('DVMR', '20', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '21', NULL, NULL, NULL, NULL, NULL),
('DVMR', '21', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '22', NULL, NULL, NULL, NULL, NULL),
('DVMR', '22', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '23', NULL, NULL, NULL, NULL, NULL),
('DVMR', '23', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '24', NULL, NULL, NULL, NULL, NULL),
('DVMR', '24', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '25', NULL, NULL, NULL, NULL, NULL),
('DVMR', '25', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '27', NULL, NULL, NULL, NULL, NULL),
('DVMR', '27', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '28', NULL, NULL, NULL, NULL, NULL),
('DVMR', '28', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '29', NULL, NULL, NULL, NULL, NULL),
('DVMR', '29', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '43', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '60', NULL, NULL, NULL, NULL, NULL),
('DVMR', '59', NULL, NULL, NULL, NULL, NULL),
('DVMR', '43', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '44', NULL, NULL, NULL, NULL, NULL),
('DVMR', '44', NULL, NULL, NULL, NULL, NULL),
('PROJECT', '60', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '45', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '62', NULL, NULL, NULL, NULL, NULL),
('DVMR', '45', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '49', NULL, NULL, NULL, NULL, NULL),
('KBT', '4', NULL, NULL, NULL, NULL, NULL),
('DVMR', '49', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '50', NULL, NULL, NULL, NULL, NULL),
('CAB', '4', NULL, NULL, NULL, NULL, NULL),
('DVMR', '50', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '46', NULL, NULL, NULL, NULL, NULL),
('SUB', '4', NULL, NULL, NULL, NULL, NULL),
('KBT', '60', NULL, NULL, NULL, NULL, NULL),
('DVMR', '46', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '47', NULL, NULL, NULL, NULL, NULL),
('DVMR', '47', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '48', NULL, NULL, NULL, NULL, NULL),
('DVMR', '48', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '30', NULL, NULL, NULL, NULL, NULL),
('DVMR', '30', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '33', NULL, NULL, NULL, NULL, NULL),
('DVMR', '33', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '35', NULL, NULL, NULL, NULL, NULL),
('DVMR', '35', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '36', NULL, NULL, NULL, NULL, NULL),
('DVMR', '36', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '37', NULL, NULL, NULL, NULL, NULL),
('DVMR', '37', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '38', NULL, NULL, NULL, NULL, NULL),
('DVMR', '38', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '39', NULL, NULL, NULL, NULL, NULL),
('DVMR', '39', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '32', NULL, NULL, NULL, NULL, NULL),
('DVMR', '32', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '40', NULL, NULL, NULL, NULL, NULL),
('DVMR', '40', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '41', NULL, NULL, NULL, NULL, NULL),
('DVMR', '41', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '42', NULL, NULL, NULL, NULL, NULL),
('DVMR', '42', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '5', NULL, NULL, NULL, NULL, NULL),
('DVMR', '5', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '51', NULL, NULL, NULL, NULL, NULL),
('DVMR', '51', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '52', NULL, NULL, NULL, NULL, NULL),
('DVMR', '52', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '53', NULL, NULL, NULL, NULL, NULL),
('DVMR', '53', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '54', NULL, NULL, NULL, NULL, NULL),
('DVMR', '54', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '55', NULL, NULL, NULL, NULL, NULL),
('DVMR', '55', NULL, NULL, NULL, NULL, NULL),
('PROJECT', '15', NULL, NULL, NULL, NULL, NULL),
('KBT', '15', NULL, NULL, NULL, NULL, NULL),
('CAB', '15', NULL, NULL, NULL, NULL, NULL),
('DIV', '15', NULL, NULL, NULL, NULL, NULL),
('PROJECT', '16', NULL, NULL, NULL, NULL, NULL),
('KBT', '16', NULL, NULL, NULL, NULL, NULL),
('CAB', '16', NULL, NULL, NULL, NULL, NULL),
('DIV', '16', NULL, NULL, NULL, NULL, NULL),
('SUB', '16', NULL, NULL, NULL, NULL, NULL),
('UKP', '16', NULL, NULL, NULL, NULL, NULL),
('DVPB', '16', NULL, NULL, NULL, NULL, NULL),
('PROJECT', '17', NULL, NULL, NULL, NULL, NULL),
('KBT', '17', NULL, NULL, NULL, NULL, NULL),
('CAB', '17', NULL, NULL, NULL, NULL, NULL),
('DIV', '17', NULL, NULL, NULL, NULL, NULL),
('SUB', '17', NULL, NULL, NULL, NULL, NULL),
('UKP', '17', NULL, NULL, NULL, NULL, NULL),
('DVPB', '17', NULL, NULL, NULL, NULL, NULL),
('PROJECT', '18', NULL, NULL, NULL, NULL, NULL),
('KBT', '18', NULL, NULL, NULL, NULL, NULL),
('CAB', '18', NULL, NULL, NULL, NULL, NULL),
('DIV', '18', NULL, NULL, NULL, NULL, NULL),
('SUB', '18', NULL, NULL, NULL, NULL, NULL),
('UKP', '18', NULL, NULL, NULL, NULL, NULL),
('DVPB', '18', NULL, NULL, NULL, NULL, NULL),
('PROJECT', '3', NULL, NULL, NULL, NULL, NULL),
('KBT', '3', NULL, NULL, NULL, NULL, NULL),
('CAB', '3', NULL, NULL, NULL, NULL, NULL),
('DIV', '3', NULL, NULL, NULL, NULL, NULL),
('SUB', '3', NULL, NULL, NULL, NULL, NULL),
('UKP', '3', NULL, NULL, NULL, NULL, NULL),
('DVPB', '3', NULL, NULL, NULL, NULL, NULL),
('PROJECT', '59', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '59', NULL, NULL, NULL, NULL, NULL),
('DVMR', '57', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '57', NULL, NULL, NULL, NULL, NULL),
('DVMR', '58', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '58', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '56', NULL, NULL, NULL, NULL, NULL),
('DVMR', '56', NULL, NULL, NULL, NULL, NULL),
('PROJECT', '4', NULL, NULL, NULL, NULL, NULL),
('DVMR', '61', NULL, NULL, NULL, NULL, NULL),
('DIV', '61', NULL, NULL, NULL, NULL, NULL),
('CAB', '61', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '61', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '65', NULL, NULL, NULL, NULL, NULL),
('DVPB', '4', NULL, NULL, NULL, NULL, NULL),
('UKP', '4', NULL, NULL, NULL, NULL, NULL),
('DIV', '4', NULL, NULL, NULL, NULL, NULL),
('PROJECT', '19', NULL, NULL, NULL, NULL, NULL),
('KBT', '19', NULL, NULL, NULL, NULL, NULL),
('DVPB', '60', NULL, NULL, NULL, NULL, NULL),
('DVPB', '62', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '63', NULL, NULL, NULL, NULL, NULL),
('PROJECT', '9', NULL, NULL, NULL, NULL, NULL),
('DVMR', '63', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '64', NULL, NULL, NULL, NULL, NULL),
('SUB', '64', NULL, NULL, NULL, NULL, NULL),
('DVMR', '64', NULL, NULL, NULL, NULL, NULL),
('DVMR', '65', NULL, NULL, NULL, NULL, NULL),
('KBT', '66', NULL, NULL, NULL, NULL, NULL),
('CAB', '66', NULL, NULL, NULL, NULL, NULL),
('DIV', '66', NULL, NULL, NULL, NULL, NULL),
('DVMR', '66', NULL, NULL, NULL, NULL, NULL),
('DVPB', '66', NULL, NULL, NULL, NULL, NULL),
('SUB', '19', NULL, NULL, NULL, NULL, NULL),
('PROJECT', '2', NULL, NULL, NULL, NULL, NULL),
('DVPB', '19', NULL, NULL, NULL, NULL, NULL),
('PROJECT', '65', NULL, NULL, NULL, NULL, NULL),
('KBT', '65', NULL, NULL, NULL, NULL, NULL),
('CAB', '65', NULL, NULL, NULL, NULL, NULL),
('DIV', '65', NULL, NULL, NULL, NULL, NULL),
('SUB', '65', NULL, NULL, NULL, NULL, NULL),
('UKP', '65', NULL, NULL, NULL, NULL, NULL),
('DVPB', '65', NULL, NULL, NULL, NULL, NULL),
('ADMIN', '68', NULL, NULL, NULL, NULL, NULL),
('USER', '68', NULL, NULL, NULL, NULL, NULL),
('KBT', '68', NULL, NULL, NULL, NULL, NULL),
('CAB', '68', NULL, NULL, NULL, NULL, NULL),
('DIV', '68', NULL, NULL, NULL, NULL, NULL),
('SUB', '62', NULL, NULL, NULL, NULL, NULL),
('UKP', '62', NULL, NULL, NULL, NULL, NULL),
('UKP', '9', NULL, NULL, NULL, NULL, NULL),
('UKP', '2', NULL, NULL, NULL, NULL, NULL),
('SUB', '9', NULL, NULL, NULL, NULL, NULL),
('SUB', '2', NULL, NULL, NULL, NULL, NULL),
('DVMR', '60', NULL, NULL, NULL, NULL, NULL),
('DVMR', '62', NULL, NULL, NULL, NULL, NULL),
('DVMR', '68', NULL, NULL, NULL, NULL, NULL),
('PROJECT', '8', NULL, NULL, NULL, NULL, NULL),
('UKP', '8', NULL, NULL, NULL, NULL, NULL),
('SUB', '8', NULL, NULL, NULL, NULL, NULL),
('PROJECT', '14', NULL, NULL, NULL, NULL, NULL),
('UKP', '14', NULL, NULL, NULL, NULL, NULL),
('SUB', '14', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sys_roles`
--

CREATE TABLE `sys_roles` (
  `role_id` varchar(32) NOT NULL DEFAULT '',
  `role_name` varchar(255) DEFAULT NULL,
  `order_num` int(11) NOT NULL DEFAULT '1',
  `creator` varchar(32) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updater` varchar(32) DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_roles`
--

INSERT INTO `sys_roles` (`role_id`, `role_name`, `order_num`, `creator`, `created`, `updater`, `updated`) VALUES
('ADMIN', 'Administrator', 99, NULL, NULL, NULL, NULL),
('USER', 'Pengguna', 100, NULL, NULL, NULL, NULL),
('PROJECT', 'Proyek', 1, NULL, NULL, NULL, NULL),
('KBT', 'KBT', 2, NULL, NULL, NULL, NULL),
('CAB', 'Cabang', 3, NULL, NULL, NULL, NULL),
('DIV', 'Divisi', 4, NULL, NULL, NULL, NULL),
('SUB', 'Perusahaan Anak', 6, NULL, NULL, NULL, NULL),
('UKP', 'Unit Kantor Pusat', 5, NULL, NULL, NULL, NULL),
('DVMR', 'Div. Manajemen Risiko', 8, NULL, NULL, NULL, NULL),
('DVPB', 'Div. Pengembangan Usaha', 7, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` char(12) CHARACTER SET utf8 NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `address` text NOT NULL,
  `lang` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `role`, `is_active`, `name`, `address`, `lang`) VALUES
('1', 'bagus', 'muhamadbagussantoso@gmail.com', '17b38fc02fd7e92f3edeb6318e3066d8', 1, 1, 'Muhamad Bagus Santoso', '', 'in');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`),
  ADD UNIQUE KEY `supplier` (`id_supplier`,`name`,`phone`,`address`);

--
-- Indexes for table `supply_order`
--
ALTER TABLE `supply_order`
  ADD PRIMARY KEY (`id_supply_order`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `id_warehouse` (`id_warehouse`),
  ADD KEY `reference` (`reference`);

--
-- Indexes for table `sys_lookup_types`
--
ALTER TABLE `sys_lookup_types`
  ADD PRIMARY KEY (`type_code`);

--
-- Indexes for table `sys_lookup_values`
--
ALTER TABLE `sys_lookup_values`
  ADD PRIMARY KEY (`lookup_id`);

--
-- Indexes for table `sys_modules`
--
ALTER TABLE `sys_modules`
  ADD PRIMARY KEY (`module_id`),
  ADD UNIQUE KEY `module_code` (`module_code`);

--
-- Indexes for table `sys_privileges`
--
ALTER TABLE `sys_privileges`
  ADD PRIMARY KEY (`role_id`,`module_id`);

--
-- Indexes for table `sys_roles`
--
ALTER TABLE `sys_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `idx_lastname` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supply_order`
--
ALTER TABLE `supply_order`
  MODIFY `id_supply_order` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_lookup_values`
--
ALTER TABLE `sys_lookup_values`
  MODIFY `lookup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `sys_modules`
--
ALTER TABLE `sys_modules`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
