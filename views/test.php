<?php
    // class declaration
    class Studytonight implements WebApp, CMS {
    
        // methods definition
        public function login($email, $password) {
            echo "Login the user with email: " . $email;
        }
        
        public function register($email, $password, $username) {
            echo "User registered: Email=".$email." and Username=".$username;
        }
        
        public function logout() {
            echo "User logged out!";
        }
        
        public function publishPost($post) {
            echo $post." published!";
        }
        
    }
    
?>