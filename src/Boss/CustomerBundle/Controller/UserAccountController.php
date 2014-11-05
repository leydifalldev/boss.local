<?php

namespace Boss\CustomerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Boss\CustomerBundle\Entity\User;
use Boss\CustomerBundle\Entity\Company;
use Boss\CustomerBundle\Form\CompanyInfoType;
use Boss\CustomerBundle\Form\CompanyCapitalType;
use Boss\CustomerBundle\Form\CompanyObjectsType;
use Boss\CustomerBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

Class UserAccountController extends Controller
{
    /**
     * @Route("/")
     *
     */
    public function indexAction()
    {
        return $this->render("BossCustomerBundle:Account:home.html.twig");
    }
    
    /**
     * @Route("/create.step1", name="create_step1")
     * @Template("BossCustomerBundle:Account:account.create.step1.html.twig")
     */
    public function getUserInfoAction(Request $request) 
    {
        $user = new User();
        //return $this->render("BossCustomerBundle:Account:account.create.html.twig");
        $form = $this->get('form.factory')->create(new UserType(), $user);
        
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            return $this->redirect($this->generateUrl("create_step2", array("user_id" => $user->getId())));
        }
      return array('form' => $form->createView());
    }
    
    /**
     * @Route("/create.step2/{user_id}", name="create_step2")
     * @Template("BossCustomerBundle:Account:account.create.step2.html.twig")
     */
    public function getCompanyInfoAction(Request $request, $user_id) 
    {
        $user = $this->getDoctrine()->getManager()->getRepository("BossCustomerBundle:User")->find($user_id);
        $company = new Company($user);
        
        $form = $this->get('form.factory')->create(new CompanyInfoType(), $company);
        
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($company);
            $em->flush();
            //$company = new Company();
            return $this->redirect($this->generateUrl("create_step3", array("company_id" => $company->getId())));
            
        }
        return array('form' => $form->createView());
      
    }
    
    /**
     * @Route("/create.step3/{company_id}", name="create_step3")
     * @Template("BossCustomerBundle:Account:account.create.step3.html.twig")
     */
    public function getCompanyCapitalAction(Request $request, $company_id) 
    {
        $company = $this->getDoctrine()->getManager()->getRepository("BossCustomerBundle:Company")->find($company_id);
        $test = $company->getLegalname();
        //return $this->render("BossCustomerBundle:Account:account.create.html.twig");
        $form = $this->get('form.factory')->create(new CompanyCapitalType(), $company);
        
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($company);
            $em->flush();
            
            //$company = new Company();
            return $this->redirect($this->generateUrl("create_step4", array("company_id" => $company_id)));
            
        }
      return array('form' => $form->createView());
    }
    
    /**
     * @Route("/create.step4/{company_id}", name="create_step4")
     * @Template("BossCustomerBundle:Account:account.create.step4.html.twig")
     */
    public function getCompanyObjectsAction(Request $request, $company_id) 
    {
        $user = new User();
        $company = $this->getDoctrine()->getManager()->getRepository("BossCustomerBundle:Company")->find($company_id);
        //return $this->render("BossCustomerBundle:Account:account.create.html.twig");
        $form = $this->get('form.factory')->create(new CompanyObjectsType(), $company);
        
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($company);
            $em->flush();
            
            //$company = new Company();
            return $this->redirect("create.validation");
            
        }
      return array('form' => $form->createView());
    }
    
     /**
     * @Route("/app_dev.php/create.validation", name="create.validation")
     *
     */
    public function ValidationFormAction()
    {
        return $this->render("BossCustomerBundle:Account:create.validation.html.twig");
    }
    
}
