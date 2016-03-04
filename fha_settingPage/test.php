<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="main.css">

	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</head>
<body>
	<title>Test Page</title>

	<div>
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#account" aria-controls="account" role="tab" data-toggle="tab">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Account</a>
			</li>
			<li role="presentation"><a href="#programs" aria-controls="programs" role="tab" data-toggle="tab">
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Program Setting</a>
			</li>
			<li role="presentation"><a href="#notification" aria-controls="notification" role="tab" data-toggle="tab">
				<span class="glyphicon glyphicon-alert" aria-hidden="true"></span> Notifications</a>
			</li>
			<li role="presentation"><a href="#about" aria-controls="about" role="tab" data-toggle="tab">
				<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> About</a>
			</li>
			<li role="presentation"><a href="#back" aria-controls="back" role="tab" data-toggle="tab">
				<span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> Back</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active myContain" id="account">
				<form>
					<p style="font-size:18px">登入名稱： <i style="font-size:16px;">訪客</i></p>
					<p style="font-size:13px">更改登入密碼 （非CMHK用戶）<span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="font-size:15px"></span></p>
					<p style="font-size:18px">訂購頻道及訂購記錄 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="font-size:15px"></span></p>
					<img id="utvicon" src="utv_icon.jpg">
				</form>
			</div>
			<div role="tabpanel" class="tab-pane fade in active myContain" id="programs">
				<form>
					<p style="font-size:18px">語言</p>
					<p style="font-size:18px;padding-left:13px">中文（繁體）</p>
					<p style="font-size:18px;padding-left:13px">中文（简体）</p>
					<p style="font-size:18px;padding-left:13px">English</p>
				</form>
			</div>
			<div role="tabpanel" class="tab-pane fade in active myContain" id="notification">
				<div class="btn-group" role="group" aria-label="...">
					<button type="button" class="btn btn-primary">節目通知</button>
					<button type="button" class="btn btn-primary">繳費通知</button>
				</div>
				<form>
					<p style="font-size:25px">No new notifications #</p>
				</form>
			</div>
			<div role="tabpanel" class="tab-pane fade in active myContain" id="about">
				<form>
					<ul style="list-style:none">
						<li style="font-size:25px;color:red">关于</li>
						<li style="font-size:22px;color:grey">版本：1.0.0</li>
						<li style="font-size:22px"><a href="#">使用条款</a></li>
					</ul>
				</form>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="back"><a href="#"></a></div>
		</div>

	</div>
</body>

<script src="myScript.js">
</script>
</html>