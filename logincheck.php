
<?PHP





        // open connection to MongoDB server
        $conn = new MongoClient();

        // access database
        $db = $conn->test;

        // access collection
        $collection = $db->users;


        $userName = $_POST['email'];
        $userPass = $_POST['password'];


        $result = $db->$collection->findOne(array('userName'=> $userName, 'passWord'=> $userPass));



        if(!empty($result)){
            echo "You are successfully loggedIn";
        }else{
            echo "Wrong combination of username and password";
        }



        // disconnect from server
        $conn->close();





?>
