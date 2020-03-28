<style type="text/css">

html{
	scroll-behavior: smooth;
}
	
*{ margin: 0; padding: 0; box-sizing: border-box; font-family: 'Muli', sans-serif; }

.row{ margin-left: 0!important; margin-right: 0!important; }

.nav_style{
	background-color: #000000!important;
}

.nav_style button{ 
	background-color: #FFFFFF!important;
}

.nav_style a{ color: red; }

/*.nav_style div a{ color: white; }*/

.nav_style ul li a{ color: white; }

/*////////////// main header \\\\\\\\\\\\\\*/

.main_header{
	height: 450px;
	width: 100%;
}

.rightside h1{
	font-size: 3rem;
}

.corona_rot img{
	animation: gocorona 3s linear infinite;
}

@keyframes gocorona{
	0% { transform: rotate(0); }
	100% { transform: rotate(360deg); }
}

.leftside img{ animation: heartbeat 5s linear infinite; }

@keyframes heartbeat
{
	0%
	{
		transform: scale(.75);
	}
	20%
	{
		transform: scale(1);
	}
	40%
	{
		transform: scale(.75);
	}
	60%
	{
		transform: scale(1);
	}
	80%
	{
		transform: scale(.75);
	}
	100%
	{
		transform: scale(.75);
	}
}

/*********** corona update ***********/

.corona_update{
	margin: 0 0 20px 0;
}

.corona_update h3{ color: #ff7675; }

.corona_update h1 { font-size: 2rem; text-align: center; }

/*/////////////// about section \\\\\\\\\\\\\\\*/

.sub_section{
	background-color: #fbfafd;
}

.sub_section img{ 
	width: 600px; height: 300px;

}

/*.sub_section img{ margin-left: 0rem!important; }*/

.sub_section1{
	background-color: #fbfafd;
}

/*/////////////// footer \\\\\\\\\\\\\\\*/

.footer_style{ 
	height: 100px;
	background-color: #A6A9A9!important;
}

.footer_style p{
	font-size: 30px;
	padding-top: 15px;
}

/**************** top scroll ****************/
#myBtn {
	display: none;
	position: fixed;
	bottom: 30px;
	right: 40px;
	z-index: 99;
	border: none;
	outline: none;
	background-color: #00A8FF;
	color: white;
	cursor: pointer;
	padding: 10px;
	border-radius:10px; 
}

#myBtn:hover {
	background: #606060; 
}

@media(max-width: 768px)
{ .main_header{ height:700px; text-align: center; }

  .main_header h1{
  	text-align: center;
  	padding: 0;
  	width: 100%;
  	font-size: 34px;}
}

.about_res{ margin-left: 0!important; }

</style>