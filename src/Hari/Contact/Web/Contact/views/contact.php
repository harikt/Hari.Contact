<?php 
$this->title()->set('Contact Us');
?>
<div class="row-fluid">
  <div class="span12">Contact Us</div>
</div>
<div class="row-fluid">
  <div class="span12">
    <form method="post" action="" enctype="multipart/form-data" >
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td>Name : </td>
                <td>
                <?php
                    echo $this->field($this->form->get('name'));
                    $data = [
                        'form' => $this->form,
                        'name' => 'name'
                    ];
                    echo $this->partial('_field', $data);
                ?>
                </td>
            </tr>
            <tr>
                <td>Email : </td>
                <td>
                <?php
                    echo $this->field($this->form->get('email'));
                    $data = [
                        'form' => $this->form,
                        'name' => 'email'
                    ];
                    echo $this->partial('_field', $data);
                ?>
                </td>
            </tr>
            <tr>
                <td>Url : </td>
                <td>
                <?php
                    echo $this->field($this->form->get('url'));
                    $data = [
                        'form' => $this->form,
                        'name' => 'url'
                    ];
                    echo $this->partial('_field', $data);
                ?>
                </td>
            </tr>
            <tr>
                <td>Message : </td>
                <td>
                <?php
                    echo $this->field($this->form->get('message'));
                    $data = [
                        'form' => $this->form,
                        'name' => 'message'
                    ];
                    echo $this->partial('_field', $data);
                ?>
                </td>
            </tr>
            <tr>
                <td>check : </td>
                <td>
                <?php
                    echo $this->field($this->form->get('check'));
                    $data = [
                        'form' => $this->form,
                        'name' => 'check'
                    ];
                    echo $this->partial('_field', $data);
                ?>
                </td>
            </tr>
            <tr>
                <td>check : </td>
                <td>
                <?php
                    echo $this->field($this->form->get('cbarray'));
                    $data = [
                        'form' => $this->form,
                        'name' => 'cbarray'
                    ];
                    echo $this->partial('_field', $data);
                ?>
                </td>
            </tr>
            <tr>
                <td>States : </td>
                <td>
                <?php
                    echo $this->field($this->form->get('state'));
                    $data = [
                        'form' => $this->form,
                        'name' => 'state'
                    ];
                    echo $this->partial('_field', $data);
                ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                <?php
                echo $this->field($this->form->get('submit'));
                //echo $this->input(['type' => 'submit', 'name' => 'submit', 'value' => 'send']);
                ?>
                </td>
            </tr>
        </table>
    </form>
  </div><!--/span-->
</div><!--/row-->
