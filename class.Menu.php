<?php

error_reporting(E_ALL);

/**
 * Techeats - class.Menu.php
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
 * include Consommable
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Consommable.php');

/**
 * include Restaurant
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Restaurant.php');

/**
 * include acheter_m
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.acheter_m.php');

/* user defined includes */
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:000000000000086D-includes begin
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:000000000000086D-includes end

/* user defined constants */
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:000000000000086D-constants begin
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:000000000000086D-constants end

/**
 * Short description of class Menu
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Menu
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id_menu
     *
     * @access public
     * @var String
     */
    public $id_menu = null;

    /**
     * Short description of attribute lib_cons
     *
     * @access public
     * @var String
     */
    public $lib_cons = null;

    // --- OPERATIONS ---

    /**
     * Short description of method delete_menu
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  array data
     * @return mixed
     */
    public function delete_menu(PDO $conx, $data)
    {
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B85 begin
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B85 end
    }

    /**
     * Short description of method add_menu
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  array data
     * @return array
     */
    public function add_menu(PDO $conx, $data)
    {
        $returnValue = array();

        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B96 begin
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B96 end

        return (array) $returnValue;
    }

    /**
     * Short description of method modif_menu
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  array data
     * @return Boolean
     */
    public function modif_menu(PDO $conx,$data)
    {
        $returnValue = null;

        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B99 begin
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B99 end

        return $returnValue;
    }

    /**
     * Short description of method search_menu
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String lib_menu
     * @return mixed
     */
    public function search_menu(PDO $conx, String $lib_menu)
    {
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B9C begin
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B9C end
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
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B9E begin
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B9E end
    }

} /* end of class Menu */

?>