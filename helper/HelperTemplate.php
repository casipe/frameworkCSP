<?php

/**
 * Class HelperTemplate
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2018 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core\helper;

Class HelperTemplate {

    private $template;
    private $output; //@var saída do template
    public $ext_template = '.php'; //@var extensão do template	
    private $dir_file_template; //@var diretório do arquivo

    //construtor faz a carga do template

    public function __construct($template_file = 'exemplo.html', $dir) {
        $this->dir_file_template = $dir;
        $template_file = $this->dir_file_template . $template_file . $this->ext_template;
        (file_exists($template_file)) ?
                        $this->output = file_get_contents($template_file) :
                        System::exception('Arquivo ' . $template_file . ' não encontrado', $code = null);
    }

    //faz a substituição
    public function parseTemplate(Array $tags) {
        if (is_array($tags) && count($tags) > 0) {
            foreach ($tags as $tag => $data) {
                if (!is_array($data)) {
                    $data = (file_exists($this->dir_file_template . $data) && !empty($data)) ?
                            $this->parseFile($this->dir_file_template . $data) :
                            $data;
                }

                $this->output = @str_replace('[[' . $tag . ']]', $data, $this->output);
                $lng = explode("_", $this->output);
                $language = array_shift($lng);
                $language = str_replace(array('[[', ']]'), array('', ''), $language);

                if ($language == "LNG")
                    echo $language;
            }
        } else
            System::exception("Arquivo ou texto não encontrado ", $code = null);
    }

    //enquanto o buffer de saída estiver ativo, não é enviada a saída do script
    public function parseFile($file) {
        //ativar o buffer de saída.
        ob_start();
        include_once($file);
        //o conteúdo deste buffer interno é copiado na variável $conteudo
        $conteudo = ob_get_contents();
        //descartar o conteúdo do buffer.
        ob_end_clean();
        if (!$conteudo)
            System::exception("Falha no carregamento de template", $code = null);
        return $conteudo;
    }

    public function setTemplates($tpl) {
        $this->template = strtolower($tpl);
        $num_array = count($this->template);
        if ($num_array <= 1) {
            $name_tpl = strtolower($tpl);
        } else {
            $name_tpl = null;
            $name_tpl .= $this->template[0];
            for ($i = 1; $i < $num_array; $i++)
                $name_tpl .= ucwords($this->template[$i]);
        }
        $this->getTemplate($name_tpl);
    }

    public function getTemplate($tpl) {
        if (!is_dir($this->dir_file_template))
            System::exception("Não foi possível localizar o diretório de templates " . $this->dir_file_template, $code = null);

        $tpl = $tpl . ".tpl.php";
        $get_file = $this->dir_file_template . $tpl;

        if (is_file($get_file))
            return(include_once $get_file);
        else
            System::exception("Não foi possível carregar o template ( " . $tpl . ")", $code = null);
    }

    //Exibe o template
    public function viewTemplate($tags) {
        $this->parseTemplate($tags);
        return $this->output;
    }

}
