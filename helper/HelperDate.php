<?php

/**
 * Class HelperDate
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2020 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core\helper;

use core\Db;
use core\Tools;

class HelperDate {

    static private function checkFormatDate($format, $date) {
        $objDate = \DateTime::createFromFormat($format, $date);

        if (!($objDate instanceof \DateTime)) {
            return false;
        }
        return true;
    }

    /**
     * Converte String para DateTime
     * @static
     * @access public
     * @param string $data String no formato dd/mm/yyyy a ser convertida 
     *  @return \DateTime
     */
    public static function strToDateTime($data) {
        $match = [];
        preg_match("/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/", $data, $match);
        return \DateTime::createFromFormat('Y-m-d', $match[0]);
    }

    /**
     * Compara 2  datas
     * @static
     * @access public
     * @param string $data1
     * @param string $data2
     * @param string $comparacao != | == | < | > | <= | >= 
     *  @return \String 
     */
    public static function dateCompare($date1, $date2, $comparacao, $format = 'Y-m-d H:i:s') {
        $dataAux1 = $date1;
        $dataAux2 = $date2;
        $date1 = \DateTime::createFromFormat($format, $date1);
        $date2 = \DateTime::createFromFormat($format, $date2);

        if (!($date1 instanceof \DateTime)) {
            throw new \Exception('Data de entrada invalida. ' . $dataAux1);
        }

        if (!($date2 instanceof \DateTime)) {
            throw new \Exception('Data de entrada invalida. ' . $dataAux2);
        }

        switch ($comparacao) {
            case '!=':
                return ($date1 != $date2);
                break;
            case '==':
                return ($date1 == $date2);
                break;
            case '<':
                return ($date1 < $date2);
                break;
            case '<=':
                return ($date1 <= $date2);
                break;
            case '>=':
                return ($date1 >= $date2);
                break;
            case '>':
                return ($date1 > $date2);
                break;
        }
        return false;
    }

    public static function diffDay($dateStart, $dateEnd, $format = 'Y-m-d H:i:s') {


        if (!self::checkFormatDate($format, $dateStart)) {
            throw new \Exception('Start date invalid:' . $dateStart);
        }
        if (!self::checkFormatDate($format, $dateEnd)) {
            throw new \Exception('End date invalid:' . $dateEnd);
        }

        $dateStart = \DateTime::createFromFormat($format, $dateStart);
        $dateEnd = \DateTime::createFromFormat($format, $dateEnd);

        return $dateStart->diff($dateEnd)->days;
    }

    /**
     *  Adiciona uma quantidade de dias a uma data e retorna a data final
     *  Seu retorno é a data final ou o próximo dia útil imediato a data final
     * @static
     * @access public
     * @param string $dataInicio
     * @param string $formatInicio Formato de entrada da data
     * @param bool $util Flag que indica se a data retornada deverá ser alterada para o próximo dia útil imediato
     * @return string 
     */
    public static function dayAdd($date, $dias, $util = false, $format = 'Y-m-d') {

        if (!self::checkFormatDate($format, $date)) {
            throw new \Exception('Date invalid:' . $date);
        }

        $date = \DateTime::createFromFormat($format, $date);
        $util ? $date->modify("+" . (ceil($dias) - 1) . " weekdays") : $date->modify("+" . (ceil($dias) - 1) . " days");

        return $date->format($format);
    }

    /**
     *  Subtrai uma quantidade de dias a uma data e retorna a data final
     *  Seu retorno é a data final ou o próximo dia útil imediato a data final
     * @static
     * @access public
     * @param string $dataInicio
     * @param string $formatInicio Formato de entrada da data
     * @param bool $util Flag que indica se a data retornada deverá ser alterada para o próximo dia útil imediato
     * @return string 
     */
    public static function daySub($data, $dias, $util = false, $format = 'Y-m-d') {

        if (!self::checkFormatDate($format, $data)) {
            throw new \Exception('Date invalid:' . $horaInicio);
        }

        $data = \DateTime::createFromFormat($format, $data);

        $util ? $data->modify("-" . (ceil($dias) - 1) . " weekdays") : $data->modify("-" . (ceil($dias) - 1) . " days");
        return $data->format($format);
    }

    /**
     * Diferença em Horas
     * @static
     * @access public
     * @param string $start
     * @param string $end
     * @param bool $hour
     * @param string $format
     * @return integer
     */
    public static function diffTime($start, $end, $hour = true, $format = 'Y-m-d H:i:s') {


        if (!self::checkFormatDate($format, $start)) {
            throw new \Exception('Start time invalid:' . $start);
        }
        if (!self::checkFormatDate($format, $end)) {
            throw new \Exception('End time invalid:' . $end);
        }

        $start = \DateTime::createFromFormat($format, $start);
        $end = \DateTime::createFromFormat($format, $end);

        $interval = $start->diff($end);

        if ($hour === true) {
            return ($interval->h + ($interval->days * 24));
        } else {
            return array(
                'y' => $interval->y,
                'm' => $interval->m,
                'd' => $interval->d,
                'H' => $interval->h,
                'i' => $interval->i,
                's' => $interval->s
            );
        }
    }

    static public function convertHoursToSec($hour) {

        $hArray = explode(':', $hour);
        $hours = $horaArray[0];
        $minutes = !empty($horaArray[1]) ? $horaArray[1] : '00';
        $seconds = !empty($horaArray[2]) ? $horaArray[2] : '00';

        return ($hours * 3600) + ($minutes * 60) + $seconds;
    }

    static public function convertSecToHours($seconds) {
        return gmdate('H:i:s', $seconds);
    }

    /**
     * Total de dias do periodo
     * @static
     * @access public
     * @param string $dataInicio
     * @param string $dataFim
     * @param string $tipoDia 1=Todos os dias; 2=Exceto domingo; 3=Exceto sabado e domingo
     * @param string $format Formato de saida da hora
     * @return integer
     */
    public static function totalDayByPeriod($dataInicio, $dataFim, $tipoDia = 1, $format = 'Y-m-d H:i:s') {

        if (!self::checkFormatDate($format, $dataInicio)) {
            throw new \Exception('Start date invalid:' . $dataInicio);
        }
        if (!self::checkFormatDate($format, $dataFim)) {
            throw new \Exception('End date invalid:' . $dataFim);
        }

        if (!HelperDate::dateCompare($dataInicio, $dataFim, '<=')) {
            return 0;
        }

        $objDataInicio = \DateTime::createFromFormat($format, $dataInicio);
        $objDataFim = \DateTime::createFromFormat($format, $dataFim);


        $diaIni = $objDataInicio->format('d');
        $mesIni = $objDataInicio->format('m');
        $anoIni = $objDataInicio->format('Y');

        $diaFim = $objDataFim->format('d');
        $mesFim = $objDataFim->format('m');
        $anoFim = $objDataFim->format('Y');
        $totalDia = 0;

        //Todos os dias
        if ($tipoDia == 1) {
            return self::diffDay($dataInicio, $dataFim, $format);
        }

        //Percorre todos os anos do periodo informado
        for ($ano = $anoIni; $anoFim >= $ano; $ano++) {

            //Percorre todos os meses do ano
            for ($mes = $mesIni; $mes <= 12; $mes++) {

                //Recupera a quantidade de dias do mes
                $dias_no_mes = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);

                $continuaMesAno = !($mesFim == $mes && $ano == $anoFim);

                //Percorre todos os dias do mes
                for ($dia = $diaIni; $dia <= $dias_no_mes; $dia++) {

                    $timestamp = mktime(0, 0, 0, $mes, $dia, $ano);
                    $semana = date("N", $timestamp);

                    //Verifica o dia NAO util (sabado/domingo)
                    $paramSemana = ($tipoDia == 2) ? 7 : 6;
                    if ($semana < $paramSemana) {
                        $totalDia++;
                    }

                    //Limita o dia da ultima data informada
                    if (($diaFim == $dia && !$continuaMesAno)) {
                        break;
                    }
                }
                //Limita o mes da ultima data informada
                if (!$continuaMesAno) {
                    break;
                }
            }
        }
        return $totalDia;
    }

    /**
     * Rotorna as semanas existentes do período
     * @static
     * @access public
     * @param string $dateStart
     * @param string $dateEnd
     * @param string $format Formato de saida da hora
     * @return array
     */
    public static function listWeekByPeriod($dataInicio, $dataFim, $format = 'Y-m-d H:i:s') {

        if (!self::checkFormatDate($format, $dataInicio)) {
            throw new \Exception("Start date invalid: $format - $dataInicio");
        }
        if (!self::checkFormatDate($format, $dataFim)) {
            throw new \Exception("End date invalid: $format - $dataFim");
        }
        $objDataInicio = \DateTime::createFromFormat($format, $dataInicio);
        $diaIni = $objDataInicio->format('d');
        $mesIni = $objDataInicio->format('m');
        $anoIni = $objDataInicio->format('Y');

        if (HelperDate::dateCompare($dataInicio, $dataFim, '>=')) {
            $timestamp = mktime(0, 0, 0, $mesIni, $diaIni, $anoIni);
            $semana = date("N", $timestamp);
            return array($semana => date("l", $timestamp));
        }

        $resArray = array();

        $objDataFim = \DateTime::createFromFormat($format, $dataFim);
        $diaFim = $objDataFim->format('d');
        $mesFim = $objDataFim->format('m');
        $anoFim = $objDataFim->format('Y');

        //Percorre todos os anos do periodo informado
        for ($ano = $anoIni; $anoFim >= $ano; $ano++) {

            //Percorre todos os meses do ano
            for ($mes = $mesIni; $mes <= 12; $mes++) {

                //Recupera a quantidade de dias do mes
                $dias_no_mes = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);

                $continuaMesAno = !($mesFim == $mes && $ano == $anoFim);

                //Percorre todos os dias do mes
                for ($dia = $diaIni; $dia <= $dias_no_mes; $dia++) {

                    $timestamp = mktime(0, 0, 0, $mes, $dia, $ano);
                    $semana = date("N", $timestamp);
                    $resArray[$semana] = date("l", $timestamp);
                    //Limita o dia da ultima data informada
                    if (($diaFim == $dia && !$continuaMesAno)) {
                        break;
                    }
                }
                //Limita o mes da ultima data informada
                if (!$continuaMesAno) {
                    break;
                }
            }
        }
        return $resArray;
    }

    /**
     * Total de dias do periodo
     * @static
     * @access public
     * @param string $dataInicio
     * @param string $dataFim
     * @param string $tipoDia 1=Todos os dias; 2=Exceto domingo; 3=Exceto sabado e domingo
     * @param string $format Formato de saida da hora
     * @return integer
     */
    public static function getWeek($date, $format = 'Y-m-d') {
        
    }

}
