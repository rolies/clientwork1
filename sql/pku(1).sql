-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2016 at 07:13 AM
-- Server version: 5.6.24-log
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pku`
--

-- --------------------------------------------------------

--
-- Table structure for table `perumnas`
--

CREATE TABLE IF NOT EXISTS `perumnas` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `syarat_kpr` varchar(1700) NOT NULL,
  `image` varchar(20) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `cicilan` varchar(120) NOT NULL,
  `persyaratan` varchar(3600) NOT NULL,
  `angsuran` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perumnas`
--

INSERT INTO `perumnas` (`id`, `name`, `syarat_kpr`, `image`, `alamat`, `cicilan`, `persyaratan`, `angsuran`, `status`, `unit`) VALUES
(38, 'Perumnas tipe 38', '<li>Harga jual rumah dan suku bank dapat berubah sewaktu-waktu tanpa pembereritahuan terlebih dahulu sesuai dengan kondisi lapangan</li>\r\n<li>Spesifikasi tekhnis bangunan dapat berubah sesuai kondisi lapangan</li>\r\n<li>Rumah di banguan apabila konsumen telah melunasi Uang Muka Rumah dan biaya lainnya atau dengan perjanjian</li>\r\n<li><strong>Apabila nilai Plafond (KPR) yang disetujui dari Pihak Bank dibawah nilai Plafond (KPR) yang di ajukan, maka konsumen wajib membayar kekurangan atau tambah DP ke pihak developer</strong></li>\r\n<li>RUmah di bangun jika sedah ada persetujuan dengan konsumen jika ada perubahan fisik</li>\r\n<li><strong>Apabila terjadi pembatalan transaksi dikenakan biaya 30% dari jumlah uang yang sudah disetor, dan akan dikembalikan kepada konsumen setelah 3 (tiga) Bulan, Terhitung sejak tanggal pembatalan</strong></li>\r\n<li>Pelunasan semua kewajiban konsumen kepada perusahaan paling lambat seminggu sebelum akad kredit atau sehari sebelum serah terima kunci</li>\r\n<li>Apabila rumah sudah mulai di bangun, terjadi pembatalan transaksi oleh konsumen, maka semua uang yang telah disetorkan tidak bisa diambil kembali</li>\r\n<li>Hal-hal yang belum jelas, akan di jelaskan dikantor kami</li>\r\n<li>Apabila penolakan dari pihak bank, maka uang yang sudah di setor akan dipotong administrasi sebesar Rp 1.000.000 (satu juta rupiah)\r\n<br><strong class="text-uppercase">Biaya akad kredit di tanggung oleh konsumen </strong>\r\n<br>\r\n<strong>Harga Jual Rumah Belum termasuk</strong>\r\n<p>\r\n- Biaya Administrasi Rp 1.000.000<br>\r\n- Biaya Listrik Rp 3.000.000<br>\r\n- Biaya AJB dan PPN Rp 3.500.000\r\n</p>', 'Tipe-38a.jpg', 'jl. Cipta karya Gg. Langkepe Blok. D, Dekat Giant mall', '<tr>\r\n<td>170.000.000</td>\r\n<td>34.000.000</td>\r\n<td>20.000.000</td>\r\n<td>14.000.000</td>\r\n<td>BTN</td>\r\n</tr>\r\n', '<tr>\r\n<td>1</td>\r\n<td>Fotocopy KTP suami istri</td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n</tr>\r\n<tr>\r\n<td>2</td>\r\n<td>Fotocopy Kartu keluarga</td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n</tr>\r\n<tr>\r\n<td>3</td>\r\n<td>Fotocopy Surat Nikah/Cerai (Bagi yang sudah)</td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n</tr>\r\n<tr>\r\n<td>4</td>\r\n<td>Fotocopy buku tabungan & rekening koran 3 bulan terakhir</td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n</tr>\r\n<tr>\r\n<td>5</td>\r\n<td>Slip gaji 3 bulan terakhir & Surat keterangan bekerja</td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-minus"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-minus"></span></td>\r\n</tr>\r\n<tr>\r\n<td>6</td>\r\n<td>Fotocopy NPWP pribadi</td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n</tr>\r\n<tr>\r\n<td>7</td>\r\n<td>Pasfoto 3x4 warna suami istri</td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n</tr>\r\n<tr>\r\n<td>8</td>\r\n<td>Fotocopy Akta Prusahaan</td>\r\n<td class="text-center"><span class="glyphicon glyphicon-minus"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-minus"></span></td>\r\n</tr>\r\n<tr>\r\n<td>9</td>\r\n<td>Fotocopy Surat izin praketek</td>\r\n<td class="text-center"><span class="glyphicon glyphicon-minus"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-minus"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n</tr>\r\n<tr>\r\n<td>10</td>\r\n<td>Laporan keuangan terakhir</td>\r\n<td class="text-center"><span class="glyphicon glyphicon-minus"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n</tr>\r\n<tr>\r\n<td>11</td>\r\n<td>Fotocopy SK Pertama dan Terakhir</td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-minus"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-minus"></span></td>\r\n</tr>\r\n<tr>\r\n<td>12</td>\r\n<td>Fotocopy SIUP SiTU NPWP</td>\r\n<td class="text-center"><span class="glyphicon glyphicon-minus"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>\r\n<td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>', '<li>5 tahun: Rp 3.144.000</li>\r\n<li>10 tahun: Rp 2.005.900</li>\r\n<li>15 tahun: Rp 1.644.100</li>', 'siap', 30),
(42, 'Perumnas tipe 42', 'Harga jual rumah dan suku bank dapat berubah sewaktu-waktu tanpa pembereritahuan terlebih dahulu sesuai dengan kondisi lapangan', 'rumah42b.jpg', '', '', '', '', 'siap', 0),
(85, 'Perumnas Tipe 85', '', 'rumah85b.jpg', '', '', '', '', 'siap', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perumnas`
--
ALTER TABLE `perumnas`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
