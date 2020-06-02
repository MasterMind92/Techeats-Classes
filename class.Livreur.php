<?php

error_reporting(E_ALL);

/**
 * Techeats - class.Livreur.php
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
 * include Employe
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Employe.php');

/**
 * include Utilisateur
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Utilisateur.php');

/**
 * include acheter_m
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.acheter_m.php');

/* user defined includes */
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:000000000000086A-includes begin
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:000000000000086A-includes end

/* user defined constants */
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:000000000000086A-constants begin
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:000000000000086A-constants end

/**
 * Short description of class Livreur
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Livreur
    /* multiple generalisations not supported by PHP: */
    /* extends Utilisateur,
            Employe */
{
    use Utilisateur;
    use Employe;
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute ville_liv
     *
     * @access public
     * @var String
     */
    public $ville_liv = null;

    /**
     * Short description of attribute commune_liv
     *
     * @access public
     * @var String
     */
    public $commune_liv = null;

    // --- OPERATIONS ---

    /**
     * Short description of method add_liv
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  array data
     * @return Boolean
     */
    public function add_liv($data)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B32 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B32 end

        return $returnValue;
    }

    /**
     * Short description of method search_liv
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String nom_emp
     * @return Livreur
     */
    public function search_liv( String $nom_emp)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B35 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B35 end

        return $returnValue;
    }

    /**
     * Short description of method modif_liv
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  array data
     * @return Boolean
     */
    public function modif_liv($data)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B37 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B37 end

        return $returnValue;
    }

    /**
     * Short description of method delete_liv
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String nom_emp
     * @return Boolean
     */
    public function delete_liv( String $nom_emp)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B3C begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B3C end

        return $returnValue;
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
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B3F begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B3F end
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

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B42 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B42 end

        return $returnValue;
    }

} /* end of class Livreur */

?>