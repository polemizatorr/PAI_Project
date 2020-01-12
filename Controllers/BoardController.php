<?php
require_once ('AppController.php');
require_once ('Models/Subject/Subject.php');
require_once ('Models/Advertisement/Advertisement.php');
require_once ('Repository/UserRepository.php');
require_once ('Repository/SubjectRepository.php');
require_once ('Repository/OpinionRepository.php');
require_once ('Repository/AdvertisementRepository.php');

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
        $Repo = new AdvertisementRepository();
        $Repo2 = new SubjectRepository();

        $Ads = $Repo->getAllAdvertisements(); //returns all ads from database

        foreach ($Ads as $Ad):


            $Ad->setEmail($Repo->getEmail($Ad->getIDAdvertisement()));
            $Ad->setSubject($Repo->getSubject($Ad->getIDAdvertisement()));
            $Ad->setTeachLevel($Repo->getSubjectLevel($Ad->getIDAdvertisement()));


        endforeach;

        $this->render('Ads', ['Ads' => [$Ads]]);
    }

    public function MyAds()
    {
        $Repo = new AdvertisementRepository();

        $Ads = $Repo->getAllUserAdvertisements($_SESSION['Username']);

        foreach ($Ads as $Ad):
            $Ad->setEmail($Repo->getEmail($Ad->getIDAdvertisement()));
            $Ad->setSubject($Repo->getSubject($Ad->getIDAdvertisement()));
            $Ad->setTeachLevel($Repo->getSubjectLevel($Ad->getIDAdvertisement()));
        endforeach;

        $this->render('MyAds', ['Ads' => [$Ads]]);
    }

    public function addAdvertisement() //PLs may it work somehow XD
    {
        if ($this->isPost()) {
            $SubjectName = $_POST['Subject'];
            $TeachLevel = $_POST['TeachLevel'];
            $Description = $_POST['Description'];


            if ($SubjectName === '' || $TeachLevel === '') {

                $this->render('addAdvertisement', ['messages' => ['Fill all inputs!']]);
                return;
            }

            $Repo = new SubjectRepository();
            $Repo->addSubject($SubjectName, $TeachLevel);

            $IDSubject = $Repo->getLastIDSubject(); //returns ID of just added subject

            $Repo2 = new UserRepository();
            $IDUser = $Repo2->getLastIDUser(); //returns ID of currently logged user

            $Repo3 = new AdvertisementRepository();
            $Repo3->addAdvertisement($IDSubject, $IDUser, $Description); // Ads Adv to database

            $this->render('Ads', ['messages' => ['Advert added to database']]);

        }
    }

    public function renderAddAdvertisement()
    {
        $this->render('addAdvertisement');
    }

    public static function loadAdvertisements(): array
    {
        $Repo = new AdvertisementRepository();
        $Repo2 = new SubjectRepository();
        $Repo3 = new UserRepository();

        $Ads = $Repo->getAllAdvertisements(); //returns all ads from database
        if ($Ads === null) die("Wypierdzielilo referencje");

        foreach ($Ads as $Ad):
            {
                $Ad->setSubject($Repo2->getSubject($Ad->getIDSubject()));
                $Ad->setUsername($Repo->getUsername($Ad->getUsername()));
                $Ad->setTeachLevel($Repo2->getTeachLevel($Ad->getTeachLevel()));
            }
        endforeach;

        return $Ads;

    }

    public function RenderAddOpinion()
    {
        $this -> render('AddOpinion');
    }

    public function AddOpinion()
    {
        if ($this -> isPost())
        {
            $WellTeaching = $_POST['WellTeaching'];
            $Knowledge = $_POST['Knowledge'];
            $Accessibility = $_POST['Accessibility'];
            $Involvement = $_POST['Involvement'];

            //print_r($_SESSION['IDAdv'.])

            $Opinion = new Opinion($WellTeaching, $Knowledge, $Accessibility, $Involvement);
            $Repo = new OpinionRepository();


        }
    }

    public function DeleteUser($Username, User $user)
    {
        $user -> deleteUser($Username);
        $this -> render('AdminPanel');
    }



}
?>