<?php

/* bare minimum required configuration file */
$finder = (new PhpCsFixer\Finder())->in(__DIR__);
return (new PhpCsFixer\Config())
  ->setRules([
    //'@PER-CS' => true,
      '@PSR12' => true,
      '@PHP82Migration' => true,
  ])
  ->setFinder($finder);
