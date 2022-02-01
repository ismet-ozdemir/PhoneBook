<?php
if(isset($this->post['id'])){
    $this->delete('contents', $this->post['id']);
}
$this->redirect('contents');