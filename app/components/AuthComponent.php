<?php


namespace app\components;


use app\database\UsersTable;
use app\model\User;
use base\App;
use base\component\Component;
use base\Page;

class AuthComponent extends Component
{
    private $page;
    private $table;

    public function __construct(Page &$page)
    {
        $this->page = $page;

        if (!isset($this->table)) {
            $this->table = new UsersTable();
        }
    }

    public function login($email, $password)
    {
        $user = $this->table->get('*', ['email' => $email]);
        if (isset($user)) {
//            var_dump($admin);
//            var_dump($password);
            $user = $user[0];
//            if ($user['role'] === 'user')
//                return false;

            if ($this->checkPassword($password, $user['password'], $user['salt'])) {
                App::$session->user->setEmail($user['email']);
                App::$session->user->auth = true;
                App::$session->user->setId($user['id']);
                App::$session->user->setRole($user['role']);

                return true;
            }
            else {
                return false;
            }
        }
    }

    public function register($email, $password, $role, $name, $surname)
    {
        $salt = $this->generateSalt();
        $passwordHash = $this->generateHashPassword($password, $salt);

        $admin = new User($email, $passwordHash, $salt, $role, $name, $surname);

        return $this->table->insert($admin);
    }

    public function delete($id)
    {
        return $this->table->delete(['id' => $id]);
    }

    public function updateEmail($id, $oldEmail, $newEmail)
    {
        $admin = $this->table->get(['email'], ['id' => $id]);

        if (!empty($admin) && $oldEmail !== $admin[0]['email'])
            return null;

        return $this->table->update(['email' => $newEmail], ['id' => $id]);
    }

    public function updatePassword($id, $oldPassword, $newPassword)
    {
        $admin = $this->table->get( '*', ['id' => $id]);

        $oldHashPassword = hash("sha512", hash("sha512", $oldPassword) . hash("sha512", $admin[0]['salt']));
        if ($oldHashPassword !== $admin[0]['password'])
            return null;

        $newHashPassword = hash("sha512", hash("sha512", $newPassword) . hash("sha512", $admin[0]['salt']));

        return $this->table->update(['password' => $newHashPassword], ['id' => $id]);
    }

    private function generateSalt()
    {
        $salt = '';
        $saltLength = 25;
        for($i = 0; $i < $saltLength; $i++) {
            $rand = mt_rand(65, 90);

            if ($rand == 34 || $rand == 39)
                $i -= 1;
            else
                $salt .= chr($rand);
        }
        return $salt;
    }

    private function generateHashPassword($password, $salt)
    {
        $password512 = hash('sha512', $password);
        $salt512 = hash('sha512', $salt);

        return hash('sha512', $password512 . $salt512);
    }

    private function checkPassword($password, $dbpasswod, $dbsalt)
    {
        $checkPassword = $this->generateHashPassword($password, $dbsalt);

        return $checkPassword === $dbpasswod;
    }
}