-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2014 at 10:27 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sipsiko_multicompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesses`
--

CREATE TABLE IF NOT EXISTS `accesses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `params` text,
  `status_id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug_accesses_unique` (`slug`),
  KEY `status_id_accesses_index` (`status_id`),
  KEY `created_by_accesses_index` (`created_by`),
  KEY `updated_by_accesses_index` (`updated_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `accesses`
--

INSERT INTO `accesses` (`id`, `slug`, `name`, `url`, `params`, `status_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'admin-answer-create', 'Create Answer', 'admin/answer/create', 'id:true;type_id:true', 2, 1, NULL, '2014-04-26 22:11:26', NULL),
(2, 'admin-answer-delete', 'Delete Answer', 'admin/answer/delete', 'id:true', 2, 1, NULL, '2014-04-26 22:11:26', NULL),
(3, 'admin-dashboard', 'Dashboard Index', 'admin/dashboard', 'id:true', 2, 1, NULL, '2014-04-26 22:11:26', NULL),
(4, 'admin-dashboard-index', 'Dasboard Index', 'admin/dashboard/index', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(5, 'admin-question-create', 'Create Question', 'admin/question/create', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(6, 'admin-question-update', 'Update Question', 'admin/question/update', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(7, 'admin-question-delete', 'Delete Question', 'admin/question/delete', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(8, 'admin-role', 'Role Index', 'admin/role', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(9, 'admin-role-index', 'Role Index', 'admin/role/index', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(10, 'admin-role-view', 'View Role', 'admin/role/view', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(11, 'admin-role-create', 'Create Role', 'admin/role/create', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(12, 'admin-role-update', 'Update Role', 'admin/role/update', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(13, 'admin-role-delete', 'Delete Role', 'admin/role/delete', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(14, 'admin-tag', 'Tag Index', 'admin/tag', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(15, 'admin-tag-index', 'Tag Index', 'admin/tag/index', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(16, 'admin-tag-view', 'View Tag', 'admin/tag/view', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(17, 'admin-tag-create', 'Create Tag', 'admin/tag/create', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(18, 'admin-tag-update', 'Update Tag', 'admin/tag/update', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(19, 'admin-tag-delete', 'Delete Tag', 'admin/tag/delete', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(20, 'admin-test', 'Test Expert Index', 'admin/test', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(21, 'admin-test-index', 'Test Expert Index', 'admin/test/index', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(22, 'admin-test-view', 'View Expert Test', 'admin/test/view', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(23, 'admin-test-create', 'Create Expert Test', 'admin/test/create', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(24, 'admin-test-update', 'Update Expert Test', 'admin/test/update', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(25, 'admin-test-delete', 'Delete Expert Test', 'admin/test/delete', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(26, 'admin-test-generatevalidation', 'Generate Expert Validation Test', 'admin/test/generatevalidation', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(27, 'admin-test-result', 'Result Expert Test', 'admin/test/result', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(28, 'admin-test-viewcompany', 'View Company Test', 'admin/test/viewcompany', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(29, 'admin-test-updatecompany', 'Update Company Test', 'admin/test/updatecompany', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(30, 'admin-test-deletecompany', 'Delete Company Test', 'admin/test/deletecompany', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(31, 'admin-test-company', 'Company Test Index', 'admin/test/company', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(32, 'admin-test-active', 'Company Active Test', 'admin/test/active', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(33, 'admin-test-generate', 'Generate Company Test', 'admin/test/generate', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(34, 'admin-test-public', 'Member Public Test', 'admin/test/public', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(35, 'admin-type', 'Type Index', 'admin/type', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(36, 'admin-type-index', 'Type Index', 'admin/type/index', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(37, 'admin-type-view', 'View Type', 'admin/type/view', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(38, 'admin-type-create', 'Create Type', 'admin/type/create', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(39, 'admin-type-update', 'Update Type', 'admin/type/update', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(40, 'admin-type-delete', 'Delete Type', 'admin/type/delete', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(41, 'admin-user', 'User Index', 'admin/user', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(42, 'admin-user-index', 'User Index', 'admin/user/index', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(43, 'admin-user-view', 'View User', 'admin/user/view', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(44, 'admin-user-create', 'Create User', 'admin/user/create', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(45, 'admin-user-update', 'Update User', 'admin/user/update', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(46, 'admin-user-delete', 'Delete User', 'admin/user/delete', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(47, 'admin-usertest-validation', 'Expert Validation User Test', 'admin/usertest/validation', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(48, 'admin-usertest-savevalidationanswer', 'Expert Save Validation Answer User Test', 'admin/usertest/savevalidationanswer', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(49, 'admin-usertest-savevalidationspenttime', 'Expert Validation Spent Time User Test', 'admin/usertest/savevalidationspenttime', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(50, 'admin-usertest-validationview', 'Expert Validation View User Test', 'admin/usertest/validationview', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(51, 'admin-usertest-validationdelete', 'Expert Validation Delete User Test', 'admin/usertest/validationdelete', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(52, 'admin-usertest-publictest', 'Expert Public User Test', 'admin/usertest/publictest', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(53, 'admin-usertest-publicresult', 'Expert Public Result User Test', 'admin/usertest/validation', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(54, 'admin-usertest', 'User Test Index', 'admin/usertest', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(55, 'admin-usertest-index', 'User Test Index', 'admin/usertest/index', NULL, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(56, 'admin-usertest-view', 'View User Test', 'admin/usertest/view', 'id:true', 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(57, 'admin-usertest-create', 'Create User Test', 'admin/usertest/create', NULL, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(58, 'admin-usertest-update', 'Update User Test', 'admin/usertest/update', 'id:true', 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(59, 'admin-usertest-delete', 'Delete User Test', 'admin/usertest/delete', 'id:true', 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(60, 'admin-usertest-membertest', 'Member User Test Index', 'admin/usertest/membertest', NULL, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(61, 'admin-usertest-result', 'Company Result User Test', 'admin/usertest/result', NULL, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(62, 'admin-usertest-settestvariable', 'Company Set Test Variable User Test', 'admin/usertest/settestvariable', 'id:true', 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(63, 'admin-usertest-member', 'Member User Test Index', 'admin/usertest/member', NULL, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(64, 'admin-usertest-test', 'Member Test User Test', 'admin/usertest/test', 'id:true', 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(65, 'admin-usertest-savetestanswer', 'Member Set Test Answer User Test', 'admin/usertest/savetestanswer', NULL, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(66, 'admin-usertest-setspenttime', 'Member Set Spent Time User Test', 'admin/usertest/setspenttime', NULL, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(67, 'admin-usertest-memberresult', 'Member User Test Result', 'admin/usertest/memberresult', NULL, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(68, 'admin-usertest-generate', 'Member Generate User Test', 'admin/usertest/generate', 'id:true', 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(69, 'admin-usertest-viewmember', 'Member View User Test', 'admin/usertest/viewmember', 'id:true', 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(70, 'admin-variable', 'Variable Index', 'admin/variable', NULL, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(71, 'admin-variable-index', 'Variable Index', 'admin/variable/index', NULL, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(72, 'admin-variable-view', 'View Variable', 'admin/variable/view', 'id:true', 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(73, 'admin-variable-create', 'Create Variable', 'admin/variable/create', NULL, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(74, 'admin-variable-update', 'Update Variable', 'admin/variable/update', 'id:true', 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(75, 'admin-variable-delete', 'Delete Variable', 'admin/variable/delete', 'id:true', 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(76, 'admin-variabledetail', 'Variable Detail Index', 'admin/variabledetail', NULL, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(77, 'admin-variabledetail-index', 'Variable Detail Index', 'admin/variabledetail/index', NULL, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(78, 'admin-variabledetail-view', 'View Variable Detail', 'admin/variabledetail/view', 'id:true', 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(79, 'admin-variabledetail-create', 'Create Variable Detail', 'admin/variabledetail/create', NULL, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(80, 'admin-variabledetail-update', 'Update Variable Detail', 'admin/variabledetail/update', 'id:true', 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(81, 'admin-variabledetail-delete', 'Delete Variable Detail', 'admin/variabledetail/delete', 'id:true', 2, 1, NULL, '2014-04-26 22:11:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `value` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `variable_id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `status_id_answers_index` (`status_id`),
  KEY `question_id_answers_index` (`question_id`),
  KEY `variable_id_answers_index` (`variable_id`),
  KEY `created_by_answers_index` (`created_by`),
  KEY `updated_by_answers_index` (`updated_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=713 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `description`, `value`, `status_id`, `question_id`, `variable_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Mengikuti ilustrasi cara merangkainya', 1, 2, 1, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(2, 'Mendengarkan orang membacakan instruksinya untukmu', 1, 2, 1, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(3, 'Langsung mengerjakannya tanpa mengikuti instruksi', 1, 2, 1, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(4, 'Membolak-balik buku membaca materi ulangan', 1, 2, 2, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(5, 'Menghafal materi ulangan sambil mengucapkannya keras-keras', 1, 2, 2, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(6, 'Berjalan bolak-balik sambil menghafal', 1, 2, 2, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(7, 'Membacanya dengan tenang, cepat dan tekun', 1, 2, 3, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(8, 'Membaca sambil menggerakkan bibir dan mengucapkannya', 1, 2, 3, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(9, 'Menelusuri tiap-tiap kata dengan jari telunjukmu', 1, 2, 3, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(10, 'Berbicara dengan cepat', 1, 2, 4, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(11, 'Berbicara dengan kecepatan sedang', 1, 2, 4, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(12, 'Berbicara dengan kecepatan lambat', 1, 2, 4, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(13, 'Menonton televisi, membaca, mengisi TTS', 1, 2, 5, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(14, 'Mendengarkan radio, mengobrol', 1, 2, 5, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(15, 'Berjalan-jalan, olah raga, hiking', 1, 2, 5, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(16, 'Ekspresi wajah', 1, 2, 6, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(17, 'Intonasi suara', 1, 2, 6, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(18, 'Gerak tubuh', 1, 2, 6, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(19, 'Melamun, menatap ke angkasa', 1, 2, 7, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(20, 'Bebicara dengan diri sendiri', 1, 2, 7, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(21, 'Gelisah tak bisa duduk tenang', 1, 2, 7, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(22, 'Menulis, menggambar, Mendesain', 1, 2, 8, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(23, 'Berdebat, bercerita dan bermain musik', 1, 2, 8, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(24, 'Menari , berolahraga, membuat kerajinan tangan', 1, 2, 8, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(25, '"Lihat baik-baik…"', 1, 2, 9, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(26, '"Dengarkan baik-baik…"', 1, 2, 9, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(27, '"Rasakan baik-baik…"', 1, 2, 9, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(28, 'Kamu memperhatikan wajah guru saat beliau berbicara/menerangkan', 1, 2, 10, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(29, 'Kamu mendengarkan saja waktu guru menerangkan', 1, 2, 10, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(30, 'Saat guru menerangkan, tangan kamu tidak bisa diam, memain-mainkan ballpoint', 1, 2, 10, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(31, 'Hampir selalu', 3, 2, 11, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(32, 'Kadang-kadang', 2, 2, 11, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(33, 'Jarang sekali', 1, 2, 11, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(34, 'Hampir selalu', 3, 2, 12, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(35, 'Kadang-kadang', 2, 2, 12, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(36, 'Jarang sekali', 1, 2, 12, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(37, 'Hampir selalu', 3, 2, 13, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(38, 'Kadang-kadang', 2, 2, 13, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(39, 'Jarang sekali', 1, 2, 13, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(40, 'Hampir selalu', 3, 2, 14, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(41, 'Kadang-kadang', 2, 2, 14, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(42, 'Jarang sekali', 1, 2, 14, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(43, 'Hampir selalu', 3, 2, 15, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(44, 'Kadang-kadang', 2, 2, 15, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(45, 'Jarang sekali', 1, 2, 15, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(46, 'Hampir selalu', 3, 2, 16, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(47, 'Kadang-kadang', 2, 2, 16, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(48, 'Jarang sekali', 1, 2, 16, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(49, 'Hampir selalu', 3, 2, 17, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(50, 'Kadang-kadang', 2, 2, 17, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(51, 'Jarang sekali', 1, 2, 17, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(52, 'Hampir selalu', 3, 2, 18, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(53, 'Kadang-kadang', 2, 2, 18, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(54, 'Jarang sekali', 1, 2, 18, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(55, 'Hampir selalu', 3, 2, 19, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(56, 'Kadang-kadang', 2, 2, 19, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(57, 'Jarang sekali', 1, 2, 19, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(58, 'Hampir selalu', 3, 2, 20, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(59, 'Kadang-kadang', 2, 2, 20, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(60, 'Jarang sekali', 1, 2, 20, 45, 2, NULL, '2014-04-26 22:11:20', NULL),
(61, 'Hampir selalu', 3, 2, 21, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(62, 'Kadang-kadang', 2, 2, 21, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(63, 'Jarang sekali', 1, 2, 21, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(64, 'Hampir selalu', 3, 2, 22, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(65, 'Kadang-kadang', 2, 2, 22, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(66, 'Jarang sekali', 1, 2, 22, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(67, 'Hampir selalu', 3, 2, 23, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(68, 'Kadang-kadang', 2, 2, 23, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(69, 'Jarang sekali', 1, 2, 23, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(70, 'Hampir selalu', 3, 2, 24, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(71, 'Kadang-kadang', 2, 2, 24, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(72, 'Jarang sekali', 1, 2, 24, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(73, 'Hampir selalu', 3, 2, 25, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(74, 'Kadang-kadang', 2, 2, 25, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(75, 'Jarang sekali', 1, 2, 25, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(76, 'Hampir selalu', 3, 2, 26, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(77, 'Kadang-kadang', 2, 2, 26, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(78, 'Jarang sekali', 1, 2, 26, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(79, 'Hampir selalu', 3, 2, 27, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(80, 'Kadang-kadang', 2, 2, 27, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(81, 'Jarang sekali', 1, 2, 27, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(82, 'Hampir selalu', 3, 2, 28, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(83, 'Kadang-kadang', 2, 2, 28, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(84, 'Jarang sekali', 1, 2, 28, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(85, 'Hampir selalu', 3, 2, 29, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(86, 'Kadang-kadang', 2, 2, 29, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(87, 'Jarang sekali', 1, 2, 29, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(88, 'Hampir selalu', 3, 2, 30, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(89, 'Kadang-kadang', 2, 2, 30, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(90, 'Jarang sekali', 1, 2, 30, 46, 2, NULL, '2014-04-26 22:11:20', NULL),
(91, 'Hampir selalu', 3, 2, 31, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(92, 'Kadang-kadang', 2, 2, 31, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(93, 'Jarang sekali', 1, 2, 31, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(94, 'Hampir selalu', 3, 2, 32, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(95, 'Kadang-kadang', 2, 2, 32, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(96, 'Jarang sekali', 1, 2, 32, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(97, 'Hampir selalu', 3, 2, 33, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(98, 'Kadang-kadang', 2, 2, 33, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(99, 'Jarang sekali', 1, 2, 33, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(100, 'Hampir selalu', 3, 2, 34, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(101, 'Kadang-kadang', 2, 2, 34, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(102, 'Jarang sekali', 1, 2, 34, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(103, 'Hampir selalu', 3, 2, 35, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(104, 'Kadang-kadang', 2, 2, 35, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(105, 'Jarang sekali', 1, 2, 35, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(106, 'Hampir selalu', 3, 2, 36, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(107, 'Kadang-kadang', 2, 2, 36, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(108, 'Jarang sekali', 1, 2, 36, 47, 2, NULL, '2014-04-26 22:11:20', NULL),
(109, 'Hampir selalu', 3, 2, 37, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(110, 'Kadang-kadang', 2, 2, 37, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(111, 'Jarang sekali', 1, 2, 37, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(112, 'Hampir selalu', 3, 2, 38, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(113, 'Kadang-kadang', 2, 2, 38, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(114, 'Jarang sekali', 1, 2, 38, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(115, 'Hampir selalu', 3, 2, 39, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(116, 'Kadang-kadang', 2, 2, 39, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(117, 'Jarang sekali', 1, 2, 39, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(118, 'Hampir selalu', 3, 2, 40, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(119, 'Kadang-kadang', 2, 2, 40, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(120, 'Jarang sekali', 1, 2, 40, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(121, 'Benar', 1, 2, 41, 45, 2, NULL, '2014-04-26 22:11:21', NULL),
(122, 'Salah', 0, 2, 41, 45, 2, NULL, '2014-04-26 22:11:21', NULL),
(123, 'Benar', 1, 2, 42, 46, 2, NULL, '2014-04-26 22:11:21', NULL),
(124, 'Salah', 0, 2, 42, 46, 2, NULL, '2014-04-26 22:11:21', NULL),
(125, 'Benar', 1, 2, 43, 46, 2, NULL, '2014-04-26 22:11:21', NULL),
(126, 'Salah', 0, 2, 43, 46, 2, NULL, '2014-04-26 22:11:21', NULL),
(127, 'Benar', 1, 2, 44, 45, 2, NULL, '2014-04-26 22:11:21', NULL),
(128, 'Salah', 0, 2, 44, 45, 2, NULL, '2014-04-26 22:11:21', NULL),
(129, 'Benar', 1, 2, 45, 45, 2, NULL, '2014-04-26 22:11:21', NULL),
(130, 'Salah', 0, 2, 45, 45, 2, NULL, '2014-04-26 22:11:21', NULL),
(131, 'Benar', 1, 2, 46, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(132, 'Salah', 0, 2, 46, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(133, 'Benar', 1, 2, 47, 46, 2, NULL, '2014-04-26 22:11:21', NULL),
(134, 'Salah', 0, 2, 47, 46, 2, NULL, '2014-04-26 22:11:21', NULL),
(135, 'Benar', 1, 2, 48, 46, 2, NULL, '2014-04-26 22:11:21', NULL),
(136, 'Salah', 0, 2, 48, 46, 2, NULL, '2014-04-26 22:11:21', NULL),
(137, 'Benar', 1, 2, 49, 45, 2, NULL, '2014-04-26 22:11:21', NULL),
(138, 'Salah', 0, 2, 49, 45, 2, NULL, '2014-04-26 22:11:21', NULL),
(139, 'Benar', 1, 2, 50, 46, 2, NULL, '2014-04-26 22:11:21', NULL),
(140, 'Salah', 0, 2, 50, 46, 2, NULL, '2014-04-26 22:11:21', NULL),
(141, 'Benar', 1, 2, 51, 45, 2, NULL, '2014-04-26 22:11:21', NULL),
(142, 'Salah', 0, 2, 51, 45, 2, NULL, '2014-04-26 22:11:21', NULL),
(143, 'Benar', 1, 2, 52, 45, 2, NULL, '2014-04-26 22:11:21', NULL),
(144, 'Salah', 0, 2, 52, 45, 2, NULL, '2014-04-26 22:11:21', NULL),
(145, 'Benar', 1, 2, 53, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(146, 'Salah', 0, 2, 53, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(147, 'Benar', 1, 2, 54, 46, 2, NULL, '2014-04-26 22:11:21', NULL),
(148, 'Salah', 0, 2, 54, 46, 2, NULL, '2014-04-26 22:11:21', NULL),
(149, 'Benar', 1, 2, 55, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(150, 'Salah', 0, 2, 55, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(151, 'Benar', 1, 2, 56, 45, 2, NULL, '2014-04-26 22:11:21', NULL),
(152, 'Salah', 0, 2, 56, 45, 2, NULL, '2014-04-26 22:11:21', NULL),
(153, 'Benar', 1, 2, 57, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(154, 'Salah', 0, 2, 57, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(155, 'Benar', 1, 2, 58, 46, 2, NULL, '2014-04-26 22:11:21', NULL),
(156, 'Salah', 0, 2, 58, 46, 2, NULL, '2014-04-26 22:11:21', NULL),
(157, 'Benar', 1, 2, 59, 45, 2, NULL, '2014-04-26 22:11:21', NULL),
(158, 'Salah', 0, 2, 59, 45, 2, NULL, '2014-04-26 22:11:21', NULL),
(159, 'Benar', 1, 2, 60, 46, 2, NULL, '2014-04-26 22:11:21', NULL),
(160, 'Salah', 0, 2, 60, 46, 2, NULL, '2014-04-26 22:11:21', NULL),
(161, 'Benar', 1, 2, 61, 45, 2, NULL, '2014-04-26 22:11:21', NULL),
(162, 'Salah', 0, 2, 61, 45, 2, NULL, '2014-04-26 22:11:21', NULL),
(163, 'Benar', 1, 2, 62, 45, 2, NULL, '2014-04-26 22:11:21', NULL),
(164, 'Salah', 0, 2, 62, 45, 2, NULL, '2014-04-26 22:11:21', NULL),
(165, 'Benar', 1, 2, 63, 46, 2, NULL, '2014-04-26 22:11:21', NULL),
(166, 'Salah', 0, 2, 63, 46, 2, NULL, '2014-04-26 22:11:21', NULL),
(167, 'Benar', 1, 2, 64, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(168, 'Salah', 0, 2, 64, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(169, 'Benar', 1, 2, 65, 46, 2, NULL, '2014-04-26 22:11:21', NULL),
(170, 'Salah', 0, 2, 65, 46, 2, NULL, '2014-04-26 22:11:21', NULL),
(171, 'Benar', 1, 2, 66, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(172, 'Salah', 0, 2, 66, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(173, 'Benar', 1, 2, 67, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(174, 'Salah', 0, 2, 67, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(175, 'Benar', 1, 2, 68, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(176, 'Salah', 0, 2, 68, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(177, 'Benar', 1, 2, 69, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(178, 'Salah', 0, 2, 69, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(179, 'Benar', 1, 2, 70, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(180, 'Salah', 0, 2, 70, 47, 2, NULL, '2014-04-26 22:11:21', NULL),
(181, 'Kanan', 1, 2, 71, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(182, 'Kiri', 1, 2, 71, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(183, 'Subjektif', 1, 2, 72, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(184, 'Objectif', 1, 2, 72, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(185, 'Ya', 1, 2, 73, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(186, 'Tidak', 1, 2, 73, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(187, 'Ya', 1, 2, 74, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(188, 'Tidak', 1, 2, 74, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(189, 'Tidak', 1, 2, 75, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(190, 'Ya', 1, 2, 75, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(191, 'Meniru gerakan instruktur dan merasakan "musik" yang mengiringi', 1, 2, 76, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(192, 'Mempelajari tahapan tiap-tiap langkah sambil berkata-kata pada diri sendiri selama melakukannya', 1, 2, 76, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(193, 'Memindahkan', 1, 2, 77, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(194, 'Membiarkan', 1, 2, 77, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(195, 'Tidak', 1, 2, 78, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(196, 'Ya', 1, 2, 78, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(197, 'Geometri', 1, 2, 79, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(198, 'Aljabar', 1, 2, 79, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(199, 'Wajah', 1, 2, 80, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(200, 'Nama', 1, 2, 80, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(201, 'Melalui gambar', 1, 2, 81, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(202, 'Melalui tulisan', 1, 2, 81, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(203, 'Nada bicara', 1, 2, 82, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(204, 'Apa yang dikatakan', 1, 2, 82, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(205, 'Hampir selalu', 1, 2, 83, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(206, 'Jarang', 1, 2, 83, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(207, 'Berantakan dengan barang-barang yang mungkin kamu perlukan', 1, 2, 84, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(208, 'Rapi teratur', 1, 2, 84, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(209, 'Menangkap ide suatu paragraf', 1, 2, 85, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(210, 'Menangkap detail suatu paragraf', 1, 2, 85, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(211, 'Berbaring', 1, 2, 86, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(212, 'Duduk', 1, 2, 86, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(213, 'Berbicara tentang atau melakukan hal-hal yang lucu', 1, 2, 87, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(214, '. Berbicara tentang atau melakukan hal-hal yang masuk akal', 1, 2, 87, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(215, 'Kamu dapat menjawab tapi tidak tahu bagaimana cara menjelaskannya', 1, 2, 88, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(216, 'Kamu dapat menjelaskan dengan rinci bagaimana kamu mendapatkan jawabannya', 1, 2, 88, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(217, 'Jarang sekali', 1, 2, 89, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(218, 'Hampir selalu', 1, 2, 89, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(219, 'Ya', 1, 2, 90, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(220, 'Tidak', 1, 2, 90, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(221, 'Ya', 1, 2, 91, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(222, 'Tidak', 1, 2, 91, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(223, 'Ya', 1, 2, 92, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(224, 'Tidak', 1, 2, 92, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(225, 'Ya', 1, 2, 93, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(226, 'Tidak', 1, 2, 93, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(227, 'Ya', 1, 2, 94, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(228, 'Tidak', 1, 2, 94, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(229, 'Ya', 1, 2, 95, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(230, 'Tidak', 1, 2, 95, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(231, 'Ya', 1, 2, 96, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(232, 'Tidak', 1, 2, 96, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(233, 'Ya', 1, 2, 97, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(234, 'Tidak', 1, 2, 97, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(235, 'Ya', 1, 2, 98, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(236, 'Tidak', 1, 2, 98, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(237, 'Ya', 1, 2, 99, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(238, 'Tidak', 1, 2, 99, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(239, 'Ya', 1, 2, 100, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(240, 'Tidak', 1, 2, 100, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(241, 'Ya', 1, 2, 101, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(242, 'Tidak', 1, 2, 101, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(243, 'Ya', 1, 2, 102, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(244, 'Tidak', 1, 2, 102, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(245, 'Ya', 1, 2, 103, 48, 2, NULL, '2014-04-26 22:11:22', NULL),
(246, 'Tidak', 1, 2, 103, 49, 2, NULL, '2014-04-26 22:11:22', NULL),
(247, 'Ya', 1, 2, 104, 48, 2, NULL, '2014-04-26 22:11:23', NULL),
(248, 'Tidak', 1, 2, 104, 49, 2, NULL, '2014-04-26 22:11:23', NULL),
(249, 'Ya', 1, 2, 105, 49, 2, NULL, '2014-04-26 22:11:23', NULL),
(250, 'Tidak', 1, 2, 105, 48, 2, NULL, '2014-04-26 22:11:23', NULL),
(251, 'Ya', 1, 2, 106, 48, 2, NULL, '2014-04-26 22:11:23', NULL),
(252, 'Tidak', 1, 2, 106, 49, 2, NULL, '2014-04-26 22:11:23', NULL),
(253, 'Suka pamer, memperlihatkan apa yang gemerlap dan kuat, terlalu bersuara', 1, 2, 107, 50, 2, NULL, '2014-04-26 22:11:23', NULL),
(254, 'Suka memerintah, mendominasi, kadang-kadang mengesalkan antar hubungan orang dewasa', 1, 2, 107, 51, 2, NULL, '2014-04-26 22:11:23', NULL),
(255, 'Menghindari perhatian akibat rasa malu', 1, 2, 107, 52, 2, NULL, '2014-04-26 22:11:23', NULL),
(256, 'Memperlihatkan sedikit emosi/mimik', 1, 2, 107, 53, 2, NULL, '2014-04-26 22:11:23', NULL),
(257, 'Kurang teratur, sehingga mempengaruhi hampir semua bidang kehidupannya', 1, 2, 108, 50, 2, NULL, '2014-04-26 22:11:23', NULL),
(258, 'Merasa sulit mengenali masalah dan perasaan orang lain', 1, 2, 108, 51, 2, NULL, '2014-04-26 22:11:23', NULL),
(259, 'Sulit memaafkan dan melupakan sakit hati yang pernah dilakukan, biasa mendendam', 1, 2, 108, 52, 2, NULL, '2014-04-26 22:11:23', NULL),
(260, 'Cenderung tidak bergairah, sering merasa bahwa bagaimanapun sesuatu tidak akan berhasil', 1, 2, 108, 53, 2, NULL, '2014-04-26 22:11:23', NULL),
(261, 'Suka menceritakan kembali suatu kisah tanpa menyadari bahwa cerita tersebut pernah diceritakan sebelumnya, selalu perlu sesuatu untuk dikatakan', 1, 2, 109, 50, 2, NULL, '2014-04-26 22:11:23', NULL),
(262, 'Berjuang, melawan untuk menerima cara lain yang tidak sesuai dengan cara yang diinginkan', 1, 2, 109, 51, 2, NULL, '2014-04-26 22:11:23', NULL),
(263, 'Sering memendam rasa tidak senang akibat merasa tersinggung oleh sesuatu', 1, 2, 109, 52, 2, NULL, '2014-04-26 22:11:23', NULL),
(264, 'Tidak bersedia ikut terlibat terutama bila rumit', 1, 2, 109, 53, 2, NULL, '2014-04-26 22:11:23', NULL),
(265, 'Punya ingatan kurang kuat, biasanya berkaitan dengan kurang disiplin dan tidak mau repot-repot mencatat hal-hal yang tidak menyenangkan', 1, 2, 110, 50, 2, NULL, '2014-04-26 22:11:23', NULL),
(266, 'Langsung, blak-blakan, tidak sungkan mengatakan apa yang dipikirkan', 1, 2, 110, 51, 2, NULL, '2014-04-26 22:11:23', NULL),
(267, 'Bersikeras tentang persoalan sepele, minta perhatian besar pada persoalan yang tidak penting', 1, 2, 110, 52, 2, NULL, '2014-04-26 22:11:23', NULL),
(268, 'Sering merasa sangat khawatir, sedih, dan gelisah', 1, 2, 110, 53, 2, NULL, '2014-04-26 22:11:23', NULL),
(269, 'Lebih banyak bicara daripada mendengarkan, bila sudah bicara sulit berhenti', 1, 2, 111, 50, 2, NULL, '2014-04-26 22:11:23', NULL),
(270, 'Sulit bertahan untuk menghadapi kekesalan', 1, 2, 111, 51, 2, NULL, '2014-04-26 22:11:23', NULL),
(271, 'Kurang percaya diri', 1, 2, 111, 52, 2, NULL, '2014-04-26 22:11:23', NULL),
(272, 'Sulit dalam membuat keputusan', 1, 2, 111, 53, 2, NULL, '2014-04-26 22:11:23', NULL),
(273, 'Bisa bergairah sesaat dan sedih pada saat berikutnya. Bersedia membantu kemudian menghilang. Berjanji akan datang tapi kemudian lupa untuk muncul', 1, 2, 112, 50, 2, NULL, '2014-04-26 22:11:23', NULL),
(274, 'Merasa sulit memperlihatkan kasih sayang dengan terbuka', 1, 2, 112, 51, 2, NULL, '2014-04-26 22:11:23', NULL),
(275, 'Tuntutannya akan kesempurnaan terlalu tinggi dan dapat membuat orang lain menjauhinya', 1, 2, 112, 52, 2, NULL, '2014-04-26 22:11:23', NULL),
(276, 'Tidak tertarik pada perkumpulan atau kelompok', 1, 2, 112, 53, 2, NULL, '2014-04-26 22:11:23', NULL),
(277, 'Tidak punya cara yang konsisten untuk melakukan banyak hal', 1, 2, 113, 50, 2, NULL, '2014-04-26 22:11:23', NULL),
(278, 'Bersikeras memaksakan caranya sendiri', 1, 2, 113, 51, 2, NULL, '2014-04-26 22:11:23', NULL),
(279, 'Standar yang ditetapkan begitu tinggi sehingga orang lain sulit memuaskannya', 1, 2, 113, 52, 2, NULL, '2014-04-26 22:11:23', NULL),
(280, 'Lambat dalam bergerak dan sulit untuk ikut terlibat', 1, 2, 113, 53, 2, NULL, '2014-04-26 22:11:23', NULL),
(281, 'Memperbolehkan orang lain, termasuk anak-anak untuk melakukan apa saja sesukanya untuk menghindari diri kita tidak disukai', 1, 2, 114, 50, 2, NULL, '2014-04-26 22:11:23', NULL),
(282, 'Punya harga diri tinggi dan menganggap diri selalu benar dan yang terbaik dalam pekerjaan', 1, 2, 114, 51, 2, NULL, '2014-04-26 22:11:23', NULL),
(283, 'Dalam mengharapkan yang terbaik, biasanya melihat sisi buruk sesuatu terlebih dahulu', 1, 2, 114, 52, 2, NULL, '2014-04-26 22:11:23', NULL),
(284, 'Memiliki kepribadian yang biasa saja dan tidak suka memperlihatkan banyak emosi', 1, 2, 114, 53, 2, NULL, '2014-04-26 22:11:23', NULL),
(285, 'Memiliki perangai seperti anak-anak yang mengutarakan diri dengan ngambek dan berbuat berlebihan tetapi kemudian melupakannya seketika', 1, 2, 115, 50, 2, NULL, '2014-04-26 22:11:23', NULL),
(286, ' Mengobarkan perdebatan karena biasanya selalu benar dan terkadang tidak peduli bagaimana situasi saat itu', 1, 2, 115, 51, 2, NULL, '2014-04-26 22:11:23', NULL),
(287, 'Mudah merasa terasing dari orang lain dikarenakan rasa tidak aman atau takut jangan-jangan orang lain tidak merasa senang bersamanya', 1, 2, 115, 52, 2, NULL, '2014-04-26 22:11:23', NULL),
(288, 'Bukan orang yang suka menetapkan tujuan dan tidak berharap menjadi orang yang seperti itu', 1, 2, 115, 53, 2, NULL, '2014-04-26 22:11:23', NULL),
(289, 'Memiliki perspektif yang sederhana dan kekanak-kanakan, kurang pengertian terhadap tingkat kehidupan yang lebih mendalam', 1, 2, 116, 50, 2, NULL, '2014-04-26 22:11:23', NULL),
(290, 'Penuh keyakinan, semangat, dan keberanian (sering dalam pengertian negatif)', 1, 2, 116, 51, 2, NULL, '2014-04-26 22:11:23', NULL),
(291, 'Sikapnya jarang positif dan sering hanya melihat sisi buruk dari setiap situasi', 1, 2, 116, 52, 2, NULL, '2014-04-26 22:11:23', NULL),
(292, 'Mudah bergaul, tidak peduli, dan masa bodoh', 1, 2, 116, 53, 2, NULL, '2014-04-26 22:11:23', NULL),
(293, 'Merasa senang mendapat penghargaan dari orang lain. Sebagai penghibur menyukai tepuk tangan, tawa, dan penerimaan penonton', 1, 2, 117, 50, 2, NULL, '2014-04-26 22:11:23', NULL),
(294, 'Menetapkan tujuan secara agresif serta harus terus produktif, merasa bersalah bila beristirahat, bukan terdorong oleh keinginan untuk sempurna melainkan imbalan', 1, 2, 117, 51, 2, NULL, '2014-04-26 22:11:23', NULL),
(295, 'Suka menarik diri dan memerlukan banyak waktu untuk sendirian atau mengasingkan diri', 1, 2, 117, 52, 2, NULL, '2014-04-26 22:11:23', NULL),
(296, 'Secara konsisten merasa terganggu atau resah', 1, 2, 117, 53, 2, NULL, '2014-04-26 22:11:23', NULL),
(297, 'Suka berbicara dan sulit mendengarkan', 1, 2, 118, 50, 2, NULL, '2014-04-26 22:11:23', NULL),
(298, 'Kadang-kadang menyatakan diri dengan cara yang agak menyinggung perasaan dan kurang pertimbangan', 1, 2, 118, 51, 2, NULL, '2014-04-26 22:11:23', NULL),
(299, 'Terlalu introspektif dan mudah tersinggung kalau disalahpahami', 1, 2, 118, 52, 2, NULL, '2014-04-26 22:11:23', NULL),
(300, 'Lebih suka mundur dari situasi sulit', 1, 2, 118, 53, 2, NULL, '2014-04-26 22:11:23', NULL),
(301, 'Kurang memiliki kemampuan dalam membuat kehidupan menjadi teratur', 1, 2, 119, 50, 2, NULL, '2014-04-26 22:11:23', NULL),
(302, 'Dengan paksa mengambil kontrol atas situasi atau orang lain, biasanya dengan mengatakan apa yang harus dilakukan', 1, 2, 119, 51, 2, NULL, '2014-04-26 22:11:23', NULL),
(303, 'Hampir sepanjang waktu merasa tertekan', 1, 2, 119, 52, 2, NULL, '2014-04-26 22:11:23', NULL),
(304, 'Mempunyai ciri khas selalu tidak tetap dan kurang keyakinan bahwa suatu hal akan berhasil', 1, 2, 119, 53, 2, NULL, '2014-04-26 22:11:23', NULL),
(305, 'Tidak menentu, serba berlawanan dengan tindakan dan emosi yang tidak berdasarkan logika', 1, 2, 120, 50, 2, NULL, '2014-04-26 22:11:23', NULL),
(306, 'Tampaknya tidak bisa menerima sikap, pandangan, dan cara orang lain', 1, 2, 120, 51, 2, NULL, '2014-04-26 22:11:23', NULL),
(307, 'Pemikiran dan perhatian ditujukan ke dalam, hidup di dalam diri sendiri', 1, 2, 120, 52, 2, NULL, '2014-04-26 22:11:23', NULL),
(308, 'Merasa bahwa kebanyakan hal tidak penting dalam suatu cara atau cara yang lain', 1, 2, 120, 53, 2, NULL, '2014-04-26 22:11:23', NULL),
(309, 'Hidup dalam keadaan tidak teratur, tidak dapat menemukan banyak benda', 1, 2, 121, 50, 2, NULL, '2014-04-26 22:11:23', NULL),
(310, 'Mempengaruhi dengan cerdik dan penuh tipu untuk kepentingan sendiri; dengan suatu cara dapat memaksakan kehendak', 1, 2, 121, 51, 2, NULL, '2014-04-26 22:11:23', NULL),
(311, 'Tidak punya emosi yang tinggi, tetapi biasanya semangatnya merosot sekali, apalagi bila merasa tidak dihargai', 1, 2, 121, 52, 2, NULL, '2014-04-26 22:11:23', NULL),
(312, 'Bicara pelan kalau didesak, tidak mau repot-repot bicara dengan jelas', 1, 2, 121, 53, 2, NULL, '2014-04-26 22:11:23', NULL),
(313, 'Perlu menjadi pusat perhatian, ingin dilihat', 1, 2, 122, 50, 2, NULL, '2014-04-26 22:11:23', NULL),
(314, 'Bertekad memaksakan kehendaknya, tidak mudah dibujuk, keras kepala', 1, 2, 122, 51, 2, NULL, '2014-04-26 22:11:23', NULL),
(315, 'Tidak mudah percaya, mempertanyakan motif di balik suatu perkataan', 1, 2, 122, 52, 2, NULL, '2014-04-26 22:11:23', NULL),
(316, 'Tidak sering bertindak atau berpikir cepat, sangat mengganggu', 1, 2, 122, 53, 2, NULL, '2014-04-26 22:11:23', NULL),
(317, 'Tawa dan suaranya dapat didengar di atas suara lainnya di di dalam ruangan', 1, 2, 123, 50, 2, NULL, '2014-04-26 22:11:23', NULL),
(318, 'Tidak ragu-ragu mengatakan benar dan dapat memegang kendali', 1, 2, 123, 51, 2, NULL, '2014-04-26 22:11:23', NULL),
(319, 'Memerlukan banyak waktu pribadi dan cenderung menghindari orang lain', 1, 2, 123, 52, 2, NULL, '2014-04-26 22:11:23', NULL),
(320, 'Menilai pekerjaan dan kegiatan dengan ukuran berapa banyak tenaga yang dibutuhkan', 1, 2, 123, 53, 2, NULL, '2014-04-26 22:11:23', NULL),
(321, 'Tidak punya kekuatan untuk berkonsentrasi atau menaruh perhatian pada sesuatu', 1, 2, 124, 50, 2, NULL, '2014-04-26 22:11:23', NULL),
(322, 'Punya kemarahan yang menuntut berdasarkan ketidaksabaran. Kemarahan yang dinyatakan saat orang lain tak bergerak cukup cepat atau tidak menyelesaikan apa yang diperintahkan', 1, 2, 124, 51, 2, NULL, '2014-04-26 22:11:23', NULL),
(323, 'Cenderung mencurigai atau tidak mempercayai gagasan orang lain', 1, 2, 124, 52, 2, NULL, '2014-04-26 22:11:23', NULL),
(324, 'Lambat untuk memulai, perlu dorongan yang kuat untuk termotivasi', 1, 2, 124, 53, 2, NULL, '2014-04-26 22:11:23', NULL),
(325, 'Menyukai kegiatan baru terus-menerus karena tidak merasa senang melakukan hal yang sama sepanjang waktu', 1, 2, 125, 50, 2, NULL, '2014-04-26 22:11:23', NULL),
(326, 'Bisa bertindak tergesa-gesa tanpa memikirkan dengan tuntas terlebih dahulu, biasanya karena ketidaksabaran', 1, 2, 125, 51, 2, NULL, '2014-04-26 22:11:23', NULL),
(327, 'Secara sadar maupun tidak mendendam, menghukum orang yang melanggar, diam-diam menahan persahabatan/kasih sayang', 1, 2, 125, 52, 2, NULL, '2014-04-26 22:11:23', NULL),
(328, 'Tidak bersedia untuk ikut terlibat dalam suatu hal', 1, 2, 125, 53, 2, NULL, '2014-04-26 22:11:23', NULL),
(329, 'Rentang perhatian kekanak-kanakan dan pendek, butuh banyak perubahan dan variasi supaya tak merasa bosan', 1, 2, 126, 50, 2, NULL, '2014-04-26 22:11:23', NULL),
(330, 'Cerdik, orang yang selalu bisa menemukan cara untuk mencapai tujuan yang diinginkan', 1, 2, 126, 51, 2, NULL, '2014-04-26 22:11:23', NULL),
(331, 'Selalu mengevaluasi dan membuat penilaian, sering memikirkan dan menyatakan reaksi negatif', 1, 2, 126, 52, 2, NULL, '2014-04-26 22:11:23', NULL),
(332, 'Sering mengendurkan pendiriannya, bahkan ketika merasa benar untuk menghindari terjadinya konflik', 1, 2, 126, 53, 2, NULL, '2014-04-26 22:11:23', NULL),
(333, 'Penuh kehidupan, sering menggunakan isyarat tangan, lengan, dan wajah secara hidup', 1, 2, 127, 50, 2, NULL, '2014-04-26 22:11:23', NULL),
(334, 'Orang yang mau melakukan sesuatu hal yang baru dan berani bertekad untuk menguasainya', 1, 2, 127, 51, 2, NULL, '2014-04-26 22:11:23', NULL),
(335, 'Suka menyelidiki bagian-bagian yang logis', 1, 2, 127, 52, 2, NULL, '2014-04-26 22:11:23', NULL),
(336, 'Mudah menyesuaikan diri dan senang dalam setiap situasi', 1, 2, 127, 53, 2, NULL, '2014-04-26 22:11:23', NULL),
(337, 'Penuh kesenangan dan selera humor yang baik', 1, 2, 128, 50, 2, NULL, '2014-04-26 22:11:23', NULL),
(338, 'Meyakinkan seseorang dengan logika dan fakta, bukan dengan pesona atau kekuasaan', 1, 2, 128, 51, 2, NULL, '2014-04-26 22:11:23', NULL),
(339, 'Melakukan sesuatu sampai selesai sebelum memulai yang lain', 1, 2, 128, 52, 2, NULL, '2014-04-26 22:11:24', NULL),
(340, 'Tampak tidak terganggu dan tenang serta menghindari setiap bentuk kekacauan', 1, 2, 128, 53, 2, NULL, '2014-04-26 22:11:24', NULL),
(341, 'Orang yang memandang bersama orang lain sebagai kesempatan untuk bersikap manis dan menghibur, bukannya sebagai tantangan atau kesempatan bisnis', 1, 2, 129, 50, 2, NULL, '2014-04-26 22:11:24', NULL),
(342, 'Orang yang yakin dengan caranya sendiri', 1, 2, 129, 51, 2, NULL, '2014-04-26 22:11:24', NULL),
(343, 'Bersedia mengorbankan dirinya untuk memenuhi kebutuhan orang lain', 1, 2, 129, 52, 2, NULL, '2014-04-26 22:11:24', NULL),
(344, 'Dengan mudah menerima pandangan atau keinginan orang lain tanpa perlu banyak mengungkapkan pendapat sendiri', 1, 2, 129, 53, 2, NULL, '2014-04-26 22:11:24', NULL),
(345, 'Bisa merebut hati orang lain melalui pesona kepribadian', 1, 2, 130, 50, 2, NULL, '2014-04-26 22:11:24', NULL),
(346, 'Mengubah setiap situasi, kejadian atau permainan sebagai sebuah kontes dan selalu bermain untuk menang', 1, 2, 130, 51, 2, NULL, '2014-04-26 22:11:24', NULL),
(347, 'Menghargai keperluan dan perasaan orang lain', 1, 2, 130, 52, 2, NULL, '2014-04-26 22:11:24', NULL),
(348, 'Mempunyai perasaan emosional tapi jarang memperlihatkannya', 1, 2, 130, 53, 2, NULL, '2014-04-26 22:11:24', NULL),
(349, 'Memperbaharui dan membantu membuat orang lain merasa senang', 1, 2, 131, 50, 2, NULL, '2014-04-26 22:11:24', NULL),
(350, 'Bisa bertindak cepat dan efektif dalam semua situasi', 1, 2, 131, 51, 2, NULL, '2014-04-26 22:11:24', NULL),
(351, 'Memperlakukan orang lain dengan segan sebagai penghormatan dan penghargaan', 1, 2, 131, 52, 2, NULL, '2014-04-26 22:11:24', NULL),
(352, 'Menahan diri dalam menunjukkan emosi atau antusiasme', 1, 2, 131, 53, 2, NULL, '2014-04-26 22:11:24', NULL),
(353, 'Penuh gairah dalam kehidupan', 1, 2, 132, 50, 2, NULL, '2014-04-26 22:11:24', NULL),
(354, 'Orang mandiri yang bisa sepenuhnya mengandalkan kemampuan dan sumber dayanya sendiri', 1, 2, 132, 51, 2, NULL, '2014-04-26 22:11:24', NULL),
(355, 'Secara intensif memperhatikan orang lain maupun hal apapun yang terjadi di sekitar', 1, 2, 132, 52, 2, NULL, '2014-04-26 22:11:24', NULL),
(356, 'Orang yang mudah menerima keadaan atau situasi apa saja', 1, 2, 132, 53, 2, NULL, '2014-04-26 22:11:24', NULL),
(357, 'Dapat mendorong atau memaksa orang lain mengikuti dan bergabung melalui pesona kepribadiannya', 1, 2, 133, 50, 2, NULL, '2014-04-26 22:11:24', NULL),
(358, 'Mengetahui segalanya akan beres bila kita yang memimpin', 1, 2, 133, 51, 2, NULL, '2014-04-26 22:11:24', NULL),
(359, 'Memilih mempersiapkan aturan yang terinci sebelumnya dalam menyelesaikan suatu proyek dan lebih menyukai keterlibatan dalam tahap-tahap perencanaan dan produk jadi, bukan dalam melaksanakan tugas', 1, 2, 133, 52, 2, NULL, '2014-04-26 22:11:24', NULL),
(360, 'Tidak terpengaruh oleh penundaan. Tetap tenang dan toleran', 1, 2, 133, 53, 2, NULL, '2014-04-26 22:11:24', NULL),
(361, 'Memilih agar semua kehidupan adalah kegiatan yang impulsif, tidak dipikirkan terlebih dahulu dan tidak terhambat oleh rencana', 1, 2, 134, 50, 2, NULL, '2014-04-26 22:11:24', NULL),
(362, 'Yakin, tidak ragu-ragu', 1, 2, 134, 51, 2, NULL, '2014-04-26 22:11:24', NULL),
(363, 'Membuat dan menghayati hidup menurut rencana sehari-hari. Tidak menyukai bila rencananya terganggu', 1, 2, 134, 52, 2, NULL, '2014-04-26 22:11:24', NULL),
(364, 'Pendiam, tidak mudah terseret dalam percakapan', 1, 2, 134, 53, 2, NULL, '2014-04-26 22:11:24', NULL),
(365, 'Orang yang periang dan dapat meyakinkan diri sendiri dan orang lain bahwa semuanya akan beres', 1, 2, 135, 50, 2, NULL, '2014-04-26 22:11:24', NULL),
(366, 'Bicara terang-terangan dan terkadang tidak menahan diri', 1, 2, 135, 51, 2, NULL, '2014-04-26 22:11:24', NULL),
(367, 'Orang yang mengatur segala-galanya secara sistematis dan metodis', 1, 2, 135, 52, 2, NULL, '2014-04-26 22:11:24', NULL),
(368, 'Bisa menerima apa saja, cepat melakukan sesuatu bahkan dengan cara orang lain', 1, 2, 135, 53, 2, NULL, '2014-04-26 22:11:24', NULL),
(369, 'Punya rasa humor yang cemerlang dan bisa membuat cerita apa saja menjadi peristiwa yang menyenangkan', 1, 2, 136, 50, 2, NULL, '2014-04-26 22:11:24', NULL),
(370, 'Pribadi yang mendominasi dan mampu menyebabkan orang lain ragu-ragu untuk melawannya', 1, 2, 136, 51, 2, NULL, '2014-04-26 22:11:24', NULL),
(371, 'Secara konsisten dapat diandalkan, teguh, setia, dan mengabdi, bahkan terkadang tanpa alasan', 1, 2, 136, 52, 2, NULL, '2014-04-26 22:11:24', NULL),
(372, 'Orang yang menanggapi. Bukan orang yang punya inisiatif untuk memulai percakapan', 1, 2, 136, 53, 2, NULL, '2014-04-26 22:11:24', NULL),
(373, 'Orang yang menyenangkan sebagai teman', 1, 2, 137, 50, 2, NULL, '2014-04-26 22:11:24', NULL),
(374, 'Bersedia mengambil resiko tanpa kenal takut', 1, 2, 137, 51, 2, NULL, '2014-04-26 22:11:24', NULL),
(375, 'Melakukan segala sesuatu secara berurutan dengan ingatan yang jernih akan segala hal yang terjadi', 1, 2, 137, 52, 2, NULL, '2014-04-26 22:11:24', NULL),
(376, 'Berurusan dengan orang lain secara penuh siasat, perasa, dan sabar', 1, 2, 137, 53, 2, NULL, '2014-04-26 22:11:24', NULL),
(377, 'Secara konsisten memiliki semangat yang tinggi dan suka membagikan kebahagiaan kepada orang lain', 1, 2, 138, 50, 2, NULL, '2014-04-26 22:11:24', NULL),
(378, 'Percaya diri dan yakin akan kemampuan dan kesuksesannya sendiri', 1, 2, 138, 51, 2, NULL, '2014-04-26 22:11:24', NULL),
(379, 'Orang yang perhatiannya melibatkan sesuatu yang berhubungan dengan intelektual dan artistik', 1, 2, 138, 52, 2, NULL, '2014-04-26 22:11:24', NULL),
(380, 'Tetap memiliki keseimbangan secara emosional, menanggapi sebagaimana yang diharapkan orang lain', 1, 2, 138, 53, 2, NULL, '2014-04-26 22:11:24', NULL),
(381, 'Mendorong orang lain untuk bekerja dan terlibat serta membuat seluruhnya menyenangkan', 1, 2, 139, 50, 2, NULL, '2014-04-26 22:11:24', NULL),
(382, 'Memenuhi diri sendiri, mandiri, penuh percaya diri dan nampak tidak begitu memerlukan bantuan', 1, 2, 139, 51, 2, NULL, '2014-04-26 22:11:24', NULL),
(383, 'Memvisualisasikan hal-hal dalam bentuk yang sempurna dan perlu memenuhi standar itu sendiri', 1, 2, 139, 52, 2, NULL, '2014-04-26 22:11:24', NULL),
(384, 'Tidak pernah mengatakan atau menyebabkan apapun yang tidak menyenangkan atau menimbulkan rasa keberata', 1, 2, 139, 53, 2, NULL, '2014-04-26 22:11:24', NULL),
(385, 'Terang-terangan menyatakan emosi terutama rasa sayang dan tidak ragu menyentuh ketika berbicara dengan orang lain', 1, 2, 140, 50, 2, NULL, '2014-04-26 22:11:24', NULL),
(386, 'Orang yang mempunyai kemampuan membuat penilaian yang cepat dan tuntas', 1, 2, 140, 51, 2, NULL, '2014-04-26 22:11:24', NULL),
(387, 'Intensif dan introspektif tanpa rasa senang pada percakapan dan pengajaran yang pulasan', 1, 2, 140, 52, 2, NULL, '2014-04-26 22:11:24', NULL),
(388, 'Memperlihatkan ‘kepandaian bicara yang mengigit’. Biasanya kalimat satu baris yang sifatnya sarkastik', 1, 2, 140, 53, 2, NULL, '2014-04-26 22:11:24', NULL),
(389, 'Menyukai pesta dan tidak bisa menunggu untuk bertemu setiap orang dalam ruangan, tidak pernah menganggap orang lain asing', 1, 2, 141, 50, 2, NULL, '2014-04-26 22:11:24', NULL),
(390, 'Terdorong oleh keperluan untuk produktif, pemimpin yang dituruti orang lain', 1, 2, 141, 51, 2, NULL, '2014-04-26 22:11:24', NULL),
(391, 'Punya apresiasi mendalam untuk musik, punya komitmen kepada musik sebagai bentuk seni, bukan hanya kesenangan pertunjukan', 1, 2, 141, 52, 2, NULL, '2014-04-26 22:11:24', NULL),
(392, 'Secara konsisten mencari peranan merukunkan pertikaian supaya bisa menghindari konflik', 1, 2, 141, 53, 2, NULL, '2014-04-26 22:11:24', NULL),
(393, 'Terus-menerus berbicara, biasanya menceritakan kisah lucu yang dapat menghibur setiap orang di sekitarnya, merasa perlu mengisi kesunyian agar orang lain merasa senang', 1, 2, 142, 50, 2, NULL, '2014-04-26 22:11:24', NULL),
(394, 'Memegang teguh dengan keras kepala dan tidak mau melepaskan hingga tujuan tercapai', 1, 2, 142, 51, 2, NULL, '2014-04-26 22:11:24', NULL),
(395, 'Orang yang tanggap dan mengingat setiap kesempatan istimewa, cepat memberi isyarat yang baik', 1, 2, 142, 52, 2, NULL, '2014-04-26 22:11:24', NULL),
(396, 'Mudah menerima pemikiran dan cara orang lain tanpa perlu tidak menyetujuinya', 1, 2, 142, 53, 2, NULL, '2014-04-26 22:11:24', NULL),
(397, 'Penuh kehidupan, kuat, dan penuh semangat', 1, 2, 143, 50, 2, NULL, '2014-04-26 22:11:24', NULL),
(398, 'Pemberi pengarahan karena pembawaan yang terdorong untuk memimpin dan sering merasa sulit mempercayai bahwa orang lain bisa melakukan pekerjaan dengan sama baiknya', 1, 2, 143, 51, 2, NULL, '2014-04-26 22:11:24', NULL),
(399, 'Setia pada seseorang, gagasan, dan pekerjaan, terkadang dapat melampaui alasan', 1, 2, 143, 52, 2, NULL, '2014-04-26 22:11:24', NULL),
(400, 'Selalu bersedia mendengarkan apa yang orang lain katakan', 1, 2, 143, 53, 2, NULL, '2014-04-26 22:11:24', NULL),
(401, 'Tak ternilai harganya, dicintai, pusat perhatian', 1, 2, 144, 50, 2, NULL, '2014-04-26 22:11:24', NULL),
(402, 'Memegang kepemimpinan dan mengharapkan orang lain mengikuti', 1, 2, 144, 51, 2, NULL, '2014-04-26 22:11:24', NULL),
(403, 'Mengatur kehidupan, tugas, dan pemecahan masalah dengan membuat daftar', 1, 2, 144, 52, 2, NULL, '2014-04-26 22:11:24', NULL),
(404, 'Mudah puas dengan apa yang dimiliki, jarang iri hati', 1, 2, 144, 53, 2, NULL, '2014-04-26 22:11:24', NULL),
(405, 'Orang yang suka menghidupkan pesta sebagai diinginkan orang sebagai tamu pesta', 1, 2, 145, 50, 2, NULL, '2014-04-26 22:11:24', NULL),
(406, 'Harus terus-menerus bekerja atau mencapai sesuatu, sering merasa sulit beristirahat', 1, 2, 145, 51, 2, NULL, '2014-04-26 22:11:24', NULL),
(407, 'Menempatkan standar tinggi pada dirinya maupun orang lain. Menginginkan segala-galanya pada urutan semestinya sepanjang waktu', 1, 2, 145, 52, 2, NULL, '2014-04-26 22:11:24', NULL),
(408, 'Mudah bergaul, bersifat terbuka, mudah diajak bicara', 1, 2, 145, 53, 2, NULL, '2014-04-26 22:11:24', NULL),
(409, 'Kepribadian yang hidup, berlebihan, penuh tenaga', 1, 2, 146, 50, 2, NULL, '2014-04-26 22:11:24', NULL),
(410, 'Tidak kenal takut, berani, terus terang, tidak takut akan resiko', 1, 2, 146, 51, 2, NULL, '2014-04-26 22:11:24', NULL),
(411, 'Secara konsisten ingin membawa diri di dalam batas-batas apa yang dirasakan semestinya', 1, 2, 146, 52, 2, NULL, '2014-04-26 22:11:24', NULL),
(412, 'Kepribadian yang stabil dan berada di tengah-tengah', 1, 2, 146, 53, 2, NULL, '2014-04-26 22:11:24', NULL),
(413, 'Mengikuti ilustrasi cara merangkainya', 1, 2, 147, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(414, 'Mendengarkan orang membacakan instruksinya untukmu', 1, 2, 147, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(415, 'Langsung mengerjakannya tanpa mengikuti instruksi', 1, 2, 147, 47, 2, NULL, '2014-04-26 22:11:24', NULL),
(416, 'Membolak-balik buku membaca materi ulangan', 1, 2, 148, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(417, 'Menghafal materi ulangan sambil mengucapkannya keras-keras', 1, 2, 148, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(418, 'Berjalan bolak-balik sambil menghafal', 1, 2, 148, 47, 2, NULL, '2014-04-26 22:11:24', NULL),
(419, 'Membacanya dengan tenang, cepat dan tekun', 1, 2, 149, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(420, 'Membaca sambil menggerakkan bibir dan mengucapkannya', 1, 2, 149, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(421, 'Menelusuri tiap-tiap kata dengan jari telunjukmu', 1, 2, 149, 47, 2, NULL, '2014-04-26 22:11:24', NULL),
(422, 'Berbicara dengan cepat', 1, 2, 150, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(423, 'Berbicara dengan kecepatan sedang', 1, 2, 150, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(424, 'Berbicara dengan kecepatan lambat', 1, 2, 150, 47, 2, NULL, '2014-04-26 22:11:24', NULL),
(425, 'Menonton televisi, membaca, mengisi TTS', 1, 2, 151, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(426, 'Mendengarkan radio, mengobrol', 1, 2, 151, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(427, 'Berjalan-jalan, olah raga, hiking', 1, 2, 151, 47, 2, NULL, '2014-04-26 22:11:24', NULL),
(428, 'Ekspresi wajah', 1, 2, 152, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(429, 'Intonasi suara', 1, 2, 152, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(430, 'Gerak tubuh', 1, 2, 152, 47, 2, NULL, '2014-04-26 22:11:24', NULL),
(431, 'Melamun, menatap ke angkasa', 1, 2, 153, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(432, 'Bebicara dengan diri sendiri', 1, 2, 153, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(433, 'Gelisah tak bisa duduk tenang', 1, 2, 153, 47, 2, NULL, '2014-04-26 22:11:24', NULL),
(434, 'Menulis, menggambar, Mendesain', 1, 2, 154, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(435, 'Berdebat, bercerita dan bermain musik', 1, 2, 154, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(436, 'Menari , berolahraga, membuat kerajinan tangan', 1, 2, 154, 47, 2, NULL, '2014-04-26 22:11:24', NULL),
(437, '"Lihat baik-baik…"', 1, 2, 155, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(438, '"Dengarkan baik-baik…"', 1, 2, 155, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(439, '"Rasakan baik-baik…"', 1, 2, 155, 47, 2, NULL, '2014-04-26 22:11:24', NULL),
(440, 'Kamu memperhatikan wajah guru saat beliau berbicara/menerangkan', 1, 2, 156, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(441, 'Kamu mendengarkan saja waktu guru menerangkan', 1, 2, 156, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(442, 'Saat guru menerangkan, tangan kamu tidak bisa diam, memain-mainkan ballpoint', 1, 2, 156, 47, 2, NULL, '2014-04-26 22:11:24', NULL),
(443, 'Hampir selalu', 3, 2, 157, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(444, 'Kadang-kadang', 2, 2, 157, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(445, 'Jarang sekali', 1, 2, 157, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(446, 'Hampir selalu', 3, 2, 158, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(447, 'Kadang-kadang', 2, 2, 158, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(448, 'Jarang sekali', 1, 2, 158, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(449, 'Hampir selalu', 3, 2, 159, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(450, 'Kadang-kadang', 2, 2, 159, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(451, 'Jarang sekali', 1, 2, 159, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(452, 'Hampir selalu', 3, 2, 160, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(453, 'Kadang-kadang', 2, 2, 160, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(454, 'Jarang sekali', 1, 2, 160, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(455, 'Hampir selalu', 3, 2, 161, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(456, 'Kadang-kadang', 2, 2, 161, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(457, 'Jarang sekali', 1, 2, 161, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(458, 'Hampir selalu', 3, 2, 162, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(459, 'Kadang-kadang', 2, 2, 162, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(460, 'Jarang sekali', 1, 2, 162, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(461, 'Hampir selalu', 3, 2, 163, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(462, 'Kadang-kadang', 2, 2, 163, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(463, 'Jarang sekali', 1, 2, 163, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(464, 'Hampir selalu', 3, 2, 164, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(465, 'Kadang-kadang', 2, 2, 164, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(466, 'Jarang sekali', 1, 2, 164, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(467, 'Hampir selalu', 3, 2, 165, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(468, 'Kadang-kadang', 2, 2, 165, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(469, 'Jarang sekali', 1, 2, 165, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(470, 'Hampir selalu', 3, 2, 166, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(471, 'Kadang-kadang', 2, 2, 166, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(472, 'Jarang sekali', 1, 2, 166, 45, 2, NULL, '2014-04-26 22:11:24', NULL),
(473, 'Hampir selalu', 3, 2, 167, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(474, 'Kadang-kadang', 2, 2, 167, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(475, 'Jarang sekali', 1, 2, 167, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(476, 'Hampir selalu', 3, 2, 168, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(477, 'Kadang-kadang', 2, 2, 168, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(478, 'Jarang sekali', 1, 2, 168, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(479, 'Hampir selalu', 3, 2, 169, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(480, 'Kadang-kadang', 2, 2, 169, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(481, 'Jarang sekali', 1, 2, 169, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(482, 'Hampir selalu', 3, 2, 170, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(483, 'Kadang-kadang', 2, 2, 170, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(484, 'Jarang sekali', 1, 2, 170, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(485, 'Hampir selalu', 3, 2, 171, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(486, 'Kadang-kadang', 2, 2, 171, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(487, 'Jarang sekali', 1, 2, 171, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(488, 'Hampir selalu', 3, 2, 172, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(489, 'Kadang-kadang', 2, 2, 172, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(490, 'Jarang sekali', 1, 2, 172, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(491, 'Hampir selalu', 3, 2, 173, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(492, 'Kadang-kadang', 2, 2, 173, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(493, 'Jarang sekali', 1, 2, 173, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(494, 'Hampir selalu', 3, 2, 174, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(495, 'Kadang-kadang', 2, 2, 174, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(496, 'Jarang sekali', 1, 2, 174, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(497, 'Hampir selalu', 3, 2, 175, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(498, 'Kadang-kadang', 2, 2, 175, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(499, 'Jarang sekali', 1, 2, 175, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(500, 'Hampir selalu', 3, 2, 176, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(501, 'Kadang-kadang', 2, 2, 176, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(502, 'Jarang sekali', 1, 2, 176, 46, 2, NULL, '2014-04-26 22:11:24', NULL),
(503, 'Hampir selalu', 3, 2, 177, 47, 2, NULL, '2014-04-26 22:11:24', NULL),
(504, 'Kadang-kadang', 2, 2, 177, 47, 2, NULL, '2014-04-26 22:11:24', NULL),
(505, 'Jarang sekali', 1, 2, 177, 47, 2, NULL, '2014-04-26 22:11:24', NULL),
(506, 'Hampir selalu', 3, 2, 178, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(507, 'Kadang-kadang', 2, 2, 178, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(508, 'Jarang sekali', 1, 2, 178, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(509, 'Hampir selalu', 3, 2, 179, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(510, 'Kadang-kadang', 2, 2, 179, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(511, 'Jarang sekali', 1, 2, 179, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(512, 'Hampir selalu', 3, 2, 180, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(513, 'Kadang-kadang', 2, 2, 180, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(514, 'Jarang sekali', 1, 2, 180, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(515, 'Hampir selalu', 3, 2, 181, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(516, 'Kadang-kadang', 2, 2, 181, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(517, 'Jarang sekali', 1, 2, 181, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(518, 'Hampir selalu', 3, 2, 182, 47, 2, NULL, '2014-04-26 22:11:25', NULL);
INSERT INTO `answers` (`id`, `description`, `value`, `status_id`, `question_id`, `variable_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(519, 'Kadang-kadang', 2, 2, 182, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(520, 'Jarang sekali', 1, 2, 182, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(521, 'Hampir selalu', 3, 2, 183, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(522, 'Kadang-kadang', 2, 2, 183, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(523, 'Jarang sekali', 1, 2, 183, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(524, 'Hampir selalu', 3, 2, 184, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(525, 'Kadang-kadang', 2, 2, 184, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(526, 'Jarang sekali', 1, 2, 184, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(527, 'Hampir selalu', 3, 2, 185, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(528, 'Kadang-kadang', 2, 2, 185, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(529, 'Jarang sekali', 1, 2, 185, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(530, 'Hampir selalu', 3, 2, 186, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(531, 'Kadang-kadang', 2, 2, 186, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(532, 'Jarang sekali', 1, 2, 186, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(533, 'Benar', 1, 2, 187, 45, 2, NULL, '2014-04-26 22:11:25', NULL),
(534, 'Salah', 0, 2, 187, 45, 2, NULL, '2014-04-26 22:11:25', NULL),
(535, 'Benar', 1, 2, 188, 46, 2, NULL, '2014-04-26 22:11:25', NULL),
(536, 'Salah', 0, 2, 188, 46, 2, NULL, '2014-04-26 22:11:25', NULL),
(537, 'Benar', 1, 2, 189, 46, 2, NULL, '2014-04-26 22:11:25', NULL),
(538, 'Salah', 0, 2, 189, 46, 2, NULL, '2014-04-26 22:11:25', NULL),
(539, 'Benar', 1, 2, 190, 45, 2, NULL, '2014-04-26 22:11:25', NULL),
(540, 'Salah', 0, 2, 190, 45, 2, NULL, '2014-04-26 22:11:25', NULL),
(541, 'Benar', 1, 2, 191, 45, 2, NULL, '2014-04-26 22:11:25', NULL),
(542, 'Salah', 0, 2, 191, 45, 2, NULL, '2014-04-26 22:11:25', NULL),
(543, 'Benar', 1, 2, 192, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(544, 'Salah', 0, 2, 192, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(545, 'Benar', 1, 2, 193, 46, 2, NULL, '2014-04-26 22:11:25', NULL),
(546, 'Salah', 0, 2, 193, 46, 2, NULL, '2014-04-26 22:11:25', NULL),
(547, 'Benar', 1, 2, 194, 46, 2, NULL, '2014-04-26 22:11:25', NULL),
(548, 'Salah', 0, 2, 194, 46, 2, NULL, '2014-04-26 22:11:25', NULL),
(549, 'Benar', 1, 2, 195, 45, 2, NULL, '2014-04-26 22:11:25', NULL),
(550, 'Salah', 0, 2, 195, 45, 2, NULL, '2014-04-26 22:11:25', NULL),
(551, 'Benar', 1, 2, 196, 46, 2, NULL, '2014-04-26 22:11:25', NULL),
(552, 'Salah', 0, 2, 196, 46, 2, NULL, '2014-04-26 22:11:25', NULL),
(553, 'Benar', 1, 2, 197, 45, 2, NULL, '2014-04-26 22:11:25', NULL),
(554, 'Salah', 0, 2, 197, 45, 2, NULL, '2014-04-26 22:11:25', NULL),
(555, 'Benar', 1, 2, 198, 45, 2, NULL, '2014-04-26 22:11:25', NULL),
(556, 'Salah', 0, 2, 198, 45, 2, NULL, '2014-04-26 22:11:25', NULL),
(557, 'Benar', 1, 2, 199, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(558, 'Salah', 0, 2, 199, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(559, 'Benar', 1, 2, 200, 46, 2, NULL, '2014-04-26 22:11:25', NULL),
(560, 'Salah', 0, 2, 200, 46, 2, NULL, '2014-04-26 22:11:25', NULL),
(561, 'Benar', 1, 2, 201, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(562, 'Salah', 0, 2, 201, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(563, 'Benar', 1, 2, 202, 45, 2, NULL, '2014-04-26 22:11:25', NULL),
(564, 'Salah', 0, 2, 202, 45, 2, NULL, '2014-04-26 22:11:25', NULL),
(565, 'Benar', 1, 2, 203, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(566, 'Salah', 0, 2, 203, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(567, 'Benar', 1, 2, 204, 46, 2, NULL, '2014-04-26 22:11:25', NULL),
(568, 'Salah', 0, 2, 204, 46, 2, NULL, '2014-04-26 22:11:25', NULL),
(569, 'Benar', 1, 2, 205, 45, 2, NULL, '2014-04-26 22:11:25', NULL),
(570, 'Salah', 0, 2, 205, 45, 2, NULL, '2014-04-26 22:11:25', NULL),
(571, 'Benar', 1, 2, 206, 46, 2, NULL, '2014-04-26 22:11:25', NULL),
(572, 'Salah', 0, 2, 206, 46, 2, NULL, '2014-04-26 22:11:25', NULL),
(573, 'Benar', 1, 2, 207, 45, 2, NULL, '2014-04-26 22:11:25', NULL),
(574, 'Salah', 0, 2, 207, 45, 2, NULL, '2014-04-26 22:11:25', NULL),
(575, 'Benar', 1, 2, 208, 45, 2, NULL, '2014-04-26 22:11:25', NULL),
(576, 'Salah', 0, 2, 208, 45, 2, NULL, '2014-04-26 22:11:25', NULL),
(577, 'Benar', 1, 2, 209, 46, 2, NULL, '2014-04-26 22:11:25', NULL),
(578, 'Salah', 0, 2, 209, 46, 2, NULL, '2014-04-26 22:11:25', NULL),
(579, 'Benar', 1, 2, 210, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(580, 'Salah', 0, 2, 210, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(581, 'Benar', 1, 2, 211, 46, 2, NULL, '2014-04-26 22:11:25', NULL),
(582, 'Salah', 0, 2, 211, 46, 2, NULL, '2014-04-26 22:11:25', NULL),
(583, 'Benar', 1, 2, 212, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(584, 'Salah', 0, 2, 212, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(585, 'Benar', 1, 2, 213, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(586, 'Salah', 0, 2, 213, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(587, 'Benar', 1, 2, 214, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(588, 'Salah', 0, 2, 214, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(589, 'Benar', 1, 2, 215, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(590, 'Salah', 0, 2, 215, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(591, 'Benar', 1, 2, 216, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(592, 'Salah', 0, 2, 216, 47, 2, NULL, '2014-04-26 22:11:25', NULL),
(593, 'Spontan, Fleksibel, tidak diikat waktu', 1, 2, 217, 8, 2, NULL, '2014-04-26 22:11:25', NULL),
(594, 'Terencana dan memiliki deadline jelas', 1, 2, 217, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(595, 'Lebih memilih berkomunikasi dengan menulis', 1, 2, 218, 2, 2, NULL, '2014-04-26 22:11:25', NULL),
(596, 'Lebih memilih berkomunikasi dengan bicara', 1, 2, 218, 1, 2, NULL, '2014-04-26 22:11:25', NULL),
(597, 'Tidak menyukai hal-hal yang bersifat mendadak dan di luar perencanaan', 1, 2, 219, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(598, 'Perubahan mendadak tidak jadi masalah', 1, 2, 219, 8, 2, NULL, '2014-04-26 22:11:25', NULL),
(599, 'Obyektif', 1, 2, 220, 5, 2, NULL, '2014-04-26 22:11:25', NULL),
(600, 'Subyektif', 1, 2, 220, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(601, 'Menemukan dan mengembangkan ide dengan mendiskusikannya', 1, 2, 221, 1, 2, NULL, '2014-04-26 22:11:25', NULL),
(602, 'Menemukan dan mengembangkan ide dengan merenungkan', 1, 2, 221, 2, 2, NULL, '2014-04-26 22:11:25', NULL),
(603, 'Bergerak dari gambaran umum baru ke detail', 1, 2, 222, 4, 2, NULL, '2014-04-26 22:11:25', NULL),
(604, 'Bergerak dari detail ke gambaran umum sebagai kesimpulan akhir', 1, 2, 222, 3, 2, NULL, '2014-04-26 22:11:25', NULL),
(605, 'Berorientasi pada dunia eksternal (kegiatan, orang)', 1, 2, 223, 1, 2, NULL, '2014-04-26 22:11:25', NULL),
(606, 'Berorientasi pada dunia internal (memori, pemikiran, ide)', 1, 2, 223, 2, 2, NULL, '2014-04-26 22:11:25', NULL),
(607, 'Berbicara mengenai masalah yang dihadapi hari ini dan langkah-langkah praktis mengatasinya', 1, 2, 224, 3, 2, NULL, '2014-04-26 22:11:25', NULL),
(608, 'Berbicara mengenai visi masa depan dan konsep-konsep mengenai visi ', 1, 2, 224, 4, 2, NULL, '2014-04-26 22:11:25', NULL),
(609, 'Diyakinkan dengan penjelasan yang menyentuh perasaan', 1, 2, 225, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(610, 'Diyakinkan dengan penjelasan yang masuk akal', 1, 2, 225, 5, 2, NULL, '2014-04-26 22:11:25', NULL),
(611, 'Fokus pada sedikit hobi namun mendalam', 1, 2, 226, 2, 2, NULL, '2014-04-26 22:11:25', NULL),
(612, 'Fokus pada banyak hobi secara luas dan umum', 1, 2, 226, 1, 2, NULL, '2014-04-26 22:11:25', NULL),
(613, 'Tertutup dan mandiri', 1, 2, 227, 2, 2, NULL, '2014-04-26 22:11:25', NULL),
(614, 'Sosial dan ekspresif', 1, 2, 227, 1, 2, NULL, '2014-04-26 22:11:25', NULL),
(615, 'Aturan, jadwal dan target sangat mengikat dan membebani', 1, 2, 228, 8, 2, NULL, '2014-04-26 22:11:25', NULL),
(616, 'Aturan, jadwal dan target akan sangat membantu dan memperjelas tindakan', 1, 2, 228, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(617, 'Menggunakan pengalaman sebagai pedoman', 1, 2, 229, 3, 2, NULL, '2014-04-26 22:11:25', NULL),
(618, 'Menggunakan imajinasi dan perenungan sebagai pedoman', 1, 2, 229, 4, 2, NULL, '2014-04-26 22:11:25', NULL),
(619, 'Berorientasi tugas dan job description', 1, 2, 230, 5, 2, NULL, '2014-04-26 22:11:25', NULL),
(620, 'Berorientasi pada manusia dan hubungan', 1, 2, 230, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(621, 'Pertemuan dengan orang lain dan aktivitas sosial melelahkan', 1, 2, 231, 2, 2, NULL, '2014-04-26 22:11:25', NULL),
(622, 'Bertemu orang dan aktivitas sosial membuat bersemangat', 1, 2, 231, 1, 2, NULL, '2014-04-26 22:11:25', NULL),
(623, 'SOP sangat membantu', 1, 2, 232, 3, 2, NULL, '2014-04-26 22:11:25', NULL),
(624, 'SOP sangat membosankan', 1, 2, 232, 4, 2, NULL, '2014-04-26 22:11:25', NULL),
(625, 'Mengambil keputusan berdasar logika dan aturan main', 1, 2, 233, 5, 2, NULL, '2014-04-26 22:11:25', NULL),
(626, 'Mengambil keputusan berdasar perasaan pribadi dan kondisi orang lain', 1, 2, 233, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(627, 'Bebas dan dinamis', 1, 2, 234, 4, 2, NULL, '2014-04-26 22:11:25', NULL),
(628, 'Prosedural dan tradisional', 1, 2, 234, 3, 2, NULL, '2014-04-26 22:11:25', NULL),
(629, 'Berorientasi pada hasil', 1, 2, 235, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(630, 'Berorientasi pada proses', 1, 2, 235, 8, 2, NULL, '2014-04-26 22:11:25', NULL),
(631, 'Beraktifitas sendirian di rumah menyenangkan', 1, 2, 236, 2, 2, NULL, '2014-04-26 22:11:25', NULL),
(632, 'Beraktifitas sendirian di rumah membosankan', 1, 2, 236, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(633, 'Membiarkan orang lain bertindak bebas asalkan tujuan tercapai', 1, 2, 237, 8, 2, NULL, '2014-04-26 22:11:26', NULL),
(634, 'Mengatur orang lain dengan tata tertib agar tujuan tercapai', 1, 2, 237, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(635, 'Memilih ide inspiratif lebih penting daripada fakta', 1, 2, 238, 4, 2, NULL, '2014-04-26 22:11:26', NULL),
(636, 'Memilih fakta lebih penting daripada ide inspiratif', 1, 2, 238, 3, 2, NULL, '2014-04-26 22:11:26', NULL),
(637, 'Mengemukakan tujuan dan sasaran lebih dahulu', 1, 2, 239, 5, 2, NULL, '2014-04-26 22:11:26', NULL),
(638, 'Mengemukakan kesepakatan terlebih dahulu', 1, 2, 239, 6, 2, NULL, '2014-04-26 22:11:26', NULL),
(639, 'Fokus pada target dan mengabaikan hal-hal baru', 1, 2, 240, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(640, 'Memperhatikan hal-hal baru dan siap menyesuaikan diri serta mengubah target', 1, 2, 240, 8, 2, NULL, '2014-04-26 22:11:26', NULL),
(641, 'Kontinuitas dan stabilitas lebih diutamakan', 1, 2, 241, 3, 2, NULL, '2014-04-26 22:11:26', NULL),
(642, 'Perubahan dan variasi lebih diutamakan', 1, 2, 241, 4, 2, NULL, '2014-04-26 22:11:26', NULL),
(643, 'Pendirian masih bisa berubah tergantung situasi nantinya', 1, 2, 242, 8, 2, NULL, '2014-04-26 22:11:26', NULL),
(644, 'Berpegang teguh pada pendirian', 1, 2, 242, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(645, 'Bertindak step by step dengan timeframe yang jelas', 1, 2, 243, 3, 2, NULL, '2014-04-26 22:11:26', NULL),
(646, 'Bertindak dengan semangat tanpa menggunakan timeframe', 1, 2, 243, 4, 2, NULL, '2014-04-26 22:11:26', NULL),
(647, 'Berinisiatif tinggi hampir dalam berbagai hal meskipun tidak berhubungan dengan dirinya', 1, 2, 244, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(648, 'Berinisiatif bila situasi memaksa atau berhubungan dengan kepentingan sendiri', 1, 2, 244, 2, 2, NULL, '2014-04-26 22:11:26', NULL),
(649, 'Lebih memilih tempat yang tenang dan pribadi untuk berkonsentrasi', 1, 2, 245, 2, 2, NULL, '2014-04-26 22:11:26', NULL),
(650, 'Lebih memilih tempat yang ramai dan banyak interaksi / aktifitas', 1, 2, 245, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(651, 'Menganalisa', 1, 2, 246, 5, 2, NULL, '2014-04-26 22:11:26', NULL),
(652, 'Berempati', 1, 2, 246, 6, 2, NULL, '2014-04-26 22:11:26', NULL),
(653, 'Berpikir secara matang sebelum bertindak', 1, 2, 247, 2, 2, NULL, '2014-04-26 22:11:26', NULL),
(654, 'Berani bertindak tanpa terlalu lama berfikir', 1, 2, 247, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(655, 'Menghargai seseorang karena sifat dan perilakunya', 1, 2, 248, 6, 2, NULL, '2014-04-26 22:11:26', NULL),
(656, 'Menghargai seseorang karena skill dan faktor teknis', 1, 2, 248, 5, 2, NULL, '2014-04-26 22:11:26', NULL),
(657, 'Merasa nyaman bila situasi tetap terbuka terhadap pilihan-pilihan lain', 1, 2, 249, 8, 2, NULL, '2014-04-26 22:11:26', NULL),
(658, 'Merasa tenang bila semua sudah diputuskan', 1, 2, 249, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(659, 'Menarik kesimpulan dengan lama dan hati-hati', 1, 2, 250, 3, 2, NULL, '2014-04-26 22:11:26', NULL),
(660, 'menarik kesimpulan dengan cepat sesuai naluri', 1, 2, 250, 4, 2, NULL, '2014-04-26 22:11:26', NULL),
(661, 'Mengekspresikan semangat', 1, 2, 251, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(662, 'Menyimpan semangat dalam hati', 1, 2, 251, 2, 2, NULL, '2014-04-26 22:11:26', NULL),
(663, 'Mengklarifikasi ide dan teori sebelum dipraktekkan', 1, 2, 252, 3, 2, NULL, '2014-04-26 22:11:26', NULL),
(664, 'Memahami ide dan teori saat mempraktekkannya langsung', 1, 2, 252, 4, 2, NULL, '2014-04-26 22:11:26', NULL),
(665, 'Melibatkan perasaan itu tidak profesional', 1, 2, 253, 5, 2, NULL, '2014-04-26 22:11:26', NULL),
(666, 'Terlalu kaku pada peraturan dan pekerjaan itu kejam', 1, 2, 253, 6, 2, NULL, '2014-04-26 22:11:26', NULL),
(667, 'Mencari kesempatan untuk berkomunikasi secara perorangan', 1, 2, 254, 2, 2, NULL, '2014-04-26 22:11:26', NULL),
(668, 'Memilih berkomunikasi pada sekelompok orang', 1, 2, 254, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(669, 'Yang penting situasi harmonis terjaga', 1, 2, 255, 6, 2, NULL, '2014-04-26 22:11:26', NULL),
(670, 'Yang penting tujuan tercapai', 1, 2, 255, 5, 2, NULL, '2014-04-26 22:11:26', NULL),
(671, 'Ketidakpastian itu seru, menegangkan dan membuat hati lebih senang', 1, 2, 256, 8, 2, NULL, '2014-04-26 22:11:26', NULL),
(672, 'Ketidakpastian membuat bingung dan meresahkan', 1, 2, 256, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(673, 'Berfokus pada masa kini (apa yang bisa diperbaiki sekarang)', 1, 2, 257, 3, 2, NULL, '2014-04-26 22:11:26', NULL),
(674, 'Berfokus pada masa depan (apa yang mungkin dicapai di masa depan)', 1, 2, 257, 4, 2, NULL, '2014-04-26 22:11:26', NULL),
(675, 'Mempertanyakan', 1, 2, 258, 5, 2, NULL, '2014-04-26 22:11:26', NULL),
(676, 'Mengakomodasi', 1, 2, 258, 6, 2, NULL, '2014-04-26 22:11:26', NULL),
(677, 'Secara konsisten mengamati dan mengingat detail', 1, 2, 259, 3, 2, NULL, '2014-04-26 22:11:26', NULL),
(678, 'Mengamati dan mengingat detail hanya bila berhubungan dengan pola', 1, 2, 259, 4, 2, NULL, '2014-04-26 22:11:26', NULL),
(679, 'Situasi last minute membuat bersemangat dan memunculkan potensi', 1, 2, 260, 8, 2, NULL, '2014-04-26 22:11:26', NULL),
(680, 'Situasi last minute sangat menyiksa, membuat stress dan merupakan kesalahan', 1, 2, 260, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(681, 'Lebih suka komunikasi tidak langsung (telp, surat, e-mail)', 1, 2, 261, 2, 2, NULL, '2014-04-26 22:11:26', NULL),
(682, 'Lebih suka komunikasi langsung (tatap muka)', 1, 2, 261, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(683, 'Praktis', 1, 2, 262, 3, 2, NULL, '2014-04-26 22:11:26', NULL),
(684, 'Konseptual', 1, 2, 262, 4, 2, NULL, '2014-04-26 22:11:26', NULL),
(685, 'Perubahan adalah musuh', 1, 2, 263, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(686, 'Perubahan adalah semangat hidup', 1, 2, 263, 8, 2, NULL, '2014-04-26 22:11:26', NULL),
(687, 'Sering dianggap keras kepala', 1, 2, 264, 5, 2, NULL, '2014-04-26 22:11:26', NULL),
(688, 'Sering dianggap terlalu memihak', 1, 2, 264, 6, 2, NULL, '2014-04-26 22:11:26', NULL),
(689, 'Bersemangat saat menolong orang keluar dari kesalahan dan meluruskan', 1, 2, 265, 6, 2, NULL, '2014-04-26 22:11:26', NULL),
(690, 'Bersemangat saat mengkritik dan menemukan kesalahan', 1, 2, 265, 5, 2, NULL, '2014-04-26 22:11:26', NULL),
(691, 'Bertindak sesuai situasi dan kondisi yang terjadi saat itu', 1, 2, 266, 8, 2, NULL, '2014-04-26 22:11:26', NULL),
(692, 'Bertindak sesuai apa yang sudah direncanakan', 1, 2, 266, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(693, 'Menggunakan keterampilan yang sudah dikuasai', 1, 2, 267, 3, 2, NULL, '2014-04-26 22:11:26', NULL),
(694, 'Menyukai tantangan untuk menguasai keterampilan baru', 1, 2, 267, 4, 2, NULL, '2014-04-26 22:11:26', NULL),
(695, 'Membangun ide pada saat berbicara', 1, 2, 268, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(696, 'Membangun ide dengan matang baru membicarakannya', 1, 2, 268, 2, 2, NULL, '2014-04-26 22:11:26', NULL),
(697, 'Memilih cara yang sudah ada dan sudah terbukti', 1, 2, 269, 3, 2, NULL, '2014-04-26 22:11:26', NULL),
(698, 'Memilih cara yang unik dan belum dipraktekkan orang lain', 1, 2, 269, 4, 2, NULL, '2014-04-26 22:11:26', NULL),
(699, 'Hidup harus sudah diatur dari awal', 1, 2, 270, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(700, 'Hidup seharusnya mengalir sesuai kondisi', 1, 2, 270, 8, 2, NULL, '2014-04-26 22:11:26', NULL),
(701, 'Standar harus ditegakkan di atas segalanya (itu menunjukkan kehormatan dan harga diri)', 1, 2, 271, 5, 2, NULL, '2014-04-26 22:11:26', NULL),
(702, 'Perasaan manusia lebih penting dari sekadar standar (yang adalah benda mati)', 1, 2, 271, 6, 2, NULL, '2014-04-26 22:11:26', NULL),
(703, 'Daftar dan checklist adalah panduan penting', 1, 2, 272, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(704, 'Daftar dan checklist adalah tugas dan beban', 1, 2, 272, 8, 2, NULL, '2014-04-26 22:11:26', NULL),
(705, 'Menuntut perlakuan yang adil dan sama pada semua orang', 1, 2, 273, 5, 2, NULL, '2014-04-26 22:11:26', NULL),
(706, 'Menuntut perlakuan khusus sesuai karakteristik masing-masing orang', 1, 2, 273, 6, 2, NULL, '2014-04-26 22:11:26', NULL),
(707, 'Mementingkan sebab-akibat', 1, 2, 274, 5, 2, NULL, '2014-04-26 22:11:26', NULL),
(708, 'Mementingkan nilai-nilai personal', 1, 2, 274, 6, 2, NULL, '2014-04-26 22:11:26', NULL),
(709, 'Puas ketika mampu beradaptasi dengan momentum yang terjadi', 1, 2, 275, 8, 2, NULL, '2014-04-26 22:11:26', NULL),
(710, 'Puas ketika mampu menjalankan semuanya sesuai rencana', 1, 2, 275, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(711, 'Spontan, Easy Going, fleksibel', 1, 2, 276, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(712, 'Berhati-hati, penuh pertimbangan, kaku', 1, 2, 276, 2, 2, NULL, '2014-04-26 22:11:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `combinations`
--

CREATE TABLE IF NOT EXISTS `combinations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `variable_id` int(11) NOT NULL,
  `variable_detail_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `variable_id_combinations_index` (`variable_id`),
  KEY `variable_detail_id_combinations_index` (`variable_detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `combinations`
--

INSERT INTO `combinations` (`id`, `variable_id`, `variable_detail_id`, `created_at`, `updated_at`) VALUES
(1, 45, 1, '2014-04-26 22:11:21', NULL),
(2, 46, 2, '2014-04-26 22:11:21', NULL),
(3, 47, 3, '2014-04-26 22:11:21', NULL),
(4, 48, 4, '2014-04-26 22:11:23', NULL),
(5, 49, 5, '2014-04-26 22:11:23', NULL),
(6, 50, 6, '2014-04-26 22:11:24', NULL),
(7, 51, 7, '2014-04-26 22:11:24', NULL),
(8, 52, 8, '2014-04-26 22:11:24', NULL),
(9, 53, 9, '2014-04-26 22:11:24', NULL),
(10, 2, 10, '2014-04-26 22:11:26', NULL),
(11, 3, 10, '2014-04-26 22:11:26', NULL),
(12, 5, 10, '2014-04-26 22:11:26', NULL),
(13, 7, 10, '2014-04-26 22:11:26', NULL),
(14, 2, 11, '2014-04-26 22:11:26', NULL),
(15, 3, 11, '2014-04-26 22:11:26', NULL),
(16, 6, 11, '2014-04-26 22:11:26', NULL),
(17, 7, 11, '2014-04-26 22:11:26', NULL),
(18, 2, 12, '2014-04-26 22:11:26', NULL),
(19, 3, 12, '2014-04-26 22:11:26', NULL),
(20, 5, 12, '2014-04-26 22:11:26', NULL),
(21, 8, 12, '2014-04-26 22:11:26', NULL),
(22, 2, 13, '2014-04-26 22:11:26', NULL),
(23, 3, 13, '2014-04-26 22:11:26', NULL),
(24, 6, 13, '2014-04-26 22:11:26', NULL),
(25, 8, 13, '2014-04-26 22:11:26', NULL),
(26, 2, 14, '2014-04-26 22:11:26', NULL),
(27, 4, 14, '2014-04-26 22:11:26', NULL),
(28, 6, 14, '2014-04-26 22:11:26', NULL),
(29, 7, 14, '2014-04-26 22:11:26', NULL),
(30, 2, 15, '2014-04-26 22:11:26', NULL),
(31, 4, 15, '2014-04-26 22:11:26', NULL),
(32, 5, 15, '2014-04-26 22:11:26', NULL),
(33, 7, 15, '2014-04-26 22:11:26', NULL),
(34, 2, 16, '2014-04-26 22:11:26', NULL),
(35, 2, 16, '2014-04-26 22:11:26', NULL),
(36, 5, 16, '2014-04-26 22:11:26', NULL),
(37, 8, 16, '2014-04-26 22:11:26', NULL),
(38, 2, 17, '2014-04-26 22:11:26', NULL),
(39, 4, 17, '2014-04-26 22:11:26', NULL),
(40, 5, 17, '2014-04-26 22:11:26', NULL),
(41, 8, 17, '2014-04-26 22:11:26', NULL),
(42, 1, 18, '2014-04-26 22:11:26', NULL),
(43, 3, 18, '2014-04-26 22:11:26', NULL),
(44, 5, 18, '2014-04-26 22:11:26', NULL),
(45, 8, 18, '2014-04-26 22:11:26', NULL),
(46, 1, 19, '2014-04-26 22:11:26', NULL),
(47, 3, 19, '2014-04-26 22:11:26', NULL),
(48, 6, 19, '2014-04-26 22:11:26', NULL),
(49, 8, 19, '2014-04-26 22:11:26', NULL),
(50, 1, 20, '2014-04-26 22:11:26', NULL),
(51, 4, 20, '2014-04-26 22:11:26', NULL),
(52, 6, 20, '2014-04-26 22:11:26', NULL),
(53, 8, 20, '2014-04-26 22:11:26', NULL),
(54, 1, 21, '2014-04-26 22:11:26', NULL),
(55, 4, 21, '2014-04-26 22:11:26', NULL),
(56, 5, 21, '2014-04-26 22:11:26', NULL),
(57, 8, 21, '2014-04-26 22:11:26', NULL),
(58, 1, 22, '2014-04-26 22:11:26', NULL),
(59, 3, 22, '2014-04-26 22:11:26', NULL),
(60, 5, 22, '2014-04-26 22:11:26', NULL),
(61, 7, 22, '2014-04-26 22:11:26', NULL),
(62, 1, 23, '2014-04-26 22:11:26', NULL),
(63, 3, 23, '2014-04-26 22:11:26', NULL),
(64, 6, 23, '2014-04-26 22:11:26', NULL),
(65, 7, 23, '2014-04-26 22:11:26', NULL),
(66, 1, 24, '2014-04-26 22:11:26', NULL),
(67, 4, 24, '2014-04-26 22:11:26', NULL),
(68, 6, 24, '2014-04-26 22:11:26', NULL),
(69, 7, 24, '2014-04-26 22:11:26', NULL),
(70, 1, 25, '2014-04-26 22:11:26', NULL),
(71, 4, 25, '2014-04-26 22:11:26', NULL),
(72, 5, 25, '2014-04-26 22:11:26', NULL),
(73, 7, 25, '2014-04-26 22:11:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug_companies_unique` (`slug`),
  KEY `status_id_companies_index` (`status_id`),
  KEY `created_by_companies_index` (`created_by`),
  KEY `updated_by_companies_index` (`updated_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `slug`, `name`, `address`, `phone`, `photo`, `status_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'cv-madain', 'CV. Madain', 'Jl. Penyu No.40 Bandung', '085721821555', '', 2, 1, NULL, '2014-04-26 22:11:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company_users`
--

CREATE TABLE IF NOT EXISTS `company_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `company_id_company_users_index` (`company_id`),
  KEY `user_id_company_users_index` (`user_id`),
  KEY `status_id_company_users_index` (`status_id`),
  KEY `created_by_company_users_index` (`created_by`),
  KEY `updated_by_company_users_index` (`updated_by`),
  KEY `fk_position_id_company_users` (`position_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `company_users`
--

INSERT INTO `company_users` (`id`, `company_id`, `user_id`, `position_id`, `status_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 4, 2, 1, NULL, '2014-04-26 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `experts`
--

CREATE TABLE IF NOT EXISTS `experts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug_experts_unique` (`slug`),
  KEY `status_id_experts_index` (`status_id`),
  KEY `created_by_experts_index` (`created_by`),
  KEY `updated_by_experts_index` (`updated_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `experts`
--

INSERT INTO `experts` (`id`, `slug`, `name`, `address`, `phone`, `photo`, `status_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'pt-psikolog-nasional', 'PT. Psikolog Nasional', 'Jl. Penyu No.40 Bandung', '085721821555', '', 2, 1, NULL, '2014-04-26 22:11:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expert_users`
--

CREATE TABLE IF NOT EXISTS `expert_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expert_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `expert_id_expert_users_index` (`expert_id`),
  KEY `user_id_expert_users_index` (`user_id`),
  KEY `status_id_expert_users_index` (`status_id`),
  KEY `created_by_expert_users_index` (`created_by`),
  KEY `updated_by_expert_users_index` (`updated_by`),
  KEY `fk_position_id_expert_users` (`position_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `expert_users`
--

INSERT INTO `expert_users` (`id`, `expert_id`, `user_id`, `position_id`, `status_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, 2, 1, NULL, '2014-04-26 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` tinyint(1) NOT NULL,
  `birth_place` varchar(255) DEFAULT NULL,
  `birth_date` varchar(255) DEFAULT NULL,
  `address` text,
  `phone` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug_members_unique` (`slug`),
  KEY `status_id_members_index` (`status_id`),
  KEY `user_id_members_index` (`user_id`),
  KEY `position_id_members_index` (`position_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `slug`, `first_name`, `last_name`, `gender`, `birth_place`, `birth_date`, `address`, `phone`, `photo`, `status_id`, `user_id`, `position_id`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'Administrator', '', 1, NULL, NULL, 'Jl. Penyu No.40 Bandung', '085721821555', '', 2, 1, 1, '2014-04-26 22:11:17', NULL),
(2, 'mahendri-winata', 'Mahendri', 'Winata', 1, NULL, NULL, 'Jl. Penyu No.40 Bandung', '085721821555', '', 2, 2, 6, '2014-04-26 22:11:17', NULL),
(3, 'member', 'Member', '', 1, NULL, NULL, '', '', '', 2, 3, 6, '2014-04-26 22:11:17', NULL),
(4, 'risky', 'Risky', '', 1, NULL, NULL, '', '', '', 2, 4, 6, '2014-04-26 22:11:17', NULL),
(5, 'hendra', 'Hendra', '', 1, NULL, NULL, '', '', '', 2, 5, 6, '2014-04-26 22:11:17', NULL),
(6, 'winata', 'Winata', '', 1, NULL, NULL, '', '', '', 2, 6, 6, '2014-04-26 22:11:17', NULL),
(7, 'ade', 'Ade', '', 1, NULL, NULL, '', '', '', 2, 7, 6, '2014-04-26 22:11:17', NULL),
(8, 'naufal', 'Naufal', '', 1, NULL, NULL, '', '', '', 2, 8, 6, '2014-04-26 22:11:17', NULL),
(9, 'dio', 'Dio', '', 1, NULL, NULL, '', '', '', 2, 9, 6, '2014-04-26 22:11:17', NULL),
(10, 'rio', 'Rio', '', 1, NULL, NULL, '', '', '', 2, 10, 6, '2014-04-26 22:11:17', NULL),
(11, 'rudi', 'Rudi', '', 1, NULL, NULL, '', '', '', 2, 11, 6, '2014-04-26 22:11:17', NULL),
(12, 'atang', 'Atang', '', 1, NULL, NULL, '', '', '', 2, 12, 6, '2014-04-26 22:11:17', NULL),
(13, 'dian', 'Dian', '', 1, NULL, NULL, '', '', '', 2, 13, 6, '2014-04-26 22:11:17', NULL),
(14, 'adrian', 'Adrian', '', 1, NULL, NULL, '', '', '', 2, 14, 6, '2014-04-26 22:11:17', NULL),
(15, 'adi', 'Adi', '', 1, NULL, NULL, '', '', '', 2, 15, 6, '2014-04-26 22:11:17', NULL),
(16, 'alfian', 'Alfian', '', 1, NULL, NULL, '', '', '', 2, 16, 6, '2014-04-26 22:11:17', NULL),
(17, 'nicky', 'Nicky', '', 1, NULL, NULL, '', '', '', 2, 17, 6, '2014-04-26 22:11:17', NULL),
(18, 'ricky', 'Ricky', '', 1, NULL, NULL, '', '', '', 2, 18, 6, '2014-04-26 22:11:17', NULL),
(19, 'reza', 'Reza', '', 1, NULL, NULL, '', '', '', 2, 19, 6, '2014-04-26 22:11:17', NULL),
(20, 'aldi', 'Aldi', '', 1, NULL, NULL, '', '', '', 2, 20, 6, '2014-04-26 22:11:17', NULL),
(21, 'eka', 'Eka', '', 1, NULL, NULL, '', '', '', 2, 21, 6, '2014-04-26 22:11:17', NULL),
(22, 'hermawan', 'Hermawan', '', 1, NULL, NULL, '', '', '', 2, 22, 6, '2014-04-26 22:11:17', NULL),
(23, 'nana', 'Nana', '', 1, NULL, NULL, '', '', '', 2, 23, 6, '2014-04-26 22:11:17', NULL),
(24, 'doris', 'Doris', '', 1, NULL, NULL, '', '', '', 2, 24, 6, '2014-04-26 22:11:17', NULL),
(25, 'bagus', 'Bagus', '', 1, NULL, NULL, '', '', '', 2, 25, 6, '2014-04-26 22:11:17', NULL),
(26, 'agus', 'Agus', '', 1, NULL, NULL, '', '', '', 2, 26, 6, '2014-04-26 22:11:17', NULL),
(27, 'ifan', 'Ifan', '', 1, NULL, NULL, '', '', '', 2, 27, 6, '2014-04-26 22:11:17', NULL),
(28, 'adam', 'Adam', '', 1, NULL, NULL, '', '', '', 2, 28, 6, '2014-04-26 22:11:17', NULL),
(29, 'adit', 'Adit', '', 1, NULL, NULL, '', '', '', 2, 29, 6, '2014-04-26 22:11:18', NULL),
(30, 'agung', 'Agung', '', 1, NULL, NULL, '', '', '', 2, 30, 6, '2014-04-26 22:11:18', NULL),
(31, 'akbar', 'Akbar', '', 1, NULL, NULL, '', '', '', 2, 31, 6, '2014-04-26 22:11:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `version` varchar(255) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1398542946),
('m140319_162645_create_users_table', 1398542948),
('m140319_170213_create_roles_table', 1398542948),
('m140319_170241_create_accesses_table', 1398542949),
('m140319_170242_create_positions_table', 1398542949),
('m140319_170244_create_position_accesses_table', 1398542950),
('m140319_170259_create_answers_table', 1398542951),
('m140319_170311_create_questions_table', 1398542951),
('m140319_170325_create_tags_table', 1398542952),
('m140319_170326_create_statuses_table', 1398542952),
('m140319_170344_create_tag_variables_table', 1398542953),
('m140319_170357_create_tests_table', 1398542954),
('m140319_170405_create_types_table', 1398542955),
('m140319_170656_create_user_tests_table', 1398542956),
('m140319_170724_create_test_answers_table', 1398542957),
('m140319_170742_create_test_variables_table', 1398542957),
('m140319_170754_create_variables_table', 1398542959),
('m140319_170804_create_variable_details_table', 1398542959),
('m140320_175549_create_result_details_table', 1398542959),
('m140320_175550_create_combinations_table', 1398542960),
('m140320_175551_create_results_table', 1398542960),
('m140320_175552_create_companies_table', 1398542960),
('m140320_175553_create_experts_table', 1398542961),
('m140320_175554_create_members_table', 1398542961),
('m140320_175555_create_company_users_table', 1398542962),
('m140320_175556_create_expert_users_table', 1398542963),
('m140328_212624_add_foreign_key_users', 1398542963),
('m140328_212625_add_foreign_key_roles', 1398542964),
('m140328_212647_add_foreign_key_positions', 1398542965),
('m140328_212648_add_foreign_key_accesses', 1398542966),
('m140328_212650_add_foreign_key_position_accesses', 1398542968),
('m140328_212657_add_foreign_key_answers', 1398542970),
('m140328_212708_add_foreign_key_questions', 1398542971),
('m140328_212716_add_foreign_key_tags', 1398542973),
('m140328_212726_add_foreign_key_tag_variables', 1398542974),
('m140328_212735_add_foreign_key_tests', 1398542976),
('m140328_212743_add_foreign_key_types', 1398542977),
('m140328_212842_add_foreign_key_user_tests', 1398542979),
('m140328_212855_add_foreign_key_test_answers', 1398542980),
('m140328_212907_add_foreign_key_test_variables', 1398542980),
('m140328_212916_add_foreign_key_variables', 1398542982),
('m140328_212923_add_foreign_key_variable_details', 1398542984),
('m140328_212933_add_foreign_key_results', 1398542984),
('m140328_212934_add_foreign_key_combinations', 1398542985),
('m140328_212935_add_foreign_key_companies', 1398542986),
('m140328_212936_add_foreign_key_experts', 1398542987),
('m140328_212937_add_foreign_key_members', 1398542988),
('m140328_212938_add_foreign_key_company_users', 1398542990),
('m140328_212939_add_foreign_key_expert_users', 1398542992),
('m140328_212940_add_foreign_key_result_details', 1398542992),
('m140328_214350_insert_dummy_data_statuses', 1398542992),
('m140328_214351_insert_dummy_data_users', 1398543076),
('m140328_214357_insert_dummy_data_roles', 1398543077),
('m140328_214409_insert_dummy_data_positions', 1398543077),
('m140328_214417_insert_dummy_data_experts', 1398543077),
('m140328_214418_insert_dummy_data_companies', 1398543077),
('m140328_214419_insert_dummy_data_members', 1398543078),
('m140328_214550_insert_dummy_data_type_mbti', 1398543078),
('m140328_214551_insert_dummy_data_type_disc', 1398543078),
('m140328_214553_insert_dummy_data_type_epps', 1398543078),
('m140328_214554_insert_dummy_data_type_16pf', 1398543079),
('m140328_214555_insert_dummy_data_type_modalitas_belajar', 1398543079),
('m140328_214556_insert_dummy_data_type_otak_kanan_otak_kiri', 1398543079),
('m140328_214557_insert_dummy_data_type_kepribadian', 1398543079),
('m140328_214558_insert_dummy_data_type_papi_kostick', 1398543079),
('m140328_214559_insert_dummy_data_type_rmib', 1398543079),
('m140328_214560_insert_dummy_data_type_ist', 1398543079),
('m140328_214561_insert_dummy_data_type_mmi', 1398543079),
('m140328_214562_insert_dummy_data_type_quiz', 1398543079),
('m140402_093542_insert_dummy_data_tags', 1398543080),
('m140407_054757_insert_dummy_test_modalitas_belajar', 1398543081),
('m140407_071103_insert_dummy_variable_detail_test_modalita_belajar', 1398543081),
('m140411_033025_insert_dummy_test_otak_kanan_otak_kiri', 1398543083),
('m140411_033056_insert_dummy_variable_detail_test_otak_kanan_otak_kiri', 1398543083),
('m140419_115903_insert_dummy_data_test_kepribadian', 1398543084),
('m140419_115928_insert_dummy_variable_detail_test_kepribadian', 1398543084),
('m140421_072036_insert_dummy_test_modalitas_belajar_paket_1', 1398543084),
('m140421_072041_insert_dummy_test_modalitas_belajar_paket_2', 1398543085),
('m140421_072048_insert_dummy_test_modalitas_belajar_paket_3', 1398543085),
('m140422_220519_insert_dummy_test_mbti', 1398543086),
('m140423_041027_insert_variable_detail_test_mbti', 1398543086),
('m140426_173233_insert_dummy_data_accesses', 1398543088);

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE IF NOT EXISTS `positions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `status_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug_positions_unique` (`slug`),
  KEY `status_id_positions_index` (`status_id`),
  KEY `role_id_positions_index` (`role_id`),
  KEY `created_by_positions_index` (`created_by`),
  KEY `updated_by_positions_index` (`updated_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `slug`, `name`, `description`, `status_id`, `role_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN-ADMIN', 'ADMIN', '', 2, 1, 1, NULL, '2014-04-26 22:11:17', NULL),
(2, 'EXPERT-OWNER', 'OWNER', '', 2, 2, 1, NULL, '2014-04-26 22:11:17', NULL),
(3, 'EXPERT-EMPLOYEE', 'EMPLOYEE', '', 2, 2, 1, NULL, '2014-04-26 22:11:17', NULL),
(4, 'COMPANY-OWNER', 'OWNER', '', 2, 3, 1, NULL, '2014-04-26 22:11:17', NULL),
(5, 'COMPANY-EMPLOYEE', 'EMPLOYEE', '', 2, 3, 1, NULL, '2014-04-26 22:11:17', NULL),
(6, 'MEMBER-MEMBER', 'MEMBER', '', 2, 4, 1, NULL, '2014-04-26 22:11:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `position_accesses`
--

CREATE TABLE IF NOT EXISTS `position_accesses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_id` int(11) NOT NULL,
  `access_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `status_id_position_accesses_index` (`status_id`),
  KEY `access_id_position_accesses_index` (`access_id`),
  KEY `position_id_position_accesses_index` (`position_id`),
  KEY `created_by_position_accesses_index` (`created_by`),
  KEY `updated_by_position_accesses_index` (`updated_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `position_accesses`
--

INSERT INTO `position_accesses` (`id`, `status_id`, `access_id`, `position_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 2, 1, NULL, '2014-04-26 22:11:26', NULL),
(2, 2, 2, 2, 1, NULL, '2014-04-26 22:11:26', NULL),
(3, 2, 3, 1, 1, NULL, '2014-04-26 22:11:27', NULL),
(4, 2, 3, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(5, 2, 3, 4, 1, NULL, '2014-04-26 22:11:27', NULL),
(6, 2, 3, 6, 1, NULL, '2014-04-26 22:11:27', NULL),
(7, 2, 4, 1, 1, NULL, '2014-04-26 22:11:27', NULL),
(8, 2, 4, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(9, 2, 4, 4, 1, NULL, '2014-04-26 22:11:27', NULL),
(10, 2, 4, 6, 1, NULL, '2014-04-26 22:11:27', NULL),
(11, 2, 5, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(12, 2, 6, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(13, 2, 7, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(14, 2, 8, 1, 1, NULL, '2014-04-26 22:11:27', NULL),
(15, 2, 9, 1, 1, NULL, '2014-04-26 22:11:27', NULL),
(16, 2, 10, 1, 1, NULL, '2014-04-26 22:11:27', NULL),
(17, 2, 11, 1, 1, NULL, '2014-04-26 22:11:27', NULL),
(18, 2, 12, 1, 1, NULL, '2014-04-26 22:11:27', NULL),
(19, 2, 13, 1, 1, NULL, '2014-04-26 22:11:27', NULL),
(20, 2, 14, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(21, 2, 15, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(22, 2, 16, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(23, 2, 17, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(24, 2, 18, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(25, 2, 19, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(26, 2, 20, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(27, 2, 21, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(28, 2, 22, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(29, 2, 23, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(30, 2, 24, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(31, 2, 25, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(32, 2, 26, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(33, 2, 27, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(34, 2, 28, 4, 1, NULL, '2014-04-26 22:11:27', NULL),
(35, 2, 29, 4, 1, NULL, '2014-04-26 22:11:27', NULL),
(36, 2, 30, 4, 1, NULL, '2014-04-26 22:11:27', NULL),
(37, 2, 31, 4, 1, NULL, '2014-04-26 22:11:27', NULL),
(38, 2, 32, 4, 1, NULL, '2014-04-26 22:11:27', NULL),
(39, 2, 33, 4, 1, NULL, '2014-04-26 22:11:27', NULL),
(40, 2, 34, 6, 1, NULL, '2014-04-26 22:11:27', NULL),
(41, 2, 35, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(42, 2, 36, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(43, 2, 37, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(44, 2, 38, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(45, 2, 39, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(46, 2, 40, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(47, 2, 41, 1, 1, NULL, '2014-04-26 22:11:27', NULL),
(48, 2, 42, 1, 1, NULL, '2014-04-26 22:11:27', NULL),
(49, 2, 43, 1, 1, NULL, '2014-04-26 22:11:27', NULL),
(50, 2, 44, 1, 1, NULL, '2014-04-26 22:11:27', NULL),
(51, 2, 45, 1, 1, NULL, '2014-04-26 22:11:27', NULL),
(52, 2, 46, 1, 1, NULL, '2014-04-26 22:11:27', NULL),
(53, 2, 47, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(54, 2, 48, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(55, 2, 49, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(56, 2, 50, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(57, 2, 51, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(58, 2, 52, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(59, 2, 53, 2, 1, NULL, '2014-04-26 22:11:27', NULL),
(60, 2, 54, 4, 1, NULL, '2014-04-26 22:11:27', NULL),
(61, 2, 55, 4, 1, NULL, '2014-04-26 22:11:27', NULL),
(62, 2, 56, 4, 1, NULL, '2014-04-26 22:11:27', NULL),
(63, 2, 57, 4, 1, NULL, '2014-04-26 22:11:28', NULL),
(64, 2, 58, 4, 1, NULL, '2014-04-26 22:11:28', NULL),
(65, 2, 59, 4, 1, NULL, '2014-04-26 22:11:28', NULL),
(66, 2, 60, 4, 1, NULL, '2014-04-26 22:11:28', NULL),
(67, 2, 61, 4, 1, NULL, '2014-04-26 22:11:28', NULL),
(68, 2, 62, 4, 1, NULL, '2014-04-26 22:11:28', NULL),
(69, 2, 63, 6, 1, NULL, '2014-04-26 22:11:28', NULL),
(70, 2, 64, 6, 1, NULL, '2014-04-26 22:11:28', NULL),
(71, 2, 65, 6, 1, NULL, '2014-04-26 22:11:28', NULL),
(72, 2, 66, 6, 1, NULL, '2014-04-26 22:11:28', NULL),
(73, 2, 67, 6, 1, NULL, '2014-04-26 22:11:28', NULL),
(74, 2, 68, 6, 1, NULL, '2014-04-26 22:11:28', NULL),
(75, 2, 69, 6, 1, NULL, '2014-04-26 22:11:28', NULL),
(76, 2, 70, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(77, 2, 71, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(78, 2, 72, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(79, 2, 73, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(80, 2, 74, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(81, 2, 75, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(82, 2, 76, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(83, 2, 77, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(84, 2, 78, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(85, 2, 79, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(86, 2, 80, 2, 1, NULL, '2014-04-26 22:11:28', NULL),
(87, 2, 81, 2, 1, NULL, '2014-04-26 22:11:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `status_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `status_id_questions_index` (`status_id`),
  KEY `test_id_questions_index` (`test_id`),
  KEY `created_by_questions_index` (`created_by`),
  KEY `updated_by_questions_index` (`updated_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=277 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `description`, `status_id`, `test_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Ketika merangkai suatu barang, kamu lebih suka', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(2, 'Jika akan menghadapi ulangan, kamu mudah hafal jika', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(3, 'Saat membaca suatu buku, yang sering kamu lakukan adalah', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(4, 'Saat berbicara, kamu', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(5, 'Di waktu luang, kamu biasanya', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(6, 'Kalau kamu marah, biasanya paling terlihat dari', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(7, 'Biasanya pada saat kamu tidak ada kegiatan', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(8, 'Pilih kegiatan yang kamu merasa nyaman melakukannya', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(9, 'Kata-kata khas kamu saat berbicara', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(10, 'Mana yang paling sering terjadi saat di sekolah', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(11, 'Kamu lebih gampang mengingat sesuatu kalau kamu menuliskannya', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(12, 'Waktu guru menerangkan pelajaran di depan kelas, susah sekali buat kamu untuk mengerti', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(13, 'Bagian kosong buku catatan suka kamu gambari atau tulisi saat guru menerangkan', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(14, 'Kamu tidak bisa belajar kalau ada keributan atau musik terdengar oleh mu', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(15, 'Di tempat sepi biasanya kamu bisa konsentrasi dengan baik', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(16, 'Kamu lebih senang jika sesuatu berwarna', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(17, 'Kamu seringkali "telat" kalau ada yang melontarkan "joke"', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(18, 'Sewaktu ulangan, kamu membayangkan buku catatan kamu dalam pikiran', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(19, 'Saat guru menerangkan, kamu merasa lebih bisa berkonsentrasi kalau menatap wajahnya', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(20, 'Kamu menuliskan instruksi yang kamu dapat, tidak hanya mendengarnya saja', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(21, 'Catatan-catatan kamu berantakan sekali, tidak teratur', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(22, 'Mata kamu gampang capek walau kamu tidak pakai kacamata', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(23, 'Kamu tidak begitu mahir mengartikan bahasa tubuh seseorang', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(24, 'Kamu seringkali salah membaca suatu kata', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(25, 'Lebih baik kamu disuruh mendengarkan guru menerangkan daripada disuruh membaca buku sendiri', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(26, 'Kamu sangat mudah mengingat sesuatu yang dikatakan oleh orang', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(27, 'Kamu paling tidak suka jika mendapat tugas menulis essay atau laporan, lebih baik ditanya secara lisan', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(28, 'Kamu kesulitan membaca tulisan yang kecil-kecil, walau mata kamu sehat', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(29, 'Instruksi/petunjuk tertulis membuat kamu bingung', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(30, 'Membaca membuat tangan kamu pegal karena harus menunjuk tiap kata yang sedang dibaca, kalau tidak, melantur kemana-mana', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(31, 'Teman-teman kamu tidak mengerti kalau kamu memberi instruksi', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(32, 'Waktu yang kamu butuhkan untuk mengerjakan tugas cukup lama, karena kamu harus berjalan ke sana kemari, beristirahat sebentar, atau mengerjakan hal lain, untuk mendapatkan ide lebih lanjut', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(33, 'Duduk terlalu lama menyiksa kamu', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(34, 'Daripada memikirkannya matang-matang, kamu memilih "trial-error" kalau menghadapi suatu masalah', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(35, 'Biasanya kamu langsung mengerjakan sesuatu tanpa harus melihat instruksinya terlebih dahulu', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(36, 'Kamu senang berolah raga dan cukup mahir pada beberapa cabang olah raga', 2, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(37, 'Teman kamu bilang "Repot sekali melihat kamu menerangkan sesuatu, tangan kamu tidak bisa diam. Pasti ikut menerangkan juga"', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(38, 'Kamu melihat sesuatu yang sudah jadi, kemudian kamu suka membuatnya sendiri', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(39, 'Kamu senang membaca buku pelajaran sambil naik sepeda statis/olahraga ditempat lainnya', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(40, 'Agar kamu dapat mengerti pelajaran, kamu suka menulis ulang atau mengetik catatan pelajaran kamu', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(41, 'Kamu lebih baik disuruh menggambarkan peta daripada menerangkan arah jalan kepada seseorang', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(42, 'Kamu dapat/pernah memainkan suatu alat musik', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(43, 'Kamu dapat menghubungkan musik dengan perasaanmu', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(44, 'Kamu bisa menjumlah atau mengalikan dengan cepat diluar kepala', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(45, 'Kamu senang bekerja dengan komputer atau kalkulator', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(46, 'Belajar langkah baru dalam suatu tarian/gerakan dansa, mudah buat kamu', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(47, 'Mudah bagi kamu untuk mengungkapkan pendapat kamu dalam suatu debat', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(48, 'Kamu senang mengikuti ceramah atau seminar', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(49, 'Dimanapun kamu berada, kamu tahu arah mata angin', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(50, 'Hidupmu rasanya hampa tanpa musik', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(51, 'Kamu selalu mengerti instruksi-instruksi dalam buku manual suatu barang', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(52, 'Puzzle dan Games sangat kamu sukai', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(53, 'Mudah bagi kamu untuk belajar mengendarai motor/mobil', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(54, 'Kamu merasa terpancing saat mendengar ada orang yang berbicara tapi pembicaraannya terdengar tidak logis', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(55, 'Koordinasi tubuh dan keseimbangan kamu cukup baik', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(56, 'Kamu merasa lebih cepat dari orang lain saat melihat pola atau hubungan antara suatu angka', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(57, 'Kamu menyukai kegiatan membuat model atau membuat patung', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(58, 'Mudah bagi kamu untuk menangkap inti suatu pembicaraan/kalimat', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(59, 'Kamu dapat dengan mudah membayangkan suatu objek dalam berbagai posisi', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(60, 'Seringkali kamu menjadikan suatu lagu sebagai "soundtrack" suatu kejadian dalam hidup kamu', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(61, 'Kamu suka bekerja dengan angka-angka dan bentuk', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(62, 'Menyenangkan buat kamu untuk memperhatikan bentuk-bentuk gedung/rumah', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(63, 'Diwaktu kamu sendiri atau di kamar mandi, kamu senang bersenandung atau bersiul', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(64, 'Kamu cukup baik di salah satu cabang olahraga', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(65, 'Kamu berminat untuk belajar struktur bahasa', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(66, 'Biasanya kamu cukup sadar terhadap ekspresi wajah kamu', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(67, 'Kamu cukup peka terhadap perubahan ekspresi tubuh orang lain', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(68, 'Kamu cukup peka terhadap perasaan-perasaan kamu dan mudah untuk membedakannya', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(69, 'Kamu cukup peka terhadap perasaan orang lain', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(70, 'Kamu cukup peka tentang pandangan orang terhadap kamu', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(71, 'Jika kamu duduk sebangku berdua, kamu pilih duduk di sisi kiri atau kanan', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(72, 'Kalau menghadapi ujian, kamu lebih baik mendapat soal pilihan ganda (objektif) atau soal essay (subjektif)', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(73, 'Seringkah kamu mendapatkan firasat/perasaan tertentu', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(74, 'Jika ya, apakah kamu mengikuti firasat/perasaan tersebut', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(75, 'Apakah kamu meletakkan barang-barang pada tempatnya, dan segala sesuatu di kamarmu tertata rapi', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(76, 'Ketika kamu mempelajari suatu gerakan olah raga/tarian, manakah yang lebih mudah bagimu', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(77, 'Apakah kamu suka memindah-mindahkan barang di kamar kamu setelah beberapa waktu, atau membiarkannya tetap sama dari waktu ke waktu', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(78, 'Dapatkah kamu memperhitungkan waktu tanpa harus melihat jam', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(79, 'Pelajaran manakah yang lebih kamu sukai', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(80, 'Kamu lebih mudah mengingat wajah seseorang atau mengingat nama seseorang', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(81, 'Jika kamu diberi topik tentang "Sekolah" manakah yang lebih mudah bagi kamu untuk mengekspresikan pikiran kamu', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(82, 'Ketika seseorang berbicara kepadamu, manakah yang lebih kamu perhatikan, apa yang dia katakan, atau nada bicaranya', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(83, 'Ketika kamu berbicara, apakah kamu menggerak-gerakkan tanganmu', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(84, 'Meja belajar atau tempat kamu belajar biasanya', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(85, 'Lebih mudah yang mana bagi kamu', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(86, 'Kamu dapat berpikir dengan lebih baik pada saat duduk atau berbaring', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(87, 'Mana yang lebih nyaman untuk kamu', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(88, 'Saat mengerjakan persoalan matematika', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(89, 'Kamu selalu dapat menemukan kata-kata yang tepat untuk mengekspresikan perasaan kamu', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(90, 'Kamu suka melamun dan melamunkan hal-hal yang menyenangkan', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(91, 'Apakah kamu tertarik pada Psikologi atau Penyembuhan Holistik', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(92, 'Apakah kamu pernah mengalami "de javu" (merasa pernah melihat/mengalami sesuatu pada waktu lampau', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(93, 'Apakah kamu tertarik pada musik, lukisan, tarian, atau hal lain yang mengekspresikan keindahan', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(94, 'Apakah kamu suka mengingat-ingat masa lalu', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(95, 'Apakah kamu termasuk orang yang romantis, atau menyukai keindahan', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(96, 'Apakah kamu cukup sabar untuk melihat dari berbagai sudut dalam memecahkan suatu masalah', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(97, 'Mudahkah untukmu mengelompokkan berkas-berkas dan membuang yang tidak perlu', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(98, 'Apakah kamu sering terlalu cepat mengambil keputusan dan atau bertindak spontan', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(99, 'Menurut kamu, cukup objektifkah kamu dalam menilai sesuatu, dan memperhatikan fakta-fakta yang ada sebelum mengambil keputusan', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(100, 'Mudahkah kamu merasa sedih, atau mudahkah bagi kamu untuk menangis', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(101, 'Apakah pada umumnya kamu berpikir secara logis dan memikirkan mengapa orang-orang bertindak seperti itu', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(102, 'Seringkah kamu mengambil keputusan berdasarkan perasaan', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(103, 'Apakah kamu sering merasa tidak punya cukup waktu', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(104, 'Mudahkah bagi kamu untuk belajar melalui observasi dan melakukannya', 2, 2, 2, NULL, '2014-04-26 22:11:22', NULL),
(105, 'Tertarikkah kamu pada teknologi dan perlengkapannya secara teknis', 2, 2, 2, NULL, '2014-04-26 22:11:23', NULL),
(106, 'Apakah kamu memiliki kemampuan untuk menggambar sebuat sketsa kasar dan menjelaskannya', 2, 2, 2, NULL, '2014-04-26 22:11:23', NULL),
(107, 'Kelemahan', 2, 3, 2, NULL, '2014-04-26 22:11:23', NULL),
(108, 'Kelemahan', 2, 3, 2, NULL, '2014-04-26 22:11:23', NULL),
(109, 'Kelemahan', 2, 3, 2, NULL, '2014-04-26 22:11:23', NULL),
(110, 'Kelemahan', 2, 3, 2, NULL, '2014-04-26 22:11:23', NULL),
(111, 'Kelemahan', 2, 3, 2, NULL, '2014-04-26 22:11:23', NULL),
(112, 'Kelemahan', 2, 3, 2, NULL, '2014-04-26 22:11:23', NULL),
(113, 'Kelemahan', 2, 3, 2, NULL, '2014-04-26 22:11:23', NULL),
(114, 'Kelemahan', 2, 3, 2, NULL, '2014-04-26 22:11:23', NULL),
(115, 'Kelemahan', 2, 3, 2, NULL, '2014-04-26 22:11:23', NULL),
(116, 'Kelemahan', 2, 3, 2, NULL, '2014-04-26 22:11:23', NULL),
(117, 'Kelemahan', 2, 3, 2, NULL, '2014-04-26 22:11:23', NULL),
(118, 'Kelemahan', 2, 3, 2, NULL, '2014-04-26 22:11:23', NULL),
(119, 'Kelemahan', 2, 3, 2, NULL, '2014-04-26 22:11:23', NULL),
(120, 'Kelemahan', 2, 3, 2, NULL, '2014-04-26 22:11:23', NULL),
(121, 'Kelemahan', 2, 3, 2, NULL, '2014-04-26 22:11:23', NULL),
(122, 'Kelemahan', 2, 3, 2, NULL, '2014-04-26 22:11:23', NULL),
(123, 'Kelemahan', 2, 3, 2, NULL, '2014-04-26 22:11:23', NULL),
(124, 'Kelemahan', 2, 3, 2, NULL, '2014-04-26 22:11:23', NULL),
(125, 'Kelemahan', 2, 3, 2, NULL, '2014-04-26 22:11:23', NULL),
(126, 'Kelemahan', 2, 3, 2, NULL, '2014-04-26 22:11:23', NULL),
(127, 'Kekuatan', 2, 3, 2, NULL, '2014-04-26 22:11:23', NULL),
(128, 'Kekuatan', 2, 3, 2, NULL, '2014-04-26 22:11:23', NULL),
(129, 'Kekuatan', 2, 3, 2, NULL, '2014-04-26 22:11:24', NULL),
(130, 'Kekuatan', 2, 3, 2, NULL, '2014-04-26 22:11:24', NULL),
(131, 'Kekuatan', 2, 3, 2, NULL, '2014-04-26 22:11:24', NULL),
(132, 'Kekuatan', 2, 3, 2, NULL, '2014-04-26 22:11:24', NULL),
(133, 'Kekuatan', 2, 3, 2, NULL, '2014-04-26 22:11:24', NULL),
(134, 'Kekuatan', 2, 3, 2, NULL, '2014-04-26 22:11:24', NULL),
(135, 'Kekuatan', 2, 3, 2, NULL, '2014-04-26 22:11:24', NULL),
(136, 'Kekuatan', 2, 3, 2, NULL, '2014-04-26 22:11:24', NULL),
(137, 'Kekuatan', 2, 3, 2, NULL, '2014-04-26 22:11:24', NULL),
(138, 'Kekuatan', 2, 3, 2, NULL, '2014-04-26 22:11:24', NULL),
(139, 'Kekuatan', 2, 3, 2, NULL, '2014-04-26 22:11:24', NULL),
(140, 'Kekuatan', 2, 3, 2, NULL, '2014-04-26 22:11:24', NULL),
(141, 'Kekuatan', 2, 3, 2, NULL, '2014-04-26 22:11:24', NULL),
(142, 'Kekuatan', 2, 3, 2, NULL, '2014-04-26 22:11:24', NULL),
(143, 'Kekuatan', 2, 3, 2, NULL, '2014-04-26 22:11:24', NULL),
(144, 'Kekuatan', 2, 3, 2, NULL, '2014-04-26 22:11:24', NULL),
(145, 'Kekuatan', 2, 3, 2, NULL, '2014-04-26 22:11:24', NULL),
(146, 'Kekuatan', 2, 3, 2, NULL, '2014-04-26 22:11:24', NULL),
(147, 'Ketika merangkai suatu barang, kamu lebih suka', 2, 4, 2, NULL, '2014-04-26 22:11:24', NULL),
(148, 'Jika akan menghadapi ulangan, kamu mudah hafal jika', 2, 4, 2, NULL, '2014-04-26 22:11:24', NULL),
(149, 'Saat membaca suatu buku, yang sering kamu lakukan adalah', 2, 4, 2, NULL, '2014-04-26 22:11:24', NULL),
(150, 'Saat berbicara, kamu', 2, 4, 2, NULL, '2014-04-26 22:11:24', NULL),
(151, 'Di waktu luang, kamu biasanya', 2, 4, 2, NULL, '2014-04-26 22:11:24', NULL),
(152, 'Kalau kamu marah, biasanya paling terlihat dari', 2, 4, 2, NULL, '2014-04-26 22:11:24', NULL),
(153, 'Biasanya pada saat kamu tidak ada kegiatan', 2, 4, 2, NULL, '2014-04-26 22:11:24', NULL),
(154, 'Pilih kegiatan yang kamu merasa nyaman melakukannya', 2, 4, 2, NULL, '2014-04-26 22:11:24', NULL),
(155, 'Kata-kata khas kamu saat berbicara', 2, 4, 2, NULL, '2014-04-26 22:11:24', NULL),
(156, 'Mana yang paling sering terjadi saat di sekolah', 2, 4, 2, NULL, '2014-04-26 22:11:24', NULL),
(157, 'Kamu lebih gampang mengingat sesuatu kalau kamu menuliskannya', 2, 5, 2, NULL, '2014-04-26 22:11:24', NULL),
(158, 'Waktu guru menerangkan pelajaran di depan kelas, susah sekali buat kamu untuk mengerti', 2, 5, 2, NULL, '2014-04-26 22:11:24', NULL),
(159, 'Bagian kosong buku catatan suka kamu gambari atau tulisi saat guru menerangkan', 2, 5, 2, NULL, '2014-04-26 22:11:24', NULL),
(160, 'Kamu tidak bisa belajar kalau ada keributan atau musik terdengar oleh mu', 2, 5, 2, NULL, '2014-04-26 22:11:24', NULL),
(161, 'Di tempat sepi biasanya kamu bisa konsentrasi dengan baik', 2, 5, 2, NULL, '2014-04-26 22:11:24', NULL),
(162, 'Kamu lebih senang jika sesuatu berwarna', 2, 5, 2, NULL, '2014-04-26 22:11:24', NULL),
(163, 'Kamu seringkali "telat" kalau ada yang melontarkan "joke"', 2, 5, 2, NULL, '2014-04-26 22:11:24', NULL),
(164, 'Sewaktu ulangan, kamu membayangkan buku catatan kamu dalam pikiran', 2, 5, 2, NULL, '2014-04-26 22:11:24', NULL),
(165, 'Saat guru menerangkan, kamu merasa lebih bisa berkonsentrasi kalau menatap wajahnya', 2, 5, 2, NULL, '2014-04-26 22:11:24', NULL),
(166, 'Kamu menuliskan instruksi yang kamu dapat, tidak hanya mendengarnya saja', 2, 5, 2, NULL, '2014-04-26 22:11:24', NULL),
(167, 'Catatan-catatan kamu berantakan sekali, tidak teratur', 2, 5, 2, NULL, '2014-04-26 22:11:24', NULL),
(168, 'Mata kamu gampang capek walau kamu tidak pakai kacamata', 2, 5, 2, NULL, '2014-04-26 22:11:24', NULL),
(169, 'Kamu tidak begitu mahir mengartikan bahasa tubuh seseorang', 2, 5, 2, NULL, '2014-04-26 22:11:24', NULL),
(170, 'Kamu seringkali salah membaca suatu kata', 2, 5, 2, NULL, '2014-04-26 22:11:24', NULL),
(171, 'Lebih baik kamu disuruh mendengarkan guru menerangkan daripada disuruh membaca buku sendiri', 2, 5, 2, NULL, '2014-04-26 22:11:24', NULL),
(172, 'Kamu sangat mudah mengingat sesuatu yang dikatakan oleh orang', 2, 5, 2, NULL, '2014-04-26 22:11:24', NULL),
(173, 'Kamu paling tidak suka jika mendapat tugas menulis essay atau laporan, lebih baik ditanya secara lisan', 2, 5, 2, NULL, '2014-04-26 22:11:24', NULL),
(174, 'Kamu kesulitan membaca tulisan yang kecil-kecil, walau mata kamu sehat', 2, 5, 2, NULL, '2014-04-26 22:11:24', NULL),
(175, 'Instruksi/petunjuk tertulis membuat kamu bingung', 2, 5, 2, NULL, '2014-04-26 22:11:24', NULL),
(176, 'Membaca membuat tangan kamu pegal karena harus menunjuk tiap kata yang sedang dibaca, kalau tidak, melantur kemana-mana', 2, 5, 2, NULL, '2014-04-26 22:11:24', NULL),
(177, 'Teman-teman kamu tidak mengerti kalau kamu memberi instruksi', 2, 5, 2, NULL, '2014-04-26 22:11:24', NULL),
(178, 'Waktu yang kamu butuhkan untuk mengerjakan tugas cukup lama, karena kamu harus berjalan ke sana kemari, beristirahat sebentar, atau mengerjakan hal lain, untuk mendapatkan ide lebih lanjut', 2, 5, 2, NULL, '2014-04-26 22:11:25', NULL),
(179, 'Duduk terlalu lama menyiksa kamu', 2, 5, 2, NULL, '2014-04-26 22:11:25', NULL),
(180, 'Daripada memikirkannya matang-matang, kamu memilih "trial-error" kalau menghadapi suatu masalah', 2, 5, 2, NULL, '2014-04-26 22:11:25', NULL),
(181, 'Biasanya kamu langsung mengerjakan sesuatu tanpa harus melihat instruksinya terlebih dahulu', 2, 5, 2, NULL, '2014-04-26 22:11:25', NULL),
(182, 'Kamu senang berolah raga dan cukup mahir pada beberapa cabang olah raga', 2, 5, 2, NULL, '2014-04-26 22:11:25', NULL),
(183, 'Teman kamu bilang "Repot sekali melihat kamu menerangkan sesuatu, tangan kamu tidak bisa diam. Pasti ikut menerangkan juga"', 2, 5, 2, NULL, '2014-04-26 22:11:25', NULL),
(184, 'Kamu melihat sesuatu yang sudah jadi, kemudian kamu suka membuatnya sendiri', 2, 5, 2, NULL, '2014-04-26 22:11:25', NULL),
(185, 'Kamu senang membaca buku pelajaran sambil naik sepeda statis/olahraga ditempat lainnya', 2, 5, 2, NULL, '2014-04-26 22:11:25', NULL),
(186, 'Agar kamu dapat mengerti pelajaran, kamu suka menulis ulang atau mengetik catatan pelajaran kamu', 2, 5, 2, NULL, '2014-04-26 22:11:25', NULL),
(187, 'Kamu lebih baik disuruh menggambarkan peta daripada menerangkan arah jalan kepada seseorang', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(188, 'Kamu dapat/pernah memainkan suatu alat musik', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(189, 'Kamu dapat menghubungkan musik dengan perasaanmu', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(190, 'Kamu bisa menjumlah atau mengalikan dengan cepat diluar kepala', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(191, 'Kamu senang bekerja dengan komputer atau kalkulator', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(192, 'Belajar langkah baru dalam suatu tarian/gerakan dansa, mudah buat kamu', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(193, 'Mudah bagi kamu untuk mengungkapkan pendapat kamu dalam suatu debat', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(194, 'Kamu senang mengikuti ceramah atau seminar', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(195, 'Dimanapun kamu berada, kamu tahu arah mata angin', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(196, 'Hidupmu rasanya hampa tanpa musik', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(197, 'Kamu selalu mengerti instruksi-instruksi dalam buku manual suatu barang', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(198, 'Puzzle dan Games sangat kamu sukai', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(199, 'Mudah bagi kamu untuk belajar mengendarai motor/mobil', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(200, 'Kamu merasa terpancing saat mendengar ada orang yang berbicara tapi pembicaraannya terdengar tidak logis', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(201, 'Koordinasi tubuh dan keseimbangan kamu cukup baik', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(202, 'Kamu merasa lebih cepat dari orang lain saat melihat pola atau hubungan antara suatu angka', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(203, 'Kamu menyukai kegiatan membuat model atau membuat patung', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(204, 'Mudah bagi kamu untuk menangkap inti suatu pembicaraan/kalimat', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(205, 'Kamu dapat dengan mudah membayangkan suatu objek dalam berbagai posisi', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(206, 'Seringkali kamu menjadikan suatu lagu sebagai "soundtrack" suatu kejadian dalam hidup kamu', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(207, 'Kamu suka bekerja dengan angka-angka dan bentuk', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(208, 'Menyenangkan buat kamu untuk memperhatikan bentuk-bentuk gedung/rumah', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(209, 'Diwaktu kamu sendiri atau di kamar mandi, kamu senang bersenandung atau bersiul', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(210, 'Kamu cukup baik di salah satu cabang olahraga', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(211, 'Kamu berminat untuk belajar struktur bahasa', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(212, 'Biasanya kamu cukup sadar terhadap ekspresi wajah kamu', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(213, 'Kamu cukup peka terhadap perubahan ekspresi tubuh orang lain', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(214, 'Kamu cukup peka terhadap perasaan-perasaan kamu dan mudah untuk membedakannya', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(215, 'Kamu cukup peka terhadap perasaan orang lain', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(216, 'Kamu cukup peka tentang pandangan orang terhadap kamu', 2, 6, 2, NULL, '2014-04-26 22:11:25', NULL),
(217, '', 2, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(218, '', 2, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(219, '', 2, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(220, '', 2, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(221, '', 2, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(222, '', 2, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(223, '', 2, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(224, '', 2, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(225, '', 2, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(226, '', 2, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(227, '', 2, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(228, '', 2, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(229, '', 2, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(230, '', 2, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(231, '', 2, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(232, '', 2, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(233, '', 2, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(234, '', 2, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(235, '', 2, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(236, '', 2, 7, 2, NULL, '2014-04-26 22:11:25', NULL),
(237, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(238, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(239, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(240, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(241, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(242, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(243, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(244, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(245, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(246, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(247, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(248, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(249, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(250, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(251, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(252, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(253, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(254, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(255, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(256, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(257, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(258, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(259, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(260, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(261, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(262, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(263, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(264, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(265, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(266, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(267, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(268, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(269, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(270, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(271, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(272, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(273, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(274, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(275, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL),
(276, '', 2, 7, 2, NULL, '2014-04-26 22:11:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conclusion_detail_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `user_test_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `conclusion_detail_id_results_index` (`conclusion_detail_id`),
  KEY `user_test_id_results_index` (`user_test_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `result_details`
--

CREATE TABLE IF NOT EXISTS `result_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `result_id` int(11) NOT NULL,
  `variable_detail_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `result_id_result_details_index` (`result_id`),
  KEY `variable_detail_id_result_details_index` (`variable_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `status_id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug_roles_unique` (`slug`),
  KEY `status_id_roles_index` (`status_id`),
  KEY `created_by_roles_index` (`created_by`),
  KEY `updated_by_roles_index` (`updated_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `description`, `status_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN', 'ADMIN', '', 2, 1, NULL, '2014-04-26 22:11:17', NULL),
(2, 'EXPERT', 'EXPERT', '', 2, 1, NULL, '2014-04-26 22:11:17', NULL),
(3, 'COMPANY', 'COMPANY', '', 2, 1, NULL, '2014-04-26 22:11:17', NULL),
(4, 'MEMBER', 'MEMBER', '', 2, 1, NULL, '2014-04-26 22:11:17', NULL),
(5, 'GUEST', 'GUEST', '', 2, 1, NULL, '2014-04-26 22:11:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` char(32) NOT NULL,
  `expire` int(11) DEFAULT NULL,
  `data` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `expire`, `data`) VALUES
('kqjb2qridqtom4onrlq6oslim1', 1398545326, 0x35346662383664623632376433316532383331313466393466623834353361625f5f69647c733a313a2232223b35346662383664623632376433316532383331313466393466623834353361625f5f6e616d657c733a383a226d6168656e647269223b3534666238366462363237643331653238333131346639346662383435336162757365726e616d657c733a383a226d6168656e647269223b3534666238366462363237643331653238333131346639346662383435336162656d61696c7c733a32303a226d6168656e6472694073697073696b6f2e636f6d223b3534666238366462363237643331653238333131346639346662383435336162726f6c65737c613a333a7b733a31323a22436f6d70616e795573657273223b613a313a7b693a303b613a313a7b733a373a22436f6d70616e79223b613a333a7b733a323a226964223b733a313a2231223b733a343a226e616d65223b733a31303a2243562e204d616461696e223b733a383a22506f736974696f6e223b613a333a7b733a323a226964223b733a313a2234223b733a343a22736c7567223b733a31333a22434f4d50414e592d4f574e4552223b733a343a226e616d65223b733a353a224f574e4552223b7d7d7d7d733a31313a224578706572745573657273223b613a313a7b693a303b613a313a7b733a363a22457870657274223b613a333a7b733a323a226964223b733a313a2231223b733a343a226e616d65223b733a32313a2250542e205073696b6f6c6f67204e6173696f6e616c223b733a383a22506f736974696f6e223b613a333a7b733a323a226964223b733a313a2232223b733a343a22736c7567223b733a31323a224558504552542d4f574e4552223b733a343a226e616d65223b733a353a224f574e4552223b7d7d7d7d733a363a224d656d626572223b613a353a7b733a323a226964223b733a313a2232223b733a343a226e616d65223b733a31353a224d6168656e6472692057696e617461223b733a31303a2266697273745f6e616d65223b733a383a224d6168656e647269223b733a393a226c6173745f6e616d65223b733a363a2257696e617461223b733a383a22506f736974696f6e223b613a333a7b733a323a226964223b733a313a2236223b733a343a22736c7567223b733a31333a224d454d4245522d4d454d424552223b733a343a226e616d65223b733a363a224d454d424552223b7d7d7d353466623836646236323764333165323833313134663934666238343533616261636365737365737c613a36393a7b733a31353a2261646d696e2d64617368626f617264223b613a343a7b733a343a22736c7567223b733a31353a2261646d696e2d64617368626f617264223b733a343a226e616d65223b733a31353a2244617368626f61726420496e646578223b733a333a2275726c223b733a31353a2261646d696e2f64617368626f617264223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a32313a2261646d696e2d64617368626f6172642d696e646578223b613a343a7b733a343a22736c7567223b733a32313a2261646d696e2d64617368626f6172642d696e646578223b733a343a226e616d65223b733a31343a22446173626f61726420496e646578223b733a333a2275726c223b733a32313a2261646d696e2f64617368626f6172642f696e646578223b733a363a22706172616d73223b4e3b7d733a32323a2261646d696e2d746573742d76696577636f6d70616e79223b613a343a7b733a343a22736c7567223b733a32323a2261646d696e2d746573742d76696577636f6d70616e79223b733a343a226e616d65223b733a31373a225669657720436f6d70616e792054657374223b733a333a2275726c223b733a32323a2261646d696e2f746573742f76696577636f6d70616e79223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a32343a2261646d696e2d746573742d757064617465636f6d70616e79223b613a343a7b733a343a22736c7567223b733a32343a2261646d696e2d746573742d757064617465636f6d70616e79223b733a343a226e616d65223b733a31393a2255706461746520436f6d70616e792054657374223b733a333a2275726c223b733a32343a2261646d696e2f746573742f757064617465636f6d70616e79223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a32343a2261646d696e2d746573742d64656c657465636f6d70616e79223b613a343a7b733a343a22736c7567223b733a32343a2261646d696e2d746573742d64656c657465636f6d70616e79223b733a343a226e616d65223b733a31393a2244656c65746520436f6d70616e792054657374223b733a333a2275726c223b733a32343a2261646d696e2f746573742f64656c657465636f6d70616e79223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a31383a2261646d696e2d746573742d636f6d70616e79223b613a343a7b733a343a22736c7567223b733a31383a2261646d696e2d746573742d636f6d70616e79223b733a343a226e616d65223b733a31383a22436f6d70616e79205465737420496e646578223b733a333a2275726c223b733a31383a2261646d696e2f746573742f636f6d70616e79223b733a363a22706172616d73223b4e3b7d733a31373a2261646d696e2d746573742d616374697665223b613a343a7b733a343a22736c7567223b733a31373a2261646d696e2d746573742d616374697665223b733a343a226e616d65223b733a31393a22436f6d70616e79204163746976652054657374223b733a333a2275726c223b733a31373a2261646d696e2f746573742f616374697665223b733a363a22706172616d73223b4e3b7d733a31393a2261646d696e2d746573742d67656e6572617465223b613a343a7b733a343a22736c7567223b733a31393a2261646d696e2d746573742d67656e6572617465223b733a343a226e616d65223b733a32313a2247656e657261746520436f6d70616e792054657374223b733a333a2275726c223b733a31393a2261646d696e2f746573742f67656e6572617465223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a31343a2261646d696e2d7573657274657374223b613a343a7b733a343a22736c7567223b733a31343a2261646d696e2d7573657274657374223b733a343a226e616d65223b733a31353a2255736572205465737420496e646578223b733a333a2275726c223b733a31343a2261646d696e2f7573657274657374223b733a363a22706172616d73223b4e3b7d733a32303a2261646d696e2d75736572746573742d696e646578223b613a343a7b733a343a22736c7567223b733a32303a2261646d696e2d75736572746573742d696e646578223b733a343a226e616d65223b733a31353a2255736572205465737420496e646578223b733a333a2275726c223b733a32303a2261646d696e2f75736572746573742f696e646578223b733a363a22706172616d73223b4e3b7d733a31393a2261646d696e2d75736572746573742d76696577223b613a343a7b733a343a22736c7567223b733a31393a2261646d696e2d75736572746573742d76696577223b733a343a226e616d65223b733a31343a225669657720557365722054657374223b733a333a2275726c223b733a31393a2261646d696e2f75736572746573742f76696577223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a32313a2261646d696e2d75736572746573742d637265617465223b613a343a7b733a343a22736c7567223b733a32313a2261646d696e2d75736572746573742d637265617465223b733a343a226e616d65223b733a31363a2243726561746520557365722054657374223b733a333a2275726c223b733a32313a2261646d696e2f75736572746573742f637265617465223b733a363a22706172616d73223b4e3b7d733a32313a2261646d696e2d75736572746573742d757064617465223b613a343a7b733a343a22736c7567223b733a32313a2261646d696e2d75736572746573742d757064617465223b733a343a226e616d65223b733a31363a2255706461746520557365722054657374223b733a333a2275726c223b733a32313a2261646d696e2f75736572746573742f757064617465223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a32313a2261646d696e2d75736572746573742d64656c657465223b613a343a7b733a343a22736c7567223b733a32313a2261646d696e2d75736572746573742d64656c657465223b733a343a226e616d65223b733a31363a2244656c65746520557365722054657374223b733a333a2275726c223b733a32313a2261646d696e2f75736572746573742f64656c657465223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a32353a2261646d696e2d75736572746573742d6d656d62657274657374223b613a343a7b733a343a22736c7567223b733a32353a2261646d696e2d75736572746573742d6d656d62657274657374223b733a343a226e616d65223b733a32323a224d656d6265722055736572205465737420496e646578223b733a333a2275726c223b733a32353a2261646d696e2f75736572746573742f6d656d62657274657374223b733a363a22706172616d73223b4e3b7d733a32313a2261646d696e2d75736572746573742d726573756c74223b613a343a7b733a343a22736c7567223b733a32313a2261646d696e2d75736572746573742d726573756c74223b733a343a226e616d65223b733a32343a22436f6d70616e7920526573756c7420557365722054657374223b733a333a2275726c223b733a32313a2261646d696e2f75736572746573742f726573756c74223b733a363a22706172616d73223b4e3b7d733a33303a2261646d696e2d75736572746573742d736574746573747661726961626c65223b613a343a7b733a343a22736c7567223b733a33303a2261646d696e2d75736572746573742d736574746573747661726961626c65223b733a343a226e616d65223b733a33353a22436f6d70616e79205365742054657374205661726961626c6520557365722054657374223b733a333a2275726c223b733a33303a2261646d696e2f75736572746573742f736574746573747661726961626c65223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a31393a2261646d696e2d616e737765722d637265617465223b613a343a7b733a343a22736c7567223b733a31393a2261646d696e2d616e737765722d637265617465223b733a343a226e616d65223b733a31333a2243726561746520416e73776572223b733a333a2275726c223b733a31393a2261646d696e2f616e737765722f637265617465223b733a363a22706172616d73223b733a32303a2269643a747275653b747970655f69643a74727565223b7d733a31393a2261646d696e2d616e737765722d64656c657465223b613a343a7b733a343a22736c7567223b733a31393a2261646d696e2d616e737765722d64656c657465223b733a343a226e616d65223b733a31333a2244656c65746520416e73776572223b733a333a2275726c223b733a31393a2261646d696e2f616e737765722f64656c657465223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a32313a2261646d696e2d7175657374696f6e2d637265617465223b613a343a7b733a343a22736c7567223b733a32313a2261646d696e2d7175657374696f6e2d637265617465223b733a343a226e616d65223b733a31353a22437265617465205175657374696f6e223b733a333a2275726c223b733a32313a2261646d696e2f7175657374696f6e2f637265617465223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a32313a2261646d696e2d7175657374696f6e2d757064617465223b613a343a7b733a343a22736c7567223b733a32313a2261646d696e2d7175657374696f6e2d757064617465223b733a343a226e616d65223b733a31353a22557064617465205175657374696f6e223b733a333a2275726c223b733a32313a2261646d696e2f7175657374696f6e2f757064617465223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a32313a2261646d696e2d7175657374696f6e2d64656c657465223b613a343a7b733a343a22736c7567223b733a32313a2261646d696e2d7175657374696f6e2d64656c657465223b733a343a226e616d65223b733a31353a2244656c657465205175657374696f6e223b733a333a2275726c223b733a32313a2261646d696e2f7175657374696f6e2f64656c657465223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a393a2261646d696e2d746167223b613a343a7b733a343a22736c7567223b733a393a2261646d696e2d746167223b733a343a226e616d65223b733a393a2254616720496e646578223b733a333a2275726c223b733a393a2261646d696e2f746167223b733a363a22706172616d73223b4e3b7d733a31353a2261646d696e2d7461672d696e646578223b613a343a7b733a343a22736c7567223b733a31353a2261646d696e2d7461672d696e646578223b733a343a226e616d65223b733a393a2254616720496e646578223b733a333a2275726c223b733a31353a2261646d696e2f7461672f696e646578223b733a363a22706172616d73223b4e3b7d733a31343a2261646d696e2d7461672d76696577223b613a343a7b733a343a22736c7567223b733a31343a2261646d696e2d7461672d76696577223b733a343a226e616d65223b733a383a225669657720546167223b733a333a2275726c223b733a31343a2261646d696e2f7461672f76696577223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a31363a2261646d696e2d7461672d637265617465223b613a343a7b733a343a22736c7567223b733a31363a2261646d696e2d7461672d637265617465223b733a343a226e616d65223b733a31303a2243726561746520546167223b733a333a2275726c223b733a31363a2261646d696e2f7461672f637265617465223b733a363a22706172616d73223b4e3b7d733a31363a2261646d696e2d7461672d757064617465223b613a343a7b733a343a22736c7567223b733a31363a2261646d696e2d7461672d757064617465223b733a343a226e616d65223b733a31303a2255706461746520546167223b733a333a2275726c223b733a31363a2261646d696e2f7461672f757064617465223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a31363a2261646d696e2d7461672d64656c657465223b613a343a7b733a343a22736c7567223b733a31363a2261646d696e2d7461672d64656c657465223b733a343a226e616d65223b733a31303a2244656c65746520546167223b733a333a2275726c223b733a31363a2261646d696e2f7461672f64656c657465223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a31303a2261646d696e2d74657374223b613a343a7b733a343a22736c7567223b733a31303a2261646d696e2d74657374223b733a343a226e616d65223b733a31373a22546573742045787065727420496e646578223b733a333a2275726c223b733a31303a2261646d696e2f74657374223b733a363a22706172616d73223b4e3b7d733a31363a2261646d696e2d746573742d696e646578223b613a343a7b733a343a22736c7567223b733a31363a2261646d696e2d746573742d696e646578223b733a343a226e616d65223b733a31373a22546573742045787065727420496e646578223b733a333a2275726c223b733a31363a2261646d696e2f746573742f696e646578223b733a363a22706172616d73223b4e3b7d733a31353a2261646d696e2d746573742d76696577223b613a343a7b733a343a22736c7567223b733a31353a2261646d696e2d746573742d76696577223b733a343a226e616d65223b733a31363a2256696577204578706572742054657374223b733a333a2275726c223b733a31353a2261646d696e2f746573742f76696577223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a31373a2261646d696e2d746573742d637265617465223b613a343a7b733a343a22736c7567223b733a31373a2261646d696e2d746573742d637265617465223b733a343a226e616d65223b733a31383a22437265617465204578706572742054657374223b733a333a2275726c223b733a31373a2261646d696e2f746573742f637265617465223b733a363a22706172616d73223b4e3b7d733a31373a2261646d696e2d746573742d757064617465223b613a343a7b733a343a22736c7567223b733a31373a2261646d696e2d746573742d757064617465223b733a343a226e616d65223b733a31383a22557064617465204578706572742054657374223b733a333a2275726c223b733a31373a2261646d696e2f746573742f757064617465223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a31373a2261646d696e2d746573742d64656c657465223b613a343a7b733a343a22736c7567223b733a31373a2261646d696e2d746573742d64656c657465223b733a343a226e616d65223b733a31383a2244656c657465204578706572742054657374223b733a333a2275726c223b733a31373a2261646d696e2f746573742f64656c657465223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a32393a2261646d696e2d746573742d67656e657261746576616c69646174696f6e223b613a343a7b733a343a22736c7567223b733a32393a2261646d696e2d746573742d67656e657261746576616c69646174696f6e223b733a343a226e616d65223b733a33313a2247656e6572617465204578706572742056616c69646174696f6e2054657374223b733a333a2275726c223b733a32393a2261646d696e2f746573742f67656e657261746576616c69646174696f6e223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a31373a2261646d696e2d746573742d726573756c74223b613a343a7b733a343a22736c7567223b733a31373a2261646d696e2d746573742d726573756c74223b733a343a226e616d65223b733a31383a22526573756c74204578706572742054657374223b733a333a2275726c223b733a31373a2261646d696e2f746573742f726573756c74223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a31303a2261646d696e2d74797065223b613a343a7b733a343a22736c7567223b733a31303a2261646d696e2d74797065223b733a343a226e616d65223b733a31303a225479706520496e646578223b733a333a2275726c223b733a31303a2261646d696e2f74797065223b733a363a22706172616d73223b4e3b7d733a31363a2261646d696e2d747970652d696e646578223b613a343a7b733a343a22736c7567223b733a31363a2261646d696e2d747970652d696e646578223b733a343a226e616d65223b733a31303a225479706520496e646578223b733a333a2275726c223b733a31363a2261646d696e2f747970652f696e646578223b733a363a22706172616d73223b4e3b7d733a31353a2261646d696e2d747970652d76696577223b613a343a7b733a343a22736c7567223b733a31353a2261646d696e2d747970652d76696577223b733a343a226e616d65223b733a393a22566965772054797065223b733a333a2275726c223b733a31353a2261646d696e2f747970652f76696577223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a31373a2261646d696e2d747970652d637265617465223b613a343a7b733a343a22736c7567223b733a31373a2261646d696e2d747970652d637265617465223b733a343a226e616d65223b733a31313a224372656174652054797065223b733a333a2275726c223b733a31373a2261646d696e2f747970652f637265617465223b733a363a22706172616d73223b4e3b7d733a31373a2261646d696e2d747970652d757064617465223b613a343a7b733a343a22736c7567223b733a31373a2261646d696e2d747970652d757064617465223b733a343a226e616d65223b733a31313a225570646174652054797065223b733a333a2275726c223b733a31373a2261646d696e2f747970652f757064617465223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a31373a2261646d696e2d747970652d64656c657465223b613a343a7b733a343a22736c7567223b733a31373a2261646d696e2d747970652d64656c657465223b733a343a226e616d65223b733a31313a2244656c6574652054797065223b733a333a2275726c223b733a31373a2261646d696e2f747970652f64656c657465223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a32353a2261646d696e2d75736572746573742d76616c69646174696f6e223b613a343a7b733a343a22736c7567223b733a32353a2261646d696e2d75736572746573742d76616c69646174696f6e223b733a343a226e616d65223b733a32373a224578706572742056616c69646174696f6e20557365722054657374223b733a333a2275726c223b733a32353a2261646d696e2f75736572746573742f76616c69646174696f6e223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a33353a2261646d696e2d75736572746573742d7361766576616c69646174696f6e616e73776572223b613a343a7b733a343a22736c7567223b733a33353a2261646d696e2d75736572746573742d7361766576616c69646174696f6e616e73776572223b733a343a226e616d65223b733a33393a2245787065727420536176652056616c69646174696f6e20416e7377657220557365722054657374223b733a333a2275726c223b733a33353a2261646d696e2f75736572746573742f7361766576616c69646174696f6e616e73776572223b733a363a22706172616d73223b4e3b7d733a33383a2261646d696e2d75736572746573742d7361766576616c69646174696f6e7370656e7474696d65223b613a343a7b733a343a22736c7567223b733a33383a2261646d696e2d75736572746573742d7361766576616c69646174696f6e7370656e7474696d65223b733a343a226e616d65223b733a33383a224578706572742056616c69646174696f6e205370656e742054696d6520557365722054657374223b733a333a2275726c223b733a33383a2261646d696e2f75736572746573742f7361766576616c69646174696f6e7370656e7474696d65223b733a363a22706172616d73223b4e3b7d733a32393a2261646d696e2d75736572746573742d76616c69646174696f6e76696577223b613a343a7b733a343a22736c7567223b733a32393a2261646d696e2d75736572746573742d76616c69646174696f6e76696577223b733a343a226e616d65223b733a33323a224578706572742056616c69646174696f6e205669657720557365722054657374223b733a333a2275726c223b733a32393a2261646d696e2f75736572746573742f76616c69646174696f6e76696577223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a33313a2261646d696e2d75736572746573742d76616c69646174696f6e64656c657465223b613a343a7b733a343a22736c7567223b733a33313a2261646d696e2d75736572746573742d76616c69646174696f6e64656c657465223b733a343a226e616d65223b733a33343a224578706572742056616c69646174696f6e2044656c65746520557365722054657374223b733a333a2275726c223b733a33313a2261646d696e2f75736572746573742f76616c69646174696f6e64656c657465223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a32353a2261646d696e2d75736572746573742d7075626c696374657374223b613a343a7b733a343a22736c7567223b733a32353a2261646d696e2d75736572746573742d7075626c696374657374223b733a343a226e616d65223b733a32333a22457870657274205075626c696320557365722054657374223b733a333a2275726c223b733a32353a2261646d696e2f75736572746573742f7075626c696374657374223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a32373a2261646d696e2d75736572746573742d7075626c6963726573756c74223b613a343a7b733a343a22736c7567223b733a32373a2261646d696e2d75736572746573742d7075626c6963726573756c74223b733a343a226e616d65223b733a33303a22457870657274205075626c696320526573756c7420557365722054657374223b733a333a2275726c223b733a32353a2261646d696e2f75736572746573742f76616c69646174696f6e223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a31343a2261646d696e2d7661726961626c65223b613a343a7b733a343a22736c7567223b733a31343a2261646d696e2d7661726961626c65223b733a343a226e616d65223b733a31343a225661726961626c6520496e646578223b733a333a2275726c223b733a31343a2261646d696e2f7661726961626c65223b733a363a22706172616d73223b4e3b7d733a32303a2261646d696e2d7661726961626c652d696e646578223b613a343a7b733a343a22736c7567223b733a32303a2261646d696e2d7661726961626c652d696e646578223b733a343a226e616d65223b733a31343a225661726961626c6520496e646578223b733a333a2275726c223b733a32303a2261646d696e2f7661726961626c652f696e646578223b733a363a22706172616d73223b4e3b7d733a31393a2261646d696e2d7661726961626c652d76696577223b613a343a7b733a343a22736c7567223b733a31393a2261646d696e2d7661726961626c652d76696577223b733a343a226e616d65223b733a31333a2256696577205661726961626c65223b733a333a2275726c223b733a31393a2261646d696e2f7661726961626c652f76696577223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a32313a2261646d696e2d7661726961626c652d637265617465223b613a343a7b733a343a22736c7567223b733a32313a2261646d696e2d7661726961626c652d637265617465223b733a343a226e616d65223b733a31353a22437265617465205661726961626c65223b733a333a2275726c223b733a32313a2261646d696e2f7661726961626c652f637265617465223b733a363a22706172616d73223b4e3b7d733a32313a2261646d696e2d7661726961626c652d757064617465223b613a343a7b733a343a22736c7567223b733a32313a2261646d696e2d7661726961626c652d757064617465223b733a343a226e616d65223b733a31353a22557064617465205661726961626c65223b733a333a2275726c223b733a32313a2261646d696e2f7661726961626c652f757064617465223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a32313a2261646d696e2d7661726961626c652d64656c657465223b613a343a7b733a343a22736c7567223b733a32313a2261646d696e2d7661726961626c652d64656c657465223b733a343a226e616d65223b733a31353a2244656c657465205661726961626c65223b733a333a2275726c223b733a32313a2261646d696e2f7661726961626c652f64656c657465223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a32303a2261646d696e2d7661726961626c6564657461696c223b613a343a7b733a343a22736c7567223b733a32303a2261646d696e2d7661726961626c6564657461696c223b733a343a226e616d65223b733a32313a225661726961626c652044657461696c20496e646578223b733a333a2275726c223b733a32303a2261646d696e2f7661726961626c6564657461696c223b733a363a22706172616d73223b4e3b7d733a32363a2261646d696e2d7661726961626c6564657461696c2d696e646578223b613a343a7b733a343a22736c7567223b733a32363a2261646d696e2d7661726961626c6564657461696c2d696e646578223b733a343a226e616d65223b733a32313a225661726961626c652044657461696c20496e646578223b733a333a2275726c223b733a32363a2261646d696e2f7661726961626c6564657461696c2f696e646578223b733a363a22706172616d73223b4e3b7d733a32353a2261646d696e2d7661726961626c6564657461696c2d76696577223b613a343a7b733a343a22736c7567223b733a32353a2261646d696e2d7661726961626c6564657461696c2d76696577223b733a343a226e616d65223b733a32303a2256696577205661726961626c652044657461696c223b733a333a2275726c223b733a32353a2261646d696e2f7661726961626c6564657461696c2f76696577223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a32373a2261646d696e2d7661726961626c6564657461696c2d637265617465223b613a343a7b733a343a22736c7567223b733a32373a2261646d696e2d7661726961626c6564657461696c2d637265617465223b733a343a226e616d65223b733a32323a22437265617465205661726961626c652044657461696c223b733a333a2275726c223b733a32373a2261646d696e2f7661726961626c6564657461696c2f637265617465223b733a363a22706172616d73223b4e3b7d733a32373a2261646d696e2d7661726961626c6564657461696c2d757064617465223b613a343a7b733a343a22736c7567223b733a32373a2261646d696e2d7661726961626c6564657461696c2d757064617465223b733a343a226e616d65223b733a32323a22557064617465205661726961626c652044657461696c223b733a333a2275726c223b733a32373a2261646d696e2f7661726961626c6564657461696c2f757064617465223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a32373a2261646d696e2d7661726961626c6564657461696c2d64656c657465223b613a343a7b733a343a22736c7567223b733a32373a2261646d696e2d7661726961626c6564657461696c2d64656c657465223b733a343a226e616d65223b733a32323a2244656c657465205661726961626c652044657461696c223b733a333a2275726c223b733a32373a2261646d696e2f7661726961626c6564657461696c2f64656c657465223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a31373a2261646d696e2d746573742d7075626c6963223b613a343a7b733a343a22736c7567223b733a31373a2261646d696e2d746573742d7075626c6963223b733a343a226e616d65223b733a31383a224d656d626572205075626c69632054657374223b733a333a2275726c223b733a31373a2261646d696e2f746573742f7075626c6963223b733a363a22706172616d73223b4e3b7d733a32313a2261646d696e2d75736572746573742d6d656d626572223b613a343a7b733a343a22736c7567223b733a32313a2261646d696e2d75736572746573742d6d656d626572223b733a343a226e616d65223b733a32323a224d656d6265722055736572205465737420496e646578223b733a333a2275726c223b733a32313a2261646d696e2f75736572746573742f6d656d626572223b733a363a22706172616d73223b4e3b7d733a31393a2261646d696e2d75736572746573742d74657374223b613a343a7b733a343a22736c7567223b733a31393a2261646d696e2d75736572746573742d74657374223b733a343a226e616d65223b733a32313a224d656d626572205465737420557365722054657374223b733a333a2275726c223b733a31393a2261646d696e2f75736572746573742f74657374223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a32393a2261646d696e2d75736572746573742d7361766574657374616e73776572223b613a343a7b733a343a22736c7567223b733a32393a2261646d696e2d75736572746573742d7361766574657374616e73776572223b733a343a226e616d65223b733a33323a224d656d62657220536574205465737420416e7377657220557365722054657374223b733a333a2275726c223b733a32393a2261646d696e2f75736572746573742f7361766574657374616e73776572223b733a363a22706172616d73223b4e3b7d733a32373a2261646d696e2d75736572746573742d7365747370656e7474696d65223b613a343a7b733a343a22736c7567223b733a32373a2261646d696e2d75736572746573742d7365747370656e7474696d65223b733a343a226e616d65223b733a33313a224d656d62657220536574205370656e742054696d6520557365722054657374223b733a333a2275726c223b733a32373a2261646d696e2f75736572746573742f7365747370656e7474696d65223b733a363a22706172616d73223b4e3b7d733a32373a2261646d696e2d75736572746573742d6d656d626572726573756c74223b613a343a7b733a343a22736c7567223b733a32373a2261646d696e2d75736572746573742d6d656d626572726573756c74223b733a343a226e616d65223b733a32333a224d656d6265722055736572205465737420526573756c74223b733a333a2275726c223b733a32373a2261646d696e2f75736572746573742f6d656d626572726573756c74223b733a363a22706172616d73223b4e3b7d733a32333a2261646d696e2d75736572746573742d67656e6572617465223b613a343a7b733a343a22736c7567223b733a32333a2261646d696e2d75736572746573742d67656e6572617465223b733a343a226e616d65223b733a32353a224d656d6265722047656e657261746520557365722054657374223b733a333a2275726c223b733a32333a2261646d696e2f75736572746573742f67656e6572617465223b733a363a22706172616d73223b733a373a2269643a74727565223b7d733a32353a2261646d696e2d75736572746573742d766965776d656d626572223b613a343a7b733a343a22736c7567223b733a32353a2261646d696e2d75736572746573742d766965776d656d626572223b733a343a226e616d65223b733a32313a224d656d626572205669657720557365722054657374223b733a333a2275726c223b733a32353a2261646d696e2f75736572746573742f766965776d656d626572223b733a363a22706172616d73223b733a373a2269643a74727565223b7d7d35346662383664623632376433316532383331313466393466623834353361625f5f7374617465737c613a343a7b733a383a22757365726e616d65223b623a313b733a353a22656d61696c223b623a313b733a353a22726f6c6573223b623a313b733a383a226163636573736573223b623a313b7d);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE IF NOT EXISTS `statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug_statuses_unique` (`slug`),
  KEY `created_by_statuses_index` (`created_by`),
  KEY `updated_by_statuses_index` (`updated_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `slug`, `name`, `description`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'DRAFT', 'DRAFT', '', NULL, NULL, '2014-04-26 22:09:52', NULL),
(2, 'ACTIVE', 'ACTIVE', '', NULL, NULL, '2014-04-26 22:09:52', NULL),
(3, 'INACTIVE', 'INACTIVE', '', NULL, NULL, '2014-04-26 22:09:52', NULL),
(4, 'FINISH', 'FINISH', '', NULL, NULL, '2014-04-26 22:09:52', NULL),
(5, 'VOID', 'VOID', '', NULL, NULL, '2014-04-26 22:09:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `expert_id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug_tags_unique` (`slug`),
  KEY `status_id_tags_index` (`status_id`),
  KEY `parent_id_tags_index` (`parent_id`),
  KEY `expert_id_tags_index` (`expert_id`),
  KEY `created_by_tags_index` (`created_by`),
  KEY `updated_by_tags_index` (`updated_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `slug`, `name`, `status_id`, `parent_id`, `expert_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'pekerjaan', 'Pekerjaan', 2, NULL, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(2, 'arsitek', 'Arsitek', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(3, 'administratur', 'Administratur', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(4, 'apoteker', 'Apoteker', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(5, 'akuntan', 'Akuntan', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(6, 'astronaut', 'Astronaut', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(7, 'bidan', 'Bidan', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(8, 'buruh', 'Buruh', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(9, 'camat', 'Camat', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(10, 'calo', 'Calo', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(11, 'dokter', 'Dokter', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(12, 'dosen', 'Dosen', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(13, 'direktur', 'Direktur', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(14, 'desainer', 'Desainer', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(15, 'diktator', 'Diktator', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(16, 'editor', 'Editor', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(17, 'fasset', 'Fasset', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(18, 'guru', 'Guru', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(19, 'gammer', 'Gammer', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(20, 'hakim', 'Hakim', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(21, 'ilustrator', 'Ilustrator', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(22, 'ilmuwan', 'Ilmuwan', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(23, 'jaksa', 'Jaksa', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(24, 'kasir', 'Kasir', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(25, 'kondektur', 'Kondektur', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(26, 'koki', 'Koki', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(27, 'kiai', 'Kiai', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(28, 'lurah', 'Lurah', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(29, 'manajer', 'Manajer', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(30, 'masinis', 'Masinis', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(31, 'nelayan', 'Nelayan', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(32, 'novelis', 'Novelis', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(33, 'operator', 'Operator', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(34, 'pastur', 'Pastur', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(35, 'pegawai-negeri', 'Pegawai negeri', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(36, 'pelacur', 'Pelacur', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(37, 'pelukis', 'Pelukis', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(38, 'pendeta', 'Pendeta', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(39, 'penyanyi', 'Penyanyi', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(40, 'pemahat', 'Pemahat', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(41, 'pengacara', 'Pengacara', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(42, 'perancang-grafis', 'Perancang Grafis', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(43, 'politikus', 'Politikus', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(44, 'peneliti', 'Peneliti', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(45, 'polisi', 'Polisi', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(46, 'psikolog', 'Psikolog', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(47, 'psikiater', 'Psikiater', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(48, 'penipu', 'Penipu', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(49, 'peretas', 'Peretas', 2, 1, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(50, 'pengusaha', 'Pengusaha', 2, 1, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(51, 'psk', 'PSK', 2, 1, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(52, 'perminyakan', 'Perminyakan', 2, 1, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(53, 'pramugari', 'Pramugari', 2, 1, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(54, 'photographer', 'Photographer', 2, 1, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(55, 'programmer', 'Programmer', 2, 1, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(56, 'raja', 'Raja', 2, 1, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(57, 'refractionis-optisen', 'Refractionis Optisen', 2, 1, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(58, 'resepsionis', 'Resepsionis', 2, 1, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(59, 'satpam', 'Satpam', 2, 1, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(60, 'seniman', 'Seniman', 2, 1, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(61, 'supir', 'Supir', 2, 1, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(62, 'sekretaris', 'Sekretaris', 2, 1, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(63, 'selebritis', 'Selebritis', 2, 1, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(64, 'tani', 'Tani', 2, 1, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(65, 'tukang', 'Tukang', 2, 1, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(66, 'tni', 'TNI', 2, 1, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(67, 'ustad', 'Ustad', 2, 1, 1, 2, NULL, '2014-04-26 22:11:20', NULL),
(68, 'ulama', 'Ulama', 2, 1, 1, 2, NULL, '2014-04-26 22:11:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tag_variables`
--

CREATE TABLE IF NOT EXISTS `tag_variables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_id` int(11) NOT NULL,
  `variable_detail_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tag_id_tag_variables_index` (`tag_id`),
  KEY `variable_detail_id_tag_variables_index` (`variable_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE IF NOT EXISTS `tests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `duration` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `publication_id` int(11) NOT NULL,
  `show_result` tinyint(1) NOT NULL,
  `combination_variable` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `expert_id` int(11) DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug_tests_unique` (`slug`),
  KEY `status_id_tests_index` (`status_id`),
  KEY `expert_id_tests_index` (`expert_id`),
  KEY `company_id_tests_index` (`company_id`),
  KEY `type_id_tests_index` (`type_id`),
  KEY `parent_id_tests_index` (`parent_id`),
  KEY `created_by_tests_index` (`created_by`),
  KEY `updated_by_tests_index` (`updated_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `slug`, `name`, `description`, `duration`, `start_date`, `end_date`, `publication_id`, `show_result`, `combination_variable`, `status_id`, `company_id`, `expert_id`, `type_id`, `parent_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'modalitas-belajar', 'Modalitas Belajar', 'Tes Modalitas Belajar digunakan untuk menentukan gaya belajar anak pada siswa Sekolah Belajar (SD) atau Sekolah Menengah Pertama (SMP).', NULL, NULL, NULL, 1, 1, 1, 2, NULL, 1, 5, NULL, 2, NULL, '2014-04-26 22:11:20', NULL),
(2, 'otak-kanan-otak-kiri', 'Otak Kanan Otak Kiri', 'Tes Otak Kanan Otak Kiri digunakan untuk menentukan kecenderungan otak untuk berfikir atau melakukan aktivitasnya.', NULL, NULL, NULL, 1, 1, 1, 2, NULL, 1, 6, NULL, 2, NULL, '2014-04-26 22:11:21', NULL),
(3, 'kepribadian-sanguinis-koleris-melankolis-dan-plegmatis', 'Kepribadian (Sanguinis, Koleris, Melankolis dan Plegmatis)', 'Tes Kepribadian digunakan untuk menentukan kepribadian seseorang.', NULL, NULL, NULL, 1, 1, 1, 2, NULL, 1, 7, NULL, 2, NULL, '2014-04-26 22:11:23', NULL),
(4, 'modalitas-belajar-paket-1', 'Modalitas Belajar Paket 1', 'Tes Modalitas Belajar digunakan untuk menentukan gaya belajar anak pada siswa Sekolah Belajar (SD) atau Sekolah Menengah Pertama (SMP).', NULL, NULL, NULL, 2, 1, 1, 2, NULL, 1, 5, NULL, 2, NULL, '2014-04-26 22:11:24', NULL),
(5, 'modalitas-belajar-paket-2', 'Modalitas Belajar Paket 2', 'Tes Modalitas Belajar digunakan untuk menentukan gaya belajar anak pada siswa Sekolah Belajar (SD) atau Sekolah Menengah Pertama (SMP).', NULL, NULL, NULL, 2, 1, 1, 2, NULL, 1, 5, NULL, 2, NULL, '2014-04-26 22:11:24', NULL),
(6, 'modalitas-belajar-paket-3', 'Modalitas Belajar Paket 3', 'Tes Modalitas Belajar digunakan untuk menentukan gaya belajar anak pada siswa Sekolah Belajar (SD) atau Sekolah Menengah Pertama (SMP).', NULL, NULL, NULL, 2, 1, 1, 2, NULL, 1, 5, NULL, 2, NULL, '2014-04-26 22:11:25', NULL),
(7, 'mbti-nafis-mudrika', 'MBTI Nafis Mudrika', 'MBTI sangat berguna di dunia pendidikan dan pengembangan karier. MBTI bisa digunakan sebagai  panduan  untuk  memilih  jurusan  kuliah  sampai dengan  profesi  yang  cocok  dengan kepribadian.', NULL, NULL, NULL, 1, 1, 1, 2, NULL, 1, 1, NULL, 2, NULL, '2014-04-26 22:11:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test_answers`
--

CREATE TABLE IF NOT EXISTS `test_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_test_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `total_update` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_test_id_test_answers_index` (`user_test_id`),
  KEY `question_id_test_answers_index` (`question_id`),
  KEY `answer_id_test_answers_index` (`answer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `test_variables`
--

CREATE TABLE IF NOT EXISTS `test_variables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` int(11) NOT NULL,
  `user_test_id` int(11) NOT NULL,
  `variable_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_test_id_test_variables_index` (`user_test_id`),
  KEY `variable_id_test_variables_index` (`variable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `status_id` int(11) NOT NULL,
  `conclusion_id` int(11) NOT NULL,
  `template_test_id` int(11) NOT NULL,
  `expert_id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug_types_unique` (`slug`),
  KEY `status_id_types_index` (`status_id`),
  KEY `conclusion_id_types_index` (`conclusion_id`),
  KEY `template_test_id_types_index` (`template_test_id`),
  KEY `expert_id_types_index` (`expert_id`),
  KEY `created_by_types_index` (`created_by`),
  KEY `updated_by_types_index` (`updated_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `slug`, `name`, `description`, `status_id`, `conclusion_id`, `template_test_id`, `expert_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'mbti', 'MBTI (Myers-Briggs Type Indicator)', '', 2, 0, 0, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(2, 'disc', 'DISC (Dominance, Influence, Steadiness, Compliance)', '', 2, 0, 0, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(3, 'epps', 'EPPS (Edwards Personal Preference Schedule)', '', 2, 0, 0, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(4, '16pf', '16PF (16 Personality Factors)', '', 2, 0, 0, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(5, 'modalitas-belajar', 'Modalitas Belajar', '', 2, 0, 0, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(6, 'otak-kanan-otak-kiri', 'DISC (Dominance, Influence, Steadiness, Compliance)', '', 2, 0, 0, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(7, 'kepribadian', 'Kepribadian', '', 2, 0, 0, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(8, 'papi-kostick', 'PAPI Kostick (Personality and Preference Inventory)', '', 2, 0, 0, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(9, 'rmib', 'RMIB (Rothwell Miller Interest Blank)', '', 2, 0, 0, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(10, 'ist', 'IST (Initial Strength Test)', '', 2, 0, 0, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(11, 'mmi', 'MMI (Multiple Mini Interview)', '', 2, 0, 0, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(12, 'quiz', 'Quiz', '', 2, 0, 0, 1, 2, NULL, '2014-04-26 22:11:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status_id` int(11) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_login_ip` varchar(255) DEFAULT NULL,
  `login_count` int(11) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_users_unique` (`username`),
  UNIQUE KEY `email_users_unique` (`email`),
  KEY `status_id_users_index` (`status_id`),
  KEY `token_users_index` (`token`),
  KEY `parent_id_users_index` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status_id`, `last_login`, `last_login_ip`, `login_count`, `token`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@sipsiko.com', '$2a$13$IOG7l.wMerJKeqOmmOOVWOoo7uJsC0du1A6ap0MZSuLEoZT9zJ6Oa', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:09:55', NULL),
(2, 'mahendri', 'mahendri@sipsiko.com', '$2a$13$bSc9pndmgsX2B5UgiIMtWOLGIUXj2CLnaSYGjy2KwDhiaSanjdLiC', 2, '2014-04-26 20:22:06', '127.0.0.1', 2, NULL, NULL, '2014-04-26 22:09:58', '2014-04-27 03:22:06'),
(3, 'member', 'member@sipsiko.com', '$2a$13$aJVM9CV13hGB2/DeDtKTfepcmvyAGiGJWlxRAmeRFPbCQGxwMcG.y', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:10:00', NULL),
(4, 'risky', 'risky@sipsiko.com', '$2a$13$BlvGjxcS1OPFcha7UhCfKuAR2YFSw4VFVRupSfp2rdP3MNKf7rT7S', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:10:03', NULL),
(5, 'hendra', 'hendra@sipsiko.com', '$2a$13$frpQKDOqFJyxUNqsQqOv7.mRg2z0W6cioRQcQiG3tC9ywDZrffeU.', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:10:06', NULL),
(6, 'winata', 'winata@sipsiko.com', '$2a$13$7sIRxcEbBkuFCNmCuAu9Xubv4xaFEGKekFYBIztT0.oPtvNycmNrC', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:10:08', NULL),
(7, 'ade', 'ade@sipsiko.com', '$2a$13$.3a1PsfFqkb9jzRW.zbLred.g31t3yNkEmrb5LTOWZkK/0QAQne2G', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:10:11', NULL),
(8, 'naufal', 'naufal@sipsiko.com', '$2a$13$y8IsnQ6qNyLyuWgk6j3r.u3aBOhSjCJo3/WaBWKyYlGvkOWb/eIY2', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:10:14', NULL),
(9, 'dio', 'dio@sipsiko.com', '$2a$13$Y1cBHIXVMoE.Pw2pCoqmoOD8QpjMJ2c9YhTk1BbYR6H53rMFoJHta', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:10:16', NULL),
(10, 'rio', 'rio@sipsiko.com', '$2a$13$ijzGtzQbbDGurOL5BW4BJOxnRtZ4XnMNyMhg1Y/Oq50U7Xm.PxW.C', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:10:19', NULL),
(11, 'rudi', 'rudi@sipsiko.com', '$2a$13$PpEYOznD4ftIUWD46uE8bOcBbiRLJcIVOUoiwWAjhtdvRqvNjEG8e', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:10:22', NULL),
(12, 'atang', 'atang@sipsiko.com', '$2a$13$AQLyaJklicfR53oK74QZR.W0UiXVeqV/J6Sm73U3SCQQJ2jX7Ijqe', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:10:25', NULL),
(13, 'dian', 'dian@sipsiko.com', '$2a$13$lTZ0QcCHGCMmmYmOzRwCouwFenGpRmytE869qGKPQFNbWwu.JlWeC', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:10:27', NULL),
(14, 'adrian', 'adrian@sipsiko.com', '$2a$13$xF1lu0nsu7BaDZM8QmuiceJQno9UCzdFQ5hA.eU4c8QCEayZC4tsO', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:10:30', NULL),
(15, 'adi', 'adi@sipsiko.com', '$2a$13$lKlOKFkUd552kWBctfxdQuU2qKA7n8B.UU8/kF.LiSnm2e.WImqz6', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:10:33', NULL),
(16, 'alfian', 'alfian@sipsiko.com', '$2a$13$fnuXwFrsAO3jgwX7ZXsJZOZet3jiXXfeEasyzhru3XBi0ngZxTJ1a', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:10:35', NULL),
(17, 'nicky', 'nicky@sipsiko.com', '$2a$13$fynfpQbRHgjwdmsGQt08feLU6NPpSvTAwfJ//qLrMjmX3.W6YWYhy', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:10:38', NULL),
(18, 'ricky', 'ricky@sipsiko.com', '$2a$13$cRbrXOpLlvtAbHopR0duS.DyhK.py9ir.t5bXiK3hKaas4pcN4v5.', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:10:41', NULL),
(19, 'reza', 'reza@sipsiko.com', '$2a$13$axoiiyMErERUqGeu19DR8uHRpOuJ9eOOiNo8XTTyje4V17XAZCYty', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:10:44', NULL),
(20, 'aldi', 'aldi@sipsiko.com', '$2a$13$FDcvYnz/I0yBeUhCC7tWVOIvOUfE.p23OrrjudC7X2LDZz/GlQY1C', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:10:46', NULL),
(21, 'eka', 'eka@sipsiko.com', '$2a$13$PNcYGnUzT48j2LijzMs8Ku2Fx/hgZta2pfTDzLJG7hhZ2cTgF9VgC', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:10:49', NULL),
(22, 'hermawan', 'hermawan@sipsiko.com', '$2a$13$C5NJwKxTK9qWhDjLyVQreOYNRmd0WF8RWu59/3WeKt3jETc/6ULxK', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:10:52', NULL),
(23, 'nana', 'nana@sipsiko.com', '$2a$13$EWXERtrtitl.rWgl2kercOfc4LEUIi4rWd495BzhzF0AP9bCTTgyq', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:10:54', NULL),
(24, 'doris', 'doris@sipsiko.com', '$2a$13$EERL6Dp59q8LRTmpOG.VueLnJwKwR7DIDOkhQ8znOhXzmQYn9Ffwi', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:10:57', NULL),
(25, 'bagus', 'bagus@sipsiko.com', '$2a$13$NnaX4CyGdenSJjLYwtramO/fJXgjfgBN.qaeJmQ.baecVo.NX39G2', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:11:00', NULL),
(26, 'agus', 'agus@sipsiko.com', '$2a$13$DMQret354mVtGazO5aad9.KZRNnhyMBtJUYxoJsun/gvenQU2W5Ze', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:11:03', NULL),
(27, 'ifan', 'ifan@sipsiko.com', '$2a$13$by91.lVD5n1oc5B8w2gc1uOkexzpOyO7MfQZxmBVTkkU6PXN75nm.', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:11:05', NULL),
(28, 'adam', 'adam@sipsiko.com', '$2a$13$SwmmL9opn3FzBG8iKOoJ5OA./MQCv5JTsCGA0GwBFW3pcwZ/Pjdoa', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:11:08', NULL),
(29, 'adit', 'adit@sipsiko.com', '$2a$13$iAIjwCXQZI05bIO4.XeiOuMMGe/0fAL7vW9.vF9wxLE5cejflSGzC', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:11:11', NULL),
(30, 'agung', 'agung@sipsiko.com', '$2a$13$Z5wf8AQ3wKGntSqCGY1z1Ow6I/ROxeyj2dHUAqFpGfuYv2NkOfSO.', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:11:13', NULL),
(31, 'akbar', 'akbar@sipsiko.com', '$2a$13$T1jZnu1FzPUcsthB.bgY4.uu5etxQ7Nf8LrVf3XY.6zwpPk6/B1hi', 2, NULL, NULL, 0, NULL, NULL, '2014-04-26 22:11:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_tests`
--

CREATE TABLE IF NOT EXISTS `user_tests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `spent_time` int(11) DEFAULT NULL,
  `note` text,
  `show_result` tinyint(1) NOT NULL,
  `time_used` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `expert_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `status_id_user_tests_index` (`status_id`),
  KEY `member_id_user_tests_index` (`member_id`),
  KEY `test_id_user_tests_index` (`test_id`),
  KEY `expert_id_user_tests_index` (`expert_id`),
  KEY `company_id_user_tests_index` (`company_id`),
  KEY `created_by_user_tests_index` (`created_by`),
  KEY `updated_by_user_tests_index` (`updated_by`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `variables`
--

CREATE TABLE IF NOT EXISTS `variables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `status_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `expert_id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug_variables_unique` (`slug`),
  KEY `status_id_variables_index` (`status_id`),
  KEY `type_id_variables_index` (`type_id`),
  KEY `expert_id_variables_index` (`expert_id`),
  KEY `created_by_variables_index` (`created_by`),
  KEY `updated_by_variables_index` (`updated_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `variables`
--

INSERT INTO `variables` (`id`, `slug`, `name`, `description`, `status_id`, `type_id`, `expert_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'mbti-extrovert', 'Extrovert', 'Ekstrovert artinya tipe pribadi yang suka bergaul, menyenangi interaksi sosial dengan orang lain, dan berfokus pada the world outside the self.', 2, 1, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(2, 'mbti-introvert', 'Introvert', 'Introvert adalah mereka yang senang menyendiri, reflektif, dan tidak begitu suka bergaul dengan banyak orang. Orang introvert lebih suka mengerjakan aktivitas yang tidak banyak menutut interaksi semisal membaca, menulis, dan berpikir secara imajinatif.', 2, 1, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(3, 'mbti-sensing', 'Sensing', 'Sensing memproses data dengan cara bersandar pada fakta yang konkrit, factual facts, dan melihat data apa adanya.', 2, 1, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(4, 'mbti-intuitive', 'Intuitive', 'Intuitive memproses data dengan melihat pola dan impresi, serta melihat berbagai kemungkinan yang bisa terjadi.', 2, 1, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(5, 'mbti-thinking', 'Thinking', 'Thinking adalah mereka yang selalu menggunakan logika dan kekuatan analisa untuk mengambil keputusan.', 2, 1, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(6, 'mbti-feeling', 'Feeling', 'Feeling adalah mereka yang melibatkan perasaan, empati serta nilai-nilai yang diyakini ketika hendak mengambil keputusan.', 2, 1, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(7, 'mbti-judging', 'Judging', 'Judging disini diartikan sebagai tipe orang yang selalu bertumpu pada rencana yang sistematis, serta senantiasa berpikir dan bertindak secara sekuensial (tidak melompat-lompat).', 2, 1, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(8, 'mbti-perceiving', 'Perceiving', 'Perceiving adalah mereka yang bersikap fleksibel, adaptif, dan bertindak secara random untuk melihat beragam peluang yang muncul.', 2, 1, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(9, 'disc-dominance', 'Dominance', 'Dorongan untuk mengontrol, meraih tujuan/target. Intensi dasarnya to overcome.', 2, 2, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(10, 'disc-influence', 'Influence', 'Dorongan untuk mempengaruhi, berekspresi, dan didengarkan. Intensi dasar: to persuade.', 2, 2, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(11, 'disc-steadiness', 'Steadiness', 'Dorongan untuk menjadi stabil dan konsisten. Intensi dasarnya to support.', 2, 2, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(12, 'disc-compliance', 'Compliance', 'Dorongan untuk menjadi benar, pasti dan aman. Intensi dasarnya to avoid trouble.', 2, 2, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(13, 'disc-star', 'Star', 'Variable kosong (Pembanding).', 2, 2, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(14, 'epps-achievement', 'Achievement', '', 2, 3, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(15, 'epps-deference', 'Deference', '', 2, 3, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(16, 'epps-order', 'Order', '', 2, 3, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(17, 'epps-exhibition', 'Exhibition', '', 2, 3, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(18, 'epps-autonomy', 'Autonomy', '', 2, 3, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(19, 'epps-affiliation', 'Affiliation', '', 2, 3, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(20, 'epps-intraception', 'Intraception', '', 2, 3, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(21, 'epps-succorance', 'Succorance', '', 2, 3, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(22, 'epps-dominance', 'Dominance', '', 2, 3, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(23, 'epps-abasement', 'Abasement', '', 2, 3, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(24, 'epps-nurturance', 'Nurturance', '', 2, 3, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(25, 'epps-change', 'Change', '', 2, 3, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(26, 'epps-endurance', 'Endurance', '', 2, 3, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(27, 'epps-heterosexuality', 'Heterosexuality', '', 2, 3, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(28, 'epps-aggression', 'Aggression', '', 2, 3, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(29, '16pf-warmth', 'Warmth', '', 2, 4, 1, 2, NULL, '2014-04-26 22:11:18', NULL),
(30, '16pf-reasoning', 'Reasoning', '', 2, 4, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(31, '16pf-emotional-stability', 'Emotional Stability', '', 2, 4, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(32, '16pf-dominance', 'Dominance', '', 2, 4, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(33, '16pf-liveliness', 'Liveliness', '', 2, 4, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(34, '16pf-rule-consciousness', 'Rule Consciousness', '', 2, 4, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(35, '16pf-social-boldness', 'Social Boldness', '', 2, 4, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(36, '16pf-sensitivity', 'Sensitivity', '', 2, 4, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(37, '16pf-vigilance', 'Vigilance', '', 2, 4, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(38, '16pf-abstractedness', 'Abstractedness', '', 2, 4, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(39, '16pf-privateness', 'Privateness', '', 2, 4, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(40, '16pf-apprehension', 'Apprehension', '', 2, 4, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(41, '16pf-openness-to-change', 'Openness to Change ', '', 2, 4, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(42, '16pf-self-reliance', 'Self Reliance', '', 2, 4, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(43, '16pf-perfectionism', 'Perfectionism', '', 2, 4, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(44, '16pf-tension', 'Tension', '', 2, 4, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(45, 'modalitas-belajar-visual', 'Visual', '', 2, 5, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(46, 'modalitas-belajar-auditory', 'Auditory', '', 2, 5, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(47, 'modalitas-belajar-kinesthetic', 'Kinesthetic', '', 2, 5, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(48, 'otak-kanan-otak-kiri-otak-kanan', 'Otak Kanan', '', 2, 6, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(49, 'otak-kanan-otak-kiri-otak-kiri', 'Otak Kiri', '', 2, 6, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(50, 'kepribadian-sanguinis', 'Sanguinis', '', 2, 7, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(51, 'kepribadian-koleris', 'Koleris', '', 2, 7, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(52, 'kepribadian-melankolis', 'Melankolis', '', 2, 7, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(53, 'kepribadian-plegmatis', 'Plegmatis', '', 2, 7, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(54, 'quiz-true', 'True', 'Jawaban Benar.', 2, 12, 1, 2, NULL, '2014-04-26 22:11:19', NULL),
(55, 'quiz-false', 'False', 'Jawaban Salah.', 2, 12, 1, 2, NULL, '2014-04-26 22:11:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `variable_details`
--

CREATE TABLE IF NOT EXISTS `variable_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `shortness` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status_id` int(11) NOT NULL,
  `expert_id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `slug_variable_details_index` (`slug`),
  KEY `status_id_variable_details_index` (`status_id`),
  KEY `expert_id_variable_details_index` (`expert_id`),
  KEY `created_by_variable_details_index` (`created_by`),
  KEY `updated_by_variable_details_index` (`updated_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `variable_details`
--

INSERT INTO `variable_details` (`id`, `slug`, `shortness`, `name`, `description`, `status_id`, `expert_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '45', 'Visual', 'Visual', '<p>Hal ini berarti kamu cenderung belajar dengan cara melihat sesuatu. Kamu menyukai melihat gambar atau diagram,menonton pertunjukan, demonstrasi suatu kegiatan, atau menyaksikan video.</p><p>Untuk mempermudah dan mempercepat kamu untuk memahami sesuatu (pelajaran atau hal yg lain) cobalah:</p><ul><li>Mengubah pelajaran yang kamu catat ke dalam bentuk poster-poster yang mudah dilihat, dengan gambar-gambar yang menarik, grafik,dan warnai seindah mungkin.</li><li>Buatlah peta konsep pelajaran dengan: mulai dari tema besar di tengah halaman, menggunakan kata-kata penting, menggunakan simbol, warna, kata, gambar yang mencolok, dan lakukan ini dengan gayamu sendiri.</li><li>Dalam mencatat pelajaran, gunakan tanda-tanda, gambar dan warna untuk menandai hal-hal penting agar dapat dengan mudah dilihat lagi jika kita mempelajarinya di lain waktu.</li><li>Untuk membantu mengingat apa yang baru kita baca dan dengar, duduklah dengan santai, dan bayangkan dalam pikiran apa yang baru dibaca/didengar, agar kita lebih paham lagi.</li></ul>', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(2, '46', 'Auditory', 'Auditory', '<p>Hal ini berarti kamu cenderung belajar dengan cara mendengar sesuatu. Kamu menyukai mendengar pidato, ceramah guru menerangkan, mendengarkan radio atau kaset, berdebat atau berdiskusi.Untuk mempermudah kamu memahami sesuatu (pelajaran atau hal yg lain) cobalah:</p><ul><li>Membaca pelajaran dengan cara baca yang dramatis, seperti pujangga membaca puisi misalnya, atau seperti scenario, bahkan cobalah menyanyikannya dengan irama iklan atau rap.Merangkum pelajaran untuk diucapkan dengan lantang, atau bahkan merekamnya dalam kaset, diselingi plesetan atau hal lain,dan memutarnya dengan walkman sepanjang perjalanan kita ke sekolah.</li><li>Saat membacakan dengan lantang, perhatikan intonasi, penekanan khusus, coba berbisik, dan coba juga sambil memejamkan mata untuk belajar membayangkan apa yang sedang dibacakan, sehingga secara tidak langsung kita telah mengaktifkan pula daya visual kita dalam belajar.</li></ul>', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(3, '47', 'Kinesthetic', 'Kinesthetic', '<p>Hal ini berarti kamu cenderung belajar melalui aktivitas fisik dan melibatkan diri langsung. Kamu suka menyentuh, merasakan, membongkar sesuatu, melakukan olah tubuh.</p><p>Untuk mempercepat dan mempermudahmu memahami sesuatu (pelajaran atau lainnya, cobalah:</p><ul><li>Belajar sambil berjalan-jalan. Setiap kali membaca atau mendengarkan seseorang berbicara, bangkitlah untuk sedikit bergerak setiap 20-30 menit sekali.</li><li>Coba belajar dalam kelompok untuk membentuk suasana bermain peran (drama) dari pelajaran yang dibahas. </li><li>Tulislah kembali point-point penting dari catatan pelajaran ke dalam kartu-kartu yang disusun secara logis. </li><li>Buatlah semacam percobaan, atau model dari apa yang sedang kamu pelajari. Libatkan tubuh kamu dalam belajar dengan mencoba meniru apa yang dipelajari, atau bahkan meniru gaya-gaya lucu gurumu ketika mengajar agar kamu dapat mengingatnya dengan lebih baik!Setiap orang memiliki kekuatan dan kelemahannya masing-masing. </li><li>Dengan mengetahui kekuatanmu, kamu dapat meningkatkan prestasi dengan mengarahkan diri untuk mencari cara-cara belajar yang cocok dengan kecenderungan-kecenderungan pada dirimu. Jika kamu mau belajar mengaktifkan aspek-aspek yang kurang menonjol lainnya (tentu dengan menyisihkan waktu)prestasi kamu bisa berkembang lebih baik lagi! </li></ul>', 2, 1, 2, NULL, '2014-04-26 22:11:21', NULL),
(4, '48', 'Otak Kanan', 'Otak Kanan', '<p>Karakteristik Otak Kanan : Global, Acak, Kongkrit, Intuitif, Non verbal, Berdasarkan dunia fantasi. Otak kanan memproses informasi non verbal dan hal-hal kongkrit seperti gambar dan warna. Kamu lebih mudah menangkap hal-hal yang disampaikan lewat visual (berupa gambar atau benda kongkrit) serta sensitif terhadap warna-warna. Dengan dominasi otak kanan, kamu perlu menangkap dahulu gambaran konsep umum suatu pelajaran untuk dapat memahami bagian demi bagiannya.</p><p>Dalam mengerjakan suatu permasalahan, seringkali kamu mendapatkan jawabannya tanpa dapat menjelaskan dengan pasti bagaimana ia mendapatkannya. Untuk memudahkan belajar kamu dapat menghayalkan diri menjadi hal-hal yang sedang dipelajari.</p><p>Kamu biasanya kurang dapat mengikuti kegiatan di kelas yang monoton, ia akan gelisah di tempat duduknya. Karena proses berpikirnya didominasi fantasi, tak seperti teman-teman dengan dominasi otak kiri yang berpikir berdasarkan realitas, kamu seringkali dinilai sulit mengikuti aturan karena merasa tidak ada yang salah dengan apa yang kamu kerjakan. Umumnya kamu cukup kreatif dan cocok untuk berkegiatan dalam bidang seni dan kegiatan-kegiatan artistik lainnya.</p><p>Coba lakukan beberapa saran berikut ini untuk mengaktifkan otak kiri:<ol><li>Mencoba untuk menguasai salah satu program komputer lebih baik lagi dari hanya sekedar mengetik.</li><li>Setelah menonton film favorit kamu, cobalah menulis satu tulisan tentang pendapat kamu atas film itu secara kritis.</li><li>Susunlah buku-buku koleksi kamu berdasarkan urutan jenisnya.</li><li>Usahakanlah tepat waktu sepanjang hari.</li><li>Bacalah setiap petunjuk penggunaan sebelum memakai suatu barang, atau merangkainya.</li><li>Jika menghadapi masalah, perhatikan aspek-aspek yang ada dan proses satu demi satu.</li><li>Catatlah pengeluaran pribadi kamu setiap hari.</li><li>Beranilah untuk mulai melakukan itu semua!</li><li>Temukan berbagai cara lainnya untuk membentuk sedikit keteraturan pada hidupmu.</li></ol></p><p> Belahan manapun yang kamu gunakan secara dominan (atau mungkin merata), itu tidak menjadikan yang kanan lebih unggul dari yang dominan kiri atau sebaliknya. Masing-masing punya keunggulan dan kelemahannya tersendiri. Yang perlu kamu lakukan adalah mencoba meperbaiki kekuranganmu, dan mengasah keunggulanmu agar kamu bisa lebih maju.</p>', 2, 1, 2, NULL, '2014-04-26 22:11:23', NULL),
(5, '49', 'Otak Kiri', 'Otak Kiri', '<p>Karakteristik Otak Kiri: Teratur, Bertahap, Simbolis, Logis, Verbal, Berdasarkan dunia nyata.</p><p>Dengan dominasi otak kiri, mudah bagi kamu dalam memproses informasi verbal (seperti angka-angka, tulisan), hal-hal abstrak dengan cara yang bertahap, teratur dan memproses bagian demi bagian untuk membentuk pengertian/ konsep secara keseluruhan. Kamu biasanya dapat belajar dengan tenang, tidak mengalami kesulitan dalam pelajaran-pelajaran yang dianggap penting (calistung) dan seringkali berprestasi.</p><p>Kamu mudah mengikuti peraturan, dan umumnya tepat waktu saat mengumpulkan tugas. Kamu biasanya taat pada aturan, mencapai kesimpulan secara logis dan cocok untuk kegiatan-kegiatan yang bersifat ilmiah dan matematis.</p><p>Coba lakukan hal berikut ini untuk mengaktifkan otak kanan<ol><li>Belajar menikmati waktu luang, mencoba bersantai.</li><li>Bermainlah dengan tanah liat, coba rasakan asyiknya.</li><li>Sesekali naiklah angkutan kota tanpa tujuan khusus, perhatikan sekeliling.</li><li>Sisihkan waktu untuk "merasakan" diri kamu, mengendurkan ketegangan</li><li>Bacalah cerpen atau kisah-kisah lucu.</li><li>Buatlah logo pribadi yang menggambarkan diri kamu.</li><li>Perhatikanlah tanaman dan binatang yang ada di sekitar rumah kamu.</li><li>Beranilah untuk mulai melakukan itu semua!</li><li>Temukan berbagai cara lainnya untuk keluar dari rutinitas kamu sehari-hari.</li></ol></p><p> Belahan manapun yang kamu gunakan secara dominan (atau mungkin merata), itu tidak menjadikan yang kanan lebih unggul dari yang dominan kiri atau sebaliknya. Masing-masing punya keunggulan dan kelemahannya tersendiri. Yang perlu kamu lakukan adalah mencoba meperbaiki kekuranganmu, dan mengasah keunggulanmu agar kamu bisa lebih maju.</p>', 2, 1, 2, NULL, '2014-04-26 22:11:23', NULL),
(6, '50', 'Sanguinis', 'Sanguinis', '<p>Kekuatan :<ul><li>Suka bicara.</li><li>Secara fisik memegang pendengar, emosional dan demonstratif.</li><li>Antusias dan ekspresif.</li><li>Ceria dan penuh rasa ingin tahu.</li><li>Hidup di masa sekarang.</li><li>Mudah berubah (banyak kegiatan / keinginan).</li><li>Berhati tulus dan kekanak-kanakan.</li><li>Senang kumpul dan berkumpul (untuk bertemu dan bicara).</li><li>Umumnya hebat di permukaan.</li><li>Mudah berteman dan menyukai orang lain.</li><li>Senang dengan pujian dan ingin menjadi perhatian.</li><li>Menyenangkan dan dicemburui orang lain.</li><li>Mudah memaafkan (dan tidak menyimpan dendam).</li><li>Mengambil inisiatif/ menghindar dari hal-hal atau keadaan yang membosankan.</li><li>Menyukai hal-hal yang spontan.</li></ul></p><p>Kelemahan :<ul><li>Suara dan tertawa yang keras (bahkan terlalu keras).</li><li>Membesar-besarkan suatu hal / kejadian.</li><li>Susah untuk diam.</li><li>Mudah ikut-ikutan atau dikendalikan oleh keadaan atau orang lain (suka ikutan Gank).</li><li>Sering minta persetujuan, termasuk hal-hal yang sepele.</li><li>RKP (Rentang Konsentrasi Pendek) alias pelupa.</li><li>Dalam bekerja lebih suka bicara dan melupakan kewajiban (awalnya saja antusias).</li><li>Mudah berubah-ubah.</li><li>Susah datang tepat waktu jam kantor.</li><li>Prioritas kegiatan kacau.</li><li>Mendominasi percakapan, suka menyela dan susah mendengarkan dengan tuntas.</li><li>Sering mengambil permasalahan orang lain, menjadi seolah-olah masalahnya.</li><li>Egoistis alias suka mementingkan diri sendiri.</li><li>Sering berdalih dan mengulangi cerita-cerita yg sama.</li><li>Konsentrasi ke “How to spend money” daripada “How to earn/save money”</li></ul</p>', 2, 1, 2, NULL, '2014-04-26 22:11:24', NULL),
(7, '51', 'Koleris', 'Koleris', '<p>Kekuatan :<ul><li>Senang memimpin, membuat keputusan, dinamis dan aktif.</li><li>Sangat memerlukan perubahan dan harus mengoreksi kesalahan.</li><li>Berkemauan keras dan pasti untuk mencapai sasaran/ target.</li><li>Bebas dan mandiri.</li><li>Berani menghadapi tantangan dan masalah.</li><li>“Hari ini harus lebih baik dari kemarin, hari esok harus lebih baik dari hari ini”.</li><li>Mencari pemecahan praktis dan bergerak cepat.</li><li>Mendelegasikan pekerjaan dan orientasi berfokus pada produktivitas.</li><li>Membuat dan menentukan tujuan.</li><li>Terdorong oleh tantangan dan tantangan.</li><li>Tidak begitu perlu teman.</li><li>Mau memimpin dan mengorganisasi.</li><li>Biasanya benar dan punya visi ke depan.</li><li>Unggul dalam keadaan darurat.</li></ul</p><p>Kelemahan :<ul><li>Tidak sabar dan cepat marah (kasar dan tidak taktis).</li><li>Senang memerintah.</li><li>Terlalu bergairah dan tidak/susah untuk santai.</li><li>Menyukai kontroversi dan pertengkaran.</li><li>Terlalu kaku dan kuat/ keras.</li><li>Tidak menyukai air mata dan emosi tidak simpatik.</li><li>Tidak suka yang sepele dan bertele-tele / terlalu rinci.</li><li>Sering membuat keputusan tergesa-gesa.</li><li>Memanipulasi dan menuntut orang lain, cenderung memperalat orang lain.</li><li>Menghalalkan segala cara demi tercapainya tujuan.</li><li>Workaholics (cinta mati dengan pekerjaan).</li><li>Amat sulit mengaku salah dan meminta maaf.</li><li>Mungkin selalu benar tetapi tidak populer.</li></ul</p>', 2, 1, 2, NULL, '2014-04-26 22:11:24', NULL),
(8, '52', 'Melankolis', 'Melankolis', '<p>Kekuatan :<ul><li>Analitis, mendalam, dan penuh pikiran.</li><li>Serius dan bertujuan, serta berorientasi jadwal.</li><li>Artistik, musikal dan kreatif (filsafat & puitis).</li><li>Sensitif.</li><li>Mau mengorbankan diri dan idealis.</li><li>Standar tinggi dan perfeksionis.</li><li>Senang perincian/memerinci, tekun, serba tertib dan teratur (rapi).</li><li>Hemat.</li><li>Melihat masalah dan mencari solusi pemecahan kreatif (sering terlalu kreatif).</li><li>Kalau sudah mulai, dituntaskan.</li><li>Berteman dengan hati-hati.</li><li>Puas di belakang layar, menghindari perhatian.</li><li>Mau mendengar keluhan, setia dan mengabdi.</li><li>Sangat memperhatikan orang lain.</li></ul></p><p>Kelemahan :<ul><li>Cenderung melihat masalah dari sisi negatif (murung dan tertekan).</li><li>Mengingat yang negatif & pendendam.</li><li>Mudah merasa bersalah dan memiliki citra diri rendah.</li><li>Lebih menekankan pada cara daripada tercapainya tujuan.</li><li>Tertekan pada situasi yg tidak sempurna dan berubah-ubah.</li><li>Melewatkan banyak waktu untuk menganalisa dan merencanakan.</li><li>Standar yang terlalu tinggi sehingga sulit disenangkan.</li><li>Hidup berdasarkan definisi.</li><li>Sulit bersosialisasi (cenderung pilih-pilih).</li><li>Tukang kritik, tetapi sensitif terhadap kritik/ yg menentang dirinya.</li><li>Sulit mengungkapkan perasaan (cenderung menahan kasih sayang).</li><li>Rasa curiga yg besar (skeptis terhadap pujian).</li><li>Memerlukan persetujuan.</li></ul></p>', 2, 1, 2, NULL, '2014-04-26 22:11:24', NULL),
(9, '53', 'Plegmatis', 'Plegmatis', '<p>Kekuatan :<ul><li>Mudah bergaul, santai, tenang dan teguh.</li><li>Sabar, seimbang, dan pendengar yang baik.</li><li>Tidak banyak bicara, tetapi cenderung bijaksana.</li><li>Simpatik dan baik hati (sering menyembunyikan emosi).</li><li>Kuat di bidang administrasi, dan cenderung ingin segalanya terorganisasi.</li><li>Penengah masalah yg baik.</li><li>Cenderung berusaha menemukan cara termudah.</li><li>Baik di bawah tekanan.</li><li>Menyenangkan dan tidak suka menyinggung perasaan.</li><li>Rasa humor yg tajam.</li><li>Senang melihat dan mengawasi.</li><li>Berbelaskasihan dan peduli.</li><li>Mudah diajak rukun dan damai.</li></ul></p><p>Kelemahan :<ul><li>Kurang antusias, terutama terhadap perubahan/ kegiatan baru.</li><li>Takut dan khawatir.</li><li>Menghindari konflik dan tanggung jawab.</li><li>Keras kepala, sulit kompromi (karena merasa benar).</li><li>Terlalu pemalu dan pendiam.</li><li>Humor kering dan mengejek (Sarkatis).</li><li>Kurang berorientasi pada tujuan.</li><li>Sulit bergerak dan kurang memotivasi diri.</li><li>Lebih suka sebagai penonton daripada terlibat.</li><li>Tidak senang didesak-desak.</li><li>Menunda-nunda / menggantungkan masalah.</li></ul></p>', 2, 1, 2, NULL, '2014-04-26 22:11:24', NULL),
(10, '2-3-5-7', 'ISTJ', 'Bertanggung Jawab', '<ul><li>Serius, tenang, stabil & damai.</li><li>Senang pada fakta, logis, obyektif, praktis & realistis.</li><li>Task oriented, tekun, teratur, menepati janji, dapat diandalkan & bertanggung jawab.</li><li>Pendengar yang baik, setia, hanya mau berbagi dengan orang dekat.</li><li>Memegang aturan, standar & prosedur dengan teguh.</li></ul><h5>Saran Pengembangan</h5><ul><li>Belajarlah memahami perasaan & kebutuhan orang lain.</li><li>Kurangi keinginan untuk mengontrol orang lain atau memerintah mereka untuk menegakkan aturan.</li><li>Lihatlah lebih banyak sisi positif pada orang lain atau hal lainnya.</li><li>Terbukalah terhadap perubahan.</li></ul><h5>Saran Profesi</h5><p>Bidang Manajemen, Polisi, Intelijen, Hakim, Pengacara, Dokter, Akuntan (Staf Keuangan), Programmer atau yang berhubungan dengan IT, System Analys, Pemimpin Militer</p><h5>Pasangan/Partner Alami</h5><p>ESFP atau ESTP</p>', 2, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(11, '2-3-6-7', 'ISFJ', 'Setia', '<ul><li>Penuh pertimbangan, hati-hati, teliti dan akurat.</li><li>Serius, tenang, stabil namun sensitif.</li><li>Ramah, perhatian pada perasaan & kebutuhan orang lain, setia, kooperatif, pendengar yang baik.</li><li>Punya kemampuan mengorganisasi, detail, teliti, sangat bertanggungjawab & bisa diandalkan.</li></ul><h5>Saran Pengembangan</h5><ul><li>Lihat lebih dalam, lebih antusias, & lebih semangat.</li><li>Belajarlah mengatakan ”tidak”. Jangan menyenangkan semua orang atau Anda dianggap plin plan.</li><li>Jangan terjebak zona nyaman dan rutinitas. Cobalah hal baru. Ada banyak hal menyenangkan yang mungkin belum pernah Anda coba.</li></ul><h5>Saran Profesi</h5><p>Architect, Interior Designer, Perawat, Administratif, Designer, Child Care, Konselor, Back Office Manager, Penjaga Toko / Perpustakaan, Dunia Perhotelan</p><h5>Pasangan/Partner Alami</h5><p>ESFP atau ESTP</p>', 2, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(12, '2-3-5-8', 'ISTP', 'Pragmatis', '<ul><li>Tenang, pendiam, cenderung kaku, dingin, hati-hati, penuh pertimbangan.</li><li>Logis, rasional, kritis, obyektif, mampu mengesampingkan perasaan.</li><li>Mampu menghadapi perubahan mendadak dengan cepat dan tenang.</li><li>Percaya diri, tegas dan mampu menghadapi perbedaan maupun kritik.</li><li>Mampu menganalisa, mengorganisir, & mendelegasikan.</li><li>Problem solver yang baik terutama untuk masalah teknis & keadaan mendadak.</li></ul><h5>Saran Pengembangan</h5><ul><li>Observasilah kehidupan sosial, apa yang membuat orang marah, cinta, senang, termotivasi & terapkan pada hubungan Anda.</li><li>Belajarlah untuk mengenali perasaan Anda dan mengekspresikannya.</li><li>Jadilah orang yang lebih terbuka, keluar dari zona nyaman, eksplorasi ide baru, dan berdiskusi dengan orang lain.</li><li>Jangan mencari-cari kesalahan orang hanya untuk menyelesaikan masalahnya.</li><li>Jangan menyimpan informasi yang harusnya dibagi dan belajarlah mempercayakan tanggungjawab pada orang lain.</li></ul><h5>Saran Profesi</h5><p>Polisi, Ahli Forensik, Programmer, Ahli Komputer, System Analyst, Teknisi, Insinyur, Mekanik, Pilot, Atlit, Entrepreneur</p><h5>Pasangan/Partner Alami</h5><p>ESTJ atau ENTJ</p>', 2, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(13, '2-3-6-8', 'ISFP', 'Artistik', '<ul><li>Berpikiran simpel & praktis, fleksibel, sensitif, ramah, tidak menonjolkan diri, rendah hati pada kemampuannya.</li><li>Menghindari konflik, tidak memaksakan pendapat atau nilai-nilainya pada orang lain.</li><li>Biasanya tidak mau memimpin tetapi menjadi pengikut dan pelaksana yang setia.</li><li>Seringkali santai menyelesaikan sesuatu, karena sangat menikmati apa yang terjadi saat ini.</li><li>Menunjukkan perhatian lebih banyak melalui tindakan dibandingkan kata-kata.</li></ul><h5>Saran Pengembangan</h5><ul><li>Jangan takut pada penolakan dan konflik. Anda tidak perlu menyenangkan semua orang.</li><li>Cobalah untuk mulai memikirkan dampak jangka panjang dari keputusan-keputusan kecil di hari ini.</li><li>Asah dan kembangkan sisi kreatifitas dan seni dalam diri Anda sebagai modal bagus dalam diri Anda.</li><li>Cobalah untuk lebih terbuka dan mengekspresikan perasaan Anda.</li></ul><h5>Saran Profesi</h5><p>Seniman, Designer, Pekerja Sosial, Konselor, Psikolog, Guru, Aktor, Bidang Hospitality</p><h5>Pasangan/Partner Alami</h5><p>ESFJ atau ENFJ</p>', 2, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(14, '2-4-6-7', 'INFJ', 'Reflektif', '<ul><li>Perhatian, empati, sensitif & berkomitmen terhadap sebuah hubungan.</li><li>Sukses karena ketekunan, originalitas dan keinginan kuat untuk melakukan apa saja yang diperlukan termasuk memberikan yg terbaik dalam pekerjaan.</li><li>Idealis, perfeksionis, memegang teguh prinsip.</li><li>Visioner, penuh ide, kreatif, suka merenung dan inspiring.</li><li>Biasanya diikuti dan dihormati karena kejelasan visi serta dedikasi pada hal-hal baik.<h5>Saran Pengembangan</h5><ul><li>Seimbangkan cara pandang Anda. Jangan hanya melihat sisi negatif & resiko. Namun, lihatlah sisi positif dan peluangnya.</li><li>Bersabarlah, jangan mudah marah dan menyalahkan orang lain atau situasi.</li><li>Rileks dan jangan terus menerus berfikir atau menyelesaikan tanggungjawab.</li></ul><h5>Saran Profesi</h5><p>Pengajar, Psikolog, Dokter, Konselor, Pekerja Sosial, Fotografer, Seniman, Designer, Child Care.</p><h5>Pasangan/Partner Alami</h5><p>ESFP atau ESTP</p>', 2, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(15, '2-4-5-7', 'INTJ', 'Independen', '<ul><li>Visioner, punya perencanaan praktis, & biasanya memiliki ide-ide original serta dorongan kuat untuk mencapainya.</li><li>Mandiri dan percaya diri.</li><li>Punya kemampuan analisa yang bagus serta menyederhanakan sesuatu yang rumit dan abstrak menjadi sesuatu yang praktis, mudah difahami & dipraktekkan.</li><li>Skeptis, kritis, logis, menentukan (determinatif) dan kadang keras kepala.</li><li>Punya keinginan untuk berkembang serta selalu ingin lebih maju dari orang lain.</li><li>Kritik & konflik tidak menjadi masalah berarti.</li></ul><h5>Saran Pengembangan</h5><ul><li>Belajarlah mengungkapkan emosi & perasaan Anda.</li><li>Cobalah untuk lebih terbuka pada dunia luar, banyak bergaul, banyak belajar, banyak membaca, mengunjungi banyak tempat, eksplorasi hal baru, & memperluas wawasan.</li><li>Hindari perdebatan tidak penting.</li><li>Belajarlah untuk berempati, memberi perhatian dan lebih peka terhadap orang lain.</li></ul><h5>Saran Profesi</h5><p>Peneliti, Ilmuwan, Insinyur, Teknisi, Pengajar, Profesor, Dokter, Research & Development, Business Analyst, System Analyst, Pengacara, Hakim, Programmers, Posisi Strategis dalam organisasi.</p><h5>Pasangan/Partner Alami</h5><p>ENFP atau ENTP</p>', 2, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(16, '2-4-6-8', 'INFP', 'Idealis', '<ul><li>Sangat perhatian dan peka dengan perasaan orang lain.</li><li>Penuh dengan antusiasme dan kesetiaan, tapi biasanya hanya untuk orang dekat.</li><li>Peduli pada banyak hal. Cenderung mengambil terlalu banyak dan menyelesaikan sebagian.</li><li>Cenderung idealis dan perfeksionis.</li><li>Berpikir win-win solution, mempercayai dan mengoptimalkan orang lain.</li></ul><h5>Saran Pengembangan</h5><ul><li>Belajarlah menghadapi kritik. Jika baik maka kritik itu bisa membangun Anda, namun jika tidak abaikan saja. Jangan ragu pula untuk bertanya dan minta saran.</li><li>Belajarlah untuk bersikap tegas. Jangan selalu berperasaan dan menyenangkan orang dengan tindakan baik. Bertindak baik itu berbeda dengan bertindak benar.</li><li>Jangan terlalu menyalahkan diri dan bersikap terlalu keras pada diri sendiri. Kegagalan adalah hal biasa dan semua orang pernah mengalaminya.</li><li>Jangan terlalu baik pada orang lain tapi melupakan diri sendiri. Anda juga punya tanggungjawab untuk berbuat baik pada diri sendiri.</li></ul><h5>Saran Profesi</h5><p>Penulis, Sastrawan, Konselor, Psikolog, Pengajar, Seniman, Rohaniawan, Bidang Hospitality</p><h5>Pasangan/Partner Alami</h5><p>ENFJ atau ESFJ</p>', 2, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(17, '2-4-5-8', 'INTP', 'Konseptual', '<ul><li>Sangat menghargai intelektualitas dan pengetahuan. Menikmati hal-hal teoritis dan ilmiah. Senang memecahkan masalah dengan logika dan analisa.</li><li>Diam dan menahan diri. Lebih suka bekerja sendiri.</li><li>Cenderung kritis, skeptis, mudah curiga dan pesimis.</li><li>Tidak suka memimpin dan bisa menjadi pengikut yang tidak banyak menuntut.</li><li>Cenderung memiliki minat yang jelas. Membutuhkan karir dimana minatnya bisa berkembang dan bermanfaat. Jika menemukan sesuatu yang menarik minatnya, ia akan sangat serius dan antusias menekuninya.</li></ul><h5>Saran Pengembangan</h5><ul><li>Belajarlah membangun hubungan dengan orang lain. Belajar berempati, mendengar aktif, memberi perhatian dan bertukar pendapat.</li><li>Relaks. Jangan terlalu banyak berfikir. Nikmati hidup Anda tanpa harus bertanya mengapa dan bagaimana.</li><li>Cobalah menemukan satu ide, merencanakan dan mewujudkannya. Jangan terlalu sering berganti-ganti ide tetapi tidak satupun yang terwujud.</li></ul><h5>Saran Profesi</h5><p>Ilmuwan, Fotografer, Programmer, Ahli komputer, System Analyst, Penulis Buku Teknis, Ahli Forensik, Jaksa, Pengacara, Teknisi</p><h5>Pasangan/Partner Alami</h5><p>ENTJ atau ESTJ</p>', 2, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(18, '1-3-5-8', 'ESTP', 'Spontan', '<ul><li>Spontan, Aktif, Enerjik, Cekatan, Cepat, Sigap, Antusias, Fun dan penuh variasi.</li><li>Komunikator, asertif, to the point, ceplas-ceplos, berkarisma, punya interpersonal skill yang baik.</li><li>Baik dalam pemecahan masalah langsung di tempat. Mampu menghadapi masalah, konflik dan kritik. Tidak khawatir, menikmati apapun yang terjadi.</li><li>Cenderung untuk menyukai sesuatu yang mekanistis, kegiatan bersama dan olahraga.</li><li>Mudah beradaptasi, toleran, pada umumnya konservatif tentang nilai-nilai. Tidak suka penjelasan terlalu panjang. Paling baik dalam hal-hal nyata yang dapat dilakukan.</li></ul><h5>Saran Pengembangan</h5><ul><li>Belajarlah memahami perasaan dan pemikiran orang lain terutama saat bicara dengan mereka.</li><li>Belajarlah untuk sabar, menikmati proses, tidak semua hal bisa dicapai dengan cepat.</li><li>Sesekali luangkan waktu untuk merenung dan merencanakan masa depan Anda.</li><li>Cobalah untuk mencatat pengamatan-pengamatan Anda termasuk detailnya.</li></ul><h5>Saran Profesi</h5><p>Marketing, Sales, Polisi, Entrepreneur, Pialang Saham, Technical Support</p><h5>Pasangan/Partner Alami</h5><p>ISFJ atau ISTJ</p>', 2, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(19, '1-3-6-8', 'ESFP', 'Murah Hati', '<ul><li>Outgoing, easygoing, mudah berteman, bersahabat, sangat sosial, ramah, hangat, & menyenangkan.</li><li>Optimis, ceria, antusias, fun, menghibur, suka menjadi perhatian.</li><li>Punya interpersonal skill yang baik, murah hati, mudah simpatik dan mengenali perasaan orang lain. Menghindari konflik dan menjaga keharmonisan suatu hubungan.</li><li>Mengetahui apa yang terjadi di sekelilingnya dan ikut serta dalam kegiatan tersebut.</li><li>Sangat baik dalam keadaan yang membutuhkan common sense, tindakan cepat dan ketrampilan praktis.</li></ul><h5>Saran Pengembangan</h5><ul><li>Jangan terburu-buru dalam mengambil keputusan. Belajarlah untuk fokus dan tidak mudah berubah-ubah terutama untuk hal yang penting.</li><li>Jangan menyenangkan semua orang. Begitu pula sebaliknya, tidak semua orang bisa menyenangkan Anda.</li><li>Belajarlah menghadapi kritik dan konflik. Jangan lari.</li><li>Anda punya kecenderungan meterialistis. Hati-hati, tidak semua hal bisa diukur dengan materi ataupun uang.</li></ul><h5>Saran Profesi</h5><p>Entertainer, Seniman, Marketing, Konselor, Designer, Tour Guide, Bidang Anak-anak, Bidang Hospitality</p><h5>Pasangan/Partner Alami</h5><p>ISTJ atau ISFJ</p>', 2, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(20, '1-4-6-8', 'ENFP', 'Optimis', '<ul><li>Ramah, hangat, enerjik, optimis, antusias, semangat tinggi, fun.</li><li>Imaginatif, penuh ide, kreatif, inovatif.</li><li>Mampu beradaptasi dengan beragam situasi dan perubahan.</li><li>Pandai berkomunikasi, senang bersosialisasi & membawa suasana positif.</li><li>Mudah membaca perasaan dan kebutuhan orang lain.</li></ul><h5>Saran Pengembangan</h5><ul><li>Belajarlah untuk fokus, disiplin, tegas dan konsisten</li><li>Belajarlah untuk menghadapi konflik dan kritik.</li><li>Pikirkan kebutuhan diri sendiri. Jangan melupakannya karena terlalu peduli pada kebutuhan orang lain.</li><li>Jangan terlalu boros. Belajarlah untuk mengelola keuangan sedikit demi sedikit.</li><ul><h5>Saran Profesi</h5><p>Konselor, Psikolog, Entertainer, Pengajar, Motivator, Presenter, Reporter, MC, Seniman, Hospitality</p><h5>Pasangan/Partner Alami</h5><p>INTJ atau INFJ</p>', 2, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(21, '1-4-5-8', 'ENTP', 'Inovatif – Kreatif', '<ul><li>Gesit, kreatif, inovatif, cerdik, logis, baik dalam banyak hal.</li><li>Banyak bicara dan punya kemampuan debat yang baik. Bisa berargumentasi untuk senang-senang saja tanpa merasa bersalah.</li><li>Fleksibel. Punya banyak cara untuk memecahkan masalah dan tantangan.</li><li>Kurang konsisten. Cenderung untuk melakukan hal baru yang menarik hati setelah melakukan sesuatu yang lain.</li><li>Punya keinginan kuat untuk mengembangkan diri.</li></ul><h5>Saran Pengembangan</h5><ul><li>Cobalah untuk win-win solution. Jangan ingin menang sendiri</li><li>Belajarlah untuk disiplin dan konsisten.</li><li>Hindari perdebatan tidak penting.</li><li>Belajarlah untuk sedikit waspada. Seimbangkan cara pandang Anda agar tidak terlalu optimis dan mengambil resiko yang tidak realistis.</li><li>Belajarlah untuk memberi perhatian pada perasaan orang lain.</li></ul><h5>Saran Profesi</h5><p>Pengacara, Psikolog, Konsultan, Ilmuwan, Aktor,Marketing, Programmer, Fotografer</p><h5>Pasangan/Partner Alami</h5><p>INFJ atau INTJ</p>', 2, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(22, '1-3-5-7', 'ESTJ', 'Konservatif – Disiplin', '<ul><li>Praktis, realistis, berpegang pada fakta, dengan dorongan alamiah untuk bisnis dan mekanistis.</li><li>Sangat sistematis, procedural dan terencana.</li><li>Disiplin, on time dan pekerja keras.</li><li>Konservatif dan cenderung kaku.</li><li>Tidak tertarik pada subject yang tidak berguna baginya, tapi dapat menyesuaikan diri jika diperlukan.</li><li>Senang mengorganisir sesuatu. Bisa menjadi administrator yang baik jika mereka ingat untuk memperhatikan perasaan dan perspektif orang lain.</li></lu><h5>Saran Pengembangan</h5><ul><li>Kurangi keinginan untuk mengontrol dan memaksa orang lain.</li><li>Belajarlah untuk mengontrol emosi dan amarah Anda.</li><li>Cobalah untuk introspeksi diri dan meluangkan waktu sejenak untuk merenung.</li><li>Belajarlah untuk lebih sabar dan low profile</li><li>Belajarlah untuk memahami orang lain.<li></ul><h5>Saran Profesi</h5><p>Militer, Manajer, Polisi, Hakim, Pengacara, Guru, Sales, Auditor, Akuntan, System Analyst</p><h5>Pasangan/Partner Alami</h5><p>ISTP atau INTP</p>', 2, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(23, '1-3-6-7', 'ESFJ', 'Harmonis', '<ul><li>Hangat, banyak bicara, populer, dilahirkan untuk bekerjasama, suportif dan anggota kelompok yang aktif.</li><li>Membutuhkan keseimbangan dan baik dalam menciptakan harmoni.</li><li>Selalu melakukan sesuatu yang manis bagi orang lain. Kerja dengan baik dalam situasi yang mendukung dan memujinya.</li><li>Santai, easy going, sederhana, tidak berfikir panjang.</li><li>Teliti dan rajin merawat apa yang ia miliki.</li></ul><h5>Saran Pengembangan</h5><ul><li>Jangan mengorbankan diri hanya untuk menyenangkan orang lain.</li><li>Jangan mengukur harga diri Anda dari perlakuan, penghargaan dan pujian orang lain.</li><li>Mintalah pertimbangan orang lain dalam mengambil keputusan. Belajarlah untuk lebih tegas.</li><li>Terima tanggungjawab hidup dan belajarlah untuk lebih dewasa. Jangan mengasihani diri sendiri.</li><li>Hadapi kritik dan konflik, jangan lari.</li></ul><h5>Saran Profesi</h5><p>Perencana Keuangan, Perawat, Guru, Bidang anak-anak, Konselor, Administratif, Hospitality</p><h5>Pasangan/Partner Alami</h5><p>ISFP atau INFP</p>', 2, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(24, '1-4-6-7', 'ENFJ', 'Mennyakinkan', '<ul><li>Kreatif, imajinatif, peka, sensitive, loyal.</li><li>Pada umumnya peduli pada apa kata orang atau apa yang orang lain inginkan dan cenderung melakukan sesuatu dengan memperhatikan perasaan orang lain.</li><li>Pandai bergaul, meyakinkan, ramah, fun, populer, simpatik. Responsif pada kritik dan pujian.</li><li>Menyukai variasi dan tantangan baru.</li><li>Butuh apresiasi dan penerimaan.</li></ul><h5>Saran Pengembangan</h5><ul><li>Jangan mengorbankan diri hanya untuk menyenangkan orang lain.</li><li>Jangan mengukur harga diri Anda dari perlakuan orang lain. Jangan mudah kecewa jika mereka tidak seperti yang Anda inginkan.</li><li>Belajarlah untuk tegas dan mengambil keputusan. Menghadapi kritik dan konflik.</li><li>Jangan terlalu bersikap keras terhadap diri sendiri.</li></ul><h5>Saran Profesi</h5><p>Konsultan, Psikolog, Konselor, Pengajar, Marketing, HRD, Event Coordinator, Entertainer, Penulis, Motivator</p><h5>Pasangan/Partner Alami</h5><p>INFP atau ISFP</p>', 2, 1, 2, NULL, '2014-04-26 22:11:26', NULL),
(25, '1-4-5-7', 'ENTJ', 'Pemimpin Alami', '<ul><li>Tegas, asertif, to the point, jujur terus terang, obyektif, kritis, & punya standard tinggi.</li><li>Dominan, kuat kemauannya, perfeksionis dan kompetitif.</li><li>Tangguh, disiplin, dan sangat menghargai komitmen.</li><li>Cenderung menutupi perasaan dan menyembunyikan kelemahan.</li><li>Berkarisma, komunikasi baik, mampu menggerakkan orang.</li><li>Berbakat pemimpin.</li></ul><h5>Saran Pengembangan</h5><ul><li>Belajarlah untuk relaks. Tidak perlu perfeksionis dan selalu kompetitif dengan semua orang.</li><li>Ungkapkan perasaan Anda. Menyatakan perasaan bukanlah kelemahan.</li><li>Belajarlah mengelola emosi Anda. Jangan mudah marah.</li><li>Belajarlah untuk menghargai dan mengapresiasi orang lain.</li><li>Jangan terlalu arogan dan menganggap remeh orang lain. Lihat sisi positifnya. Jangan hanya melihat benar dan salah saja.</li></ul><h5>Saran Profesi</h5><p>Entrepreneur, Pengacara, Hakim, Konsultan, Pemimpin Organisasi, Business analyst, Bidang Finansial</p><h5>Pasangan/Partner Alami</h5><p>INTP atau ISTP</p>', 2, 1, 2, NULL, '2014-04-26 22:11:26', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accesses`
--
ALTER TABLE `accesses`
  ADD CONSTRAINT `fk_status_id_accesses` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_created_by_accesses` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_updated_by_accesses` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `fk_status_id_answers` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_created_by_answers` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_question_id_answers` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_updated_by_answers` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_variable_id_answers` FOREIGN KEY (`variable_id`) REFERENCES `variables` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `combinations`
--
ALTER TABLE `combinations`
  ADD CONSTRAINT `fk_variable_detail_id_combinations` FOREIGN KEY (`variable_detail_id`) REFERENCES `variable_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_variable_id_combinations` FOREIGN KEY (`variable_id`) REFERENCES `variables` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `fk_status_id_companies` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_created_by_companies` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_updated_by_companies` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `company_users`
--
ALTER TABLE `company_users`
  ADD CONSTRAINT `fk_updated_by_company_users` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_company_id_company_users` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_created_by_company_users` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_position_id_company_users` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_id_company_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `experts`
--
ALTER TABLE `experts`
  ADD CONSTRAINT `fk_status_id_experts` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_created_by_experts` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_updated_by_experts` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `expert_users`
--
ALTER TABLE `expert_users`
  ADD CONSTRAINT `fk_updated_by_expert_users` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_created_by_expert_users` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_expert_id_expert_users` FOREIGN KEY (`expert_id`) REFERENCES `experts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_position_id_expert_users` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_id_expert_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `fk_status_id_members` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_position_id_members` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_id_members` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `positions`
--
ALTER TABLE `positions`
  ADD CONSTRAINT `fk_status_id_positions` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_created_by_positions` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_role_id_positions` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_updated_by_positions` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `position_accesses`
--
ALTER TABLE `position_accesses`
  ADD CONSTRAINT `fk_status_id_position_accesses` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_access_id_position_accesses` FOREIGN KEY (`access_id`) REFERENCES `accesses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_created_by_position_accesses` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_position_id_position_accesses` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_updated_by_position_accesses` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `fk_status_id_questions` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_created_by_questions` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_test_id_questions` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_updated_by_questions` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `fk_user_test_id_result` FOREIGN KEY (`user_test_id`) REFERENCES `user_tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `result_details`
--
ALTER TABLE `result_details`
  ADD CONSTRAINT `fk_variable_detail_id_result_details` FOREIGN KEY (`variable_detail_id`) REFERENCES `variable_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_result_id_result_details` FOREIGN KEY (`result_id`) REFERENCES `experts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `fk_status_id_roles` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_created_by_roles` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_updated_by_roles` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `fk_status_id_tags` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_created_by_tags` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_expert_id_tags` FOREIGN KEY (`expert_id`) REFERENCES `experts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_parent_id_tags` FOREIGN KEY (`parent_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_updated_by_tags` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tag_variables`
--
ALTER TABLE `tag_variables`
  ADD CONSTRAINT `fk_variable_detail_id_tag_variables` FOREIGN KEY (`variable_detail_id`) REFERENCES `variable_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tag_id_tag_variables` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `fk_status_id_tests` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_company_id_tests` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_created_by_tests` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_expert_id_tests` FOREIGN KEY (`expert_id`) REFERENCES `experts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_parent_id_tests` FOREIGN KEY (`parent_id`) REFERENCES `tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_type_id_tests` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_updated_by_tests` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `test_answers`
--
ALTER TABLE `test_answers`
  ADD CONSTRAINT `fk_answer_id_test_answers` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_question_id_test_answers` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_test_id_test_answers` FOREIGN KEY (`user_test_id`) REFERENCES `user_tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `test_variables`
--
ALTER TABLE `test_variables`
  ADD CONSTRAINT `fk_variable_id_test_variables` FOREIGN KEY (`variable_id`) REFERENCES `variables` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_test_id_test_variables` FOREIGN KEY (`user_test_id`) REFERENCES `user_tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `types`
--
ALTER TABLE `types`
  ADD CONSTRAINT `fk_status_id_types` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_created_by_types` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_expert_id_types` FOREIGN KEY (`expert_id`) REFERENCES `experts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_updated_by_types` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_status_id_users` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_parent_id_users` FOREIGN KEY (`parent_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_tests`
--
ALTER TABLE `user_tests`
  ADD CONSTRAINT `fk_status_id_user_tests` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_company_id_user_tests` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_created_by_user_tests` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_expert_id_user_tests` FOREIGN KEY (`expert_id`) REFERENCES `experts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_member_id_user_tests` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_test_id_user_tests` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_updated_by_user_tests` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `variables`
--
ALTER TABLE `variables`
  ADD CONSTRAINT `fk_status_id_variables` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_created_by_variables` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_expert_id_variables` FOREIGN KEY (`expert_id`) REFERENCES `experts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_type_id_variables` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_updated_by_variables` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `variable_details`
--
ALTER TABLE `variable_details`
  ADD CONSTRAINT `fk_status_id_variable_details` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_created_by_variable_details` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_expert_id_variable_details` FOREIGN KEY (`expert_id`) REFERENCES `experts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_updated_by_variable_details` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
