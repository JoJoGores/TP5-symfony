<?php

namespace App\Controller;


use App\Repository\ContactRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contacts', name: 'app_contacts', methods: ['GET'])]
    public function listeContact(ContactRepository $repo)
    {
        $Contacts = $repo->findAll();
        return $this->render('contact/listeContacts.html.twig',[
            'lesContacts' => $Contacts
        ]);
    }

    #[Route('/contact/{id}', name: 'ficheContact', methods: ['GET'])]
    public function ficheContact($id, ContactRepository $repo)
    {
        $Contact = $repo->find($id);
        return $this->render('contact/ficheContact.html.twig',[
            'leContact' => $Contact
        ]);
    }
}

3min 40