<?php

include "db.php";

if(isset($_POST["topics"])){
	$topics_query = "SELECT * FROM file_display";
	$run_query = mysqli_query($con,$topics_query);
	echo"
		<div class='nav nav-pills nav-stacked'>
								<li class='active'><a href='#'>Pattern Cuttings</a></li>
	";
	if(mysqli_num_rows($run_query) > 0) {
		while($row = mysqli_fetch_array($run_query)) {
			$tid = $row["file_id"];
			$t_name = $row["description"];
			echo"
				<ul type='circle'>
					<li><a href='#' class='topics' pc_id=$tid>$t_name</a></li>
				</ul>
			";
		}
		echo"</div>";
	}
}

if(isset($_POST["getFiles"])){
	$files_query = ("SELECT description, filename FROM file_display ORDER BY FILE_ID desc LIMIT 0,0");
	$run_query = mysqli_query($con, $files_query);
	
	if(mysqli_num_rows($run_query) > 0) {
		while($row = mysqli_fetch_array($run_query)){
			
			$file_field = $row["filename"];
			$file_show = "file/$file_field";
			$file_display = fopen($file_show, "r") or exit("Unable to Open file");
			$descriptionvalue = $row["description"];
		
			echo "
				$descriptionvalue
			";
			echo"<br/>";
			while(!feof($file_display)){
				echo fgets($file_display)."<br>";
			
			}
				fclose($file_display);
		}
		
	}
	
}

if(isset($_POST["get_selected_topic"])) {
	$pc_id = $_POST["pc_id"];
	$sql = ("SELECT description, filename FROM file_display WHERE pc_topic = '$pc_id'");
	$run_query = mysqli_query($con, $sql);
	
	if(mysqli_num_rows($run_query) > 0) {
		while($row=mysqli_fetch_array($run_query)){
			
			$file_field = $row["filename"];
			$file_show = "file/$file_field";
			$file_display = fopen($file_show, "r") or exit("Unable to Open file");
			$descriptionvalue = $row["description"];
			
			echo"
				<div class='panel panel-info'>
					<div class='panel-heading'>$descriptionvalue</div>
				";
			echo "
				<div class='panel body'>
			";
			while(!feof($file_display)){
				echo fgets($file_display)."<br>";
			
			}
				fclose($file_display);
			echo "</div>";
			echo "
				<div class='panel-heading'><a href='#'>Like</>
					<a href='#' >Comment</a>
				</div>
			";
			print "</div>";
		}
	}
}

if(isset($_POST["getVideos"])) {
	$videos_query = "SELECT vid_description, vid_filename, vid_fileextension FROM video_display ORDER BY vid_id desc LIMIT 0,5";
	$run_query = mysqli_query($con, $videos_query);
	
	if(mysqli_num_rows($run_query)>0) {
		while($row=mysqli_fetch_array($run_query)) {
			
			$video_field = $row["vid_filename"];
			$video_show = "videos/$video_field";
			$descriptionvalue = $row["vid_description"];
			$fileextensionvalue = $row["vid_fileextension"];
			
			echo "<div class='col-md-6'>";
			echo "
				<div class='panel panel-info'>
					<div class='panel-heading'>$descriptionvalue</div>
			";
			echo "
				<div class='panel-body'>
			";
			echo "
				<video width='370' controls><source src='$video_show' type='video/$fileextensionvalue'>Your browser doesn't support the video tag</video>
			";
			echo "</div>";
			echo "<div class='panel-heading'></div>
			";
			echo "</div>";
			echo "</div>";
		}
	}
}

if(isset($_POST["getDesigns"])) {
	$designs_query = "SELECT * FROM designs LIMIT 0,5";
	$run_query = mysqli_query($con, $designs_query);
	if(mysqli_num_rows($run_query) > 0) {
		while($row = mysqli_fetch_array($run_query)) {
			
			$dsg_id = $row["design_id"];
			$dsg_cat = $row["design_cat"];
			$dsg_brand = $row["design_brand"];
			$dsg_title = $row["design_title"];
			$dsg_price = $row["design_price"];
			$dsg_image = $row["design_image"];
			
			echo "
				<div class='col-md-4'>
					<div class='panel panel-info'>
						<div class='panel-heading'>$dsg_title</div>
						<div class='panel-body'>
							<img src='images/$dsg_image' style='width:160px; height:250px' />
						</div>
						<div class='panel-heading'>$.$dsg_price.00
							<button class='btn btn-danger btn-xs' style='float:right' >AddCart</button>
						</div>
					</div>
				</div>
			";
		}
	}
}

?>