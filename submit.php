<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Glory Days Product Request Form</title>
</head>
<body>
<h2>Please review your order to make sure everything is correct</h2><br/>
<?php
	
	$email = "";
	$subject = "";
	$receipt = "";
	
	
	//Extra info
	if(isset($RushShipping)){
		$subject .= "RUSH ";
	}
	
	if(isset($Pickup)){
		$subject .= "Pickup ";
		$subject .= "Time: " . $_POST['PickTime'];
	}
	
	echo $subject;
	
	$addressEmail = "";
	$addressEcho = "";
	
	$Location = strtoupper($_POST['Location']);
	switch ($Location){
		case "EDGEWATER":
			$addressEmail = "Edgewater" . PHP_EOL . "3 Lee Airpark Dr" . PHP_EOL . "Edgewater, MD 21037" . PHP_EOL . "443-808-8880" . PHP_EOL;
			$addressEcho = "Edgewater" . '<br/>' . "3 Lee Airpark Dr" . '<br/>' . "Edgewater, MD 21037" . '<br/>' . "443-808-8880" . '<br/>';
			break;
		case "ELDERSBURG":
			$addressEmail = "Eldersburg" . PHP_EOL . "1348 Liberty Rd". PHP_EOL . "Eldersburg, MD 21784-6411" . PHP_EOL . "410-552-5160" . PHP_EOL;
			$addressEcho = "Eldersburg" . '<br/>' . "1348 Liberty Rd". '<br/>' . "Eldersburg, MD 21784-6411" . '<br/>' . "410-552-5160" . '<br/>';
			break;
		case "ELLICOTT":
			$addressEmail = "Ellicott City" . PHP_EOL . "10035 Baltimore National Pike". PHP_EOL . "Ellicott City, MD 21042" . PHP_EOL . "410-480-2300" . PHP_EOL;
			$addressEcho = "Ellicott City" . '<br/>' . "10035 Baltimore National Pike". '<br/>' . "Ellicott City, MD 21042" . '<br/>' . "410-480-2300" . '<br/>';
			break;
		case "FREDERICK":
			$addressEmail = "Frederick" . PHP_EOL . "1305 W. 7th St". PHP_EOL . "Frederick, MD 21702-410" . PHP_EOL . "301-696-1112" . PHP_EOL;
			$addressEcho = "Frederick" . '<br/>' . "1305 W. 7th St". '<br/>' . "Frederick, MD 21702-410" . '<br/>' . "301-696-1112" . '<br/>';
			break;
		case "GLEN BURNIE":
			$addressEmail = "Glen Burnie/Pasadena" . PHP_EOL . "7939 Ritchie Hwy". PHP_EOL . "Glen Burnie, MD 21061" . PHP_EOL . "443-749-4376" . PHP_EOL;
			$addressEcho = "Glen Burnie/Pasadena" . '<br/>' . "7939 Ritchie Hwy". '<br/>' . "Glen Burnie, MD 21061" . '<br/>' . "443-749-4376" . '<br/>';
			break;
		case "PASADENA":
			$addressEmail = "Glen Burnie/Pasadena" . PHP_EOL . "7939 Ritchie Hwy". PHP_EOL . "Glen Burnie, MD 21061" . PHP_EOL . "443-749-4376" . PHP_EOL;
			$addressEcho = "Glen Burnie/Pasadena" . '<br/>' . "7939 Ritchie Hwy". '<br/>' . "Glen Burnie, MD 21061" . '<br/>' . "443-749-4376" . '<br/>';
			break;
		case "GLEN BURNIE/PASADENA":
			$addressEmail = "Glen Burnie/Pasadena" . PHP_EOL . "7939 Ritchie Hwy". PHP_EOL . "Glen Burnie, MD 21061" . PHP_EOL . "443-749-4376" . PHP_EOL;
			$addressEcho = "Glen Burnie/Pasadena" . '<br/>' . "7939 Ritchie Hwy". '<br/>' . "Glen Burnie, MD 21061" . '<br/>' . "443-749-4376" . '<br/>';
			break;
		case "TOWSON":
			$addressEmail = "Towson" . PHP_EOL . "1220 E. Joppa Rd". PHP_EOL . "Towson, MD 21286" . PHP_EOL . "443-901-0270" . PHP_EOL;
			$addressEcho = "Towson" . '<br/>' . "1220 E. Joppa Rd". '<br/>' . "Towson, MD 21286" . '<br/>' . "443-901-0270" . '<br/>';
			break;
		case "RANSON":
			$addressEmail = "Ranson/Charles Town" . PHP_EOL . "190 Oak Lee Dr". PHP_EOL . "Ranson, WV 25438-487" . PHP_EOL . "304-728-9000" . PHP_EOL;
			$addressEcho = "Ranson/Charles Town" . '<br/>' . "190 Oak Lee Dr". '<br/>' . "Ranson, WV 25438-487" . '<br/>' . "304-728-9000" . '<br/>';
			break;
		case "CHARLES TOWN":
			$addressEmail = "Ranson/Charles Town" . PHP_EOL . "190 Oak Lee Dr". PHP_EOL . "Ranson, WV 25438-487" . PHP_EOL . "304-728-9000" . PHP_EOL;
			$addressEcho = "Ranson/Charles Town" . '<br/>' . "190 Oak Lee Dr". '<br/>' . "Ranson, WV 25438-487" . '<br/>' . "304-728-9000" . '<br/>';
			break;
		case "RANSON/CHARLES TOWN":
			$addressEmail = "Ranson/Charles Town" . PHP_EOL . "190 Oak Lee Dr". PHP_EOL . "Ranson, WV 25438-487" . PHP_EOL . "304-728-9000" . PHP_EOL;
			$addressEcho = "Ranson/Charles Town" . '<br/>' . "190 Oak Lee Dr". '<br/>' . "Ranson, WV 25438-487" . '<br/>' . "304-728-9000" . '<br/>';
			break;
		case "BARCROFT PLAZA":
			$addressEmail = "Barcroft Plaza" . PHP_EOL . "6341 Columbia Pike". PHP_EOL . "Falls Church, VA 22041" . PHP_EOL . "703-992-6060" . PHP_EOL;
			$addressEcho = "Barcroft Plaza" . '<br/>' . "6341 Columbia Pike". '<br/>' . "Falls Church, VA 22041" . '<br/>' . "703-992-6060" . '<br/>';
			break;
		case "BARCROFT":
			$addressEmail = "Barcroft Plaza" . PHP_EOL . "6341 Columbia Pike". PHP_EOL . "Falls Church, VA 22041" . PHP_EOL . "703-992-6060" . PHP_EOL;
			$addressEcho = "Barcroft Plaza" . '<br/>' . "6341 Columbia Pike". '<br/>' . "Falls Church, VA 22041" . '<br/>' . "703-992-6060" . '<br/>';
			break;
		case "BURKE":
			$addressEmail = "Burke" . PHP_EOL . "9526 Old Keene Mill Rd". PHP_EOL . "Burke, VA 22015-4208" . PHP_EOL . "703-866-1911" . PHP_EOL;
			$addressEcho = "Burke" . '<br/>' . "9526 Old Keene Mill Rd". '<br/>' . "Burke, VA 22015-4208" . '<br/>' . "703-866-1911" . '<br/>';
			break;
		case "CENTREVILLE":
			$addressEmail = "Centreville" . PHP_EOL . "13850 Braddock Rd". PHP_EOL . "Centreville, VA 20121-2452" . PHP_EOL . "703-266-4100" . PHP_EOL;
			$addressEcho = "Centreville" . '<br/>' . "13850 Braddock Rd". '<br/>' . "Centreville, VA 20121-2452" . '<br/>' . "703-266-4100" . '<br/>';
			break;
		case "CULPEPER":
			$addressEmail = "Culpeper" . PHP_EOL . "15295 Montanus Dr". PHP_EOL . "Culpeper, VA 22701-2524" . PHP_EOL . "540-829-7133" . PHP_EOL;
			$addressEcho = "Culpeper" . '<br/>' . "15295 Montanus Dr". '<br/>' . "Culpeper, VA 22701-2524" . '<br/>' . "540-829-7133" . '<br/>';
			break;
		case "FAIRFAX":
			$addressEmail = "Fairfax" . PHP_EOL . "3059 Nutley St". PHP_EOL . "Fairfax, VA 22031-1931" . PHP_EOL . "703-204-0900" . PHP_EOL;
			$addressEcho = "Fairfax" . '<br/>' . "3059 Nutley St". '<br/>' . "Fairfax, VA 22031-1931" . '<br/>' . "703-204-0900" . '<br/>';
			break;
		case "GAINESVILLE":
			$addressEmail = "Gainesville" . PHP_EOL . "7581 Somerset Crossing Dr". PHP_EOL . "Gainesville, VA 20155-4873" . PHP_EOL . "571-261-1500" . PHP_EOL;
			$addressEcho = "Gainesville" . '<br/>' . "7581 Somerset Crossing Dr". '<br/>' . "Gainesville, VA 20155-4873" . '<br/>' . "571-261-1500" . '<br/>';
			break;
		case "LORTON":
			$addressEmail = "Lorton" . PHP_EOL . "9459 Lorton Market St". PHP_EOL . "Lorton, VA 22079-1963" . PHP_EOL . "703-372-1770" . PHP_EOL;
			$addressEcho = "Lorton" . '<br/>' . "9459 Lorton Market St". '<br/>' . "Lorton, VA 22079-1963" . '<br/>' . "703-372-1770" . '<br/>';
			break;
		case "MANASSAS":
			$addressEmail = "Manassas" . PHP_EOL . "9516 Liberia Ave". PHP_EOL . "Manassas, VA 20110-1719" . PHP_EOL . "703-361-9040" . PHP_EOL;
			$addressEcho = "Manassas" . '<br/>' . "9516 Liberia Ave". '<br/>' . "Manassas, VA 20110-1719" . '<br/>' . "703-361-9040" . '<br/>';
			break;
		case "NORTHPOINT":
			$addressEmail = "Reston at North Point Village Center" . PHP_EOL . "1400 North Point Village Center". PHP_EOL . "Reston, VA 20194" . PHP_EOL . "571-926-9700" . PHP_EOL;
			$addressEcho = "Reston at North Point Village Center" . '<br/>' . "1400 North Point Village Center". '<br/>' . "Reston, VA 20194" . '<br/>' . "571-926-9700" . '<br/>';
			break;
		case "FOXMILL":
			$addressEmail = "Reston/Herndon at Fox Mill Shopping Center" . PHP_EOL . "Fox Mill Shopping Center". PHP_EOL . "2567 John Milton Dr" . PHP_EOL . "Herndon, VA 20171-2527" . PHP_EOL . "703-390-5555" . PHP_EOL;
			$addressEcho = "Reston/Herndon at Fox Mill Shopping Center" . '<br/>' . "Fox Mill Shopping Center". '<br/>' . "2567 John Milton Dr" . '<br/>' . "Herndon, VA 20171-2527" . '<br/>' . "703-390-5555" . '<br/>';
			break;
		case "GLENEAGLES":
			$addressEmail = "Richmond at Gleneagles Center" . PHP_EOL . "Gleneagles Center". PHP_EOL . "10466 Ridgefield Pkwy" . PHP_EOL . "Richmond, VA 23233-3548" . PHP_EOL . "804-754-3710" . PHP_EOL;
			$addressEcho = "Richmond at Gleneagles Center" . '<br/>' . "Gleneagles Center". '<br/>' . "10466 Ridgefield Pkwy" . '<br/>' . "Richmond, VA 23233-3548" . '<br/>' . "804-754-3710" . '<br/>';
			break;
		case "HARBOURSIDE":
			$addressEmail = "Richmond at Harbourside Center Loop" . PHP_EOL . "6151 Harbourside Centre Loop". PHP_EOL . "Midlothian, VA 23112-2162" . PHP_EOL . "804-608-8350" . PHP_EOL;
			$addressEcho = "Richmond at Harbourside Center Loop" . '<br/>' . "6151 Harbourside Centre Loop". '<br/>' . "Midlothian, VA 23112-2162" . '<br/>' . "804-608-8350" . '<br/>';
			break;
		case "STONE RIDGE":
			$addressEmail = "Stone Ridge/South Riding" . PHP_EOL . "42010 Village Ctr. Plz". PHP_EOL . "Stone Ridge, VA 20105-3032" . PHP_EOL . "703-327-8811" . PHP_EOL;
			$addressEcho = "Stone Ridge/South Riding" . '<br/>' . "42010 Village Ctr. Plz". '<br/>' . "Stone Ridge, VA 20105-3032" . '<br/>' . "703-327-8811" . '<br/>';
			break;
		case "SOUTH RIDING":
			$addressEmail = "Stone Ridge/South Riding" . PHP_EOL . "42010 Village Ctr. Plz". PHP_EOL . "Stone Ridge, VA 20105-3032" . PHP_EOL . "703-327-8811" . PHP_EOL;
			$addressEcho = "Stone Ridge/South Riding" . '<br/>' . "42010 Village Ctr. Plz". '<br/>' . "Stone Ridge, VA 20105-3032" . '<br/>' . "703-327-8811" . '<br/>';
			break;
		case "STONE RIDGE/SOUTH RIDING":
			$addressEmail = "Stone Ridge/South Riding" . PHP_EOL . "42010 Village Ctr. Plz". PHP_EOL . "Stone Ridge, VA 20105-3032" . PHP_EOL . "703-327-8811" . PHP_EOL;
			$addressEcho = "Stone Ridge/South Riding" . '<br/>' . "42010 Village Ctr. Plz". '<br/>' . "Stone Ridge, VA 20105-3032" . '<br/>' . "703-327-8811" . '<br/>';
			break;
		case "WINCHESTER":
			$addressEmail = "Winchester" . PHP_EOL . "130 Featherbed Ln". PHP_EOL . "Winchester, VA 22601-4435" . PHP_EOL . "540-662-9922" . PHP_EOL;
			$addressEcho = "Winchester" . '<br/>' . "130 Featherbed Ln". '<br/>' . "Winchester, VA 22601-4435" . '<br/>' . "540-662-9922" . '<br/>';
			break;
		case "APEX":
			$addressEmail = "Apex" . PHP_EOL . "Publix Pointe Shopping Center". PHP_EOL . "1413 Kelly Rd" . PHP_EOL . "Apex, NC 27502" . PHP_EOL . "919-629-6111" . PHP_EOL;
			$addressEcho = "Apex" . '<br/>' . "Publix Pointe Shopping Center". '<br/>' . "1413 Kelly Rd" . '<br/>' . "Apex, NC 27502" . '<br/>' . "919-629-6111" . '<br/>';
			break;
		case "4TH STREET":
			$addressEmail = "4th Street, St Petersburg" . PHP_EOL . "9900 4th St". PHP_EOL . "St Petersburg, FL 33702" . PHP_EOL . "727-214-1623" . PHP_EOL;
			$addressEcho = "4th Street, St Petersburg" . '<br/>' . "9900 4th St". '<br/>' . "St Petersburg, FL 33702" . '<br/>' . "727-214-1623" . '<br/>';
			break;
		case "STPETERSBURG":
			$addressEmail = "4th Street, St Petersburg" . PHP_EOL . "9900 4th St". PHP_EOL . "St Petersburg, FL 33702" . PHP_EOL . "727-214-1623" . PHP_EOL;
			$addressEcho = "4th Street, St Petersburg" . '<br/>' . "9900 4th St". '<br/>' . "St Petersburg, FL 33702" . '<br/>' . "727-214-1623" . '<br/>';
			break;
		case "BRANDON":
			$addressEmail = "Brandon" . PHP_EOL . "11310 Causeway Blvd". PHP_EOL . "Brandon, FL 33511" . PHP_EOL . "813-654-5454" . PHP_EOL;
			$addressEcho = "Brandon" . '<br/>' . "11310 Causeway Blvd". '<br/>' . "Brandon, FL 33511" . '<br/>' . "813-654-5454" . '<br/>';
			break;
		case "CARROLLWOOD":
			$addressEmail = "Carrollwood" . PHP_EOL . "14457 N. Dale Mabry Hwy". PHP_EOL . "Tampa, FL 33618" . PHP_EOL . "813-374-0123" . PHP_EOL;
			$addressEcho = "Carrollwood" . '<br/>' . "14457 N. Dale Mabry Hwy". '<br/>' . "Tampa, FL 33618" . '<br/>' . "813-374-0123" . '<br/>';
			break;
		case "LAKELAND":
			$addressEmail = "Lakeland" . PHP_EOL . "3790 Lakeside Village Ct". PHP_EOL . "Lakeland, FL 33803" . PHP_EOL . "863-225-8958" . PHP_EOL;
			$addressEcho = "Lakeland" . '<br/>' . "3790 Lakeside Village Ct". '<br/>' . "Lakeland, FL 33803" . '<br/>' . "863-225-8958" . '<br/>';
			break;
		case "NEWTAMPA":
			$addressEmail = "New Tampa" . PHP_EOL . "17508 Dona Michelle Dr". PHP_EOL . "Tampa, FL 33647" . PHP_EOL . "813-513-7550" . PHP_EOL;
			$addressEcho = "New Tampa" . '<br/>' . "17508 Dona Michelle Dr". '<br/>' . "Tampa, FL 33647" . '<br/>' . "813-513-7550" . '<br/>';
			break;
		case "TAMPA":
			$addressEmail = "New Tampa" . PHP_EOL . "17508 Dona Michelle Dr". PHP_EOL . "Tampa, FL 33647" . PHP_EOL . "813-513-7550" . PHP_EOL;
			$addressEcho = "New Tampa" . '<br/>' . "17508 Dona Michelle Dr". '<br/>' . "Tampa, FL 33647" . '<br/>' . "813-513-7550" . '<br/>';
			break;
		case "ODESSA":
			$addressEmail = "Odessa" . PHP_EOL . "16553 Pointe Village Dr". PHP_EOL . "Lutz, FL 33558" . PHP_EOL . "813-616-2600" . PHP_EOL;
			$addressEcho = "Odessa" . '<br/>' . "16553 Pointe Village Dr". '<br/>' . "Lutz, FL 33558" . '<br/>' . "813-616-2600" . '<br/>';
			break;
		case "PALMHARBOR":
			$addressEmail = "Palm Harbor" . PHP_EOL . "34200 US Highway 19 N". PHP_EOL . "Palm Harbor, FL 34684" . PHP_EOL . "727-216-6566" . PHP_EOL;
			$addressEcho = "Palm Harbor" . '<br/>' . "34200 US Highway 19 N". '<br/>' . "Palm Harbor, FL 34684" . '<br/>' . "727-216-6566" . '<br/>';
			break;
		default:
			$addressEmail = $_POST['Location'];
	}
	
	$email .= "Manager Name: " . $_POST['Name'] . PHP_EOL . $addressEmail . PHP_EOL;
	$receipt .= "Manager Name: " . $_POST['Name'] . '<br/>' . $addressEcho . '<br/>';
	
	
	//Printer and Toner Supplies
	$email .= " Printer and Toner Supplies " . PHP_EOL;
	$email .= "----------------------------" . PHP_EOL;
	$receipt .= "<b> Printer and Toner Supplies </b>" . '<br/>';
	if ($_POST['N53866'] != ""){
		$email .= "N53866 Tamper-Evident Deposit Bags w/ Serial#, 9x12" . PHP_EOL . "Quantity: " . $_POST['N53866'] . PHP_EOL;
		$receipt .= "N53866 Tamper-Evident Deposit Bags w/ Serial#, 9x12" . '<br/>' . "Quantity: " . $_POST['N53866'] . '<br/>';
	}
	if ($_POST['900185'] != ""){
		$email .= "900185 Printer / Copier Paper" . PHP_EOL . "Quantity: " . $_POST['900185'] . PHP_EOL;
		$receipt .= "900185 Printer / Copier Paper" . '<br/>' . "Quantity: " . $_POST['900185'] . '<br/>';
	}
	if ($_POST['GNCE505A'] != ""){
		$email .= "GNCE505A HP LaserJet P2035, P2055 *   [05A]" . PHP_EOL . "Quantity: " . $_POST['GNCE505A'] . PHP_EOL;
		$receipt .= "GNCE505A HP LaserJet P2035, P2055 *   [05A]" . '<br/>' . "Quantity: " . $_POST['GNCE505A'] . '<br/>';
	}
	if ($_POST['GNCE278A'] != ""){
		$email .= "GNCE278A HP LaserJet M1536dnf, P1606 Series *   [78A]" . PHP_EOL . "Quantity: " . $_POST['GNCE278A'] . PHP_EOL;
		$receipt .= "GNCE278A HP LaserJet M1536dnf, P1606 Series *   [78A]" . '<br/>' . "Quantity: " . $_POST['GNCE278A'] . '<br/>';
	}
	if ($_POST['GNCE285A'] != ""){
		$email .= "GNCE285A  HP LaserJet M212nf, M1217nfw *   [85A]" . PHP_EOL . "Quantity: " . $_POST['GNCE285A'] . PHP_EOL;
		$receipt .= "GNCE285A  HP LaserJet M212nf, M1217nfw *   [85A]" . '<br/>' . "Quantity: " . $_POST['GNCE285A'] . '<br/>';
	}
	if ($_POST['200201A'] != ""){
		$email .= "200201A HP LaserJet Pro M201DW *   [83X]" . PHP_EOL . "Quantity: " . $_POST['200201A'] . PHP_EOL;
		$receipt .= "200201A HP LaserJet Pro M201DW *   [83X]" . '<br/>' . "Quantity: " . $_POST['200201A'] . '<br/>';
	}
	if ($_POST['200201B'] != ""){
		$email .= "200201B HP OffJet Pro 8600/10 COLOR 4pk *   [950XL/951XL]" . PHP_EOL . "Quantity: " . $_POST['200201B'] . PHP_EOL;
		$receipt .= "200201B HP OffJet Pro 8600/10 COLOR 4pk *   [950XL/951XL]" . '<br/>' . "Quantity: " . $_POST['200201B'] . '<br/>';
	}
	if ($_POST['200201C'] != ""){
		$email .= "200201C Samsung Toner for M2625D *   [MLT-D116L]" . PHP_EOL . "Quantity: " . $_POST['200201C'] . PHP_EOL;
		$receipt .= "200201C Samsung Toner for M2625D *   [MLT-D116L]" . '<br/>' . "Quantity: " . $_POST['200201C'] . '<br/>';
	}
	if ($_POST['200201D'] != ""){
		$email .= "200201D Brother HLL2320D Mono Laser Printer *   [TN660]" . PHP_EOL . "Quantity: " . $_POST['200201D'] . PHP_EOL;
		$receipt .= "200201D Brother HLL2320D Mono Laser Printer *   [TN660]" . '<br/>' . "Quantity: " . $_POST['200201D'] . '<br/>';
	}
	if ($_POST['200201E'] != ""){
		$email .= "200201E Epson WF Inkjet 3640 COLOR 4pk *   [252XL/252]" . PHP_EOL . "Quantity: " . $_POST['200201E'] . PHP_EOL;
		$receipt .= "200201E Epson WF Inkjet 3640 COLOR 4pk *   [252XL/252]" . '<br/>' . "Quantity: " . $_POST['200201E'] . '<br/>';
	}
	if ($_POST['GNCB436A'] != ""){
		$email .= "GNCB436A HP LaserJet P1505n, M1522nf *   [36A]" . PHP_EOL . "Quantity: " . $_POST['GNCB436A'] . PHP_EOL;
		$receipt .= "GNCB436A HP LaserJet P1505n, M1522nf *   [36A]" . '<br/>' . "Quantity: " . $_POST['GNCB436A'] . '<br/>';
	}
	if ($_POST['GNQ5949X'] != ""){
		$email .= "GNQ5949X HP LaserJet 1320 High Yield *   [49X]" . PHP_EOL . "Quantity: " . $_POST['GNQ5949X'] . PHP_EOL;
		$receipt .= "GNQ5949X HP LaserJet 1320 High Yield *   [49X]" . '<br/>' . "Quantity: " . $_POST['GNQ5949X'] . '<br/>';
	}
	if ($_POST['QuantityPrinter'] != ""){
		$email .= "Other Toner/Printer: " . $_POST['OtherPrinter'] . PHP_EOL . "Quantity: " . $_POST['QuantityPrinter'] . PHP_EOL;
		$receipt .= "Other Toner/Printer: " . $_POST['OtherPrinter'] . '<br/>' . "Quantity: " . $_POST['QuantityPrinter'] . '<br/>';
	}

	//Custom Prints
	$email .= PHP_EOL . "Custom Prints" . PHP_EOL;
	$email .= "----------------------------" . PHP_EOL;
	$receipt .= '<br/>' . "<b>Custom Prints</b>" . '<br/>';
	if ($_POST['900141-16AQ'] != ""){
		$email .= "900141-16AQ Full Color Business Cards, 2-sided *" . PHP_EOL . "Quantity: " . $_POST['900141-16AQ'] . PHP_EOL . $_POST['BCInfo'] .PHP_EOL;
		$receipt .= "900141-16AQ Full Color Business Cards, 2-sided *" . '<br/>' . "Quantity: " . $_POST['900141-16AQ'] . '<br/>' .$_POST['BCInfo'] . '<br/>';
	}
	if ($_POST['900182'] != ""){
		$email .= "900182 Letterhead/Envalope Stationary, custom per store *" . PHP_EOL . "Quantity: " . $_POST['900182'] . PHP_EOL;
		$receipt .= "900182 Letterhead/Envalope Stationary, custom per store *" . '<br/>' . "Quantity: " . $_POST['900182'] . '<br/>';
	}
	if ($_POST['600GDGEmp'] != ""){
		$email .= "600GDGEmp Glory Days Employment Application" . PHP_EOL . "Quantity: " . $_POST['600GDGEmp'] . PHP_EOL;
		$receipt .= "600GDGEmp Glory Days Employment Application" . '<br/>' . "Quantity: " . $_POST['600GDGEmp'] . '<br/>';
	}
	
	//Uniforms
	$email .= "Uniforms" . PHP_EOL;
	$email .= "----------------------------" . PHP_EOL;
	$receipt .='<br/>' . '<b> Uniforms </b>' . '<br/>';
	if ($_POST['600281-H'] != ""){
		$email .= "600281-H Premium Low-Profile Cap, Embroidered" . PHP_EOL . "Quantity: " . $_POST['600281-H'] . PHP_EOL;
		$receipt .= "600281-H Premium Low-Profile Cap, Embroidered" . '<br/>' . "Quantity: " . $_POST['600281-H'] . '<br/>';
	}
	if ($_POST['600283'] != ""){
		$email .= "600283 Apron, 3-Pockets, Black" . PHP_EOL . "Quantity: " . $_POST['600283'] . PHP_EOL;
		$receipt .= "600283 Apron, 3-Pockets, Black" . '<br/>' . "Quantity: " . $_POST['600283'] . '<br/>';
	}
	if ($_POST['400110'] != ""){
		$email .= "400110 Color Nametag with Magnetic Black, Personalized *" . PHP_EOL . "Quantity: " . $_POST['400110'] . PHP_EOL . $_POST['NTInfo'];
		$receipt .= "400110 Color Nametag with Magnetic Black, Personalized *" . '<br/>' . "Quantity: " . $_POST['400110'] . '<br/>' . $_POST['NTInfo'] .'<br/>';
	}
	if ($_POST['HCInfo'] != ""){
		$email .= "Happy Chef Uniform(s):". PHP_EOL . $_POST['HCInfo'] . PHP_EOL;
		$receipt .= "Happy Chef Uniform(s):". '<br/>' . $_POST['HCInfo'] . '<br/>';
	}
	//Mens Red T-Shirt
	if ($_POST['REDMSTSxs'] != "" || $_POST['REDMSTSs'] != "" || $_POST['REDMSTSm'] != "" || $_POST['REDMSTSl'] != "" || $_POST['REDMSTSxl'] != "" || $_POST['REDMSTS2xl'] != "" || $_POST['REDMSTS3xl'] != "" || $_POST['REDMSTS4xl'] != "" || $_POST['REDMSTS5xl'] != "" || $_POST['REDMSTS6xl'] != ""){
		$email .= "Mens Red SportTek Shirt *  -- Sizes:XS-6XL" . PHP_EOL;
		$email .= "----------------------------" . PHP_EOL;
		$receipt .= "Mens Red SportTek Shirt *  -- Sizes:XS-6XL" . '<br/>';
		if($_POST['REDMSTSxs'] != ""){
			$email .= "XS: " . $_POST['REDMSTSxs'] . PHP_EOL;
			$receipt .= "XS: " . $_POST['REDMSTSxs'] . '<br/>';
		}
		if($_POST['REDMSTSs'] != ""){
			$email .= "S: " . $_POST['REDMSTSs'] . PHP_EOL;
			$receipt .= "S: " . $_POST['REDMSTSs'] . '<br/>';
		}
		if($_POST['REDMSTSm'] != ""){
			$email .= "M: " . $_POST['REDMSTSm'] . PHP_EOL;
			$receipt .= "M: " . $_POST['REDMSTSm'] . '<br/>';
		}
		if($_POST['REDMSTSl'] != ""){
			$email .= "L: " . $_POST['REDMSTSl'] . PHP_EOL;
			$receipt .= "L: " . $_POST['REDMSTSl'] . '<br/>';
		}
		if($_POST['REDMSTSxl'] != ""){
			$email .= "XL: " . $_POST['REDMSTSxl'] . PHP_EOL;
			$receipt .= "XL: " . $_POST['REDMSTSxl'] . '<br/>';
		}
		if($_POST['REDMSTS2xl'] != ""){
			$email .= "2XL: " . $_POST['REDMSTS2xl'] . PHP_EOL;
			$receipt .= "2XL: " . $_POST['REDMSTS2xl'] . '<br/>';
		}
		if($_POST['REDMSTS3xl'] != ""){
			$email .= "3XL: " . $_POST['REDMSTS3xl'] . PHP_EOL;
			$receipt .= "3XL: " . $_POST['REDMSTS3xl'] . '<br/>';
		}
		if($_POST['REDMSTS4xl'] != ""){
			$email .= "4XL: " . $_POST['REDMSTS4xl'] . PHP_EOL;
			$receipt .= "4XL: " . $_POST['REDMSTS4xl'] . '<br/>';
		}
		if($_POST['REDMSTS5xl'] != ""){
			$email .= "5XL: " . $_POST['REDMSTS5xl'] . PHP_EOL;
			$receipt .= "5XL: " . $_POST['REDMSTS5xl'] . '<br/>';
		}
		if($_POST['REDMSTS6xl'] != ""){
			$email .= "6XL: " . $_POST['REDMSTS6xl'] . PHP_EOL;
			$receipt .= "6XL: " . $_POST['REDMSTS6xl'] . '<br/>';
		}
	}
	//Mens Black T-Shirt
	if ($_POST['BLKMSTSxs'] != "" || $_POST['BLKMSTSs'] != "" || $_POST['BLKMSTSm'] != "" || $_POST['BLKMSTSl'] != "" || $_POST['BLKMSTSxl'] != "" || $_POST['BLKMSTS2xl'] != "" || $_POST['BLKMSTS3xl'] != "" || $_POST['BLKMSTS4xl'] != "" || $_POST['BLKMSTS5xl'] != "" || $_POST['BLKMSTS6xl'] != ""){
		$email .= "Mens Black SportTek Shirt *  -- Sizes:XS-6XL" . PHP_EOL;
		$email .= "----------------------------" . PHP_EOL;
		$receipt .= "Mens Black SportTek Shirt *  -- Sizes:XS-6XL" . '<br/>';
		if($_POST['BLKMSTSxs'] != ""){
			$email .= "XS: " . $_POST['BLKMSTSxs'] . PHP_EOL;
			$receipt .= "XS: " . $_POST['BLKMSTSxs'] . '<br/>';
		}
		if($_POST['BLKMSTSs'] != ""){
			$email .= "S: " . $_POST['BLKMSTSs'] . PHP_EOL;
			$receipt .= "S: " . $_POST['BLKMSTSs'] . '<br/>';
		}
		if($_POST['BLKMSTSm'] != ""){
			$email .= "M: " . $_POST['BLKMSTSm'] . PHP_EOL;
			$receipt .= "M: " . $_POST['BLKMSTSm'] . '<br/>';
		}
		if($_POST['BLKMSTSl'] != ""){
			$email .= "L: " . $_POST['BLKMSTSl'] . PHP_EOL;
			$receipt .= "L: " . $_POST['BLKMSTSl'] . '<br/>';
		}
		if($_POST['BLKMSTSxl'] != ""){
			$email .= "XL: " . $_POST['BLKMSTSxl'] . PHP_EOL;
			$receipt .= "XL: " . $_POST['BLKMSTSxl'] . '<br/>';
		}
		if($_POST['BLKMSTS2xl'] != ""){
			$email .= "2XL: " . $_POST['BLKMSTS2xl'] . PHP_EOL;
			$receipt .= "2XL: " . $_POST['BLKMSTS2xl'] . '<br/>';
		}
		if($_POST['BLKMSTS3xl'] != ""){
			$email .= "3XL: " . $_POST['BLKMSTS3xl'] . PHP_EOL;
			$receipt .= "3XL: " . $_POST['BLKMSTS3xl'] . '<br/>';
		}
		if($_POST['BLKMSTS4xl'] != ""){
			$email .= "4XL: " . $_POST['BLKMSTS4xl'] . PHP_EOL;
			$receipt .= "4XL: " . $_POST['BLKMSTS4xl'] . '<br/>';
		}
		if($_POST['BLKMSTS5xl'] != ""){
			$email .= "5XL: " . $_POST['BLKMSTS5xl'] . PHP_EOL;
			$receipt .= "5XL: " . $_POST['BLKMSTS5xl'] . '<br/>';
		}
		if($_POST['BLKMSTS6xl'] != ""){
			$email .= "6XL: " . $_POST['BLKMSTS6xl'] . PHP_EOL;
			$receipt .= "6XL: " . $_POST['BLKMSTS6xl'] . '<br/>';
		}
	}
	//Mens Royal T-Shirt
	if ($_POST['ROYMSTSxs'] != "" || $_POST['ROYMSTSs'] != "" || $_POST['ROYMSTSm'] != "" || $_POST['ROYMSTSl'] != "" || $_POST['ROYMSTSxl'] != "" || $_POST['ROYMSTS2xl'] != "" || $_POST['ROYMSTS3xl'] != "" || $_POST['ROYMSTS4xl'] != "" || $_POST['ROYMSTS5xl'] != "" || $_POST['ROYMSTS6xl'] != ""){
		$email .= "Mens Royal SportTek Shirt *  -- Sizes:XS-6XL" . PHP_EOL;
		$email .= "----------------------------" . PHP_EOL;
		$receipt .= "Mens Royal SportTek Shirt *  -- Sizes:XS-6XL" . '<br/>';
		if($_POST['ROYMSTSxs'] != ""){
			$email .= "XS: " . $_POST['ROYMSTSxs'] . PHP_EOL;
			$receipt .= "XS: " . $_POST['ROYMSTSxs'] . '<br/>';
		}
		if($_POST['ROYMSTSs'] != ""){
			$email .= "S: " . $_POST['ROYMSTSs'] . PHP_EOL;
			$receipt .= "S: " . $_POST['ROYMSTSs'] . '<br/>';
		}
		if($_POST['ROYMSTSm'] != ""){
			$email .= "M: " . $_POST['ROYMSTSm'] . PHP_EOL;
			$receipt .= "M: " . $_POST['ROYMSTSm'] . '<br/>';
		}
		if($_POST['ROYMSTSl'] != ""){
			$email .= "L: " . $_POST['ROYMSTSl'] . PHP_EOL;
			$receipt .= "L: " . $_POST['ROYMSTSl'] . '<br/>';
		}
		if($_POST['ROYMSTSxl'] != ""){
			$email .= "XL: " . $_POST['ROYMSTSxl'] . PHP_EOL;
			$receipt .= "XL: " . $_POST['ROYMSTSxl'] . '<br/>';
		}
		if($_POST['ROYMSTS2xl'] != ""){
			$email .= "2XL: " . $_POST['ROYMSTS2xl'] . PHP_EOL;
			$receipt .= "2XL: " . $_POST['ROYMSTS2xl'] . '<br/>';
		}
		if($_POST['ROYMSTS3xl'] != ""){
			$email .= "3XL: " . $_POST['ROYMSTS3xl'] . PHP_EOL;
			$receipt .= "3XL: " . $_POST['ROYMSTS3xl'] . '<br/>';
		}
		if($_POST['ROYMSTS4xl'] != ""){
			$email .= "4XL: " . $_POST['ROYMSTS4xl'] . PHP_EOL;
			$receipt .= "4XL: " . $_POST['ROYMSTS4xl'] . '<br/>';
		}
		if($_POST['ROYMSTS5xl'] != ""){
			$email .= "5XL: " . $_POST['ROYMSTS5xl'] . PHP_EOL;
			$receipt .= "5XL: " . $_POST['ROYMSTS5xl'] . '<br/>';
		}
		if($_POST['ROYMSTS6xl'] != ""){
			$email .= "6XL: " . $_POST['ROYMSTS6xl'] . PHP_EOL;
			$receipt .= "6XL: " . $_POST['ROYMSTS6xl'] . '<br/>';
		}
	}
	//Womens Red T-Shirt
	if ($_POST['REDLSTSxs'] != "" || $_POST['REDLSTSs'] != "" || $_POST['REDLSTSm'] != "" || $_POST['REDLSTSl'] != "" || $_POST['REDLSTSxl'] != "" || $_POST['REDLSTS2xl'] != "" || $_POST['REDLSTS3xl'] != "" || $_POST['REDLSTS4xl'] != ""){
		$email .= "Womens Red SportTek Shirt *  -- Sizes:XS-4XL" . PHP_EOL;
		$email .= "----------------------------" . PHP_EOL;
		$receipt .= "Womens Red SportTek Shirt *  -- Sizes:XS-4XL" . '<br/>';
		if($_POST['REDLSTSxs'] != ""){
			$email .= "XS: " . $_POST['REDLSTSxs'] . PHP_EOL;
			$receipt .= "XS: " . $_POST['REDLSTSxs'] . '<br/>';
		}
		if($_POST['REDLSTSs'] != ""){
			$email .= "S: " . $_POST['REDLSTSs'] . PHP_EOL;
			$receipt .= "S: " . $_POST['REDLSTSs'] . '<br/>';
		}
		if($_POST['REDLSTSm'] != ""){
			$email .= "M: " . $_POST['REDLSTSm'] . PHP_EOL;
			$receipt .= "M: " . $_POST['REDLSTSm'] . '<br/>';
		}
		if($_POST['REDLSTSl'] != ""){
			$email .= "L: " . $_POST['REDLSTSl'] . PHP_EOL;
			$receipt .= "L: " . $_POST['REDLSTSl'] . '<br/>';
		}
		if($_POST['REDLSTSxl'] != ""){
			$email .= "XL: " . $_POST['REDLSTSxl'] . PHP_EOL;
			$receipt .= "XL: " . $_POST['REDLSTSxl'] . '<br/>';
		}
		if($_POST['REDLSTS2xl'] != ""){
			$email .= "2XL: " . $_POST['REDLSTS2xl'] . PHP_EOL;
			$receipt .= "2XL: " . $_POST['REDLSTS2xl'] . '<br/>';
		}
		if($_POST['REDLSTS3xl'] != ""){
			$email .= "3XL: " . $_POST['REDLSTS3xl'] . PHP_EOL;
			$receipt .= "3XL: " . $_POST['REDLSTS3xl'] . '<br/>';
		}
		if($_POST['REDLSTS4xl'] != ""){
			$email .= "4XL: " . $_POST['REDLSTS4xl'] . PHP_EOL;
			$receipt .= "4XL: " . $_POST['REDLSTS4xl'] . '<br/>';
		}
	}
	//Womens Black T-Shirt
	if ($_POST['BLKLSTSxs'] != "" || $_POST['BLKLSTSs'] != "" || $_POST['BLKLSTSm'] != "" || $_POST['BLKLSTSl'] != "" || $_POST['BLKLSTSxl'] != "" || $_POST['BLKLSTS2xl'] != "" || $_POST['BLKLSTS3xl'] != "" || $_POST['BLKLSTS4xl'] != ""){
		$email .= "Womens Black SportTek Shirt *  -- Sizes:XS-4XL" . PHP_EOL;
		$email .= "----------------------------" . PHP_EOL;
		$receipt .= "Womens Black SportTek Shirt *  -- Sizes:XS-4XL" . '<br/>';
		if($_POST['BLKLSTSxs'] != ""){
			$email .= "XS: " . $_POST['BLKLSTSxs'] . PHP_EOL;
			$receipt .= "XS: " . $_POST['BLKLSTSxs'] . '<br/>';
		}
		if($_POST['BLKLSTSs'] != ""){
			$email .= "S: " . $_POST['BLKLSTSs'] . PHP_EOL;
			$receipt .= "S: " . $_POST['BLKLSTSs'] . '<br/>';
		}
		if($_POST['BLKLSTSm'] != ""){
			$email .= "M: " . $_POST['BLKLSTSm'] . PHP_EOL;
			$receipt .= "M: " . $_POST['BLKLSTSm'] . '<br/>';
		}
		if($_POST['BLKLSTSl'] != ""){
			$email .= "L: " . $_POST['BLKLSTSl'] . PHP_EOL;
			$receipt .= "L: " . $_POST['BLKLSTSl'] . '<br/>';
		}
		if($_POST['BLKLSTSxl'] != ""){
			$email .= "XL: " . $_POST['BLKLSTSxl'] . PHP_EOL;
			$receipt .= "XL: " . $_POST['BLKLSTSxl'] . '<br/>';
		}
		if($_POST['BLKLSTS2xl'] != ""){
			$email .= "2XL: " . $_POST['BLKLSTS2xl'] . PHP_EOL;
			$receipt .= "2XL: " . $_POST['BLKLSTS2xl'] . '<br/>';
		}
		if($_POST['BLKLSTS3xl'] != ""){
			$email .= "3XL: " . $_POST['BLKLSTS3xl'] . PHP_EOL;
			$receipt .= "3XL: " . $_POST['BLKLSTS3xl'] . '<br/>';
		}
		if($_POST['BLKLSTS4xl'] != ""){
			$email .= "4XL: " . $_POST['BLKLSTS4xl'] . PHP_EOL;
			$receipt .= "4XL: " . $_POST['BLKLSTS4xl'] . '<br/>';
		}
	}
	//Womens Royal T-Shirt
	if ($_POST['ROYLSTSxs'] != "" || $_POST['ROYLSTSs'] != "" || $_POST['ROYLSTSm'] != "" || $_POST['ROYLSTSl'] != "" || $_POST['ROYLSTSxl'] != "" || $_POST['ROYLSTS2xl'] != "" || $_POST['ROYLSTS3xl'] != "" || $_POST['ROYLSTS4xl'] != ""){
		$email .= "Womens Royal SportTek Shirt *  -- Sizes:XS-4XL" . PHP_EOL;
		$email .= "----------------------------" . PHP_EOL;
		$receipt .= "Womens Royal SportTek Shirt *  -- Sizes:XS-4XL" . '<br/>';
		if($_POST['ROYLSTSxs'] != ""){
			$email .= "XS: " . $_POST['ROYLSTSxs'] . PHP_EOL;
			$receipt .= "XS: " . $_POST['ROYLSTSxs'] . '<br/>';
		}
		if($_POST['ROYLSTSs'] != ""){
			$email .= "S: " . $_POST['ROYLSTSs'] . PHP_EOL;
			$receipt .= "S: " . $_POST['ROYLSTSs'] . '<br/>';
		}
		if($_POST['ROYLSTSm'] != ""){
			$email .= "M: " . $_POST['ROYLSTSm'] . PHP_EOL;
			$receipt .= "M: " . $_POST['ROYLSTSm'] . '<br/>';
		}
		if($_POST['ROYLSTSl'] != ""){
			$email .= "L: " . $_POST['ROYLSTSl'] . PHP_EOL;
			$receipt .= "L: " . $_POST['ROYLSTSl'] . '<br/>';
		}
		if($_POST['ROYLSTSxl'] != ""){
			$email .= "XL: " . $_POST['ROYLSTSxl'] . PHP_EOL;
			$receipt .= "XL: " . $_POST['ROYLSTSxl'] . '<br/>';
		}
		if($_POST['ROYLSTS2xl'] != ""){
			$email .= "2XL: " . $_POST['ROYLSTS2xl'] . PHP_EOL;
			$receipt .="2XL: " . $_POST['ROYLSTS2xl'] . '<br/>'; 
		}
		if($_POST['ROYLSTS3xl'] != ""){
			$email .= "3XL: " . $_POST['ROYLSTS3xl'] . PHP_EOL;
			$receipt .= "3XL: " . $_POST['ROYLSTS3xl'] . '<br/>';
		}
		if($_POST['ROYLSTS4xl'] != ""){
			$email .= "4XL: " . $_POST['ROYLSTS4xl'] . PHP_EOL;
			$receipt .= "4XL: " . $_POST['ROYLSTS4xl'] . '<br/>';
		}
	}
	
	//Kitchen T-Shirt
	if ($_POST['KitchenS'] != "" || $_POST['KitchenM'] != "" || $_POST['KitchenL'] != "" || $_POST['KitchenXL'] != "" || $_POST['Kitchen2XL'] != "" || $_POST['Kitchen3XL'] != ""){
		$email .= "Kitchen T-Shirt, Imprinted" . PHP_EOL;
		$email .= "----------------------------" . PHP_EOL;
		$receipt .= "Kitchen T-Shirt, Imprinted" . '<br/>';
		if($_POST['KitchenS'] != ""){
			$email .= "S: " . $_POST['KitchenS'] . PHP_EOL;
			$receipt .= "S: " . $_POST['KitchenS'] . '<br/>';
		}
		if($_POST['KitchenM'] != ""){
			$email .= "M: " . $_POST['KitchenM'] . PHP_EOL;
			$receipt .= "M: " . $_POST['KitchenM'] . '<br/>';
		}
		if($_POST['KitchenL'] != ""){
			$email .= "L: " . $_POST['KitchenL'] . PHP_EOL;
			$receipt .= "L: " . $_POST['KitchenL'] . '<br/>';
		}
		if($_POST['KitchenXL'] != ""){
			$email .= "XL: " . $_POST['KitchenXL'] . PHP_EOL;
			$receipt .= "XL: " . $_POST['KitchenXL'] . '<br/>';
		}
		if($_POST['Kitchen2XL'] != ""){
			$email .= "2XL: " . $_POST['Kitchen2XL'] . PHP_EOL;
			$receipt .= "2XL: " . $_POST['Kitchen2XL'] . '<br/>';
		}
		if($_POST['Kitchen3XL'] != ""){
			$email .= "3XL: " . $_POST['Kitchen3XL'] . PHP_EOL;
			$receipt .= "3XL: " . $_POST['Kitchen3XL'] . '<br/>';
		}
	}
	
	//Accessories and Kids Toys
	$email .= PHP_EOL . "Accessories and Kids Toys" . PHP_EOL;
	$email .= "----------------------------" . PHP_EOL;
	$receipt .= '<br/>' . "<b>Accessories and Kids Toys</b>" . '<br/>';
	if ($_POST['600400-Shk'] != ""){
		$email .= '600400-Shk Gray Sharks, 6 Inches' . PHP_EOL . "Quantity: " . $_POST['600400-Shk'] . PHP_EOL;
		$receipt .= '600400-Shk Gray Sharks, 6 Inches' . '<br/>' . "Quantity: " . $_POST['600400-Shk'] . '<br/>';
	}
	if ($_POST['600355'] != ""){
		$email .= "600355 LeSanford Fluorescent Markers, Various Colors " . PHP_EOL . "Quantity: " . $_POST['600355'] . PHP_EOL;
		$receipt .= "600355 LeSanford Fluorescent Markers, Various Colors " . '<br/>' . "Quantity: " . $_POST['600355'] . '<br/>';
	}
	if ($_POST['600356'] != ""){
		$email .= "600356 Reusable Wine Bottle PLastic ID Tags, Blank" . PHP_EOL . "Quantity: " . $_POST['600356'] . PHP_EOL;
		$receipt .= "600356 Reusable Wine Bottle PLastic ID Tags, Blank" . '<br/>' . "Quantity: " . $_POST['600356'] . '<br/>';
	}
	if ($_POST['600452-1'] != ""){
		$email .= "600452-1 Halogen 39par20 120V Narrow Spot Lamp" . PHP_EOL . "Quantity: " . $_POST['600452-1'] . PHP_EOL;
		$receipt .= "600452-1 Halogen 39par20 120V Narrow Spot Lamp" . '<br/>' . "Quantity: " . $_POST['600452-1'] . '<br/>';
	}
	if ($_POST['600453-1'] != ""){
		$email .= "600453-1 Halogen 60par30 120V Narrow Spot Lamp" . PHP_EOL . "Quantity: " . $_POST['600453-1'] . PHP_EOL;
		$receipt .= "600453-1 Halogen 60par30 120V Narrow Spot Lamp" . '<br/>' . "Quantity: " . $_POST['600453-1'] . '<br/>';
	}
	if ($_POST['600454-1'] != ""){
		$email .= "600454-1 Halogen 39par30 LONG NECK 120V Narrow Spot Lamp" . PHP_EOL . "Quantity: " . $_POST['600454-1'] . PHP_EOL;
		$receipt .= "600454-1 Halogen 39par30 LONG NECK 120V Narrow Spot Lamp" . '<br/>' . "Quantity: " . $_POST['600454-1'] . '<br/>';
	}
	if ($_POST['600453-LN'] != ""){
		$email .= "600453-LN Halogen 60par30 120V LONG NECK Narrow Spot Lamp" . PHP_EOL . "Quantity: " . $_POST['600453-LN'] . PHP_EOL;
		$receipt .= "600453-LN Halogen 60par30 120V LONG NECK Narrow Spot Lamp" . '<br/>' . "Quantity: " . $_POST['600453-LN'] . '<br/>';
	}
	if ($_POST['AKTOther'] != ""){
		$email .= $_POST['AKTOther'] . PHP_EOL . "Quantity: " . $_POST['AKTQuantity'] . PHP_EOL;
		$receipt .= $_POST['AKTOther'] . '<br/>' . "Quantity: " . $_POST['AKTQuantity'] . '<br/>';
	}
	
	//Marketing Items
	$email .= PHP_EOL . "Marketing Items" . PHP_EOL;
	$email .= "----------------------------" . PHP_EOL;
	$receipt .= '<br/>' . "<b>Marketing Items</b>" . '<br/>';
	if ($_POST['CoachS'] != "" || $_POST['CoachM'] != "" || $_POST['CoachL'] != "" || $_POST['CoachXL'] != "" || $_POST['Coach2XL'] != ""){
		$email .= "Coach Shirt" . PHP_EOL;
		$receipt .= "Coach Shirt" . '<br/>';
		if($_POST['CoachS'] != ""){
			$email .= "S: " . $_POST['CoachS'] . PHP_EOL;
			$receipt .= "S: " . $_POST['CoachS'] . '<br/>';
		}
		if($_POST['CoachM'] != ""){
			$email .= "M: " . $_POST['CoachM'] . PHP_EOL;
			$receipt .= "M: " . $_POST['CoachM'] . '<br/>';
		}
		if($_POST['CoachL'] != ""){
			$email .= "L: " . $_POST['CoachL'] . PHP_EOL;
			$receipt .= "L: " . $_POST['CoachL'] . '<br/>';
		}
		if($_POST['CoachXL'] != ""){
			$email .= "XL: " . $_POST['CoachXL'] . PHP_EOL;
			$receipt .= "XL: " . $_POST['CoachXL'] . '<br/>';
		}
		if($_POST['Coach2XL'] != ""){
			$email .= "2XL: " . $_POST['Coach2XL'] . PHP_EOL;
			$receipt .= "2XL: " . $_POST['Coach2XL'] . '<br/>';
		}
	}
	
	//Speakers and Accessories
	$email .= PHP_EOL . "Speaker and Accessories" . PHP_EOL;
	$email .= "----------------------------" . PHP_EOL;
	$receipt .= '<br/>' . "<b>Speaker and Accessories</b>" . '<br/>';
	if ($_POST['SS-100194'] != ""){
		$email .= 'SS-100194 Speaker/Charger Exchange Fee' . PHP_EOL . "Quantity: " . $_POST['SS-100194'] . PHP_EOL;
		$receipt .= 'SS-100194 Speaker/Charger Exchange Fee' . '<br/>' . "Quantity: " . $_POST['SS-100194'] . '<br/>';
		echo "<a href='SpeakerReturn.pdf'>Click here for a printable pdf on speaker returns</a> <br/>";
	}
	if ($_POST['SS-Knob'] != ""){
		$email .= "SS-Knob Speaker Volume Nob" . PHP_EOL . "Quantity: " . $_POST['SS-Knob'] . PHP_EOL;
		$receipt .= "SS-Knob Speaker Volume Nob" . '<br/>' . "Quantity: " . $_POST['SS-Knob'] . '<br/>';
	}
	
	//Signs
	if ($_POST['SignFlag'] != ""){
		$email .= "The Store has requested Signs" . PHP_EOL;
		$receipt .= "Signs have been Requested";
	}
	
	if($_POST['Notes'] !=""){
		$email .= PHP_EOL . "Notes:" . PHP_EOL . $_POST['Notes'];
		$receipt .= '<br/>' . "Notes:" . '<br/>' . $_POST['Notes'] . '<br/>';
	}
	
	echo $receipt;
	
	$emailString = $email;
?>
<form action="trueSubmit.php" method="post">
<input type="hidden" name="email" value="<?php echo $email ?>"/>
<input type="hidden" name="subject" value="<?php echo $subject ?>"/>
<input type="hidden" name="receipt" value="<?php echo $receipt ?>"/><br/>
Please include your email to receive a copy of your order: <input type="text" name="additionalEmail"><br/>
<input type="submit" value="Submit Order"/>
</form>
<br/><br/>
</body>
</html>