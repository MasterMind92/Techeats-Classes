<?php

error_reporting(E_ALL);

/**
 * Techeats - class.Client.php
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
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:0000000000000869-includes begin
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:0000000000000869-includes end

/* user defined constants */
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:0000000000000869-constants begin
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:0000000000000869-constants end

/**
 * Short description of class Client
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Client
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id_clt
     *
     * @access public
     * @var String
     */
    public $id_clt = null;

    /**
     * Short description of attribute nom_clt
     *
     * @access public
     * @var String
     */
    public $nom_clt = null;

    /**
     * Short description of attribute ville_clt
     *
     * @access public
     * @var String
     */
    public $ville_clt = null;

    /**
     * Short description of attribute email_clt
     *
     * @access public
     * @var String
     */
    public $email_clt = null;

    // --- OPERATIONS ---

    /**
     * Short description of method add_clt
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  array data
     * @return Boolean
     */
    public function add_clt($data)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B49 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B49 end

        return $returnValue;
    }

    /**
     * Short description of method search_clt
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String nom_clt
     * @return Client
     */
    public function search_clt( String $nom_clt)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B4C begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B4C end

        return $returnValue;
    }

    /**
     * Short description of method modif_clt
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String nom_clt
     * @return Boolean
     */
    public function modif_clt( String $nom_clt)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B52 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B52 end

        return $returnValue;
    }

    /**
     * Short description of method delete_clt
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String nom_clt
     * @param  String email_clt
     * @return mixed
     */
    public function delete_clt( String $nom_clt,  String $email_clt)
    {
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B55 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B55 end
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
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B5A begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B5A end
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
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000BA1 begin
        // section -64--88-8-103-725ea17d:17217e72264:-8000:0000000000000BA1 end
    }

} /* end of class Client */

?>