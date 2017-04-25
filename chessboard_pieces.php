<?php

class cb_square {
	# color can be pink/black
	public $bgcolor = NULL;
	public $cb_uid = NULL;
	public $style = '';
	public $text_color = '';
	public $width = '20px';
	public $height = '20px';
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
		$temp_square->text_color = $data['text_color'];
		$temp_square->style = 'background-color:' . $data['bgcolor'] .';' . 'width: ' . $data['width'] . ';' . 'height: ' . $data['height'] . ';' . 'color: '. $data['text_color'];
		

	}
	/*
	private function create_square($i){
		$square = new cb_square();
		return $square;
	}*/

	private function get_board_color($i, $j){
		$ret_color = 'black';
		$imod = $i % 2;
		$jmod = $j % 2;

		if ($imod === $jmod){
			$ret_color = 'pink';
		}
		return $ret_color;
	}

	private function get_text_color($color){
		$txt_color = 'black';
		if ($color == 'black'){
			$txt_color = 'white';
		}
		return $txt_color;
	}

	//create chessboard
	public function __construct(){
		$temp_data = array();

		$sq_measurements = new cb_square();
		
		for ($i =0; $i <8; $i++){
			for ($j=0; $j<8; $j++){
				#$temp_square = create_square();
				#1. create instance of square
				$temp_square = new cb_square();

				#2. determine attributes of square
				$temp_data['col'] = $this->alpha_str[$i];
				$temp_data['row'] = $j+1;
				$temp_data['bgcolor'] = $this->get_board_color($i, $j);
				$temp_data['text_color'] = $this->get_text_color($temp_data['bgcolor']);
				$temp_data['width'] = $sq_measurements->width;
				$temp_data['height'] = $sq_measurements->height;

				# 3. populates square with temporary data
				$this->populate_square($temp_square, $temp_data);
				#4 .assign sqaure to chessboard
				$this->cb_array[$i][$j] = $temp_square;		
				$cb_array[$i][$j] =$temp_square;

			}
		}
		return $this;
	}

	#responsible for rendering alphabets in html format
	private function render_alpha_row(){
		$alpha_str_len = strlen($this->alpha_str);
		print '<tr><td>' . ' ' . '</td>';
    	for ($i = 0; $i < $alpha_str_len; $i++) {
      		print '<td>'. $this->alpha_str[$i] . '</td>';
  		}
  		print '</tr>';
	}

	#responsible for rendering body of chessboard
	private function render_chessboard_body(){
		for ($i =0; $i < 8; $i++){
			print '<tr>';
			print '<td>' . ($i+1). '</td>';
			for ($j =0; $j < 8; $j++){
				print "<td style=\"{$this->cb_array[$i][$j]->style}\">{$this->cb_array[$i][$j]->cb_uid}</td>";
			}
			print '<td>' . ($i+1). '</td>';			
			print '</tr>';
		}
	}


	public function render_chessboard(){
		print '<table>';
		#render top row of alphabets
		$this->render_alpha_row();
		#render chessboard itself
		$this->render_chessboard_body();
		#render bottom row of alphabets
		$this->render_alpha_row();
		print '</table>';

	}

	public function get_board_object(){
		return ($this);
	}
}


# driver of program
$board = new chessboard();
print_r($board->render_chessboard());






?>