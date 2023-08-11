<?php

namespace App\Controller;

use App\Entity\Employer;
use App\Form\EmployerType;
use App\Repository\EmployerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(EmployerRepository $employerRepository): Response
    {
        $employers = $employerRepository->findAll();
        return $this->render('home/index.html.twig', compact("employers"));
    }

    /**
     * @Route("/add", name="app_new", methods={"GET", "POST"})
     */
    public function new(
        EntityManagerInterface $entityManager,
        Request $request
    ){
        $employer = new Employer();

        $form = $this->createForm(EmployerType::class, $employer);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManager->persist($employer);
            $entityManager->flush();
            return $this->redirectToRoute('app_home');
        }
        return $this->render('home/new.html.twig',[
            "form" => $form->createView()
        ]);
    }
}
