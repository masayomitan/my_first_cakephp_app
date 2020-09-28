<?php

namespace App\Controller;

use Cake\Controller\Controller;



class HomeController extends AppController
{

    public function index()
    {
      //変数homestrをセット
      $this->set('home', 'テスト文章てすてすてす！');
    }
}

?>
