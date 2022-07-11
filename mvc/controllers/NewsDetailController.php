<?php
require_once ROOT . DS . 'mvc' . DS . 'controllers' . DS . 'Controller.php';
require_once ROOT . DS . 'mvc' . DS . 'controllers' . DS . 'DefaultController.php';

class NewsdetailController extends DefaultController implements Controller {
		private $id; 					// int

		public function __construct($id){
				$this->id = $id;
		}

		public function __render(){
        self::rendernewsdetail($this->id);
    }

    public function rendernewsdetail($news_id) {
        require_once ROOT . DS . 'application' . DS . 'NewsApplication.php';

        $news=new NewsApplication();
		$news_detail = $news->getNewsdetail($news_id);
		// var_dump($news_detail);
		include ROOT . DS . 'mvc' . DS . 'views' . DS . 'newsdetail.php';
    }
}