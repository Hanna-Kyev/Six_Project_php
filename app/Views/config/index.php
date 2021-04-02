<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <i class="fa fa-envelope"></i> <?php echo $title; ?>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <?php if (isset($address)) : ?>
                            <div class="form-group">
                                <div><label for=""><i class="fas fa-envelope-square"></i> : <input type="email" name="email" value="<?=$address['email'];?>"></label></div> 
                            </div>
                            <div class="form-group">
                                <div><label for=""><i class="fas fa-home"></i> : <input type="text" name="street" value="<?=$address['street'];?>"></label></div> 
                            </div>
                            <div class="form-group">
                                <div><label for=""><i class="fas fa-map-marker-alt"></i> : <input type="text" name="city" value="<?=$address['city'];?>"></label></div>  
                            </div>
                            <div class="form-group">
                                <div><label for=""><i class="fas fa-university"></i> : <input type="text" name="country" value="<?=$address['country'];?>"></label></div> 
                            </div>

                            <div class="form-group">
                                <div><label for=""><i class="fas fa-phone-square-alt"></i> : <input type="text" name="mobile" value="<?=$address['mobile'];?>"></label></div> 
                            </div>
                            <?php endif; ?>   
                            <div class="mx-auto">
                                <button type="submit" class="btn btn-primary text-right"><input type="submit"></button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>