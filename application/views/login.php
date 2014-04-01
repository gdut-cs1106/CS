<? $this->load->view('header'); ?>

<!--这里是最上面的小横条，用来放logo和一些小东西-->
<div class="navbar navbar-static-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="<?=site_url('site'); ?>"><img src="<?=base_url('css/img/logo.png'); ?>"></a>
			<a href="#" class="sign_up"><img src="<?=base_url('css/img/signup.png'); ?>"></a>
		</div>
	</div>
</div>
<!--这里是登陆页面内容-->
<!--网上找的图片色调不协调，所以用素描处理先把颜色都去掉了，等找到新的合适图片再合成新的背景来代替-->
<div class="container" id="login_container">
	<div id="login">
		<form action="<?=site_url('Login/login'); ?>" method="post">
			<h4>Login</h4>
			<input type="text" name="id" placeholder="ID" />
			<input type="password" name="pwd" placeholder="Password" /><br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="submit" class="btn btn-info">
				<i class="icon-home icon-white"></i> Login
			</button>
      </form>
	</div>
</div>

<? $this->load->view('footer'); ?>