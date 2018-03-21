<!DOCTYPE html>
<html>
<head>
  <title>Make Trip</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
      body{
        font-family: century gothic;
        background-color: black;
       
      }
      .container{
        padding: 20px;
        margin-top: 20px;
        border-radius: 5px;
      }
     
  </style>
</head>
<body>
      <a href="<?php echo base_url('dashboard/viewtrips'); ?>" class="btn btn-danger btn-lg">Back</a>
  <div class="container" style="text-align:center;background-color: white; width: 50%">
    <h1>About the Tour Organizer</h1>
    <?php if($leader):?>
      <?php foreach($leader as $accs):?>
        <div class="row">
          <label class="col-md-6 text-right" style="font-weight: bold">Username: </label>
          <label class="col-md-6 text-left"><?php echo $accs->username;?></label>
          <br/>
        </div>
         <div class="row">
           <label class="col-md-6 text-right" style="font-weight: bold">Full Name: </label>
           <label class="col-md-6 text-left"><?php echo $accs->first_name;?> <?php echo $accs->middle_initial;?> <?php echo $accs->last_name;?></label> 
          <br/>
        </div>
         <div class="row">
           <label class="col-md-6 text-right" style="font-weight: bold">Full Address: </label>
              <label class="col-md-6 text-left"><?php echo $accs->full_address;?></label>
            <br/>
        </div>
        <div class="row">
           <label class="col-md-6 text-right" style="font-weight: bold">Contact Number: </label>
           <label class="col-md-6 text-left"><?php echo $accs->contact_number;?></label>
         <br/>
       </div>
        <div class="row">
           <label class="col-md-6 text-right" style="font-weight: bold">Email Address: </label>
           <label class="col-md-6 text-left"><?php echo $accs->email_address;?></label>
        <br/>
      </div>
       <div class="row">
           <label class="col-md-6 text-right" style="font-weight: bold">Email Address: </label>
           <label class="col-md-6 text-left"><?php echo $accs->birthdate;?></label>
           <br/>
        </div>
      <?php endforeach;?>
    <?php endif;?>
    
  </div>

  <?php $countmem=0?>
  <?php if($members):?>
    <?php foreach($members as $mem):?>
      <?php if($mem->restriction!='leader'):?>
        <?php $countmem++?>
      <?php endif;?>
    <?php endforeach;?>
  <?php endif;?>

    <div class="container" style="background-color: white">
      <?php if($tours):?>
        <?php foreach($tours as $post):?>
          <div class="row">
            <h1 class="col-md-12" style="text-align: center"><?php echo $post->tourname?></h1>
          </div>
          <div class="row">
            <label class="col-md-6 text-right">Destination:</label>
            <label class="col=md-6 text-left"><?php echo $post->destination?></label>
          </div>
          <div class="row">
            <label class="col-md-6 text-right">Meeting Place:</label>
            <label class="col=md-6 text-left"><?php echo $post->origin?></label>
          </div>
          <div class="row">
            <label class="col-md-6 text-right">When:</label>
            <label class="col=md-6 text-left"><?php echo $post->tourdate?></label>
          </div>
          <?php $occupied = $post->tourparticipant?>
          <?php $remaining=$occupied-$countmem?>
          <div class="row">
            <label class="col-md-6 text-right">Remaining Slots:</label>
            <label class="col=md-6 text-left"><?php echo $remaining?></label>
          </div>
          <?php $var=$post->tourfee?>
          <?php $var2=$post->tourparticipant?>
          <?php $var3=$var/$var2;?>
          <div class="row">
            <label class="col-md-6 text-right">Join Fee:</label>
            <label class="col=md-6 text-left"><?php print_r($var3);?></label>
          </div>
          <div class="row">
            <label class="col-md-6 text-right">Itinerary:</label>
            <label class="col=md-6 text-left"><?php echo $post->touritinerary?></label>
          </div>
        <?php endforeach;?>
      <?php endif;?>
    </div>

    <div class="container" style="background-color: white; width: 50%;text-align: center">
      <?php $var=0?><h4 style="text-align: center">MEMBERS</h4><hr/>
        <?php if($members):?>
          <?php foreach($members as $mem):?>
            <?php if($mem->restriction!='leader'):?>
              <label style="color: red; font-weight: bold; "> - <?php echo $mem->members?></label>
            <?php endif;?>
            <?php if($mem->restriction=='member'):?>
              <?php $var++;?>
            <?php endif;?>
          <?php endforeach;?>
        <?php endif;?>
        <?php if($var==0):?>
          <label>No Members Yet!</label>
        <?php endif;?>
     
  </div>

    <div class="container" style="background-color: white">
      <?php $coms=0;?>
      <?php if($comment):?>
        <?php foreach($comment as $com):?>
          <div class="row">
            <label class="col-md-2 text-right" style="color: red"><?php echo $com->username?>:</label>
            <label class="col-md-10 "><?php echo $com->comment?></label>
            
            <?php $coms++?>
          </div><hr/>
        <?php endforeach;?>
      <?php endif;?>
      <?php if($coms==0):?>
          <label>No Comments Yet!</label>
      <?php endif;?>


      <?php $value=0?>
      <?php foreach($tours as $wew):?>
        <?php $value = $wew->tripIdNumber?>
      <?php endforeach;?> 
      <?php echo form_open('comment/addcommentmember');?>
      <br/>
    <input type="hidden" name="comment_name" value="<?php echo $this->session->userdata('post_name');?>">
    <input type="hidden" name="tripIdNumber" value="<?php echo $value?>">
    <?php foreach($leader as $lead):?>
        <input type="hidden" name="leader" value="<?php echo $lead->username?>">
    <?php endforeach;?>    
      <div class="row">
        <div class="col-md-1"></div>
        <input class="col-md-9" type="text" name="comment" placeholder="add comment here">
        <div class="col-md-2">
                    <input type="submit" name="insert" value="Add Comment" class="btn btn-primary btn-sm" />  
        </div>
      </div>
      </form>
  </div>



</body>
</html>