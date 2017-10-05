<?php

        class flores {
            
        // El constructor
            public function __construct($rama,$color,$longitud){
                $this->$rama =$rama;
                $this->$color =$color;
                $this->$longitud =$longitud;
                
            }            
        //Metodes

           public function getRama(){

        // Retornem el atribut preu
                return $this->precio;
            }
            
           public function getColor(){

        // Retornem el atribut pieza
                return $this->pieza;
            }	            
            
           public function getLongitud(){

        // Retornem informació
                return $this->info;
            }	       
            
           public function Terra(){
            }	    
            
           public function NivellAgua(){
            }	            
            
            
            
        } 








?>
