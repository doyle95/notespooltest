
<?PHP




    try {
        // open connection to MongoDB server
        $conn = new MongoClient();

        // access database
        $db = $conn->test;

        // access collection
        $collection = $db->users;


        $userName = $_POST['email'];
        $userPass = $_POST['password'];


        $user = $db->$collection->findOne(array('userName'=> $userName, 'passWord'=> $userPass));

        foreach ($user as $obj) {
            echo 'Username' . $obj['username'];
            echo 'password: ' . $obj['password'];
            if($userName == 'user1' && $userPass == 'pass1'){
                echo 'found';
            }
            else{
                echo 'not found';
            }

        }

        // disconnect from server
        $conn->close();

    } catch (MongoConnectionException $e) {
        die('Error connecting to MongoDB server');
    } catch (MongoException $e) {
        die('Error: ' . $e->getMessage());
    }



?>
