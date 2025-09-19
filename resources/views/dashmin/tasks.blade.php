<?php
// Render halaman To Do List dari template: pages/apps/todolist/todolist.html
?>
@php
$html = file_get_contents(public_path('dashmin/pages/apps/todolist/todolist.html'));
$replacements = [
    'href="../../../../assets/' => 'href="/dashmin/assets/',
    'src="../../../../assets/' => 'src="/dashmin/assets/',
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
$html = str_replace('href="../pages/', 'href="/dashmin/pages/', $html);
@endphp
{!! $html !!}


