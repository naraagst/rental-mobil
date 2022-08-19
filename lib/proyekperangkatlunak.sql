-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2019 at 01:06 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyekperangkatlunak`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(35) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `uname`, `pass`, `nama`) VALUES
(1, 'naragst', '1234', 'Nara Augustin');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_mobil`
--

CREATE TABLE `jenis_mobil` (
  `id_jenismobil` int(5) NOT NULL,
  `jenis_mobil` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_mobil`
--

INSERT INTO `jenis_mobil` (`id_jenismobil`, `jenis_mobil`) VALUES
(10, 'Toyota Kijang Innova V A/T'),
(11, 'Toyota Avanza 1.3 G M/T'),
(13, 'Toyota Fortuner 2.4 G M/T'),
(14, 'Toyota Yaris G Grade M/T'),
(15, 'Toyota Yaris E Grade M/T'),
(16, 'Toyota Fortuner 2.4 VRZ A/T'),
(17, 'Toyota Avanza Veloz 1.5 A/T'),
(18, 'Toyota Avanza Veloz 1.3 M/T'),
(19, 'Toyota Avanza 1.5 G M/T'),
(20, 'Toyota Kijang Innova G A/T');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_spesifikasi`
--

CREATE TABLE `jenis_spesifikasi` (
  `id_jenis` int(11) NOT NULL,
  `jenis_spesifikasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_spesifikasi`
--

INSERT INTO `jenis_spesifikasi` (`id_jenis`, `jenis_spesifikasi`) VALUES
(1, 'Performa'),
(2, 'Kapasitas'),
(3, 'Suspensi dan Rem'),
(4, 'Transmisi'),
(5, 'Kemudi dan lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_spesifikasi`
--

CREATE TABLE `kategori_spesifikasi` (
  `id_kategori` int(11) NOT NULL,
  `nama_spesifikasi` varchar(50) NOT NULL,
  `id_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_spesifikasi`
--

INSERT INTO `kategori_spesifikasi` (`id_kategori`, `nama_spesifikasi`, `id_jenis`) VALUES
(1, 'Kapasitas mesin', 1),
(2, 'Tenaga', 1),
(3, 'Jenis Bahan Bakar', 1),
(4, 'Konsumsi BBM Tol', 1),
(5, 'Konsumsi BBM dalam Kota (kmpl)', 1),
(6, 'Kapasitas Tempat Duduk', 2),
(7, 'Kapasitas Tangki Bahan Bakar (liter)', 2),
(8, 'Panjang', 2),
(9, 'Lebar', 2),
(10, 'Tinggi', 2),
(11, 'Jumlah Pintu', 2),
(12, 'Suspensi Depan', 3),
(13, 'Suspensi Belakang', 3),
(14, 'Jenis schockbreaker', 3),
(15, 'Girboks', 4),
(16, 'Jenis Transmisi', 4),
(17, 'Jenis Penggerak', 4),
(18, 'Jenis Kemudi', 5),
(19, 'Jenis Ban', 5),
(20, 'Jumlah Silinder', 5),
(21, 'Katup Persilinder', 5),
(22, 'Sistem Suplai Bahan Bakar', 5),
(23, 'Ukuran Ban', 5);

-- --------------------------------------------------------

--
-- Table structure for table `krisan`
--

CREATE TABLE `krisan` (
  `id_krisan` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `kode_trans` varchar(50) NOT NULL,
  `krisan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(20) NOT NULL,
  `id_jenismobil` int(5) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `plat` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun` int(5) NOT NULL,
  `harga` int(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `gbr_mobil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `id_jenismobil`, `merk`, `plat`, `warna`, `tahun`, `harga`, `status`, `gbr_mobil`) VALUES
(18, 10, 'Toyota Avanza 1.3 G M/T', 'DA 1285 JK', 'Biru', 2014, 300000, 'tidak tersedia', '104931.jpg'),
(19, 19, 'Toyota Avanza 1.5 G M/T', 'DA 3301 CO', 'Biru', 2017, 350000, 'tersedia', '104931.jpg'),
(20, 18, 'Toyota Avanza Veloz 1.3 M/T', 'DA 1244 DAA', 'Merah', 2015, 300000, 'tersedia', '104930.jpg'),
(21, 17, 'Toyota Avanza Veloz 1.5 A/T', 'DA 1285 MAU', 'Merah', 2015, 350000, 'tersedia', '104930.jpg'),
(22, 13, 'Toyota Fortuner 2.4 G M/T', 'DA 1923 LAU', 'Putih', 2016, 900000, 'tersedia', '104928.jpg'),
(23, 16, 'Toyota Fortuner 2.4 VRZ A/T', 'DA 1752 KAH', 'Putih', 2017, 1000000, 'tersedia', '104928.jpg'),
(24, 20, 'Toyota Kijang Innova G A/T', 'DA 1520 DAA', 'Abu-Abu', 2015, 400000, 'tersedia', '104932.jpg'),
(25, 10, 'Toyota Kijang Innova V A/T', 'DA 1530 MAU', 'Abu-Abu', 2015, 450000, 'tersedia', '104932.jpg'),
(26, 15, 'Toyota Yaris E Grade M/T', 'DA 1254 DAA', 'Kuning', 2017, 400000, 'tersedia', '104929.jpg'),
(27, 14, 'Toyota Yaris G Grade M/T', 'DA 1850 JK', 'Kuning', 2018, 450000, 'tersedia', '104929.jpg'),
(30, 15, 'Toyota Yaris E Grade M/T', 'N 4124 YW', 'Biru', 2017, 300000000, 'tidak tersedia', '104931.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_byr` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `kode_trans` varchar(50) NOT NULL,
  `gbr_struk` varchar(50) NOT NULL,
  `jlh_byr` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(40) NOT NULL,
  `nama_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spesifikasi`
--

CREATE TABLE `spesifikasi` (
  `id_spesifikasi` int(5) NOT NULL,
  `id_jenismobil` int(5) NOT NULL,
  `kapasitas_mesin` varchar(40) NOT NULL,
  `tenaga` varchar(40) NOT NULL,
  `torsi` varchar(40) NOT NULL,
  `jenis_bahan_bakar` varchar(40) NOT NULL,
  `konsumsi_bbm_tol` varchar(40) NOT NULL,
  `konsumsi_bbm_dalam_kota` varchar(40) NOT NULL,
  `kapasitas_tempat_duduk` varchar(40) NOT NULL,
  `kapasitas_tangki_bahan_bakar` varchar(40) NOT NULL,
  `panjang` varchar(40) NOT NULL,
  `lebar` varchar(40) NOT NULL,
  `tinggi` varchar(40) NOT NULL,
  `jumlah_pintu` varchar(40) NOT NULL,
  `suspensi_depan` varchar(40) NOT NULL,
  `suspensi_belakang` varchar(40) NOT NULL,
  `jenis_shockbreaker` varchar(40) NOT NULL,
  `girboks` varchar(40) NOT NULL,
  `jenis_transmisi` varchar(40) NOT NULL,
  `jenis_penggerak` varchar(40) NOT NULL,
  `jenis_kemudi` varchar(40) NOT NULL,
  `jenis_ban` varchar(40) NOT NULL,
  `jumlah_silinder` varchar(40) NOT NULL,
  `katup_per_silinder` varchar(40) NOT NULL,
  `sistem_suplai_bahan_bakar` varchar(40) NOT NULL,
  `ukuran_ban` varchar(40) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spesifikasi`
--

INSERT INTO `spesifikasi` (`id_spesifikasi`, `id_jenismobil`, `kapasitas_mesin`, `tenaga`, `torsi`, `jenis_bahan_bakar`, `konsumsi_bbm_tol`, `konsumsi_bbm_dalam_kota`, `kapasitas_tempat_duduk`, `kapasitas_tangki_bahan_bakar`, `panjang`, `lebar`, `tinggi`, `jumlah_pintu`, `suspensi_depan`, `suspensi_belakang`, `jenis_shockbreaker`, `girboks`, `jenis_transmisi`, `jenis_penggerak`, `jenis_kemudi`, `jenis_ban`, `jumlah_silinder`, `katup_per_silinder`, `sistem_suplai_bahan_bakar`, `ukuran_ban`, `jenis`) VALUES
(0, 20, '1998 cc', '137 hp', '190 Nm', 'Bensin', '12.7', '8.6', '7', '55 L', '4735 mm', '1830 mm', '1795 mm', '5', 'Double Whisbone', 'Multi-Link', 'Coil Spring', '6-Speed', 'Otomatis', 'RWD', 'Power', 'Radial', '4', '4', 'EFI', '205/65 R16', 'Manual'),
(14, 10, '1998 cc', '137 hp', '190 Nm', 'Bensin', '12.07', '8.6', '7', '55 L', '4735 mm', '1830 mm', '1795 mm', '5', 'Double Whisbone', 'Multi-Link', 'Coil Spring', '6-Speed', 'Otomatis', 'RWD', 'Power', 'Radial', '4', '4', 'EFI', '205/65 R16', 'Matic'),
(15, 11, '1329 cc', '95 hp', '121 Nm', 'Bensin', '17,3', '14,8', '7', '45 L', '4200 mm', '1660 mm', '1695 mm', '5', 'MacPherson Strut', 'Multi-Link', 'Coil Spring', '5-Speed', 'Manual', '-', 'Electric Power', 'Radial', '4', '4', 'EFI', '185/65 R15', 'Manual'),
(16, 18, '1329 cc', '95 hp', '121 Nm', 'Bensin', '-', '-', '7', '45 L', '4200 mm', '1660 mm', '1695 mm', '5', 'MacPherson Strut', 'Multi-Link', 'Coil Spring', '5-Speed', 'Manual', '-', 'Electric Power', 'Radial', '4', '4', 'EFI', '185/65 R15', 'Manual'),
(17, 13, '2393 cc', '148 hp', '401 Nm', 'Diesel', '-', '-', '7', '80 L', '4795 mm', '1855 mm', '1835 mm', '5', 'Double Whisbone', 'Multi-Link', 'Coil Spring', '6-Speed', 'Manual', '2WD', 'Power', 'Radial', '4', '4', 'CRDi', '265/65 R17', 'Manual'),
(18, 14, '1496 cc', '106 hp', '140 Nm', 'Bensin', '18.6', '13', '5', '42 L', '4145 mm', '1730 mm', '1500 mm', '4', 'MacPherson Strut', 'Torsion Beam', '-', '5-Speed', 'Manual', '-', 'Electric Power', 'Radial', '4', '4', 'Fuel Injection', '185/60 R15', 'Manual'),
(19, 15, '1496 cc', '106 hp', '140 Nm', 'Bensin', '18.6', '13', '5', '42 L', '4145 mm', '1730 mm', '1500 mm', '4', 'MacPherson Strut', 'Torsion Beam', '-', '5-Speed', 'Manual', '-', 'Electric Power', 'Radial', '4', '4', 'Fuel Injection', '185/60 R15', 'Manual'),
(20, 16, '2393 cc', '148 hp', '401 Nm', 'Diesel', '12.02', '16.04', '7', '80 L', '4795 mm', '1855 mm', '1835 mm', '5', 'Double Whisbone', 'Multi-Link', 'Coil Spring', '6-Speed', 'Otomatis', '2WD', 'Power', 'Radial', '4', '4', 'CRDi', '265/60 R18', 'Matic'),
(21, 17, '1496 cc', '103 hp', '121 Nm', 'Bensin', '-', '-', '7', '45 L', '4200 mm', '1660 mm', '1695 mm', '5', 'MacPherson Strut', 'Multi-Link', 'Coil Spring', '4-Speed', 'Otomatis', '-', 'Electric Power', 'Radial', '4', '4', 'EFI', '185/65 R15', 'Matic'),
(22, 19, '1496 cc', '103 hp', '136 Nm', 'Bensin', '-', '-', '7', '45 L', '4190 mm', '1660 mm', '1695 mm', '5', 'MacPherson Strut', 'Multi-Link', 'Coil Spring', '5-Speed', 'Manual', '-', 'Electric Power', 'Radial', '4', '4', 'EFI', '185/65 R15', 'Manual');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trans` int(20) NOT NULL,
  `kode_trans` varchar(50) NOT NULL,
  `id_user` int(20) NOT NULL,
  `id_mobil` int(20) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `lama` int(20) NOT NULL,
  `harga` int(50) NOT NULL,
  `denda` int(50) NOT NULL,
  `totalbayar` int(50) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `pembayaran` varchar(10) NOT NULL,
  `stat_transaksi` varchar(50) NOT NULL,
  `tgl_dikembalikan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_trans`, `kode_trans`, `id_user`, `id_mobil`, `tgl_pinjam`, `tgl_kembali`, `lama`, `harga`, `denda`, `totalbayar`, `tgl_transaksi`, `pembayaran`, `stat_transaksi`, `tgl_dikembalikan`) VALUES
(3, 'WeE8gDJawLU', 1, 30, '2018-12-31', '2019-01-04', 5, 300000000, 0, 1500500000, '2018-12-31', 'ATM', 'Selesai', '0000-00-00'),
(4, 'W0PUdryGK3T', 1, 18, '2019-01-01', '2019-01-02', 2, 300000, 0, 800000, '2019-01-01', 'ATM', 'Selesai', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(13) NOT NULL,
  `ktp` int(30) NOT NULL,
  `foto_sim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `namalengkap`, `alamat`, `telp`, `ktp`, `foto_sim`) VALUES
(1, 'naragst', '1234', 'Nara Augustin', 'JL. HKSN Komplek Dasamaya 1 RT.17 No.70, Kuin Utara, Banjarmasin', '081973242223', 987654321, ''),
(17, 'fitri_', '1234', 'fitriani  ', 'Jl Trisakti komp. Uka Gg 7', '083145225322', 2147483647, 'fadlisim.jpeg'),
(18, 'fadli', '1234', 'Muhammad Fadli', 'jl alalak utara', '089723456787', 2147483647, 'fadlisim.jpeg'),
(19, 'naragst', '1234', 'Nara Augustin', 'jl hksn', '083145225322', 2147483647, 'fadlisim.jpeg'),
(20, 'naragst', '1234', 'Nara Augustin', 'jl hksn', '083145225322', 2147483647, 'fadlisim.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `jenis_mobil`
--
ALTER TABLE `jenis_mobil`
  ADD PRIMARY KEY (`id_jenismobil`);

--
-- Indexes for table `jenis_spesifikasi`
--
ALTER TABLE `jenis_spesifikasi`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kategori_spesifikasi`
--
ALTER TABLE `kategori_spesifikasi`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `krisan`
--
ALTER TABLE `krisan`
  ADD PRIMARY KEY (`id_krisan`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_byr`);

--
-- Indexes for table `spesifikasi`
--
ALTER TABLE `spesifikasi`
  ADD PRIMARY KEY (`id_spesifikasi`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trans`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jenis_mobil`
--
ALTER TABLE `jenis_mobil`
  MODIFY `id_jenismobil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `jenis_spesifikasi`
--
ALTER TABLE `jenis_spesifikasi`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kategori_spesifikasi`
--
ALTER TABLE `kategori_spesifikasi`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `krisan`
--
ALTER TABLE `krisan`
  MODIFY `id_krisan` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_byr` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `spesifikasi`
--
ALTER TABLE `spesifikasi`
  MODIFY `id_spesifikasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_trans` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
