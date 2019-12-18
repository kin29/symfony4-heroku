<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route("/comment", name="form")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        $message = '↑ input, and submit';
        $form = $this->createFormBuilder()
            ->add('name')
            ->add('comment')
            ->add('submit', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $message = "Thanks, {$data['name']}";
        }

        return $this->render('comment/index.html.twig', [
            'form' => $form->createView(),
            'message' => $message
        ]);
    }
}
