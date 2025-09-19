<?php
// Render halaman profile dari template: gunakan pages/pages/user-profile/user-dashboard.html
?>
@php
$html = file_get_contents(public_path('dashmin/pages/pages/user-profile/user-dashboard.html'));
$replacements = [
    'href="../../../assets/' => 'href="/dashmin/assets/',
    'src="../../../assets/' => 'src="/dashmin/assets/',
    'href="../../assets/' => 'href="/dashmin/assets/',
    'src="../../assets/' => 'src="/dashmin/assets/',
    'href="assets/' => 'href="/dashmin/assets/',
    'src="assets/' => 'src="/dashmin/assets/',
];
foreach ($replacements as $from => $to) { $html = str_replace($from, $to, $html);} 
$html = str_replace('href="../../../index.html"', 'href="'.url('/dashboard').'"', $html);
$html = str_replace('href="../../pages/', 'href="/dashmin/pages/', $html);
$html = str_replace('href="pages/', 'href="/dashmin/pages/', $html);
$userName = auth()->check() ? auth()->user()->name : 'User';
$userEmail = auth()->check() ? auth()->user()->email : '';
$html = str_replace('Abrilay Khatun', e($userName), $html);
$html = str_replace('abrilakh@gmail.com', e($userEmail), $html);
@endphp
{!! $html !!}


