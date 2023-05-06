$(document).ready(function() {
	$("#number-form").submit(function(event) {
		event.preventDefault();
		var numbers = $("#number-list").val();
		$.ajax({
			url: "number-table.php",
			method: "POST",
			data: { numbers: numbers },
			success: function(result) {
				$("#table-container").html(result);
			}
		});
	});
});