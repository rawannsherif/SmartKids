<?php




class Chat
{
    public $UserId;
    public $message;

    public function InsertChat($id,$message)
    {
        include('Db.php');
        $sql = "INSERT INTO messages(user_id,message) VALUES('$id','$message')";
        $pdo->query($sql);
    }

    public function DisplayChat()
    {
        include('Db.php');
        $sql = "SELECT users.name,messages.message,users.id,messages.user_id FROM messages INNER JOIN users on messages.user_id=users.id";
        $result = $pdo->query($sql);

        while($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            echo $row['name'];
            echo ' : ' . $row['message'];
            echo '<br>';
        }

    }
}
?>