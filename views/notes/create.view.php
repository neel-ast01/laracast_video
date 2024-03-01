<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->


<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div>
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="mt-5 md:col-span-2 md:mt-0">
                <form method="POST">
                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="space-y-6 bg-white px-4 py-6 sm:p-6">
                            <div>
                                <label for="body"
                                    class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                                <div class="mt-2">
                                    <textarea id="body" name="body" rows="5" cols="30"
                                        placeholder="Write a your notes here...."
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= $_POST['body'] ?? '' ?></textarea>
                                    <?php if (isset($errors['body'])): ?>
                                        <p class="text-red-500 text-xm mt-2">
                                            <?= $errors['body'] ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <!-- <p class="mt-3 text-sm leading-4 text-gray-600">Write a your notes here....</p> -->
                                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6s">
                                    <button type="submit"
                                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mt-5 sm:col-span-4">Create</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php require base_path('views/partials/footer.php') ?>