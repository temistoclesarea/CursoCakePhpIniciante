<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message" style="background:yellow" onclick="this.classList.add('hidden')"><?= $message ?></div>
