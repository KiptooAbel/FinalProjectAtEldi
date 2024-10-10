<?php


class display_contra extends display_model {
    

        public function getUsers() {
            $display_model = new display_model();
            $users = $display_model->getAllUsers();
            return $users;
        }

}