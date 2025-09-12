<?php
    class UserRepository extends Db
{
    private static function request(string $request)
    {
        $db = self::getInstance();
        $result = $db->query($request);
        self::disconnect();
        return $result;
    }

     static function getAllUser()
    {
        $sql = "SELECT * FROM users";
        return self::request($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    static function getCertainUser($id)
    {
        $sql = "SELECT * FROM users where id = $id";
         return self::request($sql);
    }

    static function getUserUsername($id)
    {
        $sql = "SELECT username FROM users where id = $id";
        $return = self::request($sql)->fetch();
        return $return["username"];
    }

   static function createUser(User $user)
    {
        $sql = "INSERT INTO users (surname, forename, DOB, email, username, pword) 
                VALUES (:surname, :forename, :dob, :email, :username, :password)";
        
        $db = self::getInstance();
        $stmt = $db->prepare($sql);

        return $stmt->execute([
            ':surname'  => $user->getSurname(),
            ':forename' => $user->getForename(),
            ':dob'      => $user->getDob()->format('Y-m-d'),
            ':email'    => $user->getEmail(),
            ':username' => $user->getUsername(),
            ':password' => $user->getPassword(), 
        ]);
    }

    static function checkUserLogin($loginName){
         $sql = "SELECT * FROM users where username = '$loginName' OR email = '$loginName'";
         return self::request($sql)->fetch();
    }
}?>