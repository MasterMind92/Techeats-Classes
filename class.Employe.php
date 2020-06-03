<?php

error_reporting(E_ALL);

/**
 * Techeats - class.Employe.php
 *
 * $Id$
 *
 * This file is part of Techeats.
 *
 * Automatically generated on 29.05.2020, 14:02:33 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author Dalo Marc-Andre
 * @since 29/06/2020
 * @version 0.0.0
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:000000000000086B-includes begin
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:000000000000086B-includes end

/* user defined constants */
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:000000000000086B-constants begin
// section -64--88-43-90--3c909c99:171fe6e5c3f:-8000:000000000000086B-constants end

/**
 * Short description of class Employe
 *
 * @access public
 * @author Dalo Marc-Andre
 * @since 29/06/2020
 * @version 0.0.0
 */
Trait Employe
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id_emp
     *
     * @access protected
     * @var String
     */
    protected $id_emp = null;

    /**
     * Short description of attribute nom_emp
     *
     * @access protected
     * @var String
     */
    protected $nom_emp = null;

    /**
     * Short description of attribute num_tel_emp
     *
     * @access protected
     * @var String
     */
    protected $num_tel_emp = null;

    /**
     * Short description of attribute email_emp
     *
     * @access protected
     * @var String
     */
    protected $email_emp = null;

    // --- OPERATIONS ---

    /**
     * Short description of method add_emp
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String data
     * @return Boolean
     */
    public function add_emp(PDO $conx, String $data)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000AF6 begin
        $sql = "INSERT INTO EMPLOYE VALUES ('\N',:nom_emp,:email_emp,:num_emp)";
        $sth = $conx->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $response=$sth->execute(array(':nom_pers' => $data['nom_pers'],
            ':num_pers' => $data['num_pers'],
            ':email_pers' => $data['email_pers']
            ));

            if($response!= false){
                echo "requete effectuee avec succes <br>";
            }else{
                echo "la Merde !!!";
            }
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000AF6 end

        return $returnValue;
    }

    /**
     * Short description of method search_emp
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String nom_emp
     * @param  String email_emp
     * @return mixed
     */
    public function search_emp(PDO $conx, String $nom_emp,  String $email_emp)
    {
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000AF8 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000AF8 end
    }

    /**
     * Short description of method modif_emp
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  array data
     * @return Boolean
     */
    public function modif_emp(PDO $conx, $data)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000AFA begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000AFA end

        return $returnValue;
    }

    /**
     * Short description of method delete_emp
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String nom_emp
     * @param  String email_emp
     * @return Boolean
     */
    public function delete_emp(PDO $conx, String $nom_emp,  String $email_emp)
    {
        $returnValue = null;

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000AFC begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000AFC end

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
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000AFE begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000AFE end
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

        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B00 begin
        // section -64--88-56-1-530ab1a6:1720ae78e2d:-8000:0000000000000B00 end

        return $returnValue;
    }

} /* end of class Employe */

?>