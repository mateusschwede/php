<?php
    namespace App\Services;
    use App\Models\User;

    class UserService {

        //Ver dados de usuário
        public function get($id = null) {
            if ($id) {
                return User::select($id);
            } else {
                return User::selectAll();
            }
        }

        //Inserir dados de usuário
        public function post() {
            return User::insert($_POST);
        }

        //Editar dados de usuário
        public function update() {}

        //Excluir dados de usuário
        public function delete() {}
    }