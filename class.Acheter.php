<?php

error_reporting(E_ALL);

/**
 * Techeats - class.Acheter.php
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
 * include Consommable
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Consommable.php');

/**
 * include Livreur
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Livreur.php');

/* user defined includes */
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:000000000000086E-includes begin
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:000000000000086E-includes end

/* user defined constants */
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:000000000000086E-constants begin
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:000000000000086E-constants end

/**
 * Short description of class Acheter
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Acheter
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute qte_ach
     *
     * @access public
     * @var String
     */
    public $qte_ach = null;

    /**
     * Short description of attribute date_ach
     *
     * @access public
     * @var String
     */
    public $date_ach = null;

    // --- OPERATIONS ---

    /**
     * Short description of method add_ach
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  Client obj_client
     * @param  Livreur obj_liv
     * @param  array tab_obj_cons
     * @param  Date date
     * @return mixed
     */
    public function add_ach(PDO $conx, Client $obj_client,  Livreur $obj_liv, $tab_obj_cons,  Date $date)
    {
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B44 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B44 end
    }

    /**
     * Short description of method modif_ach
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  Client obj_client
     * @param  array tab_obj_cons
     * @return Boolean
     */
    public function modif_ach(PDO $conx, Client $obj_client, $tab_obj_cons)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B5D begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B5D end

        return $returnValue;
    }

    /**
     * Short description of method delete_ach
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  Client obj_client
     * @param  Date date
     * @return Boolean
     */
    public function delete_ach(PDO $conx, Client $obj_client,  Date $date)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B61 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B61 end

        return $returnValue;
    }

    /**
     * Short description of method search_ach
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String nom_client
     * @param  Date date
     * @return array
     */
    public function search_ach(PDO $conx, String $nom_client,  Date $date)
    {
        $returnValue = array();

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B67 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B67 end

        return (array) $returnValue;
    }

    /**
     * Short description of method fill_obj
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  array data
     * @return mixed
     */
    public function fill_obj($data)
    {
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B6E begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B6E end
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

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B71 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B71 end

        return $returnValue;
    }

} /* end of class Acheter */

?>