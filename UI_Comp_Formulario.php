<?php

/**
 * Created by PhpStorm.
 * User: wrodrigues
 * Date: 16/05/2018
 * Time: 14:44
 */
class UI_Comp_Formulario
{
    private $params;

    function __construct()
    {
        $this->params = $_POST;
        $this->renderer($this->params);
    }

    public function uiCompFormulario($validateScript = false)
    {
        if ($validateScript == true) {
            return file_get_contents('component.js');
        }
    }

    public function renderer($params)
    {
        if ($params) {

            $retorno = $this->validate($params);
            if ($retorno == 1) {
                echo 'Sucesso';
            } else {
                echo 'Erro nas validações';
            }
            $_POST = array();
        }
        return file_get_contents('form.php');
    }

    private function validate($params)
    {
        $data = $params["tx_data"];
        $texto = $params["tx_texto"];
        $texto_grande = $params["tx_texto_grande"];
        if (
            preg_match('/[^a-z ]/', $texto) or
            preg_match('/[^A-Z0-9 ]/', $texto_grande) or
            strlen($texto) >= 144 or
            strlen($texto_grande) >= 255
        ) {
            return false;
        } else {
            return true;
        }

        //!preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $data) or
    }

}