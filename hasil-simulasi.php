<?php
ob_start(); 

$musim_kemarau = ["April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober"];
$musim_hujan = ["Januari","Februari", "Maret","November", "Desember"];


//Hasil Simulasi 
$_SESSION['hasil_simulasiMD'] = [];
$_SESSION['total_hasilMD'] = 0;
$_SESSION['total_dataRealMD'] = 0;
$_SESSION['hitung_datarealMD'] = [];

//Musim Kemarau dan Hujan MD
$_SESSION['total_musim_kemarau_MD'] = 0;
$_SESSION['total_musim_hujan_MD'] = 0;
$_SESSION['total_hasil_musim_kemarau_MD'] = 0;
$_SESSION['total_hasil_musim_hujan_MD'] = 0;
$_SESSION['total_real_musim_kemarau_MD'] = 0;
$_SESSION['total_real_musim_hujan_MD'] = 0;

for ($i=0; $i < count($bulan); $i++) { 
	$temp = 0;
	for ($j=0; $j < count($bulan); $j++) { 
		if($_SESSION['angkaAcakMD'][$i] >= $_SESSION['batas_awalMD'][$j] && $_SESSION['angkaAcakMD'][$i] <= $_SESSION['batas_akhirMD'][$j]){
			$temp = $_SESSION['hitung_convertMentahMD'][$j];
		}
	}
	$_SESSION['total_hasilMD'] += $temp;
	$_SESSION['hasil_simulasiMD'][$i] = (int) $temp;
	$_SESSION['total_dataRealMD'] += (int) $_SESSION['hitung_convertRealMD'][$i];
	$_SESSION['hitung_datarealMD'][$i] = (int) $_SESSION['hitung_convertRealMD'][$i];

	//total musim kemarau dan hujan MD
	if($i >= 3 && $i <= 9){
		$_SESSION['total_musim_kemarau_MD'] += $_SESSION['hitung_convertMentahMD'][$i];
		$_SESSION['total_hasil_musim_kemarau_MD'] += $_SESSION['hasil_simulasiMD'][$i];
		$_SESSION['total_real_musim_kemarau_MD'] += $_SESSION['hitung_datarealMD'][$i];  
	}else{
		$_SESSION['total_musim_hujan_MD'] += $_SESSION['hitung_convertMentahMD'][$i];
		$_SESSION['total_hasil_musim_hujan_MD'] += $_SESSION['hasil_simulasiMD'][$i];
		$_SESSION['total_real_musim_hujan_MD'] += $_SESSION['hitung_datarealMD'][$i];
	}
}
//Rata-rata musim kemarau dan musim hujan MD
$_SESSION['rata2F_kemarau_MD'] = 0;
$_SESSION['rata2F_hujan_MD'] = 0;
$_SESSION['rata2_hasil_kemarau_MD'] = 0;
$_SESSION['rata2_hasil_hujan_MD'] = 0;
$_SESSION['rata2_real_kemarau_MD'] = 0;
$_SESSION['rata2_real_hujan_MD'] = 0;
$_SESSION['rata2F_kemarau_MD'] = round($_SESSION['total_musim_kemarau_MD'] / count($musim_kemarau));
$_SESSION['rata2F_hujan_MD'] = round($_SESSION['total_musim_hujan_MD'] / count($musim_hujan));
$_SESSION['rata2_hasil_kemarau_MD'] = round($_SESSION['total_hasil_musim_kemarau_MD'] / count($musim_kemarau));
$_SESSION['rata2_hasil_hujan_MD'] = round($_SESSION['total_hasil_musim_hujan_MD'] / count($musim_hujan));
$_SESSION['rata2_real_kemarau_MD'] = round($_SESSION['total_real_musim_kemarau_MD'] / count($musim_kemarau));
$_SESSION['rata2_real_hujan_MD'] = round($_SESSION['total_real_musim_hujan_MD'] / count($musim_hujan));




//Hasil Simulasi Luka Berat
$_SESSION['hasil_simulasiLB'] = [];
$_SESSION['total_hasilLB'] = 0;
$_SESSION['total_dataRealLB'] = 0;
$_SESSION['hitung_datarealLB'] = [];

//Musim Kemarau dan Hujan LB
$_SESSION['total_musim_kemarau_LB'] = 0;
$_SESSION['total_musim_hujan_LB'] = 0;
$_SESSION['total_hasil_musim_kemarau_LB'] = 0;
$_SESSION['total_hasil_musim_hujan_LB'] = 0;
$_SESSION['total_real_musim_kemarau_LB'] = 0;
$_SESSION['total_real_musim_hujan_LB'] = 0;

for ($i=0; $i < count($bulan); $i++) { 
	$temp = 0;
	for ($j=0; $j < count($bulan); $j++) { 
		if($_SESSION['angkaAcakLB'][$i] >= $_SESSION['batas_awalLB'][$j] && $_SESSION['angkaAcakLB'][$i] <= $_SESSION['batas_akhirLB'][$j]){
			$temp = $_SESSION['hitung_convertMentahLB'][$j];
		}
	}
	$_SESSION['total_hasilLB'] += $temp;
	$_SESSION['hasil_simulasiLB'][$i] = (int) $temp;
	$_SESSION['total_dataRealLB'] += (int) $_SESSION['hitung_convertRealLB'][$i];
	$_SESSION['hitung_datarealLB'][$i] = (int) $_SESSION['hitung_convertRealLB'][$i];

	//total musim kemarau dan hujan LB
	if($i >= 3 && $i <= 9){
		$_SESSION['total_musim_kemarau_LB'] += $_SESSION['hitung_convertMentahLB'][$i];
		$_SESSION['total_hasil_musim_kemarau_LB'] += $_SESSION['hasil_simulasiLB'][$i];
		$_SESSION['total_real_musim_kemarau_LB'] += $_SESSION['hitung_datarealLB'][$i];  
	}else{
		$_SESSION['total_musim_hujan_LB'] += $_SESSION['hitung_convertMentahLB'][$i];
		$_SESSION['total_hasil_musim_hujan_LB'] += $_SESSION['hasil_simulasiLB'][$i];
		$_SESSION['total_real_musim_hujan_LB'] += $_SESSION['hitung_datarealLB'][$i];
	}
}
//Rata-rata musim kemarau dan musim hujan LB
$_SESSION['rata2F_kemarau_LB'] = 0;
$_SESSION['rata2F_hujan_LB'] = 0;
$_SESSION['rata2_hasil_kemarau_LB'] = 0;
$_SESSION['rata2_hasil_hujan_LB'] = 0;
$_SESSION['rata2_real_kemarau_LB'] = 0;
$_SESSION['rata2_real_hujan_LB'] = 0;
$_SESSION['rata2F_kemarau_LB'] = round($_SESSION['total_musim_kemarau_LB'] / count($musim_kemarau));
$_SESSION['rata2F_hujan_LB'] = round($_SESSION['total_musim_hujan_LB'] / count($musim_hujan));
$_SESSION['rata2_hasil_kemarau_LB'] = round($_SESSION['total_hasil_musim_kemarau_LB'] / count($musim_kemarau));
$_SESSION['rata2_hasil_hujan_LB'] = round($_SESSION['total_hasil_musim_hujan_LB'] / count($musim_hujan));
$_SESSION['rata2_real_kemarau_LB'] = round($_SESSION['total_real_musim_kemarau_LB'] / count($musim_kemarau));
$_SESSION['rata2_real_hujan_LB'] = round($_SESSION['total_real_musim_hujan_LB'] / count($musim_hujan));



//Hasil Simulasi Luka Ringan
$_SESSION['hasil_simulasiLR'] = [];
$_SESSION['total_hasilLR'] = 0;
$_SESSION['total_dataRealLR'] = 0;

//Musim Kemarau dan Hujan LR
$_SESSION['total_musim_kemarau_LR'] = 0;
$_SESSION['total_musim_hujan_LR'] = 0;
$_SESSION['total_hasil_musim_kemarau_LR'] = 0;
$_SESSION['total_hasil_musim_hujan_LR'] = 0;
$_SESSION['total_real_musim_kemarau_LR'] = 0;
$_SESSION['total_real_musim_hujan_LR'] = 0;

for ($i=0; $i < count($bulan); $i++) { 
	$temp = 0;
	for ($j=0; $j < count($bulan); $j++) { 
		if($_SESSION['angkaAcakLR'][$i] >= $_SESSION['batas_awalLR'][$j] && $_SESSION['angkaAcakLR'][$i] <= $_SESSION['batas_akhirLR'][$j]){
			$temp = $_SESSION['hitung_convertMentahLR'][$j];
		}
	}
	$_SESSION['total_hasilLR'] += $temp;
	$_SESSION['hasil_simulasiLR'][$i] = (int) $temp;
	$_SESSION['total_dataRealLR'] += (int) $_SESSION['hitung_convertRealLR'][$i];
	$_SESSION['hitung_datarealLR'][$i] = (int) $_SESSION['hitung_convertRealLR'][$i];

	//total musim kemarau dan hujan LR
	if($i >= 3 && $i <= 9){
		$_SESSION['total_musim_kemarau_LR'] += $_SESSION['hitung_convertMentahLR'][$i];
		$_SESSION['total_hasil_musim_kemarau_LR'] += $_SESSION['hasil_simulasiLR'][$i];
		$_SESSION['total_real_musim_kemarau_LR'] += $_SESSION['hitung_datarealLR'][$i];  
	}else{
		$_SESSION['total_musim_hujan_LR'] += $_SESSION['hitung_convertMentahLR'][$i];
		$_SESSION['total_hasil_musim_hujan_LR'] += $_SESSION['hasil_simulasiLR'][$i];
		$_SESSION['total_real_musim_hujan_LR'] += $_SESSION['hitung_datarealLR'][$i];
	}
}
//Rata-rata musim kemarau dan musim hujan LR
$_SESSION['rata2F_kemarau_LR'] = 0;
$_SESSION['rata2F_hujan_LR'] = 0;
$_SESSION['rata2_hasil_kemarau_LR'] = 0;
$_SESSION['rata2_hasil_hujan_LR'] = 0;
$_SESSION['rata2_real_kemarau_LR'] = 0;
$_SESSION['rata2_real_hujan_LR'] = 0;
$_SESSION['rata2F_kemarau_LR'] = round($_SESSION['total_musim_kemarau_LR'] / count($musim_kemarau));
$_SESSION['rata2F_hujan_LR'] = round($_SESSION['total_musim_hujan_LR'] / count($musim_hujan));
$_SESSION['rata2_hasil_kemarau_LR'] = round($_SESSION['total_hasil_musim_kemarau_LR'] / count($musim_kemarau));
$_SESSION['rata2_hasil_hujan_LR'] = round($_SESSION['total_hasil_musim_hujan_LR'] / count($musim_hujan));
$_SESSION['rata2_real_kemarau_LR'] = round($_SESSION['total_real_musim_kemarau_LR'] / count($musim_kemarau));
$_SESSION['rata2_real_hujan_LR'] = round($_SESSION['total_real_musim_hujan_LR'] / count($musim_hujan));



//Tingkat Akurasi Meninggal Dunia
$_SESSION['convert_presentaseMD'] = [];
$akurasiMD = [];
$_SESSION['total_presentaseMD'] = 0;

//musim kemarau dan hujan
$_SESSION['total_akurasi_kemarau_MD'] = 0;
$_SESSION['total_akurasi_hujan_MD'] = 0;

for ($i=0; $i < count($bulan) ; $i++) { 
	if($_SESSION['hitung_datarealMD'][$i] <= $_SESSION['hasil_simulasiMD'][$i]){
		$akurasiMD[$i] = $_SESSION['hitung_datarealMD'][$i] / $_SESSION['hasil_simulasiMD'][$i] * 100;

	}else if($_SESSION['hasil_simulasiMD'][$i] <= $_SESSION['hitung_datarealMD'][$i]){
		$akurasiMD[$i] =  $_SESSION['hasil_simulasiMD'][$i] / $_SESSION['hitung_datarealMD'][$i] * 100;
	}
	$_SESSION['convert_presentaseMD'][$i] = (int) round($akurasiMD[$i]);
	$_SESSION['total_presentaseMD'] += $_SESSION['convert_presentaseMD'][$i];

	//musim kemarau dan hujuan
	if ($i >= 3 && $i <= 9) {
		$_SESSION['total_akurasi_kemarau_MD'] += $_SESSION['convert_presentaseMD'][$i];
	}else{
		$_SESSION['total_akurasi_hujan_MD'] += $_SESSION['convert_presentaseMD'][$i];
	} 
}
//total tingkat akurasi MD
$_SESSION['total_tingkat_presentase_MD'] = 0;
$_SESSION['total_tingkat_presentase_MD'] = $_SESSION['total_hasilMD'] <= $_SESSION['total_dataRealMD'] ? round($_SESSION['total_hasilMD'] / $_SESSION['total_dataRealMD'] * 100) : round($_SESSION['total_dataRealMD'] / $_SESSION['total_hasilMD'] * 100); 
//total tingkat akurasi musim hujan dan kemarau MD
$_SESSION['tingkat_akurasi_kemarau_MD'] = 0;
$_SESSION['tingkat_akurasi_hujan_MD'] = 0;
$_SESSION['tingkat_akurasi_kemarau_MD'] = $_SESSION['total_hasil_musim_kemarau_MD'] <= $_SESSION['total_real_musim_kemarau_MD'] ? round($_SESSION['total_hasil_musim_kemarau_MD'] / $_SESSION['total_real_musim_kemarau_MD'] * 100) : round($_SESSION['total_real_musim_kemarau_MD'] / $_SESSION['total_hasil_musim_kemarau_MD'] * 100);
$_SESSION['tingkat_akurasi_hujan_MD'] = $_SESSION['total_hasil_musim_hujan_MD'] <= $_SESSION['total_real_musim_hujan_MD'] ? round($_SESSION['total_hasil_musim_hujan_MD'] / $_SESSION['total_real_musim_hujan_MD'] * 100) : round($_SESSION['total_real_musim_hujan_MD'] / $_SESSION['total_hasil_musim_hujan_MD'] * 100);
//rata-rata tingkat akurasi musim kemarau dan hujan
$_SESSION['rata2A_kemarau_MD'] = 0;
$_SESSION['rata2A_hujan_MD'] = 0;
$_SESSION['rata2A_kemarau_MD'] = round($_SESSION['total_akurasi_kemarau_MD'] / count($musim_kemarau));
$_SESSION['rata2A_hujan_MD'] = round($_SESSION['total_akurasi_hujan_MD'] / count($musim_hujan)); 	



//Tingkat Akurasi Luka Berat
$_SESSION['convert_presentaseLB'] = [];
$akurasiLB = [];
$_SESSION['total_presentaseLB'] = 0;

//musim kemarau dan hujan
$_SESSION['total_akurasi_kemarau_LB'] = 0;
$_SESSION['total_akurasi_hujan_LB'] = 0;

for ($i=0; $i < count($bulan) ; $i++) { 
	if($_SESSION['hitung_datarealLB'][$i] <= $_SESSION['hasil_simulasiLB'][$i]){
		$akurasiLB[$i] = $_SESSION['hitung_datarealLB'][$i] / $_SESSION['hasil_simulasiLB'][$i] * 100;
	}else if($_SESSION['hasil_simulasiLB'][$i] <= $_SESSION['hitung_datarealLB'][$i]){
		$akurasiLB[$i] =  $_SESSION['hasil_simulasiLB'][$i] / $_SESSION['hitung_datarealLB'][$i] * 100;
	}
	$_SESSION['convert_presentaseLB'][$i] = (int) round($akurasiLB[$i]);
	$_SESSION['total_presentaseLB'] += $_SESSION['convert_presentaseLB'][$i];

	//musim kemarau dan hujuan
	if ($i >= 3 && $i <= 9) {
		$_SESSION['total_akurasi_kemarau_LB'] += $_SESSION['convert_presentaseLB'][$i];
	}else{
		$_SESSION['total_akurasi_hujan_LB'] += $_SESSION['convert_presentaseLB'][$i];
	}

}
//total tingkat akurasi LB
$_SESSION['total_tingkat_presentase_LB'] = 0;
$_SESSION['total_tingkat_presentase_LB'] = $_SESSION['total_hasilLB'] <= $_SESSION['total_dataRealLB'] ? round($_SESSION['total_hasilLB'] / $_SESSION['total_dataRealLB'] * 100) : round($_SESSION['total_dataRealLB'] / $_SESSION['total_hasilLB'] * 100); 
//total tingkat akurasi musim hujan dan kemarau LB
$_SESSION['tingkat_akurasi_kemarau_LB'] = 0;
$_SESSION['tingkat_akurasi_hujan_LB'] = 0;
$_SESSION['tingkat_akurasi_kemarau_LB'] = $_SESSION['total_hasil_musim_kemarau_LB'] <= $_SESSION['total_real_musim_kemarau_LB'] ? round($_SESSION['total_hasil_musim_kemarau_LB'] / $_SESSION['total_real_musim_kemarau_LB'] * 100) : round($_SESSION['total_real_musim_kemarau_LB'] / $_SESSION['total_hasil_musim_kemarau_LB'] * 100);
$_SESSION['tingkat_akurasi_hujan_LB'] = $_SESSION['total_hasil_musim_hujan_LB'] <= $_SESSION['total_real_musim_hujan_LB'] ? round($_SESSION['total_hasil_musim_hujan_LB'] / $_SESSION['total_real_musim_hujan_LB'] * 100) : round($_SESSION['total_real_musim_hujan_LB'] / $_SESSION['total_hasil_musim_hujan_LB'] * 100);
//rata-rata tingkat akurasi musim kemarau dan hujan
$_SESSION['rata2A_kemarau_LB'] = 0;
$_SESSION['rata2A_hujan_LB'] = 0;
$_SESSION['rata2A_kemarau_LB'] = round($_SESSION['total_akurasi_kemarau_LB'] / count($musim_kemarau));
$_SESSION['rata2A_hujan_LB'] = round($_SESSION['total_akurasi_hujan_LB'] / count($musim_hujan)); 	



//Tingkat Akurasi Luka Ringan
$_SESSION['convert_presentaseLR'] = [];
$akurasiLR = [];
$_SESSION['total_presentaseLR'] = 0;

//musim kemarau dan hujan
$_SESSION['total_akurasi_kemarau_LR'] = 0;
$_SESSION['total_akurasi_hujan_LR'] = 0;

for ($i=0; $i < count($bulan) ; $i++) { 
	if($_SESSION['hitung_datarealLR'][$i] <= $_SESSION['hasil_simulasiLR'][$i]){
		$akurasiLR[$i] = $_SESSION['hitung_datarealLR'][$i] / $_SESSION['hasil_simulasiLR'][$i] * 100;
	}else if($_SESSION['hasil_simulasiLR'][$i] <= $_SESSION['hitung_datarealLR'][$i]){
		$akurasiLR[$i] =  $_SESSION['hasil_simulasiLR'][$i] / $_SESSION['hitung_datarealLR'][$i] * 100;
	}
	$_SESSION['convert_presentaseLR'][$i] = (int) round($akurasiLR[$i]);
	$_SESSION['total_presentaseLR'] += $_SESSION['convert_presentaseLR'][$i];

	//musim kemarau dan hujuan
	if ($i >= 3 && $i <= 9) {
		$_SESSION['total_akurasi_kemarau_LR'] += $_SESSION['convert_presentaseLR'][$i];
	}else{
		$_SESSION['total_akurasi_hujan_LR'] += $_SESSION['convert_presentaseLR'][$i];
	}

}
//total tingkat akurasi LR
$_SESSION['total_tingkat_presentase_LR'] = 0;
$_SESSION['total_tingkat_presentase_LR'] = $_SESSION['total_hasilLR'] <= $_SESSION['total_dataRealLR'] ? round($_SESSION['total_hasilLR'] / $_SESSION['total_dataRealLR'] * 100) : round($_SESSION['total_dataRealLR'] / $_SESSION['total_hasilLR'] * 100); 
//total tingkat akurasi musim hujan dan kemarau LR
$_SESSION['tingkat_akurasi_kemarau_LR'] = 0;
$_SESSION['tingkat_akurasi_hujan_LR'] = 0;
$_SESSION['tingkat_akurasi_kemarau_LR'] = $_SESSION['total_hasil_musim_kemarau_LR'] <= $_SESSION['total_real_musim_kemarau_LR'] ? round($_SESSION['total_hasil_musim_kemarau_LR'] / $_SESSION['total_real_musim_kemarau_LR'] * 100) : round($_SESSION['total_real_musim_kemarau_LR'] / $_SESSION['total_hasil_musim_kemarau_LR'] * 100);
$_SESSION['tingkat_akurasi_hujan_LR'] = $_SESSION['total_hasil_musim_hujan_LR'] <= $_SESSION['total_real_musim_hujan_LR'] ? round($_SESSION['total_hasil_musim_hujan_LR'] / $_SESSION['total_real_musim_hujan_LR'] * 100) : round($_SESSION['total_real_musim_hujan_LR'] / $_SESSION['total_hasil_musim_hujan_LR'] * 100);
//rata-rata tingkat akurasi musim kemarau dan hujan
$_SESSION['rata2A_kemarau_LR'] = 0;
$_SESSION['rata2A_hujan_LR'] = 0;
$_SESSION['rata2A_kemarau_LR'] = round($_SESSION['total_akurasi_kemarau_LR'] / count($musim_kemarau));
$_SESSION['rata2A_hujan_LR'] = round($_SESSION['total_akurasi_hujan_LR'] / count($musim_hujan)); 	



if(isset($_POST['simpan'])){
	if( simpanHasil($_POST) > 0){
		$_SESSION['alert'] = "on";
		$_SESSION['pesan'] = "Data Berhasil Disimpan!";
		header("Location: kalkulasi.php?hs=jeremy");
		exit;
		// echo " 
		// <script>
		// document.location.href = 'kalkulasi.php?hs=jeremy';
		// </script>   
		// ";
	}else{
		echo "
		<script>
		alert('Data gagal disimpan');
		document.location.href = 'kalkulasi.php?hs=jeremy';
		</script>   
		";
	}
	
}


?>
<div class="col-6 text-end">
	<form action="" method="POST">

		<!-- Meninggal Dunia -->

		<input type="hidden" name="id_kategoriMD" value="<?= $_SESSION['hitung_id_kategoriMD']  ?>">
		<input type="hidden" name="tahun_datamentahMD" value="<?= $_SESSION['hitung_tahundataMentahMD']; ?>">
		<input type="hidden" name="tahun_data_realMD" value="<?= $_SESSION['hitung_tahundataRealMD'] ?>">
		<?php for ($i=0; $i < count($bulan) ; $i++) : ?>	
			<input type="hidden" name="frekuensiMD[]" value="<?= $_SESSION['hitung_convertMentahMD'][$i]; ?>">
			<input type="hidden" name="probabilitasMD[]" value="<?= $_SESSION['convert_probMD'][$i] ?>">
			<input type="hidden" name="kumuMD[]" value="<?= $_SESSION['kumuMD'][$i];  ?>"> 
			<input type="hidden" name="intervalMD[]" value="<?=  $_SESSION['convert_intervalMD'][$i] ?>">
			<input type="hidden" name="angka_acakMD[]" value="<?=  $_SESSION['angkaAcakMD'][$i] ?>">
			<input type="hidden" name="hasil_simulasiMD[]" value="<?= $_SESSION['hasil_simulasiMD'][$i] ?>"> 
			<input type="hidden" name="data_realMD[]" value="<?= $_SESSION['hitung_convertRealMD'][$i]; ?>">
			<input type="hidden" name="akurasiMD[]" value="<?=  "{$_SESSION['convert_presentaseMD'][$i]}%";  ?>">
		<?php endfor ?>
		<input type="hidden" name="totalFrekMD" value="<?=  $_SESSION['jumlahFrekuensiMD'];?>">
		<input type="hidden" name="totalProbMD" value="<?= $_SESSION['jumlah_probMD'] ?>">
		<input type="hidden" name="totalhasilMD" value="<?= $_SESSION['total_hasilMD'] ?>">
		<input type="hidden" name="total_dataRealMD" value="<?= $_SESSION['total_dataRealMD'] ?>">
		<input type="hidden" name="rata2_frekMD" value="<?= round($_SESSION['jumlahFrekuensiMD'] / count($bulan)); ?>">
		<input type="hidden" name="rata2_hasilMD" value="<?= round($_SESSION['total_hasilMD'] / count($bulan)); ?>">
		<input type="hidden" name="rata2_datarealMD" value="<?= round($_SESSION['total_dataRealMD'] / count($bulan));  ?>"> 
		<input type="hidden" name="rata2_presentaseMD" value="<?= round($_SESSION['total_presentaseMD'] / count($bulan));  ?>">


		<!-- Luka Berat -->
		<input type="hidden" name="id_kategoriLB" value="<?= $_SESSION['hitung_id_kategoriLB']  ?>">
		<input type="hidden" name="tahun_datamentahLB" value="<?= $_SESSION['hitung_tahundataMentahLB']; ?>">
		<input type="hidden" name="tahun_data_realLB" value="<?= $_SESSION['hitung_tahundataRealLB'] ?>">
		<?php for ($i=0; $i < count($bulan) ; $i++) : ?>		
			<input type="hidden" name="frekuensiLB[]" value="<?= $_SESSION['hitung_convertMentahLB'][$i]; ?>">
			<input type="hidden" name="probabilitasLB[]" value="<?= $_SESSION['convert_probLB'][$i] ?>">
			<input type="hidden" name="kumuLB[]" value="<?= $_SESSION['kumuLB'][$i];  ?>"> 
			<input type="hidden" name="intervalLB[]" value="<?=  $_SESSION['convert_intervalLB'][$i] ?>">
			<input type="hidden" name="angka_acakLB[]" value="<?=  $_SESSION['angkaAcakLB'][$i] ?>">
			<input type="hidden" name="hasil_simulasiLB[]" value="<?= $_SESSION['hasil_simulasiLB'][$i] ?>"> 
			<input type="hidden" name="data_realLB[]" value="<?= $_SESSION['hitung_convertRealLB'][$i]; ?>">
			<input type="hidden" name="akurasiLB[]" value="<?=  "{$_SESSION['convert_presentaseLB'][$i]}%";  ?>">
		<?php endfor ?>
		<input type="hidden" name="totalFrekLB" value="<?=  $_SESSION['jumlahFrekuensiLB'];?>">
		<input type="hidden" name="totalProbLB" value="<?= $_SESSION['jumlah_probLB'] ?>">
		<input type="hidden" name="totalhasilLB" value="<?= $_SESSION['total_hasilLB'] ?>">
		<input type="hidden" name="total_dataRealLB" value="<?= $_SESSION['total_dataRealLB'] ?>">
		<input type="hidden" name="rata2_frekLB" value="<?= round($_SESSION['jumlahFrekuensiLB'] / count($bulan)); ?>">
		<input type="hidden" name="rata2_hasilLB" value="<?= round($_SESSION['total_hasilLB'] / count($bulan)); ?>">
		<input type="hidden" name="rata2_datarealLB" value="<?= round($_SESSION['total_dataRealLB'] / count($bulan));  ?>"> 
		<input type="hidden" name="rata2_presentaseLB" value="<?= round($_SESSION['total_presentaseLB'] / count($bulan));  ?>">


		<!-- Luka Ringan -->
		<input type="hidden" name="id_kategoriLR" value="<?= $_SESSION['hitung_id_kategoriLR']  ?>">
		<input type="hidden" name="tahun_datamentahLR" value="<?= $_SESSION['hitung_tahundataMentahLR']; ?>">
		<input type="hidden" name="tahun_data_realLR" value="<?= $_SESSION['hitung_tahundataRealLR'] ?>">		
		<?php for ($i=0; $i < count($bulan) ; $i++) : ?>
			<input type="hidden" name="frekuensiLR[]" value="<?= $_SESSION['hitung_convertMentahLR'][$i]; ?>">
			<input type="hidden" name="probabilitasLR[]" value="<?= $_SESSION['convert_probLR'][$i] ?>">
			<input type="hidden" name="kumuLR[]" value="<?= $_SESSION['kumuLR'][$i];  ?>"> 
			<input type="hidden" name="intervalLR[]" value="<?=  $_SESSION['convert_intervalLR'][$i] ?>">
			<input type="hidden" name="angka_acakLR[]" value="<?=  $_SESSION['angkaAcakLR'][$i] ?>">
			<input type="hidden" name="hasil_simulasiLR[]" value="<?= $_SESSION['hasil_simulasiLR'][$i] ?>"> 
			<input type="hidden" name="data_realLR[]" value="<?= $_SESSION['hitung_convertRealLR'][$i]; ?>">
			<input type="hidden" name="akurasiLR[]" value="<?=  "{$_SESSION['convert_presentaseLR'][$i]}%";  ?>">
		<?php endfor ?>
		<input type="hidden" name="totalFrekLR" value="<?=  $_SESSION['jumlahFrekuensiLR'];?>">
		<input type="hidden" name="totalProbLR" value="<?= $_SESSION['jumlah_probLR'] ?>">
		<input type="hidden" name="totalhasilLR" value="<?= $_SESSION['total_hasilLR'] ?>">
		<input type="hidden" name="total_dataRealLR" value="<?= $_SESSION['total_dataRealLR'] ?>">
		<input type="hidden" name="rata2_frekLR" value="<?= round($_SESSION['jumlahFrekuensiLR'] / count($bulan)); ?>">
		<input type="hidden" name="rata2_hasilLR" value="<?= round($_SESSION['total_hasilLR'] / count($bulan)); ?>">
		<input type="hidden" name="rata2_datarealLR" value="<?= round($_SESSION['total_dataRealLR'] / count($bulan));  ?>"> 
		<input type="hidden" name="rata2_presentaseLR" value="<?= round($_SESSION['total_presentaseLR'] / count($bulan));  ?>">

		<button name="simpan" class="btn btn-sm btn-primary"><i class="fa-solid fa-floppy-disk"></i><strong>  Simpan Hasil Simulasi</strong></button>

	</form>
</div>
</div>
<div class="position-relative mt-4">
	<div class="accordion w-100 position-absolute top-0 start-50 translate-middle-x" id="accordionExample">
		<div class="accordion-item">
			<h2 class="accordion-header" id="headingOne">
				<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					<h5>Meninggal</h5>
				</button>
			</h2>
			<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
				<div class="accordion-body">
					<div class="position-relative">		
						<table class="table table-bordered">
							<caption class="caption-top text-center mb-2">Data Meninggal Dunia <?=  $_SESSION['hitung_tahundataMentahMD']; ?></caption>
							<caption>								
								<ul style="list-style-type:square;">
									<li style="color: blue;"><span style="color: gray;">Musim Hujan<span></li>
										<li style="color: red;"><span style="color: gray;">Musim Kemarau<span></li>
										</ul> 
									</caption>
									<thead>
										<tr class="text-center table-active">
											<th>No</th>
											<th>Bulan</th>
											<th>Frekuensi</th>
											<th>Probabilitas</th>
											<th>Kumulatif</th>
											<th>Interval</th>
											<th>Angka Acak</th>
											<th>Hasil Simulasi <?= $_SESSION['hitung_tahundataRealMD'] ?>			
										</th>
										<th>Data Real <?= $_SESSION['hitung_tahundataRealMD'] ?></th>
										<th>Tingkat Akurasi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
									<tr class="text-center">
										<th class="text-center" <?= $no >= 4 && $no <= 10 ?"style='border-left: 2px solid red' " : "style='border-left: 2px solid blue'"?>><?= $no++; ?></th>
											<td class="text-start"><?=  $bulan[$i]; ?></td>
											<td><?= $_SESSION['hitung_convertMentahMD'][$i]; ?></td>
											<td><?= $_SESSION['convert_probMD'][$i] ?></td>	
											<td> <?= $_SESSION['kumuMD'][$i]; ?></td>
											<td class="text-center"><?= $_SESSION['convert_intervalMD'][$i] ?></td>
											<td class="text-center"> <?= $_SESSION['angkaAcakMD'][$i] ?></td>
											<td> <?= $_SESSION['hasil_simulasiMD'][$i] ?></td>
											<td>  <?= $_SESSION['hitung_convertRealMD'][$i]; ?></td>
											<td> <?= "{$_SESSION['convert_presentaseMD'][$i]}%"; ?></td>	
										</tr>
									<?php endfor ?>
									<tr class="text-center">
										<th colspan="2" rowspan="3" style=" vertical-align: middle !important;">Total</th>
										<td><?= $_SESSION['jumlahFrekuensiMD']; ?></td>
										<td><?= $_SESSION['jumlah_probMD'];?></td>
										<td>-</td>
										<td>-</td>
										<td>-</td>
										<td><?= $_SESSION['total_hasilMD']; ?></td>
										<td> <?= $_SESSION['total_dataRealMD']; ?></td>
										<td><?= "{$_SESSION['total_tingkat_presentase_MD']}%"; ?></td>		
									</tr>
									<tr class="text-center">
										<td class="musimKemarau"><?= $_SESSION['total_musim_kemarau_MD'] ?></td>
										<td colspan="4"></td>
										<td><?= $_SESSION['total_hasil_musim_kemarau_MD']; ?></td>
										<td><?= $_SESSION['total_real_musim_kemarau_MD']; ?></td>
										<td><?= "{$_SESSION['tingkat_akurasi_kemarau_MD']}%"; ?></td>
									</tr>
									<tr class="text-center">
										<td class="musimHujan"><?= $_SESSION['total_musim_hujan_MD']	 ?></td>
										<td colspan="4"></td>
										<td><?= $_SESSION['total_hasil_musim_hujan_MD']; ?></td>
										<td><?= $_SESSION['total_real_musim_hujan_MD']; ?></td>
										<td><?= "{$_SESSION['tingkat_akurasi_hujan_MD']}%"; ?></td>
									</tr>
									<tr class="text-center">
										<th class="text-center" colspan="2" rowspan="3"  style=" vertical-align: middle !important;">Rata-rata</th>
										<td> <?= round($_SESSION['jumlahFrekuensiMD'] / count($bulan)); ?></td>
										<td class="text-center" colspan="4">-</td>
										<td><?=	round($_SESSION['total_hasilMD'] / count($bulan)); ?></td>
										<td><?=	round($_SESSION['total_dataRealMD'] / count($bulan)); ?></td>
										<td> <?= round($_SESSION['total_presentaseMD'] / count($bulan))."%"; ?></td>
									</tr>
									<tr class="text-center">
										<td class="musimKemarau"><?= $_SESSION['rata2F_kemarau_MD'] ?></td>
										<td colspan="4"></td>
										<td><?= $_SESSION['rata2_hasil_kemarau_MD']; ?></td>
										<td><?= $_SESSION['rata2_real_kemarau_MD']; ?></td>
										<td><?= "{$_SESSION['rata2A_kemarau_MD']}%"; ?></td>
									</tr>
									<tr class="text-center">
										<td class="musimHujan"><?= $_SESSION['rata2F_hujan_MD'] ?></td>
										<td colspan="4"></td>
										<td><?= $_SESSION['rata2_hasil_hujan_MD']; ?></td>
										<td><?= $_SESSION['rata2_real_hujan_MD']; ?></td>
										<td><?= "{$_SESSION['rata2A_hujan_MD']}%"; ?></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingTwo">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
						<h5>Luka Berat</h5>
					</button>
				</h2>	
				<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
					<div class="accordion-body">
						<div class="position-relative">
							<table class="table table-bordered">
								<caption class="caption-top text-center mb-2">Data Luka Berat <?=  $_SESSION['hitung_tahundataMentahLB']; ?></caption>
								<caption>								
									<ul style="list-style-type:square;">
										<li style="color: blue;"><span style="color: gray;">Musim Hujan<span></li>
											<li style="color: red;"><span style="color: gray;">Musim Kemarau<span></li>
											</ul> 
										</caption>
										<thead>
											<tr class="text-center table-active">
												<th>No</th>
												<th>Bulan</th>
												<th>Frekuensi</th>
												<th>Probabilitas</th>
												<th>Kumulatif</th>
												<th>Interval</th>
												<th>Angka Acak</th>
												<th>Hasil Simulasi <?= $_SESSION['hitung_tahundataRealLB'] ?>			
											</th>
											<th>Data Real <?= $_SESSION['hitung_tahundataRealLB'] ?></th>
											<th>Tingkat Akurasi</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
										<tr class="text-center">
											<th class="text-center" <?= $no >= 4 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?>><?= $no++; ?></th>
												<td class="text-start"><?=  $bulan[$i]; ?></td>
												<td><?= $_SESSION['hitung_convertMentahLB'][$i]; ?></td>
												<td><?= $_SESSION['convert_probLB'][$i] ?></td>	
												<td> <?= $_SESSION['kumuLB'][$i]; ?></td>
												<td class="text-center"><?= $_SESSION['convert_intervalLB'][$i] ?></td>
												<td class="text-center"> <?= $_SESSION['angkaAcakLB'][$i] ?></td>
												<td> <?= $_SESSION['hasil_simulasiLB'][$i] ?></td>
												<td>  <?= $_SESSION['hitung_convertRealLB'][$i]; ?></td>
												<td> <?= "{$_SESSION['convert_presentaseLB'][$i]}%"; ?></td>	
											</tr>
										<?php endfor ?>
										<tr class="text-center">
											<th colspan="2" rowspan="3" style=" vertical-align: middle !important;">Total</th>
											<td><?= $_SESSION['jumlahFrekuensiLB']; ?></td>
											<td><?= $_SESSION['jumlah_probLB'];?></td>
											<td>-</td>
											<td>-</td>
											<td>-</td>
											<td><?= $_SESSION['total_hasilLB']; ?></td>
											<td> <?= $_SESSION['total_dataRealLB']; ?></td>
											<td><?= "{$_SESSION['total_tingkat_presentase_LB']}%"; ?></td>		
										</tr>
										<tr class="text-center">
											<td class="musimKemarau"><?= $_SESSION['total_musim_kemarau_LB'] ?></td>
											<td colspan="4"></td>
											<td><?= $_SESSION['total_hasil_musim_kemarau_LB']; ?></td>
											<td><?= $_SESSION['total_real_musim_kemarau_LB']; ?></td>
											<td><?= "{$_SESSION['tingkat_akurasi_kemarau_LB']}%"; ?></td>
										</tr>
										<tr class="text-center">
											<td class="musimHujan"><?= $_SESSION['total_musim_hujan_LB']	 ?></td>
											<td colspan="4"></td>
											<td><?= $_SESSION['total_hasil_musim_hujan_LB']; ?></td>
											<td><?= $_SESSION['total_real_musim_hujan_LB']; ?></td>
											<td><?= "{$_SESSION['tingkat_akurasi_hujan_LB']}%"; ?></td>
										</tr>
										<tr class="text-center">
											<th class="text-center" colspan="2" rowspan="3"  style=" vertical-align: middle !important;">Rata-rata</th>
											<td> <?= round($_SESSION['jumlahFrekuensiLB'] / count($bulan)); ?></td>
											<td class="text-center" colspan="4">-</td>
											<td><?=	round($_SESSION['total_hasilLB'] / count($bulan)); ?></td>
											<td><?=	round($_SESSION['total_dataRealLB'] / count($bulan)); ?></td>
											<td> <?= round($_SESSION['total_presentaseLB'] / count($bulan))."%"; ?></td>
										</tr>
										<tr class="text-center">
											<td class="musimKemarau"><?= $_SESSION['rata2F_kemarau_LB'] ?></td>
											<td colspan="4"></td>
											<td><?= $_SESSION['rata2_hasil_kemarau_LB']; ?></td>
											<td><?= $_SESSION['rata2_real_kemarau_LB']; ?></td>
											<td><?= "{$_SESSION['rata2A_kemarau_LB']}%"; ?></td>
										</tr>
										<tr class="text-center">
											<td class="musimHujan"><?= $_SESSION['rata2F_hujan_LB'] ?></td>
											<td colspan="4"></td>
											<td><?= $_SESSION['rata2_hasil_hujan_LB']; ?></td>
											<td><?= $_SESSION['rata2_real_hujan_LB']; ?></td>
											<td><?= "{$_SESSION['rata2A_hujan_LB']}%"; ?></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingThree">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
							<h5>Luka Ringan</h5>
						</button>
					</h2>
					<div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							<div class="position-relative">
								<table class="table table-bordered">
									<caption class="caption-top text-center mb-2" name="tahun_data_mentah" value="<?=  $_SESSION['hitung_tahundataMentahLR']; ?>">Data Luka Ringan <?=  $_SESSION['hitung_tahundataMentahLR']; ?></caption>
									<caption>								
										<ul style="list-style-type:square;">
											<li style="color: blue;"><span style="color: gray;">Musim Hujan<span></li>
												<li style="color: red;"><span style="color: gray;">Musim Kemarau<span></li>
												</ul> 
											</caption>
											<thead>
												<tr class="text-center table-active">
													<th>No</th>
													<th>Bulan</th>
													<th>Frekuensi</th>
													<th>Probabilitas</th>
													<th>Kumulatif</th>
													<th>Interval</th>
													<th>Angka Acak</th>
													<th>Hasil Simulasi <?= $_SESSION['hitung_tahundataRealLR'] ?>			
												</th>
												<th>Data Real <?= $_SESSION['hitung_tahundataRealLR'] ?></th>
												<th>Tingkat Akurasi</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1; for ($i=0; $i < count($bulan) ; $i++) : ?>
											<tr class="text-center">
												<th class="text-center" <?= $no >= 4 && $no <= 10 ?"style='border-left-color:red' " : "style='border-left-color:blue'"?>><?= $no++; ?></th>
													<td class="text-start"><?=  $bulan[$i]; ?></td>
													<td><?= $_SESSION['hitung_convertMentahLR'][$i]; ?></td>
													<td><?= $_SESSION['convert_probLR'][$i] ?></td>	
													<td> <?= $_SESSION['kumuLR'][$i]; ?></td>
													<td class="text-center"><?= $_SESSION['convert_intervalLR'][$i] ?></td>
													<td class="text-center"> <?= $_SESSION['angkaAcakLR'][$i] ?></td>
													<td> <?= $_SESSION['hasil_simulasiLR'][$i] ?></td>
													<td>  <?= $_SESSION['hitung_convertRealLR'][$i]; ?></td>
													<td> <?= "{$_SESSION['convert_presentaseLR'][$i]}%"; ?></td>	
												</tr>
											<?php endfor ?>
											<tr class="text-center">
												<th colspan="2" rowspan="3" style=" vertical-align: middle !important;">Total</th>
												<td><?= $_SESSION['jumlahFrekuensiLR']; ?></td>
												<td><?= $_SESSION['jumlah_probLR'];?></td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td><?= $_SESSION['total_hasilLR']; ?></td>
												<td> <?= $_SESSION['total_dataRealLR']; ?></td>
												<td><?= "{$_SESSION['total_tingkat_presentase_LR']}%"; ?></td>		
											</tr>
											<tr class="text-center">
												<td class="musimKemarau"><?= $_SESSION['total_musim_kemarau_LR'] ?></td>
												<td colspan="4"></td>
												<td><?= $_SESSION['total_hasil_musim_kemarau_LR']; ?></td>
												<td><?= $_SESSION['total_real_musim_kemarau_LR']; ?></td>
												<td><?= "{$_SESSION['tingkat_akurasi_kemarau_LR']}%"; ?></td>
											</tr>
											<tr class="text-center">
												<td class="musimHujan"><?= $_SESSION['total_musim_hujan_LR']	 ?></td>
												<td colspan="4"></td>
												<td><?= $_SESSION['total_hasil_musim_hujan_LR']; ?></td>
												<td><?= $_SESSION['total_real_musim_hujan_LR']; ?></td>
												<td><?= "{$_SESSION['tingkat_akurasi_hujan_LR']}%"; ?></td>
											</tr>
											<tr class="text-center">
												<th class="text-center" colspan="2" rowspan="3"  style=" vertical-align: middle !important;">Rata-rata</th>
												<td> <?= round($_SESSION['jumlahFrekuensiLR'] / count($bulan)); ?></td>
												<td class="text-center" colspan="4">-</td>
												<td><?=	round($_SESSION['total_hasilLR'] / count($bulan)); ?></td>
												<td><?=	round($_SESSION['total_dataRealLR'] / count($bulan)); ?></td>
												<td> <?= round($_SESSION['total_presentaseLR'] / count($bulan))."%"; ?></td>
											</tr>
											<tr class="text-center">
												<td class="musimKemarau"><?= $_SESSION['rata2F_kemarau_LR'] ?></td>
												<td colspan="4"></td>
												<td><?= $_SESSION['rata2_hasil_kemarau_LR']; ?></td>
												<td><?= $_SESSION['rata2_real_kemarau_LR']; ?></td>
												<td><?= "{$_SESSION['rata2A_kemarau_LR']}%"; ?></td>
											</tr>
											<tr class="text-center">
												<td class="musimHujan"><?= $_SESSION['rata2F_hujan_LR'] ?></td>
												<td colspan="4"></td>
												<td><?= $_SESSION['rata2_hasil_hujan_LR']; ?></td>
												<td><?= $_SESSION['rata2_real_hujan_LR']; ?></td>
												<td><?= "{$_SESSION['rata2A_hujan_LR']}%"; ?></td>
											</tr>
										</tbody>						
									</table>
								</div>		
							</div>
						</div>
					</div>
				</div>
			</div>


			<?php 	ob_end_flush(); ?>
