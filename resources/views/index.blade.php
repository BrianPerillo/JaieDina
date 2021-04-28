@extends('layouts.app')

@section('content')
	<div class="header grid grid-cols-1 md:grid-cols-2 m-auto">
		<div class="flex pt-10">
			<div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-right">
				<h1 class="font-bold text-6xl text-pink-800">Jaié Diná</h1>
				<p class="text-2xl text-black">Leilui nishmat: Dina' bat Farida</p>
			</div>
		</div>
		<div></div>
	</div>
	<div class="container mx-auto mt-5">
		<div class="m-auto bg-black">
			<div class="div-video"></div>
		</div>
	</div>
	<div class="container bg-green-200 mt-5 mx-auto mt-5">
		<div class="grid grid-cols-1 md:grid-cols-2 md:p-12">
			<div class="p-12">
				<h2 class="text-2xl uppercase"><strong class="text-green-400   font-bold text-shadow-md">Rifa</strong> Jaie Diná</h2><br>
				<p class="leading-7">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. </p>
			</div>
			<div>
				<img src="https://img.freepik.com/vector-gratis/gran-reunion-familiar_74855-5220.jpg?size=626&ext=jpg&ga=GA1.2.699125266.1619308800">
			</div>
		</div>
	</div>

	<livewire:purchase-raffle />

	<div class="bg-img">
		<div class="container bg-green-200 mt-5 mx-auto mt-5">
			<div class="grid grid-cols-1 md:grid-cols-2 md:p-12">
				<div class="p-12">
					<h2 class="text-2xl uppercase"><strong class="text-green-400   font-bold text-shadow-md">Rifa</strong> Jaie Diná</h2><br>
					<p class="leading-7">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. </p>
				</div>
				<div>
					<img src="https://img.freepik.com/vector-gratis/gran-reunion-familiar_74855-5220.jpg?size=626&ext=jpg&ga=GA1.2.699125266.1619308800">
				</div>
			</div>
		</div>
	</div>

@endsection