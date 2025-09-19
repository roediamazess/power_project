<?php
// Render HTML template Dashmin persis sama, tapi perbaiki path aset & link agar tidak 404.
?>
@php
$html = file_get_contents(public_path('dashmin/index.html'));

// 1) Arahkan asset relatif ke /dashmin/assets
$replacements = [
    'href="assets/' => 'href="/dashmin/assets/',
    'src="assets/' => 'src="/dashmin/assets/',
];
foreach ($replacements as $from => $to) {
    $html = str_replace($from, $to, $html);
}

// 2) Perbaiki tautan halaman internal agar tetap di dalam folder dashmin
$html = str_replace('href="pages/', 'href="/dashmin/pages/', $html);

// 3) Logo/tautan ke index.html diarahkan ke route dashboard
$html = str_replace('href="index.html"', 'href="'.url('/dashboard').'"', $html);

// 4) Tampilkan nama & email user terautentikasi (tanpa mengubah layout)
$userName = auth()->check() ? auth()->user()->name : 'User';
$userEmail = auth()->check() ? auth()->user()->email : '';
$html = str_replace('Abrilay Khatun', e($userName), $html);
$html = str_replace('abrilakh@gmail.com', e($userEmail), $html);

// 5) Ganti link "Log Out" menjadi form POST ke /logout agar aman CSRF
$logoutForm = '<form id="logout-form" action="'.url('/logout').'" method="POST" style="display:inline">'
    .csrf_field().
    '<button type="submit" class="btn btn-link p-0" style="color:inherit;text-decoration:none">Log Out</button>'
    .'</form>';
// Ganti link menu ke route Laravel
$html = str_replace('My Profile', '<a href="'.url('/profile').'">My Profile</a>', $html);
$html = str_replace('Task', '<a href="'.url('/tasks').'">Task</a>', $html);
$html = str_replace('Settings', '<a href="'.url('/settings').'">Settings</a>', $html);

$html = str_replace('<a href="#">Log Out</a>', $logoutForm, $html);
@endphp
{!! $html !!}


