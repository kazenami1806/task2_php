<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function Task2(){
        function luaslingkaran(float $i){
            return ($i/3)*($i/3)*3.14;
        }
        
        function kellingkaran(float $i){
            return ($i/5)*3.14*2;
        }
        
        function luaspp(float $i){
            return ($i/3)*($i/5);
        }
        
        $i = 1.00;
        
        for ($i; $i<=100; $i++){
        
            if($i % 5 == 0 && $i % 3 == 0 ){
                echo "Luas Persegi Panjang = ", luaspp($i);
                echo "<br>";   
            } else if($i % 5 == 0) {
                echo "Keliling Lingkaran = ", kellingkaran($i);
                echo "<br>";
            } 
            else if($i % 3 == 0) {
                echo "Luas Lingkaran = ", luaslingkaran($i);
                echo "<br>";
            }
             else {
                echo " ", $i;
                echo "<br>";
            }
            
        }
    }
}