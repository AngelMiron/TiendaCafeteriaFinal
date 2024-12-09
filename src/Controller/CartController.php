<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CartController extends AbstractController
{
    #[Route('/cart', name: 'app_cart')]
    public function index(): Response
    {
        return $this->render('cart/index.html.twig', [
            'controller_name' => 'CartController',
            
        ]);
    }
    #[Route('/cart/add/{id}', name: 'cart_add')]
    public function addProduct(int $id): Response
    {
    // Lógica para agregar producto al carrito
    return $this->json(['message' => 'Producto agregado al carrito', 'productId' => $id]);
    }

    // Método para ver el contenido del carrito
    #[Route('/cart/view', name: 'cart_view')]
    public function viewCart(): Response
    {
    // Aquí podrías obtener el carrito desde la base de datos o la sesión
    return $this->render('cart/view.html.twig', [
        'cart_items' => [], // Pasar los elementos del carrito aquí
    ]);
    }

}
