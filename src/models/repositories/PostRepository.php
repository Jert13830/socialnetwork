<?php
    class PostRepository extends Db
{
    private static function request(string $request)
    {
        $db = self::getInstance();
        $result = $db->query($request);
        self::disconnect();
        return $result;
    }

     static function getAllPost()
    {
        $sql = "SELECT * FROM posts";
        return self::request($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    static function getCertainPost($id)
    {
        $sql = "SELECT * FROM posts where id = $id";
         return self::request($sql);
    }

    static function getUserPosts($userId){
        $sql = "SELECT * FROM posts where userId = $userId";
        return self::request($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    static function getAllUsersPosts(){
        $sql = "SELECT posts.*, users.username
        FROM posts
        INNER JOIN users ON posts.userId = users.id
        ORDER BY posts.date DESC";
        return self::request($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    static function deletePost($postId){
        $sql = "DELETE FROM posts where id = $postId";
         return self::request($sql);
    }

    static function addPost($title,$content,$date,$userId){
        $sql = "INSERT INTO posts (title,content,date,userId) VALUES ('$title','$content','$date','$userId')";
        return self::request($sql);
    }

    static function updatePost($id,$title,$content,$date,$userId){
       $sql = "UPDATE posts SET title = '$title',content = '$content',date = '$date', userId ='$userId'  WHERE id = $id";
        return self::request($sql);
    }
    
}
?>