<style>
    <?php include 'css/adminstyle.css';?>
</style>
<style>
    <?php include 'header.php';?>
</style>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;1,300&family=Merriweather&family=Poppins:wght@200&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Merriweather&family=Poppins:wght@200&display=swap');
        @import "./fontawesome/scss/fontawesome.scss";
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;1,300&family=Kdam+Thmor+Pro&family=Koulen&family=Merriweather&family=Poppins:wght@200&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;1,300&family=Josefin+Sans:wght@500&family=Kdam+Thmor+Pro&family=Koulen&family=Merriweather:ital@0;1&family=Noto+Serif:wght@700&family=Poppins:wght@200&family=Rubik:ital,wght@1,600&display=swap');
        *{
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .opt 
        {
            height: 100px;
            width: 70%;
            margin-top: 8%;
            float: right;
            /*border: 1px solid black;*/
            margin-right: 8%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .opt a 
        {
            text-decoration: none;
            margin: 20px;
            float: right;
            border: 1px solid green;
            padding: 10px 16px;
            border-radius: 3px;
            color: #000;
            font-size: 16px;
            font-weight: bold;
        }
        .opt a:hover 
        {
            border-color: #C0392B;
            transition: .3s;
        }
        .forms  
        {
            /*height: 1000px;*/
            width: 70%;
            float: right;
            margin-top: 3%;
            background-color: #D1F2EB;
            border-radius: 3px;
            margin-right: 8%;
        }
        .forms .hd 
        {
            margin-top: 10px;
            height: 80px;
            width: 100%;
            justify-content: center;
            align-items: center;
            text-align: center;
            display: flex;
        }
        .hd h1 
        {
            font-size: 26px;
            font-weight: bold;
            text-align: center;
            color: #117A65;
        }
        .hd h1 i 
        {
            color: #fff;
            margin-right: 10px;
        }
        .forms form  
        {
            margin-top: 40px;
        }
        .forms .form-label 
        {
            font-size: 16px;
            font-weight: bold;
            color: #000;
            margin-left: 30px;
            
        }
        input[type="text"]
        {
            width: 96%;
            height: 40px;
            border: 1px solid #fff;
            border-radius: 3px;
            margin-top: 20px;
            margin-bottom: 30px;
            margin-left: 30px;
        }
        input[type="text"].active 
        {
            border: 1px solid darkred;
        }
        
        input[type="file"] 
        {
            display: none;
        }
        .custom-file-upload 
        {
            cursor: pointer;
            text-align: center;
            background-color: #fff;
            color: #000;
            border-radius: 3px;
            margin-left: 30px;
            display: block;
            width: 140px;
            height: 70px;
            font-size: 18px;
            font-weight: bolder;
        }
        input[type="submit"]
        {
            display: block;
            cursor: pointer;
            height: 50px;
            width: 90px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            background-color: #138D75;
            border: none;
            color: #fff;
            border-radius: 3px;
            font-size: 16px;
        }
        .select-style 
        {
            padding: 0;
            margin: 0;
            border: 1px solid #A2D9CE;
            width: 200px;
            height: 35px;
            border-radius: 3px;
            overflow: hidden;
            background-color: #fff;
            background: #fff;
            position: relative;
            margin-left: 30px;
            margin-top: 10px;
        }
        .select-style select 
        {
            padding: 5px 8px;
            width: 100%;
            border: none;
            box-shadow: none;
            background-color: transparent;
            background-image: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        .select-style:after 
        {
            top: 50%;
            left: 85%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-color: rgba(0, 0, 0, 0);
            border-top-color: #000000;
            border-width: 5px;
            margin-top: -2px;
            z-index: 100;
        }
        .select-style select:focus 
        {
            outline: none;
        }
    </style>
</head>
<body>
        <div class="opt">
            <a href="sofa_form.php">Insert</a>
            <a href="sofa_table.php">Delete</a>
            <a href="sofa_table.php">Update</a>
            <a href="sofa_table.php">View</a>
        </div>

        <div class="forms">

            <div class="hd">
                <h1><i class="fa-solid fa-couch"></i>Sofa</h1> 
            </div>

            <form action="sofa_insert.php" id="sofa_form" method="post" enctype="multipart/form-data">
               
                <div class="form-outline">
                    <label class="form-label" for="form1Example1">Title</label><br>
                    <input type="text" name="sofa_title" class="form-control" required="" />
                </div>
                
                <div class="custom-select">
                    <label class="form-label" for="form1Example1">Type</label><br>
                    
                    <div class="select-style">
                        <select name="sofa_type" required="" id="try" onchange="changevalu();">
                            <option value="", disabled selected>Select option</option>
                            <option value="Armchair Sofa">Armchair Sofa</option>
                            <option value="Loveseat Sofa">Loveseat Sofa</option>
                            <option value="Sectional/Modular Sofa">Sectional/Modular Sofa</option>
                        </select>
                    </div>
                </div><br>

                <div class="form-outline">
                    <label class="form-label" for="form1Example1">Size</label><br>
                    <input type="text" name="sofa_size" id="getValue" readonly>
                </div>

                <div class="form-outline">
                    <label class="form-label" for="form1Example1">Item Weight</label><br>
                    <input type="text" name="sofa_weight" id="getWeight" readonly>
                    <script type="text/javascript">
                       function changevalu()
                       {
                         var v = document.getElementById('try').value;
                         // alert(v);
                         console.log(v);
                         if(v == "Armchair")
                         {
                            document.getElementById('getValue').value = "30″ x 45″";
                            document.getElementById('getWeight').value = "60";
                        }
                        else if(v == "Loveseat")
                        {
                            document.getElementById('getValue').value = "48″ x 72″";
                            document.getElementById('getWeight').value = "120";

                        }
                        else
                        {
                            document.getElementById('getValue').value = "76″ x 80″";
                            document.getElementById('getWeight').value = "200";
                        }
                    }
                    </script>
                </div>

                
                <div class="form-outline">
                    <label class="form-label" for="form1Example1">Color</label><br>
                    <!-- <input type="text" name="bed_size" class="form-control" /> -->
                    <div class="select-style">
                        <select name="sofa_color" required="">
                            <!-- option(value='', disabled selected) Select option -->
                            <option value="", disabled selected>Select option</option>
                            <option value="Green">Green</option>
                            <option value="Brown">Brown</option>
                            <option value="White">White</option>
                            <option value="Blue">Blue</option>
                        </select>
                    </div>
                </div><br>
                <!-- <div class="form-outline">
                    <label class="form-label" for="form1Example1">Weight</label><br>
                    <input type="text" name="sofa_weight" class="form-control" required="" />
                </div> -->
                <div class="form-outline">
                    <label class="form-label" for="form1Example1">Seat Material</label><br>
                    <input type="text" name="sofa_material" class="form-control" required="" />
                </div>
                
                <div class="form-outline">
                    <label class="form-label" for="form1Example1">Quantity</label><br>
                    <input type="text" name="sofa_stock" class="form-control" required="" />
                </div>
                <div class="form-outline">
                    <label class="custom-file-upload"><br>
                        <input type="file" name="image" required="">
                        Upload Image
                    </label>
                </div>

                <!-- Submit button -->
                <input type="submit"  name="submit" value="Submit">
            </form>

        </div>

</body>
</html>
<script>
    
</script>