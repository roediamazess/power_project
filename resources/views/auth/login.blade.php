<?php
// Tampilkan halaman login template apa adanya, tapi form diarahkan ke route Laravel.
?>
@php
$html = file_get_contents(public_path('dashmin/pages/pages/authentication/login.html'));

// Form action + CSRF
$html = str_replace('action="#"', 'action="'.url('/login').'" method="POST"', $html);
$csrf = csrf_field();
$html = preg_replace('/<form[^>]*action=\"'.preg_quote(url('/login'), '/').'\"[^>]*>/', "$0$csrf", $html, 1);

// Asset path fix ke /dashmin/assets
$replacements = [
    'href="../../../assets/' => 'href="/dashmin/assets/',
    'src="../../../assets/' => 'src="/dashmin/assets/',
    'href="assets/' => 'href="/dashmin/assets/',
    'src="assets/' => 'src="/dashmin/assets/',
];
foreach ($replacements as $from => $to) {
    $html = str_replace($from, $to, $html);
}

// Tambah name supaya request terbaca
$html = str_replace('id="email"', 'id="email" name="email"', $html);
$html = str_replace('id="password"', 'id="password" name="password"', $html);
$html = str_replace('id="checkbox"', 'id="checkbox" name="remember"', $html);
@endphp
{!! $html !!}


