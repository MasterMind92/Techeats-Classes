<?php

error_reporting(E_ALL);

/**
 * Techeats - class.acheter_m.php
 *
 * $Id$
 *
 * This file is part of Techeats.
 *
 * Automatically generated on 03.06.2020, 01:28:58 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include Client
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Client.php');

/**
 * include Livreur
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Livreur.php');

/**
 * include Menu
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Menu.php');

/* user defined includes */
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:0000000000000870-includes begin
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:0000000000000870-includes end

/* user defined constants */
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:0000000000000870-constants begin
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:0000000000000870-constants end

/**
 * Short description of class acheter_m
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class acheter_m
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute qte_ach_m
     *
     * @access public
     * @var String
     */
    public $qte_ach_m = null;

    /**
     * Short description of attribute date_ach_m
     *
     * @access public
     * @var String
     */
    public $date_ach_m = null;

    // --- OPERATIONS ---

    /**
     * Short description of method add_ach_m
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  Client obj_clt
     * @param  Livreur obj_liv
     * @param  array obj_menu
     * @param  Date date
     * @return mixed
     */
    public function add_ach_m( Client $obj_clt,  Livreur $obj_liv, $obj_menu,  Date $date)
    {
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B79 begin
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B79 end
    }

    /**
     * Short description of method modif_ach_m
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  Client obj_client
     * @param  array obj_tab_menu
     * @return Boolean
     */
    public function modif_ach_m( Client $obj_client, $obj_tab_menu)
    {
        $returnValue = null;

        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B7E begin
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B7E end

        return $returnValue;
    }

    /**
     * Short description of method delete_ach_m
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  Client obj_clt
     * @param  array tab_obj_menu
     * @return Boolean
     */
    public function delete_ach_m( Client $obj_clt, $tab_obj_menu)
    {
        $returnValue = null;

        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B83 begin
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B83 end

        return $returnValue;
    }

    /**
     * Short description of method search_ach_m
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  Client obj_clt
     * @param  Date date
     * @return array
     */
    public function search_ach_m( Client $obj_clt,  Date $date)
    {
        $returnValue = array();

        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B8A begin
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B8A end

        return (array) $returnValue;
    }

    /**
     * Short description of method fill_obj
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  data
     * @return Boolean
     */
    public function fill_obj($data)
    {
        $returnValue = null;

        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B8F begin
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B8F end

        return $returnValue;
    }

    /**
     * Short description of method affiche_infos
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function affiche_infos()
    {
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B93 begin
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B93 end
    }

} /* end of class acheter_m */

?>