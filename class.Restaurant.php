<?php

error_reporting(E_ALL);

/**
 * Techeats - class.Restaurant.php
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
 * include Menu
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Menu.php');

/**
 * include Partenaire
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Partenaire.php');

/**
 * include Utilisateur
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Utilisateur.php');

/* user defined includes */
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:0000000000000867-includes begin
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:0000000000000867-includes end

/* user defined constants */
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:0000000000000867-constants begin
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:0000000000000867-constants end

/**
 * Short description of class Restaurant
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Restaurant
{
    use Utilisateur;
    use Partenaire;
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id_rest
     *
     * @access public
     * @var String
     */
    public $id_rest = null;

    /**
     * Short description of attribute lib_rest
     *
     * @access public
     * @var String
     */
    public $lib_rest = null;

    // --- OPERATIONS ---

    /**
     * Short description of method add_rest
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  array data
     * @return Boolean
     */
    public function add_rest($data)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B21 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B21 end

        return $returnValue;
    }

    /**
     * Short description of method search_rest
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String lib_rest
     * @return Restaurant
     */
    public function search_rest( String $lib_rest)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B24 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B24 end

        return $returnValue;
    }

    /**
     * Short description of method modif_rest
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String lib_rest
     * @return Boolean
     */
    public function modif_rest( String $lib_rest)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B27 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B27 end

        return $returnValue;
    }

    /**
     * Short description of method delete_rest
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String lib_rest
     * @return Boolean
     */
    public function delete_rest( String $lib_rest)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B29 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B29 end

        return $returnValue;
    }

    /**
     * Short description of method fill_obj
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  array data_obj
     * @return mixed
     */
    public function fill_obj($data_obj)
    {
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B2D begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B2D end
    }

    /**
     * Short description of method affiche_infos
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return String
     */
    public function affiche_infos()
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B30 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B30 end

        return $returnValue;
    }

} /* end of class Restaurant */

?>