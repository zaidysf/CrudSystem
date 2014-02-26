<?php
function __($text){
	$data = $text."\n";
	echo $data;
}
# ========= DOCTYPE FUNCTION ========== #
function doctype_(){
	$data = "<!DOCTYPE html>\n";
	echo $data;
}
# ========= END OF DOCTYPE FUNCTION ========== #
# ========= HTML FUNCTION ========== #
function html1($attr){
	$data = "<html ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">\n";
	echo $data;
}
function html2(){
	$data = "</html>\n";
	echo $data;
}
# ========= END OF HTML FUNCTION ========== #
# ========= HEAD FUNCTION ========== #
function head1($attr){
	$data = "<head ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">\n";
	echo $data;
}
function head2(){
	$data = "</head>\n";
	echo $data;
}
# ========= END OF HEAD FUNCTION ========== #
# ========= META FUNCTION ========== #
function meta_($attr){
	$data = "<meta ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">\n";
	echo $data;
}
# ========= END OF META FUNCTION ========== #
# ========= TITLE FUNCTION ========== #
function title_($attr,$text){
	$data = "<title ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">".$text."</title>\n";
	echo $data;
}
# ========= END OF TITLE FUNCTION ========== #
# ========= LINK FUNCTION ========== #
function link_($attr){
	$data = "<link ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">\n";
	echo $data;
}
# ========= END OF LINK FUNCTION ========== #
# ========= BODY FUNCTION ========== #
function body1($attr){
	$data = "<body ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">\n";
	echo $data;
}
function body2(){
	$data = "</body>\n";
	echo $data;
}
# ========= END OF BODY FUNCTION ========== #
# ========= A FUNCTION ========== #
function a_($attr,$text){
	$data = "<a ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">".$text."</a>\n";
	echo $data;
}
function a1($attr){
	$data = "<a ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">\n";
	echo $data;
}
function a2(){
	$data = "</a>\n";
	echo $data;
}
# ========= END OF A FUNCTION ========== #
# ========= B FUNCTION ========== #
function b_($attr,$text){
	$data = "<b ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">".$text."</b>\n";
	echo $data;
}
function b1($attr){
	$data = "<b ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">\n";
	echo $data;
}
function b2(){
	$data = "</b>\n";
	echo $data;
}
# ========= END OF B FUNCTION ========== #
# ========= ABBR FUNCTION ========== #
function abbr_($attr,$text){
	$data = "<abbr ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">".$text."</abbr>\n";
	echo $data;
}
# ========= END OF ABBR FUNCTION ========== #
# ========= BR FUNCTION ========== #
function br_($loop){
	if(is_numeric($loop)){
		for($i = 1;$i <= $loop;$i++){
			echo "<br/>";
		}
		echo "\n";
	}
	else{
		echo "your BR tag must be a number";
		exit;
	}
}
# ========= END OF BR FUNCTION ========== #
# ========= BUTTON FUNCTION ========== #
function button_($attr,$text){
	$data = "<button ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">".$text."</button>\n";
	echo $data;
}
function button1($attr){
	$data = "<button ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">\n";
	echo $data;
}
function button2(){
	$data = "</button>\n";
	echo $data;
}
# ========= END OF BUTTON FUNCTION ========== #
# ========= DIV FUNCTION ========== #
function div_($attr,$text){
	$data = "<div ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">".$text."</div>\n";
	echo $data;
}
function div1($attr){
	$data = "<div ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">\n";
	echo $data;
}
function div2(){
	$data = "</div>\n";
	echo $data;
}
# ========= END OF DIV FUNCTION ========== #
# ========= FORM FUNCTION ========== #
function form1($attr){
	$data = "<form ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">\n";
	echo $data;
}
function form2(){
	$data = "</form>\n";
	echo $data;
}
# ========= END OF FORM FUNCTION ========== #
# ========= INPUT FUNCTION ========== #
function input_($attr){
	$data = "<input ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">\n";
	echo $data;
}
# ========= END OF INPUT FUNCTION ========== #
# ========= SPAN FUNCTION ========== #
function span_($attr,$text){
	$data = "<span ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">".$text."</span>\n";
	echo $data;
}
function span1($attr){
	$data = "<span ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">\n";
	echo $data;
}
function span2(){
	$data = "</span>\n";
	echo $data;
}
# ========= END OF SPAN FUNCTION ========== #
# ========= UL FUNCTION ========== #
function ul1($attr){
	$data = "<ul ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">\n";
	echo $data;
}
function ul2(){
	$data = "</ul>\n";
	echo $data;
}
# ========= END OF UL FUNCTION ========== #
# ========= OL FUNCTION ========== #
function ol1($attr){
	$data = "<ol ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">\n";
	echo $data;
}
function ol2(){
	$data = "</ol>\n";
	echo $data;
}
# ========= END OF OL FUNCTION ========== #
# ========= LI FUNCTION ========== #
function li_($attr,$text){
	$data = "<li ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">".$text."</li>\n";
	echo $data;
}
function li1($attr){
	$data = "<li ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">\n";
	echo $data;
}
function li2(){
	$data = "</li>\n";
	echo $data;
}
# ========= END OF LI FUNCTION ========== #
# ========= H FUNCTION ========== #
function h_($type,$attr,$text){
	$data = "<h".$type." ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">".$text."</h".$type.">\n";
	echo $data;
}
function h1($type,$attr){
	$data = "<h".$type." ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">\n";
	echo $data;
}
function h2($type){
	$data = "</h".$type.">\n";
	echo $data;
}
# ========= END OF H FUNCTION ========== #
# ========= P FUNCTION ========== #
function p_($attr,$text){
	$data = "<p ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">".$text."</p>\n";
	echo $data;
}
function p1($attr){
	$data = "<p ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">\n";
	echo $data;
}
function p2(){
	$data = "</p>\n";
	echo $data;
}
# ========= END OF P FUNCTION ========== #
# ========= IMAGE FUNCTION ========== #
function img_($attr){
	$data = "<img ";
	if(isset($attr) && $attr != "" && $attr != null){
		foreach($attr as $names => $specs){
			$data .= $names."='".$specs."' ";
		}
	}
	$data .= ">\n";
	echo $data;
}
# ========= END OF P FUNCTION ========== #
?>