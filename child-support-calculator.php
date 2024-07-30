<?php
require_once($_SERVER["DOCUMENT_ROOT"] . '/foxlawtexas/includes/ini5.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Free Child Support Calculator | Williamson County Texas Divorce</title>
<link rel="stylesheet" type="text/css" href="<?=$root?>/css/superfish.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?=$root?>/css/superfish_small.css" media="screen">
<link href="<?=$root?>/css/foxlaw_style5.css" rel="stylesheet" type="text/css" />
<link href="/css/form5.css" rel="stylesheet" type="text/css" media="all"/>
<style>

</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="<?=$root?>/javascripts/hoverIntent.js"></script>
<script type="text/javascript" src="<?=$root?>/javascripts/superfish.js"></script>
<?php require_once('includes/slide_switcher.js.php'); ?>
<script>
percentage = new Array(); 
percentage[0] = new Array(0, 20, 25, 30, 35, 40, 40, 40);
percentage[1] = new Array(0, 17.5, 22.5, 27.38, 32.2, 37.33, 37.71, 38);
percentage[2] = new Array(0, 16, 20.63, 25.2, 30.33, 35.43, 36, 36.44);
percentage[3] = new Array(0, 14.75, 19, 24, 29, 34, 34.67, 35.2);
percentage[4] = new Array(0, 13.6, 18.33, 23.14, 28, 32.89, 33.6, 34.18);
percentage[5] = new Array(0, 33.33, 17.86, 22.5, 27.22, 32, 32.73, 33.33);
percentage[6] = new Array(0, 13.14, 17.5, 22, 26.6, 31.27, 32, 32.62);
percentage[7] = new Array(0, 13, 17.22, 21.6, 26.09, 30.67, 31.38, 32);
	
jQuery(document).ready(function($) {
<?php require_once('includes/jquery_common.php'); ?>
	
	Number.prototype.formatMoney = function(){
		var c = 0;
		var d = '.';
		var t = ',';
		var n = this, c = isNaN(c = Math.abs(c)) ? 2 : c, d = d == undefined ? "," : d, t = t == undefined ? "." : t, s = n < 0 ? "-" : "", i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
   		return '$' + s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
 	};

	function isNumber(n) {
	  return !isNaN(parseFloat(n)) && isFinite(n);
	}

	$.fn.getNumber = function() {
		return isNumber($(this).val())? $(this).val() : 0;
	}
	
	$('#frmChildSupportCalculator').find('input, select').change(function() {
		var subtotal = $('#income').getNumber() - $('#social_security').getNumber() - $('#irs').getNumber() - $('#stateIncomeTax').getNumber() - $('#unionDues').getNumber() - $('#health').getNumber();
		var child_support = subtotal * (percentage[$('#childCountOther').val()][$('#childCount').val()] / 100);
		$(this).val(function(index, oldval) { return parseFloat(oldval).toFixed(0); });
		$('#subtotal').text(subtotal.formatMoney());
		$('#child_support_amount').text(child_support.formatMoney());
	});
});
</script>
</head>

<body>
<?php require_once('includes/header.php'); ?>
  
<div id="content_body"> 
<div id="container">
  
  <div id="mainContent">
  	<h2>Child Support Calculator</h2>
    <p><strong>Fill in the fields below to calculate estimated child support.</strong></p>
    <p>This calculator provides an approximation dependent upon the accuracy of the data you enter. 
       It is only a guideline and does not take into account other issues such as special needs of a child, current living circumstances, etc.
       For a more detailed assessment and for more information about the types of factors the courts consider when calculating child support, 
       <a href="<?=$root?>/contact.php">contact an attorney</a> at Fox Law.
    </p>
    
	<a name="formTop"></a>
<form name="frmChildSupportCalculator" id="frmChildSupportCalculator">
	<fieldset class="formWrapper">
	<legend>Non-custodial parent's average monthly income</legend>
    
	<p><label for="income">Gross monthly income:</label>
    $<input type="text" name="income" id="income" maxlength="7"/>
    </p>
    
    <p><label for="social_security">Social Security withheld monthly:</label>
    $<input type="text" name="social_security" id="social_security" maxlength="7"/>
    </p>
	
	<p><label for="irs">Federal income taxes withheld monthly:</label>
    $<input type="text" name="irs" id="irs" maxlength="7"/>
    </p>
	
	<p><label for="unionDues">Union dues taken out monthly:</label>
    $<input type="text" name="unionDues" id="unionDues" maxlength="7"/>
    </p>
	
	<p><label for="health">Child's health insurance premium monthly:</label>
    $<input type="text" name="health" id="health" maxlength="7"/>
    </p>
    
    <p class="top_divider"><span class="label">Net monthly income:</span>
       <span class="label comment">Your child support will be based on this net monthly income of the non-custodial parent.
       </span>
       <span id="subtotal" class="sum"></span>
    </p>
    
    <!-- <p><input type="button" class="submit" id="submit" value="Calculate"/></p> -->
	
	</fieldset>
    
    
	<fieldset class="formWrapper">
	<legend>Child Support</legend>
    
	<p><label for="childCount">Children in this court case:</label>
    <select name="childCount" id="childCount">
    	<option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
    </select>
    </p>
    
    <p><label for="childCountOther">Other minor children:</label>
       <span class="label comment">Number of other minor children the person paying child support is legally responsible to support.  
          This includes biological children, not step children.
       </span>
    <select name="childCountOther" id="childCountOther">
    	<option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
    </select>
    </p>
    
    
    <p class="top_divider"><span class="label">Approximate monthly child support:</span>
       <span id="child_support_amount" class="sum"></span>
    </p>
    
	</fieldset>
    
    <input type="hidden" name="submitted" value="true"/>
    
    <p class="footnote">Calcalutions are based on Texas Family Code, Section 154.129.</p>
</form>
	
  
	<!-- end #mainContent --></div>
  
	<!-- end #container --></div>
    <?php include_once('includes/legend_link.php'); ?>
<!-- end #content_body --></div>
<?php include_once('includes/footer.php'); ?>
</body>
</html>
