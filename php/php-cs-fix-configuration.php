<?php

require_once __DIR__ . '/vendor/tareq1988/wp-php-cs-fixer/loader.php';

/* bare minimum required configuration file */
$finder = (new PhpCsFixer\Finder())
  ->exclude('vendor')
  ->exclude('node_modules')
  ->in(__DIR__)
;

return (new PhpCsFixer\Config())
  //->registerCustomFixers($ruleset->getCustomFixers())
  //->setRiskyAllowed($ruleset->isRisky())
  //->setIndent("\t")
  ->registerCustomFixers([
    new WeDevs\Fixer\SpaceInsideParenthesisFixer(),
    new WeDevs\Fixer\BlankLineAfterClassOpeningFixer()
  ])
  ->setRules(WeDevs\Fixer\Fixer::rules())
  /*
  ->setRules([
    //'@PER-CS' => true,
    //'@PSR12' => true,
    //'@PHP82Migration' => true,
  ])
  */
  /*
  ->setRules(array_merge(
      $ruleset->getRules()
  ))
  */

  ->setFinder($finder);
