<?php
	include("lib_db.php");
	include("util.php");
	$img = upload_file_by_name("img");
	
	$data = array();
	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 0;
	$cid = isset($_REQUEST["cid"]) ? $_REQUEST["cid"] : 0;
	$title = isset($_REQUEST["title"]) ? $_REQUEST["title"] : "";
	$code = isset($_REQUEST["code"]) ? $_REQUEST["code"] : "";
	$description = isset($_REQUEST["description"]) ? $_REQUEST["description"] : "";
	$body = isset($_REQUEST["body"]) ? $_REQUEST["body"] : "";
	$status = isset($_REQUEST["status"]) ? $_REQUEST["status"] : 0;
	
	$data["img"] = $img;
	$data["cid"] = $cid;
	$data["title"] = $title;
	$data["code"] = $code;
	$data["description"] = $description;
	$data["body"] = $body;
	$data["status"] = $status;
	$tbl = "grab_content";
	$cond = "id={$id}";
	$sql = data_to_sql_update($tbl,$data,$cond);
	$ret = exec_update($sql);
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
                    <img src = "images/logodocbao.png" alt="#" >
                </a>
                <div class ="end"></div>
            </div>
            <div class = "menubar">
                <ul>
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
				<form action="add.php" method="GET">
				<input name="q" value=""/>
				<button>Tìm kiếm</button></form>
			</div>
		</div>
		<br clear="all">
		<div class = "news_2col">
            <div class = "news_main">
                <div class = "news_top">
					<h1>Kết quả sửa tin bài viết</h1>
					<br clear="all">
					Bạn đã sửa thành công
					<br clear="all">
					<br clear="all">
				</div>
			</div>
			<div class="travel-content-right">
				<ul>
					<li><a href="add.php">Thêm tin mới</a></li>
					<li><a href="search.php">Tìm kiếm</a></li>
				</ul>
			</div>
		</div>
		<br clear="all">
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
</html>