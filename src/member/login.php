<div id="auth-wrapper">
	<div class="auth-form">
		<p class="title">환영합니다</p>
		<form action="" method="post">
			<input type="hidden" name="action">
    	<div class="input-field">
	      <input id="id" name="id" type="text" class="validate" required autofocus>
        <label for="id">아이디</label>
    	</div>
    	<div class="input-field">
	      <input id="pw" name="pw" type="password" class="validate" required>
      	<label for="pw">비밀번호</label>
    	</div>
			<button type="submit" class="btn">로그인</button>
		</form>
	</div>
	<div class="auth-options">
		계정이 없으신가요?<a href="<?php echo _URL?>member/join"> 가입하기</a>
	</div>
</div>