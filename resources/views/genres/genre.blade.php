@extends('_layouts.main')

@section('content')
<main>
                    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                        <!-- Breadcrumb Start -->
                        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                                Genres
                            </h2>

                            <nav>
                                <a
                                    href="/movies/create"
                                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                                >
                                    Create
                                </a>
                            </nav>
                        </div>
                        <!-- Breadcrumb End -->

                        <!-- ====== Table Section Start -->
                        <div class="flex flex-col gap-10">
                            <!-- ====== Table Two Start -->
                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                    <div class="col-span-3 flex items-center">
                                        <p class="font-medium">Id Anime</p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <p class="font-medium">Name</p>
                                    </div>
                                    <div class="col-span-3 flex items-center">
                                        <p class="font-medium">Description</p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <p class="font-medium">Actions</p>
                                    </div>
                                
                                </div>

                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                    <div class="col-span-3 flex items-center">
                                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                            <div class="w-12 rounded-md">
                                                <img src="src/images/movie/movie-01.jpg" alt="Product" />
                                            </div>
                                            <p class="text-sm font-medium text-black dark:text-white">
                                                01
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-span-1 items-center sm:flex">
                                        <p class="text-sm font-medium text-black dark:text-white">
                                            Jojo Adventure
                                        </p>
                                    </div>
                                    <div class="col-span-3 flex items-center">
                                        <p class="text-sm font-medium text-black dark:text-white">
                                            JoJo no Kimyō na Bōken (Jepang: ジョジョの奇妙な冒険), yang diterbitkan di Indonesia dengan judul JoJo's Bizarre Adventure, adalah sebuah seri manga Jepang yang ditulis dan diilustrasikan oleh Hirohiko Araki. Manga ini pada awalnya dimuat di majalah Weekly Shōnen Jump sejak tahun 1987 hingga 2004 sebelum dipindahkan ke majalah seinen bulanan Ultra Jump pada tahun 2005. Plot cerita yang sekarang berlangsung, JoJolands, telah dimulai dari Februari 2023. JoJo no Kimyō na Bōken saat ini merupakan seri manga terbesar kedua milik Shueisha dan bab-bab tunggalnya telah dibundel menjadi 123 volume tankōbon, dan masih akan terus berlanjut.
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <div class="flex items-center space-x-1">
                                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                    <div class="col-span-3 flex items-center">
                                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                            <div class="w-12 rounded-md">
                                                <img src="src/images/movie/movie-02.jpg" alt="Product" />
                                            </div>
                                            <p class="text-sm font-medium text-black dark:text-white">
                                                02
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-span-1 items-center sm:flex">
                                        <p class="text-sm font-medium text-black dark:text-white">
                                            Noragami
                                        </p>
                                    </div>
                                    <div class="col-span-3 flex items-center">
                                        <p class="text-sm font-medium text-black dark:text-white">
                                        Noragami (ノラガミ) adalah sebuah serial manga Jepang karya Adachitoka yang memulai serialisasi di Monthly Shōnen Magazine pada Januari 2011. Sebuah adaptasi anime yang diproduksi oleh Bones tayang di Jepang sejak 5 Januari hingga 23 Maret 2014. Season kedua dengan judul Noragami Aragoto tayang di Jepang sejak 2 Oktober hingga 25 Desember 2015.
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <div class="flex items-center space-x-1">
                                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                    <div class="col-span-3 flex items-center">
                                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                            <div class="w-12 rounded-md">
                                                <img src="src/images/movie/movie-03.jpg" alt="Product" />
                                            </div>
                                            <p class="text-sm font-medium text-black dark:text-white">
                                                03
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-span-1 items-center sm:flex">
                                        <p class="text-sm font-medium text-black dark:text-white">
                                            Wind Breaker
                                        </p>
                                    </div>
                                    <div class="col-span-3 flex items-center">
                                        <p class="text-sm font-medium text-black dark:text-white">
                                        Webtoon 'Wind Breaker' adalah tentang Jay saat dia melakukan perjalanan dalam hidupnya. Seiring berjalannya cerita, kita akan bertemu dengan teman-teman, saingan, cinta, dan berbagai macam petualangan yang ua jalani.
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <div class="flex items-center space-x-1">
                                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            

                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                        <div class="col-span-3 flex items-center">
                                            <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                                <div class="w-12 rounded-md">
                                                    <img src="src/images/movie/movie-04.jpg" alt="Product" />
                                                </div>
                                                <p class="text-sm font-medium text-black dark:text-white">
                                                    04
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-span-1 items-center sm:flex">
                                            <p class="text-sm font-medium text-black dark:text-white">
                                                SPY X Family
                                            </p>
                                        </div>
                                        <div class="col-span-3 flex items-center">
                                            <p class="text-sm font-medium text-black dark:text-white">
                                            Spy x Family mengisahkan tentang agen mata-mata terampil bernama sandi 'Twillight' yang menjalankan Operasi Strix, yakni misi penting terkait perdamaian antarnegara mencakup Westalis di barat dan Ostania di timur.
                                            </p>
                                        </div>
                                        <div class="col-span-1 flex items-center">
                                            <div class="flex items-center space-x-1">
                                                <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                                                <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                                            </div>
                                        </div>
                                </div>

                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                        <div class="col-span-3 flex items-center">
                                            <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                                <div class="w-12 rounded-md">
                                                    <img src="src/images/movie/movie-05.jpg" alt="Product" />
                                                </div>
                                                <p class="text-sm font-medium text-black dark:text-white">
                                                    05
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-span-1 items-center sm:flex">
                                            <p class="text-sm font-medium text-black dark:text-white">
                                                One Piece
                                            </p>
                                        </div>
                                        <div class="col-span-3 flex items-center">
                                            <p class="text-sm font-medium text-black dark:text-white">
                                            One Piece (Jepang: ワンピース, Hepburn: Wan Pīsu) adalah sebuah seri manga Jepang yang ditulis dan diilustrasikan oleh Eiichiro Oda. Manga ini telah dimuat di majalah Weekly Shōnen Jump milik Shueisha sejak tanggal 22 Juli 1997, dan telah dibundel menjadi 105 volume tankōbon hingga Maret 2023. Ceritanya mengisahkan petualangan Monkey D. Luffy, seorang anak laki-laki yang memiliki kemampuan tubuh elastis seperti karet setelah memakan Buah Iblis secara tidak disengaja. Luffy bersama kru bajak lautnya, yang dinamakan Bajak Laut Topi Jerami, menjelajahi Grand Line untuk mencari harta karun terbesar di dunia yang dikenal sebagai "One Piece" dalam rangka untuk menjadi Raja Bajak Laut yang berikutnya.
                                            </p>
                                        </div>
                                        <div class="col-span-1 flex items-center">
                                            <div class="flex items-center space-x-1">
                                                <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                                                <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                                            </div>
                                        </div>
                                </div>
                            </div>

                            <!-- ====== Table Two End -->
                        </div>
                        <!-- ====== Table Section End -->
                    </div>
                </main>
@endsection