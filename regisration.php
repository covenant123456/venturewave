<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration form</title>
  <style type="text/css">
  body{
    margin: 0 auto;
     /* background-image:url('image3.jpg');*/
     background: green;
  background-repeat:no-repeat;
  background-position:center;
  background-size:100% 100%;
   width:100vw;
  height:100vh;
    font-family: 'Roboto', sans-serif;
 }
 .container {
  display: flex;
  align-items: center;
  justify-content: center; 
  flex-direction: column;
       


}

 .wrapper{
  color:black;
  display: flex;
  flex-direction: column;
  margin: 2px 2px 2px 2px;
  padding: 4px 4px 4px 4px;

 }
 form{
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    border-radius:0.5rem;
  backdrop-filter:blur(10px);
  border: 1px solid #ddf;
  width: 50%;
  height: 70%;
  display: flex;
  
  flex-direction: column;
  background:;
  border-radius:0.5rem;
  backdrop-filter:blur(10px);
 }
 input[type="text"],  input[type="button"]{
  width: 100%;
  padding:12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid;
  border-radius: 4px;

 }
 input[type="email"]{
  width: 80%;
  padding:12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid;
  border-radius: 4px;
 }
 .btn{
  background-color: #4caf50;
  color: #fff;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
  width: 100%;
 }
 .btn1{
    background-color: #4caf50;
  color: #fff;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
  width: 20%;
  margin: 0 0 1px 0;
 }

  </style>
</head>
<body>
  <div class="container">
  
  
</div>
<div class="wrapper">
  <form action="next.php" method="post">
    <h4>Basic Biodata Info</h4>
    <label for="title">Title :</label>
    <input type="text" name="title" placeholder="Title" required>
    <label for="surname">Surname :</label>
    <input type="text" name="surname" placeholder="Surname" required><br>
    <label for="firstname">First Name :</label>
    <input type="text" name="firstname" placeholder="Firstname" required>
    <label for="middlename">Middle Name :</label>
    <input type="text" name="lastname" placeholder="Middle name" required><br>
    <label>Marital status :</label>
    <input type="text" name="maritalstatus" placeholder="Marital status" required>
    <label for="maidenname">Maiden name :</label>
    <input type="text" name="maidenname" placeholder="Maiden name"><br>
    <label for="religion">Religion :</label>
    <input type="text" name="religion" placeholder="Religion" required>
     <label for="dateofbirth">Date of Brith</label>
    <input type="date" name="dateofbirth" required><br>
    <label for="nationality">Nationality :</label>
    <input type="text" name="nationality" placeholder="Nationality" required>
    <label for="state">State</label>
    <input type="text" name="state" placeholder="State" required><br>
    <label for="lga">Local Government Area of Origin :</label>
    <input type="text" name="lga" placeholder="Local Government Area of Origin"><br>
    <label for="address">Permanent Home Address :</label>
    <input type="text" name="address" placeholder="Permanent Home Address" required><br>
    <label for="phonenumber">Phone number :</label>
    <input type="text" name="phonenumber" placeholder="Phone number" required><br>
    <label for="emailaddress">Email address :</label>
    <input type="email" name="emailaddress" placeholder="Email address" required><button class="btn1">Verified</button><br>
    <label for="gender">Gender :</label>
    <input type="radio" name="male" >
    <label for="male">Male</label>
    <input type="radio" name="female">
    <label for="female">Female</label>
     <input type="radio" name="others"><br>
    <label for="others">Others</label>
   
    <label for="department">Departmeent :</label>
    <input type="text" name="department" placeholder="Departmeent" required><br>
    <label for="programme">Programme :</label>
    <input type="text" name="programme" placeholder="Programme" required><br>
    <label for="nextofkin">Next of kin</label>
    <input type="text" name="nextofkin" placeholder="Next of kin" required>
    <label for="address">Address of Next of Kin :</label>
    <input type="text" name="address" placeholder="Address of Next of kin" required><br>
    <label>Name of Sponsor :</label>
    <input type="text" name="nameofsponsor" placeholder="Name of Sponsor" required>
    <label for="number">Phone Number of Sponsor :</label>
    <input type="text" name="number" placeholder="Phone Number of Sponsor" required><br>
    <label for="address">Address of Sponsor :</label>
    <input type="text" name="address" placeholder="Address of Sponsor" required><br>
    <button class="btn">Update Biodata</button>
  </form>
</div>
</body>
</html>
