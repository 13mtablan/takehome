<!DOCTYPE html>

<html>
    <?php $page_title='Payment Information';
          $step = 'Step 3 of 4';
          $step_name = 'Payment';
          include('header.php');?>

    <div class="info-form-container">
        <form class="info-form" action='index.php' method='post'>
            <p class="info-form--text">
                PERSONAL INFO
            </p>
            <div class="info-form--fields">
                <div class="row">
                        <div class="info-form-input-group">
                                <label for="f_name">FIRST NAME</label>
                                <input type="text" name="f_name" value="<?php if(isset($_POST['f_name'])) echo $_POST['f_name'];?>">
                        </div>
                        <div class="info-form-input-group">
                                <label for="l_name">LAST NAME</label>
                                <input type="text" name="l_name" value="<?php if(isset($_POST['l_name'])) echo $_POST['l_name'];?>">
                        </div>
                </div>
                <div class="row">
                        <div class="info-form-input-group">
                                <label for="email">EMAIL</label>
                                <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
                        </div>
                        <div class="info-form-input-group">
                                <label for="phone-number">PHONE NUMBER</label>
                                <input type="text" name="phone-number" value="<?php if(isset($_POST['phone-number'])) echo $_POST['phone-number'];?>">
                        </div>
                </div>
                <div class="row">
                        <div class="info-form-input-group">
                                <label for="address">ADDRESS</label>
                                <input type="text" name="address" value="<?php if(isset($_POST['address'])) echo $_POST['address'];?>">
                        </div>
                </div>
                <div class="row">
                        <input type="submit" value="SUBMIT" class="submit-btn"> 
                </div>
                
            <?php
                    if($_SERVER['REQUEST_METHOD']=='POST'){
                        $errors = array();
                        if(empty($_POST['f_name']))
                        {
                            $errors[] = 'first Name';
                        }
                        if(empty($_POST['l_name']))
                        {
                            $errors[]='last Name';
                        }
                        if(empty($_POST['email']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
                        {
                            $errors[]='email';
                        }
                        if(empty($_POST['phone-number']) || !filter_var($_POST['phone-number'],FILTER_VALIDATE_INT))
                        {
                            $errors[] = "phone number";
                        }
                        if(empty($_POST['address']))
                        {
                            $errors[]="address";
                        }
                        if(!empty($errors))
                        {
                            echo '<div class="row"><div class="error">An error occured on the following fields:';
                            foreach($errors as $reason)
                            {
                                
                                echo "$reason ";
                            }
                            echo '</div>
                                  </div>';
                        }
                        else {
                            require('connect_sql.php');
                            $stmt = $db->prepare("INSERT INTO personal_info (first_name,last_name,email,phone,home_address) VALUES (?,?,?,?,?) ");
                            if(!($stmt->bind_param("sssis",$_POST['f_name'],$_POST['l_name'],$_POST['email'],$_POST['phone-number'],$_POST['address'])))
                            {
                                echo '<div class="row"><div class="error">An Error occured please try again.</div></div';
                            }
                            if(!($stmt->execute())){
                                echo '<div class="row">An Error occured please try again.</div></div>';
                            }
                            
                            if($stmt->affected_rows == 1){
								 header('Location: '.get_home_url().'/success');
										
                            }

                        }
                        
                }
            ?>
            
            </div>

        </form>
        <div class="info__membership-rates">
            <h4 class="info__membership-rates--text">TRIBECA MEMBERSHIP</h4>
            <ul>
                <li>
                    Current Month Dues (Prorated) <span>$180.00</span>
                </li>
                <li>
                    Initiation Fee <span>$300.00</span>
                </li>
                <li>
                    Facilities Upkeep <span>$50.00</span>
                </li>
                <li>
                    Mandatory Donation <span>$100.00</span>
                </li>
            </ul>
        </div>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>