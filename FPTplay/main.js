let danhSachPhim = [
  {
    id: 1,
    tenPhim: "Mưa đỏ",
    namPhatHanh: 2025,
    tuoi: "T16",
    thoiLuong: "2 giờ",
    quocGia: "Việt Nam",
    poster: "img/640x396-muado.jpg",
    theLoai: "Phim chiếu rạp",
  },
  {
    id: 2,
    tenPhim: "One Punch Man",
    namPhatHanh: 2023,
    tuoi: "T10",
    thoiLuong: "1.5 giờ",
    quocGia: "Nhật Bản",
    poster: "img/one-punch-man.png",
    theLoai: "Phim hoạt hình",
  },
];
let phimHienTai = danhSachPhim[0];

let banner = document.getElementById("banner");
let banner_infor = document.getElementsByClassName("banner-infor")[0];
function chonPhim(idPhim) {
  for (let i = 0; i < danhSachPhim.length; i++) {
    if (danhSachPhim[i].id == idPhim) {
      banner.src = danhSachPhim[i].poster;
      banner_infor.getElementsByTagName("h2")[0].textContent =
        danhSachPhim[i].tenPhim.toLocaleUpperCase();
      banner_infor.getElementsByTagName("p")[0].textContent =
        danhSachPhim[i].namPhatHanh;
      banner_infor.getElementsByTagName("p")[2].textContent =
        danhSachPhim[i].tuoi;
      banner_infor.getElementsByTagName("p")[4].textContent =
        danhSachPhim[i].quocGia;
    }
  }
}
