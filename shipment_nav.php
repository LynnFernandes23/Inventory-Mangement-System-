
<?php 
session_start();
$cust_name =$_SESSION["ship_name"];
?>
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  		<a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    	<i class="fa fa-remove"></i>
  		</a>
  		<div style="background-color: #ffc107; margin-top: -10px;margin-bottom:30px;">
  		<?php echo "<h4 class='w3-bar-item'><b>$cust_name</b></h4>";
		?>
  		
  		</div>
          <a class="w3-bar-item w3-button w3-hover-black" href="ship_Main.php">New consignment</a>
  		<a class="w3-bar-item w3-button w3-hover-black" href="ship_Modify.php">Modify consignment </a>
		<a class="w3-bar-item w3-button w3-hover-black" href="ship_list.php">List consignment</a>
		 <a class="w3-bar-item w3-button w3-hover-black" href="penorder_list.php">List Orders</a>
		 <a class="w3-bar-item w3-button w3-hover-black" href="logout.php">logout</a>
	</nav>