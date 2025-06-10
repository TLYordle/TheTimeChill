CREATE TABLE SinhVien(
	MaSV int PRIMARY KEY,
    HoTen varchar(25),
    DienThoai varchar(10),
    DiaChi varchar(20),
    Diem tinyint
);

INSERT INTO SinhVien (MaSV, HoTen, DienThoai, DiaChi, Diem) VALUES
(1, 'Nguyen Van A', '0123456789', 'Ha Noi', 8),
(2, 'Tran Thi B', '0987654321', 'Ho Chi Minh', 9),
(3, 'Le Van C', '0112233445', 'Da Nang', 7);