<?php

// require __DIR__.'/vendor/autoload.php';

//$ruleset = new vena\WordPress\PhpCsFixer\WordPressRuleSet();

/* bare minimum required configuration file */
$finder = (new PhpCsFixer\Finder())->exclude('vendor')->in(__DIR__);
return (new PhpCsFixer\Config())
  //->registerCustomFixers($ruleset->getCustomFixers())
  //->setRiskyAllowed($ruleset->isRisky())
  //->setIndent("\t")
  ->setRules([
    //'@PER-CS' => true,
      '@PSR12' => true,
      '@PHP82Migration' => true,
  ])
  /*
  ->setRules(array_merge(
      $ruleset->getRules()
  ))
  */
  ->setFinder($finder);
