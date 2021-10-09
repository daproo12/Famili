<?php $__env->startSection('dashboard'); ?>    
  <div class="container px-6 mx-auto grid">
    <h2
      class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
      Verifikasi Akun
    </h2>
    <div class="w-full overflow-hidden rounded-lg">
      <div class="w-full overflow-x-auto">
        <div class="grid mb-8 xl:grid-cols-3" style="gap: 0.5rem;">
          <!-- Card -->
          <div
            class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
          >
            <div
              class="relative hidden h-12 w-12 mr-6 rounded-full md:block"
            >
              <img
                class="object-cover w-full h-full rounded-full"
                src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                alt=""
                loading="lazy"
              />
              <div
                class="absolute inset-0 rounded-full shadow-inner"
                aria-hidden="true"
              ></div>
            </div>
            <div>
              <p
                class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-200"
              >
                Hans Burger
              </p>
            </div>
            <div
              class="text-gray-500 focus-within:text-green-500" style="margin-left: auto"
            >
              <a href="/detail_verifikasi">
                <button
                  class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-500 border border-transparent rounded-md active:bg-green-500 hover:bg-green-700 focus:outline-none focus:shadow-outline-green"
                >
                  View More
                </button>
              </a>
            </div>            
          </div>          
        </div>      
      </div>
      <?php echo $__env->make("partial.pagination", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\belajar\project_PPL-laravel\resources\views/verifikasi.blade.php ENDPATH**/ ?>