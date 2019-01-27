CREATE TABLE IF NOT EXISTS `daftar_paket` (
  `id` int(5) NOT NULL,
  `kode_paket` varchar(4) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `harga` int(10) NOT NULL,
  `keterangan` varchar(40) NOT NULL,
  `jadwal` varchar(20) NOT NULL,
  `pengajar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `daftar_paket` (`id`, `kode_paket`, `nama_paket`, `harga`, `keterangan`, `jadwal`, `pengajar`) VALUES
(1, 'A001', 'Bash Scripting', 50000, 'Bash Scripting Pengenalan dan Dasar', 'Senin-Rabu', 'Gorgom'),
(2, 'A002', 'PHP MySQL', 75000, 'Belajar PHP sampai mahir', 'Kamis-Jumat', 'Gorgom'),
(3, 'A003', 'NodeJS', 100000, 'Belajar NodeJS sampai jago', 'Sabtu-Minggu', 'Gorgom'),
(4, 'A004', 'Python', 125000, 'Belajar Python sampai handal', 'Selasa-Kamis', 'Gorgom'),
(5, 'A005', 'Go', 115000, 'Belajar Go sampai jumpa', 'Rabu-Jumat', 'Gorgom');

ALTER TABLE `daftar_paket`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `daftar_paket`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
