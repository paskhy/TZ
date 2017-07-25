<?php

namespace Blogger\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('userName')
                ->add('eMail')
                ->add('text')
                //->add('ip')
                //->add('userAgent')
                //->add('createdAt');
                ->add('captchaCode', 'Captcha\Bundle\CaptchaBundle\Form\Type\CaptchaType', array(
                    'captchaConfig' => 'ExampleCaptcha'
                ));
        }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Blogger\BlogBundle\Entity\Post'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'blogger_blogbundle_post';
    }


}
