<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
   ob_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Glory Days Product Request Form</title>
<link rel = "stylesheet" type="text/css"  href= "ToPromoteFormStyleSheet.css">
<img src="https://commonmedia.asicentral.com/160000/164530/ToPromote%20Logo%20200x70.png" id = "logo"><br/>
Phone: 703-205-3890 <br/>
Date: 4/11/2018 <br/>

<body>
<form action="submit.php" method="post" id="ToPromoteForm">
Location<select name="Location">
  <option value="Edgewater">Edgewater</option>
  <option value="Eldersburg">Eldersburg</option>
  <option value="Ellicott">Ellicott City</option>
  <option value="Frederick">Frederick</option>
  <option value="Pasadena">Glen Burnie/Pasadena</option>
  <option value="Towson">Towson</option>
  <option value="Ranson">Ranson/Charles Town</option>
  <option value="Barcroft">Barcroft Plaza</option>
  <option value="Burke">Burke</option>
  <option value="Centreville">Centreville</option>
  <option value="Culpeper">Culpeper</option>
  <option value="Fairfax">Fairfax</option>
  <option value="Gainesville">Gainesville</option>
  <option value="Lorton">Lorton</option>
  <option value="Manassas">Manassas</option>
  <option value="NorthPoint">Reston at North Point Village Center</option>
  <option value="FoxMill">Reston/Herndon at Fox Mill Shopping Center</option>
  <option value="Gleneagles">Richmond at Gleneagles Center</option>
  <option value="Harbourside">Richmond at Harbourside Centre Loop</option>
  <option value="StoneRidge">Stone Ridge/South Riding</option>
  <option value="APEX">APEX</option>
  <option value="StPetersburg">4th Street, St Petersburg</option>
  <option value="Brandon">Brandon</option>
  <option value="Carrollwood">Carrollwood</option>
  <option value="Lakeland">Lakeland</option>
  <option value="NewTampa">New Tampa</option>
  <option value="Odessa">Odessa</option>
  <option value="PalmHarbor">Palm Harbor</option>
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
		<td><input type="number" name="N53866"/></td>
	</tr>
	<tr>
		<td>Printer / Copier Paper</td>
		<td>500/Ream</td> 
		<td>$3.69</td>
		<td><input type="number" name="900185"/></td>
	</tr>
	<tr>
		<td>HP LaserJet P2035, P2055 *   [05A]</td>
		<td>Each</td> 
		<td>$65.50</td>
		<td><input type="number" name="GNCE505A" /></td>
	</tr>
	<tr>
		<td>HP LaserJet M1536dnf, P1606 Series *   [78A]</td>
		<td>Each</td> 
		<td>$46.70</td>
		<td><input type="number" name="GNCE278A" /></td>
	</tr>
	<tr>
		<td>HP LaserJet M212nf, M1217nfw *   [85A]</td>
		<td>Each</td> 
		<td>$45.50</td>
		<td><input type="number" name="GNCE285A" /></td>
	</tr>
	<tr>
		<td>HP LaserJet Pro M201DW *   [83X]</td>
		<td>Each</td> 
		<td>$57.99</td>
		<td><input type="number" name="200201A" /></td>
	</tr>
	<tr>
		<td>HP OffJet Pro 8600/10 COLOR 4pk *   [950XL/951XL]</td>
		<td>Each</td> 
		<td>$92.00</td>
		<td><input type="number" name="200201B" /></td>
	</tr>
	<tr>
		<td>Samsung Toner for M2625D *   [MLT-D116L]</td>
		<td>Each</td> 
		<td>$74.50</td>
		<td><input type="number" name="200201C" /></td>
	</tr>
	<tr>
		<td>Brother HLL2320D Mono Laser Printer *   [TN660]</td>
		<td>Each</td> 
		<td>$45.50</td>
		<td><input type="number" name="200201D" /></td>
	</tr>
	<tr>
		<td>Epson WF Inkjet 3640 COLOR 4pk *   [252XL/252]</td>
		<td>Each</td> 
		<td>$67.59</td>
		<td><input type="number" name="200201E" /></td>
	</tr>
	<tr>
		<td>HP LaserJet P1505n, M1522nf *   [36A]</td>
		<td>Each</td> 
		<td>$45.60</td>
		<td><input type="number" name="GNCB436A" /></td>
	</tr>
	<tr>
		<td>HP LaserJet 1320 High Yield *   [49X]</td>
		<td>Each</td> 
		<td>$62.50</td>
		<td><input type="number" name="GNQ5949X" /></td>
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
		<td><input type="number" name="900141-16AQ" /></td>
	</tr>
	<tr>
	<td>Name and Info for Business Cards:</td>
	<td><input type="Text" name="BCInfo"/></td>
	</tr>
	<tr>
		<td>Letterhead/Envalope Stationary, custom per store *</td>
		<td>1000/Box</td> 
		<td></td>
		<td><input type="number" name="900182" /></td>
	</tr>
	<tr>
		<td>Glory Days Employment Application</td>
		<td>50/Pad</td> 
		<td>$3.55</td>
		<td><input type="number" name="600GDGEmp" /></td>
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
		<td><input type="number" name="600281-H" /></td>
	</tr>
	<tr>
		<td>Apron, 3-Pockets, Black</td>
		<td>Each</td> 
		<td>$5.99</td>
		<td><input type="number" name="600283" /></td>
	</tr>
	<tr>
		<td>Color Nametag with Magnetic Black, Personalized *</td>
		<td>Each</td> 
		<td>$12.95</td>
		<td><input type="number" name="400110" /></td>
	</tr>
	<tr>
	<td>Name and Info for Name Tags:</td>
	<td><input type="Text" name="NTInfo"/></td>
	</tr>
	<tr>
		<td>HappyChef Black Coat, BK/WH Chalkstripe Pants *</td>
		<td>Special</td> 
		<td></td>
		<td><input type="number" name="HC" /></td>
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
		<td><input type="number" name="REDMSTSxs" />XS</td>
		<td><input type="number" name="REDMSTSs" />S</td>
		<td><input type="number" name="REDMSTSm" />M</td>
		<td><input type="number" name="REDMSTSl" />L</td>
		<td><input type="number" name="REDMSTSxl" />XL</td>
		<td><input type="number" name="REDMSTS2xl" />2XL</td>
		<td><input type="number" name="REDMSTS3xl" />3XL</td>
		<td><input type="number" name="REDMSTS4xl" />4XL</td>
		<td><input type="number" name="REDMSTS5xl" />5XL</td>
		<td><input type="number" name="REDMSTS6xl" />6XL</td>
	</tr>
	<tr>
		<td>Black</td>
		<td><input type="number" name="BLKMSTSxs" />XS</td>
		<td><input type="number" name="BLKMSTSs" />S</td>
		<td><input type="number" name="BLKMSTSm" />M</td>
		<td><input type="number" name="BLKMSTSl" />L</td>
		<td><input type="number" name="BLKMSTSxl" />XL</td>
		<td><input type="number" name="BLKMSTS2xl" />2XL</td>
		<td><input type="number" name="BLKMSTS3xl" />3XL</td>
		<td><input type="number" name="BLKMSTS4xl" />4XL</td>
		<td><input type="number" name="BLKMSTS5xl" />5XL</td>
		<td><input type="number" name="BLKMSTS6xl" />6XL</td>
	</tr>
		<tr>
		<td>Royal</td>
		<td><input type="number" name="ROYMSTSxs" />XS</td>
		<td><input type="number" name="ROYMSTSs" />S</td>
		<td><input type="number" name="ROYMSTSm" />M</td>
		<td><input type="number" name="ROYMSTSl" />L</td>
		<td><input type="number" name="ROYMSTSxl" />XL</td>
		<td><input type="number" name="ROYMSTS2xl" />2XL</td>
		<td><input type="number" name="ROYMSTS3xl" />3XL</td>
		<td><input type="number" name="ROYMSTS4xl" />4XL</td>
		<td><input type="number" name="ROYMSTS5xl" />5XL</td>
		<td><input type="number" name="ROYMSTS6xl" />6XL</td>
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
		<td><input type="number" name="REDLSTSxs" />XS</td>
		<td><input type="number" name="REDLSTSs" />S</td>
		<td><input type="number" name="REDLSTSm" />M</td>
		<td><input type="number" name="REDLSTSl" />L</td>
		<td><input type="number" name="REDLSTSxl" />XL</td>
		<td><input type="number" name="REDLSTS2xl" />2XL</td>
		<td><input type="number" name="REDLSTS3xl" />3XL</td>
		<td><input type="number" name="REDLSTS4xl" />4XL</td>
	</tr>
	<tr>
		<td>Black</td>
		<td><input type="number" name="BLKLSTSxs" />XS</td>
		<td><input type="number" name="BLKLSTSs" />S</td>
		<td><input type="number" name="BLKLSTSm" />M</td>
		<td><input type="number" name="BLKLSTSl" />L</td>
		<td><input type="number" name="BLKLSTSxl" />XL</td>
		<td><input type="number" name="BLKLSTS2xl" />2XL</td>
		<td><input type="number" name="BLKLSTS3xl" />3XL</td>
		<td><input type="number" name="BLKLSTS4xl" />4XL</td>
	</tr>
		<tr>
		<td>Royal</td>
		<td><input type="number" name="ROYLSTSxs" />XS</td>
		<td><input type="number" name="ROYLSTSs" />S</td>
		<td><input type="number" name="ROYLSTSm" />M</td>
		<td><input type="number" name="ROYLSTSl" />L</td>
		<td><input type="number" name="ROYLSTSxl" />XL</td>
		<td><input type="number" name="ROYLSTS2xl" />2XL</td>
		<td><input type="number" name="ROYLSTS3xl" />3XL</td>
		<td><input type="number" name="ROYLSTS4xl" />4XL</td>
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
		<td><input type="number" name="KitchenS" />S</td>
		<td><input type="number" name="KitchenM" />M</td>
		<td><input type="number" name="KitchenL" />L</td>
		<td><input type="number" name="KitchenXL" />XL</td>
		<td><input type="number" name="Kitchen2XL" />2XL</td>
		<td><input type="number" name="Kitchen3XL" />3XL</td>
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
		<td><input type="number" name="600400-Shk" /></td>
	</tr>
	<tr>
		<td>LeSanford Fluorescent Markers, Various Colors </td>
		<td>5/Pack</td> 
		<td>$23.90</td>
		<td><input type="number" name="600355" /></td>
	</tr>
	<tr>
		<td>Reusable Wine Bottle PLastic ID Tags, Blank</td>
		<td>250/Pack</td> 
		<td>$25.00</td>
		<td><input type="number" name="600356" /></td>
	</tr>
	<tr>
		<td>Halogen 39par20 120V Narrow Spot Lamp </td>
		<td>Each</td> 
		<td>$6.10</td>
		<td><input type="number" name="600452-1" /></td>
	</tr>
	<tr>
		<td>Halogen 60par30 120V Narrow Spot Lamp </td>
		<td>Each</td> 
		<td>$6.50</td>
		<td><input type="number" name="600453-1" /></td>
	</tr>
	<tr>
		<td>Halogen 39par30 LONG NECK 120V Narrow Spot Lamp </td>
		<td>Each</td> 
		<td>$6.10</td>
		<td><input type="number" name="600454-1" /></td>
	</tr>
	<tr>
		<td>Halogen 60par30 120V LONG NECK Narrow Spot Lamp </td>
		<td>Each</td> 
		<td>$6.50</td>
		<td><input type="number" name="600453-LN" /></td>
	</tr>
	<tr>
		<td>Other<input type="text" name="AKTOther" /></td>
		<td></td> 
		<td></td>
		<td><input type="number" name="AKTQuantity" /></td>
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
		<td>Coach Shirt (No Year) - Maroon, Dark Grey</td>
		<td>Each</td> 
		<td>Starting at 22.90</td>
	</tr>
</table>
<table style="width:100%">
	<tr>
		<td><input type="number" name="CoachS" />S</td>
		<td><input type="number" name="CoachM" />M</td>
		<td><input type="number" name="CoachL" />L</td>
		<td><input type="number" name="CoachXL" />XL</td>
		<td><input type="number" name="Coach2XL" />2XL</td>
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
		<td><input type="number" name="SS-100194" /></td>
	</tr>
	<tr>
		<td>Speaker Volume Nob</td>
		<td>Each</td> 
		<td>$3.00</td>
		<td><input type="number" name="SS-Knob" /></td>
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
		<td><input type="number" name="SignFlag" /></td>
	</tr>
	<tr>
		<td>Other<input type="text" name="SignOther" /></td>
		<td></td>
		<td></td>
		<td><input type="number" name="SignQuantity" /></td>
	</tr>
</table>
<br/>
Comments:<br/>
<textarea name="Notes" rows="10" cols="50"></textarea><br/><br/>
NOTE: Please click "Save" to save your work and review your order before submitting. <br/>
<input type="submit" value="Save" /> <input type="reset" />
<br/><br/><br/>
</form>
</body>
</html>