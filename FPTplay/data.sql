-- 1. thể loại
--     - id int primary key
--     - ten_the_loai varchar(50)
-- 2. người dùng
--     - id int
--     - ten_dang_nhap varchar(50)
--     - matKhau varchar(50)
--     - ho_ten varchar(50)
--     - email varchar(50)
--     - sdt varchar(10)
--     - vai_tro_id int 
--     - ngay_sinh datetime
-- 3. vai_tro
--     - id int
--     - ten_vai_tro varchar(20)
-- 4. phim
--     - id int primary key
--     - ten_phim varchar
--     - dao_dien_id int
--     - nam_phat_hanh int
--     - poster varchar
--     - quoc_gia_id int
--     - so_tap int
--     - trailer varchar
--     - mo_ta text
-- 5. phim_dien_vien
--     - id int
--     - phim_id int
--     - dien_vien_id int
-- 6. phim_the_loai
--     - id int
--     - phim_id int
--     - the_loai_id int
-- 7. quốc gia
--     -id int
--     -ten_quoc_gia varchar
-- 5. Tập phim
--     - id int
--     - so_tap int
--     - tieu_de varchar
--     - phim_id int
--     - thoiLuong float 
--     - trailer varchar





CREATE DATABASE IF NOT EXISTS quan_ly_web_xem_phim
USE quan_ly_web_xem_phim

CREATE TABLE IF NOT EXISTS the_loai(
    id int PRIMARY KEY,
    ten_the_loai varchar(50)
    );
CREATE TABLE IF NOT EXISTS vai_tro(
    id int PRIMARY KEY,
	ten_vai_tro varchar(20)
    );
CREATE TABLE IF NOT EXISTS nguoi_dung(
    id int PRIMARY KEY,
    ten_dang_nhap varchar(50),
    matKhau varchar(50),
    ho_ten varchar(50),
	email varchar(50),
	sdt varchar(10),
	vai_tro_id int ,
	ngay_sinh datetime,
    FOREIGN KEY (vai_tro_id) REFERENCES vai_tro(id)
    );
CREATE TABLE IF NOT EXISTS phim_dien_vien(
	id int PRIMARY KEY,
	phim_id int,
	dien_vien_id int
    );
CREATE TABLE IF NOT EXISTS quoc_gia(
    id int PRIMARY KEY,
	ten_quoc_gia varchar(25)
    );
CREATE TABLE IF NOT EXISTS phim(
    id int primary key,
	ten_phim varchar(100),
	dao_dien_id int,
    dien_vien_id int,
	nam_phat_hanh int,
	poster varchar(200),
	quoc_gia_id int,
	so_tap int,
	trailer varchar(200),
	mo_ta text,
    FOREIGN KEY (quoc_gia_id) REFERENCES quoc_gia(id),
    FOREIGN KEY (dien_vien_id) REFERENCES phim_dien_vien(id)
    );

CREATE TABLE IF NOT EXISTS phim_the_loai(
    id int,
	phim_id int,
	the_loai_id int,
    FOREIGN KEY (the_loai_id) REFERENCES the_loai(id),
    FOREIGN KEY (phim_id) REFERENCES phim(id)
    );

CREATE TABLE IF NOT EXISTS tap_phim(
    id int,
	so_tap int,
	tieu_de varchar(200),
	phim_id int,
	thoiLuong float, 
	trailer varchar(200),
    FOREIGN KEY (phim_id) REFERENCES phim(id)
    );