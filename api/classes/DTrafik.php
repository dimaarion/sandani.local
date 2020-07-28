<?php
class DTrafik
{

    private $user = '';
    private $countUser = 0;
    private $abc =  ['A', 'a', 'B', 'b', 'V', 'v', 'G', 'g', 'D', 'd', 'E', 'e', 'E', 'e', 'J', 'j', 'Z', 'z', 'I', 'i', 'I', 'i', 'K', 'k', 'L', 'l', 'M', 'm', 'N', 'n', 'O', 'o', 'P', 'p', 'R', 'r', 'S', 's', 'T', 't', 'U', 'u', 'F', 'f', 'H', 'h', 'C', 'c', 'C', 'c', 'H', 'h', 'H', 'h', 'E', 'e', 'I', 'i', 'Y', 'y', 'I', 'i'];
    private $randToken = [];
    private $filterInt = '/[0-9]+/';

    function __construct()
    {
        session_start();
        $this->sansize = new Sansize();
    }

    public function tokenUsers()
    {

        for ($i = 0; $i < count($this->abc); $i++) {
            $this->randToken[$i] = $this->abc[random_int(0, count($this->abc))];
        }
        if (!isset($_SESSION['users'])) {
            return  $_SESSION['users'] = join('', $this->randToken);
        }
    }


    public function trafikDay()
    {
        $m = preg_replace('/[0]+/', '', date('m'));
        $sj = join('', ['trafik_dey_', date('d')]);
        $s = new DSelect('trafik');
        $n = $s->queryRow('trafik_id', $m);
        $nd  = $n[$sj] + 1;
        $nm = $n['trafik_site'] + 1;
        preg_match($this->filterInt, $nd, $nd);
        new DUpdate('trafik', [$sj, 'trafik_id'], [$nd[0]], $m);
        new DUpdate('trafik', ['trafik_site', 'trafik_id'], [$nm], $m);
        if(date('j') <= 7){
            $nmn1 = $n['trafik_week_1'] + 1;
            new DUpdate('trafik', ['trafik_week_1', 'trafik_id'], [$nmn1], $m);
        }elseif(date('j') >= 7 && date('j') <= 14){
            $nmn2 = $n['trafik_week_2'] + 1;
            new DUpdate('trafik', ['trafik_week_2', 'trafik_id'], [$nmn2], $m);
        } elseif (date('j') >= 14 && date('j') <= 21) {
            $nmn3 = $n['trafik_week_3'] + 1;
            new DUpdate('trafik', ['trafik_week_1', 'trafik_id'], [$nmn3], $m);
        }elseif (21 >= 21 && date('j') <= 48) {
            $nmn4 = $n['trafik_week_4'] + 1;
            new DUpdate('trafik', ['trafik_week_1', 'trafik_id'], [$nmn4], $m);
        }
       
    }
}
