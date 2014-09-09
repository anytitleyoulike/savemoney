<?php 

class DespesaDao{

	public function addDespesa($despesa) {
		$despesa->save();
		echo "chegou no dao e salvou";
	}

}

?>