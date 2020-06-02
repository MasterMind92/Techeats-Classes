<?php

error_reporting(E_ALL);

/**
 * Techeats - class.Utilisateur.php
 *
 * $Id$
 *
 * This file is part of Techeats.
 *
 * Automatically generated on 29.05.2020, 14:10:10 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:0000000000000866-includes begin
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:0000000000000866-includes end

/* user defined constants */
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:0000000000000866-constants begin
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:0000000000000866-constants end

/**
 * Short description of class Utilisateur
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
/**
 * 
 */
Trait Utilisateur
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id_user
     *
     * @access protected
     * @var String
     */
    protected $id_user = null;

    /**
     * Short description of attribute login_user
     *
     * @access protected
     * @var String
     */
    protected $login_user = null;

    /**
     * Short description of attribute mdp_user
     *
     * @access protected
     * @var String
     */
    protected $mdp_user = null;

    /**
     * Short description of attribute niv_attr_user
     *
     * @access protected
     * @var String
     */
    protected $niv_attr_user = null;

    /**
     * Short description of attribute email_user
     *
     * @access protected
     * @var String
     */
    protected $email_user = null;

    // --- OPERATIONS ---

    /**
     * Short description of method add_user
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  array data
     * @return Boolean
     */
    public function add_user($data)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000AE4 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000AE4 end

        return $returnValue;
    }

    /**
     * Short description of method modif_user
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  array data
     * @return Boolean
     */
    public function modif_user($data)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000AE6 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000AE6 end

        return $returnValue;
    }

    /**
     * Short description of method search_user
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String login
     * @param  String email
     * @return Utilisateur
     */
    public function search_user( String $login,  String $email)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000AE8 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000AE8 end

        return $returnValue;
    }

    /**
     * Short description of method delete_user
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return Boolean
     */
    public function delete_user()
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000AEA begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000AEA end

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
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000AEC begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000AEC end
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

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000AF0 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000AF0 end

        return $returnValue;
    }

} /* end of class Utilisateur */

?>