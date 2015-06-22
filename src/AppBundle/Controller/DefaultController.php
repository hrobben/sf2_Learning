<?php
// src/AppBundle/Controller/DefaultController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{

    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        return new Response('Admin page!');
    }

    public function newAction(Request $request)
    {
        return new Response('<h1>HOME page basis</h1>');
        // just setup a fresh $task object (remove the dummy data)
        $task = new Task();

        $form = $this->createForm(new TaskType(), $task);
        /*        $form = $this->createFormBuilder($task)
                    ->add('task', 'text')
                    ->add('dueDate', 'date')
                    ->add('save', 'submit', array('label' => 'Create Task'))
                    ->add('saveAndAdd', 'submit', array('label' => 'Save and Add'))
                    ->getForm();*/

        $form->handleRequest($request);

        if ($form->isValid()) {
            // perform some action, such as saving the task to the database
            $nextAction = $form->get('saveAndAdd')->isClicked()
                ? 'task_new'
                : 'task_success';

            return $this->redirectToRoute($nextAction);
        }

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}