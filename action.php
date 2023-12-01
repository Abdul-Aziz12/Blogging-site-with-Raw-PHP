<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\FullName;
use App\classes\Calculator;
use App\classes\Auth;

$home = new Home();

/*echo '<pre>';
print_r($_POST);
echo '</pre>';*/

if (isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        $home->index();
    }
    elseif ($_GET['page'] == 'about')
    {
        $home->about();
    }
    elseif ($_GET['page'] == 'contact')
    {
        $home->contact();
    }
    elseif ($_GET['page'] == 'protfolio')
    {
        $home->protfolio();
    }
    elseif ($_GET['page'] == 'detail')
    {
        $home->detail($_GET['id']);
    }
    elseif ($_GET['page'] == 'login')
    {
       $home->login();
    }elseif ($_GET['page'] == 'dashboard')
    {
       $home->dashboard();
    }
    elseif ($_GET['page'] == 'logout')
    {
        $home->logout();
    }

}
elseif (isset($_POST['full_name_btn']))
{
    $fullName = new FullName($_POST);
    $fullName->getfullName();
}
elseif (isset($_POST['calculator_btn']))
{
    $calculator = new Calculator($_POST);
    $calculator->getresult();
}
elseif (isset($_POST['login_btn']))
{
    $auth = new Auth();
    $auth->login($_POST);
    $message = $auth->login($_POST);
    if ($message == 'success')
    {
        header('Location: action.php?page=dashboard');
    }
}