<html>

<head>
    <title>Chat Box</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="js/jQuery.js"></script>
    <script>
        $(document).ready(function() {

            $('#chat').keyup(function(e) {
                if (e.keyCode == 13) {
                    var chats = $('#chat').val();

                    $.ajax({
                        method: 'POST',
                        url: 'pages/InsertChat.php',
                        data: {
                            chats: chats
                        },
                        success: function() {
                            console.log('ok');
                            $('#chat').val('');

                        }

                    })
                }
            })
            $('#text').load('pages/DisplayChat.php')

            setInterval(function() {
                $('#text').load('pages/DisplayChat.php')
            }, 500);

        })
    </script>
    <?php session_start() ?>
    <?php

    if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
        echo '';
    } else {
        header('location:Login.php');
    }

    ?>
</head>

<body>

    <?php
    include('DB.php');
    include('NavBar.php');
    ?>
    <div id="container">
        <div id="header">
            <h1>You can chat here, <?php echo $_SESSION['name']; ?></h1>
        </div>
        <div id="mainnav">

        </div>
        <div id="content">
            <a href="pages/logout.php" class="logout">logout</a>
            <div id='text'> 
            </div>
            <textarea name="" id="chat" cols="80" rows="5"></textarea>

            <button id="sendbutton">Send Message</button>
            <div id="alo">
                <div>
                    <div id="footer"></div>
                </div>
            </div>

</body>



</html>