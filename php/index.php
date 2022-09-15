<?php
	include("lib_db.php");
	$sql = "select * from grab_content 
	 limit 3";
	$topnews = select_one($sql);

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Đọc báo điển tử,Báo mới 24h,Tin tức trong ngày mới nhất</title>
    <link rel ="icon" href="images/favicon.png" type="images/jpeg" />
    <meta http-equiv="Content-Type" content="text/shtml; charset=utf-8" />
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.corner.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
    <link type="text/css" href="docbao1.css" rel="stylesheet" media="screen"/>
</head>
<body>
    <script type=""></script>
    <div class ="wrapper">
        <div class = "header" >
            <div class = "logotop">
                <a class="logo" href="#">
                    <img src = "images/logodocbao.jpeg" alt="#" >
                </a>
                <div class ="end"></div>
            </div>
            <ul class = "menubar">
                <li>
                    <a class = "home on" href="#">
                        <span></span>
                    </a>
                </li>
                <li class="xa-hoi">
                    <a href="#">Xã hội</a>
                </li>
                <li class="the-gioi">
                    <a href="#">Thế giới</a>
                </li>
                <li class="phap-luat">
                    <a href="#">Pháp luật</a>
                </li>
                <li class="kinh-te">
                    <a href="#">Kinh tế</a>
                </li>
                <li class="sao-360">
                    <a href="#">Sao 360°</a>
                </li>
                <li class="giai-tri">
                    <a href="#">Giải trí</a>
                </li>
                <li class="gia-dinh">
                    <a href="#">Gia đình</a>
                </li>
                <li class="the-thao">
                    <a href="#">Thể thao</a>
                </li>
                <li class="gioi-tre">
                    <a href="#">Giới trẻ</a>
                </li>
                <li class="suc-khoe">
                    <a href="#">Sức khỏe</a>
                </li>
                <li class="oto-xemay">
                    <a href="#">Ôtô - Xe máy</a>
                </li>
                <li class="doi-song">
                    <a href="#">Đời sống</a>
                </li>
                <li class="cong-nghe">
                    <a href="#">Công nghệ</a>
                </li>
                <li class="dep">
                    <a href="#">Đẹp</a>
                </li>
            </ul>
            <div class = "end"></div>
        </div>
        <br clear="all">
        <div class = "news_2col">
            <div class="main_r">
                <div class = "news_r">
                    <div class ="video_hot">
                        <div class ="logo_r">
                            <a href="#">Video nổi bật</a>
                        </div>
                        <a href="#">
                            <img src="images/do-chot-kiem-soat.png" alt="#">
                        </a>
                        <div>
                            <a href = "#">Hà Nội: Lực lượng chức năng đội mưa dỡ chốt kiểm soát cao tốc Hà Nội - Hải Phòng, cửa ngõ phía Nam tạm dừng kiểm soát</a>
                        </div>
                        <br clear="all">
                    </div>
                    <div class ="clip_item">
                        <a href="#">
                            <img src="images/cuop-dien-thoai-1.gif" alt="#">
                            <br>"Video: Bị cướp điện thoại, cụ bà có màn 'phản đòn' cực gắt"
                        </a>
                    </div>
                    <div class ="clip_item">
                        <a href="#">
                            <img src="images/vot-loc-troi.png" alt="#">
                            <br>"Hàng trăm người mang đèn pin đi vớt 'lộc trời' sau bão số 8"
                        </a>
                    </div>
                    <div class ="clip_item">
                        <a href="#">
                            <img src="images/chot-kiem-dich.png" alt="#">
                            <br>"Hàng loạt chốt kiểm soát cửa ngõ Thủ đô dừng hoạt động"
                        </a>
                    </div>
                    <div class ="clip_item">
                        <a href="#">
                            <img src="images/mua-hn.png" alt="#">
                            <br>"Ảnh: Người Hà Nội co ro trong cơn mưa tầm tã kết hợp không khí lạnh tăng"
                        </a>
                    </div>
                    <div class ="clip_item">
                        <a href="#">
                            <img src="images/tau-bac-nam-15.png" alt="#">
                            <br>"Chuyến tàu đầu tiên vào ga Sài Gòn, hàng trăm khách được về thẳng nhà"
                        </a>
                    </div>
                    <div class ="clip_item">
                        <a href="#">
                            <img src="images/du-luon.png" alt="#">
                            <br>"Thú chơi 'nhà giàu': Chi trăm triệu sắm bộ dù để bay lơ lửng giữa trời HN"
                        </a>
                    </div>
                    <br clear="all">
                </div>
                <div class = "news_r2">
                    <div class ="video_hot">
                        <div class ="logo_r">
                            <a href="#">Hỏi-Đáp</a>
                        </div>
                        <a href="#">
                            <img src="images/cung-nu.png" alt="#">
                        </a>
                        <div>
                            <a href = "#">Vì sao không ai muốn kết hôn với các cung nữ thời xưa sau khi họ bị đuổi khỏi cung?</a>
                        </div>
                        <br clear="all">
                    </div>
                    <div class="last_new">
                        <ul>
                            <li>
                                <a class="photo" href="#">
                                    <img src="images/ong-1.png" alt = "#">
                                </a>
                                <h4>
                                    <a href="#">Tại sao ong mật sau khi đốt người xong lại bị chết?</a>
                                </h4>
                                <div class = "end"></div>
                            </li>
                            <li>
                                <a class="photo" href="#">
                                    <img src="images/muoi-1.png" alt = "#">
                                </a>
                                <h4>
                                    <a href="#">Vì sao muối cũng có hạn sử dụng?</a>
                                </h4>
                                <div class = "end"></div>
                            </li>
                            <li>
                                <a class="photo" href="#">
                                    <img src="images/he-mat-troi.png" alt = "#">
                                </a>
                                <h4>
                                    <a href="#">Tại sao các hành tinh trong Hệ Mặt trời quay trên cùng một mặt phẳng?</a>
                                </h4>
                                <div class = "end"></div>
                            </li>
                        </ul>
                        <a href="#">Xem tiếp</a>
                    </div>
                    <br clear="all">
                </div>
            </div>
            <div class = "news_main">
                <div class = "news_top">
                    <div class ="news_tab">
                        <div class = "news_tab_button">
                            <a id = "news_tab_button_1" class ="on" href="#">Tin nóng</a>
                            <a id = "news_tab_button_2" href="#">Tin mới</a>
                        </div>
                    </div>
				    <div class = "news-tt" style="display: block;">
					<div class = "tt-left">
						<div id = "itm-news0" class = "news-item" >
						    <a href="/chi-tiet.php?id=<?php echo $topnews["id"]?>" class="thumb" >
								<div class = "image">
								    <img src="<?php echo $topnews["img"]?>" alt="<?php echo $topnews["title"]?>" />
								</div>
							</a>
							<div class = "text">
								<h4>
								    <a href="/chi-tiet.php?id=<?php echo $topnews["id"]?>"><?php echo $topnews["title"]?></a>
								</h4>
								<p><?php echo $topnews["description"]?></p>
							</div>
						</div>
					</div>
                    <div class= "tt-right">
                        <ul class="news-list">
                            <li>
                                <a onmouseover="listnews(0)" href="#">Con gái ruột Phi Nhung: 'Xin sớm cho mẹ con được về với con. Mẹ con đã sống cho mọi người rồi, giờ cho con xin lại mẹ con</a>
                            </li>
                            <li>
                                <a onmouseover="listnews(1)" href="#">Ngày 22/9: Có 11.527 ca mặc Covid, 11.919 bệnh nhân COVID-19 được công bố khỏi bệnh</a>
                            </li>
                            <li>
                                <a onmouseover="listnews(2)" href="#">Sở Y tế Hà Nội cho biết từ 12h ngày 3/10 đến 18h ngày 3/10 phát hiện 1 ca mắc Covid-19 mới tại Ba Đình đã được cách ly, thuộc chùm liên quan Bệnh viện Việt Đức.</a>
                            </li>
                            <li>
                                <a onmouseover="listnews(3)" href="#">Cập nhật: 2 tỉnh, thành thông báo cho học sinh nghỉ học vì Covid-19</a>
                            </li>
                            <li>
                                <a onmouseover="listnews(4)" href="#">Vụ phá đường dây cờ bạc 1.500 tỷ đồng: Bỏ học thành trùm cờ bạc</a>
                            </li>
                            <li>
                                <a onmouseover="listnews(5)" href="#">Nữ đại gia Quận 7 định xây nhà 400 tỷ lại vô tình để lộ chuyện đang vay ngân hàng quá nhiều</a>
                            </li>
                            <li>
                                <a onmouseover="listnews(6)" href="#">Facebook vừa bị sập trên toàn cầu, bất ngờ xuất hiện thông tin 1,5 tỷ tài khoản người dùng bị hacker rao bán: Thực hư thế nào?</a>
                            </li>
                            <li>
                                <a onmouseover="listnews(7)" href="#">Rời quê đi du học vì không muốn bị phụ huynh kiểm soát, đến một ngày ba không giục ăn cơm nữa lại hối hận không nguôi</a>
                            </li>
                            <li>
                                <a onmouseover="listnews(8)" href="#">Bé Xuân Mai' sau 17 năm sang Mỹ định cư: Đã là mẹ 3 con, cuộc sống hiện tại thế nào?</a>
                            </li>
                            <li>
                                <a onmouseover="listnews(9)" href="#">Trưa 5/10, Hà Nội ghi nhận thêm 1 ca Covid-19, là bé trai 9 tuổi ở Hà Đông</a>
                            </li>
                            <li>
                                <a onmouseover="listnews(10)" href="#">Siêu phẩm của tuyển Việt Nam được FIFA vinh danh, giành bàn thắng đẹp nhất VCK Futsal World Cup 2021</a>
                            </li>
                        </ul>
                    </div>
                    <div class="end"></div>				
				</div>
                <br clear="all">
                <div class = "news_box_1 lt">
                    <div class = "left_ct">
                        <h4 class="title">
                            <a href="#">Xã hội</a>
                        </h4>
                        <a class="photo" href="#">
                            <img src="images/pfitzer-vaccine.jpeg" alt="#">
                        </a>
                        <h5>
                            <a class="title_post" href="#">Phân bổ gần 1 triệu liều vắc xin Pfizer về các địa phương, đơn vị</a>
                        </h5>
                        <ul>
                            <li>
                                <a href="#">Bà Rịa - Vũng Tàu: Phát hiện hàng chục ca Covid-19 ngoài cộng đồng</a>
                            </li>
                            <li>
                                <a href="#">Áp thấp nhiệt đới trên Biển Đông khả năng mạnh lên thành bão hướng vào miền Trung</a>
                            </li>
                            <li>
                                <a href="#">Hà Nội: Bàng hoàng phát hiện người phụ nữ tử vong dưới gầm xe con</a>
                            </li>
                            <li>
                                <a href="#">Nữ tài xế lái ôtô đi rửa tông thẳng vào phòng khách, chủ nhà trọng thương</a>
                            </li>
                        </ul>
                    </div>
                    <br clear="all">
                </div>
                <div class = "news_box_1 rt">
                    <div class = "right_ct">
                        <h4 class="title">
                            <a href="#">Thế giới</a>
                        </h4>
                        <a class="photo" href="#">
                            <img src="images/lang-mo-tan-thuy-hoang.jpeg" alt="#">
                        </a>
                        <h5>
                            <a class="title_post" href="#">Đột phá bên trong lăng mộ Tần Thủy Hoàng: Bí ẩn 2.000 năm sắp được giải mã trong thế kỷ 21!</a>
                        </h5>
                        <ul>
                            <li>
                                <a href="#">Nghe tiếng hét phát ra từ phòng con gái, mẹ kiểm tra camera phát hiện điều kỳ lạ, chạy sang phòng còn bị đe dọa</a>
                            </li>
                            <li>
                                <a href="#">Cựu điệp viên CIA có phát ngôn gây tranh cãi liên quan đến việc Facebook bị sập trên toàn cầu</a>
                            </li>
                            <li>
                                <a href="#">Thế giới hỗn loạn sau khi Facebook sập: Sự nguy hiểm khi để một ứng dụng xâm chiếm nền kinh tế toàn cầu</a>
                            </li>
                            <li>
                                <a href="#">Hình ảnh trái khoáy: 1 chiếc máy bay khổng lồ mắc kẹt dưới gầm cầu vượt, Conan mạng nghĩ nát óc cũng bó tay</a>
                            </li>
                        </ul>
                    </div>
                    <br clear = "all">
                </div>
                <br clear="all">
                <div class = "clip">
                    <div class="info bar">
                        <a href="#">VIDEO / ẢNH / AUDIO</a>
                        <div class="slide_page" data-jcarouselpagination="true">
                        </div>
                    </div>
                    <div class="official slide_clip">
                        <ul>
                            <li>
                                <a href="#" title="#">
                                    <img src="images/ho-truc-bach-12.jpeg" title="#">
                                    <h3>Kè hồ Trúc Bạch sụt lún, xuống cấp nghiêm trọng</h3>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="#">
                                    <img src="images/bao-duong-may-bay.jpeg" title="#">
                                    <h3>Hàng không hối hả bảo dưỡng dàn máy bay 'khủng', sẵn sàng cất cánh sau chuỗi ngày tê liệt vì covid-19</h3>
                                </a>
                                <li>
                                    <a href="#" title="#">
                                        <img src="images/tieu-thuong-tphcm-17.jpeg" title="#">
                                        <h3>Được ra chợ gặp khách hàng là vui cả ngày</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="#">
                                        <img src="images/di-lai-tphcm.jpeg" title="#">
                                        <h3>Người dân đi lại ở TP.HCM và liên tỉnh trong trường hợp cấp thiết ra sao?</h3>
                                    </a>
                                </li>
                            </li>
                        </ul>
                    </div>
                </div>
                <br clear="all">
                <div class="news_box_2">
                    <h4 class="title">
                        <a href="#">Giới trẻ</a>
                    </h4>
                    <div class="main_box">
                        <div class="l_box_2">
                            <a href="#">
                                <img src="images/hoang-tu-gio-pham-phap.jpeg" alt="#">
                                <span>
                                    <b>Trước khi được phát hiện tử vong, giang hồ mạng 'Hoàng Tử Gió' từng nhiều lần vi phạm pháp luật</b>
                                </span> 
                            </a>
                        </div>
                        <div class="r_box_2">
                            <div class="top">
                                <a class="photo" href="#">
                                    <img src="images/ban-gai-nam-ok.jpeg" alt="#">
                                </a>
                                <h6>
                                    <a href="#">Bạn gái YouTuber Nam Ok lên tiếng sau những chỉ trích về vụ TNGT kinh hoàng: 'Xin đừng chà đạp bôi nhọ bạn ấy... với chúng tôi bạn ấy là 1 phần cuộc đời'</a>
                                </h6>
                                <div class="end"></div>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">Câu hỏi Olympia lắt léo nhất lịch sử: 'Bố mẹ có 6 con trai, mỗi người có 1 em gái. Hỏi gia đình có bao nhiêu người'</a>
                                </li>
                                <li>
                                    <a href="#">Nam sinh bất chấp mưa lớn chạy che ô cho crush, phản ứng của bạn nữ khiến dân tình hét lên: Quá sức đau lòng!</a>
                                </li>
                                <li>
                                    <a href="#">Thơ Nguyễn lên sóng video đu theo Squid Game, gây hoảng hồn với tiếng súng đùng đùng xuyên suốt</a>
                                </li>
                            </ul>
                        </div>
                        <div class="end"></div>
                    </div>
                </div>
                <br clear="all">
                <div class="news_box_3">
                    <h4 class="title">
                        <a href="#">Pháp luật</a>
                    </h4>
                    <div class="main_box">
                        <div class="l_box_3">
                            <a href="#">
                                <img src="images/sat-hai-nguoi-tinh.jpeg" alt="#">
                            </a>
                            <div class="text">
                                <h5>
                                    <a href="#">Giết hại người tình bằng 22 nhát dao do đòi chia tay</a>
                                </h5>
                                <p>Do mâu thuẫn chuyện tình cảm, Tùng đã chặn đường, xuống tay sát hại người tình một cách dã man.</p>
                            </div>
                        </div>
                        <div class="r_box_3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-3">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/tai-nan-giao-thong-nam-ok.jpeg" alt="#">
                                                </a>
                                                <h6>
                                                    <a href="#">Vì sao chưa khám nghiệm chiếc xe bị tai nạn do youtuber 'Nam ok' điều khiển?</a>
                                                </h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class = "col-3">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/cuopngay-8071.jpeg" alt="#">
                                                </a>
                                                <h6>
                                                    <a href="#">Truy bắt nhóm chuyên cướp ngày tại Hà Nội</a>
                                                </h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class ="col-3">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/thong-chot-chem-can-bo.jpeg" alt="#">
                                                </a>
                                                <h6>
                                                    <a href="#">Đi xe máy ngược chiều 'thông chốt' còn vác dao chém cán bộ trực chốt kiểm soát dịch Covid-19</a>
                                                </h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class ="col-3">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/bi-danh-nguy-kich.jpeg" alt="#">
                                                </a>
                                                <h6>
                                                    <a href="#">Người đàn ông bị đánh nguy kịch ngay sau bữa nhậu trong trụ sở viện kiểm sát</a>
                                                </h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="end"></div>
                        </div>
                        <div class="end"></div>
                    </div>
                </div>
                <br clear="all">
                <div class = "news_box_4">
                    <h4 class="title">
                        <a href="#">Sao 360°</a>
                    </h4>
                    <div class="main_box">
                        <div class="l_box_4">
                            <a href="#">
                                <img src="images/thuy-tien-tu-thien-quang-tri.jpeg" alt="#">
                            </a>
                            <div class="text">
                                <h5>
                                    <a href="#">Phía Thuỷ Tiên lý giải nguyên nhân không thể thống kê được chính xác số tiền từ thiện ở Quảng Trị</a>
                                </h5>
                                <p>Những ồn ào liên quan đến chuyện từ thiện của Thủy Tiên vẫn chưa có dấu hiệu dừng lại.</p>
                            </div>
                        </div>
                        <div class="r_box_4">
                            <div class="container">
                                <div class="row">
                                    <div class ="col-3">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/me-ruot-trinh-kim-chi.jpeg" alt="#">
                                                </a>
                                                <h6>
                                                    <a href="#">Mẹ ruột NSƯT Trịnh Kim Chi qua đời vì bệnh nặng</a>
                                                </h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-3">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/ba-xa-khanh-don.jpeg" alt="#">
                                                </a>
                                                <h6>
                                                    <a href="#">Vợ 1 sao nam Vbiz hú hồn khi tình cũ của chồng thả like Facebook rồi xoá.</a>
                                                </h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-3">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/em-trai-phi-nhung.jpeg" alt="#">
                                                </a>
                                                <h6>
                                                    <a href="#">Em trai ca sĩ Phi Nhung bày tỏ nguyện vọng được đưa thi hài chị về Mỹ để gia đình nhìn mặt lần cuối</a>
                                                </h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-3">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/angela-baby-1.jpeg" alt="#">
                                                </a>
                                                <h6>
                                                    <a href="#">Bắt gặp Angela Baby cùng Huỳnh Hiểu Minh đưa con trai đi chơi, bức ảnh không PTS gây tranh cãi</a>
                                                </h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="end"></div>
                        </div>
                        <div class="end"></div>
                    </div>
                </div>
                <br clear="all">
                <div class="news_box_5">
                    <h4 class="title">
                        <a href="#">Đời sống</a>
                    </h4>
                    <div class="main_box">
                        <div class ="l_box_5">
                            <a href="#">
                                <img src="images/nhiem-khuan.jpeg" alt ="#">
                                <span>
                                    <b>8 sai lầm sẽ biến căn nhà bình yên của bạn trở thành nơi 'vô cùng nguy hiểm'</b>
                                </span>
                            </a>
                        </div>
                        <div class="r_box_5">
                            <div class="top">
                                <a class="photo" href="#">
                                    <img src="images/day-con-hoc-bai.jpeg" alt="#">
                                </a>
                                <h6>
                                    <a href="#">Dạy con học bài, bà mẹ phải trói tay buộc chân mình vào ghế để tránh mất bình tĩnh</a>
                                </h6>
                                <div class = "end"></div>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">Bị vợ bắt quả tang ôm ấp tình nhân trong xe ô tô, gã chồng tệ bạc tuyên bố 1 điều khiến tất cả phẫn nộ</a>
                                </li>
                                <li>
                                    <a href="#">Tin lời 'mật ngọt chết ruồi', tiểu tam chết sững khi đọc được tin nhắn người tình lạy lục van xin vợ tha thứ</a>
                                </li>
                                <li>
                                    <a href="#">Giữa hôn lễ, phù rể bất ngờ quỳ xuống trao nhẫn cho cô dâu khiến cả hội hôn 'toát mồ hôi hột': Lời giải thích kịp thời đã cứu nguy!</a>
                                </li>
                            </ul>
                        </div>
                        <div class ="end"></div>
                    </div>
                </div>
                <br clear ="all">
                <div class = "news_box_6">
                    <h4 class="title">
                        <a href="#">Giải trí</a>
                    </h4>
                    <div class="container">
                        <div class="row">
                            <div class="col-3">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/su-co-san-khau2344.gif" alt="#">
                                        </a>
                                        <h6>
                                            <a href="#">Khán giả tưởng đang xem màn biểu diễn đặc biệt, nào ngờ đằng sau là bi kịch khủng khiếp, nam diễn viên chết tức tưởi</a>
                                        </h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/ho-van-cuong.jpeg" alt="#">
                                        </a>
                                        <h6>
                                            <a href="#">Sau khi thành viên BTC úp mở ẩn tình vụ Hồ Văn Cường, clip thi Vietnam Idol Kids bị thẳng tay làm điều này</a>
                                        </h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/sao-han.jpeg" alt="#">
                                        </a>
                                        <h6>
                                            <a href="#">5 mỹ nhân Hàn dính lời nguyền 'bom xịt': Kim Yoo Jung toàn chọn sai kịch bản, Park Min Young thất bại ê chề</a>
                                        </h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/vu-an.jpeg" alt="#">
                                        </a>
                                        <h6>
                                            <a href="#">Vụ án gia đình 11 người chết treo cổ bí ẩn nhất Ấn Độ lên phim tài liệu: Rùng mình mối liên hệ với tà giáo, phơi bày sự thật lạnh sống lưng</a>
                                        </h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>    
                </div>
                <br clear ="all">
                <div class = "news_box_7">
                    <h4 class="title">
                        <a href="#">Thể thao</a>
                    </h4>
                    <div class="main_box">
                        <div class = "l_box_7">
                            <a href="#">
                                <img src="images/Quang-Hai.jpeg" alt ="#">
                            </a>
                            <div class="text">
                                <h5>
                                    <a href="#">Nhà báo châu Á: 'Ở lại Việt Nam có thể sẽ làm lãng phí tài năng của Quang Hải'</a>
                                </h5>
                                <p>Với tài năng của mình, Quang Hải đã nhiều lần được báo chí quốc tế khuyên nhủ nên ra nước ngoài để phát triển bản thân.</p>
                            </div>
                        </div>
                        <div class = "r_box_7">
                            <div class="container">
                                <div class= "row">
                                    <div class = "col-3">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/Park-Hang-Seo-01.jpeg" alt="#">
                                                 </a>
                                                 <h6>
                                                    <a href="#">Ông Park Hang-seo đã thay đổi trong sự 'im lặng' của bóng đá Việt Nam</a>
                                                </h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-3">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/Dang-Tran-Chinh.jpeg" alt="#">
                                                </a>
                                                <h6>
                                                    <a href="#">Bình Dương bổ nhiệm ông Đặng Trần Chỉnh làm HLV trưởng, bất ngờ với cái tên được chọn làm phó tướng</a>
                                                </h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class = "col-3">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/park.jpeg" alt="#">
                                                </a>
                                                <h6>
                                                    <a href="#">VFF chốt tương lai của HLV Park sau 4 trận toàn thua ở VL World Cup 2022</a>
                                                </h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-3">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/chelsea1.jpeg" alt="#">
                                                </a>
                                                <h6>
                                                    <a href="#">Chelsea cũng có 'vấn đề Ronaldo' cần giải quyết</a>
                                                </h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="end"></div>
                        </div>
                        <div class="end"></div>
                    </div>
                </div>
                <br clear="all">
                <div class = "news_box_1 lt">
                    <div class = "left_ct">
                        <h4 class="title">
                            <a href="#">Kinh tế</a>
                        </h4>
                        <a class="photo" href="#">
                            <img src="images/bitcoin-minh-hoa.jpeg" alt="#">
                        </a>
                        <h5>
                            <a class="title_post" href="#">Bitcoin tăng mạnh, lên đỉnh cao 60.000 USD</a>
                        </h5>
                        <ul>
                            <li>
                                <a href="#">Kiến nghị cấm cá nhân môi giới bất động sản độc lập: 'Cò mồi' sắp hết thời chụp giật, trốn thuế, thổi giá gây sốt đất?</a>
                            </li>
                            <li>
                                <a href="#">Bà trùm Đại Nam nói gì sau khi xem lại ảnh mình bị chụp lén rồi tung lên mạng 'bóc' nhan sắc đời thường?</a>
                            </li>
                            <li>
                                <a href="#">EU cảnh báo đùi ếch, bưởi Việt Nam vi phạm an toàn thực phẩm</a>
                            </li>
                            <li>
                                <a href="#">Bà Phương Hằng có động thái mới, nhắc tên ông Đoàn Ngọc Hải, Giang Kim Cúc, Nguyễn Sin cùng hàng loạt nhân vật đình đám liên quan vấn đề thiện nguyện</a>
                            </li>
                        </ul>
                    </div>
                    <br clear="all">
                </div>
                <div class = "news_box_1 rt">
                    <div class = "right_ct">
                        <h4 class="title">
                            <a href="#">Ôtô- Xe máy</a>
                        </h4>
                        <a class="photo" href="#">
                            <img src="images/Honda-Super-Cub-C125.jpeg" alt="#">
                        </a>
                        <h5>
                            <a class="title_post" href="#">'Biểu tượng huyền thoại' Super Cub C125 ra mắt phiên bản mới</a>
                        </h5>
                        <ul>
                            <li>
                                <a href="#">Năm lý do giải thích vì sao đây lại là chỗ ngồi VIP nhất trên ô tô</a>
                            </li>
                            <li>
                                <a href="#">Ô tô điện Trung Quốc pin đầy đi 500 km, giá ngang VinFast VF e34, rộng cửa về Việt Nam</a>
                            </li>
                            <li>
                                <a href="#">VinFast chính thức ra mắt ô tô điện VF e34</a>
                            </li>
                            <li>
                                <a href="#">Điểm mặt 5 bộ phận ô tô đắt tiền nhất</a>
                            </li>
                        </ul>
                    </div>
                    <div class ="end"></div>
                </div>
                <br clear="all">
                <br class="all">
                <div class = "news_box_8">
                    <h4 class="title">
                        <a href="#">Đẹp</a>
                    </h4>
                    <div class="main_box">
                        <div class="l_box_8">
                            <a href="#">
                                <img src="images/squid-game-2.jpeg" alt="#">
                            </a>
                            <div class ="text">
                                <h4>
                                    <a href="#">Nữ chính Squid Game khoe khéo vòng 1 trên tạp chí mừng Instagram vượt hơn 20 triệu người theo dõi</a>
                                </h4>
                                <p>Thành công vang dội của Squid Game đã khiến tên tuổi Jung Ho Yeon phất lên nhanh chóng.</p>
                            </div>
                        </div>
                        <div class="r_box_8">
                            <div class="container">
                                <div class="row">
                                    <div class="col-3">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/trieu-le-dinh.jpeg" alt="#">
                                                </a>
                                                <h6>
                                                    <a href="#">Triệu Lệ Dĩnh khoe body siêu quyến rũ, góc nghiêng thần thánh khiến fan u mê</a>
                                                </h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-3">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/retinol.jpeg" alt="#">
                                                </a>
                                                <h6>
                                                    <a href="#">Sự thật: Retinol có thể gây kích ứng gấp đôi vào mùa hanh khô?</a>
                                                </h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-3">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/serum.jpeg" alt="#">
                                                </a>
                                                <h6>
                                                    <a href="#">5 món skincare vừa ra mắt đã hot rầm rộ, chị em cần update ngay</a>
                                                </h6>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-3">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="images/mua-thu.jpeg" alt="#">
                                                </a>
                                                <h6>
                                                    <a href="#">4 kiểu áo khoác hack tuổi lợi hại nhất, nàng công sở cứ mặc là được khen trẻ trung sành điệu</a>
                                                </h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class = "end"></div>
                        </div>
                        <div class="end"></div>
                    </div>
                </div>
                <br clear="all">
                <div class="news_box_5">
                    <h4 class="title">
                        <a href="#">Gia đình</a>
                    </h4>
                    <div class="main_box">
                        <div class ="l_box_5">
                            <a href="#">
                                <img src="images/chong-khoe-dat.jpeg" alt ="#">
                                <span>
                                    <b>Chồng khoe có mảnh đất tiết kiệm, tôi chưa kịp vui mừng thì anh thông báo luôn tin chấn động</b>
                                </span>
                            </a>
                        </div>
                        <div class="r_box_5">
                            <div class="top">
                                <a class="photo" href="#">
                                    <img src="images/tiem-vaccine-tre-em.jpeg" alt="#">
                                </a>
                                <h6>
                                    <a href="#">Việt Nam bắt đầu tiêm vắc xin Covid-19 cho trẻ em: Nhóm tuổi nào được tiêm đầu tiên?</a>
                                </h6>
                                <div class = "end"></div>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">Mẹ tôi thiên vị dành hết 4 tỷ cho con trai thứ, qua mấy năm về nhà con cả mà bà choáng váng và hổ thẹn tột cùng</a>
                                </li>
                                <li>
                                    <a href="#">6 'kẻ giết gan' ẩn trong cuộc sống, gia đình nào cũng có</a>
                                </li>
                                <li>
                                    <a href="#">Mới về ra mắt đã bị cảnh báo 'ở quê phải khác' nhưng vừa dứt lời chàng trai liền 'hóa đá' trước màn đáp trả không thể cứng hơn từ bạn gái</a>
                                </li>
                                <li>
                                    <a href="#">Người đàn ông bị tiêu chảy đến mức tử vong do ăn đồ thừa trong tủ lạnh, bác sĩ nhắc nhở: 5 món ăn để qua đêm càng để lâu càng nguy hiểm</a>
                                </li>
                            </ul>
                        </div>
                        <div class ="end"></div>
                    </div>
                </div>
                <br clear ="all">
                <div class = "news_box_6">
                    <h4 class="title">
                        <a href="#">Công nghệ</a>
                    </h4>
                    <div class="container">
                        <div class="row">
                            <div class="col-3">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/ky-suXbox.jpeg" alt="#">
                                        </a>
                                        <h6>
                                            <a href="#">Kỹ sư thiết kế Xbox tiết lộ sự phản bội của Microsoft với AMD 20 năm trước</a>
                                        </h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/fifa.jpeg" alt="#">
                                        </a>
                                        <h6>
                                            <a href="#">FIFA yêu cầu EA trả 1 tỷ USD cho 4 năm sử dụng tên thương hiệu, EA tính tới chuyện đổi tên game</a>
                                        </h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/Iphone.jpeg" alt="#">
                                        </a>
                                        <h6>
                                            <a href="#">Chuyện chưa từng có: Khách mua iPhone 13 ở Việt Nam buộc phải khui hộp và kích hoạt ngay ở cửa hàng?</a>
                                        </h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="images/huawei.jpeg" alt="#">
                                        </a>
                                        <h6>
                                            <a href="#">Vận xui khi bị Mỹ trừng phạt trở thành động lực thay đổi cho Huawei: Đổ tiền R&D, chú trọng bằng sáng chế, đầu tư vào dịch vụ đám mây, mạng 6G, xe điện…</a>
                                        </h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="end"></div>
                </div>
            </div>
            
		</div>
	</div>
	<br clear ="all"> 
	<div class = "footer">
        <div class="footer_b">
            <div class = "footer_b_1"></div>
        </div>
        <div class = "footer_main">
            <a href="#" class="logo">
                <img src="images/logodocbao.jpeg" alt="#">
            </a>
            <div class = "info">
                <p>Trang Thông tin điện tử Docbao.vn </p>
                <p>Công ty Cổ phần Quang Minh Việt Nam</p>
                <p>Giấy phép thiết lập Trang thông tin điện tử tổng hợp trên Internet số 2372/GP-STTTT cấp ngày 29/8/2014.</p>
                <p>SĐT: 024. 666.40816</p>
                <p>Địa chỉ: P604, Tầng 6, Tòa nhà Golden Field, Khu đô thị mới Mỹ Đình 1, phường Cầu Diễn, quận Nam Từ Liêm, Hà Nội</p>
                <p>Chịu trách nhiệm nội dung: Điều Thị Bích; ĐT: 0903.263.198; Email: docbao@kib.vn</p>
                <p>Đọc báo trực tuyến hiện tại chỉ sử dụng tên miền duy nhất là docbao.vn; độc giả lưu ý tránh nhầm lẫn.</p>
                <p>
                	<a href="#">Chính sách bảo mật</a>
                </p>
            </div>
        </div>
    </div>   
</div>
</body>
</html>