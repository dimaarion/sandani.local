<?php
spl_autoload_register(function ($className) {
    require './adminpanel/admin/classes/' . $className . '.php';
});
$controller  = new Controller();
$sansize = new Sansize();
$menuClass = new DSelect('menu');
$menuClassRows = new DSelect('menu');
$articleClassRow = new DSelect('article');
$menu_class = new Menu();
$art_menu_select = new DSelect('menu,article,art_menu');
//Переменные
$menu_alias =  $menuClass->queryRow('alias', $controller->indexPage($sansize->getrequest('alias'), '.html'));
$artRow = $articleClassRow->queryRow('art_alias', $controller->indexPage($sansize->getrequest('alias'), '.html'));
$menu = $menuClassRows->queryRows();
$menu_class->props = $menu;
$art_menu = $art_menu_select->queryRowWhere('menu.menu_id = art_menu.menu AND art_id = art_menu.articles AND menu.menu_id =' . $menu_alias['menu_id']);
// Отправка письма
function intFilter($val)
{
    if (isset($val)) {
        if (is_int($val)) {
            return $val;
        } else {
            if (is_numeric($val)) {
                return intval($val);
            } else {
                return 0;
            }
        }
    } else {
        return 0;
    }
}
$sansize = new Sansize();
$name = $sansize->getrequest('username');
$tel = $sansize->getrequest('usertel');
$mail = $sansize->getrequestEmail('usermail');
$tema = $sansize->getrequest('theme');
$content = $sansize->getrequest('message');
$nameh = intFilter($sansize->getrequestInt('namehidden'));
$telh = intFilter($sansize->getrequestInt('telhidden'));
$mailh = intFilter($sansize->getrequestInt('mailhidden'));
$temah = intFilter($sansize->getrequestInt('themehidden'));
$contenth = intFilter($sansize->getrequestInt('messagehidden'));
$countform = $nameh + $telh  + $mailh + $temah + $contenth;
$countformto = strlen($name) + strlen($tel) + strlen($mail) + strlen($tema) + strlen($content);
if ($countform != 0 && $countformto != 0) {
    if ($nameh != 0 && $telh != 0 && $mailh != 0 && $temah != 0 && $contenth != 0) {
        new DMail('dimaarion@gmail.com', '<b>sandani</b><noreply@sandani.ru>', $tema, ['name' => 'Ф. И. О: ' . $name, 'Телефон: ' . 'tel' => $tel, 'mail' => 'Почта: ' . $mail, 'message' => $content]);
        header('location:/message.html?id=Письмо отправлено');
    } else {
        header('location:/message.html?id=Ошибка! Письмо не отправлено ');
    }
} 


?>