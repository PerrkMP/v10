<?php

namespace VanguardLTE\Games\BookoftheFallen\PragmaticLib;

class WinPermission
{
    public static function winCheck($fswin, $pur, $bank, &$currentState, $win, $log, $changeBalance, $shop, $rswin){
        // var_dump('7_0_win_'.$win.'_slots_'.$bank->slots.'_fswin_'.$fswin.'_bonus_'.$bank->bonus);
        // If Bonus is less then FS win return false
        if($pur == '0')
            $FSBET = $changeBalance * (($shop->percent - 1) / 100);
        else $FSBET = 0;
        if ($fswin > $bank->bonus - $changeBalance / 2)  return false;
        // if there are no free spins now - check if there is an amount in the bank for payment
        if ($win + $rswin > $bank->slots - $changeBalance / 2)    return false;
        var_dump('win='.$win.'+'.$rswin.'='.$bank->slots);

        return ['win' => $win, 'fswin' => $fswin];
    }

}
