<?php

namespace Ours\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('spCombat')
            ->add('spCraft')

            //  Récolte

            ->add('fibre', 'number', array(
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('bois', 'number', array(
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('peau', 'number', array(
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('minerai', 'number', array(
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('pierre', 'number', array(
                'attr' => array(
                    'min' => 0,
                )
            ))

            //  Raffinerie

            ->add('tissu', 'number', array(
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('planche', 'number', array(
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cuir', 'number', array(
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('barre', 'number', array(
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('bloc', 'number', array(
                'attr' => array(
                    'min' => 0,
                )
            ))

            //  Artisanat
            //      Outils

            ->add('ouMasseDemo', 'number', array(
                'label' => 'Masse de démolition',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('ouFaucille', 'number', array(
                'label' => 'Faucille',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('ouCouteau', 'number', array(
                'label' => 'Couteau',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('ouPioche', 'number', array(
                'label' => 'Pioche',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('ouMassePi', 'number', array(
                'label' => 'Masse de pierre',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('ouHache', 'number', array(
                'label' => 'Hache',
                'attr' => array(
                    'min' => 0,
                )
            ))

            //      Accessoire

            ->add('accSac', 'number', array(
                'label' => 'Sac',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('accCape', 'number', array(
                'label' => 'Cape',
                'attr' => array(
                    'min' => 0,
                )
            ))

            //      Armes Mage

            ->add('BatonFeu', 'number', array(
                'property_path' => 'maBatonFeu[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('GrandBatonFeu', 'number', array(
                'property_path' => 'maBatonFeu[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('BatonInfernal', 'number', array(
                'property_path' => 'maBatonFeu[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('BatonBeni', 'number', array(
                'property_path' => 'maBatonBeni[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('GrandBatonBeni', 'number', array(
                'property_path' => 'maBatonBeni[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('BatonDivin', 'number', array(
                'property_path' => 'maBatonBeni[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('BatonEsoterique', 'number', array(
                'property_path' => 'maBatonEso[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('GrandBatonEsoterique', 'number', array(
                'property_path' => 'maBatonEso[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('BatonEnigmatique', 'number', array(
                'property_path' => 'maBatonEso[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('BatonGivre', 'number', array(
                'property_path' => 'maBatonGi[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('GrandBatonGivre', 'number', array(
                'property_path' => 'maBatonGi[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('BatonGlacial', 'number', array(
                'property_path' => 'maBatonGi[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('BatonDamne', 'number', array(
                'property_path' => 'maBatonDamn[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('GrandBatonDamne', 'number', array(
                'property_path' => 'maBatonDamn[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('BatonDemoniaque', 'number', array(
                'property_path' => 'maBatonDamn[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('Tome', 'number', array(
                'property_path' => 'maTome[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            //      Armure Mage

            ->add('CasqueLegerEnTissu', 'number', array(
                'property_path' => 'maCasque[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('CasqueMoyenEnTissu', 'number', array(
                'property_path' => 'maCasque[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('CasqueLourdEnTissu', 'number', array(
                'property_path' => 'maCasque[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('TorseLegerEnTissu', 'number', array(
                'property_path' => 'maArmure[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('TorseMoyenEnTissu', 'number', array(
                'property_path' => 'maArmure[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('TorseLourdEnTissu', 'number', array(
                'property_path' => 'maArmure[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('BotteLegerEnTissu', 'number', array(
                'property_path' => 'maBotte[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('BotteMoyenEnTissu', 'number', array(
                'property_path' => 'maBotte[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('BotteLourdEnTissu', 'number', array(
                'property_path' => 'maBotte[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            //      Arme Chasseur

            ->add('Arc', 'number', array(
                'property_path' => 'chArc[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('ArcDeGeurre', 'number', array(
                'property_path' => 'chArc[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('ArcLong', 'number', array(
                'property_path' => 'chArc[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('Lance', 'number', array(
                'property_path' => 'chLance[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('Pique', 'number', array(
                'property_path' => 'chLance[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('Hallebarde', 'number', array(
                'property_path' => 'chLance[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('BatonNaturel', 'number', array(
                'property_path' => 'chBatonNat[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('GrandBatonNaturel', 'number', array(
                'property_path' => 'chBatonNat[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('BatonSauvage', 'number', array(
                'property_path' => 'chBatonNat[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('Dague', 'number', array(
                'property_path' => 'chDague[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('PaireDeDagues', 'number', array(
                'property_path' => 'chDague[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('Griffes', 'number', array(
                'property_path' => 'chDague[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('LongBaton', 'number', array(
                'property_path' => 'chBatonLong[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('BatonSansFaille', 'number', array(
                'property_path' => 'chBatonLong[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('BatonADoubleTranchant', 'number', array(
                'property_path' => 'chBatonLong[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('Torche', 'number', array(
                'property_path' => 'chTorche[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            //      Armure chasseur

            ->add('CasqueMoyenEnCuir', 'number', array(
                'property_path' => 'chCasque[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('CasqueLourdEnCuir', 'number', array(
                'property_path' => 'chCasque[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('CasqueLegerEnCuir', 'number', array(
                'property_path' => 'chCasque[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('TorseMoyenEnCuir', 'number', array(
                'property_path' => 'chArmure[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('TorseLourdEnCuir', 'number', array(
                'property_path' => 'chArmure[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('TorseLegerEnCuir', 'number', array(
                'property_path' => 'chArmure[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('BotteMoyenEnCuir', 'number', array(
                'property_path' => 'chBotte[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('BotteLourdEnCuir', 'number', array(
                'property_path' => 'chBotte[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('BotteLegerEnCuir', 'number', array(
                'property_path' => 'chBotte[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            //      Arme Soldat

            ->add('EpeeLarge', 'number', array(
                'property_path' => 'soEpeeLarge[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('Claymore', 'number', array(
                'property_path' => 'soEpeeLarge[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('Glaive', 'number', array(
                'property_path' => 'soEpeeLarge[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('HacheDeGuerre', 'number', array(
                'property_path' => 'soHache[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('GrandeHche', 'number', array(
                'property_path' => 'soHache[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('Faux', 'number', array(
                'property_path' => 'soHache[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('Massue', 'number', array(
                'property_path' => 'soMassue[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('MassueLourde', 'number', array(
                'property_path' => 'soMassue[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('Fleau', 'number', array(
                'property_path' => 'soMassue[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('Masse', 'number', array(
                'property_path' => 'soMasse[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('BecDeCorbin', 'number', array(
                'property_path' => 'soMasse[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('GrandeMasse', 'number', array(
                'property_path' => 'soMasse[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('Arbalete', 'number', array(
                'property_path' => 'soArbalete[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('ArbaleteLourde', 'number', array(
                'property_path' => 'soArbalete[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('AbarleteARepetition', 'number', array(
                'property_path' => 'soArbalete[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('Bouclier', 'number', array(
                'property_path' => 'soBouclier[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            //      Armure Soldat

            ->add('CasqueDePlaqueLourd', 'number', array(
                'property_path' => 'soCasque[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('CasqueDePlaqueLeger', 'number', array(
                'property_path' => 'soCasque[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('CasqueDePlaqueMoyen', 'number', array(
                'property_path' => 'soCasque[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('TorseDePlaqueLourd', 'number', array(
                'property_path' => 'soArmure[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('TorseDePlaqueLeger', 'number', array(
                'property_path' => 'soArmure[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('TorseDePlaqueMoyen', 'number', array(
                'property_path' => 'soArmure[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('BotteDePlaqueLourd', 'number', array(
                'property_path' => 'soBotte[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('BotteDePlaqueLeger', 'number', array(
                'property_path' => 'soBotte[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('BotteDePlaqueMoyen', 'number', array(
                'property_path' => 'soBotte[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            //  Combat
            //      Armes Mage

            ->add('cbBatonFeu', 'number', array(
                'label' => 'Bâton de feu',
                'property_path' => 'cbMaPyro[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbGrandBatonFeu', 'number', array(
                'label' => 'Grand bâton de feu',
                'property_path' => 'cbMaPyro[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbBatonInfernal', 'number', array(
                'label' => 'Bâton infernal',
                'property_path' => 'cbMaPyro[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('cbBatonBeni', 'number', array(
                'label' => 'Bâton béni',
                'property_path' => 'cbMaPretre[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbGrandBatonBeni', 'number', array(
                'label' => 'Grand bâton béni',
                'property_path' => 'cbMaPretre[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbBatonDivin', 'number', array(
                'label' => 'Bâton divin',
                'property_path' => 'cbMaPretre[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('cbBatonEsoterique', 'number', array(
                'label' => 'Bâton ésotérique',
                'property_path' => 'cbMaArca[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbGrandBatonEsoterique', 'number', array(
                'label' => 'Grand bâton ésotérique',
                'property_path' => 'cbMaArca[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbBatonEnigmatique', 'number', array(
                'label' => 'Bâton énigmatique',
                'property_path' => 'cbMaArca[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('cbBatonGivre', 'number', array(
                'label' => 'Bâton de givre',
                'property_path' => 'cbMaGivre[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbGrandBatonGivre', 'number', array(
                'label' => 'Grand bâton de givre',
                'property_path' => 'cbMaGivre[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbBatonGlacial', 'number', array(
                'label' => 'Bâton glacial',
                'property_path' => 'cbMaGivre[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('cbBatonDamne', 'number', array(
                'label' => 'Bâton damnée',
                'property_path' => 'cbMaSorcier[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbGrandBatonDamne', 'number', array(
                'label' => 'Grand bâton damnée',
                'property_path' => 'cbMaSorcier[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbBatonDemoniaque', 'number', array(
                'label' => 'Bâton démoniaque',
                'property_path' => 'cbMaSorcier[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('cbTome', 'number', array(
                'label' => 'Tome',
                'property_path' => 'cbMaTome[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            //      Armure Mage

            ->add('cbMaCasqueLegerEnTissu', 'number', array(
                'label' => 'Capuche légère en tissu',
                'property_path' => 'cbMaCasque[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbMaCasqueDePlaqueLeger', 'number', array(
                'label' => 'Casque de plaque leger',
                'property_path' => 'cbMaCasque[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbMaCasqueMoyenEnCuir', 'number', array(
                'label' => 'Capuche moyenne en cuir',
                'property_path' => 'cbMaCasque[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('cbMaTorseLegerEnTissu', 'number', array(
                'label' => 'Torse légère en tissu',
                'property_path' => 'cbMaArmure[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbMaTorseDePlaqueLeger', 'number', array(
                'label' => 'Torse de plaque leger',
                'property_path' => 'cbMaArmure[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbMaTorseMoyenEnCuir', 'number', array(
                'label' => 'Torse moyenne en cuir',
                'property_path' => 'cbMaArmure[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('cbMaBotteLegerEnTissu', 'number', array(
                'label' => 'Chaussures légères en tissu',
                'property_path' => 'cbMaBotte[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbMaBotteDePlaqueLeger', 'number', array(
                'label' => 'Bottes de plaques leger',
                'property_path' => 'cbMaBotte[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbMaBotteMoyenEnCuir', 'number', array(
                'label' => 'Chaussure légères en cuir',
                'property_path' => 'cbMaBotte[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            //      Arme Chasseur

            ->add('cbArc', 'number', array(
                'label' => 'Arc',
                'property_path' => 'cbChArc[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbArcDeGeurre', 'number', array(
                'label' => 'Arc de guerre',
                'property_path' => 'cbChArc[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbArcLong', 'number', array(
                'label' => 'Arc long',
                'property_path' => 'cbChArc[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('cbLance', 'number', array(
                'label' => 'Lance',
                'property_path' => 'cbChBatonLong[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbPique', 'number', array(
                'label' => 'Pique',
                'property_path' => 'cbChBatonLong[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbHallebarde', 'number', array(
                'label' => 'Hallebarde',
                'property_path' => 'cbChBatonLong[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('cbBatonNaturel', 'number', array(
                'label' => 'Bâton naturel',
                'property_path' => 'cbChBatonNat[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbGrandBatonNaturel', 'number', array(
                'label' => 'Grand bâton naturel',
                'property_path' => 'cbChBatonNat[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbBatonSauvage', 'number', array(
                'label' => 'Bâton sauvage',
                'property_path' => 'cbChBatonNat[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('cbDague', 'number', array(
                'label' => 'Dague',
                'property_path' => 'cbChDague[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbPaireDeDagues', 'number', array(
                'label' => 'Paire de dagues',
                'property_path' => 'cbChDague[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbGriffes', 'number', array(
                'label' => 'Griffes',
                'property_path' => 'cbChDague[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('cbLongBaton', 'number', array(
                'label' => 'Long bâton',
                'property_path' => 'cbChLance[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbBatonSansFaille', 'number', array(
                'label' => 'Bâton sans faille',
                'property_path' => 'cbChLance[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbBatonADoubleTranchant', 'number', array(
                'label' => 'Bâton à double tranchant',
                'property_path' => 'cbChLance[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('cbTorche', 'number', array(
                'label' => 'Torche',
                'property_path' => 'cbChTorche[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            //      Armure chasseur

            ->add('cbChCasqueMoyenEnCuir', 'number', array(
                'label' => 'Capuche moyenne en cuir',
                'property_path' => 'cbChCasque[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbChCasqueMoyenEnTissu', 'number', array(
                'label' => 'Capuche moyenne en tissu',
                'property_path' => 'cbChCasque[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbChCasqueDePlaqueMoyen', 'number', array(
                'label' => 'Casque de plaque moyen',
                'property_path' => 'cbChCasque[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('cbChTorseMoyenEnCuir', 'number', array(
                'label' => 'Armure moyenne en cuir',
                'property_path' => 'cbChArmure[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbChTorseMoyenEnTissu', 'number', array(
                'label' => 'Armure moyenne en tissu',
                'property_path' => 'cbChArmure[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbChTorseDePlaqueMoyen', 'number', array(
                'label' => 'Armure de plaque moyenne',
                'property_path' => 'cbChArmure[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('cbChBotteMoyenEnCuir', 'number', array(
                'label' => 'Chaussures moyennes en cuir',
                'property_path' => 'cbChBotte[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbChBotteMoyenEnTissu', 'number', array(
                'label' => 'Chaussures moyennes en tissu',
                'property_path' => 'cbChBotte[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbChBotteDePlaqueMoyen', 'number', array(
                'label' => 'Bottes de plaques moyenne',
                'property_path' => 'cbChBotte[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            //      Arme Soldat

            ->add('cbEpeeLarge', 'number', array(
                'label' => 'Epee large',
                'property_path' => 'cbSoEpeeLarge[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbClaymore', 'number', array(
                'label' => 'Claymore',
                'property_path' => 'cbSoEpeeLarge[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbGlaive', 'number', array(
                'label' => 'Glaive',
                'property_path' => 'cbSoEpeeLarge[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('cbHacheDeGuerre', 'number', array(
                'label' => 'Hache de guerre',
                'property_path' => 'cbSoHache[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbGrandeHche', 'number', array(
                'label' => 'Grande hache',
                'property_path' => 'cbSoHache[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbFaux', 'number', array(
                'label' => 'Faux',
                'property_path' => 'cbSoHache[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('cbMassue', 'number', array(
                'label' => 'Massue',
                'property_path' => 'cbSoMassue[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbMassueLourde', 'number', array(
                'label' => 'Massue lourde',
                'property_path' => 'cbSoMassue[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbFleau', 'number', array(
                'label' => 'Fléau',
                'property_path' => 'cbSoMassue[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('cbMasse', 'number', array(
                'label' => 'Masse',
                'property_path' => 'cbSoMasse[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbBecDeCorbin', 'number', array(
                'label' => 'Bec de corbin',
                'property_path' => 'cbSoMasse[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbGrandeMasse', 'number', array(
                'label' => 'Grande masse',
                'property_path' => 'cbSoMasse[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('cbArbalete', 'number', array(
                'label' => 'Arbalète',
                'property_path' => 'cbSoArbalete[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbArbaleteLourde', 'number', array(
                'label' => 'Arbalète lourde',
                'property_path' => 'cbSoArbalete[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbAbarleteARepetition', 'number', array(
                'label' => 'Arbalète à répétition',
                'property_path' => 'cbSoArbalete[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('cbBouclier', 'number', array(
                'label' => 'Bouclier',
                'property_path' => 'cbSoBouclier[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            //      Armure Soldat

            ->add('cbSoCasqueDePlaqueLourd', 'number', array(
                'label' => 'Casque de plaque lourd',
                'property_path' => 'cbSoCasque[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbSoCasqueLourdEnCuir', 'number', array(
                'label' => 'Capuche lourde en cuir',
                'property_path' => 'cbSoCasque[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbSoCasqueLourdEnTissu', 'number', array(
                'label' => 'Capuche lourde en tissu',
                'property_path' => 'cbSoCasque[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('cbSoTorseDePlaqueLourd', 'number', array(
                'label' => 'Armure de plaque lourde',
                'property_path' => 'cbSoArmure[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbSoTorseLourdEnCuir', 'number', array(
                'label' => 'Armure lourde en cuir',
                'property_path' => 'cbSoArmure[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbSoTorseLourdEnTissu', 'number', array(
                'label' => 'Armure lourde en tissu',
                'property_path' => 'cbSoArmure[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            ->add('cbSoBotteDePlaqueLourd', 'number', array(
                'label' => 'Bottes de plaques lourde',
                'property_path' => 'cbSoBotte[0]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbSoBotteLourdEnCuir', 'number', array(
                'label' => 'Chassures lourdes en cuir',
                'property_path' => 'cbSoBotte[1]',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cbSobotteLourdEnTissu', 'number', array(
                'label' => 'Chassures lourdes en tissu',
                'property_path' => 'cbSoBotte[2]',
                'attr' => array(
                    'min' => 0,
                )
            ))

            //  Agricole
            //      Alchimiste

            ->add('alHeal', 'number', array(
                'label' => 'Flasque de soin',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('alEnergy', 'number', array(
                'label' => 'Potion d\'energie',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('alRevive', 'number', array(
                'label' => 'Potion de réanimation',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('alStone', 'number', array(
                'label' => 'Potion peau de pierre',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('alChill', 'number', array(
                'label' => 'Potion frigorifique',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('alRecovery', 'number', array(
                'label' => 'Potion de récupération',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('alClean', 'number', array(
                'label' => 'Potion purifiante',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('alAlcohol', 'number', array(
                'label' => 'Alcohol',
                'attr' => array(
                    'min' => 0,
                )
            ))

            //      Récolte

            ->add('herbo', 'number', array(
                'label' => 'Herboriste',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('paysan', 'number', array(
                'label' => 'Récolteur',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('anMonture', 'number', array(
                'label' => 'Dresseur de montures',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('anFerme', 'number', array(
                'label' => 'Berger',
                'attr' => array(
                    'min' => 0,
                )
            ))

            //      Cuisine

            ->add('cuSoup', 'number', array(
                'label' => 'Soupe',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cuSalad', 'number', array(
                'label' => 'Salade',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cuPie', 'number', array(
                'label' => 'Tourte',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cuOmelette', 'number', array(
                'label' => 'Omelette',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cuSandwich', 'number', array(
                'label' => 'Sandwich',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cuStew', 'number', array(
                'label' => 'Ragoût',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cuProduct', 'number', array(
                'label' => 'Meunier',
                'attr' => array(
                    'min' => 0,
                )
            ))
            ->add('cuMeat', 'number', array(
                'label' => 'Boucher',
                'attr' => array(
                    'min' => 0,
                )
            ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ours\UserBundle\Entity\Personage'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Ours_userbundle_personage';
    }
}