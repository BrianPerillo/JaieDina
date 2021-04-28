<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Draw;
use App\Models\Raffle;

class PurchaseRaffle extends Component
{
    public $jackpot_raffle;
    public $raffles_price;
    
    public $quantity = 1;
    public $final_price;
    public $message = null;
    public $selected_raffle; // (Rifa que se pretende agregar)
    public $check_availability;
    public $available_raffles = []; // (Rifas Agregadas)
    public $raffle_exist_on_array = false;

    public function add_raffle(){

        $this->check_availability = null;
        $this->message = null;
        $this->raffle_exist_on_array = false;
        
        foreach($this->available_raffles as $raffle){

            if($raffle == $this->selected_raffle){
                $this->raffle_exist_on_array = true;
            }

        }

        //Rifa Ingresada
            $selected_raffle = $this->selected_raffle;

        //Checkeo si la rifa se encuentra disponible y sea un número válido:
            //Busco la rifa en la DB
            $check_availability = Raffle::where('number', '=', "$selected_raffle")->get();
            
            //Si no está disponible (la consulta arrojó resultados):
            if(sizeof($check_availability) > 0){
    
                $this->message = "Este número de rifa no está disponible";

            }
            //Si el número de rifa esté disponible pero no sea un número válido
            else if($selected_raffle<1){

                $this->message = "Debe ingresar un número válido";

            }
            //Si la rifa ya fue agregada y está repitiendo el número:
            else if($this->raffle_exist_on_array){

                $this->message = "Esa rifa ya se encuentra agregada";
    
            }
            //En caso de que esté disponible y también sea válido la agrego al array: 
            else{
                
                $this->available_raffles[] = "$selected_raffle";
    
            }

    }

    public function remove_raffle(){

        if(sizeof($this->available_raffles)>0){

            $last_raffle_index = count($this->available_raffles) - 1;
            unset($this->available_raffles[$last_raffle_index]);
            
            $this->message = "Rifa removida";
        }
        else{
            $this->message = "No hay rifas para quitar" ;
        }

    }

    public function render(){
        
        //Consulto el pozo total
        $draw = Draw::get()->first();

        $jackpot_value = $draw->jackpot_value;

        $this->jackpot_raffle = $jackpot_value;

        //Calculo precio de las rifas (1% del jackpot/pozo acumulado) 
        $raffles_price = $jackpot_value*0.01;
        $this->raffles_price = $raffles_price;
        
        //Calculo precio por el total de las rifas solicitadas 

        if(is_numeric($this->quantity)){
            $this->final_price = round(($this->quantity*$raffles_price), 2);
        }
        else{
            $this->final_price = null;
        }

        return view('livewire.purchase-raffle', ['raffles_price', 'jackpot_raffle', 'final_price',  "message", "available_raffles"]);

    }
}
