<?php

class fizzbuzz{
    public $numero;
 //se declara una variable
    function valor($i){
	//la funcion recibe un parametro que va a detener el bucle for
        $this->numero = $i;
        echo 'FizzBuzz('.$this->numero.')<br />';
//imprimimos el valor inicial del parametro
        for ($i = 1; $i <= $this->numero; $i++)
        {
            if($i % 3 == 0 && $i % 5 ==0){
	//cuantas vezes entra el valor de i %3 y cuanto sobra, en el momento que i es igual 
	// a 3 % 3 = resto 0, se cumple la condicion y igual para el 5
 	// se imprime el prmer valor de  $i = 1
	
                echo $i."<br />";
            }
            else if($i % 3 == 0){
                echo "Fizz<br />";
	//se cumple en el primer if y en el if else entonces se muestra el mensaje fiz
            }
	//se muestran los valores de 3 y 4 antes de entrar en la condicional 5
            else if($i % 5 == 0){
                echo "Buzz<br />";
            }
            else {
                echo $i."<br />";
            }
        }
        
    }
}
//instanciamos la clase para hacer uso de sus propriedades y metodos
$obj = new fizzbuzz;
//pasamos el argumento a la funcion
$obj->valor(5);