<?php
    class UserController extends Controller
    {
        private $pageTemplate;
        protected $pageData;
        public function __construct() {
            $this->model = new UserModel();
            $this->view = new View();
        }
        public function user() {
            $this->pageTemplate = '/views/templates/user.template.php';
            $this->pageData['title'] = "Главная";
            $this->view->render($this->pageTemplate, $this->pageData);
        }
        public function login() {
            $this->pageTemplate = '/views/templates/user.login.template.php';
            $this->pageData['title'] = "Вход";
            $this->view->render($this->pageTemplate, $this->pageData);
        }
    }
