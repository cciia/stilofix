<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product - Stilo Admin</title>
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
            max-width: 1200px;
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

        .logout-btn {
            background: #ef4444;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            transition: background-color 0.2s;
        }

        .logout-btn:hover {
            background: #dc2626;
        }

        /* Breadcrumb */
        .breadcrumb {
            padding: 20px 0;
            font-size: 14px;
            color: #666;
        }

        .breadcrumb a {
            color: #667eea;
            text-decoration: none;
            transition: color 0.2s;
        }

        .breadcrumb a:hover {
            color: #5a67d8;
        }

        .breadcrumb span {
            margin: 0 8px;
        }

        /* Page Header */
        .page-header {
            background: white;
            border-radius: 12px;
            padding: 32px;
            margin-bottom: 24px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .header-info {
            flex: 1;
        }

        .page-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 8px;
            color: #333;
        }

        .page-subtitle {
            font-size: 16px;
            color: #666;
            margin-bottom: 16px;
        }

        .product-meta {
            display: flex;
            gap: 24px;
            flex-wrap: wrap;
        }

        .meta-item {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .meta-label {
            font-size: 12px;
            color: #666;
            text-transform: uppercase;
            font-weight: 600;
        }

        .meta-value {
            font-size: 14px;
            color: #333;
            font-weight: 500;
        }

        .header-actions {
            display: flex;
            gap: 12px;
            align-items: flex-start;
        }

        /* Alert Styles */
        .alert {
            padding: 16px;
            border-radius: 8px;
            margin-bottom: 24px;
            font-size: 14px;
        }

        .alert-danger {
            background-color: #fee2e2;
            color: #991b1b;
            border: 1px solid #ef4444;
        }

        .alert ul {
            margin: 0;
            padding-left: 20px;
        }

        .alert li {
            margin-bottom: 4px;
        }

        /* Form Container */
        .form-container {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 24px;
            margin-bottom: 32px;
        }

        .form-main {
            background: white;
            border-radius: 12px;
            padding: 32px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .form-sidebar {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .sidebar-card {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 16px;
            color: #333;
        }

        /* Form Styles */
        .form-section {
            margin-bottom: 32px;
        }

        .section-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 16px;
            color: #333;
            padding-bottom: 8px;
            border-bottom: 2px solid #f1f3f4;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }

        .form-label.required::after {
            content: ' *';
            color: #ef4444;
        }

        .form-input,
        .form-select,
        .form-textarea {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e5e5e5;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.2s;
            background: white;
        }

        .form-input:focus,
        .form-select:focus,
        .form-textarea:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .form-textarea {
            resize: vertical;
            min-height: 120px;
        }

        .form-input.error,
        .form-select.error,
        .form-textarea.error {
            border-color: #ef4444;
            background: #fef2f2;
        }

        .form-help {
            font-size: 12px;
            color: #666;
            margin-top: 4px;
        }

        /* Image Management */
        .image-preview-container {
            margin-bottom: 16px;
        }

        .current-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            border: 2px solid #e5e5e5;
        }

        .image-placeholder {
            width: 150px;
            height: 150px;
            background: #f3f4f6;
            border: 2px dashed #e5e5e5;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-size: 14px;
        }

        /* Action Buttons */
        .form-actions {
            background: white;
            border-radius: 12px;
            padding: 24px 32px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .form-container {
                grid-template-columns: 1fr;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .form-actions {
                flex-direction: column;
                align-items: stretch;
            }

            .form-actions .btn {
                justify-content: center;
            }

            .page-header {
                flex-direction: column;
                align-items: stretch;
                gap: 20px;
            }

            .header-actions {
                align-self: stretch;
                justify-content: flex-end;
            }

            .product-meta {
                gap: 16px;
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
                    <button class="logout-btn" onclick="logout()">Logout</button>
                </div>
            </div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <div class="container">
        <div class="breadcrumb">
            <a href="#">Dashboard</a>
            <span>/</span>
            <a href="{{ route('admin.products.index') }}">Products</a>
            <span>/</span>
            <span>Edit Product</span>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="header-info">
                <h1 class="page-title">Edit Produk</h1>
                <p class="page-subtitle">Edit informasi produk dan kelola detail</p>
                <div class="product-meta">
                    <div class="meta-item">
                        <span class="meta-label">Nama Produk</span>
                        <span class="meta-value">{{ $product->nama_produk }}</span>
                    </div>
                    <div class="meta-item">
                        <span class="meta-label">Kategori</span>
                        <span class="meta-value">{{ $product->kategori }}</span>
                    </div>
                    <div class="meta-item">
                        <span class="meta-label">Harga</span>
                        <span class="meta-value">Rp {{ number_format($product->harga, 0, ',', '.') }}</span>
                    </div>
                    <div class="meta-item">
                        <span class="meta-label">Status</span>
                        <span class="meta-value">{{ $product->status }}</span>
                    </div>
                </div>
            </div>
            <div class="header-actions">
                <a href="{{ route('products.index') }}" class="btn btn-outline">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                    Lihat Produk
                </a>
            </div>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Container -->
        <div class="form-container">
            <!-- Main Form -->
            <div class="form-main">
                <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data" id="productForm">
                    @csrf
                    @method('PUT')

                    <!-- Basic Information -->
                    <div class="form-section">
                        <h3 class="section-title">Informasi Dasar</h3>
                        
                        <div class="form-group">
                            <label for="nama_produk" class="form-label required">Nama Produk</label>
                            <input type="text" id="nama_produk" name="nama_produk" class="form-input" value="{{ old('nama_produk', $product->nama_produk) }}" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="kategori" class="form-label required">Kategori</label>
                                <select id="kategori" name="kategori" class="form-select" required>
                                    <option value="">Pilih Kategori</option>
                                    @foreach($categories as $cat)
                                    <option value="{{ $cat }}" {{ old('kategori', $product->kategori) == $cat ? 'selected' : '' }}>{{ ucfirst($cat) }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="harga" class="form-label required">Harga (Rp)</label>
                                <input type="number" id="harga" name="harga" class="form-input" value="{{ old('harga', $product->harga) }}" required>
                            </div>
                        </div>

                       <div class="form-row">
                        <div class="form-group">
                            <label for="status" class="form-label required">Status</label>
                            <select id="status" name="status" class="form-select" required>
                                <option value="">Pilih Status</option>
                                @foreach($statusList as $status)
                                    <option value="{{ $status }}" {{ old('status', $product->status ?? '') == $status ? 'selected' : '' }}>{{ $status }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                        <div class="form-group">
                            <label for="deskripsi" class="form-label required">Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi" class="form-textarea" required>{{ old('deskripsi', $product->deskripsi) }}</textarea>
                        </div>
                    </div>

                    <!-- Product Images -->
                    <div class="form-section">
                        <h3 class="section-title">Gambar Produk</h3>
                        
                        <div class="form-group">
                            <label for="gambar" class="form-label">Gambar Produk (jpg, png, gif)</label>
                            
                            @if($product->gambar)
                                <div class="image-preview-container">
                                    <img src="{{ asset('storage/' . $product->gambar) }}" alt="{{ $product->nama_produk }}" class="current-image">
                                </div>
                            @else
                                <div class="image-preview-container">
                                    <div class="image-placeholder">Tidak ada gambar</div>
                                </div>
                            @endif
                            
                            <input type="file" id="gambar" name="gambar" class="form-input" accept="image/*">
                            <div class="form-help">Kosongkan jika tidak ingin mengubah gambar</div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Sidebar -->
            <div class="form-sidebar">
                <!-- Product Status -->
                <div class="sidebar-card">
                    <h3 class="card-title">Status Produk</h3>
                    <div class="product-meta">
                        <div class="meta-item">
                            <span class="meta-label">Status</span>
                            <span class="meta-value">Aktif</span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-label">Visibilitas</span>
                            <span class="meta-value">Dipublikasikan</span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-label">Dibuat</span>
                            <span class="meta-value">{{ $product->created_at ? $product->created_at->format('d M Y') : 'N/A' }}</span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-label">Diperbarui</span>
                            <span class="meta-value">{{ $product->updated_at ? $product->updated_at->format('d M Y') : 'N/A' }}</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Stats -->
                <div class="sidebar-card">
                    <h3 class="card-title">Statistik Cepat</h3>
                    <div class="product-meta">
                        <div class="meta-item">
                            <span class="meta-label">Total Penjualan</span>
                            <span class="meta-value">Rp 0</span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-label">Unit Terjual</span>
                            <span class="meta-value">0</span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-label">Dilihat</span>
                            <span class="meta-value">0</span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-label">Rating</span>
                            <span class="meta-value">-</span>
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="sidebar-card">
                    <h3 class="card-title">Informasi Produk</h3>
                    <div class="product-meta">
                        <div class="meta-item">
                            <span class="meta-label">ID Produk</span>
                            <span class="meta-value">#{{ $product->id }}</span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-label">Kategori</span>
                            <span class="meta-value">{{ ucfirst($product->kategori) }}</span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-label">Stok Tersedia</span>
                            <span class="meta-value">{{ $product->stok }} unit</span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-label">Status Stok</span>
                            <span class="meta-value">
                                @if($product->stok > 10)
                                    Stok Aman
                                @elseif($product->stok > 0)
                                    Stok Menipis
                                @else
                                    Habis
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Actions -->
        <div class="form-actions">
            <div>
                <a href="{{ route('admin.products.index') }}" class="btn btn-outline">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M19 12H5M12 19l-7-7 7-7"/>
                    </svg>
                    Batal
                </a>
            </div>
            <div style="display: flex; gap: 12px;">
                <button type="submit" class="btn btn-primary" form="productForm">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20,6 9,17 4,12"/>
                    </svg>
                    Update
                </button>
            </div>
        </div>
    </div>

    <!-- Notification -->
    <div class="notification" id="notification">
        Product updated successfully!
    </div>

    <script>
        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            initializeEventListeners();
        });

        function initializeEventListeners() {
            // Form submission
            document.getElementById('productForm').addEventListener('submit', handleFormSubmit);

            // Image preview
            const imageInput = document.getElementById('gambar');
            if (imageInput) {
                imageInput.addEventListener('change', previewImage);
            }
        }

        function handleFormSubmit(e) {
            if (!validateForm()) {
                e.preventDefault();
                showNotification('Mohon perbaiki kesalahan sebelum menyimpan.', 'error');
                return;
            }
            
            showNotification('Menyimpan perubahan...', 'warning');
        }

        function validateForm() {
            let isValid = true;
            
            // Basic validation
            const requiredFields = document.querySelectorAll('[required]');
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('error');
                    isValid = false;
                } else {
                    field.classList.remove('error');
                }
            });
            
            return isValid;
        }

        function previewImage(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.querySelector('.current-image') || document.querySelector('.image-placeholder');
                    if (preview) {
                        if (preview.tagName === 'IMG') {
                            preview.src = e.target.result;
                        } else {
                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.className = 'current-image';
                            img.alt = 'Preview';
                            preview.parentNode.replaceChild(img, preview);
                        }
                    }
                };
                reader.readAsDataURL(file);
                showNotification('Gambar dipilih untuk diupload');
            }
        }

        function showNotification(message, type = 'success') {
            const notification = document.getElementById('notification');
            notification.textContent = message;
            notification.className = `notification ${type}`;
            notification.classList.add('show');
            
            setTimeout(() => {
                notification.classList.remove('show');
            }, 3000);
        }

        function logout() {
            if (confirm('Yakin ingin logout?')) {
                showNotification('Logging out...');
                setTimeout(() => {
                    alert('Redirecting to login page...');
                }, 1000);
            }
        }
    </script>
</body>
</html>
