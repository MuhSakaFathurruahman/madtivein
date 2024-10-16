    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Halaman Produk</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
        />
        <script>
        tailwind.config = {
            theme: {
            extend: {
                colors: {
                primary: "#0066CC",
                secondary: "#FF6600",
                },
                fontFamily: {
                sans: ["Poppins", "sans-serif"],
                },
            },
            },
        };
        </script>
    </head>
    <body class="font-sans bg-gray-50">
        <main>
        <section class="bg-gray-100 py-20">
            <div class="container mx-auto px-4">
            <!-- Tombol Tambah Akses dan Tambah Produk -->
            <div class="flex justify-end mb-8 space-x-4">
                <button
                class="bg-secondary text-white px-4 py-2 rounded-md hover:bg-orange-600 transition"
                >
                Tambah Akses
                </button>
                <button
                class="bg-primary text-white px-4 py-2 rounded-md hover:bg-blue-700 transition"
                >
                Tambah Produk
                </button>
            </div>
            <h1
                class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-12"
            >
                Produk Kami
            </h1>

            <div class="overflow-x-auto">
                <table
                class="min-w-full bg-white shadow-md rounded-lg overflow-hidden"
                >
                <thead class="bg-gray-200">
                    <tr>
                    <th class="py-3 px-6 text-left font-semibold text-gray-700">
                        Logo
                    </th>
                    <th class="py-3 px-6 text-left font-semibold text-gray-700">
                        Nama Produk
                    </th>
                    <th class="py-3 px-6 text-center font-semibold text-gray-700">
                        Aksi
                    </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                    <td class="py-4 px-6">
                        <img
                        src="img/poto.webp"
                        alt="Logo Medisy"
                        class="w-16 h-16"
                        />
                    </td>
                    <td class="py-4 px-6 text-gray-700">Medisy</td>
                    <td class="py-4 px-6 flex justify-center space-x-4">
                        <button
                        class="bg-secondary text-white px-4 py-2 rounded-md hover:bg-orange-600 transition"
                        >
                        Detail
                        </button>
                        <button
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition"
                        >
                        Edit
                        </button>
                        <button
                        class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition"
                        >
                        Hapus
                        </button>
                    </td>
                    </tr>
                    <tr class="border-b">
                    <td class="py-4 px-6">
                        <img
                        src="img/asika.jpg"
                        alt="Logo Asika"
                        class="w-16 h-16"
                        />
                    </td>
                    <td class="py-4 px-6 text-gray-700">Asika</td>
                    <td class="py-4 px-6 flex justify-center space-x-4">
                        <button
                        class="bg-secondary text-white px-4 py-2 rounded-md hover:bg-orange-600 transition"
                        >
                        Detail
                        </button>
                        <button
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition"
                        >
                        Edit
                        </button>
                        <button
                        class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition"
                        >
                        Hapus
                        </button>
                    </td>
                    </tr>
                    <tr class="border-b">
                    <td class="py-4 px-6">
                        <img
                        src="img/nyapa.jpg"
                        alt="Logo Nyapa CRM"
                        class="w-16 h-16"
                        />
                    </td>
                    <td class="py-4 px-6 text-gray-700">Nyapa CRM</td>
                    <td class="py-4 px-6 flex justify-center space-x-4">
                        <button
                        class="bg-secondary text-white px-4 py-2 rounded-md hover:bg-orange-600 transition"
                        >
                        Detail
                        </button>
                        <button
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition"
                        >
                        Edit
                        </button>
                        <button
                        class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition"
                        >
                        Hapus
                        </button>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </section>
        </main>
     </body>
    </html>