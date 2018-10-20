<?php

namespace amurengine\core;

class Main{

    /**
     * Функция конструкт
     */
    public function __construct()
    {
        
    }

    /**
    *просто тестовая функция
     */
    final public function getFramework()
    {
        return 'AmurEngineProject';
    }


    /**
     * добавить в сессию информацию о действии
     */ 
    function addSessionMessage($message, $class='primary')
    {
        $_SESSION['core_message'][] = '<div class="alert alert-'.$class.'" role="alert">'.$message.'</div>';
    }

    /**
     * взять информацию о действиях из сессии и очистить её
     */
    static function getSessionMessages(){

        if (isset($_SESSION['core_message'])){
            $messages = $_SESSION['core_message'];
        } else {
            $messages = false;
        }

        unset($_SESSION['core_message']);
        
        return $messages;

    }

    /**
     * Вывод уведомления заготовка бутстрап 3
     */
    function alert($info,$header="Информация",$style="bg-light"){
        echo ' <!-- Call to Action Well -->
        <div class="card '.$style.' my-4 text-center">
        <div class="card-header">'.$header.'</div>
        <div class="card-body">
            <p class="m-0">'.$info.'</p>
        </div>
        </div>';
    }

    /**
     * Очистка чего либо от ненужных символов
     */
    function strClear($input, $strip_tags=true){

        if(is_array($input)){

            foreach ($input as $key=>$string) {
                $value[$key] = strClear($string, $strip_tags);
            }

            return $value;

        }

        $string = trim($input);
        //Если magic_quotes_gpc = On, сначала убираем экранирование
        $string = (@get_magic_quotes_gpc()) ? stripslashes($string) : $string;
        $string = rtrim($string, ' \\');
        if ($strip_tags) {
            $string = strip_tags($string);
        }
        return $string;

    }
    
    /**
     * ПРоверка и приём переменной
     */
    function request($var, $type='str', $default=false){

        if (isset($_REQUEST[$var])){
            switch($type){
                case 'int':   return (int)$_REQUEST[$var]; break;
                case 'str':   if ($_REQUEST[$var]) { return $this->strClear($_REQUEST[$var]); } else { return $default; } break;
                case 'email': if(preg_match("/^([a-zA-Z0-9\._-]+)@([a-zA-Z0-9\._-]+)\.([a-zA-Z]{2,4})$/ui", $_REQUEST[$var])){ return $_REQUEST[$var]; } else { return $default; } break;
                case 'html':  if ($_REQUEST[$var]) { return $this->strClear($_REQUEST[$var], false); } else { return $default; } break;
                case 'array': if (is_array($_REQUEST[$var])) { foreach($_REQUEST[$var] as $k=>$s){ $arr[$k] = strClear($s, false); } return $arr; } else { return $default; } break;
                case 'array_int': if (is_array($_REQUEST[$var])) { foreach($_REQUEST[$var] as $k=>$i){ $arr[$k] = (int)$i; } return $arr; } else { return $default; } break;
                case 'array_str': if (is_array($_REQUEST[$var])) { foreach($_REQUEST[$var] as $k=>$s){ $arr[$k] = strClear($s); } return $arr; } else { return $default; } break;
            }
        } else {
            return $default;
        }

}  



}


?>