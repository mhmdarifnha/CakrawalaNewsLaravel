<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <h1>test about page</h1>
    <h3>Halo aku {{ $name }}</h3> --}}
    <section class="bg-gray-50 py-16">
        <div class="max-w-3xl mx-auto px-6">
            <h1 class="text-3xl font-bold text-gray-900 text-center mb-6">Tentang CakrawalaNews</h1>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-gray-800">Profil Website</h2>
                <p class="mt-2 text-gray-600">
                    CakrawalaNews adalah portal berita independen yang menyajikan berita terbaru dengan akurasi tinggi.
                    Kami berkomitmen untuk memberikan informasi yang objektif, aktual, dan terpercaya.
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md mt-6">
                <h2 class="text-2xl font-semibold text-gray-800">Visi & Misi</h2>
                <p class="mt-2 text-gray-600">
                    <strong>Visi:</strong> Menjadi sumber berita terpercaya yang memberikan wawasan luas bagi
                    masyarakat.
                </p>
                <p class="mt-2 text-gray-600">
                    <strong>Misi:</strong>
                </p>
                <ul class="list-disc list-inside text-gray-600">
                    <li>Menyajikan berita secara objektif dan berdasarkan fakta.</li>
                    <li>Mengedukasi masyarakat dengan informasi yang bermanfaat.</li>
                    <li>Menjaga kebebasan pers dan etika jurnalistik.</li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md mt-6">
                <h2 class="text-2xl font-semibold text-gray-800">Kontak & Media Sosial</h2>
                <p class="mt-2 text-gray-600">
                    Hubungi kami melalui email di <a href="mailto:muhamadarifulinnuha@gmail.com"
                        class="text-blue-500 underline">muhamadarifulinnuha@gmail.com</a>
                    atau ikuti media sosial kami:
                </p>
                <div class="flex space-x-4 mt-4">
                    <a href="https://instagram.com/mhmdarifnha"
                        class="text-blue-600 hover:text-[#E4405F] transition-all duration-150 ease-in-out">
                        Instagram
                    </a>
                    <a href="https://github.com/mhmdarifnha"
                        class="text-blue-600 hover:text-[#211F1F] transition-all duration-150 ease-in-out">
                        Github
                    </a>
                    <a href="https://youtube.com/@mhmdarifnha"
                        class="text-blue-600 hover:text-[#FF0000] transition-all duration-150 ease-in-out">
                        YouTube
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
