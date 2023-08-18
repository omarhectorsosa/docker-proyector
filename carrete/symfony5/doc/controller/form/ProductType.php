<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Annotation\Route;

class ProductType extends AbstractType
{
    
    public function __construct(UrlGeneratorInterface $router){
        $this->router = $router;
    }
        
    public function buildForm(FormBuilderInterface $builder, array $option): void
    {
        
        $builder
            ->add('name', TextType::class, [
                'attr' => ['class' => 'form-control','id'=>'pname' , 'name'=>'pname']
            ])
            ->add('description' , TextareaType::class, [
                    'attr' => ['class' => 'form-control','id'=>"pdescription",'name'=>"pdescription"] 
            ])
            ->add('price', TextType::class, [
                'attr' => ['class' => 'form-control','id'=>"pprice", 'name'=>"price"], 
                'data' => ''   
            ])
            ->add('save', SubmitType::class, [
                    'attr' => ['class' => 'btn btn-primary', 'name'=> 'submit'], 
                    'label'=> 'Aceptar'
                    
            ])
            //->add('cancel', ButtonType::class, [
            //        'attr' => ['class' => 'btn btn-primary'], 
            //       'label'=> 'Cancelar'
                    //'url' => $this->router->generate('app_product_list'),
            //])
            ->setAction($this->router->generate('app_product_new'))
            ->setMethod("POST");
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
