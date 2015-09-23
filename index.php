<?php

//INCLUDE THE FILES NEEDED...
require_once('view/LoginView.php');
require_once('view/DateTimeView.php');
require_once('view/LayoutView.php');
require_once('model/logInModel.php');
require_once('controller/logInController.php');

//MAKE SURE ERRORS ARE SHOWN... MIGHT WANT TO TURN THIS OFF ON A PUBLIC SERVER
error_reporting(E_ALL);
ini_set('display_errors', 'off');

//CREATE OBJECTS OF THE VIEWS
$lm = new LogInModel();
$v = new LoginView($lm);
$dtv = new DateTimeView();
$lv = new LayoutView();
$lc = new LogInControll($v, $lm);


$lc->LoginChecker();
$lm->DoesSessionExsist();
$checker = $lm->UserWantsToLogInOrOut();
$lv->render($checker, $v, $dtv);

