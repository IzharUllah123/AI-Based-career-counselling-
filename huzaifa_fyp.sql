-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2022 at 06:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `huzaifa_fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `category` varchar(256) NOT NULL,
  `price` varchar(128) NOT NULL,
  `url` varchar(312) NOT NULL,
  `image` varchar(312) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `category`, `price`, `url`, `image`) VALUES
(1, 'The Complete jQuery Course', 'Web Development', 'Free', 'https://www.w3schools.com/jquery/default.asp', './img/coursejq.jpg'),
(2, 'Introduction to CSS', 'Web Development', 'Free', 'https://www.w3schools.com/css/default.asp', './img/course02.jpg'),
(3, 'The Complete course on HTML', 'Web Development', 'Free', 'https://progate.com/courses/java', './img/coursehtml.jpg'),
(4, 'Introduction to Bootstrap', 'Web Design', 'Free', 'https://www.w3schools.com/bootstrap4/default.asp', './img/coursebtsp.jpg'),
(5, 'JavaScript Tutorial', 'Web Development', 'Free', 'https://www.w3schools.com/cs/default.asp', './img/coursejs.jpg'),
(6, 'React Tutorial', 'Web Development', 'Free', 'https://www.udemy.com/course/the-complete-c-programming/', './img/courserea.jpg'),
(7, 'Ruby Tips and Tricks', 'Web Development', 'Premium', 'https://progate.com/courses/java', './img/courseruby.jpg'),
(8, 'HTML & CSS', 'Web Development', 'Premium', 'https://www.w3schools.com/bootstrap4/default.asp', './img/course04.jpg'),
(9, 'Ruby on Rails5', 'Backend Development', 'Premium', 'https://www.w3schools.com/cs/default.asp', './img/courseror.jpg'),
(10, 'Introduction to Sass', 'Web Development', 'Premium', 'https://www.udemy.com/course/the-complete-c-programming/', './img/coursesass.jpg'),
(11, 'React complete course', 'Web Development', 'Premium', 'https://progate.com/courses/java', './img/coursereact.jpg'),
(12, 'Complete guide on JavaScript', 'Web Development', 'Premium', 'https://www.w3schools.com/bootstrap4/default.asp', './img/coursejas.jpg'),
(13, 'R Programming', 'Programming', 'Free', 'https://www.datacamp.com/tracks/r-programming', './img/course01.jpg'),
(14, 'Learn C++', 'Programming', 'Free', 'https://www.w3schools.com/cpp/default.asp', './img/coursecpp.jpg'),
(15, 'Java Tutorial', 'Programming', 'Free', 'https://www.w3schools.com/java/default.asp', './img/coursejava.jpg'),
(16, 'Complete guide on python', 'Programming', 'Free', 'https://www.w3schools.com/bootstrap4/default.asp', './img/coursepy.jpg'),
(17, 'Core Java', 'Programming', 'Premium', 'https://progate.com/courses/java', './img/coursejv.jpg'),
(18, 'Python Programming', 'Programming', 'Premium', 'https://www.w3schools.com/bootstrap4/default.asp', './img/coursepyth.jpg'),
(19, 'C# Tutorial', 'Programming', 'Free', 'https://www.w3schools.com/cs/default.asp', './img/coursec.jpg'),
(20, 'Complete C programming', 'Programming', 'Free', 'https://www.udemy.com/course/the-complete-c-programming/', './img/coursecp.jpg'),
(21, 'PHP Tips, Tricks, and Techniques', 'Server Side', 'Free', 'https://www.w3schools.com/git/default.asp', './img/course05.jpg'),
(22, 'SQL Tutorial', 'Server Side', 'Free', 'https://www.w3schools.com/git/default.asp', './img/coursesql.jpg'),
(23, 'Node.js crash course', 'Server Side', 'Free', 'https://www.w3schools.com/git/default.asp', './img/coursend.jpg'),
(24, 'Mastering Git', 'Server Side', 'Free', 'https://www.w3schools.com/git/default.asp', './img/coursegit.jpg'),
(25, 'Add Course Feature', 'AI', 'Free', 'https://rootnaturalcare.com/', 'img/coursesql.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `feedback` varchar(256) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `feedback`, `role`) VALUES
(2, 'root', '$2y$10$jzeQPkOxWEQFdIQPoaR/DOgC0JxLi826uQLDn/GFtFweVOibYWJjC', 'Huzaifa', 'This is the one of the best career counselling apps', 'admin'),
(4, 'user0', '$2y$10$A4ArC35Ym85soELhLsppmOMpeN/HxtyPkEetJ122SWnirc.3ovJ3a', 'User 0', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(5, 'user1', '$2y$10$85J9/QSft425LpOVXNX7g.1sPbJ0ezuZoofpu7F6HdVn3z1u/O1La', 'User 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(7, 'user3', '$2y$10$iDGLsJ1uHEjk.KulbGPZhOhcQTFQ21htUkjRQhmeriJWB.uaHADGq', 'User 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(9, 'user5', '$2y$10$9PlGEHWMzChRbzBYBqlJVuQXn5bF9MmVF2cVMPhSk4N9Xn7fyoiJu', 'User 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(10, 'user6', '$2y$10$DgR2kL3zBIiLGidNGcSnk.8mzbfYXwvwOnEwfE/jScl8jzGY6cqTK', 'User 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(11, 'user7', '$2y$10$4o5j/gMyuV1S8Uzu6MLy1uIqLpri7IWC.R/NXFLeEQpmN1jQKET5G', 'User 7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(12, 'user8', '$2y$10$kpyRma3Hn857YnNutca2yOvMaKUnlROpxoZ9FqADbsxakvSnY6C22', 'User 8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(13, 'user9', '$2y$10$J/s0iEd9EvCEwBGCkpfFPOYHbCdv1/9sVNPneD1ygA5KtUY/JpnLi', 'User 9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(14, 'user10', '$2y$10$Pm6DtovlRfU.C6O15e/rseqL.PnPYGmKV1Rmf6GrnR2s6n/ZPXdQS', 'User 10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(15, 'user11', '$2y$10$WS2n/yHAlxqgAASHlATKe.7Df7IfM3UaVrnHYIrbx8QoI6dTVhvCi', 'User 11', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(16, 'user12', '$2y$10$y.2VCTCU5gi5GvQcZaaoeueAqXomlvahjfAwo6k5FBQGuaH2OuTlO', 'User 12', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(17, 'user13', '$2y$10$vKEhZSe5n12ROizBntMDj.o2gcqLju6Z4VIsfajO1mlD2eD65lcaa', 'User 13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(18, 'user14', '$2y$10$vpVk5IQPSBwZh1DULU/5N.xY.xz5O6JOs5nond13fIbOxO6YgQDYa', 'User 14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(19, 'user15', '$2y$10$mCq21TpwelmoJv4MOBUvAuI2immu29ZZSJY7FLUqun6ZZ7zku/9O2', 'User 15', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(20, 'user16', '$2y$10$FnL2CRU5DotZDhZIxQsH2.5FWvPs5LQ9N/OgdNe1OsNH8uwC4.CZ6', 'User 16', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(21, 'user17', '$2y$10$xpVbXhq45QaAzQDaWvzyvu8Fhy.gdKgF4CSt.JBCbR0u1oeN1nJUK', 'User 17', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(22, 'user18', '$2y$10$Jaoa2tN7JPtBa4/GtSFlleCVPWZvlyQR6dfeRPKPS1Q4zqocGbyUK', 'User 18', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(23, 'user19', '$2y$10$1K3GZSWRXiaytLwadsI2Geazzk4S9mWHfGNIDGmcf0ajOziU/eS6G', 'User 19', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(24, 'user20', '$2y$10$f.oF8MJFM16W.ZfzOUMtwO3qmptbQVv1P7f01dO0VWdG4h.jvLk8i', 'User 20', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(25, 'user21', '$2y$10$44htiqznNqNhfCVzIvQhhu2DyI3CRKvhwDtDPyKASjamvRxdJzhsK', 'User 21', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(26, 'user22', '$2y$10$ajXL0ttajZjsEzJgzVqa.uzsKCfy.wB3wdK8vlN4LZwG6vakJBzPK', 'User 22', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(27, 'user23', '$2y$10$giygZrw86NcHip4/5yRjk.HUzaAvrrQRFYtQH7e2fnAC9KSbN87Vi', 'User 23', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(28, 'user24', '$2y$10$kUH9sPPkLW07sTn9TPIeHuYMOe8qba9YDL9h7wCx5By/qkMCbmpZS', 'User 24', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(29, 'user25', '$2y$10$JwEDJ2Eu6lLI0hRHzYZgN.6WtLTEb4BCFSBcCeFlR3tJvO3Ko8Vw2', 'User 25', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(30, 'user26', '$2y$10$wuBk91bUq26EQau4MlMAGu7BtyIi85xonbWr7HBwFxq.Osb88u9lO', 'User 26', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(31, 'user27', '$2y$10$SyLs4qsv6G73u9vH1PyY0OjxLi1VXw76b1FvFpm1GRmBfk57PdBbm', 'User 27', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(32, 'user28', '$2y$10$O6bGTSAIdB/CUwXMDbRpleENDtEKTD34srWTVJl197xo7giYa7bXe', 'User 28', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(33, 'user29', '$2y$10$tgaAeM5Q.COuuwePNP3q2OtF5djKAUHD.OWEVlWtsyK1u2C/TDE0i', 'User 29', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(34, 'user30', '$2y$10$xCu0Xa1pQEaM3M9.JPgz8uk.B2uJdtAipjPSxJ7qFakl2/MhHqoJ2', 'User 30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(35, 'user31', '$2y$10$e513v4KvAg/ClFBJgqP0qOCvrRxuFaaocU11eK5b.vElH49SzykBK', 'User 31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(36, 'user32', '$2y$10$gAYB/osLsv3O4Kcg5F7DBe0tkyfjaN3Nqu0XHw6MKVtPQ6ql6UroO', 'User 32', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(37, 'user33', '$2y$10$zaqF1MafA.7AjCkquQs.EOz9FPIWOF03XHOaphu8wqQPaQm8.BwV2', 'User 33', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(38, 'user34', '$2y$10$NCXW8fOSPFJUMEP1DRyLR.GKUSrsz.KQfGeQUqXx1HH0dzc6NxIZ2', 'User 34', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(39, 'user35', '$2y$10$tIKki6YK5X.fw1l4wNLPsePVrmT3THHccgI0cWtyEUhbsR6D4euiO', 'User 35', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(40, 'user36', '$2y$10$Yjheq4dbIxVB7NahyhMezO7O3kVYz5mqheIVoPlEb6Lg2BbnFRUwu', 'User 36', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(41, 'user37', '$2y$10$jFUBMrqPwaDdG2k.lhW7s.qsvi23G/BZWACSKRF.YMQZ1ENooP8NK', 'User 37', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(42, 'user38', '$2y$10$BKwzfCE2FGtvAqBqPaIe0eJ.cnpciGd8GvQT0KKsh/LWlnJWrdF1y', 'User 38', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(43, 'user39', '$2y$10$xDAgOPq8JuXe/UbY9fARneJ4QGmIGgDwx/k8zva4/V6nrKmLJKZJm', 'User 39', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(44, 'user40', '$2y$10$7Fwlds.KX6h9chHBTZw4fuiM5NN/kknpFLVKBMkaJFwOKW.vh1uMa', 'User 40', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(45, 'user41', '$2y$10$aVjiGRceOy6vRRM2f/Q8GOgOuFj0BwbBK2x1sOiQTmDDo/AHAFNwu', 'User 41', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(46, 'user42', '$2y$10$TwfXY.InqdPk7hrCZcKBJuR379Lk0IyPmeLR3N9OBjkfDpav5rO8y', 'User 42', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(47, 'user43', '$2y$10$Fm6ITY8rv2rrigyXRcE8Iu6h4XNz8Qgw5UNUBPtIoynYC5/pkm1tK', 'User 43', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(48, 'user44', '$2y$10$lgcJvkmHSrEW5fbTZUMNCeb2L9CnIvUBwUzlNHoXQ8CXFVr7gpxKu', 'User 44', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(49, 'user45', '$2y$10$1UMBdObStnC/Jq1/Zi78Wu120RBZutWTSnusuy6fnUEuXOx5mjaZq', 'User 45', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(50, 'user46', '$2y$10$iqq.p2RfPG72rTMAaxKcTe6STjbR4mDnxSCgsEfv82L60xUUATDnK', 'User 46', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(51, 'user47', '$2y$10$RpZ2Kz1JfFyJzeInt/.YPe6jYGJVmXcWvfBfPzAVw.pSuBPAbHX4W', 'User 47', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(52, 'user48', '$2y$10$cemU5tG11NdBi.FfBHGib.RozMzP6DxT6arOSxmQGM53fhtjG4KVq', 'User 48', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user'),
(53, 'user49', '$2y$10$CLx6MgRUTGjDsgh7majJzOvwBuybDDFwxg67Ihz9is.nK7vlffnm2', 'User 49', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
