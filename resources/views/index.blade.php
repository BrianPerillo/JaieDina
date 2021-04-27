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

	<div class="container mt-5 mx-auto mt-5 text-center grid justify-items-center">
		<h2 class="text-2xl uppercase">
			<strong class="text-green-400 font-bold text-shadow-md">Pozo</strong> acumulado
		</h2>
        <div class="trending-box rounded-full mt-5">
            <h3>5000</h3>
        </div>
	</div>
	
	<div class="container mt-5 mx-auto mt-9 mb-9 brand-bg">
		<div class="grid grid-cols-1 brand-bg-buy">
			<div class="grid lg:grid-cols-3 p-6">
				<div class="p-6 buy-div card-title grid justify-items-center text-center pozo-acumulado-div">
					<h2 class="text-2xl uppercase">
						<strong class="text-green-400 font-bold 	text-shadow-md">Premio</strong> actualizado
					</h2>
					<div class="mt-4  mt-5 mx-auto mt-5">
               			<div class="trending-box rounded-full">
                    		<h3>50</h3>
                		</div>
           			</div>
				</div>
				<div class="p-6 buy-div ">
					<div class="card-title text-center mb-5">
						<h2 class="text-2xl uppercase">
							<strong class="text-green-400 font-bold text-shadow-md">Comprar</strong> Rifas
						</h2>
					</div>
					<div>
						<p class="mt-5">Fecha de sorteo: <b>00/00/0000</b></p>
						<p class="mt-5">Presio de rifa: <b>1usd</b> / <b class="text-gray-400">100$(arg)</b></p><br>
					</div>
					<div>
						<form>
							<label for="nro"><b>nro rifa:</b></label><br>
							<input class="number-select px-6 mx-auto" type="number" id="nro" value="000" /><br>

							<div class="bg-red-400 mt-3">
								<p class="p-3">Este número no se encuentra disponible</p>
							</div>
							<input class="bg-blue-900 py-3 px-6 text-black mt-4 btn-add" type="submit" value="Agregar">
						</form>
					</div>
				</div>

				<div class="p-6">
					<div class="card-title text-center mb-5">
						<h2 class="text-2xl uppercase">
							<strong class="text-green-400   font-bold text-shadow-md">Numeros</strong> seleccionados
						</h2>
					</div>
					<div class="number-selected mb-9 text-center">
						<b class="py-5">- 25 -</b>
						<b class="py-5">- 100 -</b><br>
						<button class="bg-red-800 py-3 px-6 text-white mt-5">Borrar último número</button>
					</div>
					<hr class="py-4">
					<div>
						<div class="card-title text-center mb-5">
							<h2 class="text-2xl uppercase">Metodos de
								<strong class="text-green-400   font-bold text-shadow-md">Pago</strong> 
							</h2>
						</div>
						<div class="grid grid-cols-2">
							<div class="pay-methods grid justify-items-center">
								<label>Online</label><br>
								<button class="bg-yellow-300 py-3 px-6 text-black">Mercado Pago</button>
							</div>
							<div class="grid justify-items-center">
								<label>Acordar con el vendedor</label><br>
								<button class="bg-blue-500 py-3 px-6 text-white">Select</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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