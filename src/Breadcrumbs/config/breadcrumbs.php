<?php

return [

    //Settings step Home page (true or false)
    'first' => [

        //Show Home. true or false
        'enable' => true,

        //Content home page, text or tag. Example: <span class="glyphicon glyphicon-home"></span>
        'content' => 'Home',

        //Name class for Home page tag <li>
        'class' => ''

    ],

    //Separator
    'separator' => [

        //Add tag <li> for separator. true or false
        'enable' => null,

        //Class separator for tag <li>, null or name class
        'class' => null,

        //Content separator for tag <li>, text, tags or image (Example: 'content' => '&rarr;')
        'content' => ''

    ],

    //Using template from /resources/views/vendor/breadcrumbs. Default template using styles bootstrap3
    'template' => 'default'

];