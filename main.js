$(document).ready(function() {
	$("#hide").click(function() {
		$("#hidee").hide();
	})
	files();
	pctp();
	videos();
	designs();
	function pctp() {
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {topics: 1},
			success : function(data){
				$("#get_pc_topics").html(data);
			}
		})
	}
	
	function files() {
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {getFiles: 1},
			success : function(data) {
				$("#get_files").html(data);
			}
		})
	}
	
	$("body").delegate(".topics","click", function(event) {
		event.preventDefault();
		var pc_id = $(this).attr('pc_id');
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {get_selected_topic:1, pc_id:pc_id},
			success : function(data){
				$("#get_files").html(data);
			}
		})
	})
	
	function videos() {
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {getVideos: 1},
			success : function(data) {
				$("#get_videos").html(data);
			}
		})
	}
	
	function designs() {
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {getDesigns: 1},
			success : function(data) {
				$("#get_designs").html(data);
			}
		})
	}
	
	$("#signup_button").click(function(event) {
		event.preventDefault();
		$.ajax({
			url : "registration.php",
			method : "POST",
			data : $("form").serialize(),
			success : function(data) {
				$("#signup_msg").html(data);
			}
		})
	})
	
	$("#login").click(function(event) {
		event.preventDefault();
		var email = $("#email").val();
		var pass = $("#password").val();
		$.ajax({
			url : "login.php",
			method : "POST",
			data : {userLogin: 1, userEmail:email, userPassword:pass},
			success : function(data) {
				if(data == "contact made") {
					window.location.href = "profile.php";
				}else{
					$("#e_msg").html(data);
				}
			}
		})
	})
})