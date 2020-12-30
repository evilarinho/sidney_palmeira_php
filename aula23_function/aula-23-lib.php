<?php
    /** Função que executa operações matemáticas
     * @param $numero1 Número decimal ou inteiro
     * @param @numero1 Número decimal ou inteiro
     * @param $operacao Nome da Operação (soma, subtrair, dividir ou multiplicar)
     * @return Decimal Resultado da Operação      * 
     */
    function Calculadora($num1=0, $num2=1, $operacao='+') 
    {
        if ( ($num2 == 0) and ($operacao == 'divisão')) {
            return ('Não podemos dividir um número por zero');
        } else {
            switch ( $operacao ) {
                case "soma": return ($num1 + $num2); break;
                case "subtração": return ($num1 - $num2); break;
                case "multiplicação": return ($num1 * $num2); break;
                case "divisão": return ($num1 / $num2); break;
                default:  return('Operação inválida.');
            }
        }         
    }

    /** Função que Recebe um número inteiro positivo (1 a 7) representando o dia da semana e retorna o dia por extenso, sendo 0 = domingo
     * @author Sidney Palmeira <palmeira.sidney@gmail.com>
     * @param $dia Número inteiro
     * @return String Dia da Semana por extenso      
     */
    function DiasdaSemana($dia=0) {
        date_default_timezone_set('America/Recife');
        if ($dia == 0) {
            $dia = date('w');
        }

        switch ($dia) {
            case 0: return 'Domingo'; break;
            case 1: return 'Segunda-feira'; break;
            case 2: return 'Terça-feira'; break;
            case 3: return 'Quarta-feira'; break;
            case 4: return 'Quinta-feira'; break;
            case 5: return 'Sexta-feira'; break;
            case 6: return 'Sábado'; break;
            default: return 'Dia não identificado'; 
        }
    }

    /** Função que Recebe um número inteiro positivo (1 a 12) representando o mês do ano e retorna o mês por extenso, sendo 1 = domingo
     * @author Sidney Palmeira <palmeira.sidney@gmail.com>
     * @param $mes Número inteiro
     * @return String Mês do Ano por extenso      
     */
    function MesdoAno ($mes=0) {
        date_default_timezone_set('America/Recife');
        if ($mes == 0) {
            $mes = date('m');
        }

        switch ($mes) {
            case 1: return 'Janeiro'; break;
            case 2: return 'Fevereiro'; break;
            case 3: return 'Março'; break;
            case 4: return 'Abril'; break;
            case 5: return 'Maio'; break;
            case 6: return 'Junho'; break;
            case 7: return 'Julho'; break;
            case 8: return 'Agosto'; break;
            case 9: return 'Setembro'; break;
            case 10: return 'Outubro'; break;
            case 11: return 'Novembro'; break;
            case 12: return 'Dezembro'; break;
            default: return 'Mês não identificado'; 
        }
    }

?>