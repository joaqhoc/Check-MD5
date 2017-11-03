<html>
<head>
	<title>MD5 | Mainindex</title>
    <meta name="description" content="MainIndex MD5">
    <meta name="author" content="JC">
	<link href="cssd/bootstrap.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/check.js"></script>
	<script type="text/javascript">
		function selectText(containerid) {
		if (document.selection) {
			var range = document.body.createTextRange();
			range.moveToElementText(document.getElementById(containerid));
			range.select();
			} else if (window.getSelection()) {
				var range = document.createRange();
				range.selectNode(document.getElementById(containerid));
				window.getSelection().removeAllRanges();
				window.getSelection().addRange(range);
			}
		}
	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-8" style="margin: 0px auto;float:none;">
			
				<div class="panel panel-default">
					<div class="panel-heading">
					   MD5
					</div>
					<div class="panel-body">
						<textarea name="mailpass" id="mailpass" placeholder="email@domain.com" class="form-control" rows="7"></textarea><br>
						<p align="center">
                            <input type="hidden" name="delim" id="delim" style="text-align: center;display:inline;width: 40px;margin-right: 8px;padding: 4px;" value="|" type="text" class="form-control">
							<button type="button" class="btn btn-success" id="submit">CHEQUEAR</button>
							<button type="button" class="btn btn-danger" id="stop">PARAR</button>
							<img id="loading"><br>
						</p>
                        <p align="right">
                            <span id="checkStatus" style="color:limegreen"></span>
                        </p>
					</div>
				</div>
			</div>
		</div>
		<div class="row" id="result" style="display: none;">
			<div class="col-lg-8" style="margin: 0px auto;float:none;">
				<div class="panel panel-default">
					<div class="panel-heading">
						LIVE&nbsp;<span class="label label-success" id="acc_live_count" style="color:white">0</span>
						<span onclick="selectText('acc_live')" class="pull-right"><a href="javascript:;" style="color:green">Copy all</a><span>
					</div>	
					<div class="panel-body">
						<div id="acc_live"></div>
					</div>
				</div>
			</div>
            <div class="col-lg-8" style="margin: 0px auto;float:none;">
				<div class="panel panel-default">
					<div class="panel-heading">
						DIE&nbsp;<span class="label label-danger" id="acc_die_count" style="color:white">0</span>
					</div>	
					<div class="panel-body">
						<textarea id="acc_die" class="form-control" rows="7"></textarea>
					</div>
				</div>
			</div>
			<div class="col-lg-8" style="margin: 0px auto;float:none;">
				<div class="panel panel-default">
					<div class="panel-heading">
						Limited&nbsp;<span class="label label-warning" id="wrong_count" style="color:white">0</span>
					</div>	
					<div class="panel-body">
						<div id="wrong"></div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>
<!-- TODOS LOS DERECHOS RESERVADOS POR MAININDEX 2017 | https://github.com/joaqhoc/ | http://main-index.vzpla.net/ -->