<?php 
# FIXED NAVBAR
    div1(array("class"=>"navbar navbar-inverse navbar-fixed-top","role"=>"navigation")); 
		div1(array("class"=>"container"));	
        	div1(array("class"=>"navbar-header"));
				button1(array("type"=>"button","class"=>"navbar-toggle","data-toggle"=>"collapse","data-target"=>".navbar-collapse"));
					span_(array("class"=>"sr-only"),"Toggle navigation");
					span_(array("class"=>"icon-bar"),"");
					span_(array("class"=>"icon-bar"),"");
					span_(array("class"=>"icon-bar"),"");
				button2();
				a_(array("class"=>"navbar-brand","href"=>"#"),"Bootstrap Theme");
			div2();
			div1(array("class"=>"navbar-collapse collapse"));
				ul1(array("class"=>"nav navbar-nav"));
					li1(array("class"=>"active"));
						a_(array("href"=>"#"),"Home");
					li2();
					li1("");
						a_(array("href"=>"#about"),"About");
					li2();
					li1("");
						a_(array("href"=>"#contact"),"Contact");
					li2();
					li1(array("class"=>"dropdown"));
						a1(array("href"=>"#","class"=>"dropdown-toggle","data-toggle"=>"dropdown"));
							__("Dropdown");
							b_(array("class"=>"caret"),"");
						a2();
						ul1(array("class"=>"dropdown-menu"));
							li1("");
								a_(array("href"=>"#"),"Action");
							li2();
							li1("");
								a_(array("href"=>"#"),"Another Action");
							li2();
							li1("");
								a_(array("href"=>"#"),"Something else here");
							li2();
							li_(array("class"=>"divider"),"");
							li_(array("class"=>"dropdown-header"),"Nav Header");
							li1("");
								a_(array("href"=>"#"),"Separated link");
							li2();
							li1("");
								a_(array("href"=>"#"),"One more separated link");
							li2();
						ul2();
					li2();
					li1("");
						form1(array("class"=>"navbar-form navbar-right","role"=>"form"));
							div1(array("class"=>"form-group"));
								input_(array("type"=>"text","placeholder"=>"Email","class"=>"form-control"));
							div2();
							div1(array("class"=>"form-group"));
								input_(array("type"=>"password","placeholder"=>"Password","class"=>"form-control"));
							div2();
							button_(array("type"=>"submit","class"=>"btn btn-success"),"Sign in");
						form2();
					li2();
				ul2();
			div2();
		div2();
	div2();
	# END OF FIXED NAVBAR
	br_(3);
?>