<?php
	class Payroll {
		private string $firstname = "Aaron";
		private string $lastname = "Juayan";

		private int $tax = 50;
		private int $salary = 500;

		public function computeNet() : float {
			$net = $this->salary - $this->tax;
			return $net;
		}

		public function getemployeeName() : string {
			return $this->firstname. ",".$this->lastname;
		}
		}

		$Payroll = new Payroll ();

		echo "First Name: ". $Payroll->getEmployeeName() . "br/>";
		echo "Net: ". $Payroll->computeNet();
	
?>