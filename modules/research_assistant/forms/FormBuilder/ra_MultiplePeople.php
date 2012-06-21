$out .= '<table align="center"><tr><td class="descriptionbox">'.$pgv_lang["rows"].'</td><td class="optionbox"><select name="numOfRows">';
	    for($i = 1; $i <= 20; $i++){
	    $out .= '<option value="'.$i.'"';
	    if ($_REQUEST['numOfRows']==$i) $out .= " selected=\"selected\"";
	    $out .= '>'.$i;
	    }
	    $out .= '</select></td></tr><tr><td colspan="2" class="topbottombar"><input type="submit" value="'.$pgv_lang["okay"].'"/></td></tr></table>';
	    $out .= '</form>';
    }
