<?php
$message = '';
$t=time();
if(isset($_POST['name'])) {

	$choice='';
	if(isset($_POST['choice'])){
		$choice=$_POST['choice'];
	}
	$arr = array(
		'properties' => array(
			array(
				'property' => 'new_email',
				'value' => $_POST['email']
			),
			array(
				'property' => 'firstname',
				'value' => $_POST['name']
			),
			array(
				'property' => 'lastname',
				'value' => ''
			),
			array(
				'property' => 'phone',
				'value' => $_POST['phone']
			),
			array(
				'property' => 'question_1',
				'value' => $_POST['question_1']
			),
			array(
				'property' => 'choice',
				'value' => $choice
			),
			array(
				'property' => 'hs_lead_status',
				'value' => "NEW"
			)
		)
	);

	$post_json = json_encode($arr);

	$endpoint = "https://api.hubapi.com/contacts/v1/contact/?hapikey=f5e52ceb-51c6-4f2e-93af-ed260b2c4396";
	$ch = @curl_init();
	@curl_setopt($ch, CURLOPT_POST, true);
	@curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
	@curl_setopt($ch, CURLOPT_URL, $endpoint);
	@curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	@curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = @curl_exec($ch);
	$status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
	$curl_errors = curl_error($ch);
	@curl_close($ch);
	if ($status_code == 200) {
		header('Location: thank.php');
		die();
	}else{
		$message = 'Email đã tồn tại';
	}
}
?>

<html lang="vi">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<title>An Giấc Nữ</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/font-face.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/carouseller.css">

	<script src="js/jquery-2.2.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/carouseller.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>

</head>
<body>
<div class="getleads">
	<div class="background-nav" style="height: 58px;"></div>
	<header id="nav1-1-f">
		<nav class="navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a href="http://angiacnu.maxmua.com/" class="navbar-brand smooth-scroll"><img src="images/logo.png" alt="none" data-selector="img" style="max-width:300px;max-height:40px;"></a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#contact7-1" class="smooth-scroll">Công dụng</a></li>
						<li><a href="#portfolio1-1-a" class="smooth-scroll">Tại Sao Chọn?</a></li>
						<li><a href="#cta1-3" class="smooth-scroll">Khách hàng</a></li>
						<li><a href="#testimonials3-1" class="smooth-scroll">Quy trình</a></li>
						<li><a href="#contact3-2" class="smooth-scroll">Liên hệ</a></li>

					</ul>
				</div>
			</div>
		</nav>
	</header>
</div>

<div class="getleads">
	<section id="hero1-1-a" class="hero bg-img" style="background: url('images/bg.png') no-repeat center;">
		<div class="container vertical-center-rel">
			<div class="row">
				<div style="text-align:center;">
					<h1 style="color:#ffffff; font-size:45px; padding-bottom:0; margin:0;text-transform:uppercase">AN GIẤC NỮ</h1>
					<p style="color:#ffffff; font-size:25px; margin:0; padding:0;text-transform:uppercase">"QUẲNG MỌI LO ÂU, TRÒN SÂU GIẤC NGỦ"</p>
					<p style="color:#ffffff; font-size:25px; font-weight:bold; margin:0; padding:0;text-transform:uppercase">TƯ VẤN MIỄN PHÍ: 1800 6684</p>
				</div>
			</div>
		</div>
	</section>
</div>
<div class="getleads">
	<section id="contact7-1" class="p-t-md bg-edit bg-dark" data-selector="block" style="background-color:#fff;padding-top:50px;padding-bottom:50px;">
		<div class="container">
			<h3 style="text-align:center; color: #000000;">Ngủ sâu không bằng ngủ lâu</h3>
			<div class="row">
				<div class="col-md-6">
					<div style="font-size: 29px; text-align:center; color: #000000;">Tôi 3 tháng trước</div>
					<div style="font-size: 25px; text-align:center;color: #a72592;"><strong>Dù cố ngủ 8 tiếng/ngày</strong></div>
					<div class="truoc">
						<div>Thiếu năng lượng<img src="images/cancel-icon.png"></div>
						<div>Mệt mỏi<img src="images/cancel-icon.png"></div>
						<div>Suy giảm trí nhớ<img src="images/cancel-icon.png"></div>
						<div>Không tìm thấy niềm vui sống<img src="images/cancel-icon.png"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div style="font-size: 29px; text-align:center; color: #000000;">Tôi hiện tại</div>
					<div style="font-size: 25px; text-align:center;color: #a72592;"><strong>Chỉ cần ngủ 6 tiếng/ngày</strong></div>
					<div class="sau">
						<div><img src="images/ok-icon.png">Tràn đầy năng lượng</div>
						<div><img src="images/ok-icon.png">Sảng khoái</div>
						<div><img src="images/ok-icon.png">Trí nhớ được cải thiện</div>
						<div><img src="images/ok-icon.png">Yêu đời, yêu cuộc sống
						<br>yêu công việc hơn
						</div>
					</div>
				</div>
			</div>

			<div class="row" style="margin-top:15px;background: #d14cb8; padding-top: 25px;padding-bottom: 25px; color: #ffffff">
				<div class="col-md-6" style="margin-top: 60px;">
					<h3>BÍ QUYẾT CỦA TÔI LÀ AN GIẤC NỮ</h3>
					<p>
						Nhờ An Giấc Nữ, tôi đã tìm lại cho mình giấc ngủ tự nhiên hàng đêm. Cuộc sống của tôi giống như được hồi sinh vậy.
					</p>
				</div>
				<div class="col-md-6" style="border-left: 1px solid #A72592;">
					<img src="images/2.png">
				</div>
			</div>

		</div>
	</section>
</div>

<div class="getleads">
	<section id="portfolio1-1-a" class="p-y-lg bg-edit" data-selector="block" style="padding-top:30px;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="section-header text-center wow fadeIn" style="visibility: visible; animation: fadeIn; -webkit-animation: fadeIn;">
						<h2 data-selector="text1" class="taisaochon_title">tại sao chọn AN GIẤC NỮ?</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container" id="taisaochon">
			<div class="row">
				<div data-wow-delay="0.5s" class="wow fadeInDownBig thanhphan"><img src="images/thanh-phan.png"> </div>
				<div data-wow-delay="1.2s" class="wow bounceInLeft text1">Sản phẩm đầu tiên cải thiện chất lượng giấc ngủ
					CHUYÊN BIỆT CHO PHỤ NỮ</div>
				<div data-wow-delay="1s" class="wow bounceInLeft con1"><img src="images/con1.png"></div>
				<div data-wow-delay="1.8s" class="wow bounceInRight text2">Được nghiên cứu lâm sàng thành công tại Bệnh
					viện Quân y 103</div>
				<div data-wow-delay="1.5s" class="wow bounceInRight con2"><img src="images/con2.png"></div>
				<div data-wow-delay="2.2s" class="wow bounceInLeft text3">
					Sản phẩm DUY NHẤT <strong>không gây hại đến hệ thần kinh trung ương</strong>
				</div>
				<div data-wow-delay="2s" class="wow bounceInLeft con3"><img src="images/con3.png"></div>
				<div data-wow-delay="2.7s" class="wow bounceInRight text4">
					Bí quyết chăm sóc giấc ngủ đến từ HOÀNG CUNG
					TINH HOA CHÂN TRUYỀN HƠN 300 NĂM
				</div>
				<div data-wow-delay="2.5s" class="wow bounceInRight con4"><img src="images/con4.png"></div>
				<div data-wow-delay="3.2s" class="wow bounceInUp text5">
					<strong>100% nguyên liệu từ Thảo dược</strong>, được Bộ Y tế chứng nhận (659/2015/ATTP-XNCB)</div>
				<div data-wow-delay="3s" class="wow bounceInUp con5"><img src="images/con5.png"></div>
			</div>
		</div>
		<div id="qtmobile"><img src="images/tai_sao_chon.png"></div>
	</section>
</div>
<div class="getleads">
	<section id="cta1-3" class="p-y-md bg-edit" data-selector="block" style="background: url('images/bghome.png') top center; padding-top:30px;padding-bottom:10px;">
		<div class="container">
			<div class="row">

				<section class="slider">
					<div class="flexslider carousel">
						<ul class="slides" style="margin:auto;">
							<li>
								<img src="images/khachang1.jpg" />
								<p>Sau một thời gian sử dụng An Giấc Nữ, giấc ngủ đã quay trở lại với tôi thật dễ dàng. Dù không ngủ được 7-8 tiếng nhưng tôi vẫn cảm thấy thật tỉnh táo và sảng khoái mỗi khi thức dậy.
								</p>
								<div>
									<span style="color:#333333;font-weight: bold;">Đặng Thanh Xuân</span>
									<p>Nhân viên kế toán</p>
								</div>
							</li>
							<li>
								<img src="images/khachang2.jpg" />
								<p>Tôi rất yên tâm khi sử dụng An Giấc Nữ vì thành phần của thuốc đều là những thảo dược mà mình biết. Sử dụng một thời gian tôi thấy thật bất ngờ khi kết hợp các loại thảo dược lại có thể tạo ra được 1 bài thuốc chữa trị mất ngủ hiệu quả đến như thế.
								</p>
								<div>
									<span style="color:#333333;font-weight: bold;">Ngô Thị Nga</span>
									<p>Hải Dương</p>
								</div>
							</li>
							<li>
								<img src="images/khachang3.jpg" />
								<p>An Giấc Nữ đúng là bài thuốc mà tôi tìm kiếm bấy lâu nay. Tôi ngủ được sâu giấc hơn, không còn chập chờn, mộng mị và cả ngày luôn thấy khỏe khoắn, tràn đầy năng lượng.
								</p>
								<div>
									<span style="color:#333333;font-weight: bold;">Vũ Thị Cậy</span>
									<p>Hoàng Mai - Hà Nội</p>
								</div>
							</li>
							<li>
								<img src="images/khachang4.png" />
								<p>An Giấc Nữ như mang lại cho tôi một cuộc sống mới vậy. Tôi không còn bị mất ngủ nữa, không còn bị các cơn đau đầu do mất ngủ hành hạ. Cảm ơn An Giấc Nữ.
								</p>
								<div>
									<span style="color:#333333;font-weight: bold;">Nguyễn Thị Xuân</span>
									<p>Hà Nội</p>
								</div>
							</li>
							<li>
								<img src="images/khachang5.jpg" />
								<p>Trước đây, khi chưa sử dụng An Giấc Nữ, tôi rất khó khăn trong việc ngủ lại khi bị thức dậy giữa đêm, bây giờ thì điều đó không còn là vấn đề nữa, tôi có giấc ngủ lại thật dễ dàng.
								</p>
								<div>
									<span style="color:#333333;font-weight: bold;">Chu Thị Thanh</span>
									<p>Vinahankook Medical Supplies Co., JSC</p>
								</div>
							</li>
						</ul>
					</div>
				</section>

				<p style=" font-size:22px; padding:5px; font-weight:bold; color:#333333; text-align:center; text-transform:uppercase">HƠN 20.000 PHỤ NỮ VIỆT NAM ĐÃ TIN DÙNG AN GIẤC NỮ</p>

				<!-- FlexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>

				<script type="text/javascript">
					$(function(){
						SyntaxHighlighter.all();
					});
					$(window).load(function(){
						$('.flexslider').flexslider({
							animation: "slide",
							animationLoop: false,
							itemWidth: 300,
							itemMargin: 5,
							minItems: 1,
							maxItems: 3,
							start: function(slider){
								$('body').removeClass('loading');
							}
						});
					});
				</script>
			</div>

	</section>
</div>
<div class="getleads">
	<section id="testimonials3-1" class="p-y-lg bg-edit" data-selector="block" style="background-color:#ffffff;border-radius:0px;padding-top:50px;padding-bottom:50px;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="text-center wow fadeIn" style="visibility: visible; animation: fadeIn;">
						<h2 data-selector="text1" style="color:#d14cb8; text-transform:uppercase; font-size:28px;">Thành phần sản phẩm</h2>
						<p class="lead" data-selector="text2" style="color:#333333;font-size:18px;margin-bottom:10px;">
							Sản phẩm được bào chế theo <strong>công thức đặc biệt</strong> bằng công nghệ hiện đại chiết xuất những gì tinh
							<strong>túy nhất của dược liệu</strong> và cô đặc bên trong một viên nén đặc biệt có cấu tạo <strong>không bọc màng film
							với lượng tá dược cực nhỏ.</strong>
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div id="quytrinh">
					<div data-wow-delay="1s" class="wow zoomIn quytrinh" style="visibility: visible; animation-delay: 1s; animation-name: zoomIn;"></div>
					<div data-wow-delay="1.2s" class="wow zoomIn quytrinhx" style="visibility: visible; animation-delay: 1.2s; animation-name: zoomIn;"><img src="images/quy-trinh1.png"> </div>
					<div data-wow-delay="1.5s" class="wow zoomIn quytrinh1" style="visibility: visible; animation-delay: 1.5s; animation-name: zoomIn;"><img src="images/dinhlang.gif"  style="width: 150px;height: 150px; border-radius: 150px;"> </div>
					<div data-wow-delay="1.7s" class="wow zoomIn qttext1" style="visibility: visible; animation-delay: 1.7s; animation-name: zoomIn;">
						<p>
							<a id="cao_dinh_lang" class="btn" rel="popover" data-content="" style="font-size: 22px; color: #69696E;font-weight: normal;padding:0px;">Cao Đinh Lăng 200 mg</a>
							<script>
								var image = '<img src="images/cao_dinh_lang.png"  style="width: 150px;height: 150px;">';
								$('#cao_dinh_lang').popover({placement: 'bottom', content: image, html: true});
							</script>
						</p>
					</div>
					<div data-wow-delay="2s" class="wow zoomIn quytrinh2" style="visibility: visible; animation-delay: 2s; animation-name: zoomIn;"><img src="images/caolactien.jpg" style="width: 150px;height: 150px; border-radius: 150px;"> </div>
					<div data-wow-delay="2.2s" class="wow bounceInRight qttext2" style="visibility: visible; animation-delay: 2.2s; animation-name: bounceInRight;">
						<p>
							<a id="cao_lac_tien" class="btn" rel="popover" data-content="" style="font-size: 22px; color: #69696E;font-weight: normal;padding:0px;">Cao Lạc Tiên 140 mg</a>
							<script>
								var image = '<img src="images/cao_lac_tien.png">';
								$('#cao_lac_tien').popover({placement: 'bottom', content: image, html: true});
							</script>
						</p>
					</div>

					<div data-wow-delay="2.5s" class="wow zoomIn quytrinh3" style="visibility: visible; animation-delay: 2.5s; animation-name: zoomIn;"><img src="images/caoichmau.jpg" style="width: 150px;height: 150px; border-radius: 150px;"> </div>
					<div data-wow-delay="2.7s" class="wow bounceInLeft qttext3" style="visibility: visible; animation-delay: 2.7s; animation-name: bounceInLeft;">
						<p style="font-size: 26px;">
							<a id="cao_ich_mau" class="btn" rel="popover" data-content=""  style="font-size: 22px; color: #69696E;font-weight: normal;padding:0px;">Cao Ích Mẫu 100 mg</a>
							<script>
								var image = '<img src="images/cao_ich_mau.png">';
								$('#cao_ich_mau').popover({placement: 'bottom', content: image, html: true});
							</script>
						</p>
					</div>

					<div data-wow-delay="3s" class="wow zoomIn quytrinh4" style="visibility: visible; animation-delay: 3s; animation-name: zoomIn;"><img src="images/caohuongphu.jpg" style="width: 150px;height: 150px; border-radius: 150px;"> </div>
					<div data-wow-delay="3.2s" class="wow bounceInLeft qttext4" style="visibility: visible; animation-delay: 3.2s; animation-name: bounceInLeft;">
						<p>
							<a id="cao_huong_phu" class="btn" rel="popover" data-content="" style="font-size: 22px; color: #69696E;font-weight: normal;padding:0px;">Cao Hương Phụ 40 mg</a>
							<script>
								var image = '<img src="images/cao_huong_phu.png">';
								$('#cao_huong_phu').popover({placement: 'bottom', content: image, html: true});
							</script>
						</p>
					</div>
					<div data-wow-delay="3.4s" class="wow zoomIn quytrinh5" style="visibility: visible; animation-delay: 4s; animation-name: zoomIn;"><img src="images/caochitu.jpg" style="width: 150px;height: 150px; border-radius: 150px;"> </div>
					<div data-wow-delay="3.7s" class="wow fadeInRight qttext5" style="visibility: visible; animation-delay: 4.2s; animation-name: fadeInRight;">
						<p>
							<a id="cao_chi_tu" class="btn" rel="popover" data-content="" style="font-size: 22px; color: #69696E;font-weight: normal;padding:0px;">Cao Chi Tử 20 mg</a>
							<script>
								var image = '<img src="images/cao_chi_tu.png">';
								$('#cao_chi_tu').popover({placement: 'bottom', content: image, html: true});
							</script>
						</p>
					</div>

				</div>
				<div id="qtmobile"><img src="images/quitrinh_mobile.png"></div>
			</div>
		</div>
	</section>
</div>

<div class="getleads">
	<section id="contact3-2" class="p-y-lg contact bg-edit bg-dark" data-selector="block" style="background: url('images/bgft.jpg') top center;border-radius:0px;padding-top:20px;padding-bottom:50px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center text-white wow fadeIn" style="visibility: visible; animation: fadeIn; -webkit-animation: fadeIn;">
						<h2 data-selector="text1" style="font-weight:400;color:#ffffff;font-size:36px;margin-bottom:10px;">ĐĂNG KÝ MUA HÀNG TRỰC TUYẾN & TƯ VẤN SẢN PHẨM</h2>
						<p class="lead" data-selector="text2" style="font-weight:400;color:#ffffff;font-size:22px;margin-bottom:10px;"></p>
					</div>
				</div>
			</div>
			<div class="row">
				<form class="horizontal form-white" id="contactform" method="post" action="index.php#contact3-2">

					<div class="col-xs-12 col-sm-6">
						<h4 style="color:#ffffff;text-transform:none; ">Bước 1: Điền thông tin khách hàng</h4>
							<?php if(isset($message)){ ?>
								<p style="color: red;
											text-align: center;
											font-size: 20px;"> <?php echo $message; ?></p>
							<?php } ?>

							<div class="form-group">
								<input id="name" class="form-control" name="name" value="<?php if(isset($_POST['name'])) { echo $_POST['name']; } ?>" type="text" required placeholder="Họ và tên *" required oninvalid="setCustomValidity('Họ và tên không để trống')" oninput="setCustomValidity('')">
							</div>
							<div class="form-group">
								<input id="email" class="form-control" name="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>" type="text" required placeholder="Địa chỉ email *" required pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" oninvalid="setCustomValidity('Địa chỉ email không chính xác!')" oninput="setCustomValidity('')">
							</div>
							<div class="form-group">
								<input id="phone" class="form-control"name="phone" value="<?php if(isset($_POST['phone'])) { echo $_POST['phone']; } ?>" type="text" required placeholder="Số điện thoại *" required pattern="^[0-9]{10,12}$" oninvalid="setCustomValidity('Số điện thoại không đúng')" oninput="setCustomValidity('')">
							</div>
							<div class="form-group">
								<textarea id="question_1" name="question_1" class="form-control" rows="5" style="" placeholder="Nội dung câu hỏi & Địa chỉ nhận hàng"><?php if(isset($_POST['question_1'])) { echo $_POST['question_1']; } ?></textarea>
							</div>
							<div class="form-group">
								<p style="color: #fff; font-size: 17px; text-align: center; margin-top: 20px; font-weight: 900;">
									Chúng tôi cam kết <strong>BẢO MẬT</strong> mọi thông tin của khách hàng giống như bảo vệ tài sản của chính chúng tôi!
								</p>


							</div>
					</div>

					<div class="col-xs-12 col-sm-6" style="color:#ffffff;">
						<h4>Bước 2: Lựa chọn gói liệu trình</h4>
						<p>Xin quý khách vui lòng lựa chọn một trong ba gói liệu trình sau:</p>
						<p>
							<input name="choice" value="3" type="radio" <?php if(isset($_POST['choice'])){if($_POST['choice']==3){ echo 'checked="checked"'; }} ?>>
							<span class="wpcf7-list-item-label">3 hộp ⇒ 645.000đ</span>
						</p>

						<p>
							<input name="choice" value="5" type="radio" <?php if(isset($_POST['choice'])){if($_POST['choice']==5){ echo 'checked="checked"'; }} ?>>
							<span class="wpcf7-list-item-label">5 hộp ⇒ 969.000đ (~10% ↓)</span>
						</p>

						<p>
							<input name="choice" value="10" type="radio" <?php if(isset($_POST['choice'])){if($_POST['choice']==10){ echo 'checked="checked"'; }} ?>>
							<span class="wpcf7-list-item-label">10 hộp ⇒ 1.900.000đ (~12% ↓)</span>
						</p>
						<br>
						<div class="form-group m-b-0" style="margin: auto; text-align: center;">
							<button type="submit" name="noi_dung_cau_hoi" class="btn btn-green wow pulse" data-wow-iteration="2" data-selector="btn" style="font-weight: 700; color: rgb(255, 255, 255); background-color: #f8981d; border-width: 0px; border-style: solid; padding: 20px; font-size: 16px; max-width: 400px; visibility: visible; animation-iteration-count: 2; animation-name: pulse;">GỬI ĐƠN HÀNG NGAY!</button>
						</div>
						<br>
						<p><b>Lưu ý:</b></p>
						<ul style="padding-left: 18px;font-size:14px;">
							<li>Quý khách thanh toán sau khi nhận hàng.</li>
							<li>Giá trên đã bao gồm toàn bộ chi phí cần thanh toán (đối với khách hàng tại Việt Nam).</li>
							<li>Quý khách kiểm tra hàng trước khi thanh toán.</li>
							<li>Hàng sẽ được giao trong vòng 1 - 2 ngày. Tuy nhiên khó tránh khỏi một số tình huống ngoài ý muốn gây ra chậm trễ, kính mong quý khách thông cảm.</li>
							<li>Mọi phản ánh xin vui lòng gọi đến <a href="tel:18006684" style="color: #a72592; "><b>1800.6684</b></a></li>
						</ul>
					</div>

				</form>
			</div>

			<div class="row" style="border-top: 5px solid #A72592; margin-top:30px;">
				<div class="col-md-4">
					<p style="padding-top:20px;"><img src="images/logo-white.png"></p>
				</div>
				<div class="col-md-4">
					<p style="padding-top:20px;color:#fff;"><b>Liên hệ:</b></p>
					<p style="color:#fff; font-size:13px;margin:0;"> Công ty CP Dược Phẩm Huệ Đức</p>
					<p style="color:#fff; font-size:13px;margin:0;">32/47 Nguyên Hồng, P. Láng Hạ, Q. Đống Đa, TP. Hà Nội</p>
					<p style="color:#fff; font-size:13px;margin:0;">Điện thoại (04) 3766 7999 - Fax (04) 3622 7979</p>
					<p style="color:#fff; font-size:13px;margin:0;">Tư vấn miễn phí 1800 6684</p>
				</div>
				<div class="col-md-4">
					<p style="padding-top:20px; padding-bottom:8px;color:#fff;"><b>Find us:</b></p>
					<a href="#"><img src="images/gplus.png"></a>
					<a href="https://www.facebook.com/angiacnu.vn"><img src="images/icon-face.png"></a>
					<a href="#"><img src="images/icon-ytb.png"></a>
					<a href="#"><img src="images/icon-imp.png"></a>
				</div>
			</div>
		</div>
	</section>
</div>


</body>
</html>




