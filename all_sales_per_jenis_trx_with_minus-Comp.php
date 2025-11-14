<?php
include "lock.php";
// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
$tgl = date("Y-m-d");
// echo $tgl;
$ot = '';
$tglstart = $tgl;
$tglend = $tgl;
$res = array();
if ($_GET['submit'] == "Submit") {
	// echo"ada get";
	$ot 		= $_GET['kodeoutlet'] ? $_GET['kodeoutlet'] : '';
	$tglstart 	= $_GET['tglstart'] ? $_GET['tglstart'] : $tgl;
	$tglend 	= $_GET['tglend'] ? $_GET['tglend'] : $tgl;
	$debug		= $_GET['debug'] ? $_GET['debug'] : '';

	$where_outlet = " and outlet = '{$ot}'";
	if ($ot != "") {
		$where_outlet = whereKodeOutlet($ot, "outlet");
	}

	$query 	= "select * from " . $lokasidb . ".storage_transaksi where tgl_trx between '" . $tglstart . "' and '" . $tglend . "' " . $where_outlet . " and status != 0 and (jenistrx='1' OR jenistrx='4' OR jenistrx='6' OR jenistrx='8')";
	// echo $query;
	$res 	= $db1->query($query);

	if($debug){
		echo $query;
	}

	if (is_array($res) and count($res) > 0) {

		// echo "ada datanya: ".count($res)."<br>";
	} else {

		// echo "data kosong <br>";
		// var_dump($res);
	}
	// echo "ini outlet: ".intval($ot);
	// echo "Query : ".$query."<br>";
} else {
	// echo"ga ada get";
}

// echo "<pre>";
// print_r(count($res));
// echo "</pre>";



$tgltrx =  date("Y-m-d");
$kodeoutlet = "";
if ($dept_user == 'OUTLET') {

	$kodeoutlet = $subdept_user;
	$tgltrx = getTglBuku($kodeoutlet);
}
// echo "Ini tgl trx : ".$tgltrx."<br>";

$gofood 	= 517298;
$grab 		= 589021;
$trv 		= 643558;
$shope 		= 641591;
$airasia 	= 668008;
$happy 		= 51752;
$shopemal	= 904831;
$tiktok		= 898724;
$tokped		= 587249;

$data = array();
$sisa = 0;

foreach ($res as $k => $v) {
	$isNoCompliment = intval($v['compliment']) > 0;
	$isNoSpoil = intval($v['compliment']) > 0;
	if ($v['jenistrx'] == 1 && $isNoCompliment && $isNoSpoil) {

		if ($v['nomember'] == $gofood) {

			$data['gofood']['jml'] 		+= 1;
			$data['gofood']['gross'] 	+= $v['bruto'];
			$data['gofood']['disc'] 	+= $v['diskon_rupiah'];
			$data['gofood']['net'] 		+= $v['netto'];
			$data['gofood']['nomember']  = $v['nomember'];
		} elseif ($v['nomember'] == $grab) {

			$data['grab']['jml'] 		+= 1;
			$data['grab']['gross'] 		+= $v['bruto'];
			$data['grab']['disc'] 		+= $v['diskon_rupiah'];
			$data['grab']['net'] 		+= $v['netto'];
			$data['grab']['nomember'] 	 = $v['nomember'];
		} elseif ($v['nomember'] == $trv) {
			$data['traveloka']['jml'] 		+= 1;
			$data['traveloka']['gross'] 	+= $v['bruto'];
			$data['traveloka']['disc'] 		+= $v['diskon_rupiah'];
			$data['traveloka']['net'] 		+= $v['netto'];
			$data['traveloka']['nomember'] 	 = $v['nomember'];
		} elseif ($v['nomember'] == $shope) {

			$data['shopee']['jml'] 		+= 1;
			$data['shopee']['gross'] 	+= $v['bruto'];
			$data['shopee']['disc'] 	+= $v['diskon_rupiah'];
			$data['shopee']['net'] 		+= $v['netto'];
			$data['shopee']['nomember']  = $v['nomember'];
		} elseif ($v['nomember'] == $airasia) {

			$data['airasia']['jml'] 	+= 1;
			$data['airasia']['gross'] 	+= $v['bruto'];
			$data['airasia']['disc'] 	+= $v['diskon_rupiah'];
			$data['airasia']['net'] 	+= $v['netto'];
			$data['airasia']['nomember'] = $v['nomember'];
		} elseif ($v['nomember'] == $happy) {

			$data['happy']['jml'] 		+= 1;
			$data['happy']['gross'] 	+= $v['bruto'];
			$data['happy']['disc'] 		+= $v['diskon_rupiah'];
			$data['happy']['net'] 		+= $v['netto'];
			$data['happy']['nomember'] 	+= $v['nomember'];
		} elseif($v['nomember'] == $tokped){

			$data['tokopedia']['jml'] 		+= 1;
			$data['tokopedia']['gross'] 	+= $v['bruto'];
			$data['tokopedia']['disc'] 		+= $v['diskon_rupiah'];
			$data['tokopedia']['net'] 		+= $v['netto'];
			$data['tokopedia']['nomember']  = $v['nomember'];
		}
		elseif($v['nomember'] == $tiktok){

			$data['tiktok']['jml'] 		+= 1;
			$data['tiktok']['gross'] 	+= $v['bruto'];
			$data['tiktok']['disc'] 	+= $v['diskon_rupiah'];
			$data['tiktok']['net'] 		+= $v['netto'];
			$data['tiktok']['nomember'] = $v['nomember'];
		}
		elseif($v['nomember'] == $shopemal){

			$data['shopeemall']['jml'] 		+= 1;
			$data['shopeemall']['gross'] 	+= $v['bruto'];
			$data['shopeemall']['disc'] 	+= $v['diskon_rupiah'];
			$data['shopeemall']['net'] 		+= $v['netto'];
			$data['shopeemall']['nomember'] = $v['nomember'];
		}else {

			$data['walkin']['jml'] 		+= 1;
			$data['walkin']['gross'] 	+= $v['bruto'];
			$data['walkin']['disc'] 	+= $v['diskon_rupiah'];
			$data['walkin']['net'] 		+= $v['netto'];
			$data['walkin']['nomember']  = '';
		}
	} 
	elseif ($v['jenistrx'] == 4 && $isNoCompliment && $isNoSpoil) {

		if($v['nomember'] == $shopemal) {

			$data['shopeemall']['jml'] 		+= 1;
			$data['shopeemall']['gross'] 	+= $v['bruto'];
			$data['shopeemall']['disc'] 	+= $v['diskon_rupiah'];
			$data['shopeemall']['net'] 		+= $v['netto'];
			$data['shopeemall']['nomember'] = $v['nomember'];
		}
		elseif(like_match("INV20%",$v['remark'])) {

			$data['aplikasi']['jml'] 		+= 1;
			$data['aplikasi']['gross'] 		+= $v['bruto'];
			$data['aplikasi']['disc'] 		+= $v['diskon_rupiah'];
			$data['aplikasi']['net'] 		+= $v['netto'];
			$data['aplikasi']['nomember'] 	 = 4;
		}
		else {
		// if(like_match("OD20%",$v['remark'])) {
			$data['delivery']['jml'] 		+= 1;
			$data['delivery']['gross'] 		+= $v['bruto'];
			$data['delivery']['disc'] 		+= $v['diskon_rupiah'];
			$data['delivery']['net'] 		+= $v['netto'];
			$data['delivery']['nomember'] 	 = 4;
		}
	} 
	elseif ($v['jenistrx'] == 8 && $isNoCompliment && $isNoSpoil) {

		$data['weborder']['jml'] 		+= 1;
		$data['weborder']['gross'] 		+= $v['bruto'];
		$data['weborder']['disc'] 		+= $v['diskon_rupiah'];
		$data['weborder']['net'] 		+= $v['netto'];
		$data['weborder']['nomember'] 	 = 8;
	} else if (!$isNoCompliment) { 
		$data['compliment']['jml'] 		+= 1;
		$data['compliment']['gross'] 	+= $v['compliment'];
		$data['compliment']['disc'] 	+= $v['diskon_rupiah'];
		$data['compliment']['net'] 		+= $v['netto'];
		$data['compliment']['nomember'] = $v['nomember'];
		$data['compliment']['isCompliment'] = true;
	} else if (!$isNoSpoil) { 
		$data['spoil']['jml'] 		+= 1;
		$data['spoil']['gross'] 	+= $v['spoil'];
		$data['spoil']['disc'] 	+= $v['diskon_rupiah'];
		$data['spoil']['net'] 		+= $v['netto'];
		$data['spoil']['nomember'] = $v['nomember'];
		$data['spoil']['isSpoil'] = true;
	}
	else {

		$sisa++;
	}
}
// echo "<pre>";
// print_r($data);
// echo "</pre>";

// echo "<pre>";
// print_r($data);
// echo "</pre>";
// echo $sisa;

function rupiah($angka)
{

	$hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
	return $hasil_rupiah;
}
krsort($data);
?>


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>ALL SALES PER JENIS TRX</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<!--link href="calendar/calendar.css" rel="stylesheet" type="text/css" />
		<script language="javascript" src="calendar/calendar.js"></script-->

	<style>
		fieldset {
			margin-bottom: 10px;
		}

		table {
			border-collapse: collapse;
		}
	</style>
</head>

<body>
	<form action="" class="register" method="GET">
		<?php include "menuatas.php"; ?>
		<div style="overflow: auto;">
			<fieldset class="row4">
				<legend>ALL SALES PER JENIS TRX</legend>
				<table>
					<tr>
						<td>- Pilih Outlet</td>
						<td>:</td>
						<td>
							<?php
							include_once "select_outlet.php";
							?>
						</td>
					</tr>
					<tr>
						<td>- Dari Tgl.</td>
						<td>:</td>
						<td>
							<input type="date" name="tglstart" id="tglstart" value="<?php echo $tglstart; ?>" style="height:30px;padding: 5px;" />
						</td>

					</tr>
					<tr>
						<td>- Ke Tgl.</td>
						<td>:</td>
						<td>
							<input type="date" name="tglend" id="tglend" value="<?php echo $tglend; ?>" style="height:30px;padding: 5px;" />
						</td>

					</tr>
					<tr>
						<td colspan="3">
							<input type="submit" name="submit" value="Submit">
						</td>
					</tr>
				</table>

				<div class="clear"></div>
			</fieldset>
		</div>
		<div style="overflow: auto;" align="">
			<?php
			if ($ot != "")
				echo "<h5>" . carinamapanjang($ot) . "</h5>";
			?>
		</div>
		<?php if (count($res) > 0) { ?>
			<fieldset class="row4">
				<table border="1" cellpadding="5px">
					<thead>
						<tr height="40px">
							<th width="200px">Jenis Trx</th>
							<th width="100px">Jml Trx</th>
							<th width="170px">Gross</th>
							<th width="170px">Net</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$link 		= '';
						$totalduit 	= 0;
						$totalnett 	= 0;
						$totaltrx 	= 0;

						foreach ($data as $key => $value) {

							$link = 'all_sales_per_jenistrx_detail.php?kodeoutlet=' . $ot . '&tglstart=' . $tglstart . '&tglend=' . $tglend . '&jenis=' . $value['nomember'] . '&isCompliment=' . $value['isCompliment'] . '&isSpoil=' . $value['isSpoil'];
							$link1 = '"' . $link . '"';
							if(strtolower($key) == "aplikasi") {

								$link1 = rtrim($link1, '"');
								$link1 .= "&jenis2=app\"";
							}
							echo "<tr height='30px'  onclick='window.location=" . $link1 . "'>";
							echo "<td>" . strtoupper($key) . "</td>";
							echo "<td style='text-align: right;'>" . $value['jml'] . "</td>";
							echo "<td style='text-align: right;' nowrap>
								<a href='" . $link . "'>" .
									(($value['isSpoil'] || $value['isCompliment']) 
										? '-' . rupiah($value['gross']) 
										: rupiah($value['gross'])
									) .
								"</a></td>";
							echo "<td style='text-align: right;' nowrap><a href='" . $link . "'>" . rupiah($value['net']) . "</a></td>";
							echo "</tr>";
							if (!$value['isSpoil'] && !$value['isCompliment']) {
								$totalduit += $value['gross'];
								$totalnett += $value['net'];
							}
							$totaltrx  += $value['jml'];
						}

						echo "<tr height='50px'><th>Total</th> <th align='right'  nowrap>" . $totaltrx . "</th> <th align='right' nowrap>" . rupiah($totalduit) . "</th> <th align='right' nowrap>" . rupiah($totalnett) . "</th></tr>";
						?>
					</tbody>
				</table>
			</fieldset>
		<?php } ?>
	</form>
</body>

</html>