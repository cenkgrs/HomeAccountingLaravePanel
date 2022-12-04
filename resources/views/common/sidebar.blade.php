<div id="viewport">
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header sidebar-opener">
            Accounting Panel
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-list">

                <li>
                    <a href="{{ route('dashboard') }}"><i class="fab fa-product-hunt"></i> Dashboard</a>
                </li>

                <li>
                    <a href="{{ route('categories') }}"><i class="fas fa-money-bill-wave"></i> Kategoriler</a>
                </li>

                <li>
                    <a href="{{ route('budgets') }}"><i class="fas fa-money-bill-wave"></i> Budgets</a>
                </li>

                <li>
                    <a href="{{ route('expenses') }}"><i class="fas fa-money-bill-wave"></i> Expenses</a>
                </li>
                
                <li>
                    <a href="{{ route('logout') }}"> Logout</a>
                </li>

            </ul>
        </div>
    </div>

</div>
