<?php	
include("lib_db.php");
	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] * 1: 0;
	if ($id<  1) return ;
	$sql = "select * from grab_category where id={$id}";
	$result = select_one($sql);
	if (!$result) return ;
	$sql = "select * from grab_content 
	where cid={$result['id']} limit 20";
	$resultOther = select_list($sql);

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="vi">
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
                    <img src = "images/logodocbao.png" alt="#" >
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
                <div class ="category_page">
                    <h1 class="title"><?php echo $result["name"]?></h1>
                    <div class ="category_news_top">
                        <ul>
                            <?php foreach ($resultOther as $item) {?>
					            <li>
						            <a class = "photo" href="chi-tiet.php?id=<?php echo $item["id"] ?>">
							            <img src="<?php echo $item["img"]?>" alt="chi-tiet.php?id=">
						            </a>
						            <div class ="text" href="chi-tiet.php?id=<?php echo $item["id"]?>">
							            <h2>
                                            <a href="chi-tiet.php?id=<?php echo $item["id"]?>">
							                    <?php echo $item["title"]?>
						                    </a>
                                        </h2>
						                <p><?php echo $item["description"]?></p>
                                    </div>
                                    <div class = "end"></div>
					            </li>
				            <?php } ?>
				        </ul>
                    </div>
                    <br clear ="all">
                    <div class="category_news_list">
                        <ul>
                            <?php foreach ($resultOther as $item) {?>
					            <li>
						            <a class = "photo" href="chi-tiet.php?id=<?php echo $item["id"]?>">
							            <img src="<?php echo $item["img"]?>" alt="<?php echo $item["title"]?>"/>
						            </a>
						            <div class ="text" href="chi-tiet.php?id=<?php echo $item["id"]?>">
							            <h3>
                                            <a href="chi-tiet.php?id=<?php echo $item["id"]?>">
							                    <?php echo $item["title"]?>
						                    </a>
                                        </h3>
                                        <span class = "time"><?php echo $item["insertdate"]?></span>
						                <p><?php echo $item["description"]?></p>
                                    </div>
                                    <div class = "end"></div>
					            </li>
				            <?php } ?>
				        </ul>
                    </div>
                </div>
                <br clear ="all">
                <div class="detail_page">
                    <div class ="general_news">
                        <div class ="news_box">
                            <div class="detail_bottom">Tin tiêu điểm</div>
                                <ul>
				                <?php foreach ($resultOther as $item) {?>
					                <li>
                                        <a href="chi-tiet.php?id=<?php echo $item["id"]?>"><?php echo $item["title"]?>
                                            <span class ="time">(<?php echo $item["insertdate"]?>)</span>
                                        </a>
                                    </li>
				                <?php } ?>
				                </ul>
                            </div>
                            <div class ="end"></div>
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
	</div>
</body>