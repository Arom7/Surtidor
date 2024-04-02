<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Image">
        <div>
            <p class="app-sidebar__user-name"><?php echo isset($_SESSION['nombre'])?></p>
            <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item active" href="index.php"><i class="app-menu__icon bi bi-speedometer"></i><span class="app-menu__label">Inicio</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-laptop"></i><span class="app-menu__label">Productos</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="productos.php"><i class="icon bi bi-circle-fill"></i>Registrar Productos</a></li>
                <li><a class="treeview-item" href="" target="_blank" rel="noopener"><i class="icon bi bi-circle-fill"></i>Visualizar productos</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-ui-checks"></i><span class="app-menu__label">Pedidos</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="form-components.html"><i class="icon bi bi-circle-fill"></i> Registrar Pedidos</a></li>
                <li><a class="treeview-item" href="form-samples.html"><i class="icon bi bi-circle-fill"></i> Visualizar Productos</a></li>
            </ul>
        </li>
    </ul>
</aside>