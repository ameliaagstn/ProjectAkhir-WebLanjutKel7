<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php 
// Ambil objek konfigurasi
$config = config('Auth');
?>
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">

    <img class="mx-auto h-20 w-auto rounded-full" src="<?=base_url('assets/img/logo_antiqu.png') ?>" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900"><?=lang('Auth.loginTitle')?></h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
  <?= view('Myth\Auth\Views\_message_block') ?>

    <form class="space-y-6" action="<?= url_to('login') ?>" method="post">
						<?= csrf_field() ?>
<?php if ($config->validFields === ['email']): ?>
      <div>
      
        <label for="login" class="block text-sm font-medium leading-6 text-gray-900"><!-- <?=lang('Auth.email')?> --></label>
        <div class="mt-2">
          <input name="login" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
            placeholder="<?=lang('Auth.email')?>">
            <div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
        </div>
      </div>
<?php else: ?>
  <div class="form-group">
 
							<label for="email" class="block text-sm font-medium leading-6 text-gray-900"> <?=lang('Auth.emailOrUsername')?></label>
							<input type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
<?php endif; ?>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900"><?=lang('Auth.password')?></label>
          <div class="font-semibold text-indigo-600 hover:text-indigo-500"><?php if ($config->activeResetter): ?>
					<p><a href="<?= url_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a></p>
<?php endif; ?>
            <!-- <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Lupa password?</a> -->
          </div>
        </div>
        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><?=lang('Auth.loginAction')?></button>
      </div>
    </form>
    
      <?php if ($config->allowRegistration) : ?>
        <p class="mt-10 text-center text-sm text-gray-500">
      Belum punya akun?
      <a href="<?= url_to('register') ?>" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Create Account</a>
<?php endif; ?>
  </div>
</div>
</body>
</html>