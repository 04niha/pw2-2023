<?php
function kelulusan($nilai){
        if ($nilai > 55) {
            return "Lulus";
        } else {
            return "Tidak Lulus";
        }
        
		
	}
	function predikat($gde){
		$predikat = array(
			"A" => "Sangat Memuaskan",
			"B" => "Memuaskan",
			"C" => "Cukup",
			"D" => "Kurang",
			"E" => "Sangat Kurang"
		);
	
		if (array_key_exists($gde, $predikat)) {
			return $predikat[$gde];
		} else {
			return "Invalid Grade";
		}
	}
	
	
	
    function gde($nilai) {
        if ($nilai <= 100 && $nilai >= 85) {
            return "A";
        } elseif ($nilai <= 84 && $nilai >= 70) {
            return "B";
        } elseif ($nilai <= 69 && $nilai >= 56) {
            return "C";
        } elseif ($nilai <= 55 && $nilai >= 36) {
            return "D";
        } elseif ($nilai <= 35 && $nilai >= 0) {
            return "E";
        } else {
            return "I";
        }
    }

    
?>