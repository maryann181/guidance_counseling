<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Register & Login</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
     
 </head>
 <body>
  <style>

    body{
     background-image:url("logonapod.jpg");
     background-repeat: no-repeat;
     background-size: cover;
     margin:0;
     padding:0;
     box-sizing:border-box;
     font-family:"poppins",sans-serif;
    }

    .container{
        background-color: white;
        width:500px;
        padding:1.5rem;
        margin:50px auto;
        border-radius:10px;
        box-shadow:0 20px 35px rgba(0,0,1,0.9);
        justify-content: center;
    }
    form{
        margin:0 2rem;
    }
    .form-title{
        font-size:1.5rem;
        font-weight:bold;
        text-align:center;
        padding:1.3rem;
        margin-top: 1 rem;
        margin-bottom:0.4rem;
    }
    input{
        color:inherit;
        width:100%;
        background-color:transparent;
        border:none;
        border-bottom:1px solid #757575;
        padding-left:1.5rem;
        font-size:15px;
    }
    .input-group{
        padding:1% 0;
        position:relative;
    
    }
    .input-group i{
        position:absolute;
        color:black;
    }
    input:focus{
        background-color: transparent;
        outline:transparent;
        border-bottom:2px solid hsl(327,90%,28%);
    }
    input::placeholder{
        color:transparent;
    }
    label{
        color:#757575;
        position:relative;
        left:1.2em;
        top:-1.3em;
        cursor:auto;
        transition:0.3s ease all;
    }
    input:focus~label,input:not(:placeholder-shown)~label{
        top:-3em;
        color:hsl(327,90%,28%);
        font-size:15px;
    }
    .recover{
        text-align:right;
        font-size:1rem;
        margin-bottom:1rem;
    
    }
    .recover a{
        text-decoration:none;
        color:rgb(125,125,235);
    }
    .recover a:hover{
        color:blue;
        text-decoration:underline;
    }
    .btn{
        font-size:1.1rem;
        padding:8px 0;
        border-radius:5px;
        outline:none;
        border:none;
        width:100%;
        background:rgb(36, 98, 204);
        color:white;
        cursor:pointer;
        transition:0.9s;
    }
    .btn:hover{
        background:#07001f;
    }
    .links{
        display:flex;
        justify-content:space-around;
        padding:0 4rem;
        margin-top:0.9rem;
        font-weight:bold;
    }
    button{
        color:rgb(92, 150, 244);
        border:none;
        background-color:transparent;
        font-size:1rem;
        font-weight:bold;
    }
    button:hover{
        text-decoration:underline;
        color:blue;
    }
    img {
        display: flex;
        justify-content: center;  
        max-width: 100%; 
        height: 20%;
    }
  </style>
  </body>
  <body>
     <div class="container" id="signup" style="display:none;">
        <img src="translogo.png">
       <h1 class="form-title">Register</h1>
       <form method="post" action="process_registration.php">
         <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="name" id="name" placeholder="Name" required>
            <label for="name">Name</label>
         </div>
         <div class="input-group">
             <i class="fas fa-building"></i>
             <input type="text" name="department" id="department" placeholder="Assigned Department" required>
             <label for="department">Assigned Department</label>
         </div>
         <div class="input-group">
                <i class="fas fa-clock"></i>
                <input type="text" name="available_schedule" placeholder="Available Schedule" required>
                <label for="available_schedule">Available Schedule</label>
            </div>
         <div class="input-group">
             <i class="fas fa-envelope"></i>
             <input type="email" name="gmail" id="gmail" placeholder="Gmail" required>
             <label for="gmail">Gmail</label>
         </div>
         <div class="input-group">
                <i class="fas fa-image"></i>
                <input type="file" name="profile_picture" accept="image/*">
                <label for="profile_picture">Profile Picture (optional)</label>
            </div>
         <div class="input-group">
             <i class="fas fa-lock"></i>
             <input type="password" id="password" placeholder="Password" required>
             <label for="password">Password</label>
         </div>
        <input type="submit" class="btn" value="Sign Up" name="signUp">
       </form>
       <div class="links">
         <p>Already Have Account ?</p>
         <button id="signInButton">Sign In</button>
       </div>
     </div>
 
     <div class="container" id="signIn">
     <img src="translogo.png">
         <h1 class="form-title">Sign In</h1>
         <form method="post" action="process_registration.php">
           <div class="input-group">
               <i class="fas fa-envelope"></i>
               <input type="email" name="email" id="email" placeholder="Email" required>
               <label for="email">Email</label>
           </div>
           <div class="input-group">
               <i class="fas fa-lock"></i>
               <input type="password" id="password" placeholder="Password" required>
               <label for="password">Password</label>
           </div>
          <input type="submit" class="btn" value="Sign In" name="signIn">
         </form>
         <div class="links">
           <p>Don't have an account yet?</p>
           <button id="signUpButton">Sign Up</button>
         </div>
       </div>
       <script src="script2.js"></script>
 </body>
 </html>