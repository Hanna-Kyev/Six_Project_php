<div class="py-5">
    <div class="row">
        <div class="container-wrapper">
            <div class="form-container address-container">
                <form action="">
                    <h1><?= $subtitle;?></h1>
                    <div class="social-container">
                        <a href="https://www.facebook.com/" class="social"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/" class="social"><i class="fab fa-instagram-square"></i></a>
                        <a href="https://www.linkedin.com" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>

                    <?php if (isset($address)) : ?>

                    <label for=""><i class="fas fa-home"></i> : <?=$address['street'];?></label>
                    <label for=""><i class="fas fa-envelope-square"></i> : <?=$address['email'];?></label>
                    <label for=""><i class="fas fa-phone-square-alt"></i> : <?=$address['mobile'];?></label>
                    <label for=""><i class="fas fa-map-marker-alt"></i> : <?=$address['city'];?></label>
                    <label for=""><i class="fas fa-university"></i> : <?=$address['country'];?></label>

                    <?php endif; ?>
                    
                </form>
            </div>

            <div class="form-container contact-container">
                <form action="" method="POST">
                    <h1><?= $title;?></h1>
                    <span>Drop us some message</span>
                    <input type="text" name="username" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <small class="form-text text-muted">We'll never share Your email with anyone else!</small>
                    <textarea name="message" id="" cols="60" rows="6" required></textarea>

                    <button type="submit">Submit Your message</button>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">            
                <div class="card">
                    <div class="card-header bg-primary text-white"><i class="fas fa-envelope"></i> Комментарии</div>
                        <div class="card-body bg-primary text-white">
                        <?php
                        if(isset($messages)):                 
                            foreach ($messages as $key => $value) { 
                            echo "<p>  ".$value['username']. " : ". $value['message']. " at: "
                            .$value['created_at']."</p>";                        
                            }
                        endif;?>
                    </div>
                </div>        
            </div>          
        </div>          
    </div>
</div>