Laravel Mpdf install formula
----------------------------------------
1. Search: mpdf carlos meneses 
2. Search: nikosh ttf
3. Search: fontvariables.php
4. Write: Code

fontvariables write the code
-------------------------------
         /* Indic */
				"lohitkannada" => [
					'R' => "Lohit-Kannada.ttf",
					'useOTL' => 0xFF,
				],
				"pothana2000" => [
					'R' => "Pothana2000.ttf",
					'useOTL' => 0xFF,
				],
				"nikosh" => [
					'R' => "Nikosh.ttf",
					'useOTL' => 0xFF,
				],

app/config.php -> write the code
--------------------------------------------------------
'providers' => [
	// ...
	Meneses\LaravelMpdf\LaravelMpdfServiceProvider::class
]

'aliases' => [
	// ...
	'PDF' => Meneses\LaravelMpdf\Facades\LaravelMpdf::class
]

or installing the runnig:
----------------------------------
composer require carlos-meneses/laravel-mpdf