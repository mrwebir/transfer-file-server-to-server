<?php
// URL فایل زیپ در هاست مبدأ
$sourceUrl = 'http://source-host.com/path/to/file.zip';

// مسیر ذخیره‌سازی فایل در هاست مقصد داخل پوشه public_html
$destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/file.zip'; // public_html/file.zip

// 1. دانلود فایل ZIP از هاست مبدأ
$fileContent = file_get_contents($sourceUrl);

if ($fileContent === false) {
    die('خطا در دانلود فایل از هاست مبدأ.');
}

// 2. ذخیره‌سازی فایل ZIP در پوشه public_html
$saveFile = file_put_contents($destinationPath, $fileContent);

if ($saveFile === false) {
    die('خطا در ذخیره‌سازی فایل در پوشه public_html.');
}

echo 'فایل با موفقیت در پوشه public_html دانلود و ذخیره شد.';
?>
