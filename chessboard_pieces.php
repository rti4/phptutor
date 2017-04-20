<?php

class cb_square {
	# color can be pink/black
	public $bgcolor = NULL;
	public $cb_uid = NULL;
}


class chessboard {
	#const ALPHA_STR = 'ABCDEFGH';
	private $alpha_str = 'ABCDEFGH';
	private $cb_array = array(array());

	/*
	private function create_alpharow($alpha_str, $length){
		


	}
	*/
	private function populate_square($temp_square, $data){
		$temp_square->bgcolor = $data['bgcolor'];
		$temp_square->cb_uid = $data['col'] . $data['row'];
	}
	private function create_square($i){
		$square = new cb_square();
		return $square;
	}

	private function get_board_color($i, $j){
		$ret_color = 'black';
		$imod = $i % 2;
		$jmod = $j % 2;

		if ($imod === $jmod){
			$ret_color = 'pink';
		}
		return $ret_color;
	}
	//create chessboard
	public function __construct(){
		$temp_data = array();
		
		for ($i =0; $i <8; $i++){
			for ($j=0; $j<8; $j++){
				#$temp_square = create_square();
				$temp_square = new cb_square();
				$temp_data['col'] = $this->alpha_str[$i];
				$temp_data['row'] = $j+1;
				$temp_data['bgcolor'] = $this->get_board_color($i, $j);

				$this->populate_square($temp_square, $temp_data);
				$cb_array[$i][$j] = $temp_square;		
			}
		}
		return $this;
	}

	public function get_board_object(){
		return ($this);

	}
}


# driver of program
$board = new chessboard();
print_r($board->get_board_object);





?>