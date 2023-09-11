<?php
// heredoc
$text = <<<TEXT
LINE 1
LINE 2
LINE 3
TEXT;

echo nl2br($text);

// nowdoc
$text = <<<'TEXT'
LINE 1
LINE 2
LINE 3
TEXT;

?>