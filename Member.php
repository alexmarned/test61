<?php


class Member {

 private $username;

 public function __construct( $username ) {
   $this->username = $username;
 }

 public function getUsername() {
   return $this->username;
 }
}

class Topic {

 private $member;
 private $subject;

 public function __construct( $member, $subject ) {
   $this->member = $member;
   $this->subject = $subject;
 }

 public function getUsername() {
   return $this->member->getUsername();
 }
}

$aMember = new Member( "fred" );

$aTopic = new Topic( $aMember, "Hello everybody!" );
echo $aTopic->getUsername(); // отобразит "fred"