<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime chat app </title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/457547b5e2.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt">
                    This is an error message
                </div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">First Name</label>
                        <input type="text" placeholder="First Name">
                    </div>
                    <div class="field input">
                        <label for="">Last Name</label>
                        <input type="text" placeholder="Last Name">
                    </div>
                </div>
                    <div class="field input">
                        <label for="">Email Address</label>
                        <input type="text" placeholder="Email Address">
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" placeholder="Enter Password">
                        <i class="fas fa-eye"></i>
                    </div>   
                    <div class="field image">
                        <label for="">Select Imagen</label>
                        <input type="file" placeholder="Select Imagen">
                    </div> 
                    <div class="field button">
                        <button><span>Continue to Chat</span></button>
                       
                    </div>
            </form>
            <div class="link">Already signed  up? <a href="#">Login now</a></div>
        </section>

    </div>

    <script src="javascript/pass-show-hide.js"></script>
</body>
</html>