<div class="leftmenu">        
    <ul class="nav nav-tabs nav-stacked">
        <li class="active"><a href="#"><span class="iconfa-home"></span>Teacher Dashboard</a></li>
         
    <li class="dropdown"><a href="#"><span class="iconfa-book"></span> Courses</a>
            <ul>
                <li><?php echo CHtml::link('View Assigned Courses',array('')); ?></li>          
                  <li><?php echo CHtml::link('View Syllabus',array('')); ?></li>
                  <li><?php echo CHtml::link('View Enrolled Students',array('')); ?></li> 
            </ul>
        </li>
        <li class="dropdown"><a href="#"><span class="iconfa-cog"></span> Attendance</a>
            <ul>
                  <li><?php echo CHtml::link('Add Attendance',array('')); ?></li>
                    <li><?php echo CHtml::link('View Attendance',array('')); ?></li>
            </ul>
        </li>
            <li class="dropdown"><a href="#"><span class="iconfa-cog"></span> Marks</a>
            <ul>
                  <li><?php echo CHtml::link('Add Marks',array('')); ?></li>
                    <li><?php echo CHtml::link('View Marks',array('')); ?></li>
            </ul>
        </li>
             <li>
            <a href="#"><span class="iconfa-envelope"></span> Messages</a>
        </li>
        <li class="dropdown"><a href="#"> <span class="iconfa-book"></span> Assignments</a>
            <ul>   
            <li>
                <?php echo CHtml::link('Add Assignment',array('')); ?>
            </li>
           <li>
               <?php echo CHtml::link('View Assignments',array('')); ?>
           </li>
            </ul>
            </li>
        <li>
            <a href="#"><span class="iconfa-bar-chart"></span> Assessments</a>
        </li>
        <li>
            <a href="#"><span class="iconfa-question-sign"></span> Forum</a>
        </li>
        <li>
            <a href="#"><span class="iconfa-question-sign"></span> FAQS</a>
        </li>
        <li class="dropdown"><a href="#"><span class="iconfa-cog"></span> Settings</a>
         <ul>
                <li><?php echo CHtml::link('View Profile',array('course/admin')); ?></li>
                <li><?php echo CHtml::link('Update Profile',array('course/create')); ?></li>
                <li><?php echo CHtml::link('Office Hours',array('course/create')); ?></li>
             
            </ul>
        </li>
        <li class="empty-nav"><a href="#"></a></li>
        <li><a href="<?php echo Yii::app()->baseUrl; ?>/user/logout"><span class="iconfa-signout"></span> Sign Out</a></li>
    </ul>
</div><!--leftmenu-->
