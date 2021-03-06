<?php defined('BASEPATH') OR exit('No direct script access allowed');

class District_model extends CI_Model {

	public function district($id = null) 
	{
		$district = array(
	   " "     => "Chọn quận/huyện",
	   "Quận Ba Đình"=>"Quận Ba Đình",
"Quận Hoàn Kiếm"=>"Quận Hoàn Kiếm",
"Quận Tây Hồ"=>"Quận Tây Hồ",
"Quận Long Biên"=>"Quận Long Biên",
"Quận Cầu Giấy"=>"Quận Cầu Giấy",
"Quận Đống Đa"=>"Quận Đống Đa",
"Quận Hai Bà Trưng"=>"Quận Hai Bà Trưng",
"Quận Hoàng Mai"=>"Quận Hoàng Mai",
"Quận Thanh Xuân"=>"Quận Thanh Xuân",
"Huyện Sóc Sơn"=>"Huyện Sóc Sơn",
"Huyện Đông Anh"=>"Huyện Đông Anh",
"Huyện Gia Lâm"=>"Huyện Gia Lâm",
"Quận Nam Từ Liêm"=>"Quận Nam Từ Liêm",
"Huyện Thanh Trì"=>"Huyện Thanh Trì",
"Quận Bắc Từ Liêm"=>"Quận Bắc Từ Liêm",
"Huyện Mê Linh"=>"Huyện Mê Linh",
"Quận Hà Đông"=>"Quận Hà Đông",
"Thị xã Sơn Tây"=>"Thị xã Sơn Tây",
"Huyện Ba Vì"=>"Huyện Ba Vì",
"Huyện Phúc Thọ"=>"Huyện Phúc Thọ",
"Huyện Đan Phượng"=>"Huyện Đan Phượng",
"Huyện Hoài Đức"=>"Huyện Hoài Đức",
"Huyện Quốc Oai"=>"Huyện Quốc Oai",
"Huyện Thạch Thất"=>"Huyện Thạch Thất",
"Huyện Chương Mỹ"=>"Huyện Chương Mỹ",
"Huyện Thanh Oai"=>"Huyện Thanh Oai",
"Huyện Thường Tín"=>"Huyện Thường Tín",
"Huyện Phú Xuyên"=>"Huyện Phú Xuyên",
"Huyện Ứng Hòa"=>"Huyện Ứng Hòa",
"Huyện Mỹ Đức"=>"Huyện Mỹ Đức",
"Thành phố Hà Giang"=>"Thành phố Hà Giang",
"Huyện Đồng Văn"=>"Huyện Đồng Văn",
"Huyện Mèo Vạc"=>"Huyện Mèo Vạc",
"Huyện Yên Minh"=>"Huyện Yên Minh",
"Huyện Quản Bạ"=>"Huyện Quản Bạ",
"Huyện Vị Xuyên"=>"Huyện Vị Xuyên",
"Huyện Bắc Mê"=>"Huyện Bắc Mê",
"Huyện Hoàng Su Phì"=>"Huyện Hoàng Su Phì",
"Huyện Xín Mần"=>"Huyện Xín Mần",
"Huyện Bắc Quang"=>"Huyện Bắc Quang",
"Huyện Quang Bình"=>"Huyện Quang Bình",
"Thành phố Cao Bằng"=>"Thành phố Cao Bằng",
"Huyện Bảo Lâm"=>"Huyện Bảo Lâm",
"Huyện Bảo Lạc"=>"Huyện Bảo Lạc",
"Huyện Hà Quảng"=>"Huyện Hà Quảng",
"Huyện Trùng Khánh"=>"Huyện Trùng Khánh",
"Huyện Hạ Lang"=>"Huyện Hạ Lang",
"Huyện Quảng Hòa"=>"Huyện Quảng Hòa",
"Huyện Hoà An"=>"Huyện Hoà An",
"Huyện Nguyên Bình"=>"Huyện Nguyên Bình",
"Huyện Thạch An"=>"Huyện Thạch An",
"Thành Phố Bắc Kạn"=>"Thành Phố Bắc Kạn",
"Huyện Pác Nặm"=>"Huyện Pác Nặm",
"Huyện Ba Bể"=>"Huyện Ba Bể",
"Huyện Ngân Sơn"=>"Huyện Ngân Sơn",
"Huyện Bạch Thông"=>"Huyện Bạch Thông",
"Huyện Chợ Đồn"=>"Huyện Chợ Đồn",
"Huyện Chợ Mới"=>"Huyện Chợ Mới",
"Huyện Na Rì"=>"Huyện Na Rì",
"Thành phố Tuyên Quang"=>"Thành phố Tuyên Quang",
"Huyện Lâm Bình"=>"Huyện Lâm Bình",
"Huyện Na Hang"=>"Huyện Na Hang",
"Huyện Chiêm Hóa"=>"Huyện Chiêm Hóa",
"Huyện Hàm Yên"=>"Huyện Hàm Yên",
"Huyện Yên Sơn"=>"Huyện Yên Sơn",
"Huyện Sơn Dương"=>"Huyện Sơn Dương",
"Thành phố Lào Cai"=>"Thành phố Lào Cai",
"Huyện Bát Xát"=>"Huyện Bát Xát",
"Huyện Mường Khương"=>"Huyện Mường Khương",
"Huyện Si Ma Cai"=>"Huyện Si Ma Cai",
"Huyện Bắc Hà"=>"Huyện Bắc Hà",
"Huyện Bảo Thắng"=>"Huyện Bảo Thắng",
"Huyện Bảo Yên"=>"Huyện Bảo Yên",
"Thị xã Sa Pa"=>"Thị xã Sa Pa",
"Huyện Văn Bàn"=>"Huyện Văn Bàn",
"Thành phố Điện Biên Phủ"=>"Thành phố Điện Biên Phủ",
"Thị Xã Mường Lay"=>"Thị Xã Mường Lay",
"Huyện Mường Nhé"=>"Huyện Mường Nhé",
"Huyện Mường Chà"=>"Huyện Mường Chà",
"Huyện Tủa Chùa"=>"Huyện Tủa Chùa",
"Huyện Tuần Giáo"=>"Huyện Tuần Giáo",
"Huyện Điện Biên"=>"Huyện Điện Biên",
"Huyện Điện Biên Đông"=>"Huyện Điện Biên Đông",
"Huyện Mường Ảng"=>"Huyện Mường Ảng",
"Huyện Nậm Pồ"=>"Huyện Nậm Pồ",
"Thành phố Lai Châu"=>"Thành phố Lai Châu",
"Huyện Tam Đường"=>"Huyện Tam Đường",
"Huyện Mường Tè"=>"Huyện Mường Tè",
"Huyện Sìn Hồ"=>"Huyện Sìn Hồ",
"Huyện Phong Thổ"=>"Huyện Phong Thổ",
"Huyện Than Uyên"=>"Huyện Than Uyên",
"Huyện Tân Uyên"=>"Huyện Tân Uyên",
"Huyện Nậm Nhùn"=>"Huyện Nậm Nhùn",
"Thành phố Sơn La"=>"Thành phố Sơn La",
"Huyện Quỳnh Nhai"=>"Huyện Quỳnh Nhai",
"Huyện Thuận Châu"=>"Huyện Thuận Châu",
"Huyện Mường La"=>"Huyện Mường La",
"Huyện Bắc Yên"=>"Huyện Bắc Yên",
"Huyện Phù Yên"=>"Huyện Phù Yên",
"Huyện Mộc Châu"=>"Huyện Mộc Châu",
"Huyện Yên Châu"=>"Huyện Yên Châu",
"Huyện Mai Sơn"=>"Huyện Mai Sơn",
"Huyện Sông Mã"=>"Huyện Sông Mã",
"Huyện Sốp Cộp"=>"Huyện Sốp Cộp",
"Huyện Vân Hồ"=>"Huyện Vân Hồ",
"Thành phố Yên Bái"=>"Thành phố Yên Bái",
"Thị xã Nghĩa Lộ"=>"Thị xã Nghĩa Lộ",
"Huyện Lục Yên"=>"Huyện Lục Yên",
"Huyện Văn Yên"=>"Huyện Văn Yên",
"Huyện Mù Căng Chải"=>"Huyện Mù Căng Chải",
"Huyện Trấn Yên"=>"Huyện Trấn Yên",
"Huyện Trạm Tấu"=>"Huyện Trạm Tấu",
"Huyện Văn Chấn"=>"Huyện Văn Chấn",
"Huyện Yên Bình"=>"Huyện Yên Bình",
"Thành phố Hòa Bình"=>"Thành phố Hòa Bình",
"Huyện Đà Bắc"=>"Huyện Đà Bắc",
"Huyện Lương Sơn"=>"Huyện Lương Sơn",
"Huyện Kim Bôi"=>"Huyện Kim Bôi",
"Huyện Cao Phong"=>"Huyện Cao Phong",
"Huyện Tân Lạc"=>"Huyện Tân Lạc",
"Huyện Mai Châu"=>"Huyện Mai Châu",
"Huyện Lạc Sơn"=>"Huyện Lạc Sơn",
"Huyện Yên Thủy"=>"Huyện Yên Thủy",
"Huyện Lạc Thủy"=>"Huyện Lạc Thủy",
"Thành phố Thái Nguyên"=>"Thành phố Thái Nguyên",
"Thành phố Sông Công"=>"Thành phố Sông Công",
"Huyện Định Hóa"=>"Huyện Định Hóa",
"Huyện Phú Lương"=>"Huyện Phú Lương",
"Huyện Đồng Hỷ"=>"Huyện Đồng Hỷ",
"Huyện Võ Nhai"=>"Huyện Võ Nhai",
"Huyện Đại Từ"=>"Huyện Đại Từ",
"Thị xã Phổ Yên"=>"Thị xã Phổ Yên",
"Huyện Phú Bình"=>"Huyện Phú Bình",
"Thành phố Lạng Sơn"=>"Thành phố Lạng Sơn",
"Huyện Tràng Định"=>"Huyện Tràng Định",
"Huyện Bình Gia"=>"Huyện Bình Gia",
"Huyện Văn Lãng"=>"Huyện Văn Lãng",
"Huyện Cao Lộc"=>"Huyện Cao Lộc",
"Huyện Văn Quan"=>"Huyện Văn Quan",
"Huyện Bắc Sơn"=>"Huyện Bắc Sơn",
"Huyện Hữu Lũng"=>"Huyện Hữu Lũng",
"Huyện Chi Lăng"=>"Huyện Chi Lăng",
"Huyện Lộc Bình"=>"Huyện Lộc Bình",
"Huyện Đình Lập"=>"Huyện Đình Lập",
"Thành phố Hạ Long"=>"Thành phố Hạ Long",
"Thành phố Móng Cái"=>"Thành phố Móng Cái",
"Thành phố Cẩm Phả"=>"Thành phố Cẩm Phả",
"Thành phố Uông Bí"=>"Thành phố Uông Bí",
"Huyện Bình Liêu"=>"Huyện Bình Liêu",
"Huyện Tiên Yên"=>"Huyện Tiên Yên",
"Huyện Đầm Hà"=>"Huyện Đầm Hà",
"Huyện Hải Hà"=>"Huyện Hải Hà",
"Huyện Ba Chẽ"=>"Huyện Ba Chẽ",
"Huyện Vân Đồn"=>"Huyện Vân Đồn",
"Thị xã Đông Triều"=>"Thị xã Đông Triều",
"Thị xã Quảng Yên"=>"Thị xã Quảng Yên",
"Huyện Cô Tô"=>"Huyện Cô Tô",
"Thành phố Bắc Giang"=>"Thành phố Bắc Giang",
"Huyện Yên Thế"=>"Huyện Yên Thế",
"Huyện Tân Yên"=>"Huyện Tân Yên",
"Huyện Lạng Giang"=>"Huyện Lạng Giang",
"Huyện Lục Nam"=>"Huyện Lục Nam",
"Huyện Lục Ngạn"=>"Huyện Lục Ngạn",
"Huyện Sơn Động"=>"Huyện Sơn Động",
"Huyện Yên Dũng"=>"Huyện Yên Dũng",
"Huyện Việt Yên"=>"Huyện Việt Yên",
"Huyện Hiệp Hòa"=>"Huyện Hiệp Hòa",
"Thành phố Việt Trì"=>"Thành phố Việt Trì",
"Thị xã Phú Thọ"=>"Thị xã Phú Thọ",
"Huyện Đoan Hùng"=>"Huyện Đoan Hùng",
"Huyện Hạ Hoà"=>"Huyện Hạ Hoà",
"Huyện Thanh Ba"=>"Huyện Thanh Ba",
"Huyện Phù Ninh"=>"Huyện Phù Ninh",
"Huyện Yên Lập"=>"Huyện Yên Lập",
"Huyện Cẩm Khê"=>"Huyện Cẩm Khê",
"Huyện Tam Nông"=>"Huyện Tam Nông",
"Huyện Lâm Thao"=>"Huyện Lâm Thao",
"Huyện Thanh Sơn"=>"Huyện Thanh Sơn",
"Huyện Thanh Thuỷ"=>"Huyện Thanh Thuỷ",
"Huyện Tân Sơn"=>"Huyện Tân Sơn",
"Thành phố Vĩnh Yên"=>"Thành phố Vĩnh Yên",
"Thành phố Phúc Yên"=>"Thành phố Phúc Yên",
"Huyện Lập Thạch"=>"Huyện Lập Thạch",
"Huyện Tam Dương"=>"Huyện Tam Dương",
"Huyện Tam Đảo"=>"Huyện Tam Đảo",
"Huyện Bình Xuyên"=>"Huyện Bình Xuyên",
"Huyện Yên Lạc"=>"Huyện Yên Lạc",
"Huyện Vĩnh Tường"=>"Huyện Vĩnh Tường",
"Huyện Sông Lô"=>"Huyện Sông Lô",
"Thành phố Bắc Ninh"=>"Thành phố Bắc Ninh",
"Huyện Yên Phong"=>"Huyện Yên Phong",
"Huyện Quế Võ"=>"Huyện Quế Võ",
"Huyện Tiên Du"=>"Huyện Tiên Du",
"Thị xã Từ Sơn"=>"Thị xã Từ Sơn",
"Huyện Thuận Thành"=>"Huyện Thuận Thành",
"Huyện Gia Bình"=>"Huyện Gia Bình",
"Huyện Lương Tài"=>"Huyện Lương Tài",
"Thành phố Hải Dương"=>"Thành phố Hải Dương",
"Thành phố Chí Linh"=>"Thành phố Chí Linh",
"Huyện Nam Sách"=>"Huyện Nam Sách",
"Thị xã Kinh Môn"=>"Thị xã Kinh Môn",
"Huyện Kim Thành"=>"Huyện Kim Thành",
"Huyện Thanh Hà"=>"Huyện Thanh Hà",
"Huyện Cẩm Giàng"=>"Huyện Cẩm Giàng",
"Huyện Bình Giang"=>"Huyện Bình Giang",
"Huyện Gia Lộc"=>"Huyện Gia Lộc",
"Huyện Tứ Kỳ"=>"Huyện Tứ Kỳ",
"Huyện Ninh Giang"=>"Huyện Ninh Giang",
"Huyện Thanh Miện"=>"Huyện Thanh Miện",
"Quận Hồng Bàng"=>"Quận Hồng Bàng",
"Quận Ngô Quyền"=>"Quận Ngô Quyền",
"Quận Lê Chân"=>"Quận Lê Chân",
"Quận Hải An"=>"Quận Hải An",
"Quận Kiến An"=>"Quận Kiến An",
"Quận Đồ Sơn"=>"Quận Đồ Sơn",
"Quận Dương Kinh"=>"Quận Dương Kinh",
"Huyện Thuỷ Nguyên"=>"Huyện Thuỷ Nguyên",
"Huyện An Dương"=>"Huyện An Dương",
"Huyện An Lão"=>"Huyện An Lão",
"Huyện Kiến Thuỵ"=>"Huyện Kiến Thuỵ",
"Huyện Tiên Lãng"=>"Huyện Tiên Lãng",
"Huyện Vĩnh Bảo"=>"Huyện Vĩnh Bảo",
"Huyện Cát Hải"=>"Huyện Cát Hải",
"Huyện Bạch Long Vĩ"=>"Huyện Bạch Long Vĩ",
"Thành phố Hưng Yên"=>"Thành phố Hưng Yên",
"Huyện Văn Lâm"=>"Huyện Văn Lâm",
"Huyện Văn Giang"=>"Huyện Văn Giang",
"Huyện Yên Mỹ"=>"Huyện Yên Mỹ",
"Thị xã Mỹ Hào"=>"Thị xã Mỹ Hào",
"Huyện Ân Thi"=>"Huyện Ân Thi",
"Huyện Khoái Châu"=>"Huyện Khoái Châu",
"Huyện Kim Động"=>"Huyện Kim Động",
"Huyện Tiên Lữ"=>"Huyện Tiên Lữ",
"Huyện Phù Cừ"=>"Huyện Phù Cừ",
"Thành phố Thái Bình"=>"Thành phố Thái Bình",
"Huyện Quỳnh Phụ"=>"Huyện Quỳnh Phụ",
"Huyện Hưng Hà"=>"Huyện Hưng Hà",
"Huyện Đông Hưng"=>"Huyện Đông Hưng",
"Huyện Thái Thụy"=>"Huyện Thái Thụy",
"Huyện Tiền Hải"=>"Huyện Tiền Hải",
"Huyện Kiến Xương"=>"Huyện Kiến Xương",
"Huyện Vũ Thư"=>"Huyện Vũ Thư",
"Thành phố Phủ Lý"=>"Thành phố Phủ Lý",
"Thị xã Duy Tiên"=>"Thị xã Duy Tiên",
"Huyện Kim Bảng"=>"Huyện Kim Bảng",
"Huyện Thanh Liêm"=>"Huyện Thanh Liêm",
"Huyện Bình Lục"=>"Huyện Bình Lục",
"Huyện Lý Nhân"=>"Huyện Lý Nhân",
"Thành phố Nam Định"=>"Thành phố Nam Định",
"Huyện Mỹ Lộc"=>"Huyện Mỹ Lộc",
"Huyện Vụ Bản"=>"Huyện Vụ Bản",
"Huyện Ý Yên"=>"Huyện Ý Yên",
"Huyện Nghĩa Hưng"=>"Huyện Nghĩa Hưng",
"Huyện Nam Trực"=>"Huyện Nam Trực",
"Huyện Trực Ninh"=>"Huyện Trực Ninh",
"Huyện Xuân Trường"=>"Huyện Xuân Trường",
"Huyện Giao Thủy"=>"Huyện Giao Thủy",
"Huyện Hải Hậu"=>"Huyện Hải Hậu",
"Thành phố Ninh Bình"=>"Thành phố Ninh Bình",
"Thành phố Tam Điệp"=>"Thành phố Tam Điệp",
"Huyện Nho Quan"=>"Huyện Nho Quan",
"Huyện Gia Viễn"=>"Huyện Gia Viễn",
"Huyện Hoa Lư"=>"Huyện Hoa Lư",
"Huyện Yên Khánh"=>"Huyện Yên Khánh",
"Huyện Kim Sơn"=>"Huyện Kim Sơn",
"Huyện Yên Mô"=>"Huyện Yên Mô",
"Thành phố Thanh Hóa"=>"Thành phố Thanh Hóa",
"Thị xã Bỉm Sơn"=>"Thị xã Bỉm Sơn",
"Thành phố Sầm Sơn"=>"Thành phố Sầm Sơn",
"Huyện Mường Lát"=>"Huyện Mường Lát",
"Huyện Quan Hóa"=>"Huyện Quan Hóa",
"Huyện Bá Thước"=>"Huyện Bá Thước",
"Huyện Quan Sơn"=>"Huyện Quan Sơn",
"Huyện Lang Chánh"=>"Huyện Lang Chánh",
"Huyện Ngọc Lặc"=>"Huyện Ngọc Lặc",
"Huyện Cẩm Thủy"=>"Huyện Cẩm Thủy",
"Huyện Thạch Thành"=>"Huyện Thạch Thành",
"Huyện Hà Trung"=>"Huyện Hà Trung",
"Huyện Vĩnh Lộc"=>"Huyện Vĩnh Lộc",
"Huyện Yên Định"=>"Huyện Yên Định",
"Huyện Thọ Xuân"=>"Huyện Thọ Xuân",
"Huyện Thường Xuân"=>"Huyện Thường Xuân",
"Huyện Triệu Sơn"=>"Huyện Triệu Sơn",
"Huyện Thiệu Hóa"=>"Huyện Thiệu Hóa",
"Huyện Hoằng Hóa"=>"Huyện Hoằng Hóa",
"Huyện Hậu Lộc"=>"Huyện Hậu Lộc",
"Huyện Nga Sơn"=>"Huyện Nga Sơn",
"Huyện Như Xuân"=>"Huyện Như Xuân",
"Huyện Như Thanh"=>"Huyện Như Thanh",
"Huyện Nông Cống"=>"Huyện Nông Cống",
"Huyện Đông Sơn"=>"Huyện Đông Sơn",
"Huyện Quảng Xương"=>"Huyện Quảng Xương",
"Thị xã Nghi Sơn"=>"Thị xã Nghi Sơn",
"Thành phố Vinh"=>"Thành phố Vinh",
"Thị xã Cửa Lò"=>"Thị xã Cửa Lò",
"Thị xã Thái Hoà"=>"Thị xã Thái Hoà",
"Huyện Quế Phong"=>"Huyện Quế Phong",
"Huyện Quỳ Châu"=>"Huyện Quỳ Châu",
"Huyện Kỳ Sơn"=>"Huyện Kỳ Sơn",
"Huyện Tương Dương"=>"Huyện Tương Dương",
"Huyện Nghĩa Đàn"=>"Huyện Nghĩa Đàn",
"Huyện Quỳ Hợp"=>"Huyện Quỳ Hợp",
"Huyện Quỳnh Lưu"=>"Huyện Quỳnh Lưu",
"Huyện Con Cuông"=>"Huyện Con Cuông",
"Huyện Tân Kỳ"=>"Huyện Tân Kỳ",
"Huyện Anh Sơn"=>"Huyện Anh Sơn",
"Huyện Diễn Châu"=>"Huyện Diễn Châu",
"Huyện Yên Thành"=>"Huyện Yên Thành",
"Huyện Đô Lương"=>"Huyện Đô Lương",
"Huyện Thanh Chương"=>"Huyện Thanh Chương",
"Huyện Nghi Lộc"=>"Huyện Nghi Lộc",
"Huyện Nam Đàn"=>"Huyện Nam Đàn",
"Huyện Hưng Nguyên"=>"Huyện Hưng Nguyên",
"Thị xã Hoàng Mai"=>"Thị xã Hoàng Mai",
"Thành phố Hà Tĩnh"=>"Thành phố Hà Tĩnh",
"Thị xã Hồng Lĩnh"=>"Thị xã Hồng Lĩnh",
"Huyện Hương Sơn"=>"Huyện Hương Sơn",
"Huyện Đức Thọ"=>"Huyện Đức Thọ",
"Huyện Vũ Quang"=>"Huyện Vũ Quang",
"Huyện Nghi Xuân"=>"Huyện Nghi Xuân",
"Huyện Can Lộc"=>"Huyện Can Lộc",
"Huyện Hương Khê"=>"Huyện Hương Khê",
"Huyện Thạch Hà"=>"Huyện Thạch Hà",
"Huyện Cẩm Xuyên"=>"Huyện Cẩm Xuyên",
"Huyện Kỳ Anh"=>"Huyện Kỳ Anh",
"Huyện Lộc Hà"=>"Huyện Lộc Hà",
"Thị xã Kỳ Anh"=>"Thị xã Kỳ Anh",
"Thành Phố Đồng Hới"=>"Thành Phố Đồng Hới",
"Huyện Minh Hóa"=>"Huyện Minh Hóa",
"Huyện Tuyên Hóa"=>"Huyện Tuyên Hóa",
"Huyện Quảng Trạch"=>"Huyện Quảng Trạch",
"Huyện Bố Trạch"=>"Huyện Bố Trạch",
"Huyện Quảng Ninh"=>"Huyện Quảng Ninh",
"Huyện Lệ Thủy"=>"Huyện Lệ Thủy",
"Thị xã Ba Đồn"=>"Thị xã Ba Đồn",
"Thành phố Đông Hà"=>"Thành phố Đông Hà",
"Thị xã Quảng Trị"=>"Thị xã Quảng Trị",
"Huyện Vĩnh Linh"=>"Huyện Vĩnh Linh",
"Huyện Hướng Hóa"=>"Huyện Hướng Hóa",
"Huyện Gio Linh"=>"Huyện Gio Linh",
"Huyện Đa Krông"=>"Huyện Đa Krông",
"Huyện Cam Lộ"=>"Huyện Cam Lộ",
"Huyện Triệu Phong"=>"Huyện Triệu Phong",
"Huyện Hải Lăng"=>"Huyện Hải Lăng",
"Huyện Cồn Cỏ"=>"Huyện Cồn Cỏ",
"Thành phố Huế"=>"Thành phố Huế",
"Huyện Phong Điền"=>"Huyện Phong Điền",
"Huyện Quảng Điền"=>"Huyện Quảng Điền",
"Huyện Phú Vang"=>"Huyện Phú Vang",
"Thị xã Hương Thủy"=>"Thị xã Hương Thủy",
"Thị xã Hương Trà"=>"Thị xã Hương Trà",
"Huyện A Lưới"=>"Huyện A Lưới",
"Huyện Phú Lộc"=>"Huyện Phú Lộc",
"Huyện Nam Đông"=>"Huyện Nam Đông",
"Quận Liên Chiểu"=>"Quận Liên Chiểu",
"Quận Thanh Khê"=>"Quận Thanh Khê",
"Quận Hải Châu"=>"Quận Hải Châu",
"Quận Sơn Trà"=>"Quận Sơn Trà",
"Quận Ngũ Hành Sơn"=>"Quận Ngũ Hành Sơn",
"Quận Cẩm Lệ"=>"Quận Cẩm Lệ",
"Huyện Hòa Vang"=>"Huyện Hòa Vang",
"Huyện Hoàng Sa"=>"Huyện Hoàng Sa",
"Thành phố Tam Kỳ"=>"Thành phố Tam Kỳ",
"Thành phố Hội An"=>"Thành phố Hội An",
"Huyện Tây Giang"=>"Huyện Tây Giang",
"Huyện Đông Giang"=>"Huyện Đông Giang",
"Huyện Đại Lộc"=>"Huyện Đại Lộc",
"Thị xã Điện Bàn"=>"Thị xã Điện Bàn",
"Huyện Duy Xuyên"=>"Huyện Duy Xuyên",
"Huyện Quế Sơn"=>"Huyện Quế Sơn",
"Huyện Nam Giang"=>"Huyện Nam Giang",
"Huyện Phước Sơn"=>"Huyện Phước Sơn",
"Huyện Hiệp Đức"=>"Huyện Hiệp Đức",
"Huyện Thăng Bình"=>"Huyện Thăng Bình",
"Huyện Tiên Phước"=>"Huyện Tiên Phước",
"Huyện Bắc Trà My"=>"Huyện Bắc Trà My",
"Huyện Nam Trà My"=>"Huyện Nam Trà My",
"Huyện Núi Thành"=>"Huyện Núi Thành",
"Huyện Phú Ninh"=>"Huyện Phú Ninh",
"Huyện Nông Sơn"=>"Huyện Nông Sơn",
"Thành phố Quảng Ngãi"=>"Thành phố Quảng Ngãi",
"Huyện Bình Sơn"=>"Huyện Bình Sơn",
"Huyện Trà Bồng"=>"Huyện Trà Bồng",
"Huyện Sơn Tịnh"=>"Huyện Sơn Tịnh",
"Huyện Tư Nghĩa"=>"Huyện Tư Nghĩa",
"Huyện Sơn Hà"=>"Huyện Sơn Hà",
"Huyện Sơn Tây"=>"Huyện Sơn Tây",
"Huyện Minh Long"=>"Huyện Minh Long",
"Huyện Nghĩa Hành"=>"Huyện Nghĩa Hành",
"Huyện Mộ Đức"=>"Huyện Mộ Đức",
"Thị xã Đức Phổ"=>"Thị xã Đức Phổ",
"Huyện Ba Tơ"=>"Huyện Ba Tơ",
"Huyện Lý Sơn"=>"Huyện Lý Sơn",
"Thành phố Quy Nhơn"=>"Thành phố Quy Nhơn",
"Thị xã Hoài Nhơn"=>"Thị xã Hoài Nhơn",
"Huyện Hoài Ân"=>"Huyện Hoài Ân",
"Huyện Phù Mỹ"=>"Huyện Phù Mỹ",
"Huyện Vĩnh Thạnh"=>"Huyện Vĩnh Thạnh",
"Huyện Tây Sơn"=>"Huyện Tây Sơn",
"Huyện Phù Cát"=>"Huyện Phù Cát",
"Thị xã An Nhơn"=>"Thị xã An Nhơn",
"Huyện Tuy Phước"=>"Huyện Tuy Phước",
"Huyện Vân Canh"=>"Huyện Vân Canh",
"Thành phố Tuy Hoà"=>"Thành phố Tuy Hoà",
"Thị xã Sông Cầu"=>"Thị xã Sông Cầu",
"Huyện Đồng Xuân"=>"Huyện Đồng Xuân",
"Huyện Tuy An"=>"Huyện Tuy An",
"Huyện Sơn Hòa"=>"Huyện Sơn Hòa",
"Huyện Sông Hinh"=>"Huyện Sông Hinh",
"Huyện Tây Hoà"=>"Huyện Tây Hoà",
"Huyện Phú Hoà"=>"Huyện Phú Hoà",
"Thị xã Đông Hòa"=>"Thị xã Đông Hòa",
"Thành phố Nha Trang"=>"Thành phố Nha Trang",
"Thành phố Cam Ranh"=>"Thành phố Cam Ranh",
"Huyện Cam Lâm"=>"Huyện Cam Lâm",
"Huyện Vạn Ninh"=>"Huyện Vạn Ninh",
"Thị xã Ninh Hòa"=>"Thị xã Ninh Hòa",
"Huyện Khánh Vĩnh"=>"Huyện Khánh Vĩnh",
"Huyện Diên Khánh"=>"Huyện Diên Khánh",
"Huyện Khánh Sơn"=>"Huyện Khánh Sơn",
"Huyện Trường Sa"=>"Huyện Trường Sa",
"Thành phố Phan Rang-Tháp Chàm"=>"Thành phố Phan Rang-Tháp Chàm",
"Huyện Bác Ái"=>"Huyện Bác Ái",
"Huyện Ninh Sơn"=>"Huyện Ninh Sơn",
"Huyện Ninh Hải"=>"Huyện Ninh Hải",
"Huyện Ninh Phước"=>"Huyện Ninh Phước",
"Huyện Thuận Bắc"=>"Huyện Thuận Bắc",
"Huyện Thuận Nam"=>"Huyện Thuận Nam",
"Thành phố Phan Thiết"=>"Thành phố Phan Thiết",
"Thị xã La Gi"=>"Thị xã La Gi",
"Huyện Tuy Phong"=>"Huyện Tuy Phong",
"Huyện Bắc Bình"=>"Huyện Bắc Bình",
"Huyện Hàm Thuận Bắc"=>"Huyện Hàm Thuận Bắc",
"Huyện Hàm Thuận Nam"=>"Huyện Hàm Thuận Nam",
"Huyện Tánh Linh"=>"Huyện Tánh Linh",
"Huyện Đức Linh"=>"Huyện Đức Linh",
"Huyện Hàm Tân"=>"Huyện Hàm Tân",
"Huyện Phú Quí"=>"Huyện Phú Quí",
"Thành phố Kon Tum"=>"Thành phố Kon Tum",
"Huyện Đắk Glei"=>"Huyện Đắk Glei",
"Huyện Ngọc Hồi"=>"Huyện Ngọc Hồi",
"Huyện Đắk Tô"=>"Huyện Đắk Tô",
"Huyện Kon Plông"=>"Huyện Kon Plông",
"Huyện Kon Rẫy"=>"Huyện Kon Rẫy",
"Huyện Đắk Hà"=>"Huyện Đắk Hà",
"Huyện Sa Thầy"=>"Huyện Sa Thầy",
"Huyện Tu Mơ Rông"=>"Huyện Tu Mơ Rông",
"Huyện Ia H' Drai"=>"Huyện Ia H' Drai",
"Thành phố Pleiku"=>"Thành phố Pleiku",
"Thị xã An Khê"=>"Thị xã An Khê",
"Thị xã Ayun Pa"=>"Thị xã Ayun Pa",
"Huyện KBang"=>"Huyện KBang",
"Huyện Đăk Đoa"=>"Huyện Đăk Đoa",
"Huyện Chư Păh"=>"Huyện Chư Păh",
"Huyện Ia Grai"=>"Huyện Ia Grai",
"Huyện Mang Yang"=>"Huyện Mang Yang",
"Huyện Kông Chro"=>"Huyện Kông Chro",
"Huyện Đức Cơ"=>"Huyện Đức Cơ",
"Huyện Chư Prông"=>"Huyện Chư Prông",
"Huyện Chư Sê"=>"Huyện Chư Sê",
"Huyện Đăk Pơ"=>"Huyện Đăk Pơ",
"Huyện Ia Pa"=>"Huyện Ia Pa",
"Huyện Krông Pa"=>"Huyện Krông Pa",
"Huyện Phú Thiện"=>"Huyện Phú Thiện",
"Huyện Chư Pưh"=>"Huyện Chư Pưh",
"Thành phố Buôn Ma Thuột"=>"Thành phố Buôn Ma Thuột",
"Thị Xã Buôn Hồ"=>"Thị Xã Buôn Hồ",
"Huyện Ea H'leo"=>"Huyện Ea H'leo",
"Huyện Ea Súp"=>"Huyện Ea Súp",
"Huyện Buôn Đôn"=>"Huyện Buôn Đôn",
"Huyện Cư M'gar"=>"Huyện Cư M'gar",
"Huyện Krông Búk"=>"Huyện Krông Búk",
"Huyện Krông Năng"=>"Huyện Krông Năng",
"Huyện Ea Kar"=>"Huyện Ea Kar",
"Huyện M'Đrắk"=>"Huyện M'Đrắk",
"Huyện Krông Bông"=>"Huyện Krông Bông",
"Huyện Krông Pắc"=>"Huyện Krông Pắc",
"Huyện Krông A Na"=>"Huyện Krông A Na",
"Huyện Lắk"=>"Huyện Lắk",
"Huyện Cư Kuin"=>"Huyện Cư Kuin",
"Thành phố Gia Nghĩa"=>"Thành phố Gia Nghĩa",
"Huyện Đăk Glong"=>"Huyện Đăk Glong",
"Huyện Cư Jút"=>"Huyện Cư Jút",
"Huyện Đắk Mil"=>"Huyện Đắk Mil",
"Huyện Krông Nô"=>"Huyện Krông Nô",
"Huyện Đắk Song"=>"Huyện Đắk Song",
"Huyện Đắk R'Lấp"=>"Huyện Đắk R'Lấp",
"Huyện Tuy Đức"=>"Huyện Tuy Đức",
"Thành phố Đà Lạt"=>"Thành phố Đà Lạt",
"Thành phố Bảo Lộc"=>"Thành phố Bảo Lộc",
"Huyện Đam Rông"=>"Huyện Đam Rông",
"Huyện Lạc Dương"=>"Huyện Lạc Dương",
"Huyện Lâm Hà"=>"Huyện Lâm Hà",
"Huyện Đơn Dương"=>"Huyện Đơn Dương",
"Huyện Đức Trọng"=>"Huyện Đức Trọng",
"Huyện Di Linh"=>"Huyện Di Linh",
"Huyện Đạ Huoai"=>"Huyện Đạ Huoai",
"Huyện Đạ Tẻh"=>"Huyện Đạ Tẻh",
"Huyện Cát Tiên"=>"Huyện Cát Tiên",
"Thị xã Phước Long"=>"Thị xã Phước Long",
"Thành phố Đồng Xoài"=>"Thành phố Đồng Xoài",
"Thị xã Bình Long"=>"Thị xã Bình Long",
"Huyện Bù Gia Mập"=>"Huyện Bù Gia Mập",
"Huyện Lộc Ninh"=>"Huyện Lộc Ninh",
"Huyện Bù Đốp"=>"Huyện Bù Đốp",
"Huyện Hớn Quản"=>"Huyện Hớn Quản",
"Huyện Đồng Phú"=>"Huyện Đồng Phú",
"Huyện Bù Đăng"=>"Huyện Bù Đăng",
"Huyện Chơn Thành"=>"Huyện Chơn Thành",
"Huyện Phú Riềng"=>"Huyện Phú Riềng",
"Thành phố Tây Ninh"=>"Thành phố Tây Ninh",
"Huyện Tân Biên"=>"Huyện Tân Biên",
"Huyện Tân Châu"=>"Huyện Tân Châu",
"Huyện Dương Minh Châu"=>"Huyện Dương Minh Châu",
"Huyện Châu Thành"=>"Huyện Châu Thành",
"Thị xã Hòa Thành"=>"Thị xã Hòa Thành",
"Huyện Gò Dầu"=>"Huyện Gò Dầu",
"Huyện Bến Cầu"=>"Huyện Bến Cầu",
"Thị xã Trảng Bàng"=>"Thị xã Trảng Bàng",
"Thành phố Thủ Dầu Một"=>"Thành phố Thủ Dầu Một",
"Huyện Bàu Bàng"=>"Huyện Bàu Bàng",
"Huyện Dầu Tiếng"=>"Huyện Dầu Tiếng",
"Thị xã Bến Cát"=>"Thị xã Bến Cát",
"Huyện Phú Giáo"=>"Huyện Phú Giáo",
"Thị xã Tân Uyên"=>"Thị xã Tân Uyên",
"Thành phố Dĩ An"=>"Thành phố Dĩ An",
"Thành phố Thuận An"=>"Thành phố Thuận An",
"Huyện Bắc Tân Uyên"=>"Huyện Bắc Tân Uyên",
"Thành phố Biên Hòa"=>"Thành phố Biên Hòa",
"Thành phố Long Khánh"=>"Thành phố Long Khánh",
"Huyện Tân Phú"=>"Huyện Tân Phú",
"Huyện Vĩnh Cửu"=>"Huyện Vĩnh Cửu",
"Huyện Định Quán"=>"Huyện Định Quán",
"Huyện Trảng Bom"=>"Huyện Trảng Bom",
"Huyện Thống Nhất"=>"Huyện Thống Nhất",
"Huyện Cẩm Mỹ"=>"Huyện Cẩm Mỹ",
"Huyện Long Thành"=>"Huyện Long Thành",
"Huyện Xuân Lộc"=>"Huyện Xuân Lộc",
"Huyện Nhơn Trạch"=>"Huyện Nhơn Trạch",
"Thành phố Vũng Tàu"=>"Thành phố Vũng Tàu",
"Thành phố Bà Rịa"=>"Thành phố Bà Rịa",
"Huyện Châu Đức"=>"Huyện Châu Đức",
"Huyện Xuyên Mộc"=>"Huyện Xuyên Mộc",
"Huyện Long Điền"=>"Huyện Long Điền",
"Huyện Đất Đỏ"=>"Huyện Đất Đỏ",
"Thị xã Phú Mỹ"=>"Thị xã Phú Mỹ",
"Huyện Côn Đảo"=>"Huyện Côn Đảo",
"Quận 1"=>"Quận 1",
"Quận 12"=>"Quận 12",
"Quận Thủ Đức"=>"Quận Thủ Đức",
"Quận 9"=>"Quận 9",
"Quận Gò Vấp"=>"Quận Gò Vấp",
"Quận Bình Thạnh"=>"Quận Bình Thạnh",
"Quận Tân Bình"=>"Quận Tân Bình",
"Quận Tân Phú"=>"Quận Tân Phú",
"Quận Phú Nhuận"=>"Quận Phú Nhuận",
"Quận 2"=>"Quận 2",
"Quận 3"=>"Quận 3",
"Quận 10"=>"Quận 10",
"Quận 11"=>"Quận 11",
"Quận 4"=>"Quận 4",
"Quận 5"=>"Quận 5",
"Quận 6"=>"Quận 6",
"Quận 8"=>"Quận 8",
"Quận Bình Tân"=>"Quận Bình Tân",
"Quận 7"=>"Quận 7",
"Huyện Củ Chi"=>"Huyện Củ Chi",
"Huyện Hóc Môn"=>"Huyện Hóc Môn",
"Huyện Bình Chánh"=>"Huyện Bình Chánh",
"Huyện Nhà Bè"=>"Huyện Nhà Bè",
"Huyện Cần Giờ"=>"Huyện Cần Giờ",
"Thành phố Tân An"=>"Thành phố Tân An",
"Thị xã Kiến Tường"=>"Thị xã Kiến Tường",
"Huyện Tân Hưng"=>"Huyện Tân Hưng",
"Huyện Vĩnh Hưng"=>"Huyện Vĩnh Hưng",
"Huyện Mộc Hóa"=>"Huyện Mộc Hóa",
"Huyện Tân Thạnh"=>"Huyện Tân Thạnh",
"Huyện Thạnh Hóa"=>"Huyện Thạnh Hóa",
"Huyện Đức Huệ"=>"Huyện Đức Huệ",
"Huyện Đức Hòa"=>"Huyện Đức Hòa",
"Huyện Bến Lức"=>"Huyện Bến Lức",
"Huyện Thủ Thừa"=>"Huyện Thủ Thừa",
"Huyện Tân Trụ"=>"Huyện Tân Trụ",
"Huyện Cần Đước"=>"Huyện Cần Đước",
"Huyện Cần Giuộc"=>"Huyện Cần Giuộc",
"Thành phố Mỹ Tho"=>"Thành phố Mỹ Tho",
"Thị xã Gò Công"=>"Thị xã Gò Công",
"Thị xã Cai Lậy"=>"Thị xã Cai Lậy",
"Huyện Tân Phước"=>"Huyện Tân Phước",
"Huyện Cái Bè"=>"Huyện Cái Bè",
"Huyện Cai Lậy"=>"Huyện Cai Lậy",
"Huyện Chợ Gạo"=>"Huyện Chợ Gạo",
"Huyện Gò Công Tây"=>"Huyện Gò Công Tây",
"Huyện Gò Công Đông"=>"Huyện Gò Công Đông",
"Huyện Tân Phú Đông"=>"Huyện Tân Phú Đông",
"Thành phố Bến Tre"=>"Thành phố Bến Tre",
"Huyện Chợ Lách"=>"Huyện Chợ Lách",
"Huyện Mỏ Cày Nam"=>"Huyện Mỏ Cày Nam",
"Huyện Giồng Trôm"=>"Huyện Giồng Trôm",
"Huyện Bình Đại"=>"Huyện Bình Đại",
"Huyện Ba Tri"=>"Huyện Ba Tri",
"Huyện Thạnh Phú"=>"Huyện Thạnh Phú",
"Huyện Mỏ Cày Bắc"=>"Huyện Mỏ Cày Bắc",
"Thành phố Trà Vinh"=>"Thành phố Trà Vinh",
"Huyện Càng Long"=>"Huyện Càng Long",
"Huyện Cầu Kè"=>"Huyện Cầu Kè",
"Huyện Tiểu Cần"=>"Huyện Tiểu Cần",
"Huyện Cầu Ngang"=>"Huyện Cầu Ngang",
"Huyện Trà Cú"=>"Huyện Trà Cú",
"Huyện Duyên Hải"=>"Huyện Duyên Hải",
"Thị xã Duyên Hải"=>"Thị xã Duyên Hải",
"Thành phố Vĩnh Long"=>"Thành phố Vĩnh Long",
"Huyện Long Hồ"=>"Huyện Long Hồ",
"Huyện Mang Thít"=>"Huyện Mang Thít",
"Huyện  Vũng Liêm"=>"Huyện  Vũng Liêm",
"Huyện Tam Bình"=>"Huyện Tam Bình",
"Thị xã Bình Minh"=>"Thị xã Bình Minh",
"Huyện Trà Ôn"=>"Huyện Trà Ôn",
"Huyện Bình Tân"=>"Huyện Bình Tân",
"Thành phố Cao Lãnh"=>"Thành phố Cao Lãnh",
"Thành phố Sa Đéc"=>"Thành phố Sa Đéc",
"Thành phố Hồng Ngự"=>"Thành phố Hồng Ngự",
"Huyện Tân Hồng"=>"Huyện Tân Hồng",
"Huyện Hồng Ngự"=>"Huyện Hồng Ngự",
"Huyện Tháp Mười"=>"Huyện Tháp Mười",
"Huyện Cao Lãnh"=>"Huyện Cao Lãnh",
"Huyện Thanh Bình"=>"Huyện Thanh Bình",
"Huyện Lấp Vò"=>"Huyện Lấp Vò",
"Huyện Lai Vung"=>"Huyện Lai Vung",
"Thành phố Long Xuyên"=>"Thành phố Long Xuyên",
"Thành phố Châu Đốc"=>"Thành phố Châu Đốc",
"Huyện An Phú"=>"Huyện An Phú",
"Thị xã Tân Châu"=>"Thị xã Tân Châu",
"Huyện Phú Tân"=>"Huyện Phú Tân",
"Huyện Châu Phú"=>"Huyện Châu Phú",
"Huyện Tịnh Biên"=>"Huyện Tịnh Biên",
"Huyện Tri Tôn"=>"Huyện Tri Tôn",
"Huyện Thoại Sơn"=>"Huyện Thoại Sơn",
"Thành phố Rạch Giá"=>"Thành phố Rạch Giá",
"Thành phố Hà Tiên"=>"Thành phố Hà Tiên",
"Huyện Kiên Lương"=>"Huyện Kiên Lương",
"Huyện Hòn Đất"=>"Huyện Hòn Đất",
"Huyện Tân Hiệp"=>"Huyện Tân Hiệp",
"Huyện Giồng Riềng"=>"Huyện Giồng Riềng",
"Huyện Gò Quao"=>"Huyện Gò Quao",
"Huyện An Biên"=>"Huyện An Biên",
"Huyện An Minh"=>"Huyện An Minh",
"Huyện Vĩnh Thuận"=>"Huyện Vĩnh Thuận",
"Thành phố Phú Quốc"=>"Thành phố Phú Quốc",
"Huyện Kiên Hải"=>"Huyện Kiên Hải",
"Huyện U Minh Thượng"=>"Huyện U Minh Thượng",
"Huyện Giang Thành"=>"Huyện Giang Thành",
"Quận Ninh Kiều"=>"Quận Ninh Kiều",
"Quận Ô Môn"=>"Quận Ô Môn",
"Quận Bình Thuỷ"=>"Quận Bình Thuỷ",
"Quận Cái Răng"=>"Quận Cái Răng",
"Quận Thốt Nốt"=>"Quận Thốt Nốt",
"Huyện Cờ Đỏ"=>"Huyện Cờ Đỏ",
"Huyện Thới Lai"=>"Huyện Thới Lai",
"Thành phố Vị Thanh"=>"Thành phố Vị Thanh",
"Thành phố Ngã Bảy"=>"Thành phố Ngã Bảy",
"Huyện Châu Thành A"=>"Huyện Châu Thành A",
"Huyện Phụng Hiệp"=>"Huyện Phụng Hiệp",
"Huyện Vị Thuỷ Huyện Vị Thuỷ",
"Huyện Long Mỹ"=>"Huyện Long Mỹ",
"Thị xã Long Mỹ"=>"Thị xã Long Mỹ",
"Thành phố Sóc Trăng"=>"Thành phố Sóc Trăng",
"Huyện Kế Sách"=>"Huyện Kế Sách",
"Huyện Mỹ Tú"=>"Huyện Mỹ Tú",
"Huyện Cù Lao Dung"=>"Huyện Cù Lao Dung",
"Huyện Long Phú"=>"Huyện Long Phú",
"Huyện Mỹ Xuyên"=>"Huyện Mỹ Xuyên",
"Thị xã Ngã Năm"=>"Thị xã Ngã Năm",
"Huyện Thạnh Trị"=>"Huyện Thạnh Trị",
"Thị xã Vĩnh Châu"=>"Thị xã Vĩnh Châu",
"Huyện Trần Đề"=>"Huyện Trần Đề",
"Thành phố Bạc Liêu"=>"Thành phố Bạc Liêu",
"Huyện Hồng Dân"=>"Huyện Hồng Dân",
"Huyện Phước Long"=>"Huyện Phước Long",
"Huyện Vĩnh Lợi"=>"Huyện Vĩnh Lợi",
"Thị xã Giá Rai"=>"Thị xã Giá Rai",
"Huyện Đông Hải"=>"Huyện Đông Hải",
"Huyện Hoà Bình"=>"Huyện Hoà Bình",
"Thành phố Cà Mau"=>"Thành phố Cà Mau",
"Huyện U Minh"=>"Huyện U Minh",
"Huyện Thới Bình"=>"Huyện Thới Bình",
"Huyện Trần Văn Thời"=>"Huyện Trần Văn Thời",
"Huyện Cái Nước"=>"Huyện Cái Nước",
"Huyện Đầm Dơi"=>"Huyện Đầm Dơi",
"Huyện Năm Căn"=>"Huyện Năm Căn",
"Huyện Ngọc Hiển"=>"Huyện Ngọc Hiển",

		);
	
		if (!empty($id)) {
			return $district[$id];
		} else {
			return $district;
		}

	}

}