<?php

/**
 * styleguide.php
 *
 * Controller que carrega todos os elementos do site
 * para visualizar estilização completa.
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category  Geoprocessamento de dados
 * @package   Barpedia
 * @author    Matheus Cesario <matheus@institutosoma.org.br>
 * @author    Thiago Braga <thiago@institutosoma.org.br>
 * @copyright 1997-2005 The PHP Group
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version   GIT: $Id$
 * @link      http://barpedia.org
 * @since     File available since Release 0.0.0
 */

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * styleguide
 *
 * @category  Geoprocessamento de dados
 * @package   Beta
 * @author    Matheus Cesario <matheus@institutosoma.org.br>
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link      http://barpedia.org
 * @access    public
 */
class Styleguide extends CityArt
{

    /**
     * Redireciona o usuário para a página principal
     *
     * Caso o usuário digite o endereço
     * /styleguide sem nenhum parâmetro, redireciona
     * para a página principal do projeto.
     *
     * @return {void}
     */
    public function index()
    {
        $this->data = array_merge($this->data, array(
            'page'    => 'Styleguide',
            'content' => 'styleguide/styleguide'
        ));

        CityArt::setTitle($this->data['title'] . ' | ' . $this->data['page']);
        $this->load->view('template', $this->data);
    }

}

/* End of file styleguide.php */
/* Location: ./application/controllers/styleguide.php */
