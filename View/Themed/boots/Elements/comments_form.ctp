<div class="comment-form well">
	<h3><?php echo __('Add New Comment'); ?></h3>
	<?php
		$type = $types_for_layout[$node['Node']['type']];

		if ($this->params['controller'] == 'comments') {
			$nodeLink = $this->Html->link(__('Go back to original post') . ': ' . $node['Node']['title'], $node['Node']['url']);
			echo $this->Html->tag('p', $nodeLink, array('class' => 'back'));
		}

		$formUrl = array(
			'controller' => 'comments',
			'action' => 'add',
			$node['Node']['id'],
		);
		if (isset($parentId) && $parentId != null) {
			$formUrl[] = $parentId;
		}

		echo $this->Form->create('Comment', array('url' => $formUrl, 'class' => 'form-inline'));
			if ($this->Session->check('Auth.User.id')) {
				echo $this->Form->input('Comment.name', array(
					'label' => __('Name:    '),
					'value' => $this->Session->read('Auth.User.name'),
					'readonly' => 'readonly', 'class' => 'form-control'
				));
				echo $this->Form->input('Comment.email', array(
					'label' => __('Email:     '),
					'value' => $this->Session->read('Auth.User.email'),
					'readonly' => 'readonly', 'class' => 'form-control'
				));

				echo $this->Form->input('Comment.website', array(
					'label' => __('Website: '),
					'value' => $this->Session->read('Auth.User.website'),
					'readonly' => 'readonly', 'class' => 'form-control'
                                        
				));

				echo '<br />';

				echo $this->Form->input('Comment.body', array('label' => false, 'style' => 'width:95%;', 'class' => 'form-control'));
			} else {
				echo $this->Form->input('Comment.name', array(
					'label' => __('Name:    '), 
					'class' => 'form-control'
				));
				echo $this->Form->input('Comment.email', array(
					'label' => __('Email:     '),
					'class' => 'form-control'
				));
				echo $this->Form->input('Comment.website', array(
					'label' => __('Website: '),
					'class' => 'form-control'
				));

				echo '<br />';

				echo $this->Form->input('Comment.body', array(
					'label' => false, 
					'style' => 'width:95%;',
					'class' => 'form-control'
				));
			}

			if ($type['Type']['comment_captcha']) {
				echo $this->Recaptcha->display_form();
			}

		 echo '<br />';

		 echo $this->Form->submit('Post Comment', array('class' => 'btn btn-success'));
                echo $this->Form->end();
	?>
</div>