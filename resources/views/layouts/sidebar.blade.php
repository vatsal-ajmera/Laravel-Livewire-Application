<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Main</h6>
                    <ul>
                        <li>
                            <a href="{{ Route('home') }}"><i data-feather="grid"></i><span>Home</span></a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="smartphone"></i><span>Application</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ Route('products') }}">Products</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Settings</h6>
                    <ul>
                        <li>
                            <a href="signin.html"><i data-feather="log-out"></i><span>Logout</span> </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
