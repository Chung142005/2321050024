let danhSachPhim = [
  {
    id: 1,
    tenPhim: "Mưa đỏ",
    namPhatHanh: 2025,
    tuoi: 16,
    thoiLuong: 2,
    quocGia: "Việt Nam",
    poster: "img/640x396-muado.jpg",
    theLoai: "Phim chiếu rạp",
  },
  {
    id: 2,
    tenPhim: "Connan",
    namPhatHanh: 2023,
    tuoi: 10,
    thoiLuong: 1.5,
    quocGia: "Nhật Bản",
    poster: "img/one-punch-man.png",
    theLoai: "Phim hoạt hình",
  },
];
let phimHienTai = danhSachPhim[0];

let banner = document.getElementsById("banner");

function chonPhim(idPhim) {
  for (let i = 0; i < danhSachPhim.length; i++) {
    if (danhSachPhim[i].id == idPhim) {
      banner.src = danhSachPhim[i].poster;
    }
  }
}
