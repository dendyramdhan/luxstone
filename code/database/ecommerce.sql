/*
 Navicat Premium Data Transfer

 Source Server         : server_new
 Source Server Type    : MySQL
 Source Server Version : 50728
 Source Host           : 157.245.153.225:3306
 Source Schema         : ecommerce

 Target Server Type    : MySQL
 Target Server Version : 50728
 File Encoding         : 65001

 Date: 17/01/2020 15:29:05
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for banners
-- ----------------------------
DROP TABLE IF EXISTS `banners`;
CREATE TABLE `banners`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jenis` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for blogs
-- ----------------------------
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs`  (
  `blogid` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kilasan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `isi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `highlight` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `del_stat` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`blogid`) USING BTREE,
  UNIQUE INDEX `blogs_blogid_unique`(`blogid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for gmbr_produks
-- ----------------------------
DROP TABLE IF EXISTS `gmbr_produks`;
CREATE TABLE `gmbr_produks`  (
  `id_produk` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `gmbr_produks_id_produk_foreign`(`id_produk`) USING BTREE,
  CONSTRAINT `gmbr_produks_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produks` (`produkid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of gmbr_produks
-- ----------------------------
INSERT INTO `gmbr_produks` VALUES ('PRD00001', 'PRD00001_1.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00002', 'PRD00002_1.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00003', 'PRD00003_1.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00004', 'PRD00004_1.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00005', 'PRD00005_1.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00006', 'PRD00006_1.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00007', 'PRD00007_1.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00008', 'PRD00008_1.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00009', 'PRD00009_1.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00010', 'PRD00010_1.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00011', 'PRD00011_1.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00012', 'PRD00012_1.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00013', 'PRD00013_1.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00014', 'PRD00014_1.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00015', 'PRD00015_1.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00001', 'PRD00001_2.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00001', 'PRD00001_3.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00001', 'PRD00001_4.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00002', 'PRD00002_2.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00002', 'PRD00002_3.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00003', 'PRD00003_3.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00003', 'PRD00003_2.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00004', 'PRD00004_2.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00004', 'PRD00004_3.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00005', 'PRD00005_3.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00005', 'PRD00005_2.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00006', 'PRD00006_2.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00006', 'PRD00006_3.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00007', 'PRD00007_3.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00007', 'PRD00007_2.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00008', 'PRD00008_2.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00008', 'PRD00008_3.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00009', 'PRD00009_3.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00009', 'PRD00009_2.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00010', 'PRD00010_2.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00010', 'PRD00010_3.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00011', 'PRD00011_3.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00011', 'PRD00011_2.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00012', 'PRD00012_2.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00012', 'PRD00012_3.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00013', 'PRD00013_3.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00013', 'PRD00013_2.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00013', 'PRD00013_4.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00013', 'PRD00013_5.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00013', 'PRD00013_6.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00013', 'PRD00013_7.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00014', 'PRD00014_1.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00014', 'PRD00014_2.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00014', 'PRD00014_3.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00014', 'PRD00014_4.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00015', 'PRD00015_2.jpg', NULL, NULL);
INSERT INTO `gmbr_produks` VALUES ('PRD00015', 'PRD00015_3.jpg', NULL, NULL);

-- ----------------------------
-- Table structure for kat_produks
-- ----------------------------
DROP TABLE IF EXISTS `kat_produks`;
CREATE TABLE `kat_produks`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_kat_prd` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kat_produks
-- ----------------------------
INSERT INTO `kat_produks` VALUES (1, 'MARMER', '', NULL, NULL);

-- ----------------------------
-- Table structure for kontaks
-- ----------------------------
DROP TABLE IF EXISTS `kontaks`;
CREATE TABLE `kontaks`  (
  `kontakid` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile_1` varchar(13) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile_2` varchar(13) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`kontakid`) USING BTREE,
  UNIQUE INDEX `kontaks_kontakid_unique`(`kontakid`) USING BTREE,
  UNIQUE INDEX `kontaks_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for log_histories
-- ----------------------------
DROP TABLE IF EXISTS `log_histories`;
CREATE TABLE `log_histories`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `text_action` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for main_banners
-- ----------------------------
DROP TABLE IF EXISTS `main_banners`;
CREATE TABLE `main_banners`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_12_18_064940_create_main_banners_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_18_065025_create_banners_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_12_18_065154_create_blogs_table', 1);
INSERT INTO `migrations` VALUES (6, '2019_12_18_065214_create_produks_table', 1);
INSERT INTO `migrations` VALUES (7, '2019_12_18_065240_create_gmbr_produks_table', 1);
INSERT INTO `migrations` VALUES (8, '2019_12_18_071138_create_kat_produks_table', 1);
INSERT INTO `migrations` VALUES (9, '2019_12_18_092008_create_log_histories_table', 1);
INSERT INTO `migrations` VALUES (10, '2019_12_18_094448_create_kontaks_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE,
  INDEX `password_resets_token_index`(`token`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for produks
-- ----------------------------
DROP TABLE IF EXISTS `produks`;
CREATE TABLE `produks`  (
  `produkid` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nama_prd` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kat_prd` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `stok_satuan` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `warna` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `harga` int(11) NOT NULL,
  `sat_harga` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `del_stat` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`produkid`) USING BTREE,
  UNIQUE INDEX `produks_produkid_unique`(`produkid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of produks
-- ----------------------------
INSERT INTO `produks` VALUES ('PRD00001', 'Anaconda', '1', 65, 'M2', 'Coklat', NULL, 0, 'IDR', 0, '2020-01-09 17:08:03', '2020-01-09 17:08:03');
INSERT INTO `produks` VALUES ('PRD00002', 'DelGara', '1', 33, 'M2', 'Cream', NULL, 0, 'IDR', 0, '2020-01-09 17:08:03', '2020-01-09 17:08:03');
INSERT INTO `produks` VALUES ('PRD00003', 'Dinasty', '1', 40, 'M2', 'Beige', NULL, 0, 'IDR', 0, '2020-01-09 17:08:03', '2020-01-09 17:08:03');
INSERT INTO `produks` VALUES ('PRD00004', 'Helkinia', '1', 73, 'M2', 'Beige', NULL, 0, 'IDR', 0, '2020-01-09 17:08:03', '2020-01-09 17:08:03');
INSERT INTO `produks` VALUES ('PRD00005', 'Imperial', '1', 59, 'M2', 'Beige', NULL, 0, 'IDR', 0, '2020-01-09 17:08:03', '2020-01-09 17:08:03');
INSERT INTO `produks` VALUES ('PRD00006', 'Le Crema', '1', 33, 'M2', 'Beige', NULL, 0, 'IDR', 0, '2020-01-09 17:08:03', '2020-01-09 17:08:03');
INSERT INTO `produks` VALUES ('PRD00007', 'Medium tone', '1', 96, 'M2', 'Beige', NULL, 0, 'IDR', 0, '2020-01-09 17:08:03', '2020-01-09 17:08:03');
INSERT INTO `produks` VALUES ('PRD00008', 'OakWood', '1', 42, 'M2', 'Coklat', NULL, 0, 'IDR', 0, '2020-01-09 17:08:03', '2020-01-09 17:08:03');
INSERT INTO `produks` VALUES ('PRD00009', 'Red Colorado', '1', 57, 'M2', 'Red', NULL, 0, 'IDR', 0, '2020-01-09 17:08:03', '2020-01-09 17:08:03');
INSERT INTO `produks` VALUES ('PRD00010', 'Roso France', '1', 20, 'M2', 'Red', NULL, 0, 'IDR', 0, '2020-01-09 17:08:03', '2020-01-09 17:08:03');
INSERT INTO `produks` VALUES ('PRD00011', 'Royal Red', '1', 19, 'M2', 'Red', NULL, 0, 'IDR', 0, '2020-01-09 17:08:03', '2020-01-09 17:08:03');
INSERT INTO `produks` VALUES ('PRD00012', 'Selezoia', '1', 29, 'M2', 'Cream', NULL, 0, 'IDR', 0, '2020-01-09 17:08:03', '2020-01-09 17:08:03');
INSERT INTO `produks` VALUES ('PRD00013', 'Sivas Creamy', '1', 59, 'M2', 'Cream', NULL, 0, 'IDR', 0, '2020-01-09 17:08:03', '2020-01-09 17:08:03');
INSERT INTO `produks` VALUES ('PRD00014', 'Wood Flower', '1', 49, 'M2', 'Coklat', NULL, 0, 'IDR', 0, '2020-01-09 17:08:03', '2020-01-09 17:08:03');
INSERT INTO `produks` VALUES ('PRD00015', 'Wood Line', '1', 80, 'M2', 'Coklat', NULL, 0, 'IDR', 0, '2020-01-09 17:08:03', '2020-01-09 17:08:03');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `userid` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `level_user` enum('root','admin','blogger') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `del_stat` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`userid`) USING BTREE,
  UNIQUE INDEX `users_userid_unique`(`userid`) USING BTREE,
  UNIQUE INDEX `users_username_unique`(`username`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('USR00001', 'root_fgt', 'Root', 'it@fagetti.com', '$2y$10$7vbrFpjhN4XNM5OJg6vvRuDcCblk1ei6OC9WbvQLAxo/DINlEHFPy', 'root', NULL, 0, NULL, '2020-01-09 09:53:37', '2020-01-09 09:53:37');
INSERT INTO `users` VALUES ('USR00002', 'admin_fgt', 'Admin', 'admin@fagetti.com', '$2y$10$9flRqetRgbXGhalSqY0PteVWmJB.DK7h7KkWny.2o8gQFK4KQLP52', 'admin', NULL, 0, NULL, '2020-01-09 09:53:37', '2020-01-09 09:53:37');
INSERT INTO `users` VALUES ('USR00003', 'blogger_fgt', 'Blogger', 'blogger@fagetti.com', '$2y$10$r.YAsnLqN7aOeG1TkuqW9.sfcl1K5iCNBebU0d5gdMeS7NkhTSQZy', 'blogger', NULL, 0, NULL, '2020-01-09 09:53:38', '2020-01-09 09:53:38');

SET FOREIGN_KEY_CHECKS = 1;
