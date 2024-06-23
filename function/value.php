<?php
// Nilai normal hemoglobin untuk Laki-Laki dan wanita
function getHemoglobinStatus($hemoglobin, $jenis_kelamin) {
    if ($jenis_kelamin == 'Laki-Laki') {
        if ($hemoglobin >= 14 && $hemoglobin <= 18) {
            return "Normal";
        } elseif ($hemoglobin < 14) {
            return "Low";
        } else {
            return "High";
        }
    } else {
        if ($hemoglobin >= 12 && $hemoglobin <= 16) {
            return "Normal";
        } elseif ($hemoglobin < 12) {
            return "Low";
        } else {
            return "High";
        }
    }
}

// Nilai normal hematokrit untuk Laki-Laki dan wanita
function getHematokritStatus($hematokrit, $jenis_kelamin) {
    if ($jenis_kelamin == 'Laki-Laki') {
        if ($hematokrit >= 41 && $hematokrit <= 54) {
            return "Normal";
        } elseif ($hematokrit < 41) {
            return "Low";
        } else {
            return "High";
        }
    } else {
        if ($hematokrit >= 38 && $hematokrit <= 46) {
            return "Normal";
        } elseif ($hematokrit< 38) {
            return "Low";
        } else {
            return "High";
        }
    }
}

// Nilai normal trombosit
function getTrombositStatus($trombosit) {
    if($trombosit >= 150000 && $trombosit <= 400000){
        return "Normal";
    } elseif ($trombosit <150000){
        return "Low";
    } else {
        return "High";
    }
    
}

// Nilai normal leukosit
function getLeukositStatus($leukosit) {
    if($leukosit >= 50000 && $leukosit <= 100000){
        return "Normal";
    } elseif ($leukosit <50000){
        return "Low";
    } else {
        return "High";
    }
    
}

// Nilai normal LED untuk Laki-Laki dan wanita
function getLedStatus($led, $jenis_kelamin) {
    if ($jenis_kelamin == 'Laki-Laki') {
        if ($led >= 0 && $led <= 15) {
            return "Normal";
        } elseif ($led < 0) {
            return "Low";
        } else {
            return "High";
        }
    } else {
        if ($led >= 0 && $led <= 20) {
            return "Normal";
        } elseif ($led < 0) {
            return "Low";
        } else {
            return "High";
        }
    }
}

// Nilai normal eritrosit untuk Laki-Laki dan wanita
function getEritrositStatus($eritrosit, $jenis_kelamin) {
    if ($jenis_kelamin == 'Laki-Laki') {
        if ($eritrosit >= 4700000 && $eritrosit <= 6100000) {
            return "Normal";
        } elseif ($eritrosit < 4700000) {
            return "Low";
        } else {
            return "High";
        }
    } else {
        if ($eritrosit >= 4200000 && $eritrosit <= 5400000) {
            return "Normal";
        } elseif ($eritrosit< 4200000) {
            return "Low";
        } else {
            return "High";
        }
    }
}

function getMCVStatus($mcv) {
    if($mcv >= 80 && $mcv <= 100){
        return "Normal";
    } elseif ($mcv <80){
        return "Low";
    } else {
        return "High";
    }
    
}

function getMCHStatus($mch) {
    if($mch >= 27.5 && $mch <= 33.2){
        return "Normal";
    } elseif ($mch <27.5){
        return "Low";
    } else {
        return "High";
    }
    
}

function getMCHCStatus($mchc) {
    if($mchc >= 32 && $mchc <= 36){
        return "Normal";
    } elseif ($mchc <32){
        return "Low";
    } else {
        return "High";
    }
    
}

function getSGOTStatus($sgot) {
    if($sgot >= 5 && $sgot <= 40){
        return "Normal";
    } elseif ($sgot <5){
        return "Low";
    } else {
        return "High";
    }
    
}

function getSGPTStatus($sgpt) {
    if($sgpt >= 7 && $sgot <= 56){
        return "Normal";
    } elseif ($sgpt <7){
        return "Low";
    } else {
        return "High";
    }
    
}

function getKolesterolStatus($kolesterol) {
    if($kolesterol >= 70 && $kolesterol <= 200){
        return "Normal";
    } elseif ($kolesterol <70){
        return "Low";
    } else {
        return "High";
    }
    
}

function getHDLStatus($hdl) {
    if ($hdl >= 60) {
        return "Normal";
    } else {
        return "Low";
    }
}

function getLDLStatus($ldl) {
    if ($ldl <= 100) {
        return "Normal";
    } else {
        return "High";
    }
}

function getTGStatus($tg) {
    if ($tg <= 150) {
        return "Normal";
    } else {
        return "High";
    }
}

function getAsamuratStatus($asam_urat, $jenis_kelamin) {
    if ($jenis_kelamin == 'Laki-Laki') {
        if ($asam_urat >= 2.5 && $asam_urat <= 7) {
            return "Normal";
        } elseif ($asam_urat < 2.5) {
            return "Low";
        } else {
            return "High";
        }
    } else {
        if ($asam_urat >= 1.5 && $asam_urat <= 6) {
            return "Normal";
        } elseif ($asam_urat < 1.5) {
            return "Low";
        } else {
            return "High";
        }
    }
}

function getUreumStatus($ureum, $jenis_kelamin) {
    if ($jenis_kelamin == 'Laki-Laki') {
        if ($ureum >= 8 && $asam_urat <= 24) {
            return "Normal";
        } elseif ($ureum < 8) {
            return "Low";
        } else {
            return "High";
        }
    } else {
        if ($ureum >= 6 && $ureum <= 21) {
            return "Normal";
        } elseif ($ureum < 6) {
            return "Low";
        } else {
            return "High";
        }
    }
}

function getCreatinStatus($creatin, $jenis_kelamin) {
    if ($jenis_kelamin == 'Laki-Laki') {
        if ($creatin >= 0.6 && $creatin <= 1.2) {
            return "Normal";
        } elseif ($creatin < 0.6) {
            return "Low";
        } else {
            return "High";
        }
    } else {
        if ($creatin >= 0.5 && $creatin <= 1.1) {
            return "Normal";
        } elseif ($creatin < 0.5) {
            return "Low";
        } else {
            return "High";
        }
    }
}

function getGlucosapuasaStatus($glucosa_puasa, $jenis_kelamin) {
    if ($jenis_kelamin == 'Laki-Laki') {
        if ($glucosa_puasa >= 90 && $glucosa_puasa <= 100) {
            return "Normal";
        } elseif ($glucosa_puasa < 90) {
            return "Low";
        } else {
            return "High";
        }
    } else {
        if ($glucosa_puasa >= 90 && $glucosa_puasa <= 100) {
            return "Normal";
        } elseif ($glucosa_puasa < 90) {
            return "Low";
        } else {
            return "High";
        }
    }
}

function getGlucosappStatus($glucosa_pp, $jenis_kelamin) {
    if ($jenis_kelamin == 'Laki-Laki') {
        if ($glucosa_pp >= 90 && $glucosa_pp <= 140) {
            return "Normal";
        } elseif ($glucosa_pp < 90) {
            return "Low";
        } else {
            return "High";
        }
    } else {
        if ($glucosa_pp >= 90 && $glucosa_p <= 140) {
            return "Normal";
        } elseif ($glucosa_pp < 90) {
            return "Low";
        } else {
            return "High";
        }
    }
}

function getGDSStatus($gds) {
    if($gds >= 70 && $gds <= 200){
        return "Normal";
    } elseif ($gds <70){
        return "Low";
    } else {
        return "High";
    }
    
}

function getUrinalisaStatus($urinalisa) {
    if($urinalisa >= 5 && $urinalisa <= 8){
        return "Normal";
    } elseif ($urinalisa <5){
        return "Low";
    } else {
        return "High";
    }
    
}
?>