
<?php
echo $this->Form->create('Upload', array('type' => 'file', 'url' => array('controller' => 'upload', 'action' => $this->action)));
echo $this->Form->input('file', array('type' => 'file'));
echo $this->Form->input('file2', array('type' => 'file'));
echo $this->Form->end('Upload');