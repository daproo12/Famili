

<?php $__env->startSection('halaman_awal'); ?>
  <div class="flex flex-col overflow-y-auto md:flex-row">
    <div class="h-32 md:h-auto md:w-1/2">
      <img
        aria-hidden="true"
        class="object-cover w-full h-full dark:hidden"
        src="../assets/img/create-account-office.jpeg"
        alt="Office"
      />
      <img
        aria-hidden="true"
        class="hidden object-cover w-full h-full dark:block"
        src="../assets/img/create-account-office-dark.jpeg"
        alt="Office"
      />
    </div>
    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
      <div class="w-full">
        <h1
          class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
        >
          Buat Akun Baru
        </h1>
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Email</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-500 focus:outline-none focus:shadow-outline-green-5ark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Jane Doe"
          />
        </label>
        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Password</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-500 focus:outline-none focus:shadow-outline-green-5ark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="***************"
            type="password"
          />
        </label>
        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Konfirmasi Password</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-500 focus:outline-none focus:shadow-outline-green-5ark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="***************"
            type="password"
          />
        </label>
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Nama</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-500 focus:outline-none focus:shadow-outline-green-5ark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Jane Doe"
          />
        </label>
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">NIK</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-500 focus:outline-none focus:shadow-outline-green-5ark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Jane Doe"
          />
        </label>
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Alamat</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-500 focus:outline-none focus:shadow-outline-green-5ark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Jane Doe"
          />
        </label>
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Desa</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-500 focus:outline-none focus:shadow-outline-green-5ark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Jane Doe"
          />
        </label>
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Kecamatan</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-500 focus:outline-none focus:shadow-outline-green-5ark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Jane Doe"
          />
        </label>
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">No Telepon</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-500 focus:outline-none focus:shadow-outline-green-5ark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Jane Doe"
          />
        </label>

        <div class="flex mt-6 text-sm">
          <label class="flex items-center dark:text-gray-400">
            <input
              type="checkbox"
              class="text-green-500 form-checkbox focus:border-green-500 focus:outline-none focus:shadow-outline-green-5ark:focus:shadow-outline-gray"
            />
            <span class="ml-2">
              Menyetujui
              <span class="underline">Syarat dan Kebijakan</span>
            </span>
          </label>
        </div>

        <!-- You should use a button here, as the anchor is only used for the example  -->
        <a
          class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-teal-500 border border-transparent rounded-lg active:bg-teal-500 hover:bg-teal-600 focus:outline-none focus:shadow-outline-green"
          href="/login"
        >
          Daftar
        </a>

        <hr class="my-8" />

        <p class="mt-4">
          <a
            class="text-sm font-medium text-green-500 dark:text-green-500 hover:underline"
            href="/login"
          >
            Sudah memiliki Akun? Login
          </a>
        </p>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\belajar\project_PPL-laravel\resources\views/daftar.blade.php ENDPATH**/ ?>