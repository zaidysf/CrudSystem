<?php
load_tpl(array('top'));
body1(array("role"=>"document"));
	load_tpl(array('menu'));
	div1(array("class"=>"container theme-showcase","role"=>"main")); 
    # Main jumbotron for a primary marketing message or call to action
		div1(array("class"=>"jumbotron"));
			h_("1","","Hello, world!");
			p_("","This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.");
			p1("");
				a_(array("href"=>"#","class"=>"btn btn-primary btn-lg","role"=>"button"),"Learn more &raquo;");
			p2();
		div2();
		div1(array("class"=>"page-header"));
			h_("1","","Buttons");
		div2();
		p1("");
			button_(array("type"=>"button","class"=>"btn btn-lg btn-default"),"Default");
			button_(array("type"=>"button","class"=>"btn btn-lg btn-primary"),"Primary");
			button_(array("type"=>"button","class"=>"btn btn-lg btn-success"),"Success");
			button_(array("type"=>"button","class"=>"btn btn-lg btn-info"),"Info");
			button_(array("type"=>"button","class"=>"btn btn-lg btn-warning"),"Warning");
			button_(array("type"=>"button","class"=>"btn btn-lg btn-danger"),"Danger");
			button_(array("type"=>"button","class"=>"btn btn-lg btn-link"),"Link");
		p2();
		p1("");
			button_(array("type"=>"button","class"=>"btn btn-default"),"Default");
			button_(array("type"=>"button","class"=>"btn btn-primary"),"Primary");
			button_(array("type"=>"button","class"=>"btn btn-success"),"Success");
			button_(array("type"=>"button","class"=>"btn btn-info"),"Info");
			button_(array("type"=>"button","class"=>"btn btn-warning"),"Warning");
			button_(array("type"=>"button","class"=>"btn btn-danger"),"Danger");
			button_(array("type"=>"button","class"=>"btn btn-link"),"Link");
		p2();
		p1("");
			button_(array("type"=>"button","class"=>"btn btn-sm btn-default"),"Default");
			button_(array("type"=>"button","class"=>"btn btn-sm btn-primary"),"Primary");
			button_(array("type"=>"button","class"=>"btn btn-sm btn-success"),"Success");
			button_(array("type"=>"button","class"=>"btn btn-sm btn-info"),"Info");
			button_(array("type"=>"button","class"=>"btn btn-sm btn-warning"),"Warning");
			button_(array("type"=>"button","class"=>"btn btn-sm btn-danger"),"Danger");
			button_(array("type"=>"button","class"=>"btn btn-sm btn-link"),"Link");
		p2();
		p1("");
			button_(array("type"=>"button","class"=>"btn btn-xs btn-default"),"Default");
			button_(array("type"=>"button","class"=>"btn btn-xs btn-primary"),"Primary");
			button_(array("type"=>"button","class"=>"btn btn-xs btn-success"),"Success");
			button_(array("type"=>"button","class"=>"btn btn-xs btn-info"),"Info");
			button_(array("type"=>"button","class"=>"btn btn-xs btn-warning"),"Warning");
			button_(array("type"=>"button","class"=>"btn btn-xs btn-danger"),"Danger");
			button_(array("type"=>"button","class"=>"btn btn-xs btn-link"),"Link");
		p2();
		
		div1(array("class"=>"page-header"));
			h_("1","","Thumbnails");
		div2();
		img_(array("data-src"=>"holder.js/200x200","class"=>"img-thumbnail","alt"=>"A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera"));
		
		div1(array("class"=>"page-header"));
			h_("1","","Dropdown menus");
		div2();
		
		div1(array("class"=>"dropdown theme-dropdown clearfix"));
			a1(array("id"=>"dropdownMenu1","href"=>"#","class"=>"sr-only dropdown-toggle","data-toggle"=>"dropdown"));
				__("Dropdown");
				b_(array("class"=>"caret"),"");
			a2();
			ul1(array("class"=>"dropdown-menu","role"=>"menu","aria-labelledby"=>"dropdownMenu1"));
				li1(array("class"=>"active","role"=>"presentation"));
					a_(array("role"=>"menuitem","tabindex"=>"-1","href"=>"#"),"Action");
				li2();
				li1(array("role"=>"presentation"));
					a_(array("role"=>"menuitem","tabindex"=>"-1","href"=>"#"),"Another Action");
				li2();
				li1(array("role"=>"presentation"));
					a_(array("role"=>"menuitem","tabindex"=>"-1","href"=>"#"),"Something else here");
				li2();
				li_(array("role"=>"presentation","class"=>"divider"),"");
				li1(array("role"=>"presentation"));
					a_(array("role"=>"menuitem","tabindex"=>"-1","href"=>"#"),"Separated link");
				li2();
			ul2();
		div2();
		
		div1(array("class"=>"page-header"));
			h_("1","","Navbars");
		div2();
		
		div1(array("class"=>"navbar navbar-default"));
			div1(array("class"=>"container"));
				div1(array("class"=>"navbar-header"));
					button1(array("type"=>"button","class"=>"navbar-toggle","data-toggle"=>"collapse","data-target"=>".navbar-collapse"),"");
						span_(array("class"=>"sr-only"),"Toogle navigation");
						span_(array("class"=>"icon-bar"),"");
						span_(array("class"=>"icon-bar"),"");
						span_(array("class"=>"icon-bar"),"");
					button2();
					a_(array("class"=>"navbar-brand","href"=>"#"),"Project name");
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
									a_(array("href"=>"#"),"Another action");
								li2();
								li1("");
									a_(array("href"=>"#"),"Something else here");
								li2();
								li_(array("class"=>"divider"),"");
								li_(array("class"=>"dropdown-header"),"Nav header");
								li1("");
									a_(array("href"=>"#"),"Separated link");
								li2();
								li1("");
									a_(array("href"=>"#"),"One more separated link");
								li2();
							ul2();
						li2();
					ul2();
				div2(); #.nav-collapse
			div2();
		div2();
		
		div1(array("class"=>"navbar navbar-inverse"));
			div1(array("class"=>"container"));
				div1(array("class"=>"navbar-header"));
					button1(array("type"=>"button","class"=>"navbar-toggle","data-toggle"=>"collapse","data-target"=>".navbar-collapse"),"");
						span_(array("class"=>"sr-only"),"Toogle navigation");
						span_(array("class"=>"icon-bar"),"");
						span_(array("class"=>"icon-bar"),"");
						span_(array("class"=>"icon-bar"),"");
					button2();
					a_(array("class"=>"navbar-brand","href"=>"#"),"Project name");
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
									a_(array("href"=>"#"),"Another action");
								li2();
								li1("");
									a_(array("href"=>"#"),"Something else here");
								li2();
								li_(array("class"=>"divider"),"");
								li_(array("class"=>"dropdown-header"),"Nav header");
								li1("");
									a_(array("href"=>"#"),"Separated link");
								li2();
								li1("");
									a_(array("href"=>"#"),"One more separated link");
								li2();
							ul2();
						li2();
					ul2();
				div2(); #.nav-collapse
			div2();
		div2();
		
		div1(array("class"=>"page-header"));
			h_("1","","Alerts");
		div2();
		div1(array("class"=>"alert alert-success"));
			strong_("","Well done!");
			__(" You successfully read this important alert message.");
		div2();
		div1(array("class"=>"alert alert-info"));
			strong_("","Heads up!");
			__(" This alert needs your attention, but it's not super important.");
		div2();
		div1(array("class"=>"alert alert-warning"));
			strong_("","Warning!");
			__(" Best check yo self, you're not looking too good.");
		div2();
		div1(array("class"=>"alert alert-danger"));
			strong_("","Oh snap!");
			__(" Change a few things up and try submitting again.");
		div2();
		
		div1(array("class"=>"page-header"));
			h_("1","","Progress bars");
		div2();
		div1(array("class"=>"progress"));
			div1(array("class"=>"progress-bar","role"=>"progressbar","aria-valuenow"=>"60","aria-valuemin"=>"0","aria-valuemax"=>"100","style"=>"width: 60%;"));
				span_(array("class"=>"sr-only"),"60% Complete");
			div2();
		div2();
		div1(array("class"=>"progress"));
			div1(array("class"=>"progress-bar progress-bar-success","role"=>"progressbar","aria-valuenow"=>"40","aria-valuemin"=>"0","aria-valuemax"=>"100","style"=>"width: 40%;"));
				span_(array("class"=>"sr-only"),"40% Complete (success)");
			div2();
		div2();
		div1(array("class"=>"progress"));
			div1(array("class"=>"progress-bar progress-bar-info","role"=>"progressbar","aria-valuenow"=>"20","aria-valuemin"=>"0","aria-valuemax"=>"100","style"=>"width: 20%;"));
				span_(array("class"=>"sr-only"),"60% Complete");
			div2();
		div2();
		div1(array("class"=>"progress"));
			div1(array("class"=>"progress-bar progress-bar-warning","role"=>"progressbar","aria-valuenow"=>"60","aria-valuemin"=>"0","aria-valuemax"=>"100","style"=>"width: 60%;"));
				span_(array("class"=>"sr-only"),"60% Complete (warning)");
			div2();
		div2();
		div1(array("class"=>"progress"));
			div1(array("class"=>"progress-bar progress-bar-danger","role"=>"progressbar","aria-valuenow"=>"80","aria-valuemin"=>"0","aria-valuemax"=>"100","style"=>"width: 80%;"));
				span_(array("class"=>"sr-only"),"80% Complete (danger)");
			div2();
		div2();
		
		div1(array("class"=>"progress"));
			div1(array("class"=>"progress-bar progress-bar-success","style"=>"width: 35%;"));
				span_(array("class"=>"sr-only"),"35% Complete (success)");
			div2();
			div1(array("class"=>"progress-bar progress-bar-warning","style"=>"width: 20%;"));
				span_(array("class"=>"sr-only"),"20% Complete (warning)");
			div2();
			div1(array("class"=>"progress-bar progress-bar-danger","style"=>"width: 10%;"));
				span_(array("class"=>"sr-only"),"10% Complete (danger)");
			div2();
		div2();
		
		div1(array("class"=>"page-header"));
			h_("1","","List groups");
		div2();
		div1(array("class"=>"row"));
			div1(array("class"=>"col-sm-4"));
				ul1(array("class"=>"list-group"));
					li_(array("class"=>"list-group-item"),"Cras justo odio");
					li_(array("class"=>"list-group-item"),"Dapibus ac facilisis in");
					li_(array("class"=>"list-group-item"),"Morbi leo risus");
					li_(array("class"=>"list-group-item"),"Porta ac consectetur ac");
					li_(array("class"=>"list-group-item"),"Vestibulum at eros");
				ul2();
			div2(); # /.col-sm-4
			div1(array("class"=>"col-sm-4"));
				div1(array("class"=>"list-group"));
					a_(array("class"=>"list-group-item active"),"Cras justo odio");
					a_(array("class"=>"list-group-item"),"Dapibus ac facilisis in");
					a_(array("class"=>"list-group-item"),"Morbi leo risus");
					a_(array("class"=>"list-group-item"),"Porta ac consectetur ac");
					a_(array("class"=>"list-group-item"),"Vestibulum at eros");
				div2();
			div2(); # /.col-sm-4
			div1(array("class"=>"col-sm-4"));
				div1(array("class"=>"list-group"));
					a1(array("class"=>"list-group-item active"));
						h_("4",array("class"=>"list-group-item-heading"),"List group item heading");
						p_(array("class"=>"list-group-item-text"),"Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.");
					a2();
					a1(array("class"=>"list-group-item"));
						h_("4",array("class"=>"list-group-item-heading"),"List group item heading");
						p_(array("class"=>"list-group-item-text"),"Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.");
					a2();
					a1(array("class"=>"list-group-item"));
						h_("4",array("class"=>"list-group-item-heading"),"List group item heading");
						p_(array("class"=>"list-group-item-text"),"Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.");
					a2();
				div2();
			div2(); # /.col-sm-4
		div2();
		
		div1(array("class"=>"page-header"));
			h_("1","","Panels");
		div2();
		div1(array("class"=>"row"));
			div1(array("class"=>"col-sm-4"));
				div1(array("class"=>"panel panel-default"));
					div1(array("class"=>"panel-heading"));
						h_("3",array("class"=>"panel-title"),"Panel title");
					div2();
					div1(array("class"=>"panel-body"));
						__("Panel content");
					div2();
				div2();
				div1(array("class"=>"panel panel-primary"));
					div1(array("class"=>"panel-heading"));
						h_("3",array("class"=>"panel-title"),"Panel title");
					div2();
					div1(array("class"=>"panel-body"));
						__("Panel content");
					div2();
				div2();
			div2(); # /.col-sm-4
			div1(array("class"=>"col-sm-4"));
				div1(array("class"=>"panel panel-success"));
					div1(array("class"=>"panel-heading"));
						h_("3",array("class"=>"panel-title"),"Panel title");
					div2();
					div1(array("class"=>"panel-body"));
						__("Panel content");
					div2();
				div2();
				div1(array("class"=>"panel panel-info"));
					div1(array("class"=>"panel-heading"));
						h_("3",array("class"=>"panel-title"),"Panel title");
					div2();
					div1(array("class"=>"panel-body"));
						__("Panel content");
					div2();
				div2();
			div2(); # /.col-sm-4
			div1(array("class"=>"col-sm-4"));
				div1(array("class"=>"panel panel-warning"));
					div1(array("class"=>"panel-heading"));
						h_("3",array("class"=>"panel-title"),"Panel title");
					div2();
					div1(array("class"=>"panel-body"));
						__("Panel content");
					div2();
				div2();
				div1(array("class"=>"panel panel-danger"));
					div1(array("class"=>"panel-heading"));
						h_("3",array("class"=>"panel-title"),"Panel title");
					div2();
					div1(array("class"=>"panel-body"));
						__("Panel content");
					div2();
				div2();
			div2(); # /.col-sm-4
		div2();
		
		div1(array("class"=>"page-header"));
			h_("1","","Wells");
		div2();
		div1(array("class"=>"well"));
			p_("","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.");
		div2();
	div2();
load_tpl(array('bottom')); 
?>