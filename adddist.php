<?php
include 'co.php';
?>



    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 form-group">
				<h3>Add District</h3>
				<form action="adddist.php" method="post" name="myform">
                    <label for="distname">District</label>
                    <input type="text" id="distname"  name="district" class="form-control form-control-lg">
                </div>
                <!--<div class="col-md-6 form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" class="form-control form-control-lg">
                </div>-->
            </div>
            <!--<div class="row">
                <div class="col-md-6 form-group">
                    <label for="eaddress">Password</label>
                    <input type="text" id="eaddress" class="form-control form-control-lg">
                </div>
               <!-- <div class="col-md-6 form-group">
                    <label for="tel">Tel. Number</label>
                    <input type="text" id="tel" class="form-control form-control-lg">
                </div>
            </div>


            <!--<div class="row">
                <div class="col-md-12 form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>-->

            <div class="row">
                <div class="col-12">
                    <input type="submit" value="Add" name="adddist" class="btn btn-primary rounded-0 px-3 px-5">
                </div>
            </div>
        </div>
    </div>



  <script src="js/main.js"></script>

				<?php
					if(isset($_POST['adddist']))
						{
							$dist=$_POST['district'];
							$a="INSERT INTO district(`district`,`status`)VALUES('$dist',1) ";
							mysqli_query($con,$a);
						}
				?>

</body>

</html>
