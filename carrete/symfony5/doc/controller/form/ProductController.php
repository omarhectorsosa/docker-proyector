<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use App\Form\ProductType;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="app_product")
     */
    public function index(): Response{
        return $this->render('product/index.html.twig', [
            'controller_title' => 'Producto',
            'controller_name' => 'ProductController',
        ]);
    }

    /**
     * @Route("/product/new", name="app_product_new")
     */
    public function new(Request $request): Response {
     
        $form = $this->createForm(ProductType::class, new Product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $repository = $this->getDoctrine()->getRepository(Product::class);
            $repository->add($form->getData());
            $this->addFlash("success", 'El producto se guardo con exito.' );
            return $this->redirectToRoute("app_product_list");
        }

        return $this->render('product/new.html.twig', [
            'controller_title' => 'Nuevo producto',
            'controller_name' => 'Nurvo producto',
            'form'=>$form->createView()
         ]);
    }

    /**
    * @Route("/product/edit/{id}", name="app_product_edit")
    */
    public function edit($id): Response{
        $mensaje='';
        $repository = $this->getDoctrine()->getRepository(Product::class);

        if (isset($_POST['submit'])) {
            $producto = $repository->findById($id);  
            $producto->setName($_POST['pname']);
            $producto->setDescription($_POST['pdescription']);
            $producto->setPrice($_POST['pprice']);
            $repository->update($producto);
            $mensaje='Producto editado : '.$producto->getId();
            $this->addFlash("success", $mensaje );
            return $this->redirectToRoute("app_product_list");
        } else {
            $producto = $repository->findById($id);  
        }   

        return $this->render('product/edit.html.twig', [
            'controller_title' => 'Editar producto',
            'controller_name' => 'ProductController',
            'controller_accion' => 'Editar producto',
            'mensaje'=>$mensaje,
            'producto'=>$producto
        ]);

    }

    /**
    * @Route("/product/delete/{id}", name="app_product_delete")
    */
    public function delete($id): Response {	

        $repository = $this->getDoctrine()->getRepository(Product::class);
        $producto = $repository->findById($id);

        if ($producto) {
            $repository->remove($producto);
            $mensaje = 'El producto se elimino.';
            $this->addFlash("success", $mensaje );
            return $this->redirectToRoute("app_product_list");
        } else {
          $mensaje = 'El producto no existe.';
        }  

        return $this->render('product/delete.html.twig', [
            'controller_title' => 'Eliminar producto',
            'controller_name' => 'ProductController',
            'controller_accion' => 'Eliminar producto',
            'product_id' => $id,
            'mensaje'=> $mensaje
        ]);

    }

    /**
    * @Route("/product/list", name="app_product_list")
    */
    public function list(){
        $repository = $this->getDoctrine()->getRepository(Product::class);
        $productos = $repository->findAll();
        return $this->render('product/list.html.twig', [
            'controller_title' => 'Lista de producto',
            'controller_name' => 'ProductController',
            'controller_accion' => 'Listar Productos',
            'productos'=>$productos
        ]);
    }


    /**
    * @Route("/product/show/{id}", name="app_product_show")
    */
    public function show($id): Response {	

        $repository = $this->getDoctrine()->getRepository(Product::class);
        $producto = $repository->findById($id);

        if (!$producto) {
          $mensaje = 'El producto no existe.';
        } else {
          $mensaje = 'El producto existe.';
        }  

        return $this->render('product/show.html.twig', [
            'controller_title' => 'Detalle del producto',
            'controller_name' => 'ProductController',
            'controller_accion' => 'Eliminar producto',
            'producto' => $producto,
            'mensaje'=> $mensaje
        ]);

    }

}
