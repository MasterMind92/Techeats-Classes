<?php

error_reporting(E_ALL);

/**
 * Techeats - class.Consommable.php
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
 * include Acheter
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Acheter.php');

/**
 * include Menu
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Menu.php');

/**
 * include Restaurant
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Restaurant.php');

/* user defined includes */
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:0000000000000868-includes begin
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:0000000000000868-includes end

/* user defined constants */
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:0000000000000868-constants begin
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:0000000000000868-constants end

/**
 * Short description of class Consommable
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Consommable
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id_cons
     *
     * @access public
     * @var String
     */
    public $id_cons = null;

    /**
     * Short description of attribute lib_cons
     *
     * @access public
     * @var String
     */
    public $lib_cons = null;

    /**
     * Short description of attribute descr_cons
     *
     * @access public
     * @var String
     */
    public $descr_cons = null;

    // --- OPERATIONS ---

    /**
     * Short description of method add_cons
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  array data
     * @return Boolean
     */
    public function add_cons(PDO $conx,$data)
    {
        $returnValue = null;

        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B69 begin
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B69 end

        return $returnValue;
    }

    /**
     * Short description of method modif_cons
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  array data
     * @return Boolean
     */
    public function modif_cons(PDO $conx,$data)
    {
        $returnValue = null;

        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B6C begin
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B6C end

        return $returnValue;
    }

    /**
     * Short description of method search_cons
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  lib_cons
     * @return Consommable
     */
    public function search_cons(PDO $conx,$lib_cons)
    {
        $returnValue = null;

        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B6F begin
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B6F end

        return $returnValue;
    }

    /**
     * Short description of method delete_cons
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  array data
     * @return Boolean
     */
    public function delete_cons(PDO $conx,$data)
    {
        $returnValue = null;

        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B72 begin
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B72 end

        return $returnValue;
    }

    /**
     * Short description of method fill_obj
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  array data
     * @return Boolean
     */
    public function fill_obj($data)
    {
        $returnValue = null;

        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B75 begin
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000B75 end

        return $returnValue;
    }

} /* end of class Consommable */

?>