<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product - Stilo Admin</title>
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

        .error-message {
            color: #ef4444;
            font-size: 12px;
            margin-top: 4px;
        }

        /* Image Upload */
        .image-upload-area {
            border: 2px dashed #d1d5db;
            border-radius: 12px;
            padding: 40px 20px;
            text-align: center;
            transition: all 0.2s;
            cursor: pointer;
            background: #f9fafb;
        }

        .image-upload-area:hover {
            border-color: #667eea;
            background: #f0f4ff;
        }

        .image-upload-area.dragover {
            border-color: #667eea;
            background: #e0e7ff;
        }

        .upload-icon {
            width: 48px;
            height: 48px;
            background: #e5e7eb;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
            color: #6b7280;
        }

        .upload-text {
            font-size: 16px;
            font-weight: 500;
            color: #374151;
            margin-bottom: 4px;
        }

        .upload-subtext {
            font-size: 14px;
            color: #6b7280;
        }

        .image-preview {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            gap: 16px;
            margin-top: 16px;
        }

        .preview-item {
            position: relative;
            aspect-ratio: 1;
            border-radius: 8px;
            overflow: hidden;
            background: #f3f4f6;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .preview-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .remove-image {
            position: absolute;
            top: 4px;
            right: 4px;
            background: #ef4444;
            color: white;
            border: none;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
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

        .btn-success {
            background: #10b981;
            color: white;
        }

        .btn-success:hover {
            background: #059669;
            transform: translateY(-1px);
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
                padding: 20px;
            }

            .form-main,
            .sidebar-card {
                padding: 20px;
            }
        }

        /* Loading State */
        .btn.loading {
            opacity: 0.7;
            cursor: not-allowed;
        }

        .btn.loading::before {
            content: '';
            width: 16px;
            height: 16px;
            border: 2px solid transparent;
            border-top: 2px solid currentColor;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-right: 8px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
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
            <span>Tambah Produk Baru</span>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <h1 class="page-title">Tambah Produk Baru</h1>
            <p class="page-subtitle">Tambahkan produk baru ke inventori Anda</p>
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
                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" id="productForm">
                    @csrf

                    <!-- Basic Information -->
                    <div class="form-section">
                        <h3 class="section-title">Informasi Dasar</h3>
                        
                        <div class="form-group">
                            <label for="nama_produk" class="form-label required">Nama Produk</label>
                            <input type="text" id="nama_produk" name="nama_produk" class="form-input" value="{{ old('nama_produk') }}" placeholder="Masukkan nama produk" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="kategori" class="form-label required">Kategori</label>
                                <select id="kategori" name="kategori" class="form-select" required>
                                    <option value="">Pilih Kategori</option>
                                    @foreach($categories as $cat)
                                    <option value="{{ $cat }}" {{ old('kategori') == $cat ? 'selected' : '' }}>{{ ucfirst($cat) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="harga" class="form-label required">Harga (Rp)</label>
                                <input type="number" id="harga" name="harga" class="form-input" value="{{ old('harga') }}" placeholder="0" required>
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
                            <textarea id="deskripsi" name="deskripsi" class="form-textarea" placeholder="Masukkan deskripsi produk" required>{{ old('deskripsi') }}</textarea>
                        </div>
                    </div>

                    <!-- Product Images -->
                    <div class="form-section">
                        <h3 class="section-title">Gambar Produk</h3>
                        
                        <div class="form-group">
                            <label for="gambar" class="form-label">Gambar Produk (jpg, png, gif)</label>
                            <div class="image-upload-area" id="imageUploadArea">
                                <div class="upload-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                                        <circle cx="8.5" cy="8.5" r="1.5"/>
                                        <polyline points="21,15 16,10 5,21"/>
                                    </svg>
                                </div>
                                <div class="upload-text">Klik untuk upload atau drag and drop</div>
                                <div class="upload-subtext">PNG, JPG, GIF hingga 10MB</div>
                            </div>
                            <input type="file" id="gambar" name="gambar" class="form-input" accept="image/*" style="display: none;">
                            <div class="image-preview" id="imagePreview"></div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Sidebar -->
            <div class="form-sidebar">
                <!-- Product Status -->
                <div class="sidebar-card">
                    <h3 class="card-title">Status Produk</h3>
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <div style="color: #10b981; font-weight: 600;">Aktif</div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Visibilitas</label>
                        <div style="color: #667eea; font-weight: 600;">Akan Dipublikasikan</div>
                    </div>
                </div>

                <!-- Quick Info -->
                <div class="sidebar-card">
                    <h3 class="card-title">Informasi Cepat</h3>
                    <div style="font-size: 14px; color: #666; line-height: 1.6;">
                        <p><strong>Tips:</strong></p>
                        <ul style="margin-left: 16px; margin-top: 8px;">
                            <li>Gunakan nama produk yang jelas dan deskriptif</li>
                            <li>Pastikan harga sudah sesuai dengan market</li>
                            <li>Upload gambar berkualitas tinggi</li>
                            <li>Isi deskripsi dengan detail yang menarik</li>
                        </ul>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="sidebar-card">
                    <h3 class="card-title">Aksi Cepat</h3>
                    <div style="display: flex; flex-direction: column; gap: 12px;">
                        <button type="button" class="btn btn-outline" onclick="previewProduct()">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                            Preview
                        </button>
                        <button type="button" class="btn btn-outline" onclick="saveDraft()">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/>
                                <polyline points="17,21 17,13 7,13 7,21"/>
                                <polyline points="7,3 7,8 15,8"/>
                            </svg>
                            Simpan Draft
                        </button>
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
                <button type="submit" class="btn btn-success" form="productForm" id="submitBtn">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20,6 9,17 4,12"/>
                    </svg>
                    Simpan
                </button>
            </div>
        </div>
    </div>

    <!-- Notification -->
    <div class="notification" id="notification">
        Product created successfully!
    </div>

    <script>
        // Global variables
        let uploadedImage = null;

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            initializeEventListeners();
        });

        function initializeEventListeners() {
            // Form submission
            document.getElementById('productForm').addEventListener('submit', handleFormSubmit);

            // Image upload
            const imageUploadArea = document.getElementById('imageUploadArea');
            const imageInput = document.getElementById('gambar');

            imageUploadArea.addEventListener('click', () => imageInput.click());
            imageUploadArea.addEventListener('dragover', handleDragOver);
            imageUploadArea.addEventListener('drop', handleDrop);
            imageInput.addEventListener('change', handleImageSelect);

            // Real-time validation
            document.getElementById('nama_produk').addEventListener('blur', validateProductName);
            document.getElementById('kategori').addEventListener('change', validateCategory);
            document.getElementById('harga').addEventListener('blur', validatePrice);
            document.getElementById('stok').addEventListener('blur', validateStock);
            document.getElementById('deskripsi').addEventListener('blur', validateDescription);
        }

        // Form submission
        function handleFormSubmit(e) {
            if (!validateForm()) {
                e.preventDefault();
                showNotification('Mohon perbaiki kesalahan sebelum menyimpan.', 'error');
                return;
            }
            
            const submitBtn = document.getElementById('submitBtn');
            submitBtn.classList.add('loading');
            submitBtn.disabled = true;
            
            showNotification('Menyimpan produk...', 'warning');
        }

        // Validation functions
        function validateForm() {
            let isValid = true;
            
            isValid &= validateProductName();
            isValid &= validateCategory();
            isValid &= validatePrice();
            isValid &= validateStock();
            isValid &= validateDescription();
            
            return isValid;
        }

        function validateProductName() {
            const input = document.getElementById('nama_produk');
            
            if (!input.value.trim()) {
                input.classList.add('error');
                return false;
            }
            
            input.classList.remove('error');
            return true;
        }

        function validateCategory() {
            const input = document.getElementById('kategori');
            
            if (!input.value) {
                input.classList.add('error');
                return false;
            }
            
            input.classList.remove('error');
            return true;
        }

        function validatePrice() {
            const input = document.getElementById('harga');
            
            if (!input.value || parseFloat(input.value) <= 0) {
                input.classList.add('error');
                return false;
            }
            
            input.classList.remove('error');
            return true;
        }

        function validateStock() {
            const input = document.getElementById('stok');
            
            if (!input.value || parseInt(input.value) < 0) {
                input.classList.add('error');
                return false;
            }
            
            input.classList.remove('error');
            return true;
        }

        function validateDescription() {
            const input = document.getElementById('deskripsi');
            
            if (!input.value.trim()) {
                input.classList.add('error');
                return false;
            }
            
            input.classList.remove('error');
            return true;
        }

        // Image handling
        function handleDragOver(e) {
            e.preventDefault();
            e.currentTarget.classList.add('dragover');
        }

        function handleDrop(e) {
            e.preventDefault();
            e.currentTarget.classList.remove('dragover');
            const files = Array.from(e.dataTransfer.files);
            if (files.length > 0 && files[0].type.startsWith('image/')) {
                processImage(files[0]);
            }
        }

        function handleImageSelect(e) {
            const file = e.target.files[0];
            if (file && file.type.startsWith('image/')) {
                processImage(file);
            }
        }

        function processImage(file) {
            uploadedImage = file;
            
            const reader = new FileReader();
            reader.onload = function(e) {
                addImagePreview(e.target.result);
            };
            reader.readAsDataURL(file);
        }

        function addImagePreview(src) {
            const preview = document.getElementById('imagePreview');
            preview.innerHTML = `
                <div class="preview-item">
                    <img src="${src}" alt="Preview" class="preview-image">
                    <button type="button" class="remove-image" onclick="removeImage()">×</button>
                </div>
            `;
        }

        function removeImage() {
            uploadedImage = null;
            document.getElementById('imagePreview').innerHTML = '';
            document.getElementById('gambar').value = '';
        }

        // Utility functions
        function showNotification(message, type = 'success') {
            const notification = document.getElementById('notification');
            notification.textContent = message;
            notification.className = `notification ${type}`;
            notification.classList.add('show');
            
            setTimeout(() => {
                notification.classList.remove('show');
            }, 3000);
        }

        function saveDraft() {
            showNotification('Draft disimpan!');
        }

        function previewProduct() {
            alert('Preview produk akan dibuka di tab baru');
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