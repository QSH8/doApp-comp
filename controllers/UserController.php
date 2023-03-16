<?php
class UserController extends Controller
{
    private $userPageTemplate       = '/views/templates/user.template.php';
    private $userCreatePageTemplate = '/views/templates/user.create.template.php';

    public $pageData;
    public function __construct()
    {
        $this->model = new UserModel();        
        $this->view  = new View();
    }
    public function user($request)
    {
        $this->pageData['title'] = "Главная";
        
        if (isset($_POST['logout_submit'])) {
            $this->logout();
        }

        if ($_POST['login']) {
            $this->login($_POST);
        }
        if ($_SESSION['logged_user']) {
            $this->pageData['info'] = $this->model->getUsers();            
        }

        $this->view->render($this->userPageTemplate, $this->pageData);
    }

    public function create($request)
    {
        $this->pageData['title'] = "Создать пользователя";
        $this->view->render($this->userCreatePageTemplate, $this->pageData);
        
        if (isset($_POST['create'])) {
            $data = array(
                'name'     => $_POST['name'],
                'surname'  => $_POST['surname'],
                'age'      => $_POST['age'],
                'login'    => $_POST['login'],
                'password' => $_POST['password']
            );
            $this->model->createUsers($data);
            
            header('Location: /user');
        }
    }
    public function login($request)
    {

        $userLogin = trim($request['login']);
        $userPassword = $request['password'];

        $isAuth = $this->model->check($userLogin, $userPassword);
        [$result, $message] = $isAuth;
        echo $message;

        if ($result) {
            $_SESSION['logged_user'] = $userLogin;

            return $_SESSION['logged_user'];
        }
    }
    public function logout()
    {
        unset($_SESSION['logged_user']);
    }
}
