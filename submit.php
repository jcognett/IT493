<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Glory Days Product Request Form</title>
</head>
<body>
<h1>Testing Version 1.0</h1>
<?php
	
	$email = "";
	
	//Printer and Toner Supplies
	$email .= "Printer and Toner Supplies" . PHP_EOL;
	if ($_POST['N53866'] != ""){
		$email .= "N53866 Tamper-Evident Deposit Bags w/ Serial#, 9x12" . PHP_EOL . "Quantity: " . $_POST['N53866'] . PHP_EOL;
	}
	if ($_POST['900185'] != ""){
		$email .= "900185 Printer / Copier Paper" . PHP_EOL . "Quantity: " . $_POST['900185'] . PHP_EOL;
	}
	if ($_POST['GNCE505A'] != ""){
		$email .= "GNCE505A HP LaserJet P2035, P2055 *   [05A]" . PHP_EOL . "Quantity: " . $_POST['GNCE505A'] . PHP_EOL;
	}
	if ($_POST['GNCE278A'] != ""){
		$email .= "GNCE278A HP LaserJet M1536dnf, P1606 Series *   [78A]" . PHP_EOL . "Quantity: " . $_POST['GNCE278A'] . PHP_EOL;
	}
	if ($_POST['GNCE285A'] != ""){
		$email .= "GNCE285A  HP LaserJet M212nf, M1217nfw *   [85A]" . PHP_EOL . "Quantity: " . $_POST['GNCE285A'] . PHP_EOL;
	}
	if ($_POST['200201A'] != ""){
		$email .= "200201A HP LaserJet Pro M201DW *   [83X]" . PHP_EOL . "Quantity: " . $_POST['200201A'] . PHP_EOL;
	}
	if ($_POST['200201B'] != ""){
		$email .= "200201B HP OffJet Pro 8600/10 COLOR 4pk *   [950XL/951XL]" . PHP_EOL . "Quantity: " . $_POST['200201B'] . PHP_EOL;
	}
	if ($_POST['200201C'] != ""){
		$email .= "200201C Samsung Toner for M2625D *   [MLT-D116L]" . PHP_EOL . "Quantity: " . $_POST['200201C'] . PHP_EOL;
	}
	if ($_POST['200201D'] != ""){
		$email .= "200201D Brother HLL2320D Mono Laser Printer *   [TN660]" . PHP_EOL . "Quantity: " . $_POST['200201D'] . PHP_EOL;
	}
	if ($_POST['200201E'] != ""){
		$email .= "200201E Epson WF Inkjet 3640 COLOR 4pk *   [252XL/252]" . PHP_EOL . "Quantity: " . $_POST['200201E'] . PHP_EOL;
	}
	if ($_POST['GNCB436A'] != ""){
		$email .= "GNCB436A HP LaserJet P1505n, M1522nf *   [36A]" . PHP_EOL . "Quantity: " . $_POST['GNCB436A'] . PHP_EOL;
	}
	if ($_POST['GNQ5949X'] != ""){
		$email .= "GNQ5949X HP LaserJet 1320 High Yield *   [49X]" . PHP_EOL . "Quantity: " . $_POST['GNQ5949X'] . PHP_EOL;
	}
	if ($_POST['QuantityPrinter'] != ""){
		$email .= $_POST['OtherPrinter'] . PHP_EOL . "Quantity: " . $_POST['QuantityPrinter'] . PHP_EOL;
	}

	//Custom Prints
	$email .= "Custom Prints" . PHP_EOL;
	if ($_POST['900141-16AQ'] != ""){
		$email .= "900141-16AQ Full Color Business Cards, 2-sided *" . PHP_EOL . "Quantity: " . $_POST['900141-16AQ'] . PHP_EOL;
	}
	if ($_POST['900182'] != ""){
		$email .= "900182 Letterhead/Envalope Stationary, custom per store *" . PHP_EOL . "Quantity: " . $_POST['900182'] . PHP_EOL;
	}
	if ($_POST['600GDGEmp'] != ""){
		$email .= "600GDGEmp Glory Days Employment Application" . PHP_EOL . "Quantity: " . $_POST['600GDGEmp'] . PHP_EOL;
	}
	
	//Uniforms
	$email .= "Uniforms" . PHP_EOL;
	if ($_POST['600281-H'] != ""){
		$email .= "600281-H Premium Low-Profile Cap, Embroidered" . PHP_EOL . "Quantity: " . $_POST['600281-H'] . PHP_EOL;
	}
	if ($_POST['600283'] != ""){
		$email .= "600283 Apron, 3-Pockets, Black" . PHP_EOL . "Quantity: " . $_POST['600283'] . PHP_EOL;
	}
	if ($_POST['400110'] != ""){
		$email .= "400110 Color Nametag with Magnetic Black, Personalized *" . PHP_EOL . "Quantity: " . $_POST['400110'] . PHP_EOL;
	}
	if ($_POST['ChefFlag'] != ""){
		echo "For Chef uniform please call ToPromote directly at 703-250-3890";
		$email .= "Expect call regarding Chef Uniform" . PHP_EOL;
	}
	//Mens Red T-Shirt
	if ($_POST['REDMSTSxs'] != "" || $_POST['REDMSTSs'] != "" || $_POST['REDMSTSm'] != "" || $_POST['REDMSTSl'] != "" || $_POST['REDMSTSxl'] != "" || $_POST['REDMSTS2xl'] != "" || $_POST['REDMSTS3xl'] != "" || $_POST['REDMSTS4xl'] != "" || $_POST['REDMSTS5xl'] != "" || $_POST['REDMSTS6xl'] != ""){
		$email .= "Mens Red SportTek Shirt *  -- Sizes:XS-6XL" . PHP_EOL;
		if($_POST['REDMSTSxs'] != ""){
			$email .= "XS: " . $_POST['REDMSTSxs'] . PHP_EOL;
		}
		if($_POST['REDMSTSs'] != ""){
			$email .= "S: " . $_POST['REDMSTSs'] . PHP_EOL;
		}
		if($_POST['REDMSTSm'] != ""){
			$email .= "M: " . $_POST['REDMSTSm'] . PHP_EOL;
		}
		if($_POST['REDMSTSl'] != ""){
			$email .= "L: " . $_POST['REDMSTSl'] . PHP_EOL;
		}
		if($_POST['REDMSTSxl'] != ""){
			$email .= "XL: " . $_POST['REDMSTSxl'] . PHP_EOL;
		}
		if($_POST['REDMSTS2xl'] != ""){
			$email .= "2XL: " . $_POST['REDMSTS2xl'] . PHP_EOL;
		}
		if($_POST['REDMSTS3xl'] != ""){
			$email .= "3XL: " . $_POST['REDMSTS3xl'] . PHP_EOL;
		}
		if($_POST['REDMSTS4xl'] != ""){
			$email .= "4XL: " . $_POST['REDMSTS4xl'] . PHP_EOL;
		}
		if($_POST['REDMSTS5xl'] != ""){
			$email .= "5XL: " . $_POST['REDMSTS5xl'] . PHP_EOL;
		}
		if($_POST['REDMSTS6xl'] != ""){
			$email .= "6XL: " . $_POST['REDMSTS6xl'] . PHP_EOL;
		}
	}
	//Mens Black T-Shirt
	if ($_POST['BLKMSTSxs'] != "" || $_POST['BLKMSTSs'] != "" || $_POST['BLKMSTSm'] != "" || $_POST['BLKMSTSl'] != "" || $_POST['BLKMSTSxl'] != "" || $_POST['BLKMSTS2xl'] != "" || $_POST['BLKMSTS3xl'] != "" || $_POST['BLKMSTS4xl'] != "" || $_POST['BLKMSTS5xl'] != "" || $_POST['BLKMSTS6xl'] != ""){
		$email .= "Mens Black SportTek Shirt *  -- Sizes:XS-6XL" . PHP_EOL;
		if($_POST['BLKMSTSxs'] != ""){
			$email .= "XS: " . $_POST['BLKMSTSxs'] . PHP_EOL;
		}
		if($_POST['BLKMSTSs'] != ""){
			$email .= "S: " . $_POST['BLKMSTSs'] . PHP_EOL;
		}
		if($_POST['BLKMSTSm'] != ""){
			$email .= "M: " . $_POST['BLKMSTSm'] . PHP_EOL;
		}
		if($_POST['BLKMSTSl'] != ""){
			$email .= "L: " . $_POST['BLKMSTSl'] . PHP_EOL;
		}
		if($_POST['BLKMSTSxl'] != ""){
			$email .= "XL: " . $_POST['BLKMSTSxl'] . PHP_EOL;
		}
		if($_POST['BLKMSTS2xl'] != ""){
			$email .= "2XL: " . $_POST['BLKMSTS2xl'] . PHP_EOL;
		}
		if($_POST['BLKMSTS3xl'] != ""){
			$email .= "3XL: " . $_POST['BLKMSTS3xl'] . PHP_EOL;
		}
		if($_POST['BLKMSTS4xl'] != ""){
			$email .= "4XL: " . $_POST['BLKMSTS4xl'] . PHP_EOL;
		}
		if($_POST['BLKMSTS5xl'] != ""){
			$email .= "5XL: " . $_POST['BLKMSTS5xl'] . PHP_EOL;
		}
		if($_POST['BLKMSTS6xl'] != ""){
			$email .= "6XL: " . $_POST['BLKMSTS6xl'] . PHP_EOL;
		}
	}
	//Mens Royal T-Shirt
	if ($_POST['ROYMSTSxs'] != "" || $_POST['ROYMSTSs'] != "" || $_POST['ROYMSTSm'] != "" || $_POST['ROYMSTSl'] != "" || $_POST['ROYMSTSxl'] != "" || $_POST['ROYMSTS2xl'] != "" || $_POST['ROYMSTS3xl'] != "" || $_POST['ROYMSTS4xl'] != "" || $_POST['ROYMSTS5xl'] != "" || $_POST['ROYMSTS6xl'] != ""){
		$email .= "Mens Royal SportTek Shirt *  -- Sizes:XS-6XL" . PHP_EOL;
		if($_POST['ROYMSTSxs'] != ""){
			$email .= "XS: " . $_POST['ROYMSTSxs'] . PHP_EOL;
		}
		if($_POST['ROYMSTSs'] != ""){
			$email .= "S: " . $_POST['ROYMSTSs'] . PHP_EOL;
		}
		if($_POST['ROYMSTSm'] != ""){
			$email .= "M: " . $_POST['ROYMSTSm'] . PHP_EOL;
		}
		if($_POST['ROYMSTSl'] != ""){
			$email .= "L: " . $_POST['ROYMSTSl'] . PHP_EOL;
		}
		if($_POST['ROYMSTSxl'] != ""){
			$email .= "XL: " . $_POST['ROYMSTSxl'] . PHP_EOL;
		}
		if($_POST['ROYMSTS2xl'] != ""){
			$email .= "2XL: " . $_POST['ROYMSTS2xl'] . PHP_EOL;
		}
		if($_POST['ROYMSTS3xl'] != ""){
			$email .= "3XL: " . $_POST['ROYMSTS3xl'] . PHP_EOL;
		}
		if($_POST['ROYMSTS4xl'] != ""){
			$email .= "4XL: " . $_POST['RYMSTS4xl'] . PHP_EOL;
		}
		if($_POST['ROYMSTS5xl'] != ""){
			$email .= "5XL: " . $_POST['ROYMSTS5xl'] . PHP_EOL;
		}
		if($_POST['ROYMSTS6xl'] != ""){
			$email .= "6XL: " . $_POST['ROYMSTS6xl'] . PHP_EOL;
		}
	}
	//Womens Red T-Shirt
	if ($_POST['REDLSTSxs'] != "" || $_POST['REDLSTSs'] != "" || $_POST['REDLSTSm'] != "" || $_POST['REDLSTSl'] != "" || $_POST['REDLSTSxl'] != "" || $_POST['REDLSTS2xl'] != "" || $_POST['REDLSTS3xl'] != "" || $_POST['REDLSTS4xl'] != ""){
		$email .= "Womens Red SportTek Shirt *  -- Sizes:XS-4XL" . PHP_EOL;
		if($_POST['REDLSTSxs'] != ""){
			$email .= "XS: " . $_POST['REDLSTSxs'] . PHP_EOL;
		}
		if($_POST['REDLSTSs'] != ""){
			$email .= "S: " . $_POST['REDLSTSs'] . PHP_EOL;
		}
		if($_POST['REDLSTSm'] != ""){
			$email .= "M: " . $_POST['REDLSTSm'] . PHP_EOL;
		}
		if($_POST['REDLSTSl'] != ""){
			$email .= "L: " . $_POST['REDLSTSl'] . PHP_EOL;
		}
		if($_POST['REDLSTSxl'] != ""){
			$email .= "XL: " . $_POST['REDLSTSxl'] . PHP_EOL;
		}
		if($_POST['REDLSTS2xl'] != ""){
			$email .= "2XL: " . $_POST['REDLSTS2xl'] . PHP_EOL;
		}
		if($_POST['REDLSTS3xl'] != ""){
			$email .= "3XL: " . $_POST['REDLSTS3xl'] . PHP_EOL;
		}
		if($_POST['REDLSTS4xl'] != ""){
			$email .= "4XL: " . $_POST['REDLSTS4xl'] . PHP_EOL;
		}
	}
	//Womens Black T-Shirt
	if ($_POST['BLKLSTSxs'] != "" || $_POST['BLKLSTSs'] != "" || $_POST['BLKLSTSm'] != "" || $_POST['BLKLSTSl'] != "" || $_POST['BLKLSTSxl'] != "" || $_POST['BLKLSTS2xl'] != "" || $_POST['BLKLSTS3xl'] != "" || $_POST['BLKLSTS4xl'] != ""){
		$email .= "Womens Black SportTek Shirt *  -- Sizes:XS-4XL" . PHP_EOL;
		if($_POST['BLKLSTSxs'] != ""){
			$email .= "XS: " . $_POST['BLKLSTSxs'] . PHP_EOL;
		}
		if($_POST['BLKLSTSs'] != ""){
			$email .= "S: " . $_POST['BLKLSTSs'] . PHP_EOL;
		}
		if($_POST['BLKLSTSm'] != ""){
			$email .= "M: " . $_POST['BLKLSTSm'] . PHP_EOL;
		}
		if($_POST['BLKLSTSl'] != ""){
			$email .= "L: " . $_POST['BLKLSTSl'] . PHP_EOL;
		}
		if($_POST['BLKLSTSxl'] != ""){
			$email .= "XL: " . $_POST['BLKLSTSxl'] . PHP_EOL;
		}
		if($_POST['BLKLSTS2xl'] != ""){
			$email .= "2XL: " . $_POST['BLKLSTS2xl'] . PHP_EOL;
		}
		if($_POST['BLKLSTS3xl'] != ""){
			$email .= "3XL: " . $_POST['BLKLSTS3xl'] . PHP_EOL;
		}
		if($_POST['BLKLSTS4xl'] != ""){
			$email .= "4XL: " . $_POST['BLKLSTS4xl'] . PHP_EOL;
		}
	}
	//Womens Royal T-Shirt
	if ($_POST['ROYLSTSxs'] != "" || $_POST['ROYLSTSs'] != "" || $_POST['ROYLSTSm'] != "" || $_POST['ROYLSTSl'] != "" || $_POST['ROYLSTSxl'] != "" || $_POST['ROYLSTS2xl'] != "" || $_POST['ROYLSTS3xl'] != "" || $_POST['ROYLSTS4xl'] != ""){
		$email .= "Womens Royal SportTek Shirt *  -- Sizes:XS-4XL" . PHP_EOL;
		if($_POST['ROYLSTSxs'] != ""){
			$email .= "XS: " . $_POST['ROYLSTSxs'] . PHP_EOL;
		}
		if($_POST['ROYLSTSs'] != ""){
			$email .= "S: " . $_POST['ROYLSTSs'] . PHP_EOL;
		}
		if($_POST['ROYLSTSm'] != ""){
			$email .= "M: " . $_POST['ROYLSTSm'] . PHP_EOL;
		}
		if($_POST['ROYLSTSl'] != ""){
			$email .= "L: " . $_POST['ROYLSTSl'] . PHP_EOL;
		}
		if($_POST['ROYLSTSxl'] != ""){
			$email .= "XL: " . $_POST['ROYLSTSxl'] . PHP_EOL;
		}
		if($_POST['ROYLSTS2xl'] != ""){
			$email .= "2XL: " . $_POST['ROYLSTS2xl'] . PHP_EOL;
		}
		if($_POST['ROYLSTS3xl'] != ""){
			$email .= "3XL: " . $_POST['ROYLSTS3xl'] . PHP_EOL;
		}
		if($_POST['ROYLSTS4xl'] != ""){
			$email .= "4XL: " . $_POST['ROYLSTS4xl'] . PHP_EOL;
		}
	}
	//Kitchen T-Shirt
	if ($_POST['KitchenS'] != "" || $_POST['KitchenM'] != "" || $_POST['KitchenL'] != "" || $_POST['KitchenXL'] != "" || $_POST['Kitchen2XL'] != "" || $_POST['Kitchen3XL'] != ""){
		$email .= "Kitchen T-Shirt, Imprinted" . PHP_EOL;
		if($_POST['KitchenS'] != ""){
			$email .= "S: " . $_POST['KitchenS'] . PHP_EOL;
		}
		if($_POST['KitchenM'] != ""){
			$email .= "M: " . $_POST['KitchenM'] . PHP_EOL;
		}
		if($_POST['KitchenL'] != ""){
			$email .= "L: " . $_POST['KitchenL'] . PHP_EOL;
		}
		if($_POST['KitchenXL'] != ""){
			$email .= "XL: " . $_POST['KitchenXL'] . PHP_EOL;
		}
		if($_POST['Kitchen2XL'] != ""){
			$email .= "2XL: " . $_POST['Kitchen2XL'] . PHP_EOL;
		}
		if($_POST['Kitchen3XL'] != ""){
			$email .= "3XL: " . $_POST['Kitchen3XL'] . PHP_EOL;
		}
	}
	
	//Accessories/Kids Toys
	$email .= "Accessories and Kids Toys" . PHP_EOL;
	if ($_POST['600400-Shk'] != ""){
		$email .= '600400-Shk Gray Sharks, 6"' . PHP_EOL . "Quantity: " . $_POST['600400-Shk'] . PHP_EOL;
	}
	if ($_POST['600355'] != ""){
		$email .= "600355 LeSanford Fluorescent Markers, Various Colors " . PHP_EOL . "Quantity: " . $_POST['600355'] . PHP_EOL;
	}
	if ($_POST['600356'] != ""){
		$email .= "600356 Reusable Wine Bottle PLastic ID Tags, Blank" . PHP_EOL . "Quantity: " . $_POST['600356'] . PHP_EOL;
	}
	if ($_POST['600452-1'] != ""){
		$email .= "600452-1 Halogen 39par20 120V Narrow Spot Lamp" . PHP_EOL . "Quantity: " . $_POST['600452-1'] . PHP_EOL;
	}
	if ($_POST['600453-1'] != ""){
		$email .= "600453-1 Halogen 60par30 120V Narrow Spot Lamp" . PHP_EOL . "Quantity: " . $_POST['600453-1'] . PHP_EOL;
	}
	if ($_POST['600454-1'] != ""){
		$email .= "600454-1 Halogen 39par30 LONG NECK 120V Narrow Spot Lamp" . PHP_EOL . "Quantity: " . $_POST['600454-1'] . PHP_EOL;
	}
	if ($_POST['600453-LN'] != ""){
		$email .= "600453-LN Halogen 60par30 120V LONG NECK Narrow Spot Lamp" . PHP_EOL . "Quantity: " . $_POST['600453-LN'] . PHP_EOL;
	}
	if ($_POST['AKTOther'] != ""){
		$email .= $_POST['AKTOther'] . PHP_EOL . "Quantity: " . $_POST['AKTQuantity'] . PHP_EOL;
	}
	
	//Marketing Items
	$email .= "Marketing Items" . PHP_EOL;
	if ($_POST['CoachS'] != "" || $_POST['CoachM'] != "" || $_POST['CoachL'] != "" || $_POST['CoachXL'] != "" || $_POST['Coach2XL'] != ""){
		$email .= "Coach Shirt" . PHP_EOL;
		if($_POST['CoachS'] != ""){
			$email .= "S: " . $_POST['CoachS'] . PHP_EOL;
		}
		if($_POST['CoachM'] != ""){
			$email .= "M: " . $_POST['CoachM'] . PHP_EOL;
		}
		if($_POST['CoachL'] != ""){
			$email .= "L: " . $_POST['CoachL'] . PHP_EOL;
		}
		if($_POST['CoachXL'] != ""){
			$email .= "XL: " . $_POST['CoachXL'] . PHP_EOL;
		}
		if($_POST['Coach2XL'] != ""){
			$email .= "2XL: " . $_POST['Coach2XL'] . PHP_EOL;
		}
	}
	
	//Speakers and Accessories
	$email .= "Speaker and Accessories" . PHP_EOL;
	if ($_POST['SS-100194'] != ""){
		$email .= 'SS-100194 Speaker/Charger Exchange Fee' . PHP_EOL . "Quantity: " . $_POST['SS-100194'] . PHP_EOL;
	}
	if ($_POST['SS-Knob'] != ""){
		$email .= "SS-Knob Speaker Volume Nob" . PHP_EOL . "Quantity: " . $_POST['SS-Knob'] . PHP_EOL;
	}
	
	//Signs
	if ($_POST['SignFlag'] != ""){
		echo "For Signs please call ToPromote directly at 703-250-3890";
		$email .= "Expect call regarding Signage" . PHP_EOL;
	}
	
	$day = date('d-m-Y');
	
	mail('jcognett@gmu.edu', 'Product Request ' . $day, $email);
?>
<br/>
<hr/>
</body>
</html>