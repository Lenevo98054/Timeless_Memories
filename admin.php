<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Admin Panel - Timeless Photography</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #e74c3c;
            --accent-color: #3498db;
            --dark-bg: #1a202c;
            --light-bg: #f7fafc;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
        }
        
        .sidebar {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1e3a8a 100%);
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .sidebar-item {
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }
        
        .sidebar-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border-left: 3px solid var(--secondary-color);
        }
        
        .sidebar-item.active {
            background-color: rgba(255, 255, 255, 0.15);
            border-left: 3px solid var(--secondary-color);
        }
        
        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        
        .btn-primary {
            background-color: var(--secondary-color);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #c0392b;
            transform: translateY(-2px);
        }
        
        .btn-secondary {
            background-color: var(--accent-color);
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }
        
        .table-row:hover {
            background-color: #f8fafc;
        }
        
        .admin-avatar {
            border: 3px solid var(--secondary-color);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="text-gray-800">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="sidebar text-white w-64 space-y-6 py-7 px-4 fixed h-full">
            <div class="text-center space-y-3">
                <img alt="Admin profile picture" class="admin-avatar w-20 h-20 mx-auto rounded-full" src="data:image/png;base64,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"/>
                <h1 class="text-xl font-semibold">Admin</h1>
                <p class="text-sm text-gray-300">Timeless Photography</p>
            </div>
            <nav class="space-y-2">
                <a class="sidebar-item active flex items-center space-x-3 py-3 px-4 rounded cursor-pointer" onclick="showSection('uploadPhotoSection')">
                    <i class="fas fa-upload text-gray-300"></i>
                    <span>Upload Photo</span>
                </a>
                <a class="sidebar-item flex items-center space-x-3 py-3 px-4 rounded cursor-pointer" onclick="showSection('addPhotographerSection')">
                    <i class="fas fa-user-plus text-gray-300"></i>
                    <span>Add Photographer</span>
                </a>
                <a class="sidebar-item flex items-center space-x-3 py-3 px-4 rounded cursor-pointer" onclick="showSection('viewContactDetailsSection')">
                    <i class="fas fa-envelope text-gray-300"></i>
                    <span>View Inquiries</span>
                </a>
                <a class="sidebar-item flex items-center space-x-3 py-3 px-4 rounded hover:text-white" href="logout.php">
                    <i class="fas fa-sign-out-alt text-gray-300"></i>
                    <span>Logout</span>
                </a>
            </nav>
        </div>
        
        <!-- Main content -->
        <div class="flex-1 p-8 ml-64">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">
                    <span class="text-secondary-500">Admin</span> Dashboard
                </h1>
                <div class="text-sm text-gray-500">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <span id="currentDate"></span>
                </div>
            </div>
            
            <!-- Upload Photo Section -->
            <div class="card p-6 mb-8" id="uploadPhotoSection">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800">
                        <i class="fas fa-upload text-secondary-500 mr-2"></i>
                        Upload New Photo
                    </h2>
                    <div class="text-sm text-gray-500">
                        <i class="fas fa-info-circle mr-1"></i>
                        Max size: 5MB
                    </div>
                </div>
                
                <form action="upload.php" enctype="multipart/form-data" id="uploadForm" method="post" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" for="photo">
                                Photo Upload
                            </label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <div class="flex text-sm text-gray-600">
                                        <label class="relative cursor-pointer bg-white rounded-md font-medium text-secondary-600 hover:text-secondary-500 focus-within:outline-none">
                                            <span>Upload a file</span>
                                            <input class="sr-only" id="photo" name="photo" required type="file"/>
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">
                                        PNG, JPG, GIF up to 5MB
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2" for="name">
                                    Photo Name
                                </label>
                                <input class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-secondary-500 focus:border-secondary-500" id="name" name="name" required type="text" placeholder="Enter photo name"/>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2" for="category">
                                    Category
                                </label>
                                <select class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-secondary-500 focus:border-secondary-500" id="category" name="category" required>
                                    <option value="" disabled selected>Select a category</option>
                                    <option value="nature">Nature</option>
                                    <option value="portrait">Portrait</option>
                                    <option value="wedding">Wedding</option>
                                    <option value="animals">Animals</option>
                                    <option value="event">Event</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex justify-end">
                        <button class="btn-primary text-white font-medium py-2 px-6 rounded-md shadow-sm" type="submit">
                            <i class="fas fa-cloud-upload-alt mr-2"></i>
                            Upload Photo
                        </button>
                    </div>
                </form>
                
                <!-- Photo Table -->
                <div class="mt-12">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-semibold text-gray-800">
                            <i class="fas fa-images text-secondary-500 mr-2"></i>
                            Photo Gallery
                        </h2>
                        <div class="text-sm text-gray-500">
                            Showing <?php include "fetch_photos.php"; ?> photos
                        </div>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Preview
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Category
                                    </th>
                                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200" id="photoTable">
                                <?php include "fetch_photos.php"; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Add Photographer Section -->
            <div class="card p-6 mb-8 hidden" id="addPhotographerSection">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">
                    <i class="fas fa-user-plus text-secondary-500 mr-2"></i>
                    Add New Photographer
                </h2>
                
                <form action="add_photography.php" enctype="multipart/form-data" id="addPhotographerForm" method="post" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" for="photographer_name">
                                Full Name
                            </label>
                            <input class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-secondary-500 focus:border-secondary-500" id="photographer_name" name="photographer_name" required type="text" placeholder="Enter photographer's name"/>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" for="photographer_email">
                                Email Address
                            </label>
                            <input class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-secondary-500 focus:border-secondary-500" id="photographer_email" name="photographer_email" required type="email" placeholder="Enter photographer's email"/>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" for="photographer_speciality">
                                Speciality
                            </label>
                            <input class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-secondary-500 focus:border-secondary-500" id="photographer_speciality" name="photographer_speciality" required type="text" placeholder="E.g., Wedding, Portrait, Nature"/>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" for="photographer_photo">
                                Profile Picture
                            </label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <div class="flex text-sm text-gray-600">
                                        <label class="relative cursor-pointer bg-white rounded-md font-medium text-secondary-600 hover:text-secondary-500 focus-within:outline-none">
                                            <span>Upload photo</span>
                                            <input class="sr-only" id="photographer_photo" name="photographer_photo" required type="file"/>
                                        </label>
                                    </div>
                                    <p class="text-xs text-gray-500">
                                        PNG, JPG up to 2MB
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex justify-end">
                        <button class="btn-primary text-white font-medium py-2 px-6 rounded-md shadow-sm" type="submit">
                            <i class="fas fa-save mr-2"></i>
                            Save Photographer
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- View Contact Details Section -->
            <div class="card p-6 mb-8 hidden" id="viewContactDetailsSection">
                <div class="text-center">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">
                        <i class="fas fa-envelope text-secondary-500 mr-2"></i>
                        Client Inquiries
                    </h2>
                    <p class="text-gray-600 mb-6">View and manage all client inquiries and messages</p>
                    <a class="btn-secondary inline-flex items-center text-white font-medium py-2 px-6 rounded-md shadow-sm" href="inquiry_display.php">
                        <i class="fas fa-external-link-alt mr-2"></i>
                        Open Inquiry Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function showSection(sectionId) {
            // Hide all sections
            document.getElementById('uploadPhotoSection').classList.add('hidden');
            document.getElementById('addPhotographerSection').classList.add('hidden');
            document.getElementById('viewContactDetailsSection').classList.add('hidden');
            
            // Show selected section
            document.getElementById(sectionId).classList.remove('hidden');
            
            // Update active state in sidebar
            const sidebarItems = document.querySelectorAll('.sidebar-item');
            sidebarItems.forEach(item => {
                item.classList.remove('active');
                if (item.getAttribute('onclick')?.includes(sectionId)) {
                    item.classList.add('active');
                }
            });
        }
        
        function deletePhoto(id) {
            if (confirm("Are you sure you want to delete this photo?")) {
                window.location.href = `delete.php?id=${id}`;
            }
        }
        
        // Display current date
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        document.getElementById('currentDate').textContent = new Date().toLocaleDateString('en-US', options);
        
        // Show upload section by default
        document.addEventListener('DOMContentLoaded', function() {
            showSection('uploadPhotoSection');
        });
    </script>
</body>
</html>