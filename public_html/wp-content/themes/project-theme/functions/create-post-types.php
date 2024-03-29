<?php

    use App\Helper\CustomPostType;


    /**
     * Custom Post Yypes
     */
    add_action('init', 'createPostTypes');
    function createPostTypes()
    {

        $instance = new CustomPostType();

        $instance->createPostType('Team', 'Team', $args=[
            'hierarchical' => false,
            'has_archive' => false,
            'menu_icon' => 'dashicons-groups',
            'rewrite' => [
                'slug' => true,
                'with_front' => TRUE
            ]
        ]);

        // $instance->createPostType('Campaign', 'Campaigns', $args=[
        //     'hierarchical' => false,
        //     'has_archive' => false,
        //     'menu_icon' => 'dashicons-welcome-view-site',
        //     'rewrite' => [
        //         'slug' => 'campaigns',
        //         'with_front' => TRUE
        //     ]
        // ]);

    }

    //Static functions, by definition, cannot and do not depend on any instance properties of the class. That is, they do not require an instance of the class to execute (and so can be executed. In some sense, this means that the function doesn't (and will never need to) depend on members or methods (public or private) of the class.

    // class Example {

    //     // property declaration
    //     public $value = "The text in the property";
    
    //     // method declaration
    //     public function displayValue() {
    //         echo $this->value;
    //     }
    
    //     static function displayText() {
    //         echo "The text from the static function";
    //     }
    // }

    // $instance = new Example();
    // $instance->displayValue();
    
    // $instance->displayText();
    
    // // Example::displayValue();         // Direct call to a non static function not allowed
    
    // Example::displayText();

