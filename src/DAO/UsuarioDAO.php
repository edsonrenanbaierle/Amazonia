<?php

namespace App\DAO;

use App\Db\DbCoon;
use App\http\Response;
use PDO;

class UsuarioDAO
{
    public function auth($body)
    {
        $coon = DbCoon::coon();

        $email = $body["email"];

        $sql = "SELECT * FROM Usuario
                WHERE email = :email";

        $stmt = $coon->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() == 0) throw new \Exception("Email ou Senha incorreto", 401);
        if (!password_verify($body["senha"], $user["senha"])) throw new \Exception("Email ou Senha incorreto", 401);

        $token = Response::generateToken($user);

        unset($user["senha"]);
        unset($user["id"]);
        $coon = null;
        
        return [
            "token" => $token,
            "user_data" => $user
        ];
    }
}
