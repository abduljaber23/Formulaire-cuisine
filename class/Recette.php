<?php 

    class Recette{
        private string $titre;
        private string $description;
        private string $difficultes;
        private int $calorie;
        private string $image;

        public function __construct($titre,$description,$difficultes,$calorie,$image){
            $this->titre = $titre;
            $this->description = $description;
            $this->difficultes = $difficultes;
            $this->calorie = $calorie;
            $this->image = $image;
        }
        
        public function getTitre(): string{
            return $this->titre;
        }
        public function setTitre($titre): void{
            $this->titre = $titre;
        }

        public function getDescription(): string{
            return $this->description;
        }
        public function setDescription($description): void{
            $this->description = $description;
        }
        public function getDifficultes(): string{
            return $this->difficultes;
        }
        public function setDifficultes($difficultes): void{
            $this->difficultes = $difficultes;
        }
        public function getCalorie(): int{
            return $this->calorie;
        }
        public function setCalorie($calorie): void{
            $this->calorie = $calorie;
        }
        public function getImage(): string{
            return $this->image;
        }
        public function setImage($image): void{
            $this->image = $image;
        }
    }



?>