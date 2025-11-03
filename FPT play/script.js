let danhsachphim = [
    {
        id:1,
        tenphim:"Mua do",
        namPhatHanh:2025,
        tuoi:16,
        thoiLuong:2,
        quocGia:"Viet Nam",
        poster:URL("mua-do2-1122.jpeg"), // thêm nút trailer gắn link youtube
        
        theLoai:"phim chieu rap",
    },

    {
        id:2,
        tenphim:"Connan",
        namPhatHanh:2023,
        tuoi:16,
        thoiLuong:2,
        quocGia:"Nhat Ban",
        poster:"conan.jpg",
        theLoai:"phim hoat hinh",
    }
];
function chonphim(idPhim){
let phimHienTai = danhsachphim[0];
let banner = document.getElementsByClassName('banner')[0];
    for(let i =0; i <danhsachphim.length;i++){
        if(danhsachphim[i].id == idPhim){
            banner  = danhsachphim[i].poster;
        }
    }
}