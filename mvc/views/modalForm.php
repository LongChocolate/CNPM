<?php
	function get_linkModal()
	{
		echo"
		<link rel='stylesheet' href='asset/css/modal.css'>
		<link rel='stylesheet' href='asset/css/style.css'>
		<script src='asset/js/modal.js'></script>
		<script src='asset/js/validator.js'></script>
		";
	}
	function get_modalLogin()
	{
		return"
		<div class='my-modal' id='myModal-1'>
			<div class='my-modal-overlay'></div>
			<div class='my-modal-container'>
				<div class='my-modal-body'>
					<h6>Form Đăng nhập</h6>
					<div class='header-bottom'>
						<div class='header-right w3agile'>
							<div class='header-left-bottom agileinfo'>
								<form action='' method='post' id='form-1' enctype='multipart/form-data '>
									<div class= 'form-group'>
										<input type='text'  id='sdt' value='' name='sdt' placeholder='Phone Number'/>
										<div class='form-message'></div>
									</div>
									<div class= 'form-group'>
										<input type='password'  id='password' value='' name='password' placeholder='Password' />
										<div class='form-message'></div>
									</div>
									<div class='form-group'>
										<input type='checkbox' name='remember'>
										<label for='remember'>Nhớ Mật Khẩu</label>
									</div>
									<input type='submit' value='Login'>
								</form>	
								<div  onclick='back()' class='span'>Trở về</div>
							</div>
						</div>  
					</div>
				</div>
				<div class='my-modal-footer'>
					<li class='navbar-item Facebook'>
						<a  href='#' class='navbar-item-link'>
							<div class='user'>
								<img src='asset/image/avatar/fb_icon.png' alt='' class='user-ava'>
								<div class='user-info'>
									Đăng nhập bằng Facebook
								</div>
							</div>
						</a>
					</li>
					<br>
					or
					<br>
					<li class='navbar-item Google'>
						<a  href='#' class='navbar-item-link'>
							<div class='user'>
								<img src='asset/image/avatar/google_icon.png' alt='' class='user-ava'>
								<div class='user-info'>
									Đăng nhập bằng Google
								</div>
							</div>
						</a>
					</li>
					<br>
					<li class='navbar-item'>Create Account?
						<a onclick='form(1)' class='navbar-item-link span'>Đăng Ký</a>
					</li>
				</div>
			</div>
		</div>
	";
	}
	function get_modalRegister()
	{
		return
		"
		<div class='my-modal' id='myModal-2'>
			<div class='my-modal-overlay'></div>
			<div class='my-modal-container'>
				<div class='my-modal-body '>
					<h6>Form Đăng nhập</h6>
					<div class='header-bottom'>
						<div class='header-right w3agile'>
							<div class='header-left-bottom agileinfo'>
								<form action='' method='post'  enctype='multipart/form-data' id='form-2'>
									<div class= 'form-group'>
										<input type='text'  id='sdt' value='' name='sdt' placeholder='Phone Number'/>
										<div class='form-message'></div>
									</div>
									<div class= 'form-group'>
										<input type='password'  id='password' value='' name='password' placeholder='Password' />
										<div class='form-message'></div>
									</div>
									<div class= 'form-group'>
										<input type='password'  id='password-confirm' value='' name='password-confirm' placeholder='Nhập Lại Mật Khẩu' />
										<div class='form-message'></div>
									</div>
									<div class= 'form-group'>
										<input type='text'  id='fullname' value='' name='fullname' placeholder='Full Name' />
										<div class='form-message'></div>
									</div>
									<input type='submit' value='Đăng Ký'>
								</form>	
								<div onclick='back()' class='span'>Trở về</div>
								<li class='navbar-item '>Are you have an Account? 
									<a  onclick='form(0)'class='navbar-item-link span'> Đăng Nhập</a>
								</li>
							</div>
						</div>  
					</div>
				</div>
			</div>
		</div>
		";

	}
	function get_Login()
	{
		$modal = get_modalLogin();
		echo "
		$modal
		<script>
			Validator({
				form: '#form-1',
				errorSelector: '.form-message',
				rules:[
					Validator.isRequired('#sdt','Phone Number'),
					Validator.isNumber('#sdt','Phone Number'),
					Validator.isLength('#sdt',12,'Phone Number'),
					Validator.isRequired('#password','Password'),
					Validator.isPassword('#password',6,'Password')
				]
			})
		</script>
		";
	}
	function get_Register()
	{
		$modal = get_modalRegister();
		echo "
		$modal
		<script>
			Validator({
				form: '#form-2',
				errorSelector: '.form-message',
				rules:[
					Validator.isRequired('#sdt','Phone Number'),
					Validator.isNumber('#sdt','Phone Number'),
					Validator.isLength('#sdt',12,'Phone Number'),
					Validator.isRequired('#password','Password'),
					Validator.isLength('#password',6,'Password'),
					Validator.isRequired('#password-confirm','Password confirm'),
					Validator.isConfirmed('#password-confirm',function (){
						return document.querySelector('#form-2 #password').value;
					},'Password confirm'),
					Validator.isRequired('#fullname','Your Name'),
					Validator.isChar('#fullname','Your Name')
				]
			})
		</script>
		";
	}

?>