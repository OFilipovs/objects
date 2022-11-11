<?php

class Application
{
    private VideoStore $storeOne;
    public function run()
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->add_movies();
                    break;
                case 2:
                    $this->rent_video();
                    break;
                case 3:
                    $this->return_video();
                    break;
                case 4:
                    $this->list_inventory();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function add_movies()
    {
        $amount = intval(readline("How many movies to add? "));
        $this->storeOne = new VideoStore();
        $i = 0;

        while ($i < $amount){
            $userInput = readline("Input movie title: ");
            $this->storeOne->setInventory(new Video($userInput));
            $movies = $this->storeOne->getInventory();
            for ($ix = 0; $ix < $amount; $ix++){
                $movies[$userInput]->setUserRating(intval(readline("Enter ratings: ")));
            }

            $i++;
        }
    }

    private function rent_video()
    {
        $this->list_inventory();
        $userInput = readline("Input movie title: ");
        $movies = $this->storeOne->getInventory();
        $movies[$userInput]->setStatus(Video::CHECKED_OUT);
    }

    private function return_video()
    {
        $userInput = readline("Input movie title: ");
        $movies = $this->storeOne->getInventory();
        $movies[$userInput]->setStatus(Video::CHECKED_IN);
        $movies[$userInput]->setUserRating(intval(readline("Provide a rating from 1-10: ")));
    }

    private function list_inventory()
    {
        foreach ($this->storeOne->getInventory() as $key => $movie){
            echo "$key " . ", Average rating: " . $movie->getUserRating(). ", Status: " . $movie->getStatus() . PHP_EOL;
        }
    }
}

