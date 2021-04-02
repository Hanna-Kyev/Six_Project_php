<div id="register" class="modal">
    <div class="dialog"> 
        <a href="#close" class="close">X</a>
        <form class="text-center border p-5 m-auto" action="http://google.com" method="GET">                        
            <h1 class="h4 mb-4"> Sign Up </h1>
            <div class="row mb-4">
                <div class="col-md-6 mx-0">
                    <input type="text" class="form-control" name="first_name" placeholder="Enter Your Name:">
                </div>
                <div class="col-md-6 mx-0">
                    <input type="text" class="form-control" name="Surname" placeholder="Enter Your Surname:">
                </div>
            </div>
            <div class="row mb-4">
                <input type="email" class="form-control" name="email" placeholder="Enter Your Email:">
            </div>
            <div class="row mb-4">
                <input type="password" class="form-control"  name="password" placeholder="Enter Your password:">
                <input type="password" class="form-control"  name="password" placeholder="Confirm Your password:">
            </div>
                <button type="submit" class="btn btn-dark btn-block"> Register  </button>
            <p class="y-1"> Already a member? <a href="/app/Views/layouts/partials/site/_login.php"> Sign In </a></p>
        </form> 
    </div>
</div>