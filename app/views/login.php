<?php

class Login extends Controller {

		public function index() {
				$this->view('login/index');
		}

		public function verify() {
				$username = $_REQUEST['username'];
				$password = $_REQUEST['password'];

				$user = $this->model('User');
				$result = $user->authenticate($username, $password);

				if ($result) {
						$_SESSION['user_id'] = $user->id;
						header('Location: index.php');
				} else {
						echo "Invalid credentials";
				}
		}
}
?>
