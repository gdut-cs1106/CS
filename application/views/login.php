<? $this->load->view('header'); ?>

<!--�������������С������������logo��һЩС����-->
<div class="navbar navbar-static-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="<?=site_url('site'); ?>"><img src="<?=base_url('css/img/logo.png'); ?>"></a>
			<a href="#" class="sign_up"><img src="<?=base_url('css/img/signup.png'); ?>"></a>
		</div>
	</div>
</div>
<!--�����ǵ�½ҳ������-->
<!--�����ҵ�ͼƬɫ����Э�������������账���Ȱ���ɫ��ȥ���ˣ����ҵ��µĺ���ͼƬ�ٺϳ��µı���������-->
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