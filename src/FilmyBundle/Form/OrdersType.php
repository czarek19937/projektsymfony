<?php

namespace FilmyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList;


class OrdersType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('status','choice', array('choices' => array('Oczekiwanie na płatność' => 'Oczekiwanie na płatność')))
            ->add('term')
            ->add('form', 'choice', array('choices' => array('Karta kredytowa' => 'Karta kredytowa', 'Gotówka' => 'Gotówka')))
            ->add('conditions', 'choice', array('choices' => array('Dostawa do domu' => 'Dostawa do domu', 'Odbiór w wypożyczalni' => 'Odbiór w wypożyczalni')))
            ->add('idFilm')
            ->add('idClient')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FilmyBundle\Entity\Orders'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'filmybundle_orders';
    }
}
