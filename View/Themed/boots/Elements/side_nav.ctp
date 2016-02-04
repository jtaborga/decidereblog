<div id="main-sidebar" class="main-sidebar ">
    <nav>
		<ul class="ul-sidenav-btn-close">
			<li>
				<a href="javascript:void(0);" class="close-sb">
				  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
			</li>
		</ul>
        <ul class="ul-sidenav">
            <?php if($viewName == 'About'){ ?>
            <li>
            <a href="../decidere/#top" onclick="scrollTo('#top');" class="close-sb">HOME</a>
            <?php /*echo $this->Html->link('HOME', array('controller' => 'Home', 'action' => 'index', '#'=>'top'), array('class'=>'close-sb'));*/ ?>
            </li>
            <?php if($this->Session->read('Auth.User.role')=='2') { ?>
                <li><?php echo $this->Html->link('MY DASHBOARD', array('controller' => 'Admin', 'action' => 'dashboard'), array('class'=>"close-sb")); ?></li>
            <?php } ?>
            <li>
            <a href="../../decidere/About" class="close-sb">ABOUT</a>
            <?php /*echo $this->Html->link('ABOUT' , array('controller' => 'About', 'action' => 'index'));*/ ?>
            </li>
            <li>
            <a href="../decidere/#dataset" onclick="scrollTo('#dataset');" class="close-sb">DATASETS</a>
            <?php /*echo $this->Html->link('DATASETS', array('controller' => 'Home', 'action' => 'index', '#'=>'dataset') );*/ ?>
            </li>
            <!--a href="javascript:void(0);" onclick="scrollTo('#overview');">NEWS</a-->
            <li>
            <a href="../../decidereblog" class="close-sb">NEWS</a>
            <?php /*echo $this->Html->link('NEWS', array('controller' => 'Home', 'action' => 'index') );*/ ?>
            </li>
            <li>
            <a href="../../decidere/Help/faq" class="close-sb">FAQ</a>
            <?php /*echo $this->Html->link('FAQ', array('controller' => 'Help', 'action' => 'faq') );*/ ?>
            </li>
            <!--li><a href="javascript:void(0);" onclick="scrollTo('#dataset');" class="close-sb">DATASETS</a></li>
            <li><a href="javascript:void(0);" onclick="scrollTo('#story');" class="close-sb">STORY</a></li>
            <li><a href="javascript:void(0);"  onclick="scrollTo('#people');"class="close-sb">PEOPLE</a></li-->
            <li>
            <a href="../../decidere/Register" class="close-sb">JOIN</a>
            <?php /*echo $this->Html->link('JOIN', array('controller' => 'Register', 'action' => 'index'), array('class'=>"close-sb"));*/ ?>
            </li>            
            <?php } else { ?>
            <li>
            <a href="../../decidere/" onclick="scrollTo('#top');" class="close-sb">HOME</a>
            <?php /*echo $this->Html->link('HOME', array('controller' => 'Home', 'action' => 'index', '#'=>'top'), array('class'=> 'close-sb'));*/ ?>
            </li>
            <?php if($this->Session->read('Auth.User.role')=='2') { ?>
                <li>
                <a href="/decidereblog/Admin/dashboard">MY DASHBOARD</a>
                <?php /*echo $this->Html->link('MY DASHBOARD', array('controller' => 'Admin', 'action' => 'dashboard'), array('class'=>"close-sb"));*/ ?>
                </li>
            <?php } ?>
            <li>
            <a href="../../decidere/About" class="close-sb">ABOUT</a>
            <?php /*echo $this->Html->link('ABOUT' , array('controller' => 'About', 'action' => 'index'));*/ ?>
            </li>
            <li>
            <a href="../decidere/#dataset" onclick="scrollTo('#dataset');" class="close-sb">DATASETS</a>
           <?php /*echo $this->Html->link('DATASETS', array('controller' => 'Home', 'action' => 'index', '#'=>'dataset'), array('class'=>"close-sb")) ;*/ ?>
            </li>
            <li>
            <a href="../../decidereblog" class="close-sb">NEWS</a>
            <?php /*echo $this->Html->link('NEWS', array('controller' => 'Home', 'action' => 'index'), array('class'=>"close-sb") );*/ ?>
            </li>
            <li>
             <a href="../../decidere/Help/faq" class="close-sb">FAQ</a>
             <?php /*echo $this->Html->link('FAQ', array('controller' => 'Help', 'action' => 'faq') );*/ ?>
            </li>        
            <!--li><a href="javascript:void(0);" onclick="scrollTo('#dataset');" class="close-sb">DATASETS</a></li-->
            <!--li> <?php /*echo $this->Html->link('STORY', array('controller' => 'About', 'action' => 'index', 'story'), array('class'=>'close-sb') );*/ ?></li-->
            <li><?php /*echo $this->Html->link('PEOPLE', array('controller' => 'About', 'action' => 'index', 'people'), array('class'=>'close-sb') );*/ ?></li>
            <li> 
            <a href="../../decidere/Register" class="close-sb">JOIN</a>
            <?php /*echo $this->Html->link('JOIN', array('controller' => 'Register', 'action' => 'index'), array('class'=>"close-sb"));*/ ?>
            </li>
            <?php } ?>
        </ul>
        <ul class="ul-sidenav-second">
            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#modal-contact" class="close-sb">CONTACT</a></li>
            <?php if($this->Session->read('Auth.User.role')=='2') { ?>
	            <li> <?php echo $this->Html->link('LOGOUT', array('controller' => 'Admin', 'action' => 'logout'), array('class'=>"close-sb")); ?></li>
		    <?php } else { ?>
            	<li>
                <a href="/decidereblog/admin/" class="close-sb">LOGIN</a>
                <!--a href="javascript:void(0);"  data-toggle="modal" data-target="#myModal" class="close-sb">LOGIN</a-->
                <?php /*echo $this->Html->link('LOGIN', array('controller' => 'admin', 'action' => 'users'), array('class'=>"close-sb"));*/ ?>
                </li>
		    <?php } ?>
        </ul>
    </nav>
</div>