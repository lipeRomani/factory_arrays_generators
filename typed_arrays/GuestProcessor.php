<?php

class GuestProcessor {

    public function process(Guest ...$guests) {
        foreach($guests as $guest) {
            $guest->printName();
        }
    }

}