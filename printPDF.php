<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'Print PDF Data Siswa',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR SISWA',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,6,'NIS',1,0);
$pdf->Cell(60,6,'NAMA SISWA',1,0);
$pdf->Cell(30,6,'JENIS_KELAMIN',1,0);
$pdf->Cell(27,6,'NO HP',1,0);
$pdf->Cell(25,6,'ALAMAT',1,1);

$pdf->SetFont('Arial','',10);

include 'config.php';
$mahasiswa = mysqli_query($db, "select * from calon_siswa");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(25,6,$row['nis'],1,0);
    $pdf->Cell(60,6,$row['nama'],1,0);
    $pdf->Cell(30,6,$row['jenis_kelamin'],1,0);
    $pdf->Cell(27,6,$row['telp'],1,0);
    $pdf->Cell(25,6,$row['alamat'],1,1); 
}

$pdf->Output();
?>