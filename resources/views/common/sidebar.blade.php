<div id="viewport">
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header sidebar-opener">
            Accounting Panel
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-list">

                <li>
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>

                <li>
                    <a href="{{ route('categories') }}">Kategoriler</a>
                </li>

                <li>
                    <a href="{{ route('budgets') }}">Bütçeler</a>
                </li>

                <li>
                    <a href="{{ route('expenses') }}">Harcamalar</a>
                </li>

                <li data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    <a>Kart</a>
                </li>

                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <ul>
                            <li><a href="{{ route('cards') }}">Kart Listesi</a></li>
                            <li><a href="#">Taksitler</a></li>
                        </ul>
                    </div>
                </div>
                
                <li>
                    <a href="{{ route('logout') }}">Çıkış Yap</a>
                </li>

            </ul>
        </div>
    </div>

</div>
