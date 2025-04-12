<?php 
require 'class_nilai.php';

$mhs1 = new Nilaimahasiswa();
$mhs1->nama = "Surya";
$mhs1->matakuliah = "Pemrograman Web";
$mhs1->uts = "97";
$mhs1->uas = "88";
$mhs1->tugas = "79";

$mhs2 = new Nilaimahasiswa();
$mhs2->nama = "Randy";
$mhs2->matakuliah = "Basis Data";
$mhs2->uts = "90";
$mhs2->uas = "79";
$mhs2->tugas = "93";

$mhs3 = new Nilaimahasiswa();
$mhs3->nama = "Wati";
$mhs3->matakuliah = "Jaringan Komputer";
$mhs3->uts = "30";
$mhs3->uas = "45";
$mhs3->tugas = "60";

$ar_mahasiswa = [$mhs1,$mhs2,$mhs3];
?>
<div style="text-align: center;">
    <table border="2" cellpadding="2" cellsparing="2" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Tugas</th>
                <th>Nilai Akhir</th>
                <th>Ketentuan</th>
            </tr>
        </thead>
        <tbody>
            <?php
             $nomer = 1;
             foreach ($ar_mahasiswa as $mhs) {
            ?>

                <tr>
                    <td><?php echo $nomer ?></td>
                    <td><?php echo $mhs->nama ?></td>
                    <td><?php echo $mhs->matakuliah ?></td>
                    <td><?php echo $mhs->uts ?></td>
                    <td><?php echo $mhs->uas ?></td>
                    <td><?php echo $mhs->tugas ?></td>
                    <td><?php echo $mhs->getNilaiakhir() ?></td>
                    <td><?php echo $mhs->kelulusan() ?></td>
                </tr>

            <?php 
            $nomer++;
             }
            ?>
        </tbody>
    </table>
</div>