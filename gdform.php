<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
   ob_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Glory Days Grill Order Form</title>
<link rel = "stylesheet" type="text/css"  href= "ToPromoteFormStyleSheet.css">
<img src="https://commonmedia.asicentral.com/160000/164530/ToPromote%20Logo%20200x70.png" id = "logo"><br/>
Phone: 703-205-3890 <br/>
Form Last Updated: 4/11/2018 <br/>

<body>
<h1><center>Glory Days Grill Order Form</center></h1><br/>
<form action="submit.php" method="post" id="ToPromoteForm">
Location<select name="Location">
  <option value="Edgewater">MD, Edgewater</option>
  <option value="Eldersburg">MD, Eldersburg</option>
  <option value="Ellicott">MD, Ellicott City</option>
  <option value="Frederick">MD, Frederick</option>
  <option value="Pasadena">MD, Glen Burnie/Pasadena</option>
  <option value="Towson">MD, Towson</option>
  <option value="Ranson">WV, Ranson/Charles Town</option>
  <option value="Barcroft">VA, Barcroft Plaza</option>
  <option value="Burke">VA, Burke</option>
  <option value="Centreville">VA, Centreville</option>
  <option value="Culpeper">VA, Culpeper</option>
  <option value="Fairfax">VA, Fairfax</option>
  <option value="Gainesville">VA, Gainesville</option>
  <option value="Lorton">VA, Lorton</option>
  <option value="Manassas">VA, Manassas</option>
  <option value="NorthPoint">VA, Reston at North Point Village Center</option>
  <option value="FoxMill">VA, Reston/Herndon at Fox Mill Shopping Center</option>
  <option value="Gleneagles">VA, Richmond at Gleneagles Center</option>
  <option value="Harbourside">VA, Richmond at Harbourside Centre Loop</option>
  <option value="StoneRidge">VA, Stone Ridge/South Riding</option>
  <option value="Winchester">VA, Winchester</option>
  <option value="APEX">NC, Apex</option>
  <option value="StPetersburg">FL, 4th Street, St Petersburg</option>
  <option value="Brandon">FL, Brandon</option>
  <option value="Carrollwood">FL, Carrollwood</option>
  <option value="Lakeland">FL, Lakeland</option>
  <option value="NewTampa">FL, New Tampa</option>
  <option value="Odessa">FL, Odessa</option>
  <option value="PalmHarbor">FL, Palm Harbor</option>
</select>
Ordered By<input type="text" name="Name" required/><br/>
RUSH Shipping (Additional Fee)<input type="checkbox" name="RushShipping" value="Rush"/><br/>
Pickup<input type="checkbox" name="Pickup" value="Pickup"/>Time:<input type="text" name="PickTime" />

<table style="width:100%" id = "Printer">
	<tr>
		<th>Printer Toner / Similar</th>
		<th>Unit</th> 
		<th>Price</th>
		<th>Quantity</th>
	</tr>
	<tr>
		<td>Tamper-Evident Deposit Bags w/ Serial#, 9x12</td>
		<td>100 Bags</td> 
		<td>$21.99</td>
		<td><input type="number" name="N53866" min="0"/></td>
	</tr>
	<tr>
		<td>Printer / Copier Paper</td>
		<td>500/Ream</td> 
		<td>$3.69</td>
		<td><input type="number" name="900185" min="0"/></td>
	</tr>
	<tr>
		<td>HP LaserJet P2035, P2055 *   [05A]</td>
		<td>Each</td> 
		<td>$38.90</td>
		<td><input type="number" name="GNCE505A" min="0"/></td>
	</tr>
	<tr>
		<td>HP LaserJet M1536dnf, P1606 Series *   [78A]</td>
		<td>Each</td> 
		<td>$32.48</td>
		<td><input type="number" name="GNCE278A" min="0"/></td>
	</tr>
	<tr>
		<td>HP LaserJet M212nf, M1217nfw *   [85A]</td>
		<td>Each</td> 
		<td>$32.80</td>
		<td><input type="number" name="GNCE285A" min="0" /></td>
	</tr>
	<tr>
		<td>HP LaserJet Pro M201DW *   [83X]</td>
		<td>Each</td> 
		<td>$41.74</td>
		<td><input type="number" name="200201A" min="0"/></td>
	</tr>
	<tr>
		<td>Brother HLL2320D Mono Laser Printer *   [TN660]</td>
		<td>Each</td> 
		<td>$31.22</td>
		<td><input type="number" name="200201D" min="0"/></td>
	</tr>
	<tr>
		<td>Epson WF Inkjet 3640 COLOR 4pk *   [252XL/252]</td>
		<td>Each</td> 
		<td>$67.59</td>
		<td><input type="number" name="200201E" min="0"/></td>
	</tr>
	<tr>
		<td>HP LaserJet P1505n, M1522nf *   [36A]</td>
		<td>Each</td> 
		<td>$31.44</td>
		<td><input type="number" name="GNCB436A" min="0"/></td>
	</tr>
	<tr>
		<td>HP LaserJet 1320 High Yield *   [49X]</td>
		<td>Each</td> 
		<td>$47.90</td>
		<td><input type="number" name="GNQ5949X" min="0"/></td>
	</tr>
	<tr>
		<td>Other: <input type="text" name="OtherPrinter" /></td>
		<td></td> 
		<td></td>
		<td><input type="number" name="QuantityPrinter" /></td>
	</tr>
</table>
<br/><br/>
<table style="width:100%" id = "CustomPrints">
	<tr>
		<th>Custom Prints</th>
		<th>Unit</th> 
		<th>Price</th>
		<th>Quantity</th>
	</tr>
	<tr>
		<td>Full Color Business Cards, 2-sided *</td>
		<td>1000/Box</td> 
		<td>$52.96</td>
		<td><input type="number" name="900141-16AQ" min="0"/></td>
	</tr>
	<tr>
	<td>Name and Info for Business Cards:</td>
	<td><input type="Text" name="BCInfo"/></td>
	</tr>
	<tr>
		<td>Letterhead/Envelope Stationary, custom per store *</td>
		<td>1000/Box</td> 
		<td></td>
		<td><input type="number" name="900182" min="0"/></td>
	</tr>
	<tr>
		<td>Glory Days Employment Application</td>
		<td>50/Pad</td> 
		<td>$3.55</td>
		<td><input type="number" name="600GDGEmp" min="0"/></td>
	</tr>
</table>
NOTE: Laser Voucher Checks & Deposit Slips orders must go through Accounting Office.
<br/><br/>
<table style="width:100%" id = "Uniforms">
	<tr>
		<th>Uniforms</th>
		<th>Unit</th> 
		<th>Price</th>
		<th>Quantity</th>
	</tr>
	<tr>
		<td>Premium Low-Profile Cap, Embroidered</td>
		<td>Each</td> 
		<td>$7.99</td>
		<td><input type="number" name="600281-H" min="0"/></td>
	</tr>
	<tr>
		<td>Apron, 3-Pockets, Black</td>
		<td>Each</td> 
		<td>$5.99</td>
		<td><input type="number" name="600283" min="0"/></td>
	</tr>
	<tr>
		<td>Color Nametag with Magnetic Black, Personalized *</td>
		<td>Each</td> 
		<td>$12.95</td>
		<td><input type="number" name="400110" min="0"/></td>
	</tr>
	<tr>
	<td>Name and Info for Name Tags:</td>
	<td><input type="Text" name="NTInfo"/></td>
	</tr>
	<tr>
		<td>HappyChef Black Coat, BK/WH Chalkstripe Pants *</td>
		<td>Special</td> 
		<td></td>
		<td><input type="number" name="HC" min="0"/></td>
	</tr>
	<tr>
	<td>Sizes for Chef Uniform:</td>
	<td><input type="Text" name="HCInfo"/></td>
	</tr>
</table>
<table style="width:100%">
	<tr>
		<th>Mens SportTek Shirt *  -- Sizes:XS-6XL</th>
		<th>Starting at 16.99</th>
	</tr>
</table>
<table style="width:100%">
	<tr>
		<td>Red</td>
		<td><input type="number" name="REDMSTSxs" min="0"/>XS</td>
		<td><input type="number" name="REDMSTSs" min="0"/>S</td>
		<td><input type="number" name="REDMSTSm" min="0"/>M</td>
		<td><input type="number" name="REDMSTSl" min="0"/>L</td>
		<td><input type="number" name="REDMSTSxl" min="0"/>XL</td>
		<td><input type="number" name="REDMSTS2xl" min="0"/>2XL</td>
		<td><input type="number" name="REDMSTS3xl" min="0"/>3XL</td>
		<td><input type="number" name="REDMSTS4xl" min="0"/>4XL</td>
		<td><input type="number" name="REDMSTS5xl" min="0"/>5XL</td>
		<td><input type="number" name="REDMSTS6xl" min="0"/>6XL</td>
	</tr>
	<tr>
		<td>Black</td>
		<td><input type="number" name="BLKMSTSxs" min="0"/>XS</td>
		<td><input type="number" name="BLKMSTSs" min="0"/>S</td>
		<td><input type="number" name="BLKMSTSm" min="0"/>M</td>
		<td><input type="number" name="BLKMSTSl" min="0"/>L</td>
		<td><input type="number" name="BLKMSTSxl" min="0"/>XL</td>
		<td><input type="number" name="BLKMSTS2xl" min="0"/>2XL</td>
		<td><input type="number" name="BLKMSTS3xl" min="0"/>3XL</td>
		<td><input type="number" name="BLKMSTS4xl" min="0"/>4XL</td>
		<td><input type="number" name="BLKMSTS5xl" min="0"/>5XL</td>
		<td><input type="number" name="BLKMSTS6xl" min="0"/>6XL</td>
	</tr>
		<tr>
		<td>Royal</td>
		<td><input type="number" name="ROYMSTSxs" min="0"/>XS</td>
		<td><input type="number" name="ROYMSTSs" min="0"/>S</td>
		<td><input type="number" name="ROYMSTSm" min="0"/>M</td>
		<td><input type="number" name="ROYMSTSl" min="0"/>L</td>
		<td><input type="number" name="ROYMSTSxl" min="0"/>XL</td>
		<td><input type="number" name="ROYMSTS2xl" min="0"/>2XL</td>
		<td><input type="number" name="ROYMSTS3xl" min="0"/>3XL</td>
		<td><input type="number" name="ROYMSTS4xl" min="0"/>4XL</td>
		<td><input type="number" name="ROYMSTS5xl" min="0"/>5XL</td>
		<td><input type="number" name="ROYMSTS6xl" min="0"/>6XL</td>
	</tr>
</table>
<table style="width:100%">
	<tr>
		<th>Ladies SportTek Shirt *  -- Sizes:XS-4XL</th>
		<th>Starting at 16.99</th>
	</tr>
</table>
<table style="width:100%">
	<tr>
		<td>Red</td>
		<td><input type="number" name="REDLSTSxs" min="0"/>XS</td>
		<td><input type="number" name="REDLSTSs" min="0"/>S</td>
		<td><input type="number" name="REDLSTSm" min="0"/>M</td>
		<td><input type="number" name="REDLSTSl" min="0"/>L</td>
		<td><input type="number" name="REDLSTSxl" min="0"/>XL</td>
		<td><input type="number" name="REDLSTS2xl" min="0"/>2XL</td>
		<td><input type="number" name="REDLSTS3xl" min="0"/>3XL</td>
		<td><input type="number" name="REDLSTS4xl" min="0"/>4XL</td>
	</tr>
	<tr>
		<td>Black</td>
		<td><input type="number" name="BLKLSTSxs" min="0"/>XS</td>
		<td><input type="number" name="BLKLSTSs" min="0"/>S</td>
		<td><input type="number" name="BLKLSTSm" min="0"/>M</td>
		<td><input type="number" name="BLKLSTSl" min="0"/>L</td>
		<td><input type="number" name="BLKLSTSxl" min="0"/>XL</td>
		<td><input type="number" name="BLKLSTS2xl" min="0"/>2XL</td>
		<td><input type="number" name="BLKLSTS3xl" min="0"/>3XL</td>
		<td><input type="number" name="BLKLSTS4xl" min="0"/>4XL</td>
	</tr>
		<tr>
		<td>Royal</td>
		<td><input type="number" name="ROYLSTSxs" min="0"/>XS</td>
		<td><input type="number" name="ROYLSTSs" min="0"/>S</td>
		<td><input type="number" name="ROYLSTSm" min="0"/>M</td>
		<td><input type="number" name="ROYLSTSl" min="0"/>L</td>
		<td><input type="number" name="ROYLSTSxl" min="0"/>XL</td>
		<td><input type="number" name="ROYLSTS2xl" min="0"/>2XL</td>
		<td><input type="number" name="ROYLSTS3xl" min="0"/>3XL</td>
		<td><input type="number" name="ROYLSTS4xl" min="0"/>4XL</td>
	</tr>
</table>
<table style="width:100%">
	<tr>
		<th>Kitchen T-Shirt, Imprinted</th>
		<th>Starting at 5.99</th>
	</tr>
</table>
<table style="width:100%">
	<tr>
		<td>Black</td>
		<td><input type="number" name="KitchenS" min="0"/>S</td>
		<td><input type="number" name="KitchenM" min="0"/>M</td>
		<td><input type="number" name="KitchenL" min="0"/>L</td>
		<td><input type="number" name="KitchenXL" min="0"/>XL</td>
		<td><input type="number" name="Kitchen2XL" min="0"/>2XL</td>
		<td><input type="number" name="Kitchen3XL" min="0"/>3XL</td>
	</tr>
</table>
<br/><br/>
<table style="width:100%" id = "Accessories">
	<tr>
		<th>Accessories/Kids Toys</th>
		<th>Unit</th> 
		<th>Price</th>
		<th>Quantity</th>
	</tr>
	<tr>
		<td>Gray Sharks, 6 Inches</td>
		<td>48/Box</td> 
		<td>$32.64</td>
		<td><input type="number" name="600400-Shk" min="0"/></td>
	</tr>
	<tr>
		<td>Sanford Fluorescent Markers, Various Colors </td>
		<td>5/Pack</td> 
		<td>$23.90</td>
		<td><input type="number" name="600355" min="0"/></td>
	</tr>
	<tr>
		<td>Reusable Wine Bottle Plastic ID Tags, Blank</td>
		<td>250/Pack</td> 
		<td>$25.00</td>
		<td><input type="number" name="600356" min="0"/></td>
	</tr>
	<tr>
		<td>Halogen 39par20 120V Narrow Spot Lamp </td>
		<td>Each</td> 
		<td>$6.10</td>
		<td><input type="number" name="600452-1" min="0"/></td>
	</tr>
	<tr>
		<td>Halogen 60par30 120V Narrow Spot Lamp </td>
		<td>Each</td> 
		<td>$6.50</td>
		<td><input type="number" name="600453-1" min="0"/></td>
	</tr>
	<tr>
		<td>Halogen 39par30 LONG NECK 120V Narrow Spot Lamp </td>
		<td>Each</td> 
		<td>$6.10</td>
		<td><input type="number" name="600454-1" min="0"/></td>
	</tr>
	<tr>
		<td>Halogen 60par30 120V LONG NECK Narrow Spot Lamp </td>
		<td>Each</td> 
		<td>$6.50</td>
		<td><input type="number" name="600453-LN" min="0"/></td>
	</tr>
	<tr>
		<td>Other<input type="text" name="AKTOther" /></td>
		<td></td> 
		<td></td>
		<td><input type="number" name="AKTQuantity" min="0"/></td>
	</tr>
</table>
<br/><br/>
<table style="width:100%" id = "Marketing">
	<tr>
		<th>Marketing Items (LSM 1.5% Budget)</th>
		<th>Unit</th> 
		<th>Price</th>
	</tr>
	<tr>
		<td>Coach Shirt (No Year) - Blue Lake, Concrete Grey</td>
		<td>Each</td> 
		<td>Starting at 22.90</td>
	</tr>
</table>
<table style="width:100%">
	<tr>
		<td><input type="number" name="CoachS" min="0"/>S</td>
		<td><input type="number" name="CoachM" min="0"/>M</td>
		<td><input type="number" name="CoachL" min="0"/>L</td>
		<td><input type="number" name="CoachXL" min="0"/>XL</td>
		<td><input type="number" name="Coach2XL" min="0"/>2XL</td>
	</tr>
</table>
NOTE: ALL MARKETING ORDERS must be ordered through Marketing.
<br/><br/>
<table style="width:100%" id = "Speakers">
	<tr>
		<th>Speakers & Accessories</th>
		<th>Unit</th> 
		<th>Price</th>
		<th>Quantity</th>
	</tr>
	<tr>
		<td>Speaker/Charger Exchange Fee</td>
		<td>Each</td> 
		<td>$5.00</td>
		<td><input type="number" name="SS-100194" min="0"/></td>
	</tr>
	<tr>
		<td>Speaker Volume Knob</td>
		<td>Each</td> 
		<td>$3.00</td>
		<td><input type="number" name="SS-Knob" min="0"/></td>
	</tr>
</table>
NOTE: <a href="SpeakerReturn.pdf">Click here for a printable pdf on speaker returns</a>
<br/><br/>
<table style="width:100%" id = "Signage">
	<tr>
		<th>Signage</th>
		<th>Unit</th> 
		<th>Price</th>
		<th>Quantity</th>
	</tr>
	<tr>
		<td>Banner, Sign, Rubberstamp *</td>
		<td>Special</td> 
		<td></td>
		<td><input type="number" name="SignFlag" min="0"/></td>
	</tr>
	<tr>
		<td>Other<input type="text" name="SignOther" /></td>
		<td></td>
		<td></td>
		<td><input type="number" name="SignQuantity" min="0"/></td>
	</tr>
</table>
<br/>
Comments:<br/>
<textarea name="Notes" rows="10" cols="50"></textarea><br/><br/>
NOTE: Please click "Save" to save your work and review your order before submitting. <br/>
<input type="submit" value="Save" /><br/>
<br/><br/><br/>
</form>
</body>
</html>