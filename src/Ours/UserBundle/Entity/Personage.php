<?php

namespace Ours\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personage
 *
 * @ORM\Table(name="personage")
 * @ORM\Entity(repositoryClass="Ours\UserBundle\Repository\PersonageRepository")
 */
class Personage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var User $user
     *
     * @ORM\ManyToOne(targetEntity="Ours\UserBundle\Entity\User", inversedBy="personages")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    public $user;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="spCombat", type="string", length=255, nullable=true)
     */
    private $spCombat;

    /**
     * @var string
     *
     * @ORM\Column(name="spCraft", type="string", length=255, nullable=true)
     */
    private $spCraft;

    /**
     * @var int
     *
     * @ORM\Column(name="fibre", type="integer")
     */
    private $fibre = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="bois", type="integer")
     */
    private $bois = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="peau", type="integer")
     */
    private $peau = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="minerai", type="integer")
     */
    private $minerai = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="pierre", type="integer")
     */
    private $pierre = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="tissu", type="integer")
     */
    private $tissu = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="planche", type="integer")
     */
    private $planche = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cuir", type="integer")
     */
    private $cuir = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="barre", type="integer")
     */
    private $barre = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="bloc", type="integer")
     */
    private $bloc = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="ouMasseDemo", type="integer")
     */
    private $ouMasseDemo = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="ouFaucille", type="integer")
     */
    private $ouFaucille = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="ouCouteau", type="integer")
     */
    private $ouCouteau = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="ouPioche", type="integer")
     */
    private $ouPioche = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="ouMassePi", type="integer")
     */
    private $ouMassePi = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="ouHache", type="integer")
     */
    private $ouHache = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="accSac", type="integer")
     */
    private $accSac = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="accCape", type="integer")
     */
    private $accCape = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maBatonFeu", type="float")
     */
    private $maBatonFeu = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maGrandBatonFeu", type="float")
     */
    private $maGrandBatonFeu = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maBatonInfernal", type="float")
     */
    private $maBatonInfernal = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maBatonBeni", type="float")
     */
    private $maBatonBeni = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maGrandBatonBeni", type="float")
     */
    private $maGrandBatonBeni = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maBatonDivin", type="float")
     */
    private $maBatonDivin = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maBatonEso", type="float")
     */
    private $maBatonEso = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maGrandBatonEso", type="float")
     */
    private $maGrandBatonEso = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maBatonEni", type="float")
     */
    private $maBatonEni = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maBatonGi", type="float")
     */
    private $maBatonGi = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maGrandBatonGi", type="float")
     */
    private $maGrandBatonGi = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maBatonGla", type="float")
     */
    private $maBatonGla = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maBatonDamn", type="float")
     */
    private $maBatonDamn = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maGrandBatonDamn", type="float")
     */
    private $maGrandBatonDamn = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maBatonDemo", type="float")
     */
    private $maBatonDemo = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maTome", type="float")
     */
    private $maTome = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maCasque1", type="float")
     */
    private $maCasque1 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maCasque2", type="float")
     */
    private $maCasque2 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maCasque3", type="float")
     */
    private $maCasque3 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maArmure1", type="float")
     */
    private $maArmure1 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maArmure2", type="float")
     */
    private $maArmure2 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maArmure3", type="float")
     */
    private $maArmure3 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maBotte1", type="float")
     */
    private $maBotte1 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maBotte2", type="float")
     */
    private $maBotte2 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="maBotte3", type="float")
     */
    private $maBotte3 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chArc", type="float")
     */
    private $chArc = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chArcGu", type="float")
     */
    private $chArcGu = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chArcLo", type="float")
     */
    private $chArcLo = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chLance", type="float")
     */
    private $chLance = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chPique", type="float")
     */
    private $chPique = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chHallebarde", type="float")
     */
    private $chHallebarde = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chBatonNat", type="float")
     */
    private $chBatonNat = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chGrandBatonNat", type="float")
     */
    private $chGrandBatonNat = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chBatonSau", type="float")
     */
    private $chBatonSau = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chDague", type="float")
     */
    private $chDague = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chDagueDouble", type="float")
     */
    private $chDagueDouble = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chGriffe", type="float")
     */
    private $chGriffe = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chBatonLong", type="float")
     */
    private $chBatonLong = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chBatonSF", type="float")
     */
    private $chBatonSF = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chBatonDT", type="float")
     */
    private $chBatonDT = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chTorche", type="float")
     */
    private $chTorche = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chCasque1", type="float")
     */
    private $chCasque1 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chCasque2", type="float")
     */
    private $chCasque2 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chCasque3", type="float")
     */
    private $chCasque3 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chArmure1", type="float")
     */
    private $chArmure1 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chArmure2", type="float")
     */
    private $chArmure2 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chArmure3", type="float", length=255)
     */
    private $chArmure3 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chBotte1", type="float")
     */
    private $chBotte1 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chBotte2", type="float")
     */
    private $chBotte2 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="chBotte3", type="float")
     */
    private $chBotte3 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soEpeeLarge", type="float")
     */
    private $soEpeeLarge = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soClaymore", type="float")
     */
    private $soClaymore = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soGlaive", type="float")
     */
    private $soGlaive = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soHache", type="float")
     */
    private $soHache = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soGrandeHache", type="float")
     */
    private $soGrandeHache = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soFaux", type="float")
     */
    private $soFaux = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soMassue", type="float")
     */
    private $soMassue = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soMassueLo", type="float")
     */
    private $soMassueLo = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soFleau", type="float")
     */
    private $soFleau = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soMasse", type="float")
     */
    private $soMasse = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soBecDeCorbin", type="float")
     */
    private $soBecDeCorbin = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soGrandeMasse", type="float")
     */
    private $soGrandeMasse = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soArbalete", type="float")
     */
    private $soArbalete = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soArbaleteLo", type="float")
     */
    private $soArbaleteLo = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soArbaleteRep", type="float")
     */
    private $soArbaleteRep = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soBouclier", type="float")
     */
    private $soBouclier = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soCasque1", type="float")
     */
    private $soCasque1 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soCasque2", type="float")
     */
    private $soCasque2 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soCasque3", type="float")
     */
    private $soCasque3 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soArmure1", type="float")
     */
    private $soArmure1 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soArmure2", type="float")
     */
    private $soArmure2 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soArmure3", type="float")
     */
    private $soArmure3 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soBotte1", type="float")
     */
    private $soBotte1 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soBotte2", type="float")
     */
    private $soBotte2 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="soBotte3", type="float")
     */
    private $soBotte3 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="alHeal", type="integer")
     */
    private $alHeal = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="alEnergy", type="integer")
     */
    private $alEnergy = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="alRevive", type="integer")
     */
    private $alRevive = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="alStone", type="integer")
     */
    private $alStone = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="alChill", type="integer")
     */
    private $alChill = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="alRecovery", type="integer")
     */
    private $alRecovery = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="alClean", type="integer")
     */
    private $alClean = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="alAlcohol", type="integer")
     */
    private $alAlcohol = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="herbo", type="integer")
     */
    private $herbo = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="anMonture", type="integer")
     */
    private $anMonture = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="anFerme", type="integer")
     */
    private $anFerme = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cuSoup", type="integer")
     */
    private $cuSoup = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cuSalad", type="integer")
     */
    private $cuSalad = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cuPie", type="integer")
     */
    private $cuPie = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cuOmelette", type="integer")
     */
    private $cuOmelette = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cuSandwich", type="integer")
     */
    private $cuSandwich = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cuStew", type="integer")
     */
    private $cuStew = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cuProduct", type="integer")
     */
    private $cuProduct = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cuMeat", type="integer")
     */
    private $cuMeat = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="paysan", type="integer")
     */
    private $paysan = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaBatonFeu", type="float")
     */
    private $cbMaBatonFeu = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaGrandBatonFeu", type="float")
     */
    private $cbMaGrandBatonFeu = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaBatonInfernal", type="float")
     */
    private $cbMaBatonInfernal = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaBatonBeni", type="float")
     */
    private $cbMaBatonBeni = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaGrandBatonBeni", type="float")
     */
    private $cbMaGrandBatonBeni = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaBatonDivin", type="float")
     */
    private $cbMaBatonDivin = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaBatonEso", type="float")
     */
    private $cbMaBatonEso = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaGrandBatonEso", type="float")
     */
    private $cbMaGrandBatonEso = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaBatonEni", type="float")
     */
    private $cbMaBatonEni = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaBatonGi", type="float")
     */
    private $cbMaBatonGi = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaGrandBatonGi", type="float")
     */
    private $cbMaGrandBatonGi = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaBatonGla", type="float")
     */
    private $cbMaBatonGla = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaBatonDamn", type="float")
     */
    private $cbMaBatonDamn = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaGrandBatonDamn", type="float")
     */
    private $cbMaGrandBatonDamn = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaBatonDemo", type="float")
     */
    private $cbMaBatonDemo = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaTome", type="float")
     */
    private $cbMaTome = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaCasque1", type="float")
     */
    private $cbMaCasque1 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaCasque2", type="float")
     */
    private $cbMaCasque2 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaCasque3", type="float")
     */
    private $cbMaCasque3 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaArmure1", type="float")
     */
    private $cbMaArmure1 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaArmure2", type="float")
     */
    private $cbMaArmure2 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaArmure3", type="float")
     */
    private $cbMaArmure3 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaBotte1", type="float")
     */
    private $cbMaBotte1 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaBotte2", type="float")
     */
    private $cbMaBotte2 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbMaBotte3", type="float")
     */
    private $cbMaBotte3 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChArc", type="float")
     */
    private $cbChArc = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChArcGu", type="float")
     */
    private $cbChArcGu = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChArcLo", type="float")
     */
    private $cbChArcLo = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChLance", type="float")
     */
    private $cbChLance = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChPique", type="float")
     */
    private $cbChPique = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChHallebarde", type="float")
     */
    private $cbChHallebarde = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChBatonNat", type="float")
     */
    private $cbChBatonNat = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChGrandBatonNat", type="float", length=255)
     */
    private $cbChGrandBatonNat = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChBatonSau", type="float")
     */
    private $cbChBatonSau = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChDague", type="float")
     */
    private $cbChDague = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChDagueDouble", type="float")
     */
    private $cbChDagueDouble = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChGriffe", type="float")
     */
    private $cbChGriffe = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChBatonLong", type="float")
     */
    private $cbChBatonLong = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChBatonSF", type="float")
     */
    private $cbChBatonSF = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChBatonDT", type="float")
     */
    private $cbChBatonDT = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChTorche", type="float")
     */
    private $cbChTorche = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChCasque1", type="float")
     */
    private $cbChCasque1 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChCasque2", type="float")
     */
    private $cbChCasque2 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChCasque3", type="float")
     */
    private $cbChCasque3 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChArmure1", type="float")
     */
    private $cbChArmure1 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChArmure2", type="float")
     */
    private $cbChArmure2 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChArmure3", type="float")
     */
    private $cbChArmure3 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChBotte1", type="float")
     */
    private $cbChBotte1 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChBotte2", type="float")
     */
    private $cbChBotte2 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbChBotte3", type="float")
     */
    private $cbChBotte3 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoEpeeLarge", type="float")
     */
    private $cbSoEpeeLarge = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoClaymore", type="float")
     */
    private $cbSoClaymore = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoGlaive", type="float")
     */
    private $cbSoGlaive = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoHache", type="float")
     */
    private $cbSoHache = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoGrandeHache", type="float")
     */
    private $cbSoGrandeHache = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoFaux", type="float")
     */
    private $cbSoFaux = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoMassue", type="float")
     */
    private $cbSoMassue = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoMassueLo", type="float")
     */
    private $cbSoMassueLo = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoFleau", type="float")
     */
    private $cbSoFleau = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoMasse", type="float")
     */
    private $cbSoMasse = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoBecDeCorbin", type="float")
     */
    private $cbSoBecDeCorbin = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoGrandeMasse", type="float")
     */
    private $cbSoGrandeMasse = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoArbalete", type="float")
     */
    private $cbSoArbalete = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoArbaleteLo", type="float")
     */
    private $cbSoArbaleteLo = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoArbaleteRep", type="float")
     */
    private $cbSoArbaleteRep = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoBouclier", type="float")
     */
    private $cbSoBouclier = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoCasque1", type="float")
     */
    private $cbSoCasque1 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoCasque2", type="float")
     */
    private $cbSoCasque2 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoCasque3", type="float")
     */
    private $cbSoCasque3 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoArmure1", type="float")
     */
    private $cbSoArmure1 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoArmure2", type="float")
     */
    private $cbSoArmure2 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoArmure3", type="float")
     */
    private $cbSoArmure3 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoBotte1", type="float")
     */
    private $cbSoBotte1 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoBotte2", type="float")
     */
    private $cbSoBotte2 = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="cbSoBotte3", type="float")
     */
    private $cbSoBotte3 = 0;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * set User
     * @param User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }

    /**
     * get User
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Personage
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set spCombat
     *
     * @param string $spCombat
     *
     * @return Personage
     */
    public function setSpCombat($spCombat)
    {
        $this->spCombat = $spCombat;

        return $this;
    }

    /**
     * Get spCombat
     *
     * @return string
     */
    public function getSpCombat()
    {
        return $this->spCombat;
    }

    /**
     * Set spCraft
     *
     * @param string $spCraft
     *
     * @return Personage
     */
    public function setSpCraft($spCraft)
    {
        $this->spCraft = $spCraft;

        return $this;
    }

    /**
     * Get spCraft
     *
     * @return string
     */
    public function getSpCraft()
    {
        return $this->spCraft;
    }

    /**
     * Set fibre
     *
     * @param integer $fibre
     *
     * @return Personage
     */
    public function setFibre($fibre)
    {
        $this->fibre = $fibre;

        return $this;
    }

    /**
     * Get fibre
     *
     * @return int
     */
    public function getFibre()
    {
        return $this->fibre;
    }

    /**
     * Set bois
     *
     * @param integer $bois
     *
     * @return Personage
     */
    public function setBois($bois)
    {
        $this->bois = $bois;

        return $this;
    }

    /**
     * Get bois
     *
     * @return int
     */
    public function getBois()
    {
        return $this->bois;
    }

    /**
     * Set peau
     *
     * @param integer $peau
     *
     * @return Personage
     */
    public function setPeau($peau)
    {
        $this->peau = $peau;

        return $this;
    }

    /**
     * Get peau
     *
     * @return int
     */
    public function getPeau()
    {
        return $this->peau;
    }

    /**
     * Set minerai
     *
     * @param integer $minerai
     *
     * @return Personage
     */
    public function setMinerai($minerai)
    {
        $this->minerai = $minerai;

        return $this;
    }

    /**
     * Get minerai
     *
     * @return int
     */
    public function getMinerai()
    {
        return $this->minerai;
    }

    /**
     * Set pierre
     *
     * @param integer $pierre
     *
     * @return Personage
     */
    public function setPierre($pierre)
    {
        $this->pierre = $pierre;

        return $this;
    }

    /**
     * Get pierre
     *
     * @return int
     */
    public function getPierre()
    {
        return $this->pierre;
    }

    /**
     * Set tissu
     *
     * @param integer $tissu
     *
     * @return Personage
     */
    public function setTissu($tissu)
    {
        $this->tissu = $tissu;

        return $this;
    }

    /**
     * Get tissu
     *
     * @return int
     */
    public function getTissu()
    {
        return $this->tissu;
    }

    /**
     * Set planche
     *
     * @param integer $planche
     *
     * @return Personage
     */
    public function setPlanche($planche)
    {
        $this->planche = $planche;

        return $this;
    }

    /**
     * Get planche
     *
     * @return int
     */
    public function getPlanche()
    {
        return $this->planche;
    }

    /**
     * Set cuir
     *
     * @param integer $cuir
     *
     * @return Personage
     */
    public function setCuir($cuir)
    {
        $this->cuir = $cuir;

        return $this;
    }

    /**
     * Get cuir
     *
     * @return int
     */
    public function getCuir()
    {
        return $this->cuir;
    }

    /**
     * Set barre
     *
     * @param integer $barre
     *
     * @return Personage
     */
    public function setBarre($barre)
    {
        $this->barre = $barre;

        return $this;
    }

    /**
     * Get barre
     *
     * @return int
     */
    public function getBarre()
    {
        return $this->barre;
    }

    /**
     * Set bloc
     *
     * @param integer $bloc
     *
     * @return Personage
     */
    public function setBloc($bloc)
    {
        $this->bloc = $bloc;

        return $this;
    }

    /**
     * Get bloc
     *
     * @return int
     */
    public function getBloc()
    {
        return $this->bloc;
    }

    /**
     * Set ouMasseDemo
     *
     * @param integer $ouMasseDemo
     *
     * @return Personage
     */
    public function setOuMasseDemo($ouMasseDemo)
    {
        $this->ouMasseDemo = $ouMasseDemo;

        return $this;
    }

    /**
     * Get ouMasseDemo
     *
     * @return int
     */
    public function getOuMasseDemo()
    {
        return $this->ouMasseDemo;
    }

    /**
     * Set ouFaucille
     *
     * @param integer $ouFaucille
     *
     * @return Personage
     */
    public function setOuFaucille($ouFaucille)
    {
        $this->ouFaucille = $ouFaucille;

        return $this;
    }

    /**
     * Get ouFaucille
     *
     * @return int
     */
    public function getOuFaucille()
    {
        return $this->ouFaucille;
    }

    /**
     * Set ouCouteau
     *
     * @param integer $ouCouteau
     *
     * @return Personage
     */
    public function setOuCouteau($ouCouteau)
    {
        $this->ouCouteau = $ouCouteau;

        return $this;
    }

    /**
     * Get ouCouteau
     *
     * @return int
     */
    public function getOuCouteau()
    {
        return $this->ouCouteau;
    }

    /**
     * Set ouPioche
     *
     * @param integer $ouPioche
     *
     * @return Personage
     */
    public function setOuPioche($ouPioche)
    {
        $this->ouPioche = $ouPioche;

        return $this;
    }

    /**
     * Get ouPioche
     *
     * @return int
     */
    public function getOuPioche()
    {
        return $this->ouPioche;
    }

    /**
     * Set ouMassePi
     *
     * @param integer $ouMassePi
     *
     * @return Personage
     */
    public function setOuMassePi($ouMassePi)
    {
        $this->ouMassePi = $ouMassePi;

        return $this;
    }

    /**
     * Get ouMassePi
     *
     * @return int
     */
    public function getOuMassePi()
    {
        return $this->ouMassePi;
    }

    /**
     * Set ouHache
     *
     * @param integer $ouHache
     *
     * @return Personage
     */
    public function setOuHache($ouHache)
    {
        $this->ouHache = $ouHache;

        return $this;
    }

    /**
     * Get ouHache
     *
     * @return int
     */
    public function getOuHache()
    {
        return $this->ouHache;
    }

    /**
     * Set accSac
     *
     * @param integer $accSac
     *
     * @return Personage
     */
    public function setAccSac($accSac)
    {
        $this->accSac = $accSac;

        return $this;
    }

    /**
     * Get accSac
     *
     * @return int
     */
    public function getAccSac()
    {
        return $this->accSac;
    }

    /**
     * Set accCape
     *
     * @param integer $accCape
     *
     * @return Personage
     */
    public function setAccCape($accCape)
    {
        $this->accCape = $accCape;

        return $this;
    }

    /**
     * Get accCape
     *
     * @return int
     */
    public function getAccCape()
    {
        return $this->accCape;
    }

    /**
     * Set maBatonFeu
     *
     * @param float $maBatonFeu
     *
     * @return Personage
     */
    public function setMaBatonFeu($maBatonFeu)
    {
        $this->maBatonFeu = $maBatonFeu;

        return $this;
    }

    /**
     * Get maBatonFeu
     *
     * @return int
     */
    public function getMaBatonFeu()
    {
        return $this->maBatonFeu;
    }

    /**
     * Set maGrandBatonFeu
     *
     * @param float $maGrandBatonFeu
     *
     * @return Personage
     */
    public function setMaGrandBatonFeu($maGrandBatonFeu)
    {
        $this->maGrandBatonFeu = $maGrandBatonFeu;

        return $this;
    }

    /**
     * Get maGrandBatonFeu
     *
     * @return int
     */
    public function getMaGrandBatonFeu()
    {
        return $this->maGrandBatonFeu;
    }

    /**
     * Set maBatonInfernal
     *
     * @param float $maBatonInfernal
     *
     * @return Personage
     */
    public function setMaBatonInfernal($maBatonInfernal)
    {
        $this->maBatonInfernal = $maBatonInfernal;

        return $this;
    }

    /**
     * Get maBatonInfernal
     *
     * @return int
     */
    public function getMaBatonInfernal()
    {
        return $this->maBatonInfernal;
    }

    /**
     * Set maBatonBeni
     *
     * @param float $maBatonBeni
     *
     * @return Personage
     */
    public function setMaBatonBeni($maBatonBeni)
    {
        $this->maBatonBeni = $maBatonBeni;

        return $this;
    }

    /**
     * Get maBatonBeni
     *
     * @return int
     */
    public function getMaBatonBeni()
    {
        return $this->maBatonBeni;
    }

    /**
     * Set maGrandBatonBeni
     *
     * @param float $maGrandBatonBeni
     *
     * @return Personage
     */
    public function setMaGrandBatonBeni($maGrandBatonBeni)
    {
        $this->maGrandBatonBeni = $maGrandBatonBeni;

        return $this;
    }

    /**
     * Get maGrandBatonBeni
     *
     * @return int
     */
    public function getMaGrandBatonBeni()
    {
        return $this->maGrandBatonBeni;
    }

    /**
     * Set maBatonDivin
     *
     * @param float $maBatonDivin
     *
     * @return Personage
     */
    public function setMaBatonDivin($maBatonDivin)
    {
        $this->maBatonDivin = $maBatonDivin;

        return $this;
    }

    /**
     * Get maBatonDivin
     *
     * @return int
     */
    public function getMaBatonDivin()
    {
        return $this->maBatonDivin;
    }

    /**
     * Set maBatonEso
     *
     * @param float $maBatonEso
     *
     * @return Personage
     */
    public function setMaBatonEso($maBatonEso)
    {
        $this->maBatonEso = $maBatonEso;

        return $this;
    }

    /**
     * Get maBatonEso
     *
     * @return int
     */
    public function getMaBatonEso()
    {
        return $this->maBatonEso;
    }

    /**
     * Set maGrandBatonEso
     *
     * @param float $maGrandBatonEso
     *
     * @return Personage
     */
    public function setMaGrandBatonEso($maGrandBatonEso)
    {
        $this->maGrandBatonEso = $maGrandBatonEso;

        return $this;
    }

    /**
     * Get maGrandBatonEso
     *
     * @return int
     */
    public function getMaGrandBatonEso()
    {
        return $this->maGrandBatonEso;
    }

    /**
     * Set maBatonEni
     *
     * @param float $maBatonEni
     *
     * @return Personage
     */
    public function setMaBatonEni($maBatonEni)
    {
        $this->maBatonEni = $maBatonEni;

        return $this;
    }

    /**
     * Get maBatonEni
     *
     * @return int
     */
    public function getMaBatonEni()
    {
        return $this->maBatonEni;
    }

    /**
     * Set maBatonGi
     *
     * @param float $maBatonGi
     *
     * @return Personage
     */
    public function setMaBatonGi($maBatonGi)
    {
        $this->maBatonGi = $maBatonGi;

        return $this;
    }

    /**
     * Get maBatonGi
     *
     * @return int
     */
    public function getMaBatonGi()
    {
        return $this->maBatonGi;
    }

    /**
     * Set maGrandBatonGi
     *
     * @param float $maGrandBatonGi
     *
     * @return Personage
     */
    public function setMaGrandBatonGi($maGrandBatonGi)
    {
        $this->maGrandBatonGi = $maGrandBatonGi;

        return $this;
    }

    /**
     * Get maGrandBatonGi
     *
     * @return int
     */
    public function getMaGrandBatonGi()
    {
        return $this->maGrandBatonGi;
    }

    /**
     * Set maBatonGla
     *
     * @param float $maBatonGla
     *
     * @return Personage
     */
    public function setMaBatonGla($maBatonGla)
    {
        $this->maBatonGla = $maBatonGla;

        return $this;
    }

    /**
     * Get maBatonGla
     *
     * @return int
     */
    public function getMaBatonGla()
    {
        return $this->maBatonGla;
    }

    /**
     * Set maBatonDamn
     *
     * @param float $maBatonDamn
     *
     * @return Personage
     */
    public function setMaBatonDamn($maBatonDamn)
    {
        $this->maBatonDamn = $maBatonDamn;

        return $this;
    }

    /**
     * Get maBatonDamn
     *
     * @return int
     */
    public function getMaBatonDamn()
    {
        return $this->maBatonDamn;
    }

    /**
     * Set maGrandBatonDamn
     *
     * @param float $maGrandBatonDamn
     *
     * @return Personage
     */
    public function setMaGrandBatonDamn($maGrandBatonDamn)
    {
        $this->maGrandBatonDamn = $maGrandBatonDamn;

        return $this;
    }

    /**
     * Get maGrandBatonDamn
     *
     * @return int
     */
    public function getMaGrandBatonDamn()
    {
        return $this->maGrandBatonDamn;
    }

    /**
     * Set maBatonDemo
     *
     * @param float $maBatonDemo
     *
     * @return Personage
     */
    public function setMaBatonDemo($maBatonDemo)
    {
        $this->maBatonDemo = $maBatonDemo;

        return $this;
    }

    /**
     * Get maBatonDemo
     *
     * @return int
     */
    public function getMaBatonDemo()
    {
        return $this->maBatonDemo;
    }

    /**
     * Set maTome
     *
     * @param float $maTome
     *
     * @return Personage
     */
    public function setMaTome($maTome)
    {
        $this->maTome = $maTome;

        return $this;
    }

    /**
     * Get maTome
     *
     * @return int
     */
    public function getMaTome()
    {
        return $this->maTome;
    }

    /**
     * Set maCasque1
     *
     * @param float $maCasque1
     *
     * @return Personage
     */
    public function setMaCasque1($maCasque1)
    {
        $this->maCasque1 = $maCasque1;

        return $this;
    }

    /**
     * Get maCasque1
     *
     * @return int
     */
    public function getMaCasque1()
    {
        return $this->maCasque1;
    }

    /**
     * Set maCasque2
     *
     * @param float $maCasque2
     *
     * @return Personage
     */
    public function setMaCasque2($maCasque2)
    {
        $this->maCasque2 = $maCasque2;

        return $this;
    }

    /**
     * Get maCasque2
     *
     * @return int
     */
    public function getMaCasque2()
    {
        return $this->maCasque2;
    }

    /**
     * Set maCasque3
     *
     * @param float $maCasque3
     *
     * @return Personage
     */
    public function setMaCasque3($maCasque3)
    {
        $this->maCasque3 = $maCasque3;

        return $this;
    }

    /**
     * Get maCasque3
     *
     * @return int
     */
    public function getMaCasque3()
    {
        return $this->maCasque3;
    }

    /**
     * Set maArmure1
     *
     * @param float $maArmure1
     *
     * @return Personage
     */
    public function setMaArmure1($maArmure1)
    {
        $this->maArmure1 = $maArmure1;

        return $this;
    }

    /**
     * Get maArmure1
     *
     * @return int
     */
    public function getMaArmure1()
    {
        return $this->maArmure1;
    }

    /**
     * Set maArmure2
     *
     * @param float $maArmure2
     *
     * @return Personage
     */
    public function setMaArmure2($maArmure2)
    {
        $this->maArmure2 = $maArmure2;

        return $this;
    }

    /**
     * Get maArmure2
     *
     * @return int
     */
    public function getMaArmure2()
    {
        return $this->maArmure2;
    }

    /**
     * Set maArmure3
     *
     * @param float $maArmure3
     *
     * @return Personage
     */
    public function setMaArmure3($maArmure3)
    {
        $this->maArmure3 = $maArmure3;

        return $this;
    }

    /**
     * Get maArmure3
     *
     * @return int
     */
    public function getMaArmure3()
    {
        return $this->maArmure3;
    }

    /**
     * Set maBotte1
     *
     * @param float $maBotte1
     *
     * @return Personage
     */
    public function setMaBotte1($maBotte1)
    {
        $this->maBotte1 = $maBotte1;

        return $this;
    }

    /**
     * Get maBotte1
     *
     * @return int
     */
    public function getMaBotte1()
    {
        return $this->maBotte1;
    }

    /**
     * Set maBotte2
     *
     * @param float $maBotte2
     *
     * @return Personage
     */
    public function setMaBotte2($maBotte2)
    {
        $this->maBotte2 = $maBotte2;

        return $this;
    }

    /**
     * Get maBotte2
     *
     * @return int
     */
    public function getMaBotte2()
    {
        return $this->maBotte2;
    }

    /**
     * Set maBotte3
     *
     * @param float $maBotte3
     *
     * @return Personage
     */
    public function setMaBotte3($maBotte3)
    {
        $this->maBotte3 = $maBotte3;

        return $this;
    }

    /**
     * Get maBotte3
     *
     * @return int
     */
    public function getMaBotte3()
    {
        return $this->maBotte3;
    }

    /**
     * Set chArc
     *
     * @param float $chArc
     *
     * @return Personage
     */
    public function setChArc($chArc)
    {
        $this->chArc = $chArc;

        return $this;
    }

    /**
     * Get chArc
     *
     * @return int
     */
    public function getChArc()
    {
        return $this->chArc;
    }

    /**
     * Set chArcGu
     *
     * @param float $chArcGu
     *
     * @return Personage
     */
    public function setChArcGu($chArcGu)
    {
        $this->chArcGu = $chArcGu;

        return $this;
    }

    /**
     * Get chArcGu
     *
     * @return int
     */
    public function getChArcGu()
    {
        return $this->chArcGu;
    }

    /**
     * Set chArcLo
     *
     * @param float $chArcLo
     *
     * @return Personage
     */
    public function setChArcLo($chArcLo)
    {
        $this->chArcLo = $chArcLo;

        return $this;
    }

    /**
     * Get chArcLo
     *
     * @return int
     */
    public function getChArcLo()
    {
        return $this->chArcLo;
    }

    /**
     * Set chLance
     *
     * @param float $chLance
     *
     * @return Personage
     */
    public function setChLance($chLance)
    {
        $this->chLance = $chLance;

        return $this;
    }

    /**
     * Get chLance
     *
     * @return int
     */
    public function getChLance()
    {
        return $this->chLance;
    }

    /**
     * Set chPique
     *
     * @param float $chPique
     *
     * @return Personage
     */
    public function setChPique($chPique)
    {
        $this->chPique = $chPique;

        return $this;
    }

    /**
     * Get chPique
     *
     * @return int
     */
    public function getChPique()
    {
        return $this->chPique;
    }

    /**
     * Set chHallebarde
     *
     * @param float $chHallebarde
     *
     * @return Personage
     */
    public function setChHallebarde($chHallebarde)
    {
        $this->chHallebarde = $chHallebarde;

        return $this;
    }

    /**
     * Get chHallebarde
     *
     * @return int
     */
    public function getChHallebarde()
    {
        return $this->chHallebarde;
    }

    /**
     * Set chBatonNat
     *
     * @param float $chBatonNat
     *
     * @return Personage
     */
    public function setChBatonNat($chBatonNat)
    {
        $this->chBatonNat = $chBatonNat;

        return $this;
    }

    /**
     * Get chBatonNat
     *
     * @return int
     */
    public function getChBatonNat()
    {
        return $this->chBatonNat;
    }

    /**
     * Set chGrandBatonNat
     *
     * @param float $chGrandBatonNat
     *
     * @return Personage
     */
    public function setChGrandBatonNat($chGrandBatonNat)
    {
        $this->chGrandBatonNat = $chGrandBatonNat;

        return $this;
    }

    /**
     * Get chGrandBatonNat
     *
     * @return int
     */
    public function getChGrandBatonNat()
    {
        return $this->chGrandBatonNat;
    }

    /**
     * Set chBatonSau
     *
     * @param float $chBatonSau
     *
     * @return Personage
     */
    public function setChBatonSau($chBatonSau)
    {
        $this->chBatonSau = $chBatonSau;

        return $this;
    }

    /**
     * Get chBatonSau
     *
     * @return int
     */
    public function getChBatonSau()
    {
        return $this->chBatonSau;
    }

    /**
     * Set chDague
     *
     * @param float $chDague
     *
     * @return Personage
     */
    public function setChDague($chDague)
    {
        $this->chDague = $chDague;

        return $this;
    }

    /**
     * Get chDague
     *
     * @return int
     */
    public function getChDague()
    {
        return $this->chDague;
    }

    /**
     * Set chDagueDouble
     *
     * @param float $chDagueDouble
     *
     * @return Personage
     */
    public function setChDagueDouble($chDagueDouble)
    {
        $this->chDagueDouble = $chDagueDouble;

        return $this;
    }

    /**
     * Get chDagueDouble
     *
     * @return int
     */
    public function getChDagueDouble()
    {
        return $this->chDagueDouble;
    }

    /**
     * Set chGriffe
     *
     * @param float $chGriffe
     *
     * @return Personage
     */
    public function setChGriffe($chGriffe)
    {
        $this->chGriffe = $chGriffe;

        return $this;
    }

    /**
     * Get chGriffe
     *
     * @return int
     */
    public function getChGriffe()
    {
        return $this->chGriffe;
    }

    /**
     * Set chBatonLong
     *
     * @param float $chBatonLong
     *
     * @return Personage
     */
    public function setChBatonLong($chBatonLong)
    {
        $this->chBatonLong = $chBatonLong;

        return $this;
    }

    /**
     * Get chBatonLong
     *
     * @return int
     */
    public function getChBatonLong()
    {
        return $this->chBatonLong;
    }

    /**
     * Set chBatonSF
     *
     * @param float $chBatonSF
     *
     * @return Personage
     */
    public function setChBatonSF($chBatonSF)
    {
        $this->chBatonSF = $chBatonSF;

        return $this;
    }

    /**
     * Get chBatonSF
     *
     * @return int
     */
    public function getChBatonSF()
    {
        return $this->chBatonSF;
    }

    /**
     * Set chBatonDT
     *
     * @param float $chBatonDT
     *
     * @return Personage
     */
    public function setChBatonDT($chBatonDT)
    {
        $this->chBatonDT = $chBatonDT;

        return $this;
    }

    /**
     * Get chBatonDT
     *
     * @return int
     */
    public function getChBatonDT()
    {
        return $this->chBatonDT;
    }

    /**
     * Set chTorche
     *
     * @param float $chTorche
     *
     * @return Personage
     */
    public function setChTorche($chTorche)
    {
        $this->chTorche = $chTorche;

        return $this;
    }

    /**
     * Get chTorche
     *
     * @return int
     */
    public function getChTorche()
    {
        return $this->chTorche;
    }

    /**
     * Set chCasque1
     *
     * @param float $chCasque1
     *
     * @return Personage
     */
    public function setChCasque1($chCasque1)
    {
        $this->chCasque1 = $chCasque1;

        return $this;
    }

    /**
     * Get chCasque1
     *
     * @return int
     */
    public function getChCasque1()
    {
        return $this->chCasque1;
    }

    /**
     * Set chCasque2
     *
     * @param float $chCasque2
     *
     * @return Personage
     */
    public function setChCasque2($chCasque2)
    {
        $this->chCasque2 = $chCasque2;

        return $this;
    }

    /**
     * Get chCasque2
     *
     * @return int
     */
    public function getChCasque2()
    {
        return $this->chCasque2;
    }

    /**
     * Set chCasque3
     *
     * @param float $chCasque3
     *
     * @return Personage
     */
    public function setChCasque3($chCasque3)
    {
        $this->chCasque3 = $chCasque3;

        return $this;
    }

    /**
     * Get chCasque3
     *
     * @return int
     */
    public function getChCasque3()
    {
        return $this->chCasque3;
    }

    /**
     * Set chArmure1
     *
     * @param float $chArmure1
     *
     * @return Personage
     */
    public function setChArmure1($chArmure1)
    {
        $this->chArmure1 = $chArmure1;

        return $this;
    }

    /**
     * Get chArmure1
     *
     * @return int
     */
    public function getChArmure1()
    {
        return $this->chArmure1;
    }

    /**
     * Set chArmure2
     *
     * @param float $chArmure2
     *
     * @return Personage
     */
    public function setChArmure2($chArmure2)
    {
        $this->chArmure2 = $chArmure2;

        return $this;
    }

    /**
     * Get chArmure2
     *
     * @return int
     */
    public function getChArmure2()
    {
        return $this->chArmure2;
    }

    /**
     * Set chArmure3
     *
     * @param int $chArmure3
     *
     * @return Personage
     */
    public function setChArmure3($chArmure3)
    {
        $this->chArmure3 = $chArmure3;

        return $this;
    }

    /**
     * Get chArmure3
     *
     * @return int
     */
    public function getChArmure3()
    {
        return $this->chArmure3;
    }

    /**
     * Set chBotte1
     *
     * @param float $chBotte1
     *
     * @return Personage
     */
    public function setChBotte1($chBotte1)
    {
        $this->chBotte1 = $chBotte1;

        return $this;
    }

    /**
     * Get chBotte1
     *
     * @return int
     */
    public function getChBotte1()
    {
        return $this->chBotte1;
    }

    /**
     * Set chBotte2
     *
     * @param float $chBotte2
     *
     * @return Personage
     */
    public function setChBotte2($chBotte2)
    {
        $this->chBotte2 = $chBotte2;

        return $this;
    }

    /**
     * Get chBotte2
     *
     * @return int
     */
    public function getChBotte2()
    {
        return $this->chBotte2;
    }

    /**
     * Set chBotte3
     *
     * @param float $chBotte3
     *
     * @return Personage
     */
    public function setChBotte3($chBotte3)
    {
        $this->chBotte3 = $chBotte3;

        return $this;
    }

    /**
     * Get chBotte3
     *
     * @return int
     */
    public function getChBotte3()
    {
        return $this->chBotte3;
    }

    /**
     * Set soEpeeLarge
     *
     * @param float $soEpeeLarge
     *
     * @return Personage
     */
    public function setSoEpeeLarge($soEpeeLarge)
    {
        $this->soEpeeLarge = $soEpeeLarge;

        return $this;
    }

    /**
     * Get soEpeeLarge
     *
     * @return int
     */
    public function getSoEpeeLarge()
    {
        return $this->soEpeeLarge;
    }

    /**
     * Set soClaymore
     *
     * @param float $soClaymore
     *
     * @return Personage
     */
    public function setSoClaymore($soClaymore)
    {
        $this->soClaymore = $soClaymore;

        return $this;
    }

    /**
     * Get soClaymore
     *
     * @return int
     */
    public function getSoClaymore()
    {
        return $this->soClaymore;
    }

    /**
     * Set soGlaive
     *
     * @param float $soGlaive
     *
     * @return Personage
     */
    public function setSoGlaive($soGlaive)
    {
        $this->soGlaive = $soGlaive;

        return $this;
    }

    /**
     * Get soGlaive
     *
     * @return int
     */
    public function getSoGlaive()
    {
        return $this->soGlaive;
    }

    /**
     * Set soHache
     *
     * @param float $soHache
     *
     * @return Personage
     */
    public function setSoHache($soHache)
    {
        $this->soHache = $soHache;

        return $this;
    }

    /**
     * Get soHache
     *
     * @return int
     */
    public function getSoHache()
    {
        return $this->soHache;
    }

    /**
     * Set soGrandeHache
     *
     * @param float $soGrandeHache
     *
     * @return Personage
     */
    public function setSoGrandeHache($soGrandeHache)
    {
        $this->soGrandeHache = $soGrandeHache;

        return $this;
    }

    /**
     * Get soGrandeHache
     *
     * @return int
     */
    public function getSoGrandeHache()
    {
        return $this->soGrandeHache;
    }

    /**
     * Set soFaux
     *
     * @param float $soFaux
     *
     * @return Personage
     */
    public function setSoFaux($soFaux)
    {
        $this->soFaux = $soFaux;

        return $this;
    }

    /**
     * Get soFaux
     *
     * @return int
     */
    public function getSoFaux()
    {
        return $this->soFaux;
    }

    /**
     * Set soMassue
     *
     * @param float $soMassue
     *
     * @return Personage
     */
    public function setSoMassue($soMassue)
    {
        $this->soMassue = $soMassue;

        return $this;
    }

    /**
     * Get soMassue
     *
     * @return int
     */
    public function getSoMassue()
    {
        return $this->soMassue;
    }

    /**
     * Set soMassueLo
     *
     * @param float $soMassueLo
     *
     * @return Personage
     */
    public function setSoMassueLo($soMassueLo)
    {
        $this->soMassueLo = $soMassueLo;

        return $this;
    }

    /**
     * Get soMassueLo
     *
     * @return int
     */
    public function getSoMassueLo()
    {
        return $this->soMassueLo;
    }

    /**
     * Set soFleau
     *
     * @param float $soFleau
     *
     * @return Personage
     */
    public function setSoFleau($soFleau)
    {
        $this->soFleau = $soFleau;

        return $this;
    }

    /**
     * Get soFleau
     *
     * @return int
     */
    public function getSoFleau()
    {
        return $this->soFleau;
    }

    /**
     * Set soMasse
     *
     * @param float $soMasse
     *
     * @return Personage
     */
    public function setSoMasse($soMasse)
    {
        $this->soMasse = $soMasse;

        return $this;
    }

    /**
     * Get soMasse
     *
     * @return int
     */
    public function getSoMasse()
    {
        return $this->soMasse;
    }

    /**
     * Set soBecDeCorbin
     *
     * @param float $soBecDeCorbin
     *
     * @return Personage
     */
    public function setSoBecDeCorbin($soBecDeCorbin)
    {
        $this->soBecDeCorbin = $soBecDeCorbin;

        return $this;
    }

    /**
     * Get soBecDeCorbin
     *
     * @return int
     */
    public function getSoBecDeCorbin()
    {
        return $this->soBecDeCorbin;
    }

    /**
     * Set soGrandeMasse
     *
     * @param float $soGrandeMasse
     *
     * @return Personage
     */
    public function setSoGrandeMasse($soGrandeMasse)
    {
        $this->soGrandeMasse = $soGrandeMasse;

        return $this;
    }

    /**
     * Get soGrandeMasse
     *
     * @return int
     */
    public function getSoGrandeMasse()
    {
        return $this->soGrandeMasse;
    }

    /**
     * Set soArbalete
     *
     * @param float $soArbalete
     *
     * @return Personage
     */
    public function setSoArbalete($soArbalete)
    {
        $this->soArbalete = $soArbalete;

        return $this;
    }

    /**
     * Get soArbalete
     *
     * @return int
     */
    public function getSoArbalete()
    {
        return $this->soArbalete;
    }

    /**
     * Set soArbaleteLo
     *
     * @param float $soArbaleteLo
     *
     * @return Personage
     */
    public function setSoArbaleteLo($soArbaleteLo)
    {
        $this->soArbaleteLo = $soArbaleteLo;

        return $this;
    }

    /**
     * Get soArbaleteLo
     *
     * @return int
     */
    public function getSoArbaleteLo()
    {
        return $this->soArbaleteLo;
    }

    /**
     * Set soArbaleteRep
     *
     * @param float $soArbaleteRep
     *
     * @return Personage
     */
    public function setSoArbaleteRep($soArbaleteRep)
    {
        $this->soArbaleteRep = $soArbaleteRep;

        return $this;
    }

    /**
     * Get soArbaleteRep
     *
     * @return int
     */
    public function getSoArbaleteRep()
    {
        return $this->soArbaleteRep;
    }

    /**
     * Set soBouclier
     *
     * @param float $soBouclier
     *
     * @return Personage
     */
    public function setSoBouclier($soBouclier)
    {
        $this->soBouclier = $soBouclier;

        return $this;
    }

    /**
     * Get soBouclier
     *
     * @return int
     */
    public function getSoBouclier()
    {
        return $this->soBouclier;
    }

    /**
     * Set soCasque1
     *
     * @param float $soCasque1
     *
     * @return Personage
     */
    public function setSoCasque1($soCasque1)
    {
        $this->soCasque1 = $soCasque1;

        return $this;
    }

    /**
     * Get soCasque1
     *
     * @return int
     */
    public function getSoCasque1()
    {
        return $this->soCasque1;
    }

    /**
     * Set soCasque2
     *
     * @param float $soCasque2
     *
     * @return Personage
     */
    public function setSoCasque2($soCasque2)
    {
        $this->soCasque2 = $soCasque2;

        return $this;
    }

    /**
     * Get soCasque2
     *
     * @return int
     */
    public function getSoCasque2()
    {
        return $this->soCasque2;
    }

    /**
     * Set soCasque3
     *
     * @param float $soCasque3
     *
     * @return Personage
     */
    public function setSoCasque3($soCasque3)
    {
        $this->soCasque3 = $soCasque3;

        return $this;
    }

    /**
     * Get soCasque3
     *
     * @return int
     */
    public function getSoCasque3()
    {
        return $this->soCasque3;
    }

    /**
     * Set soArmure1
     *
     * @param float $soArmure1
     *
     * @return Personage
     */
    public function setSoArmure1($soArmure1)
    {
        $this->soArmure1 = $soArmure1;

        return $this;
    }

    /**
     * Get soArmure1
     *
     * @return int
     */
    public function getSoArmure1()
    {
        return $this->soArmure1;
    }

    /**
     * Set soArmure2
     *
     * @param float $soArmure2
     *
     * @return Personage
     */
    public function setSoArmure2($soArmure2)
    {
        $this->soArmure2 = $soArmure2;

        return $this;
    }

    /**
     * Get soArmure2
     *
     * @return int
     */
    public function getSoArmure2()
    {
        return $this->soArmure2;
    }

    /**
     * Set soArmure3
     *
     * @param float $soArmure3
     *
     * @return Personage
     */
    public function setSoArmure3($soArmure3)
    {
        $this->soArmure3 = $soArmure3;

        return $this;
    }

    /**
     * Get soArmure3
     *
     * @return int
     */
    public function getSoArmure3()
    {
        return $this->soArmure3;
    }

    /**
     * Set soBotte1
     *
     * @param float $soBotte1
     *
     * @return Personage
     */
    public function setSoBotte1($soBotte1)
    {
        $this->soBotte1 = $soBotte1;

        return $this;
    }

    /**
     * Get soBotte1
     *
     * @return int
     */
    public function getSoBotte1()
    {
        return $this->soBotte1;
    }

    /**
     * Set soBotte2
     *
     * @param float $soBotte2
     *
     * @return Personage
     */
    public function setSoBotte2($soBotte2)
    {
        $this->soBotte2 = $soBotte2;

        return $this;
    }

    /**
     * Get soBotte2
     *
     * @return int
     */
    public function getSoBotte2()
    {
        return $this->soBotte2;
    }

    /**
     * Set soBotte3
     *
     * @param float $soBotte3
     *
     * @return Personage
     */
    public function setSoBotte3($soBotte3)
    {
        $this->soBotte3 = $soBotte3;

        return $this;
    }

    /**
     * Get soBotte3
     *
     * @return int
     */
    public function getSoBotte3()
    {
        return $this->soBotte3;
    }

    /**
     * Set alHeal
     *
     * @param integer $alHeal
     *
     * @return Personage
     */
    public function setAlHeal($alHeal)
    {
        $this->alHeal = $alHeal;

        return $this;
    }

    /**
     * Get alHeal
     *
     * @return int
     */
    public function getAlHeal()
    {
        return $this->alHeal;
    }

    /**
     * Set alEnergy
     *
     * @param integer $alEnergy
     *
     * @return Personage
     */
    public function setAlEnergy($alEnergy)
    {
        $this->alEnergy = $alEnergy;

        return $this;
    }

    /**
     * Get alEnergy
     *
     * @return int
     */
    public function getAlEnergy()
    {
        return $this->alEnergy;
    }

    /**
     * Set alRevive
     *
     * @param integer $alRevive
     *
     * @return Personage
     */
    public function setAlRevive($alRevive)
    {
        $this->alRevive = $alRevive;

        return $this;
    }

    /**
     * Get alRevive
     *
     * @return int
     */
    public function getAlRevive()
    {
        return $this->alRevive;
    }

    /**
     * Set alStone
     *
     * @param integer $alStone
     *
     * @return Personage
     */
    public function setAlStone($alStone)
    {
        $this->alStone = $alStone;

        return $this;
    }

    /**
     * Get alStone
     *
     * @return int
     */
    public function getAlStone()
    {
        return $this->alStone;
    }

    /**
     * Set alChill
     *
     * @param integer $alChill
     *
     * @return Personage
     */
    public function setAlChill($alChill)
    {
        $this->alChill = $alChill;

        return $this;
    }

    /**
     * Get alChill
     *
     * @return int
     */
    public function getAlChill()
    {
        return $this->alChill;
    }

    /**
     * Set alRecovery
     *
     * @param integer $alRecovery
     *
     * @return Personage
     */
    public function setAlRecovery($alRecovery)
    {
        $this->alRecovery = $alRecovery;

        return $this;
    }

    /**
     * Get alRecovery
     *
     * @return int
     */
    public function getAlRecovery()
    {
        return $this->alRecovery;
    }

    /**
     * Set alClean
     *
     * @param integer $alClean
     *
     * @return Personage
     */
    public function setAlClean($alClean)
    {
        $this->alClean = $alClean;

        return $this;
    }

    /**
     * Get alClean
     *
     * @return int
     */
    public function getAlClean()
    {
        return $this->alClean;
    }

    /**
     * Set alAlcohol
     *
     * @param integer $alAlcohol
     *
     * @return Personage
     */
    public function setAlAlcohol($alAlcohol)
    {
        $this->alAlcohol = $alAlcohol;

        return $this;
    }

    /**
     * Get alAlcohol
     *
     * @return int
     */
    public function getAlAlcohol()
    {
        return $this->alAlcohol;
    }

    /**
     * Set herbo
     *
     * @param integer $herbo
     *
     * @return Personage
     */
    public function setHerbo($herbo)
    {
        $this->herbo = $herbo;

        return $this;
    }

    /**
     * Get herbo
     *
     * @return int
     */
    public function getHerbo()
    {
        return $this->herbo;
    }

    /**
     * Set anMonture
     *
     * @param integer $anMonture
     *
     * @return Personage
     */
    public function setAnMonture($anMonture)
    {
        $this->anMonture = $anMonture;

        return $this;
    }

    /**
     * Get anMonture
     *
     * @return int
     */
    public function getAnMonture()
    {
        return $this->anMonture;
    }

    /**
     * Set anFerme
     *
     * @param integer $anFerme
     *
     * @return Personage
     */
    public function setAnFerme($anFerme)
    {
        $this->anFerme = $anFerme;

        return $this;
    }

    /**
     * Get anFerme
     *
     * @return int
     */
    public function getAnFerme()
    {
        return $this->anFerme;
    }

    /**
     * Set cuSoup
     *
     * @param integer $cuSoup
     *
     * @return Personage
     */
    public function setCuSoup($cuSoup)
    {
        $this->cuSoup = $cuSoup;

        return $this;
    }

    /**
     * Get cuSoup
     *
     * @return int
     */
    public function getCuSoup()
    {
        return $this->cuSoup;
    }

    /**
     * Set cuSalad
     *
     * @param integer $cuSalad
     *
     * @return Personage
     */
    public function setCuSalad($cuSalad)
    {
        $this->cuSalad = $cuSalad;

        return $this;
    }

    /**
     * Get cuSalad
     *
     * @return int
     */
    public function getCuSalad()
    {
        return $this->cuSalad;
    }

    /**
     * Set cuPie
     *
     * @param integer $cuPie
     *
     * @return Personage
     */
    public function setCuPie($cuPie)
    {
        $this->cuPie = $cuPie;

        return $this;
    }

    /**
     * Get cuPie
     *
     * @return int
     */
    public function getCuPie()
    {
        return $this->cuPie;
    }

    /**
     * Set cuOmelette
     *
     * @param integer $cuOmelette
     *
     * @return Personage
     */
    public function setCuOmelette($cuOmelette)
    {
        $this->cuOmelette = $cuOmelette;

        return $this;
    }

    /**
     * Get cuOmelette
     *
     * @return int
     */
    public function getCuOmelette()
    {
        return $this->cuOmelette;
    }

    /**
     * Set cuSandwich
     *
     * @param integer $cuSandwich
     *
     * @return Personage
     */
    public function setCuSandwich($cuSandwich)
    {
        $this->cuSandwich = $cuSandwich;

        return $this;
    }

    /**
     * Get cuSandwich
     *
     * @return int
     */
    public function getCuSandwich()
    {
        return $this->cuSandwich;
    }

    /**
     * Set cuStew
     *
     * @param integer $cuStew
     *
     * @return Personage
     */
    public function setCuStew($cuStew)
    {
        $this->cuStew = $cuStew;

        return $this;
    }

    /**
     * Get cuStew
     *
     * @return int
     */
    public function getCuStew()
    {
        return $this->cuStew;
    }

    /**
     * Set cuProduct
     *
     * @param integer $cuProduct
     *
     * @return Personage
     */
    public function setCuProduct($cuProduct)
    {
        $this->cuProduct = $cuProduct;

        return $this;
    }

    /**
     * Get cuProduct
     *
     * @return int
     */
    public function getCuProduct()
    {
        return $this->cuProduct;
    }

    /**
     * Set cuMeat
     *
     * @param integer $cuMeat
     *
     * @return Personage
     */
    public function setCuMeat($cuMeat)
    {
        $this->cuMeat = $cuMeat;

        return $this;
    }

    /**
     * Get cuMeat
     *
     * @return int
     */
    public function getCuMeat()
    {
        return $this->cuMeat;
    }

    /**
     * Set paysan
     *
     * @param integer $paysan
     *
     * @return Personage
     */
    public function setPaysan($paysan)
    {
        $this->paysan = $paysan;

        return $this;
    }

    /**
     * Get paysan
     *
     * @return int
     */
    public function getPaysan()
    {
        return $this->paysan;
    }

    /**
     * Set cbMaBatonFeu
     *
     * @param float $cbMaBatonFeu
     *
     * @return Personage
     */
    public function setCbMaBatonFeu($cbMaBatonFeu)
    {
        $this->cbMaBatonFeu = $cbMaBatonFeu;

        return $this;
    }

    /**
     * Get cbMaBatonFeu
     *
     * @return int
     */
    public function getCbMaBatonFeu()
    {
        return $this->cbMaBatonFeu;
    }

    /**
     * Set cbMaGrandBatonFeu
     *
     * @param float $cbMaGrandBatonFeu
     *
     * @return Personage
     */
    public function setCbMaGrandBatonFeu($cbMaGrandBatonFeu)
    {
        $this->cbMaGrandBatonFeu = $cbMaGrandBatonFeu;

        return $this;
    }

    /**
     * Get cbMaGrandBatonFeu
     *
     * @return int
     */
    public function getCbMaGrandBatonFeu()
    {
        return $this->cbMaGrandBatonFeu;
    }

    /**
     * Set cbMaBatonInfernal
     *
     * @param float $cbMaBatonInfernal
     *
     * @return Personage
     */
    public function setCbMaBatonInfernal($cbMaBatonInfernal)
    {
        $this->cbMaBatonInfernal = $cbMaBatonInfernal;

        return $this;
    }

    /**
     * Get cbMaBatonInfernal
     *
     * @return int
     */
    public function getCbMaBatonInfernal()
    {
        return $this->cbMaBatonInfernal;
    }

    /**
     * Set cbMaBatonBeni
     *
     * @param float $cbMaBatonBeni
     *
     * @return Personage
     */
    public function setCbMaBatonBeni($cbMaBatonBeni)
    {
        $this->cbMaBatonBeni = $cbMaBatonBeni;

        return $this;
    }

    /**
     * Get cbMaBatonBeni
     *
     * @return int
     */
    public function getCbMaBatonBeni()
    {
        return $this->cbMaBatonBeni;
    }

    /**
     * Set cbMaGrandBatonBeni
     *
     * @param float $cbMaGrandBatonBeni
     *
     * @return Personage
     */
    public function setCbMaGrandBatonBeni($cbMaGrandBatonBeni)
    {
        $this->cbMaGrandBatonBeni = $cbMaGrandBatonBeni;

        return $this;
    }

    /**
     * Get cbMaGrandBatonBeni
     *
     * @return int
     */
    public function getCbMaGrandBatonBeni()
    {
        return $this->cbMaGrandBatonBeni;
    }

    /**
     * Set cbMaBatonDivin
     *
     * @param float $cbMaBatonDivin
     *
     * @return Personage
     */
    public function setCbMaBatonDivin($cbMaBatonDivin)
    {
        $this->cbMaBatonDivin = $cbMaBatonDivin;

        return $this;
    }

    /**
     * Get cbMaBatonDivin
     *
     * @return int
     */
    public function getCbMaBatonDivin()
    {
        return $this->cbMaBatonDivin;
    }

    /**
     * Set cbMaBatonEso
     *
     * @param float $cbMaBatonEso
     *
     * @return Personage
     */
    public function setCbMaBatonEso($cbMaBatonEso)
    {
        $this->cbMaBatonEso = $cbMaBatonEso;

        return $this;
    }

    /**
     * Get cbMaBatonEso
     *
     * @return int
     */
    public function getCbMaBatonEso()
    {
        return $this->cbMaBatonEso;
    }

    /**
     * Set cbMaGrandBatonEso
     *
     * @param float $cbMaGrandBatonEso
     *
     * @return Personage
     */
    public function setCbMaGrandBatonEso($cbMaGrandBatonEso)
    {
        $this->cbMaGrandBatonEso = $cbMaGrandBatonEso;

        return $this;
    }

    /**
     * Get cbMaGrandBatonEso
     *
     * @return int
     */
    public function getCbMaGrandBatonEso()
    {
        return $this->cbMaGrandBatonEso;
    }

    /**
     * Set cbMaBatonEni
     *
     * @param float $cbMaBatonEni
     *
     * @return Personage
     */
    public function setCbMaBatonEni($cbMaBatonEni)
    {
        $this->cbMaBatonEni = $cbMaBatonEni;

        return $this;
    }

    /**
     * Get cbMaBatonEni
     *
     * @return int
     */
    public function getCbMaBatonEni()
    {
        return $this->cbMaBatonEni;
    }

    /**
     * Set cbMaBatonGi
     *
     * @param float $cbMaBatonGi
     *
     * @return Personage
     */
    public function setCbMaBatonGi($cbMaBatonGi)
    {
        $this->cbMaBatonGi = $cbMaBatonGi;

        return $this;
    }

    /**
     * Get cbMaBatonGi
     *
     * @return int
     */
    public function getCbMaBatonGi()
    {
        return $this->cbMaBatonGi;
    }

    /**
     * Set cbMaGrandBatonGi
     *
     * @param float $cbMaGrandBatonGi
     *
     * @return Personage
     */
    public function setCbMaGrandBatonGi($cbMaGrandBatonGi)
    {
        $this->cbMaGrandBatonGi = $cbMaGrandBatonGi;

        return $this;
    }

    /**
     * Get cbMaGrandBatonGi
     *
     * @return int
     */
    public function getCbMaGrandBatonGi()
    {
        return $this->cbMaGrandBatonGi;
    }

    /**
     * Set cbMaBatonGla
     *
     * @param float $cbMaBatonGla
     *
     * @return Personage
     */
    public function setCbMaBatonGla($cbMaBatonGla)
    {
        $this->cbMaBatonGla = $cbMaBatonGla;

        return $this;
    }

    /**
     * Get cbMaBatonGla
     *
     * @return int
     */
    public function getCbMaBatonGla()
    {
        return $this->cbMaBatonGla;
    }

    /**
     * Set cbMaBatonDamn
     *
     * @param float $cbMaBatonDamn
     *
     * @return Personage
     */
    public function setCbMaBatonDamn($cbMaBatonDamn)
    {
        $this->cbMaBatonDamn = $cbMaBatonDamn;

        return $this;
    }

    /**
     * Get cbMaBatonDamn
     *
     * @return int
     */
    public function getCbMaBatonDamn()
    {
        return $this->cbMaBatonDamn;
    }

    /**
     * Set cbMaGrandBatonDamn
     *
     * @param float $cbMaGrandBatonDamn
     *
     * @return Personage
     */
    public function setCbMaGrandBatonDamn($cbMaGrandBatonDamn)
    {
        $this->cbMaGrandBatonDamn = $cbMaGrandBatonDamn;

        return $this;
    }

    /**
     * Get cbMaGrandBatonDamn
     *
     * @return int
     */
    public function getCbMaGrandBatonDamn()
    {
        return $this->cbMaGrandBatonDamn;
    }

    /**
     * Set cbMaBatonDemo
     *
     * @param float $cbMaBatonDemo
     *
     * @return Personage
     */
    public function setCbMaBatonDemo($cbMaBatonDemo)
    {
        $this->cbMaBatonDemo = $cbMaBatonDemo;

        return $this;
    }

    /**
     * Get cbMaBatonDemo
     *
     * @return int
     */
    public function getCbMaBatonDemo()
    {
        return $this->cbMaBatonDemo;
    }

    /**
     * Set cbMaTome
     *
     * @param float $cbMaTome
     *
     * @return Personage
     */
    public function setCbMaTome($cbMaTome)
    {
        $this->cbMaTome = $cbMaTome;

        return $this;
    }

    /**
     * Get cbMaTome
     *
     * @return int
     */
    public function getCbMaTome()
    {
        return $this->cbMaTome;
    }

    /**
     * Set cbMaCasque1
     *
     * @param float $cbMaCasque1
     *
     * @return Personage
     */
    public function setCbMaCasque1($cbMaCasque1)
    {
        $this->cbMaCasque1 = $cbMaCasque1;

        return $this;
    }

    /**
     * Get cbMaCasque1
     *
     * @return int
     */
    public function getCbMaCasque1()
    {
        return $this->cbMaCasque1;
    }

    /**
     * Set cbMaCasque2
     *
     * @param float $cbMaCasque2
     *
     * @return Personage
     */
    public function setCbMaCasque2($cbMaCasque2)
    {
        $this->cbMaCasque2 = $cbMaCasque2;

        return $this;
    }

    /**
     * Get cbMaCasque2
     *
     * @return int
     */
    public function getCbMaCasque2()
    {
        return $this->cbMaCasque2;
    }

    /**
     * Set cbMaCasque3
     *
     * @param float $cbMaCasque3
     *
     * @return Personage
     */
    public function setCbMaCasque3($cbMaCasque3)
    {
        $this->cbMaCasque3 = $cbMaCasque3;

        return $this;
    }

    /**
     * Get cbMaCasque3
     *
     * @return int
     */
    public function getCbMaCasque3()
    {
        return $this->cbMaCasque3;
    }

    /**
     * Set cbMaArmure1
     *
     * @param float $cbMaArmure1
     *
     * @return Personage
     */
    public function setCbMaArmure1($cbMaArmure1)
    {
        $this->cbMaArmure1 = $cbMaArmure1;

        return $this;
    }

    /**
     * Get cbMaArmure1
     *
     * @return int
     */
    public function getCbMaArmure1()
    {
        return $this->cbMaArmure1;
    }

    /**
     * Set cbMaArmure2
     *
     * @param float $cbMaArmure2
     *
     * @return Personage
     */
    public function setCbMaArmure2($cbMaArmure2)
    {
        $this->cbMaArmure2 = $cbMaArmure2;

        return $this;
    }

    /**
     * Get cbMaArmure2
     *
     * @return int
     */
    public function getCbMaArmure2()
    {
        return $this->cbMaArmure2;
    }

    /**
     * Set cbMaArmure3
     *
     * @param float $cbMaArmure3
     *
     * @return Personage
     */
    public function setCbMaArmure3($cbMaArmure3)
    {
        $this->cbMaArmure3 = $cbMaArmure3;

        return $this;
    }

    /**
     * Get cbMaArmure3
     *
     * @return int
     */
    public function getCbMaArmure3()
    {
        return $this->cbMaArmure3;
    }

    /**
     * Set cbMaBotte1
     *
     * @param float $cbMaBotte1
     *
     * @return Personage
     */
    public function setCbMaBotte1($cbMaBotte1)
    {
        $this->cbMaBotte1 = $cbMaBotte1;

        return $this;
    }

    /**
     * Get cbMaBotte1
     *
     * @return int
     */
    public function getCbMaBotte1()
    {
        return $this->cbMaBotte1;
    }

    /**
     * Set cbMaBotte2
     *
     * @param float $cbMaBotte2
     *
     * @return Personage
     */
    public function setCbMaBotte2($cbMaBotte2)
    {
        $this->cbMaBotte2 = $cbMaBotte2;

        return $this;
    }

    /**
     * Get cbMaBotte2
     *
     * @return int
     */
    public function getCbMaBotte2()
    {
        return $this->cbMaBotte2;
    }

    /**
     * Set cbMaBotte3
     *
     * @param float $cbMaBotte3
     *
     * @return Personage
     */
    public function setCbMaBotte3($cbMaBotte3)
    {
        $this->cbMaBotte3 = $cbMaBotte3;

        return $this;
    }

    /**
     * Get cbMaBotte3
     *
     * @return int
     */
    public function getCbMaBotte3()
    {
        return $this->cbMaBotte3;
    }

    /**
     * Set cbChArc
     *
     * @param float $cbChArc
     *
     * @return Personage
     */
    public function setCbChArc($cbChArc)
    {
        $this->cbChArc = $cbChArc;

        return $this;
    }

    /**
     * Get cbChArc
     *
     * @return int
     */
    public function getCbChArc()
    {
        return $this->cbChArc;
    }

    /**
     * Set cbChArcGu
     *
     * @param float $cbChArcGu
     *
     * @return Personage
     */
    public function setCbChArcGu($cbChArcGu)
    {
        $this->cbChArcGu = $cbChArcGu;

        return $this;
    }

    /**
     * Get cbChArcGu
     *
     * @return int
     */
    public function getCbChArcGu()
    {
        return $this->cbChArcGu;
    }

    /**
     * Set cbChArcLo
     *
     * @param float $cbChArcLo
     *
     * @return Personage
     */
    public function setCbChArcLo($cbChArcLo)
    {
        $this->cbChArcLo = $cbChArcLo;

        return $this;
    }

    /**
     * Get cbChArcLo
     *
     * @return int
     */
    public function getCbChArcLo()
    {
        return $this->cbChArcLo;
    }

    /**
     * Set cbChLance
     *
     * @param float $cbChLance
     *
     * @return Personage
     */
    public function setCbChLance($cbChLance)
    {
        $this->cbChLance = $cbChLance;

        return $this;
    }

    /**
     * Get cbChLance
     *
     * @return int
     */
    public function getCbChLance()
    {
        return $this->cbChLance;
    }

    /**
     * Set cbChPique
     *
     * @param float $cbChPique
     *
     * @return Personage
     */
    public function setCbChPique($cbChPique)
    {
        $this->cbChPique = $cbChPique;

        return $this;
    }

    /**
     * Get cbChPique
     *
     * @return int
     */
    public function getCbChPique()
    {
        return $this->cbChPique;
    }

    /**
     * Set cbChHallebarde
     *
     * @param float $cbChHallebarde
     *
     * @return Personage
     */
    public function setCbChHallebarde($cbChHallebarde)
    {
        $this->cbChHallebarde = $cbChHallebarde;

        return $this;
    }

    /**
     * Get cbChHallebarde
     *
     * @return int
     */
    public function getCbChHallebarde()
    {
        return $this->cbChHallebarde;
    }

    /**
     * Set cbChBatonNat
     *
     * @param float $cbChBatonNat
     *
     * @return Personage
     */
    public function setCbChBatonNat($cbChBatonNat)
    {
        $this->cbChBatonNat = $cbChBatonNat;

        return $this;
    }

    /**
     * Get cbChBatonNat
     *
     * @return int
     */
    public function getCbChBatonNat()
    {
        return $this->cbChBatonNat;
    }

    /**
     * Set cbChGrandBatonNat
     *
     * @param int $cbChGrandBatonNat
     *
     * @return Personage
     */
    public function setCbChGrandBatonNat($cbChGrandBatonNat)
    {
        $this->cbChGrandBatonNat = $cbChGrandBatonNat;

        return $this;
    }

    /**
     * Get cbChGrandBatonNat
     *
     * @return int
     */
    public function getCbChGrandBatonNat()
    {
        return $this->cbChGrandBatonNat;
    }

    /**
     * Set cbChBatonSau
     *
     * @param float $cbChBatonSau
     *
     * @return Personage
     */
    public function setCbChBatonSau($cbChBatonSau)
    {
        $this->cbChBatonSau = $cbChBatonSau;

        return $this;
    }

    /**
     * Get cbChBatonSau
     *
     * @return int
     */
    public function getCbChBatonSau()
    {
        return $this->cbChBatonSau;
    }

    /**
     * Set cbChDague
     *
     * @param float $cbChDague
     *
     * @return Personage
     */
    public function setCbChDague($cbChDague)
    {
        $this->cbChDague = $cbChDague;

        return $this;
    }

    /**
     * Get cbChDague
     *
     * @return int
     */
    public function getCbChDague()
    {
        return $this->cbChDague;
    }

    /**
     * Set cbChDagueDouble
     *
     * @param float $cbChDagueDouble
     *
     * @return Personage
     */
    public function setCbChDagueDouble($cbChDagueDouble)
    {
        $this->cbChDagueDouble = $cbChDagueDouble;

        return $this;
    }

    /**
     * Get cbChDagueDouble
     *
     * @return int
     */
    public function getCbChDagueDouble()
    {
        return $this->cbChDagueDouble;
    }

    /**
     * Set cbChGriffe
     *
     * @param float $cbChGriffe
     *
     * @return Personage
     */
    public function setCbChGriffe($cbChGriffe)
    {
        $this->cbChGriffe = $cbChGriffe;

        return $this;
    }

    /**
     * Get cbChGriffe
     *
     * @return int
     */
    public function getCbChGriffe()
    {
        return $this->cbChGriffe;
    }

    /**
     * Set cbChBatonLong
     *
     * @param float $cbChBatonLong
     *
     * @return Personage
     */
    public function setCbChBatonLong($cbChBatonLong)
    {
        $this->cbChBatonLong = $cbChBatonLong;

        return $this;
    }

    /**
     * Get cbChBatonLong
     *
     * @return int
     */
    public function getCbChBatonLong()
    {
        return $this->cbChBatonLong;
    }

    /**
     * Set cbChBatonSF
     *
     * @param float $cbChBatonSF
     *
     * @return Personage
     */
    public function setCbChBatonSF($cbChBatonSF)
    {
        $this->cbChBatonSF = $cbChBatonSF;

        return $this;
    }

    /**
     * Get cbChBatonSF
     *
     * @return int
     */
    public function getCbChBatonSF()
    {
        return $this->cbChBatonSF;
    }

    /**
     * Set cbChBatonDT
     *
     * @param float $cbChBatonDT
     *
     * @return Personage
     */
    public function setCbChBatonDT($cbChBatonDT)
    {
        $this->cbChBatonDT = $cbChBatonDT;

        return $this;
    }

    /**
     * Get cbChBatonDT
     *
     * @return int
     */
    public function getCbChBatonDT()
    {
        return $this->cbChBatonDT;
    }

    /**
     * Set cbChTorche
     *
     * @param float $cbChTorche
     *
     * @return Personage
     */
    public function setCbChTorche($cbChTorche)
    {
        $this->cbChTorche = $cbChTorche;

        return $this;
    }

    /**
     * Get cbChTorche
     *
     * @return int
     */
    public function getCbChTorche()
    {
        return $this->cbChTorche;
    }

    /**
     * Set cbChCasque1
     *
     * @param float $cbChCasque1
     *
     * @return Personage
     */
    public function setCbChCasque1($cbChCasque1)
    {
        $this->cbChCasque1 = $cbChCasque1;

        return $this;
    }

    /**
     * Get cbChCasque1
     *
     * @return int
     */
    public function getCbChCasque1()
    {
        return $this->cbChCasque1;
    }

    /**
     * Set cbChCasque2
     *
     * @param float $cbChCasque2
     *
     * @return Personage
     */
    public function setCbChCasque2($cbChCasque2)
    {
        $this->cbChCasque2 = $cbChCasque2;

        return $this;
    }

    /**
     * Get cbChCasque2
     *
     * @return int
     */
    public function getCbChCasque2()
    {
        return $this->cbChCasque2;
    }

    /**
     * Set cbChCasque3
     *
     * @param float $cbChCasque3
     *
     * @return Personage
     */
    public function setCbChCasque3($cbChCasque3)
    {
        $this->cbChCasque3 = $cbChCasque3;

        return $this;
    }

    /**
     * Get cbChCasque3
     *
     * @return int
     */
    public function getCbChCasque3()
    {
        return $this->cbChCasque3;
    }

    /**
     * Set cbChArmure1
     *
     * @param float $cbChArmure1
     *
     * @return Personage
     */
    public function setCbChArmure1($cbChArmure1)
    {
        $this->cbChArmure1 = $cbChArmure1;

        return $this;
    }

    /**
     * Get cbChArmure1
     *
     * @return int
     */
    public function getCbChArmure1()
    {
        return $this->cbChArmure1;
    }

    /**
     * Set cbChArmure2
     *
     * @param float $cbChArmure2
     *
     * @return Personage
     */
    public function setCbChArmure2($cbChArmure2)
    {
        $this->cbChArmure2 = $cbChArmure2;

        return $this;
    }

    /**
     * Get cbChArmure2
     *
     * @return int
     */
    public function getCbChArmure2()
    {
        return $this->cbChArmure2;
    }

    /**
     * Set cbChArmure3
     *
     * @param float $cbChArmure3
     *
     * @return Personage
     */
    public function setCbChArmure3($cbChArmure3)
    {
        $this->cbChArmure3 = $cbChArmure3;

        return $this;
    }

    /**
     * Get cbChArmure3
     *
     * @return int
     */
    public function getCbChArmure3()
    {
        return $this->cbChArmure3;
    }

    /**
     * Set cbChBotte1
     *
     * @param float $cbChBotte1
     *
     * @return Personage
     */
    public function setCbChBotte1($cbChBotte1)
    {
        $this->cbChBotte1 = $cbChBotte1;

        return $this;
    }

    /**
     * Get cbChBotte1
     *
     * @return int
     */
    public function getCbChBotte1()
    {
        return $this->cbChBotte1;
    }

    /**
     * Set cbChBotte2
     *
     * @param float $cbChBotte2
     *
     * @return Personage
     */
    public function setCbChBotte2($cbChBotte2)
    {
        $this->cbChBotte2 = $cbChBotte2;

        return $this;
    }

    /**
     * Get cbChBotte2
     *
     * @return int
     */
    public function getCbChBotte2()
    {
        return $this->cbChBotte2;
    }

    /**
     * Set cbChBotte3
     *
     * @param float $cbChBotte3
     *
     * @return Personage
     */
    public function setCbChBotte3($cbChBotte3)
    {
        $this->cbChBotte3 = $cbChBotte3;

        return $this;
    }

    /**
     * Get cbChBotte3
     *
     * @return int
     */
    public function getCbChBotte3()
    {
        return $this->cbChBotte3;
    }

    /**
     * Set cbSoEpeeLarge
     *
     * @param float $cbSoEpeeLarge
     *
     * @return Personage
     */
    public function setCbSoEpeeLarge($cbSoEpeeLarge)
    {
        $this->cbSoEpeeLarge = $cbSoEpeeLarge;

        return $this;
    }

    /**
     * Get cbSoEpeeLarge
     *
     * @return int
     */
    public function getCbSoEpeeLarge()
    {
        return $this->cbSoEpeeLarge;
    }

    /**
     * Set cbSoClaymore
     *
     * @param float $cbSoClaymore
     *
     * @return Personage
     */
    public function setCbSoClaymore($cbSoClaymore)
    {
        $this->cbSoClaymore = $cbSoClaymore;

        return $this;
    }

    /**
     * Get cbSoClaymore
     *
     * @return int
     */
    public function getCbSoClaymore()
    {
        return $this->cbSoClaymore;
    }

    /**
     * Set cbSoGlaive
     *
     * @param float $cbSoGlaive
     *
     * @return Personage
     */
    public function setCbSoGlaive($cbSoGlaive)
    {
        $this->cbSoGlaive = $cbSoGlaive;

        return $this;
    }

    /**
     * Get cbSoGlaive
     *
     * @return int
     */
    public function getCbSoGlaive()
    {
        return $this->cbSoGlaive;
    }

    /**
     * Set cbSoHache
     *
     * @param float $cbSoHache
     *
     * @return Personage
     */
    public function setCbSoHache($cbSoHache)
    {
        $this->cbSoHache = $cbSoHache;

        return $this;
    }

    /**
     * Get cbSoHache
     *
     * @return int
     */
    public function getCbSoHache()
    {
        return $this->cbSoHache;
    }

    /**
     * Set cbSoGrandeHache
     *
     * @param float $cbSoGrandeHache
     *
     * @return Personage
     */
    public function setCbSoGrandeHache($cbSoGrandeHache)
    {
        $this->cbSoGrandeHache = $cbSoGrandeHache;

        return $this;
    }

    /**
     * Get cbSoGrandeHache
     *
     * @return int
     */
    public function getCbSoGrandeHache()
    {
        return $this->cbSoGrandeHache;
    }

    /**
     * Set cbSoFaux
     *
     * @param float $cbSoFaux
     *
     * @return Personage
     */
    public function setCbSoFaux($cbSoFaux)
    {
        $this->cbSoFaux = $cbSoFaux;

        return $this;
    }

    /**
     * Get cbSoFaux
     *
     * @return int
     */
    public function getCbSoFaux()
    {
        return $this->cbSoFaux;
    }

    /**
     * Set cbSoMassue
     *
     * @param float $cbSoMassue
     *
     * @return Personage
     */
    public function setCbSoMassue($cbSoMassue)
    {
        $this->cbSoMassue = $cbSoMassue;

        return $this;
    }

    /**
     * Get cbSoMassue
     *
     * @return int
     */
    public function getCbSoMassue()
    {
        return $this->cbSoMassue;
    }

    /**
     * Set cbSoMassueLo
     *
     * @param float $cbSoMassueLo
     *
     * @return Personage
     */
    public function setCbSoMassueLo($cbSoMassueLo)
    {
        $this->cbSoMassueLo = $cbSoMassueLo;

        return $this;
    }

    /**
     * Get cbSoMassueLo
     *
     * @return int
     */
    public function getCbSoMassueLo()
    {
        return $this->cbSoMassueLo;
    }

    /**
     * Set cbSoFleau
     *
     * @param float $cbSoFleau
     *
     * @return Personage
     */
    public function setCbSoFleau($cbSoFleau)
    {
        $this->cbSoFleau = $cbSoFleau;

        return $this;
    }

    /**
     * Get cbSoFleau
     *
     * @return int
     */
    public function getCbSoFleau()
    {
        return $this->cbSoFleau;
    }

    /**
     * Set cbSoMasse
     *
     * @param float $cbSoMasse
     *
     * @return Personage
     */
    public function setCbSoMasse($cbSoMasse)
    {
        $this->cbSoMasse = $cbSoMasse;

        return $this;
    }

    /**
     * Get cbSoMasse
     *
     * @return int
     */
    public function getCbSoMasse()
    {
        return $this->cbSoMasse;
    }

    /**
     * Set cbSoBecDeCorbin
     *
     * @param float $cbSoBecDeCorbin
     *
     * @return Personage
     */
    public function setCbSoBecDeCorbin($cbSoBecDeCorbin)
    {
        $this->cbSoBecDeCorbin = $cbSoBecDeCorbin;

        return $this;
    }

    /**
     * Get cbSoBecDeCorbin
     *
     * @return int
     */
    public function getCbSoBecDeCorbin()
    {
        return $this->cbSoBecDeCorbin;
    }

    /**
     * Set cbSoGrandeMasse
     *
     * @param float $cbSoGrandeMasse
     *
     * @return Personage
     */
    public function setCbSoGrandeMasse($cbSoGrandeMasse)
    {
        $this->cbSoGrandeMasse = $cbSoGrandeMasse;

        return $this;
    }

    /**
     * Get cbSoGrandeMasse
     *
     * @return int
     */
    public function getCbSoGrandeMasse()
    {
        return $this->cbSoGrandeMasse;
    }

    /**
     * Set cbSoArbalete
     *
     * @param float $cbSoArbalete
     *
     * @return Personage
     */
    public function setCbSoArbalete($cbSoArbalete)
    {
        $this->cbSoArbalete = $cbSoArbalete;

        return $this;
    }

    /**
     * Get cbSoArbalete
     *
     * @return int
     */
    public function getCbSoArbalete()
    {
        return $this->cbSoArbalete;
    }

    /**
     * Set cbSoArbaleteLo
     *
     * @param float $cbSoArbaleteLo
     *
     * @return Personage
     */
    public function setCbSoArbaleteLo($cbSoArbaleteLo)
    {
        $this->cbSoArbaleteLo = $cbSoArbaleteLo;

        return $this;
    }

    /**
     * Get cbSoArbaleteLo
     *
     * @return int
     */
    public function getCbSoArbaleteLo()
    {
        return $this->cbSoArbaleteLo;
    }

    /**
     * Set cbSoArbaleteRep
     *
     * @param float $cbSoArbaleteRep
     *
     * @return Personage
     */
    public function setCbSoArbaleteRep($cbSoArbaleteRep)
    {
        $this->cbSoArbaleteRep = $cbSoArbaleteRep;

        return $this;
    }

    /**
     * Get cbSoArbaleteRep
     *
     * @return int
     */
    public function getCbSoArbaleteRep()
    {
        return $this->cbSoArbaleteRep;
    }

    /**
     * Set cbSoBouclier
     *
     * @param float $cbSoBouclier
     *
     * @return Personage
     */
    public function setCbSoBouclier($cbSoBouclier)
    {
        $this->cbSoBouclier = $cbSoBouclier;

        return $this;
    }

    /**
     * Get cbSoBouclier
     *
     * @return int
     */
    public function getCbSoBouclier()
    {
        return $this->cbSoBouclier;
    }

    /**
     * Set cbSoCasque1
     *
     * @param float $cbSoCasque1
     *
     * @return Personage
     */
    public function setCbSoCasque1($cbSoCasque1)
    {
        $this->cbSoCasque1 = $cbSoCasque1;

        return $this;
    }

    /**
     * Get cbSoCasque1
     *
     * @return int
     */
    public function getCbSoCasque1()
    {
        return $this->cbSoCasque1;
    }

    /**
     * Set cbSoCasque2
     *
     * @param float $cbSoCasque2
     *
     * @return Personage
     */
    public function setCbSoCasque2($cbSoCasque2)
    {
        $this->cbSoCasque2 = $cbSoCasque2;

        return $this;
    }

    /**
     * Get cbSoCasque2
     *
     * @return int
     */
    public function getCbSoCasque2()
    {
        return $this->cbSoCasque2;
    }

    /**
     * Set cbSoCasque3
     *
     * @param float $cbSoCasque3
     *
     * @return Personage
     */
    public function setCbSoCasque3($cbSoCasque3)
    {
        $this->cbSoCasque3 = $cbSoCasque3;

        return $this;
    }

    /**
     * Get cbSoCasque3
     *
     * @return int
     */
    public function getCbSoCasque3()
    {
        return $this->cbSoCasque3;
    }

    /**
     * Set cbSoArmure1
     *
     * @param float $cbSoArmure1
     *
     * @return Personage
     */
    public function setCbSoArmure1($cbSoArmure1)
    {
        $this->cbSoArmure1 = $cbSoArmure1;

        return $this;
    }

    /**
     * Get cbSoArmure1
     *
     * @return int
     */
    public function getCbSoArmure1()
    {
        return $this->cbSoArmure1;
    }

    /**
     * Set cbSoArmure2
     *
     * @param float $cbSoArmure2
     *
     * @return Personage
     */
    public function setCbSoArmure2($cbSoArmure2)
    {
        $this->cbSoArmure2 = $cbSoArmure2;

        return $this;
    }

    /**
     * Get cbSoArmure2
     *
     * @return int
     */
    public function getCbSoArmure2()
    {
        return $this->cbSoArmure2;
    }

    /**
     * Set cbSoArmure3
     *
     * @param float $cbSoArmure3
     *
     * @return Personage
     */
    public function setCbSoArmure3($cbSoArmure3)
    {
        $this->cbSoArmure3 = $cbSoArmure3;

        return $this;
    }

    /**
     * Get cbSoArmure3
     *
     * @return int
     */
    public function getCbSoArmure3()
    {
        return $this->cbSoArmure3;
    }

    /**
     * Set cbSoBotte1
     *
     * @param float $cbSoBotte1
     *
     * @return Personage
     */
    public function setCbSoBotte1($cbSoBotte1)
    {
        $this->cbSoBotte1 = $cbSoBotte1;

        return $this;
    }

    /**
     * Get cbSoBotte1
     *
     * @return int
     */
    public function getCbSoBotte1()
    {
        return $this->cbSoBotte1;
    }

    /**
     * Set cbSoBotte2
     *
     * @param float $cbSoBotte2
     *
     * @return Personage
     */
    public function setCbSoBotte2($cbSoBotte2)
    {
        $this->cbSoBotte2 = $cbSoBotte2;

        return $this;
    }

    /**
     * Get cbSoBotte2
     *
     * @return int
     */
    public function getCbSoBotte2()
    {
        return $this->cbSoBotte2;
    }

    /**
     * Set cbSoBotte3
     *
     * @param float $cbSoBotte3
     *
     * @return Personage
     */
    public function setCbSoBotte3($cbSoBotte3)
    {
        $this->cbSoBotte3 = $cbSoBotte3;

        return $this;
    }

    /**
     * Get cbSoBotte3
     *
     * @return int
     */
    public function getCbSoBotte3()
    {
        return $this->cbSoBotte3;
    }
}

