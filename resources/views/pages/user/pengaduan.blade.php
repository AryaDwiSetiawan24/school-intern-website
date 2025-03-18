<x-user-layout>
    <section class="py-20 bg-gray-400">
        <div class="container mx-auto px-6">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-blue-800 mb-4">Layanan Pengaduan</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Sampaikan saran, kritik, atau laporan Anda untuk membantu kami meningkatkan kualitas layanan pendidikan di SD N Gajahmungkur 01.</p>
            </div>
            
            <div class="max-w-5xl mx-auto" data-aos="fade-up">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Form Card - Take 2/3 of the space -->
                    <div class="lg:col-span-2">
                        <div class="bg-white rounded-lg shadow-lg border border-gray-200 p-8">
                            <form action="{{ route('pengaduan.store') }}" method="POST" class="space-y-6">
                                @csrf
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <!-- Nama Field -->
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama <span class="text-red-500">*</span></label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <input type="text" name="name" id="name" placeholder="Masukkan Nama Lengkap" class="pl-10 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-3 border" required>
                                        </div>
                                    </div>
                                    
                                    <!-- Email Field -->
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Surel <span class="text-red-500">*</span></label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                                </svg>
                                            </div>
                                            <input type="email" name="email" id="email" placeholder="Masukkan Alamat Email" class="pl-10 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-3 border" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Contact Number Field -->
                                <div>
                                    <label for="contact_no" class="block text-sm font-medium text-gray-700 mb-2">Nomor Kontak <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                            </svg>
                                        </div>
                                        <input type="text" name="contact_no" id="contact_no" placeholder="Masukkan Nomor Telepon" class="pl-10 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-3 border" required>
                                    </div>
                                </div>
                                
                                <!-- Description Field -->
                                <div>
                                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Pengaduan <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <div class="absolute top-3 left-3 flex items-start pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <textarea name="description" id="description" placeholder="Jelaskan secara detail mengenai pengaduan Anda" class="pl-10 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-3 border" rows="5" required></textarea>
                                    </div>
                                    <p class="mt-2 text-xs text-gray-500">Harap berikan informasi yang lengkap dan jelas untuk memudahkan kami dalam menindaklanjuti.</p>
                                </div>

                                <!-- Submit Button -->
                                <div class="flex justify-center mt-8">
                                    <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-800 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300">
                                        <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Kirim Pengaduan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Info Sidebar - Take 1/3 of the space -->
                    <div class="lg:col-span-1">
                        @if(session('success'))
                        <div class="mb-8 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-md" role="alert">
                            <div class="flex items-center">
                                <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p>{{ session('success') }}</p>
                            </div>
                        </div>
                        @endif
                        
                        <!-- Additional Information -->
                        <div class="bg-blue-50 rounded-lg p-6 border-l-4 border-blue-500 shadow-md">
                            <h3 class="text-lg font-semibold text-blue-800 mb-4">Informasi Tambahan</h3>
                            <ul class="space-y-4 text-gray-600">
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Pengaduan akan ditindaklanjuti dalam waktu 2x24 jam kerja.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Identitas pelapor akan dijaga kerahasiaannya sesuai permintaan.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Untuk pengaduan darurat, silakan hubungi langsung ke (024) 1234567.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
</div>
    </section>
</x-user-layout>