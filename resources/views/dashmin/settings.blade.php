<?php
// Render halaman account settings dari template: pages/pages/account-setting.html
?>
@php
$html = file_get_contents(public_path('dashmin/pages/pages/account-setting.html'));
$replacements = [
    'href="../../../assets/' => 'href="/dashmin/assets/',
    'src="../../../assets/' => 'src="/dashmin/assets/',
    'href="../../assets/' => 'href="/dashmin/assets/',
    'src="../../assets/' => 'src="/dashmin/assets/',
    'href="assets/' => 'href="/dashmin/assets/',
    'src="assets/' => 'src="/dashmin/assets/',
];
foreach ($replacements as $from => $to) { $html = str_replace($from, $to, $html);} 
@endphp
{!! $html !!}


