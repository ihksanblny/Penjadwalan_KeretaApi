<?php
// Ambil data dari database
include 'koneksi.php';
$query = "SELECT * FROM tb_jadwal";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3aa5e51db9.js" crossorigin="anonymous"></script>
    <!-- <script src="admin1.js"></script> -->
    <link rel="stylesheet" href="admin1.css">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->

    <style>
        .card-custom {
            border: 2px solid #007bff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header-custom {
            background-color: #007bff;
            color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .list-group-item-custom {
            border: none;
            border-bottom: 1px solid #ddd;
        }
        .list-group-item-custom:last-child {
            border-bottom: none;
        }
    </style>
    
</head>
<body>
 
    <div class="container">
        <div class="sidebar">
            <div class="header">
                <div class="list-item">
                    <a href="#">
                        <!-- <i class="fa-solid fa-train fa-xl fa-fw" style="color: #ff8c00;"></i> -->
                        <span class="description-header">Penjadwalan Kereta</span>
                    </a>
                </div>
                <div class="illustration">
                    <img src="assets/kereta.png" alt="" class="icon" style="width: 100px;">
                </div>
            </div>
            <div class="main">
                <div class="list-item">
                    <a href="admin1.html">
                        <i class="fa-solid fa-gauge fa-xl fa-fw" style="color: #f1f5f8; margin: 50px 10px;"></i>
                        <!-- <i class="fa-solid fa-gauge fa-xl fa-fw" style="color: #ff8c00; "></i> -->
                        <span class="description">Dashboard</span>
                    </a>
                </div>
                <div class="list-item">
                    <a href="#">
                        <i class="fa-solid fa-user-tie fa-xl fa-fw" style="color: #f1f5f8; margin: 50px 10px;"></i>
                        <!-- <i class="fa-solid fa-gauge fa-xl fa-fw" style="color: #ff8c00; "></i> -->
                        <span class="description">Admin</span>
                    </a>
                </div>
                <div class="list-item">
                    <a href="Jadwal Kereta/jadwal-kereta.php">
                        <i class="fa-solid fa-train fa-xl fa-fw" style="color: #f1f5f8; margin: 50px 10px;"></i>
                        <!-- <i class="fa-solid fa-gauge fa-xl fa-fw" style="color: #ff8c00; "></i> -->
                        <span class="description">Penjadwalan</span>
                    </a>
                </div>
                <div class="list-item">
                    <a href="#">
                        <i class="fa-solid fa-ticket-simple fa-xl fa-fw" style="color: #f1f5f8; margin: 50px 10px;"></i>
                        <!-- <i class="fa-solid fa-gauge fa-xl fa-fw" style="color: #ff8c00; "></i> -->
                        <span class="description">Kode Tiket</span>
                    </a>
                </div>
                <div class="list-item">
                    <a href="logout.php">
                        <i class="fa-solid fa-arrow-right-from-bracket fa-xl" style="color: #f1f5f8; margin: 50px 10px;"></i>
                        <!-- <i class="fa-solid fa-gauge fa-xl fa-fw" style="color: #ff8c00; "></i> -->
                        <span class="description">Logout</span>
                    </a>
                </div>
        </div>
            </div>

            <div class="main-content">

                <div id="menu-button">
                    <input type="checkbox" id="menu-checkbox">
                    <label for="menu-checkbox" id="menu-label">
                        <div id="hamburger"></div>
                    </label>
                </div>
                <div class="topbar">
                    <div class="search">
                        <div class="search-box">
                            <label>
                                <div class="search-icon">
                                    <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #111827;"></i>
                                </div>
                                <div class="search-input">
                                    <input type="text" placeholder="Search">
                                </div>
                            </label>
                            </div>
                    </div>
                    </div>
                    <div class="home-content">
                    <div class="card card-custom">
            <div class="card-header card-header-custom">
                <h2 class="card-title mb-0">Daftar Kode Tiket</h2>
            </div>
            <div class="card-body p-0">
                <ul class="list-group list-group-flush">
                    <?php
                    // Looping data produk untuk membuat widget
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<li class='list-group-item list-group-item-custom'>" . $row['kode_tiket'] . "</li>";
                    }
                    ?>
                        <div class="overview-boxes">
                            <div class="overview-box"></div>
                                <div class="box">
                                
                                </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
    <script>
        const menu = document.getElementById('menu-label');
        const sidebar = document.getElementsByClassName('sidebar')[0];

        menu.addEventListener('click', function() {
            sidebar.classList.toggle('hide');
        })

        // Ambil elemen tautan Logout
            const logoutLink = document.querySelector('.list-item a[href="index.php"]');

        // Tambahkan event listener untuk klik pada tautan Logout
            logoutLink.addEventListener('click', function(event) {
            event.preventDefault(); // Untuk mencegah navigasi ke link yang sebenarnya

            // Tampilkan dialog konfirmasi
            const confirmLogout = confirm('Apakah Anda yakin ingin keluar?');
            
            if (confirmLogout) {
                // Jika pengguna mengonfirmasi logout
                alert('Anda telah keluar.'); // Tampilkan pesan logout
                // Contoh: redirect ke halaman logout atau lakukan tindakan logout lainnya
                window.location.href = '/logout'; // Ganti URL dengan tujuan logout sesuai kebutuhan
            } else {
                // Jika pengguna membatalkan logout
                // Tidak ada tindakan khusus yang dilakukan
            }
        });

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>