<?php
/**

 */
/*
if (!function_exists('bulan')) {
    function bulan($bulan)
    {
        // $bulan = Date('m');
        //$bulan="";
        switch ($bulan) {
            case 1:
                $bulan = "Januari";
                break;
            case 2:
                $bulan = "Februari";
                break;
            case 3:
                $bulan = "Maret";
                break;
            case 4:
                $bulan = "April";
                break;
            case 5:
                $bulan = "Mei";
                break;
            case 6:
                $bulan = "Juni";
                break;
            case 7:
                $bulan = "Juli";
                break;
            case 8:
                $bulan = "Agustus";
                break;
            case 9:
                $bulan = "September";
                break;
            case 10:
                $bulan = "Oktober";
                break;
            case 11:
                $bulan = "November";
                break;
            case 12:
                $bulan = "Desember";
                break;
            default:
                $bulan = Date('F');
                break;
        }
        return $bulan;
    }

}*/
/**
 * Fungsi untuk membuat tanggal dalam format bahasa indonesia
 * @param void
 * @return string format tanggal sekarang (contoh: 22 Desember 2016)
 */
if (!function_exists('tanggal')) {
    function tanggal_sekarang()
    {
        $tanggal = Date('d') . " " .bulan(). " ".Date('Y');
        return $tanggal;
    }

    function tanggal_indo($tanggal)
    {
        $pecahkan=explode('-', $tanggal);
        $d=$pecahkan[2];
        $m=$pecahkan[1];
        $y=$pecahkan[0];
        $tanggal=$d.' '.bulan($m).' '.$y;
        //$tanggal=bulan($m);
        return $tanggal;
    }

    function datetimes($tgl, $Jam=1, $day=true)
    {
        /*Contoh Format : 2007-08-15 01:27:45*/
        $tanggal = strtotime($tgl);
        $bln_array = array(
                    '01'=>'Jan',
                    '02'=>'Feb',
                    '03'=>'Mar',
                    '04'=>'Apr',
                    '05'=>'Mei',
                    '06'=>'Jun',
                    '07'=>'Jul',
                    '08'=>'Aug',
                    '09'=>'Sep',
                    '10'=>'Okt',
                    '11'=>'Nov',
                    '12'=>'Des'
                    );
        $hari_arr = array('0'=>'Minggu','1'=>'Senin','2'=>'Selasa','3'=>'Rabu','4'=>'Kamis','5'=>'Jum`at','6'=>'Sabtu');
        $hari = @$hari_arr[date('w', $tanggal)];
        $tggl = date('j', $tanggal);
        $bln = @$bln_array[date('m', $tanggal)];
        $thn = date('Y', $tanggal);
        /* if($Jam==1)$jam=substr($tgl,-8);
        else $jam=''; */
        $jam = $Jam ? date('H:i:s', $tanggal) : '';
        if ($day==false) {
            return "$tggl $bln $thn $jam";
        }
        return "$hari, $tggl $bln $thn $jam";
    }
    function bulan($bln)
    {
        /*Contoh Format : 2*/
        $bln_array = array(
                    '01'=>'Januari',
                    '02'=>'Februari',
                    '03'=>'Maret',
                    '04'=>'April',
                    '05'=>'Mei',
                    '06'=>'Juni',
                    '07'=>'Juli',
                    '08'=>'Agustus',
                    '09'=>'September',
                    '10'=>'Oktober',
                    '11'=>'November',
                    '12'=>'Desember'
                                 );
        
        $thisbulan = @$bln_array[$bln];
        return "$thisbulan";
    }
}
