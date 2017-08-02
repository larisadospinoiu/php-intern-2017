<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include 'C:\xampp\htdocs\lib\header.php'; ?>
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- content body -->
    <!-- main content -->
    <section id="homepage" class="last clear">
      <!-- article 1 -->
      <article class="one_third">
        <h2>Lorum ipsum dolor</h2>
        <img src="images/letter-d.gif" alt="">
        <p>This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. For full terms of use of this template please read our <a href="http://www.os-templates.com/template-terms">website template licence</a>. You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more HTML5 templates visit <a href="http://www.os-templates.com/">free website templates</a>.</p>
        <footer class="more"><a href="#">Read More &raquo;</a></footer>
      </article>
	  <?php 
		$nameErr = $prodErr = "";
		$name = $details = $price = $job = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            }

            if (empty($_POST["details"])) {
                $prodErr = "Details are required";
            }

            if (!$nameErr AND ! $prodErr) {
                include ("insert.php");
            }
        }
		?>
      <!-- article 2 -->
      <article class="one_third">
        <h2>Lorum ipsum dolor</h2>
       <img src="images/letter-n.gif" alt="">
        <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. Facilispede estibulum nulla orna nisl velit elit ac aliquat non tincidunt. Namjusto cras urna urnaretra lor urna neque sed quis orci nulla. Laoremut vitae doloreet condimentumst phasellentes dolor ut a ipsum id consectetus. Inpede cumst vitae ris tellentesque fring intesquet.</p>
        <footer class="more"><a href="#">Read More &raquo;</a></footer>
      </article>
      <!-- article 3 -->
      <article class="one_third lastbox">
        <h2>Lorum ipsum dolor</h2>
        <img src="images/letter-l.gif" alt="">
        <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. Facilispede estibulum nulla orna nisl velit elit ac aliquat non tincidunt. Namjusto cras urna urnaretra lor urna neque sed quis orci nulla. Laoremut vitae doloreet condimentumst phasellentes dolor ut a ipsum id consectetus. Inpede cumst vitae ris tellentesque fring intesquet.</p>
        <footer class="more"><a href="#">Read More &raquo;</a></footer>
      </article>
    </section>
  </div>
</div>
<!-- footer -->
<?php include 'C:\xampp\htdocs\lib\footer.php'; ?>
</body>
</html>
