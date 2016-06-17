<?php
	class Billing
	{
		private $billId;
		private $comments;
		private $pdf;
		private $stats;
	
		public function __construct(){}
		
		public function getBillId(){return ($this->billId);}
		public function getComments(){return ($this->comments);}
		public function getPdf(){return ($this->pdf);}
		
		public function setBillId($billId){$this->billId = $billId;}
		public function setComments($comments){$this->comments = $comments;}
		public function setPdf($pdf){$this->pdf = $pdf;}
		public function setStats($stats){}
	}
?>