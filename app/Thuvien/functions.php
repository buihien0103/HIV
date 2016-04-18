<?php
	function dropdown($name,$data, $selected, $extra='') {
        $html = '';
    foreach($opitons as $value => $text) {
            $set_selected = '';
            if($value == $selected) {
                $set_selected = 'selected';
            }
        $html .= '<option value="'.$value.'" '.$set_selected.'>'.$text.'</option>';
    }

         return '<select '.$extra.'>'.$html.'</select>';
}


?>