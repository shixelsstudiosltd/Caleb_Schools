<div class="leftmenu">        
    <ul class="nav nav-tabs nav-stacked">
        <li class="active"><a href="#"><span class="iconfa-home"></span>Admin Dashboard</a></li>
         <li class="dropdown"><a href="#"><span class="iconfa-book"></span>Manage Users</a>
            <ul>
                <li><?php echo CHtml::link('Add User',array('')); ?></li>          
                  <li><?php echo CHtml::link('Manage Users',array('')); ?></li>        
                
            </ul>
        </li>
    <li class="dropdown"><a href="#"><span class="iconfa-book"></span> Courses</a>
            <ul>
                <li><?php echo CHtml::link('Manage Courses',array('')); ?></li>          
                  <li><?php echo CHtml::link('Add Courses',array('')); ?></li>
                
            </ul>
        </li>
        <li class="dropdown"><a href="#"><span class="iconfa-cog"></span> Attendance</a>
          <ul>
                 <li><?php echo CHtml::link('Manage Attendance',array('')); ?></li>                      
            </ul>
        </li>
          <li class="dropdown"><a href="#"> <span class="iconfa-book"></span> Assignments</a>
            <ul>   
        
           <li>
               <?php echo CHtml::link('Manage Assignments',array('')); ?>
           </li>
            </ul>
            </li>
        <li><a href="#"><span class="iconfa-cog"></span>Marks</a>   
        </li>
             <li>
            <a href="#"><span class="iconfa-envelope"></span> Messages</a>
        </li>
        <li>
            <a href="#"><span class="iconfa-question-sign"></span> FAQS</a>
        </li>
        <li class="dropdown"><a href="#"><span class="iconfa-cog"></span> Settings</a>
         <ul>
                <li><?php echo CHtml::link('View Profile',array('course/admin')); ?></li>
                <li><?php echo CHtml::link('Update Profile',array('course/create')); ?></li>   
            </ul>
        </li>
        <li class="empty-nav"><a href="#"></a></li>
        <li><a href="<?php echo Yii::app()->baseUrl; ?>/user/logout"><span class="iconfa-signout"></span> Sign Out</a></li>
    </ul>
</div><!--leftmenu-->
