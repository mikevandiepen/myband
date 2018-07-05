<!-- Views (Header & Navigation) -->
<?php

require ('../private/smarty/Smarty.class.php');
require ('../private/model.php');
require ('../private/controller.php');

$smarty = new Smarty();
$smarty->setCompileDir('../smarty/tmp');
$smarty->setTemplateDir('../views');

define('ARTICLES_PER_PAGE', 5);

isset($_GET['page']) ? $page = $_GET['page'] : $page = 'home';
isset($_GET['pageno']) ? $pageno = $_GET['pageno'] : $pageno = '1';

switch ($page) {
    case 'home' : homepage_action(); break;
    case 'news' : news_action(); break;
    case 'contact' : contact_action(); break;
    default: page_not_found_action(); break;
}
?>

<!-- Page Markup -->
