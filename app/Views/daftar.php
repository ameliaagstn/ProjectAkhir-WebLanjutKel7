<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src="https://cdn.tailwindcss.com"></script>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-20 w-auto rounded-full" src="<?= base_url('assets/img/logo_antiqu.png') ?>" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900"><?= lang('Auth.register') ?></h2>
  </div>
  <?= view('Myth\Auth\Views\_message_block') ?>
  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form action="<?= url_to('register') ?>" method="post" class="space-y-6">
        <?= csrf_field() ?>
        <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900"><?= lang('Auth.email') ?></label>
            <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
            </div>
        </div>
        <div>
            <label for="username" class="block text-sm font-medium leading-6 text-gray-900"><?= lang('Auth.username') ?></label>
            <div class="mt-2">
                <input id="username" name="username" type="text" autocomplete="username" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
            </div>
        </div>
        <div>
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900"><?= lang('Auth.password') ?></label>
            <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="new-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
            </div>
        </div>
        <div>
            <label for="pass_confirm" class="block text-sm font-medium leading-6 text-gray-900"><?= lang('Auth.repeatPassword') ?></label>
            <div class="mt-2">
                <input id="pass_confirm" name="pass_confirm" type="password" autocomplete="new-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>">
            </div>
        </div>
        <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><?= lang('Auth.register') ?></button>
        </div>
    </form>
    <p class="mt-10 text-center text-sm text-gray-500">
       Sudah mendaftar?
       <a href="<?= url_to('login') ?>" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Login</a>
    </p>
  </div>
</div>

</body>
</html>