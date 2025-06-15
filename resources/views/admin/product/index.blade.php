<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Management - Stilo Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f8f9fa;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        .admin-header {
            background: white;
            border-bottom: 1px solid #e5e5e5;
            padding: 16px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .logo {
            font-size: 20px;
            font-weight: 700;
            text-decoration: none;
            color: #333;
        }

        .admin-badge {
            background: #667eea;
            color: white;
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            border-radius: 8px;
            background: #f8f9fa;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .user-menu:hover {
            background: #e9ecef;
        }

        /* Home Button */
        .home-btn {
            background: #10b981;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.2s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .home-btn:hover {
            background: #059669;
            transform: translateY(-1px);
        }

        .logout-btn {
            background: #ef4444;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.2s;
        }

        .logout-btn:hover {
            background: #dc2626;
            transform: translateY(-1px);
        }

        /* Page Header */
        .page-header {
            background: white;
            border-radius: 12px;
            padding: 32px;
            margin: 24px 0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 24px;
        }

        .header-info h1 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 8px;
            color: #333;
        }

        .header-info p {
            font-size: 16px;
            color: #666;
        }

        .header-actions {
            display: flex;
            gap: 12px;
        }

        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: #667eea;
            color: white;
        }

        .btn-primary:hover {
            background: #5a67d8;
            transform: translateY(-1px);
        }

        .btn-secondary {
            background: #6b7280;
            color: white;
        }

        .btn-secondary:hover {
            background: #4b5563;
        }

        .btn-outline {
            background: transparent;
            color: #6b7280;
            border: 2px solid #e5e5e5;
        }

        .btn-outline:hover {
            border-color: #667eea;
            color: #667eea;
        }

        /* Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 24px;
        }

        .stat-card {
            background: white;
            padding: 24px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .stat-value {
            font-size: 32px;
            font-weight: 700;
            color: #333;
            margin-bottom: 8px;
        }

        .stat-label {
            font-size: 14px;
            color: #666;
            text-transform: uppercase;
            font-weight: 600;
        }

        .stat-change {
            font-size: 12px;
            margin-top: 4px;
        }

        .stat-change.positive {
            color: #10b981;
        }

        .stat-change.negative {
            color: #ef4444;
        }

        /* Filters and Search */
        .filters-section {
            background: white;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 24px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .filters-row {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr auto;
            gap: 16px;
            align-items: end;
        }

        .filter-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .filter-label {
            font-size: 14px;
            font-weight: 600;
            color: #333;
        }

        .filter-input,
        .filter-select {
            padding: 12px 16px;
            border: 2px solid #e5e5e5;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.2s;
        }

        .filter-input:focus,
        .filter-select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .search-input {
            position: relative;
        }

        .search-input input {
            padding-left: 44px;
        }

        .search-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
        }

        /* Table Container */
        .table-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .table-header {
            padding: 20px 24px;
            border-bottom: 1px solid #e5e5e5;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .table-title {
            font-size: 18px;
            font-weight: 600;
            color: #333;
        }

        .table-actions {
            display: flex;
            gap: 12px;
            align-items: center;
        }

        .bulk-actions {
            display: none;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            background: #f8f9fa;
            border-bottom: 1px solid #e5e5e5;
        }

        .bulk-actions.show {
            display: flex;
        }

        .bulk-text {
            font-size: 14px;
            color: #666;
        }

        /* Table */
        .products-table {
            width: 100%;
            border-collapse: collapse;
        }

        .products-table th,
        .products-table td {
            padding: 16px 24px;
            text-align: left;
            border-bottom: 1px solid #f1f3f4;
        }

        .products-table th {
            background: #f8f9fa;
            font-weight: 600;
            color: #333;
            font-size: 14px;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .products-table td {
            font-size: 14px;
            vertical-align: middle;
        }

        .products-table tr:hover {
            background: #f8f9fa;
        }

        .products-table tr.selected {
            background: #e0e7ff;
        }

        /* Product Info */
        .product-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .product-image {
            width: 48px;
            height: 48px;
            border-radius: 8px;
            object-fit: cover;
            background: #f3f4f6;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-size: 12px;
        }

        .product-details h4 {
            font-size: 14px;
            font-weight: 600;
            color: #333;
            margin-bottom: 4px;
        }

        .product-details p {
            font-size: 12px;
            color: #666;
        }

        /* Status Badge */
        .status-badge {
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .status-badge.active {
            background: #d1fae5;
            color: #065f46;
        }

        .status-badge.inactive {
            background: #fee2e2;
            color: #991b1b;
        }

        .status-badge.draft {
            background: #fef3c7;
            color: #92400e;
        }

        /* Stock Status */
        .stock-status {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .stock-indicator {
            width: 8px;
            height: 8px;
            border-radius: 50%;
        }

        .stock-indicator.in-stock {
            background: #10b981;
        }

        .stock-indicator.low-stock {
            background: #f59e0b;
        }

        .stock-indicator.out-of-stock {
            background: #ef4444;
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 8px;
        }

        .action-btn {
            width: 32px;
            height: 32px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
            font-size: 14px;
        }

        .action-btn.edit {
            background: #e0e7ff;
            color: #667eea;
        }

        .action-btn.edit:hover {
            background: #667eea;
            color: white;
        }

        .action-btn.delete {
            background: #fee2e2;
            color: #ef4444;
        }

        .action-btn.delete:hover {
            background: #ef4444;
            color: white;
        }

        .action-btn.view {
            background: #f0fdf4;
            color: #10b981;
        }

        .action-btn.view:hover {
            background: #10b981;
            color: white;
        }

        /* Pagination */
        .pagination {
            padding: 20px 24px;
            display: flex;
            justify-content: between;
            align-items: center;
            border-top: 1px solid #e5e5e5;
        }

        .pagination-info {
            font-size: 14px;
            color: #666;
        }

        .pagination-controls {
            display: flex;
            gap: 8px;
            margin-left: auto;
        }

        .pagination-btn {
            padding: 8px 12px;
            border: 1px solid #e5e5e5;
            border-radius: 6px;
            background: white;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.2s;
        }

        .pagination-btn:hover {
            border-color: #667eea;
            color: #667eea;
        }

        .pagination-btn.active {
            background: #667eea;
            color: white;
            border-color: #667eea;
        }

        .pagination-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        /* Checkbox */
        .checkbox {
            width: 18px;
            height: 18px;
            accent-color: #667eea;
            cursor: pointer;
        }

        /* Alert */
        .alert {
            padding: 16px;
            border-radius: 8px;
            margin-bottom: 16px;
            font-size: 14px;
        }

        .alert-success {
            background-color: #d1fae5;
            color: #065f46;
            border: 1px solid #10b981;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .filters-row {
                grid-template-columns: 1fr;
                gap: 12px;
            }

            .products-table {
                font-size: 12px;
            }

            .products-table th,
            .products-table td {
                padding: 12px 16px;
            }
        }

        @media (max-width: 768px) {
            .header-top {
                flex-direction: column;
                align-items: stretch;
                gap: 16px;
            }

            .header-actions {
                justify-content: flex-end;
            }

            .header-right {
                flex-direction: column;
                gap: 8px;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .table-header {
                flex-direction: column;
                align-items: stretch;
                gap: 16px;
            }

            .table-actions {
                justify-content: flex-end;
            }

            /* Hide some columns on mobile */
            .products-table .hide-mobile {
                display: none;
            }
        }

        /* Notification */
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background: #10b981;
            color: white;
            padding: 16px 24px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transform: translateX(100%);
            transition: transform 0.3s;
            z-index: 1000;
        }

        .notification.show {
            transform: translateX(0);
        }

        .notification.error {
            background: #ef4444;
        }

        .notification.warning {
            background: #f59e0b;
        }
    </style>
</head>
<body>
    <!-- Admin Header -->
    <header class="admin-header">
        <div class="container">
            <div class="header-content">
                <div class="header-left">
                    <a href="#" class="logo">Stilo</a>
                    <span class="admin-badge">Admin</span>
                </div>
                <div class="header-right">
                    <div class="user-menu">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                        <span>Admin User</span>
                    </div>
                    <a href="/" class="home-btn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                            <polyline points="9,22 9,12 15,12 15,22"/>
                        </svg>
                        Kembali ke Home
                    </a>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="logout-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                                <polyline points="16,17 21,12 16,7"/>
                                <line x1="21" y1="12" x2="9" y2="12"/>
                            </svg>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="header-top">
                <div class="header-info">
                    <h1>Daftar Produk Fashion</h1>
                    <p>Manage your product inventory, pricing, and availability</p>
                </div>
                    <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                        Tambah Produk
                    </a>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-value">{{ $products->count() }}</div>
                    <div class="stat-label">Total Products</div>
                    <div class="stat-change positive">+12 this month</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value">{{ $products->where('stok', '>', 0)->count() }}</div>
                    <div class="stat-label">Active Products</div>
                    <div class="stat-change positive">+8 this month</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value">{{ $products->where('stok', '<', 10)->count() }}</div>
                    <div class="stat-label">Low Stock</div>
                    <div class="stat-change negative">+5 this week</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value">Rp {{ number_format($products->sum('harga'), 0, ',', '.') }}</div>
                    <div class="stat-label">Total Value</div>
                    <div class="stat-change positive">+15% this month</div>
                </div>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Filters Section -->
        <div class="filters-section">
            <div class="filters-row">
                <div class="filter-group">
                    <label class="filter-label">Search Products</label>
                    <div class="search-input">
                        <svg class="search-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"/>
                            <path d="M21 21l-4.35-4.35"/>
                        </svg>
                        <input type="text" class="filter-input" placeholder="Search by name, SKU, or description..." id="searchInput">
                    </div>
                </div>
                <div class="filter-group">
                    <label class="filter-label">Category</label>
                    <select class="filter-select" id="categoryFilter">
                        <option value="">All Categories</option>
                        @php
                            $categories = $products->pluck('kategori')->unique();
                        @endphp
                        @foreach($categories as $category)
                            <option value="{{ $category }}">{{ $category }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="filter-group">
                    <label class="filter-label">Status</label>
                    <select class="filter-select" id="statusFilter">
                        <option value="">All Status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                        <option value="draft">Draft</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label class="filter-label">Stock</label>
                    <select class="filter-select" id="stockFilter">
                        <option value="">All Stock</option>
                        <option value="in-stock">In Stock</option>
                        <option value="low-stock">Low Stock</option>
                        <option value="out-of-stock">Out of Stock</option>
                    </select>
                </div>
                <div class="filter-group">
                    <button class="btn btn-outline" onclick="clearFilters()">Clear</button>
                </div>
            </div>
        </div>

        <!-- Table Container -->
        <div class="table-container">
            <div class="table-header">
                <h3 class="table-title">Products List</h3>
                <div class="table-actions">
                    <select class="filter-select" id="sortBy">
                        <option value="name">Sort by Name</option>
                        <option value="created">Sort by Date</option>
                        <option value="price">Sort by Price</option>
                        <option value="stock">Sort by Stock</option>
                    </select>
                    <button class="btn btn-outline" onclick="toggleView()">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="7" height="7"/>
                            <rect x="14" y="3" width="7" height="7"/>
                            <rect x="14" y="14" width="7" height="7"/>
                            <rect x="3" y="14" width="7" height="7"/>
                        </svg>
                        Grid View
                    </button>
                </div>
            </div>

            <!-- Bulk Actions -->
            <div class="bulk-actions" id="bulkActions">
                <span class="bulk-text"><span id="selectedCount">0</span> items selected</span>
                <button class="btn btn-outline" onclick="bulkEdit()">Bulk Edit</button>
                <button class="btn btn-secondary" onclick="bulkStatusChange()">Change Status</button>
                <button class="btn btn-outline" onclick="bulkDelete()">Delete Selected</button>
            </div>

            <!-- Products Table -->
            <div id="tableContent">
                <table class="products-table">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" class="checkbox" id="selectAll" onchange="toggleSelectAll()">
                            </th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="productsTableBody">
                        @foreach($products as $product)
                        <tr data-product-id="{{ $product->id }}">
                            <td>
                                <input type="checkbox" class="checkbox product-checkbox" 
                                       value="{{ $product->id }}" 
                                       onchange="toggleProductSelection({{ $product->id }})">
                            </td>
                            <td>{{ $product->nama_produk }}</td>
                            <td>{{ $product->kategori }}</td>
                            <td>Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
                            <td>{{ Str::limit($product->deskripsi, 50) }}</td>
                            <td>
                                @if($product->gambar)
                                    <img src="{{ $product->gambar }}" alt="{{ $product->nama_produk }}" width="80" class="product-image">
                                @else
                                    <div class="product-image">Tidak ada gambar</div>
                                @endif
                            </td>
                            <td>{{ $product->status }}</td>
                            <td>
                                <div class="action-buttons">
                                    <a href="{{ route('admin.products.edit', $product->id) }}" class="action-btn edit" title="Edit">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                        </svg>
                                    </a>
                                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="action-btn delete" title="Delete">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <polyline points="3,6 5,6 21,6"/>
                                                <path d="M19,6V20a2,2,0,0,1-2,2H7a2,2,0,0,1-2-2V6"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <div class="pagination-info">
                    Showing 1 to {{ $products->count() }} of {{ $products->count() }} products
                </div>
                <div class="pagination-controls">
                    <button class="pagination-btn" disabled>Previous</button>
                    <button class="pagination-btn active">1</button>
                    <button class="pagination-btn" disabled>Next</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Notification -->
    <div class="notification" id="notification">
        Action completed successfully!
    </div>
</body>
</html>