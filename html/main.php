<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de la Plataforma</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;700&family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class='bx bxl-c-plus-plus'></i>
                <div class="logo_name">Frotus del Ande</div>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search...">
            <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="../html/cliente.php">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Cliente</span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="../html/producto.php">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Producto</span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="../html/pedido.php">
                    <i class='bx bx-cart-alt' ></i>
                    <span class="links_name">Pedidos</span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="../html/certificacion.php">
                    <i class='bx bx-detail'></i>
                    <span class="links_name">Certificación</span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="../html/cultivo.php">
                    <i class='bx bx-leaf' ></i>
                    <span class="links_name">Cultivo</span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="../html/inventario.php">
                    <i class='bx bx-package'></i>
                    <span class="links_name">Inventario</span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="../html/proveedor.php">
                    <i class='bx bx-user-plus'></i>
                    <span class="links_name">Proveedor</span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
        </ul>

        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <img src="../assets/img/perfil.jpg" alt="">
                    <div class="name_job">
                        <div class="name">Joel Ircañaupa</div>
                        <div class="job">Administrador</div>
                    </div>
                </div>

                <i class='bx bx-log-out' id="log_out"></i>
            </div>
        </div>
    </div>

    <div class="home_content">
        <div class="text">FRUTOS DEL ANDE</div>
    </div>

    <script src="codigo.js"></script>
</body>
</html>