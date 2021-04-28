<div>
    <div class="container mt-5 mx-auto mt-5 text-center grid justify-items-center">
		<h2 class="text-2xl uppercase">
			<strong class="text-green-400 font-bold text-shadow-md">Pozo</strong> acumulado
		</h2>
        <div class="trending-box rounded-full mt-5">
            <h3>{{$jackpot_raffle}}</h3>
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
                    		<h3>{{$raffles_price}}</h3>
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
</div>
