<!DOCTYPE html>
<?php

include ('php\Creating_database.php');

function suc_cess(){
	echo '
	<html>
<head>
<script src="sw.js"></script>
</head>
<body>
<script type="text/javascript">

	 swal({
	 title: "Thank you For your time!",
	 text: "Your info will be submitted to the registrar after paypment",
	 icon: "success",
	 button: "Close!",
	 });

</script>

</body>
</html>
';


}

function fail_ed(){
	echo '
	<html>
	<head>
	<script src="sw.js"></script>
	</head>
	<body>
	<script type="text/javascript">

	swal({
 title: "Opppps ! Snap :(",
 text: "Opps you didn`t fill all the information or something is missing!",
 icon: "error",
 button: "Close!",
})
.then((value) => {
switch (value) {



	default:

	swal("Sorry I cant retrieve what you have just type :("," [This is a bug in my program:Sorry ]","error 404");

			popupDiv.style.display = "block";

}
});

	</script>

	</body>
	</html>
	';
}



if(isset($_POST['Add'])){


	  $Fname = $_POST['Fname'];
		$Mname =$_POST['Mname'];
		$Lname =$_POST['Lname'];
		$Ret =$_POST['Ret'];
		$Gender =$_POST['Gender'];
		$DOB =$_POST['DOB'];
		$Contact =$_POST['Contact'];
		$Email =$_POST['Email'];
		$Address =$_POST['Address'];
		$City =$_POST['City'];
		$Zipcode =$_POST['Zipcode'];
		$Course =$_POST['Course'];
		$FN =$_POST['FN'];
		$FC =$_POST['FC'];
		$FB =$_POST['FB'];
		$FE =$_POST['FE'];
		$FMS =$_POST['FMS'];
		$MN =$_POST['MN'];
		$MC =$_POST['MC'];
		$MB =$_POST['MB'];
		$ME =$_POST['ME'];
		$MMS =$_POST['MMS'];



if($Fname==""||$Mname==""||$Lname==""||$Contact==""||$Email==""||$Address==""||$City==""||$Zipcode==""||$Course==""||$FN==""||$FC==""||$FB==""||$FE==""||$FMS==""){



fail_ed();

}else{

	if($MN==""||$MC==""||$MB==""||$ME==""||$MMS==""){
	fail_ed();

}else{

// Here is where you send your data to database


// Check whether he already submitted or not

$sql="SELECT * FROM `info` WHERE Fname like '$Fname' AND Lname like '$Lname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		if($Fname==$row["Fname"] && $Lname==$row["Lname"]){

			echo '
			<html>
			<head>
			<script src="sw.js"></script>
			</head>
			<body>
			<script type="text/javascript">

			swal({
		 title: "Opppps ! Snap :(",
		 text: "You form is already submitted at the registrar",
		 icon: "error",
		 button: "Close!",
		});

			</script>

			</body>
			</html>
			';


		}

    }
}else{


mysqli_query($conn,"INSERT INTO info(Fname,Mname,Lname,Ret,Gender,DOB,Contact,Email,Address,City,Zip,Course,FN,FC,FB,FE,FMS,MN,MC,MB,ME,MMS)VALUES('$Fname','$Mname','$Lname','$Ret','$Gender','$DOB','$Contact','$Email','$Address','$City','$Zipcode','$Course','$FN','$FC','$FB','$FE','$FMS','$MN','$MC','$MB','$ME','$MMS')");



if(mysqli_affected_rows($conn) > 0){
suc_cess();
} else {
echo "student NOT Added<br />";
echo mysqli_error ($conn);
}

mysqli_close($conn);

}
}
}

}

 ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="Main.css" />
<script src="sw.js"></script>
</head>
<body>



<div class="plug" name="TOP">
	<div class="alinks qwerty">
		<a href="https://www.facebook.com/corjesucollege/" target="_blank" class="Lks qwerty"><img src="fbL.png" class="L"></a>
		<a href="https://twitter.com/corjesucollege?lang=en" target="_blank" class="Lks qwerty"><img src="twL.png" class="L"></a>
		<a href="#gmail.com" class="Lks"><img src="g.png" class="L"></a>


	</div>
	<div class="log"> </div>
	<div class="ace qwerty">Excellence | Community | Apostleship</div>
</div>


<div id="banner">

	<div class="b1">
		<img src="cjc.png" alt="cjc logo" class="pic qwerty">
		<img src="logotxt.png" class="L qwerty">
	</div>

	<div class="csc">

	<div class="choice1 qwerty"><a href="Main.php"><span class="ch zh ">HOME</span></a></div>

	<div class="choice2 containerAbout qwerty"><a href="#home"><span class="ch zh ">ABOUT</span><img src="da.png" class="arrow"></a>



  <div class="overlayAbout">
    <div class="textAbout">




	<div class="q"><a href="#sm">Motto and Seal</a><br></div>
	<div class="q"><a href="#misvis">Mission and Vision</a><br></div>
	<div class="q"><a href="administration.html">Administration</a><br></div>


	</div>
  </div>




	</div>


	<div class="choice5 qwerty"><a href="#home"><span class="ch zh">GALLERY</span></a></div>
	<div class="choice6 qwerty"><a href="contact.html"><span class="ch zh">CONTACT</span></a></div>
	</div>

</div>

<!--UBOS SA BANNER----------------------------------------------------------------------->



<div class="uppermain">

<img src="corjesuhdEdited.jpg" class="wallpaper qwerty">
<div class="likod">black</div>
	<div class="containersachoices">
	</div>


	<div class="cq1 qwerty" onclick="openPopup()" ><span class="cq1text">Enroll Now </span></div>



<span class="sulat qwerty dc">Ametur Cor Jesu!<br></span>
<span class="sulat2 qwerty dc">Welcome to Cor Jesu College!</span>
<span class="sulat3 qwerty dc">We will draw out the best in you!</span>

</div>



<!--DIRI ANG MO POP UP AFTER CLICK SA ENROLL-->
<form method="POST" Action="" class="Process">
<div id=popup_bg>
	<div id=popup_main_div>
		<p id=enroll_form>
			ENROLLMENT FORM<br><hr style="width:98%;">
		</p>
		<hr id=vertical>

		<p id=fill>
			First name:<input type="text" id="Fname"  name='Fname'  placeholder="First name"/><br><br>
			Middle name:<input type="text" id="Mname"  name='Mname' placeholder="Middle name"/><br><br>
			Last name:<input type="text" id="Lname"  name='Lname'  placeholder="Last name"/><br><br>
			<select class="moveReturnee" name="Ret">
				<option value="Old">Old</option>
				<option value="New">New</option>
				<option value="Returnee">Returnee</option>
			</select>
			<br><br>
			Gender:
			<select name="Gender">
				<option value="Male">Male</option>
				<option value="Female">Female</option>
			</select>
			<br><br>
			Date of Birth:<input type="date" id="DOB" name='DOB' required placeholder="Date of Birth"/><br><br>

			Contact:<input type="text" id="Contact" name="Contact" placeholder="Contact Number"/><br><br>

			Email:<input type="Email" id="Email" name="Email" placeholder="example@gmail.com"/><br><br>

			Address:<input type="text" id="Address" name="Address" placeholder="Address"/><br><br>

			City<input type="text" id="City" name="City"  placeholder="City"/><br><br>

			Postal/zip code:<input type="text" id="Zipcode" name="Zipcode"  placeholder="Zip Code"/><br><br>

			Course:<input type="text" id="Course" name="Course"  placeholder="Course"/><br><br>



		</p>



	<!--left side-->
<div class="leftside">
	<p>
		<span class="des">Father's Name:<br></span>
		<span class="des">Father's Contact:<br></span>
		<span class="des">Father's Birthdate:<br></span>
		<span class="des">Father's Email:<br></span>
		<span class="des">Father's Marital Status:<br></span>

		<span class="des">Mother's Name:<br></span>
		<span class="des">Mother's Contact:<br></span>
		<span class="des">Mother's Birthdate:<br></span>
		<span class="des">Mother's Email:<br></span>
		<span class="des">Mother's Marital Status:<br></span>
	</p>

	<p>
		<span class="inputText"><input type="text" name="FN"  placeholder="Father's Name"><br></span>
		<span class="inputText"><input type="text" name="FC" placeholder="Father's Contact"><br></span>
		<span class="inputText"><input type="text" name="FB" placeholder="Father's Birthdate"><br></span>
		<span class="inputText"><input type="text" name="FE" placeholder="Father's Email"><br></span>
		<span class="inputText"><input type="text" name="FMS" placeholder="Father's Marital Status"><br></span>
		<span class="inputText"><input type="text" name="MN" placeholder="Mother's Name"><br></span>
		<span class="inputText"><input type="text" name="MC" placeholder="Mother's Contact"><br></span>
		<span class="inputText"><input type="text" name="MB" placeholder="Mother's Birthdate"><br></span>
		<span class="inputText"><input type="text" name="ME" placeholder="Mother's Email"><br></span>
		<span class="inputText"><input type="text" name="MMS" placeholder="Mother's Marital Status"><br></span>
	</p>

<button class="button" type="submit" name='Add'>Send Enrollment Form</button>

</div>

</form>


		<div id=close_popup_div title="Close this form" onclick="closePopup()">
			<p>
				x
			</p>
		</div>

	</div>
</div>

<script type="text/javascript">

var popupDiv = document.getElementById("popup_bg");
	function openPopup(){

		popupDiv.style.display = "block";

	}

	function closePopup(){

		popupDiv.style.display = "none";

	}
</script>


<!--DIRI ANG MORE ABOUT US NA POP UP -->





 <!--AFTER SA PICTURE NA DAKO MAIN BODY------------------------------------------------------------>
 <div class="misvis" id="misvis">

	<div class="mission">
		<h1>Mission</h1>
		We, members of Cor Jesu College community, commit ourselves to:
		<ul>
			<li>Advance a responsive and dynamic learning environment that draws out the best in all;
			<li>Nurture a compassionate community that journeys as one family united at the Heart of Christ; and
			<li>Promote responsible stewardship towards social transformation, progress and sustainable development.
		</ul>
	</div>

	<div class="vision">
		<h1>Vision</h1>
		Cor Jesu College,<br> a premier Catholic educational institution in Southern Mindanao,<br> envisions fully transformed persons<br> inspired by the spirituality of the Most Sacred Heart of Jesus<br> and the charism of the Brothers of the Sacred Heart.
	</div>

 </div>


 <!--AFTER SA MISSION VISION-->

 <div class="sealandmotto" id="sm" name="sam">
 <div class="sudlanansamotoandseal">
 <h1 class="mottoseal qwerty dc">Motto And Seal</h1>
</div>


 <img src="cjc.png" class="picturecjc">

 <div class="seal">
 <h1>SEAL</h1><br>
 The corporate seal is composed of two circles where the name and address of the School are engraved. The Coat of Arms of the Institute of the Brothers of the Sacred Heart is found within the inner circle. It is composed of a French shield bearing, on a gold field, a burning heart encircled by a crown of thorns surmounted by a black Latin cross. From a gaping wound drops of blood fall upon the northern segment of the terrestrial globe showing the coasts of France and America with the Atlantic Ocean in between. The scroll is in royal blue with a gold border and carries the motto in letters of gold. Heart, blood, thorns, flames, land and ocean: all are in natural colors.

 </div>
  <div class="symbol">

  <div class="symbolic"><h1>Symbolic Meaning</h1></div>
  <div class="symbolicmeaning">
  The two parallel circles, that surround the Coat of Arms of the Brothers of the Sacred Heart, where the name Cor Jesu College and its address are engraved, symbolize the unending love of God to humanity. The French shield has been chosen because the Institute was founded in France. The Heart of Jesus placed in the center is designed as Jesus Himself presented it to St. Margaret Mary when He appeared to her. It reveals the intensity of His love for humankind that led Him to suffer his passion and death on the cross for the redemption of the world (crown of thorns, cross, wound). It reveals also His great desire for this love to spread among the people (fire). The drops of blood symbolize the sacraments through which the Heart of Jesus brings His love to humanity. The northern hemisphere reminds us that Bro. Polycarp, eager to spread the love of Jesus to other nations, sent Brothers from France to America as early as 1847. The field or background in gold speaks of the riches of the spirituality of the Sacred Heart. The motto in Latin was adopted by the Institute in 1892. It is translated in English: “Loved be the Heart of Jesus” or “May the Heart of Jesus be loved”. The Latin cross and the Latin motto express the belonging of the Institute to the Roman Catholic Church.
  </div>
  <div class="symbolic"><h1>MOTTO</h1></div>
  <div class="mottoniya">
  The motto of Cor Jesu College is Ametur Cor Jesu, Ametur Cor Mariae!
<br><br>
These are french terms which means Loved be the Heart of Jesus (Ametur Cor Jesu) and Loved be the Heart of Mary (Ametur Cor Mariae).


  </div>

 </div>

























 <!---UBOS-->
  <p class="footer"> COR JESU COLLEGE Sacred Heart Avenue, Digos City, Philippines 8002</p>

  <!---UBOS-->

<div class="container">

  <div class="overlay">


     <div class="text">
	<img src="cjc.png" alt="cjc logo" class="logo"><br>
	<hr><br>

		<div class="acad">
		ADMISSION <br>REQUIREMENTS
		</div>



		<div class="q"><a href="Bed.html">Basic Education Department</a><br></div>
		<div class="q"><a href="voc.html">Vocational Technology</a><br></div>
		<div class="q"><a href="bac.html">Baccalaureate Programs</a><br></div>
		<div class="q"><a href="grad.html">Graduate School</a><br></div>

		<div class="acad">
		ACADEMICS
		</div>

		<div class="q"><a href="gradprog.html">Graduate Programs</a><br></div>
		<div class="q"><a href="bacprog.html">Baccalaureate Programs</a><br></div>
		<div class="q"><a href="bedprg.html">Basic Education Department</a><br></div>
		<div class="q"><a href="vocprog.html">Vocational Technology</a><br></div>

		<div class="acad">
		SCHOLARSHIPS
		</div>

		<div class="q"><a href="bedsch.html">Basic Education Department</a><br></div>
		<div class="q"><a href="collegesch.html">College</a><br></div>
		<div class="q"><a href="gradsch.html">Graduate School</a><br></div>
		<div class="q"><a href="lawsch.html">Law School</a><br></div>
		<div class="q"><a href="vocsch.html">Vocational Technology</a><br></div>

		<div class="acad">
		Tuition and Fees
		</div>
		<div class="q"><a href="tuition.html">Fees</a><br></div>



	</div>
  </div>
</div>

</body>
</html>
