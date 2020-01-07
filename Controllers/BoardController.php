<?php
require_once ('AppController.php');
class BoardController extends AppController
{

    public function profile()
    {
        $this->render('CreateProfil');
    }

    public function contact()
    {
        $this->render('Contact');
    }

    public function AboutUs()
    {
        $this->render('AboutUs');
    }

    public function HomePage()
    {
        $this->render('HomePage');
    }

    public function Ads()
    {
        $this->render('Ads');
    }



}
?>