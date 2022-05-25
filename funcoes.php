<?php

namespace SRC;

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function SeculoAno(int $ano): int {
        // divide o ano recebido por 100
        $seculo = $ano / 100;
        // checa se o resultado é float e caso seja soma 1 ao seu valor
        if(is_float($seculo)){
            $seculo = $seculo + 1;
        }
        return intval($seculo);
    }

    
	
	
	
	
	
	
	
	/*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    public function PrimoAnterior(int $numero): int {
        $prim = false;
        while($prim==false){
            $numero = $numero - 1;
            $divisores = 0;
            
            for($count=2; $count<$numero; $count++)
            if($numero % $count == 0){
                $divisores++;
            }
            
            if($divisores){
                if($numero != 0){
                    // Não é primo
                }
            }else{
                // É primo
                $prim = true;
            }   
        }
    
        return $numero;
    }










    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function SegundoMaior(array $arr): int {
            
        // Criando array unico com todos valores
        $geral = array();

        // varrendo array e armazenando valores no novo
        foreach ($arr as $row){
            foreach($row as $i => $a){
                array_push($geral, $a);
            }
        }

        // obtendo maior valordo array
        $maior = max($geral);

        // definindo variaveis para encontrar o segundo maior
        $seg = $maior - 1;
        $achou = false;

        // loop para encontrar o segundo maior
        while($achou == false){
            $pos = array_search($seg, $geral);
            if($pos){
                $achou = true;
            }
            $seg -= 1;
        }

        return $geral[$pos];

    }
	
	
	
	
	
	
	

    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */
    
	public function SequenciaCrescente(array $arr): boolean {
        $crescente = true;
        $proxVal = $arr[0];
        $qtdErros = 0;
        $correto;
        foreach($arr as $i => $a){
                if($a == $proxVal || $a == $proxVal - 1){
                    $correto = $a;
                }else{
                    $crescente = false;   
                    $qtdErros += 1;           
                }
            
            $proxVal = $a + 1;
            if($crescente == false){
                $valorEsperado = $correto + 1;
                $proxVal = $valorEsperado;
                $crescente == true;
            }
        }
        if($qtdErros > 1){
            return false;
        }else{
            return true;
        }
    }
}
