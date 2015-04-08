<?php

namespace Oenoweb\OenowebBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Oenoweb\OenowebBundle\Entity\Avis;

class AvisType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idUser')
            ->add('idVin')
            ->add('annee')
            ->add('titre')
            ->add('commentaire')
            ->add('notes')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Oenoweb\OenowebBundle\Entity\Avis'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'oenoweb_oenowebbundle_avis';
    }
}
