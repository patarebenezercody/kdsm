<!-- Compiled app javascript -->
<script src="{{ url (mix('/js/app.js')) }}">
	
	$(".nav a").on("click", function() {
  		$(".nav").find(".active").removeClass("active");
  		$(this).parent().addClass("active");
	});
</script>
