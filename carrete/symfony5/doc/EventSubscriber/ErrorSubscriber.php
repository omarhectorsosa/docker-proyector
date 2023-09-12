<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Environment;


class ErrorSubscriber implements EventSubscriberInterface
{
    private $twig;
    private $urlGenerator;

    public function __construct(Environment $twig, UrlGeneratorInterface $urlGenerator)
    {
        $this->twig = $twig;
        $this->urlGenerator = $urlGenerator;
        
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::EXCEPTION => 'onKernelException',
        ];
    }
    public function onKernelException(ExceptionEvent $event): void
    {
        
        $exception = $event->getThrowable();
        $statusCode = $exception instanceof HttpExceptionInterface ? $exception->getStatusCode() : 500;
        $referer = $event->getRequest()->headers->get('referer');

        $message = '';

        switch ($statusCode) {
            case 404:
                $message = 'Página no encontrada';
                break;
            case 403:
                $message = 'Acceso denegado';
                break;
            default:
                $message = 'Ha ocurrido un error';
        }
        $response = new Response(
            $this->twig->render('error/error.html.twig', [
                'statusCode' => $statusCode,
                'message' => $message,
                'referer' => $referer,
            ]),
            $statusCode
        );

        $event->setResponse($response);
    }
}
