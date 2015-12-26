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
    private $fibre;

    /**
     * @var int
     *
     * @ORM\Column(name="bois", type="integer")
     */
    private $bois;

    /**
     * @var int
     *
     * @ORM\Column(name="peau", type="integer")
     */
    private $peau;

    /**
     * @var int
     *
     * @ORM\Column(name="minerai", type="integer")
     */
    private $minerai;

    /**
     * @var int
     *
     * @ORM\Column(name="pierre", type="integer")
     */
    private $pierre;

    /**
     * @var array
     *
     * @ORM\Column(name="tissu", type="integer")
     */
    private $tissu;

    /**
     * @var array
     *
     * @ORM\Column(name="planche", type="integer")
     */
    private $planche;

    /**
     * @var array
     *
     * @ORM\Column(name="cuir", type="integer")
     */
    private $cuir;

    /**
     * @var array
     *
     * @ORM\Column(name="barre", type="integer")
     */
    private $barre;

    /**
     * @var int
     *
     * @ORM\Column(name="bloc", type="integer")
     */
    private $bloc;

    /**
     * @var int
     *
     * @ORM\Column(name="ouMasseDemo", type="integer")
     */
    private $ouMasseDemo;

    /**
     * @var int
     *
     * @ORM\Column(name="ouFaucille", type="integer")
     */
    private $ouFaucille;

    /**
     * @var int
     *
     * @ORM\Column(name="ouCouteau", type="integer")
     */
    private $ouCouteau;

    /**
     * @var int
     *
     * @ORM\Column(name="ouPioche", type="integer")
     */
    private $ouPioche;

    /**
     * @var int
     *
     * @ORM\Column(name="ouMassePi", type="integer")
     */
    private $ouMassePi;

    /**
     * @var int
     *
     * @ORM\Column(name="ouHache", type="integer")
     */
    private $ouHache;

    /**
     * @var int
     *
     * @ORM\Column(name="accSac", type="integer")
     */
    private $accSac;

    /**
     * @var int
     *
     * @ORM\Column(name="accCape", type="integer")
     */
    private $accCape;

    /**
     * @var array
     *
     * @ORM\Column(name="maBatonFeu", type="array")
     */
    private $maBatonFeu;

    /**
     * @var array
     *
     * @ORM\Column(name="maBatonBeni", type="array")
     */
    private $maBatonBeni;

    /**
     * @var array
     *
     * @ORM\Column(name="maBatonEso", type="array")
     */
    private $maBatonEso;

    /**
     * @var array
     *
     * @ORM\Column(name="maBatonGi", type="array")
     */
    private $maBatonGi;

    /**
     * @var array
     *
     * @ORM\Column(name="maBatonDamn", type="array")
     */
    private $maBatonDamn;

    /**
     * @var array
     *
     * @ORM\Column(name="maTome", type="array")
     */
    private $maTome;

    /**
     * @var array
     *
     * @ORM\Column(name="maCasque", type="array")
     */
    private $maCasque;

    /**
     * @var array
     *
     * @ORM\Column(name="maArmure", type="array")
     */
    private $maArmure;

    /**
     * @var array
     *
     * @ORM\Column(name="maBotte", type="array")
     */
    private $maBotte;

    /**
     * @var array
     *
     * @ORM\Column(name="chArc", type="array")
     */
    private $chArc;

    /**
     * @var array
     *
     * @ORM\Column(name="chLance", type="array")
     */
    private $chLance;

    /**
     * @var array
     *
     * @ORM\Column(name="chBatonNat", type="array")
     */
    private $chBatonNat;

    /**
     * @var array
     *
     * @ORM\Column(name="chDague", type="array")
     */
    private $chDague;

    /**
     * @var array
     *
     * @ORM\Column(name="chBatonLong", type="array")
     */
    private $chBatonLong;

    /**
     * @var array
     *
     * @ORM\Column(name="chTorche", type="array")
     */
    private $chTorche;

    /**
     * @var array
     *
     * @ORM\Column(name="chCasque", type="array")
     */
    private $chCasque;

    /**
     * @var array
     *
     * @ORM\Column(name="chArmure", type="array")
     */
    private $chArmure;

    /**
     * @var array
     *
     * @ORM\Column(name="chBotte", type="array")
     */
    private $chBotte;

    /**
     * @var array
     *
     * @ORM\Column(name="soEpeeLarge", type="array")
     */
    private $soEpeeLarge;

    /**
     * @var array
     *
     * @ORM\Column(name="soHache", type="array")
     */
    private $soHache;

    /**
     * @var array
     *
     * @ORM\Column(name="soMassue", type="array")
     */
    private $soMassue;

    /**
     * @var array
     *
     * @ORM\Column(name="soMasse", type="array")
     */
    private $soMasse;

    /**
     * @var array
     *
     * @ORM\Column(name="soArbalete", type="array")
     */
    private $soArbalete;

    /**
     * @var array
     *
     * @ORM\Column(name="soBouclier", type="array")
     */
    private $soBouclier;

    /**
     * @var array
     *
     * @ORM\Column(name="soCasque", type="array")
     */
    private $soCasque;

    /**
     * @var array
     *
     * @ORM\Column(name="soArmure", type="array")
     */
    private $soArmure;

    /**
     * @var array
     *
     * @ORM\Column(name="soBotte", type="array")
     */
    private $soBotte;

    /**
     * @var int
     *
     * @ORM\Column(name="alHeal", type="integer")
     */
    private $alHeal;

    /**
     * @var int
     *
     * @ORM\Column(name="alEnergy", type="integer")
     */
    private $alEnergy;

    /**
     * @var int
     *
     * @ORM\Column(name="alRevive", type="integer")
     */
    private $alRevive;

    /**
     * @var int
     *
     * @ORM\Column(name="alStone", type="integer")
     */
    private $alStone;

    /**
     * @var int
     *
     * @ORM\Column(name="alChill", type="integer")
     */
    private $alChill;

    /**
     * @var int
     *
     * @ORM\Column(name="alRecovery", type="integer")
     */
    private $alRecovery;

    /**
     * @var int
     *
     * @ORM\Column(name="alClean", type="integer")
     */
    private $alClean;

    /**
     * @var int
     *
     * @ORM\Column(name="alAlcohol", type="integer")
     */
    private $alAlcohol;

    /**
     * @var int
     *
     * @ORM\Column(name="herbo", type="integer")
     */
    private $herbo;

    /**
     * @var int
     *
     * @ORM\Column(name="anMonture", type="integer")
     */
    private $anMonture;

    /**
     * @var int
     *
     * @ORM\Column(name="anFerme", type="integer")
     */
    private $anFerme;

    /**
     * @var int
     *
     * @ORM\Column(name="cuSoup", type="integer")
     */
    private $cuSoup;

    /**
     * @var int
     *
     * @ORM\Column(name="cuSalad", type="integer")
     */
    private $cuSalad;

    /**
     * @var int
     *
     * @ORM\Column(name="cuPie", type="integer")
     */
    private $cuPie;

    /**
     * @var int
     *
     * @ORM\Column(name="cuOmelette", type="integer")
     */
    private $cuOmelette;

    /**
     * @var int
     *
     * @ORM\Column(name="cuSandwich", type="integer")
     */
    private $cuSandwich;

    /**
     * @var int
     *
     * @ORM\Column(name="cuStew", type="integer")
     */
    private $cuStew;

    /**
     * @var int
     *
     * @ORM\Column(name="cuProduct", type="integer")
     */
    private $cuProduct;

    /**
     * @var int
     *
     * @ORM\Column(name="cuMeat", type="integer")
     */
    private $cuMeat;

    /**
     * @var int
     *
     * @ORM\Column(name="paysan", type="integer")
     */
    private $paysan;

    /**
     * @var array
     *
     * @ORM\Column(name="cbMaPyro", type="array")
     */
    private $cbMaPyro;

    /**
     * @var array
     *
     * @ORM\Column(name="cbMaPretre", type="array")
     */
    private $cbMaPretre;

    /**
     * @var array
     *
     * @ORM\Column(name="cbMaArca", type="array")
     */
    private $cbMaArca;

    /**
     * @var array
     *
     * @ORM\Column(name="cbMaGivre", type="array")
     */
    private $cbMaGivre;

    /**
     * @var array
     *
     * @ORM\Column(name="cbMaSorcier", type="array")
     */
    private $cbMaSorcier;

    /**
     * @var array
     *
     * @ORM\Column(name="cbMaTome", type="array")
     */
    private $cbMaTome;

    /**
     * @var array
     *
     * @ORM\Column(name="cbMaCasque", type="array")
     */
    private $cbMaCasque;

    /**
     * @var array
     *
     * @ORM\Column(name="cbMaArmure", type="array")
     */
    private $cbMaArmure;

    /**
     * @var array
     *
     * @ORM\Column(name="cbMaBotte", type="array")
     */
    private $cbMaBotte;

    /**
     * @var array
     *
     * @ORM\Column(name="cbChArc", type="array")
     */
    private $cbChArc;

    /**
     * @var array
     *
     * @ORM\Column(name="cbChLance", type="array")
     */
    private $cbChLance;

    /**
     * @var array
     *
     * @ORM\Column(name="cbChBatonNat", type="array")
     */
    private $cbChBatonNat;

    /**
     * @var array
     *
     * @ORM\Column(name="cbChDague", type="array")
     */
    private $cbChDague;

    /**
     * @var array
     *
     * @ORM\Column(name="cbChBatonLong", type="array")
     */
    private $cbChBatonLong;

    /**
     * @var array
     *
     * @ORM\Column(name="cbChTorche", type="array")
     */
    private $cbChTorche;

    /**
     * @var array
     *
     * @ORM\Column(name="cbChCasque", type="array")
     */
    private $cbChCasque;

    /**
     * @var array
     *
     * @ORM\Column(name="cbChArmure", type="array")
     */
    private $cbChArmure;

    /**
     * @var array
     *
     * @ORM\Column(name="cbChBotte", type="array")
     */
    private $cbChBotte;

    /**
     * @var array
     *
     * @ORM\Column(name="cbSoEpeeLarge", type="array")
     */
    private $cbSoEpeeLarge;

    /**
     * @var array
     *
     * @ORM\Column(name="cbSoHache", type="array")
     */
    private $cbSoHache;

    /**
     * @var array
     *
     * @ORM\Column(name="cbSoMassue", type="array")
     */
    private $cbSoMassue;

    /**
     * @var array
     *
     * @ORM\Column(name="cbSoMasse", type="array")
     */
    private $cbSoMasse;

    /**
     * @var array
     *
     * @ORM\Column(name="cbSoArbalete", type="array")
     */
    private $cbSoArbalete;

    /**
     * @var array
     *
     * @ORM\Column(name="cbSoBouclier", type="array")
     */
    private $cbSoBouclier;

    /**
     * @var array
     *
     * @ORM\Column(name="cbSoCasque", type="array")
     */
    private $cbSoCasque;

    /**
     * @var array
     *
     * @ORM\Column(name="cbSoArmure", type="array")
     */
    private $cbSoArmure;

    /**
     * @var array
     *
     * @ORM\Column(name="cbSoBotte", type="array")
     */
    private $cbSoBotte;


    /**
     * Personage constructor.
     */
    public function __construct()
    {
        //  Récolte
        $this->fibre = 0;
        $this->bois = 0;
        $this->peau = 0;
        $this->minerai = 0;
        $this->pierre = 0;
        //  Raffinerie
        $this->tissu = 0;
        $this->planche = 0;
        $this->cuir = 0;
        $this->barre = 0;
        $this->bloc = 0;
        //  Artisanat
        //      Outil
        $this->ouCouteau = 0;
        $this->ouFaucille = 0;
        $this->ouHache = 0;
        $this->ouMasseDemo = 0;
        $this->ouMassePi = 0;
        $this->ouPioche = 0;
        //      Accessoire
        $this->accCape = 0;
        $this->accSac = 0;
        //      Mage Arme
        $this->maBatonBeni = array(0, 0, 0);
        $this->maBatonDamn = array(0, 0, 0);
        $this->maBatonEso = array(0, 0, 0);
        $this->maBatonFeu = array(0, 0, 0);
        $this->maBatonGi = array(0, 0, 0);
        $this->maTome = array(0, 0, 0);
        //      Mage Armure
        $this->maArmure = array(0, 0, 0);
        $this->maBotte = array(0, 0, 0);
        $this->maCasque = array(0, 0, 0);
        //      Chasseur Arme
        $this->chArc = array(0, 0, 0);
        $this->chBatonLong = array(0, 0, 0);
        $this->chBatonNat = array(0, 0, 0);
        $this->chDague = array(0, 0, 0);
        $this->chLance = array(0, 0, 0);
        $this->chTorche = array(0, 0, 0);
        //      Chasseur Armure
        $this->chArmure = array(0, 0, 0);
        $this->chBotte = array(0, 0, 0);
        $this->chCasque = array(0, 0, 0);
        //      Soldat Arme
        $this->soArbalete = array(0, 0, 0);
        $this->soEpeeLarge = array(0, 0, 0);
        $this->soHache = array(0, 0, 0);
        $this->soMasse = array(0, 0, 0);
        $this->soMassue = array(0, 0, 0);
        $this->soBouclier = array(0, 0, 0);
        //      Soldat Armure
        $this->soArmure = array(0, 0, 0);
        $this->soBotte = array(0, 0, 0);
        $this->soCasque = array(0, 0, 0);

        //  Combat
        //      Mage Arme
        $this->cbMaArca = array(0, 0, 0);
        $this->cbMaGivre = array(0, 0, 0);
        $this->cbMaPretre = array(0, 0, 0);
        $this->cbMaPyro = array(0, 0, 0);
        $this->cbMaSorcier = array(0, 0, 0);
        $this->cbMaTome = array(0, 0, 0);
        //      Mage Armure
        $this->cbMaArmure = array(0, 0, 0);
        $this->cbMaBotte = array(0, 0, 0);
        $this->cbMaCasque = array(0, 0, 0);
        //      Chasseur Arme
        $this->cbChArc = array(0, 0, 0);
        $this->cbChBatonLong = array(0, 0, 0);
        $this->cbChBatonNat = array(0, 0, 0);
        $this->cbChDague = array(0, 0, 0);
        $this->cbChLance = array(0, 0, 0);
        $this->cbChTorche = array(0, 0, 0);
        //      Chasseur Armure
        $this->cbChArmure = array(0, 0, 0);
        $this->cbChBotte = array(0, 0, 0);
        $this->cbChCasque = array(0, 0, 0);
        //      Soldat Arme
        $this->cbSoArbalete = array(0, 0, 0);
        $this->cbSoEpeeLarge = array(0, 0, 0);
        $this->cbSoHache = array(0, 0, 0);
        $this->cbSoMasse = array(0, 0, 0);
        $this->cbSoMassue = array(0, 0, 0);
        $this->cbSoBouclier = array(0, 0, 0);
        //      Soldat Armure
        $this->cbSoArmure = array(0, 0, 0);
        $this->cbSoBotte = array(0, 0, 0);
        $this->cbSoCasque = array(0, 0, 0);
        //  Agriculture
        //      Alchimie
        $this->alAlcohol = 0;
        $this->alChill = 0;
        $this->alClean = 0;
        $this->alEnergy = 0;
        $this->alHeal = 0;
        $this->alRecovery = 0;
        $this->alRevive = 0;
        $this->alStone = 0;
        //      Récolte
        $this->herbo = 0;
        $this->paysan = 0;
        $this->anFerme = 0;
        $this->anMonture = 0;
        //      Cuisine
        $this->cuMeat = 0;
        $this->cuOmelette = 0;
        $this->cuPie = 0;
        $this->cuProduct = 0;
        $this->cuSalad = 0;
        $this->cuSandwich = 0;
        $this->cuSoup = 0;
        $this->cuStew = 0;
    }

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
     * @param array $planche
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
     * @return array
     */
    public function getPlanche()
    {
        return $this->planche;
    }

    /**
     * Set cuir
     *
     * @param array $cuir
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
     * @return array
     */
    public function getCuir()
    {
        return $this->cuir;
    }

    /**
     * Set barre
     *
     * @param array $barre
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
     * @return array
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
     * @param array $maBatonFeu
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
     * @return array
     */
    public function getMaBatonFeu()
    {
        return $this->maBatonFeu;
    }

    /**
     * Set maBatonBeni
     *
     * @param array $maBatonBeni
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
     * @return array
     */
    public function getMaBatonBeni()
    {
        return $this->maBatonBeni;
    }

    /**
     * Set maBatonEso
     *
     * @param array $maBatonEso
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
     * @return array
     */
    public function getMaBatonEso()
    {
        return $this->maBatonEso;
    }

    /**
     * Set maBatonGi
     *
     * @param array $maBatonGi
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
     * @return array
     */
    public function getMaBatonGi()
    {
        return $this->maBatonGi;
    }

    /**
     * Set maBatonDamn
     *
     * @param array $maBatonDamn
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
     * @return array
     */
    public function getMaBatonDamn()
    {
        return $this->maBatonDamn;
    }

    /**
     * Set maTome
     *
     * @param array $maTome
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
     * @return array
     */
    public function getMaTome()
    {
        return $this->maTome;
    }

    /**
     * Set maCasque
     *
     * @param array $maCasque
     *
     * @return Personage
     */
    public function setMaCasque($maCasque)
    {
        $this->maCasque = $maCasque;

        return $this;
    }

    /**
     * Get maCasque
     *
     * @return array
     */
    public function getMaCasque()
    {
        return $this->maCasque;
    }

    /**
     * Set maArmure
     *
     * @param array $maArmure
     *
     * @return Personage
     */
    public function setMaArmure($maArmure)
    {
        $this->maArmure = $maArmure;

        return $this;
    }

    /**
     * Get maArmure
     *
     * @return array
     */
    public function getMaArmure()
    {
        return $this->maArmure;
    }

    /**
     * Set maBotte
     *
     * @param array $maBotte
     *
     * @return Personage
     */
    public function setMaBotte($maBotte)
    {
        $this->maBotte = $maBotte;

        return $this;
    }

    /**
     * Get maBotte
     *
     * @return array
     */
    public function getMaBotte()
    {
        return $this->maBotte;
    }

    /**
     * Set chArc
     *
     * @param array $chArc
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
     * @return array
     */
    public function getChArc()
    {
        return $this->chArc;
    }

    /**
     * Set chLance
     *
     * @param array $chLance
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
     * @return array
     */
    public function getChLance()
    {
        return $this->chLance;
    }

    /**
     * Set chBatonNat
     *
     * @param array $chBatonNat
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
     * @return array
     */
    public function getChBatonNat()
    {
        return $this->chBatonNat;
    }

    /**
     * Set chDague
     *
     * @param array $chDague
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
     * @return array
     */
    public function getChDague()
    {
        return $this->chDague;
    }

    /**
     * Set chBatonLong
     *
     * @param array $chBatonLong
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
     * @return array
     */
    public function getChBatonLong()
    {
        return $this->chBatonLong;
    }

    /**
     * Set chTorche
     *
     * @param array $chTorche
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
     * @return array
     */
    public function getChTorche()
    {
        return $this->chTorche;
    }

    /**
     * Set chCasque
     *
     * @param array $chCasque
     *
     * @return Personage
     */
    public function setChCasque($chCasque)
    {
        $this->chCasque = $chCasque;

        return $this;
    }

    /**
     * Get chCasque
     *
     * @return array
     */
    public function getChCasque()
    {
        return $this->chCasque;
    }

    /**
     * Set chArmure
     *
     * @param array $chArmure
     *
     * @return Personage
     */
    public function setChArmure($chArmure)
    {
        $this->chArmure = $chArmure;

        return $this;
    }

    /**
     * Get chArmure
     *
     * @return array
     */
    public function getChArmure()
    {
        return $this->chArmure;
    }

    /**
     * Set chBotte
     *
     * @param array $chBotte
     *
     * @return Personage
     */
    public function setChBotte($chBotte)
    {
        $this->chBotte = $chBotte;

        return $this;
    }

    /**
     * Get chBotte
     *
     * @return array
     */
    public function getChBotte()
    {
        return $this->chBotte;
    }

    /**
     * Set soEpeeLarge
     *
     * @param array $soEpeeLarge
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
     * @return array
     */
    public function getSoEpeeLarge()
    {
        return $this->soEpeeLarge;
    }

    /**
     * Set soHache
     *
     * @param array $soHache
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
     * @return array
     */
    public function getSoHache()
    {
        return $this->soHache;
    }

    /**
     * Set soMassue
     *
     * @param array $soMassue
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
     * @return array
     */
    public function getSoMassue()
    {
        return $this->soMassue;
    }

    /**
     * Set soMasse
     *
     * @param array $soMasse
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
     * @return array
     */
    public function getSoMasse()
    {
        return $this->soMasse;
    }

    /**
     * Set soArbalete
     *
     * @param array $soArbalete
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
     * @return array
     */
    public function getSoArbalete()
    {
        return $this->soArbalete;
    }

    /**
     * Set soBouclier
     *
     * @param array $soBouclier
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
     * @return array
     */
    public function getSoBouclier()
    {
        return $this->soBouclier;
    }

    /**
     * Set soCasque
     *
     * @param array $soCasque
     *
     * @return Personage
     */
    public function setSoCasque($soCasque)
    {
        $this->soCasque = $soCasque;

        return $this;
    }

    /**
     * Get soCasque
     *
     * @return array
     */
    public function getSoCasque()
    {
        return $this->soCasque;
    }

    /**
     * Set soArmure
     *
     * @param array $soArmure
     *
     * @return Personage
     */
    public function setSoArmure($soArmure)
    {
        $this->soArmure = $soArmure;

        return $this;
    }

    /**
     * Get soArmure
     *
     * @return array
     */
    public function getSoArmure()
    {
        return $this->soArmure;
    }

    /**
     * Set soBotte
     *
     * @param array $soBotte
     *
     * @return Personage
     */
    public function setSoBotte($soBotte)
    {
        $this->soBotte = $soBotte;

        return $this;
    }

    /**
     * Get soBotte
     *
     * @return array
     */
    public function getSoBotte()
    {
        return $this->soBotte;
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
     * Get alChil
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
     * Set alClean
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
     * Get alClean
     *
     * @return int
     */
    public function getAlAlcohol()
    {
        return $this->alAlcohol;
    }

    /**
     * Set alHerbo
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
     * Set cbMaPyro
     *
     * @param array $cbMaPyro
     *
     * @return Personage
     */
    public function setCbMaPyro($cbMaPyro)
    {
        $this->cbMaPyro = $cbMaPyro;

        return $this;
    }

    /**
     * Get cbMaPyro
     *
     * @return array
     */
    public function getCbMaPyro()
    {
        return $this->cbMaPyro;
    }

    /**
     * Set cbMaPretre
     *
     * @param array $cbMaPretre
     *
     * @return Personage
     */
    public function setCbMaPretre($cbMaPretre)
    {
        $this->cbMaPretre = $cbMaPretre;

        return $this;
    }

    /**
     * Get cbMaPretre
     *
     * @return array
     */
    public function getCbMaPretre()
    {
        return $this->cbMaPretre;
    }

    /**
     * Set cbMaArca
     *
     * @param array $cbMaArca
     *
     * @return Personage
     */
    public function setCbMaArca($cbMaArca)
    {
        $this->cbMaArca = $cbMaArca;

        return $this;
    }

    /**
     * Get cbMaArca
     *
     * @return array
     */
    public function getCbMaArca()
    {
        return $this->cbMaArca;
    }

    /**
     * Set cbMaGivre
     *
     * @param array $cbMaGivre
     *
     * @return Personage
     */
    public function setCbMaGivre($cbMaGivre)
    {
        $this->cbMaGivre = $cbMaGivre;

        return $this;
    }

    /**
     * Get cbMaGivre
     *
     * @return array
     */
    public function getCbMaGivre()
    {
        return $this->cbMaGivre;
    }

    /**
     * Set cbMaSorcier
     *
     * @param array $cbMaSorcier
     *
     * @return Personage
     */
    public function setCbMaSorcier($cbMaSorcier)
    {
        $this->cbMaSorcier = $cbMaSorcier;

        return $this;
    }

    /**
     * Get cbMaSorcier
     *
     * @return array
     */
    public function getCbMaSorcier()
    {
        return $this->cbMaSorcier;
    }

    /**
     * Set cbMaTome
     *
     * @param array $cbMaTome
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
     * @return array
     */
    public function getCbMaTome()
    {
        return $this->cbMaTome;
    }

    /**
     * Set cbMaCasque
     *
     * @param array $cbMaCasque
     *
     * @return Personage
     */
    public function setCbMaCasque($cbMaCasque)
    {
        $this->cbMaCasque = $cbMaCasque;

        return $this;
    }

    /**
     * Get cbMaCasque
     *
     * @return array
     */
    public function getCbMaCasque()
    {
        return $this->cbMaCasque;
    }

    /**
     * Set cbMaArmure
     *
     * @param array $cbMaArmure
     *
     * @return Personage
     */
    public function setCbMaArmure($cbMaArmure)
    {
        $this->cbMaArmure = $cbMaArmure;

        return $this;
    }

    /**
     * Get cbMaArmure
     *
     * @return array
     */
    public function getCbMaArmure()
    {
        return $this->cbMaArmure;
    }

    /**
     * Set cbMaBotte
     *
     * @param array $cbMaBotte
     *
     * @return Personage
     */
    public function setCbMaBotte($cbMaBotte)
    {
        $this->cbMaBotte = $cbMaBotte;

        return $this;
    }

    /**
     * Get cbMaBotte
     *
     * @return array
     */
    public function getCbMaBotte()
    {
        return $this->cbMaBotte;
    }

    /**
     * Set cbChArc
     *
     * @param array $cbChArc
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
     * @return array
     */
    public function getCbChArc()
    {
        return $this->cbChArc;
    }

    /**
     * Set cbChLance
     *
     * @param array $cbChLance
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
     * @return array
     */
    public function getCbChLance()
    {
        return $this->cbChLance;
    }

    /**
     * Set cbChBatonNat
     *
     * @param array $cbChBatonNat
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
     * @return array
     */
    public function getCbChBatonNat()
    {
        return $this->cbChBatonNat;
    }

    /**
     * Set cbChDague
     *
     * @param array $cbChDague
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
     * @return array
     */
    public function getCbChDague()
    {
        return $this->cbChDague;
    }

    /**
     * Set cbChBatonLong
     *
     * @param array $cbChBatonLong
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
     * @return array
     */
    public function getCbChBatonLong()
    {
        return $this->cbChBatonLong;
    }

    /**
     * Set cbChTorche
     *
     * @param array $cbChTorche
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
     * @return array
     */
    public function getCbChTorche()
    {
        return $this->cbChTorche;
    }

    /**
     * Set cbChCasque
     *
     * @param array $cbChCasque
     *
     * @return Personage
     */
    public function setCbChCasque($cbChCasque)
    {
        $this->cbChCasque = $cbChCasque;

        return $this;
    }

    /**
     * Get cbChCasque
     *
     * @return array
     */
    public function getCbChCasque()
    {
        return $this->cbChCasque;
    }

    /**
     * Set cbChArmure
     *
     * @param array $cbChArmure
     *
     * @return Personage
     */
    public function setCbChArmure($cbChArmure)
    {
        $this->cbChArmure = $cbChArmure;

        return $this;
    }

    /**
     * Get cbChArmure
     *
     * @return array
     */
    public function getCbChArmure()
    {
        return $this->cbChArmure;
    }

    /**
     * Set cbChBotte
     *
     * @param array $cbChBotte
     *
     * @return Personage
     */
    public function setCbChBotte($cbChBotte)
    {
        $this->cbChBotte = $cbChBotte;

        return $this;
    }

    /**
     * Get cbChBotte
     *
     * @return array
     */
    public function getCbChBotte()
    {
        return $this->cbChBotte;
    }

    /**
     * Set cbSoEpeeLarge
     *
     * @param array $cbSoEpeeLarge
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
     * @return array
     */
    public function getCbSoEpeeLarge()
    {
        return $this->cbSoEpeeLarge;
    }

    /**
     * Set cbSoHache
     *
     * @param array $cbSoHache
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
     * @return array
     */
    public function getCbSoHache()
    {
        return $this->cbSoHache;
    }

    /**
     * Set cbSoMassue
     *
     * @param array $cbSoMassue
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
     * @return array
     */
    public function getCbSoMassue()
    {
        return $this->cbSoMassue;
    }

    /**
     * Set cbSoMasse
     *
     * @param array $cbSoMasse
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
     * @return array
     */
    public function getCbSoMasse()
    {
        return $this->cbSoMasse;
    }

    /**
     * Set cbSoArbalete
     *
     * @param array $cbSoArbalete
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
     * @return array
     */
    public function getCbSoArbalete()
    {
        return $this->cbSoArbalete;
    }

    /**
     * Set cbSoBouclier
     *
     * @param array $cbSoBouclier
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
     * @return array
     */
    public function getCbSoBouclier()
    {
        return $this->cbSoBouclier;
    }

    /**
     * Set cbSoCasque
     *
     * @param array $cbSoCasque
     *
     * @return Personage
     */
    public function setCbSoCasque($cbSoCasque)
    {
        $this->cbSoCasque = $cbSoCasque;

        return $this;
    }

    /**
     * Get cbSoCasque
     *
     * @return array
     */
    public function getCbSoCasque()
    {
        return $this->cbSoCasque;
    }

    /**
     * Set cbSoArmure
     *
     * @param array $cbSoArmure
     *
     * @return Personage
     */
    public function setCbSoArmure($cbSoArmure)
    {
        $this->cbSoArmure = $cbSoArmure;

        return $this;
    }

    /**
     * Get cbSoArmure
     *
     * @return array
     */
    public function getCbSoArmure()
    {
        return $this->cbSoArmure;
    }

    /**
     * Set cbSoBotte
     *
     * @param array $cbSoBotte
     *
     * @return Personage
     */
    public function setCbSoBotte($cbSoBotte)
    {
        $this->cbSoBotte = $cbSoBotte;

        return $this;
    }

    /**
     * Get cbSoBotte
     *
     * @return array
     */
    public function getCbSoBotte()
    {
        return $this->cbSoBotte;
    }
}

