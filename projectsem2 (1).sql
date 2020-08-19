-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 19, 2020 lúc 08:30 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `projectsem2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `departments`
--

INSERT INTO `departments` (`id`, `department`) VALUES
(1, 'marketing'),
(2, 'study'),
(3, 'developer'),
(4, 'has retired');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`id`, `department_id`, `user_id`) VALUES
(5, 1, 2),
(8, 2, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history_time_sheets`
--

CREATE TABLE `history_time_sheets` (
  `id` int(10) UNSIGNED NOT NULL,
  `timeSheet_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `note_change` varchar(350) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_24_074223_create_departments_table', 1),
(5, '2020_07_24_074254_create_groups_table', 1),
(6, '2020_07_24_074416_create_salaries_table', 1),
(7, '2020_07_24_074620_create_type_users_table', 1),
(8, '2020_07_24_074639_create_roles_table', 1),
(9, '2020_07_24_074718_create_time_sheets_table', 1),
(10, '2020_07_24_074802_create_history_time_sheets_table', 1),
(11, '2020_07_24_083123_create_user_contacts_table', 1),
(12, '2020_07_24_084700_create_salary_more_table', 1),
(13, '2020_07_25_032921_create_salary_mores_histories_table', 1),
(14, '2020_07_25_033135_add_votes_to_users_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Staff');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `salaries`
--

CREATE TABLE `salaries` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `payBy_id` bigint(20) DEFAULT NULL,
  `started_at` date NOT NULL,
  `finished_at` date DEFAULT NULL,
  `total_salary` int(11) NOT NULL,
  `pay_day` date DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_day` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `salaries`
--

INSERT INTO `salaries` (`id`, `user_id`, `payBy_id`, `started_at`, `finished_at`, `total_salary`, `pay_day`, `status`, `created_at`, `updated_day`) VALUES
(1, 2, 2, '2020-08-16', NULL, 200056, '2020-08-16', 0, '2020-08-16 15:22:38', '2020-08-16 22:40:23'),
(2, 2, 2, '2020-08-16', NULL, 200000, '2020-08-16', 0, '2020-08-16 15:47:24', NULL),
(3, 2, 2, '2020-08-16', '2020-08-17', 5366, '2020-08-17', 0, '2020-08-16 15:48:03', '2020-08-17 16:23:25'),
(4, 3, NULL, '2020-08-17', NULL, 0, NULL, 1, '2020-08-17 09:50:24', NULL),
(5, 2, 2, '2020-08-17', '2020-08-18', 300233, '2020-08-18', 0, '2020-08-17 09:52:11', '2020-08-18 21:35:41'),
(6, 4, NULL, '2020-08-18', NULL, 0, NULL, 1, '2020-08-18 10:23:02', NULL),
(7, 2, NULL, '2020-08-18', '2020-08-19', 2471, NULL, 1, '2020-08-18 14:40:39', '2020-08-19 13:29:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `salary_more`
--

CREATE TABLE `salary_more` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `salary_more`
--

INSERT INTO `salary_more` (`id`, `user_id`, `title`, `amount`, `num`, `created_at`, `updated_at`) VALUES
(1, 2, 'sdfsdfsdfsd', 200000, 0, '2020-08-16 22:47:03', '2020-08-16 22:47:03'),
(2, 2, 'hard', 10000, 0, '2020-08-17 21:08:34', '2020-08-17 21:08:34'),
(3, 2, 'Ho tro tien xe + gui xe', 300000, 7, '2020-08-18 21:35:08', '2020-08-18 21:35:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `salary_mores_histories`
--

CREATE TABLE `salary_mores_histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `salary_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `bonus_by_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `salary_mores_histories`
--

INSERT INTO `salary_mores_histories` (`id`, `user_id`, `salary_id`, `title`, `amount`, `num`, `status`, `updated_at`, `bonus_by_id`) VALUES
(1, 2, 1, 'sdfsdfsdfsd', 200000, 2, 0, '2020-08-16 15:47:03', 2),
(2, 2, 5, 'hard', 10000, 1, 0, '2020-08-17 14:08:34', 2),
(3, 2, 5, 'Ho tro tien xe + gui xe', 300000, 10, 0, '2020-08-18 14:35:08', 2),
(4, 2, 5, '+Ho tro tien xe + gui xe', 1, 300000, 9, '2020-08-18 14:40:38', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `time_sheets`
--

CREATE TABLE `time_sheets` (
  `id` int(10) UNSIGNED NOT NULL,
  `salary_id` int(10) UNSIGNED NOT NULL,
  `work_date` date NOT NULL,
  `checkin` double(8,2) NOT NULL,
  `checkout` double(8,2) DEFAULT NULL,
  `working_time` double(8,2) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `resttime` double(8,2) DEFAULT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `time_sheets`
--

INSERT INTO `time_sheets` (`id`, `salary_id`, `work_date`, `checkin`, `checkout`, `working_time`, `amount`, `created_at`, `updated_at`, `resttime`, `status`) VALUES
(1, 1, '2020-08-16', 22.67, 22.67, 0.00, 56, '2020-08-16', '2020-08-16', 0.00, 1),
(2, 3, '2020-08-17', 14.07, 14.08, 0.01, 111, '2020-08-17', '2020-08-17', 0.00, 1),
(3, 3, '2020-08-17', 14.12, 14.13, 0.01, 111, '2020-08-17', '2020-08-17', 0.00, 1),
(4, 3, '2020-08-17', 14.75, 14.76, 0.01, 239, '2020-08-17', '2020-08-17', 0.00, 1),
(5, 3, '2020-08-17', 14.76, 14.77, 0.01, 144, '2020-08-17', '2020-08-17', 0.00, 1),
(6, 3, '2020-08-17', 14.77, 14.77, 0.00, 72, '2020-08-17', '2020-08-17', 0.00, 1),
(7, 3, '2020-08-17', 14.81, 14.81, 0.00, 44, '2020-08-17', '2020-08-17', 0.00, 1),
(8, 3, '2020-08-17', 15.19, 15.19, 0.00, 89, '2020-08-17', '2020-08-17', 0.00, 1),
(9, 3, '2020-08-17', 15.21, 15.23, 0.02, 344, '2020-08-17', '2020-08-17', 0.00, 1),
(10, 3, '2020-08-17', 16.16, 16.29, 0.13, 2606, '2020-08-17', '2020-08-17', 0.00, 1),
(11, 3, '2020-08-17', 16.31, 16.39, 0.08, 1606, '2020-08-17', '2020-08-17', 0.00, 1),
(12, 5, '2020-08-17', 16.94, 16.95, 0.01, 139, '2020-08-17', '2020-08-17', 0.00, 1),
(13, 5, '2020-08-18', 21.59, 21.59, 0.00, 94, '2020-08-18', '2020-08-18', 0.00, 1),
(14, 7, '2020-08-19', 13.37, 13.44, 0.07, 1344, '2020-08-19', '2020-08-19', 0.00, 1),
(15, 7, '2020-08-19', 13.44, 13.45, 0.01, 144, '2020-08-19', '2020-08-19', 0.00, 1),
(16, 7, '2020-08-19', 13.45, 13.50, 0.05, 983, '2020-08-19', '2020-08-19', 0.00, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_users`
--

CREATE TABLE `type_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_users`
--

INSERT INTO `type_users` (`id`, `name`) VALUES
(1, 'Toàn thời gian'),
(2, 'Bán thời gian');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identity_cart` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `joined_at` date DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viewpass` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `type_user_id` int(10) UNSIGNED DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `gender`, `identity_cart`, `phone`, `birthday`, `joined_at`, `address`, `viewpass`, `salary`, `type_user_id`, `role_id`, `status`) VALUES
(2, 'Trương Công Vinh', 'nguyenvanquan419@gmail.com', NULL, '$2y$10$0YA6eRUDoGc9yDDBOpv0ouTpYylCDIGbVZ6KgHYaUZobH1rw4xSM.', NULL, '2020-08-16 15:22:37', '2020-08-17 08:10:34', NULL, '0123456', '0382720201', '2020-08-16', '2020-08-16', 'Hà nội', 'vinh2001', 20000, NULL, 1, 1),
(3, 'Bac', 'nguyenvanquan41999@gmail.com', NULL, '$2y$10$ZndGcY/.ItHaujI5SVz3jeQemtjHUaF8htSyJjxuxv/hxiQtvwr3G', NULL, '2020-08-17 09:50:24', '2020-08-17 09:50:24', NULL, '01234566000', '0382720201', '2020-08-17', '2020-08-17', 'Sky', '12345678', 50000, NULL, 2, 1),
(4, 'Trương Công Minh', 'minh@gmail.com', NULL, '$2y$10$X.ntHvTopAJp6rzsSnGBfOcy5ku21VdcK2f4KeF9GTHVxGydp0bVm', NULL, '2020-08-18 10:23:02', '2020-08-18 10:23:02', NULL, '01234566', '0382720201', '2020-08-18', '2020-08-18', '18', '123456789', 59923, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_contacts`
--

CREATE TABLE `user_contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `relationship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identity_cart` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_contacts`
--

INSERT INTO `user_contacts` (`id`, `user_id`, `relationship`, `name`, `identity_cart`, `address`, `phone`, `email`, `birthday`, `created_at`, `updated_at`) VALUES
(1, 2, 'Bố', 'um ba la ra em gái', '01234566', 'không biết', '0382720201', 'minhbeotcm1@gmail.com', '2020-08-16', NULL, NULL),
(2, 2, 'người thân', 'um ba la ra em gái', '0123456222', 'Hà nội', '0382720201', 'nguyenvanquan419@gmail.com', '2020-08-17', NULL, '2020-08-17 08:11:15'),
(3, 2, 'Anh/em trai', 'Công Vinh', '01234566000', 'HN', '0382720201', 'duongcongvinh18122001@gmail.com', '2020-08-19', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groups_department_id_foreign` (`department_id`),
  ADD KEY `groups_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `history_time_sheets`
--
ALTER TABLE `history_time_sheets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_time_sheets_user_id_foreign` (`user_id`),
  ADD KEY `history_time_sheets_timesheet_id_foreign` (`timeSheet_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salaries_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `salary_more`
--
ALTER TABLE `salary_more`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salary_more_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `salary_mores_histories`
--
ALTER TABLE `salary_mores_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salary_mores_histories_user_id_foreign` (`user_id`),
  ADD KEY `salary_mores_histories_salary_id_foreign` (`salary_id`);

--
-- Chỉ mục cho bảng `time_sheets`
--
ALTER TABLE `time_sheets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `time_sheets_salary_id_foreign` (`salary_id`);

--
-- Chỉ mục cho bảng `type_users`
--
ALTER TABLE `type_users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_identity_cart_unique` (`identity_cart`),
  ADD KEY `users_type_user_id_foreign` (`type_user_id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `user_contacts`
--
ALTER TABLE `user_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_contacts_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `history_time_sheets`
--
ALTER TABLE `history_time_sheets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `salary_more`
--
ALTER TABLE `salary_more`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `salary_mores_histories`
--
ALTER TABLE `salary_mores_histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `time_sheets`
--
ALTER TABLE `time_sheets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `type_users`
--
ALTER TABLE `type_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user_contacts`
--
ALTER TABLE `user_contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `groups_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `history_time_sheets`
--
ALTER TABLE `history_time_sheets`
  ADD CONSTRAINT `history_time_sheets_timesheet_id_foreign` FOREIGN KEY (`timeSheet_id`) REFERENCES `time_sheets` (`id`),
  ADD CONSTRAINT `history_time_sheets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `salaries`
--
ALTER TABLE `salaries`
  ADD CONSTRAINT `salaries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `salary_more`
--
ALTER TABLE `salary_more`
  ADD CONSTRAINT `salary_more_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `salary_mores_histories`
--
ALTER TABLE `salary_mores_histories`
  ADD CONSTRAINT `salary_mores_histories_salary_id_foreign` FOREIGN KEY (`salary_id`) REFERENCES `salaries` (`id`),
  ADD CONSTRAINT `salary_mores_histories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `time_sheets`
--
ALTER TABLE `time_sheets`
  ADD CONSTRAINT `time_sheets_salary_id_foreign` FOREIGN KEY (`salary_id`) REFERENCES `salaries` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `users_type_user_id_foreign` FOREIGN KEY (`type_user_id`) REFERENCES `type_users` (`id`);

--
-- Các ràng buộc cho bảng `user_contacts`
--
ALTER TABLE `user_contacts`
  ADD CONSTRAINT `user_contacts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
