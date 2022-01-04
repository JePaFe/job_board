<?php

namespace App\Controller;

use App\Entity\JobOffer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OfferController extends AbstractController
{
    /**
     * @Route("/")
     *
     * @return Response
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $offers = $entityManager->getRepository(JobOffer::class)->findAll();

        return $this->render('offer/index.html.twig', [
            'offers' => $offers
        ]);
    }

    /**
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return Response
     * @Route("offer/apply")
     */

    public function apply(Request $request, EntityManagerInterface $entityManager)
    {
        $offerId = $request->get('offerId');

        $offer = $entityManager->getRepository(JobOffer::class)->find($offerId);

        return $this->render('offer/apply.html.twig', [
            'offer' => $offer
        ]);
    }
}