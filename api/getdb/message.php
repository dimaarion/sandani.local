<?php
require_once('index.php');
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
        $din = new DInsert('user_message', [
            'userM_name',
            'userM_tel',
            'userM_mail',
            'userM_tema',
            'userM_content',
            'userM_brouser',
            'userM_ip',
            'userM_data',
            'userM_time'
        ], [
            $name,
            $tel,
            $mail,
            $tema,
            $content,
            $_SERVER['HTTP_USER_AGENT'],
            $_SERVER['REMOTE_ADDR'],
            date('d.m.o'),
            date('H:i:s')
        ]);
        new DMail('dimaarion@gmail.com', '<b>sandani</b><noreply@sandani.ru>', $tema, ['name' => 'Ф. И. О: ' . $name, 'Телефон: ' . 'tel'=>$tel, 'mail' => 'Почта: ' . $mail, 'message' => $content]);
        header('location:/message.html?id=Письмо отправлено');
    } else {
        header('location:/message.html?id=Ошибка! Письмо не отправлено ');
    }
} else {
    header('location:/message.html?id=Ошибка! Письмо не отправлено ');
}
