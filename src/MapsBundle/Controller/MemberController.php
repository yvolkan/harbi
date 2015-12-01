<?php

namespace MapsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MemberController extends Controller
{
    protected $memberid = 0;
    public function setMemberid( $memberid ){
        if ( !$memberid )
            $memberid = $this->getUser()->getuyeid();
        
        $this->memberid = $memberid;
        return $this;
    }
    
    public function getMemberid(){
        return $this->memberid;        
    }
    
    
    public function memberInfo(){
        $uyeler = $this->getDoctrine()
        ->getRepository('MapsBundle:Uyeler')
        ->find( $this->getMemberid() );
        
        if ( $uyeler ) {
            return $uyeler;
        } else {
            return;
        }
    }    
    
    public function profileAction( $memberid = '' )
    {
        $this->setMemberid( $memberid );
        
        $member = $this->memberInfo();
        return $this->render('MapsBundle:Default:profil.html.twig', array( 'member' => $member ) );
    }
}