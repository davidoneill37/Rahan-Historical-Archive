<br><br><br>
   <div class="container">
    <div class="row">
        <div class="col-lg-6,col-md-6,col-sm-6,col-xs-6" id="tellastoryform">
            <?php $attributes = array("class" => "form-horizontal", "name" => "Tellastoryform");
            echo form_open("Tellastoryform", $attributes);?>
            <fieldset>
            <legend>Tell us a Story</legend>
            <div class="form-group">
                <div class="col-md-12">
                    <label for="name" class="control-label">Name</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="name" placeholder="Your Full Name" type="text" value="<?php echo set_value('name'); ?>" />
                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label for="email" class="control-label">Email ID</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="email" placeholder="Your Email address" type="text" value="<?php echo set_value('email'); ?>" />
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label for="subject" class="control-label">Subject</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="subject" placeholder="What is your story about?" type="text" value="<?php echo set_value('subject'); ?>" />
                    <span class="text-danger"><?php echo form_error('subject'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label for="message" class="control-label">Message</label>
                </div>
                <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="4" placeholder="We'd love to hear from you. If you have a story, a piece of folklore or a myth connected with Rahan, please get in touch by completing this form or by emailing rahanhistoricalarchive@gmail.com"><?php echo set_value('message'); ?></textarea>
                    <span class="text-danger"><?php echo form_error('message'); ?></span>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-md-12">
                    <span class="btn btn-default btn-file">Browse <input name="upload" type="file"></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <input name="submit" type="submit" class="btn btn-primary" value="Send" />
                </div>
            </div>
            </fieldset>
            <?php echo form_close(); ?>
            <?php echo $this->session->flashdata('msg'); ?>
        </div><!--End form column-->
        
        <div class="col-lg-4,col-md-4,col-sm-4,col-xs-4" id="tellastorycarousel">
   
   <div id="tellastorycarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#tellastorycarousel" data-slide-to="0" class="active"></li>
            <li data-target="#tellastorycarousel" data-slide-to="1"></li>
            <li data-target="#tellastorycarousel" data-slide-to="2"></li>
            <li data-target="#tellastorycarousel" data-slide-to="3"></li>
          </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo base_url(); ?>images/stories/quote1.png">
    </div>
    <div class="item">
      <img src="<?php echo base_url(); ?>images/stories/quote2.png">
    </div>
    <div class="item">
      <img src="<?php echo base_url(); ?>images/stories/quote3.png">
    </div>
    <div class="item">
      <img src="<?php echo base_url(); ?>images/stories/quote4.png">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#tellastorycarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#tellastorycarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
</div><!--End carousel column-->
        
    </div><!--End row-->
</div><!--End container-->