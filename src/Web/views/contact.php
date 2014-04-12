<?php 
$this->title()->set('Get in Touch!');
?>
<h3>Get in Touch!</h3>
<p>We'd love to hear from you. You can either reach out to us as a whole and one of our awesome team members will get back to you, or if you have a specific question reach out to one of our staff. We love getting email all day <em>all day</em>.</p>

<div class="section-container tabs" data-section>
<section class="section">
  <h5 class="title"><a href="#panel1">Contact</a></h5>
  <div class="content" data-slug="panel1">
    <form method="post" action="" enctype="multipart/form-data" >
      <div class="row collapse">
        <div class="large-2 columns">
          <label class="inline">Your Name</label>
        </div>
        <div class="large-10 columns">
            <?php
                echo $this->field($this->form->get('name'));
                $data = [
                    'form' => $this->form,
                    'name' => 'name'
                ];
                echo $this->partial('_field', $data);
            ?>            
        </div>
      </div>
      <div class="row collapse">
        <div class="large-2 columns">
          <label class="inline"> Your Email</label>
        </div>
        <div class="large-10 columns">
            <?php
                echo $this->field($this->form->get('email'));
                $data = [
                    'form' => $this->form,
                    'name' => 'email'
                ];
                echo $this->partial('_field', $data);
            ?>          
        </div>
      </div>
      <div class="row collapse">
        <div class="large-2 columns">
          <label class="inline"> Website</label>
        </div>
        <div class="large-10 columns">
            <?php
            echo $this->field($this->form->get('url'));
                $data = [
                    'form' => $this->form,
                    'name' => 'url'
                ];
                echo $this->partial('_field', $data);
            ?>          
        </div>
      </div>
      <label>What's up?</label>
        <?php
        echo $this->field($this->form->get('message'));
        $data = [
            'form' => $this->form,
            'name' => 'message'
        ];
        echo $this->partial('_field', $data);
        ?>      
      <?php
        // echo $this->field($this->form->get('submit'));
        //echo $this->input(['type' => 'submit', 'name' => 'submit', 'value' => 'send']);
      ?>
      <button type="submit" class="radius button">Submit</button>
    </form>
  </div>
</section>
<section class="section">
  <h5 class="title"><a href="#panel2">Specific Person</a></h5>
  <div class="content" data-slug="panel2">
    <ul class="large-block-grid-5">
      <li><a href="#"><img src="https://gravatar.com/avatar/895c943fbd5beb697f6c2d7bf0c3b279?size=200">Hari KT</a></li>
      <li><a href="#"><img src="https://gravatar.com/avatar/c109ac4bc8af147fb90b2674f74e009c?size=200">Paul M Jones</a></li>      
    </ul>
  </div>
</section>
</div>
