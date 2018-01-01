<?php  
/**
* Source by : Joko Purwanto
*/
class Circulation extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged')==FALSE):
			redirect('administrator');
			exit();
		endif;
	}

	function index(){
		$this->get_transaction_id();
	}


	function get_transaction_id(){
		$gt_transaction_id=$this->Circulation_md->get_kode_transaksi();
		$transaction_id='';
		$date=getdate();
		$gtTgl=sprintf("%02d",$date['mday']);
		$gtYear=substr($date['year'],2,4);
		$trans=$gtYear.$gtTgl;

		foreach ($gt_transaction_id->result() as $gtTrans):
			if(($gtTrans->sirkulasi_pinjam_kd==NULL)||(substr($gtTrans->sirkulasi_pinjam_kd,3,5)!= $gtTgl)):
				$transaction_id=$trans.'0001';
			else:
				$substr_id=(int)substr($gtTrans->sirkulasi_pinjam_kd,4,8);
				$tmp=$substr_id+1;
				$transaction_id=$trans.sprintf("%04s",$tmp);
			endif;
		endforeach;

		//return $transaction_id;
		print_r($transaction_id);
	}
}
?>