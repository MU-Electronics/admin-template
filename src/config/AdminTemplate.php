<?php


 return [

     /**
      *  Configure template language locations
      */
     'lang_service' => 'manchesterTemplate::template.booking_system',

    /**
     * Configure copy right
     */
     'copyright_string' => '�2015 All Rights Reserved. Electronics Section, Chemistry, The University of Manchester.',
     'copyright_string_short' => 'Chemistry, University of Manchester',
     'copyright_logo' => 'vendor/manchesterTemplate/images/manchester/copyright.png',


     /**
      *  Configure template layout
      */
     'first_side_menu' => false,
     'second_side_menu' => false,


     /**
      *  Registration view
      */
     'show_registration_form' => false,
     'show_registration_message' => 'Please request access from the relivent member of staff',

     /**
      * Side Bar Links
      */
     'side_links' => [
         ['url'=>'dashboard', 'name'=>'Dashboard', 'icon' => 'fa-home'],
         [
             'name'=>'Hubs',
             'icon' => 'fa-train',
             'child' => [
                 'List Hubs' => ['name'=>'List Hubs', 'url'=>'hubs'],
                 'Add New Hubs' => ['name'=>'Add New Hub', 'url'=>'hubs/add']
             ],
         ],
         [
             'name'=>'Users',
             'icon' => 'fa-user',
             'child' => [
                 'List Users' => ['name'=>'List Users', 'url'=>'user'],
                 'Add New User' => ['name'=>'Add New User', 'url'=>'users/add']
             ],
         ],
         ['name'=>'Settings',  'icon' => 'fa-cog', 'url'=>'settings'],
     ]
 ];