<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; 2012 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </footer>
</div>
<script>
$(function(){
	$('.bxslider').bxSlider({
		mode: 'horizontal',
		moveSlides: 1,
		slideMargin: 40,
		infiniteLoop: true,
		slideWidth: 660,
		minSlides: 3,
		maxSlides: 3,
		speed: 800,
	});
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	});
	
	$(document).on('click', '.custom-menu .target', function (e) {
		$('.custom-menu').find('.active').removeClass('active');
		$(this).addClass('active');
	});
});
</script>
<script>
	$(function(){
		//document.getElementById("login_heading").innerHTML = "Please log in";
		
		//var elementul1, elementul2,  titlu;
		
		//elementul1 = $(".login_heading");
		//elementul2 = $("#subtitle");
		

		changeTitle($(".login_heading"), $(".login_heading").html());
		changeTitle($("#subtitle"), $("#subtitle").html());
		
		function changeTitle(elementul, titlu)
		{
			titlu = titlu + " sufix";
			elementul.html(titlu);
		}
	});
</script>
<script>
  function validate()
{
	var pass=$("#login_pass").val();
	var password_regex1=/([a-z].*[A-Z])|([A-Z].*[a-z])/;
	var password_regex2=/([0-9])/;
	var password_regex3=/([!,%,&,@,#,$,^,*,?,_,~])/;
	
	if(password_regex1.test(pass)==false)
	{
		alert("Please enter at least one uppercase letter");
		return false;
	}
	else if(password_regex2.test(pass)==false)
	{
		alert("Please enter at least one digit");
		return false;
	}
	else if(password_regex3.test(pass)==true)
	{
		alert("Specials characters are not allowed");
		return false;
	}
	else
	{
		return true;
	}
}  
</script>
<script>
	function valideaza()
	{
		
		var nume = $("#name").val();
		var detalii=$("#details").val();
		var price = $("#price").val();
		var job = $("#job").val();
		if(nume == "")
		{
			alert("Please enter the name of the product");
			return false;
		}
		else if(detalii == "")
		{
			alert("Please enter the details!");
			return false;
		}
		else if(price == "")
		{
			alert("Please enter the price of the product");
			return false;
		}
		else if(job == "")
		{
			alert("Please select a job");
			return false;
		}
		else 
		{
			return true;
		}
	}
</script>
