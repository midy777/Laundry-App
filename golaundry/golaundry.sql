-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 02:30 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `golaundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `laundry`
--

CREATE TABLE `laundry` (
  `Id_Laundry` int(5) NOT NULL,
  `Id_Pegawai` int(5) NOT NULL,
  `Berat Baju` int(20) NOT NULL,
  `Jadwal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `memesan`
--

CREATE TABLE `memesan` (
  `Id_Pesanan` int(5) NOT NULL,
  `Id_Pegawai` int(5) DEFAULT NULL,
  `Id_Pelanggan` int(5) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `PesanTambah` text,
  `StatusPesanan` varchar(20) NOT NULL,
  `Ulasan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memesan`
--

INSERT INTO `memesan` (`Id_Pesanan`, `Id_Pegawai`, `Id_Pelanggan`, `tgl_awal`, `tgl_akhir`, `PesanTambah`, `StatusPesanan`, `Ulasan`) VALUES
(1, NULL, 2, '0000-00-00', '0000-00-00', 'cuci kering   ', '1', ''),
(2, NULL, 2, '2019-10-31', '2019-10-31', '                   jsdhaskd', '1', ''),
(3, NULL, 2, '2019-10-10', '2019-10-25', '               dcjc    ', '5', ''),
(4, NULL, 2, '2019-11-22', '2019-11-22', '                   asdasd', '', ''),
(5, 5, 2, '2019-11-22', '2019-11-22', '                   pesen a', '1', ''),
(6, 1, 2, '2019-11-28', '2019-12-02', '  Cuci Laundry            ', '5', '      mantap euy'),
(7, 2, 2, '2019-11-29', '2019-12-01', 'Pesen Cucian Kering ', '5', '      '),
(8, 2, 2, '2019-11-29', '2019-11-29', '                   ', '6', '      '),
(9, 2, 2, '2019-11-29', '2019-12-05', '               kering\r\n    ', '6', '      '),
(10, 5, 1, '2019-11-29', '2019-11-29', '                   belii', '5', ''),
(11, 5, 1, '2019-11-29', '2019-11-29', '                   ', '5', ''),
(12, 6, 1, '2019-11-30', '2019-12-04', 'mauu beli   ', '2', ''),
(13, 6, 3, '2019-12-02', '2019-12-07', ' cuci basah                ', '6', '      '),
(14, 6, 3, '2019-12-04', '2019-12-05', 'cepet ya                   ', '6', '      '),
(15, 3, 3, '2019-11-30', '2019-12-02', '         belii\r\n     ', '2', ''),
(16, 1, 4, '2020-01-02', '2019-12-08', '  pesen                 ', '0', ''),
(17, 1, 5, '2019-12-03', '2019-12-04', 'belii                   ', '6', '      '),
(18, 5, 6, '2019-11-30', '2019-12-02', 'pesen cuci sepaket                ', '6', '      sudah sampaii pesanannya terimakasih'),
(19, 4, 2, '2019-12-02', '2019-12-04', 'Tolong celana dan baju dipisah ya                   ', '6', '      Mantappp'),
(20, 5, 2, '2019-12-02', '2019-12-05', 'Pesan Laundry yaa                 ', '6', '         Terimakasih, Pakaian saya sudah diterima.       \r\n         Pasti pesan lagi dilain waktu.'),
(21, 5, 3, '2019-12-09', '2019-12-12', '                   ', '6', '      Alhamdulillah ya, bajunya bersih!');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `Id_Pegawai` int(5) NOT NULL,
  `Nama_Pegawai` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Kata_Sandi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`Id_Pegawai`, `Nama_Pegawai`, `Email`, `Kata_Sandi`) VALUES
(2, 'www', 'www@gmail.com', '12345'),
(3, 'qqq', 'qqq@gmail.com', '12345'),
(4, 'fff', 'fff@gmail.com', '12345'),
(5, 'laundry', 'laundry@gmail.com', '12345'),
(6, 'Cleaning Wash', 'cleaningwash@gmail.c', '12345'),
(7, 'Washing Factory', 'washingfactory@gmail', '12345'),
(8, 'Barokah Laundry', 'barokahlaundry@gmail', '12345'),
(9, 'Wash wash', 'washwash@gmail.com', '12345'),
(11, 'BAGUS LAUNDRY', 'CUCILAUNDRY@GMAIL.CO', '12345'),
(12, 'AS', 'test1@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `Id_Pelanggan` int(5) NOT NULL,
  `Nama_Pelanggan` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Kata_Sandi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`Id_Pelanggan`, `Nama_Pelanggan`, `Email`, `Kata_Sandi`) VALUES
(1, 'Santi', 'iqwehqkwj@gmail.com', '12345'),
(2, 'Santi', 'Santi@gmail.com', '12345'),
(3, 'Jojo', 'jojo@gmail.com', '12345'),
(4, 'nana', 'nana@gmail.com', '12345'),
(5, 'wawa', 'wawa@gmail.com', '12345'),
(6, 'fifi', 'fifi@gmail.com', '12345'),
(7, 'triss', 'triss@gmail.com', '12345'),
(8, 'misha@gmail.com', 'misha@gmail.com', '12345'),
(9, 'misha@gmail.com', 'misha@gmail.com', '12345'),
(10, 'misha@gmail.com', 'misha@gmail.com', '12345'),
(11, 'marinaid', 'marinaid@gmail.com', '12345'),
(12, 'ajwid', 'aj@gmail.com', '1234'),
(13, 'aje', 'aje@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id` int(5) NOT NULL,
  `Nama_Toko` varchar(20) NOT NULL,
  `Alamat_Toko` varchar(30) NOT NULL,
  `Motto` varchar(30) NOT NULL,
  `Deskripsi` varchar(255) NOT NULL,
  `Nomor_hp` varchar(15) NOT NULL,
  `Harga` int(10) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `promo` varchar(255) NOT NULL,
  `durasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id`, `Nama_Toko`, `Alamat_Toko`, `Motto`, `Deskripsi`, `Nomor_hp`, `Harga`, `lokasi`, `promo`, `durasi`) VALUES
(0, 'Wash Laundry', 'Sukabirus', 'Cuci lagi Cuci lagi', 'Laundry kiloan dengan harga cukup menjanjikan, karena dekat dengan kos-kosan mahasiswa, rumah sewa karyawan/ karyawati, juga perumahan. Laundry ini murah meriah dan bersih dibanding dengan bisnis laundry konvenisonal yag relatif mahal', '0875694231', 7000, 'Sukapura', 'Sepaket', 'Harian'),
(2, 'CucianKu', 'Sukabirus', 'Harga bersahabat & Berkualitas', 'Laundry kiloan dengan harga cukup menjanjikan, karena dekat dengan kos-kosan mahasiswa, rumah sewa karyawan/ karyawati, juga perumahan.  Laundry ini murah meriah dan bersih dibanding dengan bisnis laundry konvenisonal yag relatif mahal untuk ukuran kanton', '081224356788', 5000, 'Sukabirus', 'Satuan', 'Mingguan'),
(3, 'VIP Wash', 'Sukapura', 'Terpercaya, Rapi, Wangi', 'Jasa cuci yang mengedepankan kualitas,kepuasan pelanggan, pakaian bersih, wangi, rapih dan sehat.\r\nNilai tambah yang bisa diberikan:\r\nMenggunakan sabun bermutu baik, pewangi pakaian tahan lama, hasil cucian bersih, pemisahan baju putih dan berwarna\r\n', '083446677897', 10000, 'Sukapura', 'Satuan', 'Mingguan'),
(4, 'Fresh Laundry', 'Sukabirus', 'Aman, Praktis, Bersih  ', 'Jasa laundry bukan hanya sekedar tempat mencuci melainkan sebagai tempat perawatan pakaian agar lebih bersih dan awet, dan faktor serba instant serta praktis menjadi trend bagi masyarakat saat ini.', '082221377890', 6000, 'Sukabirus', 'Sepaket', 'Harian'),
(5, 'Laundry_KU', 'sukabirus', 'Sekali cuci ', 'adalah jasa pencucian pakaian kotor sampai dengan kering dan siap pakai, dalam arti pakaian yang semula dibawa ke jasa binatu/laundry dalam keadaan kotor dan saat diterima kembali oleh konsumen pemakai jasa laundry pakaian tersebut sudah siap digunakan', '082134567567', 17000, 'Sukabirus', 'Sepaket', 'Harian'),
(6, 'Cleaning Wash', 'Sukabirus', 'Hilangkan noda hingga bersih', 'Laundry kiloan dengan harga cukup menjanjikan, karena dekat dengan kos-kosan mahasiswa, rumah sewa karyawan/ karyawati, juga perumahan. Laundry ini murah meriah dan bersih dibanding dengan bisnis laundry konvenisonal yag relatif mahal', '0876543219', 7000, 'Sukapura', 'Satuan', 'Mingguan'),
(7, 'Washing Factory', 'Sukapura', 'Cuci dengan harga ekonomis', 'Laundry kiloan dengan harga cukup menjanjikan, karena dekat dengan kos-kosan mahasiswa, rumah sewa karyawan/ karyawati, juga perumahan. Laundry ini murah meriah dan bersih dibanding dengan bisnis laundry konvenisonal yag relatif mahal', '0832145679', 6000, 'Sukapura', 'Satuan', 'Mingguan'),
(8, 'Barokah Laundry', 'Sukapura', 'Dijamin pakaian bersih kinclon', 'Laundry kiloan dengan harga cukup menjanjikan, karena dekat dengan kos-kosan mahasiswa, rumah sewa karyawan/ karyawati, juga perumahan. Laundry ini murah meriah dan bersih dibanding dengan bisnis laundry konvenisonal yag relatif mahal', '0897634521', 8000, 'Sukabirus', 'Sepaket', 'Harian'),
(9, 'cuci', 'Sukabirus', 'Melayani jasa cuci baju ', 'Melayani jasa cuci baju ', '089765321', 11000, '', '', ''),
(11, 'AS', 'ASA', 'asas', 'asasas', '23232', 2121212, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `Id_Transaksi` int(5) NOT NULL,
  `Id_Pelanggan` int(5) NOT NULL,
  `Id_Pegawai` int(5) NOT NULL,
  `ongkir` int(20) NOT NULL,
  `beratbaju` int(11) NOT NULL,
  `jadwal` varchar(20) NOT NULL,
  `antar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laundry`
--
ALTER TABLE `laundry`
  ADD PRIMARY KEY (`Id_Laundry`),
  ADD KEY `Id_Pegawai` (`Id_Pegawai`);

--
-- Indexes for table `memesan`
--
ALTER TABLE `memesan`
  ADD PRIMARY KEY (`Id_Pesanan`),
  ADD KEY `Id_Pelanggan` (`Id_Pelanggan`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`Id_Pegawai`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`Id_Pelanggan`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`Id_Transaksi`),
  ADD KEY `Id_Pelanggan` (`Id_Pelanggan`),
  ADD KEY `Id_Pegawai` (`Id_Pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laundry`
--
ALTER TABLE `laundry`
  MODIFY `Id_Laundry` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memesan`
--
ALTER TABLE `memesan`
  MODIFY `Id_Pesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `Id_Pegawai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `Id_Pelanggan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `Id_Transaksi` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
