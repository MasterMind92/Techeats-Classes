<?php

error_reporting(E_ALL);

/**
 * Techeats - class.Partenaire.php
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

/* user defined includes */
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:000000000000086C-includes begin
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:000000000000086C-includes end

/* user defined constants */
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:000000000000086C-constants begin
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:000000000000086C-constants end

/**
 * Short description of class Partenaire
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
Trait Partenaire
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id_part
     *
     * @access protected
     * @var String
     */
    protected $id_part = null;

    /**
     * Short description of attribute nom_part
     *
     * @access public
     * @var String
     */
    public $nom_part = null;

    /**
     * Short description of attribute email_part
     *
     * @access public
     * @var String
     */
    public $email_part = null;

    /**
     * Short description of attribute num_tel_part
     *
     * @access public
     * @var String
     */
    public $num_tel_part = null;

    // --- OPERATIONS ---

    /**
     * Short description of method add_part
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  array data
     * @return Boolean
     */
    public function add_part(PDO $conx,$data)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B0B begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B0B end

        return $returnValue;
    }

    /**
     * Short description of method search_part
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String nom_part
     * @param  String email_part
     * @return Partenaire
     */
    public function search_part(PDO $conx, String $nom_part,  String $email_part)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B0D begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B0D end

        return $returnValue;
    }

    /**
     * Short description of method modif_part
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String email_part
     * @param  String nom_part
     * @return Boolean
     */
    public function modif_part( PDO $conx,String $email_part,  String $nom_part)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B0F begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B0F end

        return $returnValue;
    }

    /**
     * Short description of method delete_part
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String nom_part
     * @param  String email_part
     * @return Boolean
     */
    public function delete_part(PDO $conx, String $nom_part,  String $email_part)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B11 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B11 end

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
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B13 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B13 end
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

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B15 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B15 end

        return $returnValue;
    }

} /* end of class Partenaire */

?>