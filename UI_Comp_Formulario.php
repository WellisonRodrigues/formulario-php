<?php

/**
 * Created by PhpStorm.
 * User: wrodrigues
 * Date: 16/05/2018
 * Time: 14:44
 */
class UI_Comp_Formulario
{

    public function uiCompFormulario($validateScript = false)
    {
        if ($validateScript == true) {
            return file_get_contents('component.js');
        }
    }

    public function renderer()
    {
        if ($_POST['submit']) {
            $params["tx_data"] = $_POST['tx_data'];
            $params["tx_texto"] = $_POST['tx_texto'];
            $params["tx_texto_grande"] = $_POST['tx_texto_grande'];
            $variavel = $this->validate($params);
            if ($variavel == 1) {
                echo 'Sucesso';
            } else {
                echo 'Erro nas validações';
            }
        }
        return file_get_contents('form.php');
    }

    public function validate($params)
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