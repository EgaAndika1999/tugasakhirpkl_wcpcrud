<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="{{ asset(asset('assets/css/tmbhprdct.css')) }}"> <!-- Pastikan CSS Anda terhubung dengan benar -->
    <style>
        /* Styling halaman */
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Produk</h2>
        <form>
            @csrf
            <div class="form-container">
                <div class="form-image">
                    <div class="image-placeholder" id="image-placeholder">
                    </div>
                    <label for="image" class="file-input-label">Choose Product Image</label>
                    <input type="file" class="file-input" name="image" id="image" accept="image/*" onchange="previewImage(event)" required>
                    <small>Choose a product image (JPEG, PNG, JPG, GIF)</small>
                </div>
                
            
                <div class="form-details">
                    <div class="form-group">
                        <label for="name">Product Name:</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="number" name="price" id="price" value="{{ old('price') }}" required>
                    </div>
                    
                    <!-- Menambahkan Form Email -->
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                    </div>
                    
                    <!-- Menambahkan Form Nomor Telepon -->
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" required>
                    </div>
                    
                    <!-- Menambahkan Form URL Website -->
                    <div class="form-group">
                        <label for="website">Website URL:</label>
                        <input type="url" name="website" id="website" value="{{ old('website') }}" required>
                    </div>
                    
            
                    <!-- More form fields for username, email, etc. -->
            
                    <button type="submit">Add Product</button>
                </div>
            </div>
                
        <!-- Menampilkan pesan sukses jika ada -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
    
    <script>
        // JavaScript untuk preview gambar
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('image-placeholder');
                output.innerHTML = "<img src='" + reader.result + "' alt='Product Image' />";
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>
</html>
