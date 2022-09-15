<?php
	include("lib_db.php");
	include("util.php");
	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 0;
	if ($id<  1) return ;
	$sql = "select * from grab_content 
	where id={$id}";
	$result = select_one($sql);
	if (!$result) return ;
	
	$sql = "select * from grab_category";
	$cates = select_list($sql);
	$statuses = default_statuses();
	
	$cookie_name = "user";
	$cookie_value = $result['title'];
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
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
			<form action="add.php" method="GET">
			<input name="q" value=""/>
			<button>Tìm kiếm</button></form>
		</div>
		<br clear="all">
		<div class="news_2col">
			<div class = "news_main">
                <div class = "news_top">
					<h1>Sửa tin bài</h1>
					<br/>
					<form class="form" action="edit_exec.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo $result["id"]?>"/>
						<label>Mục lục</label>
						
						
						<select name="cid">
							<option value="">Chọn chuyên mục</option>
						<?php foreach ($cates as $item) {?>
						
							<option value="<?php echo $item["id"]?>" <?php if ($item["id"] == $result["cid"]){?>selected<?php } ?>><?php echo $item["name"]?></option>
						<?php } ?>
						</select>
						
						<div class="end"></div>
						<label>Ảnh</label>
						<input name="img" type="file" value="<?php echo $result["img"]?>"/>
						<img src="<?php echo $result["img"]?>" width="200px"/>
						<div class="end"></div>
						<label>Tiêu đề</label><textarea name="title"><?php echo $result["title"]?></textarea>
						<div class="end"></div>
						<label>Code</label><input name="code" value="<?php echo $result["code"]?>"/>
						<div class="end"></div>
						<label>Mô tả</label><textarea name="description" ><?php echo $result["description"]?></textarea>
						<div class="end"></div>
						<label>Thân bài</label><textarea name="body"><?php echo $result["body"]?></textarea>
						<div class="end"></div>
						<label>Trạng thái</label>
						<select name="status">
							<option value="">-->Lựa chọn<--</option>
							<?php foreach ($statuses as $item) {?>
						
							<option value="<?php echo $item["id"]?>" <?php if ($item["id"] == $result["status"]){?>selected<?php } ?>><?php echo $item["name"]?></option>
							<?php } ?>
						</select>
						
						<div class="clear-both"></div>
						<button >Đồng ý</button>
					</form>
					<br/>
					<br/>
				</div>
			</div>	
			<div class="travel-content-right">
				<ul>
					<li><a href="add.php">Thêm tin mới</a></li>
					<li><a href="search.php">Tìm kiếm</a></li>
				</ul>
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
</html>